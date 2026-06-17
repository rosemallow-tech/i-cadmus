<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>For Retail & Foodservice | I-CADMUS — Compliance, Audits & Supplier Verification</title>
<meta name="description" content="I-CADMUS for retail and foodservice — audit checklists, supplier verification protocols, staff training modules, and the Business certification tier." />
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
  .btn-secondary{background:var(--brand);color:#fff;border-color:var(--brand);}.btn-secondary:hover{background:var(--brand-dark);}
  .btn-outline{background:transparent;color:var(--brand);border-color:var(--brand);}.btn-outline:hover{background:var(--brand);color:#fff;}
  .btn-white{background:#fff;color:var(--brand);border-color:#fff;}.btn-white:hover{background:var(--bg-soft);}
  .btn .arrow{font-size:12px;}
  .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.7);margin-bottom:24px;}
  .breadcrumb a{color:rgba(255,255,255,.85);}.breadcrumb a:hover{color:#fff;text-decoration:underline;}.breadcrumb .sep{color:rgba(255,255,255,.4);}
  .page-hero{background:linear-gradient(135deg,var(--brand-dark) 0%,var(--brand) 55%,var(--brand-light) 100%);color:#fff;position:relative;overflow:hidden;padding:88px 0 110px;}
  .page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 80% 20%,rgba(200,16,46,.2),transparent 50%),radial-gradient(circle at 15% 80%,rgba(0,131,143,.15),transparent 55%);pointer-events:none;}
  .page-hero::after{content:'';position:absolute;right:-80px;bottom:-80px;width:480px;height:480px;background-image:radial-gradient(circle at center,rgba(255,255,255,.04) 1px,transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:radial-gradient(circle at center,black,transparent 70%);-webkit-mask-image:radial-gradient(circle at center,black,transparent 70%);}
  .page-hero-inner{position:relative;z-index:1;}
  .page-hero-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:72px;align-items:center;}
  .sector-eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.9);background:rgba(200,16,46,.2);border:1px solid rgba(200,16,46,.4);border-radius:100px;padding:6px 16px;margin-bottom:24px;}
  .sector-eyebrow::before{content:'';width:7px;height:7px;background:#f87171;border-radius:50%;box-shadow:0 0 0 3px rgba(248,113,113,.25);}
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
  .hero-panel-tag{display:inline-block;background:var(--accent);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:18px;}
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
  .sector-nav a.active{color:var(--brand);border-bottom-color:var(--accent);font-weight:600;}
  .sector-nav .s-icon{width:26px;height:26px;border-radius:50%;background:var(--line-2);display:grid;place-items:center;font-size:11px;font-weight:700;color:var(--ink-3);}
  .sector-nav a.active .s-icon{background:var(--accent);color:#fff;}
  section{padding:88px 0;}
  .section-eyebrow{color:var(--accent);font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:16px;display:inline-flex;align-items:center;gap:12px;}
  .section-eyebrow::before{content:'';width:32px;height:2px;background:var(--accent);}
  .section-h{font-family:var(--serif);font-size:clamp(32px,4vw,46px);line-height:1.1;font-weight:400;letter-spacing:-.015em;color:var(--brand);margin-bottom:20px;max-width:22ch;}
  .section-h strong{font-weight:600;}
  .section-sub{font-size:18px;color:var(--ink-2);max-width:60ch;line-height:1.55;margin-bottom:56px;}
  .benefits-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .benefit-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:6px;padding:32px 28px;position:relative;overflow:hidden;}
  .benefit-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--accent);}
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
  .cat-quick .cat-q-tip{font-size:12px;color:var(--accent);font-weight:600;display:flex;align-items:center;gap:6px;}
  .cat-quick .cat-q-tip::before{content:'';width:16px;height:1px;background:var(--accent);}
  .pathway-section{background:#fff;}
  .pathway-box{background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;border-radius:8px;padding:56px;display:grid;grid-template-columns:1.2fr 1fr;gap:56px;align-items:center;position:relative;overflow:hidden;}
  .pathway-box::after{content:'';position:absolute;right:-60px;bottom:-60px;width:300px;height:300px;background:radial-gradient(circle,rgba(200,16,46,.25),transparent 70%);pointer-events:none;}
  .pathway-tag{display:inline-block;background:var(--accent);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:20px;}
  .pathway-box h3{font-family:var(--serif);font-size:clamp(26px,3.5vw,38px);font-weight:400;color:#fff;line-height:1.2;margin-bottom:16px;}
  .pathway-box h3 strong{font-weight:600;}
  .pathway-box p{font-size:16px;color:rgba(255,255,255,.85);line-height:1.6;margin-bottom:32px;}
  .pathway-includes{list-style:none;position:relative;z-index:1;}
  .pathway-includes li{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.12);font-size:15px;color:rgba(255,255,255,.9);}
  .pathway-includes li:last-child{border-bottom:none;}
  .pathway-includes li::before{content:'✓';width:22px;height:22px;background:rgba(74,222,128,.2);border:1px solid rgba(74,222,128,.4);border-radius:50%;display:grid;place-items:center;font-size:12px;color:#4ade80;flex-shrink:0;}
  .price-badge{display:inline-block;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:6px;padding:16px 20px;margin-bottom:24px;}
  .price-badge .price{font-family:var(--serif);font-size:40px;font-weight:600;color:#fff;line-height:1;}
  .price-badge .price small{font-size:18px;font-family:var(--sans);font-weight:400;}
  .price-badge .cycle{font-size:13px;color:rgba(255,255,255,.65);margin-top:4px;}
  .resources-section{background:var(--bg-soft);}
  .resources-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
  .resource-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:28px;transition:border-color .2s,box-shadow .2s;}
  .resource-card:hover{border-color:var(--brand-light);box-shadow:var(--shadow-md);}
  .resource-icon{width:52px;height:52px;background:var(--bg-soft);border-radius:6px;display:grid;place-items:center;font-size:24px;margin-bottom:18px;}
  .resource-tag{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:8px;display:block;}
  .resource-card h4{font-family:var(--serif);font-size:19px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.25;}
  .resource-card p{font-size:14px;color:var(--ink-2);line-height:1.55;margin-bottom:20px;}
  .resource-meta{display:flex;justify-content:space-between;align-items:center;font-size:13px;color:var(--ink-3);border-top:1px solid var(--line);padding-top:16px;}
  .resource-meta a{color:var(--brand);font-weight:600;}
  .resource-meta a:hover{text-decoration:underline;}
  .cta-band{background:var(--brand);background-image:linear-gradient(135deg,var(--brand) 0%,var(--brand-dark) 100%);color:#fff;padding:80px 0;position:relative;overflow:hidden;}
  .cta-band::before{content:'';position:absolute;top:0;right:0;width:50%;height:100%;background:radial-gradient(circle at 80% 50%,rgba(200,16,46,.25),transparent 70%);}
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
        <span style="color:#fff;">Retail & Foodservice</span>
      </div>
      <div class="page-hero-grid">
        <div>
          <div class="sector-eyebrow">Sector 02 — Retail & Foodservice</div>
          <h1>Compliance starts with <strong>what you buy.</strong></h1>
          <p class="lede">Your purchasing decisions shape the integrity of the seafood supply chain. I-CADMUS gives retail and foodservice operators the audit tools, supplier verification protocols, and staff training to buy right — and prove it.</p>
          <div class="hero-actions">
            <a href="certification.php" class="btn btn-primary">Get business certified <span class="arrow">→</span></a>
            <a href="resources.php" class="btn btn-outline">Download audit checklist</a>
          </div>
          <div class="hero-stats">
            <div class="hero-stat"><div class="num">$249</div><div class="lbl">Per seat · per year</div></div>
            <div class="hero-stat"><div class="num">5</div><div class="lbl">Staff seats included</div></div>
            <div class="hero-stat"><div class="num">7</div><div class="lbl">Fraud types your team learns to spot</div></div>
          </div>
        </div>
        <div class="hero-panel">
          <div class="hero-panel-tag">Business Pathway</div>
          <h3>Audit-ready supplier verification for retail & foodservice</h3>
          <p>Everything your compliance team and front-of-house staff need to verify, document, and demonstrate seafood integrity.</p>
          <ul class="hero-panel-items">
            <li>Audit checklist generator — customised per category</li>
            <li>Staff training portal — up to 5 seats included</li>
            <li>Supplier verification toolkit</li>
            <li>Partner-network listing</li>
            <li>Quarterly fraud intelligence briefings</li>
            <li>Email compliance support</li>
          </ul>
          <a href="certification.php" class="btn btn-primary" style="width:100%;justify-content:center;">Enrol your business <span class="arrow">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<nav class="sector-nav">
  <div class="container">
    <a href="consumers.php"><span class="s-icon">01</span> Consumers</a>
    <a href="retail-foodservice.php" class="active"><span class="s-icon">02</span> Retail & Foodservice</a>
    <a href="processors.php"><span class="s-icon">03</span> Processors & Distributors</a>
    <a href="regulators.php"><span class="s-icon">04</span> Regulators</a>
  </div>
</nav>

<section style="background:#fff;">
  <div class="container">
    <div class="section-eyebrow">Why it matters to you</div>
    <h2 class="section-h">You are where <strong>supply meets consumer trust.</strong></h2>
    <p class="section-sub">Retail and foodservice operators sit at the most visible point in the supply chain. Fraud that passes through your hands reaches the consumer directly — and liability for mislabelling follows the label, not just the producer.</p>
    <div class="benefits-grid reveal">
      <div class="benefit-card">
        <div class="benefit-num">01</div>
        <h4>Protect your brand from supplier fraud</h4>
        <p>I-CADMUS gives your procurement team a structured verification protocol for every supplier and every category. Catch fraud before it reaches your shelves or tables — not after a media report or enforcement visit.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">02</div>
        <h4>Train staff to spot it on the floor</h4>
        <p>The Business tier includes a staff training portal for up to five seats. Your team learns to identify all seven fraud types — so the right questions get asked at intake, at prep, and at the point of service.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">03</div>
        <h4>Demonstrate compliance with confidence</h4>
        <p>The I-CADMUS audit checklist generator produces documented, dated supplier verification records. When regulators or auditors arrive, your compliance is on paper — not just in practice.</p>
      </div>
    </div>
  </div>
</section>

<section class="cats-section">
  <div class="container">
    <div class="section-eyebrow">Your procurement guide</div>
    <h2 class="section-h">The <strong>seven categories</strong> — your supplier verification checklist</h2>
    <p class="section-sub">Every I-CADMUS category has specific procurement-level controls. Apply these at intake before product reaches your operation.</p>
    <div class="cats-grid reveal">
      <div class="cat-quick"><a href="illegal.php">
        <div class="cat-q-letter">I</div>
        <div class="cat-q-num">Illegal · 01</div>
        <h5>IUU Laundering</h5>
        <p>Require vessel-level catch documentation. Include catch-documentation clauses in all procurement contracts.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="counterfeit.php">
        <div class="cat-q-letter">C</div>
        <div class="cat-q-num">Counterfeit · 02</div>
        <h5>Fake Labels</h5>
        <p>Verify certification currency with the issuing body before listing. Require chain-of-custody certificates, not just product certificates.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="adulteration.php">
        <div class="cat-q-letter">A</div>
        <div class="cat-q-num">Adulteration · 03</div>
        <h5>Chemicals & Water</h5>
        <p>Require supplier disclosure of all additives and retention percentages. Request additive testing certificates for high-volume lines.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="dilution.php">
        <div class="cat-q-letter">D</div>
        <div class="cat-q-num">Dilution · 04</div>
        <h5>Glazing & Mixing</h5>
        <p>Require glaze percentage declaration in procurement specifications. Commission periodic DNA testing on single-species premium lines.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="misrepresentation.php">
        <div class="cat-q-letter">M</div>
        <div class="cat-q-num">Misrepresentation · 05</div>
        <h5>False Origin</h5>
        <p>Require country-of-catch documentation, not just country-of-processing. Audit menu descriptions — "local" and "wild" claims need evidentiary backing.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="unreported.php">
        <div class="cat-q-letter">U</div>
        <div class="cat-q-num">Unreported · 06</div>
        <h5>Grey Channels</h5>
        <p>Require documented supply for all seafood — no cash purchases without a commercial invoice. Implement supplier approval processes upfront.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick"><a href="substitution.php">
        <div class="cat-q-letter">S</div>
        <div class="cat-q-num">Substitution · 07</div>
        <h5>Species Swap</h5>
        <p>List species by common and scientific name — no generic terms on menus or labels. Require scientific species declaration from suppliers at invoice level.</p>
        <div class="cat-q-tip">Full guidance</div>
      </a></div>
      <div class="cat-quick" style="background:var(--brand);border-color:var(--brand);display:flex;flex-direction:column;justify-content:center;">
        <div style="font-family:var(--serif);font-size:32px;font-weight:600;color:#fff;margin-bottom:12px;">All 7</div>
        <p style="font-size:14px;color:rgba(255,255,255,.85);margin-bottom:16px;">Download the full audit checklist generator for all seven categories, customised to your operation type.</p>
        <a href="resources.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);font-size:13px;padding:9px 16px;">Get checklist <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<section class="pathway-section">
  <div class="container">
    <div class="section-eyebrow">Certification pathway</div>
    <h2 class="section-h">The Business tier — <strong>built for operations.</strong></h2>
    <p class="section-sub">Everything your team needs to verify, document, and demonstrate seafood integrity across your entire operation.</p>
    <div class="pathway-box reveal">
      <div>
        <div class="pathway-tag">Pathway 02 — Retail & Foodservice</div>
        <div class="price-badge"><div class="price">$249<small>/seat</small></div><div class="cycle">Per year · cancel anytime · 5 seats included</div></div>
        <h3>Audit checklists, supplier verification, and staff training <strong>in one platform.</strong></h3>
        <p>The Business tier integrates with your existing supply-chain reviews. Your procurement team and front-of-house staff learn together — and your compliance documentation is produced automatically.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="certification.php" class="btn btn-white">Enrol your business <span class="arrow">→</span></a>
          <a href="contact.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);">Talk to us first</a>
        </div>
      </div>
      <div>
        <ul class="pathway-includes">
          <li>Everything in the Consumer tier</li>
          <li>Audit checklist generator — customised per category and risk profile</li>
          <li>Staff training portal — 5 seats included</li>
          <li>Supplier verification toolkit</li>
          <li>Partner-network listing</li>
          <li>Quarterly fraud intelligence briefings</li>
          <li>Email compliance support</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="resources-section">
  <div class="container">
    <div class="section-eyebrow">Resources for your operation</div>
    <h2 class="section-h">Practical tools built for <strong>procurement and compliance.</strong></h2>
    <p class="section-sub">From audit checklists to staff training — every resource is designed for real operational use, not just reference.</p>
    <div class="resources-grid reveal">
      <div class="resource-card">
        <div class="resource-icon">✓</div>
        <span class="resource-tag">Industry · Generator</span>
        <h4>Audit Checklist Generator</h4>
        <p>Generate a customised supplier-audit checklist for your product category and risk profile. Outputs as Word and PDF for compliance teams and inspectors.</p>
        <div class="resource-meta"><small>Web tool · free</small><a href="resources.php">Open tool <span>→</span></a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">📋</div>
        <span class="resource-tag">Business · PDF</span>
        <h4>Supplier Verification Protocol</h4>
        <p>A step-by-step protocol for onboarding new seafood suppliers — covering all seven I-CADMUS categories with documentation requirements at each stage.</p>
        <div class="resource-meta"><small>8 pages · 0.9 MB</small><a href="resources.php">Download <span>↓</span></a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">A</div>
        <span class="resource-tag">Reference · PDF</span>
        <h4>Glossary of Terms</h4>
        <p>A printable A-Z reference of every term used in the I-CADMUS framework. Essential for procurement staff and compliance documentation.</p>
        <div class="resource-meta"><small>16 pages · 1.2 MB</small><a href="resources.php">Download <span>↓</span></a></div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to get your <strong>business certified</strong>?</h2>
        <p>Enrol your team in the Business tier — audit checklist, supplier verification toolkit, and staff training included from day one.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.php" class="btn btn-primary">Enrol your business <span class="arrow">→</span></a>
        <a href="contact.php" class="btn btn-outline">Request a briefing</a>
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
