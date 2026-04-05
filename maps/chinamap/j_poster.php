<?php
error_reporting(0);
//error_reporting(E_ALL);

/* Session start */
session_start();

include '../../config.php'; 

$libPath   = "$cwd/../../libs/";

putenv("PYTHONPATH=$libPath");

$thisMap = $chinaCookie;

$countries = explode('#',$_SESSION[$thisMap]);

foreach($countries AS $key) $$key='y';

$newImageName = 'images/self.png';
$im = imagecreatefrompng($newImageName);
if(!$im)
    {$file = 'images/china_map_users_copy.png';
$newfile = 'images/self.png';
copy($file, $newfile);
if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
$im = imagecreatefrompng($newImageName);
}
if ($ah == 'y') {
$ah_color = imagecolorallocate($im, 17, 103, 205);
imagefill($im, 648, 424, $ah_color);
} else if ($ah == '') {
$ah_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 648, 424, $ah_color);
}
if ($bj == 'y') {
$bj_color = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 629, 261, $bj_color);
} else if ($bj == '') {
$bj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 629, 261, $bj_color);
}
if ($cq == 'y') {
$cq_color = imagecolorallocate($im, 0, 0, 109);
imagefill($im, 493, 466, $cq_color);
} else if ($cq == '') {
$cq_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 493, 466, $cq_color);
}
if ($fj == 'y') {
$fj_color = imagecolorallocate($im, 255, 206, 63);
imagefill($im, 670, 530, $fj_color);
} else if ($fj == '') {
$fj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 670, 530, $fj_color);
}
if ($gs == 'y') {
$gs_color = imagecolorallocate($im, 233, 212, 165);
imagefill($im, 446, 369, $gs_color);
} else if ($gs == '') {
$gs_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 446, 369, $gs_color);
}
if ($gd == 'y') {
$gd_color = imagecolorallocate($im, 226, 96, 13);
imagefill($im, 591, 575, $gd_color);
} else if ($gd == '') {
$gd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 591, 575, $gd_color);
}
if ($gx == 'y') {
$gx_color = imagecolorallocate($im, 0, 160, 35);
imagefill($im, 507, 581, $gx_color);
} else if ($gx == '') {
$gx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 507, 581, $gx_color);
}
if ($gz == 'y') {
$gz_color = imagecolorallocate($im, 255, 213, 71);
imagefill($im, 476, 519, $gz_color);
} else if ($gz == '') {
$gz_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 476, 519, $gz_color);
}
if ($ha == 'y') {
$ha_color = imagecolorallocate($im, 0, 40, 217);
imagefill($im, 526, 672, $ha_color);
} else if ($ha == '') {
$ha_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 526, 672, $ha_color);
}
if ($heb == 'y') {
$heb_color = imagecolorallocate($im, 236, 94, 4);
imagefill($im, 612, 291, $heb_color);
} else if ($heb == '') {
$heb_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 612, 291, $heb_color);
}
if ($hk == 'y') {
$hk_color = imagecolorallocate($im, 218, 19, 0);
imagefill($im, 606, 610, $hk_color);
} else if ($hk == '') {
$hk_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 606, 610, $hk_color);
}
if ($hl == 'y') {
$hl_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 772, 116, $hl_color);
} else if ($hl == '') {
$hl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 772, 116, $hl_color);
}
if ($hen == 'y') {
$hen_color = imagecolorallocate($im, 0, 142, 0);
imagefill($im, 591, 388, $hen_color);
} else if ($hen == '') {
$hen_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 591, 388, $hen_color);
}
if ($hub == 'y') {
$hub_color = imagecolorallocate($im, 244, 246, 38);
imagefill($im, 570, 440, $hub_color);
} else if ($hub == '') {
$hub_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 570, 440, $hub_color);
}
if ($hun == 'y') {
$hun_color = imagecolorallocate($im, 213, 17, 6);
imagefill($im, 560, 506, $hun_color);
} else if ($hun == '') {
$hun_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 560, 506, $hun_color);
}
if ($nm == 'y') {
$nm_color = imagecolorallocate($im, 201, 125, 38);
imagefill($im, 520, 248, $nm_color);
} else if ($nm == '') {
$nm_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 520, 248, $nm_color);
}
if ($ju == 'y') {
$ju_color = imagecolorallocate($im, 255, 237, 30);
imagefill($im, 685, 391, $ju_color);
} else if ($ju == '') {
$ju_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 685, 391, $ju_color);
}
if ($jx == 'y') {
$jx_color = imagecolorallocate($im, 0, 175, 0);
imagefill($im, 626, 502, $jx_color);
} else if ($jx == '') {
$jx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 626, 502, $jx_color);
}
if ($jl == 'y') {
$jl_color = imagecolorallocate($im, 53, 141, 0);
imagefill($im, 754, 183, $jl_color);
} else if ($jl == '') {
$jl_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 754, 183, $jl_color);
}
if ($ln == 'y') {
$ln_color = imagecolorallocate($im, 255, 221, 22);
imagefill($im, 714, 229, $ln_color);
} else if ($ln == '') {
$ln_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 714, 229, $ln_color);
}
if ($mc == 'y') {
$mc_color = imagecolorallocate($im, 0, 107, 78);
imagefill($im, 596, 613, $mc_color);
} else if ($mc == '') {
$mc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 596, 613, $mc_color);
}
if ($nx == 'y') {
$nx_color = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 471, 324, $nx_color);
} else if ($nx == '') {
$nx_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 471, 324, $nx_color);
}
if ($qh == 'y') {
$qh_color = imagecolorallocate($im, 241, 0, 0);
imagefill($im, 316, 337, $qh_color);
} else if ($qh == '') {
$qh_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 316, 337, $qh_color);
}
if ($twn == 'y') {
$twn_color = imagecolorallocate($im, 32, 64, 218);
imagefill($im, 727, 569, $twn_color);
} else if ($twn == '') {
$twn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 727, 569, $twn_color);
}
if ($saa == 'y') {
$saa_color = imagecolorallocate($im, 209, 0, 0);
imagefill($im, 512, 380, $saa_color);
} else if ($saa == '') {
$saa_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 512, 380, $saa_color);
}
if ($sd == 'y') {
$sd_color = imagecolorallocate($im, 218, 0, 0);
imagefill($im, 655, 338, $sd_color);
} else if ($sd == '') {
$sd_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 655, 338, $sd_color);
}
if ($shg == 'y') {
$shg_color = imagecolorallocate($im, 250, 0, 0);
imagefill($im, 717, 429, $shg_color);
} else if ($shg == '') {
$shg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 717, 429, $shg_color);
}
if ($sax == 'y') {
$sax_color = imagecolorallocate($im, 0, 40, 194);
imagefill($im, 567, 312, $sax_color);
} else if ($sax == '') {
$sax_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 567, 312, $sax_color);
}
if ($sc == 'y') {
$sc_color = imagecolorallocate($im, 142, 0, 0);
imagefill($im, 412, 446, $sc_color);
} else if ($sc == '') {
$sc_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 412, 446, $sc_color);
}
if ($tj == 'y') {
$tj_color = imagecolorallocate($im, 12, 116, 221);
imagefill($im, 639, 282, $tj_color);
} else if ($tj == '') {
$tj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 639, 282, $tj_color);
}
if ($xzg == 'y') {
$xzg_color = imagecolorallocate($im, 255, 221, 21);
imagefill($im, 182, 393, $xzg_color);
} else if ($xzg == '') {
$xzg_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 182, 393, $xzg_color);
}
if ($xj == 'y') {
$xj_color = imagecolorallocate($im, 0, 76, 195);
imagefill($im, 198, 204, $xj_color);
} else if ($xj == '') {
$xj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 198, 204, $xj_color);
}
if ($yn == 'y') {
$yn_color = imagecolorallocate($im, 32, 63, 218);
imagefill($im, 380, 558, $yn_color);
} else if ($yn == '') {
$yn_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 380, 558, $yn_color);
}
if ($zj == 'y') {
$zj_color = imagecolorallocate($im, 251, 75, 0);
imagefill($im, 699, 473, $zj_color);
} else if ($zj == '') {
$zj_color = imagecolorallocate($im, 185, 185, 185);
imagefill($im, 699, 473, $zj_color);
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
$pdf->SetAuthor('chinamap.wherehaveibeen.info user');
$pdf->SetTitle('Where I Have Visited in China');
$pdf->SetSubject('China Map PNG-PDF Conversion Test');
$pdf->SetKeywords('map of China, China, travelogue, PDF, travel');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->AddPage();
$posterwidth = imagesx('images/poster.png');
$posterheight = imagesy('images/poster.png');
$pdf->Image('images/poster.png', 22, 22, $posterwidth, $posterheight, 'PNG', 'http://chinamap.wherehaveibeen.info', 'center', false, 300, 'center');
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