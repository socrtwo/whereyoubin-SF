<?php
error_reporting(0);
//error_reporting(E_ALL);

/* Session start */
session_start();

include 'config.php'; 

$libPath   = "$cwd/libs/";

putenv("PYTHONPATH=$libPath");

$thisMap = $worldCookie;

$countries = explode('#',$_SESSION[$thisMap]);

foreach($countries AS $key) $$key='y';

$newImageName = 'images/self.png';
$im = imagecreatefrompng($newImageName);
if(!$im)
    {$file = 'images/world_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}

if ($aa == 'y') {
$aa_color = imagecolorallocate($im, 2, 30, 155);
imagefill($im, 800, 700, $aa_color);
imagefill($im, 487, 675, $aa_color);
imagefill($im, 568, 701, $aa_color);
imagefill($im, 538, 704, $aa_color);
imagefill($im, 512, 701, $aa_color);
} else if ($aa == '') {
$aa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 800, 700, $aa_color);
imagefill($im, 487, 675, $aa_color);
imagefill($im, 568, 701, $aa_color);
imagefill($im, 538, 704, $aa_color);
imagefill($im, 512, 701, $aa_color);
} 

if ($af == 'y') {
$af_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 900, 210, $af_color);
} else if ($af == '') {
$af_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 900, 210, $af_color);
} 

if ($al == 'y') {
$al_color = imagecolorallocate($im, 0, 122, 61);
imagefill($im, 716, 180, $al_color);
} else if ($al == '') {
$al_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 716, 180, $al_color);
}

if ($dz == 'y') {
$dz_color = imagecolorallocate($im, 0, 122, 61);
imagefill($im, 647, 235, $dz_color);
} else if ($dz == '') {
$dz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 647, 235, $dz_color);
}

if ($us_as == 'y') {
$us_as_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 1414, 428, $us_as_color);
} else if ($us_as == '') {
$us_as_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1414, 428, $us_as_color);
}

if ($in_an == 'y') {
$in_an_color = imagecolorallocate($im, 255, 153, 51);
imagefill($im, 1032, 333, $in_an_color);
imagefill($im, 1030, 330, $in_an_color);
imagefill($im, 1028, 327, $in_an_color);
imagefill($im, 1026, 317, $in_an_color);
imagefill($im, 1026, 309, $in_an_color);
imagefill($im, 1026, 306, $in_an_color);
} else if ($in_an == '') {
$in_an_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1032, 333, $in_an_color);
imagefill($im, 1030, 330, $in_an_color);
imagefill($im, 1028, 327, $in_an_color);
imagefill($im, 1026, 317, $in_an_color);
imagefill($im, 1026, 309, $in_an_color);
imagefill($im, 1026, 306, $in_an_color);
}

if ($ad == 'y') {
$ad_color = imagecolorallocate($im, 208, 16, 58);
imagefill($im, 644, 171, $ad_color);
} else if ($ad == '') {
$ad_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 644, 171, $ad_color);
}

if ($ao == 'y') {
$ao_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 688, 389, $ao_color);
imagefill($im, 709, 421, $ao_color);
} else if ($ao == '') {
$ao_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 688, 389, $ao_color);
imagefill($im, 709, 421, $ao_color);
}

if ($ai == 'y') {
$ai_color = imagecolorallocate($im, 231, 115, 41);
imagefill($im, 375, 280, $ai_color);
} else if ($ai == '') {
$ai_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 375, 280, $ai_color);
}

if ($ar == 'y') {
$ar_color = imagecolorallocate($im, 117, 170, 219);
imagefill($im, 380, 500, $ar_color);
imagefill($im, 406, 609, $ar_color);
} else if ($ar == '') {
$ar_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 380, 500, $ar_color);
imagefill($im, 406, 609, $ar_color);
}

if ($am == 'y') {
$am_color = imagecolorallocate($im, 0, 0, 214);
imagefill($im, 809, 181, $am_color);
} else if ($am == '') {
$am_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 809, 181, $am_color);
}

if ($aw == 'y') {
$aw_color = imagecolorallocate($im, 88, 129, 187);
imagefill($im, 347, 307, $aw_color);
} else if ($aw == '') {
$aw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 347, 307, $aw_color);
}

if ($au == 'y') {
$au_color = imagecolorallocate($im, 0, 0, 139);
imagefill($im, 1198, 500, $au_color);
imagefill($im, 1198, 557, $au_color);
} else if ($au == '') {
$au_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1198, 500, $au_color);
imagefill($im, 1198, 557, $au_color);
}

if ($at == 'y') {
$at_color = imagecolorallocate($im, 237, 41, 57);
imagefill($im, 694, 149, $at_color);
} else if ($at == '') {
$at_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 694, 149, $at_color);
}

if ($az == 'y') {
$az_color = imagecolorallocate($im, 0, 146, 199);
imagefill($im, 822, 181, $az_color);
imagefill($im, 814, 186, $az_color);
} else if ($az == '') {
$az_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 822, 181, $az_color);
imagefill($im, 814, 186, $az_color);
}

if ($pt_az == 'y') {
$pt_az_color = imagecolorallocate($im, 40, 42, 116);
imagefill($im, 504, 174, $pt_az_color);
imagefill($im, 505, 177, $pt_az_color);
imagefill($im, 510, 179, $pt_az_color);
imagefill($im, 513, 180, $pt_az_color);
imagefill($im, 515, 181, $pt_az_color);
imagefill($im, 516, 182, $pt_az_color);
imagefill($im, 519, 178, $pt_az_color);
imagefill($im, 522, 181, $pt_az_color);
imagefill($im, 525, 183, $pt_az_color);
} else if ($pt_az == '') {
$pt_az_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 504, 174, $pt_az_color);
imagefill($im, 505, 177, $pt_az_color);
imagefill($im, 510, 179, $pt_az_color);
imagefill($im, 513, 180, $pt_az_color);
imagefill($im, 515, 181, $pt_az_color);
imagefill($im, 516, 182, $pt_az_color);
imagefill($im, 519, 178, $pt_az_color);
imagefill($im, 522, 181, $pt_az_color);
imagefill($im, 525, 183, $pt_az_color);
}

if ($bs == 'y') {
$bs_color = imagecolorallocate($im, 250, 224, 66);
imagefill($im, 319, 242, $bs_color);
imagefill($im, 322, 242, $bs_color);
imagefill($im, 320, 243, $bs_color);
imagefill($im, 325, 242, $bs_color);
imagefill($im, 326, 244, $bs_color);
imagefill($im, 322, 247, $bs_color);
imagefill($im, 319, 248, $bs_color);
imagefill($im, 320, 250, $bs_color);
imagefill($im, 320, 252, $bs_color);
imagefill($im, 328, 250, $bs_color);
imagefill($im, 331, 254, $bs_color);
imagefill($im, 331, 258, $bs_color);
imagefill($im, 335, 262, $bs_color);
imagefill($im, 334, 264, $bs_color);
} else if ($bs == '') {
$bs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 319, 242, $bs_color);
imagefill($im, 322, 242, $bs_color);
imagefill($im, 320, 243, $bs_color);
imagefill($im, 325, 242, $bs_color);
imagefill($im, 326, 244, $bs_color);
imagefill($im, 322, 247, $bs_color);
imagefill($im, 319, 248, $bs_color);
imagefill($im, 320, 250, $bs_color);
imagefill($im, 320, 252, $bs_color);
imagefill($im, 328, 250, $bs_color);
imagefill($im, 331, 254, $bs_color);
imagefill($im, 331, 258, $bs_color);
imagefill($im, 335, 262, $bs_color);
imagefill($im, 334, 264, $bs_color);
}

if ($bh == 'y') {
$bh_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 842, 245, $bh_color);
} else if ($bh == '') {
$bh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 842, 245, $bh_color);
}

if ($bd == 'y') {
$bd_color = imagecolorallocate($im, 0, 106, 78);
imagefill($im, 1004, 258, $bd_color);
} else if ($bd == '') {
$bd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1004, 258, $bd_color);
}

if ($bb == 'y') {
$bb_color = imagecolorallocate($im, 0, 38, 127);
imagefill($im, 394, 305, $bb_color);
} else if ($bb == '') {
$bb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 394, 305, $bb_color);
}

if ($ag == 'y') {
$ag_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 385, 284, $ag_color);
} else if ($ag == '') {
$ag_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 385, 284, $ag_color);
}

if ($by == 'y') {
$by_color = imagecolorallocate($im, 0, 153, 0);
imagefill($im, 743, 126, $by_color);
} else if ($by == '') {
$by_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 743, 126, $by_color);
}

if ($be == 'y') {
$be_color = imagecolorallocate($im, 237, 41, 57);
imagefill($im, 659, 137, $be_color);
} else if ($be == '') {
$be_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 659, 137, $be_color);
}

