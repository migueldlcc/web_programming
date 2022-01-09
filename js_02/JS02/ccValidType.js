
function is_creditCard(str)
{
  var regexp = /^(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(6(?:011|5[0-9]{2})[0-9]{12})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11})|((?:2131|1800|35[0-9]{3})[0-9]{11}))$/;
  var americanExpress = /^(?:(3[47][0-9]{13}))$/;
  var visa = /^(?:(4[0-9]{12}(?:[0-9]{3})?))$/;
  var masterCard = /^(?:(5[1-5][0-9]{14}))$/;
  var discover = /^(?:(6(?:011|5[0-9][0-9])[0-9]{12}))$/;
  var dinersClub = /^(?:(3(?:0[0-5]|[68][0-9])[0-9]{11}))$/;
  var jcb = /^(?:((?:2131|1800|35[0-9]{3})[0-9]{11}))$/;


  if (str.value.match(americanExpress)) // The match method searches a string for a match against a regular expression, and returns the match. I found this method in W3S. https://www.w3schools.com/jsref/jsref_match.asp
  {
    console.log("American Express");
    document.getElementById("validated").innerHTML = "American Express is a valid cc";
  }

  else if (str.value.match(visa))
  {
    console.log("Visa");
    document.getElementById("validated").innerHTML = "Visa is a valid cc";
  }

  else if (str.value.match(masterCard))
  {
    console.log("MasterCard");
    document.getElementById("validated").innerHTML = "MasterCard is a valid cc";
  }

  else if (str.value.match(discover))
  {
    console.log("Discover");
    document.getElementById("validated").innerHTML = "Discover is a valid cc";
  }

  else if (str.value.match(dinersClub))
  {
    console.log("Diners Club");
    document.getElementById("validated").innerHTML = "Diners Club is a valid cc";
  }

  else if (str.value.match(jcb))
  {
    console.log("JCB");
    document.getElementById("validated").innerHTML = "JCB is a valid cc";
  }

  else {
    console.log("false");
    document.getElementById("validated").innerHTML = "Invalid cc";
  }
}
