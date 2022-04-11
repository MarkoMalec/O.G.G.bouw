const navToggle = document.querySelector("#navToggle");
const nav = document.querySelector("nav");
const openedMenu = document.querySelector(".menu-open");
const navLinks = document.querySelectorAll(".nav-links");
const navIcon = document.querySelector("#nav-icon");


// by clicking on #navToggle (burger menu) toggle .menu-open class that contains nav links
navToggle.addEventListener("click", () => {
  nav.classList.toggle("menu-open");
});

// jquery for toggle of .open class that is inside #nav-icon
$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});

// close the mobile menu on link click and remove .open class from burger #nav-icon 
for(let i = 0; i < navLinks.length; i++) {
	navLinks[i].addEventListener("click", () => {
		nav.classList.remove("menu-open");
		navIcon.classList.remove("open");
	});
};


