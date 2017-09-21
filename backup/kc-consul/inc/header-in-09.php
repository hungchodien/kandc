<?php 
	ob_start();
	session_start();
?>
<!DOCTYPE html>
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
			
	 	?>
  <base href="<?php echo $protocol; ?>//kc-consul.com"/>
    
<?php
	  @include('seo/seo_inc.php');
 	  //@include('../seo/seo_inc.php');

	@include('seo.php');
 ?>
 <meta name="google-site-verification" content="dyP4YSD4KH8fETpMNagw9oieICuW0oJKJOOV7GCZfeY" /> 
<meta name="author" content="株式会社クライス＆カンパニー" />
<meta name="copyright" content="Copyright&copy;2013 KREIS&amp;Company Inc.　All Right Reserved." />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Language" content="ja" />
<link rev="made" href="mailto:info@kandc.com" />

	  <link rel="INDEX" href="/" /> 
      <script src="<?php echo $protocol; ?>//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
      <script src="<?php echo url_root; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>
      <script src="<?php echo url_root; ?>js/html5.js" type="text/javascript"></script>
       <script src="<?php echo url_root; ?>js/watermark.js" type="text/javascript"></script>
      <script src="<?php echo $protocol; ?>//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      <script  src="<?php echo url_root; ?>js/kc-consul_main.js"></script>
  	
    <!-- css -->
    <link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
    <link type="text/css" href="<?php echo url_root; ?>css/style_add.css" rel="stylesheet"/>
    <script type="text/javascript">
		$( document ).ready(function() {
    		$('.text_search').change(function() {
					$(".search_form_kc").attr("action", "<?php echo url_root; ?>search/0/page/1/" + $(this).val());
					$(".search_form_kc").attr("method","post");
					
			 });
			<?php 
				$url_check_set_tbl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					if (false !== strpos($url_check_set_tbl,'interview')):
						if( false !== strpos($url_check_set_tbl,'top') || false !== strpos($url_check_set_tbl,'symposium') || false !== strpos($url_check_set_tbl,'inexperience') || false !== strpos($url_check_set_tbl,'consultant-post') ):
						
							if( false !== strpos($url_check_set_tbl,'01') || false !== strpos($url_check_set_tbl,'02') || false !== strpos($url_check_set_tbl,'03') || false !== strpos($url_check_set_tbl,'04') || false !== strpos($url_check_set_tbl,'05') || false !== strpos($url_check_set_tbl,'06') || false !== strpos($url_check_set_tbl,'07') || false !== strpos($url_check_set_tbl,'08') || false !== strpos($url_check_set_tbl,'09') || false !== strpos($url_check_set_tbl,'10') || false !== strpos($url_check_set_tbl,'11') || false !== strpos($url_check_set_tbl,'12') || false !== strpos($url_check_set_tbl,'13') || false !== strpos($url_check_set_tbl,'14') || false !== strpos($url_check_set_tbl,'15')):
							?>
							$('#container').append("<div class='button_entry_company company_detail mgbt10 clear'><a class='tbl_entry_company_page' href='<?php echo url_root; ?>entry/?entry_id=1014585' target='_blank'><img src='<?php echo url_root; ?>img/interview/button-interview-entry.png' alt='記事はこちら'></a></div>");
							<?php
							endif;
						
						endif;
					
					endif;
				?>



		});
    </script>
</head>

