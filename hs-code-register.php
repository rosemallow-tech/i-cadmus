<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/svg+xml" href="favicon.svg">
<meta name="theme-color" content="#003a5d">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Seafood HS Code Modernisation Register | I-CADMUS</title>
<meta name="description" content="The I-CADMUS Seafood HS Code Modernisation Register examines how seafood is classified in international and Australian trade, where existing classifications create integrity blind spots, and how trade information could be strengthened." />

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
  .logo { height: 44px; width: auto; }
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

  /* =========================================================
     SHARED COMPONENT STYLES
     ========================================================= */
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
  .btn .arrow { font-size: 12px; }

  /* =========================================================
     PAGE HERO
     ========================================================= */
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
  .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 24px; flex-wrap: wrap; }
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

  /* =========================================================
     SECTION HEADERS
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
     CTA BAND
     ========================================================= */
  .cta-band {
    background: var(--brand);
    background-image: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
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
     REVEAL ANIMATIONS
     ========================================================= */
  .reveal { opacity: 0; transform: translateY(20px); transition: opacity 0.7s, transform 0.7s; }
  .reveal.in { opacity: 1; transform: translateY(0); }

  /* =========================================================
     INTRO SECTION
     ========================================================= */
  .intro-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 64px;
    align-items: start;
  }
  .intro-text p {
    font-size: 17px;
    color: var(--ink-2);
    margin-bottom: 18px;
    line-height: 1.65;
  }
  .intro-sidebar {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
  }
  .intro-sidebar h3 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 16px;
  }
  .intro-sidebar ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .intro-sidebar li {
    font-size: 14px;
    color: var(--ink-2);
    padding: 10px 0;
    border-bottom: 1px solid var(--line);
    line-height: 1.5;
  }
  .intro-sidebar li:last-child { border-bottom: none; }
  .intro-sidebar li strong {
    display: block;
    color: var(--ink);
    font-weight: 600;
    margin-bottom: 2px;
  }

  /* =========================================================
     HS INFO SECTION
     ========================================================= */
  .hs-info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .hs-info-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
    border-top: 3px solid var(--brand);
  }
  .hs-info-card h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 10px;
  }
  .hs-info-card p {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.55;
    margin-bottom: 8px;
  }
  .hs-info-card .hs-label {
    font-size: 11px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 10px;
    display: block;
  }

  /* =========================================================
     ACCORDION (Priority Gaps, Connected Data Record)
     ========================================================= */
  .accordion-item {
    border: 1px solid var(--line);
    border-radius: 6px;
    margin-bottom: 12px;
    overflow: hidden;
    background: #fff;
    transition: box-shadow 0.2s;
  }
  .accordion-item:hover { box-shadow: var(--shadow-sm); }
  .accordion-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    cursor: pointer;
    gap: 16px;
    user-select: none;
  }
  .accordion-header h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    flex: 1;
  }
  .accordion-num {
    width: 32px;
    height: 32px;
    background: var(--bg-soft);
    color: var(--brand);
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-weight: 700;
    font-size: 13px;
    flex-shrink: 0;
  }
  .accordion-toggle {
    font-size: 22px;
    color: var(--ink-3);
    transition: transform 0.3s;
    font-weight: 300;
    flex-shrink: 0;
  }
  .accordion-item.open .accordion-toggle { transform: rotate(45deg); color: var(--accent); }
  .accordion-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
  }
  .accordion-body-inner {
    padding: 0 24px 24px;
    border-top: 1px solid var(--line);
    padding-top: 20px;
  }
  .accordion-body-inner p {
    font-size: 15px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 12px;
  }
  .accordion-body-inner .gap-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 6px;
    display: block;
  }
  .gap-label.problem { color: var(--accent); }
  .gap-label.risk { color: #b45309; }
  .gap-label.response { color: var(--teal); }

  /* =========================================================
     REGISTER TABLE
     ========================================================= */
  .register-controls {
    display: flex;
    gap: 12px;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 24px;
  }
  .register-search {
    flex: 1;
    min-width: 200px;
    padding: 11px 14px;
    background: #fff;
    border: 1px solid var(--line-2);
    border-radius: 4px;
    font-size: 15px;
    font-family: inherit;
    color: var(--ink);
    transition: border-color 0.15s, box-shadow 0.15s;
  }
  .register-search:focus {
    outline: none;
    border-color: var(--brand);
    box-shadow: 0 0 0 3px rgba(0, 58, 93, 0.12);
  }
  .filter-btn {
    padding: 8px 16px;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid var(--line-2);
    border-radius: 4px;
    background: #fff;
    color: var(--ink-2);
    cursor: pointer;
    transition: all 0.15s;
    font-family: inherit;
  }
  .filter-btn:hover { border-color: var(--brand); color: var(--brand); }
  .filter-btn.active { background: var(--brand); color: #fff; border-color: var(--brand); }

  .register-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
  }
  .register-table thead th {
    background: var(--brand);
    color: #fff;
    padding: 14px 16px;
    text-align: left;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    white-space: nowrap;
  }
  .register-table tbody tr {
    border-bottom: 1px solid var(--line);
    transition: background 0.15s;
  }
  .register-table tbody tr:hover { background: var(--bg-soft); }
  .register-table tbody td {
    padding: 14px 16px;
    vertical-align: top;
    color: var(--ink-2);
    line-height: 1.5;
  }
  .register-table tbody td:first-child {
    font-weight: 600;
    color: var(--brand);
    white-space: nowrap;
  }
  .register-table .chapter-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 2px 8px;
    border-radius: 2px;
    margin-left: 8px;
    vertical-align: middle;
  }
  .chapter-tag.ch3 { background: rgba(0,131,143,0.1); color: var(--teal); }
  .chapter-tag.ch16 { background: rgba(184,135,11,0.1); color: var(--gold); }
  .chapter-tag.other { background: rgba(92,100,112,0.1); color: var(--ink-3); }

  .table-source {
    font-size: 12px;
    color: var(--ink-3);
    margin-top: 12px;
    font-style: italic;
  }
  .table-note {
    font-size: 13px;
    color: var(--ink-3);
    background: var(--bg-soft);
    padding: 12px 16px;
    border-radius: 4px;
    margin-top: 16px;
    border-left: 3px solid var(--gold);
  }

  /* Mobile cards for register table */
  .register-cards { display: none; }
  .register-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 20px;
    margin-bottom: 12px;
    border-left: 4px solid var(--brand);
  }
  .register-card-heading {
    font-weight: 700;
    color: var(--brand);
    font-size: 15px;
    margin-bottom: 4px;
  }
  .register-card-coverage {
    font-size: 14px;
    color: var(--ink);
    font-weight: 600;
    margin-bottom: 8px;
  }
  .register-card-question {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.5;
  }

  /* =========================================================
     WORKED EXAMPLES
     ========================================================= */
  .examples-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .example-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
    transition: transform 0.25s, box-shadow 0.25s;
    position: relative;
    overflow: hidden;
  }
  .example-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--accent);
  }
  .example-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
  }
  .example-num {
    font-size: 11px;
    color: var(--accent);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 10px;
    display: block;
  }
  .example-card h4 {
    font-family: var(--serif);
    font-size: 20px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
    line-height: 1.25;
  }
  .example-card .scenario {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.55;
    margin-bottom: 14px;
  }
  .example-card .lesson {
    font-size: 13px;
    color: var(--ink-3);
    line-height: 1.55;
    margin-bottom: 14px;
    padding-top: 14px;
    border-top: 1px solid var(--line);
  }
  .example-card .lesson strong {
    color: var(--ink);
    display: block;
    margin-bottom: 4px;
    font-size: 12px;
    letter-spacing: 0.06em;
    text-transform: uppercase;
  }
  .icadmus-tags {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
  }
  .icadmus-tag {
    font-size: 11px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 100px;
    letter-spacing: 0.02em;
  }
  .icadmus-tag.substitution { background: rgba(200,16,46,0.08); color: var(--accent); }
  .icadmus-tag.misrepresentation { background: rgba(0,131,143,0.08); color: var(--teal); }
  .icadmus-tag.unreported { background: rgba(184,135,11,0.08); color: var(--gold); }
  .icadmus-tag.dilution { background: rgba(0,58,93,0.08); color: var(--brand); }
  .icadmus-tag.adulteration { background: rgba(92,100,112,0.08); color: var(--ink-3); }
  .icadmus-tag.illegal { background: rgba(200,16,46,0.12); color: var(--accent-dark); }

  /* =========================================================
     MODERNISATION PRIORITIES (STEPPER)
     ========================================================= */
  .priorities-stepper {
    position: relative;
    padding-left: 48px;
    margin-top: 48px;
  }
  .priorities-stepper::before {
    content: '';
    position: absolute;
    left: 19px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--line-2);
  }
  .priority-step {
    position: relative;
    margin-bottom: 48px;
  }
  .priority-step:last-child { margin-bottom: 0; }
  .priority-step-num {
    position: absolute;
    left: -48px;
    top: 0;
    width: 40px;
    height: 40px;
    background: var(--brand);
    color: #fff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    z-index: 1;
    box-shadow: 0 0 0 4px #fff, 0 0 0 5px var(--line-2);
  }
  .priority-step h4 {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
    padding-top: 6px;
  }
  .priority-step ul {
    list-style: none;
    padding: 0;
  }
  .priority-step li {
    font-size: 15px;
    color: var(--ink-2);
    line-height: 1.55;
    padding: 8px 0 8px 20px;
    position: relative;
    border-bottom: 1px solid var(--line);
  }
  .priority-step li:last-child { border-bottom: none; }
  .priority-step li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 16px;
    width: 6px;
    height: 6px;
    background: var(--teal);
    border-radius: 50%;
  }

  /* =========================================================
     AUSTRALIAN TRADE CLASSIFICATIONS
     ========================================================= */
  .trade-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    margin-top: 48px;
  }
  .trade-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
    border-top: 3px solid var(--brand);
  }
  .trade-card h4 {
    font-family: var(--serif);
    font-size: 20px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 12px;
  }
  .trade-card p {
    font-size: 15px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 12px;
  }
  .trade-card ul {
    list-style: none;
    padding: 0;
  }
  .trade-card li {
    font-size: 14px;
    color: var(--ink-2);
    padding: 8px 0 8px 18px;
    position: relative;
    border-bottom: 1px solid var(--line);
    line-height: 1.5;
  }
  .trade-card li:last-child { border-bottom: none; }
  .trade-card li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 14px;
    width: 5px;
    height: 5px;
    background: var(--accent);
    border-radius: 50%;
  }
  .integrity-concern {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-left: 4px solid var(--accent);
    border-radius: 4px;
    padding: 24px;
    margin-top: 32px;
  }
  .integrity-concern h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--accent);
    margin-bottom: 12px;
  }

  /* =========================================================
     CONNECTED DATA RECORD (TABS)
     ========================================================= */
  .data-record-accordion { margin-top: 48px; }

  /* =========================================================
     GOVERNANCE
     ========================================================= */
  .governance-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 24px;
    margin-top: 48px;
  }
  .governance-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 28px;
    border-top: 3px solid var(--teal);
  }
  .governance-card h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 14px;
  }
  .governance-card ul {
    list-style: none;
    padding: 0;
  }
  .governance-card li {
    font-size: 14px;
    color: var(--ink-2);
    padding: 6px 0;
    border-bottom: 1px solid var(--line);
    line-height: 1.5;
  }
  .governance-card li:last-child { border-bottom: none; }

  /* =========================================================
     DOWNLOADS
     ========================================================= */
  .downloads-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-top: 48px;
  }
  .download-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 32px;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
  }
  .download-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
  }
  .download-icon {
    width: 56px;
    height: 56px;
    background: var(--bg-soft);
    color: var(--brand);
    border-radius: 6px;
    display: grid;
    place-items: center;
    margin: 0 auto 20px;
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
  }
  .download-card h4 {
    font-family: var(--serif);
    font-size: 20px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 10px;
  }
  .download-card p {
    font-size: 14px;
    color: var(--ink-2);
    margin-bottom: 20px;
    line-height: 1.5;
  }
  .download-pending {
    font-size: 12px;
    color: var(--gold);
    font-weight: 600;
    margin-top: 8px;
  }

  /* =========================================================
     SUBMISSION FORM
     ========================================================= */
  .submission-form {
    background: #fff;
    border: 1px solid var(--line);
    padding: 40px;
    border-radius: 6px;
    box-shadow: var(--shadow-sm);
    max-width: 820px;
    margin: 48px auto 0;
  }
  .submission-form h3 {
    font-family: var(--serif);
    font-size: 24px;
    font-weight: 600;
    color: var(--brand);
    margin-bottom: 8px;
  }
  .submission-form > p {
    font-size: 14px;
    color: var(--ink-3);
    margin-bottom: 28px;
  }
  .form-row { margin-bottom: 18px; }
  .form-row.two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
  .form-row label { display: block; font-size: 13px; font-weight: 600; color: var(--ink-2); margin-bottom: 6px; letter-spacing: 0.02em; }
  .form-row label .required { color: var(--accent); }
  .form-row input, .form-row select, .form-row textarea { width: 100%; padding: 11px 14px; background: #fff; border: 1px solid var(--line-2); border-radius: 4px; font-size: 15px; font-family: inherit; color: var(--ink); transition: border-color 0.15s, box-shadow 0.15s; }
  .form-row input:focus, .form-row select:focus, .form-row textarea:focus { outline: none; border-color: var(--brand); box-shadow: 0 0 0 3px rgba(0, 58, 93, 0.12); }
  .form-row textarea { min-height: 140px; resize: vertical; line-height: 1.55; }
  .form-row select { appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1L6 6L11 1' stroke='%235c6470' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 40px; }
  .form-row button { width: 100%; padding: 14px; font-size: 15px; }

  /* =========================================================
     VERSION CONTROL
     ========================================================= */
  .version-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: var(--line);
    border: 1px solid var(--line);
    border-radius: 6px;
    overflow: hidden;
    margin-top: 48px;
  }
  .version-item {
    background: #fff;
    padding: 24px;
    text-align: center;
  }
  .version-item .version-label {
    font-size: 12px;
    color: var(--ink-3);
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 6px;
  }
  .version-item .version-value {
    font-family: var(--serif);
    font-size: 22px;
    font-weight: 600;
    color: var(--brand);
  }

  /* =========================================================
     DISCLAIMER
     ========================================================= */
  .disclaimer {
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 6px;
    padding: 32px;
    margin-top: 48px;
  }
  .disclaimer h4 {
    font-family: var(--serif);
    font-size: 18px;
    font-weight: 600;
    color: var(--ink);
    margin-bottom: 12px;
  }
  .disclaimer p {
    font-size: 14px;
    color: var(--ink-2);
    line-height: 1.6;
    margin-bottom: 12px;
  }
  /* =========================================================
     FOOTER
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
    .page-hero { padding: 56px 0 72px; }
    .intro-grid { grid-template-columns: 1fr; gap: 32px; }
    .hs-info-grid { grid-template-columns: 1fr 1fr; }
    .examples-grid { grid-template-columns: 1fr; }
    .trade-grid { grid-template-columns: 1fr; }
    .governance-grid { grid-template-columns: 1fr; }
    .downloads-grid { grid-template-columns: 1fr; }
    .version-grid { grid-template-columns: 1fr 1fr; }
    .cta-band-grid { grid-template-columns: 1fr; }
    .footer-top { grid-template-columns: 1fr 1fr; }
    .utility-bar a { padding: 0 8px; font-size: 12px; }
  }
  @media (max-width: 900px) {
    .register-table-wrap { display: none; }
    .register-cards { display: block; }
    .hs-info-grid { grid-template-columns: 1fr; }
  }
  @media (max-width: 640px) {
    section { padding: 64px 0; }
    .form-row.two-col { grid-template-columns: 1fr; }
    .submission-form { padding: 24px; }
    .version-grid { grid-template-columns: 1fr; }
    .register-controls { flex-direction: column; align-items: stretch; }
    .footer-top { grid-template-columns: 1fr; }
    .footer-bottom { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .utility-bar .container { display: none; }
  }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- ============== HERO ============== -->
<section class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div class="breadcrumb">
        <a href="index.php">Home</a>
        <span class="sep">/</span>
        <a href="resources.php">Resources</a>
        <span class="sep">/</span>
        <span class="current">Seafood HS Code Modernisation Register</span>
      </div>
      <div class="page-hero-eyebrow">I-CADMUS Resource · August 2026</div>
      <h1>Seafood HS Code <strong>Modernisation Register</strong></h1>
      <p class="lede">A structured examination of how seafood is classified in international and Australian trade, where existing classifications create integrity blind spots, and how trade information could be strengthened to protect consumers, legitimate industry, and natural resources.</p>
    </div>
  </div>
</section>

<!-- ============== INTRODUCTION ============== -->
<section id="introduction" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Introduction</div>
    <h2 class="section-h">What the <strong>Register does</strong></h2>

    <div class="intro-grid">
      <div class="intro-text">
        <p>The Register examines how seafood is classified in international and Australian trade, where existing classifications create integrity blind spots, and how trade information could be strengthened.</p>
        <p>It distinguishes between four types of information: <strong>HS classification</strong> (the commodity code assigned at the border), <strong>customs declaration data</strong> (the structured information submitted with each consignment), <strong>traceability data</strong> (the supply-chain record that follows the product), and <strong>verification evidence</strong> (the testing and audit material that confirms identity and compliance).</p>
        <p>The objective is not to place every seafood attribute inside the HS code — it is to create a connected system in which customs classification, biological identity, origin, traceability and verification can be evaluated together.</p>
      </div>
      <div class="intro-sidebar">
        <h3>Register Information</h3>
        <ul>
          <li><strong>Purpose</strong>Identify classification gaps that enable seafood fraud and integrity failures</li>
          <li><strong>Scope</strong>International HS system, Australian customs classifications, and proposed data improvements</li>
          <li><strong>Framework</strong>I-CADMUS seven-category seafood fraud taxonomy</li>
          <li><strong>Information last reviewed</strong>August 2026</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============== EDITORIAL NOTICE ============== -->
<section style="padding: 0;">
  <div class="container">
    <div style="background: #fffbeb; border: 1px solid #f0dca0; border-left: 5px solid var(--gold); border-radius: 6px; padding: 28px 32px; margin-top: -48px; margin-bottom: 48px;">
      <h4 style="font-family: var(--serif); font-size: 18px; font-weight: 600; color: var(--brand); margin-bottom: 12px;">Important: scope and status of this resource</h4>
      <p style="font-size: 15px; color: var(--ink-2); line-height: 1.65; margin-bottom: 0;">The classification descriptions on this page summarise current official sources. The identified gaps, connected-data model and modernisation priorities are proposals developed by SCA and I‑CADMUS. They are not current customs requirements unless expressly stated otherwise. The worked examples are illustrative scenarios and do not represent particular consignments or findings.</p>
    </div>
  </div>
</section>

<!-- ============== THE HARMONIZED SYSTEM ============== -->
<section id="harmonized-system" style="background: var(--bg-soft);" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 1 · <span style="color: var(--teal);">Current system</span></div>
    <h2 class="section-h">The <strong>Harmonized System</strong></h2>
    <p class="section-sub">The international commodity classification maintained by the World Customs Organization, used by customs authorities worldwide to classify goods at the border.</p>

    <div class="hs-info-grid">
      <div class="hs-info-card">
        <span class="hs-label">Responsible Organisation</span>
        <h4>World Customs Organization (WCO)</h4>
        <p>The intergovernmental body responsible for developing and maintaining the Harmonized System Nomenclature used by over 200 countries and economies.</p>
      </div>
      <div class="hs-info-card">
        <span class="hs-label">Current Edition</span>
        <h4>HS 2022</h4>
        <p>The current international edition in force. The HS is revised on a five-year cycle to reflect changes in technology, trade patterns, and policy needs.</p>
      </div>
      <div class="hs-info-card">
        <span class="hs-label">Next Edition</span>
        <h4>HS 2028</h4>
        <p>Entering into force 1 January 2028. The accepted HS 2028 amendments contain 299 sets of changes, producing 1,229 headings and 5,852 six-digit subheadings.</p>
      </div>
    </div>

    <div class="intro-sidebar" style="margin-top: 32px;">
      <h3>Principal Purpose</h3>
      <ul>
        <li>Customs tariffs</li>
        <li>Trade statistics</li>
        <li>Rules of origin</li>
        <li>Trade negotiations</li>
        <li>Prohibitions and restrictions</li>
        <li>Risk assessment</li>
        <li>Regulatory administration</li>
      </ul>
    </div>

    <div class="integrity-concern" style="margin-top: 32px;">
      <h4>Structural Limitation</h4>
      <p style="font-size: 15px; color: var(--ink-2); line-height: 1.6; margin: 0;">The HS is a commodity nomenclature. Its six-digit codes cannot record the full biological, environmental and supply-chain identity of seafood. This structural limitation is not a design flaw — it reflects the system's intended purpose. The challenge is to build connected data systems around the HS that capture what the code itself cannot.</p>
    </div>
  </div>
</section>

<!-- ============== PRINCIPAL SEAFOOD CLASSIFICATIONS REGISTER ============== -->
<section id="register" style="background: var(--bg-soft);" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 2 · <span style="color: var(--teal);">Current system</span></div>
    <h2 class="section-h">Principal Seafood <strong>Classifications Register</strong></h2>
    <p class="section-sub">The principal HS headings under which seafood and seafood-derived products are classified, with the integrity question each heading raises.</p>

    <div class="register-controls">
      <input type="text" class="register-search" id="registerSearch" placeholder="Search by heading, coverage, or keyword..." />
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="ch3">Chapter 3</button>
      <button class="filter-btn" data-filter="ch16">Chapter 16</button>
      <button class="filter-btn" data-filter="other">Other</button>
    </div>

    <!-- Desktop Table -->
    <div class="register-table-wrap">
      <table class="register-table" id="registerTable">
        <thead>
          <tr>
            <th>HS Code / Heading</th>
            <th>Coverage / Product Group</th>
            <th>Integrity Question / Concern</th>
          </tr>
        </thead>
        <tbody>
          <!-- Chapter 3 -->
          <tr data-chapter="ch3">
            <td>0301 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Live fish</td>
            <td>Is the species and intended use accurately declared?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0302 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Fresh or chilled fish, excluding fillets and other fish meat</td>
            <td>Does the declared species match the product and origin?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0303 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Frozen fish, excluding fillets and other fish meat</td>
            <td>Are species, glaze, net weight and origin correctly declared?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0304 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Fresh, chilled or frozen fillets and other fish meat</td>
            <td>Can the species still be identified after external features are removed?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0305 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Dried, salted, brined or smoked fish</td>
            <td>Has processing obscured species, origin or actual composition?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0306 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Crustaceans</td>
            <td>Are species, product form, cooking status, glaze and net weight clear?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0307 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Molluscs</td>
            <td>Are species, shell status, product form, weight and production origin clear?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0308 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Other aquatic invertebrates</td>
            <td>Does a broad category conceal valuable or protected species?</td>
          </tr>
          <tr data-chapter="ch3">
            <td>0309 <span class="chapter-tag ch3">Ch 3</span></td>
            <td>Aquatic-animal flours, meals and pellets fit for human consumption</td>
            <td>Can the original species and composition be verified after processing?</td>
          </tr>
          <!-- Chapter 16 -->
          <tr data-chapter="ch16">
            <td>1603 <span class="chapter-tag ch16">Ch 16</span></td>
            <td>Extracts and juices</td>
            <td>What species and ingredients were used?</td>
          </tr>
          <tr data-chapter="ch16">
            <td>1604 <span class="chapter-tag ch16">Ch 16</span></td>
            <td>Prepared or preserved fish; caviar and caviar substitutes</td>
            <td>Has processing changed, concealed or replaced the declared species?</td>
          </tr>
          <tr data-chapter="ch16">
            <td>1605 <span class="chapter-tag ch16">Ch 16</span></td>
            <td>Prepared or preserved crustaceans, molluscs and other aquatic invertebrates</td>
            <td>Are composition, species, origin and quantity accurately described?</td>
          </tr>
          <!-- Other -->
          <tr data-chapter="other">
            <td>Chapter 15 <span class="chapter-tag other">Other</span></td>
            <td>Fish and marine-animal oils</td>
            <td>Species, purity, blending, origin and sustainability</td>
          </tr>
          <tr data-chapter="other">
            <td>Heading 2301 <span class="chapter-tag other">Other</span></td>
            <td>Fishmeal unfit for human consumption</td>
            <td>Species mix, source material, IUU exposure and feed integrity</td>
          </tr>
          <tr data-chapter="other">
            <td>Heading 2309 <span class="chapter-tag other">Other</span></td>
            <td>Prepared animal feed</td>
            <td>Marine-ingredient composition and undeclared substitution</td>
          </tr>
          <tr data-chapter="other">
            <td>Chapter 12 / varies <span class="chapter-tag other">Other</span></td>
            <td>Seaweeds and algae</td>
            <td>Species, food versus industrial use, origin and contaminants</td>
          </tr>
          <tr data-chapter="other">
            <td>Varies <span class="chapter-tag other">Other</span></td>
            <td>Agar and other extracted materials</td>
            <td>Biological source and compositional authenticity</td>
          </tr>
          <tr data-chapter="other">
            <td>Varies <span class="chapter-tag other">Other</span></td>
            <td>Fertilisers and bioproducts</td>
            <td>Loss of source identity and inconsistent trade data</td>
          </tr>
          <tr data-chapter="other">
            <td>Varies <span class="chapter-tag other">Other</span></td>
            <td>Pharmaceutical or cosmetic products</td>
            <td>Marine-source claims may not be visible in the customs category</td>
          </tr>
        </tbody>
      </table>

      <p class="table-source">Source: Australian Border Force — <a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-i/chapter-3" style="color: var(--teal);" target="_blank" rel="noopener">Chapter 3</a>; Australian Border Force — <a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-iv/chapter-16" style="color: var(--teal);" target="_blank" rel="noopener">Chapter 16</a>. Other seafood-related classifications identified from HS Nomenclature and national tariff schedules. See Authoritative Sources section for full references.</p>
    </div>

    <!-- Mobile Cards -->
    <div class="register-cards" id="registerCards">
      <!-- Chapter 3 cards -->
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0301</div><div class="register-card-coverage">Live fish</div><div class="register-card-question">Is the species and intended use accurately declared?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0302</div><div class="register-card-coverage">Fresh or chilled fish, excluding fillets and other fish meat</div><div class="register-card-question">Does the declared species match the product and origin?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0303</div><div class="register-card-coverage">Frozen fish, excluding fillets and other fish meat</div><div class="register-card-question">Are species, glaze, net weight and origin correctly declared?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0304</div><div class="register-card-coverage">Fresh, chilled or frozen fillets and other fish meat</div><div class="register-card-question">Can the species still be identified after external features are removed?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0305</div><div class="register-card-coverage">Dried, salted, brined or smoked fish</div><div class="register-card-question">Has processing obscured species, origin or actual composition?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0306</div><div class="register-card-coverage">Crustaceans</div><div class="register-card-question">Are species, product form, cooking status, glaze and net weight clear?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0307</div><div class="register-card-coverage">Molluscs</div><div class="register-card-question">Are species, shell status, product form, weight and production origin clear?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0308</div><div class="register-card-coverage">Other aquatic invertebrates</div><div class="register-card-question">Does a broad category conceal valuable or protected species?</div></div>
      <div class="register-card" data-chapter="ch3"><div class="register-card-heading">0309</div><div class="register-card-coverage">Aquatic-animal flours, meals and pellets fit for human consumption</div><div class="register-card-question">Can the original species and composition be verified after processing?</div></div>
      <!-- Chapter 16 cards -->
      <div class="register-card" data-chapter="ch16" style="border-left-color: var(--gold);"><div class="register-card-heading">1603</div><div class="register-card-coverage">Extracts and juices</div><div class="register-card-question">What species and ingredients were used?</div></div>
      <div class="register-card" data-chapter="ch16" style="border-left-color: var(--gold);"><div class="register-card-heading">1604</div><div class="register-card-coverage">Prepared or preserved fish; caviar and caviar substitutes</div><div class="register-card-question">Has processing changed, concealed or replaced the declared species?</div></div>
      <div class="register-card" data-chapter="ch16" style="border-left-color: var(--gold);"><div class="register-card-heading">1605</div><div class="register-card-coverage">Prepared or preserved crustaceans, molluscs and other aquatic invertebrates</div><div class="register-card-question">Are composition, species, origin and quantity accurately described?</div></div>
      <!-- Other cards -->
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Chapter 15</div><div class="register-card-coverage">Fish and marine-animal oils</div><div class="register-card-question">Species, purity, blending, origin and sustainability</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Heading 2301</div><div class="register-card-coverage">Fishmeal unfit for human consumption</div><div class="register-card-question">Species mix, source material, IUU exposure and feed integrity</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Heading 2309</div><div class="register-card-coverage">Prepared animal feed</div><div class="register-card-question">Marine-ingredient composition and undeclared substitution</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Chapter 12 / varies</div><div class="register-card-coverage">Seaweeds and algae</div><div class="register-card-question">Species, food versus industrial use, origin and contaminants</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Varies</div><div class="register-card-coverage">Agar and other extracted materials</div><div class="register-card-question">Biological source and compositional authenticity</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Varies</div><div class="register-card-coverage">Fertilisers and bioproducts</div><div class="register-card-question">Loss of source identity and inconsistent trade data</div></div>
      <div class="register-card" data-chapter="other" style="border-left-color: var(--ink-3);"><div class="register-card-heading">Varies</div><div class="register-card-coverage">Pharmaceutical or cosmetic products</div><div class="register-card-question">Marine-source claims may not be visible in the customs category</div></div>
    </div>

    <div class="table-note">Classification depends on the actual product and applicable legal rules. These examples should not be treated as tariff advice.</div>
  </div>
</section>

<!-- ============== AUSTRALIAN TRADE CLASSIFICATIONS ============== -->
<section id="australian-trade" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 3 · <span style="color: var(--teal);">Current system</span></div>
    <h2 class="section-h">Australian trade <strong>classifications</strong></h2>
    <p class="section-sub">How the international Harmonized System is extended and applied within Australian import and export frameworks.</p>

    <div class="trade-grid">
      <div class="trade-card">
        <h4>3.1 Imports</h4>
        <p>Seafood imports into Australia are classified through the Combined Australian Customs Tariff Nomenclature and Statistical Classification. The international six-digit HS code is extended by Australian tariff and statistical digits to provide additional national detail.</p>
        <ul>
          <li>The tariff classification determines the applicable duty rate and any conditions of import</li>
          <li>Statistical codes provide additional product detail for trade-data analysis</li>
          <li>Import permits and biosecurity requirements depend on the commodity, country of origin, intended use and pathway, and may reference the tariff classification</li>
          <li>The Australian Border Force administers the tariff and processes import declarations</li>
        </ul>
      </div>

      <div class="trade-card">
        <h4>3.2 Exports</h4>
        <p>Seafood exports from Australia are classified using the Australian Harmonized Export Commodity Classification (AHECC).</p>
        <ul>
          <li>AHECC codes are based on the international HS but include Australian statistical extensions</li>
          <li>Export classifications may differ in granularity from import classifications for the same product</li>
          <li>The Australian Bureau of Statistics uses AHECC data for official trade statistics</li>
          <li>Export permits, quotas, and regulatory requirements reference the AHECC classification</li>
          <li>The Department of Agriculture, Fisheries and Forestry administers export certification for prescribed goods and where certification is required</li>
        </ul>
      </div>
    </div>

    <div class="integrity-concern" style="margin-top: 32px;">
      <h4>3.3 Integrity Concern</h4>
      <p style="font-size: 15px; color: var(--ink-2); line-height: 1.6; margin-bottom: 12px;">Import and export classifications may not provide equivalent detail. This asymmetry creates several comparison difficulties:</p>
      <ul style="list-style: none; padding: 0;">
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0 8px 18px; position: relative; border-bottom: 1px solid var(--line); line-height: 1.5;">
          <span style="position: absolute; left: 0; top: 14px; width: 5px; height: 5px; background: var(--accent); border-radius: 50; display: inline-block;"></span>
          A product may be classified with greater species or product-form detail on import than on export, or vice versa
        </li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0 8px 18px; position: relative; border-bottom: 1px solid var(--line); line-height: 1.5;">
          Trade-flow analysis is impaired when the same product carries different classification codes in each direction
        </li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0 8px 18px; position: relative; border-bottom: 1px solid var(--line); line-height: 1.5;">
          Reconciliation between import data from trading partners and Australian export data is difficult when classifications are not aligned
        </li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0 8px 18px; position: relative; line-height: 1.5;">
          Regulatory and enforcement agencies may not be able to match imported raw material to exported finished product when the classifications diverge
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ============== CURRENT PROBLEMS & CONSUMER CONSEQUENCES ============== -->
<section id="classification-gaps" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 4 · <span style="color: var(--accent);">Identified gaps</span></div>
    <h2 class="section-h">Priority <strong>classification gaps</strong></h2>
    <p class="section-sub">Nine areas where current classification systems create blind spots that enable fraud, mislabelling, and integrity failures throughout the seafood supply chain.</p>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">1</span>
        <h4>Residual "Other" Categories</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Large volumes of seafood are classified under residual "other" subheadings that do not identify the species or product form. These catch-all categories absorb commercially significant species and allow high-value or protected products to move without scrutiny.</p>
          <span class="gap-label risk">Risk</span>
          <p>Species substitution, IUU laundering, and trade-data gaps are concealed within undifferentiated residual categories. Consumers, regulators and legitimate traders cannot distinguish compliant products from fraudulent ones.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Create dedicated subheadings for commercially and ecologically significant species currently absorbed in residual categories. Require supplementary species declarations for any consignment classified under a residual subheading.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">2</span>
        <h4>Scientific Species Identity</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>The HS does not require scientific (Latin) species names. Common names vary between countries, languages and markets, making it possible to declare a product under a name that is technically correct in one jurisdiction but misleading in another.</p>
          <span class="gap-label risk">Risk</span>
          <p>Species substitution becomes difficult to detect at the border when the customs declaration uses only a common name. High-value species may be replaced with cheaper alternatives that share a similar common name.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require the scientific name of the principal species in the customs declaration for all seafood consignments. Align declaration requirements with national fish-naming standards where they exist.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">3</span>
        <h4>Wild and Farmed Production</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>The HS does not systematically distinguish wild-caught and farmed (aquaculture) production across seafood classifications. These two production methods carry different risk profiles, environmental footprints, regulatory requirements, and market values.</p>
          <span class="gap-label risk">Risk</span>
          <p>Farmed product may be passed off as wild-caught to command a price premium, or wild product from unregulated fisheries may be declared as farmed to avoid IUU scrutiny. Trade statistics cannot differentiate production methods.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Introduce a production-method indicator in the customs declaration or statistical extension. At the HS level, prepare proposals for the next WCO review cycle leading to HS 2033, while pursuing Australian tariff and statistical extensions that may be achievable earlier.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">4</span>
        <h4>Geographic Origin</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Country of origin is declared, but the specific catch area, fishery or farming region is not routinely captured in the customs classification or declaration. Country of origin depends upon applicable rules of origin and whether processing constitutes substantial transformation; it is not always simply the country of last processing or the country of harvest.</p>
          <span class="gap-label risk">Risk</span>
          <p>Product from depleted, sanctioned or IUU-affected fisheries can be routed through processing countries and declared with a misleading origin. Consumers and retailers cannot verify the true geographic source.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require FAO catch-area codes or aquaculture-region identifiers in the customs declaration for seafood. Retain the legally required customs country-of-origin declaration and add separate structured fields for country of harvest and country of last processing. These fields should not be treated as interchangeable.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">5</span>
        <h4>Vessel and Farm Identity</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>The HS code itself does not capture vessel or farm identity, and general customs records may not do so unless required through an additional national or commodity-specific program. Without this link, the product cannot be traced back to the point of harvest.</p>
          <span class="gap-label risk">Risk</span>
          <p>Product from vessels engaged in IUU fishing, forced labour, or environmental violations can enter legitimate supply chains without a traceable connection to the source. Recalls and investigations are hampered.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require vessel identification (IMO number or national registration) or farm registration in the customs declaration or linked traceability record for all seafood consignments.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">6</span>
        <h4>Product Transformation</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Once seafood is processed — filleted, skinned, deboned, breaded, coated, or mixed — visual species identification becomes impossible. The HS classifies the finished product form but does not require that the source species be traceable through the transformation.</p>
          <span class="gap-label risk">Risk</span>
          <p>Processing creates an opportunity to substitute cheaper species, blend undeclared ingredients, or obscure origin. Consumers purchasing processed seafood have no reliable way to verify species identity without laboratory testing.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require that customs declarations for processed seafood identify the source species and maintain a traceable link to the pre-processing identity. Strengthen product-description requirements for prepared and mixed products.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">7</span>
        <h4>Net Weight, Glaze and Added Water</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Frozen seafood routinely carries a protective ice glaze, and some products have added water or phosphate solutions that increase pack weight. Customs declarations typically record gross weight, and the HS does not require net-weight or glaze-percentage declarations.</p>
          <span class="gap-label risk">Identified Gap</span>
          <p>Protective glaze is a legitimate treatment when properly controlled and declared. An integrity concern arises when glaze or added water is included improperly in the declared net seafood weight, exceeds the agreed specification, is not disclosed where required, or causes the quantity or composition of the seafood to be misrepresented.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require accurate net seafood weight excluding glaze, together with a glaze-percentage or added-water declaration where relevant. Without net-weight declarations at the border, quantity concerns enter the supply chain before domestic regulators can intervene.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">8</span>
        <h4>Prepared and Mixed Products</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Prepared and mixed seafood products — such as seafood sticks, fish cakes, mixed seafood packs, and ready meals — are classified under broad HS headings that do not require disclosure of the individual species or their proportions.</p>
          <span class="gap-label risk">Risk</span>
          <p>Undeclared species can be blended into mixed products without detection. Low-value species may replace declared premium ingredients. Allergen risks increase when species composition is unknown.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require species-composition declarations for prepared and mixed seafood products, including the proportion of each species. Align customs requirements with domestic food-labelling regulations.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        <span class="accordion-num">9</span>
        <h4>Marine Ingredients</h4>
        <span class="accordion-toggle">+</span>
      </div>
      <div class="accordion-body">
        <div class="accordion-body-inner">
          <span class="gap-label problem">Problem</span>
          <p>Marine-derived ingredients — fish oils, fishmeal, marine collagen, extracts, and bioproducts — are classified across multiple HS chapters according to their finished form, not their marine origin. The biological source is often invisible in the classification.</p>
          <span class="gap-label risk">Risk</span>
          <p>IUU-sourced material can enter feed, pharmaceutical, and cosmetic supply chains without scrutiny. Species claims in supplements and health products may not be verifiable through customs data. Environmental and sustainability concerns are disconnected from trade records.</p>
          <span class="gap-label response">I‑CADMUS Proposal</span>
          <p>Require marine-source species identification for marine-derived ingredients at the customs declaration level. Ensure that classification across multiple chapters does not sever the traceability link to the original biological material.</p>
        </div>
      </div>
    </div>

    <!-- CORE REGISTER TABLE -->
    <h3 style="font-family: var(--serif); font-size: 22px; font-weight: 600; color: var(--brand); margin: 48px 0 16px;">Classification Issues Register</h3>
    <p style="font-size: 15px; color: var(--ink-2); line-height: 1.6; margin-bottom: 24px;">A structured register of identified classification limitations, integrity risks and proposed improvements. Status values: <strong>Concept</strong> — identified but not yet formally proposed; <strong>Under review</strong> — being assessed for feasibility; <strong>Submitted</strong> — formally proposed to the responsible organisation.</p>

    <div style="overflow-x: auto;">
      <table class="register-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Classification Area</th>
            <th>Current Limitation</th>
            <th>Integrity Risk</th>
            <th>Proposed Improvement</th>
            <th>Level of Action</th>
            <th>Responsible</th>
            <th>Status</th>
            <th>Evidence / Source</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>HS‑001</td>
            <td>0303 — Frozen fish</td>
            <td>Species frequently captured within residual categories</td>
            <td>Substitution and concealed origin</td>
            <td>Structured scientific-name declaration</td>
            <td>Australian declaration / statistical extension</td>
            <td>ABF, ABS</td>
            <td>Concept</td>
            <td><a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-i/chapter-3" style="color: var(--teal);" target="_blank" rel="noopener">ABF Ch 3</a></td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑002</td>
            <td>0304 — Fish fillets</td>
            <td>Species identity lost after processing</td>
            <td>Substitution in processed fillets</td>
            <td>Require source-species declaration linked to pre-processing identity</td>
            <td>Australian declaration</td>
            <td>ABF, DAFF</td>
            <td>Concept</td>
            <td><a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-i/chapter-3" style="color: var(--teal);" target="_blank" rel="noopener">ABF Ch 3</a></td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑003</td>
            <td>0306 — Crustaceans</td>
            <td>No systematic wild/farmed distinction</td>
            <td>Farmed product declared as wild-caught or vice versa</td>
            <td>Production-method indicator in declaration</td>
            <td>Australian statistical extension or WCO (HS 2033)</td>
            <td>ABF, ABS, WCO</td>
            <td>Concept</td>
            <td><a href="https://www.wcoomd.org/en/topics/nomenclature/activities-and-programmes/hs-review-cycle.aspx" style="color: var(--teal);" target="_blank" rel="noopener">WCO review cycle</a></td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑004</td>
            <td>0303, 0306 — Frozen fish, crustaceans</td>
            <td>No net-weight or glaze-percentage declaration required at border</td>
            <td>Quantity misrepresentation through undisclosed glaze or added water</td>
            <td>Require net seafood weight excluding glaze, with glaze-percentage declaration</td>
            <td>Australian declaration</td>
            <td>ABF, DAFF</td>
            <td>Concept</td>
            <td>See Section 4, Gap 7</td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑005</td>
            <td>All seafood headings</td>
            <td>Customs origin may not reveal harvest origin</td>
            <td>Product from IUU-affected fisheries routed through processing countries</td>
            <td>Separate structured fields for country of harvest and country of last processing</td>
            <td>Australian declaration</td>
            <td>ABF, DAFF</td>
            <td>Concept</td>
            <td><a href="https://www.fao.org/fishery/en/area/search" style="color: var(--teal);" target="_blank" rel="noopener">FAO fishing areas</a></td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑006</td>
            <td>All seafood headings</td>
            <td>Vessel or farm identity not captured in HS or standard customs records</td>
            <td>Product from IUU vessels or non-compliant farms enters supply chain</td>
            <td>Vessel ID (IMO) or farm registration in declaration or linked traceability record</td>
            <td>Australian declaration / commodity-specific program</td>
            <td>ABF, DAFF, AFMA</td>
            <td>Concept</td>
            <td>See Section 4, Gap 5</td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑007</td>
            <td>1604, 1605 — Prepared seafood</td>
            <td>Species composition not required for mixed products</td>
            <td>Undeclared species blended into mixed products; allergen risks</td>
            <td>Species-composition declarations for prepared and mixed seafood</td>
            <td>Australian declaration</td>
            <td>ABF, FSANZ</td>
            <td>Concept</td>
            <td><a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-iv/chapter-16" style="color: var(--teal);" target="_blank" rel="noopener">ABF Ch 16</a></td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑008</td>
            <td>Ch 15, 2301 — Marine ingredients</td>
            <td>Biological source invisible after extraction or processing</td>
            <td>IUU material enters feed, pharmaceutical and cosmetic chains</td>
            <td>Marine-source species identification at customs declaration level</td>
            <td>Australian declaration or WCO</td>
            <td>ABF, ABS, WCO</td>
            <td>Concept</td>
            <td>See Section 4, Gap 9</td>
            <td>Aug 2026</td>
          </tr>
          <tr>
            <td>HS‑009</td>
            <td>Import / export asymmetry</td>
            <td>Import and export classifications may not provide equivalent species or product detail</td>
            <td>Trade-flow analysis impaired; reconciliation between import and export data difficult</td>
            <td>Align import and export statistical classifications for equivalent detail</td>
            <td>Australian statistical extension</td>
            <td>ABS, ABF</td>
            <td>Concept</td>
            <td><a href="https://www.abs.gov.au/statistics/classifications/australian-harmonized-export-commodity-classification-ahecc/latest-release" style="color: var(--teal);" target="_blank" rel="noopener">ABS AHECC</a></td>
            <td>Aug 2026</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="table-note">All entries are I‑CADMUS/SCA proposals at concept stage. They are not current customs requirements. Responsible organisations are identified based on functional relevance, not endorsement.</p>

  </div>
</section>

<!-- ============== PROPOSED CONNECTED SEAFOOD DATA RECORD ============== -->
<section id="data-record" style="background: var(--bg-soft);" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 5 · <span style="color: var(--gold);">I‑CADMUS proposal</span></div>
    <h2 class="section-h">Proposed connected <strong>seafood data record</strong></h2>
    <p class="section-sub">Six data categories that, combined with the HS classification, would create a connected information system capable of supporting seafood integrity from the point of harvest to the point of sale.</p>

    <div class="data-record-accordion">
      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.1</span>
          <h4>Customs Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">HS classification code (six-digit minimum)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">National tariff and statistical extensions</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Country of origin (customs declaration)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Country of last processing (if different from harvest)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Gross weight, net weight, and glaze percentage (frozen products)</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Customs value and unit price</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.2</span>
          <h4>Biological Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Scientific name (genus and species)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Standard common name (per national fish-naming standard)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Species composition (for mixed or multi-species products)</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Conservation or regulatory status (where applicable)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.3</span>
          <h4>Production Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Production method (wild-caught or farmed)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">FAO catch area or aquaculture region</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Vessel identity (IMO number or national registration) for wild-caught</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Farm registration or licence number for aquaculture</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Harvest date or period</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.4</span>
          <h4>Product Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Product form (whole, fillet, portion, prepared, etc.)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Preservation method (fresh, chilled, frozen, dried, smoked, canned, etc.)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Processing description (breaded, coated, marinated, cooked, etc.)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Added ingredients or treatments (phosphates, preservatives, glazing agents)</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Pack size and unit count</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.5</span>
          <h4>Regulatory and Assurance Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Health certificate and issuing authority</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Catch documentation or aquaculture certification</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Sustainability certification (MSC, ASC, or equivalent, where claimed)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Import permit or licence reference</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Laboratory testing results (species verification, contaminants, treatments)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span class="accordion-num" style="background: var(--teal); color: #fff;">5.6</span>
          <h4>Traceability Information</h4>
          <span class="accordion-toggle">+</span>
        </div>
        <div class="accordion-body">
          <div class="accordion-body-inner">
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Unique consignment or lot identifier</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Supply-chain participants (harvester, processor, exporter, importer)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Processing and transformation records (linking input material to output product)</li>
              <li style="padding: 8px 0; border-bottom: 1px solid var(--line); font-size: 14px; color: var(--ink-2);">Chain-of-custody documentation</li>
              <li style="padding: 8px 0; font-size: 14px; color: var(--ink-2);">Digital traceability record (where available — QR code, blockchain reference, or equivalent)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== MODERNISATION PRIORITIES ============== -->
<section id="priorities" style="background: var(--bg-soft);" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 6 · <span style="color: var(--gold);">I‑CADMUS proposal</span></div>
    <h2 class="section-h">Modernisation <strong>priorities</strong></h2>
    <p class="section-sub">A sequenced programme of reforms, from measures that can be implemented immediately within Australian systems to proposals requiring international coordination.</p>

    <div class="priorities-stepper">
      <div class="priority-step">
        <div class="priority-step-num">1</div>
        <h4>Immediate Australian Improvements</h4>
        <ul>
          <li><em>(I‑CADMUS proposal)</em> Require scientific species names in customs declarations for all seafood consignments</li>
          <li>Require net-weight and glaze-percentage declarations for frozen seafood imports</li>
          <li>Add a wild-caught or farmed production-method indicator to import and export declarations</li>
          <li>Require FAO catch-area codes or aquaculture-region identifiers in seafood declarations</li>
          <li>Align import and export statistical classifications so that equivalent detail is captured in both directions</li>
          <li>Require species-composition declarations for prepared and mixed seafood products</li>
          <li>Publish consolidated, machine-readable seafood trade data at the species level</li>
        </ul>
      </div>

      <div class="priority-step">
        <div class="priority-step-num">2</div>
        <h4>Digital Interoperability</h4>
        <ul>
          <li>Develop a digital customs declaration format that links HS classification with species, origin, production method, and traceability data</li>
          <li>Enable interoperability between customs systems, catch documentation schemes, and domestic food-safety databases</li>
          <li>Establish a national seafood-trade data platform that integrates import, export, and domestic-production data</li>
          <li>Pilot interoperable digital traceability for higher-risk seafood supply chains, selecting technology according to demonstrated functionality, cost, data governance and compatibility with recognised standards</li>
        </ul>
      </div>

      <div class="priority-step">
        <div class="priority-step-num">3</div>
        <h4>International HS Proposals</h4>
        <ul>
          <li>Propose new six-digit subheadings for commercially and ecologically significant species currently in residual categories</li>
          <li>Prepare proposals for the next WCO review cycle leading to HS 2033, while pursuing Australian tariff and statistical extensions that may be achievable earlier</li>
          <li>Advocate for WCO guidance on supplementary species declarations for residual subheadings</li>
          <li>Support international standards for net-weight and glaze-percentage declarations in customs data</li>
        </ul>
      </div>

      <div class="priority-step">
        <div class="priority-step-num">4</div>
        <h4>Verification and Enforcement</h4>
        <ul>
          <li>Establish a risk-based inspection programme for seafood imports that integrates species testing, weight verification, and document audit</li>
          <li>Build laboratory capacity for routine DNA species verification at the border</li>
          <li>Develop plausibility-check protocols that assess consignment-level coherence (volume, vessel capacity, fishing period, trade route)</li>
          <li>Create a shared intelligence platform for customs, fisheries, and food-safety agencies to coordinate enforcement</li>
          <li>Introduce meaningful penalties for deliberate misclassification, mislabelling, and species substitution in seafood trade</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============== WORKED INTEGRITY EXAMPLES ============== -->
<section id="examples" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 7 · <span style="color: var(--ink-3);">Illustrative examples</span></div>
    <h2 class="section-h">Worked <strong>integrity examples</strong></h2>
    <p class="section-sub">Five scenarios illustrating how classification gaps create real-world integrity failures, and the I-CADMUS fraud categories each engages.</p>

    <div class="examples-grid">
      <div class="example-card">
        <span class="example-num">Example 1</span>
        <h4>Correct Code, Wrong Species</h4>
        <p class="scenario">A consignment is correctly classified under the appropriate HS heading for frozen fish fillets. The customs code is valid, the tariff rate is correct, and the paperwork passes automated checks. However, the species declared on the commercial documents does not match the species in the box. A lower-value species has been substituted for the declared premium species.</p>
        <div class="lesson"><strong>Illustrative Example</strong>A correct HS code does not guarantee species authenticity. The classification confirms the product form, not the biological identity. Without species verification at the border or in the supply chain, substitution passes undetected.</div>
        <div class="icadmus-tags">
          <span class="icadmus-tag substitution">Substitution</span>
          <span class="icadmus-tag misrepresentation">Misrepresentation / Mislabelling</span>
        </div>
      </div>

      <div class="example-card">
        <span class="example-num">Example 2</span>
        <h4>Correct Species, Incomplete Origin</h4>
        <p class="scenario">A consignment of prawns is correctly identified by species and classified under the correct HS heading. The country of origin on the customs declaration is the last country of processing. However, the raw material was harvested in a different country, from a fishery subject to IUU concerns. The true geographic origin is not visible in the customs record.</p>
        <div class="lesson"><strong>Illustrative Example</strong>Customs country-of-origin may not reveal harvest origin. Traceability to the point of harvest is necessary to assess fishery-level risk. Separate structured fields for country of harvest and country of last processing would make the distinction visible.</div>
        <div class="icadmus-tags">
          <span class="icadmus-tag misrepresentation">Misrepresentation / Mislabelling</span>
          <span class="icadmus-tag unreported">Unreported / Undisclosed</span>
        </div>
      </div>

      <div class="example-card">
        <span class="example-num">Example 3</span>
        <h4>Correct Species, Incorrect Quantity</h4>
        <p class="scenario">A consignment of frozen prawns is correctly identified by species and origin. The gross weight on the customs declaration is accurate. However, the glaze applied to the product represents a substantial proportion of the total weight. The net seafood weight is significantly less than a buyer or consumer would expect. No glaze-percentage declaration is required at the border. <em>(Hypothetical scenario for illustration.)</em></p>
        <div class="lesson"><strong>Illustrative Example</strong>Gross-weight declarations do not reveal the actual quantity of seafood in the consignment. Without net-weight and glaze-percentage requirements, quantity concerns may enter the supply chain at the point of import.</div>
        <div class="icadmus-tags">
          <span class="icadmus-tag dilution">Dilution</span>
          <span class="icadmus-tag misrepresentation">Misrepresentation / Mislabelling</span>
        </div>
      </div>

      <div class="example-card">
        <span class="example-num">Example 4</span>
        <h4>Processed Identity Loss</h4>
        <p class="scenario">A consignment of breaded fish portions is classified under a prepared-fish heading. The customs declaration states the product contains a named white-fish species. After processing — filleting, skinning, coating, and freezing — the species cannot be identified by visual inspection. Laboratory testing later reveals that a proportion of the portions contain a different, lower-value species. Undeclared additives have also been introduced.</p>
        <div class="lesson"><strong>Illustrative Example</strong>Processing severs the visual link between the finished product and the source species. Customs classification of the finished product form does not verify species composition. Traceability records and testing are required to maintain identity through processing.</div>
        <div class="icadmus-tags">
          <span class="icadmus-tag adulteration">Addition / Adulteration</span>
          <span class="icadmus-tag misrepresentation">Misrepresentation / Mislabelling</span>
          <span class="icadmus-tag substitution">Substitution</span>
        </div>
      </div>

      <div class="example-card" style="grid-column: 1 / -1;">
        <span class="example-num">Example 5</span>
        <h4>Legitimate Documents, Implausible Trade</h4>
        <p class="scenario">A consignment arrives with all required customs documentation: valid HS classification, commercial invoice, packing list, health certificate, and catch documentation from the flag state. Each document appears genuine. However, the declared catch volume is implausible for the vessel size and the declared fishing period. The trade route does not match established patterns for the declared species and origin. No individual document is fraudulent, but the consignment as a whole does not withstand scrutiny.</p>
        <div class="lesson"><strong>Illustrative Example</strong>Document-by-document compliance does not substitute for risk-based assessment of the consignment as a whole. Plausibility checks — comparing declared volumes, vessel capacity, fishing periods, and trade routes — are necessary to detect sophisticated fraud that uses legitimate paperwork to cover illegitimate product.</div>
        <div class="icadmus-tags">
          <span class="icadmus-tag illegal">Illegal</span>
          <span class="icadmus-tag unreported">Unreported / Unregulated / Undisclosed</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== GOVERNANCE PATHWAY ============== -->
<section id="governance" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Section 8</div>
    <h2 class="section-h">Governance <strong>pathway</strong></h2>
    <p class="section-sub">The international and Australian participants required to advance seafood classification modernisation, and the role I-CADMUS plays in connecting them.</p>

    <div class="governance-grid">
      <div class="governance-card">
        <h4>International Level</h4>
        <ul>
          <li>World Customs Organization (WCO) — HS nomenclature development and revision</li>
          <li>Food and Agriculture Organization (FAO) — fisheries data, species nomenclature, catch-area codes</li>
          <li>World Trade Organization (WTO) — trade facilitation and regulatory alignment</li>
          <li>Codex Alimentarius — food-labelling and traceability standards</li>
          <li>Regional fisheries management organisations (RFMOs) — catch documentation and monitoring</li>
          <li>International Organization for Standardization (ISO) — data-format and traceability standards</li>
        </ul>
      </div>

      <div class="governance-card">
        <h4>Australian Level</h4>
        <ul>
          <li>Australian Border Force — tariff classification, import processing, and border enforcement</li>
          <li>Department of Agriculture, Fisheries and Forestry — export certification for prescribed goods, biosecurity, and fisheries policy</li>
          <li>Australian Bureau of Statistics — trade-data collection and classification maintenance</li>
          <li>Australian Fisheries Management Authority (AFMA) — manages and enforces Commonwealth fisheries; state and territory authorities manage fisheries within their respective jurisdictions</li>
          <li>Food Standards Australia New Zealand (FSANZ) — food-labelling and composition standards</li>
          <li>State and territory fisheries and food-safety agencies — domestic enforcement and inspection</li>
        </ul>
      </div>

      <div class="governance-card" style="border-top-color: var(--accent);">
        <h4>I-CADMUS Role</h4>
        <ul>
          <li>Maintain and publish the Seafood HS Code Modernisation Register as a reference resource</li>
          <li>Provide an independent, consumer-focused perspective on classification reform</li>
          <li>Connect international classification development with domestic integrity priorities</li>
          <li>Identify and document classification gaps that enable specific fraud types</li>
          <li>Propose evidence-based reforms through the I-CADMUS seven-category framework</li>
          <li>Support industry and government stakeholders with classification analysis and briefings</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============== DOWNLOADS ============== -->
<section id="downloads" style="background: var(--bg-soft);" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Downloads</div>
    <h2 class="section-h">Download the <strong>Register</strong></h2>
    <p class="section-sub">PDF and spreadsheet editions are being prepared and will become available following approval of Version 1.0.</p>

    <div class="downloads-grid">
      <div class="download-card">
        <div class="download-icon">PDF</div>
        <h4>PDF Edition</h4>
        <p>The complete Register as a formatted PDF document, suitable for printing and circulation.</p>
        <p class="download-pending">Forthcoming — pending Version 1.0 approval</p>
      </div>
      <div class="download-card">
        <div class="download-icon">XLS</div>
        <h4>Spreadsheet Edition</h4>
        <p>The classifications register data in spreadsheet format, suitable for analysis and integration.</p>
        <p class="download-pending">Forthcoming — pending Version 1.0 approval</p>
      </div>
    </div>
  </div>
</section>

<!-- ============== SUBMISSION FORM ============== -->
<section id="submission" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Submit</div>
    <h2 class="section-h" style="max-width: 30ch;">Propose an <strong>addition or correction</strong></h2>
    <p class="section-sub">Stakeholders are invited to submit proposed HS Code additions, corrections, or updates for consideration in future editions of the Register.</p>

    <div class="submission-form">
      <h3>Register Submissions</h3>
      <p>Register submissions are being prepared. Please email proposed additions or corrections to <a href="mailto:contact@seafoodconsumers.global" style="color: var(--teal); font-weight: 600;">contact@seafoodconsumers.global</a>.</p>
      <p style="font-size: 14px; color: var(--ink-3); margin-top: 16px;">Please include the relevant HS code or classification area, a description of the proposed change, and any supporting evidence or source references. Submissions will be reviewed against the register's acceptance criteria and change-control process.</p>
    </div>
  </div>
</section>

<!-- ============== VERSION CONTROL ============== -->
<section id="version" style="background: var(--bg-soft); padding: 64px 0;" class="reveal">
  <div class="container">
    <div class="section-eyebrow">Version Control</div>
    <h2 class="section-h" style="font-size: clamp(26px, 3vw, 36px);">Register <strong>version information</strong></h2>

    <div class="version-grid">
      <div class="version-item">
        <div class="version-label">Register Version</div>
        <div class="version-value">1.0</div>
      </div>
      <div class="version-item">
        <div class="version-label">Information Last Reviewed</div>
        <div class="version-value">August 2026</div>
      </div>
      <div class="version-item">
        <div class="version-label">HS Edition Referenced</div>
        <div class="version-value">HS 2022</div>
      </div>
      <div class="version-item">
        <div class="version-label">Next HS Edition</div>
        <div class="version-value">HS 2028</div>
      </div>
    </div>

    <!-- DOCUMENT CONTROL -->
    <div class="disclaimer" style="margin-top: 32px;">
      <h4>Document Control</h4>
      <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin-bottom: 16px;">
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink); width: 220px;">Document owner</td><td style="padding: 8px 0; color: var(--ink-2);">Seafood Consumers Association Ltd (SCA)</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Technical reviewer</td><td style="padding: 8px 0; color: var(--ink-2);">SCA Policy and Classification Team</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Date last reviewed</td><td style="padding: 8px 0; color: var(--ink-2);">August 2026</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Next scheduled review</td><td style="padding: 8px 0; color: var(--ink-2);">August 2027</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Source-verification process</td><td style="padding: 8px 0; color: var(--ink-2);">All classification references verified against official sources; access dates recorded in the sources section</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Acceptance criteria for amendments</td><td style="padding: 8px 0; color: var(--ink-2);">Proposed amendments must cite an authoritative source and be verified by the technical reviewer before inclusion</td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Permanent URL</td><td style="padding: 8px 0; color: var(--ink-2);"><a href="https://www.i-cadmus.org/hs-code-register.php" style="color: var(--teal);">https://www.i-cadmus.org/hs-code-register.php</a></td></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 0; font-weight: 600; color: var(--ink);">Contact</td><td style="padding: 8px 0; color: var(--ink-2);"><a href="mailto:contact@seafoodconsumers.global" style="color: var(--teal);">contact@seafoodconsumers.global</a></td></tr>
      </table>
      <h4 style="margin-top: 20px;">Change History</h4>
      <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin-bottom: 16px;">
        <tr style="background: var(--bg-2);"><th style="padding: 8px 12px; text-align: left; font-size: 12px; text-transform: uppercase; letter-spacing: 0.06em;">Version</th><th style="padding: 8px 12px; text-align: left; font-size: 12px; text-transform: uppercase; letter-spacing: 0.06em;">Date</th><th style="padding: 8px 12px; text-align: left; font-size: 12px; text-transform: uppercase; letter-spacing: 0.06em;">Description</th></tr>
        <tr style="border-bottom: 1px solid var(--line);"><td style="padding: 8px 12px; color: var(--ink-2);">1.0</td><td style="padding: 8px 12px; color: var(--ink-2);">August 2026</td><td style="padding: 8px 12px; color: var(--ink-2);">Initial publication</td></tr>
      </table>
    </div>

    <!-- AUTHORITATIVE SOURCES -->
    <div class="disclaimer" style="margin-top: 24px;">
      <h4>Authoritative Sources</h4>
      <ul style="list-style: none; padding: 0;">
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">World Customs Organization</strong> — HS 2028 amendments and HS Nomenclature. <a href="https://www.wcoomd.org/en/topics/nomenclature/instrument-and-tools/hs-nomenclature-2028-edition.aspx" style="color: var(--teal);" target="_blank" rel="noopener">wcoomd.org — HS 2028</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Australian Border Force</strong> — Combined Australian Customs Tariff Nomenclature: Chapter 3 (Fish and crustaceans, molluscs and other aquatic invertebrates). <a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-i/chapter-3" style="color: var(--teal);" target="_blank" rel="noopener">abf.gov.au — Chapter 3</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Australian Border Force</strong> — Combined Australian Customs Tariff Nomenclature: Chapter 16 (Preparations of meat, of fish, of crustaceans, molluscs or other aquatic invertebrates). <a href="https://www.abf.gov.au/importing-exporting-and-manufacturing/tariff-classification/current-tariff/schedule-3/section-iv/chapter-16" style="color: var(--teal);" target="_blank" rel="noopener">abf.gov.au — Chapter 16</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Australian Bureau of Statistics</strong> — Australian Harmonized Export Commodity Classification (AHECC) 2022. <a href="https://www.abs.gov.au/statistics/classifications/australian-harmonized-export-commodity-classification-ahecc/latest-release" style="color: var(--teal);" target="_blank" rel="noopener">abs.gov.au — AHECC</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Department of Agriculture, Fisheries and Forestry</strong> — Import conditions and biosecurity requirements for seafood. <a href="https://www.agriculture.gov.au/biosecurity-trade/import" style="color: var(--teal);" target="_blank" rel="noopener">agriculture.gov.au — imports</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Department of Agriculture, Fisheries and Forestry</strong> — Export certification and regulatory requirements. <a href="https://www.agriculture.gov.au/biosecurity-trade/export" style="color: var(--teal);" target="_blank" rel="noopener">agriculture.gov.au — exports</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; border-bottom: 1px solid var(--line); line-height: 1.5;"><strong style="color: var(--ink);">Food and Agriculture Organization of the United Nations</strong> — FAO Major Fishing Areas and catch-area codes. <a href="https://www.fao.org/fishery/en/area/search" style="color: var(--teal);" target="_blank" rel="noopener">fao.org — fishing areas</a>. Accessed August 2026.</li>
        <li style="font-size: 14px; color: var(--ink-2); padding: 8px 0; line-height: 1.5;"><strong style="color: var(--ink);">WCO</strong> — HS review-cycle information and HS 2033 planning. <a href="https://www.wcoomd.org/en/topics/nomenclature/activities-and-programmes/hs-review-cycle.aspx" style="color: var(--teal);" target="_blank" rel="noopener">wcoomd.org — review cycle</a>. Accessed August 2026.</li>
      </ul>
    </div>

    <!-- DISCLAIMER -->
    <div class="disclaimer" style="margin-top: 24px;">
      <h4>Disclaimer</h4>
      <p>This Register is an educational and policy-development resource published by the Seafood Consumers Association Ltd. It does not constitute customs, tariff or legal advice. Classification depends on the precise product, composition, processing, presentation, intended use and applicable national law. Importers and exporters should consult the relevant customs authority or a qualified classification professional.</p>
      <p>Inclusion of any reference, standard, organisation or methodology does not indicate government endorsement of the Register or its proposals.</p>
    </div>
  </div>
</section>

<!-- ============== CTA BAND ============== -->
<section class="cta-band">
  <div class="container">
    <div class="cta-band-grid">
      <div>
        <h2>Ready to <strong>apply the framework</strong>?</h2>
        <p>I‑CADMUS professional education and assessment are being developed. Register your interest or explore the current resources.</p>
      </div>
      <div class="cta-band-actions">
        <a href="contact.php" class="btn btn-primary">Register Your Interest <span class="arrow">&rarr;</span></a>
        <a href="resources.php" class="btn btn-outline">Browse resources</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {

  /* =========================================================
     ACCORDION
     ========================================================= */
  document.querySelectorAll('.accordion-header').forEach(function(header) {
    header.addEventListener('click', function() {
      var item = this.parentElement;
      var body = item.querySelector('.accordion-body');
      var wasOpen = item.classList.contains('open');

      // Close siblings in same parent
      var siblings = item.parentElement.querySelectorAll('.accordion-item');
      siblings.forEach(function(sib) {
        sib.classList.remove('open');
        sib.querySelector('.accordion-body').style.maxHeight = null;
      });

      if (!wasOpen) {
        item.classList.add('open');
        body.style.maxHeight = body.scrollHeight + 'px';
      }
    });
  });

  /* =========================================================
     REGISTER TABLE SEARCH & FILTER
     ========================================================= */
  var searchInput = document.getElementById('registerSearch');
  var filterBtns = document.querySelectorAll('.filter-btn');
  var tableRows = document.querySelectorAll('#registerTable tbody tr');
  var mobileCards = document.querySelectorAll('#registerCards .register-card');
  var activeFilter = 'all';

  function filterRegister() {
    var query = searchInput.value.toLowerCase();

    tableRows.forEach(function(row) {
      var chapter = row.getAttribute('data-chapter');
      var text = row.textContent.toLowerCase();
      var matchesFilter = (activeFilter === 'all' || chapter === activeFilter);
      var matchesSearch = !query || text.indexOf(query) !== -1;
      row.style.display = (matchesFilter && matchesSearch) ? '' : 'none';
    });

    mobileCards.forEach(function(card) {
      var chapter = card.getAttribute('data-chapter');
      var text = card.textContent.toLowerCase();
      var matchesFilter = (activeFilter === 'all' || chapter === activeFilter);
      var matchesSearch = !query || text.indexOf(query) !== -1;
      card.style.display = (matchesFilter && matchesSearch) ? '' : 'none';
    });
  }

  searchInput.addEventListener('input', filterRegister);

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
      activeFilter = this.getAttribute('data-filter');
      filterRegister();
    });
  });

  /* =========================================================
     REVEAL ON SCROLL
     ========================================================= */
  var revealObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(function(el) {
    revealObserver.observe(el);
  });

  /* =========================================================
     SMOOTH SCROLL FOR ANCHOR LINKS
     ========================================================= */
  document.querySelectorAll('a[href^="#"]').forEach(function(link) {
    link.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

});
</script>
</body>
</html>
