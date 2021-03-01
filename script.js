let navbar = document.querySelector(".navbar");
let ham = document.querySelector(".ham");

// toggles hamburger menu in and out when clicking on the hamburger
function toggleHamburger(){
  navbar.classList.toggle("showNav");
  ham.classList.toggle("showClose");
}

ham.addEventListener("click", toggleHamburger);

// METHOD 1
let menuLinks = document.querySelectorAll(".menuLink");

menuLinks.forEach( 
  function(menuLink) { 
    menuLink.addEventListener("click", toggleHamburger) 
  }
)

//Main Slider
  $('.slick-slider').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      fade: true,
      pauseOnHover: false,
      cssEase: 'linear'
  });

//Referenz Slider
$('.referenzen-slider-slick').slick({
  infinite: false,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 1000,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: false,
  useTransform: true,
  arrows: true,
  prevArrow:"<img class='slick-prev slick-button' src='Bilder/chevron-compact-left.svg'>",
  nextArrow:"<img class='slick-next slick-button' src='Bilder/chevron-compact-right.svg'>",
  responsive: [
      {
      breakpoint: 1024,
      settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
      }
      },
      {
      breakpoint: 600,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 2
      }
      },
      {
      breakpoint: 480,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
  ]
  });

  
