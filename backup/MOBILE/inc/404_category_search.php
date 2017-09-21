<div class="clear content_not_found_category search_job_404_category">	
			 <!--  the start Display the Category --->
             
             <div class="ck_404"><img src="<?php echo url_root; ?>img/404/tilte-jobinfo.png" alt="他の求人を探す" title="" /></div>
		
			 <div id="look-job" class="bg_white_404 not_found_look clear">
			 <div class="bg_white_404_content">
			 	<h3 class="title">職種で探す</h3>
				 <div class="look-content-link not_found_cate  clear" style="padding-bottom:5px;">
                 <?php 
				 	if($page!="job-search"):
				 ?>
					<style type="text/css">
						#content .sidebar {
				   
						 margin-top: inherit !important;
					
						}
					</style>
                  <?php 
				  		endif;
				  	?>
    	<ul class="clear category_item_list">
    	<?php 
		
		
							$query_list=HCMListCategory();
							
							while($row_list=mysql_fetch_assoc($query_list))
							{
								$id_category=$row_list['id'];
								$query_check=Check_HCMCategory($id_category);
								
								if($query_check>0)
								{
									
									?>
 		<li>
		<a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>" class="hcm_category_lisst" target="_self">
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
                                <li>
                       <a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'] .".html";?>" class="hcm_category_lisst" target="_self">
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
					
					<!--**********************************************-->
			 		<div class="high-class clear not_found_look">
							<h3 class="title">ハイクラス <span style="font-size: 13px">年収 1000 万以上の求人 </span></h3>
							<div class="look-content-link2 not_found_cate clear">

			<ul class="category_item_high_class clear">
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
                <li>
					<a href="<?php echo $link_Category_Flag; ?>" target="_self"><?php echo $name_Category_Flag; ?></a></li>
                <?php
						}
						
					}else{
						?>
                        <li><center>Not Found!</center></li>
                        <?php
						
						}
				
				
				
				
			?>
        
            </ul>
         


        </div>
						  </div><!--End HighClass-->
						  </div>
					</div><!--End content_not_found_category-->
			 </div>