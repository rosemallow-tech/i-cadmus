<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>For Consumers | I-CADMUS — Spot Seafood Fraud at the Counter</title>
<meta name="description" content="The I-CADMUS consumer hub — tools, scorecards, and the language to spot and refuse seafood fraud at the supermarket and restaurant. Free to start." />
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

  /* SECTOR HERO — teal accent for consumers */
  .page-hero{background:linear-gradient(135deg,var(--brand-dark) 0%,var(--brand) 55%,var(--brand-light) 100%);color:#fff;position:relative;overflow:hidden;padding:88px 0 110px;}
  .page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 80% 20%,rgba(0,131,143,.3),transparent 50%),radial-gradient(circle at 15% 80%,rgba(200,16,46,.12),transparent 55%);pointer-events:none;}
  .page-hero::after{content:'';position:absolute;right:-80px;bottom:-80px;width:480px;height:480px;background-image:radial-gradient(circle at center,rgba(255,255,255,.04) 1px,transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:radial-gradient(circle at center,black,transparent 70%);-webkit-mask-image:radial-gradient(circle at center,black,transparent 70%);}
  .page-hero-inner{position:relative;z-index:1;}
  .page-hero-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:72px;align-items:center;}
  .sector-eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.9);background:rgba(0,131,143,.25);border:1px solid rgba(0,131,143,.5);border-radius:100px;padding:6px 16px;margin-bottom:24px;}
  .sector-eyebrow::before{content:'';width:7px;height:7px;background:#4ade80;border-radius:50%;box-shadow:0 0 0 3px rgba(74,222,128,.25);}
  .page-hero h1{font-family:var(--serif);font-weight:400;font-size:clamp(38px,5vw,62px);line-height:1.07;letter-spacing:-.015em;margin-bottom:20px;color:#fff;}
  .page-hero h1 strong{font-weight:600;}
  .page-hero .lede{font-size:18px;color:rgba(255,255,255,.88);max-width:56ch;line-height:1.55;margin-bottom:36px;}
  .hero-actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:48px;}
  .hero-actions .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}.hero-actions .btn-outline:hover{background:#fff;color:var(--brand);}
  .hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.12);border-radius:6px;overflow:hidden;}
  .hero-stat{background:rgba(255,255,255,.06);padding:24px 20px;text-align:center;}
  .hero-stat .num{font-family:var(--serif);font-size:36px;font-weight:600;color:#fff;line-height:1;margin-bottom:6px;}
  .hero-stat .lbl{font-size:12px;color:rgba(255,255,255,.7);letter-spacing:.04em;text-transform:uppercase;}
  .hero-panel{background:#fff;border-radius:8px;padding:36px;box-shadow:0 24px 48px -12px rgba(0,0,0,.3);position:relative;}
  .hero-panel-tag{display:inline-block;background:var(--teal);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:18px;}
  .hero-panel h3{font-family:var(--serif);font-size:22px;font-weight:600;color:var(--brand);margin-bottom:12px;line-height:1.25;}
  .hero-panel p{font-size:14px;color:var(--ink-2);margin-bottom:20px;line-height:1.55;}
  .hero-panel-items{list-style:none;margin-bottom:24px;}
  .hero-panel-items li{font-size:14px;color:var(--ink-2);padding:8px 0;border-bottom:1px solid var(--line);display:flex;align-items:center;gap:10px;}
  .hero-panel-items li:last-child{border-bottom:none;}
  .hero-panel-items li::before{content:'✓';color:#10b981;font-weight:700;flex-shrink:0;}

  /* SECTOR SUBNAV */
  .sector-nav{background:var(--bg-soft);border-bottom:1px solid var(--line);}
  .sector-nav .container{display:flex;gap:0;overflow-x:auto;}
  .sector-nav a{display:flex;align-items:center;gap:8px;padding:16px 24px;font-size:14px;font-weight:500;color:var(--ink-2);border-bottom:3px solid transparent;white-space:nowrap;transition:color .15s,border-color .15s;}
  .sector-nav a:hover{color:var(--brand);}
  .sector-nav a.active{color:var(--brand);border-bottom-color:var(--teal);font-weight:600;}
  .sector-nav .s-icon{width:26px;height:26px;border-radius:50%;background:var(--line-2);display:grid;place-items:center;font-size:11px;font-weight:700;color:var(--ink-3);}
  .sector-nav a.active .s-icon{background:var(--teal);color:#fff;}

  /* SECTIONS */
  section{padding:88px 0;}
  .section-eyebrow{color:var(--accent);font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:16px;display:inline-flex;align-items:center;gap:12px;}
  .section-eyebrow::before{content:'';width:32px;height:2px;background:var(--accent);}
  .section-h{font-family:var(--serif);font-size:clamp(32px,4vw,46px);line-height:1.1;font-weight:400;letter-spacing:-.015em;color:var(--brand);margin-bottom:20px;max-width:22ch;}
  .section-h strong{font-weight:600;}
  .section-sub{font-size:18px;color:var(--ink-2);max-width:60ch;line-height:1.55;margin-bottom:56px;}

  /* HOW IT HELPS */
  .benefits-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  .benefit-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:6px;padding:32px 28px;position:relative;overflow:hidden;}
  .benefit-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--teal);}
  .benefit-num{font-family:var(--serif);font-size:48px;font-weight:600;color:var(--line-2);line-height:1;margin-bottom:16px;}
  .benefit-card h4{font-family:var(--serif);font-size:20px;font-weight:600;color:var(--brand);margin-bottom:10px;line-height:1.25;}
  .benefit-card p{font-size:14px;color:var(--ink-2);line-height:1.55;}

  /* 7 CATEGORIES QUICK GUIDE */
  .cats-section{background:var(--bg-soft);}
  .cats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:0;}
  .cat-quick{background:#fff;border:1px solid var(--line);border-radius:6px;padding:24px;transition:border-color .2s,box-shadow .2s;}
  .cat-quick:hover{border-color:var(--brand-light);box-shadow:var(--shadow-md);}
  .cat-quick a{text-decoration:none;color:inherit;display:block;}
  .cat-q-letter{width:48px;height:48px;background:var(--brand);color:#fff;border-radius:6px;display:grid;place-items:center;font-family:var(--serif);font-size:28px;font-weight:600;margin-bottom:14px;position:relative;}
  .cat-q-letter::after{content:'';position:absolute;bottom:6px;left:8px;right:8px;height:2px;background:var(--accent);}
  .cat-quick .cat-q-num{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:6px;}
  .cat-quick h5{font-family:var(--serif);font-size:16px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.2;}
  .cat-quick p{font-size:13px;color:var(--ink-2);line-height:1.5;margin-bottom:12px;}
  .cat-quick .cat-q-tip{font-size:12px;color:var(--teal);font-weight:600;display:flex;align-items:center;gap:6px;}
  .cat-quick .cat-q-tip::before{content:'';width:16px;height:1px;background:var(--teal);}

  /* PATHWAY */
  .pathway-section{background:#fff;}
  .pathway-box{background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;border-radius:8px;padding:56px;display:grid;grid-template-columns:1.2fr 1fr;gap:56px;align-items:center;position:relative;overflow:hidden;}
  .pathway-box::after{content:'';position:absolute;right:-60px;bottom:-60px;width:300px;height:300px;background:radial-gradient(circle,rgba(0,131,143,.3),transparent 70%);pointer-events:none;}
  .pathway-tag{display:inline-block;background:var(--teal);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:5px 12px;border-radius:2px;margin-bottom:20px;}
  .pathway-box h3{font-family:var(--serif);font-size:clamp(28px,3.5vw,40px);font-weight:400;color:#fff;line-height:1.2;margin-bottom:16px;}
  .pathway-box h3 strong{font-weight:600;}
  .pathway-box p{font-size:16px;color:rgba(255,255,255,.85);line-height:1.6;margin-bottom:32px;}
  .pathway-box .btn-white:hover{background:rgba(255,255,255,.9);}
  .pathway-includes{list-style:none;position:relative;z-index:1;}
  .pathway-includes li{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid rgba(255,255,255,.12);font-size:15px;color:rgba(255,255,255,.9);}
  .pathway-includes li:last-child{border-bottom:none;}
  .pathway-includes li::before{content:'✓';width:22px;height:22px;background:rgba(74,222,128,.2);border:1px solid rgba(74,222,128,.4);border-radius:50%;display:grid;place-items:center;font-size:12px;color:#4ade80;flex-shrink:0;}
  .price-badge{display:inline-block;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:6px;padding:16px 20px;margin-bottom:24px;}
  .price-badge .price{font-family:var(--serif);font-size:40px;font-weight:600;color:#fff;line-height:1;}
  .price-badge .cycle{font-size:13px;color:rgba(255,255,255,.65);margin-top:4px;}

  /* RESOURCES */
  .resources-section{background:var(--bg-soft);}
  .resources-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
  .resource-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:28px;transition:border-color .2s,box-shadow .2s;}
  .resource-card:hover{border-color:var(--brand-light);box-shadow:var(--shadow-md);}
  .resource-icon{width:52px;height:52px;background:var(--bg-soft);border-radius:6px;display:grid;place-items:center;font-size:24px;margin-bottom:18px;}
  .resource-tag{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--teal);margin-bottom:8px;display:block;}
  .resource-card h4{font-family:var(--serif);font-size:19px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.25;}
  .resource-card p{font-size:14px;color:var(--ink-2);line-height:1.55;margin-bottom:20px;}
  .resource-meta{display:flex;justify-content:space-between;align-items:center;font-size:13px;color:var(--ink-3);border-top:1px solid var(--line);padding-top:16px;}
  .resource-meta a{color:var(--brand);font-weight:600;display:flex;align-items:center;gap:4px;}
  .resource-meta a:hover{text-decoration:underline;}

  /* CTA */
  .cta-band{background:var(--brand);background-image:linear-gradient(135deg,var(--brand) 0%,var(--brand-dark) 100%);color:#fff;padding:80px 0;position:relative;overflow:hidden;}
  .cta-band::before{content:'';position:absolute;top:0;right:0;width:50%;height:100%;background:radial-gradient(circle at 80% 50%,rgba(0,131,143,.3),transparent 70%);}
  .cta-band-grid{display:grid;grid-template-columns:1.5fr auto;gap:48px;align-items:center;position:relative;z-index:1;}
  .cta-band h2{font-family:var(--serif);font-size:clamp(28px,3vw,40px);font-weight:400;line-height:1.2;margin-bottom:12px;color:#fff;}
  .cta-band h2 strong{font-weight:600;}
  .cta-band p{font-size:16px;color:rgba(255,255,255,.85);max-width:60ch;}
  .cta-band-actions{display:flex;gap:12px;flex-wrap:wrap;}
  .cta-band .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}.cta-band .btn-outline:hover{background:#fff;color:var(--brand);}

  /* FOOTER */
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

  @media(max-width:1100px){
    .container{padding:0 24px;}.nav-primary{display:none;}.header .container{gap:16px;justify-content:space-between;}
    .page-hero{padding:56px 0 72px;}.page-hero-grid{grid-template-columns:1fr;gap:40px;}
    .hero-panel{display:none;}.hero-stats{grid-template-columns:1fr 1fr;}
    .benefits-grid{grid-template-columns:1fr 1fr;}.cats-grid{grid-template-columns:1fr 1fr;}
    .pathway-box{grid-template-columns:1fr;gap:40px;padding:40px;}
    .resources-grid{grid-template-columns:1fr 1fr;}.cta-band-grid{grid-template-columns:1fr;}
    .footer-top{grid-template-columns:1fr 1fr;}
  }
  @media(max-width:640px){
    section{padding:56px 0;}.benefits-grid{grid-template-columns:1fr;}.cats-grid{grid-template-columns:1fr;}
    .hero-stats{grid-template-columns:1fr;}.resources-grid{grid-template-columns:1fr;}
    .footer-top{grid-template-columns:1fr;}.footer-bottom{grid-template-columns:1fr;text-align:center;justify-items:center;}
    .utility-bar .container{display:none;}
  }
  .reveal{opacity:0;transform:translateY(20px);transition:opacity .7s,transform .7s;}.reveal.in{opacity:1;transform:translateY(0);}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<!-- HERO -->
<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a><span class="sep">/</span>
        <a href="index.php#industries">Sectors</a><span class="sep">/</span>
        <span style="color:#fff;">Consumers</span>
      </div>
      <div class="page-hero-grid">
        <div>
          <div class="sector-eyebrow">Sector 01 — Consumer Hub</div>
          <h1>Know what's <strong>really on your plate.</strong></h1>
          <p class="lede">Seafood is the most frequently mislabelled food in the world. I-CADMUS gives every consumer the language, tools, and confidence to spot fraud at the supermarket counter and the restaurant table.</p>
          <div class="hero-actions">
            <a href="resources.php" class="btn btn-primary">Get the free scorecard <span class="arrow">→</span></a>
            <a href="certification.php" class="btn btn-outline">Enrol free</a>
          </div>
          <div class="hero-stats">
            <div class="hero-stat"><div class="num">1 in 5</div><div class="lbl">Seafood items globally mislabelled</div></div>
            <div class="hero-stat"><div class="num">7</div><div class="lbl">Fraud types covered by I-CADMUS</div></div>
            <div class="hero-stat"><div class="num">Free</div><div class="lbl">Consumer certification tier</div></div>
          </div>
        </div>
        <div class="hero-panel">
          <div class="hero-panel-tag">Consumer Pathway</div>
          <h3>Start spotting fraud today — at no cost</h3>
          <p>The I-CADMUS Consumer Certification is free, self-paced, and recognised. Complete it in a weekend.</p>
          <ul class="hero-panel-items">
            <li>Free fraud scorecard download</li>
            <li>Self-paced 8-module certification course</li>
            <li>I-CADMUS Quiz — find your blind spots</li>
            <li>Verifiable digital credential on completion</li>
            <li>Public reporting channel access</li>
          </ul>
          <a href="certification.php" class="btn btn-primary" style="width:100%;justify-content:center;">Enrol free now <span class="arrow">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTOR SUBNAV -->
<nav class="sector-nav">
  <div class="container">
    <a href="consumers.php" class="active"><span class="s-icon">01</span> Consumers</a>
    <a href="retail-foodservice.php"><span class="s-icon">02</span> Retail & Foodservice</a>
    <a href="processors.php"><span class="s-icon">03</span> Processors & Distributors</a>
    <a href="regulators.php"><span class="s-icon">04</span> Regulators</a>
  </div>
</nav>

<!-- HOW IT HELPS -->
<section style="background:#fff;">
  <div class="container">
    <div class="section-eyebrow">Why it matters to you</div>
    <h2 class="section-h">You are the <strong>last line of defence</strong> — and the most powerful.</h2>
    <p class="section-sub">Consumer demand shapes what retailers stock, what restaurants serve, and what processors are willing to label honestly. When consumers can name the fraud, the industry has to respond.</p>
    <div class="benefits-grid reveal">
      <div class="benefit-card">
        <div class="benefit-num">01</div>
        <h4>Know the seven fraud types</h4>
        <p>I-CADMUS names and defines the seven ways seafood is fraudulently sold. Once you know the categories, the red flags become visible — at the supermarket, the fishmonger, and the restaurant.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">02</div>
        <h4>Ask better questions</h4>
        <p>Most seafood fraud survives because no one asks. I-CADMUS gives you the specific questions to ask at the point of purchase — and the confidence that those questions are legitimate and important.</p>
      </div>
      <div class="benefit-card">
        <div class="benefit-num">03</div>
        <h4>Report with credibility</h4>
        <p>A certified consumer who reports suspected fraud using I-CADMUS category language is taken seriously by enforcement bodies. Vague complaints go nowhere; precise, categorised reports prompt action.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7 CATEGORIES QUICK GUIDE -->
<section class="cats-section">
  <div class="container">
    <div class="section-eyebrow">Your quick reference</div>
    <h2 class="section-h">The <strong>seven categories</strong> — what to look for at the counter</h2>
    <p class="section-sub">Each I-CADMUS category has specific consumer-facing red flags. Here is your cheat sheet.</p>
    <div class="cats-grid reveal">
      <div class="cat-quick"><a href="illegal.php">
        <div class="cat-q-letter">I</div>
        <div class="cat-q-num">Illegal · 01</div>
        <h5>IUU Laundering</h5>
        <p>Ask if origin claims match the species' known fishing zone. Favour certified product with verifiable lot numbers.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="counterfeit.php">
        <div class="cat-q-letter">C</div>
        <div class="cat-q-num">Counterfeit · 02</div>
        <h5>Fake Labels</h5>
        <p>Scan QR codes on certified product. Search the certifier's database using the code on the label — do the lot numbers match?</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="adulteration.php">
        <div class="cat-q-letter">A</div>
        <div class="cat-q-num">Adulteration · 03</div>
        <h5>Chemicals & Water</h5>
        <p>Look for "moisture added" disclosures with a quantified percentage. Prefer product with cook-out weight declared.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="dilution.php">
        <div class="cat-q-letter">D</div>
        <div class="cat-q-num">Dilution · 04</div>
        <h5>Glazing & Mixing</h5>
        <p>Weigh frozen product before and after thawing. Significant loss indicates excess glaze. Look for net drained weight on the label.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="misrepresentation.php">
        <div class="cat-q-letter">M</div>
        <div class="cat-q-num">Misrepresentation · 05</div>
        <h5>False Origin</h5>
        <p>Look for country-of-catch, not just country-of-processing. Ask for the certifier's name behind any sustainability claim.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="unreported.php">
        <div class="cat-q-letter">U</div>
        <div class="cat-q-num">Unreported · 06</div>
        <h5>Grey Channels</h5>
        <p>Be wary of "fresh off the boat" claims with no vessel ID, licence, or landing receipt. Ask the fishmonger to name their supplier.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick"><a href="substitution.php">
        <div class="cat-q-letter">S</div>
        <div class="cat-q-num">Substitution · 07</div>
        <h5>Species Swap</h5>
        <p>Refuse orders listed as "white fish" or "reef fish." Ask for the species name. Be sceptical of premium species at unusually low prices.</p>
        <div class="cat-q-tip">Read more</div>
      </a></div>
      <div class="cat-quick" style="background:var(--brand);border-color:var(--brand);display:flex;flex-direction:column;justify-content:center;">
        <div style="font-family:var(--serif);font-size:32px;font-weight:600;color:#fff;margin-bottom:12px;">All 7</div>
        <p style="font-size:14px;color:rgba(255,255,255,.85);margin-bottom:16px;">See the complete framework with full definitions, red flags, and counter-measures.</p>
        <a href="framework.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);font-size:13px;padding:9px 16px;">View full taxonomy <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- PATHWAY -->
<section class="pathway-section">
  <div class="container">
    <div class="section-eyebrow">Certification pathway</div>
    <h2 class="section-h">Your pathway — <strong>free to start</strong>, forever.</h2>
    <p class="section-sub">The Consumer certification is the only I-CADMUS tier that is permanently free. No credit card. No expiry.</p>
    <div class="pathway-box reveal">
      <div>
        <div class="pathway-tag">Pathway 01 — Consumers</div>
        <div class="price-badge"><div class="price">$0</div><div class="cycle">Always free · no credit card required</div></div>
        <h3>The framework, the language, and the tools to <strong>refuse fraud at the counter.</strong></h3>
        <p>Eight self-paced modules covering the complete I-CADMUS taxonomy, eight real-world case studies, and a final assessment leading to a verifiable digital credential recognised by the Seafood Consumer Association.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="certification.php" class="btn btn-white">Enrol now — it's free <span class="arrow">→</span></a>
          <a href="resources.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);">Browse free resources</a>
        </div>
      </div>
      <div>
        <ul class="pathway-includes">
          <li>Full 8-module curriculum access</li>
          <li>Eight case studies with findings</li>
          <li>I-CADMUS fraud scorecard download</li>
          <li>Interactive species quiz</li>
          <li>Final assessment and grading</li>
          <li>Verifiable digital credential</li>
          <li>Public reporting channel access</li>
          <li>Community of certified consumers</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- RESOURCES -->
<section class="resources-section">
  <div class="container">
    <div class="section-eyebrow">Free resources</div>
    <h2 class="section-h">Tools built <strong>for you</strong> to use today.</h2>
    <p class="section-sub">Every resource in the consumer toolkit is free, practical, and ready to use at the supermarket, the fishmonger, or the restaurant table.</p>
    <div class="resources-grid reveal">
      <div class="resource-card">
        <div class="resource-icon">📋</div>
        <span class="resource-tag">Consumer · PDF</span>
        <h4>Fraud Scorecard</h4>
        <p>A pocket-size scorecard covering all seven I-CADMUS categories with consumer-facing red flags for each. Take it shopping.</p>
        <div class="resource-meta"><small>2 pages · 0.4 MB</small><a href="resources.php">Download <span>↓</span></a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">❓</div>
        <span class="resource-tag">Interactive · Web</span>
        <h4>I-CADMUS Quiz</h4>
        <p>A 20-question diagnostic that identifies which fraud type you're best at spotting — and which deserves more attention. No sign-up required.</p>
        <div class="resource-meta"><small>10 minutes</small><a href="resources.php">Take the quiz <span>→</span></a></div>
      </div>
      <div class="resource-card">
        <div class="resource-icon">⌗</div>
        <span class="resource-tag">Demo · Web · Mobile-friendly</span>
        <h4>QR Scanner Demo</h4>
        <p>See what genuine end-to-end traceability looks like. Scan a sample I-CADMUS QR code and view the full vessel-to-plate provenance record.</p>
        <div class="resource-meta"><small>2 minutes</small><a href="resources.php">Try the demo <span>→</span></a></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to become a <strong>certified consumer</strong>?</h2>
        <p>Join thousands of certified consumers who can name, classify, and report seafood fraud. Free, recognised, and takes a weekend.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.php" class="btn btn-primary">Enrol free <span class="arrow">→</span></a>
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
