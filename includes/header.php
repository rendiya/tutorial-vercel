<?php
/**
 * Header Template
 * NexaTech Solutions - Company Profile
 */

// Handle form contact submission
$contact_success = false;
$contact_error = false;
$contact_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Simulasi pengiriman email (implementasi nyata: gunakan PHPMailer)
        $contact_success = true;
        $contact_message = "Terima kasih, $name! Pesan Anda telah kami terima. Tim kami akan menghubungi Anda dalam 1x24 jam.";
    } else {
        $contact_error = true;
        $contact_message = "Mohon lengkapi semua field yang wajib diisi dengan benar.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= SITE_NAME ?> - <?= SITE_TAGLINE ?>. Jasa pembuatan website profesional, aplikasi mobile, e-commerce, SEO, dan hosting terpercaya di Indonesia.">
    <meta name="keywords" content="jasa pembuatan website, web developer Indonesia, company profile website, e-commerce, aplikasi mobile, SEO, hosting">
    <meta name="author" content="<?= SITE_NAME ?>">
    <meta property="og:title" content="<?= SITE_NAME ?> - <?= SITE_TAGLINE ?>">
    <meta property="og:description" content="Jasa pembuatan website profesional, aplikasi mobile, dan solusi digital terpercaya di Indonesia.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <title><?= SITE_NAME ?> - <?= SITE_TAGLINE ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-logo">
            <span class="logo-text-pre">Nexa<span>Tech</span></span>
        </div>
        <div class="preloader-bar">
            <div class="preloader-fill"></div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav id="navbar" class="navbar">
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo -->
            <a href="#home" class="nav-logo" id="nav-logo-link">
                <div class="logo-icon">
                    <i class="ri-code-box-fill"></i>
                </div>
                <span class="logo-text">Nexa<span>Tech</span></span>
            </a>

            <!-- Desktop Menu -->
            <ul class="nav-links" id="nav-links">
                <li><a href="#home" class="nav-link active">Beranda</a></li>
                <li><a href="#about" class="nav-link">Tentang Kami</a></li>
                <li><a href="#services" class="nav-link">Layanan</a></li>
                <li><a href="#portfolio" class="nav-link">Portofolio</a></li>
                <li><a href="#pricing" class="nav-link">Harga</a></li>
                <li><a href="#contact" class="nav-link">Kontak</a></li>
            </ul>

            <!-- CTA Button -->
            <div class="nav-cta">
                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Halo+NexaTech%2C+saya+ingin+konsultasi+gratis" class="btn-primary btn-sm" target="_blank" id="nav-whatsapp-btn">
                    <i class="ri-whatsapp-line"></i>
                    Konsultasi Gratis
                </a>
                <button class="nav-toggle" id="nav-toggle" aria-label="Toggle Navigation">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu" id="mobile-menu">
    <div class="mobile-menu-inner">
        <ul class="mobile-nav-links">
            <li><a href="#home" class="mobile-nav-link">Beranda</a></li>
            <li><a href="#about" class="mobile-nav-link">Tentang Kami</a></li>
            <li><a href="#services" class="mobile-nav-link">Layanan</a></li>
            <li><a href="#portfolio" class="mobile-nav-link">Portofolio</a></li>
            <li><a href="#pricing" class="mobile-nav-link">Harga</a></li>
            <li><a href="#contact" class="mobile-nav-link">Kontak</a></li>
        </ul>
        <div class="mobile-menu-footer">
            <a href="tel:<?= SITE_PHONE ?>" class="mobile-contact-link"><i class="ri-phone-line"></i> <?= SITE_PHONE ?></a>
            <a href="mailto:<?= SITE_EMAIL ?>" class="mobile-contact-link"><i class="ri-mail-line"></i> <?= SITE_EMAIL ?></a>
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>" class="btn-primary btn-block" target="_blank">
                <i class="ri-whatsapp-line"></i> Chat WhatsApp
            </a>
        </div>
    </div>
</div>
