<?php
if ($_POST['install']=="Done")
{
	$pk = fopen( 'config.php', 'w+');   

	$_POST['basedir'] = rtrim($_POST['basedir'],"/");
	
	fputs($pk,"<?php
	define('BASEDIR', '".$_POST['basedir']."');
	\$LANGUAGE='".$_POST['language']."';
	//dbconnect('".$_POST['HOST']."', '".$_POST['USER']."', '".$_POST['PASSWORD']."', '".$_POST['DATEBASE']."');
	define('MYSQL_HOST','".$_POST['HOST']."');
	define('MYSQL_USER','".$_POST['USER']."');
	define('MYSQL_PASS','".$_POST['PASSWORD']."');
	define('MYSQL_DB','".$_POST['DATEBASE']."');
	
	define('OWN_DOMAIN', '".$_POST['basedir']. "'); //yourdomain, do not include http://

	define('OWN_DOMAIN_AFRICA', OWN_DOMAIN . '/maps/africamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_CANADA', OWN_DOMAIN . '/maps/canadamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_CHINA', OWN_DOMAIN . '/maps/chinamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_EUROPE', OWN_DOMAIN . '/maps/europemap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_INDIA', OWN_DOMAIN . '/maps/indiamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_US', OWN_DOMAIN . '/maps/usmap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_ASIA', OWN_DOMAIN . '/maps/asiamap'); //yourdomain, do not include http://

	\$worldCookie  = \"world_map\";
	\$africaCookie = \"africa_map\";
	\$canadaCookie = \"canada_map\";
	\$chinaCookie  = \"china_map\";
	\$europeCookie = \"europe_map\";
	\$indiaCookie  = \"india_map\";
	\$usCookie     = \"us_map\";
	\$asiaCookie   = \"asia_map\";

	\$cwd = getcwd();

	\$pythonPath   = \"".$_POST['pythonDir']."\";

	?>");
	
	include "config.php";
	include "include.php";

	$query = "CREATE TABLE IF NOT EXISTS `tags` (
	  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
	  `tags` varchar(50) NOT NULL,
	  `tkp` varchar(2222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	  `price` bigint(20) NOT NULL,
	  `status` varchar(20) NOT NULL,
	  PRIMARY KEY (`ID`)
	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1623 ;";

    mysql_query($query);

	header( 'Location: http://'.$_POST['basedir'].'/index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Where I have been configuration</title>
	<meta name="Description" content="description" />
	<style type="text/css" media="all">
	@import url("css/styles.css");
	</style>
</head>
<body>
	<div id="outerWrapper">
		<div id="feature">
			<p class="title">Installation</p>
			<?php
		if (File_Exists("config.php")) echo "To install, delete config.php";
		else
		{
			if (!isset($_GET['install']))
				echo "<form action='install.php' method='post' id='cut'>
				LANGUAGE:<br/>
				<select name='language'>
				<option value='english'>English</option>
				<option value='polish'>Polish</option>
				</select><br/>
				BASEDIR:<br/>
				<div id='tips'>
					<input style='	margin-bottom: 0px;' name='basedir' type='text' value='".$_SERVER['HTTP_HOST'].dirname(rtrim($_SERVER['PHP_SELF'],"/"))."' /><br/>
				</div>";
				$_POST['pythonDir'] = "/usr/bin/python/";
				echo "
				<!--
                                PYTHON Directory:<br/>
                                <div id='tips'>
					<input style='	margin-bottom: 0px;' name='pythonDir' type='text' value='' /><br/>
				</div>
				-->
				SQL HOST:<br/>
				<input name='HOST' type='text' value='localhost' /><br/>
				SQL USER:<br/>
				<input name='USER' type='text' value='' /><br/>
				SQL PASSWORD:<br/>
				<input name='PASSWORD' type='text' value='' /><br/>
				SQL DATEBASE:<br/>
				<input name='DATEBASE' type='text' value='' /><br/>

				<input name='install' type='submit' id='button' value='Done' />
				</form>";
		}
		?>
	</div>
	<div id="footer">
		<p>Code by Mateusz Jelinek(nienic@tlen.pl)</p>
	</div>
</div>
</body>
</html>
