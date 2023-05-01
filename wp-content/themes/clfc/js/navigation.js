// When the navbar-toggler-icon appears, we need to hide the desktop #navbarNav

// if someone clicks on navbar-toggler-icon, then we need to display the modal with the new navigation

const hamburguerMenu = document.getElementById("hamburguer-menu");
const mobileNav = document.getElementById("nav-modal");

hamburguerMenu.addEventListener("click", () => {
    if (mobileNav.style.display = "none") {
        mobileNav.style.display = "inline";
    } 
});

const closeModal = document.getElementById("close-modal");

closeModal.addEventListener("click", () => {
    
    if (mobileNav.style.display = "inline") {
        mobileNav.style.display = "none";
    } 
});


