<?php
//============================================================+
// File name   : example_042.php
// Begin       : 2008-12-23
// Last Update : 2010-05-20
//
// Description : Example 042 for TCPDF class
//               Test Image with alpha channel
//
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

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('wherehaveibeen.info user');
$pdf->SetTitle('Where I Have Visited in the World');
$pdf->SetSubject('World Map PNG-PDF Conversion Test');
$pdf->SetKeywords('world image, PDF, example, test, guide');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->AddPage();
$pdf->Image('../images/excess.png', 22, 22, 502, 220, 'PNG', 'http://wherehaveibeen.info', 'center', false, 300, 'center');
$pdf->Output('excess.pdf', 'I');
?>
