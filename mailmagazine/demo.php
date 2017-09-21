<?php include('../inc/header.php'); ?>


<?php
    include('../inc/main_search.php')
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

            <h3 class="sub-title-top">「面接官の本音」「キャリアアップコラム」などのコンテンツ最新号をメールマガジンにてお届けしています。</h3>
        </div>
       <?php  include('../inc/button_entry.php'); ?>
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
                	<p>下記それぞれの読みものと一緒に最新の求人情報や企業セミナー、注目の企業情報などを お届けします。</p>
                    <p>配信をご希望される方はご希望のメールマガジンをお選びいただき、その他必須項目への入力をお願いいたします。</p>
                    <p>ご入力後、「内容確認に進む」ボタンを押してください。</p>
                    <br/>
                    
                    <p class="red"></p>
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
					
						$thumbnail_interview=$url_images_thumnail.$List_Interview['thumbnail_interview'];
						$url_interview=url_root."interview/".$id_interview.".html";
						?>
<form id="submit-form" method="post" action="<?php echo url_root; ?>mailmagazine/confirm.php">
            <div class="interview-content">
            <!--Begin Interview_ List-->
                <div class="interview-title">
                	<div class="chkbox-wrap clear">
                    		<div class="slider on">
                            	<div class="circle"></div>
                                <span class="text">配信希望</span>
                                <div class="chkbox">
                                	<input type="checkbox" class="chkbox-value" name="subscribe_posts[]" value="面接官の本音" checked="checked" />
                                    <input type="checkbox" class="chkbox-select" name="chkbox_select[]" value="1" checked="checked" />
                                    
                                </div>
                            </div>
                        <h3 class="title-con">面接官の本音</h3>
                        <a class="email-magazine-btn" rel="nofollow" href="http://www.kandc.com/mailmagazine/list/interview.html">メールマガジン配信バックナンバー <span class="next_btn"></span></a>   
                    </div>    
                 
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
                      
                          <div class="ct-readmore1 clear readmore_index">
                               <a href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" rel="nofollow" class="read_more_img clear popup-link">
                               <span>記事本文はこちら</span>
                               
                               </a>
                        </div>
                    </div>
                </div>
				
				<!--mailmagazine-->
                <?php /*
				<div class="mailmagazine_list mailmagazine_tg clear">
               		 <a href="<?php echo url_root; ?>mailmagazine/list/interview.html" class="mailmagazine_l">
                     	<img src="<?php echo url_root; ?>img/mailmagazine/button-mailmaga-backnumber.png" alt="mailmaga-backnumber"/>
                     </a>
               		 <a rel="nofollow" href="https://fm.msgs.jp/v31/entry/?id=1000000566/ac01/2" class="mailmagazine_r popup-link mailmagazine_show">
					 	<img src="<?php echo url_root; ?>img/mailmagazine/button-kries-mailmagazine.png" alt="配信をご希望の方メールマガジン登録"/>
					 </a>
           		</div> */ ?>
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
            
                <div class="interview-title clear">
                	<div class="chkbox-wrap clear">
                    		<div class="slider on">
                            	<div class="circle"></div>
                                <span class="text">配信希望</span>
                                <div class="chkbox">
                                	<input type="checkbox" class="chkbox-value" name="subscribe_posts[]" value="キャリアアップコラム" checked="checked" />
                                    <input type="checkbox" class="chkbox-select" name="chkbox_select[]" value="1" checked="checked" />
                                    
                                </div>
                            </div>
                            <h3 class="title-con">キャリアアップコラム</h3>
                            <a class="email-magazine-btn" href="http://www.kandc.com/mailmagazine/list/career-up.html">メールマガジン配信バックナンバー <span class="next_btn"></span></a>
                    </div>    
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
                      
						<div class="ct-readmore1 clear readmore_index">
                        <?php /*?><a href="<?php echo $url_consul; ?>" target="<?php echo $target_link_consul; ?>">
                        <img alt="詳しく見る" src="img/index/button-readmore.png" title=""/>
                        </a><?php */?>
                       <a href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" rel="nofollow" class="read_more_img clear popup-link">
                       <span>記事本文はこちら</span>
                      
                       </a>
                       
                   	   </div>
                        
                        
                    </div>
                </div>
                
				<!--mailmagazine-->
                <?php /*
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
					*/
				?>
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

           <?php
		     $Data_tp_top=Get_Data("turning_point_interview"," and turning_point_interview_status=0 group by turning_point_interview_vol_slug order by turning_point_interview_page_number ASC,turning_point_interview_date DESC limit 1");
	  		$count_tp_interview_top=$Data_tp_top['cnt'];
			if($count_tp_interview_top>0):
						$vol_slug_first=$Data_tp_top['turning_point_interview_vol_slug'];
						$page_number_backnumber=(int)$Data_tp_top['turning_point_interview_page_number'];
						
						$vol_slug_backnumber=$Data_tp_top['turning_point_interview_vol_slug'];
						$title_vol_turning=$vol_slug_backnumber." ".$Data_tp_top['turning_point_interview_title'];
						$url_link_backnumber=url_root."turning-point/".$vol_slug_first."/".$page_number_backnumber.".html";
						$url_image_turningpoint=url_root.$url_images_thumnail.$Data_tp_top['turning_point_interview_thumnail_img']; 
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
		  		<div class="careerup-content">
                <div class="interview-title turning-point clear">
                	<div class="chkbox-wrap clear">
                            <div class="slider on">
                                <div class="circle"></div>
                                <span class="text">配信希望</span>
                                <div class="chkbox">
                                
                                	<input type="checkbox" class="chkbox-value" name="subscribe_posts[]" value="Turning point～転機をチャンスに変えた瞬間" checked="checked" />
                                    <input type="checkbox" class="chkbox-select" name="chkbox_select[]" value="1" checked="checked" />
                                    
                                    </div>
                            </div>
                           <h3 class="title-con">Turning point～転機をチャンスに変えた瞬間</h3>
                           <a class="email-magazine-btn" href="http://www.kandc.com/turning-point/">メールマガジン配信バックナンバー <span class="next_btn"></span></a>
                    </div>    
                    
                    <p>プロフェッショナルの方々の転機に纏わるエピソード、生き方のポリシーに迫るインタビューコンテンツ(不定期配信)</p>
                </div>
                <div class="content-ter clear">
                    <div class="img_thum">
                       <img src="<?php echo $url_image_turningpoint;?>" alt="Turning Point"/>
                    </div>
                    <div class="ct_desc">
                        <div class="title_content">
                           <h4 class="ct-title1"><a href="<?php echo $url_link_backnumber; ?>"><?php echo $title_vol_turning; ?></a> <img src="img/index/icon-new.png" alt="New"/></h4>

                <h5 class="ct-title2">
					<a href="<?php echo $url_link_backnumber; ?>"><?php echo $subtile_turningpoint; ?></a>
                </h5>
                        </div>
                      
						<div class="ct-readmore1 clear readmore_index">
                       
                       <a href="https://fm.msgs.jp/v31/r/?id=1000000566/ac01/2" rel="nofollow" class="read_more_img clear popup-link">
                      	 <span>記事本文はこちら</span>
                      	
                       </a>
                       
                   	   </div>
                        
                        
                    </div>
                </div>
                
				<!--mailmagazine-->
             
				<!--End mailmagazine-->
                <!--End Interview_ List-->
              
            </div>
		  <?php endif ?>
          <div class="fill-email">
          		<table>
                	<tr>
                    	<th>
                        	<p>メールアドレス<span class="red">(必須)</span></p>
                            <p class="red">携帯のアドレスは登録できません</p>
                        </th>
                        <td>
                        		<input type="email" name="email" placeholder="半角文字でお間違いのないようご入力ください" value="" />
                                
                        </td>	
                    </tr>
                </table>
                <p class="submit-wrap"><input type="submit" class="submit-btn" value="Submit" /></p>
          </div>
          
	  		</form><!--subscribe form-->
        </div>
    </div>
    
    
    <div class="sidebar">
        <!-- form search slidebar -->
       <?php @include('../inc/search_slidebar.php'); ?>

        <!-- job new and Featured Jobs  -->
        <?php @include('../inc/program_list_job.php') ;?>
        <!--  the end featured news -->
        <!-- the start new newest -->
        <?php @include('../inc/slibar_inc.php'); ?>
    </div>
