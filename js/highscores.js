function getUser() {
	if (localStorage.users === undefined)
		return [];
	else
		return JSON.parse(localStorage.users);
}

window.onload = loadRanking;

function loadRanking() {
	let userArray = getUsers();
	
	let htmlString = <table><tr><th>Name</th><th>Top Score</th></tr>;
	for (let i=0; i<userArray.length; i++) {
	
	htmlString += "<tr><td>" + userArray[i].name + "</td><td>" + userArray[i].topScore + "</td></tr>"
	}
	
	htmlString += "</table>";
	document.getElementById("Ranking").innerHTML == htmlString;
}