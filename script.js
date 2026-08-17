// ===== WCP Wireless — Shared Site Script =====

document.addEventListener('DOMContentLoaded', function () {

  // ---- Mobile menu toggle ----
  var menuToggle = document.getElementById('menuToggle');
  var mainNav = document.getElementById('mainNav');

  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', function () {
      var isOpen = mainNav.classList.toggle('open');
      menuToggle.classList.toggle('open', isOpen);
      menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close menu when a nav link is tapped (mobile)
    mainNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mainNav.classList.remove('open');
        menuToggle.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // ---- Plan tier tabs (Business Wireless page) ----
  var planTabBtns = document.querySelectorAll('.plan-tab-btn');
  var planTabPanels = document.querySelectorAll('.plan-tab-panel');

  function activatePlanTab(targetId) {
    planTabBtns.forEach(function (btn) {
      btn.classList.toggle('active', btn.dataset.target === targetId);
    });
    planTabPanels.forEach(function (panel) {
      panel.classList.toggle('active', panel.id === targetId);
    });
  }

  if (planTabBtns.length && planTabPanels.length) {
    planTabBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        activatePlanTab(btn.dataset.target);
      });
    });

    // "View Plans" links at the top of the page should switch tabs, not just scroll
    document.querySelectorAll('a[href="#small-business"], a[href="#corporate-5"], a[href="#corporate-10"]').forEach(function (link) {
      link.addEventListener('click', function () {
        activatePlanTab(link.getAttribute('href').slice(1));
      });
    });
  }

  // ---- Header shadow on scroll ----
  var header = document.querySelector('header.site-header');
  if (header) {
    var onScroll = function () {
      if (window.scrollY > 8) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- Scroll-reveal animation ----
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var revealEls = document.querySelectorAll('.reveal');

  if (reduceMotion || !('IntersectionObserver' in window)) {
    // Show everything immediately if reduced motion is preferred, or if unsupported
    revealEls.forEach(function (el) { el.classList.add('visible'); });
  } else {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) { observer.observe(el); });
  }

});
