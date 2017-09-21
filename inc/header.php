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

<head prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
<meta name="globalsign-domain-verification" content="HEUF6rf1RLtbzvyz4cOQlFaVHE0bsHxnrDE3wx36AP" /> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


<?php 
		@include('Lib/_init.php');
		@include('Lib/function/function.database.php');
	
		@include('Lib/Mobile_Detect.php');
		@include('../Lib/Mobile_Detect.php');

		@include('config.php');
		@include('../config.php');
			$page="";
		if(isset($_GET['page'])):
			$page=$_GET['page'];
			endif;
	 	?>		
<base href="<?php echo $protocol; ?>//www.kandc.com/"/>
<?php 
	@include('seo/seo_inc.php'); 
	@include('../seo/seo_inc.php'); 
?>
<?php 
	if(strpos( $_SERVER['HTTP_HOST'], 'kandc.com') === false){
    	header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: http://www.kandc.com"); 
	}
?>
<?php
if($_GET['page']=='jobinfo' && isset($_GET['sid']) && isset($_GET['cate'])):
			$Data_canon=Get_Data("job as A join job_category as B on A.id=B.job_id"," and A.order_id=$order_id order by B.category_id ASC limit 1","category_id");
			$category_id_canon=$Data_canon['category_id'];
			
			if($category_id_canon>1):
			?>
<link rel="canonical" href="<?php echo url_root; ?>jobinfo/<?php echo $order_id_seo; ?>/<?php echo $category_id_canon; ?>.html" />

<?php
			else:
			?>
<link rel="canonical" href="<?php echo curPageURL(); ?>" />
 <?php
			endif
			?>
<?php
else:
?>
<link rel="canonical" href="<?php echo curPageURL(); ?>" />
<?php
endif;
?>
<?php 
		$url_news_mobile=str_replace("kandc.com","kandc.com/mobile",curPageURL() );
	?>
<link rel="alternate" media="handheld" href="<?php echo $url_news_mobile; ?>" />
<link rel="alternate" media="only screen and (max-width: 761px)" href="<?php echo $url_news_mobile; ?>" />

<?php 
	if(!isset($_SESSION['PCchecked'])):
			if($page === "feature-jobs" || $page === "reading" || false !== strpos($url_news_mobile,'kc-recruit') || false !== strpos($url_news_mobile,'privacy_policy')):
				echo "";
			else:
				$detect = new Mobile_Detect;
				if($detect->isMobile() || $detect->isTablet()):
					header("Location:".$url_news_mobile);
				endif;
			endif;
	endif;
?>

<meta name="robots" content="index,follow,noodp" />
<meta name="author" content="株式会社クライス＆カンパニー" />
<meta name="copyright" content="Copyright&copy;2013 KREIS&amp;Company Inc.　All Right Reserved." />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="robots" content="notranslate"/>
<link rev="made" href="mailto:info@kandc.com" />
<meta name="distribution" content="Global" />
<meta http-equiv="refresh" content="1200" />
<meta name="RATING" content="GENERAL" />
<meta property="og:type" content="website" /> 
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス＆カンパニー" />
<meta name="google-site-verification" content="JFjxNWiynGV-DGFNQLxH0mJDMMD5-LT3XFd3JBCYjUo" />
<link rel="INDEX" href="/" /> 
<link rel="apple-touch-icon" href="<?php echo url_root; ?>img/link/webclip.png" />
<link rel="icon" href="<?php echo url_root; ?>img/link/webclip.png" />
<script src="<?php echo $protocol; ?>//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery-ui.js"></script>
    <!--  <script type="text/javascript" src="<?php echo url_root; ?>js/jquery.min.js"></script>-->
	<!--code.jquery.com/ui/1.10.3/jquery-ui.js -->
    <!-- css -->
