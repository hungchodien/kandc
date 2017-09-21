<?php 
	/*
		Author: Minh.Nguyen250385@gmail.com
		Company: http://tokyodesignroom.com
	*/
?>



<?php 
	
	if(!empty($page)):
		switch($page)
			{
			case "demo":
				include('demo/index.php');
			break;
			
			case "privacy-policy":
				include('privacy-policy/index.php');
			break;
			case "sitemap":
				include('sitemap/index.php');
			break;

			case "company":
				include('company/index.php');
			break;


			case "entry":
				if(isset($_GET['entry_sub'])):
					include('entry/'.$_GET['entry_sub'].'.php');
				else:
					include('entry/index.php');
				endif;
			break;	
			case "process":
				include('process/index.php');
			break;	
			
			case "story":
				if(isset($_GET['sub-store-forder']) && isset($_GET['sub-store-file'])):
					include('story/'.$_GET['sub-store-forder'].'/'.$_GET['sub-store-file'].'.php');
				else:
					if(isset($_GET['sub-store-forder'])):
						include('story/'.$_GET['sub-store-forder'].'/index.php');
					else:
						include('story/index.php');
					endif;
					
				endif;
				
			break;	
			
			case "consultant":
				
				if(isset($_GET['detail_item'])):
					include('consultant/'.$_GET['detail_item'].'.php');
				else:
					include('consultant/index.php');
				endif;
			break;	
			
			case "access":
				include('access/index.php');
			break;
			
			default:
				include('inc/index.php');
			}
		
	else: 
		include('inc/index.php');
	endif;
	if($page=='entry'):
		if ($protocol == 'http:' || $protocol =='HTTP:'):
		$entry_protocol = str_replace('http', 'https', curPageURL_fix() );
		header('Location:'.$entry_protocol);
		endif;
	else:
		if ($protocol == 'https:' || $protocol =='HTTPS:'):
		$entry_protocol = str_replace('https', 'http', curPageURL_fix() );
		$entry_protocol=str_replace(':443', '', $entry_protocol );
		header('Location:'.$entry_protocol);
		endif;
	endif;
?>