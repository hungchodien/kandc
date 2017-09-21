<?php
    include('inc/main_search.php')
    //@include('../config.php')
?>
<div id="breadcrumb">
    <div class="breadcrumb-link">
        <ul class="clear">
            <li><img src="img/sub/icon-home.png" alt="ホームボタン" /><a href="<?php echo url_root; ?>" class="home"><span>HOME</span></a></li>
            <li><a href="<?php echo curPageURL();  ?>"> > &nbsp; メールマガジン&nbsp;</a></li>
        </ul>
    </div>
</div>
<div id="content" class="clear">
    <div id="page" class="clear">
        <div class="title-page">
            <h2 class="title-top"> メールマガジン</h2>

            <h3 class="sub-title-top">「面接官の本音」「ヘッドハンターの目」などのコンテンツ最新号をメールマガジンにてお届けしています。</h3>
        </div>
       <?php  include('inc/button_entry.php'); ?>
    </div>
    <div class="left-side">
		<script src="<?php echo url_root; ?>js/jquery.popupWindow.js" type="text/javascript"></script>
<script type="text/javascript"> 
	$( document ).ready(function() {
		$('.popup-link').popupWindow({ 
		height:600, 
		width:800, 
		centerBrowser:1  
		});
	});  
</script>
        <div class="look-job" id="interview-newest">
            <div class="label-asked">
                <div class="content-asked">下記それぞれの読みものと一緒に最新の求人情報や企業セミナー、注目の企業情報などを お届けします。配信をご希望される方は下記登録ボタンよりご登録ください。
                </div>
            </div>



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
						$thumbnail_interview=$url_images_thumnail.$List_Interview['thumbnail_interview'];
						$url_interview=url_root."interview/".$id_interview.".html";
						?>

            <div class="interview-content">
            <!--Begin Interview_ List-->
                <div class="interview-title">
                    <h3 class="title-con">面接官の本音</h3><br/>
                    <p>普段知ることができない面接のポイントなどをインタビュー。現役面接官の生の声をお届けします。（月1回配信／毎月10日予定）</p>
                </div>
                <div class="content-ter clear">
                    <div class="img_thum">
                      	 <?php if(empty($List_Interview['thumbnail_interview'])):
						   ?>
							<img alt="img-thumb3" src="img/index/img-thumb3.png" />
						   <?php 
						   else:
						   ?>
						   <img src="<?php echo $thumbnail_interview; ?>" alt="<?php echo $title_interview; ?>"/>
						   <?php 
							endif;
						   ?>
                    </div>
                    <div class="ct_desc">
                        <div class="title_content">
                            <h4 class="ct-title1">
                                <a target="_top" href="<?php echo $url_interview; ?>"><?php echo $vol_number."&nbsp;".$title_interview; ?></a>
                                 <?php 
						if($i==0){
								echo "<img src='img/index/icon-new.png' alt='icon-new'/>";
							}
					?></h4>
                            <h5 class="ct-title2"><?php echo $subtitle_interview; ?></h5>
                        </div>
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
               		 <a href="<?php echo url_root; ?>mailmagazine/list/interview.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="mailmaga-backnumber"/>
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 	<img src="<?php echo url_root; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録"/>
					 </a>
           		</div>
				<!--End mailmagazine-->
                <!--End Interview_ List-->
                

                <?php /*?><div class="clear">
                    <div class="ct-backnumber">
                        <a target="_self" href="<?php echo url_root; ?>interview.html">
                            <img alt="button-backnumber" src="<?php echo url_root; ?>img/index/button-backnumber.png" /></a>
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
			$consultant_henter_eye_Thumb=$url_images_thumnail.$Data_hunter[0]['consultant_Thumb'];
			
			$consultant_add_thumbnail_index_hunter=$url_images_fure.$Data_hunter[0]['consultant_add_thumbnail_index'];
			
			$consultant_name_henter_eye=$Data_hunter[0]['consultant_Name'];
			$consultant_postion_henter_eye=$Data_hunter[0]['position_cp'];
			$consultant_id_henter_eye=$Data_hunter[0]['consultant_ID'];
			$url_consultant_henter=url_root."consultant/".$consultant_id_henter_eye.".html";
			$url_henter_eye=url_root."hunter_eye/".$id_henter_eye.".html";
			?>	


            <div class="hunter-content">
            <div class="mm-line"></div>
                <!--Begin Interview_ List-->
                <div class="interview-title clear">
                    <h3 class="title-con">ヘッドハンターの目</h3><br/>
                    <p>ヘッドハンターの目から見たとっておきの企業レポート（月1回配信／毎月1日予定）</p>
                </div>
                <div class="content-ter clear">
                    <div class="img_thum">
                        <img src="<?php
			if(!empty($Data_hunter[0]['consultant_add_thumbnail_index'])):
				echo $consultant_add_thumbnail_index_hunter;
			else:
			 echo $consultant_henter_eye_Thumb;
			endif;
		 
		 ?>" alt="icon-consultant"/>
                    </div>
                    <div class="ct_desc">
                        <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_henter_eye; ?>"><?php echo $vol_number_henter_eye."&nbsp;".$title_henter_eye; ?></a> <img src="img/index/icon-new.png" alt="NEW"/></h4>

                <h5 class="ct-title2"><a href="<?php echo $url_consultant_henter; ?>"><?php echo $consultant_postion_henter_eye."&nbsp;".$consultant_name_henter_eye; ?></a></h5>
                        </div>
                        <div class="clear">
                           <?php echo $excerpt_henter_eye; ?>
                        </div>
                        <div class="ct-readmore1 clear readmore_index">
							<?php /*?><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
                            <img alt="詳しく見る" src="img/index/button-readmore.png" title=""/>
                            </a><?php */?>
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
					 <img src="<?php echo url_root; ?>img/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>-->

					 <a href="<?php echo url_root; ?>mailmagazine/list/hunter-eye.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="button-mailmaga-backnumber"/>
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 <img src="<?php echo url_root; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録"/>
					 </a>
           		</div>
				<!--End mailmagazine-->
                <!--End Interview_ List-->
                
                <?php /*?><div class="clear">
                    <div class="ct-backnumber">
                        <a target="_self" href="<?php echo url_root; ?>hunter_eye.html">
                            <img alt="button-backnumber" src="img/index/button-backnumber.png"/>
                        </a>
                    </div>
                </div><?php */?>
            </div>
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
			$consultant_career_up_Thumb=$url_images_thumnail.$Data_career_up[0]['consultant_Thumb'];
			
			$consultant_add_thumbnail_index_career_up=$url_images_fure.$Data_career_up[0]['consultant_add_thumbnail_index'];
			
			$consultant_name_career_up=$Data_career_up[0]['consultant_Name'];
			$consultant_postion_career_up=$Data_career_up[0]['position_cp'];
			$consultant_id_career_up=$Data_career_up[0]['consultant_ID'];
			$url_consultant_career_up=url_root."consultant/".$consultant_id_career_up.".html";
			
			$url_career_up=url_root."career_up/".$id_career_up.".html";
			?>
            <div class="careerup-content">
            <div class="mm-line"></div>
                <div class="interview-title clear">
                    <h3 class="title-con">キャリアアップコラム</h3><br/>
                    <p>実際のカウンセリングの現場を覗いてみませんか？弊社コンサルタントによる、オリジナルコラム。（月1回配信／毎月20日予定）</p>
                </div>
                <div class="content-ter clear">
                    <div class="img_thum">
                       <img src="<?php
		if(!empty($Data_career_up[0]['consultant_add_thumbnail_index'])):
		echo $consultant_add_thumbnail_index_career_up;
		else:
			 echo $consultant_career_up_Thumb;
		endif;
		
		  ?>" alt="consultant-career-up" />
                    </div>
                    <div class="ct_desc">
                        <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_career_up; ?>"><?php echo $title_career_up."&nbsp;".$subtitle_career_up; ?></a> <img src="img/index/icon-new.png" alt="NEW"/></h4>

                <h5 class="ct-title2">
				<a href="<?php echo $url_consultant_career_up; ?>"><?php echo $consultant_postion_career_up."&nbsp;".$consultant_name_career_up; ?></a>
                </h5>
                        </div>
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
					 <img src="<?php echo url_root; ?>img/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>-->

					<a href="<?php echo url_root; ?>mailmagazine/list/career-up.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="button-mailmaga-backnumber"/>
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 <img src="<?php echo url_root; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録"/>
					 </a>
           		</div>
				<!--End mailmagazine-->
                <!--End Interview_ List-->
               <?php /*?> <div class="clear">
                    <div class="ct-backnumber">
                    
                        <a target="_self" href="<?php echo url_root; ?>career_up.html">
                            <img alt="button-backnumber" src="img/index/button-backnumber.png"/>
                        </a>
                    </div>
                </div><?php */?>
            </div>
            
            <?php 
				}
			?>
            
 <!--*********************************************************************************************************************-->   

           
            
          
		  <!--Begin control by myself-->
		  		<div class="careerup-content">
            <div class="mm-line"></div>
                <div class="interview-title clear">
                    <h3 class="title-con">Turning Point（ターニングポイント）</h3><br/>
                    <p>プロフェッショナルの方々の転機に纏わるエピソード、生き方のポリシーに迫るインタビューコンテンツ(不定期配信)</p>
                </div>
                <div class="content-ter clear">
                    <div class="img_thum">
                       <img src="<?php echo url_root;?>img/mailmagazine/turning-point-v05-thumb.jpg" alt="Turning Point"/>
                    </div>
                    <div class="ct_desc">
                        <div class="title_content">
                           <h4 class="ct-title1"><a href="http://www.kandc.com/turning-point/">vol.05 なぜミドリムシをあきらめなかったか</a> <img src="img/index/icon-new.png" alt="New"/></h4>

                <h5 class="ct-title2">
					<a href="http://www.kandc.com/turning-point/">株式会社ユーグレナ  代表取締役社長 出雲 充氏</a>
                </h5>
                        </div>
                        <div class="clear">
                         ミドリムシ（学名：ユーグレナ）は人間に必要な栄養素のほぼすべてを含み機能性食品として活用される。今回はこのミドリムシの屋外大量培養に世界で初めて成功した株式会社ユーグレナの創業社長出雲充さんにここまでの道のりについてお話を伺った。
                        </div>
						<div class="ct-readmore1 clear readmore_index">
                       
                       <a href="http://www.kandc.com/turning-point/" target="_self" class="read_more_img clear">
                      	 <span>詳しく見る</span>
                      	 <span class="next_btn"></span>
                       </a>
                       
                   	   </div>
                        
                        
                    </div>
                </div>
                
				<!--mailmagazine-->
				<div class="mailmagazine_list mailmagazine_tg clear">
               		 <!--<a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/5" class="popup-link mailmagazine_show">
					 <img src="<?php echo url_root; ?>img/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録">
					 </a>-->

					
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/5" class="mailmagazine_r popup-link mailmagazine_show">
					 <img src="<?php echo url_root; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録"/>
					 </a>
           		</div>
				<!--End mailmagazine-->
                <!--End Interview_ List-->
              
            </div>
		  		
		  
		  
		
		  		
		  
		  
           
		  
        </div>
    </div>
    
    
    <div class="sidebar">
        <!-- form search slidebar -->
       <?php @include('inc/search_slidebar.php'); ?>

        <!-- job new and Featured Jobs  -->
        <?php @include('inc/program_list_job.php') ;?>
        <!--  the end featured news -->
        <!-- the start new newest -->
        <?php @include('inc/slibar_inc.php'); ?>
    </div>
</div>