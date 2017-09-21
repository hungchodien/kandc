<?php 
	$Data_Category_mailmagazin = Get_Data("category_mailmagazine"," and category_mailmagazine_Slug='$cmd_cat'", "count(*)as cnt,category_mailmagazine_Name,category_mailmagazine_ID,seo_keyword,seo_description,seo_add_thumb_meta,seo_og_description,seo_og_title");
		if($Data_Category_mailmagazin['cnt']<=0):
			header("Location:".url_root."404.html");
			exit();
		endif;
		$category_mailmagazine_ID=$Data_Category_mailmagazin['category_mailmagazine_ID'];
		$category_mailmagazine_name=$Data_Category_mailmagazin['category_mailmagazine_Name'];
		$seo_keyword=htmlspecialchars_decode($Data_Category_mailmagazin['seo_keyword']);
		$seo_description=htmlspecialchars_decode($Data_Category_mailmagazin['seo_description']);
		
		$seo_og_description=htmlspecialchars_decode($Data_Category_mailmagazin['seo_og_description']);
		$seo_og_title=htmlspecialchars_decode($Data_Category_mailmagazin['seo_og_title']);
		
		$seo_add_thumb_meta=$Data_Category_mailmagazin['seo_add_thumb_meta'];
?>
<div id="content" class="inside">
	<div id="mailmagazine_mobile" class="mailmagazine_mobile bg_white content_inside block_content clear">
    	<h3 class="title_mailmagazine">
        	<?php
				switch($cmd_cat){
					case "hunter-eye":
						echo "ヘッドハンターの目メールマガジンバックナンバー";
					break;
					case "career-up":
						echo "キャリアアップコラムメールマガジンバックナンバー";
					break;
					case "interview":
						echo "面接官の本音メールマガジンバックナンバー";
					break;
					default:
					echo "";
				}
			 ?>
        </h3>
    
    	<?php
		
				$Data_mailmagazine = To_Get_Data("mailmagazine"," and category_mailmagazine_ID=$category_mailmagazine_ID and mailmagazine_status=0 order by mailmagazine_date
 DESC");
				if($Data_mailmagazine['cnt'] > 0):
					for($i=0; $i<$Data_mailmagazine['cnt']; $i++){
						$List_mailmagazine = $Data_mailmagazine[$i];
						$mailmagazine_id=$List_mailmagazine['mailmagazine_id'];
						$title_mailmagazine=$List_mailmagazine['mailmagazine_title'];
						$mailmagazine_vol=$List_mailmagazine['mailmagazine_vol'];
						$mailmagazine_date=$List_mailmagazine['mailmagazine_date'];
						//$mailmagazine_date_convert=date('Y/m月',$mailmagazine_date);
						$month=date('m',strtotime($mailmagazine_date));
						$year=date('Y',strtotime($mailmagazine_date));
						$url_link=url_root."mailmagazine/".$cmd_cat."/".$mailmagazine_id.".html";
			 ?>
			<div class="item-mailmagazine clear">
            	<div class="date_item_category l"><span class="date_mt"><?php echo $year."/".$month."月"; ?></span></div>
                <div class="l title_item_category"><a href="<?php echo $url_link; ?>"><?php echo $title_mailmagazine." ".$mailmagazine_vol;  ?></a></div>
            </div> 
		  		
		  <?php 
					}
		  		else:
					header("Location:".url_root."404.html");
					exit();
		  		endif;
		  ?>
    
    
    </div><!--career_mobile-->
<?php include('inc/menu_interview.php'); ?>
<?php include ('inc/page_footer.php');?>
</div><!--#content-->