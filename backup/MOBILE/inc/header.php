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
<head>
<?php
@include ('Lib/_init.php');
@include ('Lib/function/function.database.php');
@include ('../Lib/_init.php');
@include ('../Lib/function/function.database.php');
@include ('config_mobile.php');
@include ('../config_mobile.php');
@include ('../../Lib/_init.php');
@include ('../../Lib/function/function.database.php');
$page = "";
if (isset($_GET['page'])):
$page = $_GET['page'];
endif;
$google_check = "";
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス&カンパニー </title>
<meta content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,キャリアデザイン,転職サポート" name="keywords">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" name="description"/>
<meta content="ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス&カンパニー" property="og:title">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" property="og:description"/>
<meta content="株式会社クライス＆カンパニー" name="author"/>
<meta http-equiv="cleartype" content="on" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="Copyright©2013 KREIS&Company Inc.　All Right Reserved." name="copyright"/>
<?php

$currentURL            = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", curPageURL());
$url_replace           = str_replace(":443", "", $currentURL);
$str_url_replace_canon = str_replace("kandc.com/mobile", "kandc.com", $url_replace);
$url_replace_canon     = '<link rel="canonical" href="'.$str_url_replace_canon.'"/>';
//echo $url_replace_canon;
?>
<?php

if ($protocol == 'https:' || $protocol == 'HTTPS:') {

	if (false !== strpos(curPageURL(), 'mobile/questionnaire') || false !== strpos(curPageURL(), 'mobile/questionnaire-consent') || false !== strpos(curPageURL(), 'mobile/questionnaire-interview') || false !== strpos(curPageURL(), 'mobile/entry_pre') || false !== strpos(curPageURL(), 'mobile/entry') || false !== strpos(curPageURL(), 'mobile/entry-30') || false !== strpos(curPageURL(), 'mobile/contact') || false !== strpos(curPageURL(), 'mobile/entry-campaign') || false !== strpos(curPageURL(), 'mobile/entry_career') || false !== strpos(curPageURL(), 'mobile/entry_fb') || false !== strpos(curPageURL(), 'mobile/entry-career-consultation')):
	//not action

	 else :
	$entry_protocol_index = str_replace('https://', 'http://', curPageURL());
	header("HTTP/1.1 301 Moved Permanently");
	header('Location:'.$entry_protocol_index);
	endif;
}

if ($_GET['page'] == 'jobinfo' && isset($_GET['sid']) && isset($_GET['cate'])):
$Data_canon        = Get_Data("job as A join job_category as B on A.id=B.job_id", " and A.order_id=$sid order by B.category_id ASC limit 1", "category_id");
$category_id_canon = $Data_canon['category_id'];

if ($category_id_canon > 1):
?>
<link rel="canonical" href="<?php echo url_root_domain;?>jobinfo/<?php echo $sid;?>/<?php echo $category_id_canon;?>.html" />

<?php
 else :
?>
<?php echo $url_replace_canon;?>
            <?php
endif
?>
<?php
 else :
if ($_GET['page'] == 'documents'):
?>
<link rel="canonical" href="<?php echo $url_replace;?>" />
<?php
 else :
?>
<?php echo $url_replace_canon;?>
<?php

endif;
endif;
?>