</div>



<?php include('../inc/footer.php'); ?>
<style>
	.ct-readmore1 a, .readmore a{
		border: 1px solid #AB8D58;
		padding: 5px 15px !important;
		margin-right: 0;
		width: inherit !important;
	}
	.chkbox-wrap{
		padding:7px 0;
		border-top: 1px solid #AB8D58;
		border-bottom: 1px solid #AB8D58;
		margin-top: 25px;
	}
	.slider{
		width: 70px;
		background: #f2f2f2;
		color: #000;
		padding: 5px 5px 5px 20px;
	    border: 1px solid #ccc;
		text-align: center;
		border-radius: 20px;
		display:block;
		float:left;
		position:relative;
		cursor:pointer;
		transition:all 0.5s;
		-o-transition:all 0.5s;
		-webkit-transition:all 0.5s;
		-moz-transition:all 0.5s;
	}
	.slider.on{
		background: #00b711;
		color: #fff;
		padding: 5px 20px 5px 5px;
	}
	.slider .circle{
		position: absolute;
		width: 26px;
		height: 26px;
		background: #fff;
		border-radius: 50%;
		top: 1px;
		left:1px;
		transition:all 0.5s;
		-o-transition:all 0.5s;
		-webkit-transition:all 0.5s;
		-moz-transition:all 0.5s;
	}
	.slider.on .circle{
		left:68px;
	}
	.slider .chkbox{
		display:none;
	}
	.chkbox-wrap .title-con{
		padding: 5px 0 5px 15px;
	    border-left: 1px solid #AB8D58;
    	margin-left: 15px;
	}
	.chkbox-wrap .email-magazine-btn{
		float:right;
		padding-top:5px;
		font-weight:bold;
	}
	.chkbox-wrap .email-magazine-btn:hover .next_btn{
		background-position:0px 0px;
	}
	.chkbox-wrap .email-magazine-btn .next_btn{		
		width: 8px;
		margin: 4px 0 0 5px;
		background: url(../img/career/next_btn.png) no-repeat 0 0;
		height: 10px;
		display: inline-block;
		background-position: 0 -10px;
	}
	.interview-title .title-con{
		font-size:18px;
	}
	.turning-point .title-con{
		font-size:15px;
	}
	.title_content .ct-title2,
	.title_content .ct-title2 a{
		color:#000;
	}
	.look-job .fill-email{
		margin-top:20px;
		padding-top:15px;
		border-top:1px solid #AB8D58;
	}
	.look-job .fill-email input[type="email"]{
		width:100%;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		min-height:30px;
		padding:5px;
		position:relative;
		top:6px;
	}
	.look-job .fill-email .error{
		margin-left:-20px;
		margin-top:10px;
	}
	.look-job table th{
		width:260px;
	}
	.look-job table th,
	.look-job table td{
		border:1px solid #AB8D58;
		padding:15px;
	}
	.look-job table th{
		background:#f2f2f2;
	}
	.look-job .submit-wrap{
		padding-top:15px;
		text-align:center;
	}
	.look-job .submit-btn{
		    background: url("../img/entry_question/button-confirm.png") no-repeat 0 0;
			width: 186px;
			height: 47px;
			color: transparent;
			font-size: 0;
			border: none;
			cursor: pointer;
			border-width: thin;
	}
	.look-job .submit-btn:hover{
		background-position:0 -47px;
	}
	
