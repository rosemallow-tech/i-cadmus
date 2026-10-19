# Deployment Document — Book Landing Page & Registration System

**Date:** 11 September 2026
**Feature:** Sea of Deception — Book promotional landing page with interest registration
**Affects:** I-CADMUS website + SCA website (admin panel)

---

## 1. Overview

A new promotional landing page for the book *Sea of Deception* by Roy D. Palmer, MBA. Visitors can register their interest (name + email) and the data is stored in the shared SCA database. The SCA admin panel has been updated with source filtering to distinguish registrations from each website.

---

## 2. Repositories & Commits

### I-CADMUS (GitHub)
- **Repo:** https://github.com/rosemallow-tech/i-cadmus.git
- **Branch:** `main`
- **Commit:** `80bd666` — *Add book promotional landing page and interest registration system*

**Files changed:**
| File | Type | Description |
|------|------|-------------|
| `sea-of-deception.php` | New | Book promotional landing page |
| `register-interest.php` | New | Form handler — saves to SCA database |
| `index.php` | Modified | Added book promo banner section after metrics |
| `assets/img/book-back.webp` | New | Book back cover image |
| `data/.htaccess` | New | Blocks web access to error log directory |

### SCA Website (GitLab)
- **Repo:** https://gitlab.rosemallowtech.com/rosemallow/sca-website.git
- **Branch:** `dev_admin`
- **Commit:** `3606ca2` — *Add source filter to book interest admin and API*

**Files changed:**
| File | Type | Description |
|------|------|-------------|
| `api/book-interest.php` | Modified | Now saves `source = 'sca'` with each registration |
| `admin/book_interest.php` | Modified | Added source filter buttons, source column, filtered stats |

---

## 3. Database Changes

### Table: `sca_global.book_interest`

A new column `source` has been added. Run this SQL on the production database **before deployment**:

```sql
ALTER TABLE book_interest
ADD COLUMN source VARCHAR(20) NOT NULL DEFAULT 'sca' AFTER email;
```

This sets all existing records to `'sca'` (since they came from the SCA website).

### Updated table structure:
| Column | Type | Notes |
|--------|------|-------|
| `id` | INT AUTO_INCREMENT | Primary key |
| `name` | VARCHAR(255) | Registrant name |
| `email` | VARCHAR(255) | Registrant email (unique) |
| `source` | VARCHAR(20) | `'sca'` or `'i-cadmus'` |
| `created_at` | TIMESTAMP | Auto-populated |

---

## 4. Deployment Steps

### Step 1: Database migration (run FIRST)
```sql
-- Connect to production MySQL
-- Run on the sca_global database:

ALTER TABLE book_interest
ADD COLUMN source VARCHAR(20) NOT NULL DEFAULT 'sca' AFTER email;
```

### Step 2: Deploy SCA website
```bash
cd /path/to/sca-website
git pull origin dev_admin
# Or merge dev_admin into main/production branch as per your workflow
```

**Files to deploy:**
- `api/book-interest.php`
- `admin/book_interest.php`

### Step 3: Deploy I-CADMUS website
```bash
cd /path/to/i-cadmus
git pull origin main
```

**Files to deploy:**
- `sea-of-deception.php`
- `register-interest.php`
- `index.php`
- `assets/img/book-back.webp`
- `data/.htaccess`

### Step 4: Configure database connection for I-CADMUS

In `register-interest.php`, update the database credentials to match the production environment:

```php
$dsn = 'mysql:host=PRODUCTION_HOST;port=PRODUCTION_PORT;dbname=sca_global;charset=utf8mb4';
$pdo = new PDO($dsn, 'PRODUCTION_USER', 'PRODUCTION_PASSWORD', [...]);
```

**Current local dev values:**
- Host: `127.0.0.1`
- Port: `3307`
- User: `root`
- Password: *(empty)*

These **must** be updated for production.

### Step 5: Create data directory on I-CADMUS server
```bash
mkdir -p /path/to/i-cadmus/data
```
The `.htaccess` file will be deployed with git pull. This directory is used for error logging only.

### Step 6: Verify
1. Visit `https://i-cadmus.org/sea-of-deception.php` — landing page loads
2. Submit the registration form with a test email
3. Check SCA admin panel → Book Interest → filter by "I-CADMUS" — test entry appears
4. Visit `https://i-cadmus.org/index.php` — book promo banner visible after metrics section
5. Submit from SCA website book page — check admin panel → filter by "SCA"

---

## 5. New URLs

| URL | Purpose |
|-----|---------|
| `/sea-of-deception.php` | Book landing page (I-CADMUS) |
| `/register-interest.php` | Form handler (I-CADMUS) |
| `/admin/book_interest.php` | Admin panel with filters (SCA) |

---

## 6. How Registration Works

```
User visits i-cadmus.org/sea-of-deception.php
    → Fills name + email
    → POST to register-interest.php
    → Validates input + honeypot spam check
    → Connects to sca_global database
    → INSERT INTO book_interest (name, email, source) VALUES (?, ?, 'i-cadmus')
    → Redirect back with success message

User visits SCA website book page
    → Fills name + email
    → AJAX POST to /api/book-interest.php
    → INSERT INTO book_interest (name, email, source) VALUES (?, ?, 'sca')
    → JSON success response
```

---

## 7. Admin Panel Features

**URL:** `/admin/book_interest.php` (SCA website, requires login)

- **Filter buttons:** All | SCA | I-CADMUS
- **Source badges:** Blue badge for SCA, Navy badge for I-CADMUS
- **Stats cards:** Total, Today, This Week, This Month (filtered by source)
- **CSV export:** Includes source column, respects active filter
- **Delete:** Individual and bulk delete with confirmation

---

## 8. Rollback Plan

If issues arise:

**I-CADMUS:**
```bash
git revert 80bd666
git push origin main
```

**SCA:**
```bash
git revert 3606ca2
git push origin dev_admin
```

**Database:**
```sql
ALTER TABLE book_interest DROP COLUMN source;
```

---

## 9. Notes

- The `register-interest.php` on I-CADMUS connects **directly** to the SCA database — ensure the I-CADMUS production server can reach the SCA database host
- Duplicate emails are handled gracefully — returns success without inserting again
- The honeypot field (`website`) catches basic spam bots
- The book promo section on the homepage links to `sea-of-deception.php` (landing page) and `book.php` (full synopsis)
