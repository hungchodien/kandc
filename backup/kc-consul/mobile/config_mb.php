<?php
/*
	Author: Nguyen Nhu Minh
*/
			@include('Lib/_init.php');
			@include('../Lib/_init.php');
			@include('../../Lib/_init.php');
			@include('../../../Lib/_init.php');
			$rowsperpage_category_job =10;
			
			$rowsperpage_search_all_job=2;
			
			$rowsperpage_search_all_interview=2;
			
			$rowsperpage_search_all_hunter_eye=2;
			
			$rowsperpage_search_all_career_up=2;
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
			define('url_root_domain',$protocol.'//kc-consul.com/');
	        define('url_root_main',$protocol.'//kandc.com/');
			define('url_root_like','http://kandc.com/turning-point/');
			define('url_root_kandc_thumb','http://kandc.com/administrator/upload_thumnail/');

?>