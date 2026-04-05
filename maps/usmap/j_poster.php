<?php
error_reporting(0);
#error_reporting(E_ALL);

/* Session start */
session_start();

include '../../config.php'; 

$libPath   = "$cwd/../../libs/";

putenv("PYTHONPATH=$libPath");

$thisMap = $usCookie;

$countries = explode('#',$_SESSION[$thisMap]);

foreach($countries AS $key) $$key='y';

$newImageName = 'images/us_map.png';
$im = imagecreatefrompng($newImageName);

if ($ak == 'y'){
$ak_color = imagecolorallocate($im, 15,	32, 122);
imagefill($im, 110, 500, $ak_color);
} else if ($ak == ''){
$ak_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 110, 500, $ak_color);
}

if ($al == 'y'){
$al_color = imagecolorallocate($im, 178, 0, 34);
imagefill($im, 630, 415, $al_color);
} else if ($al == ''){
$al_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 630, 415, $al_color);
}

if ($ar == 'y'){
$ar_color = imagecolorallocate($im, 190, 10, 47);
imagefill($im, 530, 380, $ar_color);
} else if ($ar == ''){
$ar_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 530, 380, $ar_color);
}

if ($az == 'y'){
$az_color = imagecolorallocate($im, 190, 10, 47);
imagefill($im, 190, 365, $az_color);
} else if ($az == ''){
$az_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 190, 365, $az_color);
}

if ($ca == 'y'){
$ca_color = imagecolorallocate($im, 254, 215, 0);
imagefill($im, 70, 300, $ca_color);
} else if ($ca == ''){
$ca_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 70, 300, $ca_color);
}

if ($co == 'y'){
$co_color = imagecolorallocate($im, 190, 10, 47);
imagefill($im, 300, 285, $co_color);
} else if ($co == ''){
$co_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 300, 285, $co_color);
}

if ($ct == 'y'){
$ct_color = imagecolorallocate($im, 1, 106, 233);
imagefill($im, 830, 190, $ct_color);
} else if ($ct == ''){
$ct_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 830, 190, $ct_color);
}

if ($md == 'y'){
$md_color = imagecolorallocate($im, 190, 0, 0);
imagefill($im, 776, 264, $md_color);
} else if ($md == ''){
$md_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 776, 264, $md_color);
}

if ($de == 'y'){
$de_color = imagecolorallocate($im, 119, 161, 182);
imagefill($im, 802, 261, $de_color);
} else if ($de == ''){
$de_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 802, 261, $de_color);
}

if ($fl == 'y'){
$fl_color = imagecolorallocate($im, 4, 122, 63);
imagefill($im, 730, 500, $fl_color);
} else if ($fl == ''){
$fl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 730, 500, $fl_color);
}

if ($ga == 'y'){
$ga_color = imagecolorallocate($im, 234, 132, 57);
imagefill($im, 700, 425, $ga_color);
} else if ($ga == ''){
$ga_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 700, 425, $ga_color);
}

if ($hi == 'y'){
$hi_color = imagecolorallocate($im, 208, 20, 44);
imagefill($im, 320, 570, $hi_color);
imagefill($im, 305, 545, $hi_color);
imagefill($im, 299, 541, $hi_color);
imagefill($im, 292, 543, $hi_color);
imagefill($im, 291, 537, $hi_color);
imagefill($im, 270, 530, $hi_color);
imagefill($im, 240, 517, $hi_color);
imagefill($im, 227, 521, $hi_color);
} else if ($hi == ''){
$hi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 320, 570, $hi_color);
imagefill($im, 305, 545, $hi_color);
imagefill($im, 299, 541, $hi_color);
imagefill($im, 292, 543, $hi_color);
imagefill($im, 291, 537, $hi_color);
imagefill($im, 270, 530, $hi_color);
imagefill($im, 240, 517, $hi_color);
imagefill($im, 227, 521, $hi_color);
}

if ($ia == 'y'){
$ia_color = imagecolorallocate($im, 0, 35, 125);
imagefill($im, 500, 225, $ia_color);
} else if ($ia == ''){
$ia_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 500, 225, $ia_color);
}

if ($id == 'y'){
$id_color = imagecolorallocate($im, 237, 176, 49);
imagefill($im, 180, 160, $id_color);
} else if ($id == ''){
$id_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 180, 160, $id_color);
}

if ($il == 'y'){
$il_color = imagecolorallocate($im, 194, 8, 47);
imagefill($im, 575, 270, $il_color);
} else if ($il == ''){
$il_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 575, 270, $il_color);
}

