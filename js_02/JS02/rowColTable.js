function insert_Row()
{
  rowCol1Data = document.getElementById("firstRowItem").value;
  rowCol2Data = document.getElementById("secondRowItem").value;
  let theRow = document.getElementById("myTable").insertRow(0);
  theRow.insertCell(0).innerHTML = rowCol1Data;
  theRow.insertCell(1).innerHTML = rowCol2Data;
}
