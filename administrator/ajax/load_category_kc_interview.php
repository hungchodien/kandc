<?php 
	@include('Lib/_init.php');
	@include('../Lib/_init.php');
	@include('../../Lib/_init.php');
	@include('../../../Lib/_init.php');
	$id=$_GET['kc_cat_interview'];
	$array_id=array();
	$Data_consul_cat = To_Get_Data("category_join_kc_interview", " and kc_interview_id=$id");
	for($k=0;$k<$Data_consul_cat['cnt'];$k++){
		array_push($array_id,array("id"=>$Data_consul_cat[$k]['kc_category_interview_id']));
	}	
	$content_json=json_encode($array_id);
	echo $content_json;
	
?>