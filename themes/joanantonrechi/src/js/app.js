jQuery(function () {
  jQuery("#btnPrimaryMenuMobile").click(function () {
    jQuery(".primaryMenu").toggleClass("hidden");
  });
});

const swiper = new Swiper(".swiper-project-gallery", {
  slidesPerView: 1,
  spaceBetween: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
