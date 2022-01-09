


document.getElementById("homer").onmouseover = function() {hoverAlert()};
function hoverAlert()
{
  var img = document.getElementById("homer");
  img.height = 300;
  document.getElementById("comment").innerHTML = "Duh you are hovering";
}

document.getElementById("homer").onmouseout = function() {hoverNoAlert()};
function hoverNoAlert()
{
  var img = document.getElementById("homer");
  img.height = 150;
  document.getElementById("comment").innerHTML = "Now you are not hovering lol";
}

function changeColor(color)
{
  document.body.style.backgroundColor = color;
}
