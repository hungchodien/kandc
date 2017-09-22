<?php
	ob_start();
?>
<?php
	@include('../config_mobile.php');
	
	
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
	$url_curent_check = curPageURL1();

if (strpos($url_curent_check, 'kreisandcompany.sakura.ne.jp') !== false) {

	if ($protocol == 'https:' || $protocol == 'HTTPS:') {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		header("HTTP/1.1 301 Moved Permanently");
		header('Location:'.$url_kandc_primary);
	} else {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		$entry_protocol    = str_replace('http', 'https', $url_kandc_primary);
		header("HTTP/1.1 301 Moved Permanently");
		header('Location:'.$entry_protocol);
	}

} else {

	if ($protocol == 'http:' || $protocol == 'HTTP:') {
		if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.'):
			$entry_protocol = str_replace('http://', 'https://www.', $url_curent_check);
			header("HTTP/1.1 301 Moved Permanently");
			header('Location:'.$entry_protocol);
		else:
			$entry_protocol = str_replace('http', 'https', $url_curent_check);
			header("HTTP/1.1 301 Moved Permanently");
			header('Location:'.$entry_protocol);
		endif;

	}else{

		if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.'):
			$entry_protocol = str_replace('https://', 'https://www.', $url_curent_check);
			header("HTTP/1.1 301 Moved Permanently");
			header('Location:'.$entry_protocol);
		endif;

	}

}
	@include('../inc/header.php'); 
?>
	 <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
			
					$('#top_site #menu_btn').css("display", "none");
					
					var allRadios1 = document.getElementsByName('s1');
					var booRadio1;
					var x1 = 0;
					for(x1 = 0; x1 < allRadios1.length; x1++){
					
							allRadios1[x1].onclick = function(){
					
								if(booRadio1 == this){
									this.checked = false;
							booRadio1 = null;
								}else{
								booRadio1 = this;
							}
							};
					
					 }
					var allRadios2 = document.getElementsByName('s2');
					var booRadio2;
					var x2 = 0;
					for(x2 = 0; x2 < allRadios2.length; x2++){
					
							allRadios2[x2].onclick = function(){
					
								if(booRadio2 == this){
									this.checked = false;
							booRadio2 = null;
								}else{
								booRadio2 = this;
							}
							};
					
					 }
					 var allRadios3 = document.getElementsByName('s3');
					var booRadio3;
					var x3 = 0;
					for(x3 = 0; x3 < allRadios3.length; x3++){
					
							allRadios3[x3].onclick = function(){
					
								if(booRadio3 == this){
									this.checked = false;
							booRadio3 = null;
								}else{
								booRadio3 = this;
							}
							};
					
					 }
					var allRadios4 = document.getElementsByName('s4');
					var booRadio4;
					var x4 = 0;
					for(x4 = 0; x4 < allRadios4.length; x4++){
					
							allRadios4[x4].onclick = function(){
					
								if(booRadio4 == this){
									this.checked = false;
							booRadio4 = null;
								}else{
								booRadio4 = this;
							}
							};
					
					 }
					 var allRadios5 = document.getElementsByName('s5');
					var booRadio5;
					var x5 = 0;
					for(x5 = 0; x5 < allRadios5.length; x5++){
					
							allRadios5[x5].onclick = function(){
					
								if(booRadio5 == this){
									this.checked = false;
							booRadio5 = null;
								}else{
								booRadio5 = this;
							}
							};
					
					 }
					var allRadios6 = document.getElementsByName('s6');
					var booRadio6;
					var x6 = 0;
					for(x6 = 0; x6 < allRadios6.length; x6++){
					
							allRadios6[x6].onclick = function(){
					
								if(booRadio6 == this){
									this.checked = false;
							booRadio6 = null;
								}else{
								booRadio6 = this;
							}
							};
					
					 }
					var allRadios7 = document.getElementsByName('s7');
					var booRadio7;
					var x7 = 0;
					for(x7 = 0; x7 < allRadios7.length; x7++){
					
							allRadios7[x7].onclick = function(){
					
								if(booRadio7 == this){
									this.checked = false;
							booRadio7 = null;
								}else{
								booRadio7 = this;
							}
							};
					
					 }
		 });
    </script>
    <script src="validate_form_entry.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<!--Content-->

		 <style type="text/css">

	@media screen and (-webkit-min-device-pixel-ratio:0) {  
    	#submit_form input[type="radio"]{
			-webkit-appearance: none;
			background-color: #fafafa;
			border: 1px solid #cacece;
			box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
			padding: 6px;
			border-radius: 50px;
			display: inline-block;
			position: relative;
			
		}
		
    	#submit_form input[type="radio"]:checked:after {
			content: ' ';
			width: 8px;
			height: 8px;
			border-radius: 50px;
			position: absolute;
			top: 2px;
			background: #000;
			box-shadow: inset 0px 0px 10px rgba(0,0,0,0.3);
			text-shadow: 0px;
			left: 2px;
			font-size: 32px;
		}
		textarea#s8{
			height:100px;
			}

		}
    </style>


        <!--<div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">サービス満足度アンケート</p>
            <p class="sub_title_top_form while_txt clear">以下は当社が大切にしているポイントです。<br>
