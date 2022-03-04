window.onload=function(){
    document.getElementById('tt').classList.add("teestt");
}


var x = 30;
$(document).scroll(function() {
var y = $(this).scrollTop();
var element = document.getElementById("barre_test");
var element2 = document.getElementById("mylogo");
var element3 = document.getElementById("items-links");

if (y < x) {
    $('.headerr').fadeIn();
    element.classList.remove("barre");
    element.classList.add("bar");
    element2.classList.remove("logo2");
    element2.classList.add("logo");
    element3.classList.remove("bar12");
    element3.classList.add("bar1");
} else {
    document.getElementById('testt').style.display="none";
    element.classList.remove("bar");
    element.classList.add("barre");
    element2.classList.add("logo2");
    element3.classList.remove("bar1");
    element3.classList.add("bar12");
}
});