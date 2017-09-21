<?php
	ob_start();
	session_start();
?>
<?php
	@include('../../../config_mobile.php');
	
	
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
				  
				  
				 /*$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
				});
				$("#text2").on("keypress keyup keydown",function (event) {   
						setRuby('text2','text4');
						//alert("ok");
				}); */
				  
				
			});
			
			//warning message
			/*var new_var = true;
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
			}*/
        	
        </script>
        
         <div class="layer_regional_bg_entry"></div>
         
         
<div class="main_top inside">
  <p class="main_img"><img alt="シニアコンサルタント 松尾 匡起" src="<?php echo url_root_headhunter; ?>img/main-okada.png" /></p>
  <h1 class="main_title"><img alt="ヘッドハンターに相談してみませんか？" src="<?php echo url_root_headhunter; ?>img/main-title.png" /><br><SPAN style="font-size:11px; margin-top:3px;">エグゼクティブコンサルタント 岡田 麗</SPAN></h1>
  </div>
  
  <div class="wrapper">
  <div class="main_check">
  <p><img alt="理想の求人情報がみつからない" src="<?php echo url_root_headhunter; ?>img/main-check1.png" /></p>
  <p><img alt="自分では気づかない可能性が知りたい" src="<?php echo url_root_headhunter; ?>img/main-check2.png" /></p>
  <p><img alt="キャリア構築の頼れるパートナーが欲しい" src="<?php echo url_root_headhunter; ?>img/main-check3.png" /></p>
  </div>
  
  <div id="entry_short_btn" class="entry_btn_top"><a href="#headhunter_short_form"><img alt="エントリーしてヘッドハンターに相談する" src="<?php echo url_root_headhunter; ?>img/main-entry-button.png" /></a></div>
  </div>
  <div class="features_btns center">
  <h3 class="features_title inside"><img alt="クライス&カンパニーだけの3つの特長" src="<?php echo url_root_headhunter; ?>img/features-title.png" /></h3>
  <div class="wrapper">
  <p class="features01_btn features_btn"><img alt="特長01 30代の転職に強い（平均34.8歳）" src="<?php echo url_root_headhunter; ?>img/features-button-1.png" /></p>
  <p class="features02_btn features_btn"><img alt="特長02 ベテランヘッドハンターがサポート" src="<?php echo url_root_headhunter; ?>img/features-button-2.png" /></p>
  <p class="features03_btn features_btn"><img alt="特長03 マネジャークラス以上の非公開求人多数" src="<?php echo url_root_headhunter; ?>img/features-button-3.png" /></p>
  </div>
  </div>
         
         
         
