<div id="content" class="inside">
	<div id="mailmagazine_mobile" class="mailmagazine_mobile bg_white content_inside block_content clear">
    	<h3 class="title_mailmagazine">メールマガジン</h3>
    
    
    	<!--Begin content-->
        
			   <?php 
		$Data_Interview=To_Get_Data("interview"," and `status_interview`=0 order by `date_interview` DESC limit 1","`title_interview`,`id_interview`,`subtitle_interview`,`thumbnail_interview`,`excerpt_interview`,`vol_number`");
		if($Data_Interview['cnt']>0){
				$count_interview_index=$Data_Interview['cnt'];
				for($i=0; $i<$count_interview_index; $i++){
						$List_Interview = $Data_Interview[$i];
						$id_interview=$List_Interview['id_interview'];
						$title_interview=$List_Interview['title_interview'];
						$vol_number=$List_Interview['vol_number'];
						$subtitle_interview=$List_Interview['subtitle_interview'];
						$excerpt_interview=htmlspecialchars_decode($List_Interview['excerpt_interview']);
						$thumbnail_interview=url_root_domain.$url_images_thumnail.$List_Interview['thumbnail_interview'];
						$url_interview=url_root."interview/".$id_interview.".html";
						?>

            <div class="interview-content clear mailmagazine_list_item_index">
            <!--Begin Interview_ List-->
                <div class="interview-title">
                    <h3 class="title-con">面接官の本音</h3>
                    <p>普段知ることができない面接のポイントなどをインタビュー。現役面接官の生の声をお届けします。（月1回配信／毎月10日予定）</p>
                </div>
                <div class="content-ter clear">
                  <div class="group_content_in clear">
                    <div class="img_thum">
                      	 <?php if(empty($List_Interview['thumbnail_interview'])):
						   ?>
							<img alt="" src="<?php echo url_root_domain; ?>img/index/img-thumb3.png">
						   <?php 
						   else:
						   ?>
						   <img src="<?php echo $thumbnail_interview; ?>" alt="<?php echo $title_interview; ?>"/>
						   <?php 
							endif;
						   ?>
                    </div>
                    <div class="title_content">
                            <h4 class="ct-title1">
                                <a target="_top" href="<?php echo $url_interview; ?>"><?php echo $vol_number."&nbsp;".$title_interview; ?></a>
                                 <?php 
						if($i==0){
								echo "<img src='".url_root_domain."img/index/icon-new.png' alt=''/>";
							}
					?></h4>
                            
                        </div>
                </div>    
                    
                    
                    <div class="ct_desc">
                        <h5 class="ct-title2"><?php echo $subtitle_interview; ?></h5>
                        <div class="clear">
                           <?php 
			   		echo $excerpt_interview;
			   ?>
                        </div>
                          <div class="ct-readmore1 clear readmore_index">
                            <?php /*?><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
                            <img alt="詳しく見る" src="img/index/button-readmore.png" title=""/>
                            </a><?php */?>
                           <a href="<?php echo $url_interview; ?>" target="_self" class="read_more_img clear">
                           <span>詳しく見る</span>
                           <span class="next_btn"></span>
                           </a>
                           
                        </div>
                    </div>
                </div>
				
				<!--mailmagazine-->
				<div class="mailmagazine_list mailmagazine_tg clear">
               		<?php /*?> <a href="<?php echo url_root; ?>mailmagazine/list/interview.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root_domain; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="">
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 	<img src="<?php echo url_root_domain; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a><?php */?>
                     <a href="<?php echo url_root; ?>mailmagazine/list/interview.html"><img src="<?php echo url_root; ?>img/btn_backnumber_magazine.png" alt=""></a>
           		</div>

				<div class="mailmagazine_list mailmagazine_tg clear">
               		<a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2">
					 	<img src="<?php echo url_root; ?>img/btn_entry_magazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>
           		</div>

				<!--End mailmagazine-->
                <!--End Interview_ List-->
                

                <?php /*?><div class="clear">
                    <div class="ct-backnumber">
                        <a target="_self" href="<?php echo url_root; ?>interview.html">
                            <img alt="" src="<?php echo url_root; ?>img/index/button-backnumber.png"></a>
                    </div>
                </div><?php */?>
            </div>


		<?php
				}
			}
		 ?>

