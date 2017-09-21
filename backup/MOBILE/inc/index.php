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
  
  <!--fix for demo 20160721-->
  <?php include('inc/notice_inc.php'); ?>
  
  
<div class="feature_btns">
<h3 class="feature_title img_title"><img src="<?php echo url_root; ?>img/index/features_title.png" alt="当社の特長" title="" /></h3>
<h4 class="feature_btns_title"><a href="<?php echo url_root; ?>features/"><img src="<?php echo url_root; ?>img/index/3-features.png" alt="クライス＆カンパニーが30代マネージャークラスの転職に強い3つの理由" title="" /></a></h4>
<div class="features_btns">
<a href="<?php echo url_root; ?>features/features01.php"><img title="" alt="30代のキャリアに精通" src="<?php echo url_root; ?>img/index/features1_btn.png"></a>
<a href="<?php echo url_root; ?>features/features02.php"><img title="" alt="国家資格保有者の圧倒的コンサルティング力" src="<?php echo url_root; ?>img/index/features2_btn.png"></a>
<a href="<?php echo url_root; ?>features/features03.php"><img title="" alt="23年の歴史で培った企業との強固なパイプ" src="<?php echo url_root; ?>img/index/features3_btn.png"></a>
</div>
</div> 

<div class="index_interviews">
<h3 class="img_title"><img src="<?php echo url_root; ?>img/index/interview_title.png" alt="コラム・インタビューを読む" title="" /></h3>
    		<!--Company interview-->
    	<?php
$Data_company_in1=To_Get_Data("index_interview_control"," and index_interview_control_status=0 and index_interview_control_option=1 order by index_interview_control_date DESC limit 2");
	if($Data_company_in1['cnt']>0):
		$j=0;
		for($i=0;$i<$Data_company_in1['cnt'];$i++):
			$j++;
			$Data_company_in=$Data_company_in1[$i];
		//$id_interview_first=$Data_company_in['index_interview_control_id'];
	?>
    	<div class="index_box container_company_interview clear">
        
        <div class="fl interview_imgs">
        <div class="interview_tmb"><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><span class="interviewer_bg" style="background-image: url('<?php echo url_root_domain.$url_images_thumnail.$Data_company_in['index_interview_control_thumbnail_src']; ?>');"></span></a></div>
        <div class="interview_company_logo"><img alt="<?php echo $Data_company_in['index_interview_control_logo_alt']; ?>" src="<?php echo url_root_domain.$url_images_thumnail.$Data_company_in['index_interview_control_logo_src']; ?>" /></div>
        </div>
        
        <div class="interview_txts">
        <h3><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><?php echo $Data_company_in['index_interview_control_title']; ?></a></h3>
        <div class="interview_control_content">
                	<p class="interview_control_company_name"><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><?php echo $Data_company_in['index_interview_control_company_name']; ?></a></p>
                    <p class="interview_control_postion"><?php echo $Data_company_in['index_interview_control_postion']; ?></p>
                    <p class="interview_control_name"><?php echo $Data_company_in['index_interview_control_name']; ?></p>
                </div>
        </div>
            
        </div><!--container_company_interview-->
     <?php endfor; endif; ?>     
    
    
    <?php
$Data_turning=Get_Data("index_interview_control"," and index_interview_control_status=0 and index_interview_control_option=4 order by index_interview_control_date DESC limit 1");
//print_r($Data_turning) index_interview_control_id;
			if($Data_turning['cnt']>0):
				$id_turningpoint_first=$Data_turning['index_interview_control_id'];
			?>
    		<div class="index_box container_company_interview clear">
            
            <div class="fl interview_imgs">
            <div class="interview_tmb"><a href="<?php echo $Data_turning['index_interview_control_link']; ?>" target="_blank"><span class="interviewer_bg" style="background-image: url('<?php echo url_root_domain.$url_images_thumnail.$Data_turning['index_interview_control_thumbnail_src']; ?>');"></span></a></div>
            <div class="interview_company_logo"><img alt="<?php echo $Data_turning['index_interview_control_logo_alt']; ?>" src="<?php echo url_root_domain.$url_images_thumnail.$Data_turning['index_interview_control_logo_src']; ?>" /></div>
            </div>
            
            <div class="interview_txts">
            <h3><a href="<?php echo $Data_turning['index_interview_control_link']; ?>" target="_blank"><?php echo $Data_turning['index_interview_control_title']; ?></a></h3>
            <div class="interview_control_content">
                        <p class="interview_control_company_name"><a href="<?php echo $Data_turning['index_interview_control_link']; ?>" target="_blank"><?php echo $Data_turning['index_interview_control_company_name']; ?></a></p>
                        <p class="interview_control_postion"><?php echo $Data_turning['index_interview_control_postion']; ?></p>
                        <p class="interview_control_name"><?php echo $Data_turning['index_interview_control_name']; ?></p>
                    </div>
            </div>
	            
       	 	</div><!--container_company_interview-->
        	<?php endif; ?>  
   
