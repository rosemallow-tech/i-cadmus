<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Consumer Action | I-CADMUS — When Seafood Does Not Seem Right</title>
<meta name="description" content="What to do when a seafood product, label or menu claim does not seem right. Evidence checklist, concern form, sample complaint letter and Australian referral directory." />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">

<style>
  :root {
    --brand:#003a5d;--brand-dark:#002940;--brand-light:#0a4f7a;
    --accent:#c8102e;--accent-dark:#9e0c24;
    --teal:#00838f;--gold:#b8870b;
    --ink:#1c2127;--ink-2:#3d434d;--ink-3:#5c6470;
    --line:#e5e8ec;--line-2:#d5dae0;
    --bg:#ffffff;--bg-soft:#f6f8fa;--bg-2:#eef2f6;
    --sans:'Source Sans 3',-apple-system,'Segoe UI',sans-serif;
    --serif:'Source Serif 4',Georgia,serif;
    --shadow-sm:0 1px 2px rgba(0,25,50,.06),0 1px 3px rgba(0,25,50,.04);
    --shadow-md:0 4px 12px rgba(0,25,50,.08),0 2px 4px rgba(0,25,50,.04);
    --shadow-lg:0 12px 32px rgba(0,25,50,.10),0 4px 12px rgba(0,25,50,.06);
  }
  *{box-sizing:border-box;margin:0;padding:0;}html{scroll-behavior:smooth;}
  body{font-family:var(--sans);color:var(--ink);background:var(--bg);font-size:16px;line-height:1.55;-webkit-font-smoothing:antialiased;}
  a{color:inherit;text-decoration:none;}img{display:block;max-width:100%;}
  .container{max-width:1320px;margin:0 auto;padding:0 32px;}

  /* Shared chrome */
  .utility-bar{background:var(--brand-dark);color:rgba(255,255,255,.85);font-size:13px;border-bottom:1px solid rgba(255,255,255,.08);}
  .utility-bar .container{display:flex;justify-content:space-between;align-items:center;height:38px;}
  .utility-bar a{color:rgba(255,255,255,.85);transition:color .15s;padding:0 14px;border-right:1px solid rgba(255,255,255,.12);line-height:38px;}
  .utility-bar a:last-child{border-right:none;}.utility-bar a:hover{color:#fff;}
  .utility-locale{display:flex;align-items:center;gap:8px;}
  .utility-locale select{background:transparent;border:none;color:rgba(255,255,255,.85);font-family:inherit;font-size:13px;cursor:pointer;}
  .utility-locale select option{background:var(--brand-dark);}
  .header{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:0;z-index:100;box-shadow:var(--shadow-sm);}
  .header .container{display:flex;align-items:center;height:76px;gap:20px;}
  .brand{display:flex;align-items:center;gap:12px;font-weight:700;font-size:22px;color:var(--brand);letter-spacing:-.01em;flex-shrink:0;}
  .nav-primary{display:flex;gap:4px;flex:1;}
  .nav-primary>li{list-style:none;position:relative;}
  .nav-primary>li>a{display:flex;align-items:center;gap:6px;height:76px;padding:0 10px;font-size:15px;font-weight:500;color:var(--ink-2);border-bottom:3px solid transparent;transition:color .15s,border-color .15s;white-space:nowrap;}
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
  .btn{display:inline-flex;align-items:center;gap:8px;padding:11px 22px;font-size:14px;font-weight:600;border-radius:2px;transition:all .15s;cursor:pointer;border:1px solid transparent;line-height:1.2;white-space:nowrap;}
  .btn-primary{background:var(--accent);color:#fff;border-color:var(--accent);}.btn-primary:hover{background:var(--accent-dark);border-color:var(--accent-dark);}
  .btn-secondary{background:var(--brand);color:#fff;border-color:var(--brand);}.btn-secondary:hover{background:var(--brand-dark);}
  .btn-outline{background:transparent;color:var(--brand);border-color:var(--brand);}.btn-outline:hover{background:var(--brand);color:#fff;}
  .btn .arrow{font-size:12px;}

  /* =========================================================
     HERO
     ========================================================= */
  .ca-hero{background:linear-gradient(135deg,var(--brand-dark) 0%,var(--brand) 50%,var(--brand-light) 100%);color:#fff;padding:80px 0 88px;position:relative;overflow:hidden;}
  .ca-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 75% 30%,rgba(0,131,143,.25),transparent 50%),radial-gradient(circle at 15% 75%,rgba(200,16,46,.12),transparent 55%);pointer-events:none;}
  .ca-hero .container{position:relative;z-index:1;}
  .ca-hero .breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:rgba(255,255,255,.7);margin-bottom:24px;}
  .ca-hero .breadcrumb a{color:rgba(255,255,255,.85);}.ca-hero .breadcrumb a:hover{color:#fff;text-decoration:underline;}
  .ca-hero .breadcrumb .sep{color:rgba(255,255,255,.4);}.ca-hero .breadcrumb .current{color:#fff;}
  .ca-hero-eyebrow{display:inline-flex;align-items:center;gap:12px;font-size:13px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,.85);padding:6px 14px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.18);border-radius:100px;margin-bottom:24px;}
  .ca-hero-eyebrow::before{content:'';width:7px;height:7px;background:var(--teal);border-radius:50%;box-shadow:0 0 0 3px rgba(0,131,143,.3);}
  .ca-hero h1{font-family:var(--serif);font-weight:600;font-size:clamp(34px,5vw,54px);line-height:1.08;letter-spacing:-.015em;margin-bottom:20px;color:#fff;}
  .ca-hero p.lede{font-size:19px;color:rgba(255,255,255,.85);max-width:62ch;line-height:1.55;margin-bottom:32px;}
  .ca-hero-actions{display:flex;gap:14px;flex-wrap:wrap;}
  .ca-hero .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}
  .ca-hero .btn-outline:hover{background:#fff;color:var(--brand);border-color:#fff;}

  /* =========================================================
     SECTIONS
     ========================================================= */
  section{padding:80px 0;}
  .section-eyebrow{color:var(--accent);font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:16px;display:inline-flex;align-items:center;gap:12px;}
  .section-eyebrow::before{content:'';width:32px;height:2px;background:var(--accent);}
  .section-h{font-family:var(--serif);font-size:clamp(28px,3.5vw,42px);line-height:1.12;font-weight:400;letter-spacing:-.015em;color:var(--brand);margin-bottom:20px;max-width:28ch;}
  .section-h strong{font-weight:600;}
  .section-sub{font-size:18px;color:var(--ink-2);max-width:60ch;line-height:1.55;margin-bottom:48px;}

  /* =========================================================
     QUICK PATHWAY
     ========================================================= */
  .pathway-strip{background:var(--bg-soft);border-bottom:1px solid var(--line);padding:32px 0;}
  .pathway-flow{display:flex;align-items:center;flex-wrap:wrap;gap:8px;justify-content:center;}
  .pathway-flow .step{background:var(--brand);color:#fff;padding:8px 16px;border-radius:100px;font-size:13px;font-weight:600;white-space:nowrap;}
  .pathway-flow .arr{color:var(--accent);font-weight:400;font-size:16px;}

  /* =========================================================
     STEP SECTIONS
     ========================================================= */
  .step-section{border-bottom:1px solid var(--line);}
  .step-section.alt{background:var(--bg-soft);}
  .step-header{display:flex;align-items:baseline;gap:20px;margin-bottom:24px;flex-wrap:wrap;}
  .step-num{font-family:var(--serif);font-size:56px;font-weight:600;color:var(--brand);line-height:1;opacity:.15;}
  .step-header h2{font-family:var(--serif);font-size:clamp(22px,2.8vw,32px);font-weight:600;color:var(--brand);line-height:1.15;}
  .step-body{max-width:860px;}
  .step-body p{font-size:16px;color:var(--ink-2);line-height:1.65;margin-bottom:18px;}
  .step-checklist{background:#fff;border:1px solid var(--line);border-left:4px solid var(--teal);border-radius:4px;padding:28px 32px;margin:24px 0 28px;}
  .step-section.alt .step-checklist{background:#fff;}
  .step-checklist h4{font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--teal);margin-bottom:16px;}
  .step-checklist ul{list-style:none;}
  .step-checklist li{font-size:15px;color:var(--ink-2);padding:7px 0 7px 28px;position:relative;line-height:1.5;border-bottom:1px solid var(--bg-2);}
  .step-checklist li:last-child{border-bottom:none;}
  .step-checklist li::before{content:'';position:absolute;left:0;top:12px;width:16px;height:16px;border:2px solid var(--line-2);border-radius:3px;}
  .step-callout{background:linear-gradient(135deg,var(--brand-dark),var(--brand));color:#fff;padding:24px 28px;border-radius:6px;margin:24px 0 8px;font-size:15px;line-height:1.55;font-style:italic;}
  .step-callout strong{color:#fff;font-style:normal;}

  /* =========================================================
     REFERRAL DIRECTORY
     ========================================================= */
  .referral-section{background:var(--brand-dark);color:#fff;}
  .referral-section .section-eyebrow{color:#ff6b81;}
  .referral-section .section-eyebrow::before{background:#ff6b81;}
  .referral-section .section-h{color:#fff;}
  .referral-section .section-sub{color:rgba(255,255,255,.75);}
  .referral-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
  .referral-card{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.12);border-radius:6px;padding:24px;transition:background .2s;}
  .referral-card:hover{background:rgba(255,255,255,.08);}
  .referral-card h4{font-family:var(--serif);font-size:17px;font-weight:600;color:#fff;margin-bottom:8px;line-height:1.3;}
  .referral-card p{font-size:14px;color:rgba(255,255,255,.75);line-height:1.5;margin-bottom:0;}

  /* =========================================================
     CONSUMER ACTION KIT
     ========================================================= */
  .kit-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;}
  .kit-card{background:#fff;border:1px solid var(--line);border-radius:6px;padding:28px;transition:border-color .2s,box-shadow .2s;}
  .kit-card:hover{border-color:var(--teal);box-shadow:var(--shadow-md);}
  .kit-icon{width:52px;height:52px;background:var(--bg-soft);border-radius:6px;display:grid;place-items:center;font-size:24px;margin-bottom:18px;}
  .kit-tag{font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--teal);margin-bottom:8px;display:block;}
  .kit-card h4{font-family:var(--serif);font-size:19px;font-weight:600;color:var(--brand);margin-bottom:8px;line-height:1.25;}
  .kit-card p{font-size:14px;color:var(--ink-2);line-height:1.55;margin-bottom:16px;}

  /* =========================================================
     CONCERN FORM
     ========================================================= */
  .form-section{background:var(--bg-soft);}
  .concern-form{max-width:720px;margin:0 auto;background:#fff;border:1px solid var(--line);border-top:6px solid var(--teal);border-radius:8px;padding:48px;}
  .concern-form h3{font-family:var(--serif);font-size:26px;font-weight:600;color:var(--brand);margin-bottom:8px;}
  .concern-form > p{font-size:15px;color:var(--ink-2);margin-bottom:28px;}
  .form-group{margin-bottom:20px;}
  .form-group label{display:block;font-size:13px;font-weight:600;color:var(--ink-2);margin-bottom:6px;}
  .form-group input,.form-group textarea,.form-group select{width:100%;padding:12px 14px;border:1px solid var(--line-2);border-radius:4px;font-size:14px;font-family:inherit;color:var(--ink);background:#fff;}
  .form-group input:focus,.form-group textarea:focus,.form-group select:focus{outline:2px solid var(--teal);border-color:var(--teal);}
  .form-group textarea{min-height:100px;resize:vertical;}
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
  .form-checkboxes{display:flex;flex-direction:column;gap:8px;margin-top:8px;}
  .form-checkboxes label{display:flex;align-items:flex-start;gap:10px;font-size:14px;color:var(--ink-2);font-weight:400;cursor:pointer;}
  .form-checkboxes input[type="checkbox"]{width:18px;height:18px;margin-top:2px;accent-color:var(--teal);flex-shrink:0;}
  .form-submit{background:var(--teal);color:#fff;border:none;padding:14px 28px;font-weight:600;font-size:15px;border-radius:4px;cursor:pointer;transition:background .2s;font-family:inherit;margin-top:8px;}
  .form-submit:hover{background:#006d75;}

  /* =========================================================
     SAFEGUARDS
     ========================================================= */
  .safeguards-box{max-width:860px;margin:0 auto;background:var(--bg-soft);border:1px solid var(--line);border-left:4px solid var(--accent);border-radius:6px;padding:36px 40px;margin-top:48px;}
  .safeguards-box h3{font-family:var(--serif);font-size:22px;font-weight:600;color:var(--brand);margin-bottom:16px;}
  .safeguards-box ul{list-style:none;}
  .safeguards-box li{font-size:15px;color:var(--ink-2);padding:8px 0 8px 24px;position:relative;line-height:1.55;border-bottom:1px solid var(--line);}
  .safeguards-box li:last-child{border-bottom:none;}
  .safeguards-box li::before{content:'—';position:absolute;left:0;color:var(--accent);font-weight:700;}

  /* =========================================================
     NEWSLETTER
     ========================================================= */
  .newsletter-section{background:var(--bg-soft);}
  .newsletter-card{max-width:620px;margin:0 auto;background:#fff;border:1px solid var(--line);border-radius:8px;padding:44px;text-align:center;box-shadow:var(--shadow-md);}
  .newsletter-card h3{font-family:var(--serif);font-size:26px;font-weight:600;color:var(--brand);margin-bottom:12px;}
  .newsletter-card > p{font-size:15px;color:var(--ink-2);margin-bottom:24px;max-width:44ch;margin-left:auto;margin-right:auto;line-height:1.55;}
  .newsletter-form{display:flex;flex-direction:column;gap:12px;max-width:380px;margin:0 auto;text-align:left;}
  .newsletter-form label{font-size:13px;font-weight:600;color:var(--ink-2);}
  .newsletter-form input{width:100%;padding:12px 14px;border:1px solid var(--line-2);border-radius:4px;font-size:14px;font-family:inherit;color:var(--ink);background:#fff;}
  .newsletter-form input:focus{outline:2px solid var(--teal);border-color:var(--teal);}
  .newsletter-form button{background:var(--accent);color:#fff;border:none;padding:14px 18px;font-weight:600;font-size:15px;border-radius:4px;cursor:pointer;transition:background .2s;font-family:inherit;margin-top:4px;}
  .newsletter-form button:hover{background:var(--accent-dark);}
  .newsletter-note{font-size:12px;color:var(--ink-3);margin-top:12px;text-align:center;}

  /* =========================================================
     CTA BAND
     ========================================================= */
  .cta-band{background:var(--brand);background-image:linear-gradient(135deg,var(--brand) 0%,var(--brand-dark) 100%);color:#fff;padding:72px 0;position:relative;overflow:hidden;}
  .cta-band::before{content:'';position:absolute;top:0;right:0;width:50%;height:100%;background:radial-gradient(circle at 80% 50%,rgba(0,131,143,.3),transparent 70%);}
  .cta-band-grid{display:grid;grid-template-columns:1.5fr auto;gap:48px;align-items:center;position:relative;z-index:1;}
  .cta-band h2{font-family:var(--serif);font-size:clamp(24px,3vw,36px);font-weight:400;line-height:1.2;margin-bottom:12px;color:#fff;}
  .cta-band h2 strong{font-weight:600;}
  .cta-band p{font-size:16px;color:rgba(255,255,255,.85);max-width:60ch;}
  .cta-band-actions{display:flex;gap:12px;flex-wrap:wrap;}
  .cta-band .btn-outline{color:#fff;border-color:rgba(255,255,255,.4);}.cta-band .btn-outline:hover{background:#fff;color:var(--brand);}

  /* =========================================================
     FOOTER
     ========================================================= */
  footer{background:#1a1d22;color:rgba(255,255,255,.75);padding:80px 0 0;font-size:14px;}
  .footer-top{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr 1fr;gap:40px;padding-bottom:56px;border-bottom:1px solid rgba(255,255,255,.08);}
  .footer-brand{display:flex;align-items:center;gap:12px;margin-bottom:20px;}
  .footer-brand-text{color:#fff;font-weight:700;font-size:22px;}
  .footer-brand-text small{display:block;font-size:11px;font-weight:400;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.04em;margin-top:2px;}
  .footer-desc{color:rgba(255,255,255,.65);line-height:1.55;margin-bottom:24px;max-width:36ch;}
  .footer-newsletter input{width:100%;padding:12px 14px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.15);color:#fff;border-radius:4px;font-size:14px;font-family:inherit;margin-bottom:8px;}
  .footer-newsletter input::placeholder{color:rgba(255,255,255,.5);}
  .footer-newsletter input:focus{outline:2px solid var(--accent);border-color:var(--accent);}
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

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media(max-width:1100px){
    .container{padding:0 24px;}.nav-primary{display:none;}.header .container{gap:16px;justify-content:space-between;}
    .referral-grid{grid-template-columns:1fr;}
    .form-row{grid-template-columns:1fr;}
    .cta-band-grid{grid-template-columns:1fr;}
    .footer-top{grid-template-columns:1fr 1fr;}
  }
  @media(max-width:640px){
    section{padding:56px 0;}
    .kit-grid{grid-template-columns:1fr;}
    .concern-form{padding:28px 20px;}
    .safeguards-box{padding:28px 24px;}
    .footer-top{grid-template-columns:1fr;}
    .footer-bottom{grid-template-columns:1fr;text-align:center;justify-items:center;}
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== HERO ============== -->
<section class="ca-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">/</span>
      <a href="consumers.php">Consumers</a>
      <span class="sep">/</span>
      <span class="current">Consumer Action</span>
    </div>
    <div class="ca-hero-eyebrow">Consumer Action Kit</div>
    <h1>When Seafood Does Not Seem Right</h1>
    <p class="lede">Consumers are often the first to notice when something about a seafood product does not make sense. This guide helps you preserve evidence, raise the concern fairly and direct serious matters to the right authority.</p>
    <div class="ca-hero-actions">
      <a href="#steps" class="btn btn-primary">Follow the steps <span class="arrow">→</span></a>
      <a href="#form" class="btn btn-outline">Fill in the concern form</a>
      <a href="#referral" class="btn btn-outline">Australian referral directory</a>
    </div>
  </div>
</section>

<!-- ============== QUICK PATHWAY ============== -->
<div class="pathway-strip">
  <div class="container">
    <div class="pathway-flow">
      <span class="step">Notice a concern</span><span class="arr">→</span>
      <span class="step">Health risk?</span><span class="arr">→</span>
      <span class="step">Preserve evidence</span><span class="arr">→</span>
      <span class="step">Record the claim</span><span class="arr">→</span>
      <span class="step">Contact the business</span><span class="arr">→</span>
      <span class="step">Report if unresolved</span><span class="arr">→</span>
      <span class="step">Record the outcome</span>
    </div>
  </div>
</div>

<!-- ============== CONSUMER ACTION KIT ============== -->
<section id="kit">
  <div class="container">
    <div class="section-eyebrow">Consumer Action Kit</div>
    <h2 class="section-h" style="max-width:none;">Your <strong>downloadable resources.</strong></h2>
    <p class="section-sub">Five resources to help you document, report and follow up on a seafood concern.</p>
    <div class="kit-grid">
      <div class="kit-card">
        <div class="kit-icon">📝</div>
        <span class="kit-tag">Form · PDF</span>
        <h4>Seafood Consumer Concern Form</h4>
        <p>Structured form to record the product, claim, discrepancy and evidence. Use it when contacting the business or reporting to an authority.</p>
      </div>
      <div class="kit-card">
        <div class="kit-icon">📋</div>
        <span class="kit-tag">Checklist · PDF</span>
        <h4>Evidence Checklist</h4>
        <p>What to keep, photograph and document before evidence disappears. Covers packaging, receipts, labels, menus, batch codes and photographs.</p>
      </div>
      <div class="kit-card">
        <div class="kit-icon">✉️</div>
        <span class="kit-tag">Template · PDF</span>
        <h4>Sample Complaint Letter</h4>
        <p>A concise, factual template for writing to a business or regulator. Adaptable to any seafood concern.</p>
      </div>
      <div class="kit-card">
        <div class="kit-icon">🗂️</div>
        <span class="kit-tag">Directory · PDF</span>
        <h4>Australian Referral Directory</h4>
        <p>Who to contact for what: food authorities, ACCC, fisheries, biosecurity, certification bodies and urgent health contacts.</p>
      </div>
      <div class="kit-card">
        <div class="kit-icon">📊</div>
        <span class="kit-tag">Tracker · PDF</span>
        <h4>Follow-up &amp; Outcome Record</h4>
        <p>Track what happened after you reported. Record responses, reference numbers, follow-up dates and final outcomes.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 1 — Begin with the claim
     ============================================================ -->
<section class="step-section" id="steps">
  <div class="container">
    <div class="step-header">
      <div class="step-num">01</div>
      <h2>Begin with the claim</h2>
    </div>
    <div class="step-body">
      <p>Record exactly what the seafood was represented to be. The claim may have appeared on a package, retail display, menu, receipt, online platform, advertisement, certification mark, country-of-origin statement, or a verbal description by staff.</p>
      <div class="step-checklist">
        <h4>Record</h4>
        <ul>
          <li>What species or product name was used?</li>
          <li>Was it described as Australian, imported or mixed?</li>
          <li>Was a particular country, region, fishery or producer named?</li>
          <li>Was it described as wild-caught or farmed?</li>
          <li>Was it represented as fresh, frozen or previously frozen?</li>
          <li>Were sustainability, quality, weight or certification claims made?</li>
          <li>What would an ordinary consumer reasonably understand from the complete presentation?</li>
        </ul>
      </div>
      <div class="step-callout">Do not rely solely upon memory. Photograph or copy the claim wherever possible. The overall impression matters &mdash; not merely one word viewed in isolation.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 2 — Immediate health risk
     ============================================================ -->
<section class="step-section alt">
  <div class="container">
    <div class="step-header">
      <div class="step-num">02</div>
      <h2>Decide whether there is an immediate health risk</h2>
    </div>
    <div class="step-body">
      <p>Treat the matter as urgent if the seafood may have caused or could cause serious illness, allergic reaction, breathing difficulty, loss of consciousness, severe vomiting or diarrhoea, neurological symptoms, suspected chemical poisoning, injury from a foreign object, or illness affecting several people.</p>
      <p><strong style="color:var(--accent);">Seek medical assistance first. In an emergency, contact emergency services.</strong></p>
      <div class="step-checklist">
        <h4>Record</h4>
        <ul>
          <li>What was eaten</li>
          <li>How much was consumed</li>
          <li>When it was eaten</li>
          <li>When symptoms began</li>
          <li>Who was affected</li>
          <li>Any medical advice or treatment received</li>
        </ul>
      </div>
      <div class="step-callout">Do not consume more of the product to confirm your suspicion. Keep the packaging, receipt and product if it can be stored safely. Seal it, keep it separate from other food and ask the relevant health or food authority how it should be retained.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 3 — Preserve the evidence
     ============================================================ -->
<section class="step-section">
  <div class="container">
    <div class="step-header">
      <div class="step-num">03</div>
      <h2>Preserve the evidence</h2>
    </div>
    <div class="step-body">
      <p>Evidence can disappear quickly. Menus change, online descriptions are edited, packaging is discarded and seafood is consumed or deteriorates.</p>
      <div class="step-checklist">
        <h4>Evidence checklist</h4>
        <ul>
          <li>Receipt or proof of purchase</li>
          <li>Complete package and label</li>
          <li>Batch, lot, use-by and best-before information</li>
          <li>Barcode and product code</li>
          <li>Country-of-origin information</li>
          <li>Certification marks</li>
          <li>Name and address of the business</li>
          <li>Date and time of purchase</li>
          <li>Menu photographs or screenshots</li>
          <li>Online advertisements and ordering records</li>
          <li>Photographs of the product before and after preparation</li>
          <li>Any written communication with the business</li>
          <li>Names or positions of staff spoken to</li>
        </ul>
      </div>
      <div class="step-callout">Photograph all sides of a package before opening or disposing of it. Do not alter the product in an attempt to create evidence.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 4 — Describe the concern precisely
     ============================================================ -->
<section class="step-section alt">
  <div class="container">
    <div class="step-header">
      <div class="step-num">04</div>
      <h2>Describe the concern precisely</h2>
    </div>
    <div class="step-body">
      <p>Avoid broad accusations. Instead, describe the observable discrepancy.</p>
      <div class="step-checklist">
        <h4>Instead of this</h4>
        <ul>
          <li>&ldquo;This fish is fake.&rdquo;</li>
          <li>&ldquo;The restaurant is committing fraud.&rdquo;</li>
          <li>&ldquo;The product is poisonous.&rdquo;</li>
        </ul>
      </div>
      <div class="step-checklist" style="border-left-color:var(--brand);">
        <h4 style="color:var(--brand);">Try this</h4>
        <ul>
          <li>&ldquo;The menu described the fish as Australian Snapper, but staff subsequently advised that it was imported tropical snapper. I am seeking confirmation of the species and origin.&rdquo;</li>
          <li>&ldquo;The package stated a net weight of 1 kilogram. After following the stated thawing instructions, I recorded a substantial quantity of separated glaze and water.&rdquo;</li>
          <li>&ldquo;The product was advertised as fresh. The texture, liquid release and information subsequently provided by staff caused me to question whether it had previously been frozen.&rdquo;</li>
        </ul>
      </div>
      <div class="step-callout">This approach is fairer, more credible and more useful to a business or regulator.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 5 — Consumer First Decision Test
     ============================================================ -->
<section class="step-section">
  <div class="container">
    <div class="step-header">
      <div class="step-num">05</div>
      <h2>Apply the Consumer First Decision Test</h2>
    </div>
    <div class="step-body">
      <p>Before making the complaint, consider five questions:</p>
      <div class="step-checklist">
        <h4>Five questions</h4>
        <ul>
          <li>What was claimed?</li>
          <li>What evidence supports or contradicts that claim?</li>
          <li>What information is missing, inconsistent or difficult to understand?</li>
          <li>Who may have been harmed or unfairly disadvantaged?</li>
          <li>What reasonable action should follow?</li>
        </ul>
      </div>
      <div class="step-callout">The purpose is to identify the issue &mdash; not to reach a final legal or scientific conclusion without adequate evidence.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 6 — Contact the business
     ============================================================ -->
<section class="step-section alt">
  <div class="container">
    <div class="step-header">
      <div class="step-num">06</div>
      <h2>Contact the business</h2>
    </div>
    <div class="step-body">
      <p>Unless there is an urgent food-safety concern, suspected serious criminal activity or another reason not to do so, begin with the business that sold or served the seafood.</p>
      <div class="step-checklist">
        <h4>Ask calmly and specifically</h4>
        <ul>
          <li>What is the accepted or scientific name of the seafood?</li>
          <li>Where was it harvested or farmed?</li>
          <li>Was it fresh, frozen or previously frozen?</li>
          <li>What evidence supports the description?</li>
          <li>Can the supplier or batch be identified?</li>
          <li>Is there an ingredient or treatment declaration?</li>
          <li>What does the certification claim actually cover?</li>
          <li>Has the business received similar concerns?</li>
          <li>What action will it take?</li>
        </ul>
      </div>
      <div class="step-checklist" style="border-left-color:var(--brand);">
        <h4 style="color:var(--brand);">Record</h4>
        <ul>
          <li>Date of contact</li>
          <li>Name or position of the person responding</li>
          <li>Explanation given</li>
          <li>Any action promised</li>
          <li>Expected response date</li>
        </ul>
      </div>
      <div class="step-callout">A responsible business may be able to explain the issue or correct an honest mistake immediately. Referring vaguely to &ldquo;the supplier&rdquo; does not resolve the question.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 7 — Put the complaint in writing
     ============================================================ -->
<section class="step-section">
  <div class="container">
    <div class="step-header">
      <div class="step-num">07</div>
      <h2>Put the complaint in writing</h2>
    </div>
    <div class="step-body">
      <p>A written complaint should be concise and factual.</p>
      <div class="step-checklist">
        <h4>Sample complaint letter — include</h4>
        <ul>
          <li>Your name and preferred contact details</li>
          <li>The business and location</li>
          <li>Product or meal purchased</li>
          <li>Date and approximate time</li>
          <li>Exact description or claim</li>
          <li>Amount paid</li>
          <li>Reason for concern</li>
          <li>Evidence attached</li>
          <li>Any health consequences</li>
          <li>Previous contact with the business</li>
          <li>The outcome requested</li>
        </ul>
      </div>
      <p>Reasonable requested outcomes might include: an explanation, correction of a menu or label, refund or replacement, supplier verification, withdrawal of affected product, investigation of the batch, notification of other customers, staff training, or referral to the appropriate authority.</p>
      <div class="step-callout">Allow a reasonable response period for a non-urgent matter &mdash; commonly around ten business days. Serious health or safety concerns should not wait for an ordinary complaint timetable.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 8 — Send it to the right place
     ============================================================ -->
<section class="step-section alt">
  <div class="container">
    <div class="step-header">
      <div class="step-num">08</div>
      <h2>Send the concern to the right place</h2>
    </div>
    <div class="step-body">
      <p>Different organisations perform different functions. Sending a report to the wrong body can delay action.</p>
    </div>
  </div>
</section>

<!-- ============== REFERRAL DIRECTORY ============== -->
<section class="referral-section" id="referral">
  <div class="container">
    <div class="section-eyebrow">Australian Referral Directory</div>
    <h2 class="section-h" style="max-width:none;">Send the concern to <strong>the right place.</strong></h2>
    <p class="section-sub">Different organisations perform different functions. Match your concern to the appropriate pathway.</p>
    <div class="referral-grid">
      <div class="referral-card">
        <h4>Illness, contamination, allergens or food-safety concerns</h4>
        <p>Local council or state/territory food enforcement or health authority</p>
      </div>
      <div class="referral-card">
        <h4>Possible breach of the Food Standards Code</h4>
        <p>State or territory food regulator or local council</p>
      </div>
      <div class="referral-card">
        <h4>Individual dispute, refund or consumer remedy</h4>
        <p>The business first, followed by the relevant state or territory consumer-protection agency</p>
      </div>
      <div class="referral-card">
        <h4>False or misleading advertising or product claims</h4>
        <p>Report to the ACCC; seek individual assistance through the relevant consumer-protection agency</p>
      </div>
      <div class="referral-card">
        <h4>Misleading country-of-origin claims</h4>
        <p>ACCC reporting pathway and, where relevant, the responsible food enforcement body</p>
      </div>
      <div class="referral-card">
        <h4>Short weight, inaccurate scales or packaged quantity</h4>
        <p>National Measurement Institute</p>
      </div>
      <div class="referral-card">
        <h4>Suspected illegal domestic catch or sale</h4>
        <p>Relevant state, territory or Commonwealth fisheries authority</p>
      </div>
      <div class="referral-card">
        <h4>Suspicious imported seafood or biosecurity matter</h4>
        <p>Australian Government department responsible for agriculture, fisheries and biosecurity</p>
      </div>
      <div class="referral-card">
        <h4>Misuse of a certification mark</h4>
        <p>Certification owner or scheme administrator; ACCC where the commercial claim may be misleading</p>
      </div>
      <div class="referral-card">
        <h4>Incorrect or confusing fish name</h4>
        <p>Business first; relevant food or consumer regulator where the description may breach applicable law</p>
      </div>
      <div class="referral-card">
        <h4>Wider or recurring seafood-integrity pattern</h4>
        <p>Relevant regulator and, where appropriate, Seafood Consumers Association or I-CADMUS for de-identified intelligence</p>
      </div>
      <div class="referral-card">
        <h4>Urgent health advice</h4>
        <p>Emergency services (000) or Poisons Information Centre (13 11 26)</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 9 — Escalate proportionately
     ============================================================ -->
<section class="step-section">
  <div class="container">
    <div class="step-header">
      <div class="step-num">09</div>
      <h2>Escalate proportionately</h2>
    </div>
    <div class="step-body">
      <p>Escalate the matter when the business does not respond, the explanation is inadequate, the product may be unsafe, other consumers may be affected, the same problem appears repeatedly, records or claims appear deliberately false, or the matter may involve illegal fishing, false documentation or organised activity.</p>
      <div class="step-checklist">
        <h4>When escalating, provide</h4>
        <ul>
          <li>A brief chronology</li>
          <li>The original claim</li>
          <li>The discrepancy</li>
          <li>The response received</li>
          <li>The evidence</li>
          <li>Why the matter may be wider than one transaction</li>
          <li>The action you are requesting</li>
        </ul>
      </div>
      <div class="step-callout">Do not send unsupported accusations to media or publish identifying allegations online. Public allegations can be unfair, legally risky and damaging to an investigation.</div>
    </div>
  </div>
</section>

<!-- ============================================================
     STEP 10 — Follow up and record the outcome
     ============================================================ -->
<section class="step-section alt">
  <div class="container">
    <div class="step-header">
      <div class="step-num">10</div>
      <h2>Follow up and record the outcome</h2>
    </div>
    <div class="step-body">
      <p>A satisfactory response is not always a prosecution or public announcement. Depending on circumstances, an appropriate outcome may include a clear explanation, correction of inaccurate information, refund or replacement, product withdrawal, supplier investigation, scientific testing, staff education, amended procurement controls, or formal enforcement.</p>
      <div class="step-callout">The central questions are whether the consumer was treated fairly, whether any risk was controlled and whether the organisation learned from the incident.</div>
    </div>
  </div>
</section>

<!-- ============== CONCERN FORM ============== -->
<section class="form-section" id="form">
  <div class="container">
    <div class="section-eyebrow">Seafood Consumer Concern Form</div>
    <h2 class="section-h" style="max-width:none;">Record your concern.</h2>
    <p class="section-sub">Complete this form to create a structured record of your concern. You can use it when contacting the business or reporting to an authority.</p>

    <div class="concern-form">
      <h3>Seafood Consumer Concern Record</h3>
      <p>Complete as much as you can. You do not need to fill in every field.</p>

      <form onsubmit="event.preventDefault(); document.getElementById('form-success').style.display='block'; this.querySelector('.form-submit').textContent='Saved — thank you.';">

        <div class="form-row">
          <div class="form-group">
            <label for="cf-date">Date and time of purchase</label>
            <input type="datetime-local" id="cf-date" />
          </div>
          <div class="form-group">
            <label for="cf-location">Location / address</label>
            <input type="text" id="cf-location" placeholder="Business name and address" />
          </div>
        </div>

        <div class="form-group">
          <label for="cf-business">Business name</label>
          <input type="text" id="cf-business" placeholder="Name of the business that sold or served the seafood" />
        </div>

        <div class="form-group">
          <label for="cf-product">Product or meal</label>
          <input type="text" id="cf-product" placeholder="e.g. &quot;Australian Snapper fillet&quot; or &quot;Fish of the Day&quot;" />
        </div>

        <div class="form-group">
          <label for="cf-claim">Description or claim made</label>
          <textarea id="cf-claim" placeholder="Record exactly what was stated on the label, menu, display or by staff"></textarea>
        </div>

        <div class="form-group">
          <label for="cf-concern">Why I am concerned</label>
          <textarea id="cf-concern" placeholder="Describe the discrepancy — what you observed, what seemed inconsistent"></textarea>
        </div>

        <div class="form-group">
          <label for="cf-amount">Amount paid</label>
          <input type="text" id="cf-amount" placeholder="e.g. $32.50" />
        </div>

        <div class="form-group">
          <label>Evidence retained</label>
          <div class="form-checkboxes">
            <label><input type="checkbox" /> Receipt</label>
            <label><input type="checkbox" /> Package and label</label>
            <label><input type="checkbox" /> Photographs</label>
            <label><input type="checkbox" /> Menu or advertisement</label>
            <label><input type="checkbox" /> Batch or lot number</label>
            <label><input type="checkbox" /> Correspondence</label>
            <label><input type="checkbox" /> Medical information</label>
            <label><input type="checkbox" /> Weight or quantity record</label>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="cf-contacted">Business contacted on</label>
            <input type="date" id="cf-contacted" />
          </div>
          <div class="form-group">
            <label for="cf-person">Person or position contacted</label>
            <input type="text" id="cf-person" placeholder="Name or role" />
          </div>
        </div>

        <div class="form-group">
          <label for="cf-response">Response received</label>
          <textarea id="cf-response" placeholder="Summarise the business's response"></textarea>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="cf-authority">Authority or organisation notified</label>
            <input type="text" id="cf-authority" placeholder="e.g. ACCC, local council, state food authority" />
          </div>
          <div class="form-group">
            <label for="cf-ref">Reference or complaint number</label>
            <input type="text" id="cf-ref" placeholder="If one was provided" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="cf-followup">Follow-up date</label>
            <input type="date" id="cf-followup" />
          </div>
          <div class="form-group">
            <label for="cf-outcome">Outcome</label>
            <input type="text" id="cf-outcome" placeholder="Resolved, pending, escalated…" />
          </div>
        </div>

        <button type="submit" class="form-submit">Save this record</button>
      </form>

      <div id="form-success" style="display:none; margin-top:20px; padding:16px; background:rgba(0,131,143,.08); border:1px solid rgba(0,131,143,.25); border-radius:4px; color:var(--teal); font-size:14px; font-weight:600;">
        Your concern record has been saved. You can print this page or use the information to write to the business or the relevant authority.
      </div>
    </div>

    <!-- SAFEGUARDS -->
    <div class="safeguards-box">
      <h3>Important safeguards</h3>
      <ul>
        <li>The Seafood Consumer Association (SCA) is not a regulator, laboratory, emergency service or legal adviser.</li>
        <li>Submitting a report does not automatically commence an official investigation.</li>
        <li>Urgent health matters should be directed to the appropriate health or emergency authorities immediately.</li>
        <li>Consumers should avoid unsupported public allegations, which can be unfair, legally risky and damaging to investigations.</li>
        <li>Personal information will be managed according to the SCA privacy policy.</li>
        <li>De-identified information may be aggregated to identify recurring issues, improve education and direct attention towards areas requiring further investigation.</li>
        <li>Contact and referral information should be reviewed regularly. Check this page for the most current version.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============== FINAL CHECKLIST ============== -->
<section>
  <div class="container" style="max-width:860px;">
    <div class="section-eyebrow">Before you submit</div>
    <h2 class="section-h" style="max-width:none;">Final consumer checklist.</h2>
    <div class="step-checklist" style="border-left-color:var(--accent);">
      <h4 style="color:var(--accent);">Ask yourself</h4>
      <ul>
        <li>Have I recorded the exact claim?</li>
        <li>Have I kept the receipt, package and relevant photographs?</li>
        <li>Have I separated what I know from what I suspect?</li>
        <li>Have I described the discrepancy without making an unsupported accusation?</li>
        <li>Have I contacted the business, unless the matter requires urgent reporting?</li>
        <li>Am I sending the concern to the organisation with the right responsibility?</li>
        <li>Have I explained the outcome I am seeking?</li>
        <li>Have I kept a copy and set a follow-up date?</li>
        <li>Could this be part of a wider pattern?</li>
        <li>What change would prevent the problem happening again?</li>
      </ul>
    </div>
    <div class="step-callout" style="text-align:center;font-style:normal;margin-top:32px;">
      <strong>An informed consumer complaint is not an attack upon seafood.<br>It is a contribution to a seafood system worthy of trust.</strong>
    </div>
  </div>
</section>

<!-- ============== NEWSLETTER ============== -->
<section class="newsletter-section" id="newsletter">
  <div class="container">
    <div class="newsletter-card">
      <h3>Stay informed. Join the SCA network.</h3>
      <p>Receive consumer alerts, seafood fraud updates and integrity guidance from the Seafood Consumer Association.</p>
      <form class="newsletter-form" onsubmit="event.preventDefault(); this.querySelector('button').textContent='Thank you — you\'re signed up.'; this.querySelector('button').disabled=true;">
        <label for="ca-name">Full name</label>
        <input type="text" id="ca-name" placeholder="Your full name" required />
        <label for="ca-email">Email</label>
        <input type="email" id="ca-email" placeholder="you@email.com" required />
        <button type="submit">Join the SCA consumer network <span class="arrow">→</span></button>
      </form>
      <p class="newsletter-note">Your information is held by the Seafood Consumer Association and will not be shared with third parties. You can unsubscribe at any time.</p>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Learn to <strong>spot fraud before it reaches your plate.</strong></h2>
        <p>The I-CADMUS Consumer Certification is free, self-paced and gives you the language and tools to name, classify and report seafood fraud.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.php" class="btn btn-primary">Get certified free <span class="arrow">→</span></a>
        <a href="consumers.php" class="btn btn-outline">Consumer hub</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
  // Smooth scroll for hero links
  document.querySelectorAll('.ca-hero-actions a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });
</script>

</body>
</html>
