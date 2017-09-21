<?php 
	$order_id_seo=(int)$sid;
	$row_job_seo=Job_Show_Detail_id($order_id_seo);
	if($row_job_seo['job_name']!=""):
	?>

    <?php 
	
	   $job_id_seo=$row_job_seo['id'];
			$Data_job_get_category_seo=To_Get_Data("`category` as `A` join `job_category` as `B` on `A`.`id`=`B`.`category_id`","  and `A`.`id`=$cate  limit 1","`A`.`parent_id`,`A`.`id`,`A`.`name`");
			if($Data_job_get_category_seo['cnt']>0):
			
			$parent_idparent_seo_check=$Data_job_get_category_seo[0]['parent_id'];
			$parent_id_seo_check=$Data_job_get_category_seo[0]['id'];
			$parent_name_seo_check=$Data_job_get_category_seo[0]['name'];
			$url_canon=url_root_main."jobinfo/".$order_id_seo."/".$parent_id_seo_check.".html";
			
            
           $Data_job_get_category_parent_seo_check_parent=To_Get_Data("`category` as `A` join `job_category` as `B` on `A`.`id`=`B`.`category_id`","  and `A`.`parent_id`=$parent_idparent_seo_check  limit 1","`A`.`parent_id`,`A`.`id`,`A`.`name`");
			if($Data_job_get_category_parent_seo_check_parent['cnt']>0): ?>
                    
            <title><?php echo $Data_job_get_category_parent_seo_check_parent[0]['name']; ?> > <?php echo $parent_name_seo_check; ?> | <?php echo $row_job_seo['job_name']; ?> | 戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
		
            <meta property="og:title" content="<?php echo $Data_job_get_category_parent_seo_check_parent[0]['name']; ?> > <?php echo $parent_name_seo_check; ?> | <?php echo $row_job_seo['job_name']; ?> | 戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
            
            <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,<?php echo $Data_job_get_category_parent_seo_check_parent[0]['name']; ?>,<?php echo $parent_name_seo_check; ?>,<?php echo $row_job_seo['job_name']; ?>" /> 
<meta name="description" content="<?php echo $row_job_seo['job_name']; ?>[<?php echo $Data_job_get_category_parent_seo_check_parent[0]['name']; ?>(<?php echo $parent_name_seo_check; ?>)]の求人情報です。" /> 
<meta property="og:description" content="<?php echo $row_job_seo['job_name']; ?>[<?php echo $Data_job_get_category_parent_seo_check_parent[0]['name']; ?>(<?php echo $parent_name_seo_check; ?>)]の求人情報です。" />
			<?php 
				else:
				?>
                 <title> <?php echo $parent_name_seo_check; ?> | <?php echo $row_job_seo['job_name']; ?> | 戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
		
            <meta property="og:title" content="<?php echo $parent_name_seo_check; ?> | <?php echo $row_job_seo['job_name']; ?> | 戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
            
            <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,<?php echo $parent_name_seo_check; ?>,<?php echo $row_job_seo['job_name']; ?>" /> 
<meta name="description" content="<?php echo $row_job_seo['job_name']; ?>[<?php echo $parent_name_seo_check; ?>]の求人情報です。" /> 
<meta property="og:description" content="<?php echo $row_job_seo['job_name']; ?>[<?php echo $parent_name_seo_check; ?>]の求人情報です。" />
                
                <?php endif; ?>
              
            <?php 
			else:
			
		?>
    		<title><?php echo $row_job_seo['job_name']; ?>&nbsp;|&nbsp;ヘッドハンティング・転職・人材紹介のクライス&amp;カンパニー</title>
			
            <meta property="og:title" content="<?php echo $row_job_seo['job_name']; ?>&nbsp;|&nbsp;ヘッドハンティング・転職・人材紹介のクライス&amp;カンパニー" />
            <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,＃大カテゴリ＃,＃小カテゴリ＃" /> 
<meta name="description" content="IT・通信業界、コンサルティング業界、金融業界を中心に、注目度の高い求人や企業を厳選して掲載しております。求人情報をお探しなら厳選された企業の優良求人情報が豊富なクライス&amp;カンパニーへお気軽にご連絡ください。" /> 
<meta property="og:description" content="IT・通信業界、コンサルティング業界、金融業界を中心に、注目度の高い求人や企業を厳選して掲載しております。求人情報をお探しなら厳選された企業の優良求人情報が豊富なクライス&amp;カンパニーへお気軽にご連絡ください。" />
   	 <?php 
		endif;
	else:
?>
<title>求人情報 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
<meta property="og:title" content="求人情報 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー" />
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,＃大カテゴリ＃,＃小カテゴリ＃" /> 
<meta name="description" content="IT・通信業界、コンサルティング業界、金融業界を中心に、注目度の高い求人や企業を厳選して掲載しております。求人情報をお探しなら厳選された企業の優良求人情報が豊富なクライス&amp;カンパニーへお気軽にご連絡ください。" /> 
<meta property="og:description" content="IT・通信業界、コンサルティング業界、金融業界を中心に、注目度の高い求人や企業を厳選して掲載しております。求人情報をお探しなら厳選された企業の優良求人情報が豊富なクライス&amp;カンパニーへお気軽にご連絡ください。" />
<?php 
	endif;
?>


<meta property="og:image" content="<?php echo url_root; ?>img/index/facebook-og-image.png" />

	<?php 
		$url_curent=curPageURL();
		if (strpos($url_curent,'//www.') !== false) {
    		$url_kandc_canon=str_replace("kc-consul.com","kandc.com",$url_curent);
		}else{
			$url_kandc_canon=str_replace("kc-consul.com","www.kandc.com",$url_curent);
		}
		
	?>
	<link rel="canonical" href="<?php echo $url_kandc_canon; ?>" />

