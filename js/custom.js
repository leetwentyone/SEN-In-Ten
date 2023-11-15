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