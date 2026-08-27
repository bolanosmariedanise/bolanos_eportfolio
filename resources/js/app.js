/* ── Portfolio Site JavaScript ── */
/* Handles: dark/light mode, mobile nav, scroll effects, project modal */

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initMobileNav();
    initScrollEffects();
    initSmoothScroll();
    initProjectModal();
    initCertModal();
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

/* ════════════════════════════════════════
   Project Modal / Lightbox
   ════════════════════════════════════════ */

const modalState = {
    isOpen: false,
    projectIndex: -1,
    imageIndex: 0,
    isTransitioning: false,
    touchStartX: 0,
    touchStartY: 0,
    previousFocus: null,
    focusableEls: [],
};

function initProjectModal() {
    const modal = document.getElementById('project-modal');
    if (!modal) return;

    document.addEventListener('keydown', handleModalKeydown);

    modal.addEventListener('touchstart', (e) => {
        modalState.touchStartX = e.changedTouches[0].screenX;
        modalState.touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    modal.addEventListener('touchend', (e) => {
        const dx = e.changedTouches[0].screenX - modalState.touchStartX;
        const dy = e.changedTouches[0].screenY - modalState.touchStartY;
        if (Math.abs(dx) > 60 && Math.abs(dx) > Math.abs(dy) * 1.5) {
            if (dx > 0) prevGalleryImage();
            else nextGalleryImage();
        }
    }, { passive: true });
}

function openProjectModal(index) {
    const projects = window.__projectsData;
    if (!projects || !projects[index]) return;

    const project = projects[index];
    const modal = document.getElementById('project-modal');
    if (!modal) return;

    modalState.previousFocus = document.activeElement;
    modalState.projectIndex = index;
    modalState.imageIndex = 0;
    modalState.isOpen = true;

    const images = project.images || (project.image ? [project.image] : []);

    document.getElementById('modal-gallery-image').src = images[0] || '';
    document.getElementById('modal-gallery-image').alt = project.title;
    document.getElementById('modal-title').textContent = project.title;
    document.getElementById('modal-description').textContent = project.description;

    const tagsEl = document.getElementById('modal-tags');
    tagsEl.innerHTML = project.tags.map(t => `<span class="project-modal-tag">${t}</span>`).join('');

    const linksEl = document.getElementById('modal-links');
    let linksHtml = '';
    if (project.demo) {
        linksHtml += `<a href="${project.demo}" target="_blank" rel="noopener" class="project-modal-link">
            Live Demo <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>`;
    }
    if (project.repo) {
        linksHtml += `<a href="${project.repo}" target="_blank" rel="noopener" class="project-modal-link project-modal-link--secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            Code
        </a>`;
    }
    linksEl.innerHTML = linksHtml;
    linksEl.style.display = linksHtml ? 'flex' : 'none';

    updateGalleryControls(images);

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');

    requestAnimationFrame(() => {
        modal.querySelector('.project-modal-close').focus();
    });
}

function closeProjectModal() {
    const modal = document.getElementById('project-modal');
    if (!modal) return;

    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
    modalState.isOpen = false;
    modalState.projectIndex = -1;
    modalState.imageIndex = 0;
    modalState.isTransitioning = false;

    if (modalState.previousFocus && typeof modalState.previousFocus.focus === 'function') {
        modalState.previousFocus.focus();
    }
    modalState.previousFocus = null;
}

function updateGalleryControls(images) {
    const prevBtn = document.getElementById('modal-prev-btn');
    const nextBtn = document.getElementById('modal-next-btn');
    const counter = document.getElementById('modal-counter');
    const dots = document.getElementById('modal-dots');
    const img = document.getElementById('modal-gallery-image');

    const hasMultiple = images.length > 1;

    if (prevBtn) prevBtn.style.display = hasMultiple ? 'flex' : 'none';
    if (nextBtn) nextBtn.style.display = hasMultiple ? 'flex' : 'none';

    if (hasMultiple) {
        counter.textContent = `${modalState.imageIndex + 1} / ${images.length}`;

        dots.innerHTML = images.map((_, i) =>
            `<button class="project-modal-dot${i === modalState.imageIndex ? ' is-active' : ''}"
                     onclick="goToGalleryImage(${i})"
                     aria-label="Go to image ${i + 1}"></button>`
        ).join('');
    } else {
        counter.textContent = '';
        dots.innerHTML = '';
    }

    img.src = images[modalState.imageIndex] || '';
}

function setGalleryImage(images, newIndex) {
    if (newIndex < 0 || newIndex >= images.length) return;
    if (modalState.isTransitioning) return;
    modalState.isTransitioning = true;

    const img = document.getElementById('modal-gallery-image');
    img.classList.add('is-switching');

    setTimeout(() => {
        modalState.imageIndex = newIndex;
        img.src = images[newIndex];
        img.classList.remove('is-switching');
        updateGalleryControls(images);
        modalState.isTransitioning = false;
    }, 200);
}

function prevGalleryImage() {
    const images = getModalImages();
    if (images.length === 0) return;
    const newIndex = modalState.imageIndex === 0 ? images.length - 1 : modalState.imageIndex - 1;
    setGalleryImage(images, newIndex);
}

function nextGalleryImage() {
    const images = getModalImages();
    if (images.length === 0) return;
    const newIndex = modalState.imageIndex === images.length - 1 ? 0 : modalState.imageIndex + 1;
    setGalleryImage(images, newIndex);
}

function goToGalleryImage(index) {
    const images = getModalImages();
    setGalleryImage(images, index);
}

function getModalImages() {
    const projects = window.__projectsData;
    if (!projects || !projects[modalState.projectIndex]) return [];
    const p = projects[modalState.projectIndex];
    return p.images || (p.image ? [p.image] : []);
}

function handleModalKeydown(e) {
    if (modalState.isOpen) {
        if (e.key === 'Escape') {
            e.preventDefault();
            closeProjectModal();
            return;
        }

        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            prevGalleryImage();
            return;
        }

        if (e.key === 'ArrowRight') {
            e.preventDefault();
            nextGalleryImage();
            return;
        }

        if (e.key === 'Tab') {
            trapFocus(e, document.getElementById('project-modal'));
        }
    }

    if (certModalState.isOpen) {
        if (e.key === 'Escape') {
            e.preventDefault();
            closeCertModal();
            return;
        }

        if (e.key === 'Tab') {
            trapFocus(e, document.getElementById('cert-modal'));
        }
    }
}

function trapFocus(e, container) {
    if (!container) return;

    const focusable = container.querySelectorAll(
        'button:not([disabled]), a[href], [tabindex]:not([tabindex="-1"]), iframe'
    );
    if (focusable.length === 0) return;

    const first = focusable[0];
    const last = focusable[focusable.length - 1];

    if (e.shiftKey) {
        if (document.activeElement === first) {
            e.preventDefault();
            last.focus();
        }
    } else {
        if (document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    }
}

/* ════════════════════════════════════════
   Certificate Viewer Modal
   ════════════════════════════════════════ */

const certModalState = {
    isOpen: false,
    previousFocus: null,
};

const certZoomState = {
    scale: 1,
    tx: 0,
    ty: 0,
    minScale: 1,
    maxScale: 5,
    dragging: false,
    lastX: 0,
    lastY: 0,
};

function clamp(value, min, max) {
    return Math.min(max, Math.max(min, value));
}

function getCertZoomWrap() {
    return document.getElementById('cert-zoom-wrap');
}

function applyCertZoom() {
    const wrap = getCertZoomWrap();
    if (!wrap) return;
    const { scale, tx, ty } = certZoomState;
    wrap.style.transform = `translate(${tx}px, ${ty}px) scale(${scale})`;
    wrap.classList.toggle('is-zoomed', scale > 1);

    const inBtn = document.getElementById('cert-zoom-in');
    const outBtn = document.getElementById('cert-zoom-out');
    const resetBtn = document.getElementById('cert-zoom-reset');
    if (inBtn) inBtn.disabled = scale >= certZoomState.maxScale;
    if (outBtn) outBtn.disabled = scale <= certZoomState.minScale;
    if (resetBtn) resetBtn.classList.toggle('hidden', scale <= 1);
}

function clampCertPan() {
    const wrap = getCertZoomWrap();
    const body = document.getElementById('cert-modal-body');
    if (!wrap || !body) return;
    const s = certZoomState.scale;
    const bw = body.clientWidth;
    const bh = body.clientHeight;
    const maxX = Math.max(0, (bw * s - bw) / 2);
    const maxY = Math.max(0, (bh * s - bh) / 2);
    certZoomState.tx = clamp(certZoomState.tx, -maxX, maxX);
    certZoomState.ty = clamp(certZoomState.ty, -maxY, maxY);
}

function certZoomBy(factor, centerX, centerY) {
    const state = certZoomState;
    const newScale = clamp(state.scale * factor, state.minScale, state.maxScale);
    if (newScale === state.scale) return;

    if (centerX !== undefined && centerY !== undefined) {
        const wrap = getCertZoomWrap();
        const rect = wrap ? wrap.getBoundingClientRect() : null;
        if (rect) {
            const cx = rect.width / 2;
            const cy = rect.height / 2;
            const mx = centerX - rect.left - cx;
            const my = centerY - rect.top - cy;
            const k = newScale / state.scale;
            state.tx = state.tx * k + mx * (1 - k);
            state.ty = state.ty * k + my * (1 - k);
        }
    }

    state.scale = newScale;
    clampCertPan();
    applyCertZoom();
}

function certZoomIn() {
    certZoomBy(1.25);
}

function certZoomOut() {
    certZoomBy(0.8);
}

function resetCertZoom() {
    certZoomState.scale = 1;
    certZoomState.tx = 0;
    certZoomState.ty = 0;
    applyCertZoom();
}

function pinchDistance(t1, t2) {
    const dx = t1.clientX - t2.clientX;
    const dy = t1.clientY - t2.clientY;
    return Math.hypot(dx, dy);
}

function initCertModal() {
    const wrap = getCertZoomWrap();
    if (!wrap) return;

    /* Scroll-wheel zoom (desktop) */
    wrap.addEventListener('wheel', (e) => {
        e.preventDefault();
        certZoomBy(e.deltaY < 0 ? 1.15 : 1 / 1.15, e.clientX, e.clientY);
    }, { passive: false });

    /* Mouse drag to pan */
    wrap.addEventListener('mousedown', (e) => {
        if (e.button !== 0 || certZoomState.scale <= 1) return;
        certZoomState.dragging = true;
        certZoomState.lastX = e.clientX;
        certZoomState.lastY = e.clientY;
        wrap.classList.add('is-dragging');
    });

    window.addEventListener('mousemove', (e) => {
        if (!certZoomState.dragging) return;
        certZoomState.tx += e.clientX - certZoomState.lastX;
        certZoomState.ty += e.clientY - certZoomState.lastY;
        certZoomState.lastX = e.clientX;
        certZoomState.lastY = e.clientY;
        clampCertPan();
        applyCertZoom();
    });

    window.addEventListener('mouseup', () => {
        if (!certZoomState.dragging) return;
        certZoomState.dragging = false;
        wrap.classList.remove('is-dragging');
    });

    /* Double-click to reset */
    wrap.addEventListener('dblclick', (e) => {
        e.preventDefault();
        resetCertZoom();
    });

    /* Touch: pinch to zoom, drag to pan, double-tap to reset */
    let touchStartDist = 0;
    let touchStartScale = 1;
    let panStart = { x: 0, y: 0 };
    let lastTap = 0;

    wrap.addEventListener('touchstart', (e) => {
        if (e.touches.length >= 2) {
            touchStartDist = pinchDistance(e.touches[0], e.touches[1]) || 1;
            touchStartScale = certZoomState.scale;
        } else if (e.touches.length === 1) {
            panStart = { x: e.touches[0].clientX, y: e.touches[0].clientY };
        }
    }, { passive: false });

    wrap.addEventListener('touchmove', (e) => {
        e.preventDefault();
        if (e.touches.length >= 2) {
            const dist = pinchDistance(e.touches[0], e.touches[1]) || 1;
            certZoomState.scale = clamp(
                touchStartScale * (dist / touchStartDist),
                certZoomState.minScale,
                certZoomState.maxScale
            );
            clampCertPan();
            applyCertZoom();
        } else if (e.touches.length === 1 && certZoomState.scale > 1) {
            const x = e.touches[0].clientX;
            const y = e.touches[0].clientY;
            certZoomState.tx += x - panStart.x;
            certZoomState.ty += y - panStart.y;
            panStart = { x, y };
            clampCertPan();
            applyCertZoom();
        }
    }, { passive: false });

    wrap.addEventListener('touchend', (e) => {
        if (e.touches.length === 0) {
            const now = Date.now();
            if (now - lastTap < 300) {
                resetCertZoom();
                lastTap = 0;
            } else {
                lastTap = now;
            }
        }
    }, { passive: false });
}

function openCertModal(title, imageUrl) {
    const modal = document.getElementById('cert-modal');
    if (!modal || !imageUrl) return;

    certModalState.previousFocus = document.activeElement;
    certModalState.isOpen = true;

    document.getElementById('cert-modal-title').textContent = title;

    const img = document.getElementById('cert-modal-image');
    img.src = imageUrl;
    img.alt = title;

    resetCertZoom();

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('cert-modal-open');

    requestAnimationFrame(() => {
        const closeBtn = modal.querySelector('.cert-modal-close');
        if (closeBtn) closeBtn.focus();
    });
}

function closeCertModal() {
    const modal = document.getElementById('cert-modal');
    if (!modal) return;

    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('cert-modal-open');
    certModalState.isOpen = false;

    const img = document.getElementById('cert-modal-image');
    if (img) { img.src = ''; img.alt = ''; }
    resetCertZoom();

    if (certModalState.previousFocus && typeof certModalState.previousFocus.focus === 'function') {
        certModalState.previousFocus.focus();
    }
    certModalState.previousFocus = null;
}

/* ════════════════════════════════════════
   Expose functions to global scope
   Needed because app.js is loaded as an
   ES module (type="module") — top-level
   declarations are module-scoped and
   invisible to inline onclick handlers.
   ════════════════════════════════════════ */
window.openProjectModal = openProjectModal;
window.closeProjectModal = closeProjectModal;
window.prevGalleryImage = prevGalleryImage;
window.nextGalleryImage = nextGalleryImage;
window.goToGalleryImage = goToGalleryImage;
window.openCertModal = openCertModal;
window.closeCertModal = closeCertModal;
window.certZoomIn = certZoomIn;
window.certZoomOut = certZoomOut;
window.resetCertZoom = resetCertZoom;
