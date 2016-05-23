$(document).ready(function(){
    $(".projekt-box").hover(function(){
        
        var i = (this.id);
        var id = ('#slid' + i);

        console.log(id);
        $(id).css("top", "0px");
                // $(".k").css("width", "130px");
        // $(".tlist").css("transition", "width 1s");
        // $(".tmenu-left").css("width", "180px");
        $(id).css("transition", "top 0.5s");
        }, function(){ 

        var i = $(this).attr('id');
        var id = ('#slid' + i);

        $(id).css("top", "350px");
        // $(".l").css("width", "13px");        
        // $(".tmenu-left").css("width", "35px");
        // $(".tlist").css("transition", "width 1s");
        $(id).css("transition", "top 0.5s");

    });
});

// window.onmouseover=function(e) {
//         console.log(e.target.className);
// };