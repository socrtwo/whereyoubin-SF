<?php
include 'j_countries_count.php';
include 'include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="-1">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="description" content="Free service for coloring a map with the countries you have travled to in your life.">
	<meta name="keywords" content="world, travel, free, service, 1000 places">

	<title>Where In the World Have You Been All Your Life?</title>

	<link rel="stylesheet" href="http://<?php echo OWN_DOMAIN;?>/css/example.css" type="text/css" media="screen">
	<link rel="stylesheet" href="http://<?php echo OWN_DOMAIN;?>/css/example-print.css" type="text/css" media="print">
	<script type="text/javascript" src="http://<?php echo OWN_DOMAIN;?>/scripts/share.js"></script>
	<script type="text/javascript" src="http://<?php echo $thisDomain;?>/scripts/j_countries_load_new.js"></script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>

	<style type="text/css">

	.style1 {

		text-align: center;

	}

	.style2 {

		margin-top: 6px;

		margin-bottom: 6px;

	}

	.style7 {

		color: #8C8CCC;

	}

	.style10 {

		margin-top: 6px;

		margin-bottom: 6px;

		text-align: center;

	}

	.style9 {


		text-align: left;

	}

	.style11 {

		font-size: medium;

		color: #8C8CCC;

	}

	#countrytables {
	  width: 900px ;
	  margin-left: auto ;
	  margin-right: auto ;
	}

	.auto-style1 {
		text-align: left;
	}

	.auto-style2 {
		border-collapse: separate;
	}

	.auto-style9 {
		text-align: right;
	}

	.auto-style10 {
		border: 0 solid #800080;
		text-align: center;
	}

	.auto-style21 {
		margin-top: 0;
		margin-bottom: 22px;
		line-height: 100%;
	}
	.auto-style222 {
		line-height: 100%;
	}
	.auto-style23 {
		margin-top: 0;
		margin-bottom: 22px;
	}
	.auto-style24 {
		margin-top: 0;
		margin-bottom: 22px;
		text-align: left;
	}

	.auto-style26 {
		line-height: 100%;
		border-collapse: separate;
		text-align: center;
	}
	.auto-style27 {
		margin-top: 0;
		margin-bottom: 22px;
		line-height: 100%;
		text-align: center;
	}
	.auto-style28 {
		text-align: center;
		line-height: 100%;
	}

	.auto-style30 {
		line-height: 100%;
		font-size: xx-small;
		text-align: left;
		margin-left: 22px;
	}

	.auto-style52 {
		border-color: #800080;
		border-width: 0;
		border-collapse: collapse;
		}
	
	.auto-style112 {
		border-width: 0;
		text-align: center;
		border-collapse: separate;
	}

	.auto-style142 {
		margin: 37px 50px;
		vertical-align: middle;
	}

	.auto-style223 {
		border-color: #800080;
		border-width: 0;
	}

	.auto-style224 {
		margin-top: 0;
		margin-bottom: 22px;
		text-align: center;
	}

</style>


<script type="text/javascript">
stLight.options({publisher:'d1182916-30ed-4c9a-935a-d9f182c4d131'});
function FP_jumpMenu(el,frm,sel) {//v1.0
 var href=el.options[el.selectedIndex].value; if(sel) el.selectedIndex=0;
 if('_new'==frm) open(href); else eval(frm+".location='"+href+"'");
}

function FP_goToURL(url) {//v1.0
 window.location=url;
}
</script>


</head>

<body style="background-image: url('http://<?php echo OWN_DOMAIN;?>/images/web-bg.jpg')">

<div class="auto-style9">

<div class="auto-style1">

<div class="style1">

