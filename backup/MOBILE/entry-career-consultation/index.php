<?php
	ob_start();
	session_start();
?>
<?php
	@include('../config_mobile.php');
	
if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: https://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}
	
	function curPageURL1() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
	if ($protocol == 'http:' || $protocol =='HTTP:'){
		$entry_protocol = str_replace('http', 'https', curPageURL1() );
		header('Location:'.$entry_protocol);
	}
	@include('../inc/header.php'); 
?>

  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <script src="validate_form_entry.js" type="text/javascript"></script>

  <script src="jquery.maxlength_plugin.js" type="text/javascript"></script>
  <script src="jquery.maxlength.js" type="text/javascript"></script>	

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="auto_ruby.js"></script>
		<!--Content-->
       <!-- <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       <style type="text/css">
       		
       </style>
        <script type="text/javascript">
        	jQuery(document).ready(function($){
				
				/*xuong dong dat trong jquery*/
			$('textarea').keypress(function(event) {
			  if (event.which == 13) {
				event.preventDefault();
			      var s = $(this).val();
			      $(this).val(s+"\n");
			  }
			});
			
		/*het xuong dong*/

				
				$(".layer_regional_bg_entry").css({
					"width":+$(document).width(),
					"height":+$(document).height(),
					'opacity':0.5,
					'-ms-filter': 'progid:DXImageTransform.Microsoft.Alpha(opacity=50)',
					'filter': 'alpha(opacity=50)'
				});
				
				 $(".notice-entry-form").delegate(".tbl_pop","click", function() {
					 $(".layer_regional_bg_entry").css({
						 	"display":"block"
						});
					 $(".regional_notice_entry_pop").css({
						 	"display":"block"
						});
				 });
				
				 $(".regional_notice_entry_pop").delegate(".icon_close","click", function() {
					 	$(".layer_regional_bg_entry").css({
						 	"display":"none"
						});
					 $(".regional_notice_entry_pop").css({
						 	"display":"none"
						});
				 });
				 
				  $(".page1").delegate(".form_back_button","click", function(){
					  	//var e = $.Event("submit");
					 	 //alert( $('#submit_form').trigger('submit').value);
						 //$('#submit_form').trigger(e);
						 	//return true;
							$('#submit_form').trigger('submit');
							if(check_submit==true)
							{
								$(".page1").css({
									"display":"none"
								});
								$(".page2").css({
									"display":"block"
								});
								new_var = false;
							}
					  		
						
				  });
				 
				 $(".page2").delegate(".form_back_button2","click", function(){
					 	$(".page1").css({
						 	"display":"block"
						});
						$(".page2").css({
						 	"display":"none"
						});

				  });
				  $(".form_entry_two").delegate(".back_from_confirm","click", function(){
					 	$(".form_entry_two").css({
							"display":"none"
						});
						$(".form_entry_first").css({
							"display":"block"
						});
				  });
				 $('#confirm_form').on('submit', function () {
						new_var = false;
						return true;
				 });
				  
				  
				 $("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
				});
				$("#text2").on("keypress keyup keydown",function (event) {   
						setRuby('text2','text4');
						//alert("ok");
				}); 
				  
				
			});
			//warning message
			var new_var = true;
			window.onbeforeunload = function () {
				if (new_var) {
					if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ){
						return "このページを離れると、入力したデータが削除されます。\nよろしいですか？";
					}else {
						return "このページを離れると、入力したデータが削除されます。";
					}
				}
			}
			function unhook() {
				new_var = false;
			}
        	
        </script>
        
         <div class="layer_regional_bg_entry"></div>
        
      <!--End Content -->    
       <div id="content" class="inside clear form_entry_first clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
       <!--****************************************************-->
       <div class="title_notice clear top_share_mail">
       		<p class="title_top_form yellow clear">キャリア相談</p>
			<?php 
				//if(isset($_SESSION['MemberName'])):
					include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
            <!--<p class="sub_title_top_form while_txt clear">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。
