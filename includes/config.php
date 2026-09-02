<?php
// ===================================
// KONFIGURASI WEBSITE COMPANY PROFILE
// ===================================

define('SITE_NAME', 'NexaTech Solutions');
define('SITE_TAGLINE', 'Solusi Digital Terdepan untuk Bisnis Anda');
define('SITE_URL', 'http://localhost');
define('SITE_EMAIL', 'info@nexatech.id');
define('SITE_PHONE', '+62 812-3456-7890');
define('SITE_WHATSAPP', '6281234567890');
define('SITE_ADDRESS', 'Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 10220');
define('SITE_YEAR_FOUNDED', '2018');

// Sosial Media
define('SOCIAL_INSTAGRAM', 'https://instagram.com/nexatech.id');
define('SOCIAL_FACEBOOK', 'https://facebook.com/nexatech.id');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/nexatech');
define('SOCIAL_TWITTER', 'https://twitter.com/nexatech_id');

// Data Statistik
$stats = [
    ['number' => '250+', 'label' => 'Proyek Selesai'],
    ['number' => '180+', 'label' => 'Klien Puas'],
    ['number' => '8+', 'label' => 'Tahun Pengalaman'],
    ['number' => '25+', 'label' => 'Tim Profesional'],
];

// Data Layanan
$services = [
    [
        'icon' => 'ri-global-line',
        'title' => 'Pembuatan Website',
        'desc' => 'Kami merancang & mengembangkan website profesional, responsif, dan SEO-friendly yang memperkuat brand Anda di dunia digital.',
        'features' => ['Landing Page', 'Company Profile', 'E-Commerce', 'Web Portal'],
        'color' => 'blue',
    ],
    [
        'icon' => 'ri-smartphone-line',
        'title' => 'Aplikasi Mobile',
        'desc' => 'Pengembangan aplikasi Android & iOS native maupun cross-platform yang intuitif dan berperforma tinggi.',
        'features' => ['Android & iOS', 'React Native', 'Flutter', 'UI/UX Design'],
        'color' => 'yellow',
    ],
    [
        'icon' => 'ri-store-2-line',
        'title' => 'Toko Online / E-Commerce',
        'desc' => 'Bangun toko online Anda dengan sistem manajemen produk, pembayaran, dan laporan penjualan yang lengkap.',
        'features' => ['Manajemen Produk', 'Payment Gateway', 'Laporan Penjualan', 'Multi Kurir'],
        'color' => 'blue',
    ],
    [
        'icon' => 'ri-search-eye-line',
        'title' => 'SEO & Digital Marketing',
        'desc' => 'Tingkatkan visibilitas online Anda dengan strategi SEO dan pemasaran digital yang terukur dan efektif.',
        'features' => ['On-Page SEO', 'Off-Page SEO', 'Google Ads', 'Social Media'],
        'color' => 'yellow',
    ],
    [
        'icon' => 'ri-server-line',
        'title' => 'Hosting & Domain',
        'desc' => 'Layanan hosting cepat, aman, dan terpercaya dengan uptime 99.9%. Domain Indonesia & Internasional tersedia.',
        'features' => ['Shared Hosting', 'VPS Server', 'SSL Certificate', 'Domain .id & .com'],
        'color' => 'blue',
    ],
    [
        'icon' => 'ri-shield-check-line',
        'title' => 'Maintenance & Support',
        'desc' => 'Layanan pemeliharaan website dan dukungan teknis 24/7 untuk memastikan website Anda selalu berjalan optimal.',
        'features' => ['Update Berkala', 'Backup Data', 'Security Check', 'Support 24/7'],
        'color' => 'yellow',
    ],
];

