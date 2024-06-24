// Owl Carousel

$('.deal-carousel').owlCarousel({
          loop: false,
          margin: 10,
          nav: false,
          dots: true,
          stagePadding: 5,
          autoplay: false,
          responsive: {
              0: {
                  items: 2,
                  nav: false,
              },
              600: {
                  items: 3,
                  nav: false,
                  mouseDrag: false,
              },
              1000: {
                  items: 6,
                  mouseDrag: false,
              }
          }
      })

// Slick Slider

    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: false,
  focusOnSelect: true
});