if ($bz == 'y') {
$bz_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 272, 283, $bz_color);
} else if ($bz == '') {
$bz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 272, 283, $bz_color);
}

if ($bj == 'y') {
$bj_color = imagecolorallocate($im, 232, 17, 45);
imagefill($im, 647, 317, $bj_color);
} else if ($bj == '') {
$bj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 647, 317, $bj_color);
}

if ($bm == 'y') {
$bm_color = imagecolorallocate($im, 204, 0, 0);
imagefill($im, 383, 215, $bm_color);
} else if ($bm == '') {
$bm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 383, 215, $bm_color);
}

if ($bt == 'y') {
$bt_color = imagecolorallocate($im, 226, 61, 40);
imagefill($im, 1000, 239, $bt_color);
} else if ($bt == '') {
$bt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1000, 239, $bt_color);
}

if ($bo == 'y') {
$bo_color = imagecolorallocate($im, 247, 226, 20);
imagefill($im, 371, 438, $bo_color);
} else if ($bo == '') {
$bo_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 371, 438, $bo_color);
}

if ($ba == 'y') {
$ba_color = imagecolorallocate($im, 255, 204, 0);
imagefill($im, 709, 165, $ba_color);
} else if ($ba == '') {
$ba_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 709, 165, $ba_color);
}

if ($bw == 'y') {
$bw_color = imagecolorallocate($im, 117, 170, 219);
imagefill($im, 734, 464, $bw_color);
} else if ($bw == '') {
$bw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 734, 464, $bw_color);
}

if ($br == 'y') {
$br_color = imagecolorallocate($im, 0, 146, 63);
imagefill($im, 433, 414, $br_color);
} else if ($br == '') {
$br_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 433, 414, $br_color);
}

if ($vg == 'y') {
$vg_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 371, 280, $vg_color);
} else if ($vg == '') {
$vg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 371, 280, $vg_color);
}

if ($bn == 'y') {
$bn_color = imagecolorallocate($im, 247, 224, 23);
imagefill($im, 1113, 343, $bn_color);
} else if ($bn == '') {
$bn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1113, 343, $bn_color);
}

if ($bg == 'y') {
$bg_color = imagecolorallocate($im, 144, 3, 3);
imagefill($im, 735, 173, $bg_color);
} else if ($bg == '') {
$bg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 735, 173, $bg_color);
}

if ($bf == 'y') {
$bf_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 631, 308, $bf_color);
} else if ($bf == '') {
$bf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 631, 308, $bf_color);
}

if ($mm == 'y') {
$mm_color = imagecolorallocate($im, 32, 66, 161);
imagefill($im, 1027, 269, $mm_color);
} else if ($mm == '') {
$mm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1027, 269, $mm_color);
}

if ($bi == 'y') {
$bi_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 761, 380, $bi_color);
} else if ($bi == '') {
$bi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 761, 380, $bi_color);
}

if ($kh == 'y') {
$kh_color = imagecolorallocate($im, 88, 148, 241);
imagefill($im, 1069, 308, $kh_color);
} else if ($kh == '') {
$kh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1069, 308, $kh_color);
}

if ($cm == 'y') {
$cm_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 685, 343, $cm_color);
} else if ($cm == '') {
$cm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 685, 343, $cm_color);
}

if ($ca == 'y') {
$ca_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 187, 140, $ca_color);
imagefill($im, 302, 109, $ca_color);
imagefill($im, 302, 42, $ca_color);
imagefill($im, 321, 53, $ca_color);
imagefill($im, 378, 77, $ca_color);
imagefill($im, 431, 60, $ca_color);
imagefill($im, 435, 145, $ca_color);
imagefill($im, 353, 60, $ca_color);
imagefill($im, 383, 42, $ca_color);
imagefill($im, 363, 47, $ca_color);
imagefill($im, 400, 35, $ca_color);
imagefill($im, 461, 17, $ca_color);
imagefill($im, 412, 21, $ca_color);
} else if ($ca == '') {
$ca_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 187, 140, $ca_color);
imagefill($im, 302, 109, $ca_color);
imagefill($im, 302, 42, $ca_color);
imagefill($im, 321, 53, $ca_color);
imagefill($im, 378, 77, $ca_color);
imagefill($im, 431, 60, $ca_color);
imagefill($im, 435, 145, $ca_color);
imagefill($im, 353, 60, $ca_color);
imagefill($im, 383, 42, $ca_color);
imagefill($im, 363, 47, $ca_color);
imagefill($im, 400, 35, $ca_color);
imagefill($im, 461, 17, $ca_color);
imagefill($im, 412, 21, $ca_color);
}

if ($ic == 'y') {
$ic_color = imagecolorallocate($im, 255, 255, 0);
imagefill($im, 565, 235, $ic_color);
imagefill($im, 570, 237, $ic_color);
imagefill($im, 555, 229, $ic_color);
imagefill($im, 575, 238, $ic_color);
imagefill($im, 578, 231, $ic_color);
imagefill($im, 552, 238, $ic_color);
imagefill($im, 557, 235, $ic_color);
} else if ($ic == '') {
$ic_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 565, 235, $ic_color);
imagefill($im, 570, 237, $ic_color);
imagefill($im, 555, 229, $ic_color);
imagefill($im, 575, 238, $ic_color);
imagefill($im, 578, 231, $ic_color);
imagefill($im, 552, 238, $ic_color);
imagefill($im, 557, 235, $ic_color);
}

if ($cv == 'y') {
$cv_color = imagecolorallocate($im, 0, 56, 147);
imagefill($im, 535, 286, $cv_color);
imagefill($im, 538, 287, $cv_color);
imagefill($im, 541, 290, $cv_color);
imagefill($im, 546, 290, $cv_color);
imagefill($im, 542, 295, $cv_color);
imagefill($im, 545, 295, $cv_color);
} else if ($cv == '') {
$cv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 535, 286, $cv_color);
imagefill($im, 538, 287, $cv_color);
imagefill($im, 541, 290, $cv_color);
imagefill($im, 546, 290, $cv_color);
imagefill($im, 542, 295, $cv_color);
imagefill($im, 545, 295, $cv_color);
}

if ($ky == 'y') {
$ky_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 301, 275, $ky_color);
} else if ($ky == '') {
$ky_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 301, 275, $ky_color);
}

if ($cf == 'y') {
$cf_color = imagecolorallocate($im, 255, 206, 0);
imagefill($im, 723, 330, $cf_color);
} else if ($cf == '') {
$cf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 723, 330, $cf_color);
}

if ($td == 'y') {
$td_color = imagecolorallocate($im, 0, 37, 105);
imagefill($im, 706, 295, $td_color);
} else if ($td == '') {
$td_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 706, 295, $td_color);
}

if ($cl == 'y') {
$cl_color = imagecolorallocate($im, 0, 57, 166);
imagefill($im, 356, 475, $cl_color);
imagefill($im, 398, 608, $cl_color);
} else if ($cl == '') {
$cl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 356, 475, $cl_color);
imagefill($im, 398, 608, $cl_color);
}

if ($cn == 'y') {
$cn_color = imagecolorallocate($im, 255, 222, 0);
imagefill($im, 1066, 216, $cn_color);
imagefill($im, 1087, 278, $cn_color);
} else if ($cn == '') {
$cn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1066, 216, $cn_color);
imagefill($im, 1087, 278, $cn_color);
}

if ($co == 'y') {
$co_color = imagecolorallocate($im, 0, 56, 147);
imagefill($im, 328, 349, $co_color);
} else if ($co == '') {
$co_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 328, 349, $co_color);
}

if ($km == 'y') {
$km_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 814, 420, $km_color);
imagefill($im, 816, 423, $km_color);
imagefill($im, 820, 422, $km_color);
imagefill($im, 823, 428, $km_color);
} else if ($km == '') {
$km_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 814, 420, $km_color);
imagefill($im, 816, 423, $km_color);
imagefill($im, 820, 422, $km_color);
imagefill($im, 823, 428, $km_color);
}

if ($cr == 'y') {
$cr_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 287, 319, $cr_color);
} else if ($cr == '') {
$cr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 287, 319, $cr_color);
}

if ($ci == 'y') {
$ci_color = imagecolorallocate($im, 247, 127, 0);
imagefill($im, 614, 333, $ci_color);
} else if ($ci == '') {
$ci_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 614, 333, $ci_color);
}

if ($ct == 'y') {
$ct_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 737, 205, $ct_color);
} else if ($ct == '') {
$ct_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 737, 205, $ct_color);
}

if ($hr == 'y') {
$hr_color = imagecolorallocate($im, 222, 222, 24);
imagefill($im, 698, 161, $hr_color);
} else if ($hr == '') {
$hr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 698, 161, $hr_color);
}

