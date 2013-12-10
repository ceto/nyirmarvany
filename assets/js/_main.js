/* Author:

*/

$(document).ready(function() {
  
  $('.gallery').each(function() {
    $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [1,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.children().attr('alt') + '<small>by Márton Csutkai</small>';
        }
      }
    });
  });

  $('.mtog').click(function(e){
    e.preventDefault();
    $('.nav-main ul').toggleClass('opened');
  });

  $('#mycarousel').jcarousel({
    //scroll: 1,
    //initCallback: mycarousel_initCallback,
    // This tells jCarousel NOT to autobuild prev/next buttons
    //buttonNextHTML: null,
    //buttonPrevHTML: null
  });

  $('#carousel-home').carousel({
    interval: 3000
  });

  // $('.content-info').css('top', function(index) {
  //   return $('window').height();
  // });

});