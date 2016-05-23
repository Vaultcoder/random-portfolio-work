

$(window).resize(function() {
   if ($(this).width() > 480) {
        $(document).ready(function(){
            $(".init-list").hover(function(){
                console.log('e')
                $(".l").css("width", "55px");
                $(".k").css("width", "180px");
                $(".init-list").css("transition", "width 1s");
                $(".init").css("width", "240px");
                $(".init").css("transition", "width 1s");
                }, function(){
                $(".k").css("width", "25px");
                $(".l").css("width", "18px");        
                $(".init").css("width", "45px");
                $(".init-list").css("transition", "width 1s");
                $(".init").css("transition", "width 1s");
        
            });
        });
   }
});