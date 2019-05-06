var myVar;

function myFunction() {
	document.getElementById("loader").style.visibility = "visible";
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.visibility = "visible";
}