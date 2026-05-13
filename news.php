<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>News & Insights | I-CADMUS — Latest from the seafood integrity team</title>
<meta name="description" content="Latest news, case studies, briefings, and press releases from the I-CADMUS framework and the Seafood Consumer Association." />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">

<style>
  :root {
    --brand: #003a5d;        /* deep corporate navy - the I-CADMUS primary */
    --brand-dark: #002940;
    --brand-light: #0a4f7a;
    --accent: #c8102e;       /* alert red - for the call-to-action / warning */
    --accent-dark: #9e0c24;
    --teal: #00838f;         /* secondary - integrity */
    --gold: #b8870b;         /* secondary - certification */
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
     UTILITY BAR (top thin strip - typical of corporate sites)
     ========================================================= */
  .utility-bar {
    background: var(--brand-dark);
    color: rgba(255,255,255,0.85);
    font-size: 13px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .utility-bar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 38px;
  }
  .utility-bar a {
    color: rgba(255,255,255,0.85);
    transition: color 0.15s;
    padding: 0 14px;
    border-right: 1px solid rgba(255,255,255,0.12);
    line-height: 38px;
  }
  .utility-bar a:last-child { border-right: none; }
  .utility-bar a:hover { color: #fff; }
  .utility-locale {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .utility-locale select {
    background: transparent;
    border: none;
    color: rgba(255,255,255,0.85);
    font-family: inherit;
    font-size: 13px;
    cursor: pointer;
  }
  .utility-locale select option { background: var(--brand-dark); }

  /* =========================================================
     PRIMARY NAV
     ========================================================= */
  .header {
    background: #fff;
    border-bottom: 1px solid var(--line);
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: var(--shadow-sm);
  }
  .header .container {
    display: flex;
    align-items: center;
    height: 76px;
    gap: 40px;
  }
  .brand {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 700;
    font-size: 22px;
    color: var(--brand);
    letter-spacing: -0.01em;
    flex-shrink: 0;
  }
  .brand-mark {
    width: 44px;
    height: 44px;
    background: var(--brand);
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 22px;
    font-weight: 700;
    border-radius: 4px;
    position: relative;
  }
  .brand-mark::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 8px;
    right: 8px;
    height: 2px;
    background: var(--accent);
  }
  .brand small {
    display: block;
    font-size: 11px;
    font-weight: 400;
    color: var(--ink-3);
    letter-spacing: 0.04em;
    text-transform: uppercase;
    margin-top: 2px;
  }

  .nav-primary {
    display: flex;
    gap: 4px;
    flex: 1;
  }
  .nav-primary > li {
    list-style: none;
    position: relative;
  }
  .nav-primary > li > a {
    display: flex;
    align-items: center;
    gap: 6px;
    height: 76px;
    padding: 0 16px;
    font-size: 15px;
    font-weight: 500;
    color: var(--ink-2);
    border-bottom: 3px solid transparent;
    transition: color 0.15s, border-color 0.15s;
  }
  .nav-primary > li > a:hover {
    color: var(--brand);
    border-bottom-color: var(--accent);
  }
  .nav-primary > li > a .chev {
    font-size: 10px;
    margin-top: 2px;
    transition: transform 0.2s;
  }
  .nav-primary > li:hover > a .chev { transform: rotate(180deg); }

  .nav-mega {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--line);
    border-top: 3px solid var(--accent);
    min-width: 520px;
    padding: 24px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    transition: opacity 0.2s, transform 0.2s, visibility 0.2s;
    z-index: 50;
  }
  .nav-primary > li:hover .nav-mega {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
  .nav-mega-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4px 24px;
  }
  .nav-mega a {
    display: block;
    padding: 10px 12px;
    border-radius: 4px;
    font-size: 14px;
    color: var(--ink-2);
    transition: background 0.15s, color 0.15s;
  }
  .nav-mega a:hover { background: var(--bg-soft); color: var(--brand); }
  .nav-mega a strong { display: block; font-weight: 600; color: var(--ink); margin-bottom: 2px; font-size: 14px; }
  .nav-mega a span { color: var(--ink-3); font-size: 12px; }

  .header-tools {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .header-search {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--bg-soft);
    display: grid;
    place-items: center;
    color: var(--ink-2);
    transition: background 0.15s;
  }
  .header-search:hover { background: var(--bg-2); }
  .btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 22px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 2px;
    transition: all 0.15s;
    cursor: pointer;
    border: 1px solid transparent;
    line-height: 1.2;
  }
  .btn-primary {
    background: var(--accent);
    color: #fff;
    border-color: var(--accent);
  }
  .btn-primary:hover {
    background: var(--accent-dark);
    border-color: var(--accent-dark);
  }
  .btn-secondary {
    background: var(--brand);
    color: #fff;
    border-color: var(--brand);
  }
  .btn-secondary:hover {
    background: var(--brand-dark);
  }
  .btn-outline {
    background: transparent;
    color: var(--brand);
    border-color: var(--brand);
  }
  .btn-outline:hover {
    background: var(--brand);
    color: #fff;
  }
  .btn-link {
    color: var(--brand);
    font-weight: 600;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border-bottom: 1px solid transparent;
    padding-bottom: 2px;
    transition: border-color 0.15s, gap 0.2s;
  }
  .btn-link:hover {
    border-bottom-color: var(--brand);
    gap: 10px;
  }
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     HERO
     ========================================================= */
  .hero {
    background:
      linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%),
      radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%);
    pointer-events: none;
  }
  .hero::after {
    content: '';
    position: absolute;
    right: -100px;
    bottom: -100px;
    width: 600px;
    height: 600px;
    background-image:
      radial-gradient(circle at center, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
    mask-image: radial-gradient(circle at center, black, transparent 70%);
    -webkit-mask-image: radial-gradient(circle at center, black, transparent 70%);
  }
  .hero-inner {
    position: relative;
    z-index: 1;
    padding: 96px 0 120px;
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 80px;
    align-items: center;
  }
  .hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    padding: 6px 14px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.18);
    border-radius: 100px;
    margin-bottom: 28px;
  }
  .hero-eyebrow::before {
    content: '';
    width: 7px;
    height: 7px;
    background: #4ade80;
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(74,222,128,0.25);
  }
  .hero h1 {
    font-family: var(--serif);
    font-weight: 400;
    font-size: clamp(40px, 5.5vw, 64px);
    line-height: 1.08;
    letter-spacing: -0.015em;
    margin-bottom: 28px;
    color: #fff;
  }
  .hero h1 strong {
    font-weight: 600;
    background: linear-gradient(120deg, #fff 0%, #b3d9f2 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .hero p.lede {
    font-size: 19px;
    color: rgba(255,255,255,0.85);
    margin-bottom: 40px;
    max-width: 60ch;
    line-height: 1.5;
  }
  .hero-actions {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 48px;
  }
  .hero-actions .btn-outline {
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .hero-actions .btn-outline:hover {
    background: #fff;
    color: var(--brand);
    border-color: #fff;
  }
  .hero-trustbar {
    border-top: 1px solid rgba(255,255,255,0.15);
    padding-top: 28px;
    display: flex;
    align-items: center;
    gap: 36px;
    flex-wrap: wrap;
  }
  .hero-trustbar-label {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }
  .hero-trustbar-logos {
    display: flex;
    gap: 28px;
    flex-wrap: wrap;
  }
  .hero-trustbar-logos span {
    color: rgba(255,255,255,0.7);
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 0.02em;
  }

  /* Hero card / floating panel */
  .hero-panel {
    background: #fff;
    color: var(--ink);
    border-radius: 8px;
    padding: 32px;
    box-shadow: 0 30px 60px -15px rgba(0,0,0,0.35);
    position: relative;
  }
  .hero-panel-tab {
    display: inline-block;
    background: var(--accent);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 2px;
    margin-bottom: 20px;
  }
  .hero-panel h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 14px;
    line-height: 1.25;
    color: var(--brand);
  }
  .hero-panel p {
    font-size: 14px;
    color: var(--ink-2);
    margin-bottom: 22px;
  }
  .hero-panel-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    border-top: 1px solid var(--line);
    padding-top: 22px;
    margin-bottom: 22px;
  }
  .hero-panel-stat .num {
    font-family: var(--serif);
    font-size: 36px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    margin-bottom: 4px;
  }
  .hero-panel-stat .label {
    font-size: 12px;
    color: var(--ink-3);
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  /* =========================================================
     SECTION HEADERS / GENERIC
     ========================================================= */
  section { padding: 100px 0; }
  .section-eyebrow {
    color: var(--accent);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 16px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
  }
  .section-eyebrow::before {
    content: '';
    width: 32px;
    height: 2px;
    background: var(--accent);
  }
  .section-h {
    font-family: var(--serif);
    font-size: clamp(34px, 4vw, 48px);
    line-height: 1.1;
    font-weight: 400;
    letter-spacing: -0.015em;
    color: var(--brand);
    margin-bottom: 20px;
    max-width: 22ch;
  }
  .section-h strong { font-weight: 600; }
  .section-sub {
    font-size: 18px;
    color: var(--ink-2);
    max-width: 60ch;
    line-height: 1.55;
    margin-bottom: 56px;
  }

  /* =========================================================
     METRICS BAR (numbers strip just under hero - corporate staple)
     ========================================================= */
  .metrics {
    background: #fff;
    border-bottom: 1px solid var(--line);
    padding: 0;
  }
  .metrics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-left: 1px solid var(--line);
  }
  .metric {
    padding: 36px 32px;
    border-right: 1px solid var(--line);
    transition: background 0.2s;
  }
  .metric:hover { background: var(--bg-soft); }
  .metric-num {
    font-family: var(--serif);
    font-size: 48px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    letter-spacing: -0.02em;
    margin-bottom: 8px;
  }
  .metric-num .unit {
    font-size: 24px;
    color: var(--accent);
    margin-left: 2px;
  }
  .metric-label {
    font-size: 13px;
    color: var(--ink-3);
    font-weight: 500;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    margin-bottom: 8px;
  }
  .metric-desc {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.5;
  }

  /* =========================================================
     OVERVIEW (two-column: text + image card)
     ========================================================= */
  .overview { background: var(--bg-soft); }
  .overview-grid {
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 80px;
    align-items: center;
  }
  .overview-image {
    position: relative;
    aspect-ratio: 4/5;
    border-radius: 8px;
    overflow: hidden;
    background: linear-gradient(135deg, var(--brand-dark), var(--brand-light));
    box-shadow: var(--shadow-lg);
  }
  .overview-image::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      radial-gradient(ellipse at 30% 30%, rgba(0,131,143,0.4), transparent 50%),
      url("data:image/svg+xml,%3Csvg viewBox='0 0 400 500' xmlns='http://www.w3.org/2000/svg'%3E%3Cg stroke='%23ffffff' stroke-width='0.5' fill='none' opacity='0.18'%3E%3Cpath d='M0 250 Q100 220 200 250 T400 250'/%3E%3Cpath d='M0 280 Q100 250 200 280 T400 280'/%3E%3Cpath d='M0 310 Q100 280 200 310 T400 310'/%3E%3Cpath d='M0 340 Q100 310 200 340 T400 340'/%3E%3Cpath d='M0 370 Q100 340 200 370 T400 370'/%3E%3Cpath d='M0 400 Q100 370 200 400 T400 400'/%3E%3C/g%3E%3C/svg%3E");
    background-size: cover;
  }
  .overview-image-overlay {
    position: absolute;
    bottom: 32px;
    left: 32px;
    right: 32px;
    color: #fff;
    z-index: 1;
  }
  .overview-image-overlay .badge {
    display: inline-block;
    background: var(--accent);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 5px 10px;
    border-radius: 2px;
    margin-bottom: 16px;
  }
  .overview-image-overlay h4 {
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    line-height: 1.25;
    margin-bottom: 8px;
  }
  .overview-image-overlay p {
    font-size: 14px;
    color: rgba(255,255,255,0.85);
  }

  .overview-card {
    position: absolute;
    bottom: -40px;
    right: -40px;
    background: #fff;
    padding: 24px;
    border-radius: 4px;
    box-shadow: var(--shadow-lg);
    width: 280px;
    border-left: 4px solid var(--accent);
  }
  .overview-card .stat {
    font-family: var(--serif);
    font-size: 40px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
    margin-bottom: 6px;
  }
  .overview-card .label {
    font-size: 12px;
    color: var(--ink-3);
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 8px;
  }
  .overview-card p {
    font-size: 13px;
    color: var(--ink-2);
    line-height: 1.5;
  }

  .overview-content p {
    font-size: 17px;
    color: var(--ink-2);
    margin-bottom: 18px;
    line-height: 1.6;
  }
  .overview-bullets {
    margin-top: 32px;
    padding-top: 32px;
    border-top: 1px solid var(--line-2);
  }
  .overview-bullet {
    display: grid;
    grid-template-columns: 36px 1fr;
    gap: 16px;
    margin-bottom: 18px;
  }
  .overview-bullet-icon {
    width: 32px;
    height: 32px;
    background: var(--brand);
    color: #fff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
  }
  .overview-bullet h5 {
    font-size: 15px;
    font-weight: 600;
    color: var(--ink);
    margin-bottom: 2px;
  }
  .overview-bullet p {
    font-size: 14px;
    color: var(--ink-2);
    margin: 0;
    line-height: 1.5;
  }

  /* =========================================================
     SERVICES / FRAMEWORK CARDS
     ========================================================= */
  .services { background: #fff; }
  .services-head {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 32px;
    align-items: end;
    margin-bottom: 56px;
  }
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .service-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 32px 28px;
    transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
    position: relative;
    overflow: hidden;
  }
  .service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--brand);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s;
  }
  .service-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: var(--brand-light);
  }
  .service-card:hover::before { transform: scaleX(1); }
  .service-icon {
    width: 56px;
    height: 56px;
    background: var(--bg-soft);
    color: var(--brand);
    border-radius: 6px;
    display: grid;
    place-items: center;
    margin-bottom: 24px;
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    transition: background 0.25s, color 0.25s;
  }
  .service-card:hover .service-icon {
    background: var(--brand);
    color: #fff;
  }
  .service-card .code {
    font-size: 11px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 6px;
    display: block;
  }
  .service-card h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 10px;
    line-height: 1.25;
  }
  .service-card p {
    font-size: 14px;
    color: var(--ink-2);
    margin-bottom: 20px;
    line-height: 1.55;
    min-height: 84px;
  }

  /* =========================================================
     INDUSTRIES (audience grid - corporate "we serve" pattern)
     ========================================================= */
  .industries {
    background: var(--bg-soft);
  }
  .industries-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: var(--line-2);
    border: 1px solid var(--line-2);
  }
  .industry {
    background: #fff;
    padding: 36px 28px;
    transition: background 0.2s;
    cursor: pointer;
    position: relative;
  }
  .industry:hover { background: var(--brand); color: #fff; }
  .industry:hover h4, .industry:hover p, .industry:hover .industry-link { color: #fff; }
  .industry:hover .industry-icon { background: rgba(255,255,255,0.15); color: #fff; }
  .industry-icon {
    width: 48px;
    height: 48px;
    background: var(--bg-soft);
    color: var(--brand);
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin-bottom: 24px;
    font-weight: 700;
    transition: background 0.2s, color 0.2s;
  }
  .industry h4 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 8px;
    line-height: 1.2;
    transition: color 0.2s;
  }
  .industry p {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.5;
    margin-bottom: 24px;
    transition: color 0.2s;
  }
  .industry-link {
    font-size: 13px;
    font-weight: 600;
    color: var(--brand);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: color 0.2s, gap 0.2s;
  }
  .industry:hover .industry-link { gap: 10px; }

  /* =========================================================
     APPROACH / TIMELINE (the methodology - very corporate)
     ========================================================= */
  .approach { background: var(--brand-dark); color: #fff; }
  .approach .section-eyebrow { color: #ff6b81; }
  .approach .section-eyebrow::before { background: #ff6b81; }
  .approach .section-h { color: #fff; max-width: 24ch; }
  .approach .section-sub { color: rgba(255,255,255,0.75); }
  .approach-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    position: relative;
  }
  .approach-grid::before {
    content: '';
    position: absolute;
    top: 32px;
    left: 16%;
    right: 16%;
    height: 1px;
    background: rgba(255,255,255,0.18);
  }
  .approach-step {
    position: relative;
  }
  .approach-step-num {
    width: 64px;
    height: 64px;
    background: #fff;
    color: var(--brand);
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 28px;
    position: relative;
    z-index: 1;
    box-shadow: 0 0 0 6px var(--brand-dark), 0 0 0 7px rgba(255,255,255,0.2);
  }
  .approach-step h3 {
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 12px;
    line-height: 1.2;
    color: #fff;
  }
  .approach-step p {
    font-size: 15px;
    color: rgba(255,255,255,0.75);
    line-height: 1.6;
    margin-bottom: 16px;
  }
  .approach-step .meta {
    font-size: 12px;
    color: rgba(255,255,255,0.5);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    font-weight: 600;
  }

  /* =========================================================
     INSIGHTS (book + thought leadership grid)
     ========================================================= */
  .insights { background: #fff; }
  .insights-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 40px;
    margin-top: 56px;
  }
  .insight-feature {
    background: linear-gradient(135deg, var(--brand-dark), var(--brand));
    color: #fff;
    border-radius: 8px;
    padding: 48px;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 460px;
  }
  .insight-feature::after {
    content: '';
    position: absolute;
    right: -80px;
    bottom: -80px;
    width: 320px;
    height: 320px;
    background: radial-gradient(circle, rgba(0,131,143,0.3), transparent 70%);
    pointer-events: none;
  }
  .insight-feature-tag {
    display: inline-block;
    background: var(--accent);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 2px;
    margin-bottom: 24px;
    align-self: flex-start;
  }
  .insight-feature h3 {
    font-family: var(--serif);
    font-size: clamp(28px, 3vw, 40px);
    font-weight: 400;
    line-height: 1.15;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
    z-index: 1;
  }
  .insight-feature p {
    font-size: 16px;
    color: rgba(255,255,255,0.85);
    margin-bottom: 32px;
    line-height: 1.55;
    max-width: 50ch;
    position: relative;
    z-index: 1;
  }
  .insight-feature .author {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    font-weight: 500;
    margin-bottom: 24px;
    position: relative;
    z-index: 1;
  }
  .insight-feature .btn {
    align-self: flex-start;
    position: relative;
    z-index: 1;
  }

  .insight-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .insight-item {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 24px;
    transition: border-color 0.2s, box-shadow 0.2s;
    cursor: pointer;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 16px;
    align-items: center;
  }
  .insight-item:hover {
    border-color: var(--brand-light);
    box-shadow: var(--shadow-md);
  }
  .insight-item .tag {
    font-size: 11px;
    font-weight: 700;
    color: var(--accent);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 8px;
    display: block;
  }
  .insight-item h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1.3;
    margin-bottom: 8px;
  }
  .insight-item .meta {
    font-size: 13px;
    color: var(--ink-3);
  }
  .insight-item-arrow {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--bg-soft);
    color: var(--brand);
    display: grid;
    place-items: center;
    transition: background 0.2s, transform 0.2s;
  }
  .insight-item:hover .insight-item-arrow {
    background: var(--brand);
    color: #fff;
    transform: translateX(4px);
  }

  /* =========================================================
     QUOTE / EXEC TESTIMONIAL
     ========================================================= */
  .quote-block { background: var(--bg-soft); padding: 100px 0; }
  .quote-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 64px;
    align-items: center;
  }
  .quote-headshot {
    aspect-ratio: 1;
    background: linear-gradient(135deg, var(--brand-dark), var(--brand-light));
    border-radius: 8px;
    box-shadow: var(--shadow-lg);
    position: relative;
    overflow: hidden;
    max-width: 320px;
  }
  .quote-headshot::before {
    content: 'RP';
    position: absolute;
    inset: 0;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 96px;
    font-weight: 600;
    color: rgba(255,255,255,0.9);
    letter-spacing: -0.02em;
  }
  .quote-headshot::after {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 30% 30%, rgba(255,255,255,0.15), transparent 50%);
  }
  .quote-content blockquote {
    font-family: var(--serif);
    font-size: clamp(24px, 2.5vw, 34px);
    font-weight: 400;
    line-height: 1.3;
    color: var(--brand);
    margin-bottom: 32px;
    position: relative;
    padding-left: 32px;
    border-left: 3px solid var(--accent);
  }
  .quote-attribution {
    display: flex;
    flex-direction: column;
    gap: 4px;
    padding-left: 32px;
  }
  .quote-attribution strong {
    font-size: 16px;
    color: var(--ink);
    font-weight: 600;
  }
  .quote-attribution span {
    font-size: 14px;
    color: var(--ink-3);
  }

  /* =========================================================
     CTA BAND
     ========================================================= */
  .cta-band {
    background: var(--brand);
    background-image:
      linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
    color: #fff;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
  }
  .cta-band::before {
    content: '';
    position: absolute;
    top: 0; right: 0;
    width: 50%;
    height: 100%;
    background: radial-gradient(circle at 80% 50%, rgba(0,131,143,0.3), transparent 70%);
  }
  .cta-band-grid {
    display: grid;
    grid-template-columns: 1.5fr auto;
    gap: 48px;
    align-items: center;
    position: relative;
    z-index: 1;
  }
  .cta-band h2 {
    font-family: var(--serif);
    font-size: clamp(28px, 3vw, 40px);
    font-weight: 400;
    line-height: 1.2;
    margin-bottom: 12px;
    color: #fff;
  }
  .cta-band h2 strong { font-weight: 600; }
  .cta-band p {
    font-size: 16px;
    color: rgba(255,255,255,0.85);
    max-width: 60ch;
  }
  .cta-band-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }
  .cta-band .btn-outline {
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .cta-band .btn-outline:hover {
    background: #fff;
    color: var(--brand);
  }

  /* =========================================================
     FOOTER (corporate-style with regions, links)
     ========================================================= */
  footer {
    background: #1a1d22;
    color: rgba(255,255,255,0.75);
    padding: 80px 0 0;
    font-size: 14px;
  }
  .footer-top {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
    gap: 40px;
    padding-bottom: 56px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .footer-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
  }
  .footer-brand-mark {
    width: 44px;
    height: 44px;
    background: #fff;
    color: var(--brand);
    display: grid;
    place-items: center;
    font-size: 22px;
    font-weight: 700;
    border-radius: 4px;
    position: relative;
  }
  .footer-brand-mark::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 8px;
    right: 8px;
    height: 2px;
    background: var(--accent);
  }
  .footer-brand-text {
    color: #fff;
    font-weight: 700;
    font-size: 22px;
  }
  .footer-brand-text small {
    display: block;
    font-size: 11px;
    font-weight: 400;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-top: 2px;
  }
  .footer-desc {
    color: rgba(255,255,255,0.65);
    line-height: 1.55;
    margin-bottom: 24px;
    max-width: 36ch;
  }
  .footer-newsletter input {
    width: 100%;
    padding: 12px 14px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
    margin-bottom: 8px;
  }
  .footer-newsletter input::placeholder { color: rgba(255,255,255,0.5); }
  .footer-newsletter input:focus { outline: 2px solid var(--accent); border-color: var(--accent); }
  .footer-newsletter button {
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 12px 18px;
    font-weight: 600;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    transition: background 0.2s;
    font-family: inherit;
  }
  .footer-newsletter button:hover { background: var(--accent-dark); }
  .footer-col h5 {
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 18px;
    letter-spacing: 0.02em;
  }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 10px; }
  .footer-col a {
    color: rgba(255,255,255,0.65);
    transition: color 0.15s;
  }
  .footer-col a:hover { color: #fff; }
  .footer-bottom {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 32px;
    padding: 32px 0;
    align-items: center;
    color: rgba(255,255,255,0.5);
    font-size: 13px;
  }
  .footer-bottom-links {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
  }
  .footer-bottom-links a:hover { color: #fff; }
  .footer-social {
    display: flex;
    gap: 8px;
    margin-top: 20px;
  }
  .footer-social a {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.12);
    display: grid;
    place-items: center;
    color: rgba(255,255,255,0.7);
    font-size: 13px;
    font-weight: 700;
    transition: background 0.2s, color 0.2s;
  }
  .footer-social a:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

  /* =========================================================
     RESPONSIVE
     ========================================================= */
  @media (max-width: 1100px) {
    .container { padding: 0 24px; }
    .nav-primary { display: none; }
    .header .container { gap: 16px; justify-content: space-between; }
    .hero-inner { grid-template-columns: 1fr; gap: 48px; padding: 64px 0 80px; }
    .metrics-grid { grid-template-columns: 1fr 1fr; }
    .overview-grid { grid-template-columns: 1fr; gap: 64px; }
    .overview-card { position: relative; bottom: 0; right: 0; margin: -40px auto 0; }
    .services-grid { grid-template-columns: 1fr 1fr; }
    .industries-grid { grid-template-columns: 1fr 1fr; }
    .approach-grid { grid-template-columns: 1fr; gap: 48px; }
    .approach-grid::before { display: none; }
    .insights-grid { grid-template-columns: 1fr; }
    .quote-grid { grid-template-columns: 1fr; gap: 32px; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
  }
  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .metrics-grid { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr; }
    .industries-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
  }

  .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s, transform 0.7s; }
  .reveal.in { opacity: 1; transform: translateY(0); }
  /* ============== NEWS PAGE STYLES ============== */
  .page-hero { background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%); color: #fff; position: relative; overflow: hidden; padding: 80px 0 100px; }
  .page-hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%), radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%); pointer-events: none; }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; }
  .breadcrumb a { color: rgba(255,255,255,0.85); }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow { display: inline-flex; align-items: center; gap: 12px; font-size: 13px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.85); padding: 6px 14px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18); border-radius: 100px; margin-bottom: 24px; }
  .page-hero h1 { font-family: var(--serif); font-weight: 400; font-size: clamp(36px, 5vw, 56px); line-height: 1.1; letter-spacing: -0.015em; margin-bottom: 20px; color: #fff; }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 60ch; line-height: 1.5; }

  .filters { display: flex; flex-wrap: wrap; gap: 8px; margin: 32px 0 48px; }
  .chip { padding: 8px 16px; background: #fff; border: 1px solid var(--line); border-radius: 100px; font-size: 13px; font-weight: 600; color: var(--ink-2); cursor: pointer; transition: all 0.15s; }
  .chip:hover { border-color: var(--brand); color: var(--brand); }
  .chip.active { background: var(--brand); color: #fff; border-color: var(--brand); }

  .featured-article { display: grid; grid-template-columns: 1.4fr 1fr; gap: 0; align-items: stretch; background: #fff; border: 1px solid var(--line); border-radius: 8px; overflow: hidden; margin-bottom: 64px; transition: box-shadow 0.2s; text-decoration: none; color: inherit; }
  .featured-article:hover { box-shadow: var(--shadow-lg); }
  .featured-article-img { background: linear-gradient(135deg, var(--brand-dark), var(--brand) 50%, var(--teal)); min-height: 360px; position: relative; overflow: hidden; }
  .featured-article-img::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.15), transparent 50%); }
  .featured-article-img-tag { position: absolute; top: 24px; left: 24px; background: var(--accent); color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; padding: 6px 12px; border-radius: 2px; z-index: 1; }
  .featured-article-body { padding: 48px; display: flex; flex-direction: column; justify-content: center; }
  .article-tag { font-size: 11px; color: var(--accent); font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 12px; display: block; }
  .featured-article-body h2 { font-family: var(--serif); font-size: clamp(28px, 3vw, 36px); font-weight: 600; color: var(--brand); line-height: 1.15; letter-spacing: -0.01em; margin-bottom: 16px; }
  .featured-article-body p { font-size: 16px; color: var(--ink-2); line-height: 1.6; margin-bottom: 24px; }
  .article-meta { display: flex; gap: 16px; font-size: 13px; color: var(--ink-3); margin-bottom: 24px; flex-wrap: wrap; }

  .news-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
  .news-card { background: #fff; border: 1px solid var(--line); border-radius: 6px; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; display: flex; flex-direction: column; text-decoration: none; color: inherit; }
  .news-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
  .news-card-img { aspect-ratio: 16/10; background: linear-gradient(135deg, var(--brand-dark), var(--brand)); position: relative; }
  .news-card-img.var-1 { background: linear-gradient(135deg, var(--brand-dark), var(--teal)); }
  .news-card-img.var-2 { background: linear-gradient(135deg, var(--brand), var(--brand-light)); }
  .news-card-img.var-3 { background: linear-gradient(135deg, #5c1a2a, var(--accent)); }
  .news-card-img.var-4 { background: linear-gradient(135deg, #1a3d1a, #2d6e2d); }
  .news-card-img.var-5 { background: linear-gradient(135deg, #3d2a14, var(--gold)); }
  .news-card-img.var-6 { background: linear-gradient(135deg, var(--brand-light), var(--teal)); }
  .news-card-img.var-7 { background: linear-gradient(135deg, #2a1a3d, #6b46a3); }
  .news-card-img.var-8 { background: linear-gradient(135deg, var(--brand-dark), #1d3d2f, var(--brand)); }
  .news-card-img-tag { position: absolute; bottom: 16px; left: 16px; background: rgba(0,0,0,0.7); color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; padding: 5px 10px; border-radius: 2px; }
  .news-card-body { padding: 24px 24px 28px; flex: 1; display: flex; flex-direction: column; }
  .news-card-body h3 { font-family: var(--serif); font-size: 19px; font-weight: 600; color: var(--brand); line-height: 1.3; margin-bottom: 12px; flex: 1; }
  .news-card-body .meta { font-size: 12px; color: var(--ink-3); border-top: 1px solid var(--line); padding-top: 14px; margin-top: auto; }

  .pagination { display: flex; justify-content: center; gap: 8px; margin-top: 56px; }
  .pagination a { width: 40px; height: 40px; display: grid; place-items: center; background: #fff; border: 1px solid var(--line); color: var(--ink-2); font-size: 14px; font-weight: 600; border-radius: 4px; transition: all 0.15s; }
  .pagination a:hover { border-color: var(--brand); color: var(--brand); }
  .pagination a.active { background: var(--brand); color: #fff; border-color: var(--brand); }
  .pagination a.next-prev { width: auto; padding: 0 16px; gap: 8px; }

  .newsletter-callout { background: linear-gradient(135deg, var(--brand-dark), var(--brand)); color: #fff; padding: 56px; border-radius: 8px; margin-top: 80px; display: grid; grid-template-columns: 1fr auto; gap: 48px; align-items: center; position: relative; overflow: hidden; }
  .newsletter-callout::before { content: ''; position: absolute; right: -100px; top: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(0,131,143,0.3), transparent 70%); }
  .newsletter-callout-text { position: relative; z-index: 1; }
  .newsletter-callout h2 { font-family: var(--serif); font-size: clamp(28px, 3vw, 36px); font-weight: 600; color: #fff; line-height: 1.2; margin-bottom: 12px; }
  .newsletter-callout p { font-size: 16px; color: rgba(255,255,255,0.85); max-width: 56ch; }
  .newsletter-callout-form { display: flex; gap: 8px; position: relative; z-index: 1; }
  .newsletter-callout-form input { padding: 14px 18px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.25); color: #fff; border-radius: 4px; font-size: 14px; font-family: inherit; min-width: 280px; }
  .newsletter-callout-form input::placeholder { color: rgba(255,255,255,0.6); }

  @media (max-width: 1100px) {
    .page-hero { padding: 56px 0 72px; }
    .featured-article { grid-template-columns: 1fr; }
    .featured-article-img { min-height: 240px; }
    .featured-article-body { padding: 32px; }
    .news-grid { grid-template-columns: 1fr 1fr; }
    .newsletter-callout { grid-template-columns: 1fr; padding: 32px; }
    .newsletter-callout-form input { min-width: 0; flex: 1; }
  }
  @media (max-width: 640px) {
    .news-grid { grid-template-columns: 1fr; }
    .newsletter-callout-form { flex-direction: column; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="i-cadmus-v3-corporate.html">Home</a>
        <span class="sep">/</span>
        <span class="current">News</span>
      </div>
      <div class="page-hero-eyebrow">News &amp; Insights</div>
      <h1>Briefings, case studies, and <strong>policy updates.</strong></h1>
      <p class="lede">The latest from the I-CADMUS team and the Seafood Consumer Association — research, public notices, partnership announcements, and analysis from the field.</p>
    </div>
  </div>
</section>

<section>
  <div class="container">

    <div class="filters" role="tablist">
      <div class="chip active" data-filter="all">All updates</div>
      <div class="chip" data-filter="whitepaper">Whitepapers</div>
      <div class="chip" data-filter="case-study">Case Studies</div>
      <div class="chip" data-filter="briefing">Briefings</div>
      <div class="chip" data-filter="research">Research</div>
      <div class="chip" data-filter="press">Press Releases</div>
      <div class="chip" data-filter="notice">Public Notices</div>
    </div>

    <a href="#" class="featured-article">
      <div class="featured-article-img">
        <span class="featured-article-img-tag">Featured</span>
      </div>
      <div class="featured-article-body">
        <span class="article-tag">Whitepaper · Policy</span>
        <h2>The five-pillar policy playbook: how regulators close the seafood-fraud gap.</h2>
        <p>A 42-page playbook of legislative and regulatory recommendations: mandatory naming, DNA verification, real penalties, supply-chain transparency, and consumer rights — with draft legislative language and implementation case studies.</p>
        <div class="article-meta">
          <span>By the SCA Policy Team</span>
          <span>14 min read</span>
          <span>06 May 2026</span>
        </div>
        <div><span class="btn-link">Read the playbook <span class="arrow">→</span></span></div>
      </div>
    </a>

    <div class="news-grid">
      <a href="#" class="news-card" data-cat="case-study">
        <div class="news-card-img var-1"><span class="news-card-img-tag">Case Study</span></div>
        <div class="news-card-body">
          <span class="article-tag">Industry</span>
          <h3>How DNA verification exposed retail-scale species substitution in a national chain.</h3>
          <div class="meta">8 min · 02 May 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="briefing">
        <div class="news-card-img var-2"><span class="news-card-img-tag">Briefing</span></div>
        <div class="news-card-body">
          <span class="article-tag">Consumer</span>
          <h3>Why food safety has to start with truth in labelling — a short briefing.</h3>
          <div class="meta">6 min · 28 Apr 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="research">
        <div class="news-card-img var-3"><span class="news-card-img-tag">Research</span></div>
        <div class="news-card-body">
          <span class="article-tag">Working Paper</span>
          <h3>The economic cost of seafood fraud across OECD markets — a quantitative estimate.</h3>
          <div class="meta">22 min · 21 Apr 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="press">
        <div class="news-card-img var-4"><span class="news-card-img-tag">Press Release</span></div>
        <div class="news-card-body">
          <span class="article-tag">Announcement</span>
          <h3>Bond University becomes inaugural academic partner for the I-CADMUS framework.</h3>
          <div class="meta">3 min · 15 Apr 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="case-study">
        <div class="news-card-img var-5"><span class="news-card-img-tag">Case Study</span></div>
        <div class="news-card-body">
          <span class="article-tag">Adulteration</span>
          <h3>Phosphate-treated scallops cooking out 35% — what a year of testing revealed.</h3>
          <div class="meta">11 min · 10 Apr 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="briefing">
        <div class="news-card-img var-6"><span class="news-card-img-tag">Briefing</span></div>
        <div class="news-card-body">
          <span class="article-tag">Regulator</span>
          <h3>The "processed in" loophole: why country-of-origin labelling needs a rewrite.</h3>
          <div class="meta">9 min · 04 Apr 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="notice">
        <div class="news-card-img var-7"><span class="news-card-img-tag">Public Notice</span></div>
        <div class="news-card-body">
          <span class="article-tag">Industry Alert</span>
          <h3>Counterfeit certification marks identified on imported tuna — guidance for importers.</h3>
          <div class="meta">4 min · 28 Mar 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="research">
        <div class="news-card-img var-8"><span class="news-card-img-tag">Research</span></div>
        <div class="news-card-body">
          <span class="article-tag">Method</span>
          <h3>Field-deployable DNA testing: where the science is, and what the industry can deploy now.</h3>
          <div class="meta">14 min · 22 Mar 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="press">
        <div class="news-card-img var-1"><span class="news-card-img-tag">Press Release</span></div>
        <div class="news-card-body">
          <span class="article-tag">Announcement</span>
          <h3>I-CADMUS framework, certification, and Sea of Deception book launch dates confirmed.</h3>
          <div class="meta">3 min · 18 Mar 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="case-study">
        <div class="news-card-img var-3"><span class="news-card-img-tag">Case Study</span></div>
        <div class="news-card-body">
          <span class="article-tag">Substitution</span>
          <h3>"Fish of the day" across 30 restaurants — DNA-verified results.</h3>
          <div class="meta">7 min · 12 Mar 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="briefing">
        <div class="news-card-img var-2"><span class="news-card-img-tag">Briefing</span></div>
        <div class="news-card-body">
          <span class="article-tag">Foodservice</span>
          <h3>Restaurant procurement: a five-question checklist for any seafood supplier.</h3>
          <div class="meta">5 min · 05 Mar 2026</div>
        </div>
      </a>
      <a href="#" class="news-card" data-cat="whitepaper">
        <div class="news-card-img var-5"><span class="news-card-img-tag">Whitepaper</span></div>
        <div class="news-card-body">
          <span class="article-tag">Standards</span>
          <h3>AS 5300 and the global naming-standard landscape — a comparative review.</h3>
          <div class="meta">18 min · 28 Feb 2026</div>
        </div>
      </a>
    </div>

    <div class="pagination">
      <a href="#" class="next-prev">← Prev</a>
      <a href="#" class="active">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#" class="next-prev">Next →</a>
    </div>

    <div class="newsletter-callout">
      <div class="newsletter-callout-text">
        <h2>Get our briefing in your inbox.</h2>
        <p>One email a fortnight — new whitepapers, case studies, framework updates, and the policy notes we don't publish anywhere else. No spam, no resold lists.</p>
      </div>
      <form class="newsletter-callout-form" onsubmit="event.preventDefault(); alert('Thank you. We will be in touch.');">
        <input type="email" placeholder="your@email.com" required aria-label="Email" />
        <button type="submit" class="btn btn-primary btn-lg">Subscribe</button>
      </form>
    </div>

  </div>
</section>

<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Got a story or <strong>a tip</strong>?</h2>
        <p>If you've encountered something that fits the I-CADMUS taxonomy — or that the framework hasn't covered — we want to hear from you. Confidential and anonymous routes available.</p>
      </div>
      <div class="cta-band-actions">
        <a href="contact.html" class="btn btn-primary btn-lg">Submit a tip <span class="arrow">→</span></a>
        <a href="resources.html" class="btn btn-outline btn-lg">Browse resources</a>
      </div>
    </div>
  </div>
</section>

<script>
document.querySelectorAll('.chip').forEach(chip => {
  chip.addEventListener('click', () => {
    document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
    chip.classList.add('active');
    const filter = chip.dataset.filter;
    document.querySelectorAll('.news-card').forEach(card => {
      card.style.display = (filter === 'all' || card.dataset.cat === filter) ? '' : 'none';
    });
  });
});
</script>

<?php include 'footer.php'; ?>

<script>
  // Reveal on scroll
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
</script>
</body>
</html>
