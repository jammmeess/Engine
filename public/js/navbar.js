document.addEventListener('DOMContentLoaded', function() {
  let lastScrollPosition = 0;
  const navbar = document.querySelector(".navbar");
  window.addEventListener("scroll", function (e) {
    lastScrollPosition = window.scrollY;

    if (lastScrollPosition > 100)
      navbar.classList.add("navbar-custom");
    else
      navbar.classList.remove("navbar-custom");
  });
});

const navbar = document.querySelector('#NavBar');
let top = navbar.offsetTop;
function stickynavbar() {
  if (window.scrollY >= top) {    
    navbar.classList.add('sticky');
  } else {
    navbar.classList.remove('sticky');    
  }
}
window.addEventListener('scroll', stickynavbar);