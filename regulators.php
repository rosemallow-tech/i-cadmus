<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>For Regulators | I-CADMUS — Seafood Fraud Taxonomy for Policy & Enforcement</title>
<meta name="description" content="I-CADMUS for regulators — a workable seven-category taxonomy aligned with AS 5300 and Codex standards for policy, enforcement, and interagency coordination." />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">
<style>
  :root{--brand:#003a5d;--brand-dark:#002940;--brand-light:#0a4f7a;--accent:#c8102e;--accent-dark:#9e0c24;--teal:#00838f;--gold:#b8870b;--ink:#1c2127;--ink-2:#3d434d;--ink-3:#5c6470;--line:#e5e8ec;--line-2:#d5dae0;--bg:#ffffff;--bg-soft:#f6f8fa;--bg-2:#eef2f6;--sans:'Source Sans 3',-apple-system,'Segoe UI',sans-serif;--serif:'Source Serif 4',Georgia,serif;--shadow-sm:0 1px 2px rgba(0,25,50,.06),0 1px 3px rgba(0,25,50,.04);--shadow-md:0 4px 12px rgba(0,25,50,.08),0 2px 4px rgba(0,25,50,.04);--shadow-lg:0 12px 32px rgba(0,25,50,.10),0 4px 12px rgba(0,25,50,.06);}
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
  .btn-white{background:#fff;color:var(--brand);border-color:#fff;}.btn-white:hover{background:var(--bg-soft);}
  .btn .arrow{font-size:12px;}
  .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.7);margin-bottom:24px;}
  .breadcrumb a{color:rgba(255,255,255,.85);}.breadcrumb a:hover{color:#fff;text-decoration:underline;}.breadcrumb .sep{color:rgba(255,255,255,.4);}
  .page-hero{background:linear-gradient(135deg,#001525 0%,var(--brand-dark) 45%,var(--brand) 100%);color:#fff;position:relative;overflow:hidden;padding:88px 0 110px;}
  .page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 80% 20%,rgba(10,79,122,.35),transparent 50%),radial-gradient(circle at 15% 80%,rgba(0,41,64,.4),transparent 55%);pointer-events:none;}
  .page-hero::after{content:'';position:absolute;right:-80px;bottom:-80px;width:480px;height:480px;background-image:radial-gradient(circle at center,rgba(255,255,255,.04) 1px,transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:radial-gradient(circle at center,black,transparent 70%);-webkit-mask-image:radial-gradient(circle at center,black,transparent 70%);}
  .page-hero-inner{position:relative;z-index:1;}
  .page-hero-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:72px;align-items:center;}
  .sector-eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.9);background:rgba(10,79,122,.35);border:1px solid rgba(10,79,122,.6);border-radius:100px;padding:6px 16px;margin-bottom:24px;}
  .sector-eyebrow::before{content:'';width:7px;height:7px;background:#5ba3d0;border-radius:50%;box-shadow:0 0 0 3px rgba(10,79,122,.4);}
  .page-hero h1{font-family:var(--serif);font-weight:400;font-size:clamp(36px,5vw,60px);line-height:1.07;letter-spacing:-.015em;margin-bottom:20px;color:#fff;}
  .page-hero h1 strong{font-weight:600;}
  .page-hero .lede{font-size:18px;color:rgba(255,255,255,.88);max-width:56ch;line-height:1.55;margin-bottom:36px;}
  .hero-actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:48px;}
  .hero-actions .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}.hero-actions .btn-outline:hover{background:#fff;color:var(--brand);}
  .hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.12);border-radius:6px;overflow:hidden;}
  .hero-stat{background:rgba(255,255,255,.06);padding:24px 20px;text-align:center;}
  .hero-stat .num{font-family:var(--serif);font-size:36px;font-weight:600;color:#fff;line-height:1;margin-bottom:6px;}
  .hero-stat .lbl{font-size:12px;color:rgba(255,255,255,.7);letter-spacing:.04em;text-transform:uppercase;}
  .hero-panel{background:#fff;border-radius:8px;padding:36px;box-shadow:0 24px 48px -12px rgba(0,0,0,.3);}
  .hero-panel-tag{display:inline-block;background:var(--brand-light);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:18px;}
  .hero-panel h3{font-family:var(--serif);font-size:22px;font-weight:600;color:var(--brand);margin-bottom:12px;line-height:1.25;}
  .hero-panel p{font-size:14px;color:var(--ink-2);margin-bottom:20px;line-height:1.55;}
  .hero-panel-items{list-style:none;margin-bottom:24px;}
  .hero-panel-items li{font-size:14px;color:var(--ink-2);padding:8px 0;border-bottom:1px solid var(--line);display:flex;align-items:center;gap:10px;}
  .hero-panel-items li:last-child{border-bottom:none;}
  .hero-panel-items li::before{content:'✓';color:#10b981;font-weight:700;flex-shrink:0;}
  .sector-nav{background:var(--bg-soft);border-bottom:1px solid var(--line);}
  .sector-nav .container{display:flex;gap:0;overflow-x:auto;}
  .sector-nav a{display:flex;align-items:center;gap:8px;padding:16px 24px;font-size:14px;font-weight:500;color:var(--ink-2);border-bottom:3px solid transparent;white-space:nowrap;transition:color .15s,border-color .15s;}
  .sector-nav a:hover{color:var(--brand);}
  .sector-nav a.active{color:var(--brand);border-bottom-color:var(--brand);font-weight:600;}
  .sector-nav .s-icon{width:26px;height:26px;border-radius:50%;background:var(--line-2);display:grid;place-items:center;font-size:11px;font-weight:700;color:var(--ink-3);}
  .sector-nav a.active .s-icon{background:var(--brand);color:#fff;}
  section{padding:88px 0;}
  .section-eyebrow{color:var(--accent);font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:16px;display:inline-flex;align-items:center;gap:12px;}
  .section-eyebrow::before{content:'';width:32px;height:2px;background:var(--accent);}
  .section-h{font-family:var(--serif);font-size:clamp(32px,4vw,46px);line-height:1.1;font-weight:400;letter-spacing:-.015em;color:var(--brand);margin-bottom:20px;max-width:22ch;}
  .section-h strong{font-weight:600;}
  .section-sub{font-size:18px;color:var(--ink-2);max-width:60ch;line-height:1.55;margin-bottom:56px;}
  .benefits-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .benefit-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:6px;padding:32px 28px;position:relative;overflow:hidden;}
  .benefit-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--brand);}
  .benefit-num{font-family:var(--serif);font-size:48px;font-weight:600;color:var(--line-2);line-height:1;margin-bottom:16px;}
  .benefit-card h4{font-family:var(--serif);font-size:20px;font-weight:600;color:var(--brand);margin-bottom:10px;line-height:1.25;}
  .benefit-card p{font-size:14px;color:var(--ink-2);line-height:1.55;}
  .cats-section{background:var(--bg-soft);}
  .cats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;}
  .cat-quick{background:#fff;border:1px solid var(--line);border-radius:6px;padding:24px;transition:border-color .2s,box-shadow .2s;}
  .cat-quick:hover{border-color:var(--brand-light);box-shadow:var(--shadow-md);}
  .cat-quick a{text-decoration:none;color:inherit;display:block;}
  .cat-q-letter{width:48px;height:48px;background:var(--brand);color:#fff;border-radius:6px;display:grid;place-items:center;font-family:var(--serif);font-size:28px;font-weight:600;margin-bottom:14px;position:relative;}
  .cat-q-letter::after{content:'';position:absolute;bottom:6px;left:8px;right:8px;height:2px;background:var(--accent);}
  .cat-quick .cat-q-num{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:6px;}
  .cat-quick h5{font-family:var(--serif);font-size:16px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.2;}
  .cat-quick p{font-size:13px;color:var(--ink-2);line-height:1.5;margin-bottom:12px;}
  .cat-quick .cat-q-tip{font-size:12px;color:var(--brand);font-weight:600;display:flex;align-items:center;gap:6px;}
  .cat-quick .cat-q-tip::before{content:'';width:16px;height:1px;background:var(--brand);}
  .pathway-section{background:#fff;}
  .pathway-box{background:linear-gradient(135deg,#001525,var(--brand-dark));color:#fff;border-radius:8px;padding:56px;display:grid;grid-template-columns:1.2fr 1fr;gap:56px;align-items:center;position:relative;overflow:hidden;}
  .pathway-box::after{content:'';position:absolute;right:-60px;bottom:-60px;width:300px;height:300px;background:radial-gradient(circle,rgba(10,79,122,.5),transparent 70%);pointer-events:none;}
  .pathway-tag{display:inline-block;background:var(--brand-light);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:20px;}
  .pathway-box h3{font-family:var(--serif);font-size:clamp(26px,3.5vw,38px);font-weight:400;color:#fff;line-height:1.2;margin-bottom:16px;}
  .pathway-box h3 strong{font-weight:600;}
  .pathway-box p{font-size:16px;color:rgba(255,255,255,.85);line-height:1.6;margin-bottom:32px;}
  .pathway-includes{list-style:none;position:relative;z-index:1;}
  .pathway-includes li{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.12);font-size:15px;color:rgba(255,255,255,.9);}
  .pathway-includes li:last-child{border-bottom:none;}
  .pathway-includes li::before{content:'✓';width:22px;height:22px;background:rgba(10,79,122,.4);border:1px solid rgba(91,163,208,.4);border-radius:50%;display:grid;place-items:center;font-size:12px;color:#9dcbea;flex-shrink:0;}
  .price-badge{display:inline-block;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:6px;padding:16px 20px;margin-bottom:24px;}
  .price-badge .price{font-family:var(--serif);font-size:40px;font-weight:600;color:#fff;line-height:1;}
  .price-badge .cycle{font-size:13px;color:rgba(255,255,255,.65);margin-top:4px;}
  .resources-section{background:var(--bg-soft);}
  .resources-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
  .resource-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:28px;transition:border-color .2s,box-shadow .2s;}
  .resource-card:hover{border-color:var(--brand-light);box-shadow:var(--shadow-md);}
  .resource-icon{width:52px;height:52px;background:var(--bg-soft);border-radius:6px;display:grid;place-items:center;font-size:24px;margin-bottom:18px;}
  .resource-tag{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--brand);margin-bottom:8px;display:block;}
  .resource-card h4{font-family:var(--serif);font-size:19px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.25;}
  .resource-card p{font-size:14px;color:var(--ink-2);line-height:1.55;margin-bottom:20px;}
  .resource-meta{display:flex;justify-content:space-between;align-items:center;font-size:13px;color:var(--ink-3);border-top:1px solid var(--line);padding-top:16px;}
  .resource-meta a{color:var(--brand);font-weight:600;}
  .resource-meta a:hover{text-decoration:underline;}
  .cta-band{background:var(--brand);background-image:linear-gradient(135deg,var(--brand) 0%,var(--brand-dark) 100%);color:#fff;padding:80px 0;position:relative;overflow:hidden;}
  .cta-band::before{content:'';position:absolute;top:0;right:0;width:50%;height:100%;background:radial-gradient(circle at 80% 50%,rgba(10,79,122,.4),transparent 70%);}
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
  .footer-col h5{color:#fff;font-size:14px;font-weight:600;margin-bottom:18px;}
  .footer-col ul{list-style:none;}.footer-col li{margin-bottom:10px;}
  .footer-col a{color:rgba(255,255,255,.65);transition:color .15s;}.footer-col a:hover{color:#fff;}
  .footer-bottom{display:grid;grid-template-columns:1fr auto;gap:32px;padding:32px 0;align-items:center;color:rgba(255,255,255,.5);font-size:13px;}
  .footer-bottom-links{display:flex;gap:24px;flex-wrap:wrap;}.footer-bottom-links a:hover{color:#fff;}
  .footer-social{display:flex;gap:8px;margin-top:20px;}
  .footer-social a{width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.12);display:grid;place-items:center;color:rgba(255,255,255,.7);font-size:13px;font-weight:700;transition:background .2s,color .2s;}
  .footer-social a:hover{background:var(--accent);color:#fff;border-color:var(--accent);}
  @media(max-width:1100px){.container{padding:0 24px;}.nav-primary{display:none;}.header .container{gap:16px;justify-content:space-between;}.page-hero{padding:56px 0 72px;}.page-hero-grid{grid-template-columns:1fr;gap:40px;}.hero-panel{display:none;}.hero-stats{grid-template-columns:1fr 1fr;}.benefits-grid{grid-template-columns:1fr 1fr;}.cats-grid{grid-template-columns:1fr 1fr;}.pathway-box{grid-template-columns:1fr;gap:40px;padding:40px;}.resources-grid{grid-template-columns:1fr 1fr;}.cta-band-grid{grid-template-columns:1fr;}.footer-top{grid-template-columns:1fr 1fr;}}
  @media(max-width:640px){section{padding:56px 0;}.benefits-grid{grid-template-columns:1fr;}.cats-grid{grid-template-columns:1fr;}.hero-stats{grid-template-columns:1fr;}.resources-grid{grid-template-columns:1fr;}.footer-top{grid-template-columns:1fr;}.footer-bottom{grid-template-columns:1fr;text-align:center;justify-items:center;}.utility-bar .container{display:none;}}
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
        <a href="index.php#industries">Sectors</a><span class="sep">/</span>
        <span style="color:#fff;">Regulators</span>
      </div>
      <div class="page-hero-grid">
        <div>
          <div class="sector-eyebrow">Sector 04 — Regulators</div>
          <h1>A taxonomy built for <strong>policy and enforcement.</strong></h1>
          <p class="lede">I-CADMUS gives regulators a workable seven-category framework aligned with AS 5300 and international Codex standards — structured for interagency coordination, legislative drafting, and field enforcement briefings.</p>
          <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary">Request a briefing <span class="arrow">→</span></a>
            <a href="framework.php" class="btn btn-outline">View the taxonomy</a>
          </div>
          <div class="hero-stats">
            <div class="hero-stat"><div class="num">7</div><div class="lbl">Defined fraud categories</div></div>
            <div class="hero-stat"><div class="num">AS 5300</div><div class="lbl">Codex-aligned standard</div></div>
            <div class="hero-stat"><div class="num">Bespoke</div><div class="lbl">Engagement by arrangement</div></div>
          </div>
        </div>
        <div class="hero-panel">
          <div class="hero-panel-tag">Regulator Pathway</div>
          <h3>Policy, enforcement, and interagency coordination</h3>
          <p>Tailored engagement for government agencies, food safety authorities, and fisheries enforcement bodies.</p>
          <ul class="hero-panel-items">
            <li>Five-pillar policy playbook</li>
            <li>Codex alignment notes and references</li>
            <li>Regulator-specific enforcement briefings</li>
            <li>Interagency coordination frameworks</li>
            <li>Legislative drafting support material</li>
            <li>Direct access to the author team</li>
          </ul>
          <a href="contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Request a briefing <span class="arrow">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<nav class="sector-nav">
  <div class="container">
    <a href="consumers.php"><span class="s-icon">01</span> Consumers</a>
    <a href="retail-foodservice.php"><span class="s-icon">02</span> Retail & Foodservice</a>
    <a href="processors.php"><span class="s-icon">03</span> Processors & Distributors</a>
    <a href="regulators.php" class="active"><span class="s-icon">04</span> Regulators</a>
  </div>
</nav>

<section style="background:#fff;">
  <div class="container">
    <div class="section-eyebrow">Why it matters to you</div>
    <h2 class="section-h">A taxonomy that <strong>enforcement can actually use.</strong></h2>
    <p class="section-sub">Seafood fraud is systemically under-prosecuted — not because it is hard to detect, but because the legal and institutional vocabulary for classifying it is inconsistent. I-CADMUS gives regulators a shared taxonomy: seven precisely defined categories that align with Codex standards and map directly onto existing legislative frameworks.</p>
    <div class="benefits-grid reveal">
      <div class="benefit-card">
        <div class="benefit-num">01</div>
        <h4>Classify incidents with precision</h4>
        <p>Each of the seven I-CADMUS categories is defined with the specificity needed for formal enforcement action. Move from "suspected seafood fraud" to a named, documented category that supports prosecution, penalty assessment, and interagency reporting.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">02</div>
        <h4>Align with Codex and AS 5300</h4>
        <p>I-CADMUS terminology and category definitions are cross-referenced to Codex Alimentarius standards and AS 5300. This alignment enables regulators to use the same language as trading partners, importers, and international enforcement bodies.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">03</div>
        <h4>Brief enforcement teams efficiently</h4>
        <p>The seven-category structure is designed to be taught in a single session. Field officers, border biosecurity staff, and food safety inspectors can apply the taxonomy from day one — reducing inconsistency in how incidents are categorised and recorded.</p>
      </div>
    </div>
  </div>
</section>

<section class="cats-section">
  <div class="container">
    <div class="section-eyebrow">Your enforcement quick guide</div>
    <h2 class="section-h">The <strong>seven categories</strong> — regulatory actions</h2>
    <p class="section-sub">Each I-CADMUS category maps to specific regulatory levers — from import controls and border checks to prosecution thresholds and interagency referrals.</p>
    <div class="cats-grid reveal">
      <div class="cat-quick"><a href="illegal.php">
        <div class="cat-q-letter">I</div>
        <div class="cat-q-num">Illegal · 01</div>
        <h5>IUU Laundering</h5>
        <p>Mandate catch documentation at point of import. Coordinate with fisheries agencies and flag-state authorities to verify vessel compliance records.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="counterfeit.php">
        <div class="cat-q-letter">C</div>
        <div class="cat-q-num">Counterfeit · 02</div>
        <h5>Fake Labels</h5>
        <p>Enforce certification body accreditation standards. Establish legal thresholds for forged origin documentation as a distinct offence category.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="adulteration.php">
        <div class="cat-q-letter">A</div>
        <div class="cat-q-num">Adulteration · 03</div>
        <h5>Chemicals & Water</h5>
        <p>Set and enforce maximum permitted levels for phosphates and retained water. Fund periodic surveillance sampling of imported and domestically processed seafood.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="dilution.php">
        <div class="cat-q-letter">D</div>
        <div class="cat-q-num">Dilution · 04</div>
        <h5>Glazing & Mixing</h5>
        <p>Require glaze percentage declaration on all retail and import documentation. Implement species-commingling disclosure requirements for processed and frozen product.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="misrepresentation.php">
        <div class="cat-q-letter">M</div>
        <div class="cat-q-num">Misrepresentation · 05</div>
        <h5>False Origin</h5>
        <p>Require mandatory country-of-catch labelling distinct from country-of-processing. Implement harvest-method verification at import for priority species.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="unreported.php">
        <div class="cat-q-letter">U</div>
        <div class="cat-q-num">Unreported · 06</div>
        <h5>Grey Channels</h5>
        <p>Close off-the-books supply pathways through mandatory electronic catch reporting. Require reconciliation of import volumes against declared catch records.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="substitution.php">
        <div class="cat-q-letter">S</div>
        <div class="cat-q-num">Substitution · 07</div>
        <h5>Species Swap</h5>
        <p>Mandate DNA testing as an enforcement tool for high-risk species at border inspection. Require species identity records from processor to retail for premium categories.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick" style="background:var(--brand-dark);border-color:var(--brand-dark);display:flex;flex-direction:column;justify-content:center;">
        <div style="font-family:var(--serif);font-size:32px;font-weight:600;color:#9dcbea;margin-bottom:12px;">All 7</div>
        <p style="font-size:14px;color:rgba(255,255,255,.85);margin-bottom:16px;">Download the full policy playbook covering all seven categories with Codex alignment notes and enforcement action guides.</p>
        <a href="contact.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);font-size:13px;padding:9px 16px;">Request briefing <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<section class="pathway-section">
  <div class="container">
    <div class="section-eyebrow">Engagement pathway</div>
    <h2 class="section-h">Tailored engagement — <strong>by arrangement.</strong></h2>
    <p class="section-sub">Regulatory engagements are structured to the specific mandate of each agency — from single-agency briefings to multi-department policy workshops and legislative support.</p>
    <div class="pathway-box reveal">
      <div>
        <div class="pathway-tag">Pathway 04 — Regulators</div>
        <div class="price-badge"><div class="price">Bespoke</div><div class="cycle">By arrangement · agency-wide · flexible scope</div></div>
        <h3>Five-pillar policy playbook, Codex alignment, and enforcement briefings <strong>tailored to your mandate.</strong></h3>
        <p>All regulator engagements are designed around your agency's existing legislative framework. Deliverables are adapted to your jurisdiction, your priority species, and your enforcement model.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="contact.php" class="btn btn-white">Request a briefing <span class="arrow">→</span></a>
          <a href="framework.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);">View the taxonomy</a>
        </div>
      </div>
      <div>
        <ul class="pathway-includes">
          <li>Five-pillar policy playbook</li>
          <li>Codex alignment notes and cross-references</li>
          <li>Regulator-specific enforcement briefings</li>
          <li>Interagency coordination frameworks</li>
          <li>Legislative drafting support material</li>
          <li>Direct access to the I-CADMUS author team</li>
          <li>Jurisdiction-specific risk assessment support</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="resources-section">
  <div class="container">
    <div class="section-eyebrow">Resources for your agency</div>
    <h2 class="section-h">Tools built for <strong>policy and enforcement.</strong></h2>
    <p class="section-sub">From enforcement briefing packs to Codex alignment guides — every resource is designed for use in regulatory and legislative contexts.</p>
    <div class="resources-grid reveal">
      <div class="resource-card">
        <div class="resource-icon">⚖️</div>
        <span class="resource-tag">Regulator · Briefing</span>
        <h4>Enforcement Briefing Pack</h4>
        <p>A structured seven-category briefing document for field officers and border inspection staff. Maps each I-CADMUS category to observable indicators, documentary evidence, and applicable legislative provisions.</p>
        <div class="resource-meta"><small>24 pages · PDF</small><a href="contact.php">Request access</a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">📋</div>
        <span class="resource-tag">Regulator · Policy</span>
        <h4>Five-Pillar Policy Playbook</h4>
        <p>A framework for building or strengthening national seafood fraud prevention policy. Covers legislative foundations, enforcement capacity, industry standards, consumer disclosure, and interagency coordination.</p>
        <div class="resource-meta"><small>36 pages · PDF</small><a href="contact.php">Request access</a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">🌐</div>
        <span class="resource-tag">Reference · PDF</span>
        <h4>Codex Alignment Guide</h4>
        <p>Cross-reference document mapping all seven I-CADMUS categories to relevant Codex Alimentarius standards and AS 5300 provisions. Essential for jurisdictions seeking international harmonisation.</p>
        <div class="resource-meta"><small>20 pages · 1.4 MB</small><a href="contact.php">Request access</a></div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to <strong>request a briefing</strong>?</h2>
        <p>Talk to the I-CADMUS author team about tailoring the taxonomy and policy playbook to your agency's mandate, jurisdiction, and priority enforcement areas.</p>
      </div>
      <div class="cta-band-actions">
        <a href="contact.php" class="btn btn-primary">Request a briefing <span class="arrow">→</span></a>
        <a href="framework.php" class="btn btn-outline">View the taxonomy</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in'); obs.unobserve(e.target); } });
}, {threshold:0.1});
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
</script>
</body>
</html>
