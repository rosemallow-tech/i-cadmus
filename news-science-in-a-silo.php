<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Science in a Silo | I-CADMUS Newsroom</title>
<meta name="description" content="Australia possesses world-class forensic food science, yet lacks the systemic national regulatory framework required to put that science to work for everyday consumers." />

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
  .article-tag-pill { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #fff; background: var(--accent); padding: 5px 12px; border-radius: 2px; margin-bottom: 20px; }
  .page-hero h1 { font-family: var(--serif); font-weight: 400; font-size: clamp(32px, 4.5vw, 52px); line-height: 1.1; letter-spacing: -0.015em; margin-bottom: 20px; color: #fff; }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 65ch; line-height: 1.55; margin-bottom: 32px; }
  .article-byline { display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: rgba(255,255,255,0.75); border-top: 1px solid rgba(255,255,255,0.15); padding-top: 24px; }
  .article-byline strong { color: #fff; }

  /* Article body */
  .article-body { padding: 80px 0 100px; }
  .article-layout { display: grid; grid-template-columns: 1fr 300px; gap: 64px; align-items: start; }
  .article-content h2 { font-family: var(--serif); font-size: clamp(24px, 2.5vw, 32px); font-weight: 600; color: var(--brand); line-height: 1.2; margin: 48px 0 16px; }
  .article-content h2:first-child { margin-top: 0; }
  .article-content p { font-size: 18px; color: var(--ink-2); line-height: 1.7; margin-bottom: 20px; }
  .article-content ul, .article-content ol { margin: 0 0 20px 24px; }
  .article-content li { font-size: 18px; color: var(--ink-2); line-height: 1.7; margin-bottom: 10px; }
  .article-content li strong { color: var(--ink); }
  .article-content blockquote { border-left: 4px solid var(--accent); padding: 16px 24px; margin: 32px 0; background: var(--bg-soft); border-radius: 0 4px 4px 0; }
  .article-content blockquote p { font-family: var(--serif); font-size: 20px; color: var(--brand); margin: 0; line-height: 1.5; font-style: italic; }
  .article-content .callout { background: var(--bg-soft); border: 1px solid var(--line-2); border-radius: 6px; padding: 24px 28px; margin: 32px 0; }
  .article-content .callout p { font-size: 16px; margin: 0; }
  .article-content .callout strong { color: var(--brand); }
  .article-cta { background: linear-gradient(135deg, var(--brand-dark), var(--brand)); color: #fff; border-radius: 8px; padding: 40px; margin-top: 48px; }
  .article-cta p { color: rgba(255,255,255,0.85); font-size: 16px; margin-bottom: 20px; }
  .article-cta h3 { font-family: var(--serif); font-size: 26px; font-weight: 600; color: #fff; margin-bottom: 12px; line-height: 1.2; }

  /* Sidebar */
  .article-sidebar { position: sticky; top: 100px; }
  .sidebar-card { background: var(--bg-soft); border: 1px solid var(--line); border-radius: 6px; padding: 24px; margin-bottom: 24px; }
  .sidebar-card h4 { font-size: 13px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: var(--accent); margin-bottom: 16px; }
  .sidebar-card ul { list-style: none; }
  .sidebar-card li { margin-bottom: 12px; }
  .sidebar-card li a { font-size: 14px; color: var(--brand); font-weight: 500; display: flex; align-items: flex-start; gap: 8px; line-height: 1.4; }
  .sidebar-card li a:hover { text-decoration: underline; }
  .sidebar-card li a::before { content: '→'; flex-shrink: 0; color: var(--accent); }
  .sidebar-stat { text-align: center; }
  .sidebar-stat .num { font-family: var(--serif); font-size: 44px; font-weight: 600; color: var(--brand); line-height: 1; margin-bottom: 6px; }
  .sidebar-stat .label { font-size: 13px; color: var(--ink-3); text-transform: uppercase; letter-spacing: 0.06em; }
  .sidebar-divider { border: none; border-top: 1px solid var(--line-2); margin: 16px 0; }

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

  /* Nav toggle for mobile */
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
        <span class="current">Science in a Silo</span>
      </div>
      <div class="article-tag-pill">Analysis · Policy</div>
      <h1>Science in a Silo: The Shiny Tech and <strong>Fractured Strategy</strong> of Australia's Seafood Traceability.</h1>
      <p class="lede">Australia possesses world-class forensic food science. Yet a landmark June 2026 workshop revealed the fatal paradox: elite provenance technology advances in isolated silos while baseline regulatory changes go uncommunicated — and criminals selling counterfeit fish keep winning.</p>
      <div class="article-byline">
        <span><strong>Author:</strong> Seafood Consumers Association (SCA)</span>
        <span><strong>Published:</strong> 17 June 2026</span>
      </div>
    </div>
  </div>
</section>

<section class="article-body">
  <div class="container">
    <div class="article-layout">

      <div class="article-content">

        <p>On June 2, 2026, the Australian Nuclear Science and Technology Organisation (ANSTO) hosted its highly anticipated Seafood Provenance Workshop. The event gathered 40–50 stakeholders in person and online, to showcase an undeniable triumph of domestic nuclear science.</p>

        <p>Since 2019, with funding backed heavily by the Department of Agriculture, Fisheries and Forestry (DAFF), ANSTO has been developing a novel provenance technology. By combining handheld X-ray fluorescence (XRF) analysis with an AI-powered algorithm, researchers have found a way to scan a piece of seafood and match its elemental profile to a specific geographic region. In simple terms, it maps a "geographic fingerprint" across top-order, mid-level, and benthic species. It is an extraordinary technological achievement.</p>

        <p>But from the perspective of the Seafood Consumers Association (SCA), the workshop highlighted a glaring, frustrating paradox: Australia possesses world-class forensic food science, yet we are completely lacking the systemic, national regulatory framework required to put that science to work for everyday consumers.</p>

        <h2>The Massive Scale of Deception</h2>

        <p>The workshop kicked off by laying bare the staggering economic and human cost of food deception. Globally, food fraud is estimated to be a <strong>$50 billion problem</strong>, costing Australia alone <strong>$2 to $3 billion annually</strong>. But it is not just a financial crime; it is a critical public health threat.</p>

        <p>Dr. Debashish (Deba) Mazumder from ANSTO pointed out that globally, <strong>1.6 million people fall ill every single day</strong> from foodborne sickness, resulting in 400,000 to 500,000 deaths annually. Whether it is consumers buying "free-range" chicken and unknowingly receiving "corn-fed" substitutes, or diners buying premium local fish and getting imported product instead — fraud thrives in the dark.</p>

        <blockquote>
          <p>Far more "Coffin Bay oysters" are sold across retail counters than are actually harvested from those waters. Criminals routinely hijack iconic regional names to clear unverified, cheaper oysters from other regions.</p>
        </blockquote>

        <p>Take South Australia's iconic Coffin Bay, for instance: the workshop highlighted this exact problem — a pattern of geographic fraud that undermines both consumers and the legitimate producers who built those regional reputations.</p>

        <h2>The Technical Reality: "DNA Does Not Prove Provenance"</h2>

        <p>One of the most sharp-shooting insights of the day came from Erik Poole of the Sydney Fish Market (SFM), which provided the verified wild samples (ranging from northern to southern NSW) to build ANSTO's reference database. Poole dropped a truth bomb that every seafood consumer needs to understand:</p>

        <blockquote>
          <p>"DNA does not prove provenance."</p>
        </blockquote>

        <p>A DNA test can tell you <em>what species</em> a fish is, but it cannot tell you <em>where it was caught</em>. To prove geographic origin, scientists must rely on trace element analysis, stable isotope testing, water sample profiling, and nuclear scanning.</p>

        <p>The operational hurdles are immense. The Sydney Fish Market alone sells over <strong>500 different species</strong>. When fraud occurs, retailers naturally defend themselves with a shield of "not from my shop," making bulletproof, unassailable evidence mandatory.</p>

        <p>The holy grail of enforcement is a handheld XRF device. Imagine a local council food inspector walking into a restaurant or market, scanning a fillet on the spot, and instantly exposing a fraud. Such a tool would revolutionise food safety, origin tracking, and environmental monitoring (such as detecting toxic algal blooms).</p>

        <h2>The Broken Landscape: Progress in Isolation</h2>

        <p>The second half of the workshop showcased how these nuclear fingerprinting models are expanding. We heard brilliant presentations detailing:</p>

        <ul>
          <li><strong>The National Measurement Institute (NMI):</strong> General Manager Tim Stobaus discussed using Nuclear Magnetic Resonance (NMR) to trace authenticity in honey and wine, noting strong interest from the Olive Oil Council.</li>
          <li><strong>DCCEEW:</strong> A $1.2 billion data assurance project mapping coral reef harvesting to secure a premium $30–40 million export industry.</li>
          <li><strong>NAAKPA:</strong> CEO Paul Saeki highlighted how indigenous bushfoods are utilising provenance tech to protect traditional knowledge, securing millions in grants from DAFF and the Indigenous Land &amp; Sea Council.</li>
          <li><strong>Australian Garlic Producers:</strong> Partnering with ANSTO to safeguard local farming roots against cheaper, potentially bleached imports.</li>
        </ul>

        <div class="callout">
          <p><strong>But here is the catch:</strong> This is brilliant science happening in deep, isolated silos. While DAFF pours millions into separate, fragmented traceability projects, the broader Australian seafood ecosystem remains incredibly vulnerable. Erik Poole reminded the room that Australia remains reliant on imports for over <strong>70% of its seafood consumption</strong>.</p>
        </div>

        <h2>The Looming 1 July 2026 Cliff</h2>

        <p>The absolute proof of this systemic disconnect came during a presentation by Dr. Igor Pirozzi (NSW DPI Fisheries / Aquaculture Research Advisory Committee). He rightfully raised the critical importance of mandatory seafood labelling in the hospitality sector and pointed to the <strong>Country of Origin Labelling (CoOL) legislation coming into effect on July 1, 2026</strong>.</p>

        <p>Astonishingly, it became apparent that many food sector researchers and stakeholders in the room were <strong>completely unaware</strong> that this major regulatory shift takes effect next month.</p>

        <p>This is the fatal flaw in Australia's current strategy. We are funding elite, multi-million-dollar nuclear scanning tools, yet we aren't even successfully communicating baseline regulatory changes to the industry players operating on the ground.</p>

        <h2>The SCA Verdict: Moving from Silos to the Shop Floor</h2>

        <p>The Seafood Consumers Association applauds ANSTO, DAFF, and their collaborators for their undeniable scientific breakthroughs. Knowing that we can geolocate an octopus or an oyster using trace elements is fantastic. But shiny technology will not stop seafood fraud if it remains trapped in a scientific silo.</p>

        <p>We don't just need highly accurate lab tools. We need a unified, national capability framework that integrates this science directly into everyday consumer protection. If a council inspector doesn't have that handheld scanner, and if hospitality operators don't even know the labelling laws are changing, the criminals using fake names to sell counterfeit fish will keep winning.</p>

        <p>It's time to stop funding isolated science projects and start building a coordinated, unassailable wall of transparency across the entire Australian food supply chain.</p>

        <p>For example, we have an Australian Fish Names Standard AS5300 (AFNS) which is globally recognised (it has won awards) — yet this is still a <strong>voluntary</strong> code in the FSANZ Food Standards Code. If it were <strong>mandatory</strong>, there would be real teeth in the process. Consumers, through their tax dollars, have shared in the minimum $6 million-plus that industry research has invested in the AFNS. That investment deserves enforcement.</p>

        <div class="article-cta">
          <h3>Join us in demanding systemic change.</h3>
          <p>What do you think? Should the government prioritise funding local enforcement tools or high-end lab research? Join the Seafood Consumers Association and help us demand real, systemic change.</p>
          <p style="font-size:14px;color:rgba(255,255,255,0.7);margin-bottom:24px;font-style:italic;">"26 Million Voices. One Seafood Future." — www.seafoodconsumers.global</p>
          <a href="contact.php" class="btn btn-primary">Contact Us <span class="arrow">→</span></a>
        </div>

      </div>

      <aside class="article-sidebar">
        <div class="sidebar-card">
          <h4>Key Statistics</h4>
          <div class="sidebar-stat">
            <div class="num">$50B</div>
            <div class="label">Global annual food fraud cost</div>
          </div>
          <hr class="sidebar-divider">
          <div class="sidebar-stat">
            <div class="num">$2–3B</div>
            <div class="label">Cost to Australia annually</div>
          </div>
          <hr class="sidebar-divider">
          <div class="sidebar-stat">
            <div class="num">70%</div>
            <div class="label">of Australia's seafood is imported</div>
          </div>
          <hr class="sidebar-divider">
          <div class="sidebar-stat">
            <div class="num">1.6M</div>
            <div class="label">people fall ill daily from foodborne sickness globally</div>
          </div>
        </div>

        <div class="sidebar-card">
          <h4>Related Pages</h4>
          <ul>
            <li><a href="framework.php">The I-CADMUS Framework</a></li>
            <li><a href="counterfeit.php">Counterfeit &amp; Fake Labels</a></li>
            <li><a href="misrepresentation.php">Origin Misrepresentation</a></li>
            <li><a href="substitution.php">Species Substitution</a></li>
            <li><a href="certification.php">I-CADMUS Certification</a></li>
            <li><a href="news-scite-2025-6.php">SCITe Research Synthesis 2025/6</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h4>About the Author</h4>
          <p style="font-size:14px;color:var(--ink-2);line-height:1.6;">The <strong style="color:var(--brand);">Seafood Consumers Association (SCA)</strong> is an independent, consumer-focused organisation dedicated to transparency and integrity across the Australian seafood supply chain.</p>
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
