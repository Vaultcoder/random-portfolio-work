$('a').click(function(){
	console.log(1);
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

$('.to-top').click(function(){
	console.log(1);
	$('html, body').animate({ scrollTop: 0 }, 1000);
});