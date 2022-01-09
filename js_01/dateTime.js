// Script for date and time.

function dateFunc() {
  var dateTime = new Date();
  var dd = dateTime.getDate();
  var mm = dateTime.getMonth() + 1;
  var yyyy = dateTime.getFullYear();
  if (dd < 10) {
    dd = '0' + dd;
  }
  if (mm < 10) {
    mm = '0' + mm;
  }
  var currDate = dd + '-' + mm + '-' + yyyy + ' ---- ' + dateTime.getHours() + ':' + dateTime.getMinutes();
  document.getElementById("date_time").innerHTML = currDate;
  // document.getElementById("date_time").innerHTML = "Test";
}
// rearrange for dd-mm-yyyy or dd/mm/yyyy
// add time in this format - hours and minutes
