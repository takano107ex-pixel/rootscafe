document.addEventListener('DOMContentLoaded', function() {

  // GSAP
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray('section').forEach(function(section) {
    gsap.fromTo(section,
      { opacity: 0, y: 50 },
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 60%',
        }
      }
    );
  });

// textareaのcols削除
document.addEventListener('wpcf7mailsent', function() {
  jQuery('textarea').removeAttr('cols');
});

// ページ読み込み時にも試みる
jQuery(window).on('load', function() {
  jQuery('textarea').removeAttr('cols');
});

  // modal
  document.querySelectorAll('.work__item--box').forEach(item => {
    item.addEventListener('click', () => {
      const modalId = item.getAttribute('data-modal');
      if (!modalId) return;
      const modal = document.getElementById(modalId);
      if (!modal) return;
      modal.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    });
  });

  document.querySelectorAll('.modal__overlay, .modal__close').forEach(el => {
    el.addEventListener('click', () => {
      document.querySelectorAll('.modal').forEach(modal => {
        modal.classList.remove('is-open');
      });
      document.body.style.overflow = '';
    });
  });

  // drawer
  jQuery(function($) {
    if ($(window).width() <= 768) {
      $('.drawer').drawer();
    }
  });

});