// JavaScript Document
console.assert(
	document.querySelectorAll('nav ol>li').length===2,
	'hi'
);
	


function viewFlowers() {
	var genus = document.forms["flowerForm"]["flowerGenus"].value;
	var species = document.forms["flowerForm"]["flowerSpecies"].value;
	/*TEST VARIABLE Abelmoschus esculentus*/
	if (genus == null || genus == "" || species == null || species == "") {
		alert("Please enter both genus and species");
		return false;
	}
	var url = "http://www.florida.plantatlas.usf.edu/Results.aspx?q=" + genus + "+" + species;
  	window.location.assign(url);
}

function resetForm() {
	document.getElementById("genus").value = " ";
	document.getElementById("species").value = " ";
}

function message() {
	document.getElementById("message").innerHTML = "Thanks for your input!";	
}

