/* ============ Header ============ */
/* ============ Menu ============ */
var menu = document.querySelector('.header__bottom__navigation');
var headerBottomToggle = document.querySelector('.header__bottom__toogle__menu');
var closeIcon = document.querySelector('.header__bottom__toogle__close');
var headerTop= document.querySelector('.header__top');

var header = document.querySelector(".header__top");


function toggleMenu() {
  menu.classList.toggle("active");
  headerBottomToggle.classList.toggle("active");
  closeIcon.classList.toggle("active");
  headerTop.classList.toggle("active");
}

headerBottomToggle.addEventListener('click', toggleMenu);
closeIcon.addEventListener('click', toggleMenu);

/* ============ Scroll ============ */
window.addEventListener("scroll", function() {
    if (window.scrollY > 50) { 
        header.classList.add("active"); 
    } else {
        header.classList.remove("active");
    }
});