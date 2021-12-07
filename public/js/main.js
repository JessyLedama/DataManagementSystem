(function ($){
"use strict";

// wow js init
new WOW().init();

// flexslider
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});






// counter up js
$('.counter').counterUp({
    delay: 10,
    time: 1200
});

// bootstrap select picker
$('.select2').select2();

// multi file upload
$(".dropzone").dropzone({
  url: 'upload.php',
  width: 300,
  height: 300, 
  progressBarWidth: '100%',
  maxFileSize: '3MB',
  addRemoveLinks: true,
  acceptedFiles: '.png,.jpg,.jpeg'
});

// CK Editor
CKEDITOR.replace( 'editor1' );

// range slider
$( "#slider-range" ).slider({
  range: true,
  min: 500,
  max: 1000000,
  values: [ 0, 1 ],
  slide: function( event, ui ) {
    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
  }
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

// range slider
$( "#slider-range2" ).slider({
  range: true,
  min: 500,
  max: 1000000,
  values: [ 0, 1 ],
  slide: function( event, ui ) {
    $( "#amount2" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
  }
});
$( "#amount2" ).val( "$" + $( "#slider-range2" ).slider( "values", 0 ) + " - $" + $( "#slider-range2" ).slider( "values", 1 ) );



$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});





	
})(jQuery);
