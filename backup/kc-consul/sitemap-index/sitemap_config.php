<?php 
function TO_stripslashes($arr) {
	if (!is_array($arr)) return $arr;

	if (get_magic_quotes_gpc()) {
		$arr = array_map('stripslashes', $arr);
	}

	return $arr;
}

@include('../../Lib/config.php');
@include('../../Lib/connect.php');
@include('../../Lib/function/function.query.php');
@include('../../Lib/function/function.database.php');
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
if(isset($_SERVER['HTTPS'])):
if ($_SERVER["HTTPS"] == "on"): 
$protocol = "https:";
else:
$protocol = "http:";
endif;
else :
$protocol = "http:";
endif;
define('url_root',$protocol.'//'.$_SERVER["SERVER_NAME"].'/sitemap-index/');
define('url_domain',$protocol.'//'.$_SERVER["SERVER_NAME"].'/');
define('url_root_main',$protocol.'//www.kandc.com/');
?>