if ($ix == 'y'){
$ix_color = imagecolorallocate($im, 0, 15, 93);
imagefill($im, 625, 260, $ix_color);
} else if ($ix == ''){
$ix_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 625, 260, $ix_color);
}

if ($ks == 'y'){
$ks_color = imagecolorallocate($im, 251, 96, 14);
imagefill($im, 430, 300, $ks_color);
} else if ($ks == ''){
$ks_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 430, 300, $ks_color);
}

if ($ky == 'y'){
$ky_color = imagecolorallocate($im, 2, 192, 152);
imagefill($im, 650, 310, $ky_color);
} else if ($ky == ''){
$ky_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 650, 310, $ky_color);
}

if ($la == 'y'){
$la_color = imagecolorallocate($im, 0, 131, 87);
imagefill($im, 530, 460, $la_color);
} else if ($la == ''){
$la_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 530, 460, $la_color);
}

if ($ma == 'y'){
$ma_color = imagecolorallocate($im, 197, 30, 58);
imagefill($im, 840, 173, $ma_color);
} else if ($ma == ''){
$ma_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 840, 173, $ma_color);
}

if ($md == 'y'){
$md_color = imagecolorallocate($im, 200, 31, 50);
imagefill($im, 775, 255, $md_color);
imagefill($im, 739, 256, $md_color);
} else if ($md == ''){
$md_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 775, 255, $md_color);
imagefill($im, 739, 256, $md_color);
}

if ($me == 'y'){
$me_color = imagecolorallocate($im, 0,	38,	100);
imagefill($im, 860, 100, $me_color);
} else if ($me == ''){
$me_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 860, 100, $me_color);
}

if ($mi == 'y'){
$mi_color = imagecolorallocate($im, 0,	0,	158);
imagefill($im, 640, 190, $mi_color);
imagefill($im, 585, 130, $mi_color);
} else if ($mi == ''){
$mi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 640, 190, $mi_color);
imagefill($im, 585, 130, $mi_color);
}

if ($mn == 'y'){
$mn_color = imagecolorallocate($im, 61, 103, 201);
imagefill($im, 485, 130, $mn_color);
} else if ($mn == ''){
$mn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 485, 130, $mn_color);
}

if ($mo == 'y'){
$mo_color = imagecolorallocate($im, 153, 74, 35);
imagefill($im, 525, 310, $mo_color);
} else if ($mo == ''){
$mo_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 525, 310, $mo_color);
}

if ($ms == 'y'){
$ms_color = imagecolorallocate($im, 22, 52, 152);
imagefill($im, 580, 410, $ms_color);
} else if ($ms == ''){
$ms_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 580, 410, $ms_color);
}

if ($mt == 'y'){
$mt_color = imagecolorallocate($im, 166, 24, 0);
imagefill($im, 270, 110, $mt_color);
} else if ($mt == ''){
$mt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 270, 110, $mt_color);
}

if ($nc == 'y'){
$nc_color = imagecolorallocate($im, 190, 10, 47);
imagefill($im, 755, 335, $nc_color);
} else if ($nc == ''){
$nc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 755, 335, $nc_color);
}

if ($nd == 'y'){
$nd_color = imagecolorallocate($im, 254, 21, 64);
imagefill($im, 400, 110, $nd_color);
} else if ($nd == ''){
$nd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 400, 110, $nd_color);
}

if ($ne == 'y'){
$ne_color = imagecolorallocate($im, 238, 210, 67);
imagefill($im, 400, 240, $ne_color);
} else if ($ne == ''){
$ne_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 400, 240, $ne_color);
}

if ($nh == 'y'){
$nh_color = imagecolorallocate($im, 233, 170, 3);
imagefill($im, 835, 150, $nh_color);
} else if ($nh == ''){
$nh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 835, 150, $nh_color);
}

if ($nj == 'y'){
$nj_color = imagecolorallocate($im, 255, 201, 75);
imagefill($im, 812, 232, $nj_color);
} else if ($nj == ''){
$nj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 812, 232, $nj_color);
}

if ($nm == 'y'){
$nm_color = imagecolorallocate($im, 255, 197, 0);
imagefill($im, 300, 380, $nm_color);
} else if ($nm == ''){
$nm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 300, 380, $nm_color);
}

if ($nv == 'y'){
$nv_color = imagecolorallocate($im, 0, 71, 171);
imagefill($im, 130, 245, $nv_color);
} else if ($nv == ''){
$nv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 130, 245, $nv_color);
}

if ($ny == 'y'){
$ny_color = imagecolorallocate($im, 1, 42, 134);
imagefill($im, 780, 175, $ny_color);
imagefill($im, 825, 212, $ny_color);
} else if ($ny == ''){
$ny_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 780, 175, $ny_color);
imagefill($im, 825, 212, $ny_color);
}

