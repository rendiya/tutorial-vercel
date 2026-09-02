<?php
/**
 * Footer Template
 * NexaTech Solutions - Company Profile
 */
?>

<!-- Footer -->
<footer class="footer" id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand -->
                <div class="footer-col footer-brand">
                    <a href="#home" class="footer-logo">
                        <div class="logo-icon">
                            <i class="ri-code-box-fill"></i>
                        </div>
                        <span class="logo-text">Nexa<span>Tech</span></span>
                    </a>
                    <p class="footer-desc">
                        Kami adalah perusahaan teknologi terpercaya yang berdedikasi menghadirkan solusi digital terbaik untuk membantu bisnis Anda tumbuh di era digital.
                    </p>
                    <div class="footer-social">
                        <a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank" class="social-link" id="footer-instagram" aria-label="Instagram">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="<?= SOCIAL_FACEBOOK ?>" target="_blank" class="social-link" id="footer-facebook" aria-label="Facebook">
                            <i class="ri-facebook-circle-line"></i>
                        </a>
                        <a href="<?= SOCIAL_LINKEDIN ?>" target="_blank" class="social-link" id="footer-linkedin" aria-label="LinkedIn">
                            <i class="ri-linkedin-box-line"></i>
                        </a>
                        <a href="<?= SOCIAL_TWITTER ?>" target="_blank" class="social-link" id="footer-twitter" aria-label="Twitter/X">
                            <i class="ri-twitter-x-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan -->
                <div class="footer-col">
                    <h4 class="footer-title">Layanan Kami</h4>
                    <ul class="footer-links">
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>Pembuatan Website</a></li>
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>Aplikasi Mobile</a></li>
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>Toko Online / E-Commerce</a></li>
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>SEO & Digital Marketing</a></li>
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>Hosting & Domain</a></li>
                        <li><a href="#services"><i class="ri-arrow-right-s-line"></i>Maintenance & Support</a></li>
                    </ul>
                </div>

                <!-- Link Cepat -->
                <div class="footer-col">
                    <h4 class="footer-title">Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="ri-arrow-right-s-line"></i>Beranda</a></li>
                        <li><a href="#about"><i class="ri-arrow-right-s-line"></i>Tentang Kami</a></li>
                        <li><a href="#portfolio"><i class="ri-arrow-right-s-line"></i>Portofolio</a></li>
                        <li><a href="#pricing"><i class="ri-arrow-right-s-line"></i>Paket Harga</a></li>
                        <li><a href="#testimonials"><i class="ri-arrow-right-s-line"></i>Testimoni</a></li>
                        <li><a href="#contact"><i class="ri-arrow-right-s-line"></i>Kontak Kami</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="footer-col">
                    <h4 class="footer-title">Hubungi Kami</h4>
                    <ul class="footer-contact-list">
                        <li>
                            <div class="contact-icon"><i class="ri-map-pin-2-fill"></i></div>
                            <div>
                                <span><?= SITE_ADDRESS ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="ri-phone-fill"></i></div>
                            <div>
                                <a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="ri-mail-fill"></i></div>
                            <div>
                                <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="ri-time-fill"></i></div>
                            <div>
                                <span>Senin - Sabtu: 08.00 - 17.00 WIB</span>
                            </div>
                        </li>
                    </ul>

                    <div class="footer-wa-btn">
                        <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Halo+NexaTech%2C+saya+ingin+bertanya" target="_blank" class="btn-wa-footer" id="footer-wa-btn">
                            <i class="ri-whatsapp-fill"></i>
                            WhatsApp Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p>&copy; <?= date('Y') ?> <strong><?= SITE_NAME ?></strong>. Hak Cipta Dilindungi Undang-Undang.</p>
                <p class="footer-made">Dibuat dengan <i class="ri-heart-fill" style="color:#f59e0b"></i> di Indonesia</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll To Top -->
<button class="scroll-top" id="scroll-top" aria-label="Scroll to top">
    <i class="ri-arrow-up-line"></i>
</button>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Halo+NexaTech%2C+saya+ingin+konsultasi" 
   class="float-wa" id="float-wa-btn" target="_blank" aria-label="WhatsApp">
    <i class="ri-whatsapp-fill"></i>
    <span class="float-wa-tooltip">Chat WhatsApp</span>
</a>

<!-- JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
