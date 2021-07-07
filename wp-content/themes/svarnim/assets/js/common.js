let menuEle = {
    burger: document.querySelector('#menuHamburger'),
    nav: document.querySelector('#navbar'),
    mainBody: document.querySelector('body'),
}


if(menuEle.burger){
    menuEle.burger.addEventListener('click', function(){
        menuEle.nav.classList.toggle('show');
        menuEle.mainBody.classList.toggle('menuOpen');
        menuEle.burger.children[0].children[0].classList.toggle('active');
    })
}
//header scroll fix
let prevScrollpos = window.pageYOffset;
let headerElement=document.getElementsByClassName("header")[0];
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    headerElement.classList.remove("sticky-header-hidden");
    headerElement.classList.add("sticky-header-visible");
  } else {
    headerElement.classList.add("sticky-header-hidden");
    headerElement.classList.remove("sticky-header-visible");
  }
  prevScrollpos = currentScrollPos;
}