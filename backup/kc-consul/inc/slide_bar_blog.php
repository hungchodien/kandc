<?php 
/*
						 
					function convert_date_to_career($date){
							//$career_tmg_date_m=date('m月', strtotime($List_career_tmg['date_notice_seminar_career']));
							$career_tmg_date_y=date('Y', strtotime($date));
							$career_tmg_date_d=date('d', strtotime($date));
							$career_tmg_date_m=date('m', strtotime($date));
							$career_tmg_date_d=date('d', strtotime($date));
							$career_tmg_date_y_in=(int)$career_tmg_date_y;
							$career_tmg_date_d_in=(int)$career_tmg_date_d;
							$career_tmg_date_m_in=(int)$career_tmg_date_m;
							
							$date_fist_day_w=date('w',strtotime($date));
							switch($date_fist_day_w)
							{
								//曜日
								case 0:
								$date_fist_day_w_j="(日)";
								break;
								case 1:
								$date_fist_day_w_j="(月)";
								break;
								case 2:
								$date_fist_day_w_j="(火)";
								break;
								case 3:
								$date_fist_day_w_j="(水)";
								break;
								case 4:
								$date_fist_day_w_j="(木)";
								break;
								case 5:
								$date_fist_day_w_j="(金)";
								break;
								case 6:
								$date_fist_day_w_j="(土)";
								break;
								default:
								$date_fist_day_w_j="(日)";
								
							}
										
							
							//$date_month=$career_tmg_date_y_in."年&nbsp;".$career_tmg_date_m_in."月&nbsp;".$career_tmg_date_d_in."日"."&nbsp;&nbsp;&nbsp;".$date_fist_day_w_j." ・ 入江 祥之 ";
							
							$date_month=$career_tmg_date_y_in."年&nbsp;".$career_tmg_date_m_in."月&nbsp;".$career_tmg_date_d_in."日  ・ 入江 祥之 ";
							return $date_month;
						
						}*/
?>

<?php /*?><div class="slide_bar clear">
	<div id="news_newest" class="clear">
    	 <div class="group_slide_bar_public clear">
    			<div class="clear"><img src="<?php echo url_root;?>img/blog/title-career.png" /></div>
            	<ul class="clear interview_slide_bar_public">
    					<?php 
		
		//$consultant_bloger=19;//id consultant ex: 入江 祥之  
		
		 if(!empty($consultant_bloger) && isset($consultant_bloger)):
		$Data_career_up= To_Get_Data("`career_up` as `A` join `consultant` as `B` on 
`A`.`consultant_thumb_career_up` =`B`.`consultant_ID`"," and `B`.`consultant_ID`='$consultant_bloger' and `A`.`status_career_up`=0 order by `A`.`date_career_up` DESC limit 3");
		else:
		$Data_career_up= To_Get_Data("`career_up` as `A` join `consultant` as `B` on 
`A`.`consultant_thumb_career_up` =`B`.`consultant_ID`"," and `A`.`status_career_up`=0 order by `A`.`date_career_up` DESC limit 3");
		endif;

		if($Data_career_up['cnt']>0){
			for($i=0; $i<$Data_career_up['cnt']; $i++){
							$List_career_up = $Data_career_up[$i];
							
							
			$id_career_up=$List_career_up['id_career_up'];
			$title_career_up=$List_career_up['title_career_up'];
			$subtitle_career_up=$List_career_up['subtitle_career_up'];
			$date_career_up=$List_career_up['date_career_up'];
			$url_career_up="http://kandc.com/career_up/".$id_career_up.".html";
			
		
			?>
            
            <li><a href="<?php echo $url_career_up; ?>" target="_blank"><?php echo $title_career_up." ".$subtitle_career_up; ?></a><span class="blog_side_date"><?php echo convert_date_to_career($date_career_up); ?></span></li>
            
            	
               <?php 
					}
				}
			   ?> 	
               	  <li class="pd_top_10">
                  	<a target="_blank" href="<?php echo url_root_main;?>career_up.html" class="r read_more_career_consultant_sidebar">
	                    <span>全てを見る</span>
	                    <span class="next_btn"></span>
	                </a>
                  </li>
    			</ul>
         </div><?php */?><!--group_slide_bar_public-->
   
	<div class="slide_bar clear">
	
	<div id="news_newest" class="clear">
    
    
   
  <?php   if(isset($_GET['sid'])):?>
     <div id="blog_get_js" class="group_slide_bar_public clear">
    	<h3><img src="<?php echo url_root; ?>img/sidebar/title-blog.png" alt="blog キャリアコンサルタントのこぼれ話"/></h3>
	        <ul class="list_sidebar_blog clear">
            <?php 
				 $Data_blog_slibar=To_Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID"," and A.kc_blog_status=0 order by A.kc_blog_date DESC limit 5");
				$count_blog_list_slibar=$Data_blog_slibar['cnt'];
				if($count_blog_list_slibar>0):
				 
							for($i=0;$i<$count_blog_list_slibar;$i++):
							$j=$i+1;
								$List_blog_slibar=$Data_blog_slibar[$i];
								$id_blog_slibar=$List_blog_slibar['kc_blog_id'];
								$link_detail_slibar=url_root."blog/".$id_blog_slibar.".html";
								$title_slibar=$List_blog_slibar['kc_blog_title'];
								$author_slibar=$List_blog_slibar['consultant_Name'];
								
								$blog_date_slibar_d=(int)date('d', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar_m=(int)date('m', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar_y=(int)date('Y', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar=$blog_date_slibar_y."年&nbsp;".$blog_date_slibar_m."月&nbsp;".$blog_date_slibar_d."日"; 
				?>
             	<li>
	            	<h4>
	            	<a href="<?php echo $link_detail_slibar; ?>" target="_top"><?php echo  $title_slibar;?></a>
	                </h4>
	                <div class="blog_date"><?php echo $blog_date_slibar; ?>・<?php echo $author_slibar; ?></div>
	            </li>
           		<?php 
						endfor;
					endif;
				?>
	        </ul>
    	</div><!--#blog_get_js-->
    <?php endif; ?>
    
    
    <?php include('slide_bar_interview_pickup.php'); ?>
	
	<div class="clear group_slide_bar_public">
	        <div id="publicity" class="box publicity_slide_bar">
	            <div class="title">
                	<img src="<?php echo url_root; ?>img/sidebar/title-publicity.png" alt="パブリシティ" />
                </div>
	            <div class="img">
                <a target="_blank" href="<?php echo url_root_main;?>publicity/60.html">
                	<img class="full" src="<?php echo url_root; ?>img/sidebar/publicity-career-carver-kreis-s-thumb.png" alt="CAREER CARVER（キャリアカーバー）2014年8月掲載" />
                </a>
                </div>
	            <div class="text">
	            <p class="data"></p>
	            <p>世界157カ国にグローバルネットワークを持つ巨大ファームが、ディールアドバイザリー部門において新しいビジネスを生み出し、リードするディレクター、シニアマネージャー職を募集</p>
	            <p align="right" class="link">
	           			<a target="_blank" href="<?php echo url_root_main;?>publicity/60.html" class="r read_more_career_consultant_sidebar pd_top_10">
		                    	<span>詳しくはこちら</span>
		                        <span class="next_btn"></span>
		        		</a>
	            </p>
	            </div>
	        </div>
	    </div>
	
     </div><!--#news_newest-->
<!-- the end new newest -->    
</div><!--slide_bar-->