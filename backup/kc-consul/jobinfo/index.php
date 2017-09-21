<div class="left-side">
<!--  the start Job news --->
<div id="job-news" class="jobinfo-news jobinfo-news2">
    <div class="jobinfo-news-job">
        <div class="laste-job-open clear">
            <div><h2 class="jobinfo_title_block1">最新求人速報</h2></div>
            <!--<div class="laste-open">Latest Job Openings</div>-->
        </div>
       
         <div class="jobinfo-staff-business newjob_scroll clear">
        	<?php 
				require_once('inc/scroll_laste_job.php');
			?>
            </div>
    </div>
</div>
<!--  the end Job news --->


<!--  the start Job news --->
<div id="job-news" class="jobinfo-news jobinfo-news2">
    <div class="jobinfo-news-job">
        <div class="laste-job-open clear">
            <div><h2 class="jobinfo_title_block1">注目求人</h2></div>
            <!--<div class="laste-open">Feature Jobs</div>-->
        </div>
   
         <div class="jobinfo-staff-business clear">
         
         
         
         <div style="padding:10px;" class="clear">
         <?php 
		 $where_total_feature_job="and feature_job_status=0 order by feature_job_date DESC limit 5";
			$Data_feature_job = To_Get_Data("feature_jobs", $where_total_feature_job);
			if($Data_feature_job['cnt'] > 0):
				$count_feature_job=$Data_feature_job['cnt'];
				  for($ji=0; $ji<$count_feature_job; $ji++):	
				   $List_feature_job = $Data_feature_job[$ji];
				  			/*$feature_job_date_d=(int)date('d', strtotime($List_semina['date_notice_seminar_career']));
							$feature_job_date_m=(int)date('m', strtotime($List_semina['date_notice_seminar_career']));
							$feature_job_date_y=(int)date('Y', strtotime($List_semina['date_notice_seminar_career']));
							$feature_job_date=$feature_job_date_y."年&nbsp;".$feature_job_date_m."月&nbsp;".$feature_job_date_d."日";*/
							$feature_job_date=date('m月d月 H：i', strtotime($List_feature_job['feature_job_date']));
							$feature_job_title=$List_feature_job['feature_job_title'];
							$feature_job_id=$List_feature_job['feature_job_id'];
							$link_feature_job=url_root."feature-jobs"."/".$feature_job_id.".html";
							
				   ?>
                   <div class="clear featuredjob_item">
                   			 <span style="color:#F00"><?php echo $feature_job_date; ?></span>
        					 &nbsp;&nbsp;<a href="<?php echo $link_feature_job; ?>"><?php echo $feature_job_title; ?></a>
                   
                   </div>
                   <?php
				  endfor;
			endif;
		?>
        
         
         
        </div>
 			<!--<div style="padding:10px;"><span style="color:#F00">12/02 17時13分</span>&nbsp;&nbsp;<a href="http://kandc.com/feature-jobs/topics-20131202.php">日本に新しいサービス・価値観を展開しようにしている会社</a></div>-->
            </div>
    </div>
</div>
<!--  the end Job news --->

<!--  the start Look for in a job --->
<div id="look-job" class="look-job">
    <div class="look-job-title clear">
        <div><h2 class="jobinfo_title_block1">職種で探す</h2></div>
        <!--<div class="look-job-title-span"> Look for in a job</div>-->
    </div>
    <div class="look-content-link look-content-border clear">
    		
			<ul class="category_item_list clear">
       <?php 
							$query_list=HCMListCategory();
							
							while($row_list=mysql_fetch_assoc($query_list))
							{
								$id_category=$row_list['id'];
								$query_check=Check_HCMCategory($id_category);
								
								if($query_check>0)
								{
									
									?>
 <li><a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>" class="hcm_category_lisst">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;({$row_list['job_count']})";
									 ?>
                                    </a>
                                </li>									
									<?php 
										
									}
									else
									{
										if($id_category!=1)
											{
								?>
                                <li><a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'].".html" ?>" class="hcm_category_lisst">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;({$row_list['job_count']})";
									 ?>
                                    </a>
                                </li>
                                <?php 
											}
									}
							}
								
							?>
			</ul>

    </div>
    
    
    
</div>
<!--  the end Look for in a job --->

<!--  the start go to highclass category list --->
<div id="highclass" class="highclass clear">
    <div class="highclass-link">
        <a href="<?php echo url_root; ?>category/high_class/all.html" class="highclass-category-all">
        <img src="img/jobinfo/bg-highclass.png" alt="ハイクラス求人情報" border="0"/></a>
    </div>
    <div class="highclass-search">
        <div class="search-keyword">キーワードで探す</div>
        <div class="look-job-title-span">Search by Keyword</div>
        <div>キーワードとなる言葉をご入力</div>
        <div class="highclass-search-form clear">
            <form id="search_keyword" action="<?php echo url_root ?>search/page/1.html" method="post" onsubmit="return checkSearch(document.getElementById('search_jobinfo').value);" class="clear search_form_query">
                <input class="txt_search_keyword search_form_txt" type="text"  value="" name="search_job" id="search_jobinfo" >
                <input type="image" class="btn_search" src="img/index/but-search2.png">
                <input type="submit" class="submit-search clear sub_search" name="submit" id="submit" value="Submit"/>
            </form>
        </div>
       
    </div>
