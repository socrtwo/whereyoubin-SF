<?php
error_reporting(0);
#error_reporting(E_ALL);

/* Session start */
session_start();

include '../../config.php'; 

$libPath   = "$cwd/../../libs/";

putenv("PYTHONPATH=$libPath");

$thisMap = $europeCookie;

$countries = explode('#',$_SESSION[$thisMap]);

foreach($countries AS $key) $$key='y';

$newImageName = 'images/self.png';
$im = imagecreatefrompng($newImageName);
if(!$im)
    {$file = 'images/europe_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}
if ($ab == 'y') {
$ab_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 608, 664, $ab_color);
} else if ($ab == '') {
$ab_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 608, 664, $ab_color);
}
if ($ad == 'y') {
$ad_color = imagecolorallocate($im, 252, 217, 0);
imagefill($im, 379, 643, $ad_color);
} else if ($ad == '') {
$ad_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 379, 643, $ad_color);
}
if ($at == 'y') {
$at_color = imagecolorallocate($im, 250, 225, 2);
imagefill($im, 533, 563, $at_color);
} else if ($at == '') {
$at_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 533, 563, $at_color);
}
if ($az == 'y') {
$az_color = imagecolorallocate($im, 0, 152, 195);
imagefill($im, 944, 546, $az_color);
} else if ($az == '') {
$az_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 944, 546, $az_color);
}
if ($ba == 'y') {
$ba_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 575, 617, $ba_color);
} else if ($ba == '') {
$ba_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 575, 617, $ba_color);
}
if ($be == 'y') {
$be_color = imagecolorallocate($im, 254, 203, 0);
imagefill($im, 427, 513, $be_color);
} else if ($be == '') {
$be_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 427, 513, $be_color);
}
if ($bg == 'y') {
$bg_color = imagecolorallocate($im, 0, 150, 110);
imagefill($im, 672, 625, $bg_color);
} else if ($bg == '') {
$bg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 672, 625, $bg_color);
}
if ($bl == 'y') {
$bl_color = imagecolorallocate($im, 64, 16, 76);
imagefill($im, 392, 694, $bl_color);
imagefill($im, 406, 689, $bl_color);
imagefill($im, 377, 699, $bl_color);
imagefill($im, 379, 702, $bl_color);
} else if ($bl == '') {
$bl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 392, 694, $bl_color);
imagefill($im, 406, 689, $bl_color);
imagefill($im, 377, 699, $bl_color);
imagefill($im, 379, 702, $bl_color);
}
if ($by == 'y') {
$by_color = imagecolorallocate($im, 0, 153, 0);
imagefill($im, 655, 445, $by_color);
} else if ($by == '') {
$by_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 655, 445, $by_color);
}
if ($ch == 'y') {
$ch_color = imagecolorallocate($im, 213, 43, 30);
imagefill($im, 461, 577, $ch_color);
} else if ($ch == '') {
$ch_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 461, 577, $ch_color);
}
if ($cs == 'y') {
$cs_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 470, 656, $cs_color);
} else if ($cs == '') {
$cs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 470, 656, $cs_color);
}
if ($ct == 'y') {
$ct_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 687, 750, $ct_color);
} else if ($ct == '') {
$ct_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 687, 750, $ct_color);
}
if ($cy == 'y') {
$cy_color = imagecolorallocate($im, 237, 128, 0);
imagefill($im, 792, 724, $cy_color);
} else if ($cy == '') {
$cy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 792, 724, $cy_color);
}
if ($cz == 'y') {
$cz_color = imagecolorallocate($im, 17, 69, 126);
imagefill($im, 539, 528, $cz_color);
} else if ($cz == '') {
$cz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 539, 528, $cz_color);
}
if ($de == 'y') {
$de_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 484, 512, $de_color);
imagefill($im, 513, 452, $de_color);
} else if ($de == '') {
$de_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 484, 512, $de_color);
imagefill($im, 513, 452, $de_color);
}
if ($dk == 'y') {
$dk_color = imagecolorallocate($im, 208, 12, 51);
imagefill($im, 475, 425, $dk_color);
imagefill($im, 498, 434, $dk_color);
imagefill($im, 496, 444, $dk_color);
imagefill($im, 500, 444, $dk_color);
imagefill($im, 483, 404, $dk_color);
} else if ($dk == '') {
$dk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 475, 425, $dk_color);
imagefill($im, 498, 434, $dk_color);
imagefill($im, 496, 444, $dk_color);
imagefill($im, 500, 444, $dk_color);
imagefill($im, 483, 404, $dk_color);
}
if ($ee == 'y') {
$ee_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 618, 365, $ee_color);
imagefill($im, 590, 376, $ee_color);
imagefill($im, 590, 368, $ee_color);
} else if ($ee == '') {
$ee_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 618, 365, $ee_color);
imagefill($im, 590, 376, $ee_color);
imagefill($im, 590, 368, $ee_color);
}
if ($es == 'y') {
$es_color = imagecolorallocate($im, 255, 196, 0);
imagefill($im, 308, 677, $es_color);
} else if ($es == '') {
$es_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 308, 677, $es_color);
}
if ($fi == 'y') {
$fi_color = imagecolorallocate($im, 0, 53, 128);
imagefill($im, 604, 268, $fi_color);
imagefill($im, 604, 301, $fi_color);
imagefill($im, 567, 351, $fi_color);
imagefill($im, 622, 301, $fi_color);
imagefill($im, 617, 299, $fi_color);
} else if ($fi == '') {
$fi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 604, 268, $fi_color);
imagefill($im, 604, 301, $fi_color);
imagefill($im, 567, 351, $fi_color);
imagefill($im, 622, 301, $fi_color);
imagefill($im, 617, 299, $fi_color);
}
if ($fr == 'y') {
$fr_color = imagecolorallocate($im, 0, 35, 149);
imagefill($im, 396, 579, $fr_color);
} else if ($fr == '') {
$fr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 396, 579, $fr_color);
}
if ($ga == 'y') {
$ga_color = imagecolorallocate($im, 249, 195, 0);
imagefill($im, 896, 547, $ga_color);
} else if ($ga == '') {
$ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 896, 547, $ga_color);
}
if ($gb == 'y') {
$gb_color = imagecolorallocate($im, 207, 20, 43);
imagefill($im, 368, 472, $gb_color);
imagefill($im, 337, 373, $gb_color);
imagefill($im, 341, 457, $gb_color);
imagefill($im, 361, 502, $gb_color);
} else if ($gb == '') {
$gb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 368, 472, $gb_color);
imagefill($im, 337, 373, $gb_color);
imagefill($im, 341, 457, $gb_color);
imagefill($im, 361, 502, $gb_color);
}
if ($ge == 'y') {
$ge_color = imagecolorallocate($im, 249, 221, 22);
imagefill($im, 347, 523, $ge_color);
} else if ($ge == '') {
$ge_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 347, 523, $ge_color);
}
if ($gr == 'y') {
$gr_color = imagecolorallocate($im, 13, 94, 175);
imagefill($im, 633, 688, $gr_color);
imagefill($im, 642, 717, $gr_color);
imagefill($im, 662, 698, $gr_color);
imagefill($im, 724, 726, $gr_color);
} else if ($gr == '') {
$gr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 633, 688, $gr_color);
imagefill($im, 642, 717, $gr_color);
imagefill($im, 662, 698, $gr_color);
imagefill($im, 724, 726, $gr_color);
}
if ($hr == 'y') {
$hr_color = imagecolorallocate($im, 222, 24, 24);
imagefill($im, 557, 591, $hr_color);
} else if ($hr == '') {
$hr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 557, 591, $hr_color);
}
if ($hu == 'y') {
$hu_color = imagecolorallocate($im, 0, 135, 81);
imagefill($im, 587, 566, $hu_color);
} else if ($hu == '') {
$hu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 587, 566, $hu_color);
}
if ($ic == 'y') {
$ic_color = imagecolorallocate($im, 58, 123, 190);
imagefill($im, 137, 825, $ic_color);
imagefill($im, 112, 825, $ic_color);
imagefill($im, 99, 815, $ic_color);
imagefill($im, 93, 814, $ic_color);
imagefill($im, 86, 804, $ic_color);
} else if ($ic == '') {
$ic_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 137, 825, $ic_color);
imagefill($im, 112, 825, $ic_color);
imagefill($im, 99, 815, $ic_color);
imagefill($im, 93, 814, $ic_color);
imagefill($im, 86, 804, $ic_color);
}
if ($ie == 'y') {
$ie_color = imagecolorallocate($im, 0, 154, 73);
imagefill($im, 307, 447, $ie_color);
} else if ($ie == '') {
$ie_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 307, 447, $ie_color);
}
if ($mi == 'y') {
$mi_color = imagecolorallocate($im, 201, 175, 122);
imagefill($im, 344, 438, $mi_color);
} else if ($mi == '') {
$mi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 344, 438, $mi_color);
}
if ($is == 'y') {
$is_color = imagecolorallocate($im, 0, 56, 151);
imagefill($im, 288, 237, $is_color);
imagefill($im, 274, 210, $is_color);
} else if ($is == '') {
$is_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 288, 237, $is_color);
imagefill($im, 274, 210, $is_color);
}
if ($je == 'y') {
$je_color = imagecolorallocate($im, 247, 217, 23);
imagefill($im, 350, 528, $je_color);
} else if ($je == '') {
$je_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 350, 528, $je_color);
}
if ($kl == 'y') {
$kl_color = imagecolorallocate($im, 0, 149, 218);
imagefill($im, 594, 438, $kl_color);
} else if ($kl == '') {
$kl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 594, 438, $kl_color);
}
if ($li == 'y') {
$li_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 479, 574, $li_color);
} else if ($li == '') {
$li_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 479, 574, $li_color);
}
if ($lt == 'y') {
$lt_color = imagecolorallocate($im, 253, 185, 19);
imagefill($im, 625, 425, $lt_color);
} else if ($lt == '') {
$lt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 625, 425, $lt_color);
}
if ($lu == 'y') {
$lu_color = imagecolorallocate($im, 0, 161, 222);
imagefill($im, 440, 529, $lu_color);
} else if ($lu == '') {
$lu_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 440, 529, $lu_color);
}
if ($lv == 'y') {
$lv_color = imagecolorallocate($im, 158, 48, 57);
imagefill($im, 618, 395, $lv_color);
} else if ($lv == '') {
$lv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 618, 395, $lv_color);
}
if ($ma == 'y') {
$ma_color = imagecolorallocate($im, 203, 155, 54);
imagefill($im, 112, 744, $ma_color);
} else if ($ma == '') {
$ma_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 112, 744, $ma_color);
}
if ($mc == 'y') {
$mc_color = imagecolorallocate($im, 206, 17, 38);
imagefill($im, 449, 628, $mc_color);
} else if ($mc == '') {
$mc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 449, 628, $mc_color);
}
if ($md == 'y') {
$md_color = imagecolorallocate($im, 204, 9, 47);
imagefill($im, 689, 542, $md_color);
} else if ($md == '') {
$md_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 689, 542, $md_color);
}
if ($me == 'y') {
$me_color = imagecolorallocate($im, 203, 155, 54);
imagefill($im, 594, 638, $me_color);
} else if ($me == '') {
$me_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 594, 638, $me_color);
}
if ($mk == 'y') {
$mk_color = imagecolorallocate($im, 255, 230, 0);
imagefill($im, 628, 653, $mk_color);
} else if ($mk == '') {
$mk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 628, 653, $mk_color);
}
if ($ni == 'y') {
$ni_color = imagecolorallocate($im, 255, 204, 0);
imagefill($im, 324, 427, $ni_color);
} else if ($ni == '') {
$ni_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 324, 427, $ni_color);
}
if ($nl == 'y') {
$nl_color = imagecolorallocate($im, 33, 70, 139);
imagefill($im, 435, 492, $nl_color);
} else if ($nl == '') {
$nl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 435, 492, $nl_color);
}
if ($no == 'y') {
$no_color = imagecolorallocate($im, 0, 40, 104);
imagefill($im, 479, 328, $no_color);
imagefill($im, 510, 47, $no_color);
imagefill($im, 526, 60, $no_color);
imagefill($im, 521, 50, $no_color);
imagefill($im, 525, 30, $no_color);
} else if ($no == '') {
$no_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 479, 328, $no_color);
imagefill($im, 510, 47, $no_color);
imagefill($im, 526, 60, $no_color);
imagefill($im, 521, 50, $no_color);
imagefill($im, 525, 30, $no_color);
}
if ($pl == 'y') {
$pl_color = imagecolorallocate($im, 220, 20, 60);
imagefill($im, 581, 483, $pl_color);
} else if ($pl == '') {
$pl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 581, 483, $pl_color);
}
if ($pt == 'y') {
$pt_color = imagecolorallocate($im, 0, 102, 0);
imagefill($im, 249, 667, $pt_color);
} else if ($pt == '') {
$pt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 249, 667, $pt_color);
}
if ($ro == 'y') {
$ro_color = imagecolorallocate($im, 0, 43, 127);
imagefill($im, 652, 578, $ro_color);
} else if ($ro == '') {
$ro_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 652, 578, $ro_color);
}
if ($rs == 'y') {
$rs_color = imagecolorallocate($im, 198, 54, 60);
imagefill($im, 613, 617, $rs_color);
} else if ($rs == '') {
$rs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 613, 617, $rs_color);
}
if ($ru == 'y') {
$ru_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 785, 365, $ru_color);
imagefill($im, 888, 428, $ru_color);
imagefill($im, 672, 29, $ru_color);
imagefill($im, 734, 13, $ru_color);
imagefill($im, 691, 87, $ru_color);
imagefill($im, 700, 141, $ru_color);
imagefill($im, 735, 93, $ru_color);
} else if ($ru == '') {
$ru_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 785, 365, $ru_color);
imagefill($im, 888, 428, $ru_color);
imagefill($im, 672, 29, $ru_color);
imagefill($im, 734, 13, $ru_color);
imagefill($im, 691, 87, $ru_color);
imagefill($im, 700, 141, $ru_color);
imagefill($im, 735, 93, $ru_color);
}
if ($sa == 'y') {
$sa_color = imagecolorallocate($im, 0, 130, 195);
imagefill($im, 511, 626, $sa_color);
} else if ($sa == '') {
$sa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 511, 626, $sa_color);
}
if ($sc == 'y') {
$sc_color = imagecolorallocate($im, 255, 220, 0);
imagefill($im, 540, 730, $sc_color);
} else if ($sc == '') {
$sc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 540, 730, $sc_color);
}
if ($sd == 'y') {
$sd_color = imagecolorallocate($im, 204, 0, 0);
imagefill($im, 469, 690, $sd_color);
} else if ($sd == '') {
$sd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 469, 690, $sd_color);
}
if ($se == 'y') {
$se_color = imagecolorallocate($im, 254, 203, 0);
imagefill($im, 522, 322, $se_color);
imagefill($im, 558, 396, $se_color);
imagefill($im, 542, 414, $se_color);
imagefill($im, 551, 368, $se_color);
imagefill($im, 540, 381, $se_color);
} else if ($se == '') {
$se_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 522, 322, $se_color);
imagefill($im, 558, 396, $se_color);
imagefill($im, 542, 414, $se_color);
imagefill($im, 551, 368, $se_color);
imagefill($im, 540, 381, $se_color);
}
if ($si == 'y') {
$si_color = imagecolorallocate($im, 0, 93, 164);
imagefill($im, 537, 588, $si_color);
} else if ($si == '') {
$si_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 537, 588, $si_color);
}
if ($sk == 'y') {
$sk_color = imagecolorallocate($im, 238, 28, 37);
imagefill($im, 582, 540, $sk_color);
} else if ($sk == '') {
$sk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 582, 540, $sk_color);
}
if ($sm == 'y') {
$sm_color = imagecolorallocate($im, 0, 146, 70);
imagefill($im, 511, 643, $sm_color);
} else if ($sm == '') {
$sm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 511, 643, $sm_color);
}
if ($tr == 'y') {
$tr_color = imagecolorallocate($im, 227, 10, 23);
imagefill($im, 697, 642, $tr_color);
} else if ($tr == '') {
$tr_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 697, 642, $tr_color);
}
if ($ua == 'y') {
$ua_color = imagecolorallocate($im, 255, 213, 0);
imagefill($im, 719, 503, $ua_color);
} else if ($ua == '') {
$ua_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 719, 503, $ua_color);
}
if ($va == 'y') {
$va_color = imagecolorallocate($im, 255, 224, 0);
imagefill($im, 513, 660, $va_color);
} else if ($va == '') {
$va_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 513, 660, $va_color);}
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
require_once('../../TCPDF/config/lang/eng.php');
require_once('../../TCPDF/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('europemap.wherehaveibeen.info user');
$pdf->SetTitle('Where I Have Visited in Europe');
$pdf->SetSubject('Europe Map PNG-PDF Conversion Test');
$pdf->SetKeywords('map of Europe, Europe, travelogue, PDF, travel');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->AddPage();
$posterwidth = imagesx('images/poster.png');
$posterheight = imagesy('images/poster.png');
$pdf->Image('images/poster.png', 22, 22, $posterwidth, $posterheight, 'PNG', 'http://europemap.wherehaveibeen.info', 'center', false, 300, 'center');
$pdf->Output('images/poster.pdf', 'F');

$media_size	= false;
$poster_width	= false;
$poster_height	= false;
$measurement_unit	= false;

if(isset($_POST['mymiap'])) {
$media_size	= $_POST['media_size'];
$poster_width	= $_POST['poster_width'];
$poster_height	= $_POST['poster_height'];
$measurement_unit	= $_POST['measurement_unit'];

$result = exec("../../posterScript/pdfposter -m".$media_size." -p".$poster_width."x".$poster_height.$measurement_unit." $cwd/images/poster.pdf $cwd/images/posterout.pdf &> $cwd/images/log.txt");
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