<?php 
	$currentpage = '';
	 	if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
			 $currentpage = (int)$_GET['currentpage'];
		}else{
			 $currentpage = 1;
		} 
		
	if(isset($list)): 
			$sid=$list;
			endif;
			if(isset($high_class)): 
			$sid=$high_class;
			endif;	
			if(isset($hcm)): 
			$sid=$hcm;
			endif;
		if($sid>0 && !empty($sid)):
		$category_seo_job=To_Get_Data("`category`"," and `id`=$sid","`name`,`id`,`parent_id`");
				if($category_seo_job['cnt']>0):
						if($category_seo_job[0]['parent_id']=="NULL" || empty($category_seo_job[0]['parent_id'])):
						$parent_id_seo=$category_seo_job[0]['parent_id'];
						$name_category_seo_job_1=$category_seo_job[0]['name'];
					?>
<title><?php echo $name_category_seo_job_1; ?>の求人情報 <?php echo $currentpage; ?>ページ |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,<?php echo $name_category_seo_job_1; ?>" />
<meta name="description" content="<?php echo $name_category_seo_job_1; ?>の求人情報です。コンサルティングファームの求人案件はもちろん、年収800万円以上の高年収、管理職、スペシャリストの事業会社案件も豊富です。" />
<meta property="og:title" content="<?php echo $name_category_seo_job_1; ?>の求人情報 <?php echo $currentpage; ?>ページ |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="<?php echo $name_category_seo_job_1; ?>の求人情報です。コンサルティングファームの求人案件はもちろん、年収800万円以上の高年収、管理職、スペシャリストの事業会社案件も豊富です。" />
<meta property="og:image" content="<?php echo url_root; ?>img/index/facebook-og-image.png" />
                    <?php
					else:
						//$category_seo_job111=To_Get_Data("`category`"," and `id`=$sid","`name`,`id`,`parent_id`");
						//$parent_id_seo=$category_seo_job111[0]['parent_id'];
						//$name_category_seo_job_1=$category_seo_job111[0]['name'];

						$parent_id_seo=$category_seo_job[0]['parent_id'];
						$name_category_seo_job_1=$category_seo_job[0]['name'];

						$category_seo_job_pa=To_Get_Data("`category`"," and `id`='$parent_id_seo'","`name`");
						?>
<title><?php echo $category_seo_job_pa[0]['name']; ?>(<?php echo $name_category_seo_job_1; ?>)の求人情報 <?php echo $currentpage; ?>ページ |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,求人,<?php echo $category_seo_job_pa[0]['name']; ?>,<?php echo $name_category_seo_job_1; ?>" />
<meta name="description" content="<?php echo $category_seo_job_pa[0]['name']; ?>(<?php echo $name_category_seo_job_1; ?>)の求人情報です。コンサルティングファームの求人案件はもちろん、年収800万円以上の高年収、管理職、スペシャリストの事業会社案件も豊富です。" />
<meta property="og:title" content="<?php echo $category_seo_job_pa[0]['name']; ?>(<?php echo $name_category_seo_job_1; ?>)の求人情報 <?php echo $currentpage; ?>ページ |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="<?php echo $category_seo_job_pa[0]['name']; ?>(<?php echo $name_category_seo_job_1; ?>)の求人情報です。コンサルティングファームの求人案件はもちろん、年収800万円以上の高年収、管理職、スペシャリストの事業会社案件も豊富です。" />
<meta property="og:image" content="<?php echo url_root; ?>img/index/facebook-og-image.png" />
                        <?php 
					endif;	
				else:?>
				 <title>ハイクラス求人 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー </title> 
<meta name="keywords" content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート,ハイクラス,求人 " />
<meta name="description" content="公開可能なハイクラス求人の中からさらに厳選して掲載しております。ビジネスコンサルタント、経営企画・事業企画など様々なポジションがあります。ご興味ある求人があれば、ぜひエントリーください。" />
<meta property="og:title" content="ハイクラス求人 | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー " />
<meta property="og:description" content="公開可能なハイクラス求人の中からさらに厳選して掲載しております。ビジネスコンサルタント、経営企画・事業企画など様々なポジションがあります。ご興味ある求人があれば、ぜひエントリーください。" />
<meta property="og:image" content="<?php echo url_root; ?>img/index/facebook-og-image.png" />
				<?php endif;
		else:
		?>
        <title>求人情報│厳選された企業の優良求人情報でキャリア支援をするクライス&amp;カンパニー</title> 
        <meta name="keywords" content="ヘッドハンティング,転職,人材紹介,求人,キャリア" />
<meta name="description" content="数あるヘッドハンティング会社の中で私たちクライス&amp;カンパニーは候補者オリエンティドを基本ポリシーとし、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。" />
<meta property="og:title" content="求人情報│厳選された企業の優良求人情報でキャリア支援をするクライス&amp;カンパニー" />
<meta property="og:description" content="数あるヘッドハンティング会社の中で私たちクライス&amp;カンパニーは候補者オリエンティドを基本ポリシーとし、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。" />
<meta property="og:image" content="<?php echo url_root; ?>img/index/facebook-og-image.png" />
<?php 
		endif;
?>
<?php $url_curent=curPageURL();
		if (strpos($url_curent,'//www.') !== false) {
    		$url_kandc_canon=str_replace("kc-consul.com","kandc.com",$url_curent);
		}else{
			$url_kandc_canon=str_replace("kc-consul.com","www.kandc.com",$url_curent);
		}
		
	?>
<link rel="canonical" href="<?php echo $url_kandc_canon; ?>" />

