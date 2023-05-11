// buat mode
var icon = document.getElementById("mode");
icon.onclick = function () {
  document.body.classList.toggle("dark-thema");
  if (document.body.classList.contains("dark-thema")) {
    icon.src = "images/sun.png";
  } else {
    icon.src = "images/moon.png";
  }
};

function github() {
  window.location.href = "https://github.com/anjastabuni";
}