<?php 
	$Data_kc=To_Get_Data("index_interview_control"," and index_interview_control_status=0 and index_interview_control_option=3 order by index_interview_control_date DESC limit 2");
	if($Data_kc['cnt']>0):
?>  
        	<?php
		$mn=0;
		for($k=0;$k<$Data_kc['cnt'];$k++):
		$mn++;
			$List_kc=$Data_kc[$k];
			$category_id=(int)$List_kc['index_interview_control_category'];
			$where_total=" and `kc_category_interview_id` =$category_id";
			$Data_cat= Get_Data("kc_category_interview", $where_total." order by kc_category_interview_date desc limit 1");
	?>
        	<div class="index_box container_company_interview clear">
            
            <div class="fl interview_imgs">
            <div class="interview_tmb"><a href="<?php echo $List_kc['index_interview_control_link']; ?>" target="_blank" rel="nofollow"><span class="interviewer_bg" style="background-image: url('<?php echo url_root_domain.$url_images_thumnail.$List_kc['index_interview_control_thumbnail_src']; ?>');"></span></a></div>
            <div class="interview_company_logo"><img alt="<?php echo $List_kc['index_interview_control_logo_alt']; ?>" src="<?php echo url_root_domain.$url_images_thumnail.$List_kc['index_interview_control_logo_src']; ?>" /></div>
            </div>
            
            <div class="interview_txts">
            <div class="interview_control_content">
                        <h3><a class="external_link" href="<?php echo $List_kc['index_interview_control_link']; ?>" target="_blank" rel="nofollow"><?php echo $List_kc['index_interview_control_company_name']; ?></a></h3>
                        <p class="interview_control_postion"><?php echo $Data_cat['kc_category_interview_name_ja']; ?></p>
                    </div>
            </div>
                
            </div><!--kc_consul_index_content-->
      <?php endfor; ?>         
       <?php endif; ?>
    
    		<!--Company interview-->
    	<?php
		
$Data_company_in=Get_Data("index_interview_control"," and index_interview_control_status=0 and index_interview_control_option=4 and `index_interview_control_id` not in($id_turningpoint_first) order by index_interview_control_date DESC limit 1");
	if($Data_company_in['cnt']>0):
	?>
    	<div class="index_box container_company_interview clear">
        
        <div class="fl interview_imgs">
        <div class="interview_tmb"><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><span class="interviewer_bg" style="background-image: url('<?php echo url_root_domain.$url_images_thumnail.$Data_company_in['index_interview_control_thumbnail_src']; ?>');"></span></a></div>
        <div class="interview_company_logo"><img alt="<?php echo $Data_company_in['index_interview_control_logo_alt']; ?>" src="<?php echo url_root_domain.$url_images_thumnail.$Data_company_in['index_interview_control_logo_src']; ?>" /></div>
        </div>
        
        <div class="interview_txts">
        <h3><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><?php echo $Data_company_in['index_interview_control_title']; ?></a></h3>
        <div class="interview_control_content">
                    <p class="interview_control_company_name"><a href="<?php echo $Data_company_in['index_interview_control_link']; ?>"><?php echo $Data_company_in['index_interview_control_company_name']; ?></a></p>
                    <p class="interview_control_postion"><?php echo $Data_company_in['index_interview_control_postion']; ?></p>
                    <p class="interview_control_name"><?php echo $Data_company_in['index_interview_control_name']; ?></p>
                </div>
        </div>
            
        </div><!--container_company_interview-->
     <?php endif; ?>     
            <?php
