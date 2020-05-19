// toggle map functions
//freeze scroll and left area modifications
var ScrollHandler = (function() {

  var bannerHeight = $('.top-banner').outerHeight();

  //Assumes jQuery has initialized
  var hasScrollListener = false;
  var toggleScrollLock = function() {
      if(!hasScrollListener) {
          $('body').css('overflow', 'hidden');
          $(window).scrollTop(bannerHeight);

          $('.toggle-map').addClass("show");

          $('.cards-list').addClass("map-area");
          $('.teaser-card').addClass("small");
          $('.teaser-card').removeClass("big");
          $('.cards-list__el').removeClass("col-md-3");
          $('.pagination').css("display", 'none');
      }
      else {
          $('body').css('overflow', '');

          $('.toggle-map').removeClass("show");

          $('.cards-list').removeClass("map-area");
          $('.teaser-card').removeClass("small");
          $('.teaser-card').addClass("big");
          $('.cards-list__el').addClass("col-md-3");
          $('.pagination').css("display", 'block');
      }
      hasScrollListener = !hasScrollListener;
  }
  //Return a public toggle method
  return {
      toggleScrollLock: toggleScrollLock
  };
});

$(document).ready(function() {
  var scrollHandler = new ScrollHandler();

      $('.switchMap').click(function(){
         scrollHandler.toggleScrollLock();
      });
});
