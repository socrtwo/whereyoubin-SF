<?php
error_reporting(0);

/* Session start */
session_start();

include '../../config.php'; 

$thisMap = $indiaCookie;

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
$file = 'images/india_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}
if ($an == 'y') {
$an_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 871, 861, $an_color);
imagefill($im, 892, 806, $an_color);
imagefill($im, 867, 913, $an_color);
imagefill($im, 847, 925, $an_color);
imagefill($im, 840, 913, $an_color);
imagefill($im, 860, 952, $an_color);
imagefill($im, 868, 1009, $an_color);
imagefill($im, 884, 1043, $an_color);
imagefill($im, 900, 1035, $an_color);
imagefill($im, 898, 1051, $an_color);
imagefill($im, 911, 1069, $an_color);
imagefill($im, 917, 1081, $an_color);
} else if ($an == '') {
$an_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 871, 861, $an_color);
imagefill($im, 892, 806, $an_color);
imagefill($im, 867, 913, $an_color);
imagefill($im, 847, 925, $an_color);
imagefill($im, 840, 913, $an_color);
imagefill($im, 860, 952, $an_color);
imagefill($im, 868, 1009, $an_color);
imagefill($im, 884, 1043, $an_color);
imagefill($im, 900, 1035, $an_color);
imagefill($im, 898, 1051, $an_color);
imagefill($im, 911, 1069, $an_color);
imagefill($im, 917, 1081, $an_color);
} 
if ($am == 'y') {
$am_color = imagecolorallocate($im, 0, 156, 61);
imagefill($im, 844, 395, $am_color);
} else if ($am == '') {
$am_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 844, 395, $am_color);
} 
if ($ar == 'y') {
$ar_color = imagecolorallocate($im, 253, 95, 30);
imagefill($im, 954, 338, $ar_color);
} else if ($ar == '') {
$ar_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 954, 338, $ar_color);
} 
if ($as == 'y') {
$as_color = imagecolorallocate($im, 0, 156, 61);
imagefill($im, 397, 744, $as_color);
} else if ($as == '') {
$as_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 397, 744, $as_color);
} 
if ($br == 'y') {
$br_color = imagecolorallocate($im, 251, 226, 3);
imagefill($im, 616, 434, $br_color);
} else if ($br == '') {
$br_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 616, 434, $br_color);
} 
if ($ch == 'y') {
$ch_color = imagecolorallocate($im, 250, 5, 6);
imagefill($im, 328, 249, $ch_color);
} else if ($ch == '') {
$ch_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 328, 249, $ch_color);
} 
if ($cg == 'y') {
$cg_color = imagecolorallocate($im, 253, 95, 30);
imagefill($im, 498, 561, $cg_color);
} else if ($cg == '') {
$cg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 498, 561, $cg_color);
} 
if ($dn == 'y') {
$dn_color = imagecolorallocate($im, 0, 102, 0);
imagefill($im, 196, 609, $dn_color);
} else if ($dn == '') {
$dn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 196, 609, $dn_color);
} 
if ($dd == 'y') {
$dd_color = imagecolorallocate($im, 57, 152, 16);
imagefill($im, 189, 598, $dd_color);
} else if ($dd == '') {
$dd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 189, 598, $dd_color);
} 
if ($dl == 'y') {
$dl_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 340, 316, $dl_color);
} else if ($dl == '') {
$dl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 340, 316, $dl_color);
} 
if ($ga == 'y') {
$ga_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 215, 780, $ga_color);
} else if ($ga == '') {
$ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 215, 780, $ga_color);
} 
if ($gj == 'y') {
$gj_color = imagecolorallocate($im, 220, 0, 0);
imagefill($im, 159, 499, $gj_color);
} else if ($gj == '') {
$gj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 159, 499, $gj_color);
} 
if ($hr == 'y') {
$hr_color = imagecolorallocate($im, 251, 226, 3);
imagefill($im, 318, 297, $hr_color);
} else if ($hr == '') {
$hr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 318, 297, $hr_color);
} 
if ($hp == 'y') {
$hp_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 342, 205, $hp_color);
} else if ($hp == '') {
$hp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 342, 205, $hp_color);
} 
if ($jk == 'y') {
$jk_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 311, 129, $jk_color);
} else if ($jk == '') {
$jk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 311, 129, $jk_color);
} 
if ($jh == 'y') {
$jh_color = imagecolorallocate($im, 57, 152, 16);
imagefill($im, 602, 504, $jh_color);
} else if ($jh == '') {
$jh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 602, 504, $jh_color);
} 
if ($ka == 'y') {
$ka_color = imagecolorallocate($im, 220, 0, 0);
imagefill($im, 270, 824, $ka_color);
} else if ($ka == '') {
$ka_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 270, 824, $ka_color);
} 
if ($kl == 'y') {
$kl_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 288, 964, $kl_color);
} else if ($kl == '') {
$kl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 288, 964, $kl_color);
} 
if ($ld == 'y') {
$ld_color = imagecolorallocate($im, 0, 156, 61);
imagefill($im, 129, 878, $ld_color);
imagefill($im, 131, 880, $ld_color);
imagefill($im, 126, 895, $ld_color);
imagefill($im, 127, 897, $ld_color);
imagefill($im, 119, 905, $ld_color);
imagefill($im, 138, 904, $ld_color);
imagefill($im, 137, 905, $ld_color);
imagefill($im, 139, 905, $ld_color);
imagefill($im, 138, 906, $ld_color);
imagefill($im, 159, 903, $ld_color);
imagefill($im, 169, 911, $ld_color);
imagefill($im, 158, 918, $ld_color);
imagefill($im, 157, 919, $ld_color);
imagefill($im, 159, 919, $ld_color);
imagefill($im, 135, 920, $ld_color);
imagefill($im, 142, 928, $ld_color);
imagefill($im, 137, 933, $ld_color);
imagefill($im, 150, 933, $ld_color);
imagefill($im, 150, 946, $ld_color);
imagefill($im, 152, 946, $ld_color);
imagefill($im, 136, 958, $ld_color);
imagefill($im, 134, 960, $ld_color);
imagefill($im, 160, 1026, $ld_color);
imagefill($im, 159, 1028, $ld_color);
imagefill($im, 186, 1038, $ld_color);
imagefill($im, 186, 963, $ld_color);
imagefill($im, 187, 962, $ld_color);
imagefill($im, 187, 964, $ld_color);
} else if ($ld == '') {
$ld_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 129, 878, $ld_color);
imagefill($im, 131, 880, $ld_color);
imagefill($im, 126, 895, $ld_color);
imagefill($im, 127, 897, $ld_color);
imagefill($im, 119, 905, $ld_color);
imagefill($im, 138, 904, $ld_color);
imagefill($im, 137, 905, $ld_color);
imagefill($im, 139, 905, $ld_color);
imagefill($im, 138, 906, $ld_color);
imagefill($im, 159, 903, $ld_color);
imagefill($im, 169, 911, $ld_color);
imagefill($im, 158, 918, $ld_color);
imagefill($im, 157, 919, $ld_color);
imagefill($im, 159, 919, $ld_color);
imagefill($im, 135, 920, $ld_color);
imagefill($im, 142, 928, $ld_color);
imagefill($im, 137, 933, $ld_color);
imagefill($im, 150, 933, $ld_color);
imagefill($im, 150, 946, $ld_color);
imagefill($im, 152, 946, $ld_color);
imagefill($im, 136, 958, $ld_color);
imagefill($im, 134, 960, $ld_color);
imagefill($im, 160, 1026, $ld_color);
imagefill($im, 159, 1028, $ld_color);
imagefill($im, 186, 1038, $ld_color);
imagefill($im, 186, 963, $ld_color);
imagefill($im, 187, 962, $ld_color);
imagefill($im, 187, 964, $ld_color);
} 
if ($mp == 'y') {
$mp_color = imagecolorallocate($im, 0, 156, 61);
imagefill($im, 373, 512, $mp_color);
} else if ($mp == '') {
$mp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 373, 512, $mp_color);
} 
if ($mh == 'y') {
$mh_color = imagecolorallocate($im, 251, 226, 3);
imagefill($im, 265, 640, $mh_color);
} else if ($mh == '') {
$mh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 265, 640, $mh_color);
} 
if ($mn == 'y') {
$mn_color = imagecolorallocate($im, 251, 226, 3);
imagefill($im, 879, 452, $mn_color);
} else if ($mn == '') {
$mn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 879, 452, $mn_color);
} 
if ($ml == 'y') {
$ml_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 789, 430, $ml_color);
} else if ($ml == '') {
$ml_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 789, 430, $ml_color);
} 
if ($mz == 'y') {
$mz_color = imagecolorallocate($im, 254, 177, 18);
imagefill($im, 848, 499, $mz_color);
} else if ($mz == '') {
$mz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 848, 499, $mz_color);
} 
if ($nl == 'y') {
$nl_color = imagecolorallocate($im, 205, 31, 38);
imagefill($im, 897, 402, $nl_color);
} else if ($nl == '') {
$nl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 897, 402, $nl_color);
} 
if ($or == 'y') {
$or_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 576, 603, $or_color);
} else if ($or == '') {
$or_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 576, 603, $or_color);
} 
if ($py == 'y') {
$py_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 406, 912, $py_color);
imagefill($im, 408, 945, $py_color);
imagefill($im, 258, 911, $py_color);
} else if ($py == '') {
$py_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 406, 912, $py_color);
imagefill($im, 408, 945, $py_color);
imagefill($im, 258, 911, $py_color);
} 
if ($pb == 'y') {
$pb_color = imagecolorallocate($im, 253, 95, 30);
imagefill($im, 284, 240, $pb_color);
} else if ($pb == '') {
$pb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 284, 240, $pb_color);
} 
if ($rj == 'y') {
$rj_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 233, 379, $rj_color);
} else if ($rj == '') {
$rj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 233, 379, $rj_color);
} 
if ($sk == 'y') {
$sk_color = imagecolorallocate($im, 0, 57, 195);
imagefill($im, 700, 358, $sk_color);
} else if ($sk == '') {
$sk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 700, 358, $sk_color);
} 
if ($tn == 'y') {
$tn_color = imagecolorallocate($im, 254, 177, 18);
imagefill($im, 358, 939, $tn_color);
} else if ($tn == '') {
$tn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 358, 939, $tn_color);
} 
if ($tr == 'y') {
$tr_color = imagecolorallocate($im, 41, 67, 210);
imagefill($im, 809, 488, $tr_color);
} else if ($tr == '') {
$tr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 809, 488, $tr_color);
} 
if ($up == 'y') {
$up_color = imagecolorallocate($im, 250, 5, 6);
imagefill($im, 453, 392, $up_color);
} else if ($up == '') {
$up_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 453, 392, $up_color);
} 
if ($uk == 'y') {
$uk_color = imagecolorallocate($im, 57, 152, 16);
imagefill($im, 404, 262, $uk_color);
} else if ($uk == '') {
$uk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 404, 262, $uk_color);
} 
if ($wb == 'y') {
$wb_color = imagecolorallocate($im, 220, 0, 0);
imagefill($im, 686, 513, $wb_color);
imagefill($im, 700, 559, $wb_color);
imagefill($im, 704, 560, $wb_color);
imagefill($im, 710, 558, $wb_color);
} else if ($wb == '') {
$wb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 686, 513, $wb_color);
imagefill($im, 700, 559, $wb_color);
imagefill($im, 704, 560, $wb_color);
imagefill($im, 710, 558, $wb_color);
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