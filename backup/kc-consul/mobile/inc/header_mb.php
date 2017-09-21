<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml"
      xml:lang="en" lang="en">
<!--<![endif]-->
<head>

<link rel="shortcut icon" href="http://kandc.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://kandc.com/favicon.ico" type="image/x-icon">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<?php 
		@include('../Lib/_init.php');
		@include('../Lib/function/function.database.php');
		@include('Lib/_init.php');
		@include('Lib/function/function.database.php');
		
		
		@include('config_mb.php');
		@include('../config_mb.php');
		@include('../../config_mb.php');
		@include('../../../config_mb.php');
		@include('../../../../config_mb.php');
		
		
		$page="";
		if(isset($_GET['page'])):
			$page=$_GET['page'];
			endif;
	 	?>
  <base href="<?php echo $protocol; ?>//kc-consul.com"/>
    
<?php
	  @include('seo/seo_inc.php');
 	  //@include('../seo/seo_inc.php');
 ?>
  
<meta name="author" content="株式会社クライス＆カンパニー" />
<meta name="copyright" content="Copyright&copy;2013 KREIS&amp;Company Inc.　All Right Reserved." />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Language" content="ja" />
<link rev="made" href="mailto:info@kandc.com" />

	  <link rel="INDEX" href="/" /> 
      <script src="<?php echo $protocol; ?>//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
     <!-- <script src="<?php echo url_root; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>-->
     <script src="<?php echo url_root; ?>js/html5.js" type="text/javascript"></script>
     <!-- <script src="<?php echo url_root; ?>js/watermark.js" type="text/javascript"></script>
      <script src="<?php echo $protocol; ?>//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
    <!--  <script type="text/javascript" src="<?php echo url_root; ?>js/jquery.min.js"></script>-->
    <!-- css -->
    <link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
  	 <script type="text/javascript">
		$( document ).ready(function() {
    		$( window ).load(function() {
				$("#header_menu_mb").remove();	
			 });
			   
		});
    </script>
</head>

<body>
	 
<header>
	<?php 
		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
	?>
    	 <div class="header_top mr_auto clear">
         	<h1>
            	<a href="<?php echo url_root_main; ?>"><!--<span class="b">KREIS &Company Inc.</span>--> コンサルタントの転職ならクライス＆カンパニーへ</a>
		    </h1>
         </div><!--End .header_top-->
         
         
        <div class="header_logo mr_auto clear">
			<div class="group_header_logo  clear">
        	 <a class="clear" href="<?php echo url_root; ?>"><img src="<?php echo url_root_domain; ?>img/home/logo-consul.png" alt="logo"/></a>
             <p class="clear">コンサルタントのキャリアを共に考えるクライス＆カンパニー</p>
			 </div>
         </div><!--End .header_logo-->
        
        
        <div id="header_menu_mb" class="header_menu clear" style="display:none;">
        	<div class="nav_menu clear">
            	<ul class="clear">
                	<li>
                  <a class="home <?php if($page=="" || !isset($_GET['page'] )): echo "default";else: echo "";endif; ?>" href="<?php echo url_root; ?>">
                  <span>Home</span>
                  </a>
                    </li>
                    <li>
                    	<a class="policy <?php if($page=="policy"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>policy.html">
                        <span>Policy</span></a>
                    </li>
                    <li>
                    	<a class="interview  <?php if(
						$page=="interview"
						): 
						echo "active";
						else:
							$url_check = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check,'interview')) {
								echo "active";
							} else {
								echo "";
							}
						
						
						endif; 
						?>" href="<?php echo url_root;?>interview.html"><span>Interview</span></a>
                    </li>
                    <li>
                    	<a class="job-search <?php if($page=="job-search"|| $page=="category" || $page=="jobinfo"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>job-search.html" ><span>Job-search</span></a>
                    </li>
                    
                    <li>
                    	<a class="career-consultant <?php if($page=="career-consultant"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>career-consultant.html"><span>Career Consultant</span></a>
                    </li>
                    <li>
                    	<a class="contact  <?php if($page=="contact"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>contact.html"><span>Contact</span></a>
                    </li>
                </ul>
            </div><!--End .nav_menu-->
        </div><!--End .header_menu-->
          
    </header><!--End Header-->