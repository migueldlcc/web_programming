// Write a JavaScript program to convert temperatures to and from Celsius, Fahrenheit.
// [Formula: C/5 = (F-32)/9]
// (where C = temperature in Celsius and F = temperature in Fahrenheit)
//
// Example 1: 60°C is 140 °F
// Example 2: 45°F is 7.2°C

function convertToFahrenheit() {
  celsius = document.getElementById("secondRowItem").value;
  fahrenheit = (celsius * 9 / 5) + 32;
  message = celsius + "ºC is " + fahrenheit + "ºF";
  document.getElementById("result").innerHTML = message;
}

function convertToCelsius() {
  fahrenheit = document.getElementById("firstRowItem").value;
  celsius = (fahrenheit - 32) * 5 / 9;
  message = fahrenheit + "ºF is " + celsius + "ºC";
  document.getElementById("solution").innerHTML = message;
}
