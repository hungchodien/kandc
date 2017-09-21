<?php 
	/*
		Company: Tokyodesignroom
		URI: http://tokyodesignroom.jp
		Author: Nguyen Nhu Minh
	*/
?>
<?php 
	if(!empty($page)):
		switch($page)
			{
				case "category":
					if(isset($_GET['sid'])):
						include('seo/category/index.php');
					else:
						//404 page
					endif;
					
				break;
				case "details":
					if(isset($_GET['sid'])):
						include('seo/details/index.php');
					else:
						//404 page
					endif;
				break;

				
				default:
					include('seo/index.php');
			
			}
		
	else: 
		include('seo/index.php');
	endif;
?>