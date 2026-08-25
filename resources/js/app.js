/* ── Portfolio Site JavaScript ── */
/* Handles: dark/light mode, mobile nav, scroll effects */

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initMobileNav();
    initScrollEffects();
    initSmoothScroll();
});

/* ════════════════════════════════════════
   Theme (Dark / Light)
   ════════════════════════════════════════ */
function initTheme() {
    const saved = localStorage.getItem('theme');
    if (saved === 'dark' || (!saved && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    }
    updateThemeIcon();

    document.getElementById('theme-toggle')?.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        updateThemeIcon();
    });
}

function updateThemeIcon() {
    const isDark = document.documentElement.classList.contains('dark');
    const sunIcon = document.getElementById('icon-sun');
    const moonIcon = document.getElementById('icon-moon');
    if (sunIcon) sunIcon.classList.toggle('hidden', isDark);
    if (moonIcon) moonIcon.classList.toggle('hidden', !isDark);
}

/* ════════════════════════════════════════
   Mobile Navigation
   ════════════════════════════════════════ */
function initMobileNav() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const hamburger = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden');
        hamburger?.classList.toggle('hidden', !isOpen);
        closeIcon?.classList.toggle('hidden', isOpen);
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            hamburger?.classList.remove('hidden');
            closeIcon?.classList.add('hidden');
        });
    });
}

/* ════════════════════════════════════════
   Scroll Effects (Navbar background, active link)
   ════════════════════════════════════════ */
function initScrollEffects() {
    const navbar = document.getElementById('navbar');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link-item');

    window.addEventListener('scroll', () => {
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        }

        let current = '';
        sections.forEach(section => {
            const top = section.offsetTop - 100;
            if (window.scrollY >= top) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-accent-500', 'font-semibold');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('text-accent-500', 'font-semibold');
            }
        });
    });
}

/* ════════════════════════════════════════
   Smooth Scroll for anchor links
   ════════════════════════════════════════ */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}
