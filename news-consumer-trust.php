<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Consumer Trust in Seafood | I-CADMUS Newsroom</title>
<meta name="description" content="A synthesis of ten academic papers on consumer trust in seafood traceability — covering willingness to pay, blockchain, country-of-origin labelling, and supply-chain transparency." />

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
  .article-tag-pill { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #fff; background: var(--teal); padding: 5px 12px; border-radius: 2px; margin-bottom: 20px; }
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
  .article-content .callout p + p { margin-top: 14px; }
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
  .footer-bottom-links a:hover { color: #fff; }
  .footer-social { display: flex; gap: 8px; margin-top: 20px; }
  .footer-social a { width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); display: grid; place-items: center; color: rgba(255,255,255,0.7); font-size: 13px; font-weight: 700; transition: background 0.2s, color 0.2s; }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

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
        <span class="current">Consumer Trust in Seafood</span>
      </div>
      <div class="article-tag-pill">Research Synthesis</div>
      <h1>Consumer Trust in the Context of <strong>Seafood &amp; Related Products.</strong></h1>
      <p class="lede">A focused, evidence-based synthesis of ten highly credible academic papers addressing consumer trust in seafood — covering traceability signals, willingness to pay, blockchain provenance, country-of-origin labelling, and the gap between policy intent and consumer understanding. Synthesised by SCITe.</p>
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

        <p>We asked SCITe for a focused, evidence-based synthesis of ten highly credible academic papers that centrally address consumer trust in the context of seafood, fish, and related products. For each, a concise report highlights the paper's core contribution, the questions it raises about consumer trust, the methods used, and the key findings. Where relevant, limitations and contested points are noted. Papers are synthesised to draw out common themes and tensions.</p>

        <div class="claim-block">
          <span class="claim-num">Paper 1</span>
          <h3>Sterling et al. — Assessing the Value and Role of Seafood Traceability from an Entire Value-Chain Perspective. <em>Comprehensive Reviews in Food Science and Food Safety</em>, 2015.</h3>
          <p><strong>Core contribution:</strong> Traces how traceability systems across the entire seafood value chain influence perceived and actual trust, consumer confidence, and business performance. Uses interviews across 48 seafood businesses and a consumer survey in five nations.</p>
          <p><strong>Trust issues:</strong> Transparency of origin, handling, and processing; perceived reliability of supply-chain information; the impact of traceability on consumer confidence and willingness to pay; the potential mismatch between policy intentions and consumer understanding.</p>
          <p><strong>Methods:</strong> Mixed-methods design — qualitative interviews plus a consumer discrete-choice simulator.</p>
          <p><strong>Relevance:</strong> Establishes that traceability information is a credible signal that can affect consumer choice, yet notes variation by market, information design, and perceived credibility of the system.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 2</span>
          <h3>Myae &amp; Goddard — Importance of traceability for sustainable production: A cross-country comparison. <em>International Journal of Consumer Studies</em>, 2012.</h3>
          <p><strong>Core contribution:</strong> Conceptual and empirical exploration of consumer trust in traceability as a signal of sustainable production. Provides robust insight into traceability as a trust signal in animal-origin foods.</p>
          <p><strong>Trust issues:</strong> How traceability, certification, and country-of-origin information influence consumer confidence; cross-country variability in trust determinants; the role of institutional credibility in shaping trust.</p>
          <p><strong>Methods:</strong> Cross-country survey-style analysis.</p>
          <p><strong>Relevance:</strong> Provides a theoretical lens for interpreting seafood traceability signals (origin, certification) as trust cues for consumers.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 3</span>
          <h3>Suhandoko et al. — Meat Traceability: Traditional Market Shoppers' Preferences and Willingness-to-Pay for Additional Information in Taiwan. <em>Foods</em>, 2021.</h3>
          <p><strong>Core contribution:</strong> Examines willingness to pay for traceability information in a traditional market context, highlighting consumer demand for safety and origin information with practical implications for trust-building in seafood contexts.</p>
          <p><strong>Trust issues:</strong> Willingness to pay for traceability information; perceptions of safety and quality tied to traceability signals; differences in preferences between traditional markets and modern channels.</p>
          <p><strong>Methods:</strong> Contingent valuation and survey data.</p>
          <p><strong>Relevance:</strong> A majority of traditional-market consumers value traceability and are willing to pay for information — implying similar dynamics apply to seafood in similar markets.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 4</span>
          <h3>Hoque et al. — Consumers' Preferences for the Traceability Information of Seafood Safety. <em>Foods</em>, 2022.</h3>
          <p><strong>Core contribution:</strong> Empirical assessment of Bangladeshi consumers' willingness to pay for traceability attributes linked to seafood safety, including production mode, inspection notes, and origin.</p>
          <p><strong>Trust issues:</strong> Perceived safety signals as drivers of trust; regional differences in willingness to pay; preference for traceability that reduces perceived risk and uncertainty.</p>
          <p><strong>Methods:</strong> Experimental survey with conditional logit analysis.</p>
          <p><strong>Relevance:</strong> Directly ties traceability attributes to consumer trust and willingness to pay for seafood safety information, underscoring the signalling role of traceability in building trust.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 5</span>
          <h3>Violino et al. — From Sea to Table: The Role of Traceability in Italian Seafood Consumption. <em>Foods</em>, 2025.</h3>
          <p><strong>Core contribution:</strong> Contemporary assessment of Italian consumers' willingness to pay for traceable seafood and how blockchain can enhance transparency and trust.</p>
          <p><strong>Trust issues:</strong> Consumer signalling of origin, production methods, and catch area; perceived benefits of certification and blockchain for trust; cost-benefit considerations for implementing traceability vs. consumer willingness to pay.</p>
          <p><strong>Methods:</strong> Survey-based study with explicit blockchain signalling elements.</p>
          <p><strong>Relevance:</strong> A modern, context-specific example of how traceability and digital signals (blockchain) influence trust and consumer valuation of seafood products.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 6</span>
          <h3>Patel et al. — Blockchain technology in food safety and traceability concern to livestock products. <em>Heliyon</em>, 2023.</h3>
          <p><strong>Core contribution:</strong> Reviews and case illustrations of blockchain implementations in food supply chains, including seafood, emphasising consumer trust, transparency, and data integrity.</p>
          <p><strong>Trust issues:</strong> Consumer confidence relies on tamper-proof, verifiable data; the role of QR codes and end-to-end traceability signals; governance and data security concerns; the need for credible information at the point of purchase.</p>
          <p><strong>Methods:</strong> Synthesis of industry cases and policy implications.</p>
          <p><strong>Relevance:</strong> Frames blockchain-enabled traceability as a trust-building mechanism with practical implications for consumer confidence in seafood products.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 7</span>
          <h3>Nguyen et al. — Understanding consumer switching intention toward traceable agricultural products: Push-pull-mooring perspective. <em>International Journal of Consumer Studies</em>, 2021.</h3>
          <p><strong>Core contribution:</strong> Analyses consumer switching intentions toward traceable products, identifying perceived risk, perceived quality, willingness to pay a premium, and health consciousness as determinants.</p>
          <p><strong>Trust issues:</strong> Perceived risk and information asymmetry as drivers of distrust in non-traceable products; the signalling value of traceability labels; willingness to switch to traceable options as a trust-building mechanism.</p>
          <p><strong>Methods:</strong> Survey-based SEM modelling in Taiwan.</p>
          <p><strong>Relevance:</strong> Directly informs how traceability signals reduce perceived risk and enhance trust, shaping purchase intentions in seafood contexts.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 8</span>
          <h3>Bhatt et al. — Implementing Interoperability in the Seafood Industry. <em>Journal of Food Science</em>, 2017.</h3>
          <p><strong>Core contribution:</strong> Argues for interoperable information systems along seafood supply chains to enable traceability, with governance requirements and standardization as prerequisites for credible trust signals.</p>
          <p><strong>Trust issues:</strong> Data sharing, data security, governance, and standards; the risk of mistrust if data are incomplete or opaque; the role of technical interoperability in enabling consumer-facing trust signals.</p>
          <p><strong>Methods:</strong> Conceptual/engineering-focused; draws lessons from other sectors.</p>
          <p><strong>Relevance:</strong> Supports the structural underpinnings of trust signals by ensuring data integrity and credible traceability information across the chain.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 9</span>
          <h3>Bitzios et al. — Country-of-Origin Labelling, Food Traceability Drivers and Food Fraud: Lessons from Consumers' Preferences and Perceptions. <em>European Journal of Risk Regulation</em>, 2017.</h3>
          <p><strong>Core contribution:</strong> Reviews drivers of traceability and country-of-origin labelling, including consumer expectations, labelling, and perceptions of risk, with attention to how information affects trust and fraud perceptions.</p>
          <p><strong>Trust issues:</strong> The signalling role of origin information; consumer perception of traceability and risk; the tension between policy signals and consumer trust in labels.</p>
          <p><strong>Methods:</strong> Synthesis of literature and regulatory perspectives.</p>
          <p><strong>Relevance:</strong> Provides broad context on consumer trust signals (labels, origin claims) that influence seafood choices and risk perceptions.</p>
        </div>

        <div class="claim-block">
          <span class="claim-num">Paper 10</span>
          <h3>Giraud &amp; Amblard / Abdelmawgoud &amp; Abdelnaby — What does traceability mean for food consumers? 2003/2020.</h3>
          <p><strong>Core contribution:</strong> Cross-category exploration of traceability signals and consumer perceptions, with lessons transferable to seafood regarding how consumers interpret traceability information and country-of-origin signals.</p>
          <p><strong>Trust issues:</strong> Consumer expectations for traceability signals; perceived usefulness and credibility of traceability information; variability in consumer trust based on store channel and information content.</p>
          <p><strong>Methods:</strong> Early consumer research; historical grounding for subsequent seafood-specific trust research.</p>
          <p><strong>Relevance:</strong> Foundational understanding of how consumers respond to traceability signals.</p>
        </div>

        <h2>Synthesis: Themes and Cross-Cutting Insights</h2>

        <h3>Traceability Signals as Trust Engineers</h3>
        <p>Across these sources, traceability information acts as a credence signal that reduces information asymmetry and increases trust — particularly when signals are credible (blockchain-based provenance, origin labels, production methods) and when data are accessible at the point of purchase. The signalling effect is conditional: consumer trust increases when signals are perceived as reliable and verifiable, and may erode if signals are opaque or fragmented.</p>

        <h3>The Role of Technology in Signalling Credibility</h3>
        <p>Blockchain and digital traceability are repeatedly positioned as signals that can enhance consumer trust, provided governance, data integrity, and user-friendly disclosure are in place. Yet concerns about data privacy, data manipulation at entry points, and the cost-benefit balance influence trust perceptions. Interoperability and standardised data sharing are necessary to ensure trust signals are coherent across supply chains.</p>

        <h3>Market and Context Matters</h3>
        <p>Trust signals are not uniformly valued; consumer demand for traceability varies by market, product form, and channel (traditional markets vs. modern retail). Willingness to pay tends to be higher where perceived risk is elevated, where safety incidents have occurred, or where consumers have greater access to information and education about traceability.</p>

        <div class="nuance-box">
          <div class="callout-title">Gaps and Tensions</div>
          <p>Several sources highlight gaps between policy/industry investments in traceability and actual consumer comprehension or uptake of trust signals — suggesting the need for better consumer education and clearer labelling practices. Not all traceability investments translate into measurable increases in consumer trust; signalling must be credible, verifiable, and communicated effectively, or risk misalignment between producer claims and consumer interpretation.</p>
        </div>

        <div class="callout">
          <div class="callout-title">What This Means</div>
          <p><strong>For researchers:</strong> Focus on how signalling mechanisms (origin labels, traceability data, blockchain-based provenance) influence consumer trust and willingness to pay in seafood, while attending to cross-cultural differences and processing level (live, fresh, frozen, canned, or heavily processed).</p>
          <p><strong>For policymakers and industry:</strong> Invest in credible, standardised traceability information accessible at the point of sale. Consumer education is critical to improve interpretation of traceability signals. Technologies like blockchain necessitate governance and transparency across the supply chain.</p>
        </div>

        <div class="references-block">
          <h2>References</h2>
          <p>Abdelmawgoud &amp; Abdelnaby (2020). <em>International Journal of Heritage Tourism and Hospitality</em>, 14(1), 35–51. <a href="https://doi.org/10.21608/ijhth.2020.120265" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.21608/ijhth.2020.120265</a></p>
          <p>Bhatt et al. (2017). <em>Journal of Food Science</em>, 82(S1). <a href="https://doi.org/10.1111/1750-3841.13742" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/1750-3841.13742</a></p>
          <p>Bitzios et al. (2017). <em>European Journal of Risk Regulation</em>, 8(3), 541–558. <a href="https://doi.org/10.1017/err.2017.27" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1017/err.2017.27</a></p>
          <p>Hoque et al. (2022). <em>Foods</em>, 11(12), 1675. <a href="https://doi.org/10.3390/foods11121675" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.3390/foods11121675</a></p>
          <p>Myae &amp; Goddard (2012). <em>International Journal of Consumer Studies</em>, 36(2), 192–202. <a href="https://doi.org/10.1111/j.1470-6431.2011.01084.x" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/j.1470-6431.2011.01084.x</a></p>
          <p>Nguyen et al. (2021). <em>International Journal of Consumer Studies</em>, 46(3), 870–888. <a href="https://doi.org/10.1111/ijcs.12733" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/ijcs.12733</a></p>
          <p>Patel et al. (2023). <em>Heliyon</em>, 9(6), e16526. <a href="https://doi.org/10.1016/j.heliyon.2023.e16526" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1016/j.heliyon.2023.e16526</a></p>
          <p>Sterling et al. (2015). <em>Comprehensive Reviews in Food Science and Food Safety</em>, 14(3), 205–268. <a href="https://doi.org/10.1111/1541-4337.12130" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.1111/1541-4337.12130</a></p>
          <p>Suhandoko et al. (2021). <em>Foods</em>, 10(8), 1819. <a href="https://doi.org/10.3390/foods10081819" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.3390/foods10081819</a></p>
          <p>Violino et al. (2025). <em>Foods</em>, 14(20), 3469. <a href="https://doi.org/10.3390/foods14203469" style="color:var(--brand);text-decoration:underline;" target="_blank" rel="noopener">https://doi.org/10.3390/foods14203469</a></p>
        </div>

      </div>

      <aside class="article-sidebar">
        <div class="sidebar-card">
          <h4>Key Themes</h4>
          <span class="theme-tag">Consumer Trust</span>
          <span class="theme-tag">Traceability Signals</span>
          <span class="theme-tag">Willingness to Pay</span>
          <span class="theme-tag">Blockchain</span>
          <span class="theme-tag">Country-of-Origin Labelling</span>
          <span class="theme-tag">Information Asymmetry</span>
          <span class="theme-tag">Supply Chain Transparency</span>
          <span class="theme-tag">Policy &amp; Governance</span>
        </div>

        <div class="sidebar-card">
          <h4>Related Pages</h4>
          <ul>
            <li><a href="framework.php">The I-CADMUS Framework</a></li>
            <li><a href="misrepresentation.php">Origin Misrepresentation</a></li>
            <li><a href="counterfeit.php">Counterfeit Certification</a></li>
            <li><a href="certification.php">Certification</a></li>
            <li><a href="news-ten-papers.php">Ten Papers Central to Seafood Fraud</a></li>
            <li><a href="news-scite-2025-6.php">SCITe Synthesis 2025/6</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h4>Coverage</h4>
          <p>Synthesised from 10 peer-reviewed papers and reviews covering consumer trust, traceability, and seafood authenticity signals across global markets.</p>
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
