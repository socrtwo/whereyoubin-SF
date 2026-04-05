<?php 
/*  This included.php file is part of CekTKP ShortURL Script.

    CekTKP ShortURL Script is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    CekTKP ShortURL Script is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with CekTKP ShortURL Script.  If not, see <http://www.gnu.org/licenses/>.
*/

mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) or die("Unable to connect to database");
mysql_select_db(MYSQL_DB) or die("Unable to select the database");

$countries = explode('#',$_SESSION[$thisMap]);

foreach($countries AS $key)
{
	if($key!=null)
	{
		$urltoshort.="$key=y&";
	}
}

$urltoshort.="go=1";

if($_GET['go'] == '1') 
{ 
	$_SESSION[$thisMap]='';
	foreach($_GET as $key => $value) 
	{ 
		if($key != 'go') $newsession.= $key.'#'; 
	}
	$_SESSION[$thisMap] = $newsession;
}

function stripslashes_deep($value) 
{
	if (is_array($value)) 
	{
		if (count($value)>0) 
		{
			$return = array_combine(array_map('stripslashes_deep', array_keys($value)),array_map('stripslashes_deep', array_values($value)));
		} 
		else 
		{
			$return = array_map('stripslashes_deep', $value);
		}
		return $return;
	} 
	else 
	{
		$return = stripslashes($value);
		return $return ;
	}
}

function wp_parse_str( $string, &$array ) 
{
	parse_str( $string, $array );
	if ( get_magic_quotes_gpc() )
		$array = stripslashes_deep( $array );
}

function parse_args( $args, $defaults = '' ) 
{
	if ( is_array( $args ) )
		$r =& $args;
	else
		wp_parse_str( $args, $r );

	if ( is_array( $defaults ) )
		return array_merge( $defaults, $r );
	return $r;
}

//stripslashes_deep(),wp_parse_str(), and parse_args() above was stolen from wordpress.org script... :D

//required by validasi()
function get_validasi($str,$args='') 
{
	$kosong		= $args['kosong'];
	$type		= $args['type'];
	$max		= $args['max'];
	$min		= $args['min'];
	$include	= $args['include'];
	$exclude	= $args['exclude'];
	$equal		= $args['equal'];
	$notequal	= $args['notequal'];
	$contain	= $args['contain'];
	$notcontain	= $args['notcontain'];
	$msg		= false;
	
	if($kosong == 'no') {
	if(empty($str)) {
		return $msg = 'Tidak boleh kosong.';
		}
	}
	if($type == 'text') {
	if(is_numeric($str)) {
		$msg .= 'hanya text, ';
	}
	}
	
	if($type == 'alpha') {
	if(!preg_match('/^[0-9a-z]+$/i',$str)) {
		$msg .= 'bukan angka atau nomor';
	}
	}
	
	if($type == 'no') {
	if(!is_numeric($str)) {
		$msg .= 'hanya nomor, ';
		}
	}
	
	if($type == 'noupper') {
	$str = preg_replace('([^A-Za-z])','',$str); 
	if(ctype_upper($str)) {
		$msg .= 'tidak boleh huruf kapital semua, ';
	}
	}
	
	if($type == 'email') {
	if(!eregi("^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$", $str)) {
		$msg .= 'email tidak valid, ';
		}
	}
	//
	if($type == 'url') 
	{
		$urlregex = "~(https?|ftp)\:\/\/([a-z0-9+!*(),;?\&=\$_.-]+(\:[a-z0-9+!*(),;?\&=\$_.-]+)?@)?[a-z0-9+\$_-]+(\.[a-z0-9+\$_-]+)*(\:[0-9]{2,5})?(\/([a-z0-9+\$_-]\.?)+)*\/?(\?[a-z+&\$_.-][a-z0-9;:@/\&%=+\$_.-]*)?(#[a-z_.-][a-z0-9+\$_.-]*)?\$~i";
		if(!preg_match($urlregex, $str)) 
		{
			$msg .= 'url tidak valid '.$str.', ';
		}  
	}

	if($max !== '') 
	{
		if(strlen($str) > $max) 
			$msg .= 'maksimal '.$max.' karakter, ';
	}

	if($min !== '') 
	{
		if(strlen($str) < $min) 
			$msg .= 'minimal '.$min.' karakter, ';
	}
	
	if($equal !== '') {
	if($str !== $equal) {
		$msg .= 'tidak sama, ';
	}
	}
	
	if($notequal !== '') {
	if($str == $notequal) {
		$msg .= 'sudah terdaftar, ';
	}
	}
	
	if($contain !== '') {
	$pos = strpos($str,$contain);
	if($pos === false) {
		$msg .= 'must contain '.$contain;
	}
	}
	
	if($notcontain !== '') {
	$pos = strpos($str,$notcontain);
	if($pos === false) {
		$msg = '';
		}
	else {
		$msg .= 'Could not shorten from: '.$notcontain.'<br />';
	}
	}
	
	
	
	if($kosong == 'yes') {
	if(empty($str))
		return $msg = '';
	}
	
	$msg = (!empty($msg) ? substr_replace($msg, '.', -2, -1) : '');
	$msg = ucfirst(strtolower($msg));
	
	$msg = (!empty($msg) ? $msg : '');
	
	return $msg;
}

