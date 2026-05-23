/* ====================================
   Portal Web PE - Main JS
   Bootstrap 5 + Custom interactions
   ==================================== */

document.addEventListener('DOMContentLoaded', function () {

  // ========== NAVBAR SCROLL ===========
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const onScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 10);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // ========== THEME TOGGLE ===========
  const themeBtn = document.getElementById('themeToggle');
  if (themeBtn) {
    themeBtn.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-bs-theme') || 'light';
      const next = current === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-bs-theme', next);
      localStorage.setItem('pwpe-theme', next);
    });
  }

  // ========== COUNTER ANIMATION ===========
  const animateCounter = (el) => {
    const target = parseInt(el.getAttribute('data-count') || el.textContent, 10);
    if (isNaN(target)) return;
    const duration = 1800;
    const step = Math.ceil(target / (duration / 16));
    let current = 0;
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = current;
    }, 16);
  };

  const counterEls = document.querySelectorAll('[data-count]');
  if (counterEls.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    counterEls.forEach(el => observer.observe(el));
  }

  // ========== FAQ ACCORDION ===========
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', function () {
      const item = this.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
      // Toggle current
      if (!isOpen) item.classList.add('open');
    });
  });

  // ========== BILLING TOGGLE ===========
  const toggleWrap = document.getElementById('billingToggle');
  const plansContainer = document.getElementById('plansContainer');
  if (toggleWrap && plansContainer) {
    toggleWrap.querySelectorAll('.bt-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        toggleWrap.querySelectorAll('.bt-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        if (this.getAttribute('data-period') === 'annual') {
          plansContainer.classList.add('annual-mode');
        } else {
          plansContainer.classList.remove('annual-mode');
        }
      });
    });
  }

  // ========== FADE UP ANIMATION ===========
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length) {
    const fadeObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          fadeObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => fadeObserver.observe(el));
  }

});
