<?php
error_reporting(0);

/* Session start */
session_start();

include '../../config.php'; 

$thisMap = $canadaCookie;

/* If there is already a session */
if($_SESSION[$thisMap] != null) {
	/* If action = remove, we remove the country */
	if($_GET['action'] == 'remove') { 
		$countries = $_SESSION[$thisMap]; $pattern = $_GET['country'].'#'; $replace = "";
		$countries = str_replace($pattern, $replace, $countries); /*echo $countries;*/
		$_SESSION[$thisMap] = $countries;
		$countries = explode('#',$countries);	
/*		print_r($countries);*/
		}
	/* If action = add, we add the country */
	elseif($_GET['action'] == 'add') { 
		$countries = $_SESSION[$thisMap];
		$countries = $countries.$_GET['country'].'#';
		$_SESSION[$thisMap] = $countries;
		$countries = explode('#',$countries);
		
		}
	else $countries = explode('#',$_SESSION[$thisMap]);
	}
/* If there is no session */
else { 
	/* If there is an action from the user */
	if($_GET['action'] == 'add' && $_GET['country']) {
		/* We had the new country to the session */
		$_SESSION[$thisMap] = $_GET['country'].'#';
		$countries = Array($_GET['country']);

		}
	/* If there is no action from the user */
	else {
		/* We start an empty session */
		$_SESSION[$thisMap] = '';

		}
	}
/* We assign 'y' to the countries found in sessions */
foreach($countries AS $key) $$key='y';


