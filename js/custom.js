


/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navId)=>{
  const toggle = document.getElementById(toggleId),
  nav = document.getElementById(navId)

  if(toggle && nav){
    toggle.addEventListener('click', ()=>{
      nav.classList.toggle('show')
      toggle.classList.toggle('bx-x')
    })
  }
}
showMenu('header-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
/*Active link*/
navLink.forEach(n => n.classList.remove('active'));
this.classList.add('active');
}
navLink.forEach(n => n.addEventListener('click', linkAction));


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  distance: '60px',
  duration: 2500,
  delay: 400,
  reset: true
})

sr.reveal(`.easy-writing, .img`,{delay: 400})
sr.reveal(`.quality`,{delay: 300})
sr.reveal(`.banner-slider`,{delay: 300, origin: 'top'})

sr.reveal(`.work, .products__card, .footer__logo, .footer__content, .footer__copy`,{origin: 'top', interval: 50})
sr.reveal(`.our-feature, .discount__animate`,{origin: 'left', interval: 50})
sr.reveal(`.footer-details, .menu-item`,{origin: 'right'})
sr.reveal(`.our-service`,{origin: 'top'})
sr.reveal(`.bank-card`)



$(document).ready(function(){ 
      //slider start;
    $('.banner-slider').slick({
        autoplay: true,
        autoplaySpeed: 1800, 
        dots: true,
        arrows:false,
        prevArrow:'<i class="fas fa-chevron-left  previous-arrow"></i>',
        nextArrow:'<i class="fas fa-chevron-right  next-arrow"></i>',
        responsive: [
          {
            breakpoint: 992,
            settings: {
          
            }
          },
          {
            breakpoint: 768,
            settings: {
         
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    
        });
//slider start;


});      