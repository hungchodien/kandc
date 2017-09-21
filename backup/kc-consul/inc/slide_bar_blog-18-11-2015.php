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
		
		$consultant_bloger=19;//id consultant ex: 入江 祥之  
		
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
    
    
   
  <?php   if(isset($_GET['detail_blog'])):?>
     <div id="blog_get_js" class="group_slide_bar_public clear">
    	<h3><img src="<?php echo url_root; ?>img/sidebar/title-blog.png" alt="blog キャリアコンサルタントのこぼれ話"/></h3>
	        <ul class="list_sidebar_blog clear">
             <li>
	            	<h4>
	            	<a href="<?php echo url_root; ?>blog/post_011.html" target="_top">コンサルタントが経営者になるためのヒント その2</a>
	                </h4>
	                <div class="blog_date">2015年11月9日・入江 祥之</div>
	            </li>
            <li>
	            	<h4>
	            	<a href="<?php echo url_root; ?>blog/post_010.html" target="_top">Alumni Partyで感じたコンサルファームで働く魅力</a>
	                </h4>
	                <div class="blog_date">2015年10月26日・永田 憲章</div>
	            </li>
            <li>
	            	<h4>
	            	<a href="<?php echo url_root; ?>blog/post_009.html" target="_top">コンサルタントが経営者になるためのヒント その1</a>
	                </h4>
	                <div class="blog_date">2015年10月13日・入江 祥之</div>
	            </li>
             <li>
	            	<h4>
	            	<a href="<?php echo url_root; ?>blog/post_008.html" target="_top">転職のベストタイミングとは</a>
	                </h4>
	                <div class="blog_date">2015年9月28日・永田 憲章</div>
	            </li>
            <li>
	            	<h4>
	            	<a href="<?php echo url_root; ?>blog/post_007.html" target="_top">コンサル業界のトレンドと採用マーケットの変化</a>
	                </h4>
	                <div class="blog_date">2015年9月14日・入江 祥之</div>
	            </li>
           
	       
	           
	            <li>
	            	<div class="clear">
	                	<a target="_top" href="<?php echo url_root; ?>blog.html" class="r read_more_career_consultant_sidebar">
		                    	<span>全てを見る</span>
		                        <span class="next_btn"></span>
		                </a>
	                 </div>
	            </li>
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
                <a target="_blank" href="<?php echo url_root_main;?>publicity/54.html">
                	<img class="full" src="<?php echo url_root; ?>img/sidebar/publicity-career-carver-kreis-s-thumb.png" alt="CAREER CARVER（キャリアカーバー）2015年11月掲載" />
                </a>
                </div>
	            <div class="text">
	           
	            <p>CAREER CARVERに弊社シニアコンサルタント 入江祥之によるプライスウォーターハウスクーパース株式会社へのインタビュー記事が掲載されました。</p>
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