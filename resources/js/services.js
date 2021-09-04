function hideContentSections(){
    $(".content-section").each(function(){
        $(this).addClass("hide-section");
    });
}

$( document ).ready(function() {

    $(".menu-link").click(function(){
        hideContentSections();
        $("." + $(this).data("section")).removeClass("hide-section");
    });

});