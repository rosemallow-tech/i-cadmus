<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Privacy Policy | I-CADMUS</title>
<meta name="description" content="Privacy Policy for I-CADMUS and the Seafood Consumer Association. How we collect, use, and protect your personal information." />

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
  .utility-bar { background: var(--brand-dark); color: rgba(255,255,255,0.85); font-size: 13px; border-bottom: 1px solid rgba(255,255,255,0.08); }
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
  .btn-outline { background: transparent; color: var(--brand); border-color: var(--brand); }
  .btn-outline:hover { background: var(--brand); color: #fff; }
  .btn .arrow { font-size: 12px; }

  section { padding: 100px 0; }
  .section-eyebrow { color: var(--accent); font-size: 13px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 16px; display: inline-flex; align-items: center; gap: 12px; }
  .section-eyebrow::before { content: ''; width: 32px; height: 2px; background: var(--accent); }

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
     PRIVACY-SPECIFIC STYLES
     ========================================================= */
  .policy-layout {
    display: grid;
    grid-template-columns: 260px 1fr;
    gap: 64px;
    align-items: start;
  }

  .policy-nav {
    position: sticky;
    top: 100px;
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 24px;
  }
  .policy-nav h4 {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--ink-3);
    margin-bottom: 16px;
  }
  .policy-nav ul { list-style: none; padding: 0; }
  .policy-nav li { margin-bottom: 4px; }
  .policy-nav a {
    display: block;
    font-size: 14px;
    color: var(--ink-2);
    padding: 6px 10px;
    border-radius: 4px;
    transition: background 0.15s, color 0.15s;
    font-weight: 500;
  }
  .policy-nav a:hover { background: #fff; color: var(--brand); }

  .policy-updated {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: var(--ink-3);
    background: var(--bg-2);
    border: 1px solid var(--line-2);
    padding: 6px 14px;
    border-radius: 100px;
    margin-bottom: 40px;
  }
  .policy-updated::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--teal);
    border-radius: 50%;
  }

  .policy-body h2 {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 16px;
    line-height: 1.2;
    padding-top: 16px;
  }
  .policy-body h2:first-of-type { padding-top: 0; }

  .policy-section {
    padding-bottom: 40px;
    margin-bottom: 40px;
    border-bottom: 1px solid var(--line);
  }
  .policy-section:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }

  .policy-section p {
    font-size: 17px;
    color: var(--ink-2);
    line-height: 1.7;
    margin-bottom: 16px;
  }
  .policy-section p:last-child { margin-bottom: 0; }

  .policy-section ul {
    padding-left: 0;
    list-style: none;
    margin-bottom: 16px;
  }
  .policy-section li {
    font-size: 16px;
    color: var(--ink-2);
    line-height: 1.6;
    padding: 8px 0 8px 20px;
    border-bottom: 1px solid var(--line);
    position: relative;
  }
  .policy-section li:last-child { border-bottom: none; }
  .policy-section li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 6px;
    background: var(--brand);
    border-radius: 50%;
  }

  .policy-section a { color: var(--brand); text-decoration: underline; }
  .policy-section a:hover { color: var(--accent); }

  .policy-contact-box {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-left: 4px solid var(--teal);
    border-radius: 4px;
    padding: 24px 28px;
    margin-top: 8px;
  }
  .policy-contact-box p { font-size: 15px; color: var(--ink-2); line-height: 1.6; margin-bottom: 8px; }
  .policy-contact-box p:last-child { margin-bottom: 0; }
  .policy-contact-box a { color: var(--brand); font-weight: 600; text-decoration: none; }
  .policy-contact-box a:hover { text-decoration: underline; }

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
    .policy-layout { grid-template-columns: 1fr; gap: 0; }
    .policy-nav { position: static; margin-bottom: 40px; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
    .page-hero { padding: 56px 0 72px; }
  }
  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
  }
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
        <span class="current">Privacy Policy</span>
      </div>
      <div class="page-hero-eyebrow">Legal</div>
      <h1>Privacy <strong>Policy</strong></h1>
      <p class="lede">How the Seafood Consumer Association collects, uses, and protects the personal information you share with us.</p>
    </div>
  </div>
</section>

