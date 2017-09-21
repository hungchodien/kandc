<?php 
	$sid=(int)$sid;

	//$Data_blog_detail=Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID","  and A.kc_blog_id=$sid order by A.kc_blog_date DESC");
	$Data_blog_detail=Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID","  and A.kc_blog_id=$sid order by A.kc_blog_date DESC","A.kc_blog_date,A.seo_description,A.seo_keyword,A.seo_og_title,A.seo_og_description,B.consultant_Name,A.kc_blog_content,B.position_cp,B.consultant_kc_consult_blog,B.public_seo_img,A.kc_blog_title,A.seo_add_thumb_meta");
	

$count_blog_detail=$Data_blog_detail['cnt'];
	if($count_blog_detail<=0):
		header("Location:".url_root."404.html");
		exit();
	endif;
	
	$blog_date_d=(int)date('d', strtotime($Data_blog_detail['kc_blog_date']));
	$blog_date_m=(int)date('m', strtotime($Data_blog_detail['kc_blog_date']));
	$blog_date_y=(int)date('Y', strtotime($Data_blog_detail['kc_blog_date']));
	$blog_date=$blog_date_y."年&nbsp;".$blog_date_m."月&nbsp;".$blog_date_d."日"; 	
	
	$blog_date_get=$Data_blog_detail['kc_blog_date'];
	$seo_add_thumb_meta=$url_images_fure.$Data_blog_detail['seo_add_thumb_meta'];
?>
<!--Site tag-->
<title><?php echo $Data_blog_detail['kc_blog_title']; ?> | こぼれ話｜戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="description" content="<?php echo $Data_blog_detail['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $Data_blog_detail['seo_keyword']; ?>" />

<!--Facebook -->
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="kc-consul" />
<meta property="og:title" content="<?php echo $Data_blog_detail['seo_og_title']; ?>" />
<meta property="og:description" content="<?php echo $Data_blog_detail['seo_og_description']; ?>" />
<meta property="og:image" content="<?php echo url_root_main.$seo_add_thumb_meta; ?>" />
<!--<meta property="og:image" content="<?php echo url_root; ?>img/og/main.png" />-->

<meta property="og:see_also" content="<?php echo url_root; ?>"/>

<!--twitter-->
<meta name="twitter:card" content="summary"/>  <!-- Card type -->
<meta name="twitter:site" content="kc-consul"/>
<meta name="twitter:title" content="<?php echo $Data_blog_detail['kc_blog_title']; ?> | こぼれ話｜戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー">
<meta name="twitter:description" content="<?php echo $Data_blog_detail['seo_description']; ?>"/>
<meta name="twitter:creator" content="kandc.com"/>
<meta name="twitter:image:src" content="<?php echo url_root; ?>img/og/main.png"/>
<meta name="twitter:domain" content="<?php echo url_root; ?>"/>


<!--Google Plus-->
<meta property="business:contact_data:website" content="kc-consul"/>
<meta itemprop="name" content="<?php echo $Data_blog_detail['kc_blog_title']; ?> | こぼれ話｜戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー"/>
<meta itemprop="description" content="<?php echo $Data_blog_detail['seo_description']; ?>"/>
<meta itemprop="image" content="<?php echo url_root; ?>img/og/main.png"/>
<!--End tag-->