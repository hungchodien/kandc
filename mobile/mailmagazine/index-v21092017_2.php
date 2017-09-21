<div id="content" class="inside">
	
	<div class="title-page">

	    <h2 class="title-top">メールマガジン配信登録</h2>
    	<h3 class="sub-title-top">「面接官の本音」「キャリアアップコラム」などの記事の最新号をメールマガジンにてお届けします。</h3>
	</div>

	<div id="mailmagazine_mobile" class="mailmagazine_mobile bg_white content_inside block_content clear">
    	<!--<h3 class="title_mailmagazine">メールマガジン</h3>-->
    
		<div class="mailmagazine_regist_top">
                	<p>配信を希望されるメールマガジンにチェックを入れメールアドレスを入力してください。</p>
                   <p class="go_cancel"><a href="https://www.kandc.com/mobile/distribution-cancelled-form/" target="_blank" class="red">配信停止はこちら▶︎</a></p>
	   </div>

<form id="submit-form" method="post" action="<?php echo url_root; ?>mailmagazine/confirm.php"> 
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
                    <div class="title-con clear">
                    	<div class="chkbox-wrap">
                            <input type="checkbox" class="chkbox-select" name="chkbox-select[]" id="chkbox-title1"  value="0" checked="checked"/>
                            <label>配信希望</label>
                            <input type="hidden" name="subscriber_title[]" class="" value="面接官の本音" />
                        </div>
                    	<h3 class="text">面接官の本音  <span class="black">（隔月10日予定）</span> </h3>
                        
                        <a class="read-more fr" href="<?php echo url_root; ?>mailmagazine/list/interview.html">配信バックナンバー▶︎</a>
                        
                    </div>
                    <p>普段知ることができない面接のポイントなどをインタビュー。現役面接官の生の声をお届けします。</p>
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
                    
                    
                    
                </div>
				
			

				<!--End mailmagazine-->
                <!--End Interview_ List-->
               
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
                    <div class="title-con clear">
                    	<div class="chkbox-wrap">
                            <input type="checkbox" class="chkbox-select" name="chkbox-select[]" id="chkbox-title2"  value="0" checked="checked"/>
                            <label>配信希望</label>
                             <input type="hidden" name="subscriber_title[]" class="" value="キャリアアップコラム" />
                        </div>
                    	<h3 class="text">キャリアアップコラム <span class="black">（毎月20日予定）</span> </h3>
                        <a class="read-more fr" href="<?php echo url_root; ?>mailmagazine/list/career-up.html">配信バックナンバー▶︎</a>
                        
                    </div>
                    <p>実際のカウンセリングの現場を覗いてみませんか？弊社コンサルタントによる、オリジナルコラム。</p>
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
                    
                </div>
                

				<!--End mailmagazine-->
                <!--End Interview_ List-->
            
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
                    <div class="title-con clear">
                    		<div class="chkbox-wrap">
        	                    <input type="checkbox" class="chkbox-select" name="chkbox-select[]" id="chkbox-title3"  value="0" checked="checked"/>
                                <label>配信希望</label>
                                <input type="hidden" name="subscriber_title[]" class="" value="ターニングポイント" />
	                        </div>
                    		<h3 class="text">Turning Point（ターニングポイント） <span class="black"> (不定期配信) </span></h3>
                          	<a class="read-more fr" href="<?php echo url_root; ?>turning-point/">配信バックナンバー▶︎</a>
                            
                     </div>
                    <p>プロフェッショナルの方々の転機に纏わるエピソード、生き方のポリシーに迫るインタビューコンテンツ</p>
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
                    
                </div>
                
			
				<!--End mailmagazine-->
                <!--End Interview_ List-->
              
            </div>
            <?php endif; ?>
            
            
            <div class="fill-email">
          		<table>
                	<tbody><tr>
                    	<th>
                        	<p>メールアドレス</p>
                            <p>携帯のアドレスは登録できません</p>
                        </th>
                        <td>
                        		<input type="email" class="email-input" name="email" placeholder="半角文字でお間違いのないようご入力ください" value="">
                                
                        </td>	
                    </tr>
                </tbody></table>
                <p class="submit-wrap"><input type="submit" class="submit-btn" value="内容確認へ  &gt;"></p>
          </div>
		  		
		  
		  
</form>    
        <!--ENd content-->
  
<style>
	.go_cancel{text-align:right;padding-top:10px;}
</style>  
    
    <script>
				jQuery(document).ready(function($) {
                    	$("#mailmagazine_mobile .chkbox-wrap label").click(function(){
								$(this).stop().toggleClass("active");
								if($(this).parent().find(".chkbox-select").val() == 1)
									$(this).parent().find(".chkbox-select").val(0)
								else
									$(this).parent().find(".chkbox-select").val(1)
						});
						
						
						
						//Get cookie
						function getCookie(cname) {
							var name = cname + "=";
							var ca = document.cookie.split(';');
							for(var i = 0; i <ca.length; i++) {
								var c = ca[i];
								while (c.charAt(0)==' ') {
									c = c.substring(1);
								}
								if (c.indexOf(name) == 0) {
									return c.substring(name.length,c.length);
								}
							}
							return "";
						} 
						var c_user_email = getCookie("user_email");
						var c_chkbox1 = getCookie("checkbox1");
						var c_chkbox2 = getCookie("checkbox2");
						var c_chkbox3 = getCookie("checkbox3");
			
						$(".email-input").val(c_user_email);
						$("#chkbox-title1").val(c_chkbox1);
						$("#chkbox-title2").val(c_chkbox2);
						$("#chkbox-title3").val(c_chkbox3);
						
						if(c_chkbox1 == 1 )
							$("#chkbox-title1").next().addClass("active");
							
						if(c_chkbox2 == 1 )
							$("#chkbox-title2").next().addClass("active");
							
						if(c_chkbox3 == 1 )
							$("#chkbox-title3").next().addClass("active");
						
						
						//Validate input
						var empty_err = '必須です',
							  email_err = 'メールアドレス（確認） 欄は必須です';
			
						$("#submit-form .submit-btn").click(function(e){
							//Set cookie during form submit
							var chkbox1 = $("#chkbox-title1").val();
							var chkbox2 = $("#chkbox-title2").val();
							var chkbox3 = $("#chkbox-title3").val();
			
							var email = $(".email-input").val();
						
							document.cookie = "user_email="+email;
							document.cookie = "checkbox1="+chkbox1;
							document.cookie = "checkbox2="+chkbox2;
							document.cookie = "checkbox3="+chkbox3;
							
			
			
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
						
						
                }); //End jQuery
	</script>
    
    
    </div><!--career_mobile-->
<?php include('inc/menu_interview.php'); ?>
<?php include ('inc/page_footer.php');?>
</div><!--#content-->