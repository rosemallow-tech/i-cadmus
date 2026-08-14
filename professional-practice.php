<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Professional Practice | I-CADMUS — Seafood Integrity Toolkit</title>
<meta name="description" content="The SCA Professional Seafood Integrity Toolkit. A 14-point checklist, templates and guides for seafood businesses — from supplier assessment to management review." />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">

<style>
  :root {
    --brand: #003a5d;
    --brand-dark: #002940;
    --brand-light: #0a4f7a;
    --accent: #c8102e;
    --accent-dark: #9e0c24;
    --teal: #00838f;
    --gold: #b8870b;
    --ink: #1c2127;
    --ink-2: #3d434d;
    --ink-3: #5c6470;
    --muted: #8a929c;
    --line: #e5e8ec;
    --line-2: #d5dae0;
    --bg: #ffffff;
    --bg-soft: #f6f8fa;
    --bg-2: #eef2f6;
    --sans: 'Source Sans 3', -apple-system, 'Segoe UI', sans-serif;
    --serif: 'Source Serif 4', Georgia, serif;
    --shadow-sm: 0 1px 2px rgba(0, 25, 50, 0.06), 0 1px 3px rgba(0, 25, 50, 0.04);
    --shadow-md: 0 4px 12px rgba(0, 25, 50, 0.08), 0 2px 4px rgba(0, 25, 50, 0.04);
    --shadow-lg: 0 12px 32px rgba(0, 25, 50, 0.10), 0 4px 12px rgba(0, 25, 50, 0.06);
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    font-family: var(--sans);
    color: var(--ink);
    background: var(--bg);
    font-size: 16px;
    line-height: 1.55;
    -webkit-font-smoothing: antialiased;
  }
  a { color: inherit; text-decoration: none; }
  img { display: block; max-width: 100%; }

  .container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 32px;
  }

  .utility-bar {
    background: var(--brand-dark);
    color: rgba(255,255,255,0.85);
    font-size: 13px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .utility-bar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 38px;
  }
  .utility-bar a {
    color: rgba(255,255,255,0.85);
    transition: color 0.15s;
    padding: 0 14px;
    border-right: 1px solid rgba(255,255,255,0.12);
    line-height: 38px;
  }
  .utility-bar a:last-child { border-right: none; }
  .utility-bar a:hover { color: #fff; }
  .utility-locale {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .utility-locale select {
    background: transparent;
    border: none;
    color: rgba(255,255,255,0.85);
    font-family: inherit;
    font-size: 13px;
    cursor: pointer;
  }
  .utility-locale select option { background: var(--brand-dark); }

  .header {
    background: #fff;
    border-bottom: 1px solid var(--line);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: var(--shadow-sm);
  }
  .header .container {
    display: flex;
    align-items: center;
    height: 76px;
    gap: 20px;
  }
  .brand {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    font-size: 22px;
    color: var(--brand);
    letter-spacing: -0.01em;
    flex-shrink: 0;
  }
  .nav-primary {
    display: flex;
    gap: 4px;
    flex: 1;
  }
  .nav-primary > li {
    list-style: none;
    position: relative;
  }
  .nav-primary > li > a {
    display: flex;
    align-items: center;
    gap: 6px;
    height: 76px;
    padding: 0 10px;
    font-size: 15px;
    font-weight: 500;
    color: var(--ink-2);
    border-bottom: 3px solid transparent;
    transition: color 0.15s, border-color 0.15s;
    white-space: nowrap;
  }
  .nav-primary > li > a:hover {
    color: var(--brand);
    border-bottom-color: var(--accent);
  }
  .nav-primary > li > a .chev {
    font-size: 10px;
    margin-top: 2px;
    transition: transform 0.2s;
  }
  .nav-primary > li:hover > a .chev { transform: rotate(180deg); }
  .nav-mega {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--line);
    border-top: 3px solid var(--accent);
    min-width: 520px;
    padding: 24px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    transition: opacity 0.2s, transform 0.2s, visibility 0.2s;
    z-index: 50;
  }
  .nav-primary > li:hover .nav-mega {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
  .nav-mega-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4px 24px;
  }
  .nav-mega a {
    display: block;
    padding: 10px 12px;
    border-radius: 4px;
    font-size: 14px;
    color: var(--ink-2);
    transition: background 0.15s, color 0.15s;
  }
  .nav-mega a:hover { background: var(--bg-soft); color: var(--brand); }
  .nav-mega a strong { display: block; font-weight: 600; color: var(--ink); margin-bottom: 2px; font-size: 14px; }
  .nav-mega a span { color: var(--ink-3); font-size: 12px; }
  .header-tools {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .header-search {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--bg-soft);
    display: grid;
    place-items: center;
    color: var(--ink-2);
    transition: background 0.15s;
  }
  .header-search:hover { background: var(--bg-2); }
  .btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 22px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 2px;
    transition: all 0.15s;
    cursor: pointer;
    border: 1px solid transparent;
    line-height: 1.2;
    white-space: nowrap;
  }
  .btn-primary {
    background: var(--accent);
    color: #fff;
    border-color: var(--accent);
  }
  .btn-primary:hover {
    background: var(--accent-dark);
    border-color: var(--accent-dark);
  }
  .btn-secondary {
    background: var(--brand);
    color: #fff;
    border-color: var(--brand);
  }
  .btn-secondary:hover {
    background: var(--brand-dark);
  }
  .btn-outline {
    background: transparent;
    color: var(--brand);
    border-color: var(--brand);
  }
  .btn-outline:hover {
    background: var(--brand);
    color: #fff;
  }
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     HERO
     ========================================================= */
  .pp-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    padding: 80px 0 88px;
    position: relative;
    overflow: hidden;
  }
  .pp-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 75% 25%, rgba(0,131,143,0.25), transparent 50%),
      radial-gradient(circle at 20% 80%, rgba(200,16,46,0.12), transparent 60%);
    pointer-events: none;
  }
  .pp-hero .container { position: relative; z-index: 1; }
  .pp-hero .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
  }
  .pp-hero .breadcrumb a { color: rgba(255,255,255,0.85); }
  .pp-hero .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .pp-hero .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .pp-hero .breadcrumb .current { color: #fff; }
  .pp-hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    padding: 6px 14px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 100px;
    margin-bottom: 24px;
  }
  .pp-hero-eyebrow::before {
    content: '';
    width: 7px;
    height: 7px;
    background: #4ade80;
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(74,222,128,0.25);
  }
  .pp-hero h1 {
    font-family: var(--serif);
    font-weight: 600;
    font-size: clamp(36px, 5vw, 56px);
    line-height: 1.08;
    letter-spacing: -0.015em;
    margin-bottom: 20px;
    color: #fff;
  }
  .pp-hero p.lede {
    font-size: 19px;
    color: rgba(255,255,255,0.85);
    max-width: 64ch;
    line-height: 1.55;
    margin-bottom: 32px;
  }
  .pp-hero-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 64px;
    align-items: start;
  }
  .pp-hero-audience {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 8px;
    padding: 28px 32px;
  }
  .pp-hero-audience h3 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 16px;
  }
  .pp-hero-audience ul {
    list-style: none;
    columns: 2;
    column-gap: 24px;
  }
  .pp-hero-audience li {
    font-size: 14px;
    color: rgba(255,255,255,0.8);
    padding: 5px 0 5px 20px;
    position: relative;
    break-inside: avoid;
  }
  .pp-hero-audience li::before {
    content: '—';
    position: absolute;
    left: 0;
    color: rgba(255,255,255,0.4);
  }
  .pp-hero-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
  }
  .pp-hero .btn-outline {
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .pp-hero .btn-outline:hover {
    background: #fff;
    color: var(--brand);
    border-color: #fff;
  }

  /* =========================================================
     VERSION BAR
     ========================================================= */
  .version-bar {
    background: var(--bg-soft);
    border-bottom: 1px solid var(--line);
    padding: 20px 0;
  }
  .version-bar-inner {
    display: flex;
    flex-wrap: wrap;
    gap: 12px 32px;
    align-items: center;
  }
  .version-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--brand);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 2px;
  }
  .version-meta {
    font-size: 13px;
    color: var(--ink-3);
  }
  .version-meta strong {
    color: var(--ink-2);
    font-weight: 600;
  }

  /* =========================================================
     SECTION SHARED
     ========================================================= */
  section { padding: 80px 0; }
  .section-eyebrow {
    color: var(--accent);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 16px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
  }
  .section-eyebrow::before {
    content: '';
    width: 32px;
    height: 2px;
    background: var(--accent);
  }
  .section-h {
    font-family: var(--serif);
    font-size: clamp(30px, 3.5vw, 44px);
    line-height: 1.12;
    font-weight: 400;
    letter-spacing: -0.015em;
    color: var(--brand);
    margin-bottom: 20px;
    max-width: 28ch;
  }
  .section-h strong { font-weight: 600; }
  .section-sub {
    font-size: 18px;
    color: var(--ink-2);
    max-width: 60ch;
    line-height: 1.55;
    margin-bottom: 48px;
  }

  /* =========================================================
     PRINCIPLE BANNER (central principle box)
     ========================================================= */
  .principle-banner {
    background: var(--brand-dark);
    color: #fff;
    padding: 64px 0;
    text-align: center;
  }
  .principle-banner blockquote {
    font-family: var(--serif);
    font-size: clamp(22px, 2.8vw, 32px);
    font-weight: 400;
    line-height: 1.35;
    max-width: 48ch;
    margin: 0 auto;
    color: #fff;
    position: relative;
    padding: 0 24px;
  }
  .principle-banner blockquote::before {
    content: '';
    display: block;
    width: 48px;
    height: 3px;
    background: var(--accent);
    margin: 0 auto 28px;
  }

  /* =========================================================
     TOOLKIT NAV (jump links grid)
     ========================================================= */
  .toolkit-nav { background: #fff; padding: 64px 0; border-bottom: 1px solid var(--line); }
  .toolkit-nav-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 12px;
  }
  .toolkit-nav-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 20px;
    border: 1px solid var(--line);
    border-radius: 6px;
    transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
    cursor: pointer;
    text-decoration: none;
    color: var(--ink);
  }
  .toolkit-nav-item:hover {
    border-color: var(--brand-light);
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
  }
  .toolkit-nav-num {
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    color: var(--brand);
    min-width: 36px;
    line-height: 1;
  }
  .toolkit-nav-label {
    font-size: 14px;
    font-weight: 600;
    color: var(--ink-2);
    line-height: 1.35;
  }

  /* =========================================================
     CHECKLIST SECTIONS
     ========================================================= */
  .tk-section { border-bottom: 1px solid var(--line); }
  .tk-section.alt { background: var(--bg-soft); }
  .tk-header {
    display: flex;
    align-items: baseline;
    gap: 20px;
    margin-bottom: 28px;
    flex-wrap: wrap;
  }
  .tk-num {
    font-family: var(--serif);
    font-size: 56px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    opacity: 0.15;
  }
  .tk-header h2 {
    font-family: var(--serif);
    font-size: clamp(24px, 3vw, 34px);
    font-weight: 600;
    color: var(--brand);
    line-height: 1.15;
  }
  .tk-body {
    max-width: 860px;
  }
  .tk-body p {
    font-size: 16px;
    color: var(--ink-2);
    line-height: 1.65;
    margin-bottom: 18px;
  }
  .tk-body > p:first-child {
    font-size: 17px;
  }
  .tk-checklist {
    background: #fff;
    border: 1px solid var(--line);
    border-left: 4px solid var(--brand);
    border-radius: 4px;
    padding: 28px 32px;
    margin: 24px 0 28px;
  }
  .tk-section.alt .tk-checklist { background: #fff; }
  .tk-checklist h4 {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 16px;
  }
  .tk-checklist ul {
    list-style: none;
  }
  .tk-checklist li {
    font-size: 15px;
    color: var(--ink-2);
    padding: 7px 0 7px 28px;
    position: relative;
    line-height: 1.5;
    border-bottom: 1px solid var(--bg-2);
  }
  .tk-checklist li:last-child { border-bottom: none; }
  .tk-checklist li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 12px;
    width: 16px;
    height: 16px;
    border: 2px solid var(--line-2);
    border-radius: 3px;
  }
  .tk-callout {
    background: linear-gradient(135deg, var(--brand-dark), var(--brand));
    color: #fff;
    padding: 24px 28px;
    border-radius: 6px;
    margin: 24px 0 8px;
    font-size: 15px;
    line-height: 1.55;
    font-style: italic;
  }
  .tk-callout strong { color: #fff; font-style: normal; }

  /* =========================================================
     MANAGEMENT REVIEW
     ========================================================= */
  .mgmt-review { background: var(--brand-dark); color: #fff; }
  .mgmt-review .section-eyebrow { color: #ff6b81; }
  .mgmt-review .section-eyebrow::before { background: #ff6b81; }
  .mgmt-review .section-h { color: #fff; }
  .mgmt-review .section-sub { color: rgba(255,255,255,0.75); }
  .mgmt-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 40px;
  }
  .mgmt-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 6px;
    padding: 24px;
    display: flex;
    gap: 16px;
    align-items: flex-start;
    transition: background 0.2s;
  }
  .mgmt-item:hover { background: rgba(255,255,255,0.08); }
  .mgmt-item-num {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--gold);
    min-width: 28px;
    line-height: 1;
    padding-top: 2px;
  }
  .mgmt-item p {
    font-size: 15px;
    color: rgba(255,255,255,0.85);
    line-height: 1.5;
  }

  /* =========================================================
     CONSUMER FIRST
     ========================================================= */
  .consumer-first { background: #fff; }
  .cf-card {
    max-width: 820px;
    margin: 0 auto;
    text-align: center;
    padding: 56px 48px;
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-top: 6px solid var(--accent);
    border-radius: 8px;
  }
  .cf-card .label {
    display: inline-block;
    background: var(--accent);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 2px;
    margin-bottom: 24px;
  }
  .cf-card blockquote {
    font-family: var(--serif);
    font-size: clamp(20px, 2.5vw, 28px);
    font-weight: 400;
    line-height: 1.35;
    color: var(--brand);
    margin-bottom: 24px;
    font-style: italic;
  }
  .cf-card p {
    font-size: 16px;
    color: var(--ink-2);
    margin-bottom: 20px;
  }
  .cf-cycle {
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 6px;
    margin-top: 20px;
    font-size: 14px;
    font-weight: 600;
    color: var(--brand);
  }
  .cf-cycle span {
    background: var(--brand);
    color: #fff;
    padding: 6px 14px;
    border-radius: 100px;
    font-size: 13px;
  }
  .cf-cycle .arrow-cycle { color: var(--accent); font-weight: 400; padding: 6px 2px; background: none; }

  /* =========================================================
     NEWSLETTER
     ========================================================= */
  .newsletter-section { background: var(--bg-soft); }
  .newsletter-card {
    max-width: 720px;
    margin: 0 auto;
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 48px;
    text-align: center;
    box-shadow: var(--shadow-md);
  }
  .newsletter-card h3 {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
  }
  .newsletter-card > p {
    font-size: 16px;
    color: var(--ink-2);
    margin-bottom: 28px;
    max-width: 48ch;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.55;
  }
  .newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-width: 420px;
    margin: 0 auto;
    text-align: left;
  }
  .newsletter-form label {
    font-size: 13px;
    font-weight: 600;
    color: var(--ink-2);
  }
  .newsletter-form input,
  .newsletter-form select {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid var(--line-2);
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
    color: var(--ink);
    background: #fff;
  }
  .newsletter-form input:focus,
  .newsletter-form select:focus {
    outline: 2px solid var(--brand);
    border-color: var(--brand);
  }
  .newsletter-form button {
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 14px 18px;
    font-weight: 600;
    font-size: 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.2s;
    font-family: inherit;
    margin-top: 4px;
  }
  .newsletter-form button:hover { background: var(--accent-dark); }
  .newsletter-note {
    font-size: 12px;
    color: var(--ink-3);
    margin-top: 12px;
    text-align: center;
  }

  /* =========================================================
     DOCUMENT CONTROL
     ========================================================= */
  .doc-control { background: #fff; border-top: 1px solid var(--line); }
  .doc-control-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
  }
  .doc-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
  }
  .doc-table th,
  .doc-table td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid var(--line);
  }
  .doc-table th {
    font-weight: 600;
    color: var(--ink);
    width: 40%;
    background: var(--bg-soft);
  }
  .doc-table td {
    color: var(--ink-2);
  }
  .doc-control h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 20px;
  }
  .doc-disclaimer {
    font-size: 13px;
    color: var(--ink-3);
    line-height: 1.6;
  }
  .doc-disclaimer p { margin-bottom: 12px; }

  /* =========================================================
     CTA BAND
     ========================================================= */
  .cta-band {
    background: var(--brand);
    background-image: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
    color: #fff;
    padding: 72px 0;
    position: relative;
    overflow: hidden;
  }
  .cta-band::before {
    content: '';
    position: absolute;
    top: 0; right: 0;
    width: 50%;
    height: 100%;
    background: radial-gradient(circle at 80% 50%, rgba(0,131,143,0.3), transparent 70%);
  }
  .cta-band-grid {
    display: grid;
    grid-template-columns: 1.5fr auto;
    gap: 48px;
    align-items: center;
    position: relative;
    z-index: 1;
  }
  .cta-band h2 {
    font-family: var(--serif);
    font-size: clamp(26px, 3vw, 38px);
    font-weight: 400;
    line-height: 1.2;
    margin-bottom: 12px;
    color: #fff;
  }
  .cta-band h2 strong { font-weight: 600; }
  .cta-band p {
    font-size: 16px;
    color: rgba(255,255,255,0.85);
    max-width: 60ch;
  }
  .cta-band-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }
  .cta-band .btn-outline {
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .cta-band .btn-outline:hover {
    background: #fff;
    color: var(--brand);
  }

  /* =========================================================
     FOOTER
     ========================================================= */
  footer {
    background: #1a1d22;
    color: rgba(255,255,255,0.75);
    padding: 80px 0 0;
    font-size: 14px;
  }
  .footer-top {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
    gap: 40px;
    padding-bottom: 56px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .footer-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
  }
  .footer-brand-text {
    color: #fff;
    font-weight: 700;
    font-size: 22px;
  }
  .footer-brand-text small {
    display: block;
    font-size: 11px;
    font-weight: 400;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-top: 2px;
  }
  .footer-desc {
    color: rgba(255,255,255,0.65);
    line-height: 1.55;
    margin-bottom: 24px;
    max-width: 36ch;
  }
  .footer-newsletter input {
    width: 100%;
    padding: 12px 14px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
    margin-bottom: 8px;
  }
  .footer-newsletter input::placeholder { color: rgba(255,255,255,0.5); }
  .footer-newsletter input:focus { outline: 2px solid var(--accent); border-color: var(--accent); }
  .footer-newsletter button {
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 12px 18px;
    font-weight: 600;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    transition: background 0.2s;
    font-family: inherit;
  }
  .footer-newsletter button:hover { background: var(--accent-dark); }
  .footer-col h5 {
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 18px;
    letter-spacing: 0.02em;
  }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 10px; }
  .footer-col a {
    color: rgba(255,255,255,0.65);
    transition: color 0.15s;
  }
  .footer-col a:hover { color: #fff; }
  .footer-bottom {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 32px;
    padding: 32px 0;
    align-items: center;
    color: rgba(255,255,255,0.5);
    font-size: 13px;
  }
  .footer-bottom-links {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
  }
  .footer-bottom-links a:hover { color: #fff; }
  .footer-social {
    display: flex;
    gap: 8px;
    margin-top: 20px;
  }
  .footer-social a {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.12);
    display: grid;
    place-items: center;
    color: rgba(255,255,255,0.7);
    font-size: 13px;
    font-weight: 700;
    transition: background 0.2s, color 0.2s;
  }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .pp-hero-grid { grid-template-columns: 1fr; gap: 32px; }
    .pp-hero-audience ul { columns: 1; }
    .mgmt-grid { grid-template-columns: 1fr; }
    .doc-control-grid { grid-template-columns: 1fr; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 640px) {
    section { padding: 56px 0; }
    .toolkit-nav-grid { grid-template-columns: 1fr; }
    .tk-checklist { padding: 20px; }
    .newsletter-card { padding: 32px 24px; }
    .cf-card { padding: 36px 24px; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== HERO ============== -->
<section class="pp-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">/</span>
      <a href="book.php">The Book</a>
      <span class="sep">/</span>
      <span class="current">Professional Practice</span>
    </div>
    <div class="pp-hero-grid">
      <div>
        <div class="pp-hero-eyebrow">SCA Professional Seafood Integrity Toolkit</div>
        <h1>Professional Practice</h1>
        <p class="lede">Turning seafood integrity into everyday action. The complete, updateable toolkit for seafood professionals &mdash; from supplier assessment and receiving checks to management review and staff training.</p>
        <div class="pp-hero-actions">
          <a href="#toolkit" class="btn btn-primary">Explore the toolkit <span class="arrow">→</span></a>
          <a href="#newsletter" class="btn btn-outline">Join the SCA network</a>
        </div>
      </div>
      <div class="pp-hero-audience">
        <h3>Who this toolkit is for</h3>
        <ul>
          <li>Harvesters &amp; aquaculture producers</li>
          <li>Processors</li>
          <li>Importers &amp; exporters</li>
          <li>Wholesalers &amp; distributors</li>
          <li>Fishmongers &amp; retailers</li>
          <li>Restaurants, caf&eacute;s &amp; takeaway</li>
          <li>Procurement teams</li>
          <li>Auditors &amp; regulators</li>
          <li>Trainers &amp; educators</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============== VERSION BAR ============== -->
<div class="version-bar">
  <div class="container">
    <div class="version-bar-inner">
      <span class="version-tag">Version 1.0</span>
      <span class="version-meta"><strong>Published:</strong> August 2026</span>
      <span class="version-meta"><strong>Next review:</strong> August 2027</span>
      <span class="version-meta"><strong>Owner:</strong> Seafood Consumer Association</span>
    </div>
  </div>
</div>

<!-- ============== CENTRAL PRINCIPLE ============== -->
<div class="principle-banner">
  <div class="container">
    <blockquote>Do not make a seafood claim unless you understand it, can support it and are prepared to take responsibility for it.</blockquote>
  </div>
</div>

<!-- ============== TOOLKIT NAV ============== -->
<div class="toolkit-nav" id="toolkit">
  <div class="container">
    <div class="section-eyebrow">14-Point Professional Checklist</div>
    <h2 class="section-h" style="max-width: none;">The complete toolkit.</h2>
    <p class="section-sub">Not every control will apply equally to every business. The central principle remains constant. Select any item to jump to the detail.</p>
    <div class="toolkit-nav-grid">
      <a href="#tk-1" class="toolkit-nav-item"><span class="toolkit-nav-num">01</span><span class="toolkit-nav-label">Know your suppliers</span></a>
      <a href="#tk-2" class="toolkit-nav-item"><span class="toolkit-nav-num">02</span><span class="toolkit-nav-label">Confirm the product specification</span></a>
      <a href="#tk-3" class="toolkit-nav-item"><span class="toolkit-nav-num">03</span><span class="toolkit-nav-label">Treat the invoice as traceability</span></a>
      <a href="#tk-4" class="toolkit-nav-item"><span class="toolkit-nav-num">04</span><span class="toolkit-nav-label">Check seafood when received</span></a>
      <a href="#tk-5" class="toolkit-nav-item"><span class="toolkit-nav-num">05</span><span class="toolkit-nav-label">Verify before you describe</span></a>
      <a href="#tk-6" class="toolkit-nav-item"><span class="toolkit-nav-num">06</span><span class="toolkit-nav-label">Use accurate fish names</span></a>
      <a href="#tk-7" class="toolkit-nav-item"><span class="toolkit-nav-num">07</span><span class="toolkit-nav-label">Protect identity during processing</span></a>
      <a href="#tk-8" class="toolkit-nav-item"><span class="toolkit-nav-num">08</span><span class="toolkit-nav-label">Review labels, menus &amp; digital info</span></a>
      <a href="#tk-9" class="toolkit-nav-item"><span class="toolkit-nav-num">09</span><span class="toolkit-nav-label">Train every member of staff</span></a>
      <a href="#tk-10" class="toolkit-nav-item"><span class="toolkit-nav-num">10</span><span class="toolkit-nav-label">Encourage consumer questions</span></a>
      <a href="#tk-11" class="toolkit-nav-item"><span class="toolkit-nav-num">11</span><span class="toolkit-nav-label">Correct mistakes quickly</span></a>
      <a href="#tk-12" class="toolkit-nav-item"><span class="toolkit-nav-num">12</span><span class="toolkit-nav-label">Report serious concerns</span></a>
      <a href="#tk-13" class="toolkit-nav-item"><span class="toolkit-nav-num">13</span><span class="toolkit-nav-label">Verify according to risk</span></a>
      <a href="#tk-14" class="toolkit-nav-item"><span class="toolkit-nav-num">14</span><span class="toolkit-nav-label">Learn from every discrepancy</span></a>
    </div>
  </div>
</div>


<!-- ============================================================
     CHECKLIST 01 — Know your suppliers
     ============================================================ -->
<section class="tk-section" id="tk-1">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">01</div>
      <h2>Know your suppliers</h2>
    </div>
    <div class="tk-body">
      <p>Before purchasing seafood, establish who is supplying it and whether they can provide reliable product information.</p>
      <div class="tk-checklist">
        <h4>Approved supplier assessment</h4>
        <ul>
          <li>Maintain an approved-supplier list</li>
          <li>Record the supplier's legal and trading identity</li>
          <li>Understand where the supplier obtains its seafood</li>
          <li>Request appropriate product specifications</li>
          <li>Review licences, approvals or certifications where relevant</li>
          <li>Assess the supplier's history and reputation</li>
          <li>Know who to contact when information is incomplete</li>
          <li>Review supplier performance periodically</li>
          <li>Increase scrutiny where the product, origin or supply route presents greater risk</li>
        </ul>
      </div>
      <div class="tk-callout">A long commercial relationship can support confidence, but familiarity is not a substitute for verification. Good suppliers welcome informed questions because transparency protects their reputation as well as yours.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 02 — Confirm the product specification
     ============================================================ -->
<section class="tk-section alt" id="tk-2">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">02</div>
      <h2>Confirm the product specification</h2>
    </div>
    <div class="tk-body">
      <p>A product specification should state what the business intends to purchase and what the supplier has agreed to provide.</p>
      <div class="tk-checklist">
        <h4>Product specification template</h4>
        <ul>
          <li>Approved Standard Fish Name</li>
          <li>Scientific name where necessary</li>
          <li>Country or region of origin</li>
          <li>Wild-caught or farmed status</li>
          <li>Production or harvesting method where relevant</li>
          <li>Fresh, frozen or previously frozen status</li>
          <li>Product form and grade</li>
          <li>Size or count</li>
          <li>Net weight</li>
          <li>Glaze or water specification</li>
          <li>Ingredients, additives and treatments</li>
          <li>Allergen information</li>
          <li>Certification claims</li>
          <li>Traceability information</li>
          <li>Packaging and labelling requirements</li>
          <li>Evidence required to support important claims</li>
        </ul>
      </div>
      <div class="tk-callout">Vague purchasing descriptions create room for misunderstanding and substitution. &ldquo;White fish,&rdquo; &ldquo;snapper,&rdquo; &ldquo;flake,&rdquo; &ldquo;local fish&rdquo; or &ldquo;premium seafood&rdquo; may not provide enough information to establish what was ordered. If the specification is ambiguous, the product received can satisfy the paperwork while still failing the consumer.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 03 — Treat the invoice as traceability
     ============================================================ -->
<section class="tk-section" id="tk-3">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">03</div>
      <h2>Treat the invoice as the first traceability record</h2>
    </div>
    <div class="tk-body">
      <p>The supplier's invoice is one of the most useful integrity records available to a seafood business.</p>
      <div class="tk-checklist">
        <h4>Invoice and documentation review</h4>
        <ul>
          <li>The supplier</li>
          <li>The purchaser</li>
          <li>Transaction date</li>
          <li>Product description</li>
          <li>Quantity</li>
          <li>Batch or lot information where applicable</li>
          <li>Other information needed to connect the seafood with its source</li>
        </ul>
      </div>
      <p>The description used on labels, menus, displays, websites and promotional materials should remain consistent with the supporting records unless reliable evidence justifies a change.</p>
      <p>However, an invoice records what was declared. It does not independently prove species, origin, production method, legality, freshness, sustainability, or absence of undeclared treatment.</p>
      <p>Invoices should therefore be checked against product specifications, receiving records, supplier information and proportionate verification.</p>
      <div class="tk-callout"><strong>Paperwork is evidence of a claim. It is not necessarily evidence that the claim is true.</strong></div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 04 — Check seafood when received
     ============================================================ -->
<section class="tk-section alt" id="tk-4">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">04</div>
      <h2>Check seafood when it is received</h2>
    </div>
    <div class="tk-body">
      <p>Receiving is one of the best opportunities to identify a problem before the seafood enters production or reaches the consumer.</p>
      <div class="tk-checklist">
        <h4>Seafood receiving checklist</h4>
        <ul>
          <li>The product matches the purchase order and specification</li>
          <li>The invoice description is complete and consistent</li>
          <li>Labels, cartons and inner packs describe the same product</li>
          <li>Origin information is present where required</li>
          <li>Batch and lot details can be recorded</li>
          <li>Packaging is intact</li>
          <li>Quantity and count appear reasonable</li>
          <li>Frozen product shows no unexpected signs of thawing or refreezing</li>
          <li>Glaze, water loss or drip does not appear inconsistent with the specification</li>
          <li>Sensory condition is acceptable</li>
          <li>Required certifications or documents accompany the product</li>
          <li>Discrepancies are recorded before the product is used or redistributed</li>
        </ul>
      </div>
      <div class="tk-callout">A questionable consignment should be identified, isolated where necessary and referred to an authorised person. Do not remove the original identity before the product has been accepted and recorded.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 05 — Verify before you describe
     ============================================================ -->
<section class="tk-section" id="tk-5">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">05</div>
      <h2>Verify before you describe</h2>
    </div>
    <div class="tk-body">
      <p>Every seafood description is a promise made to the purchaser or consumer. Before using claims such as Australian, local, wild-caught, sustainably sourced, fresh, never frozen, sashimi grade, premium, chemical-free, traceable, certified, or from a named fishery, farm or region&nbsp;&mdash; ask:</p>
      <div class="tk-checklist">
        <h4>Menu and label audit</h4>
        <ul>
          <li>What does this claim mean?</li>
          <li>What evidence supports it?</li>
          <li>Does the evidence cover this product and batch?</li>
          <li>Does the certification verify the particular claim being made?</li>
          <li>Would an ordinary consumer understand the claim correctly?</li>
          <li>Is any qualification being hidden in small print?</li>
          <li>Can staff explain the claim accurately?</li>
          <li>Would we be comfortable providing the supporting evidence to a regulator or consumer?</li>
        </ul>
      </div>
      <div class="tk-callout">Marketing should follow evidence &mdash; not create a story that the evidence must later be forced to support. If a claim cannot be explained and supported, it should not be made.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 06 — Use accurate fish names
     ============================================================ -->
<section class="tk-section alt" id="tk-6">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">06</div>
      <h2>Use accurate and consistent fish names</h2>
    </div>
    <div class="tk-body">
      <p>A common language is essential for traceability, communication and consumer understanding. In Australia, businesses should use the approved Australian Fish Names Standard, AS&nbsp;5300, wherever practical and applicable.</p>
      <div class="tk-checklist">
        <h4>Supplier-question form</h4>
        <ul>
          <li>Purchasing documents use the approved Standard Fish Name</li>
          <li>Internal records use the same name</li>
          <li>Labels and retail displays remain consistent</li>
          <li>Menus and online platforms use accurate names</li>
          <li>Scientific names are obtained where identity is uncertain</li>
          <li>Group names are not used to create a false impression of a particular species</li>
          <li>Imported seafood is not given the identity of a familiar Australian species</li>
          <li>Abbreviations do not create ambiguity</li>
          <li>Staff understand the difference between a recognised name and a marketing description</li>
        </ul>
      </div>
      <div class="tk-callout">A legally or technically available term can still create a misleading overall impression. Consider what the consumer is likely to understand. You cannot maintain seafood integrity if the product's identity changes as it moves through the supply chain.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 07 — Protect identity during processing
     ============================================================ -->
<section class="tk-section" id="tk-7">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">07</div>
      <h2>Protect identity during processing and handling</h2>
    </div>
    <div class="tk-body">
      <p>Product identity can be lost without deliberate fraud. Seafood may be removed from its original packaging, divided, filleted, thawed, repacked, combined or transferred into unlabelled containers.</p>
      <div class="tk-checklist">
        <h4>Check that</h4>
        <ul>
          <li>Product identity remains attached to each batch</li>
          <li>Different species and origins are kept distinguishable</li>
          <li>Labels remain with the product during storage and preparation</li>
          <li>Repacked seafood receives accurate replacement information</li>
          <li>Transformations such as thawing, smoking or marinating are recorded</li>
          <li>Ingredients and treatments are documented</li>
          <li>Mixed products can be traced to their components</li>
          <li>Waste, rework and returns are controlled</li>
          <li>Product is not transferred into unidentified containers</li>
          <li>Staff can trace the product back to its receiving record</li>
        </ul>
      </div>
      <div class="tk-callout">The physical product and its information must travel together.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 08 — Review labels, menus and digital information
     ============================================================ -->
<section class="tk-section alt" id="tk-8">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">08</div>
      <h2>Review labels, menus and digital information</h2>
    </div>
    <div class="tk-body">
      <p>Consumer information should be reviewed whenever products, suppliers, regulations or menu offerings change.</p>
      <div class="tk-checklist">
        <h4>Check that</h4>
        <ul>
          <li>The seafood name is accurate</li>
          <li>Origin information is current</li>
          <li>Australian, imported or mixed descriptions are applied correctly where required</li>
          <li>Fresh or previously frozen status is not misrepresented</li>
          <li>Wild-caught and farmed claims are supported</li>
          <li>Ingredients and allergens are properly communicated</li>
          <li>Sustainability and certification claims are current</li>
          <li>Photographs do not depict a different or more valuable species</li>
          <li>Menus match purchasing and receiving records</li>
          <li>Printed, online and delivery-platform descriptions agree</li>
          <li>Old labels and menu files are removed when information changes</li>
        </ul>
      </div>
      <p>Assign responsibility for conducting and recording regular reviews.</p>
      <div class="tk-callout">A menu should not remain unchanged simply because it has always used the same description. At the point of sale, internal records become promises to consumers.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 09 — Train every member of staff
     ============================================================ -->
<section class="tk-section" id="tk-9">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">09</div>
      <h2>Train every member of staff</h2>
    </div>
    <div class="tk-body">
      <p>Consumer trust should not depend upon one knowledgeable employee being present. Every relevant staff member should understand:</p>
      <div class="tk-checklist">
        <h4>Staff induction checklist</h4>
        <ul>
          <li>The seafood products they handle or sell</li>
          <li>Where authoritative product information is recorded</li>
          <li>Why fish names and origin matter</li>
          <li>Basic I-CADMUS fraud awareness</li>
          <li>The limits of their own knowledge</li>
          <li>How to answer consumer questions accurately</li>
          <li>When not to guess</li>
          <li>Whom to consult when uncertain</li>
          <li>How to record a discrepancy or complaint</li>
          <li>How to protect product identity during handling</li>
        </ul>
      </div>
      <p>Training should form part of induction, product changes, menu changes, regulatory updates, supplier changes, corrective action and continuing professional development.</p>
      <div class="tk-callout"><strong>&ldquo;I will check that for you&rdquo;</strong> is more professional than a confident but inaccurate answer. Staff should feel authorised to pause a transaction or seek clarification when something does not make sense.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 10 — Encourage consumer questions
     ============================================================ -->
<section class="tk-section alt" id="tk-10">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">10</div>
      <h2>Encourage and record consumer questions</h2>
    </div>
    <div class="tk-body">
      <p>Consumers who ask questions are not necessarily difficult customers. They may identify problems that internal systems have missed.</p>
      <div class="tk-checklist">
        <h4>Consumer-enquiry procedure</h4>
        <ul>
          <li>Welcome reasonable questions</li>
          <li>Provide accurate information without defensiveness</li>
          <li>Avoid inventing an answer</li>
          <li>Record questions that cannot be answered immediately</li>
          <li>Investigate recurring areas of confusion</li>
          <li>Provide a clear complaint pathway</li>
          <li>Preserve relevant evidence</li>
          <li>Identify whether other customers may be affected</li>
          <li>Use consumer feedback in staff training and system review</li>
        </ul>
      </div>
      <div class="tk-callout">One unusual question may be an isolated concern. Repeated questions about the same product may indicate unclear information or a wider integrity problem.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 11 — Correct mistakes quickly
     ============================================================ -->
<section class="tk-section" id="tk-11">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">11</div>
      <h2>Correct mistakes quickly and transparently</h2>
    </div>
    <div class="tk-body">
      <p>Even well-managed businesses make mistakes. Professionalism is demonstrated by how the business responds.</p>
      <div class="tk-checklist">
        <h4>Corrective-action form</h4>
        <ul>
          <li>Stop making the inaccurate claim</li>
          <li>Isolate affected product where appropriate</li>
          <li>Preserve records and evidence</li>
          <li>Identify the products, batches and customers affected</li>
          <li>Correct labels, menus and online information</li>
          <li>Notify management and relevant staff</li>
          <li>Contact the supplier</li>
          <li>Assess whether customers or regulators should be informed</li>
          <li>Provide an appropriate remedy</li>
          <li>Determine whether the error was accidental, negligent or deliberate</li>
          <li>Record the corrective action</li>
          <li>Change the control that allowed the problem to occur</li>
        </ul>
      </div>
      <div class="tk-callout">Do not silently correct the visible mistake while leaving the underlying system unchanged. Consumers may forgive an honest error. Concealment turns an error into a breach of trust.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 12 — Report serious concerns
     ============================================================ -->
<section class="tk-section alt" id="tk-12">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">12</div>
      <h2>Report serious concerns</h2>
    </div>
    <div class="tk-body">
      <p>Some matters exceed the authority or expertise of an individual employee or business. Escalation may be necessary where there is suspected:</p>
      <div class="tk-checklist">
        <h4>Suspected-fraud escalation pathway</h4>
        <ul>
          <li>Deliberate species substitution</li>
          <li>Falsified documentation</li>
          <li>Unsafe or unauthorised treatment</li>
          <li>Repeated short weight</li>
          <li>Concealed allergens</li>
          <li>Illegal fishing or trading</li>
          <li>Counterfeit certification</li>
          <li>Organised supply-chain misconduct</li>
          <li>Labour exploitation</li>
          <li>Obstruction of an internal investigation</li>
          <li>Risk to other businesses or consumers</li>
        </ul>
      </div>
      <div class="tk-checklist">
        <h4>Your organisation should have</h4>
        <ul>
          <li>A named internal reporting contact</li>
          <li>A process for recording concerns</li>
          <li>Protection against retaliation for good-faith reporting</li>
          <li>Criteria for holding or withdrawing product</li>
          <li>Access to technical or legal advice</li>
          <li>Regulator and emergency contact pathways</li>
          <li>Rules governing communication with customers</li>
          <li>A process for sharing relevant intelligence</li>
        </ul>
      </div>
      <div class="tk-callout">Staff should understand that reporting a reasonable concern is an act of professionalism &mdash; not disloyalty.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 13 — Verify according to risk
     ============================================================ -->
<section class="tk-section" id="tk-13">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">13</div>
      <h2>Verify according to risk</h2>
    </div>
    <div class="tk-body">
      <p>Not every product requires laboratory testing. No product should be treated as beyond verification.</p>
      <div class="tk-checklist">
        <h4>Risk-based verification guide &mdash; Methods</h4>
        <ul>
          <li>Document review</li>
          <li>Supplier audit</li>
          <li>Comparison of purchase and sales records</li>
          <li>Mass-balance checks</li>
          <li>Packaging and label examination</li>
          <li>Species identification</li>
          <li>Net-weight or glaze assessment</li>
          <li>Ingredient or chemical analysis</li>
          <li>DNA testing</li>
          <li>Provenance testing</li>
          <li>Certification verification</li>
          <li>Examination of vessel, catch or trade records</li>
        </ul>
      </div>
      <div class="tk-checklist">
        <h4>Risk-based verification guide &mdash; Risk factors</h4>
        <ul>
          <li>Product value</li>
          <li>Substitution history</li>
          <li>Origin</li>
          <li>Supply-chain complexity</li>
          <li>Processing level</li>
          <li>Public-health consequences</li>
          <li>Reliability of the supplier</li>
          <li>Previous discrepancies</li>
          <li>The importance of the claim</li>
        </ul>
      </div>
      <div class="tk-callout">A risk-based system concentrates effort where error or fraud is most likely and where the consequences would be greatest.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     CHECKLIST 14 — Learn from every discrepancy
     ============================================================ -->
<section class="tk-section alt" id="tk-14">
  <div class="container">
    <div class="tk-header">
      <div class="tk-num">14</div>
      <h2>Learn from every discrepancy</h2>
    </div>
    <div class="tk-body">
      <p>An incident is not closed merely because the product was refunded, relabelled or removed.</p>
      <div class="tk-checklist">
        <h4>Seafood discrepancy report &amp; management-review checklist</h4>
        <ul>
          <li>How did the discrepancy enter the system?</li>
          <li>Why was it not detected earlier?</li>
          <li>Could other products or customers be affected?</li>
          <li>Did the specification contribute to the problem?</li>
          <li>Did staff understand their responsibilities?</li>
          <li>Should the supplier be reviewed?</li>
          <li>Is additional verification required?</li>
          <li>Should the lesson be shared internally or externally?</li>
          <li>Has the preventive control been improved?</li>
          <li>Will the corrective action be checked for effectiveness?</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ============== MANAGEMENT REVIEW ============== -->
<section class="mgmt-review">
  <div class="container">
    <div class="section-eyebrow">Management Review</div>
    <h2 class="section-h">Ten questions management <strong>should periodically answer.</strong></h2>
    <p class="section-sub">At least periodically, management should be able to answer:</p>
    <div class="mgmt-grid">
      <div class="mgmt-item">
        <div class="mgmt-item-num">1</div>
        <p>Do we know what seafood we are buying and selling?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">2</div>
        <p>Can we identify its supplier and origin?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">3</div>
        <p>Are our important claims supported by evidence?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">4</div>
        <p>Do records remain connected to the physical product?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">5</div>
        <p>Are labels, menus and online descriptions consistent?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">6</div>
        <p>Are our staff trained and confident enough to ask questions?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">7</div>
        <p>Can concerns be reported without obstruction?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">8</div>
        <p>Do we correct mistakes openly and promptly?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">9</div>
        <p>Do we verify higher-risk products?</p>
      </div>
      <div class="mgmt-item">
        <div class="mgmt-item-num">10</div>
        <p>Can we demonstrate that our controls are improving?</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CONSUMER FIRST TEST ============== -->
<section class="consumer-first">
  <div class="container">
    <div class="cf-card">
      <span class="label">The Consumer First Professional Standard</span>
      <blockquote>If the consumer knew everything that we know, would they consider the product, description and transaction accurate, understandable and fair?</blockquote>
      <p>If the answer is uncertain, further examination is required.</p>
      <p>Professional practice is not achieved through occasional acts of excellence. It is created by ordinary controls performed consistently: check the product, follow the information, question inconsistencies, verify important claims, communicate honestly, correct mistakes and learn.</p>
      <p style="font-weight: 600; color: var(--brand); margin-bottom: 0;">The professional integrity cycle:</p>
      <div class="cf-cycle">
        <span>Prevent</span><span class="arrow-cycle">→</span>
        <span>Verify</span><span class="arrow-cycle">→</span>
        <span>Detect</span><span class="arrow-cycle">→</span>
        <span>Report</span><span class="arrow-cycle">→</span>
        <span>Investigate</span><span class="arrow-cycle">→</span>
        <span>Act</span><span class="arrow-cycle">→</span>
        <span>Learn</span>
      </div>
    </div>
  </div>
</section>

<!-- ============== NEWSLETTER SIGNUP ============== -->
<section class="newsletter-section" id="newsletter">
  <div class="container">
    <div class="newsletter-card">
      <h3>Stay current. Join the SCA professional network.</h3>
      <p>Receive toolkit updates, regulatory alerts, I-CADMUS training opportunities and professional practice guidance direct from the Seafood Consumer Association.</p>
      <form class="newsletter-form" onsubmit="event.preventDefault(); this.querySelector('button').textContent='Thank you — you\'re registered.'; this.querySelector('button').disabled=true;">
        <label for="pp-name">Full name</label>
        <input type="text" id="pp-name" placeholder="Your full name" required />
        <label for="pp-email">Work email</label>
        <input type="email" id="pp-email" placeholder="you@company.com" required />
        <label for="pp-org">Organisation</label>
        <input type="text" id="pp-org" placeholder="Company or organisation name" />
        <label for="pp-role">Role / sector</label>
        <select id="pp-role">
          <option value="">Select your sector&hellip;</option>
          <option value="harvester">Harvester / Aquaculture producer</option>
          <option value="processor">Processor</option>
          <option value="importer">Importer / Exporter</option>
          <option value="wholesaler">Wholesaler / Distributor</option>
          <option value="retailer">Fishmonger / Retailer</option>
          <option value="restaurant">Restaurant / Caf&eacute; / Foodservice</option>
          <option value="procurement">Procurement</option>
          <option value="auditor">Auditor / Regulator</option>
          <option value="trainer">Trainer / Educator</option>
          <option value="other">Other</option>
        </select>
        <button type="submit">Join the SCA network <span class="arrow">→</span></button>
      </form>
      <p class="newsletter-note">Your information is held by the Seafood Consumer Association and will not be shared with third parties. You can unsubscribe at any time.</p>
    </div>
  </div>
</section>

<!-- ============== DOCUMENT CONTROL ============== -->
<section class="doc-control">
  <div class="container">
    <div class="section-eyebrow">Document Control</div>
    <h2 class="section-h" style="max-width: none;">Toolkit governance <strong>&amp; version history.</strong></h2>
    <p class="section-sub">This toolkit is a living resource maintained by the Seafood Consumer Association. It is reviewed and updated as requirements, risks and professional practices evolve.</p>

    <div class="doc-control-grid">
      <div>
        <h3>Current version</h3>
        <table class="doc-table">
          <tr><th>Document</th><td>SCA Professional Seafood Integrity Toolkit</td></tr>
          <tr><th>Version</th><td>1.0</td></tr>
          <tr><th>Publication date</th><td>August 2026</td></tr>
          <tr><th>Next scheduled review</th><td>August 2027</td></tr>
          <tr><th>Document owner</th><td>Seafood Consumer Association (SCA)</td></tr>
          <tr><th>Contact</th><td><a href="contact.php" style="color: var(--teal); border-bottom: 1px solid transparent; transition: border-color 0.15s;">contact@seafoodconsumers.global</a></td></tr>
          <tr><th>Canonical URL</th><td>www.seafoodconsumers.global/professional-practice</td></tr>
        </table>

        <h3 style="margin-top: 40px;">Change history</h3>
        <table class="doc-table">
          <tr style="background: var(--bg-soft);"><th>Version</th><th>Date</th><th style="width: auto;">Description</th></tr>
          <tr><td>1.0</td><td>August 2026</td><td>Initial publication</td></tr>
        </table>
      </div>

      <div>
        <h3>Disclaimer</h3>
        <div class="doc-disclaimer">
          <p>This toolkit is published by the Seafood Consumer Association as a professional practice resource. It is intended to support seafood businesses in developing and maintaining integrity controls appropriate to their operations.</p>
          <p>It does not constitute legal advice. Businesses are responsible for ensuring compliance with applicable legislation, regulations and standards in their jurisdiction.</p>
          <p>The information is provided in good faith and is believed to be accurate at the date of publication. The Seafood Consumer Association accepts no liability for actions taken or not taken on the basis of this document.</p>
          <p>Important regulatory changes may trigger an earlier review before the next scheduled review date. Users should check <strong>www.seafoodconsumers.global/professional-practice</strong> for the most current version.</p>
          <p>Inclusion of any reference, standard or methodology does not constitute endorsement of any particular product, service or organisation.</p>
        </div>

        <h3 style="margin-top: 40px;">Links to current requirements</h3>
        <div class="doc-disclaimer">
          <p><a href="framework.php" style="color: var(--teal);">I-CADMUS Framework</a> &mdash; The seven fraud categories</p>
          <p><a href="certification.php" style="color: var(--teal);">I-CADMUS Certification</a> &mdash; Professional training and certification</p>
          <p><a href="book.php" style="color: var(--teal);">Sea of Deception</a> &mdash; The book that founded the framework</p>
          <p><a href="research.php" style="color: var(--teal);">Further Reading &amp; Research</a> &mdash; 68 curated research references</p>
          <p><a href="resources.php" style="color: var(--teal);">Resources</a> &mdash; Whitepapers, glossary and audit tools</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Read the book. <strong>Then put it to work.</strong></h2>
        <p>Sea of Deception provides the framework and principles. This toolkit gives you the controls. The certification course tests your understanding.</p>
      </div>
      <div class="cta-band-actions">
        <a href="book.php" class="btn btn-primary">The book <span class="arrow">→</span></a>
        <a href="certification.php" class="btn btn-outline">Get certified</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
  // Smooth scroll for toolkit nav
  document.querySelectorAll('.toolkit-nav-item').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>

</body>
</html>
