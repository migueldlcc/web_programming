// @author: Miguel de la Cruz Cabello
// Professor Lund
// COMS 210
// @date: 4 April 2021

function calculate() {
  weight = document.getElementById("weight").value;
  height = document.getElementById("height").value;
  result = 703 * weight / (height * height);
  document.getElementById("score").innerHTML = result.toFixed(3);

  if (result < 18) {
    document.getElementById("type").innerHTML = "Underweight";
  }
  else if (result > 18  && result < 25) {
    document.getElementById("type").innerHTML = "Normal";
  }
  else if (result > 25 && result < 30) {
    document.getElementById("type").innerHTML = "Overweight";
  }
  else if (result > 30) {
    document.getElementById("type").innerHTML = "Obese";
  }
}
