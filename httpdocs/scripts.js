/*
*/

jQuery(function($) {
  $('aside').draggable({containment:'parent'});
  $(document)
    .on('mousewheel keydown', function (e, d) {
    if (!$('#slideshow ul').queue().length) {
    if (e.type == 'keydown') {
      //Up-38, Down-40, Left-37, Right-39
      switch (e.keyCode) {
        case 38:
          slideImage(-1);
          break;
        case 40:
          slideImage(1);
          break;
        case 37:
          console.log('left');
          break;
        case 39:
          console.log('right');
          break;
      }
    } else {
      if (e.originalEvent.wheelDelta > 0) {
        slideImage(-1);
      } else {
        slideImage(1);
      } 
    }
    }
  });

  var slideDuration = 1000;
 
  function updateAside ($ele) {
    var $aside = $('aside');
    var title = $ele.find('img').attr('title');
    $aside.find('h2').text(title).fadeIn(); 
  }
 
  function slideImage_unfiltered (dir) {
    var $images = $('#slideshow li');
    var total = $images.length - 1;
    var cur = $('#slideshow .active').removeClass('active').index() + dir;
    var curHeight = $(window).height();
    
    if (cur>total) {
      cur = 1;
      $('#slideshow ul').css('margin-top', 0);
    } else if (cur<0) {
      cur = total - 1;
      $('#slideshow ul').css('margin-top', -total*curHeight);
    }
   
    $('aside *').fadeOut(); 
    $('#slideshow ul').animate({'margin-top':-cur*curHeight}, slideDuration, 'easeInOutCirc', function () {
      if (cur <= 0) {
        cur = total;
      } else if (cur >= total) {
        cur = 0;
      }
      $images.eq(cur).addClass('active').parent().css('margin-top', -cur*curHeight);
      updateAside($('.image-wrap.active'));
    });
  }
  var slideImage = _.throttle(slideImage_unfiltered, slideDuration, true);
});
