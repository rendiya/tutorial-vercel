<?php
/**
 * NexaTech Solutions - Company Profile
 * Halaman Utama (index.php)
 *
 * Tema: Putih + Biru + Kuning
 * Dibuat oleh: NexaTech Dev Team
 */

require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- ==========================================
     HERO SECTION
     ========================================== -->
<section id="home">
    <!-- Background Shapes -->
    <div class="hero-bg-shapes">
        <div class="hero-shape hero-shape-1"></div>
        <div class="hero-shape hero-shape-2"></div>
        <div class="hero-shape hero-shape-3"></div>
    </div>

    <div class="container">
        <div class="hero-grid">
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="dot"></span>
                    #1 Jasa Website Profesional di Indonesia
                </div>

                <h1 class="hero-title">
                    Wujudkan Bisnis Anda di<br>
                    <span class="line-blue">Dunia Digital</span><br>
                    Bersama Kami
                </h1>

                <p class="hero-desc">
                    Kami menghadirkan solusi teknologi terdepan — dari pembuatan website profesional, aplikasi mobile, hingga strategi digital marketing untuk mendorong pertumbuhan bisnis Anda.
                </p>

                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary" id="hero-cta-start">
                        <i class="ri-rocket-line"></i>
                        Mulai Proyek Sekarang
                    </a>
                    <a href="#portfolio" class="btn-outline" id="hero-cta-portfolio">
                        <i class="ri-gallery-line"></i>
                        Lihat Portofolio
                    </a>
                </div>

                <div class="hero-stats">
                    <?php foreach ($stats as $stat): ?>
                    <div class="hero-stat">
                        <div class="hero-stat-number"><?= $stat['number'] ?></div>
                        <div class="hero-stat-label"><?= $stat['label'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="hero-image-wrapper">
                <img src="assets/images/hero_bg.png" alt="NexaTech - Solusi Digital" class="hero-image-main" loading="eager">

                <!-- Floating Cards -->
                <div class="hero-card-float hero-card-1">
                    <div class="float-icon blue"><i class="ri-checkbox-circle-fill"></i></div>
                    <div class="float-info">
                        <div class="float-title">Proyek Selesai</div>
                        <div class="float-sub">250+ proyek sukses</div>
                    </div>
                </div>

                <div class="hero-card-float hero-card-2">
                    <div class="float-icon yellow"><i class="ri-star-fill"></i></div>
                    <div class="float-info">
                        <div class="float-title">Rating 5.0/5.0</div>
                        <div class="float-sub">Dari 180+ klien</div>
                    </div>
                </div>

                <div class="hero-card-float hero-card-3">
                    <div class="float-icon green"><i class="ri-shield-check-fill"></i></div>
                    <div class="float-info">
                        <div class="float-title">Garansi Kualitas</div>
                        <div class="float-sub">Bug fix 3 bulan gratis</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CLIENTS BAR
     ========================================== -->
<div class="clients-bar">
    <div class="clients-label">Dipercaya oleh berbagai perusahaan & brand ternama</div>
    <div class="clients-track-wrapper">
        <div class="clients-track" id="clients-track">
            <div class="client-item"><i class="ri-building-2-line"></i><span>PT Maju Bersama</span></div>
            <div class="client-item"><i class="ri-hospital-line"></i><span>Klinik Sehat Digital</span></div>
            <div class="client-item"><i class="ri-store-3-line"></i><span>TokoModa Online</span></div>
            <div class="client-item"><i class="ri-bank-line"></i><span>FinTrack Corp</span></div>
            <div class="client-item"><i class="ri-graduation-cap-line"></i><span>EduLearn Indonesia</span></div>
            <div class="client-item"><i class="ri-home-3-line"></i><span>Rizky Property</span></div>
            <div class="client-item"><i class="ri-restaurant-line"></i><span>RestoPOS Group</span></div>
            <div class="client-item"><i class="ri-leaf-line"></i><span>GreenFarm Tech</span></div>
            <div class="client-item"><i class="ri-truck-line"></i><span>LogistiQ Express</span></div>
            <div class="client-item"><i class="ri-camera-line"></i><span>StudioPixel ID</span></div>
        </div>
    </div>
</div>

<!-- ==========================================
     ABOUT SECTION
     ========================================== -->
<section id="about">
    <div class="container">
        <div class="about-grid">
            <!-- Image Side -->
            <div class="about-image-wrapper animate-on-scroll">
                <img src="assets/images/team_photo.png" alt="Tim NexaTech Solutions" class="about-image-main">

                <div class="about-badge-float about-badge-1">
                    <div class="badge-number"><?= date('Y') - intval(SITE_YEAR_FOUNDED) ?>+</div>
                    <div class="badge-label">Tahun Berpengalaman</div>
                </div>

                <div class="about-badge-float about-badge-2">
                    <div class="badge-number yellow">99.9%</div>
                    <div class="badge-label">Uptime Server</div>
                </div>
            </div>

            <!-- Content Side -->
            <div class="about-content">
                <div class="section-badge animate-on-scroll">
                    <i class="ri-building-4-line"></i>
                    Tentang Kami
                </div>

                <h2 class="section-title animate-on-scroll">
                    Solusi Teknologi <span class="highlight">Terpercaya</span><br>
                    Sejak Tahun <?= SITE_YEAR_FOUNDED ?>
                </h2>

                <p class="about-text animate-on-scroll">
                    <strong><?= SITE_NAME ?></strong> adalah perusahaan teknologi informasi yang berdiri sejak <?= SITE_YEAR_FOUNDED ?>, berdedikasi untuk memberikan solusi digital terbaik bagi bisnis Anda. Kami telah menyelesaikan ratusan proyek sukses dengan klien dari berbagai industri di seluruh Indonesia.
                </p>

                <p class="about-text animate-on-scroll">
                    Diperkuat oleh tim yang berpengalaman dan passionate, kami tidak sekadar membuat website — kami membangun fondasi digital yang kokoh untuk membantu bisnis Anda bertumbuh secara berkelanjutan di era digital yang terus berkembang.
                </p>

                <div class="about-features animate-on-scroll">
                    <div class="about-feature-item">
                        <div class="feature-icon"><i class="ri-award-line"></i></div>
                        <div class="feature-info">
                            <div class="feature-title">Tim Profesional & Berpengalaman</div>
                            <div class="feature-desc">25+ profesional IT berdedikasi dengan keahlian beragam di bidang teknologi</div>
                        </div>
                    </div>
                    <div class="about-feature-item">
                        <div class="feature-icon yellow"><i class="ri-customer-service-2-line"></i></div>
                        <div class="feature-info">
                            <div class="feature-title">Dukungan 24/7 Non-Stop</div>
                            <div class="feature-desc">Tim support siap membantu Anda kapanpun melalui WhatsApp, email, dan telepon</div>
                        </div>
                    </div>
                    <div class="about-feature-item">
                        <div class="feature-icon"><i class="ri-time-line"></i></div>
                        <div class="feature-info">
                            <div class="feature-title">Pengerjaan Tepat Waktu</div>
                            <div class="feature-desc">Kami berkomitmen menyelesaikan proyek sesuai deadline yang telah disepakati bersama</div>
                        </div>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <a href="#contact" class="btn-primary" id="about-cta-btn">
                        <i class="ri-arrow-right-line"></i>
                        Konsultasi Gratis Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     STATS SECTION
     ========================================== -->
<div class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card animate-on-scroll animate-delay-1">
                <div class="stat-icon"><i class="ri-code-s-slash-line"></i></div>
                <div class="stat-number" data-target="250" data-suffix="+">0+</div>
                <div class="stat-label">Proyek Selesai</div>
            </div>
            <div class="stat-card animate-on-scroll animate-delay-2">
                <div class="stat-icon"><i class="ri-group-line"></i></div>
                <div class="stat-number" data-target="180" data-suffix="+">0+</div>
                <div class="stat-label">Klien Puas</div>
            </div>
            <div class="stat-card animate-on-scroll animate-delay-3">
                <div class="stat-icon"><i class="ri-calendar-check-line"></i></div>
                <div class="stat-number" data-target="<?= date('Y') - intval(SITE_YEAR_FOUNDED) ?>" data-suffix="+">0+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-card animate-on-scroll animate-delay-4">
                <div class="stat-icon"><i class="ri-user-star-line"></i></div>
                <div class="stat-number" data-target="25" data-suffix="+">0+</div>
                <div class="stat-label">Tim Profesional</div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     SERVICES SECTION
     ========================================== -->
<section id="services">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-service-line"></i>
                Layanan Kami
            </div>
            <h2 class="section-title">
                Solusi Digital <span class="highlight">Lengkap</span><br>
                untuk Bisnis Anda
            </h2>
            <p class="section-desc">
                Kami menyediakan berbagai layanan teknologi digital yang komprehensif, dari pembuatan website hingga strategi pemasaran digital yang terukur.
            </p>
        </div>

        <div class="services-grid">
            <?php foreach ($services as $i => $service): ?>
            <div class="service-card <?= $service['color'] === 'yellow' ? 'yellow-accent' : '' ?>">
                <div class="service-icon">
                    <i class="<?= $service['icon'] ?>"></i>
                </div>
                <h3 class="service-title"><?= $service['title'] ?></h3>
                <p class="service-desc"><?= $service['desc'] ?></p>
                <div class="service-features">
                    <?php foreach ($service['features'] as $feat): ?>
                    <span class="service-feature-tag"><?= $feat ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     PORTFOLIO SECTION
     ========================================== -->
<section id="portfolio">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-gallery-2-line"></i>
                Portofolio
            </div>
            <h2 class="section-title">
                Karya Terbaik Kami yang<br>
                <span class="highlight">Telah Sukses</span>
            </h2>
            <p class="section-desc">
                Berikut adalah sebagian dari ratusan proyek yang telah kami kerjakan dengan hasil memuaskan.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="portfolio-filter animate-on-scroll">
            <button class="filter-btn active" data-filter="all" id="filter-all">Semua</button>
            <button class="filter-btn" data-filter="E-Commerce" id="filter-ecommerce">E-Commerce</button>
            <button class="filter-btn" data-filter="Company Profile" id="filter-company">Company Profile</button>
            <button class="filter-btn" data-filter="Web App" id="filter-webapp">Web App</button>
            <button class="filter-btn" data-filter="Mobile App" id="filter-mobile">Mobile App</button>
            <button class="filter-btn" data-filter="Landing Page" id="filter-landing">Landing Page</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" id="portfolio-grid">
            <?php foreach ($portfolios as $i => $project): ?>
            <div class="portfolio-card" data-category="<?= $project['category'] ?>" id="portfolio-card-<?= $i + 1 ?>">
                <div class="portfolio-preview" style="background: linear-gradient(135deg, <?= $project['color'] ?>dd, <?= $project['color'] ?>88);">
                    <div class="portfolio-preview-inner">
                        <i class="ri-window-line portfolio-preview-icon"></i>
                        <div class="portfolio-preview-title"><?= $project['title'] ?></div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <span class="portfolio-category"><?= $project['category'] ?></span>
                    <h3 class="portfolio-title"><?= $project['title'] ?></h3>
                    <p class="portfolio-desc"><?= $project['desc'] ?></p>
                    <div class="portfolio-tech">
                        <?php foreach ($project['tech'] as $tech): ?>
                        <span class="tech-tag"><?= $tech ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     PRICING SECTION
     ========================================== -->
<section id="pricing">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-price-tag-3-line"></i>
                Paket Harga
            </div>
            <h2 class="section-title">
                Harga Transparan,<br>
                <span class="highlight">Kualitas Terjamin</span>
            </h2>
            <p class="section-desc">
                Pilih paket yang sesuai dengan kebutuhan dan anggaran bisnis Anda. Semua paket sudah termasuk konsultasi gratis!
            </p>
        </div>

        <div class="pricing-grid">
            <?php foreach ($packages as $pkg): ?>
            <div class="pricing-card <?= $pkg['popular'] ? 'popular' : '' ?>">
                <?php if ($pkg['popular']): ?>
                <div class="popular-badge">⭐ Paling Populer</div>
                <?php endif; ?>

                <div class="pricing-name"><?= $pkg['name'] ?></div>

                <div class="pricing-price">
                    <span class="price-currency">Rp</span>
                    <span class="price-amount"><?= $pkg['price'] ?></span>
                </div>
                <div class="price-period"><?= $pkg['period'] ?></div>

                <p class="pricing-desc"><?= $pkg['desc'] ?></p>

                <div class="pricing-divider"></div>

                <div class="pricing-features">
                    <?php foreach ($pkg['features'] as $feature): ?>
                    <div class="pricing-feature-item">
                        <i class="ri-checkbox-circle-fill"></i>
                        <?= $feature ?>
                    </div>
                    <?php endforeach; ?>

                    <?php foreach ($pkg['not_included'] as $feature): ?>
                    <div class="pricing-feature-item not-included">
                        <i class="ri-close-circle-line"></i>
                        <?= $feature ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Halo+NexaTech%2C+saya+tertarik+dengan+Paket+<?= urlencode($pkg['name']) ?>"
                   class="btn-primary pricing-btn <?= $pkg['popular'] ? '' : 'btn-outline' ?>"
                   target="_blank"
                   id="pricing-btn-<?= strtolower($pkg['name']) ?>">
                    <i class="ri-whatsapp-line"></i>
                    Pilih Paket <?= $pkg['name'] ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pricing Note -->
        <div class="animate-on-scroll" style="text-align:center; margin-top:40px; color:var(--gray-500); font-size:0.875rem;">
            <p><i class="ri-information-line" style="color:var(--blue-500)"></i>
               Harga di atas adalah harga dasar. Harga akhir dapat bervariasi sesuai dengan kompleksitas dan kebutuhan spesifik proyek Anda. <a href="#contact" style="color:var(--blue-600); font-weight:600;">Hubungi kami</a> untuk penawaran custom.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     TESTIMONIALS SECTION
     ========================================== -->
<section id="testimonials">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-chat-quote-line"></i>
                Testimoni
            </div>
            <h2 class="section-title">
                Apa Kata <span class="highlight">Klien Kami</span>
            </h2>
            <p class="section-desc">
                Kepuasan klien adalah prioritas utama kami. Simak pengalaman nyata dari bisnis yang telah kami bantu.
            </p>
        </div>

        <div class="testimonials-grid">
            <?php foreach ($testimonials as $i => $testi): ?>
            <div class="testimonial-card animate-on-scroll animate-delay-<?= $i + 1 ?>">
                <div class="quote-icon"><i class="ri-double-quotes-l"></i></div>
                <div class="testimonial-stars">
                    <?php for ($s = 0; $s < $testi['rating']; $s++): ?>
                    <i class="ri-star-fill star"></i>
                    <?php endfor; ?>
                </div>
                <p class="testimonial-text">"<?= $testi['text'] ?>"</p>
                <div class="testimonial-author">
                    <div class="author-avatar" style="background: <?= $testi['color'] ?>;">
                        <?= $testi['avatar'] ?>
                    </div>
                    <div class="author-info">
                        <div class="author-name"><?= $testi['name'] ?></div>
                        <div class="author-role"><?= $testi['role'] ?> — <?= $testi['company'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     TEAM SECTION
     ========================================== -->
<section id="team">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-team-line"></i>
                Tim Kami
            </div>
            <h2 class="section-title">
                Dikelola oleh <span class="highlight">Para Ahli</span><br>
                yang Berpengalaman
            </h2>
            <p class="section-desc">
                Tim profesional kami siap memberikan solusi digital terbaik dengan keahlian dan dedikasi penuh.
            </p>
        </div>

        <div class="team-grid">
            <?php foreach ($team as $i => $member): ?>
            <div class="team-card">
                <div class="team-avatar" style="background: linear-gradient(135deg, <?= $member['color'] ?>, <?= $member['color'] ?>cc);">
                    <?= $member['initials'] ?>
                </div>
                <div class="team-name"><?= $member['name'] ?></div>
                <div class="team-role"><?= $member['role'] ?></div>
                <div class="team-desc"><?= $member['desc'] ?></div>
                <div class="team-social">
                    <a href="#" class="team-social-link" aria-label="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                    <a href="#" class="team-social-link" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="team-social-link" aria-label="Email"><i class="ri-mail-line"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     FAQ SECTION
     ========================================== -->
<section id="faq">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-question-line"></i>
                FAQ
            </div>
            <h2 class="section-title">
                Pertanyaan yang<br>
                <span class="highlight">Sering Ditanyakan</span>
            </h2>
            <p class="section-desc">
                Temukan jawaban atas pertanyaan umum tentang layanan dan proses kerja kami.
            </p>
        </div>

        <div class="faq-grid animate-on-scroll">
            <?php foreach ($faqs as $i => $faq): ?>
            <div class="faq-item <?= $i === 0 ? 'open' : '' ?>" id="faq-item-<?= $i + 1 ?>">
                <div class="faq-question">
                    <span><?= $faq['q'] ?></span>
                    <div class="faq-icon"><i class="ri-add-line"></i></div>
                </div>
                <div class="faq-answer"><?= $faq['a'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     CTA BANNER
     ========================================== -->
<div class="cta-banner">
    <div class="container">
        <div class="cta-inner">
            <div class="section-badge" style="background: rgba(245,158,11,0.15); border-color: rgba(245,158,11,0.3); color: var(--yellow-400); margin-bottom: 20px;">
                <i class="ri-rocket-2-line"></i>
                Siap Memulai?
            </div>
            <h2 class="cta-title">
                Wujudkan Visi Digital Anda<br>
                <span>Bersama NexaTech Hari Ini</span>
            </h2>
            <p class="cta-desc">
                Konsultasi gratis tanpa komitmen. Tim kami siap membantu Anda merancang solusi digital yang tepat untuk bisnis Anda.
            </p>
            <div class="cta-buttons">
                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Halo+NexaTech%2C+saya+ingin+konsultasi+gratis" class="btn-white" target="_blank" id="cta-wa-btn">
                    <i class="ri-whatsapp-fill" style="color:#25d366"></i>
                    Chat WhatsApp Sekarang
                </a>
                <a href="#contact" class="btn-outline-white" id="cta-contact-btn">
                    <i class="ri-mail-send-line"></i>
                    Kirim Pesan
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     CONTACT SECTION
     ========================================== -->
<section id="contact">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <div class="section-badge">
                <i class="ri-customer-service-2-line"></i>
                Hubungi Kami
            </div>
            <h2 class="section-title">
                Mari Diskusikan<br>
                <span class="highlight">Proyek Anda</span>
            </h2>
            <p class="section-desc">
                Isi formulir di bawah ini atau hubungi kami langsung. Kami akan merespons dalam 1x24 jam.
            </p>
        </div>

        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info animate-on-scroll">
                <h3 class="contact-info-title">Informasi Kontak</h3>
                <p class="contact-info-desc">
                    Kami senang mendengar dari Anda. Jangan ragu untuk menghubungi kami melalui berbagai channel berikut.
                </p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="ri-map-pin-2-fill"></i></div>
                        <div>
                            <div class="contact-item-label">Alamat Kantor</div>
                            <div class="contact-item-value"><?= SITE_ADDRESS ?></div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon yellow"><i class="ri-whatsapp-fill"></i></div>
                        <div>
                            <div class="contact-item-label">WhatsApp / Telepon</div>
                            <div class="contact-item-value">
                                <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank"><?= SITE_PHONE ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="ri-mail-fill"></i></div>
                        <div>
                            <div class="contact-item-label">Alamat Email</div>
                            <div class="contact-item-value">
                                <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon yellow"><i class="ri-time-fill"></i></div>
                        <div>
                            <div class="contact-item-label">Jam Operasional</div>
                            <div class="contact-item-value">Senin - Sabtu: 08.00 - 17.00 WIB</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper animate-on-scroll">
                <h3 class="contact-form-title">
                    <i class="ri-send-plane-fill"></i>
                    Kirim Pesan kepada Kami
                </h3>

                <?php if ($contact_success): ?>
                <div class="alert alert-success">
                    <i class="ri-checkbox-circle-fill"></i>
                    <?= $contact_message ?>
                </div>
                <?php endif; ?>

                <?php if ($contact_error): ?>
                <div class="alert alert-error">
                    <i class="ri-error-warning-fill"></i>
                    <?= $contact_message ?>
                </div>
                <?php endif; ?>

                <form method="POST" action="#contact" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-name">
                                Nama Lengkap <span class="required">*</span>
                            </label>
                            <input type="text" id="contact-name" name="name" class="form-control"
                                   placeholder="Masukkan nama lengkap Anda" required
                                   value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-email">
                                Alamat Email <span class="required">*</span>
                            </label>
                            <input type="email" id="contact-email" name="email" class="form-control"
                                   placeholder="email@contoh.com" required
                                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="contact-phone">Nomor WhatsApp / HP</label>
                            <input type="tel" id="contact-phone" name="phone" class="form-control"
                                   placeholder="08xx-xxxx-xxxx"
                                   value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="contact-service">
                                Layanan yang Dibutuhkan
                            </label>
                            <select id="contact-service" name="service" class="form-control">
                                <option value="">-- Pilih Layanan --</option>
                                <option value="website" <?= ($_POST['service'] ?? '') === 'website' ? 'selected' : '' ?>>Pembuatan Website</option>
                                <option value="mobile" <?= ($_POST['service'] ?? '') === 'mobile' ? 'selected' : '' ?>>Aplikasi Mobile</option>
                                <option value="ecommerce" <?= ($_POST['service'] ?? '') === 'ecommerce' ? 'selected' : '' ?>>Toko Online / E-Commerce</option>
                                <option value="seo" <?= ($_POST['service'] ?? '') === 'seo' ? 'selected' : '' ?>>SEO & Digital Marketing</option>
                                <option value="hosting" <?= ($_POST['service'] ?? '') === 'hosting' ? 'selected' : '' ?>>Hosting & Domain</option>
                                <option value="maintenance" <?= ($_POST['service'] ?? '') === 'maintenance' ? 'selected' : '' ?>>Maintenance & Support</option>
                                <option value="lainnya" <?= ($_POST['service'] ?? '') === 'lainnya' ? 'selected' : '' ?>>Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-message">
                            Pesan / Deskripsi Proyek <span class="required">*</span>
                        </label>
                        <textarea id="contact-message" name="message" class="form-control"
                                  placeholder="Ceritakan kebutuhan atau proyek Anda secara singkat..." required rows="5"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>

                    <button type="submit" name="contact_submit" class="btn-primary form-submit-btn" id="contact-submit-btn">
                        <i class="ri-send-plane-fill"></i>
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
