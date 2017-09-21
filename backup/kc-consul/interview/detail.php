<div id="breadcrumb" class="clear">
     <div class="breadcrumb-link clear">
         <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo url_root; ?>interview.html">インタビュー</a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo url_root; ?>interview.html#<?php echo $category_name_en; ?>"><?php echo $category_name_ja; ?></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><?php echo $Data_interview_detail['kc_interview_company_name']." ".$group_postion_breakcrurm_show; ?></li>
          </ul>
     </div>
</div>

<?php 
	if(!empty($Data_interview_detail['kc_interview_main_img'])):
?>
<div class="clear img_content_main">
	<img alt="<?php echo $Data_interview_detail['kc_interview_main_alt']; ?>" src="<?php echo url_root_main.$url_images_thumnail.$Data_interview_detail['kc_interview_main_img']; ?>" />
</div>
<?php 
	endif;
?>
	<div class="interview_content clear">
		<div class="left_content l">
	    	<div id="interview_content_left" class="clear bg_while">

				<?php 
					$link_releated=str_replace(" ","",$Data_interview_detail['kc_interview_realeated_link']);
					//echo $Data_interview_detail['kc_interview_realeated_link'];
					if(!empty($link_releated)):
				?>
			  <div class=" clear">
                <div class="another-post">
				<a href="<?php echo $Data_interview_detail['kc_interview_realeated_link']; ?>">
					<?php 
						$hiden=(int)$Data_interview_detail['kc_interview_realeated_link_check_hide'];
						if($hiden==1):
					?>
	                	＞&nbsp;前編はこちら
	                <?php else: ?>
	                	＞&nbsp;後編はこちら
	                <?php endif; ?>	
				</a>
				</div>
                </div>
            	<?php 
					endif;
				?>
            	<p class="interview_date">
                <?php 
				$semina_date_d=(int)date('d', strtotime($Data_interview_detail['kc_interview_date']));
				$semina_date_m=(int)date('m', strtotime($Data_interview_detail['kc_interview_date']));
				$semina_date_y=(int)date('Y', strtotime($Data_interview_detail['kc_interview_date']));
				$semina_date=$semina_date_y."年&nbsp;".$semina_date_m."月&nbsp;".$semina_date_d."日"; 
				?>
                掲載日:<?php echo $semina_date; ?>
                </p><!--date interview-->
				
		
                <h3 class="interview_detail_title clear"><?php echo $Data_interview_detail['kc_interview_company_name']; ?></h3>
                <h4 class="interview_detail_subtitle clear">
                	<?php 
							echo $group_postion_detail_first_change;
								?>
                </h4>
                <?php 
					if(!empty($Data_interview_detail['kc_interview_excerpt']) && $Data_interview_detail['kc_interview_excerpt']!=""):
				?>
                <div class="content-lead clear">
                	<?php echo htmlspecialchars_decode($Data_interview_detail['kc_interview_excerpt']); ?>
                </div>
				<?php 
					endif;
				?>
                
                
                <?php 
					$content_json=unserialize($Data_interview_detail['kc_interview_content']);
					$content_array_group=@array_filter($content_json);
					if(!empty($content_array_group)):
						for($j=0;$j<count($content_array_group);$j++):
							echo "<div class='container_list_item_content clear'>";
							$group_item_array=@array_filter($content_array_group[$j]['group_item']);
							//print_r($group_item_array);
							$count_group_item=count($group_item_array);
							?>
                            	<div class="clear green b content_title_view"><?php echo $content_array_group[$j]['subtitle']; ?></div>
								<div class="clear container_content_kc">
	                            
	                            	<?php 
										for($u=0;$u<$count_group_item;$u++):
										//print_r($group_item_array[$u]);
									?>
										<dl class="clear">
	                                	<dt><?php echo $group_item_array[$u]['content_left']; ?></dt>
										<dd><?php
										$string_right_content=$group_item_array[$u]['content_right'];
										$string_right_content=str_replace("\n","<br/>",$string_right_content);
										$string_right_content=preg_replace("/(\s)/", " ", $string_right_content);
										 
										 
										 $string_right_content_img_alt=$group_item_array[$u]['content_alt_img'];
										 $string_right_conten_img_src=$group_item_array[$u]['content_src_img'];
										 $string_right_content_img_postion=$group_item_array[$u]['content_postion_img'];
										 if(!empty($string_right_conten_img_src)):
										 ?>
                                         <img src="<?php echo url_root_main.$url_images_thumnail.$string_right_conten_img_src; ?>"  <?php if(!empty($string_right_content_img_alt)): ?> alt="<?php echo $string_right_content_img_alt; ?>" <?php endif; ?> class="img_data <?php if($string_right_content_img_postion=='left'): echo "left_auto_img"; else: echo "right_auto_img"; endif; ?>"/>
                                         <?php
										 endif;
										  echo $string_right_content;
										  ?></dd></dl>
	                                <?php 
										endfor;
									?>
	                            
								</div><!--item content-->
                            <?php
							echo "</div>";
						endfor;
					endif;
				?>
                
                <?php 
					$Data_list_interview_check=To_Get_Data("kc_interview"," and kc_interview_vol_number_slug='$vol' order by kc_interview_vol_number ASC");
					$count_page_navi=$Data_list_interview_check['cnt'];
					if($count_page_navi>0):
				?>
                <script type="text/javascript">
                	jQuery(document).ready(function($){
						$(".interview_page_navi").find(".pre_inactive").find(".pre_a").replaceWith($('.pre_a').text());
						$(".interview_page_navi").find(".next_inactive").find(".next_a").replaceWith($('.next_a').text());
					});
                </script>
                <div class="clear interview_page_navi">
                 	<ul class="clear">
                        <li class="<?php if($page_number==1):echo "pre_inactive";else: echo "pre_btn";endif; ?>"><a class="pre_a" href="<?php echo url_root; ?>interview/<?php echo $cat; ?>/<?php echo $vol; ?>/<?php echo ($page_number-1);?>.html">◀ 前へ</a></li>
                        <?php
							for($ms=0;$ms<$count_page_navi;$ms++):
							$List_list_interview_check=$Data_list_interview_check[$ms];
						 ?>
	                        <li><a tdr="<?php echo $List_list_interview_check['kc_interview_page_number']; ?>" class="page<?php echo $List_list_interview_check['kc_interview_page_number']; ?>  <?php if($page_number==(int)$List_list_interview_check['kc_interview_page_number']): echo "active"; endif; ?>" href="<?php echo url_root; ?>interview/<?php echo $cat; ?>/<?php echo $vol; ?>/<?php echo $List_list_interview_check['kc_interview_page_number']; ?>.html"><span><?php echo $List_list_interview_check['kc_interview_page_number']; ?></span></a></li>
	                    <?php 
							endfor;
						?>
                        <li class="<?php if($count_page_navi==$page_number): echo "next_inactive"; else: echo "next_btn"; endif; ?>"><a class="next_a" href="<?php echo url_root; ?>interview/<?php echo $cat; ?>/<?php echo $vol; ?>/<?php echo ($page_number+1);?>.html">次へ ▶</a></li>
                     </ul>
                 </div><!--interview_page_navi-->
                 <?php 
				 	endif;
				 ?>
                 
                 <?php
			if(!empty($Data_interview_detail['kc_interview_realeated_link'])):
				 $hiden=(int)$Data_interview_detail['kc_interview_realeated_link_check_hide'];
				  if($count_page_navi==$page_number && $hiden!=1 ):?>
                 <div class="another-post-bottom clear">
                <div class="another-post">
				<a href="<?php echo $Data_interview_detail['kc_interview_realeated_link']; ?>">
					<?php 
						
						if($hiden==1):
					?>
	                	＞&nbsp;前編はこちら
	                <?php else: ?>
	                	＞&nbsp;後編はこちら
	                <?php endif; ?>	
				</a>
				</div>
                </div>
                <?php endif; endif; ?>
                 
                
				<?php 
						$url_social="";
					if($page_number==1):
						$url_social=$pageURL_cu;
					else:
						$url_social=url_root."interview/".$cat."/".$vol."/1.html";
					endif;
					
				?>	

                    <div class="social_interview clear">
                        	<ul class="clear social_list_item r">
								<li style="width: 90px;">
			<div class="fb-share-button" data-href="<?php echo $url_social; ?>" data-layout="button_count"></div>		
								</li>
			 <?php /*?>
                        		<li>
            <div class="fb-like" data-href="<?php echo $url_social; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                </li>
                        		<li>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $url_social; ?>" data-lang="ja">ツイート</a>
                                </li>
                        		<li>
             <div class="g-plusone" data-size="medium" data-href="<?php echo $url_social; ?>"></div>
                                </li>
			<?php */?>
                        	</ul>
                        </div><!--social_break_top_left-->

                <?php
                	if((int)$Data_interview_detail['kc_interview_company_id']>0):
				?>
                	<div class="interview_entry_btn clear">
	                    <a href="http://www.kc-consul.com/entry/?entry_id=<?php echo $Data_interview_detail['kc_interview_company_id']; ?>" target="_blank">
	                    	<img src="<?php echo url_root; ?>img/entry/company-id-button.png" alt="company-id-button "/>
	                    </a>
                    </div><!--interview_entry_btn-->
                <?php 
					endif;
				?>
                
            </div><!--#interview_content_left-->


			<?php 
				$link_roundtable_array=unserialize($Data_interview_detail['link_roundtable']);
				$link_roundtables=@array_filter($link_roundtable_array);
				if(!empty($link_roundtables)):
					echo '<ul class="clear related_list_interview">';
						$count_link_round=count($link_roundtables);
						for($mk=0;$mk<$count_link_round;$mk++):
							?>
                            <li>
	                            <a href="<?php echo $link_roundtables[$mk]['link']; ?>" target="_top">
	                            	<span class="fist_link"><?php echo $link_roundtables[$mk]['main']; ?></span>
	                            	<span class="two_link"><?php echo $link_roundtables[$mk]['title']; ?></span>
	                            </a>
	                            <a target="_top" href="<?php echo $link_roundtables[$mk]['link']; ?>" class="read_more_career_consultant_sidebar r">
	                            	<span>記事を見る</span>
	                            	<span class="next_btn"></span>
	                            </a>
                            </li>
                            <?php
						endfor;
					echo "</ul>";
				endif;
			?>

	    </div><!--left_content-->
        
        <div class="right_content r">
        	<?php @include('inc/slide_bar_interview_backnumber.php'); ?>
        </div><!--right_content-->
        
	</div><!--interview_content-->

<style type="text/css">
	.interview_hide_add{
	 display:none !important;
}
</style>


