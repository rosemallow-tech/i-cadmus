<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Get Certified | I-CADMUS — Seafood Integrity Certification Programme</title>
<meta name="description" content="Earn the I-CADMUS certification. A global credential for seafood integrity professionals. Self-paced, case-driven, and free to start at the Consumer tier." />

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
    --shadow-sm: 0 1px 2px rgba(0,25,50,.06);
    --shadow-md: 0 4px 12px rgba(0,25,50,.08);
    --shadow-lg: 0 12px 32px rgba(0,25,50,.10);
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

  /* =========================================================
     CONTAINER
     ========================================================= */
  .container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* =========================================================
     UTILITY BAR
     ========================================================= */
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

  /* =========================================================
     HEADER / NAV
     ========================================================= */
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
    gap: 40px;
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
  .brand-mark {
    width: 44px;
    height: 44px;
    background: var(--brand);
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 22px;
    font-weight: 700;
    border-radius: 4px;
    position: relative;
  }
  .brand-mark::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 8px;
    right: 8px;
    height: 2px;
    background: var(--accent);
  }
  .brand small {
    display: block;
    font-size: 11px;
    font-weight: 400;
    color: var(--ink-3);
    letter-spacing: 0.04em;
    text-transform: uppercase;
    margin-top: 2px;
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
    padding: 0 16px;
    font-size: 15px;
    font-weight: 500;
    color: var(--ink-2);
    border-bottom: 3px solid transparent;
    transition: color 0.15s, border-color 0.15s;
  }
  .nav-primary > li > a:hover,
  .nav-primary > li > a.active {
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

  /* =========================================================
     BUTTONS
     ========================================================= */
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
    font-family: var(--sans);
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
  .btn-secondary:hover { background: var(--brand-dark); }
  .btn-outline {
    background: transparent;
    color: var(--brand);
    border-color: var(--brand);
  }
  .btn-outline:hover {
    background: var(--brand);
    color: #fff;
  }
  .btn-ghost {
    background: transparent;
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .btn-ghost:hover {
    background: #fff;
    color: var(--brand);
    border-color: #fff;
  }
  .btn-lg {
    padding: 14px 28px;
    font-size: 15px;
  }
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     SECTION GENERIC
     ========================================================= */
  section { padding: 100px 0; }

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
    font-size: clamp(34px, 4vw, 48px);
    line-height: 1.1;
    font-weight: 400;
    letter-spacing: -0.015em;
    color: var(--brand);
    margin-bottom: 20px;
  }
  .section-h strong { font-weight: 600; }
  .section-sub {
    font-size: 18px;
    color: var(--ink-2);
    max-width: 60ch;
    line-height: 1.55;
    margin-bottom: 56px;
  }
  .text-center { text-align: center; }
  .text-center .section-eyebrow { justify-content: center; }
  .text-center .section-eyebrow::before { display: none; }
  .text-center .section-sub { margin-left: auto; margin-right: auto; }

  /* =========================================================
     PAGE HERO (cert-specific)
     ========================================================= */
  .cert-hero {
    background: var(--brand-dark);
    color: #fff;
    position: relative;
    overflow: hidden;
    padding: 96px 0 112px;
  }
  .cert-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 75% 25%, rgba(0,131,143,0.28), transparent 55%),
      radial-gradient(circle at 15% 85%, rgba(200,16,46,0.18), transparent 60%);
    pointer-events: none;
  }
  .cert-hero::after {
    content: '';
    position: absolute;
    right: -80px;
    bottom: -80px;
    width: 640px;
    height: 640px;
    background-image: radial-gradient(circle at center, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
    mask-image: radial-gradient(circle at center, black, transparent 70%);
    -webkit-mask-image: radial-gradient(circle at center, black, transparent 70%);
  }
  .cert-hero-inner {
    position: relative;
    z-index: 1;
    max-width: 860px;
  }
  .cert-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.88);
    padding: 6px 14px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 100px;
    margin-bottom: 32px;
  }
  .cert-hero-badge::before {
    content: '';
    width: 7px;
    height: 7px;
    background: var(--gold);
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(184,135,11,0.28);
  }
  .cert-hero h1 {
    font-family: var(--serif);
    font-weight: 400;
    font-size: clamp(40px, 5.5vw, 64px);
    line-height: 1.08;
    letter-spacing: -0.015em;
    margin-bottom: 24px;
    color: #fff;
  }
  .cert-hero h1 strong {
    font-weight: 600;
    background: linear-gradient(120deg, #fff 0%, #b3d9f2 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .cert-hero .lede {
    font-size: 19px;
    color: rgba(255,255,255,0.85);
    max-width: 62ch;
    line-height: 1.5;
    margin-bottom: 40px;
  }
  .cert-hero-actions {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
  }
  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.65);
    margin-bottom: 28px;
    flex-wrap: wrap;
  }
  .breadcrumb a { color: rgba(255,255,255,0.85); transition: color 0.15s; }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.35); }
  .breadcrumb .current { color: #fff; }

  /* =========================================================
     TIERS SECTION
     ========================================================= */
  .tiers {
    background: var(--bg-soft);
  }
  .tiers-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    align-items: start;
  }
  .tier-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 36px 32px 32px;
    position: relative;
    transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
  }
  .tier-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
    border-color: var(--line-2);
  }
  .tier-card.featured {
    border-color: var(--brand);
    border-width: 2px;
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
  }
  .tier-card.featured:hover {
    transform: translateY(-12px);
  }
  .tier-featured-tag {
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--accent);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 5px 16px;
    border-radius: 100px;
    white-space: nowrap;
  }
  .tier-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--teal);
    margin-bottom: 10px;
    display: block;
  }
  .tier-card.featured .tier-label { color: var(--accent); }
  .tier-name {
    font-family: var(--serif);
    font-size: 26px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 6px;
    line-height: 1.2;
  }
  .tier-price {
    margin: 20px 0 16px;
    line-height: 1;
  }
  .tier-price .amount {
    font-family: var(--serif);
    font-size: 44px;
    font-weight: 600;
    color: var(--brand);
    letter-spacing: -0.02em;
  }
  .tier-price .currency {
    font-size: 20px;
    font-weight: 500;
    color: var(--ink-2);
    vertical-align: top;
    margin-top: 8px;
    display: inline-block;
    margin-right: 2px;
  }
  .tier-price .period {
    font-size: 14px;
    color: var(--ink-3);
    font-weight: 400;
    margin-left: 4px;
  }
  .tier-desc {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.55;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--line);
    margin-bottom: 24px;
  }
  .tier-features {
    list-style: none;
    margin-bottom: 32px;
  }
  .tier-features li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 14px;
    color: var(--ink-2);
    padding: 6px 0;
    line-height: 1.45;
  }
  .tier-features li::before {
    content: '';
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: var(--bg-soft);
    border: 1.5px solid var(--line-2);
    flex-shrink: 0;
    margin-top: 1px;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 9l3.5 3.5L14 6' stroke='%2300838f' stroke-width='1.8' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    background-size: cover;
  }
  .tier-card.featured .tier-features li::before {
    border-color: var(--brand);
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 9l3.5 3.5L14 6' stroke='%23003a5d' stroke-width='1.8' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
  }
  .tier-features .inherited {
    color: var(--muted);
    font-style: italic;
    font-size: 13px;
  }
  .tier-features .inherited::before {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 9l3.5 3.5L14 6' stroke='%238a929c' stroke-width='1.6' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    opacity: 0.6;
  }
  .tier-card .tier-btn {
    width: 100%;
    justify-content: center;
    padding: 14px 24px;
    font-size: 15px;
  }
  .tier-card.featured .tier-btn {
    background: var(--brand);
    border-color: var(--brand);
    color: #fff;
  }
  .tier-card.featured .tier-btn:hover {
    background: var(--brand-dark);
    border-color: var(--brand-dark);
  }

  /* =========================================================
     HOW IT WORKS
     ========================================================= */
  .how-it-works {
    background: var(--brand-dark);
    color: #fff;
    position: relative;
    overflow: hidden;
  }
  .how-it-works::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 90% 10%, rgba(0,131,143,0.25), transparent 50%),
      radial-gradient(circle at 10% 90%, rgba(184,135,11,0.12), transparent 55%);
    pointer-events: none;
  }
  .how-it-works .section-eyebrow { color: #ff6b81; }
  .how-it-works .section-eyebrow::before { background: #ff6b81; }
  .how-it-works .section-h { color: #fff; }
  .how-it-works .section-sub { color: rgba(255,255,255,0.75); }
  .steps-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    position: relative;
    z-index: 1;
  }
  .steps-grid::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 16%;
    right: 16%;
    height: 1px;
    background: rgba(255,255,255,0.15);
  }
  .step {
    position: relative;
  }
  .step-num {
    width: 80px;
    height: 80px;
    background: #fff;
    color: var(--brand);
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 32px;
    position: relative;
    z-index: 1;
    box-shadow: 0 0 0 6px var(--brand-dark), 0 0 0 7px rgba(255,255,255,0.18);
    flex-shrink: 0;
  }
  .step h3 {
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 14px;
    line-height: 1.2;
    color: #fff;
  }
  .step p {
    font-size: 15px;
    color: rgba(255,255,255,0.78);
    line-height: 1.65;
    margin-bottom: 18px;
  }
  .step .step-meta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    color: rgba(255,255,255,0.5);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    font-weight: 600;
    padding: 5px 12px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 100px;
  }
  .step .step-meta::before {
    content: '⏱';
    font-size: 12px;
  }

  /* =========================================================
     ENROLMENT FORM
     ========================================================= */
  .enrol-section {
    background: var(--bg-soft);
  }
  .enrol-wrap {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 80px;
    align-items: start;
  }
  .enrol-aside h3 {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1.2;
    margin-bottom: 16px;
  }
  .enrol-aside p {
    font-size: 16px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 28px;
  }
  .enrol-trust {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .enrol-trust-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px 20px;
    background: #fff;
    border: 1px solid var(--line);
    border-left: 3px solid var(--teal);
    border-radius: 4px;
  }
  .enrol-trust-icon {
    font-size: 22px;
    flex-shrink: 0;
    margin-top: 1px;
  }
  .enrol-trust-item h5 {
    font-size: 14px;
    font-weight: 600;
    color: var(--ink);
    margin-bottom: 2px;
  }
  .enrol-trust-item p {
    font-size: 13px;
    color: var(--ink-3);
    margin: 0;
    line-height: 1.5;
  }
  .enrol-form-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 44px 40px;
    box-shadow: var(--shadow-md);
  }
  .enrol-form-card h3 {
    font-family: var(--serif);
    font-size: 26px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 8px;
    line-height: 1.2;
  }
  .enrol-form-card .form-intro {
    font-size: 14px;
    color: var(--ink-3);
    margin-bottom: 32px;
    border-bottom: 1px solid var(--line);
    padding-bottom: 24px;
  }
  .form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px 24px;
  }
  .form-grid .form-group.full { grid-column: 1 / -1; }
  .form-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .form-group label {
    font-size: 13px;
    font-weight: 600;
    color: var(--ink);
    letter-spacing: 0.01em;
  }
  .form-group label .optional {
    font-weight: 400;
    color: var(--muted);
    margin-left: 4px;
    font-size: 12px;
  }
  .form-group input,
  .form-group select,
  .form-group textarea {
    width: 100%;
    padding: 12px 14px;
    font-family: var(--sans);
    font-size: 15px;
    color: var(--ink);
    background: var(--bg);
    border: 1.5px solid var(--line-2);
    border-radius: 4px;
    transition: border-color 0.15s, box-shadow 0.15s;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
  }
  .form-group input::placeholder,
  .form-group textarea::placeholder { color: var(--muted); }
  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    border-color: var(--brand);
    box-shadow: 0 0 0 3px rgba(0,58,93,0.1);
  }
  .form-group select {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 8l5 5 5-5' stroke='%235c6470' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 18px;
    padding-right: 38px;
    cursor: pointer;
  }
  .form-group textarea {
    resize: vertical;
    min-height: 110px;
    line-height: 1.5;
  }
  .form-submit-row {
    margin-top: 28px;
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }
  .form-submit-row .btn {
    padding: 14px 32px;
    font-size: 15px;
    flex-shrink: 0;
  }
  .form-note {
    font-size: 12px;
    color: var(--muted);
    line-height: 1.5;
    max-width: 34ch;
  }
  .form-success {
    display: none;
    background: #e8f7f0;
    border: 1px solid #a8e4c4;
    border-left: 4px solid #22c37d;
    border-radius: 4px;
    padding: 20px 24px;
    margin-top: 24px;
  }
  .form-success.visible { display: flex; align-items: flex-start; gap: 14px; }
  .form-success-icon { font-size: 24px; flex-shrink: 0; }
  .form-success h4 {
    font-size: 16px;
    font-weight: 600;
    color: #157a4a;
    margin-bottom: 4px;
  }
  .form-success p { font-size: 14px; color: #1d6a42; line-height: 1.5; margin: 0; }

  /* =========================================================
     FAQ
     ========================================================= */
  .faq-section {
    background: #fff;
  }
  .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1.6fr;
    gap: 80px;
    align-items: start;
  }
  .faq-aside h3 {
    font-family: var(--serif);
    font-size: 36px;
    font-weight: 400;
    color: var(--brand);
    line-height: 1.15;
    margin-bottom: 20px;
  }
  .faq-aside h3 strong { font-weight: 600; }
  .faq-aside p {
    font-size: 16px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 28px;
  }
  .faq-list {
    display: flex;
    flex-direction: column;
    gap: 0;
    border-top: 1px solid var(--line);
  }
  .faq-item {
    border-bottom: 1px solid var(--line);
  }
  .faq-item summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 24px 0;
    font-size: 17px;
    font-weight: 600;
    color: var(--ink);
    cursor: pointer;
    list-style: none;
    transition: color 0.15s;
    user-select: none;
  }
  .faq-item summary::-webkit-details-marker { display: none; }
  .faq-item summary:hover { color: var(--brand); }
  .faq-item[open] summary { color: var(--brand); }
  .faq-toggle {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: var(--bg-soft);
    border: 1.5px solid var(--line-2);
    display: grid;
    place-items: center;
    flex-shrink: 0;
    color: var(--brand);
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    transition: background 0.15s, transform 0.2s, border-color 0.15s;
  }
  .faq-item[open] .faq-toggle {
    background: var(--brand);
    border-color: var(--brand);
    color: #fff;
    transform: rotate(45deg);
  }
  .faq-answer {
    padding: 0 0 24px;
    font-size: 15px;
    color: var(--ink-2);
    line-height: 1.7;
    max-width: 72ch;
  }
  .faq-answer a {
    color: var(--brand);
    text-decoration: underline;
    font-weight: 500;
  }
  .faq-answer a:hover { color: var(--accent); }

  /* =========================================================
     CTA BAND
     ========================================================= */
  .cta-band {
    background: var(--brand);
    background-image: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
    color: #fff;
    padding: 80px 0;
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
    font-size: clamp(28px, 3vw, 40px);
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

  /* =========================================================
     FOOTER (mirror of about.php)
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
  .footer-brand-mark {
    width: 44px;
    height: 44px;
    background: #fff;
    color: var(--brand);
    display: grid;
    place-items: center;
    font-size: 22px;
    font-weight: 700;
    border-radius: 4px;
    position: relative;
  }
  .footer-brand-mark::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 8px;
    right: 8px;
    height: 2px;
    background: var(--accent);
  }
  .footer-brand-text { color: #fff; font-weight: 700; font-size: 22px; }
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
  .footer-col a { color: rgba(255,255,255,0.65); transition: color 0.15s; }
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
     REVEAL ANIMATION
     ========================================================= */
  .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s, transform 0.7s; }
  .reveal.in { opacity: 1; transform: translateY(0); }

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .tiers-grid { grid-template-columns: 1fr; max-width: 520px; margin: 0 auto; }
    .tier-card.featured { transform: none; }
    .tier-card.featured:hover { transform: translateY(-6px); }
    .steps-grid { grid-template-columns: 1fr; gap: 48px; }
    .steps-grid::before { display: none; }
    .enrol-wrap { grid-template-columns: 1fr; gap: 48px; }
    .faq-grid { grid-template-columns: 1fr; gap: 40px; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
    .cert-hero { padding: 64px 0 80px; }
  }

  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .cert-hero { padding: 48px 0 64px; }
    .cert-hero h1 { font-size: clamp(32px, 9vw, 44px); }
    .cert-hero .lede { font-size: 16px; }
    .cert-hero-actions { flex-direction: column; gap: 12px; }
    .cert-hero-actions .btn { width: 100%; justify-content: center; }
    .tiers-grid { grid-template-columns: 1fr; max-width: none; }
    .form-grid { grid-template-columns: 1fr; }
    .form-grid .form-group.full { grid-column: 1; }
    .enrol-form-card { padding: 28px 24px; }
    .form-submit-row { flex-direction: column; align-items: flex-start; gap: 12px; }
    .form-submit-row .btn { width: 100%; justify-content: center; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
    .faq-item summary { font-size: 15px; }
    .step-num { width: 64px; height: 64px; font-size: 24px; }
    .section-h { font-size: clamp(28px, 7vw, 40px); }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ==============================================================
     HERO
     ============================================================== -->
<section class="cert-hero">
  <div class="container">
    <div class="cert-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <span class="current">Get Certified</span>
      </div>
      <div class="cert-hero-badge">I-CADMUS Certification Programme</div>
      <h1>Earn the <strong>I-CADMUS Certification</strong></h1>
      <p class="lede">Join a global network of certified seafood integrity professionals. Self-paced. Case-driven. Free to start.</p>
      <div class="cert-hero-actions">
        <a href="#tiers" class="btn btn-primary btn-lg">Start Free (Consumer) <span class="arrow">→</span></a>
        <a href="#tiers" class="btn btn-ghost btn-lg">For Organisations</a>
      </div>
    </div>
  </div>
</section>


<!-- ==============================================================
     THREE TIERS
     ============================================================== -->
<section class="tiers" id="tiers">
  <div class="container">
    <div class="text-center">
      <div class="section-eyebrow">Certification Tiers</div>
      <h2 class="section-h">The right level for <strong>your role</strong></h2>
      <p class="section-sub">Three tiers — from a free consumer credential to full organisational deployment. Choose the path that matches your context.</p>
    </div>

    <div class="tiers-grid">

      <!-- CONSUMER TIER -->
      <div class="tier-card reveal">
        <span class="tier-label">Consumer Tier</span>
        <h3 class="tier-name">Consumer</h3>
        <p class="tier-desc">For individuals who want to identify and call out seafood fraud.</p>
        <div class="tier-price">
          <span class="amount">Free</span>
        </div>
        <ul class="tier-features">
          <li>Access to I-CADMUS framework guide</li>
          <li>Online self-assessment</li>
          <li>Digital badge on completion</li>
        </ul>
        <a href="contact.php" class="btn btn-outline tier-btn">Enrol now <span class="arrow">→</span></a>
      </div>

      <!-- PROFESSIONAL TIER (featured) -->
      <div class="tier-card featured reveal">
        <div class="tier-featured-tag">Most Popular</div>
        <span class="tier-label">Professional Tier</span>
        <h3 class="tier-name">Professional</h3>
        <p class="tier-desc">For retail, foodservice and supply-chain professionals.</p>
        <div class="tier-price">
          <span class="currency">$</span><span class="amount">295</span><span class="period">AUD · one-time</span>
        </div>
        <ul class="tier-features">
          <li class="inherited">Everything in Consumer, plus:</li>
          <li>Full case-study bank (8 scenarios)</li>
          <li>Proctored 90-min assessment</li>
          <li>Printed certificate + SCA registry listing</li>
          <li>Priority CPD updates</li>
        </ul>
        <a href="contact.php" class="btn btn-primary tier-btn">Enrol now <span class="arrow">→</span></a>
      </div>

      <!-- ORGANISATIONAL TIER -->
      <div class="tier-card reveal">
        <span class="tier-label">Organisational Tier</span>
        <h3 class="tier-name">Organisational</h3>
        <p class="tier-desc">For processors, distributors and regulatory bodies.</p>
        <div class="tier-price">
          <span class="amount" style="font-size:34px; letter-spacing:-0.01em;">Custom</span>
        </div>
        <ul class="tier-features">
          <li class="inherited">Everything in Professional, plus:</li>
          <li>Team enrolments (5–500 seats)</li>
          <li>Branded audit checklist templates</li>
          <li>Dedicated account manager</li>
          <li>API access to certification registry</li>
        </ul>
        <a href="contact.php" class="btn btn-outline tier-btn">Contact us <span class="arrow">→</span></a>
      </div>

    </div>
  </div>
</section>


<!-- ==============================================================
     HOW IT WORKS
     ============================================================== -->
<section class="how-it-works" id="how-it-works">
  <div class="container">
    <div class="section-eyebrow">The Process</div>
    <h2 class="section-h">How it works</h2>
    <p class="section-sub">Three clear steps from first reading to a live credential in the SCA registry.</p>

    <div class="steps-grid">

      <div class="step reveal">
        <div class="step-num">1</div>
        <h3>Learn the framework</h3>
        <p>Read <em>Sea of Deception</em> and the accompanying I-CADMUS framework guide. Seven fraud categories, real case evidence, and the policy playbook — everything you need to understand how seafood deception works and how to classify it.</p>
        <span class="step-meta">~6–8 hrs</span>
      </div>

      <div class="step reveal">
        <div class="step-num">2</div>
        <h3>Practice on real cases</h3>
        <p>Work through 8 live scenarios drawn directly from Chapter 14 of <em>Sea of Deception</em>. Each scenario mirrors a documented fraud event. Benchmark your classifications against industry peers on the live leaderboard.</p>
        <span class="step-meta">~2–3 hrs</span>
      </div>

      <div class="step reveal">
        <div class="step-num">3</div>
        <h3>Sit the assessment</h3>
        <p>Complete a 90-minute proctored online exam covering identification, classification, and response. Pass, and your credential goes live in the publicly searchable SCA certification registry — verifiable by any employer or regulator.</p>
        <span class="step-meta">90 min</span>
      </div>

    </div>
  </div>
</section>


<!-- ==============================================================
     ENROLMENT FORM
     ============================================================== -->
<section class="enrol-section" id="enrol">
  <div class="container">
    <div class="enrol-wrap">

      <!-- Aside -->
      <div>
        <div class="section-eyebrow">Enrolment</div>
        <h3 class="section-h" style="margin-bottom:16px;">Ready to <strong>get started?</strong></h3>
        <p>Complete the form and our team will confirm your enrolment within one business day. Consumer enrolments are activated automatically.</p>

        <div class="enrol-trust">
          <div class="enrol-trust-item reveal">
            <div class="enrol-trust-icon">🎓</div>
            <div>
              <h5>Globally recognised</h5>
              <p>Credentials listed in the publicly searchable SCA certification registry.</p>
            </div>
          </div>
          <div class="enrol-trust-item reveal">
            <div class="enrol-trust-icon">🔒</div>
            <div>
              <h5>Secure &amp; proctored</h5>
              <p>Professional and Organisational assessments are proctored to protect credential integrity.</p>
            </div>
          </div>
          <div class="enrol-trust-item reveal">
            <div class="enrol-trust-icon">⚡</div>
            <div>
              <h5>Fully self-paced</h5>
              <p>Study on your schedule. No live sessions, no time-zones to work around.</p>
            </div>
          </div>
          <div class="enrol-trust-item reveal">
            <div class="enrol-trust-icon">📋</div>
            <div>
              <h5>CPD-recognised</h5>
              <p>Accepted as continuing professional development by affiliated industry bodies.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Form card -->
      <div class="enrol-form-card reveal">
        <h3>Enrolment Form</h3>
        <p class="form-intro">Fields marked with an asterisk (*) are required. We will never share your details with third parties.</p>

        <form id="enrolForm" novalidate>
          <div class="form-grid">

            <div class="form-group">
              <label for="fullName">Full name *</label>
              <input type="text" id="fullName" name="fullName" placeholder="Jane Smith" required autocomplete="name" />
            </div>

            <div class="form-group">
              <label for="email">Email address *</label>
              <input type="email" id="email" name="email" placeholder="jane@example.com" required autocomplete="email" />
            </div>

            <div class="form-group full">
              <label for="organisation">Organisation <span class="optional">(optional)</span></label>
              <input type="text" id="organisation" name="organisation" placeholder="Your company or institution" autocomplete="organization" />
            </div>

            <div class="form-group full">
              <label for="enrolAs">I am enrolling as *</label>
              <select id="enrolAs" name="enrolAs" required>
                <option value="" disabled selected>Select a tier…</option>
                <option value="consumer">Consumer (Free)</option>
                <option value="professional">Professional ($295 AUD)</option>
                <option value="organisation">Organisation (enquire)</option>
              </select>
            </div>

            <div class="form-group full">
              <label for="roleNote">Tell us about your role <span class="optional">(optional)</span></label>
              <textarea id="roleNote" name="roleNote" placeholder="e.g. I work in retail seafood procurement and want to upskill my team on fraud identification…"></textarea>
            </div>

          </div><!-- /.form-grid -->

          <div class="form-submit-row">
            <button type="submit" class="btn btn-primary">Submit Enrolment <span class="arrow">→</span></button>
            <p class="form-note">We will respond within one business day. Consumer enrolments activate automatically.</p>
          </div>

          <div class="form-success" id="formSuccess" role="alert" aria-live="polite">
            <div class="form-success-icon">✅</div>
            <div>
              <h4>Enrolment received — thank you!</h4>
              <p>We have logged your details and will be in touch within one business day with your access instructions. Consumer tier enrolments receive their access link immediately by email.</p>
            </div>
          </div>
        </form>
      </div><!-- /.enrol-form-card -->

    </div><!-- /.enrol-wrap -->
  </div>
</section>


<!-- ==============================================================
     FAQ
     ============================================================== -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="faq-grid">

      <div>
        <div class="section-eyebrow">FAQ</div>
        <h3 class="faq-aside h3">Frequently asked <strong>questions</strong></h3>
        <p>Can't find the answer you need? <a href="contact.php" style="color:var(--brand); text-decoration:underline; font-weight:500;">Contact the team directly →</a></p>
      </div>

      <div class="faq-list">

        <details class="faq-item reveal">
          <summary>
            Is the Consumer tier really free?
            <span class="faq-toggle">+</span>
          </summary>
          <div class="faq-answer">
            Yes — completely. The Consumer tier requires no payment and no credit card. You get access to the I-CADMUS framework guide, the online self-assessment, and a digital badge on completion. We believe that the basic ability to identify seafood fraud should be accessible to everyone.
          </div>
        </details>

        <details class="faq-item reveal">
          <summary>
            How long does certification take?
            <span class="faq-toggle">+</span>
          </summary>
          <div class="faq-answer">
            The full Professional pathway takes most learners around 10–12 hours spread across their own schedule: approximately 6–8 hours studying the framework and reading <em>Sea of Deception</em>, 2–3 hours working through the case-study scenarios, and 90 minutes for the proctored assessment. There is no deadline — you can take as long as you need before sitting the exam.
          </div>
        </details>

        <details class="faq-item reveal">
          <summary>
            Is it recognised internationally?
            <span class="faq-toggle">+</span>
          </summary>
          <div class="faq-answer">
            The I-CADMUS certification is issued by the Seafood Consumer Association and listed in the publicly searchable SCA certification registry. The credential is gaining recognition across Australia, New Zealand, the European Union, and key Asian markets, with new institutional partnerships being added on a one-partner-per-country basis. We are pursuing formal CPD accreditation with affiliated industry bodies in each jurisdiction.
          </div>
        </details>

        <details class="faq-item reveal">
          <summary>
            What happens after I pass?
            <span class="faq-toggle">+</span>
          </summary>
          <div class="faq-answer">
            Upon passing the assessment, your credential is activated in the SCA certification registry within 24 hours. Professional tier graduates also receive a printed certificate by post and are listed by name in the registry — verifiable by any employer, regulator, or buyer. You will also receive priority notifications when the framework is updated and when CPD content is added.
          </div>
        </details>

        <details class="faq-item reveal">
          <summary>
            Can I enrol my whole team?
            <span class="faq-toggle">+</span>
          </summary>
          <div class="faq-answer">
            Yes. The Organisational tier is designed exactly for that — from 5 to 500 seats. You get a dedicated account manager, branded audit checklist templates, and API access to the certification registry so you can integrate credential verification directly into your compliance or HR systems. <a href="contact.php">Contact us</a> to get a custom quote for your team size.
          </div>
        </details>

      </div><!-- /.faq-list -->
    </div><!-- /.faq-grid -->
  </div>
</section>


<!-- ==============================================================
     CTA BAND
     ============================================================== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Start your certification <strong>today</strong></h2>
        <p>The Consumer tier is free and takes under five minutes to register. No credit card required.</p>
      </div>
      <div class="cta-band-actions">
        <a href="#enrol" class="btn btn-primary btn-lg">Enrol now <span class="arrow">→</span></a>
        <a href="contact.php" class="btn btn-ghost btn-lg">Talk to us</a>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>

<script>
  // ── Reveal on scroll ──────────────────────────────────────────
  const revealObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

  // ── Enrolment form ────────────────────────────────────────────
  document.getElementById('enrolForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name   = document.getElementById('fullName').value.trim();
    const email  = document.getElementById('email').value.trim();
    const tier   = document.getElementById('enrolAs').value;

    // Basic client-side validation
    if (!name || !email || !tier) {
      const first = !name
        ? document.getElementById('fullName')
        : !email
          ? document.getElementById('email')
          : document.getElementById('enrolAs');
      first.focus();
      first.style.borderColor = 'var(--accent)';
      first.addEventListener('input', function reset() {
        first.style.borderColor = '';
        first.removeEventListener('input', reset);
      });
      return;
    }

    // Hide submit row, show success message
    const submitRow = this.querySelector('.form-submit-row');
    const success   = document.getElementById('formSuccess');
    submitRow.style.display = 'none';
    success.classList.add('visible');

    // Scroll success into view
    success.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  });
</script>
</body>
</html>