<link rel="alternate" media="handheld" href="<?php echo $currentURL;?>" />
<link rel="apple-touch-icon" href="<?php echo $protocol;?>//www.kandc.com/img/link/webclip.png" />
<link rel="icon" href="<?php echo $protocol;?>//www.kandc.com/img/link/webclip.png" />
<meta name="robots" content="index,follow,noodp" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>nivo-slider/nivo-slider.css" media="all" />
<!--[if lt IE 9]>
<script src="<?php echo url_root;?>kandc_v2/mobile/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php echo $protocol;?>//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $protocol;?>//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo url_root;?>js/jquery.nivo.slider.js"></script>
<script src="<?php echo url_root;?>js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo url_root;?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo url_root;?>js/show_layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo url_root;?>css/smoothDivScroll.css" media="all"/>
<!--scroll to top-->
<script type="text/javascript">
	jQuery(document).ready(function($){

		$(window).load(function() {
			$('#slider').nivoSlider();
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

		$('#menu_btn a#show_menu_hover').click(function () {
			var top_menu_height=$('#top_menu').innerHeight()+59;
			//$(this).hide();
			$("#wrapper").show()
			.css({right:0,position:'absolute'})
			.animate({right:"100%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '100%',height:+top_menu_height,right:'0%'}, '500', function() {
			$('#overlay').show();
			});
			});
			$('a.hide_menu_hover').click(function () {
			//$(this).hide();
			$("#wrapper").show()
			.css({right:'100%',position:'absolute'})
			.animate({right:"0%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '0%',right:'-100%'}, '500', function() {
			$('#overlay').hide();
			$('#top_menu').hide();
			});
			});


		 $('.interview_selected_category').change(function(){
					url= $(this).val();
					location.href =$(this).val();
					$('.interview_selected_category').find("option[value='"+url+"']").attr("selected", "selected");
		 });

       	 $('.consultant_select_car').change(function(){
								url= $(this).val();
								location.href =$(this).val();
								$('.consultant_select_car').find("option[value='"+url+"']").attr("selected", "selected");
							});
		/*xuong dong dat trong jquery*/
			$('textarea').keypress(function(event) {
			  if (event.which == 13) {
				event.preventDefault();
			      var s = $(this).val();
			      $(this).val(s+"\n");
			  }
			});

		/*het xuong dong*/





    });
</script>

<?php if (!isset($_SESSION['PCchecked'])):
if ($_GET['page'] == 'documents'):
echo "";

 else :
?>
		<script type="text/javascript">
			var isMobile = window.matchMedia("only screen and (min-width: 760px)");
				if (isMobile.matches)
					{
							//document.location = "<?php echo $str_url_replace_canon;?>";
					}


		</script>
<?php endif;
endif;
?>



<?php
$url_check = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if (strpos($url_check, 'complete.php') !== false) {
	?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;
	n.loaded=!0;
	n.version='2.0';
	n.queue=[];
	t=b.createElement(e);
	t.async=!0;
	t.src=v;
	s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1465874273714340');
	fbq('track', 'CompleteRegistration');</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1465874273714340&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->


	<?php
}
?>

</head>

<body>
<div id="overlay"></div>
<div id="top_menu" style="right:-95%; display:none;">
  <div id="menu_content" class="inside menu_content">
    <div class="menu_head clear">
    <h1 class="logo fl"><a href="<?php echo url_root;?>"><img title="株式会社クライス&カンパニー" alt="株式会社クライス&カンパニー" src="<?php echo url_root;?>img/logo-kreis.png" /></a></h1>
      <div id="close_btn" class="fr"><a href="javascript:void(0);" class="hide_menu_hover"><img src="<?php echo url_root;?>img/button-close.png" alt="閉じる" title="閉じる" /></a></div>
    </div>
    <nav role="navigation" id="access">
      <div class="menu-main-container">
<?php
@include ('inc/menu_inc.php');
@include ('../inc/menu_inc.php');

?>

            <div class="menu_close_bottom"><a href="javascript:void(0);" class="hide_menu_hover">閉じる</a></div>
      </div>
    </nav>
    <!-- #access -->

  </div>
</div>
<!--end #top_menu-->
<div id="wrapper" class="wrapper">
<header>
  <div id="top_site" class="clear inside">
    <h1 class="logo fl"><a href="<?php echo url_root;?>"><img title="株式会社クライス&カンパニー" alt="株式会社クライス&カンパニー" src="<?php echo url_root;?>img/logo-kreis.png" /></a></h1>
    <!--<h2 id="site_description">ヘッドハンティングのクライス＆カンパニー</h2>-->
    <div id="menu_btn" class="fr"><a href="javascript:void(0);" id="show_menu_hover"><img src="<?php echo url_root;?>img/button-menu.png" alt="メニュー" title="メニュー" /></a> </div>
  </div>
</header>
