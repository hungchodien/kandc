<?php 
	/*
		Company: Tokyodesignroom
		URI: http://tokyodesignroom.jp
		Author: Nguyen Nhu Minh
	*/
  //error_reporting( E_ALL );
?>
<?php 

	if(!empty($page)):
		switch($page)
			{
				case "category":
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						include('category/index.php');
					else:
						//404 page
					endif;
				break;
				case "details":
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						include('details/index.php');
					else:
						//404 page
					endif;
				break;

				case "entry":
					if(isset($_GET['cmd']) && $_GET['cmd']=='complete'):
						if(isset($_GET['sid'])):
							$sid=$_GET['sid'];
							include('entry/complete.php');
						else:
							include('entry/complete.php');
						endif;
					else:
						if(isset($_GET['sid'])):
							$sid=$_GET['sid'];
							include('entry/index.php');
						else:
							//404 page
						endif;
					endif;
				break;

				

				default:
					include('inc/index.php');
			
			}
		
	else: 
		include('inc/index.php');
	endif;
?>