//validating form... function by takien (takien.com)
function validasi($str,$args = '') 
{
	$defaults = array(
		'kosong' => '',
		'type' => '',
		'max' => '',
		'min' => '',
		'include' => '',
		'exclude' => '',
		'equal' => '',
		'notequal' => '',
		'contain' => '',
		'notcontain' => ''
	);
	
	$r = parse_args($args, $defaults);
	extract($r);
	$validasi = get_validasi($str,$r);
	return $validasi;
}

//fungsi cektkp
function cektkp($url='') 
{
	$tkp = false;
	$ch = curl_init();    // initialize curl handle
	curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
	curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // max redirect to follow
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
	curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s
	curl_setopt($ch, CURLOPT_HEADER, 1); // include header in output
	curl_setopt($ch, CURLOPT_NOBODY, 1); // exclude body in output

	$result = curl_exec($ch); // run the whole process
	curl_close($ch); 

	preg_match('/Location:(.*?)\n/', $result, $matches); 
	$tkp = trim($matches[1]);

	return $tkp;
}

//fungsi make TKP, create short url for other domain

function maketkp($domain='',$url='',$tag='') 
{
	$url 	= urlencode($url);

	if($domain == 'tinyurl.com') {
		$remote = 'http://tinyurl.com/create.php?url='.$url.'&alias='.$tag;
		$taken	= 'The custom alias you';
		$match 	= '/\[<a href="(.*?)"/';
	}
	elseif($domain == 'bit.ly') {
		$remote = 'http://bit.ly/?s=&keyword='.$tag.'&url='.$url;
		$taken	= 'The custom keyword you tried to use was already used by someone else';
		$match	= '/<input id="shortened-url" value="(.*?)"/';
	}

	elseif($domain == 'xlr.us') {
		$remote = 'http://metamark.net/add?long_url='.$url.'&short_url='.$tag;
		$taken	= 'Sorry, that nickname is already in use.';
		$match	= '/name="urlfield" value="(.*?)"/';
	}

	elseif($domain == 'notlong.com') {
		$remote = 'http://notlong.com/?url='.$url.'&nickname='.$tag;
		$taken	= 'That notlong nickname has already been reserved.';
		$match	= '/value="(.*?)"/';
	}

	elseif($domain == '6url.com') {
		$remote = 'http://6url.com/make_small_url.aspx?q='.$url.'&alias='.$tag.'&btnsumbit=Make+it+short';
		$taken	= 'Operation Failed!!';
		$match	= '/Your small url is (.*?)<br>/';
	}


	//not support custom tag 
	elseif($domain == 'alturl.com') {
		$remote = 'http://alturl.com/make_shorturl.php?longurl='.$url;
		$taken	= '4sdr454d'; //just a random... 
		$match	= '/value = "(.*?)"/';
	} 

	elseif($domain == 'tiny.cc') {
		$remote = 'http://tiny.cc/?fullurl='.$url.'&keyword='.$tag;
		$taken	= '0849048';
		$match 	= '/copy\("(.*?)"\)/';
	}

	elseif($domain == 'shorl.com') {
		$remote = 'http://shorl.com/create.php?url='.$url.'&go=Shorlify!';
		$taken	= '84ismsot';
		$match 	= '/Shorl: <a href="(.*?)"/';
	}

	elseif($domain == 'alturl.com') {
		$remote = 'http://alturl.com/make_shorturl.php?longurl='.$url;
		$taken	= '4sdr454d'; 
		$match	= '/value = "(.*?)"/';
	}

	elseif($domain == 'simurl.com') {
		$remote = 'http://simurl.com/create.php?theurl='.urldecode($url);
		$taken	= '4sdr454d'; 
		$match	= '/"Text","(.*?)"/';
	}

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	//curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_COOKIEFILE, "cookiefile");
	curl_setopt($curl, CURLOPT_COOKIEJAR, "cookiefile"); # SAME cookiefile

	curl_setopt($curl, CURLOPT_URL, $remote); 
	$tkp = curl_exec($curl);
	curl_close ($curl);

	//check fail or success
	$fail = strpos($tkp,$taken);
	if($fail === false) 
	{
		preg_match($match,$tkp,$tkps);
		$tkp 	= trim($tkps[1]);
	}
	else 
	{
		$tkp  = $tag.' is already taken';
	}

	return $tkp; 
}