if ($cu == 'y') {
$cu_color = imagecolorallocate($im, 207, 20, 43);
imagefill($im, 319, 267, $cu_color);
} else if ($cu == '') {
$cu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 319, 267, $cu_color);
}

if ($an_cu == 'y') {
$an_color = imagecolorallocate($im, 249, 232, 20);
imagefill($im, 352, 307, $an_color);
} else if ($an_cu == '') {
$an_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 352, 307, $an_color);
}

if ($cy == 'y') {
$cy_color = imagecolorallocate($im, 237, 128, 0);
imagefill($im, 769, 205, $cy_color);
} else if ($cy == '') {
$cy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 769, 205, $cy_color);
}

if ($cz == 'y') {
$cz_color = imagecolorallocate($im, 17, 69, 126);
imagefill($im, 693, 139, $cz_color);
} else if ($cz == '') {
$cz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 693, 139, $cz_color);
}

if ($dk == 'y') {
$dk_color = imagecolorallocate($im, 208, 12, 51);
imagefill($im, 675, 113, $dk_color);
imagefill($im, 680, 113, $dk_color);
} else if ($dk == '') {
$dk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 675, 113, $dk_color);
imagefill($im, 680, 113, $dk_color);
}

if ($dj == 'y') {
$dj_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 812, 311, $dj_color);
} else if ($dj == '') {
$dj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 812, 311, $dj_color);
}

if ($dm == 'y') {
$dm_color = imagecolorallocate($im, 212, 28, 48);
imagefill($im, 387, 294, $dm_color);
} else if ($dm == '') {
$dm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 387, 294, $dm_color);
}

if ($do_rp == 'y') {
$do_rp_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 348, 278, $do_rp_color);
} else if ($do_rp == '') {
$do_rp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 348, 278, $do_rp_color);
}

if ($cd == 'y') {
$cd_color = imagecolorallocate($im, 0, 127, 255);
imagefill($im, 734, 374, $cd_color);
} else if ($cd == '') {
$cd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 734, 374, $cd_color);
}

if ($cl_ei == 'y') {
$cl_ei_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 134, 476, $cl_ei_color);
} else if ($cl_ei == '') {
$cl_ei_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 134, 476, $cl_ei_color);
}

if ($ec == 'y') {
$ec_color = imagecolorallocate($im, 253, 221, 4);
imagefill($im, 310, 368, $ec_color);
} else if ($ec == '') {
$ec_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 310, 368, $ec_color);
}

if ($eg == 'y') {
$eg_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 758, 250, $eg_color);
} else if ($eg == '') {
$eg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 758, 250, $eg_color);
}

if ($sv == 'y') {
$sv_color = imagecolorallocate($im, 0, 32, 159);
imagefill($im, 270, 301, $sv_color);
} else if ($sv == '') {
$sv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 270, 301, $sv_color);
}

if ($gq == 'y') {
$gq_color = imagecolorallocate($im, 0, 115, 206);
imagefill($im, 673, 349, $gq_color);
imagefill($im, 680, 355, $gq_color);
} else if ($gq == '') {
$gq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 673, 349, $gq_color);
imagefill($im, 680, 355, $gq_color);
}

if ($er == 'y') {
$er_color = imagecolorallocate($im, 111, 255, 15);
imagefill($im, 794, 293, $er_color);
} else if ($er == '') {
$er_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 794, 293, $er_color);
}

if ($ee == 'y') {
$ee_color = imagecolorallocate($im, 72, 145, 217);
imagefill($im, 732, 100, $ee_color);
imagefill($im, 720, 103, $ee_color);
} else if ($ee == '') {
$ee_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 732, 100, $ee_color);
imagefill($im, 720, 103, $ee_color);
}

if ($et == 'y') {
$et_color = imagecolorallocate($im, 249, 221, 22);
imagefill($im, 797, 326, $et_color);
} else if ($et == '') {
$et_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 797, 326, $et_color);
}

if ($fk == 'y') {
$fk_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 429, 598, $fk_color);
} else if ($fk == '') {
$fk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 429, 598, $fk_color);
}

if ($fo == 'y') {
$fo_color = imagecolorallocate($im, 208, 12, 51);
imagefill($im, 626, 86, $fo_color);
imagefill($im, 627, 89, $fo_color);
} else if ($fo == '') {
$fo_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 626, 86, $fo_color);
imagefill($im, 627, 89, $fo_color);
}

if ($fj == 'y') {
$fj_color = imagecolorallocate($im, 81, 181, 224);
imagefill($im, 1367, 445, $fj_color);
imagefill($im, 1373, 441, $fj_color);
} else if ($fj == '') {
$fj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1367, 445, $fj_color);
imagefill($im, 1373, 441, $fj_color);
}

if ($fi == 'y') {
$fi_color = imagecolorallocate($im, 0, 53, 128);
imagefill($im, 730, 84, $fi_color);
imagefill($im, 712, 96, $fi_color);
} else if ($fi == '') {
$fi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 730, 84, $fi_color);
imagefill($im, 712, 96, $fi_color);
}

if ($fr == 'y') {
$fr_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 649, 158, $fr_color);
imagefill($im, 675, 173, $fr_color);
} else if ($fr == '') {
$fr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 649, 158, $fr_color);
imagefill($im, 675, 173, $fr_color);
}

if ($fr_gf == 'y') {
$fr_gf_color = imagecolorallocate($im, 237, 41, 57);
imagefill($im, 415, 347, $fr_gf_color);
} else if ($fr_gf == '') {
$fr_gf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 415, 347, $fr_gf_color);
}

if ($fr_pf == 'y') {
$fr_pf_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 82, 451, $fr_pf_color);
} else if ($fr_pf == '') {
$fr_pf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 82, 451, $fr_pf_color);
}

if ($ga == 'y') {
$ga_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 688, 368, $ga_color);
} else if ($ga == '') {
$ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 688, 368, $ga_color);
}

if ($ec_ga == 'y') {
$ec_ga_color = imagecolorallocate($im, 253, 221, 4);
imagefill($im, 261, 358, $ec_ga_color);
imagefill($im, 263, 359, $ec_ga_color);
imagefill($im, 265, 361, $ec_ga_color);
imagefill($im, 262, 361, $ec_ga_color);
} else if ($ec_ga == '') {
$ec_ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 261, 358, $ec_ga_color);
imagefill($im, 263, 359, $ec_ga_color);
imagefill($im, 265, 361, $ec_ga_color);
imagefill($im, 262, 361, $ec_ga_color);
}

if ($ps == 'y') {
$ps_color = imagecolorallocate($im, 0, 122, 61);
imagefill($im, 775, 223, $ps_color);
} else if ($ps == '') {
$ps_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 775, 223, $ps_color);
}

if ($ge == 'y') {
$ge_color = imagecolorallocate($im, 248, 195, 0);
imagefill($im, 806, 174, $ge_color);
} else if ($ge == '') {
$ge_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 806, 174, $ge_color);
}

if ($de == 'y') {
$de_color = imagecolorallocate($im, 255, 206, 0);
imagefill($im, 679, 134, $de_color);
} else if ($de == '') {
$de_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 679, 134, $de_color);
}

if ($gh == 'y') {
$gh_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 631, 332, $gh_color);
} else if ($gh == '') {
$gh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 631, 332, $gh_color);
}

if ($gi == 'y') {
$gi_color = imagecolorallocate($im, 218, 0, 12);
imagefill($im, 620, 198, $gi_color);
} else if ($gi == '') {
$gi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 620, 198, $gi_color);
}

if ($gr == 'y') {
$gr_color = imagecolorallocate($im, 0, 0, 128);
imagefill($im, 720, 185, $gr_color);
} else if ($gr == '') {
$gr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 720, 185, $gr_color);
}

if ($gl == 'y') {
$gl_color = imagecolorallocate($im, 0, 83, 149);
imagefill($im, 525, 44, $gl_color);
} else if ($gl == '') {
$gl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 525, 44, $gl_color);
}

if ($gd == 'y') {
$gd_color = imagecolorallocate($im, 0, 122, 94);
imagefill($im, 382, 310, $gd_color);
} else if ($gd == '') {
$gd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 382, 310, $gd_color);
}

if ($fr_gp == 'y') {
$fr_gp_color = imagecolorallocate($im, 0, 132, 65);
imagefill($im, 385, 291, $fr_gp_color);
} else if ($fr_gp == '') {
$fr_gp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 385, 291, $fr_gp_color);
}

if ($us_gu == 'y') {
$us_gu_color = imagecolorallocate($im, 0, 80, 200);
imagefill($im, 1231, 301, $us_gu_color);
} else if ($us_gu == '') {
$us_gu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1231, 301, $us_gu_color);
}

