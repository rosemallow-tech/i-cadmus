<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Substitution — Species Swap | I-CADMUS Framework</title>
<meta name="description" content="Category S of the I-CADMUS framework: Substitution — cheap fish sold at a premium price. The most familiar seafood fraud and the costliest to consumer trust." />
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
  .btn-secondary{background:var(--brand);color:#fff;border-color:var(--brand);}.btn-secondary:hover{background:var(--brand-dark);}
  .btn-outline{background:transparent;color:var(--brand);border-color:var(--brand);}.btn-outline:hover{background:var(--brand);color:#fff;}
  .btn .arrow{font-size:12px;}
  .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.7);margin-bottom:24px;}
  .breadcrumb a{color:rgba(255,255,255,.85);}.breadcrumb a:hover{color:#fff;text-decoration:underline;}.breadcrumb .sep{color:rgba(255,255,255,.4);}

  /* FEATURED HERO — dark gradient for the featured/final category */
  .page-hero{background:linear-gradient(135deg,#001826 0%,var(--brand-dark) 40%,#003a5d 100%);color:#fff;position:relative;overflow:hidden;padding:96px 0 120px;}
  .page-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 75% 25%,rgba(184,135,11,.2),transparent 50%),radial-gradient(circle at 25% 75%,rgba(200,16,46,.2),transparent 60%);pointer-events:none;}
  .page-hero::after{content:'';position:absolute;right:-100px;bottom:-100px;width:600px;height:600px;background-image:radial-gradient(circle at center,rgba(255,255,255,.04) 1px,transparent 1px);background-size:24px 24px;pointer-events:none;mask-image:radial-gradient(circle at center,black,transparent 70%);-webkit-mask-image:radial-gradient(circle at center,black,transparent 70%);}
  .page-hero-inner{position:relative;z-index:1;}
  .page-hero-grid{display:grid;grid-template-columns:1fr auto;gap:48px;align-items:center;}
  .cat-badge{display:inline-flex;align-items:center;gap:10px;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.9);background:rgba(184,135,11,.2);border:1px solid rgba(184,135,11,.4);border-radius:100px;padding:6px 16px;margin-bottom:24px;}
  .cat-badge::before{content:'';width:7px;height:7px;background:var(--gold);border-radius:50%;box-shadow:0 0 0 3px rgba(184,135,11,.3);}
  .page-hero h1{font-family:var(--serif);font-weight:400;font-size:clamp(36px,5vw,64px);line-height:1.06;letter-spacing:-.015em;margin-bottom:20px;color:#fff;}
  .page-hero h1 strong{font-weight:600;background:linear-gradient(120deg,#fff 0%,#ffd25e 100%);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;}
  .page-hero .lede{font-size:19px;color:rgba(255,255,255,.88);max-width:64ch;line-height:1.5;margin-bottom:36px;}
  .hero-letter-box{width:160px;height:160px;background:rgba(184,135,11,.15);border:2px solid rgba(184,135,11,.4);border-radius:12px;display:grid;place-items:center;font-family:var(--serif);font-size:100px;font-weight:600;color:#ffd25e;flex-shrink:0;position:relative;}
  .hero-letter-box::after{content:'';position:absolute;bottom:18px;left:22px;right:22px;height:4px;background:var(--gold);border-radius:2px;}

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

  /* Featured callout banner */
  .featured-banner{background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;border-radius:8px;padding:28px 32px;margin-bottom:40px;display:flex;align-items:center;gap:20px;border-left:4px solid var(--gold);}
  .featured-banner .fb-icon{font-family:var(--serif);font-size:40px;font-weight:600;color:var(--gold);flex-shrink:0;}
  .featured-banner h4{font-family:var(--serif);font-size:20px;font-weight:600;color:#fff;margin-bottom:6px;}
  .featured-banner p{font-size:14px;color:rgba(255,255,255,.85);line-height:1.5;}

  .cat-body{display:grid;grid-template-columns:1.4fr 1fr;gap:40px;margin-bottom:40px;}
  .cat-body p{font-size:16px;color:var(--ink-2);line-height:1.65;margin-bottom:16px;}
  .cat-body p strong{color:var(--ink);font-weight:600;}
  .stat-callout{background:var(--brand-dark);color:#fff;padding:20px 24px;border-radius:6px;margin-top:20px;border-left:4px solid var(--gold);}
  .stat-callout strong{display:block;font-family:var(--serif);font-size:40px;font-weight:600;line-height:1;margin-bottom:6px;color:#ffd25e;}
  .stat-callout span{font-size:13px;color:rgba(255,255,255,.8);}
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

  /* Book CTA */
  .book-cta{background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;border-radius:8px;padding:40px;margin:48px 0;position:relative;overflow:hidden;}
  .book-cta::after{content:'';position:absolute;right:-60px;bottom:-60px;width:280px;height:280px;background:radial-gradient(circle,rgba(184,135,11,.3),transparent 70%);pointer-events:none;}
  .book-cta h3{font-family:var(--serif);font-size:28px;font-weight:600;color:#fff;margin-bottom:12px;position:relative;z-index:1;}
  .book-cta p{font-size:15px;color:rgba(255,255,255,.85);margin-bottom:24px;max-width:54ch;position:relative;z-index:1;}
  .book-cta .btn{position:relative;z-index:1;}
  .book-cta .btn-gold{background:var(--gold);color:#fff;border-color:var(--gold);}
  .book-cta .btn-gold:hover{background:#9e7209;border-color:#9e7209;}

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
  @media(max-width:1100px){.container{padding:0 24px;}.nav-primary{display:none;}.header .container{gap:16px;justify-content:space-between;}.cat-page-layout{grid-template-columns:1fr;gap:32px;padding:48px 0;}.framework-side{position:static;}.framework-side ul{display:flex;gap:8px;overflow-x:auto;padding-bottom:8px;}.framework-side li a{border-left:none;border-bottom:2px solid transparent;padding:10px 12px;margin:0;white-space:nowrap;}.framework-side li a.active{border-bottom-color:var(--accent);border-left-color:transparent;}.cat-body{grid-template-columns:1fr;gap:24px;}.sector-grid{grid-template-columns:1fr;}.related-grid{grid-template-columns:1fr 1fr;}.cta-band-grid{grid-template-columns:1fr;}.footer-top{grid-template-columns:1fr 1fr;}.page-hero{padding:56px 0 80px;}.page-hero-grid{grid-template-columns:1fr;}.hero-letter-box{display:none;}}
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
        <span style="color:#fff;">Substitution — Species Swap</span>
      </div>
      <div class="page-hero-grid">
        <div>
          <div class="cat-badge">Category 07 of 07 · Featured — I-CADMUS Framework</div>
          <h1><strong>Substitution</strong> — Cheap fish at a premium price</h1>
          <p class="lede">The most familiar seafood fraud and the costliest to consumer trust. One species sold under another's name — at a premium margin.</p>
          <div style="display:flex;gap:12px;flex-wrap:wrap;">
            <a href="book.php" class="btn btn-primary">Read the full chapter <span class="arrow">→</span></a>
            <a href="framework.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.4);">All seven categories</a>
          </div>
        </div>
        <div class="hero-letter-box">S</div>
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
        <li><a href="unreported.php"><span class="letter">U</span> Unreported</a></li>
        <li><a href="substitution.php" class="active"><span class="letter">S</span> Substitution</a></li>
        <li style="margin-top:16px;padding-top:16px;border-top:1px solid var(--line);"><a href="framework.php" style="color:var(--accent);font-weight:600;">View all →</a></li>
      </ul>
    </aside>

    <main class="cat-content">

      <div class="featured-banner reveal">
        <div class="fb-icon">★</div>
        <div>
          <h4>The featured category of the I-CADMUS framework</h4>
          <p>Substitution is the most studied, most measurable, and most stubbornly persistent of all seven fraud types. It is covered in depth in <em>Sea of Deception</em> by Hon. Prof Roy D. Palmer.</p>
        </div>
      </div>

      <div class="cat-content-head reveal">
        <div class="cat-num">Category 07 · Featured · I-CADMUS Framework</div>
        <h2 class="cat-title">Substitution — Species Swap</h2>
        <p class="cat-tagline">The most familiar fraud and the costliest to consumer trust.</p>
      </div>

      <div class="cat-body reveal">
        <div>
          <p>Substitution sells one species under another's name. Premium snapper replaced by inferior tropical imports. "Fish of the day" conceals whatever's cheapest that morning. Restaurant menus list species the kitchen has never purchased. Of all seven I-CADMUS fraud types, substitution is the most studied, the most measurable via DNA testing, and the most stubbornly persistent.</p>
          <p>Substitution erodes the entire premise of seafood labelling. <strong>If the species itself is a lie, every other claim on the package — origin, method, sustainability — is unverifiable theatre.</strong> Food safety has to start with truth about what the product actually is. I-CADMUS gives regulators, buyers, and consumers the language to call it out by name.</p>

          <div class="why-box">
            <h4>Why it matters most</h4>
            <p>The margin on substitution is enormous. Premium snapper may wholesale at three or four times the price of the species used to replace it. Detection at point of sale is functionally impossible without a laboratory. The consumer has no practical means of verification — and fraudsters know it. Until DNA testing is routine and penalties exceed the fraud margin, substitution will remain endemic.</p>
          </div>

          <div class="stat-callout" style="margin-top:24px;">
            <strong>1 in 5</strong>
            <span>Global mislabelling rate across major DNA verification studies — seafood is the most commonly mislabelled food category worldwide</span>
          </div>
        </div>
        <div>
          <div class="cat-info-card">
            <h4>Red flags</h4>
            <ul>
              <li>Species labelled at price points well below known wholesale market rates</li>
              <li>Generic terms on the menu or label: "snapper," "white fish," "rockfish," "reef fish"</li>
              <li>Texture, colour, or flake size inconsistent with the claimed species' known characteristics</li>
              <li>Restaurant staff unable to name the species' origin, vessel, or farm</li>
              <li>Seasonal species available year-round at identical pricing regardless of season</li>
            </ul>
          </div>
          <div class="cat-info-card counter" style="margin-top:16px;">
            <h4>Counter-measures</h4>
            <ul>
              <li>AS 5300 mandatory species naming — common name and scientific name on all labels</li>
              <li>Routine DNA verification at retail and foodservice — not just complaint-driven</li>
              <li>End of generic species terms in commercial food service</li>
              <li>Real penalties — fines and licence revocation that exceed the fraud margin</li>
              <li>Menu and label species-name disclosure requirements</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Book CTA -->
      <div class="book-cta reveal">
        <h3>Read the full chapter on Substitution</h3>
        <p><em>Sea of Deception</em> by Hon. Prof Roy D. Palmer dedicates a full chapter to species substitution — including the DNA verification evidence, the economics of the fraud, and a policy roadmap for ending it.</p>
        <a href="book.php" class="btn btn-gold">Preview the book <span class="arrow">→</span></a>
      </div>

      <div class="sector-section reveal">
        <h3>Who needs to act — and how</h3>
        <p class="sub">Substitution requires action at every level — from menu reform in restaurants to mandatory DNA testing in national surveillance programs.</p>
        <div class="sector-grid">
          <div class="sector-card">
            <div class="sector-label">Consumers</div>
            <h5>What you can do</h5>
            <ul>
              <li>Refuse to order menu items listed as "white fish," "reef fish," or other generic terms</li>
              <li>Ask for the scientific name of species you are paying a premium for</li>
              <li>Report suspected substitution via consumer protection channels</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Retail & Foodservice</div>
            <h5>What you can do</h5>
            <ul>
              <li>List species by common and scientific name on all menus and labels — no generic terms</li>
              <li>Commission periodic DNA testing on your highest-volume species lines</li>
              <li>Require scientific species name declaration from suppliers at invoice level</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Processors & Distributors</div>
            <h5>What you can do</h5>
            <ul>
              <li>Implement lot-level species identity records from intake through to dispatch</li>
              <li>Maintain separate processing lines for species that are commercially substituted</li>
              <li>Require DNA test certificates for high-value species from international suppliers</li>
            </ul>
          </div>
          <div class="sector-card">
            <div class="sector-label">Regulators</div>
            <h5>What you can do</h5>
            <ul>
              <li>Mandate AS 5300 species naming (or equivalent) on all retail and foodservice labels</li>
              <li>Fund routine DNA verification as part of annual seafood surveillance programs</li>
              <li>Set penalties at multiples of the fraud margin — not fixed fines that are priced in</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="related-section reveal">
        <h3>Related categories</h3>
        <div class="related-grid">
          <a href="misrepresentation.php" class="related-card">
            <div class="r-letter">M</div>
            <div class="r-num">Category 05</div>
            <h5>Misrepresentation — False Origin</h5>
            <p>Substituted species almost always carry false origin and harvest-method claims to justify the premium price.</p>
          </a>
          <a href="dilution.php" class="related-card">
            <div class="r-letter">D</div>
            <div class="r-num">Category 04</div>
            <h5>Dilution — Glazing & Mixing</h5>
            <p>Species mixing is the dilution variant of substitution — blending rather than wholesale species replacement.</p>
          </a>
          <a href="counterfeit.php" class="related-card">
            <div class="r-letter">C</div>
            <div class="r-num">Category 02</div>
            <h5>Counterfeit — Fake Labels</h5>
            <p>Counterfeit premium-brand labels are frequently used to disguise cheaper substitute species at the point of sale.</p>
          </a>
        </div>
      </div>

      <div class="cat-nav reveal">
        <a href="unreported.php" class="cat-nav-card">
          <div class="cat-nav-label">← Previous</div>
          <div class="cat-nav-title">U — Unreported · Grey Channels</div>
        </a>
        <a href="framework.php" class="cat-nav-card next">
          <div class="cat-nav-label">View all →</div>
          <div class="cat-nav-title">The complete I-CADMUS taxonomy</div>
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
        <p>Earn the I-CADMUS certification, download the audit checklists, or book a briefing for your procurement team.</p>
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
