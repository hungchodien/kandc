<div class="group_slide_bar_public clear">
        	<div class="clear img"><img src="<?php echo url_root; ?>img/sidebar/title-interview-backnumber.png" alt="interview backnumber"/></div>
            <ul class="clear interview_slide_bar_public">
            
            <?php
	  $Data_interview_sidebar=To_Get_Data("kc_interview"," and kc_interview_status=0 and `kc_interview_realeated_link_check_hide`!=1 group by kc_interview_vol_number_slug order by kc_interview_page_number ASC,kc_interview_vol_number_slug DESC");
	  	$count_interview_sidebar=$Data_interview_sidebar['cnt'];
		if($count_interview_sidebar>0):
		for($mn=0;$mn<$count_interview_sidebar;$mn++):
			$List_interview_sidebar=$Data_interview_sidebar[$mn];
			
			$id_interview_sidebar=$List_interview_sidebar['kc_interview_id'];
			$vol_slug_interview_sidebar=$List_interview_sidebar['kc_interview_vol_number_slug'];
			$page_number_sidebar=(int)$List_interview_sidebar['kc_interview_page_number'];
			
			$company_name_sidebar=$List_interview_sidebar['kc_interview_company_name'];
			//echo $kc_interview_page_number;
				$Data_load_category_sidebar=Get_Data("kc_category_interview as A join category_join_kc_interview as B on A.kc_category_interview_id=B.kc_category_interview_id"," and A.kc_category_interview_status=0 and B.kc_interview_id=$id_interview_sidebar");
				
				$category_name_ja_sidebar=$Data_load_category_sidebar['kc_category_interview_name_ja'];
				$category_name_en_sidebar=$Data_load_category_sidebar['kc_category_interview_name_en'];
				
			$link_detail=url_root."interview/".$category_name_en_sidebar."/".$vol_slug_interview_sidebar."/".$page_number_sidebar.".html";
			
			$src_thumnail_interview_sidebar=url_root_main.$url_images_thumnail.$List_interview_sidebar['kc_interview_backnumber'];
			$alt_thumnail_interview_sidebar=$List_interview_sidebar['kc_interview_backnumber_alt'];
		?>
        
         <li>
                <a href="<?php echo $link_detail; ?>" target="_top">
                		<span class="l"><img src="<?php echo $src_thumnail_interview_sidebar; ?>" alt="<?php echo $alt_thumnail_interview_sidebar; ?>"/></span>
                        
                        <?php 
							if($category_name_en_sidebar=='top' || $category_name_en_sidebar=='symposium'):
						?>
                        	<span class="r">
                        		<span class="right_sp clear">
                        			<span class="t1<?php if($category_name_en_sidebar=='top'): echo "f";endif; ?>"><?php echo $category_name_ja_sidebar; ?></span>
                                    <span class="t2"><?php echo $company_name_sidebar; ?></span>
                        		</span>
                        	</span>
                        <?php 
							else:
						?>
                    	<span class="r"><?php echo $company_name_sidebar; ?></span>
                        <?php 
							endif;
						?>
                </a>
              </li>
        
        
        <?php 
				endfor;
			endif;
		?>
             </ul>
         </div><!--group_slide_bar_public-->