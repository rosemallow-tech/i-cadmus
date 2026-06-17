<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Resources | I-CADMUS — Tools, whitepapers, glossary</title>
<meta name="description" content="Free tools, whitepapers, audit checklists, glossary, and FAQ for the I-CADMUS seafood integrity framework." />

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
  /* ============== RESOURCES PAGE STYLES ============== */
  .page-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff; position: relative; overflow: hidden; padding: 80px 0 100px;
  }
  .page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(0,131,143,0.25), transparent 50%), radial-gradient(circle at 20% 80%, rgba(200,16,46,0.15), transparent 60%);
    pointer-events: none;
  }
  .page-hero-inner { position: relative; z-index: 1; max-width: 820px; }
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; }
  .breadcrumb a { color: rgba(255,255,255,0.85); }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow {
    display: inline-flex; align-items: center; gap: 12px;
    font-size: 13px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase;
    color: rgba(255,255,255,0.85); padding: 6px 14px;
    background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18);
    border-radius: 100px; margin-bottom: 24px;
  }
  .page-hero h1 { font-family: var(--serif); font-weight: 400; font-size: clamp(36px, 5vw, 56px); line-height: 1.1; letter-spacing: -0.015em; margin-bottom: 20px; color: #fff; }
  .page-hero h1 strong { font-weight: 600; }
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 60ch; line-height: 1.5; }

  .resource-nav { background: #fff; border-bottom: 1px solid var(--line); position: sticky; top: 76px; z-index: 50; }
  .resource-nav-inner { display: flex; gap: 0; overflow-x: auto; }
  .resource-nav a { padding: 18px 24px; font-size: 14px; font-weight: 600; color: var(--ink-2); border-bottom: 3px solid transparent; transition: color 0.15s, border-color 0.15s; white-space: nowrap; }
  .resource-nav a:hover { color: var(--brand); }
  .resource-nav a.active { color: var(--brand); border-bottom-color: var(--accent); }

  .tools-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 48px; }
  .tool-card { background: #fff; border: 1px solid var(--line); border-radius: 6px; padding: 28px; transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s; display: flex; flex-direction: column; }
  .tool-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); border-color: var(--brand-light); }
  .tool-icon { width: 48px; height: 48px; background: var(--bg-soft); color: var(--brand); border-radius: 6px; display: grid; place-items: center; font-family: var(--serif); font-size: 22px; font-weight: 600; margin-bottom: 20px; }
  .tool-tag { font-size: 11px; color: var(--accent); font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 8px; }
  .tool-card h3 { font-family: var(--serif); font-size: 20px; font-weight: 600; color: var(--brand); margin-bottom: 10px; line-height: 1.25; }
  .tool-card p { font-size: 14px; color: var(--ink-2); line-height: 1.55; margin-bottom: 20px; flex: 1; }
  .tool-meta { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--line); padding-top: 14px; }
  .tool-meta small { font-size: 11px; color: var(--ink-3); text-transform: uppercase; letter-spacing: 0.06em; font-weight: 600; }
  .tool-meta a { color: var(--brand); font-weight: 600; font-size: 13px; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.2s; }
  .tool-meta a:hover { gap: 10px; }

  .whitepapers { background: var(--bg-soft); }
  .whitepaper-list { display: grid; gap: 16px; margin-top: 48px; }
  .whitepaper { background: #fff; border: 1px solid var(--line); border-left: 4px solid var(--brand); padding: 28px 32px; border-radius: 4px; display: grid; grid-template-columns: 1fr auto; gap: 32px; align-items: center; transition: border-left-color 0.2s, box-shadow 0.2s; }
  .whitepaper:hover { border-left-color: var(--accent); box-shadow: var(--shadow-md); }
  .whitepaper-tag { font-size: 11px; color: var(--accent); font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 8px; display: block; }
  .whitepaper h3 { font-family: var(--serif); font-size: 22px; font-weight: 600; color: var(--brand); margin-bottom: 8px; line-height: 1.25; }
  .whitepaper p { font-size: 14px; color: var(--ink-2); line-height: 1.55; margin-bottom: 8px; }
  .whitepaper .meta { font-size: 12px; color: var(--ink-3); }
  .whitepaper-actions { display: flex; flex-direction: column; gap: 10px; }

  .glossary-jumpnav { display: flex; flex-wrap: wrap; gap: 6px; background: var(--bg-soft); padding: 16px; border-radius: 4px; margin: 32px 0 48px; }
  .glossary-jumpnav a { width: 36px; height: 36px; background: #fff; color: var(--brand); display: grid; place-items: center; font-weight: 600; font-size: 13px; border-radius: 4px; border: 1px solid var(--line); transition: all 0.15s; }
  .glossary-jumpnav a:hover { background: var(--brand); color: #fff; border-color: var(--brand); }

  .glossary-letter { margin-bottom: 32px; scroll-margin-top: 100px; }
  .glossary-letter-h { font-family: var(--serif); font-size: 36px; font-weight: 600; color: var(--accent); border-bottom: 2px solid var(--accent); padding-bottom: 8px; margin-bottom: 20px; line-height: 1; }
  .glossary-term { padding: 18px 0; border-bottom: 1px solid var(--line); display: grid; grid-template-columns: 240px 1fr; gap: 32px; }
  .glossary-term:last-child { border-bottom: none; }
  .glossary-term dt { font-family: var(--serif); font-size: 18px; font-weight: 600; color: var(--brand); }
  .glossary-term dd { font-size: 15px; color: var(--ink-2); line-height: 1.6; }

  .faq-list { max-width: 820px; margin: 48px auto 0; }
  .faq-item { border-top: 1px solid var(--line); padding: 20px 0; cursor: pointer; }
  .faq-item:last-child { border-bottom: 1px solid var(--line); }
  .faq-q { display: flex; justify-content: space-between; align-items: center; gap: 24px; font-family: var(--serif); font-size: 19px; font-weight: 600; color: var(--brand); }
  .faq-q span:last-child { font-size: 24px; color: var(--ink-3); transition: transform 0.3s; font-weight: 300; }
  .faq-item.open .faq-q span:last-child { transform: rotate(45deg); color: var(--accent); }
  .faq-a { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, margin 0.3s; color: var(--ink-2); font-size: 15px; line-height: 1.6; }
  .faq-item.open .faq-a { max-height: 320px; margin-top: 12px; }

  @media (max-width: 1100px) {
    .page-hero { padding: 56px 0 72px; }
    .resource-nav { top: 0; }
    .tools-grid { grid-template-columns: 1fr 1fr; }
    .whitepaper { grid-template-columns: 1fr; gap: 16px; }
    .glossary-term { grid-template-columns: 1fr; gap: 6px; }
  }
  @media (max-width: 640px) { .tools-grid { grid-template-columns: 1fr; } }
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
        <span class="current">Resources</span>
      </div>
      <div class="page-hero-eyebrow">The Resource Library</div>
      <h1>Tools, whitepapers, and the <strong>complete glossary.</strong></h1>
      <p class="lede">Free downloads to put the I-CADMUS framework to work — for the consumer at the counter, the buyer at the desk, and the regulator drafting next year's policy.</p>
    </div>
  </div>
</section>

<nav class="resource-nav">
  <div class="container">
    <div class="resource-nav-inner">
      <a href="#tools" class="active">Tools & Downloads</a>
      <a href="#whitepapers">Whitepapers</a>
      <a href="#glossary">Glossary</a>
      <a href="#faq">FAQ</a>
    </div>
  </div>
</nav>

<!-- ============== TOOLS ============== -->
<section id="tools">
  <div class="container">
    <div class="section-eyebrow">Tools & Downloads</div>
    <h2 class="section-h">Free, practical, and <strong>ready to use today.</strong></h2>
    <p class="section-sub">Everything in this section is free. Some tools require an email address so we can send you updated versions when the framework is revised.</p>

    <div class="tools-grid">
      <div class="tool-card">
        <div class="tool-icon">📋</div>
        <span class="tool-tag">Consumer · PDF</span>
        <h3>Fraud Scorecard</h3>
        <p>A pocket-size scorecard you can take to the supermarket or restaurant. Walks through the seven I-CADMUS categories with red flags for each.</p>
        <div class="tool-meta"><small>2 pages · 0.4 MB</small><a href="#">Download <span>↓</span></a></div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">?</div>
        <span class="tool-tag">Interactive · Web</span>
        <h3>I-CADMUS Quiz</h3>
        <p>A 20-question diagnostic that tells you which fraud type you're best at spotting and which deserves more attention. Free, no signup.</p>
        <div class="tool-meta"><small>10 minutes</small><a href="#">Take quiz <span>→</span></a></div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">✓</div>
        <span class="tool-tag">Industry · DOCX</span>
        <h3>Audit Checklist Generator</h3>
        <p>Generate a customised supplier-audit checklist for your category and risk profile. Outputs as Word and PDF for compliance teams.</p>
        <div class="tool-meta"><small>Generator · web</small><a href="#">Open tool <span>→</span></a></div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">A</div>
        <span class="tool-tag">Reference · PDF</span>
        <h3>Glossary Download</h3>
        <p>A printable A-Z reference of every term used in the I-CADMUS framework. Keep it next to the desk for procurement and policy work.</p>
        <div class="tool-meta"><small>16 pages · 1.2 MB</small><a href="#">Download <span>↓</span></a></div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">⌗</div>
        <span class="tool-tag">Demo · Web</span>
        <h3>QR Scanner Demo</h3>
        <p>See what end-to-end traceability looks like. Scan a sample I-CADMUS QR code and view the full vessel-to-plate provenance record.</p>
        <div class="tool-meta"><small>Mobile-friendly</small><a href="#">Try demo <span>→</span></a></div>
      </div>
      <div class="tool-card" style="background: var(--brand); color: #fff; border-color: var(--brand);">
        <div class="tool-icon" style="background: rgba(255,255,255,0.12); color: #fff;">★</div>
        <span class="tool-tag" style="color: #ffd25e;">Featured · Course</span>
        <h3 style="color: #fff;">Certification Course</h3>
        <p style="color: rgba(255,255,255,0.85);">The full eight-module course leading to the I-CADMUS Certified credential. Free to start. Self-paced.</p>
        <div class="tool-meta" style="border-color: rgba(255,255,255,0.18);"><small style="color: rgba(255,255,255,0.6);">12–15 hours</small><a href="certification.html" style="color: #ffd25e;">Enrol now <span>→</span></a></div>
      </div>
    </div>
  </div>
</section>

<!-- ============== WHITEPAPERS ============== -->
<section id="whitepapers" class="whitepapers">
  <div class="container">
    <div class="section-eyebrow">Whitepapers & Research</div>
    <h2 class="section-h">Long-form work from the <strong>I-CADMUS team.</strong></h2>
    <p class="section-sub">In-depth research papers and policy briefings written by the SCA team and academic partners.</p>

    <div class="whitepaper-list">
      <div class="whitepaper">
        <div>
          <span class="whitepaper-tag">Policy · 2026</span>
          <h3>The Five-Pillar Policy Playbook for Seafood Integrity</h3>
          <p>The full playbook of legislative and regulatory recommendations: mandatory naming, DNA verification, real penalties, supply-chain transparency, and consumer rights. Includes draft legislative language and implementation case studies.</p>
          <div class="meta">42 pages · 3.1 MB · By the SCA Policy Team</div>
        </div>
        <div class="whitepaper-actions">
          <a href="#" class="btn btn-primary">Download PDF <span class="arrow">↓</span></a>
        </div>
      </div>
      <div class="whitepaper">
        <div>
          <span class="whitepaper-tag">Case Study · 2025</span>
          <h3>How DNA Verification Exposed Retail-Scale Species Substitution</h3>
          <p>A 12-month research programme with a national retail chain. We tested 1,200 samples across 30 stores. Includes methodology, results, statistical analysis, and recommendations.</p>
          <div class="meta">28 pages · 2.4 MB · With Bond University</div>
        </div>
        <div class="whitepaper-actions">
          <a href="#" class="btn btn-primary">Download PDF <span class="arrow">↓</span></a>
        </div>
      </div>
      <div class="whitepaper">
        <div>
          <span class="whitepaper-tag">Briefing · 2026</span>
          <h3>Why Food Safety Has to Start with Truth in Labelling</h3>
          <p>A short briefing for food-safety practitioners on why I-CADMUS sits in front of HACCP, not against it. Aimed at industry training officers and regulators.</p>
          <div class="meta">12 pages · 0.8 MB · By Hon Prof Roy D. Palmer</div>
        </div>
        <div class="whitepaper-actions">
          <a href="#" class="btn btn-primary">Download PDF <span class="arrow">↓</span></a>
        </div>
      </div>
      <div class="whitepaper">
        <div>
          <span class="whitepaper-tag">Research · 2025</span>
          <h3>The Economic Cost of Seafood Fraud in OECD Markets</h3>
          <p>An estimate of the consumer-welfare loss caused by mislabelling, dilution, and substitution across major OECD seafood markets, with sensitivity analysis on enforcement scenarios.</p>
          <div class="meta">68 pages · 4.7 MB · Working paper</div>
        </div>
        <div class="whitepaper-actions">
          <a href="#" class="btn btn-primary">Download PDF <span class="arrow">↓</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== GLOSSARY ============== -->
<section id="glossary">
  <div class="container">
    <div class="section-eyebrow">A–Z Glossary</div>
    <h2 class="section-h">The <strong>complete glossary</strong> of seafood-fraud terms.</h2>
    <p class="section-sub">Every term used in the I-CADMUS framework, defined plainly. Bookmark this page or download the printable PDF in the Tools section.</p>

    <div class="glossary-jumpnav" aria-label="Jump to letter">
      <a href="#g-a">A</a><a href="#g-c">C</a><a href="#g-d">D</a><a href="#g-g">G</a><a href="#g-h">H</a><a href="#g-i">I</a><a href="#g-m">M</a><a href="#g-p">P</a><a href="#g-s">S</a><a href="#g-t">T</a><a href="#g-u">U</a><a href="#g-w">W</a>
    </div>

    <div class="glossary-letter" id="g-a">
      <div class="glossary-letter-h">A</div>
      <dl>
        <div class="glossary-term"><dt>Adulteration</dt><dd>The third I-CADMUS category. Adding undisclosed substances — chemicals, water, brines, additives — to seafood to bulk weight or mask quality.</dd></div>
        <div class="glossary-term"><dt>AS 5300</dt><dd>Australian Standard for fish names. The reference for legal species nomenclature in Australian commerce. I-CADMUS recommends AS 5300 (or local equivalent) as foundational policy.</dd></div>
        <div class="glossary-term"><dt>Audit checklist</dt><dd>A structured list of supplier-verification questions and tests, generated for a specific product category and risk profile. Available as a free I-CADMUS tool.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-c">
      <div class="glossary-letter-h">C</div>
      <dl>
        <div class="glossary-term"><dt>Catch documentation</dt><dd>Vessel-level records linking a specific catch to a specific vessel, location, and time. Required to detect IUU laundering at port of entry.</dd></div>
        <div class="glossary-term"><dt>Codex Alimentarius</dt><dd>The international food code maintained by FAO and WHO. I-CADMUS aligns with Codex traceability and labelling standards.</dd></div>
        <div class="glossary-term"><dt>Counterfeit</dt><dd>The second I-CADMUS category. Forged certifications, fabricated origin claims, and manufactured brand identities applied to product with no legitimate provenance.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-d">
      <div class="glossary-letter-h">D</div>
      <dl>
        <div class="glossary-term"><dt>Deglazing</dt><dd>Removing the protective ice glaze applied to frozen seafood, usually by thawing under cold running water. Essential for measuring true net weight.</dd></div>
        <div class="glossary-term"><dt>Dilution</dt><dd>The fourth I-CADMUS category. Adding ice glaze, water, or cheaper species to make a pack appear heavier or more premium than it is.</dd></div>
        <div class="glossary-term"><dt>DNA verification</dt><dd>Laboratory testing that confirms the species of a seafood sample by genetic markers. The single most decisive tool against substitution fraud.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-g">
      <div class="glossary-letter-h">G</div>
      <dl>
        <div class="glossary-term"><dt>Glazing</dt><dd>A thin protective ice coating applied to frozen seafood to prevent freezer burn. Legitimate at 5–10% by weight; fraud territory begins around 20%+.</dd></div>
        <div class="glossary-term"><dt>Grey channel</dt><dd>An informal supply route where seafood moves through a chain that bypasses standard traceability. See <em>Unreported</em>.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-h">
      <div class="glossary-letter-h">H</div>
      <dl>
        <div class="glossary-term"><dt>HACCP</dt><dd>Hazard Analysis and Critical Control Points. The food-safety management system the seafood industry leans on. I-CADMUS sits in front of HACCP — answering "is this product what it claims to be?" before HACCP asks "is it safe?"</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-i">
      <div class="glossary-letter-h">I</div>
      <dl>
        <div class="glossary-term"><dt>I-CADMUS</dt><dd>The seven-category seafood-fraud taxonomy: Illegal, Counterfeit, Adulteration, Dilution, Misrepresentation, Unreported, Substitution. Published by the Seafood Consumer Association.</dd></div>
        <div class="glossary-term"><dt>Illegal (IUU)</dt><dd>The first I-CADMUS category. Catch from illegal, unreported, and unregulated fishing laundered into legitimate supply chains via paperwork manipulation and port-hopping.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-m">
      <div class="glossary-letter-h">M</div>
      <dl>
        <div class="glossary-term"><dt>Misrepresentation</dt><dd>The fifth I-CADMUS category. False origin, harvest-method, or sustainability claims while the species itself is correctly identified.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-p">
      <div class="glossary-letter-h">P</div>
      <dl>
        <div class="glossary-term"><dt>Phosphate treatment</dt><dd>Soaking seafood (commonly scallops, prawns, white fish) in phosphate solutions that bind water and increase pack weight. Legitimate when disclosed; fraud when undisclosed.</dd></div>
        <div class="glossary-term"><dt>Port-state measures</dt><dd>Inspection and documentation requirements for fishing vessels at port of entry. Critical for catching IUU laundering before product enters the legal supply chain.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-s">
      <div class="glossary-letter-h">S</div>
      <dl>
        <div class="glossary-term"><dt>SCA</dt><dd>Seafood Consumer Association. The independent body that publishes I-CADMUS and operates the certification network.</dd></div>
        <div class="glossary-term"><dt>Substitution</dt><dd>The seventh I-CADMUS category. Selling one species under another's name. The most familiar fraud and the costliest to consumer trust.</dd></div>
        <div class="glossary-term"><dt>Sulphites</dt><dd>Preservatives used to prevent black-spot in prawns and other crustaceans. A common allergen that must be disclosed; undisclosed use falls under <em>Adulteration</em>.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-t">
      <div class="glossary-letter-h">T</div>
      <dl>
        <div class="glossary-term"><dt>Traceability</dt><dd>The ability to follow a product through every step of its supply chain, from vessel to plate. End-to-end traceability is the backbone of fraud prevention.</dd></div>
        <div class="glossary-term"><dt>Transhipment</dt><dd>Transferring catch between vessels at sea. A common laundering point where IUU product is mixed with legal product and documentation is rewritten.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-u">
      <div class="glossary-letter-h">U</div>
      <dl>
        <div class="glossary-term"><dt>Unreported</dt><dd>The sixth I-CADMUS category. Product moving through informal supply chains that bypass standard traceability requirements.</dd></div>
      </dl>
    </div>

    <div class="glossary-letter" id="g-w">
      <div class="glossary-letter-h">W</div>
      <dl>
        <div class="glossary-term"><dt>Wild-caught</dt><dd>A method claim asserting product was harvested from natural fisheries rather than aquaculture. Often falsified — see <em>Misrepresentation</em>.</dd></div>
      </dl>
    </div>
  </div>
</section>

<!-- ============== FAQ ============== -->
<section id="faq" style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">Common questions</div>
    <h2 class="section-h" style="text-align: center; margin: 0 auto 16px;">Frequently asked questions</h2>

    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q"><span>Is I-CADMUS a regulator or a standards body?</span><span>+</span></div>
        <div class="faq-a">Neither. I-CADMUS is a framework published by the Seafood Consumer Association — an independent advocacy body. We work alongside regulators (AS 5300, FRDC, Codex) but we don't have enforcement powers ourselves. Our role is to give the industry a shared classification language.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>How do I report seafood fraud I've spotted?</span><span>+</span></div>
        <div class="faq-a">Use the public reporting form on the Contact page. Reports are forwarded to relevant regulators where appropriate, and aggregated (anonymously) to inform our annual fraud pattern report.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>Can I cite I-CADMUS in academic or policy work?</span><span>+</span></div>
        <div class="faq-a">Yes. The framework, glossary, and whitepapers are released for reference and citation. The book <em>Sea of Deception</em> (forthcoming, 2026) will carry the formal citation reference. Please email us if you need an early citation block.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>How is this different from existing food-fraud frameworks?</span><span>+</span></div>
        <div class="faq-a">Most general food-fraud frameworks are too generic to be useful in seafood specifically — and most seafood-specific work focuses on substitution alone. I-CADMUS is the first seven-category taxonomy built for the seafood industry, by industry practitioners, paired with certification and policy infrastructure.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>Are the tools really free?</span><span>+</span></div>
        <div class="faq-a">Yes. The scorecard, quiz, glossary, and the consumer tier of the certification course are free and will remain so. We charge for business and industry tiers because they include audit tooling, support, and partner-network features.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Need a <strong>specific tool</strong> built for your team?</h2>
        <p>Industry and regulator partners can request bespoke audit templates, training materials, or research extracts. Most are delivered within four weeks.</p>
      </div>
      <div class="cta-band-actions">
        <a href="contact.html" class="btn btn-primary btn-lg">Request a tool <span class="arrow">→</span></a>
        <a href="certification.html" class="btn btn-outline btn-lg">View certification</a>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const sections = ['tools', 'whitepapers', 'glossary', 'faq'].map(id => document.getElementById(id)).filter(Boolean);
  const links = document.querySelectorAll('.resource-nav a');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        links.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
      }
    });
  }, { rootMargin: '-20% 0px -70% 0px' });
  sections.forEach(s => observer.observe(s));
});
document.querySelectorAll('.faq-item').forEach(item => {
  item.addEventListener('click', () => {
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
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
