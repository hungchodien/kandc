<?php 
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<?php 
		
		@include('../Lib/_init.php');
		@include('../Lib/function/function.database.php');
		@include('Lib/_init.php');
		@include('Lib/function/function.database.php');
		@include('config.php');
		@include('../config.php');
		@include('../../config.php');
		@include('../../../config.php');
		@include('../../../../config.php');
		$page="";
		if(isset($_GET['page'])):
				$page=$_GET['page'];
		endif;
		@include('inc/config_shiodome.php'); 
		@include('../inc/config_shiodome.php'); 
		@include('../../inc/config_shiodome.php'); 	


		$url_curent_check=curPageURL();
		if (strpos($url_curent_check,'www') !== false):
	    	//not code
		else:
			$url_kandc_www=str_replace("kandc.com","www.kandc.com",$url_curent_check);
			header("HTTP/1.1 301 Moved Permanently"); 
			header("Location:".$url_kandc_www);
		endif;


	//redrict https:
	//echo $protocol;
	if ($protocol == 'https:' || $protocol =='HTTPS:'){
		
		if($page=='entry'):
			
		else:
			$entry_protocol_index = str_replace('https://', 'http://', curPageURL() );
			header("HTTP/1.1 301 Moved Permanently"); 
   			header('Location:'.$entry_protocol_index);
		endif;
	}
	else
	{
		if($page=='entry'):
			$entry_protocol_index = str_replace('http://', 'https://', curPageURL() );
			header("HTTP/1.1 301 Moved Permanently"); 
   			header('Location:'.$entry_protocol_index);
		else:
			//not work
		
		endif;
	}


	 	?>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link href="<?php echo url_root_shiodome; ?>css/flexnav.css" media="screen, projection" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo url_root_shiodome; ?>css/style.css" media="all" />
<!--[if lt IE 9]>
<script src="<?php echo url_root; ?>js/html5.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>/js/selectivizr.js.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 10]>
   <script src="<?php echo url_root; ?>js/matchMedia.js" type="text/javascript"></script>
<![endif]-->
<?php 
	include('seo/router_seo.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo url_root_shiodome; ?>js/jquery.flexnav.js" type="text/javascript"></script>
<script src="<?php echo url_root_shiodome; ?>js/main_shiodome.js" type="text/javascript"></script>
<script src="<?php echo url_root_shiodome; ?>js/validate_form.js" type="text/javascript"></script>
<!--scroll to top-->
</head>
<body>
<header>
<div class="clear top_page">
    <div class="fl logo_kandc pc"><a href="<?php echo url_root_domain; ?>"><img title="" alt="" src="<?php echo url_root_shiodome; ?>img/logo_kandc.png" /></a></div>
    
    <div class="top_logo">
    <div class="logo_kandc_mobile mobile"><a href="<?php echo url_root_domain; ?>"><img title="" alt="" src="<?php echo url_root_shiodome; ?>img/logo_kandc_mobile.png" /></a></div>
    <h1 class="top_logo_big"><a href="<?php echo url_root_shiodome; ?>"><img title="" alt="shiodome academy" src="<?php echo url_root_shiodome; ?>img/logo_shiodome.png" /></a></h1>
    </div>
    <nav class="fr top_menu"> 
    <div class="menu-button">Menu</div>
    <ul class="flexnav">
    <li><a id="menu_about" href="<?php echo url_root_shiodome; ?>#about"><span class="square"></span><span class="menu_txt">汐留アカデミーについて</span></a></li>
    <?php 
	$where_header="and shiodome_academy_category_status=0 order by shiodome_academy_category_date DESC";
	 $Data_shiodome_header =To_Get_Data("shiodome_academy_category", $where_header);
	 $count_cat=$Data_shiodome_header['cnt'];
	 if($count_cat>0):
	 $c=0;
	 for($c=0;$c<$count_cat;$c++):
	 	$List_shiodome_header=$Data_shiodome_header[$c];
	 	$name_cat_header=$List_shiodome_header['shiodome_academy_category_name_ja'];
		$menu_cat_header=$List_shiodome_header['shiodome_academy_category_menu'];

		$id_cat_header=$List_shiodome_header['shiodome_academy_category_id'];
		$name_cat_header_en=$List_shiodome_header['shiodome_academy_category_name_en'];
		$url_link_cat_header=url_root_shiodome."category/".$id_cat_header.".html";
		
		if($page=='category'):
			if($sid==$id_cat_header):
				$active="active";
			else:
				$active="none_active";	
			endif;
		else:
			$active="none_active";	
		endif;
	?>
    <li><a class="menu_item_list <?php echo $active; ?>" id="menu_<?php echo $name_cat_header_en; ?>" href="<?php echo $url_link_cat_header; ?>"><span class="square"></span><span class="menu_txt"><?php echo $menu_cat_header; ?></span></a></li>
    
    <?php endfor; reset($Data_shiodome_header); endif; ?>
    </ul>
    </nav>
</div> 

</header>