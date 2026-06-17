<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Investors | I-CADMUS — Seafood Consumer Association</title>
<meta name="description" content="Investor relations and partnership information for the Seafood Consumer Association — the organisation behind the I-CADMUS seafood integrity framework." />

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
  .utility-locale { display: flex; align-items: center; gap: 8px; }
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
     PRIMARY NAV
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
  .nav-primary { display: flex; gap: 4px; flex: 1; }
  .nav-primary > li { list-style: none; position: relative; }
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
  .nav-primary > li > a:hover { color: var(--brand); border-bottom-color: var(--accent); }
  .nav-primary > li > a .chev { font-size: 10px; margin-top: 2px; transition: transform 0.2s; }
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
  .nav-primary > li:hover .nav-mega { opacity: 1; visibility: visible; transform: translateY(0); }
  .nav-mega-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 24px; }
  .nav-mega a { display: block; padding: 10px 12px; border-radius: 4px; font-size: 14px; color: var(--ink-2); transition: background 0.15s, color 0.15s; }
  .nav-mega a:hover { background: var(--bg-soft); color: var(--brand); }
  .nav-mega a strong { display: block; font-weight: 600; color: var(--ink); margin-bottom: 2px; font-size: 14px; }
  .nav-mega a span { color: var(--ink-3); font-size: 12px; }
  .header-tools { display: flex; align-items: center; gap: 12px; }
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
  }
  .btn-primary { background: var(--accent); color: #fff; border-color: var(--accent); }
  .btn-primary:hover { background: var(--accent-dark); border-color: var(--accent-dark); }
  .btn-secondary { background: var(--brand); color: #fff; border-color: var(--brand); }
  .btn-secondary:hover { background: var(--brand-dark); }
  .btn-outline { background: transparent; color: var(--brand); border-color: var(--brand); }
  .btn-outline:hover { background: var(--brand); color: #fff; }
  .btn-link {
    color: var(--brand);
    font-weight: 600;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border-bottom: 1px solid transparent;
    padding-bottom: 2px;
    transition: border-color 0.15s, gap 0.2s;
  }
  .btn-link:hover { border-bottom-color: var(--brand); gap: 10px; }
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     SECTION UTILITIES
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
  .section-eyebrow::before { content: ''; width: 32px; height: 2px; background: var(--accent); }
  .section-h {
    font-family: var(--serif);
    font-size: clamp(34px, 4vw, 48px);
    line-height: 1.1;
    font-weight: 400;
    letter-spacing: -0.015em;
    color: var(--brand);
    margin-bottom: 20px;
    max-width: 22ch;
  }
  .section-h strong { font-weight: 600; }
  .section-sub {
    font-size: 18px;
    color: var(--ink-2);
    max-width: 60ch;
    line-height: 1.55;
    margin-bottom: 56px;
  }

  /* CTA BAND */
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
  .cta-band p { font-size: 16px; color: rgba(255,255,255,0.85); max-width: 60ch; }
  .cta-band-actions { display: flex; gap: 12px; flex-wrap: wrap; }
  .cta-band .btn-outline { color: #fff; border-color: rgba(255,255,255,0.4); }
  .cta-band .btn-outline:hover { background: #fff; color: var(--brand); }

  /* =========================================================
     PAGE HERO
     ========================================================= */
  .page-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
    padding: 80px 0 100px;
  }
  .page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%),
      radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%);
    pointer-events: none;
  }
  .page-hero::after {
    content: '';
    position: absolute;
    right: -100px;
    bottom: -100px;
    width: 600px;
    height: 600px;
    background-image: radial-gradient(circle at center, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
    mask-image: radial-gradient(circle at center, black, transparent 70%);
    -webkit-mask-image: radial-gradient(circle at center, black, transparent 70%);
  }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
    flex-wrap: wrap;
  }
  .breadcrumb a { color: rgba(255,255,255,0.85); transition: color 0.15s; }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow {
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
  .page-hero h1 {
    font-family: var(--serif);
    font-weight: 400;
    font-size: clamp(36px, 5vw, 56px);
    line-height: 1.1;
    letter-spacing: -0.015em;
    margin-bottom: 20px;
    color: #fff;
  }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede {
    font-size: 19px;
    color: rgba(255,255,255,0.88);
    max-width: 60ch;
    line-height: 1.5;
  }

  /* =========================================================
     METRICS BAR
     ========================================================= */
  .metrics { background: #fff; border-bottom: 1px solid var(--line); padding: 0; }
  .metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-left: 1px solid var(--line);
  }
  .metric { padding: 36px 32px; border-right: 1px solid var(--line); transition: background 0.2s; }
  .metric:hover { background: var(--bg-soft); }
  .metric-num {
    font-family: var(--serif);
    font-size: 48px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    letter-spacing: -0.02em;
    margin-bottom: 8px;
  }
  .metric-num .unit { font-size: 24px; color: var(--accent); margin-left: 2px; }
  .metric-label {
    font-size: 13px;
    color: var(--ink-3);
    font-weight: 500;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    margin-bottom: 8px;
  }
  .metric-desc { font-size: 14px; color: var(--ink-2); line-height: 1.5; }

  /* =========================================================
     INVESTORS-SPECIFIC STYLES
     ========================================================= */
  .prose { max-width: 820px; }
  .prose p { font-size: 17px; color: var(--ink-2); line-height: 1.65; margin-bottom: 20px; }
  .prose h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin: 36px 0 12px;
    line-height: 1.25;
  }
  .prose ul { padding-left: 24px; margin-bottom: 24px; }
  .prose li { font-size: 17px; color: var(--ink-2); line-height: 1.6; margin-bottom: 8px; }
  .prose a { color: var(--brand); text-decoration: underline; }
  .prose a:hover { color: var(--accent); }

  .two-col-section { background: var(--bg-soft); }
  .two-col-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: start;
  }

  .revenue-list { list-style: none; padding: 0; margin: 0; }
  .revenue-item {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    padding: 20px 0;
    border-bottom: 1px solid var(--line);
  }
  .revenue-item:last-child { border-bottom: none; }
  .revenue-icon {
    width: 44px;
    height: 44px;
    flex-shrink: 0;
    background: var(--brand);
    color: #fff;
    border-radius: 6px;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
  }
  .revenue-item h4 { font-family: var(--serif); font-size: 17px; font-weight: 600; color: var(--brand); margin-bottom: 4px; }
  .revenue-item p { font-size: 14px; color: var(--ink-2); line-height: 1.5; margin: 0; }

  .governance-card {
    background: #fff;
    border: 1px solid var(--line);
    border-top: 4px solid var(--brand);
    border-radius: 4px;
    padding: 32px 28px;
  }
  .governance-card h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 16px;
  }
  .governance-card p { font-size: 15px; color: var(--ink-2); line-height: 1.65; margin-bottom: 14px; }
  .governance-card p:last-child { margin-bottom: 0; }

  .governance-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }

  .contact-panel {
    background: linear-gradient(135deg, var(--brand-dark), var(--brand));
    color: #fff;
    border-radius: 8px;
    padding: 48px;
    position: relative;
    overflow: hidden;
  }
  .contact-panel::before {
    content: '';
    position: absolute;
    right: -80px;
    top: -80px;
    width: 320px;
    height: 320px;
    background: radial-gradient(circle, rgba(0,131,143,0.3), transparent 70%);
    pointer-events: none;
  }
  .contact-panel-inner { position: relative; z-index: 1; }
  .contact-panel-tag {
    display: inline-block;
    background: var(--gold);
    color: var(--brand-dark);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 100px;
    margin-bottom: 20px;
  }
  .contact-panel h2 {
    font-family: var(--serif);
    font-size: clamp(26px, 3vw, 36px);
    font-weight: 400;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 16px;
  }
  .contact-panel h2 strong { font-weight: 600; }
  .contact-panel p { font-size: 17px; color: rgba(255,255,255,0.88); line-height: 1.6; margin-bottom: 8px; }
  .contact-panel a.email-link {
    display: inline-block;
    font-family: var(--serif);
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    text-decoration: underline;
    margin-top: 8px;
    margin-bottom: 28px;
  }
  .contact-panel a.email-link:hover { color: #ffd25e; }

  /* FOOTER */
  footer { background: #1a1d22; color: rgba(255,255,255,0.75); padding: 80px 0 0; font-size: 14px; }
  .footer-top {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
    gap: 40px;
    padding-bottom: 56px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .footer-brand { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; }
  .footer-brand-mark {
    width: 44px; height: 44px; background: #fff; color: var(--brand);
    display: grid; place-items: center; font-size: 22px; font-weight: 700;
    border-radius: 4px; position: relative;
  }
  .footer-brand-mark::after { content: ''; position: absolute; bottom: 6px; left: 8px; right: 8px; height: 2px; background: var(--accent); }
  .footer-brand-text { color: #fff; font-weight: 700; font-size: 22px; }
  .footer-brand-text small { display: block; font-size: 11px; font-weight: 400; color: rgba(255,255,255,0.6); text-transform: uppercase; letter-spacing: 0.04em; margin-top: 2px; }
  .footer-desc { color: rgba(255,255,255,0.65); line-height: 1.55; margin-bottom: 24px; max-width: 36ch; }
  .footer-newsletter input { width: 100%; padding: 12px 14px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); color: #fff; border-radius: 4px; font-size: 14px; font-family: inherit; margin-bottom: 8px; }
  .footer-newsletter input::placeholder { color: rgba(255,255,255,0.5); }
  .footer-newsletter input:focus { outline: 2px solid var(--accent); border-color: var(--accent); }
  .footer-newsletter button { background: var(--accent); color: #fff; border: none; padding: 12px 18px; font-weight: 600; font-size: 14px; border-radius: 4px; cursor: pointer; width: 100%; transition: background 0.2s; font-family: inherit; }
  .footer-newsletter button:hover { background: var(--accent-dark); }
  .footer-col h5 { color: #fff; font-size: 14px; font-weight: 600; margin-bottom: 18px; letter-spacing: 0.02em; }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 10px; }
  .footer-col a { color: rgba(255,255,255,0.65); transition: color 0.15s; }
  .footer-col a:hover { color: #fff; }
  .footer-bottom { display: grid; grid-template-columns: 1fr auto; gap: 32px; padding: 32px 0; align-items: center; color: rgba(255,255,255,0.5); font-size: 13px; }
  .footer-bottom-links { display: flex; gap: 24px; flex-wrap: wrap; }
  .footer-bottom-links a:hover { color: #fff; }
  .footer-social { display: flex; gap: 8px; margin-top: 20px; }
  .footer-social a { width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); display: grid; place-items: center; color: rgba(255,255,255,0.7); font-size: 13px; font-weight: 700; transition: background 0.2s, color 0.2s; }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .metrics-grid { grid-template-columns: 1fr 1fr; }
    .two-col-grid { grid-template-columns: 1fr; gap: 40px; }
    .governance-grid { grid-template-columns: 1fr; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
    .page-hero { padding: 56px 0 72px; }
  }
  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .metrics-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
    .contact-panel { padding: 32px 24px; }
  }

  .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s, transform 0.7s; }
  .reveal.in { opacity: 1; transform: translateY(0); }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== PAGE HERO ============== -->
<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <span class="current">Investors</span>
      </div>
      <div class="page-hero-eyebrow">Investor Relations</div>
      <h1>Investor <strong>Relations</strong></h1>
      <p class="lede">The Seafood Consumer Association is a mission-driven organisation building the global standard for seafood integrity. We welcome partners who share our commitment to transparency in the food supply chain.</p>
    </div>
  </div>
</section>

<!-- ============== KEY METRICS ============== -->
<div class="metrics">
  <div class="container">
    <div class="metrics-grid">
      <div class="metric reveal">
        <div class="metric-num">7</div>
        <div class="metric-label">Fraud Categories Standardised</div>
        <div class="metric-desc">The I-CADMUS taxonomy covers every known category of seafood fraud in a single, cohesive framework.</div>
      </div>
      <div class="metric reveal">
        <div class="metric-num">3</div>
        <div class="metric-label">Certification Tiers</div>
        <div class="metric-desc">Practitioner, Professional, and Expert — structured to serve individuals, organisations, and institutions.</div>
      </div>
      <div class="metric reveal">
        <div class="metric-num">5<span class="unit">+</span></div>
        <div class="metric-label">Global Academic Partners</div>
        <div class="metric-desc">Bond University leads the inaugural cohort, with five additional regional anchor institutions targeted for 2026–27.</div>
      </div>
      <div class="metric reveal">
        <div class="metric-num">2026</div>
        <div class="metric-label">Established</div>
        <div class="metric-desc">The framework and certification programme launch publicly in 2026, following three years of development and piloting.</div>
      </div>
    </div>
  </div>
</div>

<!-- ============== MISSION & STRUCTURE ============== -->
<section class="two-col-section">
  <div class="container">
    <div class="two-col-grid">
      <div>
        <div class="section-eyebrow">Our Structure</div>
        <h2 class="section-h">A not-for-profit built for <strong>long-term impact.</strong></h2>
        <div class="prose" style="max-width: none;">
          <p>The Seafood Consumer Association operates as a not-for-profit organisation. Our mandate is the public interest: ensuring that consumers, regulators, and industry have access to a reliable, independent standard for seafood integrity.</p>
          <p>We are governed by an independent board drawn from academia, industry, consumer advocacy, and regulatory affairs. Board members are subject to a formal conflict-of-interest policy and serve fixed, renewable terms. No single commercial interest holds a controlling position.</p>
          <p>This structure is deliberate. The credibility of the I-CADMUS framework — and the value of our certification — depends entirely on independence. Organisations and governments rely on us precisely because we are not funded by the industry sectors we assess.</p>
        </div>
      </div>

      <div>
        <div class="section-eyebrow" style="margin-top: 0;">Revenue Streams</div>
        <h3 style="font-family: var(--serif); font-size: 22px; font-weight: 600; color: var(--brand); margin-bottom: 28px; line-height: 1.25;">How the organisation is sustained.</h3>
        <ul class="revenue-list">
          <li class="revenue-item">
            <div class="revenue-icon">C</div>
            <div>
              <h4>Certification Fees</h4>
              <p>Individual and organisational enrolments in the three-tier I-CADMUS certification programme, delivered through partner universities.</p>
            </div>
          </li>
          <li class="revenue-item">
            <div class="revenue-icon">B</div>
            <div>
              <h4>Book &amp; Publications</h4>
              <p>Sales of <em>Sea of Deception</em> and associated educational materials, distributed through trade and academic channels globally.</p>
            </div>
          </li>
          <li class="revenue-item">
            <div class="revenue-icon">L</div>
            <div>
              <h4>Framework Licensing</h4>
              <p>Licensing the I-CADMUS taxonomy and audit tools to regulatory bodies, supply-chain technology platforms, and industry associations.</p>
            </div>
          </li>
          <li class="revenue-item">
            <div class="revenue-icon">P</div>
            <div>
              <h4>Partnership Programmes</h4>
              <p>Structured partnerships with academic institutions, government agencies, and industry bodies — providing co-branding, research access, and programme delivery rights.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============== GOVERNANCE ============== -->
<section>
  <div class="container">
    <div class="section-eyebrow">Governance</div>
    <h2 class="section-h">Independent oversight, <strong>always.</strong></h2>
    <p class="section-sub">Our governance model is designed to protect the integrity of the framework itself. Transparency and accountability are not aspirational — they are structural.</p>

    <div class="governance-grid">
      <div class="governance-card reveal">
        <h3>Board Composition</h3>
        <p>The board is drawn from academic research, consumer law, food science, and international trade regulation. No more than two seats may be held by individuals with current commercial seafood industry affiliations.</p>
        <p>Board meeting minutes are published annually in summary form. Full declarations of interest are held on file and available to audit partners on request.</p>
      </div>
      <div class="governance-card reveal">
        <h3>Conflict-of-Interest Policy</h3>
        <p>All board members, staff, and certification assessors are required to declare interests at appointment and annually thereafter. Declared conflicts are managed through recusal, and conflicts that cannot be managed lead to disqualification.</p>
        <p>The policy is reviewed every two years by external legal counsel and published on request to any partner or regulator.</p>
      </div>
      <div class="governance-card reveal">
        <h3>Financial Accountability</h3>
        <p>The Seafood Consumer Association is subject to standard not-for-profit financial reporting obligations in its country of registration. Annual accounts are prepared by an independent auditor and are available to institutional partners.</p>
        <p>No surpluses are distributed to members or directors. All surpluses are retained for programme development and framework expansion.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CONTACT ============== -->
<section style="background: var(--bg-soft); padding: 80px 0;">
  <div class="container">
    <div class="contact-panel reveal">
      <div class="contact-panel-inner">
        <span class="contact-panel-tag">Get in Touch</span>
        <h2>Investor and partnership <strong>enquiries.</strong></h2>
        <p>If you represent a foundation, government body, academic institution, or industry association interested in a strategic partnership with the Seafood Consumer Association, we welcome a conversation.</p>
        <p>All enquiries are treated in strict confidence. We will respond within five business days.</p>
        <a href="mailto:invest@icadmus.org" class="email-link">invest@icadmus.org</a>
        <div>
          <a href="contact.php" class="btn btn-primary">Contact the team <span class="arrow">→</span></a>
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
        <h2>Want to understand the <strong>framework first</strong>?</h2>
        <p>Before reaching out, explore the I-CADMUS framework, our certification tiers, and our network of academic and industry partners.</p>
      </div>
      <div class="cta-band-actions">
        <a href="framework.php" class="btn btn-primary">View the framework <span class="arrow">→</span></a>
        <a href="partners.php" class="btn btn-outline">Our partners</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
</script>
</body>
</html>
