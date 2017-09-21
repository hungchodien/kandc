<?php 
	
	$where="and `A`.`shiodome_academy_status`=0 and `C`.`shiodome_academy_category_id`='$sid' order by `A`.`shiodome_academy_date` DESC";
	 $Data_shiodome_list =To_Get_Data("shiodome_academy as A join shiodome_academy_join_category as B on
A.shiodome_academy_id=B.shiodome_academy_id join shiodome_academy_category as C on B.shiodome_academy_category_id=C.shiodome_academy_category_id", $where,"C.seo_keyword,C.seo_description,C.seo_og_description,C.seo_og_title,C.seo_add_thumb_meta,A.shiodome_academy_theme,A.shiodome_academy_time,A.shiodome_academy_place,A.shiodome_academy_guest,A.shiodome_academy_description,C.shiodome_academy_category_name_ja,A.shiodome_academy_date,A.shiodome_academy_thumbnail,A.shiodome_academy_thumbnail_alt,C.shiodome_academy_category_name_en");
	$count_item= $Data_shiodome_list['cnt'];
		$title_category=$Data_shiodome_list[0]['shiodome_academy_category_name_ja'];
	    $seo_keyword =htmlspecialchars_decode($Data_shiodome_list[0]['seo_keyword']);
		$seo_description=htmlspecialchars_decode($Data_shiodome_list[0]['seo_description']);
		$seo_og_description=htmlspecialchars_decode($Data_shiodome_list[0]['seo_og_description']);
		$seo_og_title=htmlspecialchars_decode($Data_shiodome_list[0]['seo_og_title']);
		$seo_add_thumb_meta=$url_images_fure.$Data_shiodome_list[0]['seo_add_thumb_meta'];
	if($count_item>0):
?>
<title><?php echo $title_category;?> | キャリアアップコラム | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
<?php if(empty($seo_keyword)):?>
<meta name="keywords" content=""/>
<?php else: ?>
<meta name="keywords" content="<?php echo strip_tags($seo_keyword); ?>"/>
<?php endif; ?>
<?php if(empty($seo_description)):?>
<meta name="description" content="" />
<?php else: ?>
<meta name="description" content="<?php echo strip_tags($seo_description); ?>" />
<?php endif; ?>
<?php if(empty($seo_og_title)):?>
<meta property="og:title" content="" />
<?php else: ?>
<meta property="og:title" content="<?php echo $seo_og_title; ?>" />
<?php endif; ?>
<?php if(empty($seo_og_description)):?>
<meta property="og:description" content="" />
<?php else: ?>
<meta property="og:description" content="<?php echo strip_tags($seo_og_description); ?>" />
<?php endif; ?>
<meta property="og:image" content="<?php echo url_root.$seo_add_thumb_meta; ?>" />
<?php else: ?>

<title>キャリアアップコラム:キャリアアップ&nbsp;バックナンバー&nbsp;|&nbsp;ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
<meta name="keywords" content="ヘッドハンティング,転職,人材紹介,求人,キャリア" />
<meta name="description" content="数あるヘッドハンティング会社の中で私たちクライス&amp;カンパニーは候補者オリエンティドを基本ポリシーとし、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。" />
<meta property="og:title" content="キャリアアップコラム:キャリアアップ&nbsp;バックナンバー&nbsp;|&nbsp;ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー" />
<meta property="og:description" content="数あるヘッドハンティング会社の中で私たちクライス&amp;カンパニーは候補者オリエンティドを基本ポリシーとし、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。" />
<?php endif; ?>