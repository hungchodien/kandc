<?php 
	if(!empty($page)):
		switch($page)
			{
			case "privacy-policy":
				include('seo/privacy-policy/index.php');
			break;

			case "sitemap":
				include('seo/sitemap/index.php');
			break;

			case "company":
				include('seo/company/index.php');
			break;

			case "entry":
				if(isset($_GET['entry_sub'])):
					include('seo/entry/'.$_GET['entry_sub'].'.php');
				else:
					include('seo/entry/index.php');
				endif;
			break;	
			case "process":
				include('seo/process/index.php');
			break;	
			
			case "story":
				if(isset($_GET['sub-store-forder']) && isset($_GET['sub-store-file'])):
					include('seo/story/'.$_GET['sub-store-forder'].'/'.$_GET['sub-store-file'].'.php');
				else:
					if(isset($_GET['sub-store-forder'])):
						include('seo/story/'.$_GET['sub-store-forder'].'/index.php');
					else:
						include('seo/story/index.php');
					endif;
					
				endif;
				
			break;	
			
			case "consultant":
				if(isset($_GET['detail_item'])):
					include('seo/consultant/'.$_GET['detail_item'].'.php');
				else:
					include('seo/consultant/index.php');
				endif;
			break;	
			
			case "access":
				include('seo/access/index.php');
			break;
			
			default:
				include('seo/index.php');
			}
		
	else: 
		include('seo/index.php');
	endif;
?>