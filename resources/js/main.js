$(document).ready(function(){

  $('.carousel').slick({
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    draggable: false,
    pauseOnFocus: true,
    pauseOnHover: false
  })

});

var mySong = document.getElementById("mySong");
var seaBtn = document.getElementById("seashell");

seaBtn.onclick = function playSea(){
    if (mySong.paused){
        mySong.play();
    } else {
        mySong.pause();
    }
}
