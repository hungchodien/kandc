<div class="job_info_list search_text_404 clear">
		 <div class="clear icon_404_group_job"><img src="<?php echo url_root;?>/img/404/404-title-job-info-kreis-consul.png" alt="求人情報検索"/></div>
		 
		 <!--Begin Category-->
			   <div class="title_category_job clear">職種で探す</div>
    <div class="content_category clear">
    	<?php 
		
		
							$query_list=HCMListCategory();
							
							while($row_list=mysql_fetch_assoc($query_list))
							{
								$id_category=$row_list['id'];
								$query_check=Check_HCMCategory($id_category);
								
								if($query_check>0 )
								{
									if($id_category==9 || $id_category==2):
									?>
  <div class="group_job_list clear">
 	<div class="look-link-parent clear">
		<a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst" target="_blank"><span class="category_txt">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;({$row_list['job_count']})</span>";
									 ?>
                                    </a>
                                </div>
                                 <!--Get Sub Category----------------------------->
                    <div class="look-content-link clear">
          <ul class="clear sub-category">
					<?php 
                        $query_yes=HCMCategory_Parent_list($id_category);
                    //print_r($query);
                    while($list_view=mysql_fetch_array($query_yes))
                    {
                        ?>
                    <li>
                    <a href="<?php echo url_root; ?>category/list/<?php echo $list_view['id'].".html"; ?>" class="hcm_category_lisst" target="_blank">
                            <span class="cat_child_1"><?php echo $list_view['name'];  ?></span>
                           <span class="cat_child_3">総数&nbsp;
            				<span class="c00"><?php echo $list_view['job_count']; ?></span>
            件</span>
                        </a>
                    </li>
                    
                        <?php 
                    }
                    
                    
                    
                    
                       ?>
           </ul>  
           
        </div>
                    
                    <!--ENd Get Sub Category ------------------------->
                               </div>									
									<?php 
										endif;
									}
									else
									{
										if($id_category!=1 && $id_category==3 )
											{
								?>
                                 <div class="group_job_list clear">
                                <div class="look-link-parent clear">
                       <a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'] .".html";?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst" target="_blank"><span class="category_txt">
                                	<?php 
									echo $row_list['name'];
									echo "&nbsp;({$row_list['job_count']})</span>";
									 ?>
                                    </a>
                                </div>
                               </div>
                                <?php 
											}
									}
							}
								
							?>
                            <div class="group_job_list clear">
                                        <div class="look-link-parent clear">
                                           <a class="hcm_category_lisst" name="" href="<?php echo url_root; ?>fund/category/jobs.html">ファンド（PE・VC) 
											<?php 
											$file_job_view=url_root."csv_info/"."jobs.csv";
											if (file_exists($file_job_view)) {
										   		$csv = read_CSV($file_job_view);
													$row_num=count($csv);
													echo "(".$row_num.")";
											}else{
													$csv = read_CSV($file_job_view);
													$row_num=count($csv);
													echo "(".$row_num.")";
												}
												 ?>                                    
                                           </a>
                                        </div>
                                       </div>  
    </div>
	 <div class="search_job clear">
     
		 <form class="search_form_kc search_form_query" method="post" action="<?php echo url_root; ?>search/0/page/1/<?php echo $_POST['frm_txt']; ?>">
            	<!--<div class="search_category l">
                	 <h3 class="search">年収で探す</h3>
                      <select class="select_form1 category_select_search salary_option_job" name="search_select_salary" id="search_select_category" style="width:100%">
                              <option value="">ご希望の年収を選択してください。</option>
                              <option  value="<?php echo url_root; ?>find/salary/page/1/-800万円">～800万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/800万円-1000万円">800万～1000万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/1000万円-1500万円">1000万～1500万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/1500万円-">1500万円</option>      
                      </select>
                </div>-->
                <div class="search_post_txt r" style="float:none; width:100%;">
                    	<h3 class="search">キーワードで探す</h3>
                   		<input type="text" name="frm_txt" class="search_form_txt_index text_search search_form_txt" style=" width:545px;"/>
                        <span class="button_search"><input type="submit" value="検索" class="button_submit" /></span>
                   
                </div>
             </form>    
	</div>
		 <!--End Category -->
		 
		 
		 
	</div>