//begin..mbuh...
$url 		= false;
$err_url 	= false;
$error		= false;
$view		= false;
$lihat		= false;

//cektag 
function cek_tag($tag='') 
{
	$tagexists = FALSE;

	if(empty($tag)) 
	{
	}
	else 
	{
		$sql 	= "SELECT * FROM tags WHERE tags='$tag'";
		$hasil 	= mysql_query($sql);
		while($row = mysql_fetch_assoc($hasil)) 
		{
			if($row['tags'] == $tag) 
			{
				$tagexists = TRUE;
			}
		}
	}
	return $tagexists;
}

if(isset($_GET['tag'])) 
{
	$tag = $_GET['tag'];
	if(validasi($tag,'type=alpha') == '') 
	{
		$sql = "SELECT * FROM tags WHERE tags='$tag'";
		$hasil 	= mysql_query($sql);
		while($row = mysql_fetch_assoc($hasil)) 
		{
			$target = $row['tkp'];	
			header("Location: $target");
		}
	}
	else 
	{
		header('Location: http://'.$thisDomain);
	}
}

//buat tkp
if(isset($_POST['buattkp'])) 
{
	$url 		= 'http://'.$thisDomain.'/index.php?'.$urltoshort;
	$domain		= 'tinyurl.com';
	$tag		= $_POST['tag'];

	if(!empty($tag)) 
	{
		$tag 	= strtolower($tag);
		if(validasi($tag,'type=alpha&min=3&max=30') == '') 
		{
			$tag 	= $tag;
		}
		else 
		{
			$error = 1;
		}
	}

	//url field cannodh be empty
	$err_url = validasi($url,'type=url&kosong=no');
	//echo " ERROR IS " .$err_url;

	//ensure they don't input url that already shortened
	$domains 	= Array($thisDomain,
				'tinyurl.com',
				'bit.ly',
				'xrl.us',
				'6url.com',
				'notlong.com',
				'alturl.com',
				'tiny.cc',
				'shorl.com',
				'simurl.com'
			);

	if(!empty($err_url)) 
	{
		$error = 1; 
	}

	if(empty($error)) 
	{

		if($domain !== $thisDomain) 
		{
			$res 	= maketkp($domain,$url,$tag);
			if($res == $tag.' is already taken') 
			{
				$err_url .= $res. ' at '.$domain;
				$error 	= 1;
			}
			else 
			{
				$error = '';
			}

		if(empty($error)) 
		{
			$view = '<span class="style10"><a type="text" size="30" href="'.$res.'">'.$res.'</a><br><br></span>';

			$view  .=  '<a href="javascript:void(0);" onclick="openMail(\''.$res.'\')" title="Share by Email">Share by Email</a> | <a href="javascript:void(0);" onclick="openFacebook(\''.$res.'\')" title="Share on Facebook">Share to Facebook</a> | 
				<a href="javascript:void(0);" onclick="openTwitter(\''.$res.'\')" title="Share on Twitter">Share to Twitter</a><br><br>';

			$tag 	= str_replace('www.','',$res);
			$sql 	= "INSERT INTO tags (tags,tkp,status) VALUES('$tag','$url','taken')";
			$hasil 	= mysql_query($sql);
		}
		}
		elseif(!empty($tag) && $domain == $thisDomain) 
		{
			if(cek_tag($tag) == TRUE) 
			{
				$view  = '<b>'.$tag.'</b> tags not available';
			}
			else 
			{
				$sql 	= "INSERT INTO tags (tags,tkp,status) VALUES('$tag','$url','taken')";
				$hasil = mysql_query($sql);
				if(mysql_affected_rows()!==0) 
				{
					$view  = '<input type="text" size="30" value="http://'.$domain.'/'.$tag.'"/><br />';
					$view  .=  '<a href="javascript:void(0);" onclick="openFacebook(\'http://'.$domain.'/'.$tag.'\')" title="Share on Facebook">Share to Facebook</a> | 
					<a href="javascript:void(0);" onclick="openTwitter(\'http://'.$domain.'/'.$tag.'\')" title="Share on Twitter">Share to Twitter</a>';
				}
			}
		}
		else 
		{
			$tags = strtolower(crypt($url,md5(uniqid(mt_rand(), true))));
			$tag = substr($tags, 0, 3);

			if(cek_tag($tag) == TRUE) 
			{
				$tag = substr($tags, 0, 4);
			}

			if(cek_tag($tag) == TRUE) 
			{
				$tag = substr($tags, 0, 5);
			}
	
			$sql 	= "INSERT INTO tags (tags,tkp,status) VALUES('$tag','$url','taken')";
			$hasil = mysql_query($sql);
			if(mysql_affected_rows()!==0) 
			{
				$view  = '<br><a href="http://'.$thisDomain.'/'.$tag.'"/>'.'http://'.$thisDomain.'/'.$tag.'</a><br><br>';
				$view  .=  ' <a href="javascript:void(0);" onclick="openFacebook(\'http://'.$thisDomain.'/'.$tag.'\')" title="Share on Facebook">Share to Facebook</a> 
				 | 
				<a href="javascript:void(0);" onclick="openTwitter(\'http://'.$thisDomain.'/'.$tag.'\')" title="Share on Twitter">Share to Twitter</a>';
			}	
		}
	} //noerror
}

if(isset($_POST['cektkp'])) 
{
	$url = $_SERVER['PHP_SELF'];
	$hasil = cektkp($url);
	$lihat = '<div class="border p5"><strong>'.$url.'</strong> is redirected to <a href="'.$hasil.'">'.$hasil.'</a></div>';
}

//

function lastcreated() 
{
	$sql = 'SELECT * FROM tags ORDER BY ID DESC LIMIT 0,10';
	$hasil 	= mysql_query($sql);
	while($row = mysql_fetch_assoc($hasil)) 
	{
		$target 	= $row['tkp'];	
		$tags 		= $row['tags'];
		if(!empty($target)) 
		{ 
			echo '<li><a href="'.$tags.'" target="_blank">'.$tags.'</a></li>';
		}
	}
}

?>