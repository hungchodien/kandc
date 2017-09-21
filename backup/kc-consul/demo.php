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
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
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
 
if (function_exists('curPageURL')):
$current_url= curPageURL();
else:
	function curPageURL(){
		$pageURL = 'http';
			 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 $current_url=$pageURL;
			return $current_url;
	}

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
      
      <script  src="<?php echo url_root_main; ?>js/matchMedia.js"></script>
      <script  src="<?php echo url_root; ?>js/jquery.flexnav.js"></script>
      
      
      <script  src="<?php echo url_root; ?>js/kc-consul_main.js"></script>
      <script  src="<?php echo url_root; ?>js/mobile_main.jquery.js"></script>
  	
    <!-- css -->
    <link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
    <link type="text/css" href="<?php echo url_root; ?>css/style_add.css" rel="stylesheet"/>
    
    
    <link type="text/css" href="<?php echo url_root; ?>css/flexnav.css" rel="stylesheet"/>
    <link type="text/css" href="<?php echo url_root; ?>demo_mobile/css/mobile_style.css" rel="stylesheet"/>
    <link type="text/css" href="<?php echo url_root; ?>demo_mobile/css/nivo-slider.css" rel="stylesheet"/>
    <script  src="<?php echo url_root; ?>demo_mobile/js/mobile.js"></script>
    
    
    
    <script type="text/javascript">
		$( document ).ready(function() {
    		$('.text_search').change(function() {
					$(".search_form_kc").attr("action", "<?php echo url_root; ?>search/0/page/1/" + $(this).val());
					$(".search_form_kc").attr("method","post");
					
			 });
			<?php 
				$url_check_set_tbl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			?>
			
			<?php 
				//check breakcrum
				if (false !== strpos($url_check_set_tbl,'interview')):
				?>
				var leng_breakcrum=$(".breadcrumb-link > ul >li").length;
				if(leng_breakcrum==7){
					//alert(leng_breakcrum);
					var url_breakcrum=$(".breadcrumb-link > ul >li:nth-child(5)").find('a').attr("href");
					var url_breakcrum_change=url_breakcrum.replace("interview/symposium/", "interview.html#symposium");
						url_breakcrum_change=url_breakcrum_change.replace("interview/top/", "interview.html#top");
						url_breakcrum_change=url_breakcrum_change.replace("interview/inexperience/", "interview.html#inexperience");
						url_breakcrum_change=url_breakcrum_change.replace("interview/consultant-post/", "interview.html#consultant-post");
						
						
						$(".breadcrumb-link > ul >li:nth-child(5)").find('a').attr("href",url_breakcrum_change);
				}
				<?php
				endif;
			?>	

			<?php


				//echo $url_check_set_tbl;
					if (false !== strpos($url_check_set_tbl,'interview')):
						if( false !== strpos($url_check_set_tbl,'top') || false !== strpos($url_check_set_tbl,'symposium') || false !== strpos($url_check_set_tbl,'inexperience') || false !== strpos($url_check_set_tbl,'consultant-post') ):
						
						
						$entry_xml_header=url_root."entry.xml";
						$doc_xml_entry = new DOMDocument();
					  	$doc_xml_entry->load($entry_xml_header);
						$entries_header = $doc_xml_entry->getElementsByTagName("entry");
						//print_r($entries_header);
						$entry_id_head="";
						foreach($entries_header as $entry_header):
							//get category
							$urls = $entry_header->getElementsByTagName("url");
					  		$url = $urls->item(0)->nodeValue;
							//echo $url;
							//get id
							$ids = $entry_header->getElementsByTagName("id");
					  		$id = $ids->item(0)->nodeValue;
							
							if( false !== @strpos($url_check_set_tbl,$url))
							{
								//echo $url;
								$entry_id_head=(int)$id;
							}
							
						endforeach;	
						
						$url_entry_link=url_root."entry/";
						if((int)$entry_id_head>0):
							$url_entry_link=url_root."entry/?entry_id=".$entry_id_head;
						else:
							$url_entry_link=url_root."entry/?entry_id=1014585";
						endif;
					?>
					if($('#interview_content_left').length)
					{
	$('#interview_content_left').append("<div class='interview_entry_btn'><a target='_blank' href='<?php echo $url_entry_link; ?>'><img title=' ' alt=' ' src='<?php echo url_root; ?>img/entry/company-id-button.png'></a></div>");				
					}
					else
					{
	$('#container').append("<div class='button_entry_company company_detail mgbt10 clear'><a class='tbl_entry_company_page' href='<?php echo $url_entry_link; ?>' target='_blank'><img src='<?php echo url_root; ?>img/interview/button-interview-entry.png' alt='記事はこちら'></a></div>");
					}
	
						<?php
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
	                    <li><a href="<?php  echo url_root_main; ?>exe/" target="_blank">エグゼクティブ転職</a></li>
						<li><a href="<?php  echo url_root; ?>" class="active">コンサルタント転職</a></li>
					</ul>
	           </div><!--site_title-->
               
	           <div class="social_btns r clear social_btns_header">
               		<div class="l title_product_by_hd">produced by</div>
               		<div class="l kandc_title_product_by_hd"><a href="<?php  echo url_root_main; ?>" target="_blank"><img src="<?php echo url_root; ?>img/link/head-kreis-name.png" alt="クライス&amp;カンパニー"/></a></div>
               		
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
                <h1 class="clear"><a href="<?php echo url_root; ?>">コンサルタントの転職・キャリアを共に考える</a></h1>
                </div>
                <div class="button_entry r">
                <!--<a class="go_entry_consultant" href="http://www.kandc.com/kc-recruit/entry/consultant/" target="_blank"><img src="<?php echo url_root; ?>img/link/button_recruit.png" alt="自社採用 コンサルタント職 募集中"/></a>-->
                <a class="entry_tbl_kc" href="<?php	echo url_root; ?>entry-career-consultation/?entry_id=1014585" target="_blank">
			<img class="pc_show" src="<?php echo url_root; ?>img/entry/head-entry-button-v2.png" alt="まずは気軽に転職相談する" />
                	<img class="mobile_show" src="<?php echo url_root; ?>img/entry/button-entry-footer.png" alt="まずは気軽に転職相談する" />

</a></div>
            </div>
        </div><!--End .header_logo-->
        
        
        <div class="header_menu clear">
        	<div class="nav_menu clear">
            	<ul class="clear">
                	<li>
	                  <a class="home 
					  <?php $currentpage_check = $_SERVER['REQUEST_URI'];
					  if($currentpage_check=="" || $currentpage_check=="/" || $currentpage_check=="/index.php"):
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
	
    <header id="header_area" class="container hide_on_pc">
	<div id="top_area" class=" clear">
    	<div class="l">
            	<h1 class="big_title clear">
                    <a href="http://www.kc-consul.com/">
                        <img src="http://www.kc-consul.com/img/home/logo-consul.png" alt="Consultant Career">
                    </a>                    
                </h1>
                <h2 class="subtitle clear"><a href="http://www.kc-consul.com/">コンサルタントの転職・キャリアを共に考える</a></h2>
        </div>
        
        <div class="r menu_btn_area">
        	<a href="javascript:void(0);" class="mobile_menu_btn open_icon r">Toggle Menu</a>
   			<ul id="mobile_primary_menu" class="clear">
                    <li>
                      <a class="home" href="http://www.kc-consul.com/">
                      <span>ホーム</span>
                      </a>
                    </li>
                     <li>
                        <a class="policy" href="http://www.kc-consul.com/about-us.html">
                        <span>クライスの特徴</span></a>
                    </li>
                    <li>
                        <a class="interview" href="http://www.kc-consul.com/interview.html"><span>インタビュー </span></a>
                    </li>
                    
                    
                    
                    <li>
                        <a class="job-search" href="http://www.kc-consul.com/job-search.html"><span>求人情報</span></a>
                    </li>
                 
                    <li>
                        <a class="blog  active" href="http://www.kc-consul.com/blog.html"><span>プログ</span></a>
                    </li>
               
            </ul>
       </div> <!--menu_btn_area-->
    </div>
    
    
   
</header>

<!--Begin Content-->
<div id="page">
	<?php
        if(!isset($page)|| $page==""):
            include('nivoslide/index.php');
        endif; 
    ?>
        <div  id="container" class="container clear">
                <?php 
                    include('inc/index.php');
                ?>
        </div><!--End .#container-->
        
        <!--End Content-->
</div>    
   <!--Footer-->
   		<?php 
			if($page=='landing'):
				include('inc/footer_landing.php');
			else:
				include('inc/footer.php');
			endif;
		?>
   		<?php //include('inc/footer.php'); ?>
   <!--End Footer-->
</div>
</body>
</html>
