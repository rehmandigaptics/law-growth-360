(function () {
  'use strict';

  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    return;
  }

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReducedMotion) {
    document.documentElement.classList.remove('lg360-anim-pending');
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  const revealDefaults = {
    y: 48,
    autoAlpha: 0,
    duration: 0.75,
    ease: 'power3.out',
  };

  function revealBatch(selector, options = {}) {
    const elements = gsap.utils.toArray(selector);
    if (!elements.length) return;

    ScrollTrigger.batch(elements, {
      start: options.start || 'top 88%',
      once: true,
      onEnter: (batch) => {
        gsap.fromTo(
          batch,
          {
            y: options.fromY ?? revealDefaults.y,
            autoAlpha: 0,
            scale: options.fromScale ?? 1,
          },
          {
            y: 0,
            autoAlpha: 1,
            scale: 1,
            duration: options.duration ?? revealDefaults.duration,
            stagger: options.stagger ?? 0.1,
            ease: options.ease ?? revealDefaults.ease,
            overwrite: true,
          }
        );
      },
    });
  }

  function initHeader() {
    const header = document.querySelector('.lg360-header');
    if (!header) return;

    gsap.from(header, {
      y: -72,
      autoAlpha: 0,
      duration: 0.65,
      ease: 'power2.out',
    });

    gsap.from('.lg360-nav-list .nav-item', {
      y: -12,
      autoAlpha: 0,
      duration: 0.45,
      stagger: 0.06,
      delay: 0.35,
      ease: 'power2.out',
    });

    gsap.from('.lg360-header .lg360-btn', {
      scale: 0.92,
      autoAlpha: 0,
      duration: 0.5,
      delay: 0.55,
      ease: 'back.out(1.4)',
    });

    ScrollTrigger.create({
      start: 0,
      end: 'max',
      onUpdate: (self) => {
        header.classList.toggle('lg360-header-scrolled', self.scroll() > 24);
      },
    });
  }

  function initHero() {
    const heroBlocks = [
      '.lg-hero-copy',
      '.lg360-content',
      '.lg360-services-content',
      '.lg-pa-hero-content',
      '.lg360-hero-copy',
    ];

    heroBlocks.forEach((selector) => {
      const block = document.querySelector(selector);
      if (!block) return;

      gsap.from(block.children, {
        y: 44,
        autoAlpha: 0,
        duration: 0.85,
        stagger: 0.11,
        delay: 0.12,
        ease: 'power3.out',
      });
    });

    gsap.utils.toArray('.lg360-form-card, .lg360-mission-card').forEach((panel) => {
      gsap.from(panel, {
        x: 56,
        autoAlpha: 0,
        duration: 0.95,
        delay: 0.28,
        ease: 'power3.out',
      });
    });
  }

  function initSystemFlow() {
    const section = document.querySelector('.lg360-system-flow-section');
    if (!section) return;

    const timeline = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: 'top 82%',
        once: true,
      },
    });

    timeline.from(section.querySelector('.lg360-system-flow-heading-wrap'), {
      y: 32,
      autoAlpha: 0,
      duration: 0.65,
      ease: 'power3.out',
    });

    const line = section.querySelector('.lg360-system-flow-line');
    if (line && window.getComputedStyle(line).display !== 'none') {
      timeline.from(line, {
        scaleX: 0,
        duration: 1.05,
        ease: 'power2.inOut',
      }, '-=0.1');
    }

    const items = section.querySelectorAll('.lg360-system-flow-item');
    timeline.from(items, {
      y: 40,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.14,
      ease: 'power3.out',
    }, line ? '-=0.75' : '-=0.05');

    timeline.from(section.querySelectorAll('.lg360-system-step-badge'), {
      scale: 0,
      autoAlpha: 0,
      duration: 0.45,
      stagger: 0.14,
      ease: 'back.out(2)',
    }, '<0.08');

    timeline.from(section.querySelectorAll('.lg360-system-icon-box i'), {
      scale: 0,
      autoAlpha: 0,
      duration: 0.42,
      stagger: 0.14,
      ease: 'back.out(1.9)',
    }, '<0.12');

    timeline.from(section.querySelectorAll('.lg360-system-flow-title, .lg360-system-flow-text'), {
      y: 14,
      autoAlpha: 0,
      duration: 0.5,
      stagger: 0.07,
      ease: 'power2.out',
    }, '<0.2');
  }

  function initScrollReveals() {
    revealBatch('.lg-section-title, .lg360-section-heading, .lg360-section-title, .lg360-solutions-header, .lg360-what-header, .lg-pa-section-head, .lg360-process-header, .lg360-process-title, .lg-practice-section > .lg-container > h2', {
      fromY: 32,
      stagger: 0.08,
    });

    revealBatch('.lg-service-card, .lg-practice-item, .lg360-lead-card, .lg360-solution-card, .lg360-help-card, .lg-pa-card, .lg360-feature-item, .lg360-value-card, .lg360-process-item, .lg360-proof-item, .lg360-service-card, .lg360-check-item, .lg360-impact-item, .lg360-contact-item', {
      fromY: 40,
      stagger: 0.08,
    });

    revealBatch('.lg360-lead-content li, .lg360-why-content li', {
      fromY: 18,
      stagger: 0.05,
      duration: 0.55,
    });

    revealBatch('.lg-cta-box, .lg360-cta-inner, .lg-pa-cta-box, .lg360-call-card, .lg360-serving-copy, .lg360-left-content, .lg360-right-content, .lg360-powered-content, .lg360-impact-box', {
      fromY: 36,
      stagger: 0.12,
    });

    revealBatch('.lg360-footer-main > div', {
      fromY: 28,
      stagger: 0.1,
      duration: 0.65,
    });

    revealBatch('section img:not(.lg360-footer-logo):not(.lg360-powered-logo)', {
      fromY: 24,
      fromScale: 0.97,
      duration: 0.85,
      stagger: 0.12,
    });
  }

  function initLines() {
    gsap.utils.toArray('.lg-process-line, .lg360-title-line, .lg360-cta-divider, .lg360-section-heading span, .lg-pa-section-head span').forEach((line) => {
      gsap.from(line, {
        scaleX: 0,
        transformOrigin: 'left center',
        duration: 0.9,
        ease: 'power2.inOut',
        scrollTrigger: {
          trigger: line,
          start: 'top 88%',
          once: true,
        },
      });
    });
  }

  function initDecorative() {
    gsap.utils.toArray('.lg360-small-circle').forEach((circle) => {
      gsap.to(circle, {
        y: 18,
        duration: 3.2,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut',
      });
    });

    gsap.utils.toArray('.lg360-socials a').forEach((link, index) => {
      gsap.from(link, {
        scale: 0,
        autoAlpha: 0,
        duration: 0.45,
        delay: 0.15 + index * 0.07,
        ease: 'back.out(2)',
        scrollTrigger: {
          trigger: link,
          start: 'top 95%',
          once: true,
        },
      });
    });
  }

  function initButtons() {
    gsap.utils.toArray('.lg360-btn, .lg-btn, .lg-pa-btn, .lg360-cta-btn, .lg360-learn-link, .lg-pa-link').forEach((btn) => {
      btn.addEventListener('mouseenter', () => {
        gsap.to(btn, { scale: 1.04, duration: 0.22, ease: 'power2.out' });
      });

      btn.addEventListener('mouseleave', () => {
        gsap.to(btn, { scale: 1, duration: 0.22, ease: 'power2.out' });
      });
    });
  }

  function initModal() {
    const modal = document.getElementById('strategyCallModal');
    if (!modal) return;

    modal.addEventListener('show.bs.modal', () => {
      gsap.fromTo(
        modal.querySelector('.lg360-strategy-modal-content'),
        { y: 28, scale: 0.96, autoAlpha: 0 },
        { y: 0, scale: 1, autoAlpha: 1, duration: 0.38, ease: 'power3.out' }
      );
    });
  }

  function init() {
    initHeader();
    initHero();
    initSystemFlow();
    initScrollReveals();
    initLines();
    initDecorative();
    initButtons();
    initModal();

    document.documentElement.classList.remove('lg360-anim-pending');
    document.documentElement.classList.add('lg360-anim-ready');

    window.addEventListener('load', () => ScrollTrigger.refresh());
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