<!-- ============== POLICY BODY ============== -->
<section>
  <div class="container">
    <div class="policy-layout">

      <!-- Sidebar nav -->
      <aside class="policy-nav">
        <h4>Contents</h4>
        <ul>
          <li><a href="#what-we-collect">What we collect</a></li>
          <li><a href="#how-we-use">How we use it</a></li>
          <li><a href="#cookies">Cookies</a></li>
          <li><a href="#third-parties">Third parties</a></li>
          <li><a href="#your-rights">Your rights</a></li>
          <li><a href="#contact-privacy">Contact</a></li>
        </ul>
      </aside>

      <!-- Policy text -->
      <div class="policy-body">

        <div class="policy-updated">Last updated: January 2026</div>

        <div class="policy-section" id="what-we-collect">
          <h2>What we collect</h2>
          <p>We collect personal information only when you interact with us — for example, when you submit an enquiry through our contact form, enrol in a certification programme, sign up for our newsletter, or correspond with us by email.</p>
          <p>The types of information we may collect include:</p>
          <ul>
            <li>Your name and email address</li>
            <li>Your organisation and professional role (when provided)</li>
            <li>The content of messages you send to us</li>
            <li>Certification enrolment and assessment data</li>
            <li>Technical usage data — such as pages visited, time spent on site, browser type, and approximate location derived from your IP address</li>
          </ul>
          <p>We do not collect sensitive personal information (such as health data, financial account details, or government identifiers) and we do not ask for it. If you ever feel that a form is requesting something unnecessary, please contact us and we will look into it.</p>
        </div>

        <div class="policy-section" id="how-we-use">
          <h2>How we use it</h2>
          <p>We use the information we collect for the following purposes only:</p>
          <ul>
            <li>To respond to your enquiries and provide the support you have asked for</li>
            <li>To administer your certification enrolment — including issuing credentials, tracking progress, and communicating about your programme</li>
            <li>To send you our newsletter or briefing emails, if you have opted in to receive them</li>
            <li>To understand how people use the website so we can improve it — this is based on aggregated, anonymised data, not individual tracking</li>
            <li>To comply with any legal obligations that apply to us</li>
          </ul>
          <p>We will not use your information to send you unsolicited marketing, sell you products or services unrelated to I-CADMUS, or make automated decisions about you. If you have opted into the newsletter, you can unsubscribe at any time by clicking the link at the bottom of any email we send.</p>
        </div>

        <div class="policy-section" id="cookies">
          <h2>Cookies</h2>
          <p>This website uses a small number of cookies — small text files stored in your browser — to make the site work properly and to help us understand how it is being used.</p>
          <p>We use two types:</p>
          <ul>
            <li><strong>Session cookies</strong> — these are temporary and are deleted when you close your browser. They are used to keep you logged in during a visit to the certification platform and to remember form state.</li>
            <li><strong>Analytics cookies</strong> — these help us understand aggregate visitor behaviour, such as which pages are most popular and how visitors move through the site. We use anonymised data only; no individual user is identified or tracked across other websites.</li>
          </ul>
          <p>You can control cookies through your browser settings. If you block all cookies, some parts of the site — particularly the certification platform — may not function correctly. Disabling analytics cookies has no effect on your ability to use the site.</p>
          <p>We do not use advertising or tracking cookies, and we do not permit third-party advertisers to set cookies on this site.</p>
        </div>

        <div class="policy-section" id="third-parties">
          <h2>Third parties</h2>
          <p>We do not sell, rent, or trade your personal information to third parties. Ever. That is a firm commitment, not a qualified statement.</p>
          <p>We do share limited information with a small number of service providers who help us operate the site and deliver our programmes — for example, our email delivery platform and the university partners who administer certification on our behalf. These providers are contractually required to handle your data only for the purposes we specify and in accordance with applicable privacy law.</p>
          <p>If we are required by law or a court order to disclose information, we will comply — but we will notify you wherever we are legally permitted to do so.</p>
        </div>

        <div class="policy-section" id="your-rights">
          <h2>Your rights</h2>
          <p>You have the right to access the personal information we hold about you, to ask us to correct anything that is inaccurate, and to request that we delete your information where we no longer have a legitimate reason to keep it.</p>
          <p>Specifically, you may:</p>
          <ul>
            <li>Request a copy of the personal data we hold about you</li>
            <li>Ask us to correct inaccurate or incomplete information</li>
            <li>Ask us to delete your personal data (subject to any legal obligations we have to retain it)</li>
            <li>Withdraw consent to receive marketing or newsletter emails at any time</li>
            <li>Lodge a complaint with the relevant data protection authority in your jurisdiction</li>
          </ul>
          <p>To exercise any of these rights, simply get in touch with us at the address below. We will respond within 30 days.</p>
          <div class="policy-contact-box">
            <p>Privacy enquiries: <a href="mailto:privacy@icadmus.org">privacy@icadmus.org</a></p>
            <p>We aim to respond to all privacy-related requests within 30 calendar days of receipt.</p>
          </div>
        </div>

        <div class="policy-section" id="contact-privacy">
          <h2>Contact</h2>
          <p>If you have any questions about this Privacy Policy, want to understand how your data is being handled, or wish to exercise any of your rights, please contact us:</p>
          <div class="policy-contact-box">
            <p><strong>Seafood Consumer Association</strong><br>
            Privacy Officer<br>
            <a href="mailto:privacy@icadmus.org">privacy@icadmus.org</a></p>
            <p>For general enquiries unrelated to privacy, please use our <a href="contact.php">contact page</a>.</p>
          </div>
          <p style="margin-top: 24px;">This policy was last updated in January 2026. We may update it from time to time to reflect changes in our practices or applicable law. When we do, we will update the date at the top of this page. If the changes are significant, we will notify active users by email.</p>
        </div>

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
