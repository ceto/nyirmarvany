// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)
var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);


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
    interval: 5000
  });

  // $('.content-info').css('top', function(index) {
  //   return $('window').height();
  // });

});