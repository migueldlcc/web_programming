// Write a JavaScript program to construct the following pattern in an
// HTML paragraph tag with and id = “drawing”, using a nested for loop.
// *
// * *
// * * *
// * * * *
// * * * * *


var x;
var y;
for (x = 1; x <= 5; x++) {
  for (y = 1; y <= x; y++) {
    document.write("*");
  }
  document.write("<br />");    
}