</div>
<!--  the end go to highclass category list --->

<!--  the start Look for in a company --->
<div id="look-company" class="look-company look-job">
    <div class="look-company-title clear">
        <div><h2>企業で探す</h2></div>
        <div class="look-job-title-span">Look for in a company</div>
    </div>

    <div class="look-company-info clear">
        
		 <?php 
        	$where_total.="and scrol_venderStatus=0 order by scrol_venderDate DESC";
			$Data = To_Get_Data("scrol_vender", $where_total);
			if($Data['cnt'] > 0):
				  $count_item=$Data['cnt'];
				  $cols=2;
				  echo "<div class='clear'>";
				  //echo $count_item;
					for($i=0; $i<$count_item; $i++):
					
						//$selected="";
						$List = $Data[$i];
						$link_vender=$List['scrol_venderLink'];
						
						$interview_link_scroll=$List['interview_link'];
						$company_interview_link_scroll=$List['company_interview_link'];
						$scrol_venderName=addslashes($List['scrol_venderName']);
						$thunail_vender="../administrator/upload_thumnail/".$List['scrol_venderThumbnail'];
						$thunail_vender_alt=$List['scrol_venderThumbnail_alt'];
						?>
                        
						<div class="company_jobinfo">
               			
						 	<?php 
						if(!empty($company_interview_link_scroll)):
						?>
                        
						 <a href="<?php echo $company_interview_link_scroll;?>"  title="<?php echo $scrol_venderName; ?>" >
                   <img src="<?php echo $thunail_vender; ?>" alt="<?php echo $thunail_vender_alt; ?>" title="" border="0" />
                   </a>
						
						<?php
						else:
						
							if(!empty($interview_link_scroll)):?>
							 <a href="<?php echo $interview_link_scroll; ?>"  title="<?php echo $scrol_venderName; ?>" >
                   <img src="<?php echo $thunail_vender; ?>" alt="<?php echo $thunail_vender_alt; ?>" title="" border="0" />
                   </a>
								
							<?php 
							else:
								?>
                      <img src="<?php echo $thunail_vender; ?>" alt="<?php echo $thunail_vender_alt; ?>" title="" border="0" />
                                <?php 
							endif;
							
							
						endif;
						?>
                 
                        
               			 </div>
                         
						
						 
						
        
            
           		<?php 
					endfor;
					echo "</div>";
				endif;
				?>
            
           
    </div>
</div>
<!--  the end Look for in a company --->

<!--  the start Interview --->
<!-- Cosul -->
	
    <div class="look-job" id="interview">
    <div class="look-company-title interview-title clear">
        <div><h2>Pick UP インタビュー</h2></div>
        <div class="look-job-title-span">Pick UP Interview</div>
    </div>
    <div class="interview-content">
    
    	 
    	<?php 
