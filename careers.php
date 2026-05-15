<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Careers | I-CADMUS — Join the team</title>
<meta name="description" content="Join the I-CADMUS team and help build the global standard for seafood integrity. View current openings at the Seafood Consumer Association." />

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
  .utility-bar .container { display: flex; justify-content: space-between; align-items: center; height: 38px; }
  .utility-bar a { color: rgba(255,255,255,0.85); transition: color 0.15s; padding: 0 14px; border-right: 1px solid rgba(255,255,255,0.12); line-height: 38px; }
  .utility-bar a:last-child { border-right: none; }
  .utility-bar a:hover { color: #fff; }
  .utility-locale { display: flex; align-items: center; gap: 8px; }
  .utility-locale select { background: transparent; border: none; color: rgba(255,255,255,0.85); font-family: inherit; font-size: 13px; cursor: pointer; }
  .utility-locale select option { background: var(--brand-dark); }

  /* =========================================================
     PRIMARY NAV
     ========================================================= */
  .header { background: #fff; border-bottom: 1px solid var(--line); position: sticky; top: 0; z-index: 100; box-shadow: var(--shadow-sm); }
  .header .container { display: flex; align-items: center; height: 76px; gap: 40px; }
  .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; font-size: 22px; color: var(--brand); letter-spacing: -0.01em; flex-shrink: 0; }
  .brand-mark { width: 44px; height: 44px; background: var(--brand); color: #fff; display: grid; place-items: center; font-size: 22px; font-weight: 700; border-radius: 4px; position: relative; }
  .brand-mark::after { content: ''; position: absolute; bottom: 6px; left: 8px; right: 8px; height: 2px; background: var(--accent); }
  .brand small { display: block; font-size: 11px; font-weight: 400; color: var(--ink-3); letter-spacing: 0.04em; text-transform: uppercase; margin-top: 2px; }
  .nav-primary { display: flex; gap: 4px; flex: 1; }
  .nav-primary > li { list-style: none; position: relative; }
  .nav-primary > li > a { display: flex; align-items: center; gap: 6px; height: 76px; padding: 0 16px; font-size: 15px; font-weight: 500; color: var(--ink-2); border-bottom: 3px solid transparent; transition: color 0.15s, border-color 0.15s; }
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

  .btn { display: inline-flex; align-items: center; gap: 8px; padding: 11px 22px; font-size: 14px; font-weight: 600; border-radius: 2px; transition: all 0.15s; cursor: pointer; border: 1px solid transparent; line-height: 1.2; }
  .btn-primary { background: var(--accent); color: #fff; border-color: var(--accent); }
  .btn-primary:hover { background: var(--accent-dark); border-color: var(--accent-dark); }
  .btn-secondary { background: var(--brand); color: #fff; border-color: var(--brand); }
  .btn-secondary:hover { background: var(--brand-dark); }
  .btn-outline { background: transparent; color: var(--brand); border-color: var(--brand); }
  .btn-outline:hover { background: var(--brand); color: #fff; }
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     SECTION UTILITIES
     ========================================================= */
  section { padding: 100px 0; }
  .section-eyebrow { color: var(--accent); font-size: 13px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 16px; display: inline-flex; align-items: center; gap: 12px; }
  .section-eyebrow::before { content: ''; width: 32px; height: 2px; background: var(--accent); }
  .section-h { font-family: var(--serif); font-size: clamp(34px, 4vw, 48px); line-height: 1.1; font-weight: 400; letter-spacing: -0.015em; color: var(--brand); margin-bottom: 20px; max-width: 22ch; }
  .section-h strong { font-weight: 600; }
  .section-sub { font-size: 18px; color: var(--ink-2); max-width: 60ch; line-height: 1.55; margin-bottom: 56px; }

  .cta-band { background: var(--brand); background-image: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%); color: #fff; padding: 80px 0; position: relative; overflow: hidden; }
  .cta-band::before { content: ''; position: absolute; top: 0; right: 0; width: 50%; height: 100%; background: radial-gradient(circle at 80% 50%, rgba(0,131,143,0.3), transparent 70%); }
  .cta-band-grid { display: grid; grid-template-columns: 1.5fr auto; gap: 48px; align-items: center; position: relative; z-index: 1; }
  .cta-band h2 { font-family: var(--serif); font-size: clamp(28px, 3vw, 40px); font-weight: 400; line-height: 1.2; margin-bottom: 12px; color: #fff; }
  .cta-band h2 strong { font-weight: 600; }
  .cta-band p { font-size: 16px; color: rgba(255,255,255,0.85); max-width: 60ch; }
  .cta-band-actions { display: flex; gap: 12px; flex-wrap: wrap; }
  .cta-band .btn-outline { color: #fff; border-color: rgba(255,255,255,0.4); }
  .cta-band .btn-outline:hover { background: #fff; color: var(--brand); }

  /* =========================================================
     PAGE HERO
     ========================================================= */
  .page-hero { background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%); color: #fff; position: relative; overflow: hidden; padding: 80px 0 100px; }
  .page-hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%), radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%); pointer-events: none; }
  .page-hero::after { content: ''; position: absolute; right: -100px; bottom: -100px; width: 600px; height: 600px; background-image: radial-gradient(circle at center, rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 24px 24px; pointer-events: none; mask-image: radial-gradient(circle at center, black, transparent 70%); -webkit-mask-image: radial-gradient(circle at center, black, transparent 70%); }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; flex-wrap: wrap; }
  .breadcrumb a { color: rgba(255,255,255,0.85); transition: color 0.15s; }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow { display: inline-flex; align-items: center; gap: 12px; font-size: 13px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.85); padding: 6px 14px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18); border-radius: 100px; margin-bottom: 24px; }
  .page-hero h1 { font-family: var(--serif); font-weight: 400; font-size: clamp(36px, 5vw, 56px); line-height: 1.1; letter-spacing: -0.015em; margin-bottom: 20px; color: #fff; }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 60ch; line-height: 1.5; }

  /* =========================================================
     CAREERS-SPECIFIC STYLES
     ========================================================= */
  .values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: var(--line-2);
    border: 1px solid var(--line-2);
    margin-top: 48px;
  }
  .value-item {
    background: #fff;
    padding: 36px 28px;
    transition: background 0.2s;
  }
  .value-item:hover { background: var(--brand); }
  .value-item:hover .value-num,
  .value-item:hover h3,
  .value-item:hover p { color: #fff; }
  .value-item:hover .value-num { color: rgba(255,255,255,0.6); }
  .value-num {
    font-family: var(--serif);
    font-size: 13px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
    transition: color 0.2s;
  }
  .value-item h3 { font-family: var(--serif); font-size: 24px; font-weight: 600; color: var(--brand); margin-bottom: 12px; line-height: 1.2; transition: color 0.2s; }
  .value-item p { font-size: 14px; color: var(--ink-2); line-height: 1.55; transition: color 0.2s; }

  .openings-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
    margin-top: 8px;
  }
  .job-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 36px 40px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 32px;
    align-items: start;
    transition: border-color 0.2s, box-shadow 0.2s;
    position: relative;
    overflow: hidden;
  }
  .job-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--brand);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s;
  }
  .job-card:hover { border-color: var(--brand-light); box-shadow: var(--shadow-md); }
  .job-card:hover::before { transform: scaleX(1); }
  .job-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 12px;
  }
  .job-tag .dot {
    width: 6px;
    height: 6px;
    background: #4ade80;
    border-radius: 50%;
    box-shadow: 0 0 0 2px rgba(74,222,128,0.25);
  }
  .job-card h3 { font-family: var(--serif); font-size: 24px; font-weight: 600; color: var(--brand); margin-bottom: 10px; line-height: 1.2; }
  .job-meta { display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 16px; }
  .job-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: var(--ink-3);
    font-weight: 500;
  }
  .job-meta-item::before { content: ''; width: 4px; height: 4px; background: var(--muted); border-radius: 50%; }
  .job-meta-item:first-child::before { display: none; }
  .job-card p { font-size: 15px; color: var(--ink-2); line-height: 1.6; }
  .job-cta { display: flex; flex-direction: column; align-items: flex-end; gap: 12px; padding-top: 4px; }

  .open-cta {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 48px;
    margin-top: 48px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 40px;
    align-items: center;
    border-left: 4px solid var(--gold);
  }
  .open-cta h3 { font-family: var(--serif); font-size: 26px; font-weight: 600; color: var(--brand); margin-bottom: 8px; line-height: 1.25; }
  .open-cta p { font-size: 16px; color: var(--ink-2); line-height: 1.6; max-width: 55ch; }

  /* FOOTER */
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

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .values-grid { grid-template-columns: 1fr 1fr; }
    .job-card { grid-template-columns: 1fr; gap: 20px; }
    .job-cta { align-items: flex-start; }
    .open-cta { grid-template-columns: 1fr; gap: 24px; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
    .page-hero { padding: 56px 0 72px; }
  }
  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .values-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
    .job-card { padding: 24px 20px; }
    .open-cta { padding: 32px 24px; }
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
        <span class="current">Careers</span>
      </div>
      <div class="page-hero-eyebrow">Work with us</div>
      <h1>Work <strong>with us.</strong></h1>
      <p class="lede">Help build the global standard for seafood integrity. We are a small, mission-driven team doing work that matters — and we are looking for people who care deeply about food transparency, rigorous thinking, and real-world impact.</p>
    </div>
  </div>