<body>
<div class="clear page_main">	 
<header id="header_inc" class="clear">
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
    	 <div class="header_top clear">
         	<div class="header_top_content clear">
            
	        	<div class="l site_title">
	            	<ul class="clear top_break">
	                    <li><a href="<?php  echo url_root_main; ?>"  target="_blank">30代・40代転職</a></li>
	                    <li><a target="_blank" href="<?php  echo url_root_main; ?>exe/" target="_blank">エグゼクティブ転職</a></li>
						<li><a href="<?php  echo url_root; ?>" class="active">コンサルタント転職</a></li>
					</ul>
	           </div><!--site_title-->
               
	           <div class="social_btns r clear social_btns_header">
               		<div class="l title_product_by_hd">produced by</div>
               		<div class="l kandc_title_product_by_hd"><a href="<?php  echo url_root_main; ?>" target="_blank"><img src="<?php echo url_root; ?>img/link/head-kreis-name.png" alt="30代・40代転職"/></a></div>
               		
               		<!--<div class="gplus_btn r" style="width:57px;"><g:plusone size="medium" href="<?php echo $pageURL_cu; ?>"></g:plusone></div>
					<div class="twitter_btn r">
	            		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $pageURL_cu; ?>" rel="nofollow">Tweet</a>
	            	</div>  
		            <div class="fb_btn r">
	                	<div class="fb-like" data-href="<?php echo $pageURL_cu; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
	                </div>-->
                </div><!--end .social_btns-->
                
           </div> <!--End .header_top_content-->
         </div><!--End .header_top-->
         
         
        <div class="header_logo clear">
        	<div class="header_top_content header_logo_content clear">
            <div class="l">
            	<h2 class="clear">
                <a href="<?php echo url_root; ?>">
                	<img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="Consultant Career"/></a>
                    
                </h2>
                <h1 class="clear"><a href="<?php echo url_root; ?>">コンサルタントのキャリアを共に考える</a></h1>
                </div>
                <div class="button_entry r">
                <!--<a class="go_entry_consultant" href="http://www.kandc.com/kc-recruit/entry/consultant/" target="_blank"><img src="<?php echo url_root; ?>img/link/button_recruit.png" alt="自社採用 コンサルタント職 募集中"/></a>-->
                <a class="entry_tbl_kc" href="<?php	echo url_root; ?>entry-career-consultation/" target="_blank"><img src="<?php echo url_root; ?>img/entry/head-entry-button.png" alt="まずは気軽に相談する" /></a></div>
            </div>
        </div><!--End .header_logo-->
        
        
        <div class="header_menu clear">
        	<div class="nav_menu clear">
            	<ul class="clear">
                	<li>
	                  <a class="home 
					  <?php $currentpage_check = $_SERVER['REQUEST_URI'];
					  if($currentpage_check=="/kc-consul_demo" || $currentpage_check=="/kc-consul_demo/" || $currentpage_check=="/kc-consul_demo/index.php"):
					   echo "default active";else: echo "";
					   endif; ?>" href="<?php echo url_root; ?>">
	                  <span>Home</span>
	                  </a>
                    </li>
                     <li>
                    	<a class="policy <?php if($page=="about-us"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>about-us.html">
                        <span>about-us</span></a>
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
                    	<a class="job-search <?php if($page=="job-search"|| $page=="category" || $page=="jobinfo" || $page=="only-job"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>job-search.html" ><span>Job-search</span></a>
                    </li>
                   <!-- <li>
                    	<a class="semina <?php if($page=="seminar"): echo "active";
						else: 
							$url_check = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check,'seminar')) {
								echo "active";
							} else {
								echo "";
							}
						endif; 
						?>" href="<?php echo url_root; ?>seminar.html"><span>Seminar</span></a>
                    </li>
                    <li>
                    	<a class="career-consultant <?php if($page=="career-consultant"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>career-consultant.html"><span>Career Consultant</span></a>
                    </li>-->
                    <li>
                    	<a class="blog  <?php if($page=="blog"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>blog.html"><span>blog</span></a>
                    </li>
                   
                </ul>
            </div><!--End .nav_menu-->
        </div><!--End .header_menu-->
          
    </header><!--End Header-->

<?php
 
if (function_exists('curPageURL')):
$current_url= curPageURL();
else:
			$pageURL = 'http';
			 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 $current_url=$pageURL;
			 
endif;
$dir = "./";
$file_contents=array_diff(scandir($dir), array('..', '.'));
$check_pages="";
foreach ($file_contents as $file_content):
	if(false !== strpos($current_url,$file_content)):
		$check_pages=$file_content;
	endif;
endforeach;
if($check_pages!=""):
	$check_page=$check_pages;
	$m=1;
	$n=1;
	for($m=1;$m<10;$m++):
		$link_file="index".$m.".php";
		if($link_file==$check_page):
			$n=$m+1;
			$check_page_seo="Page ".$n;	
		endif;
	endfor;
	
else:
	$check_page_seo="Page 1";
endif;

?>  