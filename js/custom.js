/* Add class to header when scrolled */
jQuery(window).scroll(function(){
  var nav=jQuery('.site-header');
  var top=50;
  if(jQuery(window).scrollTop()>=top){
    nav.addClass('onscroll-header')
  ;}
  else{
    nav.removeClass('onscroll-header');
  }
});

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

jQuery(function($){
  jQuery(document).on('click','.menu-toggle',function(e){
    e.stopPropagation();
    jQuery(".mobile-menu").toggleClass("opened");
    jQuery("html,body").toggleClass("menu-opened")
  });
});

jQuery(function($) {
  jQuery('.close').click(function(e) {
    e.preventDefault();
    jQuery(".mobile-menu").removeClass("opened");
    jQuery("html,body").removeClass("menu-opened")
  })
});

/* Episode List */
jQuery(document).ready(function(){
  if (window.matchMedia("(max-width: 767px)").matches) {
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

/* Custom Navigation */
jQuery(function($){
  jQuery('.previous').click(function(){
    jQuery('.episode-list ul').slick('slickPrev');
  });

  jQuery('.next').click(function(){
    jQuery('.episode-list ul').slick('slickNext');
  });
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
        slidesToShow: 2
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

/* Listen Links */
jQuery(document).ready(function(){
  if (window.matchMedia("(max-width: 1151px)").matches) {
    jQuery('.listen-links ul').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 3,
      dots: false,
      arrows: false,
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
          slidesToShow: 2
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true
        }
      }
    ]
    });
  }
});