$(document).ready(function(){
    $(".navbar-button").hover(function(){
        
        var i = (this.id);
        id = ('#' + i);
        console.log(id);
        $(id).css("border", "2px solid white");        
        // $(id).css("font-size", "27px");
        $(id).css("transition", "border 0.5s");
        }, function(){ 

        var i = $(this).attr('id');
        id = ('#' + i)
        $(id).css("border", "2px solid rgba(0, 0, 0, 0)");         
        // $(id).css("font-size", "24px");
        $(id).css("transition", "border 0.5s");

    });
});
