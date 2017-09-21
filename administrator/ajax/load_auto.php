<meta charset="UTF-8" />
<?php 
	error_reporting(E_ALL);
     ini_set('display_errors', 1);
	set_time_limit(0); 
			@include_once('Lib1/_init.php');
			@include_once('../Lib1/_init.php');
			@include_once('../../Lib1/_init.php');
			@include_once('../../../Lib1/_init.php');

	$Data=To_Get_Data("career_up"," and status_career_up=0  ","id_career_up,subtitle_career_up,title_career_up,excerpt_career_up,consultant_add_thumbnail,seo_og_description,seo_og_title");
	$count_data=$Data['cnt'];
	
	if($count_data>0):
		$j=0;
		for($i=0;$i<$count_data;$i++):
			$j=$j+1;
			$List=$Data[$i];
			$id=$List['id_career_up'];
			$title_career_up=$List['title_career_up'];
			$subtitle_career_up=$List['subtitle_career_up'];
			$excerpt_career_up=$List['excerpt_career_up'];
			$consultant_add_thumbnail=$List['consultant_add_thumbnail'];
			$seo_og_description=$List['seo_og_description'];
			$seo_og_title=$List['seo_og_title'];
			
			if($seo_og_title =="" || empty($seo_og_title)):
				//echo $id."=====".$title_career_up."<br/>";
				$array_str = array(
					   "seo_og_description" => $excerpt_career_up,	
					   "seo_og_title" => $subtitle_career_up,
					   "seo_add_thumb_meta" =>$consultant_add_thumbnail
					);
				 
				$res = MK_Datas($array_str,"update", "career_up","id_career_up = $id","N");
				$msg =  $sid." Has been Update";
				echo $msg."== result:".$res;	

			endif;
			
		endfor;
		echo $j;
	endif;
				

?>