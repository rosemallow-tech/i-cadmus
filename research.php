<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Further Reading &amp; Research | Sea of Deception | I-CADMUS</title>
<meta name="description" content="68 curated research references on seafood fraud, authentication, illegal fishing, traceability, sustainability, labelling and food integrity — identified during the development of Sea of Deception." />

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

  /* Utility bar, header, footer styles are in the includes */
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
     PAGE HERO
     ========================================================= */
  .research-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    padding: 80px 0 72px;
    position: relative;
    overflow: hidden;
  }
  .research-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 30%, rgba(0,131,143,0.25), transparent 50%);
    pointer-events: none;
  }
  .research-hero .container { position: relative; z-index: 1; }
  .research-hero .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
  }
  .research-hero .breadcrumb a { color: rgba(255,255,255,0.85); }
  .research-hero .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .research-hero .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .research-hero .breadcrumb .current { color: #fff; }
  .research-hero h1 {
    font-family: var(--serif);
    font-weight: 600;
    font-size: clamp(36px, 5vw, 56px);
    line-height: 1.08;
    letter-spacing: -0.015em;
    margin-bottom: 20px;
    color: #fff;
  }
  .research-hero p.lede {
    font-size: 19px;
    color: rgba(255,255,255,0.85);
    max-width: 68ch;
    line-height: 1.55;
    margin-bottom: 12px;
  }
  .research-hero .note {
    font-size: 14px;
    color: rgba(255,255,255,0.6);
    font-style: italic;
    max-width: 68ch;
  }

  /* =========================================================
     SECTION HEADERS
     ========================================================= */
  section { padding: 72px 0; }
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

  /* =========================================================
     CATEGORY SECTIONS
     ========================================================= */
  .cat-section { border-bottom: 1px solid var(--line); }
  .cat-section:last-of-type { border-bottom: none; }
  .cat-section.alt { background: var(--bg-soft); }

  .cat-header {
    display: flex;
    align-items: baseline;
    gap: 16px;
    margin-bottom: 40px;
    flex-wrap: wrap;
  }
  .cat-num {
    font-family: var(--serif);
    font-size: 48px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    opacity: 0.2;
  }
  .cat-header h2 {
    font-family: var(--serif);
    font-size: clamp(26px, 3vw, 36px);
    font-weight: 600;
    color: var(--brand);
    line-height: 1.15;
  }

  /* =========================================================
     REFERENCE CARDS
     ========================================================= */
  .ref-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .ref-card {
    background: #fff;
    border: 1px solid var(--line);
    border-left: 4px solid var(--brand);
    border-radius: 4px;
    padding: 24px 28px;
    transition: border-left-color 0.2s, box-shadow 0.2s;
  }
  .ref-card:hover {
    border-left-color: var(--accent);
    box-shadow: var(--shadow-md);
  }
  .cat-section.alt .ref-card { background: #fff; }
  .ref-title {
    font-family: var(--serif);
    font-size: 17px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1.35;
    margin-bottom: 8px;
  }
  .ref-title a {
    color: var(--brand);
    text-decoration: none;
    transition: color 0.15s;
  }
  .ref-title a:hover { color: var(--accent); text-decoration: underline; }
  .ref-authors {
    font-size: 14px;
    color: var(--ink-2);
    margin-bottom: 6px;
    line-height: 1.5;
  }
  .ref-pub {
    font-size: 13px;
    color: var(--ink-3);
    font-style: italic;
    margin-bottom: 6px;
    line-height: 1.5;
  }
  .ref-doi {
    font-size: 13px;
  }
  .ref-doi a {
    color: var(--teal);
    word-break: break-all;
    text-decoration: none;
    border-bottom: 1px solid transparent;
    transition: border-color 0.15s;
  }
  .ref-doi a:hover { border-bottom-color: var(--teal); }

  /* =========================================================
     BACK LINK & CTA
     ========================================================= */
  .back-strip {
    background: var(--brand);
    background-image: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
    color: #fff;
    padding: 64px 0;
    text-align: center;
  }
  .back-strip h2 {
    font-family: var(--serif);
    font-size: clamp(24px, 3vw, 36px);
    font-weight: 400;
    margin-bottom: 12px;
    color: #fff;
  }
  .back-strip h2 strong { font-weight: 600; }
  .back-strip p {
    font-size: 16px;
    color: rgba(255,255,255,0.8);
    margin-bottom: 28px;
  }
  .back-strip .btn-outline {
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .back-strip .btn-outline:hover {
    background: #fff;
    color: var(--brand);
  }

  /* =========================================================
     FOOTER (mirrors other pages)
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
    .footer-top { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 640px) {
    section { padding: 48px 0; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .cat-num { font-size: 36px; }
    .ref-card { padding: 20px; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== HERO ============== -->
<section class="research-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">/</span>
      <a href="book.php">The Book</a>
      <span class="sep">/</span>
      <span class="current">Further Reading &amp; Research</span>
    </div>
    <h1>Further Reading &amp; Research</h1>
    <p class="lede">A curated collection of 68 research references related to seafood fraud, authentication, illegal fishing, traceability, sustainability, labelling and food integrity &mdash; identified during the development of <em>Sea of Deception</em>.</p>
    <p class="note">Editorial note: Inclusion indicates relevance for further reading, not endorsement of every conclusion. Links and publication details should be checked periodically as this register is updated.</p>
  </div>
</section>

<!-- ============================================================
     CATEGORY 1 — Seafood fraud, authentication & consumer protection
     ============================================================ -->
<section class="cat-section">
  <div class="container">
    <div class="cat-header">
      <div class="cat-num">01</div>
      <h2>Seafood fraud, authentication and consumer protection</h2>
    </div>
    <div class="ref-list">

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/1467-8489.12318" target="_blank" rel="noopener">An empirical framework to study food labelling fraud: an application to the Italian extra-virgin olive oil market</a></div>
        <div class="ref-authors">Bimbo, F., Bonanno, A., &amp; Viscecchia, R.</div>
        <div class="ref-pub">Australian Journal of Agricultural and Resource Economics, 63(4), 701–725 (2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/1467-8489.12318" target="_blank" rel="noopener">doi.org/10.1111/1467-8489.12318</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1017/err.2017.27" target="_blank" rel="noopener">Country-of-Origin Labelling, Food Traceability Drivers and Food Fraud: Lessons from Consumers' Preferences and Perceptions</a></div>
        <div class="ref-authors">Bitzios, M., Jack, L., Krzyzaniak, S., &amp; Xu, M.</div>
        <div class="ref-pub">European Journal of Risk Regulation, 8(3), 541–558 (2017)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1017/err.2017.27" target="_blank" rel="noopener">doi.org/10.1017/err.2017.27</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/1467-8489.12346" target="_blank" rel="noopener">Food fraud: economic insights into the dark side of incentives</a></div>
        <div class="ref-authors">Ehmke, M., Bonanno, A., Boys, K., &amp; Smith, T.</div>
        <div class="ref-pub">Australian Journal of Agricultural and Resource Economics, 63(4), 685–700 (2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/1467-8489.12346" target="_blank" rel="noopener">doi.org/10.1111/1467-8489.12346</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1146/annurev-resource-101422-013027" target="_blank" rel="noopener">Food Fraud: Causes, Consequences, and Deterrence Strategies</a></div>
        <div class="ref-authors">Giannakas, K. &amp; Yiannaka, A.</div>
        <div class="ref-pub">Annual Review of Resource Economics, 15(1), 85–104 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1146/annurev-resource-101422-013027" target="_blank" rel="noopener">doi.org/10.1146/annurev-resource-101422-013027</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.foodcont.2018.10.018" target="_blank" rel="noopener">Authentication of ready-to-eat anchovy products sold on the Italian market by BLAST analysis of a highly informative cytochrome b gene fragment</a></div>
        <div class="ref-authors">Giusti, A., Tinacci, L., Sotelo, C., Acutis, P., Ielasi, N., &amp; Armani, A.</div>
        <div class="ref-pub">Food Control, 97, 50–57 (2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.foodcont.2018.10.018" target="_blank" rel="noopener">doi.org/10.1016/j.foodcont.2018.10.018</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/1541-4337.13360" target="_blank" rel="noopener">Food authentication, current issues, analytical techniques, and future challenges: A comprehensive review</a></div>
        <div class="ref-authors">Haider, A., Iqbal, S., Bhatti, I., Alim, M., Waseem, M., Iqbal, M., &hellip; &amp; Khaneghah, A.</div>
        <div class="ref-pub">Comprehensive Reviews in Food Science and Food Safety, 23(3) (2024)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/1541-4337.13360" target="_blank" rel="noopener">doi.org/10.1111/1541-4337.13360</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1073/pnas.2003741117" target="_blank" rel="noopener">Consequences of seafood mislabeling for marine populations and fisheries management</a></div>
        <div class="ref-authors">Kroetz, K., Luque, G., Gephart, J., Jardine, S., Lee, P., Moore, K., &hellip; &amp; Donlan, C.</div>
        <div class="ref-pub">Proceedings of the National Academy of Sciences, 117(48), 30318–30323 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1073/pnas.2003741117" target="_blank" rel="noopener">doi.org/10.1073/pnas.2003741117</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/1541-4337.12998" target="_blank" rel="noopener">The 11 sins of seafood: Assessing a decade of food fraud reports in the global supply chain</a></div>
        <div class="ref-authors">Lawrence, S., Elliott, C., Huisman, W., Dean, M., &amp; Ruth, S.</div>
        <div class="ref-pub">Comprehensive Reviews in Food Science and Food Safety, 21(4), 3746–3769 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/1541-4337.12998" target="_blank" rel="noopener">doi.org/10.1111/1541-4337.12998</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/s10611-024-10149-7" target="_blank" rel="noopener">Characteristics and situational aspects of seafood fraud: a comparative crime script analysis</a></div>
        <div class="ref-authors">Lawrence, S., Ruth, S., Elliott, C., &amp; Huisman, W.</div>
        <div class="ref-pub">Crime Law and Social Change, 82(2), 433–462 (2024)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/s10611-024-10149-7" target="_blank" rel="noopener">doi.org/10.1007/s10611-024-10149-7</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1108/jfc-09-2020-0179" target="_blank" rel="noopener">Food fraud: an international snapshot and lessons for Australia</a></div>
        <div class="ref-authors">Lindley, J.</div>
        <div class="ref-pub">Journal of Financial Crime, 28(2), 480–492 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1108/jfc-09-2020-0179" target="_blank" rel="noopener">doi.org/10.1108/jfc-09-2020-0179</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/s11160-022-09747-2" target="_blank" rel="noopener">Innovation to limit seafood fraud post-COVID-19</a></div>
        <div class="ref-authors">Lindley, J., Sousa, E., Doubleday, Z., &amp; Reis-Santos, P.</div>
        <div class="ref-pub">Reviews in Fish Biology and Fisheries, 33(2), 501–512 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/s11160-022-09747-2" target="_blank" rel="noopener">doi.org/10.1007/s11160-022-09747-2</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/foods9091194" target="_blank" rel="noopener">Determining the Authenticity of Shark Meat Products by DNA Sequencing</a></div>
        <div class="ref-authors">Marchetti, P., Mottola, A., Piredda, R., Ciccarese, G., &amp; Pinto, A.</div>
        <div class="ref-pub">Foods, 9(9), 1194 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/foods9091194" target="_blank" rel="noopener">doi.org/10.3390/foods9091194</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/faf.12343" target="_blank" rel="noopener">DNA-analysis to monitor fisheries and aquaculture: Too costly?</a></div>
        <div class="ref-authors">Martinsohn, J., Raymond, P., Knott, T., Glover, K., Nielsen, E., Eriksen, L., &hellip; &amp; Guillen, J.</div>
        <div class="ref-pub">Fish and Fisheries, 20(2), 391–401 (2018)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/faf.12343" target="_blank" rel="noopener">doi.org/10.1111/faf.12343</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1890/090212" target="_blank" rel="noopener">Smoke, mirrors, and mislabeled cod: poor transparency in the European seafood industry</a></div>
        <div class="ref-authors">Miller, D. &amp; Mariani, S.</div>
        <div class="ref-pub">Frontiers in Ecology and the Environment, 8(10), 517–521 (2010)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1890/090212" target="_blank" rel="noopener">doi.org/10.1890/090212</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/j.1467-2979.2011.00426.x" target="_blank" rel="noopener">Seafood mislabelling: comparisons of two western European case studies assist in defining influencing factors, mechanisms and motives</a></div>
        <div class="ref-authors">Miller, D., Jessel, A., &amp; Mariani, S.</div>
        <div class="ref-pub">Fish and Fisheries, 13(3), 345–358 (2011)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/j.1467-2979.2011.00426.x" target="_blank" rel="noopener">doi.org/10.1111/j.1467-2979.2011.00426.x</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1177/0002716218784533" target="_blank" rel="noopener">IUU Fishing and Seafood Fraud: Using Crime Script Analysis to Inform Intervention</a></div>
        <div class="ref-authors">Petrossian, G. &amp; Pezzella, F.</div>
        <div class="ref-pub">The Annals of the American Academy of Political and Social Science, 679(1), 121–139 (2018)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1177/0002716218784533" target="_blank" rel="noopener">doi.org/10.1177/0002716218784533</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.foodres.2019.04.049" target="_blank" rel="noopener">Developing anti-counterfeiting measures: The role of smart packaging</a></div>
        <div class="ref-authors">Soon, J. &amp; Manning, L.</div>
        <div class="ref-pub">Food Research International, 123, 135–143 (2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.foodres.2019.04.049" target="_blank" rel="noopener">doi.org/10.1016/j.foodres.2019.04.049</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/foods11030328" target="_blank" rel="noopener">A Bayesian Approach to Predict Food Fraud Type and Point of Adulteration</a></div>
        <div class="ref-authors">Soon, J. &amp; Wahab, I.</div>
        <div class="ref-pub">Foods, 11(3), 328 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/foods11030328" target="_blank" rel="noopener">doi.org/10.3390/foods11030328</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/j.1750-3841.2011.02417.x" target="_blank" rel="noopener">Defining the Public Health Threat of Food Fraud</a></div>
        <div class="ref-authors">Spink, J. &amp; Moyer, D.</div>
        <div class="ref-pub">Journal of Food Science, 76(9) (2011)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/j.1750-3841.2011.02417.x" target="_blank" rel="noopener">doi.org/10.1111/j.1750-3841.2011.02417.x</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.31230/osf.io/v84rd" target="_blank" rel="noopener">Mislabelled: Montreal Investigation Results and How to Fix Canada's Seafood Fraud Problem</a></div>
        <div class="ref-authors">Thurston, S. &amp; Wilmot, L.</div>
        <div class="ref-pub">(2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.31230/osf.io/v84rd" target="_blank" rel="noopener">doi.org/10.31230/osf.io/v84rd</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/ijerph18147497" target="_blank" rel="noopener">Bioinformatics Approach to Mitigate Mislabeling in EU Seafood Market and Protect Consumer Health</a></div>
        <div class="ref-authors">Vindigni, G., Pulvirenti, A., Alaimo, S., Monaco, C., Spina, D., &amp; Peri, I.</div>
        <div class="ref-pub">International Journal of Environmental Research and Public Health, 18(14), 7497 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/ijerph18147497" target="_blank" rel="noopener">doi.org/10.3390/ijerph18147497</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3389/fsufs.2023.1166131" target="_blank" rel="noopener">Emerging monitoring technologies to reduce illegal fishing activities at sea and prevent entry of fraudulent fish into markets</a></div>
        <div class="ref-authors">Willette, D., Ababouch, L., Barber, P., Bunje, P., Cauzac, J., Conchon, A., &hellip; &amp; Trenkel, V.</div>
        <div class="ref-pub">Frontiers in Sustainable Food Systems, 7 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3389/fsufs.2023.1166131" target="_blank" rel="noopener">doi.org/10.3389/fsufs.2023.1166131</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/cobi.12888" target="_blank" rel="noopener">Using DNA barcoding to track seafood mislabeling in Los Angeles restaurants</a></div>
        <div class="ref-authors">Willette, D., Simmonds, S., Cheng, S., Esteves, S., Kane, T., Nuetzel, H., &hellip; &amp; Barber, P.</div>
        <div class="ref-pub">Conservation Biology, 31(5), 1076–1085 (2017)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/cobi.12888" target="_blank" rel="noopener">doi.org/10.1111/cobi.12888</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.foodcont.2016.06.010" target="_blank" rel="noopener">DNA barcoding reveals substitution of Sablefish (Anoplopoma fimbria) with Patagonian and Antarctic Toothfish in online market in China: How mislabeling opens door to IUU fishing</a></div>
        <div class="ref-authors">Xiong, X., Guardone, L., Cornax, M., Tinacci, L., Guidi, A., Gianfaldoni, D., &hellip; &amp; Armani, A.</div>
        <div class="ref-pub">Food Control, 70, 380–391 (2016)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.foodcont.2016.06.010" target="_blank" rel="noopener">doi.org/10.1016/j.foodcont.2016.06.010</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CATEGORY 2 — Illegal fishing, fisheries crime and governance
     ============================================================ -->
<section class="cat-section alt">
  <div class="container">
    <div class="cat-header">
      <div class="cat-num">02</div>
      <h2>Illegal fishing, fisheries crime and governance</h2>
    </div>
    <div class="ref-list">

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/s40152-023-00303-7" target="_blank" rel="noopener">Blue boats in deep waters: how aspects of IUU policy impact Vietnamese fish workers</a></div>
        <div class="ref-authors">Alonso, G. &amp; Marschke, M.</div>
        <div class="ref-pub">Maritime Studies, 22(2) (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/s40152-023-00303-7" target="_blank" rel="noopener">doi.org/10.1007/s40152-023-00303-7</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1051/e3sconf/20184706003" target="_blank" rel="noopener">Corporate criminal liability towards the doer of illegal, unregulated and unreported fishing in Indonesia</a></div>
        <div class="ref-authors">Bintoro, R., Raharjo, A., &amp; Sudrajat, T.</div>
        <div class="ref-pub">E3S Web of Conferences, 47, 06003 (2018)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1051/e3sconf/20184706003" target="_blank" rel="noopener">doi.org/10.1051/e3sconf/20184706003</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.ocecoaman.2020.105494" target="_blank" rel="noopener">Can anti-illegal, unreported, and unregulated (IUU) fishing trade measures spread internationally? Case study of Australia</a></div>
        <div class="ref-authors">Garcia, S., Barclay, K., &amp; Nicholls, R.</div>
        <div class="ref-pub">Ocean &amp; Coastal Management, 202, 105494 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.ocecoaman.2020.105494" target="_blank" rel="noopener">doi.org/10.1016/j.ocecoaman.2020.105494</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3389/fevo.2022.777497" target="_blank" rel="noopener">China Revamping Decades-Old Fisheries Law to Combat Illegal, Unreported, and Unregulated Fishing</a></div>
        <div class="ref-authors">He, J. &amp; Zhang, X.</div>
        <div class="ref-pub">Frontiers in Ecology and Evolution, 10 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3389/fevo.2022.777497" target="_blank" rel="noopener">doi.org/10.3389/fevo.2022.777497</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.20473/ydk.v36i2.23225" target="_blank" rel="noopener">Criminal Law Aspect of Illegal Transshipment Under Act Number 45 of 2009 Concerning Fisheries</a></div>
        <div class="ref-authors">Herman, H., Haris, O., &amp; Syahbudin, S.</div>
        <div class="ref-pub">Yuridika, 36(2), 295 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.20473/ydk.v36i2.23225" target="_blank" rel="noopener">doi.org/10.20473/ydk.v36i2.23225</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1177/25148486221104992" target="_blank" rel="noopener">From fish to fishworker traceability in Thai fisheries reform</a></div>
        <div class="ref-authors">Kadfak, A. &amp; Widengard, M.</div>
        <div class="ref-pub">Environment and Planning E: Nature and Space, 6(2), 1322–1342 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1177/25148486221104992" target="_blank" rel="noopener">doi.org/10.1177/25148486221104992</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1038/s43016-020-0121-y" target="_blank" rel="noopener">Approaches to combatting illegal, unreported and unregulated fishing</a></div>
        <div class="ref-authors">Long, T., Widjaja, S., Wirajuda, H., &amp; Juwana, S.</div>
        <div class="ref-pub">Nature Food, 1(7), 389–391 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1038/s43016-020-0121-y" target="_blank" rel="noopener">doi.org/10.1038/s43016-020-0121-y</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3389/fevo.2021.637228" target="_blank" rel="noopener">A Perspective on the Role of Eco-Certification in Eliminating Illegal, Unreported and Unregulated Fishing</a></div>
        <div class="ref-authors">Longo, C., Buckley, L., Good, S., Gorham, T., Koerner, L., Lees, S., &hellip; &amp; Currey, R.</div>
        <div class="ref-pub">Frontiers in Ecology and Evolution, 9 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3389/fevo.2021.637228" target="_blank" rel="noopener">doi.org/10.3389/fevo.2021.637228</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/978-3-031-16277-0_15" target="_blank" rel="noopener">Illegal, Unreported and Unregulated Fishing and Associated Drivers</a></div>
        <div class="ref-authors">Lubchenco, J. &amp; Haugan, P.</div>
        <div class="ref-pub">pp. 553–591 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/978-3-031-16277-0_15" target="_blank" rel="noopener">doi.org/10.1007/978-3-031-16277-0_15</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1017/s2047102522000206" target="_blank" rel="noopener">EU–Third Country Dialogue on IUU Fishing: The Transformation of Thailand's Fisheries Laws</a></div>
        <div class="ref-authors">Naiki, Y. &amp; Rakpong, J.</div>
        <div class="ref-pub">Transnational Environmental Law, 11(3), 629–653 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1017/s2047102522000206" target="_blank" rel="noopener">doi.org/10.1017/s2047102522000206</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.2991/978-2-494069-49-7_114" target="_blank" rel="noopener">Inhibiting Factors in Enforcement Law of Illegal Fishing Indonesian Seas Based on International Maritime Law</a></div>
        <div class="ref-authors">Perdana, L., Windradi, F., Sari, A., Widayati, S., &amp; Limantara, A.</div>
        <div class="ref-pub">pp. 686–691 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.2991/978-2-494069-49-7_114" target="_blank" rel="noopener">doi.org/10.2991/978-2-494069-49-7_114</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.20944/preprints202401.1003.v2" target="_blank" rel="noopener">A New Seafood Import Policy for Nations to Combat Illegal Fishing</a></div>
        <div class="ref-authors">Roberson, L., Hosch, G., Wilcox, C., Martinez, R., Sant, G., &amp; Klein, C.</div>
        <div class="ref-pub">(2024)</div>
        <div class="ref-doi"><a href="https://doi.org/10.20944/preprints202401.1003.v2" target="_blank" rel="noopener">doi.org/10.20944/preprints202401.1003.v2</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/faf.12462" target="_blank" rel="noopener">Collateral damage? Small-scale fisheries in the global fight against IUU fishing</a></div>
        <div class="ref-authors">Song, A., Scholtens, J., Barclay, K., Bush, S., Fabinyi, M., Adhuri, D., &hellip; &amp; Haughton, M.</div>
        <div class="ref-pub">Fish and Fisheries, 21(4), 831–843 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/faf.12462" target="_blank" rel="noopener">doi.org/10.1111/faf.12462</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1163/9789004380271_060" target="_blank" rel="noopener">IUU Fishing and Measures to Improve Enforcement and Compliance</a></div>
        <div class="ref-authors">Swan, J.</div>
        <div class="ref-pub">pp. 354–360 (2019)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1163/9789004380271_060" target="_blank" rel="noopener">doi.org/10.1163/9789004380271_060</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/faf.12532" target="_blank" rel="noopener">Progress and challenges in eliminating illegal fishing</a></div>
        <div class="ref-authors">Vince, J., Hardesty, B., &amp; Wilcox, C.</div>
        <div class="ref-pub">Fish and Fisheries, 22(3), 518–531 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/faf.12532" target="_blank" rel="noopener">doi.org/10.1111/faf.12532</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1787/8dae4616-en" target="_blank" rel="noopener">The nexus between illegal trade and environmental crime</a></div>
        <div class="ref-authors">Yamaguchi, S., Wal, L., Karousakis, K., Perry, E., &amp; Turner, S.</div>
        <div class="ref-pub">(2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1787/8dae4616-en" target="_blank" rel="noopener">doi.org/10.1787/8dae4616-en</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CATEGORY 3 — Traceability, technology and supply-chain assurance
     ============================================================ -->
<section class="cat-section">
  <div class="container">
    <div class="cat-header">
      <div class="cat-num">03</div>
      <h2>Traceability, technology and supply-chain assurance</h2>
    </div>
    <div class="ref-list">

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.18568/internext.v17i3.679" target="_blank" rel="noopener">Achieving transparency through blockchain: sustainability of fishery supply chain management</a></div>
        <div class="ref-authors">Cordova, M. &amp; Aguirre, K.</div>
        <div class="ref-pub">Internext, 17(3) (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.18568/internext.v17i3.679" target="_blank" rel="noopener">doi.org/10.18568/internext.v17i3.679</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/su14031179" target="_blank" rel="noopener">Overcoming Catch Data Collection Challenges and Traceability Implementation Barriers in a Sustainable, Small-Scale Fishery</a></div>
        <div class="ref-authors">Grantham, A., Pandan, M., Roxas, S., &amp; Hitchcock, B.</div>
        <div class="ref-pub">Sustainability, 14(3), 1179 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/su14031179" target="_blank" rel="noopener">doi.org/10.3390/su14031179</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/s23115136" target="_blank" rel="noopener">Toward an Intelligent Blockchain IoT-Enabled Fish Supply Chain: A Review and Conceptual Framework</a></div>
        <div class="ref-authors">Ismail, S., Reza, H., Salameh, K., Zadeh, H., &amp; Vasefi, F.</div>
        <div class="ref-pub">Sensors, 23(11), 5136 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/s23115136" target="_blank" rel="noopener">doi.org/10.3390/s23115136</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.36227/techrxiv.18480509.v2" target="_blank" rel="noopener">A Tertiary Review on Blockchain and Sustainability with Focus on Sustainable Development Goals</a></div>
        <div class="ref-authors">Jiang, S., Jakobsen, K., Bueie, J., Li, J., &amp; Haro, P.</div>
        <div class="ref-pub">(2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.36227/techrxiv.18480509.v2" target="_blank" rel="noopener">doi.org/10.36227/techrxiv.18480509.v2</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/1750-3841.13743" target="_blank" rel="noopener">The Expanding Role of Traceability in Seafood: Tools and Key Initiatives</a></div>
        <div class="ref-authors">Lewis, S. &amp; Boyle, M.</div>
        <div class="ref-pub">Journal of Food Science, 82(S1) (2017)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/1750-3841.13743" target="_blank" rel="noopener">doi.org/10.1111/1750-3841.13743</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.20944/preprints202408.0977.v1" target="_blank" rel="noopener">Fisheries Traceability, Drivers and Barriers to Its Adoption: A Review</a></div>
        <div class="ref-authors">Macusi, E., Nallos, I., Borazon, E., Castro, M., &amp; Peralez, C.</div>
        <div class="ref-pub">(2024)</div>
        <div class="ref-doi"><a href="https://doi.org/10.20944/preprints202408.0977.v1" target="_blank" rel="noopener">doi.org/10.20944/preprints202408.0977.v1</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1002/geo2.117" target="_blank" rel="noopener">Mobilising international resource management certification schemes: Re-configuration of the global shark fin supply network by producers</a></div>
        <div class="ref-authors">Omoto, R.</div>
        <div class="ref-pub">Geo: Geography and Environment, 10(1) (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1002/geo2.117" target="_blank" rel="noopener">doi.org/10.1002/geo2.117</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1109/access.2022.3196162" target="_blank" rel="noopener">Blockchain-Based Traceability for the Fishery Supply Chain</a></div>
        <div class="ref-authors">Patro, P., Jayaraman, R., Salah, K., &amp; Yaqoob, I.</div>
        <div class="ref-pub">IEEE Access, 10, 81134–81154 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1109/access.2022.3196162" target="_blank" rel="noopener">doi.org/10.1109/access.2022.3196162</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.30574/gjeta.2023.15.3.0111" target="_blank" rel="noopener">Fisheries products traceability using batch code</a></div>
        <div class="ref-authors">Putra, I. &amp; Labasariyani, N.</div>
        <div class="ref-pub">Global Journal of Engineering and Technology Advances, 15(3), 135–149 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.30574/gjeta.2023.15.3.0111" target="_blank" rel="noopener">doi.org/10.30574/gjeta.2023.15.3.0111</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/s21165307" target="_blank" rel="noopener">Third Party Certification of Agri-Food Supply Chain Using Smart Contracts and Blockchain Tokens</a></div>
        <div class="ref-authors">Santos, R., Torrisi, N., &amp; Pantoni, R.</div>
        <div class="ref-pub">Sensors, 21(16), 5307 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/s21165307" target="_blank" rel="noopener">doi.org/10.3390/s21165307</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.jbusres.2020.08.003" target="_blank" rel="noopener">Supply network design to address United Nations Sustainable Development Goals: A case study of blockchain implementation in Thai fish industry</a></div>
        <div class="ref-authors">Tsolakis, N., Niedenzu, D., Simonetto, M., Dora, M., &amp; Kumar, M.</div>
        <div class="ref-pub">Journal of Business Research, 131, 495–519 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.jbusres.2020.08.003" target="_blank" rel="noopener">doi.org/10.1016/j.jbusres.2020.08.003</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CATEGORY 4 — Labelling, certification, sustainability and markets
     ============================================================ -->
<section class="cat-section alt">
  <div class="container">
    <div class="cat-header">
      <div class="cat-num">04</div>
      <h2>Labelling, certification, sustainability and markets</h2>
    </div>
    <div class="ref-list">

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/s11160-023-09768-5" target="_blank" rel="noopener">Identifying sustainability priorities among value chain actors in artisanal common octopus fisheries</a></div>
        <div class="ref-authors">Ainsworth, G., Pita, P., Pita, C., Roumbedakis, K., Pierce, G., Longo, C., &hellip; &amp; Villasante, S.</div>
        <div class="ref-pub">Reviews in Fish Biology and Fisheries, 33(3), 669–698 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/s11160-023-09768-5" target="_blank" rel="noopener">doi.org/10.1007/s11160-023-09768-5</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.marpol.2017.01.012" target="_blank" rel="noopener">Selling only sustainable seafood: Attitudes toward public regulation and retailer policies</a></div>
        <div class="ref-authors">Alfnes, F.</div>
        <div class="ref-pub">Marine Policy, 78, 74–79 (2017)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.marpol.2017.01.012" target="_blank" rel="noopener">doi.org/10.1016/j.marpol.2017.01.012</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.ecolecon.2021.107135" target="_blank" rel="noopener">The value of responsibly farmed fish: A hedonic price study of ASC-certified whitefish</a></div>
        <div class="ref-authors">Asche, F., Bronnmann, J., &amp; Cojocaru, A.</div>
        <div class="ref-pub">Ecological Economics, 188, 107135 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.ecolecon.2021.107135" target="_blank" rel="noopener">doi.org/10.1016/j.ecolecon.2021.107135</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/faf.12289" target="_blank" rel="noopener">The role of corporate social responsibility in creating a Seussian world of seafood sustainability</a></div>
        <div class="ref-authors">Bailey, M., Packer, H., Schiller, L., Tlusty, M., &amp; Swartz, W.</div>
        <div class="ref-pub">Fish and Fisheries, 19(5), 782–790 (2018)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/faf.12289" target="_blank" rel="noopener">doi.org/10.1111/faf.12289</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3389/fmars.2021.675274" target="_blank" rel="noopener">Reef Conservation off the Hook: Can Market Interventions Make Coral Reef Fisheries More Sustainable?</a></div>
        <div class="ref-authors">Cramer, K. &amp; Kittinger, J.</div>
        <div class="ref-pub">Frontiers in Marine Science, 8 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3389/fmars.2021.675274" target="_blank" rel="noopener">doi.org/10.3389/fmars.2021.675274</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/foods14060917" target="_blank" rel="noopener">Seafood Labeling in Croatia: Molecular Evidence and Regulatory Insights</a></div>
        <div class="ref-authors">Grbin, D., Zrncic, S., Oraic, D., Alfier, M., Cindric, M., Jovic, L., &hellip; &amp; Zupicic, I.</div>
        <div class="ref-pub">Foods, 14(6), 917 (2025)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/foods14060917" target="_blank" rel="noopener">doi.org/10.3390/foods14060917</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/faf.12768" target="_blank" rel="noopener">Consumption of shark products: The interface of sustainability, trade (mis)labelling, human health and human rights</a></div>
        <div class="ref-authors">Hasan, M., Chaplin, J., Spencer, P., &amp; Braccini, M.</div>
        <div class="ref-pub">Fish and Fisheries, 24(5), 777–795 (2023)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/faf.12768" target="_blank" rel="noopener">doi.org/10.1111/faf.12768</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1186/s12302-024-01018-0" target="_blank" rel="noopener">The role of certifications and eco-labels in fisheries: a systematic literature review of their benefits and challenges</a></div>
        <div class="ref-authors">Melo, M., Barros, J., Ribeiro, A., Lima, T., &amp; Sobral, M.</div>
        <div class="ref-pub">Environmental Sciences Europe, 36(1) (2024)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1186/s12302-024-01018-0" target="_blank" rel="noopener">doi.org/10.1186/s12302-024-01018-0</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3389/fmars.2020.598682" target="_blank" rel="noopener">Mainstreaming Sustainable Consumption of Seafood Through Enhanced Mandatory Food Labeling</a></div>
        <div class="ref-authors">Penca, J.</div>
        <div class="ref-pub">Frontiers in Marine Science, 7 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3389/fmars.2020.598682" target="_blank" rel="noopener">doi.org/10.3389/fmars.2020.598682</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1111/j.1477-9552.2011.00299.x" target="_blank" rel="noopener">The Elusive Price Premium for Ecolabelled Products: Evidence from Seafood in the UK Market</a></div>
        <div class="ref-authors">Roheim, C., Asche, F., &amp; Santos, J.</div>
        <div class="ref-pub">Journal of Agricultural Economics, 62(3), 655–668 (2011)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1111/j.1477-9552.2011.00299.x" target="_blank" rel="noopener">doi.org/10.1111/j.1477-9552.2011.00299.x</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CATEGORY 5 — Wider food-integrity and policy research
     ============================================================ -->
<section class="cat-section">
  <div class="container">
    <div class="cat-header">
      <div class="cat-num">05</div>
      <h2>Wider food-integrity and policy research</h2>
    </div>
    <div class="ref-list">

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1126/sciadv.abj1927" target="_blank" rel="noopener">Fish crimes in the global oceans</a></div>
        <div class="ref-authors">Belhabib, D. &amp; Billon, P.</div>
        <div class="ref-pub">Science Advances, 8(12) (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1126/sciadv.abj1927" target="_blank" rel="noopener">doi.org/10.1126/sciadv.abj1927</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1002/bmb.21332" target="_blank" rel="noopener">Lab experience with seafood control at the undergraduate level: Cephalopods as a case study</a></div>
        <div class="ref-authors">Fernandez, S., Rodriguez-Muniz, L., Molina, J., Muniz-Rodriguez, L., Jimenez, J., Garcia-Vazquez, E., &hellip; &amp; Borrell, Y.</div>
        <div class="ref-pub">Biochemistry and Molecular Biology Education, 48(3), 236–246 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1002/bmb.21332" target="_blank" rel="noopener">doi.org/10.1002/bmb.21332</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1007/s00003-022-01372-2" target="_blank" rel="noopener">Food regulation and policing: innovative technology to close the regulatory gap in Australia</a></div>
        <div class="ref-authors">Lindley, J.</div>
        <div class="ref-pub">Journal of Consumer Protection and Food Safety, 17(2), 127–136 (2022)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1007/s00003-022-01372-2" target="_blank" rel="noopener">doi.org/10.1007/s00003-022-01372-2</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1016/j.marpol.2021.104810" target="_blank" rel="noopener">Labels on seafood products in different European countries and their compliance to EU legislation</a></div>
        <div class="ref-authors">Paolacci, S., Mendes, R., Klapper, R., Velasco, A., Ramilo-Fernandez, G., Munoz-Colmenero, M., &hellip; &amp; Sotelo, C.</div>
        <div class="ref-pub">Marine Policy, 134, 104810 (2021)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1016/j.marpol.2021.104810" target="_blank" rel="noopener">doi.org/10.1016/j.marpol.2021.104810</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.1139/er-2020-0031" target="_blank" rel="noopener">Discrimination between freshwater and marine fish using fatty acids: ecological implications and future perspectives</a></div>
        <div class="ref-authors">Parzanini, C., Colombo, S., Kainz, M., Wacker, A., Parrish, C., &amp; Arts, M.</div>
        <div class="ref-pub">Environmental Reviews, 28(4), 546–559 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.1139/er-2020-0031" target="_blank" rel="noopener">doi.org/10.1139/er-2020-0031</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.20885/iustum.vol25.iss1.art1" target="_blank" rel="noopener">Implementation of Trade Regulations on Fisheries to Prevent Fish Laundry in Indonesia</a></div>
        <div class="ref-authors">Putranti, I.</div>
        <div class="ref-pub">Jurnal Hukum Ius Quia Iustum, 25(1), 1–23 (2018)</div>
        <div class="ref-doi"><a href="https://doi.org/10.20885/iustum.vol25.iss1.art1" target="_blank" rel="noopener">doi.org/10.20885/iustum.vol25.iss1.art1</a></div>
      </div>

      <div class="ref-card">
        <div class="ref-title"><a href="https://doi.org/10.3390/socsci9070112" target="_blank" rel="noopener">Food Crime: A Review of the UK Institutional Perception of Illicit Practices in the Food Sector</a></div>
        <div class="ref-authors">Rizzuti, A.</div>
        <div class="ref-pub">Social Sciences, 9(7), 112 (2020)</div>
        <div class="ref-doi"><a href="https://doi.org/10.3390/socsci9070112" target="_blank" rel="noopener">doi.org/10.3390/socsci9070112</a></div>
      </div>

    </div>
  </div>
</section>

<!-- ============== BACK TO BOOK CTA ============== -->
<section class="back-strip">
  <div class="container">
    <h2>Return to <strong>Sea of Deception</strong></h2>
    <p>Read the book synopsis, explore the case studies, or preorder your copy.</p>
    <a href="book.php" class="btn btn-outline btn-lg">Back to the book <span class="arrow">→</span></a>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