if ($gt == 'y') {
$gt_color = imagecolorallocate($im, 134, 199, 227);
imagefill($im, 264, 296, $gt_color);
} else if ($gt == '') {
$gt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 264, 296, $gt_color);
}

if ($gg == 'y') {
$gg_color = imagecolorallocate($im, 249, 221, 22);
imagefill($im, 631, 141, $gg_color);
} else if ($gg == '') {
$gg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 631, 141, $gg_color);
}

if ($gw == 'y') {
$gw_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 576, 309, $gw_color);
} else if ($gw == '') {
$gw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 576, 309, $gw_color);
}

if ($gn == 'y') {
$gn_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 593, 316, $gn_color);
} else if ($gn == '') {
$gn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 593, 316, $gn_color);
}

if ($gy == 'y') {
$gy_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 391, 339, $gy_color);
} else if ($gy == '') {
$gy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 391, 339, $gy_color);
}

if ($hk == 'y') {
$hk_color = imagecolorallocate($im, 222, 41, 16);
imagefill($im, 1100, 264, $hk_color);
} else if ($hk == '') {
$hk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1100, 264, $hk_color);
}

if ($ht == 'y') {
$ht_color = imagecolorallocate($im, 0, 32, 159);
imagefill($im, 341, 278, $ht_color);
} else if ($ht == '') {
$ht_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 341, 278, $ht_color);
}

if ($hn == 'y') {
$hn_color = imagecolorallocate($im, 0, 115, 207);
imagefill($im, 279, 295, $hn_color);
} else if ($hn == '') {
$hn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 279, 295, $hn_color);
}

if ($hu == 'y') {
$hu_color = imagecolorallocate($im, 0, 135, 81);
imagefill($im, 712, 153, $hu_color);
} else if ($hu == '') {
$hu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 712, 153, $hu_color);
}

if ($is == 'y') {
$is_color = imagecolorallocate($im, 0, 56, 151);
imagefill($im, 588, 79, $is_color);
} else if ($is == '') {
$is_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 588, 79, $is_color);
}

if ($in_di == 'y') {
$in_di_color = imagecolorallocate($im, 255, 153, 51);
imagefill($im, 955, 264, $in_di_color);
imagefill($im, 939, 312, $in_di_color);
imagefill($im, 941, 315, $in_di_color);
imagefill($im, 941, 319, $in_di_color);
imagefill($im, 955, 319, $in_di_color);
imagefill($im, 937, 318, $in_di_color);
imagefill($im, 938, 315, $in_di_color);
imagefill($im, 936, 315, $in_di_color);
} else if ($in_di == '') {
$in_di_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 955, 264, $in_di_color);
imagefill($im, 939, 312, $in_di_color);
imagefill($im, 941, 315, $in_di_color);
imagefill($im, 941, 319, $in_di_color);
imagefill($im, 955, 319, $in_di_color);
imagefill($im, 937, 318, $in_di_color);
imagefill($im, 938, 315, $in_di_color);
imagefill($im, 936, 315, $in_di_color);
}

if ($id == 'y') {
$id_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 1063, 374, $id_color);
imagefill($im, 1083, 397, $id_color);
imagefill($im, 1111, 367, $id_color);
imagefill($im, 1138, 373, $id_color);
imagefill($im, 1215, 381, $id_color);
imagefill($im, 1153, 407, $id_color);
imagefill($im, 1139, 404, $id_color);
imagefill($im, 1134, 409, $id_color);
imagefill($im, 1124, 404, $id_color);
imagefill($im, 1173, 379, $id_color);
imagefill($im, 1169, 363, $id_color);
imagefill($im, 1124, 404, $id_color);
} else if ($id == '') {
$id_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1063, 374, $id_color);
imagefill($im, 1083, 397, $id_color);
imagefill($im, 1111, 367, $id_color);
imagefill($im, 1138, 373, $id_color);
imagefill($im, 1215, 381, $id_color);
imagefill($im, 1153, 407, $id_color);
imagefill($im, 1139, 404, $id_color);
imagefill($im, 1134, 409, $id_color);
imagefill($im, 1124, 404, $id_color);
imagefill($im, 1173, 379, $id_color);
imagefill($im, 1169, 363, $id_color);
imagefill($im, 1124, 404, $id_color);
}

if ($ir == 'y') {
$ir_color = imagecolorallocate($im, 35, 159, 64);
imagefill($im, 855, 218, $ir_color);
} else if ($ir == '') {
$ir_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 855, 218, $ir_color);
}

if ($iq == 'y') {
$iq_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 811, 218, $iq_color);
} else if ($iq == '') {
$iq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 811, 218, $iq_color);
}

if ($ie == 'y') {
$ie_color = imagecolorallocate($im, 0, 149, 67);
imagefill($im, 615, 125, $ie_color);
} else if ($ie == '') {
$ie_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 615, 125, $ie_color);
}

if ($il == 'y') {
$il_color = imagecolorallocate($im, 0, 56, 184);
imagefill($im, 778, 219, $il_color);
} else if ($il == '') {
$il_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 778, 219, $il_color);
}

if ($it == 'y') {
$it_color = imagecolorallocate($im, 105, 159, 15);
imagefill($im, 687, 170, $it_color);
imagefill($im, 694, 194, $it_color);
} else if ($it == '') {
$it_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 687, 170, $it_color);
imagefill($im, 694, 194, $it_color);
}

if ($jm == 'y') {
$jm_color = imagecolorallocate($im, 48, 138, 42);
imagefill($im, 318, 281, $jm_color);
} else if ($jm == '') {
$jm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 318, 281, $jm_color);
}

if ($jp == 'y') {
$jp_color = imagecolorallocate($im, 188, 0, 45);
imagefill($im, 1178, 169, $jp_color);
imagefill($im, 1182, 201, $jp_color);
imagefill($im, 1158, 216, $jp_color);
imagefill($im, 1165, 212, $jp_color);
} else if ($jp == '') {
$jp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1178, 169, $jp_color);
imagefill($im, 1182, 201, $jp_color);
imagefill($im, 1158, 216, $jp_color);
imagefill($im, 1165, 212, $jp_color);
}

if ($je == 'y') {
$je_color = imagecolorallocate($im, 247, 217, 23);
imagefill($im, 633, 142, $je_color);
} else if ($je == '') {
$je_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 633, 142, $je_color);
}

if ($ka == 'y') {
$ka_color = imagecolorallocate($im, 0, 149, 218);
imagefill($im, 719, 119, $ka_color);
} else if ($ka == '') {
$ka_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 719, 119, $ka_color);
}

if ($jo == 'y') {
$jo_color = imagecolorallocate($im, 207, 165, 3);
imagefill($im, 784, 227, $jo_color);
} else if ($jo == '') {
$jo_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 784, 227, $jo_color);
}

if ($kz == 'y') {
$kz_color = imagecolorallocate($im, 0, 175, 202);
imagefill($im, 889, 145, $kz_color);
} else if ($kz == '') {
$kz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 889, 145, $kz_color);
}

if ($ki == 'y') {
$ki_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 1360, 358, $ki_color);
} else if ($ki == '') {
$ki_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1360, 358, $ki_color);
}

if ($ke == 'y') {
$ke_color = imagecolorallocate($im, 187, 0, 0);
imagefill($im, 794, 362, $ke_color);
} else if ($ke == '') {
$ke_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 794, 362, $ke_color);
}

if ($kw == 'y') {
$kw_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 827, 230, $kw_color);
} else if ($kw == '') {
$kw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 827, 230, $kw_color);
}

if ($kg == 'y') {
$kg_color = imagecolorallocate($im, 232, 17, 45);
imagefill($im, 926, 175, $kg_color);
} else if ($kg == '') {
$kg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 926, 175, $kg_color);
}

if ($la == 'y') {
$la_color = imagecolorallocate($im, 0, 40, 104);
imagefill($im, 1056, 276, $la_color);
} else if ($la == '') {
$la_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1056, 276, $la_color);
}

if ($lv == 'y') {
$lv_color = imagecolorallocate($im, 158, 48, 57);
imagefill($im, 734, 111, $lv_color);
} else if ($lv == '') {
$lv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 734, 111, $lv_color);
}

if ($lb == 'y') {
$lb_color = imagecolorallocate($im, 0, 166, 181);
imagefill($im, 780, 210, $lb_color);
} else if ($lb == '') {
$lb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 780, 210, $lb_color);
}

if ($ls == 'y') {
$ls_color = imagecolorallocate($im, 0, 32, 159);
imagefill($im, 751, 498, $ls_color);
} else if ($ls == '') {
$ls_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 751, 498, $ls_color);
}

if ($lr == 'y') {
$lr_color = imagecolorallocate($im, 0, 40, 104);
imagefill($im, 597, 336, $lr_color);
} else if ($lr == '') {
$lr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 597, 336, $lr_color);
}