</section>

<!-- ============== OUR VALUES ============== -->
<section style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">What we stand for</div>
    <h2 class="section-h">Our <strong>values.</strong></h2>
    <p class="section-sub">Everything we do is shaped by four principles. If these resonate with you, we want to hear from you.</p>

    <div class="values-grid">
      <div class="value-item reveal">
        <div class="value-num">01</div>
        <h3>Transparency</h3>
        <p>We say what we find, even when it is inconvenient. The framework exists because opacity in the seafood supply chain causes real harm — and we hold ourselves to the same standard we apply to others.</p>
      </div>
      <div class="value-item reveal">
        <div class="value-num">02</div>
        <h3>Rigour</h3>
        <p>Every category in the I-CADMUS taxonomy is grounded in evidence. We do not publish what we cannot defend. Our team is expected to check, challenge, and verify — not just produce.</p>
      </div>
      <div class="value-item reveal">
        <div class="value-num">03</div>
        <h3>Impact</h3>
        <p>We build things that get used. The test of any piece of work here is whether it changes a decision, improves a policy, or helps a consumer understand what they are buying. Output matters.</p>
      </div>
      <div class="value-item reveal">
        <div class="value-num">04</div>
        <h3>Independence</h3>
        <p>We are not funded by the industry we assess. Our findings are not for sale. We protect the independence of the framework above commercial convenience — and every person we hire must be comfortable with that boundary.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CURRENT OPENINGS ============== -->
