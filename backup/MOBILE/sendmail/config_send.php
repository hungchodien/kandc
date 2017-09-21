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
			define('url_root',$protocol.'//'.$_SERVER["SERVER_NAME"].'/mobile/');
			define('url_root_domain',$protocol.'//'.$_SERVER["SERVER_NAME"].'/');
?>