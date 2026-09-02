/**
 * NexaTech Solutions - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {

    // ========================
    // PRELOADER
    // ========================
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', () => {
        setTimeout(() => {
            preloader?.classList.add('hidden');
        }, 1600);
    });

    // ========================
    // NAVBAR SCROLL EFFECT
    // ========================
    const navbar = document.getElementById('navbar');
    const handleNavScroll = () => {
        if (window.scrollY > 60) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();

    // ========================
    // ACTIVE NAV LINK (SCROLL SPY)
    // ========================
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    const scrollSpy = () => {
        const scrollPos = window.scrollY + 120;
        sections.forEach(section => {
            const top = section.offsetTop;
            const bottom = top + section.offsetHeight;
            const id = section.getAttribute('id');
            if (scrollPos >= top && scrollPos < bottom) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    };
    window.addEventListener('scroll', scrollSpy, { passive: true });

    // ========================
    // MOBILE MENU
    // ========================
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'mobile-overlay';
    document.body.appendChild(overlay);

    const toggleMenu = () => {
        const isOpen = mobileMenu?.classList.toggle('open');
        navToggle?.classList.toggle('active');
        overlay.classList.toggle('show', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    };
    const closeMenu = () => {
        mobileMenu?.classList.remove('open');
        navToggle?.classList.remove('active');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    };

    navToggle?.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', closeMenu);

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // ========================
    // SMOOTH SCROLL
    // ========================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ========================
    // SCROLL TO TOP BUTTON
    // ========================
    const scrollTopBtn = document.getElementById('scroll-top');
    window.addEventListener('scroll', () => {
        scrollTopBtn?.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    scrollTopBtn?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ========================
    // ANIMATE ON SCROLL
    // ========================
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });

        animateElements.forEach(el => observer.observe(el));
    } else {
        animateElements.forEach(el => el.classList.add('animated'));
    }

    // ========================
    // COUNTER ANIMATION
    // ========================
    const counters = document.querySelectorAll('.stat-number[data-target]');
    const animateCounter = (el) => {
        const target = parseInt(el.getAttribute('data-target'));
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            el.textContent = Math.floor(current) + suffix;
        }, 16);
    };

    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(el => counterObserver.observe(el));
    }

    // ========================
    // PORTFOLIO FILTER
    // ========================
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');
            portfolioCards.forEach(card => {
                const category = card.getAttribute('data-category');
                const show = filter === 'all' || category === filter;

                card.style.transition = 'all 0.4s ease';
                if (show) {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                    card.style.display = '';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        if (!show) card.style.display = 'none';
                    }, 400);
                }
            });
        });
    });

    // ========================
    // FAQ ACCORDION
    // ========================
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question?.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            // Close all
            faqItems.forEach(i => i.classList.remove('open'));
            // Open this one if it wasn't open
            if (!isOpen) item.classList.add('open');
        });
    });

    // ========================
    // CLIENTS MARQUEE - DUPLICATE FOR SEAMLESS LOOP
    // ========================
    const track = document.querySelector('.clients-track');
    if (track) {
        const content = track.innerHTML;
        track.innerHTML += content;
    }

    // ========================
    // TYPED TEXT EFFECT (Hero subtitle cycle)
    // ========================
    const typedEl = document.getElementById('typed-text');
    if (typedEl) {
        const texts = ['Website Profesional', 'Aplikasi Mobile', 'Toko Online', 'Solusi Digital'];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        const typeEffect = () => {
            const currentText = texts[textIndex];
            if (!isDeleting) {
                typedEl.textContent = currentText.slice(0, charIndex + 1);
                charIndex++;
                if (charIndex === currentText.length) {
                    isDeleting = true;
                    setTimeout(typeEffect, 2000);
                    return;
                }
            } else {
                typedEl.textContent = currentText.slice(0, charIndex - 1);
                charIndex--;
                if (charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                }
            }
            setTimeout(typeEffect, isDeleting ? 60 : 100);
        };
        setTimeout(typeEffect, 1000);
    }

    // ========================
    // FORM VALIDATION FEEDBACK
    // ========================
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const inputs = contactForm.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', () => {
                if (input.hasAttribute('required') && !input.value.trim()) {
                    input.style.borderColor = '#ef4444';
                } else if (input.type === 'email' && input.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
                    input.style.borderColor = '#ef4444';
                } else {
                    input.style.borderColor = 'var(--blue-400)';
                }
            });
            input.addEventListener('input', () => {
                input.style.borderColor = '';
            });
        });
    }

    // ========================
    // SCROLL REVEAL - Stagger children
    // ========================
    const staggerParents = document.querySelectorAll('.services-grid, .portfolio-grid, .pricing-grid, .team-grid, .testimonials-grid');
    staggerParents.forEach(parent => {
        const children = parent.children;
        Array.from(children).forEach((child, i) => {
            child.classList.add('animate-on-scroll');
            child.style.transitionDelay = `${i * 0.08}s`;
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animated');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.08 });
                observer.observe(child);
            } else {
                child.classList.add('animated');
            }
        });
    });

    console.log('%c NexaTech Solutions 🚀', 'color: #2563eb; font-size: 1.2rem; font-weight: bold;');
    console.log('%c Website by NexaTech - info@nexatech.id', 'color: #f59e0b;');
});
