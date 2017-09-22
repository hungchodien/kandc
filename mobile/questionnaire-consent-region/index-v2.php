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
	if ($protocol == 'http:' || $protocol =='HTTP:'){
		$entry_protocol = str_replace('http', 'https', curPageURL1() );
		//header('Location:'.$entry_protocol);
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
							allRadios1[x1].onclick = function(){
								if(booRadio1 == this){
										this.checked = false;
										booRadio1 = null;
								}else{
									booRadio1 = this;
								}
							};
					
						
							
							
				 document.getElementById("s0").style.imeMode = "disabled";	
		 });
    </script>
    <script src="validate_form_entry.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<!--Content-->

		 <style type="text/css">
	.error {
			top:0 !important;
			left:0 !important;
		}
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
       		<p class="title_top_form yellow clear">ご利用に関する注意事項承諾書（地方勤務に関して）</p>
            <p class="sub_title_top_form while_txt clear">弊社転職支援サービスをご利用いただく上でご注意いただきたい事項です。<br>
内容をご確認いただき、ご承知いただきましたら各項目のチェックボタンをチェックした上でご署名をお願いいたします。</p>
       </div>
       
       
       		<form action="confirm.php" method="post" id="submit_form">


<div class="form-personal-profile step_hiden bg_white content_inside block_content mobile_entry_question">
	
    
    <div class="table-personal-profile2 container_consent_question">
    	 <table class="table_group_question">
           <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s1" value="加盟企業間の共有について" id="ls1" class="radioR"></td>
                <td class="col2"><label for="ls1">加盟企業間の共有について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">
                	<div class="clear container_content_consent">
                    	<p class="text1">首都圏以外での勤務を希望される方につきましては、より多くの求人をご紹介できるよう、弊社が加盟しているリージョナルスタイルグループ<span class="red">※</span>の一部または全ての加盟企業間で、お預かりいたしました登録情報を共有させていただきます。求人紹介以外の目的で利用することはございませんので、あらかじめご了承ください。<br><br></p>
                        <p class="text2"><span class="red">※</span>リージョナルスタイルグループとは</p>
                        <p class="text3">Iターン・Ｕターン転職を中心としたヘッドハンティングサービス・人材紹介事業を行っております。<br>
「地元企業へ優秀な人材をご紹介した結果、企業が成長することで、地域活性化に貢献したい」という思いを持つ各地で人材サービスを展開する企業が加盟しています。グループ間で協力し、多くのIターン・Ｕターン転職を成功に導くことを目的としています。以下、加盟企業一覧です。<br><br></p>
                        <h3>加盟企業一覧</h3>
                        <div class="clear group_ul">
                               <div class="item">
                                	<p class="line">⚊ リージョンズ株式会社</p>
                                	<p>（担当エリア）北海道、宮城、福島、山形、岩手、栃木</p>
                               </div> 
                                
                               <div class="item">
                                	<p class="line">⚊ 株式会社クライス＆カンパニー</p>
                                	<p>（担当エリア）東京</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社エンリージョン</p>
                                	<p>（担当エリア）新潟、長野、富山</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社リンク・アンビション</p>
                                	<p>（担当エリア）靜岡、愛知</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社アーリーバードエージェント</p>
                                	<p>（担当エリア）三重</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社グリッド</p>
                                	<p>（担当エリア）大阪</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社ライフサイズ</p>
                                	<p>（担当エリア）広島、岡山、山口</p>
                               </div> 
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社リージェント</p>
                                	<p>（担当エリア）香川</p>
                               </div>
                               
                               <div class="item">
                                	<p class="line">⚊ 株式会社パーソナル・マネジメント</p>
                                	<p>（担当エリア）熊本</p>
                               </div>  	
                        </div><!--group_ul-->
                    </div>
                </td>
            </tr>
             <!--item -->
          </table>  
    </div><!--container_consent_question-->
    
    
    <div class="group_txt_form clear table-personal-profile2">
                	<div class="clear title_txt">氏名<span class="red-color">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input class="text-personal-400" type="text" name="s-1" id="s-1" onfocus="click_text(this.id)" onblur="validatetext(this.value,this.id)" style="ime-mode:disabled; -webkit-ime-mode: disabled;"/>
                        </p>
                         <div style="display:block; width:100%; line-height:25px;"><span id="errors-1"></span></div>
                        </div>
                    </div>
     </div>
    
    
     <div class="group_txt_form clear table-personal-profile2">
                	<div class="clear title_txt">メールアドレス<span class="red-color">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input class="text-personal-400" type="text" name="s0" id="s0" onfocus="click_text(this.id)" value="" placeholder="半角文字でお間違いのないようご入力ください" onblur="IsEmail(this.value,this.id)" style="ime-mode:disabled; -webkit-ime-mode: disabled;"/>
                        </p>
                        <div style="display:block; width:100%; line-height:25px;"><span id="errors0"></span></div>
                        </div>
                    </div>
     </div>
    
    
    
    
    
    <div style="text-align:center;" id="checkbox_require" class="table-personal-profile2 end_check_radio">
		<label style="position:relative;"><?php /*?><input type="radio" id="radio_end" name="radio_end"><?php */?>上記チェック項目の内容につき、確認及び承諾します。</label>
		<p id="radio_end_error"></p>
	</div>
    
    
    
    
</div>

<!-------------------------------------------------------------->

             
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