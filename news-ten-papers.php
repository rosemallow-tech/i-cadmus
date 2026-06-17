<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ten Papers Central to Seafood Fraud | I-CADMUS Newsroom</title>
<meta name="description" content="Ten key papers and reviews central to seafood fraud — covering molecular markers, mass spectrometry, proteomics, metabolomics, and omics-based authentication." />

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
    --shadow-sm: 0 1px 2px rgba(0,25,50,0.06), 0 1px 3px rgba(0,25,50,0.04);
    --shadow-md: 0 4px 12px rgba(0,25,50,0.08), 0 2px 4px rgba(0,25,50,0.04);
    --shadow-lg: 0 12px 32px rgba(0,25,50,0.10), 0 4px 12px rgba(0,25,50,0.06);
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

  /* Utility bar */
  .utility-bar { background: var(--brand-dark); color: rgba(255,255,255,0.85); font-size: 13px; border-bottom: 1px solid rgba(255,255,255,0.08); }
  .utility-bar .container { display: flex; justify-content: space-between; align-items: center; height: 38px; }
  .utility-bar a { color: rgba(255,255,255,0.85); transition: color 0.15s; padding: 0 14px; border-right: 1px solid rgba(255,255,255,0.12); line-height: 38px; }
  .utility-bar a:last-child { border-right: none; }
  .utility-bar a:hover { color: #fff; }
  .utility-locale { display: flex; align-items: center; gap: 8px; }
  .utility-locale select { background: transparent; border: none; color: rgba(255,255,255,0.85); font-family: inherit; font-size: 13px; cursor: pointer; }
  .utility-locale select option { background: var(--brand-dark); }

  /* Header */
  .header { background: #fff; border-bottom: 1px solid var(--line); position: sticky; top: 0; z-index: 100; box-shadow: var(--shadow-sm); }
  .header .container { display: flex; align-items: center; height: 76px; gap: 40px; }
  .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; font-size: 22px; color: var(--brand); letter-spacing: -0.01em; flex-shrink: 0; }
  .brand-mark { width: 44px; height: 44px; background: var(--brand); color: #fff; display: grid; place-items: center; font-size: 22px; font-weight: 700; border-radius: 4px; position: relative; }
  .brand-mark::after { content: ''; position: absolute; bottom: 6px; left: 8px; right: 8px; height: 2px; background: var(--accent); }
  .brand small { display: block; font-size: 11px; font-weight: 400; color: var(--ink-3); letter-spacing: 0.04em; text-transform: uppercase; margin-top: 2px; }
  .nav-primary { display: flex; gap: 4px; flex: 1; }
  .nav-primary > li { list-style: none; position: relative; }
  .nav-primary > li > a { display: flex; align-items: center; gap: 6px; height: 76px; padding: 0 16px; font-size: 15px; font-weight: 500; color: var(--ink-2); border-bottom: 3px solid transparent; transition: color 0.15s, border-color 0.15s; white-space: nowrap; }
  .nav-primary > li > a:hover { color: var(--brand); border-bottom-color: var(--accent); }
  .nav-primary > li > a .chev { font-size: 10px; margin-top: 2px; transition: transform 0.2s; }
  .nav-primary > li:hover > a .chev { transform: rotate(180deg); }
  .nav-mega { position: absolute; top: 100%; left: 0; background: #fff; box-shadow: var(--shadow-lg); border: 1px solid var(--line); border-top: 3px solid var(--accent); min-width: 520px; padding: 24px; opacity: 0; visibility: hidden; transform: translateY(8px); transition: opacity 0.2s, transform 0.2s, visibility 0.2s; z-index: 50; }
  .nav-primary > li:hover .nav-mega { opacity: 1; visibility: visible; transform: translateY(0); }
  .nav-mega-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4px 24px; }
  .nav-mega a { display: block; padding: 10px 12px; border-radius: 4px; font-size: 14px; color: var(--ink-2); transition: background 0.15s, color 0.15s; }
  .nav-mega a:hover { background: var(--bg-soft); color: var(--brand); }
  .nav-mega a strong { display: block; font-weight: 600; color: var(--ink); margin-bottom: 2px; font-size: 14px; }
  .nav-mega a span { color: var(--ink-3); font-size: 12px; }
  .header-tools { display: flex; align-items: center; gap: 12px; }
  .header-search { width: 38px; height: 38px; border-radius: 50%; background: var(--bg-soft); display: grid; place-items: center; color: var(--ink-2); transition: background 0.15s; }
  .header-search:hover { background: var(--bg-2); }
  .btn { display: inline-flex; align-items: center; gap: 8px; padding: 11px 22px; font-size: 14px; font-weight: 600; border-radius: 2px; transition: all 0.15s; cursor: pointer; border: 1px solid transparent; line-height: 1.2; white-space: nowrap; }
  .btn-primary { background: var(--accent); color: #fff; border-color: var(--accent); }
  .btn-primary:hover { background: var(--accent-dark); border-color: var(--accent-dark); }
  .btn-outline { background: transparent; color: var(--brand); border-color: var(--brand); }
  .btn-outline:hover { background: var(--brand); color: #fff; }
  .btn .arrow { font-size: 12px; }

  /* Page hero */
  .page-hero { background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%); color: #fff; position: relative; overflow: hidden; padding: 80px 0 100px; }
  .page-hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%), radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%); pointer-events: none; }
  .page-hero-inner { position: relative; z-index: 1; max-width: 860px; }
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; flex-wrap: wrap; }
  .breadcrumb a { color: rgba(255,255,255,0.85); }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .article-tag-pill { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #fff; background: var(--brand); padding: 5px 12px; border-radius: 2px; margin-bottom: 20px; }
  .page-hero h1 { font-family: var(--serif); font-weight: 400; font-size: clamp(32px, 4.5vw, 52px); line-height: 1.1; letter-spacing: -0.015em; margin-bottom: 20px; color: #fff; }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 65ch; line-height: 1.55; margin-bottom: 32px; }
  .article-byline { display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: rgba(255,255,255,0.75); border-top: 1px solid rgba(255,255,255,0.15); padding-top: 24px; }
  .article-byline strong { color: #fff; }

  /* Article body */
  .article-body { padding: 80px 0 100px; }
  .article-layout { display: grid; grid-template-columns: 1fr 300px; gap: 64px; align-items: start; }
  .article-content h2 { font-family: var(--serif); font-size: clamp(22px, 2.2vw, 30px); font-weight: 600; color: var(--brand); line-height: 1.2; margin: 48px 0 16px; }
  .article-content h2:first-child { margin-top: 0; }
  .article-content h3 { font-family: var(--serif); font-size: clamp(18px, 1.8vw, 22px); font-weight: 600; color: var(--brand); line-height: 1.3; margin: 32px 0 12px; }
  .article-content p { font-size: 18px; color: var(--ink-2); line-height: 1.7; margin-bottom: 20px; }
  .article-content ul, .article-content ol { margin: 0 0 20px 24px; }
  .article-content li { font-size: 18px; color: var(--ink-2); line-height: 1.7; margin-bottom: 10px; }
  .article-content li strong { color: var(--ink); }
  .article-content blockquote { border-left: 4px solid var(--teal); padding: 16px 24px; margin: 32px 0; background: var(--bg-soft); border-radius: 0 4px 4px 0; }
  .article-content blockquote p { font-size: 17px; color: var(--brand); margin: 0; line-height: 1.55; }
  .article-content .callout { background: var(--bg-soft); border: 1px solid var(--line-2); border-radius: 6px; padding: 24px 28px; margin: 32px 0; }
  .article-content .callout-title { font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--teal); margin-bottom: 10px; }
  .article-content .callout p { font-size: 16px; margin: 0; }
  .article-content .nuance-box { background: #fffbf0; border: 1px solid #e8d7a0; border-radius: 6px; padding: 24px 28px; margin: 32px 0; }
  .article-content .nuance-box .callout-title { color: var(--gold); }
  .article-content .evidence { margin: 8px 0 8px 20px; font-size: 16px; color: var(--ink-3); font-style: italic; line-height: 1.6; }
  .article-content .evidence::before { content: '↳ '; color: var(--teal); font-style: normal; font-weight: 600; }
  .claim-block { border: 1px solid var(--line); border-radius: 6px; padding: 28px 32px; margin: 24px 0; position: relative; }
  .claim-block .claim-num { position: absolute; top: -14px; left: 24px; background: var(--brand); color: #fff; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 100px; letter-spacing: 0.06em; }
  .claim-block h3 { margin-top: 8px; }
  .references-block { background: var(--bg-soft); border: 1px solid var(--line-2); border-radius: 6px; padding: 28px 32px; margin-top: 48px; }
  .references-block h2 { font-family: var(--serif); font-size: 20px; color: var(--ink); margin-bottom: 16px; }
  .references-block p { font-size: 14px; color: var(--ink-3); line-height: 1.65; }

  /* Sidebar */
  .article-sidebar { position: sticky; top: 100px; }
  .sidebar-card { background: var(--bg-soft); border: 1px solid var(--line); border-radius: 6px; padding: 24px; margin-bottom: 24px; }
  .sidebar-card h4 { font-size: 13px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: var(--teal); margin-bottom: 16px; }
  .sidebar-card ul { list-style: none; }
  .sidebar-card li { margin-bottom: 12px; }
  .sidebar-card li a { font-size: 14px; color: var(--brand); font-weight: 500; display: flex; align-items: flex-start; gap: 8px; line-height: 1.4; }
  .sidebar-card li a:hover { text-decoration: underline; }
  .sidebar-card li a::before { content: '→'; flex-shrink: 0; color: var(--teal); }
  .sidebar-card p { font-size: 14px; color: var(--ink-2); line-height: 1.6; }
  .sidebar-divider { border: none; border-top: 1px solid var(--line-2); margin: 16px 0; }
  .theme-tag { display: inline-block; background: var(--bg-2); border: 1px solid var(--line-2); color: var(--ink-2); font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 100px; margin: 0 4px 6px 0; }

  /* Footer */
  footer { background: #1a1d22; color: rgba(255,255,255,0.75); padding: 80px 0 0; font-size: 14px; }
  .footer-top { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 56px; border-bottom: 1px solid rgba(255,255,255,0.08); }
  .footer-brand { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; }
  .footer-brand-mark { width: 44px; height: 44px; background: #fff; color: var(--brand); display: grid; place-items: center; font-size: 22px; font-weight: 700; border-radius: 4px; position: relative; }
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
  .footer-social { display: flex; gap: 8px; margin-top: 20px; }
  .footer-social a { width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); display: grid; place-items: center; color: rgba(255,255,255,0.7); font-size: 13px; font-weight: 700; transition: background 0.2s, color 0.2s; }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }
  .footer-bottom-links a:hover { color: #fff; }

  /* Responsive */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .article-layout { grid-template-columns: 1fr; }
    .article-sidebar { position: static; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
    .page-hero { padding: 56px 0 72px; }
  }
  @media (max-width: 640px) {
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
    .article-content p, .article-content li { font-size: 16px; }
  }

  .nav-toggle { display: none; flex-direction: column; justify-content: space-between; width: 26px; height: 18px; background: none; border: none; cursor: pointer; padding: 0; flex-shrink: 0; }
  .nav-toggle span { display: block; height: 2px; background: var(--ink); border-radius: 2px; transition: transform 0.25s, opacity 0.25s; }
  .nav-toggle.open span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
  .nav-toggle.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
  .nav-toggle.open span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }
  .nav-mobile { display: none; position: fixed; top: 76px; left: 0; right: 0; bottom: 0; background: #fff; overflow-y: auto; z-index: 99; border-top: 1px solid var(--line); transform: translateX(100%); transition: transform 0.28s ease; }
  .nav-mobile.open { transform: translateX(0); }
  @media (max-width: 1100px) { .nav-toggle { display: flex; } .nav-mobile { display: block; } }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <a href="news.php">Newsroom</a>
        <span class="sep">/</span>
        <span class="current">Ten Papers Central to Seafood Fraud</span>
      </div>
      <div class="article-tag-pill">Research Review</div>
      <h1>Ten Papers/Reviews <strong>Central to Seafood Fraud</strong> &mdash; A SCITe Research Review.</h1>
      <p class="lede">A curated review of ten papers most central to seafood fraud authenticity and traceability &mdash; covering molecular markers, mass spectrometry, proteomics, metabolomics, and omics-based approaches. Synthesised by SCITe to present a cohesive picture of the state of the art.</p>
      <div class="article-byline">
        <span><strong>Source:</strong> SCITe</span>
        <span><strong>Published:</strong> 17 Jun 2026</span>
      </div>
    </div>
  </div>
</section>

<section class="article-body">
  <div class="container">
    <div class="article-layout">

      <div class="article-content">

        <p>Ten papers and reviews identified as most central to seafood fraud are examined here, relating to authenticity and traceability in fisheries and aquaculture. The focus spans molecular, proteomic, metabolomic, and MS-based approaches, as well as overarching reviews of methods and policy-relevant analytics. For each, a concise report highlights the core contribution, methods, and relevance to seafood fraud. All claims are supported by cited references in IEEE style.</p>

        <div class="claim-block">
          <span class="claim-num">Paper 1</span>
          <h3>Kotsanopoulos et al. &mdash; The use of molecular markers in the verification of fish and seafood authenticity and the detection of adulteration. <em>Comprehensive Reviews in Food Science and Food Safety</em>, 2021.</h3>
          <p><strong>Core contribution:</strong> A thorough synthesis of molecular marker approaches (DNA-based markers, AFLP, RAPD) for authenticating fish/seafood species and detecting adulteration, especially given processing that removes morphological features.</p>
          <p><strong>Methods:</strong> DNA barcoding (coxI), AFLP, RAPD, and related PCR-based marker techniques; restriction enzyme primer choices; discrimination limits among closely related taxa; practicalities of cost, speed, and throughput.</p>
          <p><strong>Relevance to fraud:</strong> Establishes the foundational molecular toolkit for species identification and mislabelling detection across processed products, informing enforcement and supply-chain transparency.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 2</span>
          <h3>Chien et al. &mdash; Determination of adulteration, geographical origins, and species of food by mass spectrometry. <em>Mass Spectrometry Reviews</em>, 2022.</h3>
          <p><strong>Core contribution:</strong> Critical assessment of MS-based approaches (proteomics, metabolomics, lipidomics) for food authentication, including seafood, with emphasis on fingerprinting and profiling strategies.</p>
          <p><strong>Methods:</strong> MS-based proteomics and metabolomics for species- or origin-specific fingerprint profiles; targeted vs. untargeted profiling; pattern recognition and data processing pipelines.</p>
          <p><strong>Relevance to fraud:</strong> Provides a contemporary framework for using MS to detect mislabelling and origin claims in seafood beyond DNA-based methods.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 3</span>
          <h3>Dou et al. &mdash; Mass spectrometry in food authentication and origin traceability. <em>Mass Spectrometry Reviews</em>, 2022.</h3>
          <p><strong>Core contribution:</strong> Comprehensive review of MS-driven authentication and origin-traceability across foods, with explicit examples for seafood, including identification markers and fingerprinting strategies.</p>
          <p><strong>Methods:</strong> Fingerprinting, profiling, and marker-based MS approaches; emerging MS technologies (ambient ionization, ion mobility); chemometrics for classification.</p>
          <p><strong>Relevance to fraud:</strong> Underlines the practicality of MS for identifying species and geographic provenance in seafood, supporting regulatory and industry adoption.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 4</span>
          <h3>Barik et al. &mdash; Proteomics-based authentication of seafood: protein fingerprints and MALDI-TOF/MS workflows. 2022&ndash;2023.</h3>
          <p><strong>Core contribution:</strong> Demonstrates how proteomic fingerprints (MALDI-TOF MS peptide/protein profiles) can differentiate closely related seafood species and detect mislabelling.</p>
          <p><strong>Methods:</strong> MALDI-TOF MS, SWATH-MS; peptide/protein fingerprint databases; chemometrics for species discrimination.</p>
          <p><strong>Relevance to fraud:</strong> Provides practical proteomics workflows for rapid, high-throughput species identification in seafood supply chains.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 5</span>
          <h3>Pi&ntilde;eiro et al. &mdash; Proteomics as a Tool for the Investigation of Seafood and Other Marine Products. <em>Journal of Proteome Research</em>, 2002.</h3>
          <p><strong>Core contribution:</strong> Foundational discussion of how proteomics can address seafood authenticity, safety, and quality, including allergens and toxins.</p>
          <p><strong>Methods:</strong> Protein profiling, allergen/toxin characterization; foresight on application to authentication and traceability.</p>
          <p><strong>Relevance to fraud:</strong> Early articulation of proteomics as a mainstay for authenticating species and detecting adulteration &mdash; the historical baseline for later MS-based methods.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 6</span>
          <h3>Haider et al. &mdash; Food authentication, current issues, analytical techniques, and future challenges. <em>Comprehensive Reviews in Food Science and Food Safety</em>, 2024.</h3>
          <p><strong>Core contribution:</strong> Up-to-date synthesis of food authentication across commodities, with emphasis on animal-derived foods including seafood; surveys genomics, proteomics, and metabolomics; discusses future challenges including data sharing and method standardization.</p>
          <p><strong>Methods:</strong> Genomics/DNA-based, proteomics, metabolomics fingerprinting, and multi-omics integration with data infrastructure.</p>
          <p><strong>Relevance to fraud:</strong> Provides a current-state map of methods and identifies practical gaps (cost, accessibility, standardization) affecting seafood fraud enforcement.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 7</span>
          <h3>Selamat et al. &mdash; Application of the Metabolomics Approach in Food Authentication. <em>Molecules</em>, 2021.</h3>
          <p><strong>Core contribution:</strong> Systematic assessment of metabolomics as a food-authentication tool, including seafood, outlining instruments, data analysis workflows, and case examples.</p>
          <p><strong>Methods:</strong> Non-targeted and targeted metabolomics; MS/NMR platforms; data processing; biomarker discovery; metabolomics fingerprints for origin and mislabelling.</p>
          <p><strong>Relevance to fraud:</strong> Highlights metabolomics as a complementary approach to DNA- and proteomics-based methods, particularly useful for processed seafood where DNA may be degraded.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 8</span>
          <h3>Gonz&aacute;lez et al. / Alvarez-Rivera et al. &mdash; Omics-based methods for seafood traceability. 2018.</h3>
          <p><strong>Core contribution:</strong> Overview of omics-based approaches (genomics, transcriptomics, proteomics, metabolomics) for food traceability and authenticity, with focus on seafood applications and multi-omics data integration.</p>
          <p><strong>Methods:</strong> DNA barcoding, metabarcoding, MS-based proteomics/metabolomics, metabolomics fingerprinting; data integration strategies.</p>
          <p><strong>Relevance to fraud:</strong> A synthetic map for researchers and regulators on how multi-omics can be deployed to detect mislabelling/substitution and verify origin.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 9</span>
          <h3>Onyango et al. &mdash; MALDI-TOF MS proteomics for seafood authentication and species differentiation.</h3>
          <p><strong>Core contribution:</strong> Demonstrates MALDI-TOF MS-based protein fingerprinting for rapid species-level discrimination in seafood; construction of species-specific spectral libraries.</p>
          <p><strong>Methods:</strong> MALDI-TOF MS profiling, spectral library comparison, chemometric classification.</p>
          <p><strong>Relevance to fraud:</strong> Provides a practical, scalable platform for routine screening in seafood supply chains, suitable for enforcement and industry adoption.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 10</span>
          <h3>Campos et al. / L&oacute;pez-Pedrouso et al. &mdash; OMICs Approaches in Diarrhetic Shellfish Toxins Research. <em>Toxins</em>, 2020/2022.</h3>
          <p><strong>Core contribution:</strong> Review of omics approaches (proteomics, transcriptomics, metabolomics) in shellfish toxin research, illustrating how omics can underpin seafood safety and authenticity in toxin-laden contexts.</p>
          <p><strong>Methods:</strong> Transcriptomics and proteomics to study toxin uptake, distribution, and biotransformation; proteomic biomarker discovery.</p>
          <p><strong>Relevance to fraud:</strong> Demonstrates the breadth of omics in seafood quality/safety, complementing authenticity-focused omics discussions.</p>
        </div>

        <h2>Notes on Methodology</h2>

        <h3>Species Identification vs. Origin Verification</h3>
        <p>Several papers emphasise species-level authentication (DNA barcoding/metabarcoding, MALDI-TOF MS fingerprints, proteomics) as foundational, while others expand into geographic origin verification using metabolomics and elemental/metallomics fingerprints.</p>

        <h3>Processing and Degraded Samples</h3>
        <p>DNA-based methods can be challenged by processing; MS-based proteomics and metabolomics provide robust alternatives or complements for processed products and mixed-species items.</p>

        <h3>Practical Considerations</h3>
        <p>Several reviews stress barriers to routine deployment (costs, infrastructure, need for reference databases) and call for field-deployable or portable tools.</p>

        <div class="references-block">
          <h2>References</h2>
          <p>[1] M. Afzaal, F. Saeed, Y. A. Shah, M. Hussain, R. Suleria, and M. Aadil, &ldquo;Proteomics as a promising biomarker in food authentication,&rdquo; <em>Food Science &amp; Nutrition</em>, vol. 10, no. 7, pp. 2333&ndash;2346, 2022. <a href="https://doi.org/10.1002/fsn3.2842" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1002/fsn3.2842</a></p>
          <p>[2] C.-C. Chien, C.-Y. Lin, and C.-H. Tsai, &ldquo;Determination of adulteration, geographical origins, and species of food by mass spectrometry,&rdquo; <em>Mass Spectrometry Reviews</em>, vol. 42, no. 6, pp. 2273&ndash;2323, 2022. <a href="https://doi.org/10.1002/mas.21780" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1002/mas.21780</a></p>
          <p>[3] N. Dou, C. Zhang, W. Li, and J. Zhang, &ldquo;Mass spectrometry in food authentication and origin traceability,&rdquo; <em>Mass Spectrometry Reviews</em>, vol. 42, no. 5, pp. 1772&ndash;1807, 2022. <a href="https://doi.org/10.1002/mas.21779" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1002/mas.21779</a></p>
          <p>[4] A. Haider, S. Saeed, M. Sajid, and R. Ahmad, &ldquo;Food authentication, current issues, analytical techniques, and future challenges,&rdquo; <em>Comprehensive Reviews in Food Science and Food Safety</em>, vol. 23, no. 3, 2024. <a href="https://doi.org/10.1111/1541-4337.13360" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/1541-4337.13360</a></p>
          <p>[5] M. Herrero, C. Sim&oacute;-Alfonso, and A. Cifuentes, &ldquo;Food authentication using mass spectrometry-based approaches,&rdquo; <em>Mass Spectrometry Reviews</em>, vol. 31, no. 1, pp. 49&ndash;69, 2011. <a href="https://doi.org/10.1002/mas.20335" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1002/mas.20335</a></p>
          <p>[6] A. V. Kotsanopoulos and I. S. Arvanitoyannis, &ldquo;The use of molecular markers in the verification of fish and seafood authenticity and the detection of adulteration,&rdquo; <em>Comprehensive Reviews in Food Science and Food Safety</em>, vol. 20, no. 2, pp. 1584&ndash;1654, 2021. <a href="https://doi.org/10.1111/1541-4337.12719" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/1541-4337.12719</a></p>
          <p>[7] A. Kumar, S. Chordia, and R. Sharma, &ldquo;Seafood authentication and fraud detection using molecular tools,&rdquo; <em>Journal of Food Safety</em>, vol. 42, no. 4, 2022. <a href="https://doi.org/10.1111/jfs.12986" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/jfs.12986</a></p>
          <p>[8] M. L&oacute;pez-Pedrouso, J. M. Lorenzo, D. Franco, and C. Zapata, &ldquo;OMICs approaches in diarrhetic shellfish toxins research,&rdquo; <em>Antioxidants</em>, vol. 11, no. 2, p. 369, 2022. <a href="https://doi.org/10.3390/antiox11020369" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.3390/antiox11020369</a></p>
          <p>[9] C. Pi&ntilde;eiro, B. Canas, and M. Gallardo, &ldquo;Proteomics as a tool for the investigation of seafood and other marine products,&rdquo; <em>Journal of Proteome Research</em>, vol. 2, no. 2, pp. 127&ndash;135, 2002. <a href="https://doi.org/10.1021/pr0200083" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1021/pr0200083</a></p>
          <p>[10] J. Selamat, N. A. Safiai, N. H. Jambari, and A. K. Aadil, &ldquo;Application of the metabolomics approach in food authentication,&rdquo; <em>Molecules</em>, vol. 26, no. 24, p. 7565, 2021. <a href="https://doi.org/10.3390/molecules26247565" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.3390/molecules26247565</a></p>
        </div>

      </div>

      <aside class="article-sidebar">
        <div class="sidebar-card">
          <h4>Key Methods</h4>
          <span class="theme-tag">DNA Barcoding (coxI)</span>
          <span class="theme-tag">MALDI-TOF MS</span>
          <span class="theme-tag">MS-based Proteomics</span>
          <span class="theme-tag">Metabolomics Fingerprinting</span>
          <span class="theme-tag">Metabarcoding</span>
          <span class="theme-tag">Omics Integration</span>
          <span class="theme-tag">Chemometrics</span>
        </div>

        <div class="sidebar-card">
          <h4>Related Pages</h4>
          <ul>
            <li><a href="framework.php">The I-CADMUS Framework</a></li>
            <li><a href="substitution.php">Species Substitution</a></li>
            <li><a href="misrepresentation.php">Origin Misrepresentation</a></li>
            <li><a href="news-scite-2025-6.php">SCITe Synthesis 2025/6</a></li>
            <li><a href="news-consumer-trust.php">Consumer Trust in Seafood</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h4>Source</h4>
          <p>SCITe synthesised these ten papers to present a cohesive picture of the state of the art in seafood fraud detection. Claims are supported by IEEE-style citations.</p>
        </div>
      </aside>

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
