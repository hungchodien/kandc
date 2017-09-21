<div class="content mr20 clear index_content">
	<div class="left_content l">
    	<?php 
			//include('inc/pic-up-company.php');
		include('inc/seminar_pic_up.php');
		
		 ?>
         <?php 
		$only_index="category_public";
		include('inc/category_public.php'); 
		
		?>
         <div class="clear group_interview_top_index">
         	<h3 class="clear interview_break">
            	<img src="<?php echo url_root; ?>img/home/title-interview-background-v2.png" alt="interview pick up"/>
                <a href="<?php echo url_root; ?>interview.html">全てを見る ＞</a>
                
            </h3>
            
            
            <div class="clear interview_content_group">
            	<ul class="item_iterview_post clear">
                
      <?php
	  	 $Data_interview=To_Get_Data("kc_interview"," and kc_interview_status=0 and highlights=1 group by kc_interview_vol_number_slug order by kc_interview_page_number ASC,kc_interview_vol_number_slug DESC");
	  	$count_interview=$Data_interview['cnt'];
		if($count_interview>0):
		for($i=0;$i<$count_interview;$i++):
			$j=$i+1;
			$List_interview=$Data_interview[$i];
			//$id_interview_cate=$List_interview['kc_category_interview_id'];
			$id_interview=$List_interview['kc_interview_id'];
			
			$vol_slug_interview=$List_interview['kc_interview_vol_number_slug'];
			$page_number_in=(int)$List_interview['kc_interview_page_number'];
			//echo $kc_interview_page_number;
				$Data_load_category=Get_Data("kc_category_interview as A join category_join_kc_interview as B on A.kc_category_interview_id=B.kc_category_interview_id"," and A.kc_category_interview_status=0 and B.kc_interview_id=$id_interview");
				$category_name_ja=$Data_load_category['kc_category_interview_name_ja'];
				$category_name_en=$Data_load_category['kc_category_interview_name_en'];
			$link_detail=url_root."interview/".$category_name_en."/".$vol_slug_interview."/".$page_number_in.".html";
			$src_thumnail_interview=url_root_main.$url_images_thumnail.$List_interview['kc_interview_thumbnail'];
			$alt_thumnail_interview=$List_interview['kc_interview_thumbnail_alt'];
	   ?>
        <li>
            	<a href="<?php echo $link_detail; ?>" target="_top">
                    	<img src="<?php echo $src_thumnail_interview; ?>" alt="<?php echo $alt_thumnail_interview; ?>" />
                </a>
                   <div class="title_end">
                   			<p><?php echo $List_interview['kc_interview_vol_number'];?></p>
                        	<p><?php echo $List_interview['kc_interview_company_name'];?></p>
							<p>
                            	<?php 
									$content_postion=unserialize($List_interview['kc_interview_postion']);
									$content_array_postion=@array_filter($content_postion);
									if(!empty($content_array_postion)):
										$interviewee_fullname="";
										for($u=0;$u<count($content_array_postion);$u++):
											$interviewee_fullname.=$content_array_postion[$u]['interviewee_fullname']."氏&";
										endfor;
										echo substr($interviewee_fullname,0,-1);
									endif;
								?>
                            </p>
                  </div>
                  <div class="title_hover">
                      <p><?php echo $List_interview['kc_interview_title']; ?></p>
                 </div>
                 
                 <div id="gradient_editor"></div>
      	</li>
       
       <?php 
	   		endfor;
	   		endif;
	   ?>
                	
                   <!--Next--> 
                      
                  </ul>
            </div><!--interview_content_group-->
         </div><!--group_interview_top_index-->
         
         
         <div class="clear interview_list_index">
         	<div class="item_list_group">
            	<div class="item_list_it clear">
            <?php 
				$Data_category_interview=To_Get_Data("kc_category_interview"," and kc_category_interview_status=0 order by kc_category_interview_date DESC");
				$count_category_list_interview=$Data_category_interview['cnt'];
				if($count_category_list_interview>0):
				for($mn=0;$mn<$count_category_list_interview;$mn++):
				$js=$mn+1;
				$List_category_interview=$Data_category_interview[$mn];
			?>
            <div class="item_list_it<?php if($js%2==0): echo "2"; else: echo "1"; endif; ?>">
                <a href="<?php echo url_root; ?>interview.html#<?php echo $List_category_interview['kc_category_interview_name_en'];  ?>" target="_top"><span class="interview_itpre">interview</span><?php echo $List_category_interview['kc_category_interview_name_ja'];  ?></a>
            </div>
            <?php 
					if($js%2==0):
						echo '</div></div><div class="item_list_group"><div class="item_list_it clear">';
					endif;
				endfor;
			?>
            		</div>
            	</div>
            <?php endif; ?> 
            </div><!--interview_list_index-->
              
           
           
       
    <?php 
		$Data_pick_up_new=To_Get_Data("kc_consul_news"," and kc_consul_news_status=0 order by kc_consul_news_date DESC limit 4");
		$count_pick_up_new=$Data_pick_up_new['cnt'];
		if($count_pick_up_new>0):
		?>
    	<div class="clear pic_up_news pickup_jobinfo">
        	<h3>
            	<img src="<?php echo url_root; ?>img/home/title-notice.png" alt="更新情報"/>
            </h3>
            <div class="job_info clear">
		    	<ul id="job_view">
                <?php for($pc=0;$pc<$count_pick_up_new;$pc++):
						$List_pick_up_new=$Data_pick_up_new[$pc];
				 ?>
               		<li>
			            <span class="green b mrr20 mrr10 f16 block">&mdash;</span>
			        	<span class="title_job_itemt block">
				            <a class="clear" href="<?php echo $List_pick_up_new['kc_consul_news_link']; ?>" target="<?php echo $List_pick_up_new['kc_consul_news_target']; ?>">
				            	<span class="date_pic_up block"><?php echo date("Y-m-d", strtotime($List_pick_up_new['kc_consul_news_date'])); ?></span>
                                <span class="title_job_view block"><?php echo $List_pick_up_new['kc_consul_news_title']; ?></span>
				            </a>
			            </span>
					</li>
                   <?php 
				   	endfor;
				   ?>
                </ul>
    		</div>
        </div><!--pic_up_news-->
       <?php 
	   		endif;
	   ?> 
    
    </div><!--End left_content-->
    
    <div class="right_content r"><?php include('inc/slide_bar_index.php'); ?></div>

</div><!--Content-->