<section id="openings">
  <div class="container">
    <div class="section-eyebrow">Current Openings</div>
    <h2 class="section-h">Open <strong>roles.</strong></h2>
    <p class="section-sub">All positions are fully remote. We hire across time zones and do not require relocation.</p>

    <div class="openings-list">

      <!-- Role 1 -->
      <div class="job-card reveal">
        <div>
          <div class="job-tag"><span class="dot"></span>Open</div>
          <h3>Framework Research Analyst</h3>
          <div class="job-meta">
            <span class="job-meta-item">Remote</span>
            <span class="job-meta-item">Part-time</span>
            <span class="job-meta-item">Research &amp; Policy</span>
          </div>
          <p>You will support the ongoing development and maintenance of the I-CADMUS taxonomy — reviewing case studies, updating the publications register, and synthesising academic and regulatory literature across all seven fraud categories. This role suits a researcher, postgraduate, or policy analyst with a background in food science, public health, or regulatory affairs who wants meaningful part-time work with a direct public-interest mission.</p>
        </div>
        <div class="job-cta">
          <a href="contact.php" class="btn btn-primary">Express Interest <span class="arrow">→</span></a>
        </div>
      </div>

      <!-- Role 2 -->
      <div class="job-card reveal">
        <div>
          <div class="job-tag"><span class="dot"></span>Open</div>
          <h3>Certification Programme Coordinator</h3>
          <div class="job-meta">
            <span class="job-meta-item">Remote</span>
            <span class="job-meta-item">Full-time</span>
            <span class="job-meta-item">Education &amp; Partnerships</span>
          </div>
          <p>You will manage the day-to-day delivery of the I-CADMUS certification programme — coordinating with partner universities, supporting enrolled learners, maintaining assessment records, and helping us build the systems and processes needed as enrolments grow. The ideal candidate brings experience in adult education, learning management systems, or academic programme administration, with a demonstrated ability to work independently across multiple stakeholder relationships.</p>
        </div>
        <div class="job-cta">
          <a href="contact.php" class="btn btn-primary">Express Interest <span class="arrow">→</span></a>
        </div>
      </div>

      <!-- Role 3 -->
      <div class="job-card reveal">
        <div>
          <div class="job-tag"><span class="dot"></span>Open</div>
          <h3>Business Development Lead</h3>
          <div class="job-meta">
            <span class="job-meta-item">Remote</span>
            <span class="job-meta-item">Full-time</span>
            <span class="job-meta-item">Partnerships &amp; Growth</span>
          </div>
          <p>You will lead the expansion of the I-CADMUS partner network — identifying and approaching prospective academic anchors, industry associations, and government bodies in target markets, and managing the pipeline from first contact to signed partnership agreement. This role requires a confident relationship-builder with experience in B2B business development, ideally within education, food industry, or professional services, who is motivated by purpose as much as performance.</p>
        </div>
        <div class="job-cta">
          <a href="contact.php" class="btn btn-primary">Express Interest <span class="arrow">→</span></a>
        </div>
      </div>

    </div>

    <!-- Don't see your role -->
    <div class="open-cta reveal">
      <div>
        <h3>Don't see your role?</h3>
        <p>We are a small and growing organisation. If you believe your skills would benefit the mission — whether in communications, data science, legal, or anything else — send us a short note explaining how. We read every message.</p>
      </div>
      <div>
        <a href="contact.php" class="btn btn-secondary">Get in touch <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Want to understand <strong>what we do first</strong>?</h2>
        <p>Read the framework, explore our certification programme, and learn about the Seafood Consumer Association before reaching out.</p>
      </div>
      <div class="cta-band-actions">
        <a href="about.php" class="btn btn-primary">About us <span class="arrow">→</span></a>
        <a href="framework.php" class="btn btn-outline">The framework</a>
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
