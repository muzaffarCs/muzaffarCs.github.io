function changeBg(){
    var navbar = document.getElementById("header");
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    if(scrollValue < 400 ){
        navbar.classList.remove('bgColor');
    }
    else
    {
        navbar.classList.add('bgColor');
    }
}
window.addEventListener('scroll', changeBg);
function changeBgA(){
    var nav = document.getElementById("cha");
    var scroll = window.scrollY;
    if(scroll < 400 ){
        nav.classList.remove('bColor');
    }
    else
    {
        nav.classList.add('bColor');
    }
}
window.addEventListener('scroll', changeBgA);





