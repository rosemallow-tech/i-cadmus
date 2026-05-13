<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>The Framework | I-CADMUS — Seven categories of seafood fraud</title>
<meta name="description" content="The complete I-CADMUS taxonomy: seven seafood fraud categories with definitions, examples, red flags, and counter-measures." />

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
  /* ============== FRAMEWORK PAGE STYLES ============== */
  .page-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
    padding: 80px 0 100px;
  }
  .page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%),
      radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%);
    pointer-events: none;
  }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
  }
  .breadcrumb a { color: rgba(255,255,255,0.85); }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow {
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
    margin-bottom: 24px;
  }
  .page-hero h1 {
    font-family: var(--serif);
    font-weight: 400;
    font-size: clamp(36px, 5vw, 56px);
    line-height: 1.1;
    letter-spacing: -0.015em;
    margin-bottom: 20px;
    color: #fff;
  }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede {
    font-size: 19px;
    color: rgba(255,255,255,0.88);
    max-width: 60ch;
    line-height: 1.5;
  }

  .framework-layout {
    display: grid;
    grid-template-columns: 240px 1fr;
    gap: 64px;
    padding: 88px 0;
  }
  .framework-side {
    position: sticky;
    top: 100px;
    align-self: start;
  }
  .framework-side h6 {
    font-size: 11px;
    color: var(--ink-3);
    letter-spacing: 0.12em;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 14px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--line);
  }
  .framework-side ul { list-style: none; }
  .framework-side li a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0 10px 12px;
    margin-left: -14px;
    color: var(--ink-2);
    font-size: 14px;
    border-left: 2px solid transparent;
    transition: color 0.15s, border-color 0.15s;
  }
  .framework-side li a:hover { color: var(--brand); }
  .framework-side li a.active { color: var(--brand); border-left-color: var(--accent); font-weight: 600; }
  .framework-side .letter {
    width: 28px;
    height: 28px;
    background: var(--bg-soft);
    color: var(--brand);
    border-radius: 4px;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 16px;
    font-weight: 600;
    flex-shrink: 0;
  }

  .cat-block {
    padding: 56px 0;
    border-bottom: 1px solid var(--line);
    scroll-margin-top: 100px;
  }
  .cat-block:first-child { padding-top: 0; }
  .cat-block:last-child { border-bottom: none; }
  .cat-head {
    display: grid;
    grid-template-columns: 96px 1fr;
    gap: 32px;
    align-items: start;
    margin-bottom: 32px;
  }
  .cat-letter {
    width: 96px;
    height: 96px;
    background: var(--brand);
    color: #fff;
    border-radius: 8px;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 56px;
    font-weight: 600;
    line-height: 1;
    position: relative;
  }
  .cat-letter::after {
    content: '';
    position: absolute;
    bottom: 12px;
    left: 16px;
    right: 16px;
    height: 3px;
    background: var(--accent);
  }
  .cat-meta {
    font-size: 12px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 8px;
  }
  .cat-h {
    font-family: var(--serif);
    font-size: clamp(32px, 4vw, 42px);
    font-weight: 600;
    color: var(--brand);
    line-height: 1.1;
    letter-spacing: -0.015em;
    margin-bottom: 12px;
  }
  .cat-tagline {
    font-size: 17px;
    color: var(--ink-2);
    font-style: italic;
  }
  .cat-body {
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    gap: 40px;
  }
  .cat-body p { font-size: 16px; color: var(--ink-2); line-height: 1.65; margin-bottom: 16px; }
  .cat-body p strong { color: var(--ink); font-weight: 600; }

  .cat-info-card {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
  }
  .cat-info-card h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid var(--accent);
  }
  .cat-info-card ul { list-style: none; }
  .cat-info-card li {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.5;
    padding: 8px 0;
    border-bottom: 1px solid var(--line);
    display: grid;
    grid-template-columns: 20px 1fr;
    gap: 10px;
    align-items: start;
  }
  .cat-info-card li:last-child { border-bottom: none; }
  .cat-info-card li::before {
    content: '⚑';
    color: var(--accent);
    font-size: 12px;
    margin-top: 3px;
  }
  .cat-info-card.counter li::before { content: '✓'; color: #10b981; }

  .stat-callout {
    background: var(--brand);
    color: #fff;
    padding: 20px 24px;
    border-radius: 6px;
    margin-top: 20px;
    border-left: 4px solid var(--accent);
  }
  .stat-callout strong {
    display: block;
    font-family: var(--serif);
    font-size: 32px;
    font-weight: 600;
    line-height: 1;
    margin-bottom: 6px;
  }
  .stat-callout span { font-size: 13px; color: rgba(255,255,255,0.8); }

  .cat-block.featured {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 60%, var(--brand-light) 100%);
    color: #fff;
    margin: 56px -32px;
    padding: 72px 32px;
    border-radius: 8px;
    border-bottom: none;
  }
  .cat-block.featured .cat-letter {
    background: rgba(255,255,255,0.12);
    color: #fff;
    border: 1px solid rgba(255,255,255,0.25);
  }
  .cat-block.featured .cat-letter::after { background: var(--gold); }
  .cat-block.featured .cat-meta { color: #ffd25e; }
  .cat-block.featured .cat-h { color: #fff; }
  .cat-block.featured .cat-tagline { color: rgba(255,255,255,0.85); }
  .cat-block.featured .cat-body p { color: rgba(255,255,255,0.85); }
  .cat-block.featured .cat-body p strong { color: #fff; }
  .cat-block.featured .cat-info-card {
    background: rgba(255,255,255,0.06);
    border-color: rgba(255,255,255,0.18);
  }
  .cat-block.featured .cat-info-card h4 { color: #fff; border-bottom-color: var(--gold); }
  .cat-block.featured .cat-info-card li { color: rgba(255,255,255,0.85); border-bottom-color: rgba(255,255,255,0.12); }

  .standards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 32px;
  }
  .std-card {
    background: #fff;
    border: 1px solid var(--line);
    padding: 24px;
    border-radius: 6px;
    text-align: center;
  }
  .std-card .name {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 6px;
  }
  .std-card .desc { font-size: 14px; color: var(--ink-3); }

  @media (max-width: 1100px) {
    .framework-layout { grid-template-columns: 1fr; gap: 32px; padding: 56px 0; }
    .framework-side { position: static; }
    .framework-side ul {
      display: flex;
      gap: 8px;
      overflow-x: auto;
      padding-bottom: 8px;
    }
    .framework-side li a {
      border-left: none;
      border-bottom: 2px solid transparent;
      padding: 10px 12px;
      margin: 0;
      white-space: nowrap;
    }
    .framework-side li a.active { border-bottom-color: var(--accent); border-left-color: transparent; }
    .cat-head { grid-template-columns: 64px 1fr; gap: 20px; }
    .cat-letter { width: 64px; height: 64px; font-size: 32px; }
    .cat-body { grid-template-columns: 1fr; gap: 24px; }
    .cat-block.featured { margin: 32px 0; }
    .standards-grid { grid-template-columns: 1fr 1fr; }
    .page-hero { padding: 56px 0 72px; }
  }
  @media (max-width: 640px) {
    .standards-grid { grid-template-columns: 1fr; }
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
        <a href="i-cadmus-v3-corporate.html">Home</a>
        <span class="sep">/</span>
        <span class="current">The Framework</span>
      </div>
      <div class="page-hero-eyebrow">The Framework — Edition 2026</div>
      <h1>Seven categories. <strong>One shared language</strong> for seafood fraud.</h1>
      <p class="lede">The complete I-CADMUS taxonomy. Each category includes the formal definition, real-world examples, the red flags to watch for, and the counter-measures every level of the supply chain can take.</p>
    </div>
  </div>
</section>

<!-- ============== FRAMEWORK BODY ============== -->
<div class="container">
  <div class="framework-layout">

    <aside class="framework-side">
      <h6>The seven categories</h6>
      <ul>
        <li><a href="#illegal" class="active"><span class="letter">I</span> Illegal</a></li>
        <li><a href="#counterfeit"><span class="letter">C</span> Counterfeit</a></li>
        <li><a href="#adulteration"><span class="letter">A</span> Adulteration</a></li>
        <li><a href="#dilution"><span class="letter">D</span> Dilution</a></li>
        <li><a href="#misrepresentation"><span class="letter">M</span> Misrepresentation</a></li>
        <li><a href="#unreported"><span class="letter">U</span> Unreported</a></li>
        <li><a href="#substitution"><span class="letter">S</span> Substitution</a></li>
      </ul>
    </aside>

    <div>

      <!-- I -->
      <div class="cat-block" id="illegal">
        <div class="cat-head">
          <div class="cat-letter">I</div>
          <div>
            <div class="cat-meta">Category 01</div>
            <h2 class="cat-h">Illegal — IUU Laundering</h2>
            <p class="cat-tagline">Catch from illegal, unreported, and unregulated fishing washed into legitimate supply chains.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Illegal, Unreported and Unregulated (IUU) fishing accounts for a significant share of global seafood volume. The fraud isn't just the catch itself — it's the laundering pathway that transforms IUU product into apparently-legal commerce. Vessels transhipment at sea, paperwork is rewritten in flag-of-convenience ports, and the catch enters processing facilities indistinguishable from licit product.</p>
            <p><strong>Why it persists:</strong> the price differential between legal and IUU product covers the cost of laundering many times over, and prosecutions are rare even where laws exist.</p>
            <div class="stat-callout">
              <strong>~20%</strong>
              <span>Estimated share of global wild catch from IUU sources</span>
            </div>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Origin claims that don't match the species' known fishing zones</li>
                <li>Suppliers refusing to provide vessel-level traceability</li>
                <li>Anomalous pricing that doesn't reflect quota costs</li>
                <li>Documentation gaps between catch and import</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>Vessel-level catch documentation</li>
                <li>Port state measures enforcement</li>
                <li>Cross-border data sharing agreements</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- C -->
      <div class="cat-block" id="counterfeit">
        <div class="cat-head">
          <div class="cat-letter">C</div>
          <div>
            <div class="cat-meta">Category 02</div>
            <h2 class="cat-h">Counterfeit — Fake Labels</h2>
            <p class="cat-tagline">Forged certifications, fabricated origin claims, and entirely manufactured brand identities.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Counterfeit fraud creates the appearance of certification or premium origin where none exists. This includes forged sustainability certifications, fabricated geographic-indication labels, and manufactured "boutique" brands that have no link to any real harvest, vessel, or producer.</p>
            <p><strong>Why it persists:</strong> certification marks add real price premiums, and verification at the point of sale is rare. A consumer almost never verifies a label against a certifier's database.</p>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Certifications without verifiable lot numbers</li>
                <li>Brands with no traceable producer behind them</li>
                <li>"Geographic indication" labels in markets where the producer doesn't operate</li>
                <li>Inconsistent label printing or non-standard layouts</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>QR-linked verification at point of sale</li>
                <li>Tamper-evident certification holograms</li>
                <li>Public certifier databases</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- A -->
      <div class="cat-block" id="adulteration">
        <div class="cat-head">
          <div class="cat-letter">A</div>
          <div>
            <div class="cat-meta">Category 03</div>
            <h2 class="cat-h">Adulteration — Chemicals & Water</h2>
            <p class="cat-tagline">Phosphates, sulphites, brines, and undisclosed additives bulking weight and masking age.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Adulteration adds substances to seafood that weren't disclosed on the label. This includes water-binding phosphates that increase pack weight by 20–30%, sulphites that prevent black-spot in prawns but trigger allergic reactions in sensitive consumers, and a range of undisclosed brines and preservatives.</p>
            <p><strong>Why it persists:</strong> labelling laws often allow "moisture added" or carrier statements without quantification, and consumer testing of specific additives is functionally impossible at the counter.</p>
            <div class="stat-callout">
              <strong>30%</strong>
              <span>Typical weight gain from undisclosed phosphate treatment in scallops</span>
            </div>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Excessive moisture released during cooking</li>
                <li>Unusually translucent or white scallop flesh</li>
                <li>Pack weight inconsistent with apparent product volume</li>
                <li>Unlisted additives in ingredient declarations</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>Mandatory quantitative additive labelling</li>
                <li>Cook-out weight disclosure</li>
                <li>Allergen-specific warnings for sulphites</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- D -->
      <div class="cat-block" id="dilution">
        <div class="cat-head">
          <div class="cat-letter">D</div>
          <div>
            <div class="cat-meta">Category 04</div>
            <h2 class="cat-h">Dilution — Glazing & Mixing</h2>
            <p class="cat-tagline">Ice glaze padding the scale and cheaper species blended into a premium pack.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Dilution makes the pack appear larger or more premium than it is. Frozen prawn glazing — a thin protective ice coating — can legitimately be 5–10% by weight; industry surveys regularly find 30–40%. Species mixing blends cheaper fish into a premium-labelled product so the average species composition still matches the label, but the consumer paid premium prices for filler.</p>
            <p><strong>Why it persists:</strong> "net weight after deglazing" is rarely declared, and species mixing requires DNA testing to detect.</p>
            <div class="stat-callout">
              <strong>40%</strong>
              <span>Glaze share found in industry surveys of frozen prawns</span>
            </div>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Pack feels significantly lighter after thawing</li>
                <li>Visible thick ice coating on individual pieces</li>
                <li>Inconsistent piece-size or coloration in a "single species" pack</li>
                <li>No declared net weight after thaw</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>Mandatory net-weight-after-thaw labelling</li>
                <li>DNA spot-checks on premium packs</li>
                <li>Glazing percentage caps</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- M -->
      <div class="cat-block" id="misrepresentation">
        <div class="cat-head">
          <div class="cat-letter">M</div>
          <div>
            <div class="cat-meta">Category 05</div>
            <h2 class="cat-h">Misrepresentation — False Origin & Method</h2>
            <p class="cat-tagline">"Wild-caught" that wasn't. "Local" that flew across an ocean.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Misrepresentation falsifies country-of-origin, harvest method, or sustainability claims while leaving the species itself accurate. This is the fraud behind "Australian prawns" that were processed in Australia but caught elsewhere, "wild-caught" salmon that was farmed, and "sustainable" claims unsupported by any actual certification.</p>
            <p><strong>Why it persists:</strong> origin labelling rules vary across jurisdictions, and "processed in" loopholes let importers technically meet the letter of the law while violating its intent.</p>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Pricing inconsistent with claimed origin's cost base</li>
                <li>"Country of origin" missing while "processed in" appears prominently</li>
                <li>Sustainability claims without certifier identification</li>
                <li>Method claims (wild/farmed) that don't match seasonal availability</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>Country-of-catch (not just country-of-processing) labelling</li>
                <li>Mandatory method declaration</li>
                <li>Certifier-name requirement on sustainability claims</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- U -->
      <div class="cat-block" id="unreported">
        <div class="cat-head">
          <div class="cat-letter">U</div>
          <div>
            <div class="cat-meta">Category 06</div>
            <h2 class="cat-h">Unreported — Grey Channels</h2>
            <p class="cat-tagline">Product that bypasses traceability — moved off the books, into the menu without a trail.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Unreported product moves through informal supply chains that bypass standard traceability. This isn't necessarily illegal at the point of catch — but at some point the documentation breaks, the species is recombined with traceable product, and the original chain of custody is lost. The practical result: nobody can answer where this fish came from.</p>
            <p><strong>Why it persists:</strong> small-volume informal trade fills genuine gaps in regulated supply, and enforcement against grey channels is resource-intensive relative to the per-incident value.</p>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Suppliers unable to produce upstream documentation on request</li>
                <li>Cash transactions in restaurant/hospitality supply</li>
                <li>"Direct from the boat" claims with no vessel identification</li>
                <li>Prices that seem disconnected from market wholesale</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>End-to-end electronic catch documentation</li>
                <li>Tax-and-traceability integration</li>
                <li>Supply-chain audit requirements for foodservice</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- S — Featured -->
      <div class="cat-block featured" id="substitution">
        <div class="cat-head">
          <div class="cat-letter">S</div>
          <div>
            <div class="cat-meta">Category 07 · Featured</div>
            <h2 class="cat-h">Substitution — Cheap fish at a premium price</h2>
            <p class="cat-tagline">The most familiar fraud and the costliest to consumer trust.</p>
          </div>
        </div>
        <div class="cat-body">
          <div>
            <p>Substitution sells one species under another's name. Premium snapper replaced by inferior tropical imports. "Fish of the day" hides whatever's cheapest. Restaurant menus list species the kitchen has never bought. Of all the fraud types, substitution is the most studied, the most measurable via DNA testing, and the most stubbornly persistent — because the margin is enormous and detection at point-of-sale is functionally impossible without a lab.</p>
            <p><strong>Why it matters most:</strong> substitution erodes the entire premise of seafood labelling. If the species itself is a lie, every other claim on the package — origin, method, sustainability — is unverifiable theatre. <strong>I-CADMUS gives you the language to call it out.</strong></p>
            <div class="stat-callout" style="background: rgba(255,255,255,0.08); border-left-color: var(--gold);">
              <strong style="color: #ffd25e;">1 in 5</strong>
              <span>Global mislabelling rate across major DNA verification studies</span>
            </div>
          </div>
          <div>
            <div class="cat-info-card">
              <h4>Red flags</h4>
              <ul>
                <li>Species labelled at price points well below market wholesale</li>
                <li>Generic terms: "snapper," "white fish," "rockfish"</li>
                <li>Texture, colour, or flake size inconsistent with claimed species</li>
                <li>Restaurants unable to name the species' origin</li>
              </ul>
            </div>
            <div class="cat-info-card counter" style="margin-top: 16px;">
              <h4>Counter-measures</h4>
              <ul>
                <li>AS 5300 mandatory species naming</li>
                <li>Routine DNA verification at retail and foodservice</li>
                <li>End of generic species terms in commerce</li>
                <li>Real penalties — fines exceeding fraud margin</li>
              </ul>
            </div>
            <a href="book.html" class="btn btn-primary" style="margin-top: 20px;">Read the full chapter <span class="arrow">→</span></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ============== METHODOLOGY ============== -->
<section id="methodology" style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">Methodology</div>
    <h2 class="section-h">How <strong>I-CADMUS sits in front of HACCP.</strong></h2>
    <p class="section-sub">HACCP keeps food safe once you trust what you've got. I-CADMUS asks the prior question — is the product what it claims to be? Food safety has to start with truth. The two work together; I-CADMUS sits in front.</p>
  </div>
</section>

<!-- ============== ALIGNED STANDARDS ============== -->
<section id="standards">
  <div class="container">
    <div class="section-eyebrow">Aligned Standards</div>
    <h2 class="section-h">Built to <strong>integrate</strong>, not replace.</h2>
    <p class="section-sub">I-CADMUS is designed to work alongside existing food-safety, traceability, and naming standards.</p>

    <div class="standards-grid">
      <div class="std-card">
        <div class="name">AS 5300</div>
        <div class="desc">Australian Standard for fish names</div>
      </div>
      <div class="std-card">
        <div class="name">FRDC</div>
        <div class="desc">Fisheries Research & Development Corp.</div>
      </div>
      <div class="std-card">
        <div class="name">Codex</div>
        <div class="desc">Codex Alimentarius traceability</div>
      </div>
      <div class="std-card">
        <div class="name">HACCP</div>
        <div class="desc">Sits before HACCP, not against it</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to <strong>apply the framework</strong>?</h2>
        <p>Earn the I-CADMUS certification, download the audit checklists, or book a briefing for your team or department.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.html" class="btn btn-primary btn-lg">Get certified <span class="arrow">→</span></a>
        <a href="resources.html" class="btn btn-outline btn-lg">Browse resources</a>
      </div>
    </div>
  </div>
</section>

<script>
// Active state tracking on side-nav as user scrolls
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.cat-block');
  const navLinks = document.querySelectorAll('.framework-side a');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === '#' + id);
        });
      }
    });
  }, { rootMargin: '-30% 0px -60% 0px' });
  sections.forEach(s => observer.observe(s));
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