// Paket Harga
$packages = [
    [
        'name' => 'Starter',
        'price' => '2.500.000',
        'period' => 'sekali bayar',
        'desc' => 'Cocok untuk bisnis kecil yang baru mulai go-online',
        'popular' => false,
        'features' => [
            'Landing Page (1 Halaman)',
            'Desain Premium',
            'Mobile Responsive',
            'Domain .com (1 Tahun)',
            'Hosting (1 Tahun)',
            'SSL Certificate',
            'Formulir Kontak',
            'Revisi 3x',
        ],
        'not_included' => ['Blog/Artikel', 'CMS Admin Panel', 'E-Commerce'],
    ],
    [
        'name' => 'Business',
        'price' => '6.500.000',
        'period' => 'sekali bayar',
        'desc' => 'Solusi terbaik untuk company profile & bisnis berkembang',
        'popular' => true,
        'features' => [
            'Website Multi-Halaman (5-10)',
            'Desain Custom Premium',
            'Mobile Responsive',
            'Domain .com (1 Tahun)',
            'Hosting SSD (1 Tahun)',
            'SSL Certificate',
            'CMS Admin Panel',
            'Blog/Artikel',
            'Formulir Kontak & WhatsApp',
            'Integrasi Maps',
            'SEO Basic',
            'Revisi Unlimited',
        ],
        'not_included' => ['E-Commerce', 'Payment Gateway'],
    ],
    [
        'name' => 'Enterprise',
        'price' => '15.000.000',
        'period' => 'sekali bayar',
        'desc' => 'Solusi lengkap untuk bisnis besar dan e-commerce',
        'popular' => false,
        'features' => [
            'Website E-Commerce Lengkap',
            'Desain Custom Eksklusif',
            'Mobile Responsive & PWA',
            'Domain Premium (1 Tahun)',
            'VPS Hosting (1 Tahun)',
            'SSL Certificate',
            'CMS & Dashboard Admin',
            'Payment Gateway (3 Metode)',
            'Manajemen Produk & Stok',
            'Laporan & Analitik',
            'SEO On-Page Lengkap',
            'Aplikasi Mobile (Opsional)',
            'Support 6 Bulan',
            'Revisi Unlimited',
        ],
        'not_included' => [],
    ],
];

// Portofolio / Proyek
$portfolios = [
    [
        'title' => 'TokoModa Online',
        'category' => 'E-Commerce',
        'desc' => 'Platform e-commerce fashion dengan 5.000+ produk dan sistem payment gateway terintegrasi.',
        'tech' => ['PHP', 'MySQL', 'Bootstrap', 'Midtrans'],
        'color' => '#1a56db',
    ],
    [
        'title' => 'Klinik Sehat Digital',
        'category' => 'Company Profile',
        'desc' => 'Website company profile klinik kesehatan dengan sistem booking appointment online.',
        'tech' => ['PHP', 'Laravel', 'Vue.js', 'TailwindCSS'],
        'color' => '#f59e0b',
    ],
    [
        'title' => 'FinTrack Dashboard',
        'category' => 'Web App',
        'desc' => 'Dashboard keuangan & akuntansi untuk UMKM dengan laporan real-time dan ekspor PDF.',
        'tech' => ['PHP', 'MySQL', 'Chart.js', 'Bootstrap'],
        'color' => '#1a56db',
    ],
    [
        'title' => 'EduLearn Platform',
        'category' => 'Web App',
        'desc' => 'Platform belajar online dengan fitur video streaming, kuis, dan sertifikat digital.',
        'tech' => ['PHP', 'Laravel', 'React', 'AWS'],
        'color' => '#f59e0b',
    ],
    [
        'title' => 'RestoPOS System',
        'category' => 'Mobile App',
        'desc' => 'Aplikasi kasir & POS restoran berbasis Android dengan manajemen meja dan laporan harian.',
        'tech' => ['Flutter', 'Dart', 'Firebase', 'MySQL'],
        'color' => '#1a56db',
    ],
    [
        'title' => 'PropertyPro Landing',
        'category' => 'Landing Page',
        'desc' => 'Landing page properti premium dengan virtual tour 3D dan formulir leads terintegrasi CRM.',
        'tech' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'color' => '#f59e0b',
    ],
];

