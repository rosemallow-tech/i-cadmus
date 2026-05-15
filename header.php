<style>
/* ============================================================
   MOBILE NAV  (hamburger + drawer)
   ============================================================ */
.nav-toggle {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 26px;
  height: 18px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 0;
  flex-shrink: 0;
}
.nav-toggle span {
  display: block;
  height: 2px;
  background: var(--ink, #0f1f2e);
  border-radius: 2px;
  transition: transform 0.25s, opacity 0.25s;
}
.nav-toggle.open span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
.nav-toggle.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
.nav-toggle.open span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

.nav-mobile {
  display: none;
  position: fixed;
  top: 76px;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  z-index: 99;
  border-top: 1px solid var(--line, #e5e9ef);
  transform: translateX(100%);
  transition: transform 0.28s ease;
}
.nav-mobile.open { transform: translateX(0); }

.nav-mobile-inner { padding: 8px 24px 48px; }

.nav-mobile-section {
  border-bottom: 1px solid var(--line, #e5e9ef);
}
.nav-mobile-section details summary,
.nav-mobile-section > a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 4px;
  font-size: 16px;
  font-weight: 500;
  color: var(--ink-2, #3a4a5c);
  text-decoration: none;
  cursor: pointer;
  list-style: none;
  border: none;
  background: none;
  width: 100%;
  box-sizing: border-box;
}
.nav-mobile-section details summary::-webkit-details-marker { display: none; }
.nav-mobile-section details summary .chev {
  font-size: 11px;
  transition: transform 0.2s;
  color: var(--ink-3, #8a99aa);
}
.nav-mobile-section details[open] summary .chev { transform: rotate(180deg); }

.nav-mobile-sub { padding: 4px 0 12px; }
.nav-mobile-sub a {
  display: block;
  padding: 9px 12px;
  font-size: 14px;
  color: var(--ink-2, #3a4a5c);
  text-decoration: none;
  border-radius: 4px;
}
.nav-mobile-sub a:hover { background: var(--bg-soft, #f5f7fa); color: var(--brand, #005fa3); }
.nav-mobile-sub a strong { display: block; font-weight: 600; color: var(--ink, #0f1f2e); font-size: 14px; }
.nav-mobile-sub a span  { color: var(--ink-3, #8a99aa); font-size: 12px; }

.nav-mobile-cta {
  padding: 24px 4px 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.nav-primary > li > a { white-space: nowrap; padding: 0 10px; }
.btn { white-space: nowrap; }
.header .container { gap: 20px; }

@media (max-width: 1100px) {
  .nav-toggle  { display: flex; }
  .nav-mobile  { display: block; }
}
</style>

<!-- ============== UTILITY BAR ============== -->
<div class="utility-bar">
  <div class="container">
    <div>
      <a href="investors.php">Investors</a>
      <a href="news.php">Newsroom</a>
      <a href="careers.php">Careers</a>
      <a href="Partners.php">Partners</a>
      <a href="contact.php">Contact</a>
    </div>
    <div class="utility-locale">
      <span>🌐</span>
      <select aria-label="Region selector">
        <option>Global · English</option>
        <option>Australia · English</option>
        <option>European Union · English</option>
        <option>United States · English</option>
        <option>Japan · 日本語</option>
      </select>
    </div>
  </div>
</div>

<!-- ============== HEADER / PRIMARY NAV ============== -->
<header class="header">
  <div class="container">
    <a href="index.php" class="brand">
      <img src="assets/img/logo.png" alt="I-CADMUS Logo" class="logo">
    </a>
    <ul class="nav-primary">
      <li>
        <a href="framework.php">Framework <span class="chev">▼</span></a>
        <div class="nav-mega">
          <div class="nav-mega-grid">
            <a href="illegal.php"><strong>Illegal · IUU Laundering</strong><span>Cross-border catch laundering</span></a>
            <a href="counterfeit.php"><strong>Counterfeit · Fake Labels</strong><span>Forged certifications and origin</span></a>
            <a href="adulteration.php"><strong>Adulteration · Additives</strong><span>Chemicals, brines, undisclosed</span></a>
            <a href="dilution.php"><strong>Dilution · Glazing</strong><span>Ice glaze and species mixing</span></a>
            <a href="misrepresentation.php"><strong>Misrepresentation · Origin</strong><span>False country and method claims</span></a>
            <a href="unreported.php"><strong>Unreported · Grey Channels</strong><span>Off-the-books supply paths</span></a>
            <a href="substitution.php"><strong>Substitution · Species Swap</strong><span>Cheap fish, premium price</span></a>
            <a href="framework.php"><strong>View all seven types →</strong><span>The complete I-CADMUS taxonomy</span></a>
          </div>
        </div>
      </li>
      <li><a href="index.php#industries">Sectors <span class="chev">▼</span></a>
        <div class="nav-mega">
          <div class="nav-mega-grid">
            <a href="consumers.php"><strong>Consumers</strong><span>Spot fraud at the counter</span></a>
            <a href="retail-foodservice.php"><strong>Retail &amp; Foodservice</strong><span>Compliance and audits</span></a>
            <a href="processors.php"><strong>Processors &amp; Distributors</strong><span>Supply-chain integrity</span></a>
            <a href="regulators.php"><strong>Regulators</strong><span>A workable taxonomy</span></a>
          </div>
        </div>
      </li>
      <li><a href="news.php">Insights</a></li>
      <li><a href="framework.php">Methodology</a></li>
      <li><a href="certification.php">Certification</a></li>
      <li><a href="about.php">About SCA</a></li>
    </ul>
    <div class="header-tools">
      <a href="resources.php" class="header-search" aria-label="Search">🔍</a>
      <a href="get-certified.php" class="btn btn-primary">Get Certified <span class="arrow">→</span></a>
      <!-- Hamburger — visible ≤1100px -->
      <button class="nav-toggle" aria-label="Open navigation" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- ============== MOBILE NAV DRAWER ============== -->
<nav class="nav-mobile" id="navMobile" aria-label="Mobile navigation">
  <div class="nav-mobile-inner">

    <div class="nav-mobile-section">
      <details>
        <summary>Framework <span class="chev">▼</span></summary>
        <div class="nav-mobile-sub">
          <a href="illegal.php"><strong>Illegal · IUU Laundering</strong><span>Cross-border catch laundering</span></a>
          <a href="counterfeit.php"><strong>Counterfeit · Fake Labels</strong><span>Forged certifications and origin</span></a>
          <a href="adulteration.php"><strong>Adulteration · Additives</strong><span>Chemicals, brines, undisclosed</span></a>
          <a href="dilution.php"><strong>Dilution · Glazing</strong><span>Ice glaze and species mixing</span></a>
          <a href="misrepresentation.php"><strong>Misrepresentation · Origin</strong><span>False country and method claims</span></a>
          <a href="unreported.php"><strong>Unreported · Grey Channels</strong><span>Off-the-books supply paths</span></a>
          <a href="substitution.php"><strong>Substitution · Species Swap</strong><span>Cheap fish, premium price</span></a>
          <a href="framework.php"><strong>View all seven types →</strong><span>The complete I-CADMUS taxonomy</span></a>
        </div>
      </details>
    </div>

    <div class="nav-mobile-section">
      <details>
        <summary>Sectors <span class="chev">▼</span></summary>
        <div class="nav-mobile-sub">
          <a href="consumers.php"><strong>Consumers</strong><span>Spot fraud at the counter</span></a>
          <a href="retail-foodservice.php"><strong>Retail &amp; Foodservice</strong><span>Compliance and audits</span></a>
          <a href="processors.php"><strong>Processors &amp; Distributors</strong><span>Supply-chain integrity</span></a>
          <a href="regulators.php"><strong>Regulators</strong><span>A workable taxonomy</span></a>
        </div>
      </details>
    </div>

    <div class="nav-mobile-section">
      <a href="news.php">Insights</a>
    </div>
    <div class="nav-mobile-section">
      <a href="framework.php">Methodology</a>
    </div>
    <div class="nav-mobile-section">
      <a href="certification.php">Certification</a>
    </div>
    <div class="nav-mobile-section">
      <a href="about.php">About SCA</a>
    </div>

    <div class="nav-mobile-cta">
      <a href="get-certified.php" class="btn btn-primary">Get Certified →</a>
    </div>

  </div>
</nav>

<script>
(function () {
  var toggle = document.querySelector('.nav-toggle');
  var nav    = document.getElementById('navMobile');
  if (!toggle || !nav) return;

  function openMenu() {
    nav.classList.add('open');
    toggle.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    nav.classList.remove('open');
    toggle.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', function () {
    nav.classList.contains('open') ? closeMenu() : openMenu();
  });

  // Close when a link inside is clicked
  nav.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', closeMenu);
  });

  // Close on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });
})();
</script>
