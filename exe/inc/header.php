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
<html  lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php 


	@include('config_exe.php');
	@include('../config_exe.php');
	$page="";
	if(isset($_GET['page'])):
	$page=$_GET['page'];
	endif;
	 
		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
	@include('seo/seo_inc.php'); 
	//@include('../seo/seo_inc.php');

function is_home(){
	 $currentpage_check = $_SERVER['REQUEST_URI'];
	
        if($currentpage_check=="/exe/" || $currentpage_check=="/exe/index.php" || $currentpage_check=="/exe" ):
        	return true;
        else:
			return false;
		endif;
}

?>
<link rel="shortcut icon" href="<?php echo url_root; ?>favicon.ico" type="image/x-icon"/>
<link rel="icon" href="<?php echo url_root; ?>favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="<?php echo url_root; ?>img/link/webclip-exe.png" />
<link rel="icon" href="<?php echo url_root; ?>img/link/webclip-exe.png" />
<link type="text/css" href="<?php echo url_root; ?>css/style.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo url_root; ?>css/flexnav.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo url_root; ?>css/slicknav.css" rel="stylesheet"/>
<!--[if lt IE 9]>
		<script src="<?php echo url_root; ?>/js/html5.js" type="text/javascript"></script>
		<script src="<?php echo url_root; ?>/js/selectivizr.js" type="text/javascript"></script>
		<script src="<?php echo url_root; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->

<!--[if lt IE 10]>
	<script src="<?php echo url_root; ?>/js/matchMedia.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php echo url_root; ?>js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/share.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/watermark.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.flexnav.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/modernizr-2.6.2.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.slicknav.js" type="text/javascript"></script>

<script src="<?php echo url_root; ?>js/jquery.lazyload.min" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.lazyscript.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/main.js" type="text/javascript"></script>

<link href='//fonts.googleapis.com/css?family=Source+Code+Pro:700&amp;text=new+Share(".share-button");' rel='stylesheet' type='text/css'/>
    
</head>
<body class="<?php if (is_home()){ echo ('home'); }else{ echo ('page');} ?>">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M3PSZG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3PSZG');</script>
<!-- End Google Tag Manager -->
<?php 
	$active_home="";
	$active_company="";
	$active_entry="";
	$active_process="";
	$active_story="";
	$active_consultant="";
	$active_access="";

	$active_sitemap="";
	$active_privacy_policy="";

	if(!empty($page)):
		switch($page)
			{
			case "company":
				$active_company="active";
			break;
			case "entry":
				$active_entry="active";
			break;	
			case "process":
				$active_process="active";
			break;	
			
			case "story":
				$active_story="active";
			break;	
			
			case "consultant":
				$active_consultant="active";
			break;	
			
			case "access":
				$active_access="active";
			break;

			case "sitemap":
				$active_access="active";
			break;
			case "privacy-policy":
				$active_privacy_policy="active";
			break;

			default:
				$active_home="active";
			}
	else: 
		$active_home="active";
	endif;
?>


