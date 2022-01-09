// function to find the area of a triangle using
// Heron's formula named after Hero of Alexandria
// The area of a triangel whose sides have lengths
// a, b, and c is A = sqrt(s(s-a)(s-b)(s-c))
// where s is the semiperimeter of the triangle
// s = a+b+c / 2

function areaTri()
{
  var a, b, c;
  a = 5;
  b = 4;
  c = 6;
  var s = (a + b + c) / 2;
  var area = Math.sqrt(s * (s-a) * (s-b) *(s-c));

  document.getElementById("area_triangle").innerHTML = area;

}
