/* global main.js – Malermeister Anderson */

(function () {
  'use strict';

  /* ----------------------------------------------------------------
     1. Mobile Navigation Toggle
  ---------------------------------------------------------------- */
  function initNav() {
    var toggle = document.getElementById('nav-toggle');
    var menu   = document.getElementById('nav-menu');
    if (!toggle || !menu) return;

    toggle.addEventListener('click', function () {
      var isOpen = menu.classList.contains('is-open');
      menu.classList.toggle('is-open', !isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
      toggle.setAttribute('aria-label', isOpen ? 'Navigation öffnen' : 'Navigation schließen');
      document.body.style.overflow = isOpen ? '' : 'hidden';
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!toggle.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Navigation öffnen');
        document.body.style.overflow = '';
      }
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menu.classList.contains('is-open')) {
        menu.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        toggle.focus();
      }
    });
  }

  /* ----------------------------------------------------------------
     2. Dropdown toggle (mobile – tap to open)
  ---------------------------------------------------------------- */
  function initDropdowns() {
    var dropdownItems = document.querySelectorAll('.nav-item--dropdown');

    dropdownItems.forEach(function (item) {
      var link = item.querySelector('.nav-link--dropdown');
      if (!link) return;

      link.addEventListener('click', function (e) {
        // Only intercept on small screens; on desktop let hover handle it
        if (window.innerWidth < 1024) {
          e.preventDefault();
          item.classList.toggle('dropdown-open');
        }
      });
    });
  }

  /* ----------------------------------------------------------------
     3. Sticky Header – add .scrolled class
  ---------------------------------------------------------------- */
  function initScrollHeader() {
    var header = document.getElementById('site-header');
    if (!header) return;

    var onScroll = function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ----------------------------------------------------------------
     4. Smooth scroll for anchor links
  ---------------------------------------------------------------- */
  function initSmoothScroll() {
    document.addEventListener('click', function (e) {
      var anchor = e.target.closest('a[href^="#"]');
      if (!anchor) return;

      var targetId = anchor.getAttribute('href').slice(1);
      if (!targetId) return;

      var target = document.getElementById(targetId);
      if (!target) return;

      e.preventDefault();
      var navHeight = parseInt(
        getComputedStyle(document.documentElement).getPropertyValue('--nav-height') || '76',
        10
      );
      var top = target.getBoundingClientRect().top + window.scrollY - navHeight - 16;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  }

  /* ----------------------------------------------------------------
     5. Simple Lightbox
  ---------------------------------------------------------------- */
  function initLightbox() {
    // Create lightbox DOM if gallery items exist
    var items = document.querySelectorAll('[data-lightbox]');
    if (!items.length) return;

    var lb = document.createElement('div');
    lb.className = 'lightbox';
    lb.setAttribute('role', 'dialog');
    lb.setAttribute('aria-modal', 'true');
    lb.setAttribute('aria-label', 'Bildvorschau');
    lb.innerHTML =
      '<div class="lightbox__inner">' +
        '<button class="lightbox__close" aria-label="Schließen">&times;</button>' +
        '<img class="lightbox__img" src="" alt="">' +
        '<p class="lightbox__caption"></p>' +
      '</div>';
    document.body.appendChild(lb);

    var lbImg     = lb.querySelector('.lightbox__img');
    var lbCaption = lb.querySelector('.lightbox__caption');
    var lbClose   = lb.querySelector('.lightbox__close');

    function openLightbox(src, alt, caption) {
      lbImg.src = src;
      lbImg.alt = alt || '';
      lbCaption.textContent = caption || '';
      lb.classList.add('is-open');
      document.body.style.overflow = 'hidden';
      lbClose.focus();
    }

    function closeLightbox() {
      lb.classList.remove('is-open');
      document.body.style.overflow = '';
    }

    items.forEach(function (item) {
      item.addEventListener('click', function () {
        var src     = item.getAttribute('data-lightbox');
        var alt     = item.getAttribute('data-alt') || item.querySelector('img') && item.querySelector('img').alt || '';
        var caption = item.getAttribute('data-caption') || '';
        openLightbox(src, alt, caption);
      });

      // Keyboard a11y
      item.setAttribute('tabindex', item.getAttribute('tabindex') || '0');
      item.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          item.click();
        }
      });
    });

    lbClose.addEventListener('click', closeLightbox);
    lb.addEventListener('click', function (e) {
      if (e.target === lb) closeLightbox();
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && lb.classList.contains('is-open')) closeLightbox();
    });
  }

  /* ----------------------------------------------------------------
     6. Gallery / Reference filter
  ---------------------------------------------------------------- */
  function initGalleryFilter() {
    var filterBtns = document.querySelectorAll('.gallery-filter__btn');
    var refCards   = document.querySelectorAll('.ref-card');
    if (!filterBtns.length || !refCards.length) return;

    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');

        var cat = btn.getAttribute('data-filter');

        refCards.forEach(function (card) {
          if (cat === 'all') {
            card.removeAttribute('data-hidden');
          } else {
            var cardCat = card.getAttribute('data-category');
            if (cardCat === cat) {
              card.removeAttribute('data-hidden');
            } else {
              card.setAttribute('data-hidden', 'true');
            }
          }
        });
      });
    });
  }

  /* ----------------------------------------------------------------
     7. Contact Form Validation
  ---------------------------------------------------------------- */
  function initForms() {
    var forms = document.querySelectorAll('.contact-form');
    forms.forEach(function (form) {
      form.addEventListener('submit', function (e) {
        var valid = validateForm(form);
        if (!valid) {
          e.preventDefault();
        }
      });

      // Live validation on blur
      var inputs = form.querySelectorAll('.form-input, .form-select, .form-textarea');
      inputs.forEach(function (input) {
        input.addEventListener('blur', function () {
          validateField(input);
        });
        input.addEventListener('input', function () {
          if (input.closest('.form-group').classList.contains('is-invalid')) {
            validateField(input);
          }
        });
      });
    });
  }

  function validateField(field) {
    var group = field.closest('.form-group');
    if (!group) return true;

    var required = field.hasAttribute('required');
    var value    = field.value.trim();
    var type     = field.type;
    var valid    = true;

    if (required && !value) {
      valid = false;
    } else if (type === 'email' && value && !isValidEmail(value)) {
      valid = false;
    } else if (type === 'tel' && value && !isValidPhone(value)) {
      valid = false;
    }

    group.classList.toggle('is-invalid', !valid);
    field.classList.toggle('is-invalid', !valid);
    field.classList.toggle('is-valid', valid && !!value);
    return valid;
  }

  function validateForm(form) {
    var fields = form.querySelectorAll('.form-input[required], .form-select[required], .form-textarea[required]');
    var allValid = true;
    fields.forEach(function (field) {
      if (!validateField(field)) allValid = false;
    });
    return allValid;
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function isValidPhone(phone) {
    return /^[\d\s\+\-\/\(\)]{7,}$/.test(phone);
  }

  /* ----------------------------------------------------------------
     8. Init all
  ---------------------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function () {
    initNav();
    initDropdowns();
    initScrollHeader();
    initSmoothScroll();
    initLightbox();
    initGalleryFilter();
    initForms();
  });

}());
