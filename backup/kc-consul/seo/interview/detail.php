<?php 
	if(isset($_GET['number'])):
		$page_number=(int)$_GET['number'];
	else:
		$page_number=1;
	endif;
	$vol=$_GET['show'];
	$cat=$_GET['list'];
	$Data_interview_detail=Get_Data("kc_interview"," and kc_interview_vol_number_slug='$vol' and kc_interview_page_number=$page_number");
	if($Data_interview_detail['cnt']<=0):
		header("Location:".url_root."404.html");
		exit();
	endif;
	$Data_category=Get_Data("kc_category_interview"," and `kc_category_interview_name_en`='$cat'");
	$category_name_ja=$Data_category['kc_category_interview_name_ja'];
	$category_name_en=$Data_category['kc_category_interview_name_en'];
	$title_interview=$Data_interview_detail['kc_interview_title'];
	
	$content_postion=unserialize($Data_interview_detail['kc_interview_postion']);
	$content_array_postion=@array_filter($content_postion);
	if(!empty($content_array_postion)):
		$group_postion="";
		$group_postion_inter_full="";
	for($t=0;$t<count($content_array_postion);$t++):
		$postion_ic=$content_array_postion[$t]['postion'];
		$interviewee_fullname_ic=$content_array_postion[$t]['interviewee_fullname'];
		$group_postion .=	$postion_ic." ".$interviewee_fullname_ic." ";
		$group_postion_inter_full .=$interviewee_fullname_ic." ";
		$group_postion_breakcrurm .=$interviewee_fullname_ic." 氏&";
		$group_postion_detail_first .=$postion_ic." ".$interviewee_fullname_ic."氏<br/>";
		
		$group_postion_detail_first_change .="<p class='list_group_interfull clear'><span class='postion_span'>".$postion_ic."</span><span class='interviewfull_span'>".$interviewee_fullname_ic."氏</span></p>";


	endfor;
	$postion_string_end= substr($group_postion,0,-1);
	$group_postion_detail_first_show=substr($group_postion_detail_first,0,-5);

	$group_postion_breakcrurm_show=substr($group_postion_breakcrurm,0,-1);
	endif;
	
	
	$keyword_seo_interview=$Data_interview_detail['seo_keyword'];
	$description_seo_interview=$Data_interview_detail['seo_description'];
	$seo_og_description=$Data_interview_detail['seo_og_description'];
	$seo_og_title=$Data_interview_detail['seo_og_title'];
	$seo_add_thumb_meta=$url_images_fure.$Data_interview_detail['seo_add_thumb_meta'];
	
	$page_number_inter=$Data_interview_detail['kc_interview_page_number'];
	$company_name=$Data_interview_detail['kc_interview_company_name'];
?>
<title><?php echo $company_name; ?><?php echo $group_postion_inter_full; ?>氏&nbsp;<?php echo $page_number_inter; ?>ページ目 | <?php echo $category_name_ja; ?> | インタビュー | CONSULTANT CAREER[クライス＆カンパニー]</title>
<meta name="keywords" content="<?php echo strip_tags($keyword_seo_interview); ?>" />
<meta name="description" content="<?php echo strip_tags($description_seo_interview); ?>" />
<meta property="og:title" content="<?php echo strip_tags($seo_og_title); ?>" />
<meta property="og:description" content="<?php echo strip_tags($seo_og_description); ?>" />
<meta property="og:image" content="<?php echo url_root_main.$seo_add_thumb_meta; ?>" />