<link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/scroller.css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/smoothDivScroll.css" media="all"/>
<?php 
						$url_check = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check,'features')):
							
	?>
	 <!--[if lt IE 7]>
	<script src="<?php echo url_root; ?>js/IE7_after.js"></script>
	<![endif]-->
	    <!--[if lt IE 8]>
	<script src="<?php echo url_root; ?>js/IE8_after.js"></script>
	<![endif]-->
	
		<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

	<!--[if IE 10]>
     <script type="text/javascript" src="<?php echo url_root; ?>js/jquery.pseudo.js"></script>
	<![endif]-->
    <!-- javascript -->
    <?php 
			endif;
		?>
<!-- javascript -->
<script type="text/javascript" src="<?php echo url_root; ?>js/scroller.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/show_form.js"></script>
<script src="<?php echo url_root; ?>js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.smoothDivScroll-1.3.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/consultant_slidebar.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/watermark.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/headerJs.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/matchMedia.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/ticker_style.css" />
<script src="<?php echo url_root; ?>js/jquery.modern-ticker.min.js" type="text/javascript"></script>

    <script type="text/javascript">
		 /* <![CDATA[ */
		$(document).ready(function(){
			


			
			$('.change_get_keyword').change(function() {
    		 		var cat_id = $(this).val();
					
					$.ajax({
						url: "<?php echo url_root;?>ajax/load_keyword.php?cat="+cat_id,
						type: "post",
						beforeSend: function () {
   							 $("#load_keyword").html('<img alt="icon-load" src="<?php echo url_root;?>img/loader.gif" /> Load keyword...');
						},
						success: function(data){
							//adds the echoed response to our container
							$("#load_keyword").html(data);
						}
					});
			});
			
			
			$('.change_get_keyword1').change(function() {
    		 		var cat_id = $(this).val();
					
					$.ajax({
						url: "<?php echo url_root;?>ajax/load_keyword.php?cat="+cat_id,
						type: "post",
						beforeSend: function () {
   							 $("#load_keyword1").html('<img alt="icon-load" src="<?php echo url_root;?>img/loader.gif" /> Load keyword...');
						},
						success: function(data){
							//adds the echoed response to our container
							$("#load_keyword1").html(data);
						}
					});
			});


		
				//Ads Banner 

			$(".index_show").empty();
		//	$(".index_show").append('<a href="<?php echo url_root; ?>kc-recruit/" class="clear" target="_blank"><img src="<?php echo url_root; ?>img/link/banner-recruit.jpg" alt="コンサルタント職・スタッフ職募集中！私たちと一緒にプロフェッショナルをめざしませんか？" border="0" /></a>');
			
			$(".index_show").append('<a rel="nofollow" href="http://goo.gl/yBskSq" class="clear" target="_blank"><img src="<?php echo url_root; ?>img/link/banner-maruyama-new-book.png" alt="面接前に読んでほしい一冊!：そのひと言で面接官に嫌われます" border="0" /></a>');
			$(".index_show").addClass("ads_all_page");	
			$('.index_show').attr( 'id', 'link-logo' );
			
				if($("#page").height()>0 && $("#page").height()<120){
			//alert("height:"+ $("#page").height());
				$(".sidebar").css({ 'margin-top': +120-$("#page").height()+'px' });
				
			}

			
			/*Header search*/
			 $('.search_form_txt').change(function() {
					$(".search_form_query").attr("action", "<?php echo url_root; ?>search/"+$("#search_select_category").val()+"/page/1/" + $(this).val());
					$(".search_form_query").attr("method","post");
			 });
			  $('#search_select_category').change(function() {
				  	if($('.search_form_txt_index').val() == 'キーワードで求人を検索'){
					    $(".search_form_txt_index").val("");
					}
					$(".search_form_query").attr("action", "<?php echo url_root; ?>search/"+$(this).val()+"/page/1/" + $(".search_form_txt_index").val());
					$(".search_form_query").attr("method","post");
			 });
			 
			/*End Header search*/

			/*Footer search*/ 
			 
			 $('.search_form_txt_footer').change(function() {
				 	if($(this).val() == 'キーワードで求人を検索'){
					    $('.search_form_txt_footer').val("");
					}
					$(".search_form_query_footer").attr("action", "<?php echo url_root; ?>search/"+$("#search_select_category").val()+"/page/1/" + $(this).val());				$(".search_form_query").attr("method","post");
			 });
			  $('#search_select_category_footer').change(function() {
				  	if($('.search_form_txt_index_footer').val() == 'キーワードで求人を検索'){
					    $(".search_form_txt_index_footer").val("");
					}
					$(".search_form_query_footer").attr("action", "<?php echo url_root; ?>search/"+$(this).val()+"/page/1/" + $(".search_form_txt_index_footer").val());
					$(".search_form_query_footer").attr("method","post");
			 });
			 

		/*	$('#content a').each(function() {
		  		var value_page = $(this).attr('href');
		  		$(this).attr('href', value_page.replace('/page/1.html','.html'));
			});*/


			 /*End footer search*/



			 $('.txt_slidebar_search').change(function() {
					$(".search_form_slibar").attr("action", "<?php echo url_root; ?>search/all/" + $(this).val());
					$(".search_form_slibar").attr("method","post");
			 });
			 $('.main_search_all').change(function() {
					$(".search_form_query_all").attr("action", "<?php echo url_root; ?>search/all/" + $(this).val());
					$(".search_form_query_all").attr("method","post");
			 });

			$('.high_class_select').change(function(){ 
								url= $(this).val(); 
								location.href = url; 
								$('.high_class_select').find("option[value='"+url+"']").attr("selected", "selected");
							});
			
			$('.consultant_select_car').change(function(){ 
								url= $(this).val(); 
								location.href =$(this).val(); 
								$('.consultant_select_car').find("option[value='"+url+"']").attr("selected", "selected");
							});
			if($("#header_meta_fix").length > 0)
				 {
					var content_div_meta=$("#header_meta_fix").html();
					$("head").append(content_div_meta);	
					$("#header_meta_fix").remove(); 
				 }
			//$('.comment_consultant_group').each(function(index ) {
				//console.log(index + $('.comment_consultant_content',this).text());
			
			//	var content_length=$('.comment_consultant_content',this).text();
				//console.log(index + content_length);
			//	if(content_length.length < 50){
				//	$(this).hide();
					
			//	}
				
			//});
			
			<?php 
				if(is_home()):
			?>
				$('#slider-logo').waypoint(function( direction ){
					if( direction == 'up'){
						$('.fixed_tbl').removeAttr('style');
						$('#container_group_header').removeClass('open');
						$('#container_group_header').removeClass('fixed_tbl');
						$("#header .header-left").removeClass("margin_none");
					} else {
						
						$('#container_group_header').addClass('open');
						$('#container_group_header').addClass('fixed_tbl');
						$("#header .header-left").addClass("margin_none");
							
						$('.fixed_tbl').animate({
							'height':'62px',
							'opacity':1,
							'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
					 		'filter': 'alpha(opacity=100)'
						},500,function(){
							
						});
						//$('#container_group_header').addClass('open');
					}
				});
			<?php 
				else:
			?>
				if($("#content .sidebar").length != 0)
				{
					$('.sidebar').waypoint(function( direction ){
						if( direction == 'up'){
							$('.fixed_tbl').removeAttr('style');
							
							$('#container_group_header').removeClass('open');
							$('#container_group_header').removeClass('fixed_tbl');
							$("#header .header-left").removeClass("margin_none");
						} else {
							
							$('#container_group_header').addClass('open');
							$('#container_group_header').addClass('fixed_tbl');
							$("#header .header-left").addClass("margin_none");
								
							$('.fixed_tbl').animate({
								'height':'62px',
								'opacity':1,
								'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
						 		'filter': 'alpha(opacity=100)'
							},500,function(){
								
							});
							//$('#container_group_header').addClass('open');
						}
					});
				}else{
					if($("#category-job").length != 0)
					{
						$('#category-job').waypoint(function( direction ){
							if( direction == 'up'){
								$('.fixed_tbl').removeAttr('style');
								
								$('#container_group_header').removeClass('open');
								$('#container_group_header').removeClass('fixed_tbl');
								$("#header .header-left").removeClass("margin_none");
							} else {
								
								$('#container_group_header').addClass('open');
								$('#container_group_header').addClass('fixed_tbl');
								$("#header .header-left").addClass("margin_none");
									
								$('.fixed_tbl').animate({
									'height':'62px',
									'opacity':1,
									'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=100)',
							 		'filter': 'alpha(opacity=100)'
								},500,function(){
									
								});
								//$('#container_group_header').addClass('open');
							}
						});
					}else{
						//nothing
					}
				}
			<?php 
				endif;
			?>
			
			
		
		});
		function checkSearch($val,$selected){
			if($val == 'キーワードで求人を検索'){
				  $(".search_form_txt_index").val("");
				  $(".search_form_query").attr("action", "<?php echo url_root; ?>search/"+$("#search_select_category").val()+"/page/1/");
				}
			if(($val == 'キーワードで求人を検索' || $val == '') && $selected==0){
                alert('検索キーワードを入力してください ') ;
                return false;
            }else{
			_gaq.push(['_trackEvent', 'サイト内検索', $("#search_select_category").val(), $val, 1, true]);
                return true;
            }

        }
		function checkSearch_footer($val,$selected){
			if($val == 'キーワードで求人を検索'){
				  $(".search_form_txt_index_footer").val("");
				  $(".search_form_query_footer").attr("action", "<?php echo url_root; ?>search/"+$("#search_select_category_footer").val()+"/page/1/");
				}
			if(($val == 'キーワードで求人を検索' || $val == '') && $selected==0){
                alert('検索キーワードを入力してください ') ;
                return false;
            }else{
				_gaq.push(['_trackEvent', 'サイト内検索', $("#search_select_category_footer").val(), $val, 1, true]);
                return true;
            }

        }
		/* ]]> */
    </script>
	
	<?php if(is_home()): ?>
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=179447,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->