$Data_inters=Get_Data("index_interview_control"," and index_interview_control_status=0 and index_interview_control_option=2 order by index_interview_control_date DESC limit 1");
			if($Data_inters['cnt']>0):?>
            <div class="index_box container_company_interview clear">
            
            <div class="fl interview_imgs">
            <div class="interview_tmb"><a href="<?php echo $Data_inters['index_interview_control_link']; ?>" target="_top"><span class="interviewer_bg" style="background-image: url('<?php echo url_root_domain.$url_images_thumnail.$Data_inters['index_interview_control_thumbnail_src']; ?>');"></span></a></div>
            <div class="interview_company_logo"><img alt="<?php echo $Data_inters['index_interview_control_logo_alt']; ?>" src="<?php echo url_root_domain.$url_images_thumnail.$Data_inters['index_interview_control_logo_src']; ?>" /></div>
            </div>
            
            <div class="interview_txts">
            <h3><a href="<?php echo $Data_inters['index_interview_control_link']; ?>" target="_top"><?php echo $Data_inters['index_interview_control_title']; ?></a></h3>
            <div class="interview_control_content">
                        <p class="interview_control_company_name"><a href="<?php echo $Data_inters['index_interview_control_link']; ?>" target="_top"><?php echo $Data_inters['index_interview_control_company_name']; ?></a></p>
                        <p class="interview_control_postion"><?php echo $Data_inters['index_interview_control_postion']; ?></p>
                        <p class="interview_control_name"><?php echo $Data_inters['index_interview_control_name']; ?></p>
                    </div>
            </div>
		            
       	 	</div><!--container_company_interview-->
            <?php endif; ?>     
    
</div><!--index_interviews-->

<div class="amazon_banner">
<a href="<?php echo url_root; ?>amazontour/" target="_blank"><img title="" alt="amazontour" src="<?php echo url_root; ?>img/index/amazon.jpg"></a>
</div>

<div class="index_box careerup_box">
<h3 class="img_title"><a href="<?php echo url_root; ?>career_up/"><img title="" alt="キャリアアップコラム" src="<?php echo url_root; ?>img/index/careerUp_title.png"></a></h3>
<p class="last_update">転職・キャリア構築にまつわる当社コンサルタントのコラム</p>
<?php 
		$Data_career_up= To_Get_Data("`career_up` as `A` join `consultant` as `B` on 
`A`.`consultant_thumb_career_up` =`B`.`consultant_ID`"," and `A`.`status_career_up`=0 order by `A`.`date_career_up` DESC limit 2","`A`.`id_career_up`,`A`.`title_career_up`,
`A`.`subtitle_career_up`,
`A`.`excerpt_career_up`,`B`.`consultant_Thumb`,`B`.`consultant_Thumb_alt`,`A`.`consultant_add_thumbnail_index`,`A`.`consultant_add_thumbnail_index_alt`,`A`.`consultant_add_thumbnail`,`B`.`consultant_Name`,`B`.`position_cp`,`B`.`consultant_ID`");


		if($Data_career_up['cnt']>0){
			$item_count = 0;
			for($j=0; $j<$Data_career_up['cnt']; $j++){
			
			$id_career_up=$Data_career_up[$j]['id_career_up'];
			$title_career_up=$Data_career_up[$j]['title_career_up'];
			$subtitle_career_up=$Data_career_up[$j]['subtitle_career_up'];
			$excerpt_career_up=htmlspecialchars_decode($Data_career_up[$j]['excerpt_career_up']);
			$consultant_career_up_Thumb=$url_images_thumnail.$Data_career_up[$j]['consultant_Thumb'];
			$consultant_Thumb_alt_career=$Data_career_up[$j]['consultant_Thumb_alt'];
			
			$consultant_add_thumbnail_index_career_up=$url_images_fure.$Data_career_up[$j]['consultant_add_thumbnail_index'];
			$consultant_add_thumbnail_index_alt_career=$Data_career_up[$j]['consultant_add_thumbnail_index_alt'];
			
			$consultant_add_thumbnail_carrer=$url_images_fure.$Data_career_up[$j]['consultant_add_thumbnail'];
			
			$consultant_name_career_up=$Data_career_up[$j]['consultant_Name'];
			$consultant_postion_career_up=$Data_career_up[$j]['position_cp'];
			$consultant_id_career_up=$Data_career_up[$j]['consultant_ID'];
			$url_consultant_career_up=url_root."consultant/".$consultant_id_career_up.".html";
			
			$url_career_up=url_root."career_up/".$id_career_up.".html";
			?>
        
                <h4 class="ct_title ct_title<?php echo $item_count; ?>"><a href="<?php echo $url_career_up; ?>"><span class="careerup_a_txt"><b class="vol_txt"><?php echo $title_career_up."</b>".$subtitle_career_up; ?></span></a></h4>
             
			<?php 
			$item_count++;
			}
		}else {
			?>
            <div class="not_found"><center>Not Found!</center></div>
            <?php 
			}
	?>
</div>
    
    
    </div>
    <!--end content-->
 