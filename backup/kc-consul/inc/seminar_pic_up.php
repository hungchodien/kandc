<?php 
	 function convert_date_to_seminar($date){
							//$career_tmg_date_m=date('m月', strtotime($List_career_tmg['date_notice_seminar_career']));
							$career_tmg_date_m=date('m', strtotime($date));
							$career_tmg_date_d=date('d', strtotime($date));
							$career_tmg_date_y=date('Y', strtotime($date));
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
										
							
					$date_month=$career_tmg_date_y_in."/".$career_tmg_date_m_in."/".$career_tmg_date_d_in." "." ".$date_fist_day_w_j;
							return $date_month;
						
						}
	$Data_semina_all=To_Get_Data("notice_seminar_career as A join category_notice_seminar_career as B on 
A.id_category_notice_seminar_career =B.id_category_notice_seminar_career",
" and `A`.`status_notice_seminar_career`=0 and (B.id_category_notice_seminar_career=6 || B.name_category_notice_seminar_career like 'Semina Info') order by A.date_notice_seminar_career  ASC",
"A.title_notice_seminar_career,
A.date_other_notice_seminar_career,
A.date_notice_seminar_career,
A.link_notice_seminar_career,
A.target_notice_seminar_career,
`A`.`thumbnail_notice_seminar_career`,
`A`.`thumbnail_notice_seminar_career_alt`
");
if($Data_semina_all['cnt']>0):
$count_data_semina_all=$Data_semina_all['cnt'];
?>


<link type="text/css" href="<?php echo url_root; ?>css/ticker_style.css" rel="stylesheet"/>
<script src="<?php echo url_root; ?>js/jquery.modern-ticker.min.js" type="text/javascript"></script>
<!--<script type="text/javascript">
	jQuery(function($){
			$(".ticker1").modernTicker({
			effect: "scroll",
			scrollInterval: 20,
			transitionTime: 800,
			autoplay: true
			});
	}); 
</script>-->

<div class="pickup_jobinfo pickup_company_job_boder clear seminar_content_index">
	<div class="title_serminar l">
    	セミナー情報
    </div>	
	<div class="croll_content_serminar l">
    	<div class="clear group_serminar_kc">
    		<div id="makeMeScrollable">
		    	<div class="ticker1 modern-ticker mt-round mt-scroll" id="ticker1">
		           <div class="mt-news">
		        	<ul id="ticker_top_yes">
                    
                    
                    <li>
			        	<a href="http://kc-consul.com/seminar/deloitte.html">
                        <span class="red_seminar">2016/6/19/ (日)</span>
	                    <span class="title_seminar">「トーマツベンチャーサポート」採用セミナー開催のお知らせ</span>
	                    </a>
                    </li>
                  
				<?php /*?><?php
				for($mn=0; $mn<$count_data_semina_all; $mn++):
					$List_semina_all = $Data_semina_all[$mn];
					$title_semina_item=$List_semina_all['title_notice_seminar_career'];
					$date_other_notice_seminar_career=$List_semina_all['date_other_notice_seminar_career'];
					$semina_date_item=$List_semina_all['date_notice_seminar_career'];
					$link_semina_item=$List_semina_all['link_notice_seminar_career'];
					$target_link_semina_item=$List_semina_all['target_notice_seminar_career'];
					$semina_date_item=$List_semina_all['date_notice_seminar_career'];
				?>
					<li>
			        	<a href="<?php echo $link_semina_item; ?>" target="<?php if(false !== strpos($link_semina_item,'kc-consul.com')): echo "_top"; else: echo "_blank"; endif ?>"   <?php if (false !== strpos($link_semina_item,'kc-consul.com')) {
								echo '';
							} else {
								echo 'rel="nofollow"';
							}?>>
                        <span class="red_seminar"><?php echo convert_date_to_seminar($semina_date_item); ?></span>
	                    <span class="title_seminar"><?php echo $title_semina_item; ?></span>
	                    </a>
                    </li>
					
				<?php endfor; ?><?php */?>
		        	
		            </ul>
		            </div><!--End mt-news-->
		            </div>
		    </div>
        </div>
    </div><!--scroll_content_serminar-->
    
   <!-- <a class="seminar_ts" href="<?php echo url_root; ?>seminar.html">一覧 ＞</a>-->
</div>

<?php 
	endif;
?>