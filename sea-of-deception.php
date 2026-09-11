<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sea of Deception — Register Your Interest | I-CADMUS</title>
<meta name="description" content="Sea of Deception by Roy D. Palmer, MBA — publishing soon. Register your interest to be notified when this groundbreaking book on seafood fraud is available." />
<meta property="og:title" content="Sea of Deception — Publishing Soon" />
<meta property="og:description" content="Understanding Seafood Fraud and Rebuilding Consumer Trust. By Roy D. Palmer, MBA." />
<meta property="og:type" content="book" />
<meta property="og:image" content="assets/img/book-cover.webp" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600;8..60,700&display=swap" rel="stylesheet">

<style>
  :root {
    --brand: #003a5d;
    --brand-dark: #002940;
    --brand-light: #0a4f7a;
    --accent: #c8102e;
    --accent-dark: #9e0c24;
    --teal: #00838f;
    --gold: #b8870b;
    --coral: #ff6b6b;
    --ink: #1c2127;
    --ink-2: #3d434d;
    --ink-3: #5c6470;
    --muted: #8a929c;
    --line: #e5e8ec;
    --bg: #ffffff;
    --bg-soft: #f6f8fa;
    --sans: 'Source Sans 3', -apple-system, 'Segoe UI', sans-serif;
    --serif: 'Source Serif 4', Georgia, serif;
    --shadow-md: 0 4px 12px rgba(0,25,50,.08), 0 2px 4px rgba(0,25,50,.04);
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    font-family: var(--sans);
    color: #fff;
    background: var(--brand);
    font-size: 16px;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
  }
  a { color: inherit; text-decoration: none; }
  img { display: block; max-width: 100%; }

  .wrap { max-width: 1100px; margin: 0 auto; padding: 0 32px; }

  /* ── SITE HEADER & FOOTER (same as all other pages) ── */
  .container { max-width: 1320px; margin: 0 auto; padding: 0 32px; }
  .utility-bar {
    background: var(--brand-dark); color: rgba(255,255,255,.85); font-size: 13px;
    border-bottom: 1px solid rgba(255,255,255,.08);
  }
  .utility-bar .container {
    display: flex; justify-content: space-between; align-items: center; height: 38px;
  }
  .utility-bar a {
    color: rgba(255,255,255,.85); transition: color .15s;
    padding: 0 14px; border-right: 1px solid rgba(255,255,255,.12); line-height: 38px;
  }
  .utility-bar a:last-child { border-right: none; }
  .utility-bar a:hover { color: #fff; }
  .utility-locale { display: flex; align-items: center; gap: 8px; }
  .utility-locale select {
    background: transparent; border: none; color: rgba(255,255,255,.85);
    font-family: inherit; font-size: 13px; cursor: pointer;
  }
  .utility-locale select option { background: var(--brand-dark); }
  .header {
    background: #fff; border-bottom: none;
    position: sticky; top: 0; z-index: 100;
    box-shadow: 0 1px 2px rgba(0,25,50,.06), 0 1px 3px rgba(0,25,50,.04);
  }
  .header .container {
    display: flex; align-items: center; height: 76px; gap: 40px;
  }
  .brand {
    display: flex; align-items: center; gap: 12px;
    font-weight: 700; font-size: 22px; color: var(--brand);
    letter-spacing: -.01em; flex-shrink: 0;
  }
  .logo { height: 50px; width: auto; }
  .nav-primary { display: flex; gap: 4px; flex: 1; }
  .nav-primary > li { list-style: none; position: relative; }
  .nav-primary > li > a {
    display: flex; align-items: center; gap: 6px; height: 76px; padding: 0 16px;
    font-size: 15px; font-weight: 500; color: var(--ink-2);
    border-bottom: 3px solid transparent; transition: color .15s, border-color .15s;
  }
  .nav-primary > li > a:hover { color: var(--brand); border-bottom-color: var(--accent); }
  .nav-primary > li > a .chev { font-size: 10px; margin-top: 2px; transition: transform .2s; }
  .nav-primary > li:hover > a .chev { transform: rotate(180deg); }
  .nav-mega {
    position: absolute; top: 100%; left: 0; background: #fff;
    box-shadow: 0 12px 32px rgba(0,25,50,.10), 0 4px 12px rgba(0,25,50,.06);
    border: 1px solid var(--line); border-top: 3px solid var(--accent);
    min-width: 520px; padding: 24px;
    opacity: 0; visibility: hidden; transform: translateY(8px);
    transition: opacity .2s, transform .2s, visibility .2s; z-index: 50;
  }
  .nav-primary > li:hover .nav-mega { opacity: 1; visibility: visible; transform: translateY(0); }
  .nav-mega-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 24px; }
  .nav-mega a {
    display: block; padding: 10px 12px; border-radius: 4px;
    font-size: 14px; color: var(--ink-2); transition: background .15s, color .15s;
  }
  .nav-mega a:hover { background: var(--bg-soft); color: var(--brand); }
  .nav-mega a strong { display: block; font-weight: 600; color: var(--ink); margin-bottom: 2px; font-size: 14px; }
  .nav-mega a span { color: var(--ink-3); font-size: 12px; }
  .header-tools { display: flex; align-items: center; gap: 12px; }
  .header-search {
    width: 38px; height: 38px; border-radius: 50%; background: var(--bg-soft);
    display: grid; place-items: center; color: var(--ink-2); transition: background .15s;
  }
  .header-search:hover { background: var(--bg); }
  .btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 11px 22px; font-size: 14px; font-weight: 600; border-radius: 2px;
    transition: all .15s; cursor: pointer; border: 1px solid transparent;
    line-height: 1.2; white-space: nowrap;
  }
  .btn-primary { background: var(--accent); color: #fff; border-color: var(--accent); }
  .btn-primary:hover { background: var(--accent-dark); border-color: var(--accent-dark); }
  .btn-secondary { background: var(--brand); color: #fff; border-color: var(--brand); }
  .btn-secondary:hover { background: var(--brand-dark); }
  .btn-outline { background: transparent; color: var(--brand); border-color: var(--brand); }
  .btn-outline:hover { background: var(--brand); color: #fff; }
  .btn-lg { padding: 14px 28px; font-size: 15px; }
  .btn .arrow { font-size: 12px; }

  footer {
    background: #1a1d22; color: rgba(255,255,255,.75); padding: 80px 0 0; font-size: 14px;
  }
  .footer-top {
    display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr; gap: 40px;
    padding-bottom: 56px; border-bottom: 1px solid rgba(255,255,255,.08);
  }
  .footer-brand { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; }
  .footer-desc { color: rgba(255,255,255,.65); line-height: 1.55; margin-bottom: 24px; max-width: 36ch; }
  .footer-social { display: flex; gap: 8px; margin-top: 20px; }
  .footer-social a {
    width: 36px; height: 36px; border-radius: 50%;
    background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.12);
    display: grid; place-items: center; color: rgba(255,255,255,.7);
    font-size: 13px; font-weight: 700; transition: background .2s, color .2s;
  }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }
  .footer-col h5 { color: #fff; font-size: 14px; font-weight: 600; margin-bottom: 18px; letter-spacing: .02em; }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 10px; }
  .footer-col a { color: rgba(255,255,255,.65); transition: color .15s; }
  .footer-col a:hover { color: #fff; }
  .footer-bottom {
    display: grid; grid-template-columns: 1fr auto; gap: 32px; padding: 32px 0;
    align-items: center; color: rgba(255,255,255,.5); font-size: 13px;
  }
  .footer-bottom-links { display: flex; gap: 24px; flex-wrap: wrap; }
  .footer-bottom-links a:hover { color: #fff; }

  /* ── HERO ── */
  .hero {
    padding: 56px 0 64px;
  }
  .hero-grid {
    display: grid;
    grid-template-columns: 420px 1fr;
    gap: 72px;
    align-items: center;
  }
  .hero-book {
    position: relative;
    display: flex;
    justify-content: center;
  }
  .hero-book img {
    width: 360px;
    border-radius: 4px;
    box-shadow:
      -30px 30px 80px rgba(0,0,0,.35),
      0 4px 16px rgba(0,0,0,.2);
    transform: perspective(900px) rotateY(8deg);
    transition: transform .5s ease;
  }
  .hero-book:hover img {
    transform: perspective(900px) rotateY(3deg) scale(1.02);
  }
  .hero-text h1 {
    font-family: var(--serif);
    font-size: clamp(32px, 4vw, 46px);
    font-weight: 600;
    line-height: 1.15;
    margin-bottom: 20px;
    color: #fff;
  }
  .hero-text > p {
    font-size: 17px;
    color: rgba(255,255,255,.72);
    line-height: 1.65;
    margin-bottom: 36px;
    max-width: 480px;
  }
  .hero-ctas {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .hero-cta-row {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-width: 200px;
    padding: 15px 32px;
    border-radius: 6px;
    font-family: var(--sans);
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all .2s;
    border: 2px solid transparent;
    text-align: center;
  }
  .cta-primary {
    background: var(--accent);
    color: #fff;
    border-color: var(--accent);
  }
  .cta-primary:hover {
    background: var(--accent-dark);
    border-color: var(--accent-dark);
  }
  .cta-secondary {
    background: transparent;
    color: #fff;
    border-color: rgba(255,255,255,.4);
  }
  .cta-secondary:hover {
    border-color: #fff;
    background: rgba(255,255,255,.08);
  }
  .cta-info {
    font-size: 14px;
    color: rgba(255,255,255,.5);
    line-height: 1.4;
  }
  .cta-info strong {
    display: block;
    color: rgba(255,255,255,.85);
    font-weight: 600;
    font-size: 15px;
  }

  /* ── DIVIDER ── */
  .divider {
    display: none;
  }

  /* ── WHAT'S INSIDE ── */
  .inside {
    padding: 64px 0;
  }
  .inside-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: center;
  }
  .inside h2 {
    font-family: var(--serif);
    font-size: clamp(30px, 3.5vw, 42px);
    font-weight: 600;
    color: #fff;
    margin-bottom: 16px;
    line-height: 1.15;
  }
  .inside-intro {
    font-size: 16px;
    color: var(--coral);
    line-height: 1.6;
    margin-bottom: 28px;
  }
  .inside-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .inside-list li {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    font-size: 17px;
    color: rgba(255,255,255,.88);
    line-height: 1.5;
  }
  .inside-list li::before {
    content: '';
    width: 8px;
    height: 8px;
    background: var(--coral);
    border-radius: 50%;
    flex-shrink: 0;
    margin-top: 8px;
  }
  /* Book carousel — auto-rotates between front and back */
  .book-carousel {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 420px;
    perspective: 1200px;
  }
  .book-rotator {
    width: 260px;
    height: 390px;
    position: relative;
    transform-style: preserve-3d;
    animation: bookSpin 8s ease-in-out infinite;
  }
  @keyframes bookSpin {
    0%   { transform: rotateY(0deg); }
    30%  { transform: rotateY(0deg); }
    50%  { transform: rotateY(180deg); }
    80%  { transform: rotateY(180deg); }
    100% { transform: rotateY(360deg); }
  }
  .book-rotator:hover {
    animation-play-state: paused;
  }
  .book-face {
    position: absolute;
    inset: 0;
    backface-visibility: hidden;
    border-radius: 6px;
    overflow: hidden;
  }
  .book-face img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 6px;
  }
  .book-face-front {
    z-index: 2;
    box-shadow:
      0 20px 50px rgba(0,0,0,.4),
      0 6px 16px rgba(0,0,0,.2);
  }
  .book-face-back {
    transform: rotateY(180deg);
    z-index: 1;
    box-shadow:
      0 20px 50px rgba(0,0,0,.4),
      0 6px 16px rgba(0,0,0,.2);
  }

  /* Spine visible during rotation */
  .book-rotator::before {
    content: none;
  }

  /* Reflection */
  .book-carousel::after {
    content: '';
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 240px;
    height: 60px;
    background: radial-gradient(ellipse, rgba(0,0,0,.25) 0%, transparent 70%);
    filter: blur(12px);
    pointer-events: none;
    animation: reflectionPulse 8s ease-in-out infinite;
  }
  @keyframes reflectionPulse {
    0%, 30%, 80%, 100% { width: 240px; opacity: .8; }
    40%, 60% { width: 300px; opacity: .5; }
  }

  /* Label that shows which side */
  .book-label {
    text-align: center;
    font-size: 12px;
    color: rgba(255,255,255,.35);
    margin-top: 8px;
    letter-spacing: .08em;
    text-transform: uppercase;
    font-weight: 600;
  }

  /* ── REGISTER ── */
  .register {
    padding: 64px 0;
  }
  .register-header {
    text-align: center;
    margin-bottom: 48px;
  }
  .register-header h2 {
    font-family: var(--serif);
    font-size: clamp(28px, 3.5vw, 40px);
    font-weight: 600;
    color: #fff;
    margin-bottom: 12px;
  }
  .register-header p {
    font-size: 17px;
    color: rgba(255,255,255,.55);
  }
  .register-card {
    max-width: 480px;
    margin: 0 auto;
    background: #fff;
    border-radius: 12px;
    padding: 44px 36px;
    color: var(--ink);
    box-shadow: 0 24px 80px rgba(0,0,0,.3);
  }
  .register-card h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 4px;
    text-align: center;
  }
  .register-card > p {
    font-size: 14px;
    color: var(--ink-3);
    margin-bottom: 28px;
    text-align: center;
  }
  .reg-form { display: flex; flex-direction: column; gap: 16px; }
  .reg-form label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: var(--ink-3);
    text-transform: uppercase;
    letter-spacing: .08em;
    margin-bottom: 6px;
  }
  .reg-form input[type="text"],
  .reg-form input[type="email"] {
    width: 100%;
    padding: 13px 16px;
    border: 1px solid var(--line);
    border-radius: 6px;
    font-family: var(--sans);
    font-size: 15px;
    color: var(--ink);
    background: #fff;
    transition: border-color .2s;
  }
  .reg-form input:focus {
    outline: none;
    border-color: var(--brand);
    box-shadow: 0 0 0 3px rgba(0,58,93,.12);
  }
  .reg-submit {
    width: 100%;
    padding: 15px;
    background: var(--accent);
    color: #fff;
    border: none;
    border-radius: 6px;
    font-family: var(--sans);
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: background .2s;
    margin-top: 4px;
  }
  .reg-submit:hover { background: var(--accent-dark); }
  .reg-note {
    font-size: 12px;
    color: var(--muted);
    text-align: center;
    line-height: 1.5;
  }
  .reg-error {
    background: #fef2f2;
    border: 1px solid #fecaca;
    border-radius: 6px;
    padding: 12px 16px;
    font-size: 14px;
    color: #b91c1c;
    margin-bottom: 8px;
  }
  .reg-success { text-align: center; padding: 16px 0; color: var(--ink); }
  .reg-success .tick {
    width: 56px; height: 56px; border-radius: 50%;
    background: #ecfdf5; border: 2px solid var(--teal);
    display: grid; place-items: center;
    margin: 0 auto 20px; font-size: 24px; color: var(--teal);
  }
  .reg-success h4 {
    font-family: var(--serif);
    font-size: 24px; font-weight: 600; color: var(--brand);
    margin-bottom: 10px;
  }
  .reg-success p { font-size: 15px; color: var(--ink-2); line-height: 1.6; }

  /* ── PRAISE / TESTIMONIALS ── */
  .praise {
    padding: 64px 0;
  }
  .praise-header {
    text-align: center;
    margin-bottom: 48px;
  }
  .praise-header h2 {
    font-family: var(--serif);
    font-size: clamp(28px, 3.5vw, 40px);
    font-weight: 600;
    color: #fff;
    margin-bottom: 8px;
  }
  .praise-header p {
    font-size: 16px;
    color: var(--coral);
  }
  .praise-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .praise-card {
    background: #fff;
    border-radius: 10px;
    padding: 28px 24px;
    color: var(--ink);
    transition: transform .25s;
  }
  .praise-card:hover { transform: translateY(-4px); }
  .praise-card-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 16px;
  }
  .praise-card-name {
    font-weight: 700;
    font-size: 15px;
    color: var(--brand);
  }
  .praise-card-role {
    font-size: 13px;
    color: var(--muted);
  }
  .praise-card-icon {
    font-size: 18px;
    color: var(--brand);
    opacity: .4;
  }
  .praise-card p {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.6;
    font-style: italic;
  }



  /* ── RESPONSIVE ── */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
  }
  @media (max-width: 960px) {
    .hero-grid {
      grid-template-columns: 1fr;
      gap: 48px;
      text-align: center;
    }
    .hero-book { order: -1; }
    .hero-book img { width: 260px; transform: perspective(900px) rotateY(0); }
    .hero-text > p { margin-left: auto; margin-right: auto; }
    .hero-ctas { align-items: center; }
    .inside-grid { grid-template-columns: 1fr; gap: 48px; }
    .book-rotator { width: 220px; height: 330px; }
    .book-rotator::before { transform: rotateY(-90deg) translateZ(110px); }
    .praise-grid { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 640px) {
    .wrap { padding: 0 20px; }
    .hero { padding: 48px 0 56px; }
    .hero-book img { width: 200px; }
    .hero-text h1 { font-size: 28px; }
    .cta-btn { min-width: 0; width: 100%; }
    .hero-cta-row { flex-direction: column; gap: 8px; text-align: center; }
    .inside, .register, .praise { padding: 56px 0; }
    .book-rotator { width: 180px; height: 270px; }
    .book-rotator::before { transform: rotateY(-90deg) translateZ(90px); }
    .praise-grid { grid-template-columns: 1fr; }
    .register-card { padding: 32px 24px; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="wrap">
    <div class="hero-grid">
      <div class="hero-book">
        <img src="assets/img/book-cover.webp" alt="Sea of Deception — book cover by Roy D. Palmer, MBA" width="420" height="630">
      </div>
      <div class="hero-text">
        <h1>Understanding seafood fraud and rebuilding consumer trust</h1>
        <p>After fifty years in the seafood industry, Roy D. Palmer classified the seven categories of seafood fraud into one coherent framework. The result is <em>Sea of Deception</em> — a practical playbook for consumers, industry and regulators.</p>
        <div class="hero-ctas">
          <div class="hero-cta-row">
            <a href="#register" class="cta-btn cta-primary">Register Interest</a>
            <div class="cta-info">
              <strong>Publishing soon</strong>
              Be first to know when it's available
            </div>
          </div>
          <div class="hero-cta-row">
            <a href="book.php" class="cta-btn cta-secondary">Full Synopsis</a>
            <div class="cta-info">
              <strong>Read the details</strong>
              Seven parts, eight case studies
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══ WHAT'S INSIDE ══ -->
<section class="inside">
  <div class="wrap">
    <div class="inside-grid">
      <div>
        <h2>What's inside</h2>
        <p class="inside-intro">Roy D. Palmer addresses the seven categories of seafood fraud every consumer, regulator and industry professional needs to understand.</p>
        <ul class="inside-list">
          <li>Why seafood is uniquely vulnerable to fraud across every market</li>
          <li>The complete I-CADMUS taxonomy — seven fraud types, real cases, counter-measures</li>
          <li>A five-pillar policy playbook to close the gaps</li>
          <li>Eight consumer steps you can take Monday morning at the supermarket</li>
          <li>Eight real case studies — test your skills and compare with industry worldwide</li>
        </ul>
      </div>
      <div class="book-carousel">
        <div class="book-rotator">
          <div class="book-face book-face-front">
            <img src="assets/img/book-cover.webp" alt="Sea of Deception — front cover">
          </div>
          <div class="book-face book-face-back">
            <img src="assets/img/book-back.webp" alt="Sea of Deception — back cover">
          </div>
        </div>
      </div>
      <div class="book-label">Hover to pause</div>
    </div>
  </div>
</section>


<!-- ══ REGISTER ══ -->
<section class="register" id="register">
  <div class="wrap">
    <div class="register-header">
      <h2>Don't miss it</h2>
      <p>Register your interest — we'll handle the rest</p>
    </div>
    <div class="register-card">
      <?php if (isset($_GET['registered']) && $_GET['registered'] === '1'): ?>
        <div class="reg-success">
          <div class="tick">&#10003;</div>
          <h4>You're on the list</h4>
          <p>We will be in touch as soon as the book is available with everything you need to get your copy.</p>
        </div>
      <?php else: ?>
        <h3>Stay informed</h3>
        <p>No payment required — just a heads up when it launches.</p>

        <?php if (isset($_GET['error'])): ?>
          <div class="reg-error">
            <?php
              $err = $_GET['error'];
              if ($err === 'missing') echo 'Please provide both your name and email address.';
              elseif ($err === 'email') echo 'Please enter a valid email address.';
              else echo 'Something went wrong. Please try again.';
            ?>
          </div>
        <?php endif; ?>

        <form class="reg-form" action="register-interest.php" method="POST">
          <div>
            <label for="reg-name">Your name</label>
            <input type="text" id="reg-name" name="name" required placeholder="Full name" autocomplete="name">
          </div>
          <div>
            <label for="reg-email">Email address</label>
            <input type="email" id="reg-email" name="email" required placeholder="you@example.com" autocomplete="email">
          </div>
          <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
          <input type="hidden" name="source" value="landing">
          <button type="submit" class="reg-submit">Register my interest &rarr;</button>
          <p class="reg-note">We will only contact you about the book. No spam. No third parties.</p>
        </form>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ══ PRAISE ══ -->
<section class="praise">
  <div class="wrap">
    <div class="praise-header">
      <h2>Don't take our word for it</h2>
      <p>Here's what early readers are saying</p>
    </div>
    <div class="praise-grid">
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Senior QA Manager</div>
            <div class="praise-card-role">Major Australian retailer</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>The most practical framework I've seen for classifying seafood fraud. We're already using the taxonomy internally.</p>
      </div>
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Senior Policy Advisor</div>
            <div class="praise-card-role">Government regulator</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>An indispensable framework. The case studies in Chapter 14 alone are worth the cover price for any seafood policy practitioner.</p>
      </div>
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Food Editor</div>
            <div class="praise-card-role">National news publication</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>I will never look at a supermarket fish counter the same way again. Palmer has written the consumer's missing manual.</p>
      </div>
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Supply Chain Director</div>
            <div class="praise-card-role">Seafood processor</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>Finally, a shared language for what we've been dealing with for decades. This book should be required reading for everyone in the chain.</p>
      </div>
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Marine Biologist</div>
            <div class="praise-card-role">Research institute</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>The science meets the story. Palmer bridges academic research and real-world industry practice in a way nobody else has.</p>
      </div>
      <div class="praise-card">
        <div class="praise-card-top">
          <div>
            <div class="praise-card-name">Consumer Advocate</div>
            <div class="praise-card-role">Consumer rights organisation</div>
          </div>
          <span class="praise-card-icon">&#10077;</span>
        </div>
        <p>This book isn't despair — it's a playbook. The eight consumer steps alone will change how people shop for seafood.</p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
(function () {
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var t = document.querySelector(this.getAttribute('href'));
      if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });
  if (window.location.search.indexOf('registered=1') !== -1) {
    var el = document.getElementById('register');
    if (el) setTimeout(function () { el.scrollIntoView({ behavior: 'smooth' }); }, 300);
  }
})();
</script>
</body>
</html>
