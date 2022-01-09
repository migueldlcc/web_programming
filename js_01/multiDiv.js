function multiplyBy()
{
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        document.getElementById("result").innerHTML = num1 * num2;
}

function divideBy()
{
  num1 = document.getElementById("firstNumber").value;
  num2 = document.getElementById("secondNumber").value;
  if (num2 == 0) {
    document.getElementById("result").innerHTML = "Invalid division by zero";
  }
  else {
     document.getElementById("result").innerHTML = num1 / num2;
  }
}

function addition()
{
  num1 = document.getElementById("firstNumber").value;
  num2 = document.getElementById("secondNumber").value;
  sum = parseInt(num1) + parseInt(num2);
  document.getElementById("result").innerHTML = sum;
}

function subtraction()
{
  num1 = document.getElementById("firstNumber").value;
  num2 = document.getElementById("secondNumber").value;
  document.getElementById("result").innerHTML = num1 - num2;
}

function square()
{
  num1 = document.getElementById("firstNumber").value;
  num2 = document.getElementById("secondNumber").value;
  document.getElementById("square").innerHTML = Math.pow(num2, 2) + "\n";
  document.getElementById("result").innerHTML = Math.pow(num1, 2);
}
// add functions for add and subtract and square.
// print out an error message if division by zero is attempted
