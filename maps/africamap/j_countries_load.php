<?php
error_reporting(0);

/* Session start */
session_start();

include '../../config.php'; 

$thisMap = $africaCookie;

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
    {$file = 'images/africa_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}
if ($ao == 'y') {
$ao_color = imagecolorallocate($im, 228, 197, 19);
imagefill($im, 512, 691, $ao_color);
imagefill($im, 454, 590, $ao_color);
} else if ($ao == '') {
$ao_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 512, 691, $ao_color);
imagefill($im, 454, 590, $ao_color);
} 
if ($bf == 'y') {
$bf_color = imagecolorallocate($im, 12, 28, 142);
imagefill($im, 287, 344, $bf_color);
} else if ($bf == '') {
$bf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 287, 344, $bf_color);
} 
if ($bj == 'y') {
$bj_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 331, 381, $bj_color);
} else if ($bj == '') {
$bj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 331, 381, $bj_color);
} 
if ($bi == 'y') {
$bi_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 667, 562, $bi_color);
} else if ($bi == '') {
$bi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 667, 562, $bi_color);
} 
if ($bw == 'y') {
$bw_color = imagecolorallocate($im, 117, 170, 219);
imagefill($im, 584, 822, $bw_color);
} else if ($bw == '') {
$bw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 584, 822, $bw_color);
} 
if ($ca == 'y') {
$ca_color = imagecolorallocate($im, 255, 204, 0);
imagefill($im, 96, 133, $ca_color);
imagefill($im, 98, 120, $ca_color);
imagefill($im, 105, 128, $ca_color);
imagefill($im, 114, 126, $ca_color);
imagefill($im, 125, 129, $ca_color);
imagefill($im, 143, 126, $ca_color);
imagefill($im, 149, 117, $ca_color);
} else if ($ca == '') {
$ca_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 96, 133, $ca_color);
imagefill($im, 98, 120, $ca_color);
imagefill($im, 105, 128, $ca_color);
imagefill($im, 114, 126, $ca_color);
imagefill($im, 125, 129, $ca_color);
imagefill($im, 143, 126, $ca_color);
imagefill($im, 149, 117, $ca_color);
} 
if ($cf == 'y') {
$cf_color = imagecolorallocate($im, 255, 206, 0);
imagefill($im, 551, 422, $cf_color);
} else if ($cf == '') {
$cf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 551, 422, $cf_color);
} 
if ($ci == 'y') {
$ci_color = imagecolorallocate($im, 247, 127, 31);
imagefill($im, 235, 415, $ci_color);
} else if ($ci == '') {
$ci_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 235, 415, $ci_color);
} 
if ($cd == 'y') {
$cd_color = imagecolorallocate($im, 208, 30, 31);
imagefill($im, 588, 549, $cd_color);
} else if ($cd == '') {
$cd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 588, 549, $cd_color);
} 
if ($cg == 'y') {
$cg_color = imagecolorallocate($im, 0, 149, 67);
imagefill($im, 492, 527, $cg_color);
} else if ($cg == '') {
$cg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 492, 527, $cg_color);
} 
if ($cu == 'y') {
$cu_color = imagecolorallocate($im, 189, 165, 47);
imagefill($im, 252, 24, $cu_color);
} else if ($cu == '') {
$cu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 252, 24, $cu_color);
} 
if ($cm == 'y') {
$cm_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 457, 443, $cm_color);
} else if ($cm == '') {
$cm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 457, 443, $cm_color);
} 
if ($cv == 'y') {
$cv_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 2, 312, $cv_color);
imagefill($im, 11, 311, $cv_color);
imagefill($im, 20, 309, $cv_color);
imagefill($im, 26, 306, $cv_color);
imagefill($im, 29, 296, $cv_color);
imagefill($im, 29, 289, $cv_color);
imagefill($im, 18, 287, $cv_color);
imagefill($im, 16, 286, $cv_color);
imagefill($im, 4, 282, $cv_color);
} else if ($cv == '') {
$cv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 2, 312, $cv_color);
imagefill($im, 11, 311, $cv_color);
imagefill($im, 20, 309, $cv_color);
imagefill($im, 26, 306, $cv_color);
imagefill($im, 29, 296, $cv_color);
imagefill($im, 29, 289, $cv_color);
imagefill($im, 18, 287, $cv_color);
imagefill($im, 16, 286, $cv_color);
imagefill($im, 4, 282, $cv_color);
} 
if ($dj == 'y') {
$dj_color = imagecolorallocate($im, 18, 173, 43);
imagefill($im, 814, 358, $dj_color);
} else if ($dj == '') {
$dj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 814, 358, $dj_color);
} 
if ($dz == 'y') {
$dz_color = imagecolorallocate($im, 209, 16, 52);
imagefill($im, 336, 133, $dz_color);
} else if ($dz == '') {
$dz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 336, 133, $dz_color);
} 
if ($eg == 'y') {
$eg_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 650, 159, $eg_color);
} else if ($eg == '') {
$eg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 650, 159, $eg_color);
} 
if ($eh == 'y') {
$eh_color = imagecolorallocate($im, 244, 226, 186);
imagefill($im, 143, 176, $eh_color);
} else if ($eh == '') {
$eh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 143, 176, $eh_color);
} 
if ($er == 'y') {
$er_color = imagecolorallocate($im, 254, 199, 37);
imagefill($im, 761, 300, $er_color);
} else if ($er == '') {
$er_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 761, 300, $er_color);
} 
if ($et == 'y') {
$et_color = imagecolorallocate($im, 27, 76, 167);
imagefill($im, 779, 406, $et_color);
} else if ($et == '') {
$et_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 779, 406, $et_color);
} 
if ($ga == 'y') {
$ga_color = imagecolorallocate($im, 58, 117, 196);
imagefill($im, 443, 525, $ga_color);
} else if ($ga == '') {
$ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 443, 525, $ga_color);
} 
if ($gh == 'y') {
$gh_color = imagecolorallocate($im, 0, 107, 63);
imagefill($im, 290, 405, $gh_color);
} else if ($gh == '') {
$gh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 290, 405, $gh_color);
}
if ($gl == 'y') {
$gl_color = imagecolorallocate($im, 1, 50, 122);
imagefill($im, 873, 682, $gl_color);
} else if ($gl == '') {
$gl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 873, 682, $gl_color);
}  
if ($gm == 'y') {
$gm_color = imagecolorallocate($im, 12, 28, 142);
imagefill($im, 128, 331, $gm_color);
} else if ($gm == '') {
$gm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 128, 331, $gm_color);
} 
if ($gn == 'y') {
$gn_color = imagecolorallocate($im, 0, 148, 96);
imagefill($im, 176, 372, $gn_color);
} else if ($gn == '') {
$gn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 176, 372, $gn_color);
} 
if ($gq == 'y') {
$gq_color = imagecolorallocate($im, 62, 154, 0);
imagefill($im, 429, 495, $gq_color);
imagefill($im, 408, 470, $gq_color);
imagefill($im, 374, 530, $gq_color);
} else if ($gq == '') {
$gq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 429, 495, $gq_color);
imagefill($im, 408, 470, $gq_color);
imagefill($im, 374, 530, $gq_color);
} 
if ($gw == 'y') {
$gw_color = imagecolorallocate($im, 12, 28, 142);
imagefill($im, 127, 348, $gw_color);
imagefill($im, 110, 356, $gw_color);
imagefill($im, 115, 358, $gw_color);
imagefill($im, 116, 360, $gw_color);
imagefill($im, 111, 362, $gw_color);
} else if ($gw == '') {
$gw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 127, 348, $gw_color);
imagefill($im, 110, 356, $gw_color);
imagefill($im, 115, 358, $gw_color);
imagefill($im, 116, 360, $gw_color);
imagefill($im, 111, 362, $gw_color);
} 
if ($ke == 'y') {
$ke_color = imagecolorallocate($im, 187, 0, 0);
imagefill($im, 762, 516, $ke_color);
} else if ($ke == '') {
$ke_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 762, 516, $ke_color);
} 
if ($km == 'y') {
$km_color = imagecolorallocate($im, 58, 117, 196);
imagefill($im, 829, 684, $km_color);
imagefill($im, 831, 690, $km_color);
imagefill($im, 839, 690, $km_color);
} else if ($km == '') {
$km_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 829, 684, $km_color);
imagefill($im, 831, 690, $km_color);
imagefill($im, 839, 690, $km_color);
} 
if ($lr == 'y') {
$lr_color = imagecolorallocate($im, 192, 62, 53);
imagefill($im, 188, 430, $lr_color);
} else if ($lr == '') {
$lr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 188, 430, $lr_color);
} 
if ($ly == 'y') {
$ly_color = imagecolorallocate($im, 0, 149, 48);
imagefill($im, 517, 150, $ly_color);
} else if ($ly == '') {
$ly_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 517, 150, $ly_color);
} 
if ($ls == 'y') {
$ls_color = imagecolorallocate($im, 0, 149, 67);
imagefill($im, 641, 924, $ls_color);
} else if ($ls == '') {
$ls_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 641, 924, $ls_color);
} 
if ($ma == 'y') {
$ma_color = imagecolorallocate($im, 0, 98, 51);
imagefill($im, 223, 84, $ma_color);
} else if ($ma == '') {
$ma_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 223, 84, $ma_color);
} 
if ($md == 'y') {
$md_color = imagecolorallocate($im, 0, 75, 143);
imagefill($im, 111, 67, $md_color);
imagefill($im, 116, 70, $md_color);
imagefill($im, 116, 62, $md_color);
} else if ($md == '') {
$md_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 111, 67, $md_color);
imagefill($im, 116, 70, $md_color);
imagefill($im, 116, 62, $md_color);
} 
if ($mg == 'y') {
$mg_color = imagecolorallocate($im, 0, 126, 58);
imagefill($im, 860, 790, $mg_color);
} else if ($mg == '') {
$mg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 860, 790, $mg_color);
} 
if ($ml == 'y') {
$ml_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 262, 293, $ml_color);
} else if ($ml == '') {
$ml_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 262, 293, $ml_color);
} 
if ($me == 'y') {
$me_color = imagecolorallocate($im, 237, 28, 36);
imagefill($im, 278, 32, $me_color);
} else if ($me == '') {
$me_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 278, 32, $me_color);
} 
if ($mr == 'y') {
$mr_color = imagecolorallocate($im, 0, 98, 51);
imagefill($im, 179, 244, $mr_color);
} else if ($mr == '') {
$mr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 179, 244, $mr_color);
} 
if ($mu == 'y') {
$mu_color = imagecolorallocate($im, 1, 42, 135);
imagefill($im, 994, 797, $mu_color);
} else if ($mu == '') {
$mu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 994, 797, $mu_color);
} 
if ($mw == 'y') {
$mw_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 710, 704, $mw_color);
} else if ($mw == '') {
$mw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 710, 704, $mw_color);
} 
if ($mt == 'y') {
$mt_color = imagecolorallocate($im, 237, 41, 57);
imagefill($im, 848, 696, $mt_color);
} else if ($mt == '') {
$mt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 848, 696, $mt_color);
} 
if ($mz == 'y') {
$mz_color = imagecolorallocate($im, 252, 225, 0);
imagefill($im, 717, 767, $mz_color);
} else if ($mz == '') {
$mz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 717, 767, $mz_color);
} 
if ($na == 'y') {
$na_color = imagecolorallocate($im, 0, 53, 128);
imagefill($im, 507, 822, $na_color);
} else if ($na == '') {
$na_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 507, 822, $na_color);
} 
if ($ne == 'y') {
$ne_color = imagecolorallocate($im, 224, 82, 6);
imagefill($im, 418, 281, $ne_color);
} else if ($ne == '') {
$ne_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 418, 281, $ne_color);
} 
if ($ng == 'y') {
$ng_color = imagecolorallocate($im, 0, 135, 81);
imagefill($im, 400, 389, $ng_color);
} else if ($ng == '') {
$ng_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 400, 389, $ng_color);
} 
if ($ru == 'y') {
$ru_color = imagecolorallocate($im, 221, 47, 47);
imagefill($im, 969, 809, $ru_color);
} else if ($ru == '') {
$ru_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 969, 809, $ru_color);
} 
if ($rw == 'y') {
$rw_color = imagecolorallocate($im, 0, 161, 222);
imagefill($im, 666, 542, $rw_color);
} else if ($rw == '') {
$rw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 666, 542, $rw_color);
} 
if ($sc == 'y') {
$sc_color = imagecolorallocate($im, 227, 197, 19);
imagefill($im, 865, 654, $sc_color);
imagefill($im, 879, 662, $sc_color);
imagefill($im, 879, 655, $sc_color);
imagefill($im, 920, 665, $sc_color);
imagefill($im, 914, 653, $sc_color);
imagefill($im, 919, 655, $sc_color);
imagefill($im, 981, 668, $sc_color);
imagefill($im, 937, 625, $sc_color);
imagefill($im, 977, 622, $sc_color);
imagefill($im, 938, 610, $sc_color);
imagefill($im, 943, 607, $sc_color);
imagefill($im, 949, 607, $sc_color);
imagefill($im, 964, 607, $sc_color);
imagefill($im, 942, 601, $sc_color);
imagefill($im, 942, 596, $sc_color);
imagefill($im, 965, 591, $sc_color);
imagefill($im, 974, 593, $sc_color);
imagefill($im, 972, 586, $sc_color);
imagefill($im, 965, 580, $sc_color);
imagefill($im, 971, 580, $sc_color);
} else if ($sc == '') {
$sc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 865, 654, $sc_color);
imagefill($im, 879, 662, $sc_color);
imagefill($im, 879, 655, $sc_color);
imagefill($im, 920, 665, $sc_color);
imagefill($im, 914, 653, $sc_color);
imagefill($im, 919, 655, $sc_color);
imagefill($im, 981, 668, $sc_color);
imagefill($im, 937, 625, $sc_color);
imagefill($im, 977, 622, $sc_color);
imagefill($im, 938, 610, $sc_color);
imagefill($im, 943, 607, $sc_color);
imagefill($im, 949, 607, $sc_color);
imagefill($im, 964, 607, $sc_color);
imagefill($im, 942, 601, $sc_color);
imagefill($im, 942, 596, $sc_color);
imagefill($im, 965, 591, $sc_color);
imagefill($im, 974, 593, $sc_color);
imagefill($im, 972, 586, $sc_color);
imagefill($im, 965, 580, $sc_color);
imagefill($im, 971, 580, $sc_color);
}
if ($sd == 'y') {
$sd_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 658, 331, $sd_color);
} else if ($sd == '') {
$sd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 658, 331, $sd_color);
} 
if ($sl == 'y') {
$sl_color = imagecolorallocate($im, 12, 28, 142);
imagefill($im, 160, 398, $sl_color);
} else if ($sl == '') {
$sl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 160, 398, $sl_color);
} 
if ($sn == 'y') {
$sn_color = imagecolorallocate($im, 227, 27, 35);
imagefill($im, 134, 314, $sn_color);
} else if ($sn == '') {
$sn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 134, 314, $sn_color);
}
if ($so == 'y') {
$so_color = imagecolorallocate($im, 252, 209, 29);
imagefill($im, 844, 471, $so_color);
} else if ($so == '') {
$so_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 844, 471, $so_color);
}
if ($ss == 'y') {
$ss_color = imagecolorallocate($im, 7, 137, 48);
imagefill($im, 667, 412, $ss_color);
} else if ($ss == '') {
$ss_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 667, 412, $ss_color);
}
if ($sp == 'y') {
$sp_color = imagecolorallocate($im, 255, 206, 0);
imagefill($im, 384, 513, $sp_color);
imagefill($im, 393, 495, $sp_color);
} else if ($sp == '') {
$sp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 384, 513, $sp_color);
imagefill($im, 393, 495, $sp_color);
}
if ($sz == 'y') {
$sz_color = imagecolorallocate($im, 62, 94, 185);
imagefill($im, 678, 884, $sz_color);
} else if ($sz == '') {
$sz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 678, 884, $sz_color);
} 
if ($td == 'y') {
$td_color = imagecolorallocate($im, 0, 38, 100);
imagefill($im, 529, 310, $td_color);
} else if ($td == '') {
$td_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 529, 310, $td_color);
} 
if ($tg == 'y') {
$tg_color = imagecolorallocate($im, 214, 12, 54);
imagefill($im, 318, 402, $tg_color);
} else if ($tg == '') {
$tg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 318, 402, $tg_color);
} 
if ($tn == 'y') {
$tn_color = imagecolorallocate($im, 211, 194, 28);
imagefill($im, 412, 55, $tn_color);
} else if ($tn == '') {
$tn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 412, 55, $tn_color);
} 
if ($tz == 'y') {
$tz_color = imagecolorallocate($im, 30, 181, 58);
imagefill($im, 725, 609, $tz_color);
} else if ($tz == '') {
$tz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 725, 609, $tz_color);
} 
if ($ug == 'y') {
$ug_color = imagecolorallocate($im, 255, 231, 0);
imagefill($im, 697, 495, $ug_color);
} else if ($ug == '') {
$ug_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 697, 495, $ug_color);
} 
if ($za == 'y') {
$za_color = imagecolorallocate($im, 222, 56, 49);
imagefill($im, 600, 922, $za_color);
} else if ($za == '') {
$za_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 600, 922, $za_color);
} 
if ($zm == 'y') {
$zm_color = imagecolorallocate($im, 235, 123, 0);
imagefill($im, 613, 723, $zm_color);
} else if ($zm == '') {
$zm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 613, 723, $zm_color);
} 
if ($zr == 'y') {
$zr_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 782, 601, $zr_color);
imagefill($im, 785, 589, $zr_color);
} else if ($zr == '') {
$zr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 782, 601, $zr_color);
imagefill($im, 785, 589, $zr_color);
} 
if ($zw == 'y') {
$zw_color = imagecolorallocate($im, 49, 146, 8);
imagefill($im, 663, 783, $zw_color);
} else if ($zw == '') {
$zw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 663, 783, $zw_color);
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