皆さまのご評価、ならびに今後の参考のためにお気づきの点がございましたら是非お聞かせ下さい。</p>
       </div>
       	<form id="submit_form" method="post" action="confirm.php" class="questionnaire-interview">	
       
        	<input type="hidden" name="key" value="<?php echo isset($_GET["key"])?$_GET["key"]:''; ?>" id="key_id"/>
            <div class="bg_white content_inside block_content mobile_entry_question" >
            
            	<div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">氏名<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		 <input class="text-personal-400" type="text" name="s-1" id="s-1" onfocus="click_text(this.id)" value="" onblur="validatetext(this.value,this.id)" style="ime-mode:disabled;" />
                        </div>
                         
                    </div>
                    <div class="clear"><span id="errors-1"></span></div>
                </div><!--End Group txt-->
                

                <div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">担当コンサルタント名<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		 <?php /* ?><input class="consultant-name" type="text" name="s0" id="s0" onfocus="click_text(this.id)" value="" onblur="validatetext(this.value,this.id)" style="ime-mode:disabled;" /><?php */ ?>
                            <select id="s0" class="selection selection-style" name="s0" onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                                <option value=""> 担当コンサルタントを選択</option>
                                <option value="粟田 健太郎">粟田 健太郎</option>
                                <option value="入江 祥之">入江 祥之</option>
                                <option value="岡田 麗">岡田 麗</option>
                                <option value="小田 麻耶">小田 麻耶</option>
                                <option value="神田 昭子">神田 昭子</option>
                                <option value="工藤 直亮">工藤 直亮</option>
                                <option value="佐野 慶樹">佐野 慶樹</option>
                                <option value="武田 直人">武田 直人</option>
                                <option value="棚澤 啓介">棚澤 啓介</option>
                                <option value="豊田 綾">豊田 綾</option>
                                <option value="永田 憲章">永田 憲章</option>
                                <option value="奈良 元生">奈良 元生</option>
                                <option value="半藤 剛">半藤 剛</option>
                                <option value="細野 聡">細野 聡</option>
                                <option value="松尾 匡起">松尾 匡起</option>
                                <option value="三好 直実">三好 直実</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear"><span id="errors0"></span>&nbsp;<span id="errors0_confirm"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    <p>Q1.</p>
                    <p>コンサルティングについて（面談でのヒアリング、キャリアアドバイス等）</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
	                          <input type="radio" name="s1" value="とても満足" id="l19_0">
	   							<label for="l19_0">とても満足</label>
	  						</p>
	                          <p>
	                           <input type="radio" name="s1" value="満足"
	                            id="l19_1">
	                           <label for="l19_1">満足</label>
	                          </p>
	                          <p>
	                           <input type="radio" name="s1" value="普通" id="l19_2">
	                           <label for="l19_2">普通</label>	
	                           </p>
	                           <p>
	                           <input type="radio" name="s1" value="あまり満足していない" id="l19_3">
	                           <label for="l19_3">あまり満足していない</label>	
	                           </p>
	                            <p>
	                           <input type="radio" name="s1" value="満足していない" id="l19_4">
	                           <label for="l19_4">満足していない</label>	
	                           </p>
	                           <p id="errorrs1"></p>
	                           <p>-特にどのような点でそのように思われましたか？</p>
	                           <p>
	                           <textarea name="s1_area" rows="5" cols="66" id="s1_area"></textarea>
	                           </p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    <p>Q2.</p>
                    <p>企業情報の充実度（求人に対する情報量、質について）</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
	                        <input type="radio" name="s2" value="とても満足" id="l9_0">
	 						<label for="l9_0">とても満足</label>
							</p>
	                        <p>
	                         <input type="radio" name="s2" value="満足" id="l9_1">
	 						 <label for="l9_1">満足</label>
	                        </p>
	                        <p>
	                         <input type="radio" name="s2" value="普通" id="l9_2">
	 						 <label for="l9_2">普通</label>
	                         </p>
	                         <p>
	                         <input type="radio" name="s2" value="あまり満足していない" id="l9_3">
	 						 <label for="l9_3">あまり満足していない</label>
	                         </p>
	                         <p>
	                         <input type="radio" name="s2" value="満足していない" id="l9_4">
	 						 <label for="l9_4">満足していない</label>
	                         </p>
	                         <p id="errorrs2"></p>
	                         <p>-特にどのような点でそのように思われましたか？</p>
	                         <p>
	                         <textarea name="s2_area" rows="5" cols="66" id="s2_area"></textarea>
	                         </p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
            	
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt"> 
                    <p>Q3.</p>
                    <p>やり取りにおけるスピードについて</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
	                        <input type="radio" name="s3" value="とても満足" id="l16_0">
	 						<label for="l16_0">とても満足</label>
							</p>
	                        <p>
	                        <input type="radio" name="s3" value="満足" id="l16_1">
							 <label for="l16_1">満足</label>
	                        </p>
	                        <p>
	                          <input type="radio" name="s3" value="普通" id="l16_2">
	 						  <label for="l16_2">普通</label>
	                         </p>
	                         <p>
	                          <input type="radio" name="s3" value="あまり満足していない" id="l16_3">
	 						  <label for="l16_3">あまり満足していない</label>
	                         </p>
	                          <p>
	                          <input type="radio" name="s3" value="満足していない" id="l16_4">
	 						  <label for="l16_4">満足していない</label>
	                         </p>
	                         <p id="errorrs3"></p>
	                         <p>-特にどのような点でそのように思われましたか？</p>
	                         <p>
	                         <textarea name="s3_area" rows="5" cols="66" id="s3_area"></textarea>
	                         </p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q4.</p>
	                    <p>当社にはどのようなことを期待されてご登録いただきましたでしょうか。</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
	                        <textarea name="s4_area" rows="5" cols="66" id="s4_area"></textarea>
							</p>
	                        <p id="errorrs4"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q5.</p>
	                    <p>当社サービスはご期待に応えられましたでしょうか。</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
	                    	<p>
	                         <input type="radio" name="s5" value="期待以上"  id="l2_0">
	 						 <label for="l2_0">期待以上</label>
							</p>
	                        <p>
	                        <input type="radio" name="s5" value="期待通り" id="l2_1">
	 						<label for="l2_1">期待通り</label>
	                        </p>
	                        <p>
	                         <input type="radio" name="s5" value="期待ほどではなかった"  id="l2_2">
	 						<label for="l2_2">期待ほどではなかった</label>
	                         </p>
	                         <p id="errorrs5"></p>
	                         <p>-特にどのような点でそのように思われましたか？</p>
	                         <p><textarea name="s6_area" rows="5" cols="66" id="s6_area"></textarea></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q6.</p>
	                    <p>活動中、大変だったこと、不安になられたことなどはございましたでしょうか。</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
							<?php /* ?><p>
	                         <textarea name="s7_area" rows="5" cols="66" id="s7_area"></textarea>
							</p>
	                        <p id="errorrs6"></p>
                            <?php */ ?>
                            <p>
                                <input type="radio" name="s9" value="ある" id="20_0">
                                <label for="20_0">ある</label>
                            </p>
                            <p>
                                <input type="radio" name="s9" value="なし" id="20_1">
                                <label for="20_1">なし</label>
                            </p>
                            <p>-Q6で「ある」と回答された方にお聞きします。<br/>&nbsp;特にどのような点でそのように思われましたか？</p>
                            <p>
                                <textarea name="s7_area" rows="5" cols="66" id="s7_area"></textarea>
                            </p>
                            <p id="errorrs6"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	 <p>Q7.</p>
                    	<p>今後、転職ならびにキャリアについてご相談される際には、再度当社をご利用いただけますでしょうか。</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input type="radio" name="s7" value="是非利用したい"  id="l7_0">
 						 <label for="l7_0">是非利用したい</label>
						</p>
                        <p>
                        <input type="radio" name="s7" value="わからない" id="l7_1">
 						<label for="l7_1">わからない</label>
                        </p>
                        <p>
                         <input type="radio" name="s7" value="できれば利用したくない"  id="l7_2">
 						<label for="l7_2">できれば利用したくない</label>
                         </p>
                         <p id="errorrs7"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q8.</p>
                    	<p>今後ご転職をお考えのご友人、知人の方がいらっしゃった場合、当社にご紹介いただけますでしょうか。</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input type="radio" name="s8" value="是非紹介したい"  id="l8_0">
 						 <label for="l8_0">是非紹介したい</label>
						</p>
                        <p>
                        <input type="radio" name="s8" value="わからない" id="l8_1">
 						<label for="l8_1">わからない</label>
                        </p>
                        <p>
                         <input type="radio" name="s8" value="できれば紹介したくない"  id="l8_2">
 						<label for="l8_2">できれば紹介したくない</label>
                         </p>
                         <p id="errorrs8"></p>
                        </div>
                        
                    </div>
                 </div><!--group_txt_form-->


                <div class="group_txt_form clear">
                    <div class="clear title_txt">
                        <p>Q9.</p>
                        <p>その他、当社の関わり方でよかった点がございましたら、お聞かせ下さい。</p>
                    </div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <p>
                                <textarea name="s8_area" rows="5" cols="66" id="s8_area"></textarea>
                            </p>
                        </div>

                    </div>
                </div><!--group_txt_form-->


                
                 <div class="group_txt_form clear">
                	<p style="padding:10px 0;">アンケートのご協力ありがとうございました。皆さまからのご意見を参考にさせていただきサービス向上に努めてまいります。今後ともよろしくお願いいたします。</p>
                 </div><!--group_txt_form-->
                 
             </div><!--content_inside-->
             
             
             <div class="block_content clear">
             	
                <div class="submit_form_button" style="width:100%">
               		 <input type="submit" value="内容確認に進む" id="submit" name="Submit" class="button-confirm">
                     <span class='arrow_submit'>&rsaquo;</span>
                </div>
                
             </div>
             <!--***************************************************-->
             
             </form>
         
       </div><!--End content-->
    
    
    <?php include('../inc/footer-q.php'); ?>
<?php 
	ob_flush();
?>