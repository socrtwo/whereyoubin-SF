/* OnLoad function */
function JdOnLoad(){
	document.getElementById("us_map").src = "j_countries_load.php";
	document.getElementById("save_map").action = "j_save.php";
	}
	
/* Maps function */
function onBoxClicked3(frame, country) {
	if(document.getElementById(country).checked == false) { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)+1;
		if(newcount == 0) { newcount = newcount+' states'; }
		else if(newcount > 1) { newcount = newcount+' states'; }
		else { newcount = newcount+' state'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById(country).checked = true; 
		document.getElementById("us_map").src = "j_countries_load.php?action=add&country="+country;
		}
	else { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)-1;
		if(newcount == 0) { newcount = newcount+' states'; }
		else if(newcount > 1) { newcount = newcount+' states'; }
		else { newcount = newcount+' state'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById(country).checked = false; 
		document.getElementById("us_map").src = "j_countries_load.php?action=remove&country="+country;
		}
	
	document.getElementById("save_map").action = "j_save.php";

	}

/* Checkboxes function */
function onBoxClicked4(frame, country) {
	if(document.getElementById(country).checked == true) { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)+1;
		if(newcount == 0) { newcount = newcount+' states'; }
		else if(newcount > 1) { newcount = newcount+' states'; }
		else { newcount = newcount+' state'; }
		document.getElementById('Count').innerHTML = newcount; 
		document.getElementById("us_map").src = "j_countries_load.php?action=add&country="+country;
		}
	else { 
		var newcount = parseInt(document.getElementById('Count').innerHTML)-1;
		if(newcount == 0) { newcount = newcount+' states'; }
		else if(newcount > 1) { newcount = newcount+' states'; }
		else { newcount = newcount+' state'; }
		document.getElementById('Count').innerHTML = newcount;
		document.getElementById("us_map").src = "j_countries_load.php?action=remove&country="+country;
		}
	
	document.getElementById("save_map").action = "j_save.php";


	}