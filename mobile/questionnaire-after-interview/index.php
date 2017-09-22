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

		.font_site_watermask input::-webkit-input-placeholder,
		.font_site_watermask textarea::-webkit-input-placeholder {
		  color: #666;
		  font-size:11px;
		}
		.font_site_watermask input:-moz-placeholder,
		.font_site_watermask textarea:-moz-placeholder {
		  color: #666;
		  font-size:11px;
		}
		.font_site_watermask input::-moz-placeholder,
		.font_site_watermask textarea::-moz-placeholder {
		  color: #666;
		  font-size:11px;
		}
		.font_site_watermask input:-ms-input-placeholder,
		.font_site_watermask textarea:-ms-input-placeholder {
		  color: #666;
		  font-size:11px;
		}
		.font_site_watermask textarea{
			
		}


    </style>


        <!--<div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">面接について</p>
            <p class="sub_title_top_form while_txt clear">今回の面接は、大変お疲れ様でした。<br>
                面接の内容についてお聞かせください。この後、できる限りのサポートをさせていただきます。</p>
       </div>
       	<form id="submit_form" method="post" action="confirm.php" class="questionnaire-interview">	
       
        	<input type="hidden" name="key" value="<?php echo isset($_GET["key"])?$_GET["key"]:''; ?>" id="key_id"/>
            <div class="bg_white content_inside block_content mobile_entry_question font_site_watermask" >
                <div class="group_txt_form clear" style="border-top:0px;margin-top:0px">
                	<div class="clear title_txt">
                    <p>Q1.</p>
                    <p>面接官のお名前、役職、人数（覚えていらっしゃる範囲でかまいません。）</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                            <p>
                               <textarea name="s1_area" rows="5" cols="66" id="s1_area"></textarea>
                            </p>
                            <p id="errorrs1"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    <p>Q2.</p>
                    <p>どんな質問がありましたか？（できるだけ詳しくお聞かせください）</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                            <p>
                                <textarea name="s2_area" rows="5" cols="66" id="s2_area" placeholder="※『今思えばこうすれば良かった』、『ここは回答しづらかった』 などあれば教えてください。"></textarea>
                            </p>
                            <p id="errorrs2"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
            	
                <div class="group_txt_form clear">
                	<div class="clear title_txt"> 
                    <p>Q3.</p>
                    <p>今回の面接の中で職務内容、組織、募集背景についてどのようにご説明を受けましたか？</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                            <p>
                                <textarea name="s3_area" rows="5" cols="66" id="s3_area"></textarea>
                            </p>
                            <p id="errorrs3"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q4.</p>
	                    <p>今回の面接の中で先方がこのポジションに対してどんなことを期待していると思われましたか？</p>
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
	                    <p>全体的な面接の印象、ご感想は？</p>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                            <p>
                                <textarea name="s5_area" rows="5" cols="66" id="s5_area"></textarea>
                            </p>
                            <p id="errorrs5"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q6.</p>
	                    <p>志望度は面接を受けてみていかがでしょうか？率直なご意見をお聞かせ下さい。</p>
                    </div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <p>
                                <textarea name="s6_area" rows="5" cols="66" id="s6_area"></textarea>
                            </p>
                            <p id="errorrs6"></p>
                        </div>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                        <p>Q7.</p>
                    	<p>年収についてやりとりがありましたでしょうか？あった場合はやりとりの内容を詳しく教えてください。</p>
                    </div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <p>
                                <textarea name="s7_area" rows="5" cols="66" id="s7_area"></textarea>
                            </p>
                            <p id="errorrs7"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q8.</p>
                    	<p>入社日についてご質問、先方からのご要望がありましたか？</p>
                    </div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <p>
                                <textarea name="s8_area" rows="5" cols="66" id="s8_area"></textarea>
                            </p>
                            <p id="errorrs8"></p>
                        </div>
                    </div>
                 </div><!--group_txt_form-->

                <div class="group_txt_form clear">
                    <div class="clear title_txt">
                        <p>Q9.</p>
                        <p>現時点でこの企業について、是非知っておきたい疑問点、不明点などあればお教えください。</p>
                    </div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <p>
                                <textarea name="s9_area" rows="5" cols="66" id="s9_area"></textarea>
                            </p>
                            <p id="errorrs9"></p>
                        </div>

                    </div>
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