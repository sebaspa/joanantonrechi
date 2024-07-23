jQuery(function () {
  jQuery("#btnPrimaryMenuMobile").click(function () {
    jQuery(".primaryMenu").toggleClass("hidden");
  });

  lightbox.option({
    disableScrolling: true,
    positionFromTop: 80,
    showImageNumberLabel: false
  })
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
