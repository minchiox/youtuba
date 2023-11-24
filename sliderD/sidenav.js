// Get the side navigation and the button that toggles it
var nav = document.getElementById("mySidenav");
var toggleBtn = document.getElementById("toggle-nav");

// When the button is clicked, toggle the class "pushed" on the main content area
toggleBtn.addEventListener("click", function() {
  document.getElementById("main").classList.toggle("pushed");
});

// When the user clicks anywhere outside of the side navigation, close it
window.addEventListener("click", function(event) {
  if (event.target == nav) {
    nav.style.width = "0";
  }
});