<div id="headhunter_short_form" class="headhunter_form_content">
<div class="headhunter_entry_title center"><img alt="今すぐ転職をお考えの方も、将来的な転職を視野に入れている方も専属のヘッドハンターに相談してみませんか？＜エントリー無料＞" src="<?php echo url_root_headhunter; ?>img/entry-title.png" /></div>
<div class="wrapper">

      <!--End Content -->    
       <div id="content" class="inside clear form_entry_first clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
       <!--****************************************************-->
       <div class="title_notice clear top_share_mail">
			<?php 
				//if(isset($_SESSION['MemberName'])):
					//include('../../../inc/form_email_top_entry.php'); 
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
                	<div class="clear title_txt">都道府県 <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php if(!empty($_POST)): $select4_sl= $_POST['select4']; endif; ?>
                       	 <select id="select4" name="select4" class="selection">
                                <option value="">都道府県を選択してください。</option>
                                <option value="東京都" <?php if($select4_sl=='東京都'):?> selected="selected"  <?php endif; ?>>東京都</option>
                                <option value="千葉県" <?php if($select4_sl=='千葉県'):?> selected="selected"  <?php endif; ?>>千葉県</option>
                                 <option value="埼玉県" <?php if($select4_sl=='埼玉県'):?> selected="selected"  <?php endif; ?>>埼玉県</option>
                               <option value="神奈川県" <?php if($select4_sl=='神奈川県'):?> selected="selected"  <?php endif; ?>>神奈川県</option>
                                     <option value='' >---------</option>
                               <option value="北海道" <?php if($select4_sl=='北海道'):?> selected="selected"  <?php endif; ?>>北海道</option>
                               <option value="青森県" <?php if($select4_sl=='青森県'):?> selected="selected"  <?php endif; ?>>青森県</option>
                               <option value="岩手県" <?php if($select4_sl=='岩手県'):?> selected="selected"  <?php endif; ?>>岩手県</option>
                               <option value="宮城県" <?php if($select4_sl=='宮城県'):?> selected="selected"  <?php endif; ?>>宮城県</option>
                               <option value="秋田県" <?php if($select4_sl=='秋田県'):?> selected="selected"  <?php endif; ?>>秋田県</option>
                               <option value="山形県" <?php if($select4_sl=='山形県'):?> selected="selected"  <?php endif; ?>>山形県</option>
                               <option value="福島県" <?php if($select4_sl=='福島県'):?> selected="selected"  <?php endif; ?>>福島県</option>
                               <option value="茨城県" <?php if($select4_sl=='茨城県'):?> selected="selected"  <?php endif; ?>>茨城県</option>
                               <option value="栃木県" <?php if($select4_sl=='栃木県'):?> selected="selected"  <?php endif; ?>>栃木県</option>
                               <option value="群馬県" <?php if($select4_sl=='群馬県'):?> selected="selected"  <?php endif; ?>>群馬県</option>
                               <option value="埼玉県" <?php if($select4_sl=='埼玉県'):?> selected="selected"  <?php endif; ?>>埼玉県</option>
                               <option value="千葉県" <?php if($select4_sl=='千葉県'):?> selected="selected"  <?php endif; ?>>千葉県</option>
                               <option value="東京都" <?php if($select4_sl=='東京都'):?> selected="selected"  <?php endif; ?>>東京都</option>
                               <option value="神奈川県" <?php if($select4_sl=='神奈川県'):?> selected="selected"  <?php endif; ?>>神奈川県</option>
                               <option value="新潟県" <?php if($select4_sl=='新潟県'):?> selected="selected"  <?php endif; ?>>新潟県</option>
                               <option value="富山県" <?php if($select4_sl=='富山県'):?> selected="selected"  <?php endif; ?>>富山県</option>
                               <option value="石川県" <?php if($select4_sl=='石川県'):?> selected="selected"  <?php endif; ?>>石川県</option>
                               <option value="福井県" <?php if($select4_sl=='福井県'):?> selected="selected"  <?php endif; ?>>福井県</option>
                               <option value="山梨県" <?php if($select4_sl=='山梨県'):?> selected="selected"  <?php endif; ?>>山梨県</option>
                               <option value="長野県" <?php if($select4_sl=='長野県'):?> selected="selected"  <?php endif; ?>>長野県</option>
                               <option value="岐阜県" <?php if($select4_sl=='岐阜県'):?> selected="selected"  <?php endif; ?>>岐阜県</option>
                               <option value="静岡県" <?php if($select4_sl=='静岡県'):?> selected="selected"  <?php endif; ?>>静岡県</option>
                               <option value="愛知県" <?php if($select4_sl=='愛知県'):?> selected="selected"  <?php endif; ?>>愛知県</option>
                               <option value="三重県" <?php if($select4_sl=='三重県'):?> selected="selected"  <?php endif; ?>>三重県</option>
                               <option value="滋賀県" <?php if($select4_sl=='滋賀県'):?> selected="selected"  <?php endif; ?>>滋賀県</option>
                               <option value="京都府" <?php if($select4_sl=='京都府'):?> selected="selected"  <?php endif; ?>>京都府</option>
                               <option value="大阪府" <?php if($select4_sl=='大阪府'):?> selected="selected"  <?php endif; ?>>大阪府</option>
                               <option value="兵庫県" <?php if($select4_sl=='兵庫県'):?> selected="selected"  <?php endif; ?>>兵庫県</option>
                               <option value="奈良県" <?php if($select4_sl=='奈良県'):?> selected="selected"  <?php endif; ?>>奈良県</option>
                               <option value="和歌山県" <?php if($select4_sl=='和歌山県'):?> selected="selected"  <?php endif; ?>>和歌山県</option>
                               <option value="鳥取県" <?php if($select4_sl=='鳥取県'):?> selected="selected"  <?php endif; ?>>鳥取県</option>
                               <option value="島根県" <?php if($select4_sl=='島根県'):?> selected="selected"  <?php endif; ?>>島根県</option>
                               <option value="岡山県" <?php if($select4_sl=='岡山県'):?> selected="selected"  <?php endif; ?>>岡山県</option>
                               <option value="広島県" <?php if($select4_sl=='広島県'):?> selected="selected"  <?php endif; ?>>広島県</option>
                               <option value="山口県" <?php if($select4_sl=='山口県'):?> selected="selected"  <?php endif; ?>>山口県</option>
                               <option value="徳島県" <?php if($select4_sl=='徳島県'):?> selected="selected"  <?php endif; ?>>徳島県</option>
                               <option value="香川県" <?php if($select4_sl=='香川県'):?> selected="selected"  <?php endif; ?>>香川県</option>
                               <option value="愛媛県" <?php if($select4_sl=='愛媛県'):?> selected="selected"  <?php endif; ?>>愛媛県</option>
                               <option value="高知県" <?php if($select4_sl=='高知県'):?> selected="selected"  <?php endif; ?>>高知県</option>
                               <option value="福岡県" <?php if($select4_sl=='福岡県'):?> selected="selected"  <?php endif; ?>>福岡県</option>
                               <option value="佐賀県" <?php if($select4_sl=='佐賀県'):?> selected="selected"  <?php endif; ?>>佐賀県</option>
                               <option value="長崎県" <?php if($select4_sl=='長崎県'):?> selected="selected"  <?php endif; ?>>長崎県</option>
                               <option value="熊本県" <?php if($select4_sl=='熊本県'):?> selected="selected"  <?php endif; ?>>熊本県</option>
                               <option value="大分県" <?php if($select4_sl=='大分県'):?> selected="selected"  <?php endif; ?>>大分県</option>
                               <option value="宮崎県" <?php if($select4_sl=='宮崎県'):?> selected="selected"  <?php endif; ?>>宮崎県</option>
                               <option value="鹿児島県" <?php if($select4_sl=='鹿児島県'):?> selected="selected"  <?php endif; ?>>鹿児島県</option>
                               <option value="沖縄県" <?php if($select4_sl=='沖縄県'):?> selected="selected"  <?php endif; ?>>沖縄県</option>
                               <option value="海外" <?php if($select4_sl=='海外'):?> selected="selected"  <?php endif; ?>>海外</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="clear">
                    	<span id="errorselect4"></span>
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
                	<div class="clear title_txt">経験社数<span class="notice">※</span></div>
                    <div class="clear input_form">
                   
                        <div class="input_50 l">
                       <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text13']; endif; ?>" id="text13" name="text13" onfocus="click_text(this.id)"　style="ime-mode:disabled;" pattern="[0-9]*" />
                        </div><div class="l" style="margin-left:10px; margin-top:5px;">社</div>
                        
                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名</div>
                    <div class="clear input_form">
                    	<div class="input_100 l">
                       		<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text14']; endif; ?>" id="text14" name="text14" onfocus="click_text(this.id)"/>
                        </div>
                       <!-- <div class="input_20 r">
                       	 <input type="text" value="" id="text15" name="text15"/>
                        </div>-->
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	勤務期間<span class="notice">※</span>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_60_n l">
                    	<div class="input_50 l">
                       		<select class="selection selection-style" name="select7" id="select7">
                                    <option value=""> 選択</option>
                                    <?php $year = 1940;
                                    $end = date("Y");
                                    for ($end; $year <= $end; $end--) {
                                        ?>
                                        <option value="<?php echo $end ?>" 
                                          <?php if(!empty($_POST)): $select7_sl= (int)$_POST['select7']; ?>
                                    		<?php if($end==$select7_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     	<?php endif; ?>
                                        
                                        ><?php echo $end ?></option>
                                    <?php } ?>
                            </select>
                        </div>
						
                        <div class="input_50 r">
                       	 <select class="selection selection-style" name="select8" id="select8">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth ?>"
                                    <?php if(!empty($_POST)): $select8_sl= (int)$_POST['select8']; ?>
                                    		<?php if($moth==$select8_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     	<?php endif; ?>
                                    
                                    ><?php echo $moth ?></option>
                                <?php } ?>
                        </select>
                        </div>
                        </div>
                         
                        <div class="input_5 l" style="line-height:34px;padding:0 1%;">
                       	 ～
                        </div></div>
                        <!--<div class="input_5 l">
                       	 ～
                        </div>
                        <div class="input_40_n r">
                        <div class="input_50 l">
                       	<select class="selection selection-style" name="select9" id="select9">
                            <option value=""> 選択</option>
                            <?php $year = 1940;
                            $end = date("Y");
                            for ($end; $year <= $end; $end--) {
                                ?>
                                <option value="<?php echo $end ?>"
                                 <?php if(!empty($_POST)): $select9_sl= (int)$_POST['select9']; ?>
                                    		<?php if($end==$select9_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     	<?php endif; ?>
                                
                                ><?php echo $end ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="input_50 r">
                       	  <select class="selection selection-style" name="select10" id="select10">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth ?>"
                                   <?php if(!empty($_POST)): $select10_sl= (int)$_POST['select10']; ?>
                                    		<?php if($moth==$select10_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     	<?php endif; ?> 
                                    
                                    ><?php echo $moth ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>-->
                    <!--</div>-->
                     
                    <div class="clear"><span  id="errorselect78910"></span></div>
                    
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        	 <?php if(!empty($_POST)): $select11_sl= $_POST['select11']; endif; ?>
                       		<select id="select11" name="select11" class="selection">
                                <option value="">下記より選択してください</option>
                                <option value="コンサルタント" <?php if($select11_sl=='コンサルタント'):?> selected="selected"  <?php endif; ?>>コンサルタント</option>
                                <option value="コンサルタント（IT）" <?php if($select11_sl=='コンサルタント（IT）'):?> selected="selected"  <?php endif; ?>>コンサルタント（IT）</option>
                                <option value="ITハード系エンジニア" <?php if($select11_sl=='ITハード系エンジニア'):?> selected="selected"  <?php endif; ?>>ITハード系エンジニア</option>
                                <option value="ソフトウェアエンジニア" <?php if($select11_sl=='ソフトウェアエンジニア'):?> selected="selected"  <?php endif; ?>>ソフトウェアエンジニア</option>
                                <option value="WEB・モバイル関連" <?php if($select11_sl=='WEB・モバイル関連'):?> selected="selected"  <?php endif; ?>>WEB・モバイル関連</option>
                                <option value="その他ソフトウェア関連" <?php if($select11_sl=='その他ソフトウェア関連'):?> selected="selected"  <?php endif; ?>>その他ソフトウェア関連</option>
                                <option value="機械・メカトロニクスエンジニア" <?php if($select11_sl=='機械・メカトロニクスエンジニア'):?> selected="selected"  <?php endif; ?>>機械・メカトロニクスエンジニア</option>
                                <option value="電気・電子・半導体エンジニア" <?php if($select11_sl=='電気・電子・半導体エンジニア'):?> selected="selected"  <?php endif; ?>>電気・電子・半導体エンジニア</option>
                                <option value="化学系" <?php if($select11_sl=='化学系'):?> selected="selected"  <?php endif; ?>>化学系</option>
                                <option value="バイオ・メディカル系" <?php if($select11_sl=='バイオ・メディカル系'):?> selected="selected"  <?php endif; ?>>バイオ・メディカル系</option>
                                <option value="経営企画・事業企画" <?php if($select11_sl=='経営企画・事業企画'):?> selected="selected"  <?php endif; ?>>経営企画・事業企画</option>
                                <option value="営業企画" <?php if($select11_sl=='営業企画'):?> selected="selected"  <?php endif; ?>>営業企画</option>
                                <option value="業務企画" <?php if($select11_sl=='業務企画'):?> selected="selected"  <?php endif; ?>>業務企画</option>
                                <option value="商品・サービス企画" <?php if($select11_sl=='商品・サービス企画'):?> selected="selected"  <?php endif; ?>>商品・サービス企画</option>
                                <option value="IR" <?php if($select11_sl=='IR'):?> selected="selected"  <?php endif; ?>>IR</option>
                                <option value="広報" <?php if($select11_sl=='広報'):?> selected="selected"  <?php endif; ?>>広報</option>
                                <option value="マーケティング" <?php if($select11_sl=='マーケティング'):?> selected="selected"  <?php endif; ?>>マーケティング</option>
                                <option value="総務" <?php if($select11_sl=='総務'):?> selected="selected"  <?php endif; ?>>総務</option>
                                <option value="法務" <?php if($select11_sl=='法務'):?> selected="selected"  <?php endif; ?>>法務</option>
                                <option value="人事" <?php if($select11_sl=='人事'):?> selected="selected"  <?php endif; ?>>人事</option>
                                <option value="経理・財務・会計" <?php if($select11_sl=='経理・財務・会計'):?> selected="selected"  <?php endif; ?>>経理・財務・会計</option>
                                <option value="秘書" <?php if($select11_sl=='秘書'):?> selected="selected"  <?php endif; ?>>秘書</option>
                                <option value="事務・庶務" <?php if($select11_sl=='事務・庶務'):?> selected="selected"  <?php endif; ?>>事務・庶務</option>
                                <option value="営業" <?php if($select11_sl=='営業'):?> selected="selected"  <?php endif; ?>>営業</option>
                                <option value="販売・サービス" <?php if($select11_sl=='販売・サービス'):?> selected="selected"  <?php endif; ?>>販売・サービス</option>
                                <option value="金融関連職" <?php if($select11_sl=='金融関連職'):?> selected="selected"  <?php endif; ?>>金融関連職</option>
                                <option value="建設・建築・土木系" <?php if($select11_sl=='建設・建築・土木系'):?> selected="selected"  <?php endif; ?>>建設・建築・土木系</option>
                                <option value="インストラクター" <?php if($select11_sl=='インストラクター'):?> selected="selected"  <?php endif; ?>>インストラクター</option>
                                <option value="トップマネジメント" <?php if($select11_sl=='トップマネジメント'):?> selected="selected"  <?php endif; ?>>トップマネジメント</option>
                                <option value="ロジスティクス・購買関連" <?php if($select11_sl=='ロジスティクス・購買関連'):?> selected="selected"  <?php endif; ?>>ロジスティクス・購買関連</option>
                                <option value="エスタブリッシュメント職" <?php if($select11_sl=='エスタブリッシュメント職'):?> selected="selected"  <?php endif; ?>>エスタブリッシュメント職</option>
                                <option value="クリエイティブ系" <?php if($select11_sl=='クリエイティブ系'):?> selected="selected"  <?php endif; ?>>クリエイティブ系</option>
                                <option value="デザイナー" <?php if($select11_sl=='デザイナー'):?> selected="selected"  <?php endif; ?>>デザイナー</option>
                                <option value="コールセンター" <?php if($select11_sl=='コールセンター'):?> selected="selected"  <?php endif; ?>>コールセンター</option>
                			</select>
                        </div>
                        
                    </div>
                    <div class="clear"><span id="errorselect11"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">年収<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	  <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text17']; endif; ?>" id="text17" name="text17" onfocus="click_text(this.id)" placeholder="" style="ime-mode:disabled;" pattern="[0-9]*"/>
                        </div>
                        <div class="l" style="margin-left:10px; margin-top:5px;">万円</div>
                        
                    </div>
                     <div class="clear"><span  id="errorselect17"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea value="<?php if(!empty($_POST)): echo $_POST['text18']; endif; ?>" id="text18" name="text18" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text18']; endif; ?></textarea>
                        </div>
                       
                        
                    </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->
                
                  <div class="group_txt_form clear">
                  	<div class="clear title_txt">何をご覧になってアクセス頂きましたか？</div>
                    
                    
                	
                    <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.select_show3').hide();
						$('.exchange_select').hide();
						
							$('#select12').change(function(){

								$("#text22").val("");
								$("#select14").val("");
								$("#select15").val("");

								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
									$('.select_show3').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
									
									$('.select_show1').hide();
									$('.select_show3').hide(); 
								 }else if($('#select12').val() == '駅広告'){
                                    $('.select_show3').show();
                                    $('.exchange_select').show();
                                    $('.select_show1').hide();
                                    $('.select_show2').hide();

								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
										$('.select_show3').hide();
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
                                <?php include('../../../inc/select-media.php');?>
                            </select>
                        </div>
                        
                        
                   
                    
                    <div style="margin: 5px 0px; display: none;" class="clear select_show1">
                        <div style="float:none; padding:5px 0;" class="clear">※具体的にお教えください。</div>
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
                                            <?php 
@include('../../Lib/function/function.database.php');
												@include('../../../Lib/function/function.database.php');
					@include('../../../../Lib/function/function.database.php');
					$query_consultant=ConsutantAll();
					//print_r($query_consultant);
					while($row_consultant=mysql_fetch_array($query_consultant)):
					?>
					    <option  value="<?php echo $row_consultant['consultant_Name']; ?>" <?php if($select14_sl==$List_Consultant['consultant_Name']):?> selected="selected"  <?php endif; ?>><?php echo $row_consultant['consultant_Name']; ?></option>
                        <?php
					endwhile;				?>
                             </select>
                            </div>
                        </div><!--select_show2-->
                        
                        <div style="margin: 5px 0px; display: none;" class="select_show3 clear">
                                <div class="clear" style="float:none; padding:5px 0;">※駅名を下記よりご選択ください。</div>
                                <div class="clear">
                                    <?php if(!empty($_POST)): $select15_sl= $_POST['select15']; endif; ?>
                                    <select onfocus="click_text(this.id)" id="select15" name="select15"  class="selection consultant_check">
                                        <option value="">下記から選択してください</option>
                                        <option value="新橋駅">新橋駅</option>
                                        <option value="赤坂見附駅">赤坂見附駅</option>
                                        <option value="溜池山王駅">溜池山王駅</option>
                                        <option value="東京駅（丸の内線）">東京駅（丸の内線）</option>
                                        <option value="月島駅">月島駅</option>
                                    </select>
								 </div>
                            </div><!--select_show3-->
                        
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    
                    
                </div><!--End Group txt--> 
                
               
                
             </div>
 
                <?php 
								@include('../inc/link_privacy_policy.php'); 
								@include('../../inc/link_privacy_policy.php'); 
								@include('../../../inc/link_privacy_policy.php'); 
		
							?>
                
             <!--****************************************************-->
             <div class="page2 bg_yellow while_txt clear">最終学歴・語学・資格</div>
             <div class="page2 bg_white content_inside block_content">
             	
             	
             	<div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_20 l title_txt">
                       		学校名
                        </div>
                        <div class="input_80 r">
                       	<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text10']; endif; ?>" id="text10" name="text10" onfocus="click_text(this.id)" placeholder="（例）◯◯大学"/>
                        </div>
                    </div>
                     <div class="clear input_form" style="margin-top:5px;">
                    	<div class="input_20 l title_txt">
                       		学部
                        </div>
                        <div class="input_80 r">
                       	<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text23']; endif; ?>" id="text23" name="text23" onfocus="click_text(this.id)" placeholder="（例）◯◯学部"/>
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
             	<div class="submit_form_button">
               		 <input type="submit" value="<   同意して内容確認へ " id="submit" name="Submit" class="button-confirm">
                    
                </div>
                <div class="form_back_button button-back">
                	<a title="n-page2" class="next_page2">
                     より詳しい内容を登録する&nbsp;&nbsp;&nbsp;>
                    </a>
                </div>
                
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
			for ($i = 1; $i < 24; $i++):
				$col = "text{$i}";
				$val = $_POST["text" . $i];
				$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			endfor;
			$user_email = $_POST['text8'];
			for ($j = 1; $j < 16; $j++):
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
                	<div class="clear title_txt">都道府県</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       	 	<?php echo $_POST['select4']; ?>
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
                    <div class="clear input_form" style="margin-top:5px;">
                    	<div class="input_20 l">
                       		学部
                        </div>
                        <div class="input_80 r confirm_txt_submit">
                       			<?php echo $_POST['text23']; ?>
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
                    	<div class="input_30 l">
                       		経験社数
                        </div>
                        <div class="input_70 r confirm_txt_submit">
                       		<?php echo $_POST['text13']; ?> 社
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['text14']; ?>
                        </div>
                        
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l confirm_txt_submit">
                    		<span><?php echo $_POST['select7']; ?> 年</span>
                       		 <span><?php echo $_POST['select8']; ?> 月</span>
                        </div>
                      
                    </div>
                     
                    
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['select11']; ?>
                        </div>
                        
                    </div>
                    <div class="clear"><span id="errorselect11"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">年収</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		 <?php echo $_POST['text17']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                     		<?php echo $_POST['text18']; ?>
                        </div>
                       
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear input_form">
                    	<div class="input_20 l">
                    	媒体
                        </div>
                       <div class="input_80 r confirm_txt_submit">
                    		<p><?php echo $_POST['select12']; ?></p>
                            <p><?php echo $_POST['text22']; ?></p>
                            <p><?php echo $_POST['select14']; ?></p>
                            <p><?php echo $_POST['select15']; ?></p>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
             </div>
             
             
            
             <div class="block_content clear">
             	<div class="form_back_button2 button-back back_from_confirm">
                	<a title="Back"  href="javascript:void(0);">
                    &lt;&nbsp;&nbsp;&nbsp;戻る
                    </a>
                </div>
                <div class="submit_form_button2">
               		 <input type="submit" value="申し込む   >" id="submit" name="Submit" class="button-confirm">
                    
                </div>
                
             </div>
             <!--***************************************************-->
             
             </form>
             
       </div><!--End content-->
    
    
   </div><!--end wrapper  -->   
</div><!--end headhunter_form_content  -->  
    
    
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
    <?php 
		//$google_check="entry";
	?>

<!-- Google Code for &#12473;&#12510;&#12507;&#12506;&#12540;&#12472;&#35370;&#21839; -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_label = "iNEACNis2CMQkPadzQM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=1.00&amp;currency_code=JPY&amp;label=iNEACNis2CMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
    
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>