<?php endif; ?>

</head>

<body>

<header>
<div class="top_head">
<ul class="clear">
<li class="first_child"><a href="http://kc-consul.com/" target="_blank">コンサルタント転職</a></li>
<li><a href="http://www.kandc.com/exe/" target="_blank">エグゼクティブ転職</a></li>
<li><a class="active" href="http://www.kandc.com/">30代・40代転職</a></li>
</ul>
</div>

<div id="container_group_header" class="clear container_group_header">
  	<div id="header" class="header clear">
        <div class="header-left clear">
            <div class="logo1 ">
                <h1>ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
                <a href="<?php echo url_root; ?>" target="_self"><img src="<?php echo url_root; ?>img/head/kreis-logo.png" alt="30代エグゼクティブのためのヘッドハンティング・人材紹介会社"/></a>
            </div>
           
        </div>
        
        <div class="header-right clear">
        
            <div class="header-right-top clear">
            	<div class="header_group_language clear">
                
                <div class="groupd_t sub_top_link clear">
                <ul class="clear">
                <li><a href="<?php echo url_root; ?>profile/">会社概要</a></li>
                 <li><a href="<?php echo url_root; ?>publicity/">パブリシティ</a></li>
                <li><a href="<?php echo url_root; ?>access/">地図</a></li>
                <li><a href="<?php echo url_root; ?>kc-recruit/" target="_blank">自社採用</a></li>
                <li class="last_child"><a rel="nofollow" href="//www.kc-saiyo.com/" target="_blank">人材をお探しの企業様</a></li>
               
                </ul>
                
                </div>
                </div>
            </div><!--header-right-top-->
            <div id="tbl_header_emtry" class="tbl_header clear">
            	<div style="position:relative;" class="entry_pre_link_sroll">
					<a onclick="_gaq.push(['_trackEvent', 'Entry_Pre', 'Click link Entry Pre', 'Entry Pre Header Index']);" target="_blank" href="<?php echo url_root; ?>entry_pre"><img alt="いつかは転職&#12288;無料プレエントリー" src="<?php echo url_root; ?>img/entry/button-fix-pre-entry-2.png"/></a>
				</div><!--entry_pre_link-->
                <div style="position:relative;" class="entry_link_sroll">
					<a onclick="_gaq.push(['_trackEvent', 'Entry', 'Click link Entry', 'Entry Header Index']);" target="_blank" href="<?php echo url_root; ?>entry"><img alt="いますぐ転職&#12288;無料エントリー" src="<?php echo url_root; ?>img/entry/button-fix-entry-2.png"/></a>
				</div><!--entry_link-->	
            </div><!--#tbl_header_emtry-->
            
        </div><!--header-right-->
    </div><!--#header-->
