<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Terms of Use | I-CADMUS</title>
<meta name="description" content="Terms of use for the I-CADMUS website and certification programme." />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">
<style>
  :root {
    --brand:#003a5d; --brand-dark:#002940; --brand-light:#0a4f7a;
    --accent:#c8102e; --accent-dark:#9e0c24; --teal:#00838f; --gold:#b8870b;
    --ink:#1c2127; --ink-2:#3d434d; --ink-3:#5c6470; --muted:#8a929c;
    --line:#e5e8ec; --bg:#ffffff; --bg-soft:#f6f8fa; --bg-2:#eef2f6;
    --sans:'Source Sans 3',-apple-system,'Segoe UI',sans-serif;
    --serif:'Source Serif 4',Georgia,serif;
    --shadow-sm:0 1px 2px rgba(0,25,50,.06);
  }
  *{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{font-family:var(--sans);color:var(--ink);background:var(--bg);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased;}
  a{color:var(--brand);text-decoration:none;}
  a:hover{text-decoration:underline;}
  img{display:block;max-width:100%;}
  .container{max-width:1320px;margin:0 auto;padding:0 32px;}

  .utility-bar{background:var(--brand-dark);color:rgba(255,255,255,.85);font-size:13px;border-bottom:1px solid rgba(255,255,255,.08);}
  .utility-bar .container{display:flex;justify-content:space-between;align-items:center;height:38px;}
  .utility-bar a{color:rgba(255,255,255,.85);padding:0 12px;border-right:1px solid rgba(255,255,255,.12);line-height:38px;transition:color .15s;}
  .utility-bar a:hover{color:#fff;}
  .utility-locale{display:flex;align-items:center;gap:6px;font-size:13px;color:rgba(255,255,255,.7);}
  .utility-locale select{background:transparent;border:none;color:rgba(255,255,255,.85);font-size:13px;cursor:pointer;}
  .header{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:0;z-index:100;box-shadow:var(--shadow-sm);}
  .header .container{display:flex;align-items:center;height:76px;gap:20px;}
  .brand{display:flex;align-items:center;gap:12px;font-weight:700;font-size:22px;color:var(--brand);letter-spacing:-.01em;flex-shrink:0;}
  .logo{height:44px;width:auto;}
  .btn{display:inline-flex;align-items:center;gap:8px;padding:0 20px;height:40px;border-radius:3px;font-size:14px;font-weight:600;cursor:pointer;border:none;transition:background .15s,color .15s;white-space:nowrap;}
  .btn-primary{background:var(--accent);color:#fff;}
  .btn-primary:hover{background:var(--accent-dark);}

  .page-hero{background:var(--brand-dark);color:#fff;padding:56px 0 48px;}
  .breadcrumb{display:flex;align-items:center;gap:6px;font-size:13px;color:rgba(255,255,255,.6);margin-bottom:20px;}
  .breadcrumb a{color:rgba(255,255,255,.6);}
  .sep{color:rgba(255,255,255,.3);}
  .page-hero h1{font-family:var(--serif);font-size:clamp(28px,4vw,44px);font-weight:600;margin-bottom:8px;}
  .page-hero .updated{font-size:14px;color:rgba(255,255,255,.55);}

  .legal-body{padding:72px 0 96px;}
  .legal-inner{display:grid;grid-template-columns:220px 1fr;gap:64px;align-items:start;}
  .legal-toc{position:sticky;top:96px;}
  .legal-toc h4{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--ink-3);margin-bottom:12px;}
  .legal-toc ul{list-style:none;}
  .legal-toc li{margin-bottom:6px;}
  .legal-toc a{font-size:14px;color:var(--ink-2);}
  .legal-toc a:hover{color:var(--brand);}
  .legal-content section{margin-bottom:48px;}
  .legal-content h2{font-family:var(--serif);font-size:22px;font-weight:600;color:var(--brand);margin-bottom:14px;padding-top:8px;}
  .legal-content p{font-size:15px;color:var(--ink-2);margin-bottom:12px;line-height:1.7;}
  .legal-content ul{margin:12px 0 12px 20px;}
  .legal-content li{font-size:15px;color:var(--ink-2);margin-bottom:6px;line-height:1.65;}

  @media(max-width:1100px){.container{padding:0 24px;}}
  @media(max-width:768px){.legal-inner{grid-template-columns:1fr;}.legal-toc{position:static;margin-bottom:32px;}}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a><span class="sep">/</span>
      <span style="color:#fff;">Terms of Use</span>
    </div>
    <h1>Terms of Use</h1>
    <p class="updated">Last updated: January 2026</p>
  </div>
</section>

<div class="legal-body">
  <div class="container">
    <div class="legal-inner">
      <nav class="legal-toc">
        <h4>On this page</h4>
        <ul>
          <li><a href="#acceptance">Acceptance</a></li>
          <li><a href="#content">Use of content</a></li>
          <li><a href="#certification">Certification</a></li>
          <li><a href="#disclaimer">Disclaimer</a></li>
          <li><a href="#governing-law">Governing law</a></li>
          <li><a href="#contact-terms">Contact</a></li>
        </ul>
      </nav>
      <div class="legal-content">

        <section id="acceptance">
          <h2>Acceptance of terms</h2>
          <p>By accessing or using the I-CADMUS website or any associated services, you agree to be bound by these Terms of Use. If you do not agree, please do not use the site.</p>
          <p>These terms apply to all visitors, including registered certification learners, partner institutions, and researchers.</p>
        </section>

        <section id="content">
          <h2>Use of content</h2>
          <p>All content on this website — including the I-CADMUS taxonomy, framework documents, case studies, whitepapers, and associated visual design — is the intellectual property of the Seafood Consumer Association (SCA) and is protected by copyright.</p>
          <ul>
            <li>You may quote or reference I-CADMUS content for educational, journalistic, or policy purposes, provided you attribute the SCA and link to the original source.</li>
            <li>You may not reproduce, republish, or incorporate I-CADMUS content into commercial products without a written licence from the SCA.</li>
            <li>The I-CADMUS name, logo, and certification marks are registered trademarks of the Seafood Consumer Association. Unauthorised use is prohibited.</li>
          </ul>
        </section>

        <section id="certification">
          <h2>Certification</h2>
          <p>The I-CADMUS credential is issued by the Seafood Consumer Association on completion of the relevant assessment. By enrolling, you agree to:</p>
          <ul>
            <li>Complete all assessments honestly and without assistance from unauthorised sources.</li>
            <li>Not share assessment questions, scenarios, or answer keys with third parties.</li>
            <li>Represent the credential accurately — including the tier level and year of issue.</li>
          </ul>
          <p>The SCA reserves the right to revoke a credential where a holder has misrepresented the certification or engaged in conduct materially inconsistent with the values of the framework.</p>
          <p>Annual renewal may be required for professional and organisational tiers. You will be notified of renewal requirements at the time of enrolment.</p>
        </section>

        <section id="disclaimer">
          <h2>Disclaimer</h2>
          <p>The information provided on this website, including the I-CADMUS framework and all associated resources, is for educational purposes only. It does not constitute legal, regulatory, or food-safety advice.</p>
          <p>While every effort is made to keep framework content current and accurate, the SCA makes no warranty as to the completeness or fitness of the information for any particular purpose. Users should seek independent advice for specific compliance or enforcement decisions.</p>
        </section>

        <section id="governing-law">
          <h2>Governing law</h2>
          <p>These terms are governed by the laws of the State of Queensland, Australia. Any disputes arising from these terms or your use of I-CADMUS services will be subject to the exclusive jurisdiction of the courts of Queensland.</p>
        </section>

        <section id="contact-terms">
          <h2>Contact</h2>
          <p>For questions about these terms, or to request a content licence, contact:</p>
          <p><strong>Seafood Consumer Association</strong><br>
          <a href="mailto:contact@i-cadmus.org">contact@i-cadmus.org</a></p>
          <p>For our privacy practices, see our <a href="privacy.php">Privacy Policy</a>.</p>
        </section>

      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
