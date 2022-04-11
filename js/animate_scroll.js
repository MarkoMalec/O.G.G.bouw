
function reveal() {
    var reveals = document.querySelectorAll(".reveal, .reveal2, .reveal3");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = -10;
      
      if (elementTop < windowHeight + elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  console.log(window.innerHeight)
  
  window.addEventListener("scroll", reveal);


  
  