if ($ly == 'y') {
$ly_color = imagecolorallocate($im, 0, 149, 48);
imagefill($im, 709, 247, $ly_color);
} else if ($ly == '') {
$ly_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 709, 247, $ly_color);
}

if ($li == 'y') {
$li_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 679, 151, $li_color);
} else if ($li == '') {
$li_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 679, 151, $li_color);
}

if ($lt == 'y') {
$lt_color = imagecolorallocate($im, 253, 185, 19);
imagefill($im, 728, 117, $lt_color);
} else if ($lt == '') {
$lt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 728, 117, $lt_color);
}

if ($at == 'y') {
$at_color = imagecolorallocate($im, 255, 232, 0);
imagefill($im, 1310, 497, $at_color);
} else if ($at == '') {
$at_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1310, 497, $at_color);
}

if ($lu == 'y') {
$lu_color = imagecolorallocate($im, 0, 161, 221);
imagefill($im, 663, 140, $lu_color);
} else if ($lu == '') {
$lu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 663, 140, $lu_color);
}

if ($mo == 'y') {
$mo_color = imagecolorallocate($im, 0, 120, 94);
imagefill($im, 1098, 264, $mo_color);
} else if ($mo == '') {
$mo_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1098, 264, $mo_color);
}

if ($mk == 'y') {
$mk_color = imagecolorallocate($im, 255, 230, 0);
imagefill($im, 722, 175, $mk_color);
} else if ($mk == '') {
$mk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 722, 175, $mk_color);
}

if ($mg == 'y') {
$mg_color = imagecolorallocate($im, 225, 61, 50);
imagefill($im, 828, 452, $mg_color);
} else if ($mg == '') {
$mg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 828, 452, $mg_color);
}

if ($pt_md == 'y') {
$pt_color = imagecolorallocate($im, 0, 75, 143);
imagefill($im, 562, 206, $pt_color);
imagefill($im, 566, 204, $pt_color);
} else if ($pt_md == '') {
$pt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 562, 206, $pt_color);
imagefill($im, 566, 204, $pt_color);
}

if ($mw == 'y') {
$mw_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 781, 434, $mw_color);
} else if ($mw == '') {
$mw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 781, 434, $mw_color);
}

if ($my == 'y') {
$my_color = imagecolorallocate($im, 0, 53, 173);
imagefill($im, 1061, 346, $my_color);
imagefill($im, 1109, 354, $my_color);
} else if ($my == '') {
$my_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1061, 346, $my_color);
imagefill($im, 1109, 354, $my_color);
}

if ($mv == 'y') {
$mv_color = imagecolorallocate($im, 255, 153, 51);
imagefill($im, 939, 340, $mv_color);
imagefill($im, 939, 342, $mv_color);
imagefill($im, 939, 345, $mv_color);
imagefill($im, 936, 344, $mv_color);
imagefill($im, 936, 342, $mv_color);
} else if ($mv == '') {
$mv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 939, 340, $mv_color);
imagefill($im, 939, 342, $mv_color);
imagefill($im, 939, 345, $mv_color);
imagefill($im, 936, 344, $mv_color);
imagefill($im, 936, 342, $mv_color);
}

if ($ml == 'y') {
$ml_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 624, 281, $ml_color);
} else if ($ml == '') {
$ml_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 624, 281, $ml_color);
}

if ($mt == 'y') {
$mt_color = imagecolorallocate($im, 207, 20, 43);
imagefill($im, 695, 202, $mt_color);
} else if ($mt == '') {
$mt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 695, 202, $mt_color);
}

if ($mh == 'y') {
$mh_color = imagecolorallocate($im, 221, 117, 0);
imagefill($im, 1351, 331, $mh_color);
} else if ($mh == '') {
$mh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1351, 331, $mh_color);
}

if ($fr_mq == 'y') {
$fr_mq_color = imagecolorallocate($im, 33, 66, 142);
imagefill($im, 389, 297, $fr_mq_color);
} else if ($fr_mq == '') {
$fr_mq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 389, 297, $fr_mq_color);
}

if ($mr == 'y') {
$mr_color = imagecolorallocate($im, 255, 196, 0);
imagefill($im, 597, 275, $mr_color);
} else if ($mr == '') {
$mr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 597, 275, $mr_color);
}

if ($mu == 'y') {
$mu_color = imagecolorallocate($im, 252, 235, 15);
imagefill($im, 873, 456, $mu_color);
} else if ($mu == '') {
$mu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 873, 456, $mu_color);
}

if ($mx == 'y') {
$mx_color = imagecolorallocate($im, 0, 104, 71);
imagefill($im, 222, 263, $mx_color);
} else if ($mx == '') {
$mx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 222, 263, $mx_color);
}

if ($fm == 'y') {
$fm_color = imagecolorallocate($im, 253, 246, 3);
imagefill($im, 1292, 331, $fm_color);
} else if ($fm == '') {
$fm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1292, 331, $fm_color);
}

if ($md == 'y') {
$md_color = imagecolorallocate($im, 227, 33, 16);
imagefill($im, 747, 152, $md_color);
} else if ($md == '') {
$md_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 747, 152, $md_color);
}

if ($mc == 'y') {
$mc_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 668, 166, $mc_color);
} else if ($mc == '') {
$mc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 668, 166, $mc_color);
}

if ($mn == 'y') {
$mn_color = imagecolorallocate($im, 54, 109, 13);
imagefill($im, 1022, 156, $mn_color);
} else if ($mn == '') {
$mn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1022, 156, $mn_color);
}

if ($me == 'y') {
$me_color = imagecolorallocate($im, 212, 175, 58);
imagefill($im, 713, 171, $me_color);
} else if ($me == '') {
$me_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 713, 171, $me_color);
}

if ($ms == 'y') {
$ms_color = imagecolorallocate($im, 204, 0, 0);
imagefill($im, 382, 289, $ms_color);
} else if ($ms == '') {
$ms_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 382, 289, $ms_color);
}

if ($ma == 'y') {
$ma_color = imagecolorallocate($im, 193, 39, 45);
imagefill($im, 614, 218, $ma_color);
} else if ($ma == '') {
$ma_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 614, 218, $ma_color);
}

if ($mz == 'y') {
$mz_color = imagecolorallocate($im, 0, 113, 104);
imagefill($im, 778, 448, $mz_color);
} else if ($mz == '') {
$mz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 778, 448, $mz_color);
}

if ($na == 'y') {
$na_color = imagecolorallocate($im, 0, 53, 128);
imagefill($im, 706, 464, $na_color);
} else if ($na == '') {
$na_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 706, 464, $na_color);
}

if ($nr == 'y') {
$nr_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 1332, 367, $nr_color);
} else if ($nr == '') {
$nr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1332, 367, $nr_color);
}

if ($np == 'y') {
$np_color = imagecolorallocate($im, 0, 56, 147);
imagefill($im, 976, 237, $np_color);
} else if ($np == '') {
$np_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 976, 237, $np_color);
}

if ($an == 'y') {
$an_color = imagecolorallocate($im, 33, 70, 139);
imagefill($im, 662, 130, $an_color);
} else if ($an == '') {
$an_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 662, 130, $an_color);
}

if ($fr_nc == 'y') {
$fr_nc_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 1311, 460, $fr_nc_color);
} else if ($fr_nc == '') {
$fr_nc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1311, 460, $fr_nc_color);
}

if ($nz == 'y') {
$nz_color = imagecolorallocate($im, 204, 20, 43);
imagefill($im, 1273, 569, $nz_color);
imagefill($im, 1317, 540, $nz_color);
imagefill($im, 1261, 577, $nz_color);
} else if ($nz == '') {
$nz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1273, 569, $nz_color);
imagefill($im, 1317, 540, $nz_color);
imagefill($im, 1261, 577, $nz_color);
}

if ($ni == 'y') {
$ni_color = imagecolorallocate($im, 142, 217, 255);
imagefill($im, 286, 305, $ni_color);
} else if ($ni == '') {
$ni_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 286, 305, $ni_color);
}

if ($ne == 'y') {
$ne_color = imagecolorallocate($im, 224, 82, 6);
imagefill($im, 678, 286, $ne_color);
} else if ($ne == '') {
$ne_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 678, 286, $ne_color);
}

if ($ng == 'y') {
$ng_color = imagecolorallocate($im, 0, 135, 81);
imagefill($im, 671, 321, $ng_color);
} else if ($ng == '') {
$ng_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 671, 321, $ng_color);
}

if ($kp == 'y') {
$kp_color = imagecolorallocate($im, 237, 29, 37);
imagefill($im, 1126, 182, $kp_color);
} else if ($kp == '') {
$kp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1126, 182, $kp_color);
}

