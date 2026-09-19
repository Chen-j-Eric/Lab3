const colorSelector = document.getElementById("color");
const text = document.getElementById("text");

colorSelector.addEventListener("change", function() {
  text.style.color = colorSelector.value;
});

const widthSelector = document.getElementById("width");
const myText = document.getElementById("myText");

widthSelector.addEventListener("change", function() {
  myText.style.width = widthSelector.value;
});
