<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About | I-CADMUS — Seafood Integrity Framework</title>
<meta name="description" content="The story behind I-CADMUS, the Seafood Consumer Association, and Hon Prof Roy D. Palmer." />

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
  /* ============== ABOUT PAGE ADDITIONAL STYLES ============== */
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
  .page-hero::after {
    content: '';
    position: absolute;
    right: -100px;
    bottom: -100px;
    width: 600px;
    height: 600px;
    background-image: radial-gradient(circle at center, rgba(255,255,255,0.04) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
    mask-image: radial-gradient(circle at center, black, transparent 70%);
    -webkit-mask-image: radial-gradient(circle at center, black, transparent 70%);
  }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
    flex-wrap: wrap;
  }
  .breadcrumb a { color: rgba(255,255,255,0.85); transition: color 0.15s; }
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

  .prose { max-width: 820px; margin: 0 auto; }
  .prose p {
    font-size: 17px;
    color: var(--ink-2);
    line-height: 1.65;
    margin-bottom: 20px;
  }
  .prose h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin: 36px 0 12px;
    line-height: 1.25;
  }
  .prose blockquote {
    border-left: 4px solid var(--accent);
    padding: 4px 0 4px 24px;
    margin: 28px 0;
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 400;
    color: var(--brand);
    line-height: 1.4;
    font-style: italic;
  }
  .prose ul { padding-left: 24px; margin-bottom: 24px; }
  .prose li {
    font-size: 17px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 8px;
  }
  .prose a { color: var(--brand); text-decoration: underline; }
  .prose a:hover { color: var(--accent); }

  .pillars { background: var(--bg-soft); }
  .pillars-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .pillar {
    background: #fff;
    border: 1px solid var(--line);
    border-top: 4px solid var(--accent);
    padding: 32px 28px;
    border-radius: 4px;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .pillar:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
  .pillar-num {
    font-family: var(--serif);
    font-size: 14px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 12px;
  }
  .pillar h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
    line-height: 1.25;
  }
  .pillar p { font-size: 14px; color: var(--ink-2); line-height: 1.55; }

  .founder-grid {
    display: grid;
    grid-template-columns: 360px 1fr;
    gap: 64px;
    align-items: start;
    margin-top: 48px;
  }
  .founder-portrait {
    aspect-ratio: 4/5;
    background: linear-gradient(135deg, var(--brand-dark), var(--brand-light));
    border-radius: 8px;
    box-shadow: var(--shadow-lg);
    position: relative;
    overflow: hidden;
  }
  .founder-portrait::before {
    content: 'RP';
    position: absolute;
    inset: 0;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 120px;
    font-weight: 600;
    color: rgba(255,255,255,0.9);
  }
  .founder-portrait::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.15), transparent 60%);
  }
  .founder-name-card {
    background: #fff;
    border-left: 4px solid var(--accent);
    padding: 16px 20px;
    margin-top: 24px;
  }
  .founder-name-card strong {
    display: block;
    font-family: var(--serif);
    font-size: 20px;
    color: var(--brand);
    font-weight: 600;
    margin-bottom: 4px;
  }
  .founder-name-card span {
    font-size: 13px;
    color: var(--ink-3);
    display: block;
    margin-bottom: 2px;
  }

  .timeline { background: var(--brand-dark); color: #fff; }
  .timeline .section-eyebrow { color: #ff6b81; }
  .timeline .section-eyebrow::before { background: #ff6b81; }
  .timeline .section-h { color: #fff; }
  .timeline-list {
    margin-top: 56px;
    border-top: 1px solid rgba(255,255,255,0.15);
  }
  .timeline-row {
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 32px;
    padding: 32px 0;
    border-bottom: 1px solid rgba(255,255,255,0.15);
    align-items: start;
  }
  .timeline-year {
    font-family: var(--serif);
    font-size: 36px;
    font-weight: 600;
    color: var(--brand-light);
    line-height: 1;
  }
  .timeline-content h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 8px;
  }
  .timeline-content p { color: rgba(255,255,255,0.75); font-size: 15px; line-height: 1.6; }

  .leadership-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    margin-top: 48px;
  }
  .leader {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
    transition: box-shadow 0.2s;
  }
  .leader:hover { box-shadow: var(--shadow-md); }
  .leader-avatar {
    width: 72px;
    height: 72px;
    background: linear-gradient(135deg, var(--brand-dark), var(--brand-light));
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 20px;
  }
  .leader h4 {
    font-family: var(--serif);
    font-size: 19px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 4px;
  }
  .leader-role {
    font-size: 13px;
    color: var(--accent);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 14px;
  }
  .leader p { font-size: 14px; color: var(--ink-2); line-height: 1.55; }

  @media (max-width: 1100px) {
    .pillars-grid { grid-template-columns: 1fr; }
    .founder-grid { grid-template-columns: 1fr; gap: 32px; }
    .founder-portrait { max-width: 320px; margin: 0 auto; }
    .timeline-row { grid-template-columns: 1fr; gap: 8px; }
    .timeline-year { font-size: 28px; }
    .leadership-grid { grid-template-columns: 1fr; }
    .page-hero { padding: 56px 0 72px; }
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
        <span class="current">About</span>
      </div>
      <div class="page-hero-eyebrow">About I-CADMUS</div>
      <h1>Built on five decades on the water — for everyone <strong>downstream of it.</strong></h1>
      <p class="lede">I-CADMUS is the practical seafood-integrity framework published by the Seafood Consumer Association. It exists to make the truth in your seafood supply chain visible, classifiable, and actionable.</p>
    </div>
  </div>
</section>

<!-- ============== MISSION / PROSE ============== -->
<section>
  <div class="container">
    <div class="prose">
      <div class="section-eyebrow">Our Mission</div>
      <h2 class="section-h" style="max-width: none;">Make seafood honesty a verifiable, shared standard.</h2>

      <p>Seafood is the most fraud-prone food category in the world. One in five products globally doesn't match its label. Frozen prawns can be 40% water by weight. "Fish of the day" hides whatever is cheapest in the back of the freezer. And HACCP — the food safety standard the industry leans on — answers a question I-CADMUS asks first: <em>is the product even what it claims to be?</em></p>

      <p>The Seafood Consumer Association created I-CADMUS to give the industry, regulators, and the consumer a single shared language for seafood fraud. Seven categories. One taxonomy. Built from real supply-chain experience, not theoretical risk modelling.</p>

      <blockquote>
        Food safety has to start with truth in labelling. You can't make safe what you can't even identify.
      </blockquote>

      <p>The framework is paired with the forthcoming book <em>Sea of Deception</em>, an online certification programme, an open-data publications register, and a growing network of academic and industry partners — beginning with Bond University and expanding to one institutional partner per country.</p>

      <h3>Why now</h3>
      <p>Three forces are converging: DNA verification has become affordable enough for routine use, traceability technology has matured, and consumer trust in food labelling has reached a generational low. The next decade will be shaped by who provides the framework — and the language — to act. I-CADMUS is that framework.</p>
    </div>
  </div>
</section>

<!-- ============== FOUNDER ============== -->
<section style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">Founder & Author</div>
    <h2 class="section-h">Hon Prof Roy D. Palmer, MBA — <strong>50+ years on the water.</strong></h2>

    <div class="founder-grid">
      <div>
        <div class="founder-portrait" aria-label="Hon Prof Roy D. Palmer"></div>
        <div class="founder-name-card">
          <strong>Hon Prof Roy D. Palmer, MBA</strong>
          <span>CEO, Seafood Consumer Association</span>
          <span>Author, <em>Sea of Deception</em> (2026)</span>
        </div>
      </div>
      <div class="prose" style="max-width: none;">
        <p>Roy Palmer's career spans more than five decades across the global seafood supply chain — from working boats and processing floors to international standards bodies and academic appointments. He has served as Chief Executive of multiple industry-peak organisations, advised national regulators across three continents, and held honorary professorships at universities working on aquaculture sustainability.</p>

        <p>I-CADMUS is the distillation of that work. After watching the same seven categories of fraud appear repeatedly across markets, supply chains, and decades — under different names, with different cover stories — Palmer set out to give the industry a single classifier. The framework you see published here is the result.</p>

        <h3>Selected appointments</h3>
        <ul>
          <li>Chief Executive Officer, Seafood Consumer Association</li>
          <li>Honorary Professor, Bond University (aquaculture & food integrity)</li>
          <li>Former CEO, Seafood Services Australia</li>
          <li>Industry advisor, Australian Fisheries Research and Development Corporation</li>
          <li>Author, <em>Sea of Deception</em> (Seafood Consumer Association Press, 2026)</li>
        </ul>

        <p><a href="contact.html">Request a briefing or media interview →</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== 5 PILLARS ============== -->
<section class="pillars">
  <div class="container">
    <div class="section-eyebrow">The Five Pillars</div>
    <h2 class="section-h">The policy playbook <strong>I-CADMUS recommends to jurisdictions.</strong></h2>
    <p class="section-sub">Each fraud category in the I-CADMUS taxonomy is countered by a corresponding policy lever. The five pillars below form the playbook every regulator working on seafood integrity should consider.</p>

    <div class="pillars-grid">
      <div class="pillar">
        <div class="pillar-num">Pillar 01</div>
        <h3>Mandatory naming</h3>
        <p>End "fish of the day," generic species names, and ambiguous trade names. Adopt AS 5300 or equivalent at every point of sale, from menu to label.</p>
      </div>
      <div class="pillar">
        <div class="pillar-num">Pillar 02</div>
        <h3>DNA verification</h3>
        <p>Routine, affordable species verification at customs, processing, and retail. The technology exists. The political will is the gap.</p>
      </div>
      <div class="pillar">
        <div class="pillar-num">Pillar 03</div>
        <h3>Real penalties</h3>
        <p>Fines that exceed the margin gained by fraud. Repeat offences trigger trading suspensions. Without consequence, classification is theatre.</p>
      </div>
      <div class="pillar">
        <div class="pillar-num">Pillar 04</div>
        <h3>Supply-chain transparency</h3>
        <p>End-to-end traceability from vessel to plate. QR-linked records that cannot be retroactively edited. Open auditability.</p>
      </div>
      <div class="pillar">
        <div class="pillar-num">Pillar 05</div>
        <h3>Consumer rights</h3>
        <p>The right to know what species you're buying, where it came from, and how it was harvested — protected in law, not by aspiration.</p>
      </div>
      <div class="pillar" style="background: var(--brand); color: #fff; border-top-color: var(--gold);">
        <div class="pillar-num" style="color: #ffd25e;">Read more</div>
        <h3 style="color: #fff;">The full playbook</h3>
        <p style="color: rgba(255,255,255,0.85);">All five pillars are detailed in <em>Sea of Deception</em>, with implementation case studies and recommended legislative language.</p>
        <p style="margin-top: 12px;"><a href="book.html" style="color: #ffd25e; font-weight: 600; text-decoration: none;">Get the book →</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== TIMELINE ============== -->
<section class="timeline">
  <div class="container">
    <div class="section-eyebrow">How we got here</div>
    <h2 class="section-h">A timeline of the framework's <strong>development</strong>.</h2>

    <div class="timeline-list">
      <div class="timeline-row">
        <div class="timeline-year">1976</div>
        <div class="timeline-content">
          <h3>Roy Palmer enters the seafood industry</h3>
          <p>Beginning a career across boats, processing, retail, peak industry bodies, and international standards work — building the lived experience the framework would later be drawn from.</p>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-year">2001</div>
        <div class="timeline-content">
          <h3>Australian Standard AS 5300 adoption work begins</h3>
          <p>A multi-year campaign to introduce mandatory species naming standards across Australian seafood retail. The work surfaces the gaps that I-CADMUS would later fill.</p>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-year">2018</div>
        <div class="timeline-content">
          <h3>Seafood Consumer Association founded</h3>
          <p>An independent body to advocate for transparency, accuracy, and integrity in seafood labelling — answerable to consumers, not to industry incumbents.</p>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-year">2023</div>
        <div class="timeline-content">
          <h3>I-CADMUS framework drafted</h3>
          <p>The seven-category taxonomy is formalised after years of pattern-matching across investigations, supply-chain audits, and case-study work.</p>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-year">2025</div>
        <div class="timeline-content">
          <h3>Bond University academic partnership</h3>
          <p>Bond becomes the first academic partner, leading research and certification delivery. The "one institutional partner per country" expansion model is set.</p>
        </div>
      </div>
      <div class="timeline-row">
        <div class="timeline-year">2026</div>
        <div class="timeline-content">
          <h3>Sea of Deception published · Framework launches publicly</h3>
          <p>The framework, the book, the certification, and the open-data publications register all go live together — the public release of a decade of work.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== LEADERSHIP ============== -->
<section id="leadership">
  <div class="container">
    <div class="section-eyebrow">Leadership</div>
    <h2 class="section-h">The people behind the framework.</h2>
    <p class="section-sub">A team drawn from industry, academia, regulation, and consumer advocacy.</p>

    <div class="leadership-grid">
      <div class="leader">
        <div class="leader-avatar">RP</div>
        <h4>Hon Prof Roy D. Palmer, MBA</h4>
        <div class="leader-role">CEO & Founder</div>
        <p>Author of <em>Sea of Deception</em>. Five decades in the global seafood industry.</p>
      </div>
      <div class="leader">
        <div class="leader-avatar">DK</div>
        <h4>Daryl K.</h4>
        <div class="leader-role">Director, Training & Programs</div>
        <p>Leads the I-CADMUS certification programme and university partnership delivery.</p>
      </div>
      <div class="leader">
        <div class="leader-avatar">SM</div>
        <h4>Sarah M.</h4>
        <div class="leader-role">Head of Standards</div>
        <p>Coordinates AS 5300, FRDC, and Codex alignment across the framework.</p>
      </div>
      <div class="leader">
        <div class="leader-avatar">JT</div>
        <h4>James T.</h4>
        <div class="leader-role">Industry Liaison</div>
        <p>Works with retail, foodservice, and processor partners on audit deployment.</p>
      </div>
      <div class="leader">
        <div class="leader-avatar">AL</div>
        <h4>Anna L.</h4>
        <div class="leader-role">Research Lead</div>
        <p>Leads case-study verification and DNA-testing research with academic partners.</p>
      </div>
      <div class="leader">
        <div class="leader-avatar">MC</div>
        <h4>Michael C.</h4>
        <div class="leader-role">Consumer Advocacy</div>
        <p>Heads the consumer-facing tools: scorecard, quiz, and the public reporting channel.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Want to <strong>partner with us</strong> or learn more?</h2>
        <p>If you're a university, retailer, regulator, or processor interested in adopting I-CADMUS or joining the partner network — we'd like to hear from you.</p>
      </div>
      <div class="cta-band-actions">
        <a href="contact.html" class="btn btn-primary btn-lg">Get in touch <span class="arrow">→</span></a>
        <a href="partners.html" class="btn btn-outline btn-lg">View partners</a>
      </div>
    </div>
  </div>
</section>

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