私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>-->
       </div>
       	<form id="submit_form" method="post" action="">	
        <?php 
			$entry_id=$_GET['entry_id'];
			echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
        	
            <div class="page1 bg_white content_inside block_content">
            
            
            	 <div class="group_txt_form clear">
                 
                 <div style="font-size:15px;font-weight:bold; border:solid #B69237 2px; padding:5px; margin-bottom:15px; text-align:center; color:#B69237;">担当コンサルタントが、<br>ご相談にメールでお答えします。</div>
                 
                 
                	<div class="clear title_txt">相談内容をご入力ください</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea value="<?php if(!empty($_POST)): echo $_POST['text18']; endif; ?>" id="text18" name="text18" type="text" rows="6" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text18']; endif; ?></textarea>
                        </div>
                       ※電話でのご相談をご希望の場合は、その旨お書き添えください。
					 </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->
            
            
            	
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<div class="l">相談するコンサルタントを指名しますか？</div>
                        <div class="r">
                        	<a href="http://kandc.com/mobile/consultant.html" target="_blank" class="consultant_link_click clear">
                                   <span>コンサルタントのご紹介はこちら</span>
                                   <span class="next_btn"></span>
                             </a>
      					</div>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php if(!empty($_POST)): $select4_sl= $_POST['select4']; endif; ?>
                       	 <select id="select4" name="select4" class="selection">
                                <option value="指名しない" <?php if($select4_sl=='指名しない'):?> selected="selected"  <?php endif; ?>>指名しない</option>
                                <option value="岡田 麗" <?php if($select4_sl=='岡田 麗'):?> selected="selected"  <?php endif; ?>>岡田 麗</option>
                                <option value="奈良 元生" <?php if($select4_sl=='奈良 元生'):?> selected="selected"  <?php endif; ?>>奈良 元生</option>
                                <option value="半藤 剛" <?php if($select4_sl=='半藤 剛'):?> selected="selected"  <?php endif; ?>>半藤 剛</option>
                               <option value="松尾 匡起" <?php if($select4_sl=='松尾 匡起'):?> selected="selected"  <?php endif; ?>>松尾 匡起</option>
                               <option value="入江 祥之" <?php if($select4_sl=='入江 祥之'):?> selected="selected"  <?php endif; ?>>入江 祥之</option>
                               <option value="武田 直人" <?php if($select4_sl=='武田 直人'):?> selected="selected"  <?php endif; ?>>武田 直人</option>
                               <option value="永田 憲章" <?php if($select4_sl=='永田 憲章'):?> selected="selected"  <?php endif; ?>>永田 憲章</option>
                               <option value="細野 聡" <?php if($select4_sl=='細野 聡'):?> selected="selected"  <?php endif; ?>>細野 聡</option>
                               <option value="工藤 直亮" <?php if($select4_sl=='工藤 直亮'):?> selected="selected"  <?php endif; ?>>工藤 直亮</option>
                               <option value="神田 昭子" <?php if($select4_sl=='神田 昭子'):?> selected="selected"  <?php endif; ?>>神田 昭子</option>
                               <option value="小田 麻耶" <?php if($select4_sl=='小田 麻耶'):?> selected="selected"  <?php endif; ?>>小田 麻耶</option>
                               <option value="神宮司 篤子" <?php if($select4_sl=='神宮司 篤子'):?> selected="selected"  <?php endif; ?>>神宮司 篤子</option>
                               <option value="棚澤 啓介" <?php if($select4_sl=='棚澤 啓介'):?> selected="selected"  <?php endif; ?>>棚澤 啓介</option>
                               
                               
                            </select>
                        </div>
                       
                    </div>
                    <div class="clear">
                    	<span id="errorselect4"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
            
            
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text1" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text1']; endif; ?>" name="text1" onfocus="click_text(this.id)" />
                        </div>
                        <div class="input_50 r">
                       	 <input id="text2" type="text" value="<?php if(!empty($_POST)): echo $_POST['text2']; endif;?>" name="text2" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext12"></span>&nbsp;&nbsp;<span id="errortext2"></span>
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                    <input id="text3" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text3']; endif; ?>" name="text3" onfocus="click_text(this.id)"/>
                        </div>
                        <div class="input_50 r">
                    <input id="text4" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text4']; endif; ?>" name="text4" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext34"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">生年月日<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_60_n l clear">
                    	<div class="input_50 l">
                       	<select id="select1" name="select1" class="selection selection-style">
                               <option value="">　選択</option>
                                <?php $star = 1933;
                                $end = 1998;
                                for ($end; $star <= $end; $end--) {
                                    ?>
                                    <option value="<?php echo $end ?>" 
                                    <?php if(!empty($_POST)): $select1_sl= (int)$_POST['select1']; ?>
                                    		<?php if($end==$select1_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                     ><?php echo $end ?></option>
                                <?php } ?>
                                                                    
                                                            </select>
                        </div>
                        <div class="input_50 r">
                       	 <select id="select2" name="select2" class="selection selection-style">
                                <option value="">　選択</option>
                            <?php $moth = 1;
                            $endMoth = 12;
                            for ($moth; $moth <= $endMoth; $moth++) {
                                ?>
                                <option value="<?php echo $moth ?>"
                                
                                <?php if(!empty($_POST)): $select2_sl= (int)$_POST['select2']; ?>
                                    		<?php if($moth==$select2_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                     
                                ><?php echo $moth ?></option>
                            <?php } ?>
                                                           
                                                        </select>
                        </div>
                        </div>
                         <div class="input_30_n r">
                       	<select id="select3" name="select3" class="selection selection-style">
                                <option value="">選択</option>
                            <?php $day = 1;
                            $endDay = 31;
                            for ($day; $day <= $endDay; $day++) {
                                ?>
                                <option value="<?php echo $day ?>" 
                                 <?php if(!empty($_POST)): $select3_sl= (int)$_POST['select3']; ?>
                                    		<?php if($day==$select3_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                ><?php echo $day ?></option>
                            <?php } ?>
                                                            
                                                        </select>
                        </div>
                    </div>
                        <div class="clear">
                     	   <span id="errorselect123"></span>
                       </div>
                </div><!--End Group txt-->
                
               
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                        	<input type="tel" value="<?php if(!empty($_POST)): echo (int)$_POST['text5']; endif; ?>" id="text5" name="text5" onfocus="click_text(this.id)" style="ime-mode:disabled;"  placeholder="ハイフンなし 0357331602" />
                        </div>
                    	
                    </div>
                    <div class="clear">
                    	<span id="errortext567"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form group_txt_form_end clear">
                	<div class="clear title_txt">メールアドレス<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		<input type="email" value="<?php if(!empty($_POST)): echo $_POST['text8']; endif; ?>" id="text8" name="text8"  onfocus="click_text(this.id)"  inputmode="verbatim" style="ime-mode:inactive;"/>
                        </div>
                        <!--<div class="input_other">
                       	 <input type="text"  value="" id="text9" name="text9">
                        </div>-->
                        
                    </div>
                    <div class="clear">
                    	<span id="errortext89"></span>
                    </div>
                </div><!--End Group txt-->
                 <div class="notice-entry-form">
                        <p class="tbl_pop">※メールでのご連絡について</p>
                   
					<div class="regional_notice_entry_pop"> 
                        <div class="icon_close">
                            <img border="0" alt="閉じる" src="http://www.kandc.com/img/close_btn.png">
                        </div> 
                         
                        <div class="notice-entry-form_pop" style="padding:10px 0 0 0;">
                          <p>※メールでのご連絡について</p>
                          <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。 ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                        </div>
                 	 </div>
               </div>   
                
                
                  <div class="group_txt_form clear">
                  	<div class="clear title_txt">何をご覧になってアクセス頂きましたか？</div>
                    
                    
                	
                    <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('#text22').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						
							$('#select12').change(function(){

								$("#text22").val("");
								$("#select14").val("");

								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
									
									$('.select_show1').hide(); 
								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
										$('.exchange_select').hide();
										 
								 }
							});
					
					
					});
				</script>
                    
                    
                    
                	 <div class="clear input_form">
                    <table style="border:none; width:100%;">
                    <tr>
                    	<td style="line-height:30px;">
                    	<b>媒体</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       <div class="clear">
                        <?php if(!empty($_POST)): $select12_sl= $_POST['select12']; endif; ?>
                    	 <select id="select12" name="select12"  class="selection">
                                <option value="">下記から選択してください</option>
                                <option value="Google" <?php if($select12_sl=='Google'):?> selected="selected"  <?php endif; ?>>Google</option>
                                <option value="Yahoo" <?php if($select12_sl=='Yahoo'):?> selected="selected"  <?php endif; ?>>Yahoo</option>
                                <option value="その他検索エンジン" <?php if($select12_sl=='その他検索エンジン'):?> selected="selected"  <?php endif; ?>>その他検索エンジン</option>
                                <option value="en転職コンサルタント" <?php if($select12_sl=='en転職コンサルタント'):?> selected="selected"  <?php endif; ?>>en転職コンサルタント</option>
                                <option value="日経キャリアNET" <?php if($select12_sl=='日経キャリアNET'):?> selected="selected"  <?php endif; ?>>日経キャリアNET</option>
                                <option value="リクナビNEXT" <?php if($select12_sl=='リクナビNEXT'):?> selected="selected"  <?php endif; ?>>リクナビNEXT</option>
                                <option value="キャリアカバー" <?php if($select12_sl=='キャリアカバー'):?> selected="selected" <?php endif; ?>>キャリアカバー</option>
                                <option value="ビズリーチ" <?php if($select12_sl=='ビズリーチ'):?> selected="selected"  <?php endif; ?>>ビズリーチ</option>
                                <option value="その他WEBサイト" <?php if($select12_sl=='その他WEBサイト'):?> selected="selected"  <?php endif; ?>>その他WEBサイト</option>
                                <option value="駅広告" <?php if($select12_sl=='駅広告'):?> selected="selected"  <?php endif; ?>>駅広告</option>
                                <option value="メルマガ（面接官の本音）" <?php if($select12_sl=='メルマガ（面接官の本音）'):?> selected="selected"  <?php endif; ?>>メルマガ（面接官の本音）</option>
                                <option value="メルマガ（ヘッドハンターの目）" <?php if($select12_sl=='メルマガ（ヘッドハンターの目）'):?> selected="selected"  <?php endif; ?>>メルマガ（ヘッドハンターの目）</option>
                                <option value="メルマガ（キャリアアップコラム）" <?php if($select12_sl=='メルマガ（キャリアアップコラム）'):?> selected="selected"  <?php endif; ?>>メルマガ（キャリアアップコラム）</option>
                                <option value="紹介（クライスにご登録している方より）" <?php if($select12_sl=='紹介（クライスにご登録している方より）'):?> selected="selected"  <?php endif; ?>>紹介（クライスにご登録している方より）</option>
                                <option value="紹介（クライスのご登録者以外より）" <?php if($select12_sl=='紹介（クライスのご登録者以外より）'):?> selected="selected"  <?php endif; ?>>紹介（クライスのご登録者以外より）</option>
                                <option value="その他" <?php if($select12_sl=='その他'):?> selected="selected"  <?php endif; ?>>その他</option>
                            </select>
                        </div>
                        
                        
                   
                    
                    <div style="margin: 5px 0px; display: none;" class="clear select_show1">
                        <div style="float:none; padding:5px 0;" class="clear">※具体的にお教えください（50文字以内）</div>
                        <div style="float:none;" class="clear">
                        	<textarea onfocus="click_text(this.id)" value="" id="text22" name="text22" type="text" style="margin-bottom: 10px"><?php if(!empty($_POST)): echo $_POST['text22']; endif; ?></textarea>
                        </div>
                    </div><!--select_show1-->
                    <div style="margin: 5px 0px; display: none;" class="select_show2 clear">
                            <div class="clear" style="float:none; padding:5px 0;">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                            <?php if(!empty($_POST)): $select14_sl= $_POST['select14']; endif; ?>
                             <select onfocus="click_text(this.id)" id="select14" name="select14"  class="selection">
                                            <option value="">下記から選択してください</option>
                                            <option value="岡田 麗" <?php if($select14_sl=='岡田 麗'):?> selected="selected" <?php endif; ?>>岡田 麗</option>
