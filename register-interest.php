<?php
ob_start();
/**
 * Register Interest — Book pre-registration handler
 * Saves name + email to the SCA database (sca_global.book_interest table).
 */

$site_mode = "dev";

if ($site_mode === "live") {
    $config = require __DIR__ . '/../config/sca-live-db.php';
} else {
    $config = require __DIR__ . '/../config/sca-dev-db.php';
}


// Determine which page referred the user
$source   = trim($_POST['source'] ?? 'landing');
$redirect = $source === 'landing' ? 'sea-of-deception.php' : 'book.php';

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: $redirect#register");
    exit;
}

// Honeypot check (spam bot trap)
if (!empty($_POST['website'])) {
    header("Location: $redirect?registered=1#register");
    exit;
}

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');

// Validate required fields
if ($name === '' || $email === '') {
    header("Location: $redirect?error=missing#register");
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: $redirect?error=email#register");
    exit;
}

// Sanitise
$name  = substr($name, 0, 255);
$email = strtolower(substr($email, 0, 255));

// Connect to SCA database
try {
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";

    $pdo = new PDO($dsn, $config['username'], $config['password'], [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

    // Check if email already registered
    $stmt = $pdo->prepare('SELECT id FROM book_interest WHERE email = ?');
    $stmt->execute([$email]);

    if (!$stmt->fetch()) {
        // Insert new registration
        $stmt = $pdo->prepare('INSERT INTO book_interest (name, email, source) VALUES (?, ?, ?)');
        $stmt->execute([$name, $email, 'i-cadmus']);
    }

    // Redirect back with success
    header("Location: $redirect?registered=1#register");
    exit;

} catch (PDOException $e) {
    // Log the error for debugging
    $logFile = __DIR__ . '/data/register-errors.log';
    $logDir  = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    file_put_contents($logFile, date('Y-m-d H:i:s') . ' | ' . $e->getMessage() . "\n", FILE_APPEND);

    header("Location: $redirect?error=server#register");
    exit;
}
