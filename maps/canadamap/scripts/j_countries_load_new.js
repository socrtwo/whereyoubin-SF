/* OnLoad function */
function JdOnLoad(){
	document.getElementById("canada_map").src = "j_countries_load.php";
	document.getElementById("save_map").action = "j_save.php";
	}
	
/* Maps function */
function onBoxClicked2(frame, country) {
	if(document.getElementById(country).checked == false) { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)+1;
		if(newcount == 0) { newcount = newcount+' Provinces'; }
		else if(newcount > 1) { newcount = newcount+' Provinces'; }
		else { newcount = newcount+' Province'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById(country).checked = true; 
		document.getElementById("canada_map").src = "j_countries_load.php?action=add&country="+country;
		}
	else { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)-1;
		if(newcount == 0) { newcount = newcount+' Provinces'; }
		else if(newcount > 1) { newcount = newcount+' Provinces'; }
		else { newcount = newcount+' Province'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById(country).checked = false; 
		document.getElementById("canada_map").src = "j_countries_load.php?action=remove&country="+country;
		}
	
	document.getElementById("save_map").action = "j_save.php";

	}

/* Checkboxes function */
function onBoxClicked(frame, country) {
	if(document.getElementById(country).checked == true) { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)+1;
		if(newcount == 0) { newcount = newcount+' Provinces'; }
		else if(newcount > 1) { newcount = newcount+' Provinces'; }
		else { newcount = newcount+' Province'; }
		document.getElementById('Count').innerHTML = newcount; 
		document.getElementById("canada_map").src = "j_countries_load.php?action=add&country="+country;
		}
	else { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)-1;
		if(newcount == 0) { newcount = newcount+' Provinces'; }
		else if(newcount > 1) { newcount = newcount+' Provinces'; }
		else { newcount = newcount+' Province'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById("canada_map").src = "j_countries_load.php?action=remove&country="+country;
		}
	
	document.getElementById("save_map").action = "j_save.php";


	}
	

