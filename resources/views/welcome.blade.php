<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDKMP – Klinik Kesehatan Masyarakat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --blue:        #1A5CFF;
            --blue-dark:   #0F3FBF;
            --blue-light:  #EEF3FF;
            --cyan:        #00C2E0;
            --white:       #FFFFFF;
            --gray-50:     #F8FAFC;
            --gray-100:    #F1F5F9;
            --gray-200:    #E2E8F0;
            --gray-500:    #64748B;
            --gray-700:    #334155;
            --gray-900:    #0F172A;
            --radius-sm:   8px;
            --radius-md:   14px;
            --radius-lg:   22px;
            --shadow-sm:   0 1px 4px rgba(0,0,0,.07);
            --shadow-md:   0 4px 20px rgba(0,0,0,.10);
            --shadow-lg:   0 12px 40px rgba(26,92,255,.15);
        }

        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; color: var(--gray-900); background: var(--white); line-height: 1.6; }
        img  { display: block; max-width: 100%; }
        a    { text-decoration: none; color: inherit; }

        /* ── NAVBAR ── */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 5%; height: 70px;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(226,232,240,.6);
            box-shadow: var(--shadow-sm);
        }
        .nav-brand { display: flex; align-items: center; gap: 10px; font-weight: 800; font-size: 1.1rem; color: var(--blue); }
        .nav-brand svg { width: 36px; height: 36px; }
        .nav-links { display: flex; gap: 32px; list-style: none; }
        .nav-links a { font-size: .875rem; font-weight: 500; color: var(--gray-700); transition: color .2s; }
        .nav-links a:hover { color: var(--blue); }
        .nav-links a.active { color: var(--blue); border-bottom: 2px solid var(--blue); padding-bottom: 2px; }
        .btn-daftar {
            background: var(--blue); color: var(--white);
            padding: 10px 22px; border-radius: 50px;
            font-weight: 600; font-size: .875rem;
            display: flex; align-items: center; gap: 6px;
            transition: background .2s, transform .15s;
        }
        .btn-daftar:hover { background: var(--blue-dark); transform: translateY(-1px); }

        /* ── HERO ── */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #0A2875 0%, #1A5CFF 55%, #00C2E0 100%);
            display: flex; align-items: center;
            padding: 100px 5% 60px;
            position: relative; overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Ccircle cx='30' cy='30' r='1.5' fill='rgba(255,255,255,0.06)'/%3E%3C/g%3E%3C/svg%3E");
            pointer-events: none;
        }
        .hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; width: 100%; max-width: 1280px; margin: auto; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,.15); backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,.25);
            color: #fff; font-size: .8rem; font-weight: 600;
            padding: 6px 16px; border-radius: 50px; margin-bottom: 20px;
        }
        .hero h1 { font-size: clamp(2rem,4vw,3.25rem); font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 18px; }
        .hero h1 span { color: var(--cyan); }
        .hero p { color: rgba(255,255,255,.8); font-size: 1rem; max-width: 460px; margin-bottom: 36px; }
        .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }
        .btn-white {
            background: #fff; color: var(--blue);
            padding: 13px 28px; border-radius: 50px;
            font-weight: 700; font-size: .9rem;
            display: inline-flex; align-items: center; gap: 8px;
            box-shadow: var(--shadow-lg);
            transition: transform .15s, box-shadow .15s;
        }
        .btn-white:hover { transform: translateY(-2px); box-shadow: 0 18px 48px rgba(26,92,255,.25); }
        .btn-outline-white {
            background: transparent; color: #fff;
            border: 2px solid rgba(255,255,255,.5);
            padding: 11px 26px; border-radius: 50px;
            font-weight: 600; font-size: .9rem;
            display: inline-flex; align-items: center; gap: 8px;
            transition: background .2s, border-color .2s;
        }
        .btn-outline-white:hover { background: rgba(255,255,255,.12); border-color: #fff; }

        /* hero visual */
        .hero-visual {
            border-radius: var(--radius-lg);
            height: 420px;
            position: relative; overflow: hidden;
            box-shadow: 0 24px 60px rgba(0,0,0,.35);
        }
        .hero-visual img {
            width: 100%; height: 100%; object-fit: cover;
        }
        .hero-visual::after {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(180deg, transparent 50%, rgba(10,40,117,.4) 100%);
            border-radius: var(--radius-lg);
        }

        /* ── STATS BAR ── */
        .stats-bar {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            display: grid; grid-template-columns: repeat(4,1fr);
            position: relative; z-index: 10;
            border: 1px solid var(--gray-200);
            overflow: hidden;
            max-width: 1280px;
            margin: -50px auto 0;
        }
        .stat-item {
            padding: 28px 24px;
            text-align: center;
            border-right: 1px solid var(--gray-200);
        }
        .stat-item:last-child { border-right: none; }
        .stat-icon { font-size: 1.5rem; margin-bottom: 8px; }
        .stat-num { font-size: 1.75rem; font-weight: 900; color: var(--blue); line-height: 1; }
        .stat-label { font-size: .8rem; color: var(--gray-500); margin-top: 4px; font-weight: 500; }

        /* ── ABOUT ── */
        .about-wrap { padding: 100px 5% 80px; max-width: 1280px; margin: auto; }
        .about {
            display: grid; grid-template-columns: 1fr 1fr; gap: 80px;
            align-items: center;
        }
        .about-img {
            border-radius: var(--radius-lg);
            height: 420px;
            position: relative; overflow: hidden;
            box-shadow: var(--shadow-lg);
        }
        .about-img img { width: 100%; height: 100%; object-fit: cover; }
        .floating-badge {
            position: absolute; bottom: 28px; left: 28px;
            background: var(--white); border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); padding: 14px 20px;
            display: flex; align-items: center; gap: 12px;
        }
        .fb-icon { background: var(--blue); color: #fff; border-radius: 10px; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; flex-shrink: 0; }
        .fb-text strong { display: block; font-weight: 700; font-size: .9rem; color: var(--gray-900); }
        .fb-text span { font-size: .78rem; color: var(--gray-500); }
        .eyebrow { display: inline-flex; align-items: center; gap: 8px; background: var(--blue-light); color: var(--blue); font-size: .8rem; font-weight: 700; padding: 5px 14px; border-radius: 50px; margin-bottom: 14px; }
        .about h2 { font-size: clamp(1.6rem,3vw,2.4rem); font-weight: 900; margin-bottom: 16px; line-height: 1.2; }
        .about h2 span { color: var(--blue); }
        .about-text > p { color: var(--gray-500); font-size: .95rem; margin-bottom: 28px; }
        .feature-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .feature-item { display: flex; align-items: center; gap: 10px; font-size: .875rem; font-weight: 600; color: var(--gray-700); }
        .feature-item .fi-icon { background: var(--blue-light); color: var(--blue); border-radius: 8px; width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0; }

        /* ── SERVICES ── */
        .services-section { background: var(--gray-50); padding: 80px 5%; }
        .section-header { display: flex; justify-content: space-between; align-items: flex-end; max-width: 1280px; margin: 0 auto 40px; }
        .section-header h2 { font-size: clamp(1.4rem,2.5vw,2rem); font-weight: 800; }
        .link-all { color: var(--blue); font-size: .875rem; font-weight: 600; display: flex; align-items: center; gap: 4px; }
        .link-all:hover { text-decoration: underline; }
        .services-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; max-width: 1280px; margin: auto; }
        .service-card {
            background: var(--white); border-radius: var(--radius-md);
            overflow: hidden; border: 1px solid var(--gray-200);
            transition: transform .2s, box-shadow .2s; cursor: pointer;
        }
        .service-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
        .service-img { height: 160px; overflow: hidden; position: relative; }
        .service-img img { width: 100%; height: 100%; object-fit: cover; transition: transform .4s; }
        .service-card:hover .service-img img { transform: scale(1.05); }
        .service-img-overlay {
            position: absolute; bottom: 0; left: 0; right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,.35));
            height: 60px;
        }
        .service-body { padding: 18px 20px; }
        .service-body h3 { font-weight: 700; font-size: 1rem; margin-bottom: 6px; }
        .service-body p { font-size: .83rem; color: var(--gray-500); line-height: 1.5; }

        /* ── DOCTORS ── */
        .doctors-wrap { padding: 80px 5%; max-width: 1280px; margin: auto; }
        .doc-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 36px; flex-wrap: wrap; gap: 20px; }
        .btn-blue {
            background: var(--blue); color: #fff;
            padding: 11px 24px; border-radius: 50px;
            font-size: .875rem; font-weight: 600;
            display: inline-flex; align-items: center; gap: 6px;
            transition: background .2s, transform .15s;
        }
        .btn-blue:hover { background: var(--blue-dark); transform: translateY(-1px); }
        .doctors-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
        .doctor-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-md); overflow: hidden;
            transition: transform .2s, box-shadow .2s; text-align: center;
        }
        .doctor-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
        .doctor-photo { height: 160px; background: var(--blue-light); display: flex; align-items: center; justify-content: center; }
        .doctor-avatar { width: 90px; height: 90px; border-radius: 50%; background: var(--blue); display: flex; align-items: center; justify-content: center; font-size: 2.2rem; color: #fff; font-weight: 800; border: 4px solid #fff; box-shadow: 0 4px 16px rgba(26,92,255,.25); }
        .doctor-info { padding: 18px; }
        .doctor-info h3 { font-weight: 700; font-size: .95rem; margin-bottom: 4px; }
        .doctor-info .spec { font-size: .8rem; color: var(--blue); font-weight: 600; margin-bottom: 10px; }
        .stars { display: flex; align-items: center; justify-content: center; gap: 4px; font-size: .82rem; color: var(--gray-500); }
        .stars .star { color: #F59E0B; }

        /* ── FACILITIES ── */
        .facilities-section {
            background: linear-gradient(135deg, #0A2875, #1A5CFF);
            padding: 80px 5%; color: #fff;
        }
        .facilities-inner { max-width: 1280px; margin: auto; }
        .facilities-inner .eyebrow { background: rgba(255,255,255,.15); color: #fff; }
        .facilities-inner h2 { font-size: clamp(1.6rem,3vw,2.2rem); font-weight: 900; margin-bottom: 12px; }
        .facilities-inner > p { color: rgba(255,255,255,.75); font-size: .95rem; margin-bottom: 44px; max-width: 520px; }
        .facilities-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 18px; }
        .facility-card {
            border-radius: var(--radius-md); overflow: hidden;
            position: relative; height: 200px;
            border: 1px solid rgba(255,255,255,.15);
            transition: transform .2s;
        }
        .facility-card:hover { transform: translateY(-4px); }
        .facility-card img { width: 100%; height: 100%; object-fit: cover; }
        .facility-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(transparent 30%, rgba(10,40,117,.75) 100%);
        }
        .facility-label {
            position: absolute; bottom: 0; left: 0; right: 0;
            padding: 16px;
        }
        .facility-label h3 { font-weight: 700; font-size: .9rem; color: #fff; }
        .facility-label p { font-size: .75rem; color: rgba(255,255,255,.7); margin-top: 3px; }

        /* ── CTA BANNER ── */
        .cta-banner { background: var(--gray-50); padding: 70px 5%; }
        .cta-inner {
            max-width: 1280px; margin: auto;
            background: linear-gradient(135deg, var(--blue), var(--cyan));
            border-radius: var(--radius-lg);
            padding: 52px 56px;
            display: flex; align-items: center; justify-content: space-between; gap: 40px;
            flex-wrap: wrap;
        }
        .cta-text h2 { font-size: clamp(1.4rem,2.5vw,2rem); font-weight: 900; color: #fff; margin-bottom: 8px; }
        .cta-text p { color: rgba(255,255,255,.8); font-size: .95rem; }
        .cta-actions { display: flex; flex-direction: column; align-items: flex-end; gap: 10px; }
        .cta-phone { color: #fff; font-size: 1.5rem; font-weight: 900; display: flex; align-items: center; gap: 10px; }
        .cta-phone .ph-icon { background: rgba(255,255,255,.2); border-radius: 50%; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
        .btn-cta {
            background: #fff; color: var(--blue);
            padding: 12px 26px; border-radius: 50px;
            font-weight: 700; font-size: .9rem;
            display: inline-flex; align-items: center; gap: 6px;
            box-shadow: 0 6px 24px rgba(0,0,0,.15);
            transition: transform .15s;
        }
        .btn-cta:hover { transform: translateY(-2px); }

        /* ── FOOTER ── */
        footer { background: var(--gray-900); color: rgba(255,255,255,.65); padding: 56px 5% 32px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; max-width: 1280px; margin: 0 auto 48px; }
        .footer-brand { display: flex; align-items: center; gap: 10px; margin-bottom: 14px; }
        .footer-brand-name { font-weight: 800; font-size: 1.1rem; color: #fff; }
        .footer-tagline { font-size: .85rem; line-height: 1.6; margin-bottom: 20px; }
        .footer-badge { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12); border-radius: 8px; padding: 8px 14px; font-size: .8rem; font-weight: 600; color: rgba(255,255,255,.8); }
        .footer-col h4 { color: #fff; font-size: .9rem; font-weight: 700; margin-bottom: 16px; }
        .footer-col ul { list-style: none; }
        .footer-col li { font-size: .85rem; margin-bottom: 10px; }
        .footer-col a { color: rgba(255,255,255,.6); transition: color .2s; }
        .footer-col a:hover { color: var(--cyan); }
        .footer-bottom { max-width: 1280px; margin: auto; border-top: 1px solid rgba(255,255,255,.1); padding-top: 24px; display: flex; justify-content: space-between; align-items: center; font-size: .82rem; flex-wrap: wrap; gap: 12px; }
        .footer-bottom-badges { display: flex; gap: 16px; }
        .fb2 { background: rgba(255,255,255,.07); border-radius: 6px; padding: 5px 12px; font-size: .78rem; color: rgba(255,255,255,.55); }

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            .services-grid { grid-template-columns: repeat(2,1fr); }
            .doctors-grid  { grid-template-columns: repeat(2,1fr); }
            .facilities-grid { grid-template-columns: repeat(2,1fr); }
            .footer-grid   { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero-inner { grid-template-columns: 1fr; }
            .hero-visual { display: none; }
            .stats-bar { grid-template-columns: repeat(2,1fr); margin: -30px 4% 0; }
            .about { grid-template-columns: 1fr; gap: 40px; }
            .about-img { display: none; }
            .services-grid { grid-template-columns: 1fr; }
            .doctors-grid  { grid-template-columns: 1fr; }
            .facilities-grid { grid-template-columns: 1fr 1fr; }
            .cta-inner { flex-direction: column; text-align: center; padding: 36px 28px; }
            .cta-actions { align-items: center; }
            .footer-grid { grid-template-columns: 1fr; gap: 32px; }
            .footer-bottom { flex-direction: column; text-align: center; }
        }
        @media (max-width: 480px) {
            .facilities-grid { grid-template-columns: 1fr; }
            .stats-bar { grid-template-columns: 1fr 1fr; }
        }
    </style>
</head>
<body>

<!-- ══════════════════════════════ NAVBAR -->
<nav class="navbar">
    <a href="#" class="nav-brand">
        <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" fill="none">
            <rect width="40" height="40" rx="10" fill="#1A5CFF"/>
            <path d="M20 8v24M8 20h24" stroke="#fff" stroke-width="4.5" stroke-linecap="round"/>
        </svg>
        <span>KDKMP</span>
    </a>

    <ul class="nav-links">
        <li><a href="#" class="active">Beranda</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#layanan">Layanan</a></li>
        <li><a href="#dokter">Dokter</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#janji" class="btn-daftar">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        Daftar Online
    </a>
</nav>

<!-- ══════════════════════════════ HERO -->
<section class="hero">
    <div class="hero-inner">
        <div class="hero-content">
            <div class="hero-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                Kesehatan Anda, Prioritas Kami
            </div>
            <h1>Pelayanan Terbaik<br>untuk <span>Kesehatan</span><br>Anda &amp; Keluarga</h1>
            <p>Program Klinik KDKMP hadir memberikan layanan medis berkualitas dengan tenaga profesional dan fasilitas modern untuk masyarakat.</p>
            <div class="hero-actions">
                <a href="#layanan" class="btn-white">
                    Lihat Layanan
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#janji" class="btn-outline-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Buat Janji Temu
                </a>
            </div>
        </div>

        {{-- Ganti URL di bawah dengan: asset('img/hero-doctor.jpg') jika pakai gambar lokal --}}
        <div class="hero-visual">
            <img
                src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=80"
                alt="Dokter KDKMP melayani pasien"
                loading="eager"
            >
        </div>
    </div>
</section>

<!-- ══════════════════════════════ STATS -->
<div class="stats-bar">
    <div class="stat-item">
        <div class="stat-icon">👨‍⚕️</div>
        <div class="stat-num">15+</div>
        <div class="stat-label">Dokter Spesialis</div>
    </div>
    <div class="stat-item">
        <div class="stat-icon">❤️</div>
        <div class="stat-num">10.000+</div>
        <div class="stat-label">Pasien Terlayani</div>
    </div>
    <div class="stat-item">
        <div class="stat-icon">🏥</div>
        <div class="stat-num">50+</div>
        <div class="stat-label">Kamar Perawatan</div>
    </div>
    <div class="stat-item">
        <div class="stat-icon">⭐</div>
        <div class="stat-num">97%</div>
        <div class="stat-label">Kepuasan Pasien</div>
    </div>
</div>

<!-- ══════════════════════════════ ABOUT -->
<div class="about-wrap" id="tentang">
    <div class="about">
        {{-- Ganti URL di bawah dengan: asset('img/klinik-gedung.jpg') jika pakai gambar lokal --}}
        <div class="about-img">
            <img
                src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&q=80"
                alt="Gedung Klinik KDKMP"
                loading="lazy"
            >
            <div class="floating-badge">
                <div class="fb-icon">🏥</div>
                <div class="fb-text">
                    <strong>Beroperasi Sejak 2010</strong>
                    <span>Melayani masyarakat 14+ tahun</span>
                </div>
            </div>
        </div>

        <div class="about-text">
            <div class="eyebrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                Tentang Kami
            </div>
            <h2>Klinik <span>KDKMP</span><br>untuk Hidup yang Lebih Sehat</h2>
            <p>Program Kesehatan Dasar Komunitas Masyarakat Peduli (KDKMP) berkomitmen memberikan layanan kesehatan profesional dengan teknologi modern dan suasana nyaman bagi seluruh pasien.</p>
            <div class="feature-grid">
                <div class="feature-item"><span class="fi-icon">🕐</span> Pelayanan 24 Jam</div>
                <div class="feature-item"><span class="fi-icon">👩‍⚕️</span> Tenaga Medis Bersertifikat</div>
                <div class="feature-item"><span class="fi-icon">🔬</span> Fasilitas Modern</div>
                <div class="feature-item"><span class="fi-icon">💊</span> Perawatan Berkualitas</div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════ SERVICES -->
<section class="services-section" id="layanan">
    <div class="section-header">
        <h2>Layanan Kami</h2>
        <a href="{{ route('layanan') }}" class="link-all">Lihat Semua Layanan →</a>
    </div>
    <div class="services-grid">

        {{-- Kartu 1 – Poli Umum --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/poli-umum.jpg') --}}
                <img src="https://images.unsplash.com/photo-1530497610245-94d3c16cda28?w=600&q=75" alt="Poli Umum" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>Poli Umum</h3>
                <p>Pemeriksaan dan pengobatan penyakit umum oleh dokter berpengalaman setiap hari kerja.</p>
            </div>
        </div>

        {{-- Kartu 2 – Rawat Inap --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/rawat-inap.jpg') --}}
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=75" alt="Rawat Inap" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>Rawat Inap</h3>
                <p>Fasilitas rawat inap dengan kamar nyaman dan pemantauan 24 jam oleh tenaga medis profesional.</p>
            </div>
        </div>

        {{-- Kartu 3 – IGD 24 Jam --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/igd.jpg') --}}
                <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=600&q=75" alt="IGD 24 Jam" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>IGD 24 Jam</h3>
                <p>Unit gawat darurat siap melayani keadaan darurat medis kapanpun, tujuh hari seminggu.</p>
            </div>
        </div>

        {{-- Kartu 4 – Laboratorium --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/laboratorium.jpg') --}}
                <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?w=600&q=75" alt="Laboratorium" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>Laboratorium</h3>
                <p>Pemeriksaan laboratorium lengkap dengan peralatan modern dan hasil yang cepat serta akurat.</p>
            </div>
        </div>

        {{-- Kartu 5 – KIA & Imunisasi --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/kia.jpg') --}}
                <img src="https://images.unsplash.com/photo-1491013516836-7db643ee125a?w=600&q=75" alt="KIA dan Imunisasi" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>KIA &amp; Imunisasi</h3>
                <p>Pelayanan Kesehatan Ibu dan Anak serta program imunisasi sesuai jadwal nasional.</p>
            </div>
        </div>

        {{-- Kartu 6 – Farmasi --}}
        <div class="service-card">
            <div class="service-img">
                {{-- Ganti URL dengan: asset('img/layanan/farmasi.jpg') --}}
                <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&q=75" alt="Farmasi" loading="lazy">
                <div class="service-img-overlay"></div>
            </div>
            <div class="service-body">
                <h3>Farmasi</h3>
                <p>Apotek lengkap menyediakan obat-obatan resep dan non-resep berkualitas dengan harga terjangkau.</p>
            </div>
        </div>

    </div>
</section>

<!-- ══════════════════════════════ DOCTORS -->
<section id="dokter">
    <div class="doctors-wrap">
        <div class="doc-header">
            <div>
                <div class="eyebrow">Dokter Kami</div>
                <h2 style="font-size:clamp(1.4rem,2.5vw,2rem);font-weight:900;margin-bottom:8px;">
                    Tenaga Medis <span style="color:var(--blue)">Berpengalaman</span>
                </h2>
                <p style="color:var(--gray-500);font-size:.9rem;">Tim dokter kami siap memberikan perawatan terbaik untuk Anda dan keluarga.</p>
            </div>
            <a href="{{ route('dokter') }}" class="btn-blue">Lihat Semua Dokter →</a>
        </div>

        <div class="doctors-grid">

            {{-- Dokter 1 --}}
            <div class="doctor-card">
                <div class="doctor-photo">
                    <div class="doctor-avatar">JR</div>
                </div>
                <div class="doctor-info">
                    <h3>dr. Jenorez</h3>
                    <div class="spec">Spesialis Jantung</div>
                    <div class="stars"><span class="star">★★★★★</span>&nbsp;4.9</div>
                </div>
            </div>

            {{-- Dokter 2 --}}
            <div class="doctor-card">
                <div class="doctor-photo" style="background:#fff0f8;">
                    <div class="doctor-avatar" style="background:#e91e8c;">KT</div>
                </div>
                <div class="doctor-info">
                    <h3>dr. Katarina</h3>
                    <div class="spec">Spesialis Anak</div>
                    <div class="stars"><span class="star">★★★★★</span>&nbsp;4.9</div>
                </div>
            </div>

            {{-- Dokter 3 --}}
            <div class="doctor-card">
                <div class="doctor-photo" style="background:#f0fff4;">
                    <div class="doctor-avatar" style="background:#0d9e6e;">NK</div>
                </div>
                <div class="doctor-info">
                    <h3>dr. Nakhaeil</h3>
                    <div class="spec">Spesialis Bedah</div>
                    <div class="stars"><span class="star">★★★★</span>&nbsp;4.8</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════ FACILITIES -->
<section class="facilities-section" id="fasilitas">
    <div class="facilities-inner">
        <div class="eyebrow">Fasilitas Kami</div>
        <h2>Fasilitas Modern untuk<br>Perawatan Terbaik</h2>
        <p>Lingkungan nyaman dengan peralatan canggih untuk mendukung kesembuhan pasien secara optimal.</p>

        <div class="facilities-grid">

            {{-- Fasilitas 1 – ICU --}}
            <div class="facility-card">
                {{-- Ganti URL dengan: asset('img/fasilitas/icu.jpg') --}}
                <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=500&q=75" alt="Ruang ICU" loading="lazy">
                <div class="facility-overlay"></div>
                <div class="facility-label">
                    <h3>Ruang ICU</h3>
                    <p>Monitoring intensif 24 jam</p>
                </div>
            </div>

            {{-- Fasilitas 2 – Kamar VIP --}}
            <div class="facility-card">
                {{-- Ganti URL dengan: asset('img/fasilitas/vip.jpg') --}}
                <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=75" alt="Kamar VIP" loading="lazy">
                <div class="facility-overlay"></div>
                <div class="facility-label">
                    <h3>Kamar VIP</h3>
                    <p>Fasilitas premium nyaman</p>
                </div>
            </div>

            {{-- Fasilitas 3 – Ruang Operasi --}}
            <div class="facility-card">
                {{-- Ganti URL dengan: asset('img/fasilitas/operasi.jpg') --}}
                <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=500&q=75" alt="Ruang Operasi" loading="lazy">
                <div class="facility-overlay"></div>
                <div class="facility-label">
                    <h3>Ruang Operasi</h3>
                    <p>Steril & berteknologi tinggi</p>
                </div>
            </div>

            {{-- Fasilitas 4 – Ambulans --}}
            <div class="facility-card">
                {{-- Ganti URL dengan: asset('img/fasilitas/ambulans.jpg') --}}
                <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?w=500&q=75" alt="Ambulans 24 Jam" loading="lazy">
                <div class="facility-overlay"></div>
                <div class="facility-label">
                    <h3>Ambulans 24 Jam</h3>
                    <p>Siap tanggap darurat</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════ CTA -->
<section class="cta-banner" id="janji">
    <div class="cta-inner">
        <div class="cta-text">
            <h2>Butuh Bantuan Medis?</h2>
            <p>Kami siap melayani Anda 24 jam sehari, 7 hari seminggu.</p>
        </div>
        <div class="cta-actions">
            <div class="cta-phone">
                <span class="ph-icon">📞</span>
                (0754) 123 4567
            </div>
            <a href="#" class="btn-cta">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                Buat Janji Temu Sekarang
            </a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════ FOOTER -->
<footer id="kontak">
    <div class="footer-grid">
        <div>
            <div class="footer-brand">
                <svg width="32" height="32" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <rect width="40" height="40" rx="10" fill="#1A5CFF"/>
                    <path d="M20 8v24M8 20h24" stroke="#fff" stroke-width="4.5" stroke-linecap="round"/>
                </svg>
                <span class="footer-brand-name">KDKMP</span>
            </div>
            <p class="footer-tagline">Program Kesehatan Dasar Komunitas Masyarakat Peduli. Memberikan layanan kesehatan terjangkau dan berkualitas untuk semua lapisan masyarakat.</p>
            <div class="footer-badge">✅ Terakreditasi Kemenkes RI</div>
        </div>
        <div class="footer-col">
            <h4>Navigasi</h4>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#dokter">Dokter</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="#">Poli Umum</a></li>
                <li><a href="#">Rawat Inap</a></li>
                <li><a href="#">IGD 24 Jam</a></li>
                <li><a href="#">Laboratorium</a></li>
                <li><a href="#">KIA &amp; Imunisasi</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Kontak</h4>
            <ul>
                <li>📍 Tanjung Baru, Pancur</li>
                <li>📞 (0754) 123 4567</li>
                <li>✉️ info@kdkmp.id</li>
                <li>🕐 24 Jam / 7 Hari</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© {{ date('Y') }} Klinik KDKMP. Semua hak dilindungi.</span>
        <div class="footer-bottom-badges">
            <span class="fb2">🚑 IGD 24 Jam</span>
            <span class="fb2">👨‍⚕️ Tenaga Profesional</span>
            <span class="fb2">🏥 Fasilitas Lengkap</span>
        </div>
    </div>
</footer>

<script>
    // Active nav on scroll
    const sections = document.querySelectorAll('section[id], footer[id], div[id]');
    const navLinks = document.querySelectorAll('.nav-links a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            if (window.scrollY >= s.offsetTop - 120) current = s.getAttribute('id');
        });
        navLinks.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + current || (current === '' && a.getAttribute('href') === '#')) {
                a.classList.add('active');
            }
        });
        document.querySelector('.navbar').style.boxShadow =
            window.scrollY > 10 ? '0 2px 20px rgba(0,0,0,.12)' : '0 1px 4px rgba(0,0,0,.07)';
    });
</script>
</body>
</html>