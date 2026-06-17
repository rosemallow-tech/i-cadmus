<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sea of Deception | I-CADMUS — The book by Roy D. Palmer</title>
<meta name="description" content="Sea of Deception: Exposing seafood fraud and restoring trust from ocean to plate. The 2026 book by Hon Prof Roy D. Palmer that founded the I-CADMUS framework." />

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
  /* ============== BOOK PAGE STYLES ============== */
  .book-hero {
    background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand) 50%, var(--brand-light) 100%);
    color: #fff;
    padding: 80px 0 100px;
    position: relative;
    overflow: hidden;
  }
  .book-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 30%, rgba(0,131,143,0.3), transparent 60%);
    pointer-events: none;
  }
  .book-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 80px;
    align-items: center;
    position: relative;
    z-index: 1;
  }
  .book-cover {
    aspect-ratio: 2/3;
    background: linear-gradient(155deg, #0d2419 0%, #1d3d2f 40%, #2d4a3e 70%, #486b58 100%);
    border-radius: 6px;
    box-shadow: 0 40px 80px -20px rgba(0,0,0,0.6), 0 18px 36px -12px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.1);
    padding: 48px 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: #f3efe9;
    transform: rotate(-3deg);
    transition: transform 0.6s;
    max-width: 420px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
  }
  .book-cover:hover { transform: rotate(0deg) scale(1.02); }
  .book-cover::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 80%, rgba(255,255,255,0.08), transparent 50%);
    pointer-events: none;
  }
  .book-cover-top {
    font-size: 11px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    opacity: 0.7;
    position: relative;
    z-index: 1;
  }
  .book-cover-title {
    font-family: var(--serif);
    font-size: 56px;
    line-height: 0.92;
    letter-spacing: -0.02em;
    position: relative;
    z-index: 1;
    font-weight: 600;
  }
  .book-cover-title small {
    display: block;
    font-family: var(--sans);
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    margin-top: 24px;
    opacity: 0.8;
  }
  .book-cover-author {
    font-size: 13px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    opacity: 0.85;
    position: relative;
    z-index: 1;
  }

  .book-hero-info .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 24px;
  }
  .book-hero-info .breadcrumb a { color: rgba(255,255,255,0.85); }
  .book-hero-info .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .book-hero-info .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .book-hero-info .breadcrumb .current { color: #fff; }
  .book-hero-eyebrow {
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
  .book-hero h1 {
    font-family: var(--serif);
    font-weight: 600;
    font-size: clamp(40px, 5.5vw, 64px);
    line-height: 1.05;
    letter-spacing: -0.02em;
    margin-bottom: 20px;
    color: #fff;
  }
  .book-hero p.lede {
    font-size: 19px;
    color: rgba(255,255,255,0.85);
    margin-bottom: 32px;
    max-width: 56ch;
    line-height: 1.5;
  }
  .book-hero-author {
    font-size: 14px;
    color: rgba(255,255,255,0.75);
    border-top: 1px solid rgba(255,255,255,0.15);
    padding-top: 20px;
    margin-bottom: 28px;
  }
  .book-hero-author strong { color: #fff; font-weight: 600; }
  .book-meta {
    display: flex;
    gap: 32px;
    margin-bottom: 32px;
    flex-wrap: wrap;
  }
  .book-meta-item small {
    display: block;
    font-size: 11px;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 4px;
  }
  .book-meta-item span { font-size: 16px; font-weight: 600; color: #fff; }
  .book-actions { display: flex; gap: 14px; flex-wrap: wrap; }
  .book-hero .btn-outline { color: #fff; border-color: rgba(255,255,255,0.4); }
  .book-hero .btn-outline:hover { background: #fff; color: var(--brand); border-color: #fff; }

  .prose { max-width: 820px; margin: 0 auto; }
  .prose p { font-size: 17px; color: var(--ink-2); line-height: 1.65; margin-bottom: 20px; }
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

  .book-parts-section { background: var(--bg-soft); }
  .book-parts {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 48px;
  }
  .book-part {
    background: #fff;
    border: 1px solid var(--line);
    border-left: 4px solid var(--brand);
    padding: 28px;
    border-radius: 4px;
    transition: border-left-color 0.2s, transform 0.2s;
  }
  .book-part:hover { border-left-color: var(--accent); transform: translateX(4px); }
  .book-part .roman {
    font-family: var(--serif);
    font-size: 32px;
    font-weight: 600;
    color: var(--accent);
    line-height: 1;
    margin-bottom: 14px;
  }
  .book-part h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 10px;
    line-height: 1.25;
  }
  .book-part p { font-size: 14px; color: var(--ink-2); line-height: 1.55; }
  .book-part.featured {
    grid-column: span 2;
    background: var(--brand);
    color: #fff;
    border-left-color: var(--gold);
  }
  .book-part.featured h3 { color: #fff; }
  .book-part.featured p { color: rgba(255,255,255,0.85); }
  .book-part.featured .roman { color: #ffd25e; }

  .praise-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .praise-card {
    border: 1px solid var(--line);
    padding: 28px;
    border-radius: 6px;
    background: #fff;
    transition: box-shadow 0.2s;
  }
  .praise-card:hover { box-shadow: var(--shadow-md); }
  .praise-card blockquote {
    font-family: var(--serif);
    font-size: 17px;
    color: var(--ink);
    line-height: 1.45;
    margin-bottom: 20px;
    font-style: italic;
  }
  .praise-card .praise-author {
    border-top: 1px solid var(--line);
    padding-top: 14px;
  }
  .praise-card .praise-author strong {
    display: block;
    font-size: 14px;
    color: var(--brand);
    font-weight: 600;
  }
  .praise-card .praise-author span { font-size: 12px; color: var(--ink-3); }

  .cases { background: var(--brand-dark); color: #fff; }
  .cases .section-eyebrow { color: #ff6b81; }
  .cases .section-eyebrow::before { background: #ff6b81; }
  .cases .section-h { color: #fff; }
  .cases .section-sub { color: rgba(255,255,255,0.75); }
  .cases-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-top: 48px;
  }
  .case-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.12);
    padding: 24px;
    border-radius: 6px;
    transition: background 0.2s, border-color 0.2s;
    cursor: pointer;
  }
  .case-card:hover { background: rgba(255,255,255,0.08); border-color: var(--gold); }
  .case-num {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--gold);
    line-height: 1;
    margin-bottom: 14px;
  }
  .case-card h4 {
    font-family: var(--serif);
    font-size: 17px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 10px;
    line-height: 1.3;
  }
  .case-card p {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    line-height: 1.5;
    margin-bottom: 12px;
  }
  .case-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 700;
    color: var(--gold);
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }

  .preorder { background: var(--bg-soft); }
  .preorder-card {
    background: #fff;
    border: 1px solid var(--line);
    border-top: 6px solid var(--accent);
    border-radius: 6px;
    padding: 48px;
    margin-top: 48px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 48px;
    align-items: center;
  }
  .preorder-card h3 {
    font-family: var(--serif);
    font-size: 28px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
  }
  .preorder-card > div > p { font-size: 16px; color: var(--ink-2); margin-bottom: 16px; }
  .preorder-list { list-style: none; padding: 0; margin: 16px 0 0; }
  .preorder-list li {
    font-size: 14px;
    color: var(--ink-2);
    padding: 6px 0;
    display: flex;
    gap: 10px;
  }
  .preorder-list li::before { content: '✓'; color: var(--accent); font-weight: 700; }
  .preorder-actions { display: flex; flex-direction: column; gap: 12px; }
  .preorder-price { text-align: center; margin-bottom: 8px; }
  .preorder-price strong {
    display: block;
    font-family: var(--serif);
    font-size: 32px;
    font-weight: 600;
    color: var(--brand);
    line-height: 1;
  }
  .preorder-price small {
    font-size: 12px;
    color: var(--ink-3);
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }

  @media (max-width: 1100px) {
    .book-hero-grid { grid-template-columns: 1fr; gap: 48px; }
    .book-cover { transform: rotate(0); max-width: 300px; }
    .book-parts { grid-template-columns: 1fr; }
    .book-part.featured { grid-column: span 1; }
    .praise-grid { grid-template-columns: 1fr; }
    .cases-grid { grid-template-columns: 1fr 1fr; }
    .preorder-card { grid-template-columns: 1fr; gap: 24px; padding: 32px; }
  }
  @media (max-width: 640px) {
    .cases-grid { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== BOOK HERO ============== -->
<section class="book-hero">
  <div class="container">
    <div class="book-hero-grid">
      <div class="book-cover">
        <div class="book-cover-top">Seafood Consumer Association · 2026</div>
        <div class="book-cover-title">
          Sea of <br>Deception
          <small>Exposing seafood fraud — and restoring trust from ocean to plate</small>
        </div>
        <div class="book-cover-author">Hon Prof Roy D. Palmer, MBA</div>
      </div>
      <div class="book-hero-info">
        <div class="breadcrumb">
          <a href="i-cadmus-v3-corporate.html">Home</a>
          <span class="sep">/</span>
          <span class="current">The Book</span>
        </div>
        <div class="book-hero-eyebrow">Available 2026 · Now in preorder</div>
        <h1>Sea of Deception.</h1>
        <p class="lede">In a world where seafood nourishes billions yet hides billions in deception — this is the unvarnished truth, and the tools to fight back. The book that founded the I-CADMUS framework.</p>
        <div class="book-hero-author">
          By <strong>Hon Prof Roy D. Palmer, MBA</strong> · CEO, Seafood Consumer Association
        </div>
        <div class="book-meta">
          <div class="book-meta-item"><small>Pages</small><span>320 approx.</span></div>
          <div class="book-meta-item"><small>Publisher</small><span>SCA Press</span></div>
          <div class="book-meta-item"><small>Edition</small><span>First, 2026</span></div>
          <div class="book-meta-item"><small>ISBN</small><span>Forthcoming</span></div>
        </div>
        <div class="book-actions">
          <a href="#preorder" class="btn btn-primary btn-lg">Preorder the book <span class="arrow">→</span></a>
          <a href="#parts" class="btn btn-outline btn-lg">Read the synopsis</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== INTRODUCTION ============== -->
<section>
  <div class="container">
    <div class="prose">
      <div class="section-eyebrow">From the Author</div>
      <h2 class="section-h" style="max-width:none;">A book that started with one question.</h2>
      <p>After fifty years in the seafood industry, I kept coming back to the same observation: the same kinds of fraud were happening over and over, in every market I worked in, under different names and different cover stories. Substitution. Dilution. Adulteration. Illegal laundering. The categories were never new — but nobody had named them, classified them, or given them a shared language.</p>
      <p>So I did. Seven categories. One taxonomy. <em>Sea of Deception</em> is the book that walks through each, with the cases, the cover stories, the policy gaps, and the playbook to close them. It's written for the consumer who walks up to the counter and wants to know what's really in the pack — and for the regulator who's tired of writing rules that fraudsters route around.</p>
      <blockquote>This book isn't despair. It's a playbook.</blockquote>
      <p>The framework, the certification course, and the open publications register at i-cadmus.org are all built around the chapters of this book. Read the book first; then come back here to test what you've learned against the eight live case studies in Chapter 14.</p>
    </div>
  </div>
</section>

<!-- ============== BOOK PARTS / TOC ============== -->
<section id="parts" class="book-parts-section">
  <div class="container">
    <div class="section-eyebrow">Inside the book</div>
    <h2 class="section-h">Seven parts. <strong>One coherent argument.</strong></h2>
    <p class="section-sub">From the conditions that make seafood fraud possible, through the seven categories of the I-CADMUS taxonomy, to the policy playbook and the consumer steps you can take Monday morning.</p>

    <div class="book-parts">
      <div class="book-part">
        <div class="roman">I</div>
        <h3>Why seafood is vulnerable</h3>
        <p>The conditions fraud needs: long opaque supply chains, weak labelling laws, fragmented regulation, and consumers who can't visually distinguish species or detect adulteration.</p>
      </div>
      <div class="book-part">
        <div class="roman">II</div>
        <h3>I-CADMUS deep dive</h3>
        <p>One chapter per fraud type. Definition, mechanism, real-world examples, red flags, counter-measures. The technical heart of the book.</p>
      </div>
      <div class="book-part">
        <div class="roman">III</div>
        <h3>Governance failures</h3>
        <p>Why voluntary standards fail. Why fragmented jurisdiction creates laundering pathways. Why the "processed in" loophole undermines origin labelling.</p>
      </div>
      <div class="book-part">
        <div class="roman">IV</div>
        <h3>The five-pillar playbook</h3>
        <p>Mandatory naming, DNA verification, real penalties, supply-chain transparency, consumer rights — the policy framework that closes the gaps.</p>
      </div>
      <div class="book-part">
        <div class="roman">V</div>
        <h3>Forces converging</h3>
        <p>What the next decade looks like: cheap DNA testing, traceability technology, a generational low in consumer trust, and the political opening they create.</p>
      </div>
      <div class="book-part">
        <div class="roman">VI</div>
        <h3>Eight consumer steps + the movement</h3>
        <p>What you do on Monday morning at the supermarket. What you ask the waiter. How you spot a label that lies. How you join the I-CADMUS-certified network.</p>
      </div>
      <div class="book-part featured">
        <div class="roman">VII</div>
        <h3>Eight real case studies — test your skills</h3>
        <p>Chapter 14 sets eight real-world scenarios. Read them, classify the fraud type using the I-CADMUS framework, then submit your answers on i-cadmus.org. Compare your accuracy against industry, regulators, and certified consumers worldwide. <strong>Answers and certification available at i-cadmus.org.</strong></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== CASE STUDIES PREVIEW ============== -->
<section class="cases">
  <div class="container">
    <div class="section-eyebrow">Chapter 14</div>
    <h2 class="section-h">Eight live case studies. <strong>Test your skills.</strong></h2>
    <p class="section-sub">Each case is drawn from real investigations. After reading, classify which I-CADMUS category (or combination) is at play. Submit your answers at i-cadmus.org and benchmark against the global certified network.</p>

    <div class="cases-grid">
      <div class="case-card">
        <div class="case-num">01</div>
        <h4>The supermarket snapper</h4>
        <p>A national chain advertises Australian snapper at a price 60% below market wholesale. Investigation reveals…</p>
        <span class="case-tag">Substitution suspected</span>
      </div>
      <div class="case-card">
        <div class="case-num">02</div>
        <h4>The frozen prawn pack</h4>
        <p>A 1kg pack of frozen prawns weighs 612g after thawing. The label declares "5% glaze."</p>
        <span class="case-tag">Dilution + Misrepresentation</span>
      </div>
      <div class="case-card">
        <div class="case-num">03</div>
        <h4>The sustainable salmon</h4>
        <p>A "wild-caught Atlantic salmon" promotion runs in February. There is no commercial wild Atlantic salmon fishery.</p>
        <span class="case-tag">Misrepresentation</span>
      </div>
      <div class="case-card">
        <div class="case-num">04</div>
        <h4>The forged certification</h4>
        <p>An MSC-marked tuna imported in volume can't be matched to any record in the certifier's public database.</p>
        <span class="case-tag">Counterfeit</span>
      </div>
      <div class="case-card">
        <div class="case-num">05</div>
        <h4>The grey-channel scampi</h4>
        <p>A high-end restaurant lists "wild-caught local scampi" at $90/kg. The supplier can produce no traceability documentation.</p>
        <span class="case-tag">Unreported</span>
      </div>
      <div class="case-card">
        <div class="case-num">06</div>
        <h4>The phosphate scallops</h4>
        <p>Premium scallops cook out 35% of their packed weight. The ingredient panel lists "scallop, water."</p>
        <span class="case-tag">Adulteration</span>
      </div>
      <div class="case-card">
        <div class="case-num">07</div>
        <h4>The transhipped tuna</h4>
        <p>A consignment of yellowfin tuna shows port-state records inconsistent with vessel AIS data over a six-week period.</p>
        <span class="case-tag">Illegal · IUU</span>
      </div>
      <div class="case-card">
        <div class="case-num">08</div>
        <h4>The "fish of the day"</h4>
        <p>DNA testing of "fish of the day" specials across 30 restaurants finds 18 different species under the same name.</p>
        <span class="case-tag">Substitution</span>
      </div>
    </div>

    <div style="text-align: center; margin-top: 48px;">
      <a href="certification.html" class="btn btn-primary btn-lg" style="background: var(--gold); border-color: var(--gold); color: var(--brand-dark);">Submit your answers & get certified <span class="arrow">→</span></a>
    </div>
  </div>
</section>

<!-- ============== PRAISE ============== -->
<section>
  <div class="container">
    <div class="section-eyebrow">Early Praise</div>
    <h2 class="section-h">What readers are saying.</h2>

    <div class="praise-grid">
      <div class="praise-card">
        <blockquote>"The first time anyone has given me a single language for what I've been seeing for years across procurement audits."</blockquote>
        <div class="praise-author">
          <strong>Procurement Director</strong>
          <span>Major Australian retailer</span>
        </div>
      </div>
      <div class="praise-card">
        <blockquote>"An indispensable framework. The case studies in Chapter 14 alone are worth the cover price for any seafood policy practitioner."</blockquote>
        <div class="praise-author">
          <strong>Senior Policy Advisor</strong>
          <span>Government regulator</span>
        </div>
      </div>
      <div class="praise-card">
        <blockquote>"I will never look at a supermarket fish counter the same way again. Palmer has written the consumer's missing manual."</blockquote>
        <div class="praise-author">
          <strong>Food Editor</strong>
          <span>National news publication</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== PREORDER ============== -->
<section class="preorder" id="preorder">
  <div class="container">
    <div class="section-eyebrow">Preorder</div>
    <h2 class="section-h">Reserve your copy. <strong>Get certified.</strong></h2>
    <p class="section-sub">Preorders ship at launch in 2026 and include access to the I-CADMUS certification course alongside the book.</p>

    <div class="preorder-card">
      <div>
        <h3>Sea of Deception — First Edition</h3>
        <p>Hardcover, 320 pages. Includes complimentary access to the online I-CADMUS certification course (normally available separately) and downloadable copies of the framework whitepaper and policy playbook.</p>
        <ul class="preorder-list">
          <li>Hardcover, 320 pages, full colour case-study inserts</li>
          <li>Complimentary I-CADMUS certification enrolment</li>
          <li>Five-pillar policy playbook (PDF)</li>
          <li>Audit checklist generator (12-month access)</li>
          <li>First-edition signed bookplate (limited preorder run)</li>
        </ul>
      </div>
      <div class="preorder-actions">
        <div class="preorder-price">
          <strong>$59 AUD</strong>
          <small>Preorder price · ships 2026</small>
        </div>
        <a href="contact.php" class="btn btn-primary btn-lg">Preorder now <span class="arrow">→</span></a>
        <a href="contact.php" class="btn btn-outline">Bulk orders (10+ copies)</a>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Read first. <strong>Then put it to work.</strong></h2>
        <p>The book pairs with the certification course — read the framework, then test yourself on the case studies and join the certified network.</p>
      </div>
      <div class="cta-band-actions">
        <a href="certification.html" class="btn btn-primary btn-lg">Get certified <span class="arrow">→</span></a>
        <a href="contact.html" class="btn btn-outline btn-lg">Contact the author</a>
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
