// Mobile Navigation behavior
const hamburguerMenu = document.getElementById("hamburguer-menu");
const mobileNav = document.getElementById("nav-modal");

hamburguerMenu.addEventListener("click", () => {
  if (mobileNav.style.display = "none") {
    mobileNav.style.display = "inline";
    document.body.classList.add("modal-open");
    document.body.style.overflow = "hidden"; 
  }
});

const closeModal = document.getElementById("close-modal");

closeModal.addEventListener("click", () => {
  if (mobileNav.style.display = "inline") {
    mobileNav.style.display = "none";
    document.body.classList.remove("modal-open");
    document.body.style.overflow = "auto";
  }
});
 
 
 
//  // Mobile Navigation behavior
//   const hamburguerMenu = document.getElementById("hamburguer-menu");
//   const mobileNav = document.getElementById("nav-modal");
  
//   hamburguerMenu.addEventListener("click", () => {
//       if (mobileNav.style.display = "none") {
//           mobileNav.style.display = "inline";
//           document.body.classList.add("modal-open");
//       } 
  
//   });
  
//   const closeModal = document.getElementById("close-modal");
  
//   closeModal.addEventListener("click", () => {
      
//       if (mobileNav.style.display = "inline") {
//           mobileNav.style.display = "none";
//           document.body.classList.remove("modal-open");
//       } 
//   });