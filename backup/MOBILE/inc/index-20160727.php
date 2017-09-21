    <div class="slider-wrapper theme-default" style="text-align:center;">
     <img src="<?php echo url_root; ?>img/kreis-mobile-main.png" alt="30代マネージャークラスの転職支援" /> 
    </div>
   
    
    <?php include ('inc/scroll_later_job.php');?>
    
    
    <div id="content" class="inside clear"> 
    
    <div class="block_content">
    
    <div class="index_btns consultation_pd clear">
    <!--<div class="fl"><a href="<?php echo url_root; ?>jobinfo.html"><img src="<?php echo url_root; ?>img/button-jobinfo.png" alt="毎日更新 求人情報"  /></a></div>
    <div class="fr"><a href="<?php echo url_root; ?>documents.html"><img src="<?php echo url_root; ?>img/button-read.png" alt="次のキャリアを考えるヒントが満載読みもの" /></a></div>-->
	 
	<a href="<?php echo url_root; ?>entry-30/" target="_blank">
    	<img src="<?php echo url_root; ?>img/button-30s-entry.png" alt="30秒で簡単　簡単ヘッドハンティング登録" />
    </a>	
		
    </div>

    <!--<div class="index_btns clear">
    	<div class="fl"><a href="<?php echo url_root; ?>entry_pre/" target="_blank"><img src="<?php echo url_root; ?>img/button-pre.png" alt="メールマガジン"  /></a></div>
    	<div class="fr"><a href="<?php echo url_root; ?>entry/"><img src="<?php echo url_root; ?>img/button-entry-2.png" alt="いますぐ転職無料エントリー" /></a></div>
    </div>-->
	 <div class="index_btns clear">
    	<div class="fl"><a href="https://www.kandc.com/mobile/entry_pre/" target="_blank"><img src="<?php echo url_root; ?>img/button-pre.png" alt="いつかは転職無料プレエントリー"  /></a></div>
    	<div class="fr"><a href="<?php echo url_root; ?>entry/" target="_blank"><img src="<?php echo url_root; ?>img/button-entry-2.png" alt="いますぐ転職無料エントリー" /></a></div>
    </div>
	
    
    
    </div>
    
    <!--Job info-->
    <div class="bg_white content_inside block_content">
  <div class="look-title clear">
   	<?php include('inc/job_count.php'); ?>
  </div>
  <h3 class="title">職種で探す</h3>
  <div class="look-content-link clear">
   	 
     <?php 
		
		
							$query_list=HCMListCategory();
							
							while($row_list=mysql_fetch_assoc($query_list))
							{
								$id_category=$row_list['id'];
								$query_check=Check_HCMCategory($id_category);
								
								if($query_check>0)
								{
									
									?>
 <div class="look-link">
		<a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst"><span class="category_txt">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;(".Count_ListJob_ByCategory($row_list['id']).")</span><span class='arrow2'>&rsaquo;</span>";
									 ?>
                                    </a>
                                </div>									
									<?php 
										
									}
									else
									{
										if($id_category!=1)
											{
								?>
                                <div class="look-link">
                       <a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'] .".html";?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst"><span class="category_txt">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;(".Count_ListJob_ByCategory($row_list['id']).")</span><span class='arrow2'>&rsaquo;</span>";
									 ?>
                                    </a>
                                </div>
                                <?php 
											}
									}
							}
								
							?>

   
  </div>
  <div class="high-class">
    <h3 class="title">ハイクラス <span style="font-size: 13px">年収 1000 万以上の求人 </span></h3>
    <div class="look-content-link clear">
      
     <?php 
				
				//$category_id_flag = "2, 3, 4, 17, 8, 9, 10, 15, 16";
				//get data High Class
				$Data_high_class=To_Get_Data("category"," and id in(
select D.parent_id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' group by D.parent_id
)
or id in(

select D.id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' and D.parent_id is NULL group by D.id
)
and id !=1","id");
			$count_high_class_id=$Data_high_class['cnt'];
			for($m=0;$m<$count_high_class_id;$m++){
				$List_high_class = $Data_high_class[$m];
				$id_high_class.=$List_high_class['id'].",";	
				}
				//echo $id_high_class."<br/>";
				$category_id_flag=substr($id_high_class, 0, -1);  
				//echo $category_id_flag."<br/>";
				
				$Data_Category_Flag=To_Get_Data("category"," and id in($category_id_flag)","`id`,`name`,`key_name`,`job_count`");
				if($Data_Category_Flag['cnt']>0){
						for($i=0; $i<$Data_Category_Flag['cnt']; $i++){
							$List_Category_Flag = $Data_Category_Flag[$i];
							$name_Category_Flag=$List_Category_Flag['name'];
							$id_Category_Flag=$List_Category_Flag['id'];
							$key_name_Category_Flag=$List_Category_Flag['key_name'];
							$link_Category_Flag=url_root."category/high_class/$id_Category_Flag".".html";
				?>
                <div class="look-link">
					<a href="<?php echo $link_Category_Flag; ?>" title="<?php echo $name_Category_Flag; ?>" target="_self"><span class="category_txt"><?php echo $name_Category_Flag; ?></span><span class="arrow2">&rsaquo;</span></a></div>
                <?php
						}
						
					}else{
						?>
                        <div class="not_found"><center>Not Found!</center></div>
                        <?php
						
						}
				
				
				
				
			?>
     
     
    </div>
  </div>
  
  </div><!--bg_white-->
  
  <?php include('inc/notice_inc.php'); ?>
    <!--End -->
    
    
    
    </div>
    <!--end content-->
    
  