$Data_consul=To_Get_Data("interview_index"," and status_index_interview=0 order by date_index_interview DESC limit 3","id_index_interview,title_index_interview,subTitle_index_interview,
link_index_interview,targer_index_interview,thumbnail_index_interview,thumbnail_index_interview_alt,excerpt_index_interview");
		if($Data_consul['cnt']>0)
			{
				$count_consul_index=$Data_consul['cnt'];
				for($i=0; $i<$count_consul_index; $i++){
							$List_Consul = $Data_consul[$i];
							$category_consul_id=$List_Consul['id_index_interview'];
							$category_consul_title=$List_Consul['title_index_interview'];
							$category_consul_subtitle=$List_Consul['subTitle_index_interview'];
							$category_consul_description=htmlspecialchars_decode($List_Consul['excerpt_index_interview']);
							$category_consul_thumnail=$url_images_thumnail.$List_Consul['thumbnail_index_interview'];
							$thumbnail_index_interview_alt=$List_Consul['thumbnail_index_interview_alt'];
							
							$url_consul=$List_Consul['link_index_interview']; 
							$target_link_consul=$List_Consul['targer_index_interview']; 
							

						?>
			<div class="content clear">
                <div class="img_thum">
                 <a href="<?php echo $url_consul; ?>" title="<?php echo $category_consul_title; ?>" target="<?php echo $target_link_consul; ?>">
                <img alt="<?php echo $thumbnail_index_interview_alt; ?>" src="<?php echo $category_consul_thumnail; ?>" title="" border="0"/>
                </a>
                </div>
                <div class="ct_desc">
                    <div class="title_content">
                        <h1 class="ct-title1"><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>"><?php echo $category_consul_title; ?></a></h1>
    
                        <h2 class="ct-title2"><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
						<?php echo $category_consul_subtitle; ?>
                        </a>
                        </h2>
                    </div>
                    <div class="clear">
                   <?php echo excerpt($category_consul_description); ?>
                    </div>
                     <div class="ct-readmore1 clear readmore_index">
                        <?php /*?><a href="<?php echo $url_consul; ?>" title="<?php echo $category_consul_title; ?>" target="<?php echo $target_link_consul; ?>">
                        <img alt="詳しく見る" src="img/index/button-readmore.png" />
                        </a><?php */?>
                       <a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>" class="read_more_img clear">
                       <span>詳しく見る</span>
                       <span class="next_btn"></span>
                       </a>
                       
                    </div>
                </div>
            </div>

					<?php 
				}

			}
			else
			{
				?>
				<div class="not_found"><center>Please insert Database!</center></div>
				<?php 
			}

		?>
        

      


    </div>
</div>
    
    
<!-- the end Cosul -->
<!--  the end Interview --->

<!--  the start Hunters_eye  --->
<div id="hunters_eye" class="hunters-eye look-job">
    <div class="look-company-title clear">
        <div><h2>ヘッドハンターの目</h2></div>
        <div class="look-job-title-span">Jobs Featured headhunter</div>
        <?php /*?><div class="button-viewall">
            <a href="<?php echo url_root; ?>hunter_eye.html"><img src="img/jobinfo/button-viewall.jpg"/></a>
        </div><?php */?>
    </div>

		 <?php 
		$Data_Interview_hunter=To_Get_Data("henter_eye"," and `status_henter_eye`=0 order by `date_henter_eye` DESC limit 2","`title_henter_eye`,`id_henter_eye`,`subtitle_henter_eye`,`consultant_add_thumbnail_index`,`description_henter_eye`");
		if($Data_Interview_hunter['cnt']>0){
				$count_interview_index_hunter=$Data_Interview_hunter['cnt'];
				for($u=0; $u<$count_interview_index_hunter; $u++){
						$List_Interview_hunter = $Data_Interview_hunter[$u];
						$id_interview_hunter=$List_Interview_hunter['id_henter_eye'];
						$title_interview_hunter=$List_Interview_hunter['title_henter_eye'];
						$subtitle_interview_hunter=$List_Interview_hunter['subtitle_henter_eye'];
						$excerpt_interview_hunter=htmlspecialchars_decode($List_Interview_hunter['description_henter_eye']);
						$thumbnail_interview_hunter=$url_images_fure.$List_Interview_hunter['consultant_add_thumbnail_index'];
						$thumbnail_interview_hunter_alt=$List_Interview_hunter['consultant_add_thumbnail_index_alt'];
						
						$url_interview_hunter=url_root."hunter_eye/".$id_interview_hunter.".html";
						?>
						
                        <!--Begin Interview_ List-->
        <div class="huntereye_jobinfo clear">
   <div class="img_thum">
			   <?php if(empty($List_Interview_hunter['consultant_add_thumbnail_index'])):
               ?>
                <a href="<?php echo $url_interview_hunter; ?>" title="<?php echo $title_interview_hunter; ?>" target="_self">
                <img alt="thumbnail" src="img/index/img-thumb3.png" border="0"/>
                </a>
               <?php 
               else:
               ?>
                <a href="<?php echo $url_interview_hunter; ?>" title="<?php echo $title_interview_hunter; ?>" target="_self">
               <img src="<?php echo $thumbnail_interview_hunter; ?>" alt="<?php echo $$thumbnail_interview_hunter_alt; ?>" title=""/>
               </a>
               <?php 
                endif;
               ?>
   </div>
            <div class="ct_desc">
                <div class="title_content">
                    
                    <h1 class="ct-title1">
                    <a href="<?php echo $url_interview_hunter; ?>" target="_self"><?php echo $title_interview_hunter; ?></a> <?php 
						if($u==0){
								echo "<img src='img/index/icon-new.png' alt='icon' border='0'/>";
							}
					?>
                    </h1>
                    

                    <h2 class="ct-title2">
                     <a href="<?php echo $url_interview_hunter; ?>" target="_self">
					<?php echo $subtitle_interview_hunter; ?>
                    </a>
                    </h2>
                </div>
                <div class="clear">
               <?php 
			   		echo $excerpt_interview_hunter;
			   ?>
                </div>
				<div class="ct-readmore1 clear readmore_index">
                        <?php /*?><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
                        <img alt="詳しく見る" src="img/index/button-readmore.png" />
                        </a><?php */?>
                       <a href="<?php echo $url_interview_hunter; ?>" target="_self" class="read_more_img clear">
                       <span>詳しく見る</span>
                       <span class="next_btn"></span>
                       </a>
                       
                    </div>
               
            </div>
        </div>


       <!--End Interview_ List--> 
                        
						<?php 
					}
				
			}
			else
			{
				?>
				<div class="not_found"><center>Not Found!</center></div>
				<?php 
			}
	?>
    
    
    
</div>
<!--  the end Interview --->

</div>

<!---- ////////////////////////////////////////////////////////right ////////////////////////////////////////////////////////-->
<div class="sidebar">
    <!-- form search slidebar -->
    <?php include('inc/search_slidebar.php'); ?>


    <!-- job new and Featured Jobs  --->
    <?php include('inc/program_list_job.php'); ?>
    <!--  the end featured news -->

    <!-- the start new newest -->
    <?php include('inc/slibar_inc.php'); ?>
</div>
</div>