if ($nf == 'y') {
$nf_color = imagecolorallocate($im, 0, 122, 61);
imagefill($im, 1310, 497, $nf_color);
} else if ($nf == '') {
$nf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1310, 497, $nf_color);
}

if ($us_mp == 'y') {
$us_mp_color = imagecolorallocate($im, 0, 113, 185);
imagefill($im, 1234, 292, $us_mp_color);
} else if ($us_mp == '') {
$us_mp_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1234, 292, $us_mp_color);
}

if ($no == 'y') {
$no_color = imagecolorallocate($im, 0, 40, 104);
imagefill($im, 675, 93, $no_color);
imagefill($im, 699, 29, $no_color);
imagefill($im, 628, 56, $no_color);
} else if ($no == '') {
$no_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 675, 93, $no_color);
imagefill($im, 699, 29, $no_color);
imagefill($im, 628, 56, $no_color);
}

if ($om == 'y') {
$om_color = imagecolorallocate($im, 20, 116, 3);
imagefill($im, 872, 264, $om_color);
} else if ($om == '') {
$om_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 872, 264, $om_color);
}

if ($pk == 'y') {
$pk_color = imagecolorallocate($im, 0, 102, 0);
imagefill($im, 906, 242, $pk_color);
} else if ($pk == '') {
$pk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 906, 242, $pk_color);
}

if ($pw == 'y') {
$pw_color = imagecolorallocate($im, 74, 173, 214);
imagefill($im, 1194, 330, $pw_color);
} else if ($pw == '') {
$pw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1194, 330, $pw_color);
}

if ($pa == 'y') {
$pa_color = imagecolorallocate($im, 210, 16, 52);
imagefill($im, 299, 327, $pa_color);
} else if ($pa == '') {
$pa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 299, 327, $pa_color);
}

if ($pg == 'y') {
$pg_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 1232, 390, $pg_color);
imagefill($im, 1261, 392, $pg_color);
imagefill($im, 1269, 381, $pg_color);
imagefill($im, 1279, 395, $pg_color);
} else if ($pg == '') {
$pg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1232, 390, $pg_color);
imagefill($im, 1261, 392, $pg_color);
imagefill($im, 1269, 381, $pg_color);
imagefill($im, 1279, 395, $pg_color);
}

if ($py == 'y') {
$py_color = imagecolorallocate($im, 0, 56, 168);
imagefill($im, 393, 463, $py_color);
} else if ($py == '') {
$py_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 393, 463, $py_color);
}

if ($pe == 'y') {
$pe_color = imagecolorallocate($im, 218, 18, 26);
imagefill($im, 327, 414, $pe_color);
} else if ($pe == '') {
$pe_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 327, 414, $pe_color);
}

if ($ph == 'y') {
$ph_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 1135, 291, $ph_color);
imagefill($im, 1137, 307, $ph_color);
imagefill($im, 1148, 309, $ph_color);
imagefill($im, 1155, 312, $ph_color);
imagefill($im, 1143, 312, $ph_color);
imagefill($im, 1152, 318, $ph_color);
imagefill($im, 1146, 321, $ph_color);
imagefill($im, 1156, 330, $ph_color);
imagefill($im, 1128, 321, $ph_color);
} else if ($ph == '') {
$ph_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1135, 291, $ph_color);
imagefill($im, 1137, 307, $ph_color);
imagefill($im, 1148, 309, $ph_color);
imagefill($im, 1155, 312, $ph_color);
imagefill($im, 1143, 312, $ph_color);
imagefill($im, 1152, 318, $ph_color);
imagefill($im, 1146, 321, $ph_color);
imagefill($im, 1156, 330, $ph_color);
imagefill($im, 1128, 321, $ph_color);
}

if ($pl == 'y') {
$pl_color = imagecolorallocate($im, 220, 20, 60);
imagefill($im, 712, 131, $pl_color);
} else if ($pl == '') {
$pl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 712, 131, $pl_color);
}

if ($pt == 'y') {
$pt_color = imagecolorallocate($im, 192, 12, 12);
imagefill($im, 608, 185, $pt_color);
} else if ($pt == '') {
$pt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 608, 185, $pt_color);
}

if ($us_pr == 'y') {
$us_pr_color = imagecolorallocate($im, 0, 80, 240);
imagefill($im, 363, 281, $us_pr_color);
} else if ($us_pr == '') {
$us_pr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 363, 281, $us_pr_color);
}

if ($qa == 'y') {
$qa_color = imagecolorallocate($im, 112, 25, 61);
imagefill($im, 846, 250, $qa_color);
} else if ($qa == '') {
$qa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 846, 250, $qa_color);
}

if ($cg == 'y') {
$cg_color = imagecolorallocate($im, 0, 149, 67);
imagefill($im, 703, 364, $cg_color);
} else if ($cg == '') {
$cg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 703, 364, $cg_color);
}

if ($rd == 'y') {
$rd_color = imagecolorallocate($im, 135, 172, 244);
imagefill($im, 748, 201, $rd_color);
} else if ($rd == '') {
$rd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 748, 201, $rd_color);
}

if ($fr_re == 'y') {
$fr_re_color = imagecolorallocate($im, 0, 97, 167);
imagefill($im, 866, 459, $fr_re_color);
} else if ($fr_re == '') {
$fr_re_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 866, 459, $fr_re_color);
}

if ($ro == 'y') {
$ro_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 732, 156, $ro_color);
} else if ($ro == '') {
$ro_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 732, 156, $ro_color);
}

if ($ru == 'y') {
$ru_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 1161, 139, $ru_color);
imagefill($im, 814, 44, $ru_color);
imagefill($im, 949, 95, $ru_color);
imagefill($im, 895, 22, $ru_color);
imagefill($im, 909, 25, $ru_color);
imagefill($im, 920, 27, $ru_color);
imagefill($im, 1060, 37, $ru_color);
imagefill($im, 1071, 38, $ru_color);
imagefill($im, 1078, 38, $ru_color);
} else if ($ru == '') {
$ru_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1161, 139, $ru_color);
imagefill($im, 814, 44, $ru_color);
imagefill($im, 949, 95, $ru_color);
imagefill($im, 895, 22, $ru_color);
imagefill($im, 909, 25, $ru_color);
imagefill($im, 920, 27, $ru_color);
imagefill($im, 1060, 37, $ru_color);
imagefill($im, 1071, 38, $ru_color);
imagefill($im, 1078, 38, $ru_color);
}

if ($rw == 'y') {
$rw_color = imagecolorallocate($im, 32, 96, 61);
imagefill($im, 760, 371, $rw_color);
} else if ($rw == '') {
$rw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 760, 371, $rw_color);
}

if ($fr_bl == 'y') {
$fr_bl_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 380, 284, $fr_bl_color);
} else if ($fr_bl == '') {
$fr_bl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 380, 284, $fr_bl_color);
}

if ($sh == 'y') {
$sh_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 614, 438, $sh_color);
} else if ($sh == '') {
$sh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 614, 438, $sh_color);
}

if ($kn == 'y') {
$kn_color = imagecolorallocate($im, 0, 158, 73);
imagefill($im, 376, 286, $kn_color);
imagefill($im, 377, 287, $kn_color);
} else if ($kn == '') {
$kn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 376, 286, $kn_color);
imagefill($im, 377, 287, $kn_color);
}

if ($lc == 'y') {
$lc_color = imagecolorallocate($im, 99, 206, 255);
imagefill($im, 386, 302, $lc_color);
} else if ($lc == '') {
$lc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 386, 302, $lc_color);
}

if ($fr_pm == 'y') {
$fr_pm_color = imagecolorallocate($im, 0, 146, 200);
imagefill($im, 434, 151, $fr_pm_color);
} else if ($fr_pm == '') {
$fr_pm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 434, 151, $fr_pm_color);
}

if ($vc == 'y') {
$vc_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 384, 306, $vc_color);
} else if ($vc == '') {
$vc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 384, 306, $vc_color);
}

if ($ws == 'y') {
$ws_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 1411, 427, $ws_color);
} else if ($ws == '') {
$ws_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1411, 427, $ws_color);
}

if ($sm == 'y') {
$sm_color = imagecolorallocate($im, 0, 130, 195);
imagefill($im, 684, 164, $sm_color);
} else if ($sm == '') {
$sm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 684, 164, $sm_color);
}

if ($st == 'y') {
$st_color = imagecolorallocate($im, 18, 173, 43);
imagefill($im, 667, 361, $st_color);
imagefill($im, 669, 356, $st_color);
} else if ($st == '') {
$st_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 667, 361, $st_color);
imagefill($im, 669, 356, $st_color);
}

if ($sa == 'y') {
$sa_color = imagecolorallocate($im, 245, 226, 186);
imagefill($im, 823, 261, $sa_color);
} else if ($sa == '') {
$sa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 823, 261, $sa_color);
}

