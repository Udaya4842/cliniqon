/** @format */

const partnerSwiper = new Swiper('.partner-swiper', {
  // Optional parameters
  slidesPerView: 2,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 5000,
    pauseOnMouseEnter: 1,
  },
  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 768
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

const testimonialsSwiper = new Swiper('.testimonials-swiper', {
  // Optional parameters
  slidesPerView: 1,
  spaceBetween: 30,
  centeredSlides: true,
  freemode: true,
  loop: true,
  autoplay: {
    delay: 5000,
    pauseOnMouseEnter: 1,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

const recommandendSwiper = new Swiper('.recommended-swiper', {
  // Optional parameters
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 5000,
    pauseOnMouseEnter: 1,
  },
});

jQuery(document).ready(function () {
  // Handle click on the table of contents items
  jQuery('ul.article-list li a').click(function (event) {
    event.preventDefault(); // Prevent default anchor behavior
    const target = jQuery(this).attr('href'); // Get the target section's ID

    // Scroll to the target section
    jQuery('html, body').animate(
      { scrollTop: jQuery(target).offset().top - 100 },
      500
    ); // Adjust offset for fixed headers
  });

  // Update active tab on scroll
  jQuery(window).on('scroll', function () {
    const scrollPosition = jQuery(window).scrollTop() + 110; // Adjust for header height
    jQuery('.blog-content-div h2, .blog-content-div h3').each(function () {
      const sectionTop = jQuery(this).offset().top;
      const id = jQuery(this).attr('id');

      if (scrollPosition >= sectionTop) {
        jQuery('ul.article-list li').removeClass('active');
        jQuery(`ul.article-list li a[href="#${id}"]`)
          .parent()
          .addClass('active');
      }
    });
  });
});
