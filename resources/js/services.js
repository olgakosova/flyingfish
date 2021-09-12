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


/*const btnAdventure = document.getElementById("btn-adventure")

function openAdventure() {
    var adventure = document.getElementById("adventure")
    var fish = document.getElementById("fishing")
    window.location.href = "services.html";
    adventure.classList.remove("hide-it");
    fishing.classList.add("hide-it");
}
btnAdventure.addEventListener("click", openAdventure);*/