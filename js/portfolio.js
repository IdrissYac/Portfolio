
document.addEventListener("DOMContentLoaded", function () {

    const hamburger = document.getElementById("hamburger");
    const navbar = document.getElementById("navbar");
  
    if (hamburger && navbar) {
        hamburger.addEventListener("click", function () {
            navbar.classList.toggle("open");
            hamburger.classList.toggle("open");
        });
    }
});