<table class="auto-style52">
<tr>
	<td class="auto-style112" style="width: 222px" valign="top">
		<div class="style1">
			<img alt="Spinning globe" class="auto-style142" height="112" src="http://<?php echo OWN_DOMAIN;?>/images/animation1.gif" width="112"><br>
			<strong>Try Other Maps:</strong><br class="auto-style2">
			<br>
			<select id="id1" onchange="FP_jumpMenu(this,'window',false)" size="1" name="D1">
			<option value="">Color Another Map</option>
			<option value="http://<?php echo OWN_DOMAIN;?>/index.php">World Map</option>
			<option value="http://<?php echo OWN_DOMAIN_AFRICA;?>/index.php">Africa Map - New!</option>
			<option value="http://<?php echo OWN_DOMAIN_CANADA;?>/index.php">Canada Map</option>
			<option value="http://<?php echo OWN_DOMAIN_CHINA;?>/index.php">China Map</option>
			<option value="http://<?php echo OWN_DOMAIN_EUROPE;?>/index.php">Europe Map</option>
			<option value="http://<?php echo OWN_DOMAIN_INDIA;?>/index.php">India Map</option>
			<option value="http://<?php echo OWN_DOMAIN_US;?>/index.php">United States Map</option>
			</select>

			<form method="post" id="save_map" name="save_map" action="http://<?php echo $thisDomain;?>/j_save.php">
				<p class="auto-style28">
					<strong>Save &amp; Download:</strong><br><br>
					<input type="submit" value="Save &amp; Download" style="width: 153px">
					<br>
					<input type='checkbox' name='printText' id='printText' value='1' onClick="changeprintext();"><span id="printTextDoc">Print text on image?</span>
					<script>
						changeprintext();
						function changeprintext ()
						{
							var checkboxEl = document.getElementById("printText");
							var checkTextEl = document.getElementById("printTextDoc");

							if (!checkboxEl.checked) 
							{
								checkTextEl.innerHTML = "Print text on image?";
							}
							else 
							{
								checkTextEl.innerHTML = "Don't print text on image?";
							}
						}
					</script>
				</p>
			</form>
			<form id="cektkp" name="cektkp" action="http://<?php echo $thisDomain;?>/index.php" method="post">
				<div class="style122">
					<p class="auto-style222">
						<strong>Make a <br>Permanent URL:</strong>
						<br class="auto-style22">
						<br class="auto-style22">
						<?php echo $lihat ?><?php echo $view ?>
						<?php echo $err_url ?> 
				<input type="submit" class="auto-style2" value="Permanent URL" id="buattkp" name="buattkp" style="width: 152px" ></p></div>
			</form>
			<form method="post" name="make_poster" id="make_poster" action="j_poster.php">
				<p class="auto-style26">
					<strong>Make a Poster:
					</strong>
				</p>
				<p class="auto-style28">Paper size: 
				<select name="media_size" class="auto-style22" style="width: 82px">
					<option value="letter">letter</option>
					<option value="a4">a4</option>
					<option value="legal">legal</option>
					<option value="monarch">monarch</option>
					<option value="statement">statement</option>
					<option value="executive">executive</option>
					<option value="quarto">quarto</option>
					<option value="folio">folio</option>
					<option value="tabloid">tabloid</option>
					<option value="ledger">ledger</option>
					<option value="a0">a0</option>
					<option value="a1">a1</option>
					<option value="a2">a2</option>
					<option value="a3">a3</option>
					<option value="a5">a5</option>
					<option value="a6">a6</option>
					<option value="a7">a7</option>
					<option value="a8">a8</option>
					<option value="a9">a9</option>
					<option value="a10">a10</option>
					<option value="dinlang">dinlang</option>
					<option value="b0">b0</option>
					<option value="b1">b1</option>
					<option value="b2">b2</option>
					<option value="b3">b3</option>
					<option value="b4">b4</option>
					<option value="b5">b5</option>
					<option value="b6">b6</option>
					<option value="b7">b7</option>
					<option value="b8">b8</option>
					<option value="b9">b9</option>
					<option value="b10">b10</option>
					<option value="c4">c4</option>
					<option value="c5">c5</option>
					<option value="c6">c6</option>
					<option value="jb0">jb0</option>
					<option value="jb1">jb1</option>
					<option value="jb2">jb2</option>
					<option value="jb3">jb3</option>
					<option value="jb4">jb4</option>
					<option value="jb5">jb5</option>
					<option value="jb6">jb6</option>
					<option value="jb7">jb7</option>
					<option value="jb8">jb8</option>
					<option value="jb9">jb9</option>
					<option value="jb10">jb10</option>
					<option value="comm10">comm10</option>
					<option value="com10">com10</option>
					<option value="env10">env10</option>
				</select>
				</p>
				<p class="auto-style28">Units: 
					<select name="measurement_unit" class="auto-style22" style="width: 82px">
						<option value="ft">feet</option>
						<option value="meter">meters</option>
						<option value="inch">inches</option>
						<option value="point">points</option>
						<option value="mm">millimeters</option>
						<option value="cm">centimeters</option>
					</select>
				</p>
				<p class="auto-style28">Size wide: 
					<input id="poster_width" type="text" name="poster_width" size="10" value="" style="width: 40px" class="auto-style22">
				</p>
				<p class="auto-style28">&nbsp;Size high: 
					<input id="poster_height" type="text" name="poster_height" size="10" value="" style="width: 40px" class="auto-style22">
				</p>
				<p class="auto-style27">
					<input type="submit" class="auto-style22" value="Make Poster!" id="mymiap" name="mymiap" style="width: 182px">
				</p>
				<p class="auto-style30"><em>* Note - some of the pages produced in the PDF poster file will be odd sizes.&nbsp;They should still print out&nbsp; as normal full size pages.</em>
				</p>
			</form>

			<p class="auto-style21">
				<br>
				<script type="text/javascript"><!--
					google_ad_client = "ca-pub-9590646740012169";
					/* Where Have I been Tall and Wide */
					google_ad_slot = "6281411950";
					google_ad_width = 160;
					google_ad_height = 600;
					//-->
				</script>
				<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
			</p>
		</div>
	</td>
	<td class="auto-style10">
		<h1 class="style7">
			<img alt="Website title banner" height="126" src="http://<?php echo OWN_DOMAIN;?>/images/worldheader.jpg" width="1000">&nbsp;</h1>
		</h1>
			<p class="style7">
				The background swirls will not show up on your saved map images or poster print outs.
			</p>
			<table style="margin-left: auto; margin-right: auto; text-align:center; width: 100%;" align="center">
				<tr>
					<td>
						<script type="text/javascript"><!--
						google_ad_client = "ca-pub-9590646740012169";
						/* wherehaveibeen.info-halfbanners */
						google_ad_slot = "6498885985";
						google_ad_width = 234;
						google_ad_height = 60;
						//-->
						</script>
						<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>
					</td>
					<td>
						<div id="boldStuff" class="style11">
							<p class="auto-style224">
								<strong>Click on the countries to color them.</strong><br>
								You have visited <span id="Count"> <?php echo $areasVisited; ?></span>
								<br>
							</p>
						</div>
					</td>
					<td>
						<script type="text/javascript"><!--
						google_ad_client = "ca-pub-9590646740012169";
						/* wherehaveibeen.info-halfbanners */
						google_ad_slot = "6498885985";
						google_ad_width = 234;
						google_ad_height = 60;
						//-->
						</script>
						<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>&nbsp;
					</td>
				</tr>
			</table>	
			<center>
				<a name="start">
					<img src="images/self.png" alt="<?=$thisMap?>" id="<?=$thisMap?>" name="<?=$thisMap?>" style="border-style:none" usemap="#<?=$thisMap?>_image">
				</a>
				<br>
				<span id="php_code"></span>
				<br>
			</center>

			<p class="auto-style23">
			In addition to directly clicking on them, you can also select provinces by moving further 
			<br>down the page and checking them off in checkboxes. Alternatively with small provinces 
			<br>you can zoom in on the map by clicking with your left mouse button on an empty ocean 
			<br>part of the map then holding down the control key and rolling your mouse wheel forward.
			</p>

