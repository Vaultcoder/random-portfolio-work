    // $( ".menu-one" ).remove();

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 350) {
    $( ".menu-one" ).fadeIn(0);
  } else {
    $('.menu-one').fadeOut(0);
  }
});