if ($sn == 'y') {
$sn_color = imagecolorallocate($im, 0, 133, 63);
imagefill($im, 577, 295, $sn_color);
} else if ($sn == '') {
$sn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 577, 295, $sn_color);
}

if ($rs == 'y') {
$rs_color = imagecolorallocate($im, 220, 31, 38);
imagefill($im, 719, 166, $rs_color);
} else if ($rs == '') {
$rs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 719, 166, $rs_color);
}

if ($sc == 'y') {
$sc_color = imagecolorallocate($im, 252, 216, 86);
imagefill($im, 871, 408, $sc_color);
imagefill($im, 870, 389, $sc_color);
} else if ($sc == '') {
$sc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 871, 408, $sc_color);
imagefill($im, 870, 389, $sc_color);
}

if ($sl == 'y') {
$sl_color = imagecolorallocate($im, 30, 181, 58);
imagefill($im, 587, 328, $sl_color);
} else if ($sl == '') {
$sl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 587, 328, $sl_color);
}

if ($sg == 'y') {
$sg_color = imagecolorallocate($im, 237, 41, 57);
imagefill($im, 1069, 357, $sg_color);
} else if ($sg == '') {
$sg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1069, 357, $sg_color);
}

if ($kr == 'y') {
$kr_color = imagecolorallocate($im, 0, 52, 120);
imagefill($im, 1140, 202, $kr_color);
} else if ($kr == '') {
$kr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1140, 202, $kr_color);
}

if ($sk == 'y') {
$sk_color = imagecolorallocate($im, 11, 78, 162);
imagefill($im, 712, 144, $sk_color);
} else if ($sk == '') {
$sk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 712, 144, $sk_color);
}

if ($si == 'y') {
$si_color = imagecolorallocate($im, 0, 93, 164);
imagefill($im, 694, 155, $si_color);
} else if ($si == '') {
$si_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 694, 155, $si_color);
}

if ($sb == 'y') {
$sb_color = imagecolorallocate($im, 0, 81, 106);
imagefill($im, 1286, 398, $sb_color);
imagefill($im, 1288, 403, $sb_color);
imagefill($im, 1294, 403, $sb_color);
imagefill($im, 1300, 407, $sb_color);
imagefill($im, 1296, 409, $sb_color);
imagefill($im, 1302, 412, $sb_color);
} else if ($sb == '') {
$sb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1286, 398, $sb_color);
imagefill($im, 1288, 403, $sb_color);
imagefill($im, 1294, 403, $sb_color);
imagefill($im, 1300, 407, $sb_color);
imagefill($im, 1296, 409, $sb_color);
imagefill($im, 1302, 412, $sb_color);
}

if ($so == 'y') {
$so_color = imagecolorallocate($im, 65, 137, 221);
imagefill($im, 817, 353, $so_color);
} else if ($so == '') {
$so_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 817, 353, $so_color);
}

if ($sq == 'y') {
$sq_color = imagecolorallocate($im, 250, 0, 2);
imagefill($im, 694, 194, $sq_color);
} else if ($sq == '') {
$sq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 694, 194, $sq_color);
}

if ($za == 'y') {
$za_color = imagecolorallocate($im, 222, 56, 49);
imagefill($im, 733, 506, $za_color);
} else if ($za == '') {
$za_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 733, 506, $za_color);
}

if ($gs == 'y') {
$gs_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 496, 611, $gs_color);
imagefill($im, 506, 615, $gs_color);
imagefill($im, 523, 623, $gs_color);
} else if ($gs == '') {
$gs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 496, 611, $gs_color);
imagefill($im, 506, 615, $gs_color);
imagefill($im, 523, 623, $gs_color);
}

if ($es == 'y') {
$es_color = imagecolorallocate($im, 255, 196, 0);
imagefill($im, 625, 182, $es_color);
} else if ($es == '') {
$es_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 625, 182, $es_color);
}

if ($es_ma == 'y') {
$es_ma_color = imagecolorallocate($im, 255, 196, 0);
imagefill($im, 651, 185, $es_ma_color);
imagefill($im, 655, 183, $es_ma_color);
imagefill($im, 646, 187, $es_ma_color);
} else if ($es_ma == '') {
$es_ma_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 651, 185, $es_ma_color);
imagefill($im, 655, 183, $es_ma_color);
imagefill($im, 646, 187, $es_ma_color);
}

if ($es_ce == 'y') {
$es_ce_color = imagecolorallocate($im, 255, 196, 0);
imagefill($im, 618, 203, $es_ce_color);
imagefill($im, 626, 206, $es_ce_color);
} else if ($es_ce == '') {
$es_ce_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 618, 203, $es_ce_color);
imagefill($im, 626, 206, $es_ce_color);
}

if ($lk == 'y') {
$lk_color = imagecolorallocate($im, 141, 32, 41);
imagefill($im, 972, 331, $lk_color);
} else if ($lk == '') {
$lk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 972, 331, $lk_color);
}

if ($sd == 'y') {
$sd_color = imagecolorallocate($im, 0, 114, 41);
imagefill($im, 753, 299, $sd_color);
} else if ($sd == '') {
$sd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 753, 299, $sd_color);
}

if ($ss == 'y') {
$ss_color = imagecolorallocate($im, 15, 71, 175);
imagefill($im, 765, 332, $ss_color);
} else if ($ss == '') {
$ss_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 765, 332, $ss_color);
}

if ($sr == 'y') {
$sr_color = imagecolorallocate($im, 0, 141, 41);
imagefill($im, 404, 348, $sr_color);
} else if ($sr == '') {
$sr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 404, 348, $sr_color);
}

if ($sz == 'y') {
$sz_color = imagecolorallocate($im, 255, 217, 0);
imagefill($im, 764, 484, $sz_color);
} else if ($sz == '') {
$sz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 764, 484, $sz_color);
}

if ($se == 'y') {
$se_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 694, 86, $se_color);
} else if ($se == '') {
$se_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 694, 86, $se_color);
}

if ($ch == 'y') {
$ch_color = imagecolorallocate($im, 213, 43, 30);
imagefill($im, 672, 153, $ch_color);
} else if ($ch == '') {
$ch_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 672, 153, $ch_color);
}

if ($sx == 'y') {
$sx_color = imagecolorallocate($im, 203, 11, 11);
imagefill($im, 675, 182, $sx_color);
} else if ($sx == '') {
$sx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 675, 182, $sx_color);
}

if ($sy == 'y') {
$sy_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 780, 205, $sy_color);
} else if ($sy == '') {
$sy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 780, 205, $sy_color);
}

if ($tw == 'y') {
$tw_color = imagecolorallocate($im, 0, 0, 149);
imagefill($im, 1129, 255, $tw_color);
} else if ($tw == '') {
$tw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1129, 255, $tw_color);
}

if ($tj == 'y') {
$tj_color = imagecolorallocate($im, 204, 0, 0);
imagefill($im, 907, 189, $tj_color);
} else if ($tj == '') {
$tj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 907, 189, $tj_color);
}

if ($tz == 'y') {
$tz_color = imagecolorallocate($im, 6, 163, 221);
imagefill($im, 785, 396, $tz_color);
} else if ($tz == '') {
$tz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 785, 396, $tz_color);
}

if ($th == 'y') {
$th_color = imagecolorallocate($im, 222, 16, 24);
imagefill($im, 1053, 297, $th_color);
} else if ($th == '') {
$th_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1053, 297, $th_color);
}

if ($gm == 'y') {
$gm_color = imagecolorallocate($im, 12, 28, 140);
imagefill($im, 571, 303, $gm_color);
} else if ($gm == '') {
$gm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 571, 303, $gm_color);
}

if ($tl == 'y') {
$tl_color = imagecolorallocate($im, 255, 199, 38);
imagefill($im, 1157, 404, $tl_color);
} else if ($tl == '') {
$tl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1157, 404, $tl_color);
}

if ($tg == 'y') {
$tg_color = imagecolorallocate($im, 0, 106, 78);
imagefill($im, 640, 325, $tg_color);
} else if ($tg == '') {
$tg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 640, 325, $tg_color);
}

if ($tk == 'y') {
$tk_color = imagecolorallocate($im, 0, 36, 125);
imagefill($im, 1411, 409, $tk_color);
} else if ($tk == '') {
$tk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1411, 409, $tk_color);
}

if ($to == 'y') {
$to_color = imagecolorallocate($im, 193, 0, 0);
imagefill($im, 1392, 457, $to_color);
imagefill($im, 1400, 445, $to_color);
imagefill($im, 1404, 437, $to_color);
} else if ($to == '') {
$to_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1392, 457, $to_color);
imagefill($im, 1400, 445, $to_color);
imagefill($im, 1404, 437, $to_color);
}

