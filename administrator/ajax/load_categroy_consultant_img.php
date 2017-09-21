<?php 
	@include('Lib/_init.php');
	@include('../Lib/_init.php');
	@include('../../Lib/_init.php');
	@include('../../../Lib/_init.php');
	$consultant_ID=(int)$_POST['typeID'];
	 $where_total_consul_content = "and consultant_Status=0 and consultant_ID={$consultant_ID} ";
$Data_consul_content = To_Get_Data("consultant", $where_total_consul_content);
	$category_consul_title=$Data_consul_content[0]['consultant_Name'];
	$category_consul_subtitle=$Data_consul_content[0]['consultant_Info'];
	$category_consul_thumnail=$Data_consul_content[0]['consultant_Thumb'];
	$category_seo_set=$Data_consul_content[0]['public_seo_img'];

	$array_content=array(
		"title_consultant"=>$category_consul_title,
		"info_consultant"=>$category_consul_subtitle,
		"img_consultant"=>$category_consul_thumnail
	);
	if(!empty($category_seo_set)):
		echo $category_seo_set;
	else:
		echo "./upload_thumnail/".$category_consul_thumnail;
		//echo json_encode($array_content);
		//echo "./upload_thumnail/".$category_consul_thumnail;
	endif;
?>							
    				