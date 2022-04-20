document.addEventListener("DOMContentLoaded", function() {
    // var cardContent = document.querySelectorAll("pheader-section-card p");
    var card = document.querySelector(".pheader-section-card");
    
    card.addEventListener("click", function() {
        card.ClassList.toggle("pheader-section-card-open");
    })
})