if ($oh == 'y'){
$oh_color = imagecolorallocate($im, 192, 20, 60);
imagefill($im, 680, 250, $oh_color);
} else if ($oh == ''){
$oh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 680, 250, $oh_color);
}

if ($ok == 'y'){
$ok_color = imagecolorallocate($im, 0, 128, 1);
imagefill($im, 450, 360, $ok_color);
} else if ($ok == ''){
$ok_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 450, 360, $ok_color);
}

if ($or == 'y'){
$or_color = imagecolorallocate($im, 1, 0, 128);
imagefill($im, 90, 140, $or_color);
} else if ($or == ''){
$or_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 90, 140, $or_color);
}

if ($pa == 'y'){
$pa_color = imagecolorallocate($im, 32, 132, 78);
imagefill($im, 755, 225, $pa_color);
} else if ($pa == ''){
$pa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 755, 225, $pa_color);
}

if ($ri == 'y'){
$ri_color = imagecolorallocate($im, 255, 197, 1);
imagefill($im, 848, 185, $ri_color);
} else if ($ri == ''){
$ri_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 848, 185, $ri_color);
}

if ($sc == 'y'){
$sc_color = imagecolorallocate($im, 0, 65, 105);
imagefill($im, 730, 385, $sc_color);
} else if ($sc == ''){
$sc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 730, 385, $sc_color);
}

if ($sd == 'y'){
$sd_color = imagecolorallocate($im, 52, 122, 30);
imagefill($im, 400, 180, $sd_color);
} else if ($sd == ''){
$sd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 400, 180, $sd_color);
}

if ($tn == 'y'){
$tn_color = imagecolorallocate($im, 251, 183, 112);
imagefill($im, 630, 355, $tn_color);
} else if ($tn == ''){
$tn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 630, 355, $tn_color);
}

if ($tx == 'y'){
$tx_color = imagecolorallocate($im, 190, 10, 47);
imagefill($im, 410, 465, $tx_color);
} else if ($tx == ''){
$tx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 410, 465, $tx_color);
}

if ($ut == 'y'){
$ut_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 210, 270, $ut_color);
} else if ($ut == ''){
$ut_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 210, 270, $ut_color);
}

if ($va == 'y'){
$va_color = imagecolorallocate($im, 0, 41, 123);
imagefill($im, 760, 300, $va_color);
imagefill($im, 802, 290, $va_color);
} else if ($va == ''){
$va_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 760, 300, $va_color);
imagefill($im, 802, 290, $va_color);
}

if ($vt == 'y'){
$vt_color = imagecolorallocate($im, 10, 92, 10);
imagefill($im, 818, 135, $vt_color);
} else if ($vt == ''){
$vt_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 818, 135, $vt_color);
}

if ($wa == 'y'){
$wa_color = imagecolorallocate($im, 0, 131, 87);
imagefill($im, 115, 60, $wa_color);
imagefill($im, 87, 40, $wa_color);
} else if ($wa == ''){
$wa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 115, 60, $wa_color);
imagefill($im, 87, 40, $wa_color);
}

if ($wi == 'y'){
$wi_color = imagecolorallocate($im, 255, 238, 37);
imagefill($im, 555, 165, $wi_color);
} else if ($wi == ''){
$wi_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 555, 165, $wi_color);
}

if ($wv == 'y'){
$wv_color = imagecolorallocate($im, 207, 181, 60);
imagefill($im, 715, 280, $wv_color);
imagefill($im, 757, 256, $wv_color);
} else if ($wv == ''){
$wv_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 715, 280, $wv_color);
imagefill($im, 757, 256, $wv_color);
}

if ($wy == 'y'){
$wy_color = imagecolorallocate($im, 0, 39, 104);
imagefill($im, 285, 195, $wy_color);
} else if ($wy == ''){
$wy_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 285, 195, $wy_color);
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
require_once('../../TCPDF/config/lang/eng.php');
require_once('../../TCPDF/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('usmap.wherehaveibeen.info user');
$pdf->SetTitle('Where I Have Visited in the US');
$pdf->SetSubject('US Map PNG-PDF Conversion Test');
$pdf->SetKeywords('us image, PDF, example, test, guide');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->AddPage();
$posterwidth = imagesx('images/poster.png');
$posterheight = imagesy('images/poster.png');
$pdf->Image('images/poster.png', 22, 22, $posterwidth, $posterheight, 'PNG', 'http://usmap.wherehaveibeen.info', 'center', false, 300, 'center');
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