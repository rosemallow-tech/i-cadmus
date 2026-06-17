<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Unreported — Grey Channels | I-CADMUS Framework</title>
<meta name="description" content="Category U of the I-CADMUS framework: Unreported Grey Channels — product that bypasses traceability, moved off the books and into the menu without a trail." />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">
<style>
  :root{--brand:#003a5d;--brand-dark:#002940;--brand-light:#0a4f7a;--accent:#c8102e;--accent-dark:#9e0c24;--teal:#00838f;--gold:#b8870b;--ink:#1c2127;--ink-2:#3d434d;--ink-3:#5c6470;--muted:#8a929c;--line:#e5e8ec;--line-2:#d5dae0;--bg:#ffffff;--bg-soft:#f6f8fa;--bg-2:#eef2f6;--sans:'Source Sans 3',-apple-system,'Segoe UI',sans-serif;--serif:'Source Serif 4',Georgia,serif;--shadow-sm:0 1px 2px rgba(0,25,50,.06),0 1px 3px rgba(0,25,50,.04);--shadow-md:0 4px 12px rgba(0,25,50,.08),0 2px 4px rgba(0,25,50,.04);--shadow-lg:0 12px 32px rgba(0,25,50,.10),0 4px 12px rgba(0,25,50,.06);}
  *{box-sizing:border-box;margin:0;padding:0;}html{scroll-behavior:smooth;}body{font-family:var(--sans);color:var(--ink);background:var(--bg);font-size:16px;line-height:1.55;-webkit-font-smoothing:antialiased;}a{color:inherit;text-decoration:none;}img{display:block;max-width:100%;}
  .container{max-width:1320px;margin:0 auto;padding:0 32px;}
  .utility-bar{background:var(--brand-dark);color:rgba(255,255,255,.85);font-size:13px;border-bottom:1px solid rgba(255,255,255,.08);}
  .utility-bar .container{display:flex;justify-content:space-between;align-items:center;height:38px;}
  .utility-bar a{color:rgba(255,255,255,.85);transition:color .15s;padding:0 14px;border-right:1px solid rgba(255,255,255,.12);line-height:38px;}
  .utility-bar a:last-child{border-right:none;}.utility-bar a:hover{color:#fff;}
  .utility-locale{display:flex;align-items:center;gap:8px;}
  .utility-locale select{background:transparent;border:none;color:rgba(255,255,255,.85);font-family:inherit;font-size:13px;cursor:pointer;}
  .utility-locale select option{background:var(--brand-dark);}
  .header{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:0;z-index:100;box-shadow:var(--shadow-sm);}
  .header .container{display:flex;align-items:center;height:76px;gap:40px;}
  .brand{display:flex;align-items:center;gap:12px;font-weight:700;font-size:22px;color:var(--brand);letter-spacing:-.01em;flex-shrink:0;}
  .logo{height:44px;width:auto;}
  .nav-primary{display:flex;gap:4px;flex:1;}
  .nav-primary>li{list-style:none;position:relative;}
  .nav-primary>li>a{display:flex;align-items:center;gap:6px;height:76px;padding:0 16px;font-size:15px;font-weight:500;color:var(--ink-2);border-bottom:3px solid transparent;transition:color .15s,border-color .15s;}
  .nav-primary>li>a:hover{color:var(--brand);border-bottom-color:var(--accent);}
  .nav-primary>li>a .chev{font-size:10px;margin-top:2px;transition:transform .2s;}
  .nav-primary>li:hover>a .chev{transform:rotate(180deg);}
  .nav-mega{position:absolute;top:100%;left:0;background:#fff;box-shadow:var(--shadow-lg);border:1px solid var(--line);border-top:3px solid var(--accent);min-width:520px;padding:24px;opacity:0;visibility:hidden;transform:translateY(8px);transition:opacity .2s,transform .2s,visibility .2s;z-index:50;}
  .nav-primary>li:hover .nav-mega{opacity:1;visibility:visible;transform:translateY(0);}
  .nav-mega-grid{display:grid;grid-template-columns:1fr 1fr;gap:4px 24px;}
  .nav-mega a{display:block;padding:10px 12px;border-radius:4px;font-size:14px;color:var(--ink-2);transition:background .15s,color .15s;}
  .nav-mega a:hover{background:var(--bg-soft);color:var(--brand);}
  .nav-mega a strong{display:block;font-weight:600;color:var(--ink);margin-bottom:2px;font-size:14px;}
  .nav-mega a span{color:var(--ink-3);font-size:12px;}
  .header-tools{display:flex;align-items:center;gap:12px;}
  .header-search{width:38px;height:38px;border-radius:50%;background:var(--bg-soft);display:grid;place-items:center;color:var(--ink-2);transition:background .15s;}
  .header-search:hover{background:var(--bg-2);}
  .btn{display:inline-flex;align-items:center;gap:8px;padding:11px 22px;font-size:14px;font-weight:600;border-radius:2px;transition:all .15s;cursor:pointer;border:1px solid transparent;line-height:1.2;}
  .btn-primary{background:var(--accent);color:#fff;border-color:var(--accent);}.btn-primary:hover{background:var(--accent-dark);}
  .btn-outline{background:transparent;color:var(--brand);border-color:var(--brand);}.btn-outline:hover{background:var(--brand);color:#fff;}
  .btn .arrow{font-size:12px;}
  .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.7);margin-bottom:24px;}
  .breadcrumb a{color:rgba(255,255,255,.85);}.breadcrumb a:hover{color:#fff;text-decoration:underline;}.breadcrumb .sep{color:rgba(255,255,255,.4);}
  .page-hero{background:linear-gradient(135deg,var(--brand-dark) 0%,var(--brand) 50%,var(--brand-light) 100%);color:#fff;position:relative;overflow:hidden;padding:80px 0 100px;}
  .page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 80% 20%,rgba(0,131,143,.25),transparent 50%),radial-gradient(circle at 20% 80%,rgba(200,16,46,.15),transparent 60%);pointer-events:none;}
  .page-hero::after{content:'';position:absolute;right:-100px;bottom:-100px;width:500px;height:500px;background-image:radial-gradient(circle at center,rgba(255,255,255,.04) 1px,transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:radial-gradient(circle at center,black,transparent 70%);-webkit-mask-image:radial-gradient(circle at center,black,transparent 70%);}
  .page-hero-inner{position:relative;z-index:1;}
  .page-hero-grid{display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center;}
  .cat-badge{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.9);background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.2);border-radius:100px;padding:6px 16px;margin-bottom:24px;}
  .cat-badge::before{content:'';width:7px;height:7px;background:#4ade80;border-radius:50%;box-shadow:0 0 0 3px rgba(74,222,128,.25);}
  .page-hero h1{font-family:var(--serif);font-weight:400;font-size:clamp(36px,5vw,60px);line-height:1.08;letter-spacing:-.015em;margin-bottom:20px;color:#fff;}
  .page-hero h1 strong{font-weight:600;}
  .page-hero .lede{font-size:19px;color:rgba(255,255,255,.88);max-width:64ch;line-height:1.5;margin-bottom:36px;}
  .hero-letter-box{width:140px;height:140px;background:rgba(255,255,255,.08);border:2px solid rgba(255,255,255,.2);border-radius:12px;display:grid;place-items:center;font-family:var(--serif);font-size:88px;font-weight:600;color:#fff;flex-shrink:0;position:relative;}
  .hero-letter-box::after{content:'';position:absolute;bottom:16px;left:20px;right:20px;height:4px;background:var(--accent);border-radius:2px;}
  .cat-page-layout{display:grid;grid-template-columns:240px 1fr;gap:64px;padding:80px 0;}
  .framework-side{position:sticky;top:100px;align-self:start;}
  .framework-side h6{font-size:11px;color:var(--ink-3);letter-spacing:.12em;text-transform:uppercase;font-weight:700;margin-bottom:14px;padding-bottom:12px;border-bottom:1px solid var(--line);}
  .framework-side ul{list-style:none;}
  .framework-side li a{display:flex;align-items:center;gap:12px;padding:10px 0 10px 12px;margin-left:-14px;color:var(--ink-2);font-size:14px;border-left:2px solid transparent;transition:color .15s,border-color .15s;}
  .framework-side li a:hover{color:var(--brand);}
  .framework-side li a.active{color:var(--brand);border-left-color:var(--accent);font-weight:600;}
  .framework-side .letter{width:28px;height:28px;background:var(--bg-soft);color:var(--brand);border-radius:4px;display:grid;place-items:center;font-family:var(--serif);font-size:16px;font-weight:600;flex-shrink:0;}
  .framework-side li a.active .letter{background:var(--brand);color:#fff;}
  .cat-content{min-width:0;}
  .cat-content-head{margin-bottom:40px;padding-bottom:40px;border-bottom:1px solid var(--line);}
  .cat-num{font-size:12px;color:var(--accent);font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:10px;}
  .cat-title{font-family:var(--serif);font-size:clamp(34px,4vw,48px);font-weight:600;color:var(--brand);line-height:1.1;letter-spacing:-.015em;margin-bottom:14px;}
  .cat-tagline{font-size:18px;color:var(--ink-2);font-style:italic;line-height:1.5;}
  .cat-body{display:grid;grid-template-columns:1.4fr 1fr;gap:40px;margin-bottom:40px;}
  .cat-body p{font-size:16px;color:var(--ink-2);line-height:1.65;margin-bottom:16px;}
  .cat-body p strong{color:var(--ink);font-weight:600;}
  .why-box{background:var(--brand-dark);color:#fff;border-radius:8px;padding:32px;margin:32px 0;}
  .why-box h4{font-family:var(--serif);font-size:20px;font-weight:600;margin-bottom:12px;color:#fff;}
  .why-box p{font-size:15px;color:rgba(255,255,255,.85);line-height:1.6;}
  .cat-info-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:6px;padding:28px;}
  .cat-info-card h4{font-family:var(--serif);font-size:18px;font-weight:600;color:var(--brand);margin-bottom:16px;padding-bottom:12px;border-bottom:2px solid var(--accent);}
  .cat-info-card ul{list-style:none;}
  .cat-info-card li{font-size:14px;color:var(--ink-2);line-height:1.5;padding:8px 0;border-bottom:1px solid var(--line);display:grid;grid-template-columns:20px 1fr;gap:10px;align-items:start;}
  .cat-info-card li:last-child{border-bottom:none;}
  .cat-info-card li::before{content:'⚑';color:var(--accent);font-size:12px;margin-top:3px;}
  .cat-info-card.counter li::before{content:'✓';color:#10b981;}
  .sector-section{padding:64px 0;border-top:1px solid var(--line);}
  .sector-section h3{font-family:var(--serif);font-size:28px;font-weight:600;color:var(--brand);margin-bottom:8px;}
  .sector-section .sub{font-size:16px;color:var(--ink-2);margin-bottom:32px;}
  .sector-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;}
  .sector-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:6px;padding:24px;}
  .sector-card .sector-label{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:10px;}
  .sector-card h5{font-family:var(--serif);font-size:18px;font-weight:600;color:var(--brand);margin-bottom:10px;}
  .sector-card ul{list-style:none;}
  .sector-card li{font-size:14px;color:var(--ink-2);padding:6px 0;border-bottom:1px solid var(--line);display:flex;gap:8px;align-items:start;}
  .sector-card li:last-child{border-bottom:none;}
  .sector-card li::before{content:'→';color:var(--brand);font-size:12px;margin-top:2px;flex-shrink:0;}
  .related-section{padding:64px 0;border-top:1px solid var(--line);}
  .related-section h3{font-family:var(--serif);font-size:28px;font-weight:600;color:var(--brand);margin-bottom:32px;}
  .related-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
  .related-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:24px;transition:transform .2s,box-shadow .2s,border-color .2s;display:block;}
  .related-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:var(--brand-light);}
  .related-card .r-letter{width:48px;height:48px;background:var(--brand);color:#fff;border-radius:6px;display:grid;place-items:center;font-family:var(--serif);font-size:28px;font-weight:600;margin-bottom:16px;}
  .related-card .r-num{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:6px;}
  .related-card h5{font-family:var(--serif);font-size:17px;font-weight:600;color:var(--brand);margin-bottom:6px;line-height:1.2;}
  .related-card p{font-size:13px;color:var(--ink-3);line-height:1.45;}
  .cat-nav{display:grid;grid-template-columns:1fr 1fr;gap:16px;padding:48px 0;border-top:1px solid var(--line);}
  .cat-nav-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:24px;transition:border-color .2s,box-shadow .2s;display:block;}
  .cat-nav-card:hover{border-color:var(--brand);box-shadow:var(--shadow-md);}
  .cat-nav-label{font-size:12px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-3);margin-bottom:8px;}
  .cat-nav-title{font-family:var(--serif);font-size:20px;font-weight:600;color:var(--brand);line-height:1.2;}
  .cat-nav-card.next{text-align:right;}
  .cta-band{background:var(--brand);background-image:linear-gradient(135deg,var(--brand) 0%,var(--brand-dark) 100%);color:#fff;padding:80px 0;position:relative;overflow:hidden;}
  .cta-band::before{content:'';position:absolute;top:0;right:0;width:50%;height:100%;background:radial-gradient(circle at 80% 50%,rgba(0,131,143,.3),transparent 70%);}
  .cta-band-grid{display:grid;grid-template-columns:1.5fr auto;gap:48px;align-items:center;position:relative;z-index:1;}
  .cta-band h2{font-family:var(--serif);font-size:clamp(28px,3vw,40px);font-weight:400;line-height:1.2;margin-bottom:12px;color:#fff;}
  .cta-band h2 strong{font-weight:600;}
  .cta-band p{font-size:16px;color:rgba(255,255,255,.85);max-width:60ch;}
  .cta-band-actions{display:flex;gap:12px;flex-wrap:wrap;}
  .cta-band .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}.cta-band .btn-outline:hover{background:#fff;color:var(--brand);}
  footer{background:#1a1d22;color:rgba(255,255,255,.75);padding:80px 0 0;font-size:14px;}
  .footer-top{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr 1fr;gap:40px;padding-bottom:56px;border-bottom:1px solid rgba(255,255,255,.08);}
  .footer-brand{display:flex;align-items:center;gap:12px;margin-bottom:20px;}
  .footer-brand .logo{height:40px;width:auto;}
  .footer-desc{color:rgba(255,255,255,.65);line-height:1.55;margin-bottom:24px;max-width:36ch;}
  .footer-newsletter input{width:100%;padding:12px 14px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.15);color:#fff;border-radius:4px;font-size:14px;font-family:inherit;margin-bottom:8px;}
  .footer-newsletter input::placeholder{color:rgba(255,255,255,.5);}
  .footer-newsletter button{background:var(--accent);color:#fff;border:none;padding:12px 18px;font-weight:600;font-size:14px;border-radius:4px;cursor:pointer;width:100%;transition:background .2s;font-family:inherit;}
  .footer-newsletter button:hover{background:var(--accent-dark);}
  .footer-col h5{color:#fff;font-size:14px;font-weight:600;margin-bottom:18px;letter-spacing:.02em;}
  .footer-col ul{list-style:none;}.footer-col li{margin-bottom:10px;}
  .footer-col a{color:rgba(255,255,255,.65);transition:color .15s;}.footer-col a:hover{color:#fff;}
  .footer-bottom{display:grid;grid-template-columns:1fr auto;gap:32px;padding:32px 0;align-items:center;color:rgba(255,255,255,.5);font-size:13px;}
  .footer-bottom-links{display:flex;gap:24px;flex-wrap:wrap;}.footer-bottom-links a:hover{color:#fff;}
  .footer-social{display:flex;gap:8px;margin-top:20px;}
  .footer-social a{width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);display:grid;place-items:center;color:rgba(255,255,255,.7);font-size:13px;font-weight:700;transition:background .2s,color .2s;}
  .footer-social a:hover{background:var(--accent);color:#fff;border-color:var(--accent);}
  @media(max-width:1100px){.container{padding:0 24px;}.nav-primary{display:none;}.header .container{gap:16px;justify-content:space-between;}.cat-page-layout{grid-template-columns:1fr;gap:32px;padding:48px 0;}.framework-side{position:static;}.framework-side ul{display:flex;gap:8px;overflow-x:auto;padding-bottom:8px;}.framework-side li a{border-left:none;border-bottom:2px solid transparent;padding:10px 12px;margin:0;white-space:nowrap;}.framework-side li a.active{border-bottom-color:var(--accent);border-left-color:transparent;}.cat-body{grid-template-columns:1fr;gap:24px;}.sector-grid{grid-template-columns:1fr;}.related-grid{grid-template-columns:1fr 1fr;}.cta-band-grid{grid-template-columns:1fr;}.footer-top{grid-template-columns:1fr 1fr;}.page-hero{padding:56px 0 72px;}.page-hero-grid{grid-template-columns:1fr;}.hero-letter-box{display:none;}}
  @media(max-width:640px){.related-grid{grid-template-columns:1fr;}.cat-nav{grid-template-columns:1fr;}.footer-top{grid-template-columns:1fr;}.footer-bottom{grid-template-columns:1fr;text-align:center;justify-items:center;}.utility-bar .container{display:none;}}
  .reveal{opacity:0;transform:translateY(20px);transition:opacity .7s,transform .7s;}.reveal.in{opacity:1;transform:translateY(0);}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span>
        <a href="framework.php">Framework</a><span class="sep">/</span>
        <span style="color:#fff;">Unreported — Grey Channels</span>
      </div>
      <div class="page-hero-grid">
        <div>
          <div class="cat-badge">Category 06 of 07 — I-CADMUS Framework</div>
          <h1><strong>Unreported</strong> — Grey Channels</h1>
          <p class="lede">Product that bypasses traceability — moved off the books, into the menu without a trail.</p>
          <div style="display:flex;gap:12px;flex-wrap:wrap;">
            <a href="substitution.php" class="btn btn-primary">Next: Substitution <span class="arrow">→</span></a>
            <a href="framework.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);">All seven categories</a>
          </div>
        </div>
        <div class="hero-letter-box">U</div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="cat-page-layout">
    <aside class="framework-side">
      <h6>The seven categories</h6>
      <ul>
        <li><a href="illegal.php"><span class="letter">I</span> Illegal</a></li>
        <li><a href="counterfeit.php"><span class="letter">C</span> Counterfeit</a></li>
        <li><a href="adulteration.php"><span class="letter">A</span> Adulteration</a></li>
        <li><a href="dilution.php"><span class="letter">D</span> Dilution</a></li>
        <li><a href="misrepresentation.php"><span class="letter">M</span> Misrepresentation</a></li>
        <li><a href="unreported.php" class="active"><span class="letter">U</span> Unreported</a></li>
        <li><a href="substitution.php"><span class="letter">S</span> Substitution</a></li>
        <li style="margin-top:16px;padding-top:16px;border-top:1px solid var(--line);"><a href="framework.php" style="color:var(--accent);font-weight:600;">View all →</a></li>
      </ul>
    </aside>

    <main class="cat-content">
      <div class="cat-content-head reveal">
        <div class="cat-num">Category 06 · I-CADMUS Framework</div>
        <h2 class="cat-title">Unreported — Grey Channels</h2>
        <p class="cat-tagline">Product that bypasses traceability — moved off the books, into the menu without a trail.</p>
      </div>

      <div class="cat-body reveal">
        <div>
          <p>Unreported product moves through informal supply chains that bypass standard traceability. This isn't necessarily illegal at the point of catch — but at some point the documentation breaks, the species is recombined with traceable product, and the original chain of custody is lost. The practical result: nobody can answer where this fish came from.</p>
          <p>Grey channels are distinct from IUU fishing, though the two frequently overlap. <strong>A recreational fisherman selling direct to a restaurant, a hospitality buyer sourcing "cash deals" from the wharf, or a processor mixing undocumented bycatch into a certified lot</strong> — all of these generate unreported product that enters commerce without a paper trail. The volume across these channels is structurally invisible, which is exactly what makes it attractive to fraudulent operators.</p>

          <div class="why-box">
            <h4>Why it persists</h4>
            <p>Small-volume informal trade fills genuine gaps in regulated supply, and enforcement against grey channels is resource-intensive relative to the per-incident value. The hospitality sector in particular has normalised cash-in-hand seafood procurement as a cost-reduction strategy — creating demand that grey channels supply without question.</p>
          </div>
        </div>
        <div>
          <div class="cat-info-card">
            <h4>Red flags</h4>
            <ul>
              <li>Suppliers unable to produce upstream documentation on request</li>
              <li>Cash transactions as the norm in restaurant or hospitality seafood supply</li>
              <li>"Direct from the boat" claims with no vessel identification, licence, or landing receipt</li>
              <li>Prices that seem disconnected from published wholesale market rates</li>
              <li>Lot numbers on product that don't match supplier records or certifier databases</li>
            </ul>
          </div>
          <div class="cat-info-card counter" style="margin-top:16px;">
            <h4>Counter-measures</h4>
            <ul>
              <li>End-to-end electronic catch documentation from vessel to processor to buyer</li>
              <li>Tax-and-traceability integration — seafood purchases require documented supply</li>
              <li>Supply-chain audit requirements for foodservice operators above a revenue threshold</li>
              <li>Whistleblower protections for staff who report undocumented supply arrangements</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="sector-section reveal">
        <h3>Who needs to act — and how</h3>
        <p class="sub">Grey channels persist because demand for cheap, undocumented product exists at every level of the supply chain.</p>
        <div class="sector-grid">
          <div class="sector-card">
            <div class="sector-label">Consumers</div>
            <h5>What you can do</h5>
            <ul>
              <li>Ask restaurants and fishmongers to name their supplier and provide documentation</li>
              <li>Be wary of "fresh off the boat today" claims that come with no supporting documentation</li>
              <li>Report suspected grey-channel supply to fisheries management authorities</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Retail & Foodservice</div>
            <h5>What you can do</h5>
            <ul>
              <li>Require documented supply for all seafood — no cash purchases without a commercial invoice</li>
              <li>Implement supplier approval processes that require traceability documentation upfront</li>
              <li>Train procurement staff to recognise and refuse undocumented supply offers</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Processors & Distributors</div>
            <h5>What you can do</h5>
            <ul>
              <li>Implement intake controls that reject product without complete upstream documentation</li>
              <li>Separate storage and processing for certified and uncertified lots to prevent commingling</li>
              <li>Conduct periodic reconciliation of intake volume against documented catch records</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Regulators</div>
            <h5>What you can do</h5>
            <ul>
              <li>Mandate electronic catch documentation for all commercial landings regardless of vessel size</li>
              <li>Link seafood GST/tax claims to documented supply chains — undocumented purchases ineligible</li>
              <li>Fund targeted grey-channel enforcement in high-risk hospitality precincts</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="related-section reveal">
        <h3>Related categories</h3>
        <div class="related-grid">
          <a href="illegal.php" class="related-card">
            <div class="r-letter">I</div>
            <div class="r-num">Category 01</div>
            <h5>Illegal — IUU Laundering</h5>
            <p>Grey channels are frequently the destination for IUU product — both involve undocumented supply paths.</p>
          </a>
          <a href="misrepresentation.php" class="related-card">
            <div class="r-letter">M</div>
            <div class="r-num">Category 05</div>
            <h5>Misrepresentation — False Origin</h5>
            <p>Product from grey channels typically carries false or absent origin claims when it enters labelled commerce.</p>
          </a>
          <a href="substitution.php" class="related-card">
            <div class="r-letter">S</div>
            <div class="r-num">Category 07</div>
            <h5>Substitution — Species Swap</h5>
            <p>Substitution in foodservice is facilitated by grey-channel supply where the species identity is already unclear.</p>
          </a>
        </div>
      </div>

      <div class="cat-nav reveal">
        <a href="misrepresentation.php" class="cat-nav-card">
          <div class="cat-nav-label">← Previous</div>
          <div class="cat-nav-title">M — Misrepresentation · False Origin</div>
        </a>
        <a href="substitution.php" class="cat-nav-card next">
          <div class="cat-nav-label">Next →</div>
          <div class="cat-nav-title">S — Substitution · Species Swap</div>
        </a>
      </div>
    </main>
  </div>
</div>

<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to <strong>apply the framework</strong>?</h2>
        <p>Earn the I-CADMUS certification, download the audit checklists, or book a briefing for your team.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.php" class="btn btn-primary">Get certified <span class="arrow">→</span></a>
        <a href="resources.php" class="btn btn-outline">Browse resources</a>
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