// Testimoni
$testimonials = [
    [
        'name' => 'Budi Santoso',
        'company' => 'TokoModa Online',
        'role' => 'CEO & Founder',
        'text' => 'NexaTech benar-benar mengubah bisnis saya. Website e-commerce yang mereka buat sangat profesional, cepat, dan penjualan online kami meningkat 300% dalam 6 bulan pertama!',
        'rating' => 5,
        'avatar' => 'BS',
        'color' => '#1a56db',
    ],
    [
        'name' => 'dr. Sari Melinda',
        'company' => 'Klinik Sehat Digital',
        'role' => 'Direktur Klinik',
        'text' => 'Tim NexaTech sangat profesional dan responsif. Mereka memahami kebutuhan kami dan menghadirkan website yang melebihi ekspektasi. Booking pasien online kami sekarang sangat mudah!',
        'rating' => 5,
        'avatar' => 'SM',
        'color' => '#f59e0b',
    ],
    [
        'name' => 'Ahmad Rizky',
        'company' => 'Rizky Property Group',
        'role' => 'Marketing Manager',
        'text' => 'Landing page yang dibuat NexaTech sangat eye-catching dan konversi leads kami meningkat drastis. Harga sangat terjangkau untuk kualitas yang luar biasa ini.',
        'rating' => 5,
        'avatar' => 'AR',
        'color' => '#1a56db',
    ],
    [
        'name' => 'Dewi Rahayu',
        'company' => 'EduLearn Indonesia',
        'role' => 'Product Manager',
        'text' => 'Platform edukasi kami dibangun dengan sangat baik. Fitur lengkap, performa cepat, dan dukungan purna jual NexaTech selalu siap membantu. Highly recommended!',
        'rating' => 5,
        'avatar' => 'DR',
        'color' => '#f59e0b',
    ],
];

// Tim
$team = [
    [
        'name' => 'Rendra Pratama',
        'role' => 'CEO & Co-Founder',
        'desc' => 'Berpengalaman 10+ tahun di industri IT dan pengembangan bisnis digital.',
        'initials' => 'RP',
        'color' => '#1a56db',
    ],
    [
        'name' => 'Anisa Putri',
        'role' => 'Lead UI/UX Designer',
        'desc' => 'Spesialis desain antarmuka dengan portofolio 100+ project berbagai industri.',
        'initials' => 'AP',
        'color' => '#f59e0b',
    ],
    [
        'name' => 'Fajar Nugroho',
        'role' => 'Full-Stack Developer',
        'desc' => 'Expert PHP, Laravel, React, dan berbagai teknologi web modern terkini.',
        'initials' => 'FN',
        'color' => '#1a56db',
    ],
    [
        'name' => 'Maya Sari',
        'role' => 'Digital Marketing Expert',
        'desc' => 'Spesialis SEO, Google Ads, dan strategi pemasaran digital terukur.',
        'initials' => 'MS',
        'color' => '#f59e0b',
    ],
];

// FAQ
$faqs = [
    [
        'q' => 'Berapa lama proses pembuatan website?',
        'a' => 'Waktu pengerjaan tergantung kompleksitas proyek. Landing page biasanya 3-5 hari kerja, company profile 7-14 hari, dan e-commerce 14-30 hari. Kami selalu berkomitmen untuk tepat waktu.',
    ],
    [
        'q' => 'Apakah saya bisa meminta revisi desain?',
        'a' => 'Tentu! Paket Starter mendapatkan 3x revisi, Paket Business dan Enterprise mendapatkan revisi unlimited hingga Anda benar-benar puas dengan hasilnya.',
    ],
    [
        'q' => 'Apakah website yang dibuat mobile-friendly?',
        'a' => 'Semua website yang kami kerjakan sudah pasti responsive dan mobile-friendly. Kami menggunakan pendekatan mobile-first untuk memastikan tampilan optimal di semua perangkat.',
    ],
    [
        'q' => 'Bagaimana sistem pembayaran proyek?',
        'a' => 'Pembayaran dilakukan 2 tahap: 50% di awal sebagai tanda jadi, dan 50% sisanya setelah website selesai dan disetujui. Kami menerima transfer bank, e-wallet, dan kartu kredit.',
    ],
    [
        'q' => 'Apakah ada garansi setelah website selesai?',
        'a' => 'Ya! Kami memberikan garansi bug fixing selama 3 bulan gratis untuk semua paket. Paket Enterprise mendapatkan support teknis penuh selama 6 bulan.',
    ],
    [
        'q' => 'Apakah saya bisa mengelola website sendiri?',
        'a' => 'Semua website kami dilengkapi dengan CMS (Content Management System) yang mudah digunakan. Kami juga menyediakan pelatihan penggunaan CMS dan panduan lengkap.',
    ],
];
