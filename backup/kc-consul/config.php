<?php
/*
	Author: Nguyen Nhu Minh
*/
			@include('Lib/_init.php');
			@include('../Lib/_init.php');
			@include('../../Lib/_init.php');
			@include('../../../Lib/_init.php');
			
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
			
			//define('url_root',$protocol.'//kc-consul.com/');
			define('url_root',$protocol.'//www.kc-consul.com/');
			
	        define('url_root_main',$protocol.'//www.kandc.com/');
			define('url_root_like','http://www.kandc.com/turning-point/');
			define('url_root_kandc_thumb','http://www.kandc.com/administrator/upload_thumnail/');
			
			define('url_root_interview',$protocol.'//kc-consul.com/interview/');
			define('url_root_interview_img',$protocol.'//kc-consul.com/img/interviews/');

?>