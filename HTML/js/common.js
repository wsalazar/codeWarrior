function randomTitles() {
	if (parseInt(navigator.appVersion) >= 4) {
		var num = 6;
		var rantitle = new Array(num + 1);
		rantitle[1] = "N7:SC All Biotic, All the time.";
		rantitle[2] = "N7:SC Providing ME3 tools.";
		rantitle[3] = "N7:SC ME3 Database.";
		rantitle[4] = "N7:SC Using missles since 2012!";
		rantitle[5] = "N7:SC SS it or it didn't happen!";
		rantitle[6] = "N7:SC Designed by OrbitalSynapse!";
		//You just won the game!
		ranNumber = parseInt(num * Math.random() + 1);
		document.title = rantitle[ranNumber];
	}
}

$(document).ready(function() {
	//Randomly Load Titles from the array
	//randomTitles();
});