<!--*********************************************************************************************************************-->
		 <?php 
		$Data_hunter= To_Get_Data("`henter_eye` as `A` join `consultant` as `B` on 
`A`.`consultant_thumb_henter_eye` =`B`.`consultant_ID`"," and `A`.`status_henter_eye`=0 order by `A`.`date_henter_eye` DESC limit 1","`A`.`id_henter_eye`,`A`.`title_henter_eye`,
`A`.`subtitle_henter_eye`,`A`.`description_henter_eye`,
`B`.`consultant_Thumb`,`A`.`consultant_add_thumbnail_index`,`A`.`vol_number`,`B`.`consultant_Name`,`B`.`position_cp`,`B`.`consultant_ID`");
		if($Data_hunter['cnt']>0){
			$id_henter_eye=$Data_hunter[0]['id_henter_eye'];
			$title_henter_eye=$Data_hunter[0]['title_henter_eye'];
			$vol_number_henter_eye=$Data_hunter[0]['vol_number'];
			$subtitle_henter_eye=$Data_hunter[0]['subtitle_henter_eye'];
			$excerpt_henter_eye=htmlspecialchars_decode($Data_hunter[0]['description_henter_eye']);
			$consultant_henter_eye_Thumb=url_root_domain.$url_images_thumnail.$Data_hunter[0]['consultant_Thumb'];
			
			$consultant_add_thumbnail_index_hunter=url_root_domain.$url_images_fure.$Data_hunter[0]['consultant_add_thumbnail_index'];
			
			$consultant_name_henter_eye=$Data_hunter[0]['consultant_Name'];
			$consultant_postion_henter_eye=$Data_hunter[0]['position_cp'];
			$consultant_id_henter_eye=$Data_hunter[0]['consultant_ID'];
			$url_consultant_henter="index.php?page=consultant&sid=".$consultant_id_henter_eye;
			$url_henter_eye=url_root."hunter_eye/".$id_henter_eye.".html";
			?>	


            <?php /*?><div class="hunter-content clear mailmagazine_list_item_index">
            <div class="mm-line"></div>
                <!--Begin Interview_ List-->
                <div class="interview-title clear">
                    <h3 class="title-con">ヘッドハンターの目</h3>
                    <p>ヘッドハンターの目から見たとっておきの企業レポート（月1回配信／毎月1日予定）</p>
                </div>
                <div class="content-ter clear">
                
                 <div class="group_content_in clear">
                    <div class="img_thum">
                        <img src="<?php
			if(!empty($Data_hunter[0]['consultant_add_thumbnail_index'])):
				echo $consultant_add_thumbnail_index_hunter;
			else:
			 echo $consultant_henter_eye_Thumb;
			endif;
		 
		 ?>" alt=""/>
                    </div>
                    <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_henter_eye; ?>"><?php echo $vol_number_henter_eye."&nbsp;".$title_henter_eye; ?></a> <img src="<?php echo url_root_domain; ?>img/index/icon-new.png" alt="NEW"></h4>

               
                        </div>
                </div>
                    <div class="ct_desc">
                         <h5 class="ct-title2"><a href="<?php echo $url_consultant_henter; ?>"><?php echo $consultant_postion_henter_eye."&nbsp;".$consultant_name_henter_eye; ?></a></h5>
                        <div class="clear">
                           <?php echo $excerpt_henter_eye; ?>
                        </div>
                        <div class="ct-readmore1 clear readmore_index">
							
                           <a href="<?php echo $url_henter_eye; ?>" target="_self" class="read_more_img clear">
                           <span>詳しく見る</span>
                           <span class="next_btn"></span>
                           </a>
                       
                    	</div>
                    </div>
                </div>
				
				<!--mailmagazine-->
				<div class="mailmagazine_list mailmagazine_tg clear">
               		 <!--<a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2" class="popup-link mailmagazine_show">
					 <img src="<?php echo url_root_domain; ?>img/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>-->

                     <a href="<?php echo url_root; ?>mailmagazine/list/hunter-eye.html"><img src="<?php echo url_root; ?>img/btn_backnumber_magazine.png" alt=""></a>
           		</div>


				<div class="mailmagazine_list mailmagazine_tg clear">
               		<a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2">
					 	<img src="<?php echo url_root; ?>img/btn_entry_magazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>
           		</div>

				<!--End mailmagazine-->
                <!--End Interview_ List-->
                
                
            </div><?php */?>
			<?php 
				}
			?>
<!--*********************************************************************************************************************-->

			<?php 
		$Data_career_up= To_Get_Data("`career_up` as `A` join `consultant` as `B` on 
`A`.`consultant_thumb_career_up` =`B`.`consultant_ID`"," and `A`.`status_career_up`=0 order by `A`.`date_career_up` DESC limit 1","`A`.`id_career_up`,`A`.`title_career_up`,
`A`.`subtitle_career_up`,
`A`.`excerpt_career_up`,`B`.`consultant_Thumb`,`A`.`consultant_add_thumbnail_index`,`B`.`consultant_Name`,`B`.`position_cp`,`B`.`consultant_ID`");
		if($Data_career_up['cnt']>0){
			$id_career_up=$Data_career_up[0]['id_career_up'];
			$title_career_up=$Data_career_up[0]['title_career_up'];
			$subtitle_career_up=$Data_career_up[0]['subtitle_career_up'];
			$excerpt_career_up=htmlspecialchars_decode($Data_career_up[0]['excerpt_career_up']);
			$consultant_career_up_Thumb=url_root_domain.$url_images_thumnail.$Data_career_up[0]['consultant_Thumb'];
			
			$consultant_add_thumbnail_index_career_up=url_root_domain.$url_images_fure.$Data_career_up[0]['consultant_add_thumbnail_index'];
			
			$consultant_name_career_up=$Data_career_up[0]['consultant_Name'];
			$consultant_postion_career_up=$Data_career_up[0]['position_cp'];
			$consultant_id_career_up=$Data_career_up[0]['consultant_ID'];
			$url_consultant_career_up=url_root_domain."consultant/".$consultant_id_career_up.".html";
			
			$url_career_up=url_root."career_up/".$id_career_up.".html";
			?>
            <div class="careerup-content clear mailmagazine_list_item_index">
            <div class="mm-line"></div>
                <div class="interview-title clear">
                    <h3 class="title-con">キャリアアップコラム</h3>
                    <p>実際のカウンセリングの現場を覗いてみませんか？弊社コンサルタントによる、オリジナルコラム。（月1回配信／毎月20日予定）</p>
                </div>
                <div class="content-ter clear">
                
                 <div class="group_content_in clear">
                    <div class="img_thum">
                       <img src="<?php
		if(!empty($Data_career_up[0]['consultant_add_thumbnail_index'])):
		echo $consultant_add_thumbnail_index_career_up;
		else:
			 echo $consultant_career_up_Thumb;
		endif;
		
		  ?>" alt=""/>
                    </div>
                     <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_career_up; ?>"><?php echo $title_career_up."&nbsp;".$subtitle_career_up; ?></a> <img src="<?php echo url_root_domain; ?>img/index/icon-new.png" alt="NEW"></h4>

                
                        </div>
                    </div>
                    <div class="ct_desc">
                       <h5 class="ct-title2">
				<a href="<?php echo $url_consultant_career_up; ?>"><?php echo $consultant_postion_career_up."&nbsp;".$consultant_name_career_up; ?></a>
                </h5>
                        <div class="clear">
                          <?php echo $excerpt_career_up; ?>
                        </div>
						<div class="ct-readmore1 clear readmore_index">
                        <?php /*?><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
                        <img alt="詳しく見る" src="img/index/button-readmore.png" title=""/>
                        </a><?php */?>
                       <a href="<?php echo $url_career_up; ?>" target="_self" class="read_more_img clear">
                       <span>詳しく見る</span>
                       <span class="next_btn"></span>
                       </a>
                       
                   	   </div>
                        
                        
                    </div>
                </div>
                
				<!--mailmagazine-->
				<div class="mailmagazine_list mailmagazine_tg clear">
               		 <!--<a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2" class="popup-link mailmagazine_show">
					 <img src="<?php echo url_root_domain; ?>img/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>-->

					<?php /*?><a href="<?php echo url_root; ?>mailmagazine/list/career-up.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root_domain; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="">
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 <img src="<?php echo url_root_domain; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a><?php */?>
                     <a href="<?php echo url_root; ?>mailmagazine/list/career-up.html"><img src="<?php echo url_root; ?>img/btn_backnumber_magazine.png" alt=""></a>
           		</div>

				<div class="mailmagazine_list mailmagazine_tg clear">
               		<a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2">
					 	<img src="<?php echo url_root; ?>img/btn_entry_magazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>
           		</div>

				<!--End mailmagazine-->
                <!--End Interview_ List-->
               <?php /*?> <div class="clear">
                    <div class="ct-backnumber">
                    
                        <a target="_self" href="<?php echo url_root; ?>career_up.html">
                            <img alt="" src="img/index/button-backnumber.png">
                        </a>
                    </div>
                </div><?php */?>
            </div>
            
            <?php 
				}
			?>
            
 <!--*********************************************************************************************************************-->   

<?php
		     $Data_tp_top=Get_Data("turning_point_interview"," and turning_point_interview_status=0 group by turning_point_interview_vol_slug order by turning_point_interview_page_number ASC,turning_point_interview_date DESC limit 1");
	  		$count_tp_interview_top=$Data_tp_top['cnt'];
			if($count_tp_interview_top>0):
						$vol_slug_first=$Data_tp_top['turning_point_interview_vol_slug'];
						$page_number_backnumber=(int)$Data_tp_top['turning_point_interview_page_number'];
						
						$vol_slug_backnumber=$Data_tp_top['turning_point_interview_vol_slug'];
						$title_vol_turning=$vol_slug_backnumber." ".$Data_tp_top['turning_point_interview_title'];
						$url_link_backnumber=url_root_domain."turning-point/".$vol_slug_first."/".$page_number_backnumber.".html";
						$url_image_turningpoint=url_root_domain.$url_images_thumnail.$Data_tp_top['turning_point_interview_thumnail_img']; 
						$excerpt_tp_top=strip_tags(htmlspecialchars_decode($Data_tp_top['turning_point_interview_excerpt']), '<br>');
						
						
						
								$content_interview_consultant_back_number=unserialize(base64_decode($Data_tp_top['turning_point_interview_consultant']));
								$content_roundtable_back_number=@array_filter($content_interview_consultant_back_number);
								if(!empty($content_roundtable_back_number)):
								$count_item_roundtable_back_number=count($content_roundtable_back_number);
								$rtb=$count_item_roundtable_back_number-1;
									$subtile_turningpoint= $content_roundtable_back_number[$rtb]['company_name']."&#12288;".$content_roundtable_back_number[$rtb]['postion']."&#12288;".$content_roundtable_back_number[$rtb]['interview_fullname']."氏";
								endif;
							
						
		    ?>
           
            
          
		  <!--Begin control by myself-->
		  		<div class="careerup-content clear mailmagazine_list_item_index">
            <div class="mm-line"></div>
                <div class="interview-title clear">
                    <h3 class="title-con">Turning Point（ターニングポイント）</h3>
                    <p>プロフェッショナルの方々の転機に纏わるエピソード、生き方のポリシーに迫るインタビューコンテンツ(不定期配信)</p>
                </div>
                <div class="content-ter clear">
                <div class="group_content_in clear">
                    <div class="img_thum">
                       <img src="<?php echo $url_image_turningpoint;?>" alt="Turning Point"/>
                    </div>
                     <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_link_backnumber; ?>"><?php echo $title_vol_turning; ?></a> <img src="<?php echo url_root_domain; ?>img/index/icon-new.png" alt="New"></h4>

               
                        </div>
                 </div>
                    <div class="ct_desc">
                        <h5 class="ct-title2">
					<a href="<?php echo $url_link_backnumber; ?>"><?php echo $subtile_turningpoint; ?></a>
               		 </h5>
                        <div class="clear">
                        <?php echo $excerpt_tp_top; ?>
                        </div>
						<div class="ct-readmore1 clear readmore_index">
                       
                       <a href="<?php echo url_root_domain;?>turning-point/" target="_self" class="read_more_img clear">
                      	 <span>詳しく見る</span>
                      	 <span class="next_btn"></span>
                       </a>
                       
                   	   </div>
                        
                        
                    </div>
                </div>
                
				<!--mailmagazine-->
				
				<div class="mailmagazine_list mailmagazine_tg clear">
               		<a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/5">
					 	<img src="<?php echo url_root; ?>img/btn_entry_magazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>
           		</div>
				<!--End mailmagazine-->
                <!--End Interview_ List-->
              
            </div>
            <?php endif; ?>
		  		
		  
		  
        
        <!--ENd content-->
    
    
    
    </div><!--career_mobile-->
<?php include('inc/menu_interview.php'); ?>
<?php include ('inc/page_footer.php');?>
</div><!--#content-->