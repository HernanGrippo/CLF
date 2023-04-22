var url = window.location.href.split("/");
var navLinks = document.getElementsByClassName("nav-link");
var currentPage = url[url.length - 2];
for(i=0; i < navLinks.length; i++){
  var lb = navLinks[i].href.split("/");
  if(lb[lb.length-2] == currentPage) {
    navLinks[i].classList.add("current");
  }
}