</div><!--#container_group_header-->  
    
    <div id="nav" class="clear">
        <div id="navi">
            <ul class="clear">
                <li><a id="menu_feature_id" class="menu-features <?php  if(is_findPage("features")): echo "active";else: echo "";endif; ?>"  href="<?php echo url_root; ?>features"><img src="<?php echo url_root ?>img/head/button-features.png" alt="クライスの特長"/></a></li>
                
                <li><a id="menu_consultant_id" class="menu-consultant <?php if($page=="consultant"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>consultant/"><img src="<?php echo url_root ?>img/head/button-consultant.png" alt="コンサルタントを選ぶ"/></a></li>
               
                <li><a id="menu_job_id" class="menu-jobinfo  <?php if($page=="jobinfo"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>jobinfo/"><img src="<?php echo url_root ?>img/head/button-jobinfo.png" alt="求人情報を探す"/></a></li>
                
                <li><a id="menu_voice_id" class="menu-voice  <?php if($page=="voice"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>voice/"><img src="<?php echo url_root ?>img/head/button-voice.png" alt="転職成功事例"/></a></li>
               
                <li><a id="menu_process_id" class="menu-process  <?php if($page=="process"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>process/"><img src="<?php echo url_root ?>img/head/button-process.png" alt="申込みから内定まで"/></a></li>
                
                <li><a id="menu_reading_id" class="menu-reading  <?php if($page=="reading"): echo "active";else: echo "";endif; ?>" href="<?php echo url_root; ?>reading/"><img src="<?php echo url_root ?>img/head/button-reading.png" alt="読みもの"/></a></li>
              
            </ul>
        </div>
		         <?php @include('includes/menu_hover.php'); ?>
				 <?php @include('../includes/menu_hover.php'); ?>
				 <?php @include('../../includes/menu_hover.php'); ?>
				<?php @include('../../../includes/menu_hover.php'); ?>
    </div>

		<?php 
		 	
		 	if(isset($_SESSION['PCchecked'])):
				function generateRandomString_desktop($length = 10) {
						$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
						$randomString = '';
					 for ($i = 0; $i < $length; $i++) {
						 $randomString .= $characters[rand(0, strlen($characters) - 1)];
					}
					return $randomString;
					}
			$url_news_mobile=str_replace(":443","",$url_news_mobile);
			$url_encode_mobile=urlencode(md5_encrypt($url_news_mobile));
		 ?>
			<!--class hunter_eye_group_item-->
             <div class="clear copyright_content">
             <a rel="nofollow" href="<?php echo url_root_mobile;?>?page=msid&pc_checked=<?php echo generateRandomString_desktop(10); ?>&url=<?php echo $url_encode_mobile; ?>">
             <img src="<?php echo url_root; ?>img/index/go-to-mobile-button.png" alt="button"/>
             </a>
             </div><!--copyright_content 2-->
         <?php 
		 	endif;
		 ?>

</header>