<?php 
	$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
			if(isset($_SERVER['HTTPS'])):
				if ($_SERVER["HTTPS"] == "on"): 
					$protocol = "https:";
				else:
					$protocol = "http:";
				endif;
			else :
				$protocol = "http:";
			endif;
		define('url_root_shiodome',$protocol.'//'.$_SERVER["SERVER_NAME"].'/academy/');
		define('url_root_domain',$protocol.'//kandc.com/');

		$count_item_event=9;
?>