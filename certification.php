<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Certification | I-CADMUS — Earn the seafood integrity credential</title>
<meta name="description" content="Earn the I-CADMUS certification. Self-paced, case-driven, free to start. For consumers, retail, processors, and regulators." />

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
  /* ============== CERTIFICATION PAGE STYLES ============== */
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
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; }
  .breadcrumb a { color: rgba(255,255,255,0.85); }
  .breadcrumb a:hover { color: #fff; text-decoration: underline; }
  .breadcrumb .sep { color: rgba(255,255,255,0.4); }
  .breadcrumb .current { color: #fff; }
  .page-hero-eyebrow {
    display: inline-flex; align-items: center; gap: 12px;
    font-size: 13px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase;
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
  .page-hero .lede { font-size: 19px; color: rgba(255,255,255,0.88); max-width: 60ch; line-height: 1.5; }

  .steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .step {
    background: var(--bg-soft);
    padding: 32px 28px;
    border-radius: 6px;
    border-top: 4px solid var(--accent);
  }
  .step-num {
    font-family: var(--serif);
    font-size: 48px;
    font-weight: 600;
    color: var(--accent);
    line-height: 1;
    margin-bottom: 16px;
  }
  .step h3 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 10px;
  }
  .step p { font-size: 14px; color: var(--ink-2); line-height: 1.55; }
  .step .meta {
    font-size: 12px; color: var(--ink-3);
    text-transform: uppercase; letter-spacing: 0.06em;
    font-weight: 600; margin-top: 14px;
  }

  .curriculum-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 48px;
  }
  .curr-block {
    background: var(--bg-soft);
    padding: 28px;
    border-radius: 4px;
    border-left: 4px solid var(--brand);
  }
  .curr-block .module-num {
    font-family: var(--serif);
    font-size: 14px; color: var(--accent);
    font-weight: 700; letter-spacing: 0.06em;
    text-transform: uppercase; margin-bottom: 8px;
  }
  .curr-block h3 {
    font-family: var(--serif);
    font-size: 22px; font-weight: 600;
    color: var(--brand); margin-bottom: 10px;
  }
  .curr-block p { font-size: 14px; color: var(--ink-2); line-height: 1.55; margin-bottom: 14px; }
  .curr-block .meta {
    font-size: 12px; color: var(--ink-3);
    text-transform: uppercase; letter-spacing: 0.06em; font-weight: 600;
  }

  .pathways-bg { background: var(--bg-soft); }
  .pathway-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .pathway {
    background: #fff;
    border: 1px solid var(--line);
    border-top: 6px solid var(--brand);
    padding: 36px;
    border-radius: 4px;
    transition: box-shadow 0.2s, border-top-color 0.2s;
  }
  .pathway:hover { box-shadow: var(--shadow-md); border-top-color: var(--accent); }
  .pathway h3 {
    font-family: var(--serif);
    font-size: 24px; font-weight: 600;
    color: var(--brand); margin-bottom: 12px;
  }
  .pathway-tag {
    font-size: 11px; color: var(--accent);
    font-weight: 700; letter-spacing: 0.1em;
    text-transform: uppercase; margin-bottom: 8px; display: block;
  }
  .pathway p { font-size: 15px; color: var(--ink-2); line-height: 1.6; margin-bottom: 20px; }
  .pathway ul { list-style: none; padding: 0; margin: 0 0 24px; }
  .pathway li {
    padding: 8px 0; border-bottom: 1px solid var(--line);
    font-size: 14px; color: var(--ink-2);
    display: flex; gap: 12px;
  }
  .pathway li::before { content: '→'; color: var(--brand); font-weight: 700; }

  .tiers-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-top: 48px;
  }
  .tier {
    background: #fff;
    border: 1px solid var(--line);
    padding: 32px 24px;
    border-radius: 6px;
    transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
    display: flex; flex-direction: column;
  }
  .tier:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); border-color: var(--brand-light); }
  .tier-tag {
    font-size: 11px; color: var(--accent);
    font-weight: 700; letter-spacing: 0.1em;
    text-transform: uppercase; margin-bottom: 14px;
  }
  .tier h3 {
    font-family: var(--serif);
    font-size: 22px; font-weight: 600;
    color: var(--brand); margin-bottom: 12px;
  }
  .tier-price {
    font-family: var(--serif);
    font-size: 36px; font-weight: 600;
    color: var(--brand); line-height: 1; margin-bottom: 4px;
  }
  .tier-price small {
    font-size: 14px; color: var(--ink-3);
    font-family: var(--sans); font-weight: 400;
  }
  .tier-cycle {
    font-size: 12px; color: var(--ink-3);
    margin-bottom: 24px; text-transform: uppercase; letter-spacing: 0.06em;
  }
  .tier-features {
    list-style: none; padding: 0; margin: 0 0 32px;
    border-top: 1px solid var(--line); flex: 1;
  }
  .tier-features li {
    padding: 10px 0; font-size: 13px; color: var(--ink-2);
    border-bottom: 1px solid var(--line);
    display: flex; gap: 10px; line-height: 1.5;
  }
  .tier-features li::before { content: '✓'; color: var(--accent); font-weight: 700; flex-shrink: 0; }
  .tier-features li.dim { color: var(--ink-3); }
  .tier-features li.dim::before { content: '—'; color: var(--ink-3); }
  .tier.featured {
    background: var(--brand); color: #fff;
    border-color: var(--brand);
    position: relative; transform: scale(1.02);
  }
  .tier.featured h3 { color: #fff; }
  .tier.featured .tier-tag { color: #ffd25e; }
  .tier.featured .tier-price { color: #fff; }
  .tier.featured .tier-cycle { color: rgba(255,255,255,0.7); }
  .tier.featured .tier-features { border-color: rgba(255,255,255,0.18); }
  .tier.featured .tier-features li { color: rgba(255,255,255,0.9); border-bottom-color: rgba(255,255,255,0.12); }
  .tier.featured .tier-features li::before { color: #ffd25e; }
  .tier.featured::before {
    content: 'Most popular';
    position: absolute; top: -12px; left: 50%;
    transform: translateX(-50%);
    background: var(--gold); color: var(--brand-dark);
    font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    padding: 5px 12px; border-radius: 100px;
  }

  .faq-list { max-width: 820px; margin: 48px auto 0; }
  .faq-item {
    border-top: 1px solid var(--line);
    padding: 20px 0;
    cursor: pointer;
  }
  .faq-item:last-child { border-bottom: 1px solid var(--line); }
  .faq-q {
    display: flex; justify-content: space-between;
    align-items: center; gap: 24px;
    font-family: var(--serif);
    font-size: 19px; font-weight: 600;
    color: var(--brand);
  }
  .faq-q span:last-child {
    font-size: 24px; color: var(--ink-3);
    transition: transform 0.3s; font-weight: 300;
  }
  .faq-item.open .faq-q span:last-child { transform: rotate(45deg); color: var(--accent); }
  .faq-a {
    max-height: 0; overflow: hidden;
    transition: max-height 0.4s ease, margin 0.3s;
    color: var(--ink-2); font-size: 15px; line-height: 1.6;
  }
  .faq-item.open .faq-a { max-height: 320px; margin-top: 12px; }

  @media (max-width: 1100px) {
    .page-hero { padding: 56px 0 72px; }
    .steps-grid { grid-template-columns: 1fr; }
    .curriculum-grid { grid-template-columns: 1fr; }
    .pathway-grid { grid-template-columns: 1fr; }
    .tiers-grid { grid-template-columns: 1fr 1fr; }
    .tier.featured { transform: none; }
  }
  @media (max-width: 640px) {
    .tiers-grid { grid-template-columns: 1fr; }
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
        <span class="current">Certification</span>
      </div>
      <div class="page-hero-eyebrow">Certification — Edition 2026</div>
      <h1>Earn the credential. <strong>Apply the standard.</strong></h1>
      <p class="lede">The I-CADMUS certification is for anyone who needs a verifiable, shared standard for spotting seafood fraud — consumers, retail, processors, and regulators. Self-paced, case-driven, and free to start.</p>
    </div>
  </div>
</section>

<!-- ============== HOW IT WORKS ============== -->
<section>
  <div class="container">
    <div class="section-eyebrow">How it works</div>
    <h2 class="section-h">Three stages. <strong>Self-paced.</strong> Free to start.</h2>
    <p class="section-sub">A proven path from awareness to capability — built around the way real consumers, retailers, and regulators absorb and apply new frameworks.</p>

    <div class="steps-grid">
      <div class="step">
        <div class="step-num">01</div>
        <h3>Learn the framework</h3>
        <p>Read <em>Sea of Deception</em> and complete the eight online learning modules covering each I-CADMUS category in depth.</p>
        <div class="meta">Approx. 6–8 hours</div>
      </div>
      <div class="step">
        <div class="step-num">02</div>
        <h3>Test on real cases</h3>
        <p>Submit your classifications for the eight Chapter 14 case studies. Compare your accuracy against the global certified network.</p>
        <div class="meta">2–3 hours of practice</div>
      </div>
      <div class="step">
        <div class="step-num">03</div>
        <h3>Earn the credential</h3>
        <p>Pass the 90-minute final assessment. Receive your verifiable I-CADMUS Certified credential and join the global network.</p>
        <div class="meta">90-minute final exam</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CURRICULUM ============== -->
<section style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">The Curriculum</div>
    <h2 class="section-h">Eight modules. <strong>Plus the case-study capstone.</strong></h2>
    <p class="section-sub">Each module corresponds to a chapter of <em>Sea of Deception</em> and includes interactive exercises, downloadable resources, and short comprehension checks.</p>

    <div class="curriculum-grid">
      <div class="curr-block">
        <div class="module-num">Module 01</div>
        <h3>Why seafood is vulnerable</h3>
        <p>The structural conditions that make seafood the world's most fraud-prone food category. Sets up everything that follows.</p>
        <div class="meta">45 min · Reading + 2 exercises</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 02</div>
        <h3>I — Illegal · IUU laundering</h3>
        <p>How illegal catch enters legitimate supply. Vessel transhipment, port-state weakness, and the documents that get rewritten.</p>
        <div class="meta">50 min · Case + classification drill</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 03</div>
        <h3>C — Counterfeit · Fake labels</h3>
        <p>Forged certifications and manufactured brand identities. How to verify a label against a certifier's public database.</p>
        <div class="meta">40 min · Verification exercise</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 04</div>
        <h3>A — Adulteration · Chemicals & water</h3>
        <p>Phosphates, sulphites, undisclosed brines. The science of detection and the policy gaps that allow it.</p>
        <div class="meta">55 min · Lab walkthrough</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 05</div>
        <h3>D — Dilution · Glazing & mixing</h3>
        <p>Net-weight games and species blending. Hands-on weighing exercises and DNA-testing primer.</p>
        <div class="meta">45 min · Practical drill</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 06</div>
        <h3>M — Misrepresentation · Origin</h3>
        <p>The "processed in" loophole. Wild vs farmed claims. How origin labelling rules differ across jurisdictions.</p>
        <div class="meta">50 min · Origin audit</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 07</div>
        <h3>U — Unreported · Grey channels</h3>
        <p>Off-the-books supply chains. Why traceability breaks. Recognising and refusing grey-channel product.</p>
        <div class="meta">40 min · Supplier verification</div>
      </div>
      <div class="curr-block">
        <div class="module-num">Module 08</div>
        <h3>S — Substitution · Species swap</h3>
        <p>The most familiar fraud. Why DNA testing matters. The end of "fish of the day" as commercial language.</p>
        <div class="meta">55 min · Major case set</div>
      </div>
      <div class="curr-block" style="grid-column: span 2; background: var(--brand); color: #fff; border-left-color: var(--gold);">
        <div class="module-num" style="color: #ffd25e;">Capstone</div>
        <h3 style="color: #fff;">The eight live case studies + final assessment</h3>
        <p style="color: rgba(255,255,255,0.85);">Apply the framework to the real-world Chapter 14 cases. Submit your classifications, receive feedback, and complete the 90-minute final assessment. Pass mark: 80%. Two attempts permitted.</p>
        <div class="meta" style="color: rgba(255,255,255,0.6);">3–4 hours · Final assessment</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== AUDIENCE PATHWAYS ============== -->
<section class="pathways-bg">
  <div class="container">
    <div class="section-eyebrow">Pick your pathway</div>
    <h2 class="section-h">Built around <strong>your role</strong>.</h2>
    <p class="section-sub">Same framework. Different entry points and supporting resources tailored to consumers, retail, processors, and regulators.</p>

    <div class="pathway-grid">
      <div class="pathway" id="consumers">
        <span class="pathway-tag">Pathway 01</span>
        <h3>For Consumers</h3>
        <p>The framework, the language, and the practical tools to spot and refuse fraud at the supermarket and restaurant. Free to start.</p>
        <ul>
          <li>Free quiz + fraud scorecard download</li>
          <li>Self-paced certification course</li>
          <li>Public reporting channel access</li>
          <li>Community of certified consumers</li>
        </ul>
        <a href="#tiers" class="btn btn-outline">View consumer tier <span class="arrow">→</span></a>
      </div>
      <div class="pathway" id="retail">
        <span class="pathway-tag">Pathway 02</span>
        <h3>For Retail & Foodservice</h3>
        <p>Audit checklists, supplier verification protocols, and staff training that integrate with existing supply-chain reviews.</p>
        <ul>
          <li>Audit checklist generator</li>
          <li>Staff training programme licence</li>
          <li>Supplier verification toolkit</li>
          <li>Partner network listing</li>
        </ul>
        <a href="#tiers" class="btn btn-outline">View business tier <span class="arrow">→</span></a>
      </div>
      <div class="pathway" id="processors">
        <span class="pathway-tag">Pathway 03</span>
        <h3>For Processors & Distributors</h3>
        <p>Supply-chain mapping, DNA verification workflows, and risk classification fully aligned with AS 5300 and Codex.</p>
        <ul>
          <li>Supply-chain risk template</li>
          <li>DNA testing workflow guidance</li>
          <li>Industry-grade audit certification</li>
          <li>Direct technical support</li>
        </ul>
        <a href="#tiers" class="btn btn-outline">View industry tier <span class="arrow">→</span></a>
      </div>
      <div class="pathway" id="regulators">
        <span class="pathway-tag">Pathway 04</span>
        <h3>For Regulators & Policy</h3>
        <p>The policy playbook plus implementation case studies. For drafting legislation, designing enforcement frameworks, and inter-jurisdictional coordination.</p>
        <ul>
          <li>Five-pillar policy playbook</li>
          <li>Codex alignment notes</li>
          <li>Regulator-specific briefings</li>
          <li>Direct access to author team</li>
        </ul>
        <a href="contact.html" class="btn btn-outline">Request a briefing <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============== PRICING TIERS ============== -->
<section id="tiers">
  <div class="container">
    <div class="section-eyebrow">Enrolment tiers</div>
    <h2 class="section-h">Free to start. <strong>Scale as you grow.</strong></h2>
    <p class="section-sub">Every tier includes the same core curriculum and the same recognised certification. Higher tiers add audit tooling, industry support, and partner-network features.</p>

    <div class="tiers-grid">
      <div class="tier">
        <div class="tier-tag">Consumer</div>
        <h3>Free</h3>
        <div class="tier-price">$0</div>
        <div class="tier-cycle">Always free</div>
        <ul class="tier-features">
          <li>Full curriculum access</li>
          <li>Eight case studies</li>
          <li>Final assessment</li>
          <li>Verifiable digital credential</li>
          <li>Public reporting access</li>
          <li class="dim">No audit tooling</li>
          <li class="dim">No partner listing</li>
        </ul>
        <a href="get-certified.php#enrol" class="btn btn-outline">Enrol free <span class="arrow">→</span></a>
      </div>
      <div class="tier featured">
        <div class="tier-tag">Business</div>
        <h3>Retail & Foodservice</h3>
        <div class="tier-price">$249<small> /seat</small></div>
        <div class="tier-cycle">Per year · cancel anytime</div>
        <ul class="tier-features">
          <li>Everything in Consumer</li>
          <li>Audit checklist generator</li>
          <li>Staff training portal (5 seats)</li>
          <li>Supplier verification toolkit</li>
          <li>Partner-network listing</li>
          <li>Quarterly briefings</li>
          <li>Email support</li>
        </ul>
        <a href="get-certified.php#enrol" class="btn btn-primary">Enrol business <span class="arrow">→</span></a>
      </div>
      <div class="tier">
        <div class="tier-tag">Industry</div>
        <h3>Processors</h3>
        <div class="tier-price">$1,490</div>
        <div class="tier-cycle">Per year · org-wide</div>
        <ul class="tier-features">
          <li>Everything in Business</li>
          <li>Unlimited staff seats</li>
          <li>DNA workflow guidance</li>
          <li>Supply-chain risk templates</li>
          <li>Industry-grade audit cert</li>
          <li>Direct technical support</li>
          <li>API access (where available)</li>
        </ul>
        <a href="contact.html" class="btn btn-outline">Talk to us <span class="arrow">→</span></a>
      </div>
      <div class="tier">
        <div class="tier-tag">Regulator</div>
        <h3>Government</h3>
        <div class="tier-price">Bespoke</div>
        <div class="tier-cycle">By arrangement</div>
        <ul class="tier-features">
          <li>Everything in Industry</li>
          <li>Policy playbook + briefings</li>
          <li>Codex alignment support</li>
          <li>Custom training delivery</li>
          <li>Direct access to author team</li>
          <li>Inter-jurisdictional coordination</li>
          <li>Open-data access</li>
        </ul>
        <a href="contact.html" class="btn btn-outline">Request briefing <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ============== FAQ ============== -->
<section style="background: var(--bg-soft);">
  <div class="container">
    <div class="section-eyebrow">Common questions</div>
    <h2 class="section-h" style="text-align:center; margin: 0 auto 16px;">Things people ask <strong>before they enrol.</strong></h2>

    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q"><span>Do I need a science background to get certified?</span><span>+</span></div>
        <div class="faq-a">No. The course is built for consumers first — the same framework that works for regulators works for someone choosing dinner. If you can read a label and ask one good question, you can earn the certification.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>How long does the certification take?</span><span>+</span></div>
        <div class="faq-a">Roughly 12–15 hours total at a comfortable pace: 6–8 hours of curriculum, 2–3 hours of case-study practice, and a 90-minute final assessment. You can spread it over weeks; nothing expires.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>Is the certification recognised industry-wide?</span><span>+</span></div>
        <div class="faq-a">It is issued by the Seafood Consumer Association and aligned with industry standards including AS 5300 naming. Bond University is the inaugural academic partner, with one institutional partner per country planned as the framework expands internationally.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>How is this different from HACCP?</span><span>+</span></div>
        <div class="faq-a">HACCP keeps food safe once you trust what you've got. I-CADMUS asks the prior question — is the product what it claims to be? Food safety has to start with truth. The two work together; I-CADMUS sits in front.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>What happens if I fail the final assessment?</span><span>+</span></div>
        <div class="faq-a">Two attempts are included with every enrolment. Between attempts you can revisit any module. If a third attempt is needed, a small fee applies and we recommend a one-on-one tutorial first.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q"><span>Can my whole team enrol together?</span><span>+</span></div>
        <div class="faq-a">Yes. The Business tier includes 5 seats; the Industry tier is org-wide. Bulk discounts are available — <a href="contact.html" style="color: var(--brand); text-decoration: underline;">get in touch</a> for a custom quote.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Stop guessing. <strong>Get certified.</strong></h2>
        <p>Free to start. Self-paced. Built around the way real consumers and professionals actually learn. Join a global network committed to seafood integrity.</p>
      </div>
      <div class="cta-band-actions">
        <a href="#tiers" class="btn btn-primary btn-lg">Choose your tier <span class="arrow">→</span></a>
        <a href="contact.html" class="btn btn-outline btn-lg">Talk to our team</a>
      </div>
    </div>
  </div>
</section>

<script>
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
