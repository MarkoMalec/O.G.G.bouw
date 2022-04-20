    window.onscroll = function() {

        const nav = document.querySelector(".nav-container");
        const navLinks = document.querySelectorAll(".nav-links");
        const logo = document.getElementById("logo-image");
        const burgerDiv = document.getElementById("nav-icon")
        const burgerSpans = burgerDiv.getElementsByTagName("span");

    // if whole document is scrolled to 10px from top =>
        if(document.documentElement.scrollTop > 10) {
            logo.setAttribute("src", "img/logo-accent.svg");
            nav.style.backgroundColor = "rgba(255, 255, 255, 0.99)";
            nav.classList.add("sticky");

            for(i = 0; i < navLinks.length; i++) {
                navLinks[i].style.color = "#000";
            }
            for(i = 0; i < burgerSpans.length; i++) {
                burgerSpans[i].style.backgroundColor = "#000";
            }
        } else {
            logo.setAttribute("src", "img/logo-white.svg");
            nav.style.backgroundColor = "rgba(0, 0, 0, 0)";
            nav.classList.remove("sticky");

            for(i = 0; i < navLinks.length; i++) {
                navLinks[i].style.color = "#fff";
            }
            for(i = 0; i < burgerSpans.length; i++) {
                burgerSpans[i].style.backgroundColor = "#fff";
            }
        }
    }