<option value="奈良 元生" <?php if($select14_sl=='奈良 元生'):?> selected="selected" <?php endif; ?>>奈良 元生</option>
<option value="半藤 剛" <?php if($select14_sl=='半藤 剛'):?> selected="selected" <?php endif; ?>>半藤 剛</option>
<option value="松尾 匡起" <?php if($select14_sl=='松尾 匡起'):?> selected="selected" <?php endif; ?>>松尾 匡起</option>
<option value="入江 祥之" <?php if($select14_sl=='入江 祥之'):?> selected="selected" <?php endif; ?>>入江 祥之</option>
<option value="武田 直人" <?php if($select14_sl=='武田 直人'):?> selected="selected" <?php endif; ?>>武田 直人</option>
<option value="永田 憲章" <?php if($select14_sl=='永田 憲章'):?> selected="selected" <?php endif; ?>>永田 憲章</option>
<option value="細野 聡" <?php if($select14_sl=='細野 聡'):?> selected="selected" <?php endif; ?>>細野 聡</option>
<option value="堂谷 春菜" <?php if($select14_sl=='堂谷 春菜'):?> selected="selected" <?php endif; ?>>堂谷 春菜</option>
<option value="工藤 直亮" <?php if($select14_sl=='工藤 直亮'):?> selected="selected" <?php endif; ?>>工藤 直亮</option>
<option value="船橋 悠" <?php if($select14_sl=='船橋 悠'):?> selected="selected" <?php endif; ?>>船橋 悠</option>
<option value="福田 和貴" <?php if($select14_sl=='工福田 和貴'):?> selected="selected" <?php endif; ?>>福田 和貴</option>
<option value="神田 昭子" <?php if($select14_sl=='神田 昭子'):?> selected="selected" <?php endif; ?>>神田 昭子</option>
<option value="小田 麻耶" <?php if($select14_sl=='小田 麻耶'):?> selected="selected" <?php endif; ?>>小田 麻耶</option>
<option value="神宮司 篤子" <?php if($select14_sl=='神宮司 篤子'):?> selected="selected" <?php endif; ?>>神宮司 篤子</option>
<option value="棚澤 啓介" <?php if($select14_sl=='棚澤 啓介'):?> selected="selected" <?php endif; ?>>棚澤 啓介</option>
<option value="丸山 貴宏" <?php if($select14_sl=='丸山 貴宏'):?> selected="selected" <?php endif; ?>>丸山 貴宏</option>

                             </select>
                            </div>
                        </div><!--select_show2-->
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    
                    
                </div><!--End Group txt--> 
                
                
                
                
                
             </div>
             <!--****************************************************-->
             <div class="page2 bg_yellow while_txt clear">最終学歴・語学・資格</div>
             <div class="page2 bg_white content_inside block_content">
             	
             	
             	<div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_20 l title_txt">
                       		学校名
                        </div>
                        <div class="input_80 r">
                       	<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text10']; endif; ?>" id="text10" name="text10" onfocus="click_text(this.id)"/>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
               
                <div class="group_txt_form clear">
                	<div class="clear title_txt">英語力</div>
                    <div class="clear input_form">
                    	<div class="input_70 l" style="width:56%;">
                        <?php if(!empty($_POST)): $select5_sl= $_POST['select5']; endif; ?>
                       		<select id="select5" name="select5"  class="selection">
                                <option value="">下記から選択してください</option>
                                <option value="ネイティブレベル" <?php if($select5_sl=='ネイティブレベル'):?> selected="selected"  <?php endif; ?>>ネイティブレベル</option>
                                <option value="ビジネスレベル" <?php if($select5_sl=='ビジネスレベル'):?> selected="selected"  <?php endif; ?>>ビジネスレベル</option>
                                <option value="スタンダードレベル" <?php if($select5_sl=='スタンダードレベル'):?> selected="selected"  <?php endif; ?>>スタンダードレベル</option>
                                <option value="ベーシックレベル" <?php if($select5_sl=='ベーシックレベル'):?> selected="selected"  <?php endif; ?>>ベーシックレベル</option>
                                <option value="不可" <?php if($select5_sl=='不可'):?> selected="selected"  <?php endif; ?>>不可</option>
                            </select>
                        </div>
						<div class="input_10 l" style="width:15%;padding:0 1%; line-height:34px; text-align:right;">TOEIC</div>
                        <div class="input_20 l">
                       	 <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text11']; endif; ?>" id="text11" name="text11" onfocus="click_text(this.id)" />
                        </div>
						<div class="input_10 r"  style="width:5%;padding:0 1%; line-height:34px; text-align:left;">点</div>
                        
                    </div>
                    
                </div><!--End Group txt-->
             
             	 <div class="group_txt_form clear">
                	<div class="clear title_txt">その他語学・資格</div>
                    <div class="clear input_form">
                    	<div class="input_100">
        <textarea value="" id="text12" name="text12" type="text"  cols="50" rows="1" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text12']; endif; ?></textarea>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
             
             
             
             
             
             </div>
             <!--***************************************************-->
             
              <!--****************************************************-->
             
            
             <!--***************************************************-->
             
            
             
             <!--****************************************************-->
             <div class="page1 block_content clear">
             	<div class="submit_form_button" style="width:100%;">
               		 <input type="submit" value="  内容確認へ " id="submit" name="Submit" class="button-confirm">
                    
                </div>
                <!--<div class="form_back_button button-back">
                	<a title="n-page2" class="next_page2">
                     より詳しい内容を登録する&nbsp;&nbsp;&nbsp;>
                    </a>
                </div>-->
                
             </div>
             <!--***************************************************-->
             
              <!--****************************************************-->
             <div class="page2 block_content clear">
             	<div class="form_back_button2 button-back">
                	<a href="javascript:void(0);" title="Back">
                    <&nbsp;&nbsp;&nbsp;戻る
                    </a>
                </div>
                <div class="submit_form_button2">
               		 <input type="submit" class="button-confirm" name="Submit" id="submit" value="内容確認に進む   > ">
                     
                </div>
             </div>
             <!--***************************************************-->
             
             
             
             
             
             </form>
           <?php //include ('../inc/page_footer.php');?>  
       </div><!--End content-->
    
 <!--***********************************************************************************************************************-->   
    
    
    
    <!--Confirm form-->
    
    
     <!--End Content -->    
       <div id="content" class="inside confirm form_entry_two <?php if(empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?> clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
           
       </div>
       <?php
	   		
			$prev_input = "";
			$prev_input1 = "";
			$prev_radio = "";
			for ($i = 1; $i < 23; $i++):
				$col = "text{$i}";
				$val = $_POST["text" . $i];
				$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			endfor;
			$user_email = $_POST['text8'];
			for ($j = 1; $j < 15; $j++):
				$col1 = "select{$j}";
				$val2 = $_POST["select" . $j];
				$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
			
			endfor;
			$radio1=$_POST['radio1'];
			$entry_id = $_POST['entry_id'];
			$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
			echo $prev_input1;
			echo $prev_radio;

		?>
        	
               <div class="bg_white content_inside block_content">
            
            	 <div class="group_txt_form clear">
                	<div class="clear title_txt">相談内容</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                     		<p><?php echo str_replace("\n","<br/>",$_POST['text18']); ?></p>
                        </div>
                       
                        
                    </div>
                  </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">コンサルタントの指名 </div>
                    <div class="clear input_form">
                    	<div class="input_100 confirm_txt_submit">
                       	<?php echo $_POST['select4']; ?>
                        </div>
                       
                    </div>
                    <div class="clear">
                    	<span id="errorselect4"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 </div>
                    <div class="clear input_form">
                    	<div class="input_50 l confirm_txt_submit">
                       		<?php echo $_POST['text1']; ?>
                        </div>
                        <div class="input_50 r confirm_txt_submit">
                       	 	<?php echo $_POST['text2']; ?>
                        </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ </div>
                    <div class="clear input_form">
                    	<div class="input_50 l confirm_txt_submit">
                       		 <?php echo $_POST['text3']; ?>
                        </div>
                        <div class="input_50 r confirm_txt_submit">
                       		 <?php echo $_POST['text4']; ?>
                        </div>
                    </div>
                    
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">生年月日</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                    		<span><?php echo $_POST['select1'] ?> 年</span>
                            <span><?php echo $_POST['select2']; ?> 月</span>
                            <span><?php echo $_POST['select3']; ?> 日</span>
                         </div>
                    </div>
                      
                </div><!--End Group txt-->
                
              
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['text5']; ?> </span>
                         </div>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">メールアドレス</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text8']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
             <?php if(!empty($_POST['text10']) ||  !empty($_POST['text11']) ||  !empty($_POST['select5']) ||  !empty($_POST['text12']) ): ?>   
                
               <div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_20 l">
                       		学校名
                        </div>
                        <div class="input_80 r confirm_txt_submit">
                       			<?php echo $_POST['text10']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
               
                <div class="group_txt_form clear">
                	<div class="clear title_txt">英語力</div>
                    <div class="clear input_form">
                    	<div class="input_70 l confirm_txt_submit">
                       		<?php echo $_POST['select5']; ?>
                        </div>
                        <div class="input_30 r confirm_txt_submit">
                       	 	TOEIC <?php echo $_POST['text11']; ?> 点
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
             
             	 <div class="group_txt_form clear">
                	<div class="clear title_txt">その他語学・資格</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                    		<p><?php echo $_POST['text12']; ?></p>
                            
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
               <?php endif; ?> 
                
                
               
                
                <div class="group_txt_form clear">
                	<div class="clear input_form">
                    	<div class="input_20 l">
                    	媒体
                        </div>
                       <div class="input_80 r confirm_txt_submit">
                    		<p><?php echo $_POST['select12']; ?></p>
                            <p><?php echo $_POST['text22']; ?></p>
                            <p><?php echo $_POST['select14']; ?></p>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
             </div>
            
             <div class="block_content clear">
             	<div class="form_back_button2 button-back back_from_confirm">
                	<a title="Back"  href="javascript:void(0);">
                    <&nbsp;&nbsp;&nbsp;戻る
                    
                   
                    
                    </a>
                </div>
                <div class="submit_form_button2">
               		 <input type="submit" value="申し込む   >" id="submit" name="Submit" class="button-confirm">
                    
                </div>
                
             </div>
             <!--***************************************************-->
             
             </form>
             
       </div><!--End content-->
    
    
    
    
    
    
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
 <?php 
		$google_check="entry";
	?>

  <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>