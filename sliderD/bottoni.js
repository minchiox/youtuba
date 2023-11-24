
// Get the container element
  var btnContainer = document.getElementById("button-container1");

// Get all buttons with class="btn" inside the container
  var btns = btnContainer.getElementsByClassName("slider-button");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("activeB");
    current[0].className = current[0].className.replace(" activeB", "");
    this.className += " activeB";
  });
}
