jQuery(function($) {
  jQuery('.search-toggle').click(function(e) {
    e.preventDefault();
    jQuery(".search-container").toggleClass("search-active");
  })
});

jQuery(function($) {
  jQuery('.close-search').click(function(e) {
    e.preventDefault();
    jQuery(".search-container").removeClass("search-active");
  })
});

/* Episode List */
jQuery(document).ready(function(){
  if (window.matchMedia("(max-width: 768px)").matches) {
    jQuery('.episode-list ul').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 3,
      dots: false,
      arrows: false,
      responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1
        }
      }
    ]
    });
  }
});

/* Our Partners */
jQuery(document).ready(function(){
  jQuery('.partners ul').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    slidesToShow: 6,
    dots: false,
    arrows: true,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }
  ]
  });
});

/* Accordion */
jQuery(function($){
  jQuery(".accordion-item").find(".accordion-heading").click(function() {
    jQuery(this).toggleClass("active-tab").find("span").toggleClass("icon-minus icon-plus");
    jQuery(this).next().toggleClass("open").slideToggle("fast")
  });
});