$newImageName = 'images/self.png';
$im = imagecreatefrompng($newImageName);
if(!$im)
    {
$file = 'images/canada_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}
if ($ab == 'y') {
$ab_color = imagecolorallocate($im, 220, 21, 8);
imagefill($im, 217, 658, $ab_color);
} else if ($ab == '') {
$ab_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 217, 658, $ab_color);
}
if ($bc == 'y') {
$bc_color = imagecolorallocate($im, 255, 228, 22);
imagefill($im, 52, 708, $bc_color);
imagefill($im, 105, 629, $bc_color);
imagefill($im, 17, 599, $bc_color);
} else if ($bc == '') {
$bc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 52, 708, $bc_color);
imagefill($im, 105, 629, $bc_color);
imagefill($im, 17, 599, $bc_color);
}
if ($mb == 'y') {
$mb_color = imagecolorallocate($im, 208, 115, 39);
imagefill($im, 418, 693, $mb_color);
} else if ($mb == '') {
$mb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 418, 693, $mb_color);
}
if ($nb == 'y') {
$nb_color = imagecolorallocate($im, 255, 210, 19);
imagefill($im, 826, 822, $nb_color);
} else if ($nb == '') {
$nb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 826, 822, $nb_color);
}
if ($nl == 'y') {
$nl_color = imagecolorallocate($im, 73, 124, 83);
imagefill($im, 830, 664, $nl_color);
imagefill($im, 934, 737, $nl_color);
} else if ($nl == '') {
$nl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 830, 664, $nl_color);
imagefill($im, 934, 737, $nl_color);
}
if ($ns == 'y') {
$ns_color = imagecolorallocate($im, 204, 4, 44);
imagefill($im, 872, 838, $ns_color);
imagefill($im, 901, 812, $ns_color);
} else if ($ns == '') {
$ns_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 872, 838, $ns_color);
imagefill($im, 901, 812, $ns_color);
}
if ($nt == 'y') {
$nt_color = imagecolorallocate($im, 0, 76, 157);
imagefill($im, 236, 458, $nt_color);
imagefill($im, 340, 163, $nt_color);
imagefill($im, 356, 204, $nt_color);
imagefill($im, 333, 302, $nt_color);
imagefill($im, 288, 256, $nt_color);
imagefill($im, 352, 209, $nt_color);
imagefill($im, 329, 196, $nt_color);
imagefill($im, 327, 175, $nt_color);
imagefill($im, 379, 159, $nt_color);
imagefill($im, 387, 138, $nt_color);
imagefill($im, 359, 283, $nt_color);
} else if ($nt == '') {
$nt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 236, 458, $nt_color);
imagefill($im, 340, 163, $nt_color);
imagefill($im, 356, 204, $nt_color);
imagefill($im, 333, 302, $nt_color);
imagefill($im, 288, 256, $nt_color);
imagefill($im, 352, 209, $nt_color);
imagefill($im, 329, 196, $nt_color);
imagefill($im, 327, 175, $nt_color);
imagefill($im, 379, 159, $nt_color);
imagefill($im, 387, 138, $nt_color);
imagefill($im, 359, 283, $nt_color);
}
if ($nu == 'y') {
$nu_color = imagecolorallocate($im, 254, 20, 23);
imagefill($im, 429, 475, $nu_color);
imagefill($im, 570, 535, $nu_color);
imagefill($im, 602, 542, $nu_color);
imagefill($im, 618, 514, $nu_color);
imagefill($im, 552, 487, $nu_color);
imagefill($im, 626, 505, $nu_color);
imagefill($im, 636, 406, $nu_color);
imagefill($im, 620, 409, $nu_color);
imagefill($im, 593, 380, $nu_color);
imagefill($im, 595, 333, $nu_color);
imagefill($im, 437, 387, $nu_color);
imagefill($im, 369, 352, $nu_color);
imagefill($im, 476, 287, $nu_color);
imagefill($im, 440, 306, $nu_color);
imagefill($im, 410, 233, $nu_color);
imagefill($im, 469, 239, $nu_color);
imagefill($im, 513, 242, $nu_color);
imagefill($im, 392, 221, $nu_color);
imagefill($im, 442, 221, $nu_color);
imagefill($im, 547, 136, $nu_color);
imagefill($im, 491, 117, $nu_color);
imagefill($im, 466, 157, $nu_color);
imagefill($im, 414, 178, $nu_color);
imagefill($im, 436, 138, $nu_color);
imagefill($im, 396, 142, $nu_color);
imagefill($im, 453, 108, $nu_color);
imagefill($im, 581, 285, $nu_color);
imagefill($im, 481, 285, $nu_color);
imagefill($im, 472, 176, $nu_color);
imagefill($im, 609, 735, $nu_color);
} else if ($nu == '') {
$nu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 429, 475, $nu_color);
imagefill($im, 570, 535, $nu_color);
imagefill($im, 602, 542, $nu_color);
imagefill($im, 618, 514, $nu_color);
imagefill($im, 552, 487, $nu_color);
imagefill($im, 626, 505, $nu_color);
imagefill($im, 636, 406, $nu_color);
imagefill($im, 620, 409, $nu_color);
imagefill($im, 593, 380, $nu_color);
imagefill($im, 595, 333, $nu_color);
imagefill($im, 437, 387, $nu_color);
imagefill($im, 369, 352, $nu_color);
imagefill($im, 476, 287, $nu_color);
imagefill($im, 440, 306, $nu_color);
imagefill($im, 410, 233, $nu_color);
imagefill($im, 469, 239, $nu_color);
imagefill($im, 513, 242, $nu_color);
imagefill($im, 392, 221, $nu_color);
imagefill($im, 442, 221, $nu_color);
imagefill($im, 547, 136, $nu_color);
imagefill($im, 491, 117, $nu_color);
imagefill($im, 466, 157, $nu_color);
imagefill($im, 414, 178, $nu_color);
imagefill($im, 436, 138, $nu_color);
imagefill($im, 396, 142, $nu_color);
imagefill($im, 453, 108, $nu_color);
imagefill($im, 581, 285, $nu_color);
imagefill($im, 481, 285, $nu_color);
imagefill($im, 472, 176, $nu_color);
imagefill($im, 609, 735, $nu_color);
}
if ($on == 'y') {
$on_color = imagecolorallocate($im, 206, 8, 36);
imagefill($im, 560, 787, $on_color);
} else if ($on == '') {
$on_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 560, 787, $on_color);
}
if ($pe == 'y') {
$pe_color = imagecolorallocate($im, 4, 147, 141);
imagefill($im, 870, 816, $pe_color);
} else if ($pe == '') {
$pe_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 870, 816, $pe_color);
}
if ($qc == 'y') {
$qc_color = imagecolorallocate($im, 0, 26, 147);
imagefill($im, 726, 735, $qc_color);
imagefill($im, 849, 755, $qc_color);
} else if ($qc == '') {
$qc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 726, 735, $qc_color);
imagefill($im, 849, 755, $qc_color);
}
if ($sk == 'y') {
$sk_color = imagecolorallocate($im, 0, 100, 25);
imagefill($im, 314, 697, $sk_color);
} else if ($sk == '') {
$sk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 314, 697, $sk_color);
}
if ($yt == 'y') {
$yt_color = imagecolorallocate($im, 18, 1117, 0);
imagefill($im, 90, 390, $yt_color);
} else if ($yt == '') {
$yt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 90, 390, $yt_color);
}
header("Content-type: image/png");
function imageWriteAttempt(){    
if(!(ImagePNG($im, $newImageName))){
        throw new Exception();
    }
    else return ImagePNG($im, $newImageName);
}
try {
    ImagePNG($im, $newImageName);
} catch (Exception $e) {
    usleep(200000);
	ImagePNG($im, $newImageName);
}
ImagePNG($im);
$im = imagecreatefrompng($newImageName);
ImagePNG('images/self.png');
ImageDestroy($im);

?>