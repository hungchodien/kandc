<?php
	ob_start();
	session_start();
?>
<?php
	@include('../config_mobile.php');
	
	if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
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
				 
				 /*xuong dong dat trong jquery*/
			
			
				/*het xuong dong*/
				  
				  
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
       		<?php 
				//if(isset($_SESSION['MemberName'])):
					include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
       		<p class="title_top_form yellow" style="float:left;">個別キャリア相談会</p>
			
           
       </div>
       	<form id="submit_form" method="post" action="">	
        <?php 
			$entry_id=$_GET['entry_id'];
			echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
        	
            <div class="page1 bg_white content_inside block_content">
            	<!--<h3 class="title_top_form clear">キャリア相談会お申込み</h3>
            	<div class="note_top_form_group clear">
                	<h4>お申し込みいただくにあたって</h4>
                    <p>転職に関するご相談、企業のご紹介など費用は全て無料ですので、ご安心下さい。</p>
                </div>--><!--note_top_form_group-->
            
            	<div class="group_txt_form clear" style="margin:0 0 20px 0;">
                	<div class="clear title_txt">希望相談会<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php //if(!empty($_POST)): $select1_sl= $_POST['select1']; endif; ?>
                       	 <!--<select id="select1" name="select1" class="selection">
                                <option value="">下記より選択してください</option>
                                <option value="「30代のキャリア構築」相談会" <?php if($select1_sl=='「30代のキャリア構築」相談会'):?> selected="selected"  <?php endif; ?>>「30代のキャリア構築」相談会</option>
                                <option value="「トップ営業マンのためのNEXTステージ」相談会" <?php if($select1_sl=='「トップ営業マンのためのNEXTステージ」相談会'):?> selected="selected"  <?php endif; ?>>「トップ営業マンのためのNEXTステージ」相談会</option>
                                <option value="「20代キャリア戦略の立て方」相談会" <?php if($select1_sl=='「20代キャリア戦略の立て方」相談会'):?> selected="selected"  <?php endif; ?>>「20代キャリア戦略の立て方」相談会</option>
                               <option value="「現役コンサルタントのための」キャリア相談会" <?php if($select1_sl=='「現役コンサルタントのための」キャリア相談会'):?> selected="selected"  <?php endif; ?>>「現役コンサルタントのための」キャリア相談会</option>
                               <option value="「人事（採用・制度企画）のための」キャリア相談会" <?php if($select1_sl=='「人事（採用・制度企画）のための」キャリア相談会'):?> selected="selected"  <?php endif; ?>>「人事（採用・制度企画）のための」キャリア相談会</option>
                           </select>-->
                           
                           <div class="input_form clear">
                            <?php if(!empty($_POST)): $select1_sl= $_POST['select1']; endif; ?>
                           		<div class="input_100">
              <label for="radio1"><input id="radio1" type="radio" <?php if($select1_sl=='「IT業界からのキャリアチェンジ」'):?> checked="checked" <?php endif; ?> value="「IT業界からのキャリアチェンジ」" name="select1">「IT業界からのキャリアチェンジ」相談会</label>
			 					</div>
                 			
              					<div class="input_100">
              <label for="radio3"><input id="radio3" type="radio" <?php if($select1_sl=='「20代キャリア戦略の立て方」'):?> checked="checked" <?php endif; ?> value="「20代キャリア戦略の立て方」" name="select1">「20代キャリア戦略の立て方」相談会</label>
			 					</div>
                              
                           </div>
                           
                           
                        </div>
                       
                    </div>
                    <div class="clear">
                   			 <span id="errorselect1"></span>
                    </div>
                </div><!--End Group txt-->
                
                <?php
                                $Data_news = To_Get_Data("career_form"," and career_formStatus = 0");
								
                                for($i = 0 ; $i<$Data_news['cnt']; $i++){
                                    $list = $Data_news[$i];
                                    if($list['career_formSubTitle'] == 1){
                                        $date1= htmlspecialchars_decode($list['career_formDescription']);
                                        $time1 = htmlspecialchars_decode($list['career_formContent']);
                                    } else if($list['career_formSubTitle'] == 2){
                                        $date2= htmlspecialchars_decode($list['career_formDescription']);
                                        $time2 = htmlspecialchars_decode($list['career_formContent']);
                                    }
                                }


                            ?>
                
                <div class="group_txt_form clear group_txt_form_select_fix">
                	<div class="clear title_txt">希望日時 </div>
                    <div class="clear input_form">
                    	<div class="clear">第1希望</div>
                    	<div class="input_100 clear" style="margin-bottom:10px;">
                        	<div class="input_40 l">
                            	<select onfocus="click_text(this.id)" name="select2" id="select2" class="selection">
                                    <?php echo $date1; ?>
                            	</select>
                        	</div>
                            <div class="input_20 l">
                           	 	<select onfocus="click_text(this.id)" name="select3" id="select3" class="selection bg-text">
                               	 	 <?php echo $time1; ?>                           
                                </select>
                        	</div>
                            <div class="input_width_52 l">スタート</div>
                        </div><!--input_100-->
                       
                        <div class="clear">第2希望</div>
                        <div class="input_100 clear">
                        	
                            <div class="input_40 l">
                           	 	<select onfocus="click_text(this.id)" name="select4" id="select4" class="selection selection-style">
                                	 <?php echo $date2; ?>                         
                                </select>
                        	</div>
                            <div class="input_20 l">
                           		<select onfocus="click_text(this.id)" name="select5" id="select5" class="selection">
                               		 <?php echo $time1; ?>                               
                                </select>
                        	</div>
                            <div class="input_width_52 l">スタート</div>
                        </div><!--input_100-->
                    </div>
                   
                    <div class="clear">
                      	<p style="padding:10px 0 5px;">※ご希望日時に関しての補足などがございましたらご入力下さい</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                       	 <input id="text15" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text15']; endif; ?>" name="text15" />
                        </div>
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
                       	<select id="select6" name="select6" class="selection selection-style">
                               <option value="">　選択</option>
                                <?php $star = 1933;
                                $end = 1998;
                                for ($end; $star <= $end; $end--) {
                                    ?>
                                    <option value="<?php echo $end ?>" 
                                    <?php if(!empty($_POST)): $select6_sl= (int)$_POST['select6']; ?>
                                    		<?php if($end==$select6_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                     ><?php echo $end ?></option>
                                <?php } ?>
                                                                    
                                                            </select>
                        </div>
                        <div class="input_50 r">
                       	 <select id="select7" name="select7" class="selection selection-style">
                                <option value="">　選択</option>
                            <?php $moth = 1;
                            $endMoth = 12;
                            for ($moth; $moth <= $endMoth; $moth++) {
                                ?>
                                <option value="<?php echo $moth ?>"
                                
                                <?php if(!empty($_POST)): $select7_sl= (int)$_POST['select7']; ?>
                                    		<?php if($moth==$select7_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                     
                                ><?php echo $moth ?></option>
                            <?php } ?>
                                                           
                                                        </select>
                        </div>
                        </div>
                         <div class="input_30_n r">
                       	<select id="select8" name="select8" class="selection selection-style">
                                <option value="">選択</option>
                            <?php $day = 1;
                            $endDay = 31;
                            for ($day; $day <= $endDay; $day++) {
                                ?>
                                <option value="<?php echo $day ?>" 
                                 <?php if(!empty($_POST)): $select8_sl= (int)$_POST['select8']; ?>
                                    		<?php if($day==$select8_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     <?php endif; ?>
                                ><?php echo $day ?></option>
                            <?php } ?>
                                                            
                                                        </select>
                        </div>
                    </div>
                        <div class="clear">
                     	   <span id="errorselect678"></span>
                       </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">都道府県 <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php if(!empty($_POST)): $select9_sl= $_POST['select9']; endif; ?>
                       	 <select id="select9" name="select9" class="selection">
                                <option value="">都道府県を選択してください。</option>
                                <option value="東京都" <?php if($select9_sl=='東京都'):?> selected="selected"  <?php endif; ?>>東京都</option>
                                <option value="千葉県" <?php if($select9_sl=='千葉県'):?> selected="selected"  <?php endif; ?>>千葉県</option>
                                 <option value="埼玉県" <?php if($select9_sl=='埼玉県'):?> selected="selected"  <?php endif; ?>>埼玉県</option>
                               <option value="神奈川県" <?php if($select9_sl=='神奈川県'):?> selected="selected"  <?php endif; ?>>神奈川県</option>
                                     <option value='' >---------</option>
                               <option value="北海道" <?php if($select9_sl=='北海道'):?> selected="selected"  <?php endif; ?>>北海道</option>
                               <option value="青森県" <?php if($select9_sl=='青森県'):?> selected="selected"  <?php endif; ?>>青森県</option>
                               <option value="岩手県" <?php if($select9_sl=='岩手県'):?> selected="selected"  <?php endif; ?>>岩手県</option>
                               <option value="宮城県" <?php if($select9_sl=='宮城県'):?> selected="selected"  <?php endif; ?>>宮城県</option>
                               <option value="秋田県" <?php if($select9_sl=='秋田県'):?> selected="selected"  <?php endif; ?>>秋田県</option>
                               <option value="山形県" <?php if($select9_sl=='山形県'):?> selected="selected"  <?php endif; ?>>山形県</option>
                               <option value="福島県" <?php if($select9_sl=='福島県'):?> selected="selected"  <?php endif; ?>>福島県</option>
                               <option value="茨城県" <?php if($select9_sl=='茨城県'):?> selected="selected"  <?php endif; ?>>茨城県</option>
                               <option value="栃木県" <?php if($select9_sl=='栃木県'):?> selected="selected"  <?php endif; ?>>栃木県</option>
                               <option value="群馬県" <?php if($select9_sl=='群馬県'):?> selected="selected"  <?php endif; ?>>群馬県</option>
                               <option value="埼玉県" <?php if($select9_sl=='埼玉県'):?> selected="selected"  <?php endif; ?>>埼玉県</option>
                               <option value="千葉県" <?php if($select9_sl=='千葉県'):?> selected="selected"  <?php endif; ?>>千葉県</option>
                               <option value="東京都" <?php if($select9_sl=='東京都'):?> selected="selected"  <?php endif; ?>>東京都</option>
                               <option value="神奈川県" <?php if($select9_sl=='神奈川県'):?> selected="selected"  <?php endif; ?>>神奈川県</option>
                               <option value="新潟県" <?php if($select9_sl=='新潟県'):?> selected="selected"  <?php endif; ?>>新潟県</option>
                               <option value="富山県" <?php if($select9_sl=='富山県'):?> selected="selected"  <?php endif; ?>>富山県</option>
                               <option value="石川県" <?php if($select9_sl=='石川県'):?> selected="selected"  <?php endif; ?>>石川県</option>
                               <option value="福井県" <?php if($select9_sl=='福井県'):?> selected="selected"  <?php endif; ?>>福井県</option>
                               <option value="山梨県" <?php if($select9_sl=='山梨県'):?> selected="selected"  <?php endif; ?>>山梨県</option>
                               <option value="長野県" <?php if($select9_sl=='長野県'):?> selected="selected"  <?php endif; ?>>長野県</option>
                               <option value="岐阜県" <?php if($select9_sl=='岐阜県'):?> selected="selected"  <?php endif; ?>>岐阜県</option>
                               <option value="静岡県" <?php if($select9_sl=='静岡県'):?> selected="selected"  <?php endif; ?>>静岡県</option>
                               <option value="愛知県" <?php if($select9_sl=='愛知県'):?> selected="selected"  <?php endif; ?>>愛知県</option>
                               <option value="三重県" <?php if($select9_sl=='三重県'):?> selected="selected"  <?php endif; ?>>三重県</option>
                               <option value="滋賀県" <?php if($select9_sl=='滋賀県'):?> selected="selected"  <?php endif; ?>>滋賀県</option>
                               <option value="京都府" <?php if($select9_sl=='京都府'):?> selected="selected"  <?php endif; ?>>京都府</option>
                               <option value="大阪府" <?php if($select9_sl=='大阪府'):?> selected="selected"  <?php endif; ?>>大阪府</option>
                               <option value="兵庫県" <?php if($select9_sl=='兵庫県'):?> selected="selected"  <?php endif; ?>>兵庫県</option>
                               <option value="奈良県" <?php if($select9_sl=='奈良県'):?> selected="selected"  <?php endif; ?>>奈良県</option>
                               <option value="和歌山県" <?php if($select9_sl=='和歌山県'):?> selected="selected"  <?php endif; ?>>和歌山県</option>
                               <option value="鳥取県" <?php if($select9_sl=='鳥取県'):?> selected="selected"  <?php endif; ?>>鳥取県</option>
                               <option value="島根県" <?php if($select9_sl=='島根県'):?> selected="selected"  <?php endif; ?>>島根県</option>
                               <option value="岡山県" <?php if($select9_sl=='岡山県'):?> selected="selected"  <?php endif; ?>>岡山県</option>
                               <option value="広島県" <?php if($select9_sl=='広島県'):?> selected="selected"  <?php endif; ?>>広島県</option>
                               <option value="山口県" <?php if($select9_sl=='山口県'):?> selected="selected"  <?php endif; ?>>山口県</option>
                               <option value="徳島県" <?php if($select9_sl=='徳島県'):?> selected="selected"  <?php endif; ?>>徳島県</option>
                               <option value="香川県" <?php if($select9_sl=='香川県'):?> selected="selected"  <?php endif; ?>>香川県</option>
                               <option value="愛媛県" <?php if($select9_sl=='愛媛県'):?> selected="selected"  <?php endif; ?>>愛媛県</option>
                               <option value="高知県" <?php if($select9_sl=='高知県'):?> selected="selected"  <?php endif; ?>>高知県</option>
                               <option value="福岡県" <?php if($select9_sl=='福岡県'):?> selected="selected"  <?php endif; ?>>福岡県</option>
                               <option value="佐賀県" <?php if($select9_sl=='佐賀県'):?> selected="selected"  <?php endif; ?>>佐賀県</option>
                               <option value="長崎県" <?php if($select9_sl=='長崎県'):?> selected="selected"  <?php endif; ?>>長崎県</option>
                               <option value="熊本県" <?php if($select9_sl=='熊本県'):?> selected="selected"  <?php endif; ?>>熊本県</option>
                               <option value="大分県" <?php if($select9_sl=='大分県'):?> selected="selected"  <?php endif; ?>>大分県</option>
                               <option value="宮崎県" <?php if($select9_sl=='宮崎県'):?> selected="selected"  <?php endif; ?>>宮崎県</option>
                               <option value="鹿児島県" <?php if($select9_sl=='鹿児島県'):?> selected="selected"  <?php endif; ?>>鹿児島県</option>
                               <option value="沖縄県" <?php if($select9_sl=='沖縄県'):?> selected="selected"  <?php endif; ?>>沖縄県</option>
                               <option value="海外" <?php if($select9_sl=='海外'):?> selected="selected"  <?php endif; ?>>海外</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="clear">
                    	<span id="errorselect9"></span>
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
                	<div class="clear title_txt">学校名<span class="notice">※</span></div>
                    <div class="clear input_form">
                   		
                        <div class="input_100 l">
                       <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text9']; endif; ?>" id="text9" name="text9" onfocus="click_text(this.id)"　style="ime-mode:disabled;"/>
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext9"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名</div>
                    <div class="clear input_form">
                    	<div class="input_100 l">
                       		<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text10']; endif; ?>" id="text10" name="text10" onfocus="click_text(this.id)"/>
                        </div>
                       <!-- <div class="input_20 r">
                       	 <input type="text" value="" id="text15" name="text15"/>
                        </div>-->
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">業種<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php if(!empty($_POST)): $select10_sl= $_POST['select10']; endif; ?>
                       	 <select id="select10" name="select10" class="selection">
                               <option value="">下記より選択してください</option>
			                    <option value="コンピュータ（ハード）" <?php if($select10_sl=='コンピュータ（ハード）'):?> selected="selected"  <?php endif; ?>>コンピュータ（ハード）</option>
			                    <option value="コンピュータ（ソフト）" <?php if($select10_sl=='コンピュータ（ソフト）'):?> selected="selected"  <?php endif; ?>>コンピュータ（ソフト）</option>
			                    <option value="コンピュータ（システム）" <?php if($select10_sl=='コンピュータ（システム）'):?> selected="selected"  <?php endif; ?>>コンピュータ（システム）</option>
			                    <option value="インターネット" <?php if($select10_sl=='インターネット'):?> selected="selected"  <?php endif; ?>>インターネット</option>
			                    <option value="ネットワーク" <?php if($select10_sl=='ネットワーク'):?> selected="selected"  <?php endif; ?>>ネットワーク</option>
			                    <option value="通信キャリア" <?php if($select10_sl=='通信キャリア'):?> selected="selected"  <?php endif; ?>>通信キャリア</option>
			                    <option value="戦略コンサルティングファーム" <?php if($select10_sl=='戦略コンサルティングファーム'):?> selected="selected"  <?php endif; ?>>戦略コンサルティングファーム</option>
			                    <option value="人事・組織コンサルティングファーム" <?php if($select10_sl=='人事・組織コンサルティングファーム'):?> selected="selected"  <?php endif; ?>>人事・組織コンサルティングファーム</option>
			                    <option value="会計・システムコンサルティングファーム" <?php if($select10_sl=='会計・システムコンサルティングファーム'):?> selected="selected"  <?php endif; ?>>会計・システムコンサルティングファーム</option>
			                    <option value="その他コンサルティングファーム" <?php if($select10_sl=='その他コンサルティングファーム'):?> selected="selected"  <?php endif; ?>>その他コンサルティングファーム</option>
			                    <option value="シンクタンク" <?php if($select10_sl=='シンクタンク'):?> selected="selected"  <?php endif; ?>>シンクタンク</option>
			                    <option value="人材紹介・派遣" <?php if($select10_sl=='人材紹介・派遣'):?> selected="selected"  <?php endif; ?>>人材紹介・派遣</option>
			                    <option value="情報サービス" <?php if($select10_sl=='情報サービス'):?> selected="selected"  <?php endif; ?>>情報サービス</option>
			                    <option value="ベンチャーキャピタル" <?php if($select10_sl=='ベンチャーキャピタル'):?> selected="selected"  <?php endif; ?>>ベンチャーキャピタル</option>
			                    <option value="銀行" <?php if($select10_sl=='銀行'):?> selected="selected"  <?php endif; ?>>銀行</option>
			                    <option value="証券" <?php if($select10_sl=='証券'):?> selected="selected"  <?php endif; ?>>証券</option>
			                    <option value="生保" <?php if($select10_sl=='生保'):?> selected="selected"  <?php endif; ?>>生保</option>
			                    <option value="損保" <?php if($select10_sl=='損保'):?> selected="selected"  <?php endif; ?>>損保</option>
			                    <option value="その他金融" <?php if($select10_sl=='その他金融'):?> selected="selected"  <?php endif; ?>>その他金融</option>
			                    <option value="機械" <?php if($select10_sl=='機械'):?> selected="selected"  <?php endif; ?>>機械</option>
			                    <option value="電気・電子・半導体" <?php if($select10_sl=='電気・電子・半導体'):?> selected="selected"  <?php endif; ?>>電気・電子・半導体</option>
			                    <option value="輸送機器・自動車（部品）" <?php if($select10_sl=='輸送機器・自動車（部品）'):?> selected="selected"  <?php endif; ?>>輸送機器・自動車（部品）</option>
			                    <option value="プラント設備関連" <?php if($select10_sl=='プラント設備関連'):?> selected="selected"  <?php endif; ?>>プラント設備関連</option>
			                    <option value="バイオ・メディカル" <?php if($select10_sl=='バイオ・メディカル'):?> selected="selected"  <?php endif; ?>>バイオ・メディカル</option>
			                    <option value="化学" <?php if($select10_sl=='化学'):?> selected="selected"  <?php endif; ?>>化学</option>
			                    <option value="エネルギー" <?php if($select10_sl=='エネルギー'):?> selected="selected"  <?php endif; ?>>エネルギー</option>
			                    <option value="不動産" <?php if($select10_sl=='不動産'):?> selected="selected"  <?php endif; ?>>不動産</option>
			                    <option value="建設・建築・土木" <?php if($select10_sl=='建設・建築・土木'):?> selected="selected"  <?php endif; ?>>建設・建築・土木</option>
			                    <option value="マーケティング関連" <?php if($select10_sl=='マーケティング関連'):?> selected="selected"  <?php endif; ?>>マーケティング関連</option>
			                    <option value="広告代理店" <?php if($select10_sl=='広告代理店'):?> selected="selected"  <?php endif; ?>>広告代理店</option>
			                    <option value="広告制作" <?php if($select10_sl=='広告制作'):?> selected="selected"  <?php endif; ?>>広告制作</option>
			                    <option value="出版・マスコミ" <?php if($select10_sl=='出版・マスコミ'):?> selected="selected"  <?php endif; ?>>出版・マスコミ</option>
			                    <option value="教育・研修" <?php if($select10_sl=='教育・研修'):?> selected="selected"  <?php endif; ?>>教育・研修</option>
			                    <option value="アミューズメント・エンターテインメント" <?php if($select10_sl=='アミューズメント・エンターテインメント'):?> selected="selected"  <?php endif; ?>>アミューズメント・エンターテインメント</option>
			                    <option value="旅行・ホテル" <?php if($select10_sl=='旅行・ホテル'):?> selected="selected"  <?php endif; ?>>旅行・ホテル</option>
			                    <option value="食品・飲料" <?php if($select10_sl=='食品・飲料'):?> selected="selected"  <?php endif; ?>>食品・飲料</option>
			                    <option value="トイレタリー・日用品" <?php if($select10_sl=='トイレタリー・日用品'):?> selected="selected"  <?php endif; ?>>トイレタリー・日用品</option>
			                    <option value="化粧品・健康食品" <?php if($select10_sl=='化粧品・健康食品'):?> selected="selected"  <?php endif; ?>>化粧品・健康食品</option>
			                    <option value="アパレル・ブランド" <?php if($select10_sl=='アパレル・ブランド'):?> selected="selected"  <?php endif; ?>>アパレル・ブランド</option>
			                    <option value="その他消費財" <?php if($select10_sl=='その他消費財'):?> selected="selected"  <?php endif; ?>>その他消費財</option>
			                    <option value="流通・小売・販売" <?php if($select10_sl=='流通・小売・販売'):?> selected="selected"  <?php endif; ?>>流通・小売・販売</option>
			                    <option value="総合商社" <?php if($select10_sl=='総合商社'):?> selected="selected"  <?php endif; ?>>総合商社</option>
			                    <option value="専門商社" <?php if($select10_sl=='専門商社'):?> selected="selected"  <?php endif; ?>>専門商社</option>
			                    <option value="運輸・物流" <?php if($select10_sl=='運輸・物流'):?> selected="selected"  <?php endif; ?>>運輸・物流</option>
			                    <option value="その他メーカー" <?php if($select10_sl=='その他メーカー'):?> selected="selected"  <?php endif; ?>>その他メーカー</option>
			                    <option value="その他サービス" <?php if($select10_sl=='その他サービス'):?> selected="selected"  <?php endif; ?>>その他サービス</option>
			                    <option value="特殊法人" <?php if($select10_sl=='特殊法人'):?> selected="selected"  <?php endif; ?>>特殊法人</option>
			                    <option value="その他" <?php if($select10_sl=='その他'):?> selected="selected"  <?php endif; ?>>その他</option>
                           </select>
                        </div>
                       
                    </div>
                    <div class="clear">
                   			 <span id="errorselect10"></span>
                    </div>
                </div><!--End Group txt-->
                
               
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	勤務期間<span class="notice">※</span>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_60_n l">
                    	<div class="input_50 l">
                       		<select class="selection selection-style" name="select15" id="select15">
                                    <option value=""> 選択</option>
                                    <?php $year = 1940;
                                    $end = date("Y");
                                    for ($end; $year <= $end; $end--) {
                                        ?>
                                        <option value="<?php echo $end ?>" 
                                          <?php if(!empty($_POST)): $select15_sl= (int)$_POST['select15']; ?>
                                    		<?php if($end==$select15_sl): ?>
                                     			selected="selected"
                                     		<?php endif; ?>
                                     	<?php endif; ?>
                                        
                                        ><?php echo $end ?></option>
                                    <?php } ?>
                            </select>
                        </div>
						
                        <div class="input_50 r">
                       	 <select class="selection selection-style" name="select16" id="select16">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth ?>"
                                    <?php if(!empty($_POST)): $select16_sl= (int)$_POST['select16']; ?>
                                    		<?php if($moth==$select16_sl): ?>
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
                     
                    <div class="clear"><span  id="errorselect1516"></span></div>
                    
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
                	<div class="clear title_txt">職務内容<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100 l">
                       	 <textarea value="<?php if(!empty($_POST)): echo $_POST['text11']; endif; ?>" id="text11" name="text11" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text11']; endif; ?></textarea>
                     	</div>
                    </div>
                     <div class="clear"><span  id="errortext11"></span></div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">その他職歴</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea value="<?php if(!empty($_POST)): echo $_POST['text12']; endif; ?>" id="text12" name="text12" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text12']; endif; ?></textarea>
                        </div>
                       
                        
                    </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">転職について</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                        <?php if(!empty($_POST)): $select12_sl= $_POST['select12']; endif; ?>
                       	 <select id="select12" name="select12" class="selection">
                               <option>下記から選択してください</option>
                                <option value="今すぐ" <?php if($select12_sl=='今すぐ'):?> selected="selected"  <?php endif; ?>>今すぐ</option>
                                <option value="3ヶ月以内" <?php if($select12_sl=='3ヶ月以内'):?> selected="selected"  <?php endif; ?>>3ヶ月以内</option>
                                <option value="3ヶ月〜6ヶ月" <?php if($select12_sl=='3ヶ月〜6ヶ月'):?> selected="selected"  <?php endif; ?>>3ヶ月〜6ヶ月</option>
                                <option value="6ヶ月〜1年" <?php if($select12_sl=='6ヶ月〜1年'):?> selected="selected"  <?php endif; ?>>6ヶ月〜1年</option>
                                <option value="良い企業があれば" <?php if($select12_sl=='良い企業があれば'):?> selected="selected"  <?php endif; ?>>良い企業があれば</option>
                                <option value="未定" <?php if($select12_sl=='未定'):?> selected="selected"  <?php endif; ?>>未定</option>
                           </select>
                        </div>
                       
                    </div>
                    <div class="clear">
                   			 <span id="errorselect9"></span>&nbsp;&nbsp;<span id="errorselect9"></span>
                    </div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">ご相談要望等</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea value="<?php if(!empty($_POST)): echo $_POST['text13']; endif; ?>" id="text13" name="text13" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text13']; endif; ?></textarea>
                        </div>
                       
                        
                    </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->
                
                
                
                
                  <div class="group_txt_form clear">
                  	<div class="clear title_txt">何をご覧になってアクセス頂きましたか？</div>
                    
                    
                	
                    <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('#text14').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						
							$('#select13').change(function(){

								$("#text14").val("");
								$("#select14").val("");

								if($('#select13').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select13').val() == '紹介（クライスにご登録している方より）' || $('#select13').val() == '紹介（クライスのご登録者以外より）') 
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
                        <?php if(!empty($_POST)): $select13_sl= $_POST['select13']; endif; ?>
                    	 <select id="select13" name="select13"  class="selection">
                                <option value="">下記から選択してください</option>
                                <option value="Google" <?php if($select13_sl=='Google'):?> selected="selected"  <?php endif; ?>>Google</option>
                                <option value="Yahoo" <?php if($select13_sl=='Yahoo'):?> selected="selected"  <?php endif; ?>>Yahoo</option>
                                <option value="その他検索エンジン" <?php if($select13_sl=='その他検索エンジン'):?> selected="selected"  <?php endif; ?>>その他検索エンジン</option>
                                <option value="en転職コンサルタント" <?php if($select13_sl=='en転職コンサルタント'):?> selected="selected"  <?php endif; ?>>en転職コンサルタント</option>
                                <option value="日経キャリアNET" <?php if($select13_sl=='日経キャリアNET'):?> selected="selected"  <?php endif; ?>>日経キャリアNET</option>
                                <option value="リクナビNEXT" <?php if($select13_sl=='リクナビNEXT'):?> selected="selected"  <?php endif; ?>>リクナビNEXT</option>
                                <option value="キャリアカバー" <?php if($select13_sl=='キャリアカバー'):?> selected="selected"  <?php endif; ?>>キャリアカバー</option>
                                <option value="ビズリーチ" <?php if($select13_sl=='ビズリーチ'):?> selected="selected"  <?php endif; ?>>ビズリーチ</option>
                                <option value="その他WEBサイト" <?php if($select13_sl=='その他WEBサイト'):?> selected="selected"  <?php endif; ?>>その他WEBサイト</option>
                                <option value="駅広告" <?php if($select13_sl=='駅広告'):?> selected="selected"  <?php endif; ?>>駅広告</option>
                                <option value="メルマガ（面接官の本音）" <?php if($select13_sl=='メルマガ（面接官の本音）'):?> selected="selected"  <?php endif; ?>>メルマガ（面接官の本音）</option>
                                <option value="メルマガ（ヘッドハンターの目）" <?php if($select13_sl=='メルマガ（ヘッドハンターの目）'):?> selected="selected"  <?php endif; ?>>メルマガ（ヘッドハンターの目）</option>
                                <option value="メルマガ（キャリアアップコラム）" <?php if($select13_sl=='メルマガ（キャリアアップコラム）'):?> selected="selected"  <?php endif; ?>>メルマガ（キャリアアップコラム）</option>
                                <option value="紹介（クライスにご登録している方より）" <?php if($select13_sl=='紹介（クライスにご登録している方より）'):?> selected="selected"  <?php endif; ?>>紹介（クライスにご登録している方より）</option>
                                <option value="紹介（クライスのご登録者以外より）" <?php if($select13_sl=='紹介（クライスのご登録者以外より）'):?> selected="selected"  <?php endif; ?>>紹介（クライスのご登録者以外より）</option>
                                <option value="その他" <?php if($select13_sl=='その他'):?> selected="selected"  <?php endif; ?>>その他</option>
                            </select>
                        </div>
                        
                        
                   
                    
                    <div style="margin: 5px 0px; display: none;" class="clear select_show1">
                        <div style="float:none; padding:5px 0;" class="clear">※具体的にお教えください（50文字以内）</div>
                        <div style="float:none;" class="clear">
                        	<textarea onfocus="click_text(this.id)" value="" id="text14" name="text14" type="text" style="margin-bottom: 10px"><?php if(!empty($_POST)): echo $_POST['text14']; endif; ?></textarea>
                        </div>
                    </div><!--select_show1-->
                    <div style="margin: 5px 0px; display: none;" class="select_show2 clear">
                            <div class="clear" style="float:none; padding:5px 0;">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                            <?php if(!empty($_POST)): $select14_sl= $_POST['select14']; endif; ?>
                             <select onfocus="click_text(this.id)" id="select14" name="select14"  class="selection">
                                            <option value="">下記から選択してください</option>
                                            <option value="岡田 麗" <?php if($select14_sl=='岡田 麗'):?> selected="selected"  <?php endif; ?>>岡田 麗</option>
                                            <option value="奈良 元生" <?php if($select14_sl=='奈良 元生'):?> selected="selected"  <?php endif; ?>>奈良 元生</option>
                                            <option value="半藤 剛" <?php if($select14_sl=='半藤 剛'):?> selected="selected"  <?php endif; ?>>半藤 剛</option>
                                            <option value="松尾 匡起" <?php if($select14_sl=='松尾 匡起'):?> selected="selected"  <?php endif; ?>>松尾 匡起</option>
                                            <option value="入江 祥之" <?php if($select14_sl=='入江 祥之'):?> selected="selected"  <?php endif; ?>>入江 祥之</option>             
                                            <option value="武田 直人" <?php if($select14_sl=='武田 直人'):?> selected="selected"  <?php endif; ?>>武田 直人</option>
                                            <option value="永田 憲章" <?php if($select14_sl=='永田 憲章'):?> selected="selected"  <?php endif; ?>>永田 憲章</option>
                                            <option value="細野 聡" <?php if($select14_sl=='細野 聡'):?> selected="selected"  <?php endif; ?>>細野 聡</option> 
                                          <option value="工藤 直亮" <?php if($select14_sl=='工藤 直亮'):?> selected="selected"  <?php endif; ?>>工藤 直亮</option>
                                            <option value="神田 昭子" <?php if($select14_sl=='神田 昭子'):?> selected="selected"  <?php endif; ?>>神田 昭子</option>
                                            <option value="小田 麻耶" <?php if($select14_sl=='小田 麻耶'):?> selected="selected"  <?php endif; ?>>小田 麻耶</option>
                                            <option value="神宮司 篤子" <?php if($select14_sl=='神宮司 篤子'):?> selected="selected"  <?php endif; ?>>神宮司 篤子</option>
                                            <option value="棚澤 啓介" <?php if($select14_sl=='棚澤 啓介'):?> selected="selected"  <?php endif; ?>>棚澤 啓介</option>
                                            <option value="丸山 貴宏" <?php if($select14_sl=='丸山 貴宏'):?> selected="selected"  <?php endif; ?>>丸山 貴宏</option>
                             </select>
                            </div>
                        </div><!--select_show2-->
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    
                    
                </div><!--End Group txt--> 
                
                
                
                <div class="page1 block_content clear">
	             	<div class="submit_form_button">
	               		 <input type="submit" value="内容確認へ   >" id="submit" name="Submit" class="button-confirm">
	                    
	                </div>
               <?php /*?> <div class="form_back_button button-back">
                	<a title="n-page2" class="next_page2">
                     < &nbsp;&nbsp;&nbsp;より詳しい内容を登録する
                    </a>
                </div><?php */?>
                
             		</div>
                
             </div>
             <!--****************************************************-->
             
             
             <!--****************************************************-->
             
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
       		<?php 
				//if(isset($_SESSION['MemberName'])):
					include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
       		<p class="title_top_form yellow" style="float:left;">個別キャリア相談会</p>
           
       </div>
       <?php
	   		
			$prev_input = "";
			$prev_input1 = "";
			$prev_radio = "";
			for ($i = 1; $i < 16; $i++):
				$col = "text{$i}";
				$val = $_POST["text" . $i];
				$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			endfor;
			$user_email = $_POST['text8'];
			for ($j = 1; $j < 17; $j++):
				$col1 = "select{$j}";
				$val2 = $_POST["select" . $j];
				$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
			
			endfor;
			//$radio1=$_POST['radio1'];
			$entry_id = $_POST['entry_id'];
			$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			//$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
			echo $prev_input1;
			echo $prev_radio;

		?>
        	
               <div class="bg_white content_inside block_content">
            
            	
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">希望相談会</div>
                    <div class="clear input_form">
                    	<div class="input_100 l confirm_txt_submit">
                       		<?php echo $_POST['select1']; ?>
                        </div>
                        
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">希望日時 </div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		第1希望  <?php echo $_POST['select2']; ?> <?php echo $_POST['select3']; ?>  スタート
						</div>
                        <div class="input_100 clear confirm_txt_submit">
                       		第2希望  <?php echo $_POST['select4']; ?> <?php echo $_POST['select5']; ?> スタート
                        </div>
                        <div class="input_100 clear confirm_txt_submit">
                        	<p>※ご希望日時に関しての補足などがございましたらご入力下さい</p>
                            <p><?php echo $_POST['text15']; ?></p>
                        </div>
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
                    		<span><?php echo $_POST['select6'] ?> 年</span>
                            <span><?php echo $_POST['select7']; ?> 月</span>
                            <span><?php echo $_POST['select8']; ?> 日</span>
                         </div>
                    </div>
                      
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">都道府県</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       	 	<?php echo $_POST['select9']; ?>
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
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">学校名</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text9']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text10']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l confirm_txt_submit">
                    		<span><?php echo $_POST['select15']; ?> 年</span>
                       		 <span><?php echo $_POST['select16']; ?> 月</span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">業種</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['select10']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['select11']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text11']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">その他職歴</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text12']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">転職について</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['select12']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">ご相談要望等</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text13']; ?>   </span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear input_form">
                    	<div class="input_20 l">
                    	媒体
                        </div>
                       <div class="input_80 r confirm_txt_submit">
                    		<p><?php echo $_POST['select13']; ?></p>
                            <p><?php echo str_replace("\n","<br/>",$_POST['text14']); ?></p>
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
    
    
    
    <div class="inside display_block clear">
    	<?php //include('../inc/menu_interview.php'); ?>
		<?php //include ('../inc/page_footer.php');?>
    </div>
    
    
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
    <?php 
		//$google_check="entry";
	?>


    
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>