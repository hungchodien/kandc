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
		define('url_root',$protocol.'//'.$_SERVER["SERVER_NAME"].'/landing/agent-b/');
		define('url_root_domain',$protocol.'//www.kandc.com/');
?>