</style>
<script>
	jQuery(document).ready(function($) {
			var active_text = '配信希望',
				  inactive_text = '配信停止';
				  
        	$(".chkbox-wrap .slider").click(function(){
				$(this).toggleClass("on");
				if($(this).hasClass("on")){
					$(this).find('.chkbox-select').val('1');
					$(this).find(".text").text(active_text);
				}
				else{
					$(this).find('.chkbox-select').val('0');
					$(this).find(".text").text(inactive_text);
				}
				
			});
			
			//Validate input
			var empty_err = '必須です',
				  email_err = 'メールアドレス（確認） 欄は必須です';

			$("#submit-form .submit-btn").click(function(e){
				var result = true;
				$("#submit-form .error").remove();
				
				//Check empty
				if ( $('#submit-form .fill-email input[name="email"]').val() == "" ){
					$('<p class="error red">'+empty_err+'</p>').insertAfter($('#submit-form .fill-email input[name="email"]'));
					result = false;
				}else{
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if( regex.test($('#submit-form .fill-email input[name="email"]').val()) === false ){
						$('<p class="red error invalid_email">'+email_err+'</p>').insertAfter($('#submit-form .fill-email input[name="email"]'));
						result = false;
					}
				}
			
				if(!result){
					e.preventDefault();
					return false;
				}
				
			});//End click
    });
</script>