<header id="masthead" class="site-header clear">
	<div class="contact_header_top clear">
    	<h1>エグゼクティブの転身・転職　クライス＆カンパニー・EXECUTIVEチーム</h1>
        <h3><span class="tel_top"><a href="tel:0357332684">03-5733-2684</a> </span> 
        <span class="mail_top">
   <a href="mailto:exe@kandc.com?subject=お問い合わせ&amp;body=【お名前】%0D%0A【お問い合わせ内容】">
       <img src="<?php echo url_root; ?>img/home/head_email.png" alt="exe@kandc.com"/>
        </a>
        </span></h3>
    </div><!--contact_header_top-->
    
    <div class="clear logo_menu">
	
        <div class="group_logo l">
            <div class="content_logo clear">
                
                <h2><a href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/logo-executive.png" alt="株式会社 クライス＆カンパニー EXECUTIVE"/></a></h2>
               
            </div>
        </div>
    
        <div class="group_menu r">
            <nav id="access" class="clear">
                <h2 id="menu_top" class="menu_mobile">MENU</h2>
                <ul class="nav clear">
                    <li><a class="<?php echo $active_home; ?>" href="<?php echo url_root; ?>">
                    
                    <?php if($active_home!="" && !empty($active_home)):echo "ホーム"; else: echo "Home"; endif; ?>
                  
                    </a></li>
                    <li><a class="<?php echo $active_process; ?>" href="<?php echo url_root; ?>process/">
                    
                    <?php if($active_process!="" && !empty($active_process)):echo "プロセス"; else: echo "Process"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_story; ?>" href="<?php echo url_root; ?>story/">
                    
                    <?php if($active_story!="" && !empty($active_story)):echo "実績・リアルストーリー"; else: echo "Real Story"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_consultant; ?>" href="<?php echo url_root; ?>consultant/">
                    
                    <?php if($active_consultant!="" && !empty($active_consultant)):echo "コンサルタント紹介"; else: echo "Consultant"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_company; ?>" href="<?php echo url_root; ?>company/">
                    
                    <?php if($active_company!="" && !empty($active_company)):echo "会社概要"; else: echo "Company"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_entry; ?>" href="<?php echo url_root; ?>entry/" target="_blank">
                    
                    <?php if($active_entry!="" && !empty($active_entry)):echo "エントリー"; else: echo "Entry"; endif; ?>
                    
                    </a></li>
                    <li><a class="<?php echo $active_access; ?>" href="<?php echo url_root; ?>access/">
                    
                    <?php if($active_access!="" && !empty($active_access)):echo "アクセス"; else: echo "Access"; endif; ?>
                    
                    </a></li>
                    <li><a href="javascript:void(0);" class="share-button">Share social</a></li>
                </ul><!--Nav-->
                
             <!-- *****************************************MOBILE**************************************--> 
               
             
            <div id="mobile_top_menu">
            <ul class="nav_mobile_header clear">
            
                        <li><a class="<?php echo $active_home; ?>" href="<?php echo url_root; ?>">ホーム</a></li>
                        
               <li><a class="<?php echo $active_process; ?>" href="<?php echo url_root; ?>process/">プロセス</a></li>
                    
     
         	<li class="parent_menu"><a class="<?php echo $active_story; ?>" href="<?php echo url_root; ?>story/">実績・リアルストーリー</a>
            <ul>
                	<li class="child_menu"><a href="<?php echo url_root; ?>story/vol01/">X氏51歳のケース</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>story/vol02/">Y氏36歳のケース</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>story/vol03/">Z氏44歳のケース</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>story/vol04/">O氏50歳のケース</a></li>
                    </ul
             ></li>  
                
    <li class="parent_menu"><a class="<?php echo $active_consultant; ?>" href="<?php echo url_root; ?>consultant/">コンサルタント紹介</a>
             	<ul>
                	<li class="child_menu"><a href="<?php echo url_root; ?>consultant/maruyama.html">丸山 貴宏</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>consultant/okada.html">岡田 麗</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>consultant/nara.html">奈良 元生</a></li>
                    <li class="child_menu"><a href="<?php echo url_root; ?>consultant/tanasawa.html">棚澤 啓介</a></li>
                </ul>
             </li>
        
     
                <li><a class="<?php echo $active_company; ?>" href="<?php echo url_root; ?>company/">会社概要</a></li>
                <li><a class="<?php echo $active_entry; ?>" href="<?php echo url_root; ?>entry/">エントリー</a></li>
                <li><a class="<?php echo $active_access; ?>" href="<?php echo url_root; ?>access/">アクセス</a></li>
               
            </ul><!--nav_mobile_header-->
            </div>
                
                
            </nav>
        </div>
    
    </div><!--logo_menu-->
    
</header><!--masthead-->
<div id="main" class="wrapper clear">