if ($tt == 'y') {
$tt_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 385, 313, $tt_color);
imagefill($im, 381, 318, $tt_color);
} else if ($tt == '') {
$tt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 385, 313, $tt_color);
imagefill($im, 381, 318, $tt_color);
}

if ($tn == 'y') {
$tn_color = imagecolorallocate($im, 231, 0, 19);
imagefill($im, 674, 211, $tn_color);
} else if ($tn == '') {
$tn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 674, 211, $tn_color);
}

if ($tr == 'y') {
$tr_color = imagecolorallocate($im, 227, 10, 23);
imagefill($im, 745, 176, $tr_color);
imagefill($im, 767, 190, $tr_color);
} else if ($tr == '') {
$tr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 745, 176, $tr_color);
imagefill($im, 767, 190, $tr_color);
}

if ($tm == 'y') {
$tm_color = imagecolorallocate($im, 204, 0, 0);
imagefill($im, 870, 184, $tm_color);
} else if ($tm == '') {
$tm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 870, 184, $tm_color);
}

if ($tc == 'y') {
$tc_color = imagecolorallocate($im, 0, 0, 102);
imagefill($im, 343, 261, $tc_color);
} else if ($tc == '') {
$tc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 343, 261, $tc_color);
}

if ($tv == 'y') {
$tv_color = imagecolorallocate($im, 252, 202, 29);
imagefill($im, 1379, 409, $tv_color);
} else if ($tv == '') {
$tv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1379, 409, $tv_color);
}

if ($ug == 'y') {
$ug_color = imagecolorallocate($im, 255, 231, 0);
imagefill($im, 773, 355, $ug_color);
} else if ($ug == '') {
$ug_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 773, 355, $ug_color);
}

if ($ua == 'y') {
$ua_color = imagecolorallocate($im, 255, 213, 0);
imagefill($im, 759, 139, $ua_color);
} else if ($ua == '') {
$ua_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 759, 139, $ua_color);
}

if ($ae == 'y') {
$ae_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 859, 257, $ae_color);
} else if ($ae == '') {
$ae_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 859, 257, $ae_color);
}

if ($gb == 'y') {
$gb_color = imagecolorallocate($im, 207, 20, 43);
imagefill($im, 620, 118, $gb_color);
imagefill($im, 637, 128, $gb_color);
} else if ($gb == '') {
$gb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 620, 118, $gb_color);
imagefill($im, 637, 128, $gb_color);
}

if ($us == 'y') {
$us_color = imagecolorallocate($im, 0, 38, 100);
imagefill($im, 171, 76, $us_color);
imagefill($im, 22, 266, $us_color);
imagefill($im, 255, 173, $us_color);
imagefill($im, 9, 257, $us_color);
imagefill($im, 14, 260, $us_color);
imagefill($im, 20, 263, $us_color);
imagefill($im, 125, 106, $us_color);
imagefill($im, 182, 108, $us_color);
imagefill($im, 183, 115, $us_color);
imagefill($im, 186, 109, $us_color);
} else if ($us == '') {
$us_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 171, 76, $us_color);
imagefill($im, 22, 266, $us_color);
imagefill($im, 255, 173, $us_color);
imagefill($im, 9, 257, $us_color);
imagefill($im, 14, 260, $us_color);
imagefill($im, 20, 263, $us_color);
imagefill($im, 125, 106, $us_color);
imagefill($im, 182, 108, $us_color);
imagefill($im, 183, 115, $us_color);
imagefill($im, 186, 109, $us_color);
}

if ($uy == 'y') {
$uy_color = imagecolorallocate($im, 252, 209, 22);
imagefill($im, 417, 512, $uy_color);
} else if ($uy == '') {
$uy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 417, 512, $uy_color);
}

if ($us_vi == 'y') {
$us_vi_color = imagecolorallocate($im, 245, 206, 0);
imagefill($im, 371, 280, $us_vi_color);
imagefill($im, 368, 283, $us_vi_color);
} else if ($us_vi == '') {
$us_vi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 371, 280, $us_vi_color);
imagefill($im, 368, 283, $us_vi_color);
}

if ($uz == 'y') {
$uz_color = imagecolorallocate($im, 30, 181, 58);
imagefill($im, 880, 175, $uz_color);
} else if ($uz == '') {
$uz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 880, 175, $uz_color);
}

if ($vu == 'y') {
$vu_color = imagecolorallocate($im, 210, 16, 52);
imagefill($im, 1324, 436, $vu_color);
imagefill($im, 1326, 440, $vu_color);
imagefill($im, 1328, 433, $vu_color);
imagefill($im, 1329, 438, $vu_color);
imagefill($im, 1327, 442, $vu_color);
} else if ($vu == '') {
$vu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1324, 436, $vu_color);
imagefill($im, 1326, 440, $vu_color);
imagefill($im, 1328, 433, $vu_color);
imagefill($im, 1329, 438, $vu_color);
imagefill($im, 1327, 442, $vu_color);
}

if ($va == 'y') {
$va_color = imagecolorallocate($im, 255, 225, 0);
imagefill($im, 688, 175, $va_color);
} else if ($va == '') {
$va_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 688, 175, $va_color);
}

if ($ve == 'y') {
$ve_color = imagecolorallocate($im, 247, 229, 23);
imagefill($im, 368, 330, $ve_color);
} else if ($ve == '') {
$ve_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 368, 330, $ve_color);
}

if ($vn == 'y') {
$vn_color = imagecolorallocate($im, 218, 37, 29);
imagefill($im, 1066, 267, $vn_color);
} else if ($vn == '') {
$vn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1066, 267, $vn_color);
}

if ($fr_wf == 'y') {
$fr_wf_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 1395, 425, $fr_wf_color);
} else if ($fr_wf == '') {
$fr_wf_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 1395, 425, $fr_wf_color);
}

if ($ps == 'y') {
$ps_color = imagecolorallocate($im, 0, 122, 61);
imagefill($im, 779, 223, $ps_color);
} else if ($ps == '') {
$ps_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 779, 223, $ps_color);
}

if ($eh == 'y') {
$eh_color = imagecolorallocate($im, 245, 226, 186);
imagefill($im, 583, 255, $eh_color);
} else if ($eh == '') {
$eh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 583, 255, $eh_color);
}

if ($ye == 'y') {
$ye_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 839, 291, $ye_color);
} else if ($ye == '') {
$ye_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 839, 291, $ye_color);
}

if ($zm == 'y') {
$zm_color = imagecolorallocate($im, 25, 138, 0);
imagefill($im, 744, 434, $zm_color);
} else if ($zm == '') {
$zm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 744, 434, $zm_color);
}

if ($zw == 'y') {
$zw_color = imagecolorallocate($im, 255, 210, 0);
imagefill($im, 757, 450, $zw_color);
} else if ($zw == '') {
$zw_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 757, 450, $zw_color);
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

ImagePNG($im,'images/poster.png');

// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Test Image with alpha channel
 * @author Nicola Asuni
 * @copyright 2004-2009 Nicola Asuni - Tecnick.com S.r.l (www.tecnick.com) Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
 * @link http://tcpdf.org
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 2008-12-23
 */

require_once('TCPDF/config/lang/eng.php');
require_once('TCPDF/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('wherehaveibeen.info user');
$pdf->SetTitle('Where I Have Visited in the World');
$pdf->SetSubject('World Map PNG-PDF Conversion Test');
$pdf->SetKeywords('world image, PDF, example, test, guide');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->AddPage();
$pdf->Image('images/poster.png', 22, 22, 502, 220, 'PNG', 'http://wherehaveibeen.info', 'center', false, 300, 'center');
$pdf->Output('images/poster.pdf', 'F');

$media_size	= false;
$poster_width	= false;
$poster_height	= false;
$measurement_unit	= false;

if(isset($_POST['mymiap'])) {
//echo "GOT IN HERE $pythonPath . $cwd .";
$media_size	= $_POST['media_size'];
$poster_width	= $_POST['poster_width'];
$poster_height	= $_POST['poster_height'];
$measurement_unit	= $_POST['measurement_unit'];

$result = exec("./posterScript/pdfposter -m".$media_size." -p".$poster_width."x".$poster_height.$measurement_unit." $cwd/images/poster.pdf $cwd/images/posterout.pdf &> $cwd/images/log.txt");
echo $result;
}

$strFilePath = 'images/posterout.pdf';
$strFileSize = filesize($strFilePath);
$strFileName = basename($strFilePath);

$fileContents = file_get_contents($strFilePath);
$pathinfo = pathinfo($strFilePath);
$strFileType = $pathinfo['extension'];

header("Content-type: application/pdf");
header("Content-Length: $strFileSize");
header("Content-Disposition:attachment; filename=$strFileName");
echo $fileContents;

ImageDestroy($im);
?>
