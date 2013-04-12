/*
*/

jQuery(function($) {
  $(window).load(function () {
    return false;
    $('#slideshow ul').show();
    $('aside').html('<h2></h2>').removeClass('loading');
    slideImage(0,0);
/*
    $('#slideshow ul li img').addpowerzoom({
      defaultpower : 3,
      powerrange : [5,5],
      magnifiersize : [250,250] 
    });
*/ 
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
  }).on('click', '#legend ul li a', function (e) {
    e.preventDefault();
    var clickedIndex = $(this).parent().index();
    if (!$('#slideshow ul').queue().length) {
      console.log('clickedIndex',clickedIndex);
      slideImage(0,clickedIndex);
    }
  });
  });

  $('aside').draggable({containment:'parent'});

  var slideDuration = 1000;
 
  function updateAside ($ele) {
    var $aside = $('aside');
    var title = $ele.find('img').attr('title');
    $aside.find('h2').text(title).fadeIn(); 
  }
 
  function slideImage_unfiltered (dir,target) {
    var $images = $('#slideshow li');
    var total = $images.length - 1;
    var curStart = $('#slideshow .active').removeClass('active').index();
    var cur = target === 0 ? 0 : (target || curStart + dir);
    // var cur = target != oldCur ? target : false || cur + dir;
    var curHeight = $(window).height();
    
    if (cur>total) {
      cur = 1;
      $('#slideshow ul').css('margin-top', 0);
    } else if (cur<0) {
      cur = total - 1;
      $('#slideshow ul').css('margin-top', -total*curHeight);
    }
   
    $('aside *').fadeOut(); 
    $('#legend ul').animate({'margin-top':-(cur==total?0:cur)*30}, slideDuration*.75);
    $('#slideshow ul').animate({'margin-top':-cur*curHeight}, slideDuration, 'easeInOutCirc', function () {
      if (cur <= 0) {
        cur = total;
      } else if (cur >= total) {
        cur = 0;
      }
      $images.eq(cur).addClass('active').parent().css('margin-top', -cur*curHeight);
      updateAside($('.image-wrap.active'));
      console.log('cur', cur);
    });
  }
  var slideImage = _.throttle(slideImage_unfiltered, slideDuration, true);
});
