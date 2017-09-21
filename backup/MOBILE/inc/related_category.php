<div class="clear mailmagazine_inc_group" id="list_category_relead_post">
		<div class="clear mailmagazine_inc_list">
                    <div class="title_mailmagazine clear">
                        <div class="l"><img src="<?php echo url_root; ?>img/title-another-category.png" alt=""></div>
                        <div class="r"></div>
                    </div>
                   
                    <div id="tree_category" class="clear category_list_item">
                            		
                            <!--Begin code tree-->
                                  <?php 
								  	if(isset($list) || isset($hcm)):
									
										if(isset($list)): $list_check=(int)$list; endif;
										if(isset($hcm)): $list_check=(int)$hcm; endif;
										
										$data_check1=Get_Data("`category`"," and `id`=$list_check","`id`,`name`,`key_name`,parent_id,`group_related`");
										if(count($data_check1)>0):
											$id_parent_list=(int)$data_check1['parent_id'];
											$group_related_list=$data_check1['group_related'];
										else:
											//header("Location:".url_root."404.html");
											//exit();	
										endif;
									else:
										//header("Location:".url_root."404.html");
										//exit();
									endif;
								  
                                   // $Data_parent=To_Get_Data("`category`"," and `parent_id` is NUll order by `id` ASC","`id`,`name`,`key_name`");
									$group_related_ex=explode(",",$group_related_list );
									$count_item_related=count($group_related_ex);
									if(!empty($group_related_list)):
									$mi=0;
									for($mi=0;$mi<$count_item_related;$mi++):
										$List_related=$group_related_ex[$mi];
										if($List_related<=17):
										//check if id parent
										$Data_parent=To_Get_Data("`category`"," and `id`=$List_related and `parent_id` is NUll order by `id` ASC","`id`,`name`,`key_name`,`job_count`");
											if($Data_parent['cnt'] > 0):
												echo "<ul class='clear parent_category_ul'>";
													$count_parent_cate=$Data_parent['cnt'];
													for($m=0; $m<$count_parent_cate; $m++):
														$List_parent = $Data_parent[$m];
														$id_parent=$List_parent['id'];
														$name_parent=$List_parent['name'];
														$job_count_parent=$List_parent['job_count'];
														$name_parent_us=$List_parent['key_name'];
													endfor;
													?>
													 <li class="list_id_<?php echo $id_parent; ?>">
                                      
                                       		<?php 
												$query_check_group=Check_HCMCategory($id_parent);
												if($query_check_group>0):?>
						<a href="<?php echo url_root; ?>category/job_group/<?php echo $id_parent.".html"; ?>"  class="hcm_category_jobs <?php ($job_count_parent==0)?'job_count_null':'' ?>" target="_self">
                                	<?php echo $name_parent; 
									if($job_count_parent>0):
										echo "&nbsp;(".$job_count_parent.")";
									endif;
									?></a>
												<?php else: ?>
						<a href="<?php echo url_root; ?>category/list/<?php echo $id_parent.".html";?>" class="list_category_jobs <?php ($job_count_parent==0)?'job_count_null':'' ?>" target="_self">
                                	<?php echo $name_parent; echo "&nbsp;(".$job_count_parent.")";?></a>
												<?php 
												endif;
											?>
                                            		</li>
													
												<?php	
												echo "</ul>";
											endif;
										else:
											//code chil id >17
											 $Data_chil=To_Get_Data("`category`"," and `id`='$List_related' order by `id` ASC","`id`,`name`,`job_count`,`parent_id`");
											  if($Data_chil['cnt'] > 0)
											  {
												 $count_chil_cate=$Data_chil['cnt'];
												 for($j=0; $j<$count_chil_cate; $j++)
												 {
													 $List_chil = $Data_chil[$j];
													 $id_chil=$List_chil['id'];
													 $name_chil=$List_chil['name'];
													 $count_job_chil=$List_chil['job_count'];
													 $id_parent_chil=$List_chil['parent_id'];
													?>
                                                    <div class="list_id_<?php echo $id_parent_chil; ?>">
													<?php if($count_job_chil>0): ?>
                                                       <a href="<?php echo url_root; ?>category/list/<?php echo $id_chil.".html";?>" class="chil_category_jobs" target="_self">
                                                            <span class="txt_list_category"><?php echo $name_chil."</span>"; echo "&nbsp;(".$count_job_chil.")";?>
                                                        </a>
                                                        <?php 
                                                            else:?>
                                                                <a><span class="job_count_null"><?php echo $name_chil;?></span></a>
                                                            <?php endif;
                                                        ?>
                                                    </div>
                                                    <?php
												 }
											  }
											 
										endif;
									
									endfor;
									
								else:
								?>
                                <script type="text/javascript">
									$(document).ready(function() 
									{
										$("#list_category_relead_post").remove(); 
									});
								</script>
                                <?php 
								endif;	
								
									//$group_related_list
									
									
									
									
									
									
							?>
                            <!--End code tree-->
                       </div><!--End tree-->
                  		<script type="text/javascript">
							$(document).ready(function(e) {
								$('ul.chil_category_ul').each(function() {
									if($(this).html().length == 0)
									{
										$(this).remove();
									}
								});
								$('a.job_count_null').each(function(){
									$(this).removeAttr("href");	
									
							    })
								
								for ( var id = 0; id < 18; id++ ) {
										 if($(".parent_category_ul li.list_id_"+id).length>0)
										 {
											 var content_div_chil='';
											 $("#tree_category div.list_id_"+id).each(function(index){
												  content_div_chil += "<li>" + $(this).html() + "</li>";
												  //console.log(index + ": " + $( this ).html());
												  $(this).remove(); 
											 });
										 	//alert(id);
											//console.log(id + ": " + content_div_chil);
											$("li.list_id_"+id).append($("<ul class='clear chil_category_ul'>"+content_div_chil+"</ul>"));
										}
								}
								
								
								
								
							});
						</script>
         	</div><!--mailmagazine_inc_list-->
            
  </div><!--mailmagazine_inc_group-->