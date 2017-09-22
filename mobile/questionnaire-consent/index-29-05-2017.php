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
			
			$(".tbl_show_form").click(function(){
				 $('#form_add_tbl_click').stop().slideToggle('slow');
			});
			
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
					
						var allRadios2 = document.getElementsByName('s2');
						var booRadio2;
						var x2 = 0;
							allRadios2[x2].onclick = function(){
								if(booRadio2 == this){
										this.checked = false;
										booRadio2 = null;
								}else{
									booRadio2 = this;
								}
							};
						var allRadios3 = document.getElementsByName('s3');
						var booRadio3;
						var x3 = 0;
							allRadios3[x3].onclick = function(){
								if(booRadio3 == this){
										this.checked = false;
										booRadio3 = null;
								}else{
									booRadio3 = this;
								}
							};
       					var allRadios4 = document.getElementsByName('s4');
						var booRadio4;
						var x4 = 0;
							allRadios4[x4].onclick = function(){
								if(booRadio4 == this){
										this.checked = false;
										booRadio4 = null;
								}else{
									booRadio4 = this;
								}
							};
						var allRadios5 = document.getElementsByName('s5');
						var booRadio5;
						var x5 = 0;
							allRadios5[x5].onclick = function(){
								if(booRadio5 == this){
										this.checked = false;
										booRadio5 = null;
								}else{
									booRadio5 = this;
								}
							};
						var allRadios6 = document.getElementsByName('s6');
						var booRadio6;
						var x6 = 0;
							allRadios6[x6].onclick = function(){
								if(booRadio6 == this){
										this.checked = false;
										booRadio6 = null;
								}else{
									booRadio6 = this;
								}
							};
						var allRadios7 = document.getElementsByName('s7');
						var booRadio7;
						var x7 = 0;
							allRadios7[x7].onclick = function(){
								if(booRadio7 == this){
										this.checked = false;
										booRadio7 = null;
								}else{
									booRadio7 = this;
								}
							};
						var allRadios8 = document.getElementsByName('s8');
						var booRadio8;
						var x8 = 0;
							allRadios8[x8].onclick = function(){
								if(booRadio8 == this){
										this.checked = false;
										booRadio8 = null;
								}else{
									booRadio8 = this;
								}
							};
						var allRadios9 = document.getElementsByName('s9');
						var booRadio9;
						var x9 = 0;
							allRadios9[x9].onclick = function(){
								if(booRadio9 == this){
										this.checked = false;
										booRadio9 = null;
								}else{
									booRadio9 = this;
								}
							};
							
					   var allRadios_radio10 = document.getElementsByName('s10');
						var booRadio_radio10;
						var x_radio10 = 0;
							allRadios_radio10[x_radio10].onclick = function(){
								if(booRadio_radio10 == this){
										this.checked = false;
										booRadio_radio10 = null;
								}else{
									booRadio_radio10 = this;
								}
							};
						var allRadios_radio11 = document.getElementsByName('s11');
						var booRadio_radio11;
						var x_radio11 = 0;
							allRadios_radio11[x_radio11].onclick = function(){
								if(booRadio_radio11 == this){
										this.checked = false;
										booRadio_radio11 = null;
								}else{
									booRadio_radio11 = this;
								}
							};
						<?php /*?>var allRadios_radio_end = document.getElementsByName('radio_end');
						var booRadio_radio_end;
						var x_radio_end = 0;
							allRadios_radio_end[x_radio_end].onclick = function(){
								if(booRadio_radio_end == this){
										this.checked = false;
										booRadio_radio_end = null;
								}else{
									booRadio_radio_end = this;
								}
							};
								<?php */?>
						var allRadios_check_all_id = document.getElementsByName('check_all');
						var booRadio_check_all_id;
						var x_check_all_id = 0;
							allRadios_check_all_id[x_check_all_id].onclick = function(){
								if(booRadio_check_all_id == this){
										this.checked = false;
										booRadio_check_all_id = null;
										//alert('No checked');
										$("input:radio.radioR").prop('checked',false); 
										
								}else{
									booRadio_check_all_id = this;
									//alert('checked');
									$("input:radio.radioR").prop('checked',true); 	
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
       		<p class="title_top_form yellow clear">ご利用に関する注意事項承諾書</p>
            <p class="sub_title_top_form while_txt clear">弊社転職支援サービスをご利用いただく上でご注意いただきたい事項です。<br>
内容をご確認いただき、ご承知いただきましたら各項目のチェックボタンをチェックした上でご署名をお願いいたします。</p>
       </div>
       
       
       		<form action="confirm.php" method="post" id="submit_form">


<div class="form-personal-profile step_hiden bg_white content_inside block_content mobile_entry_question">
	
    
    <div class="table-personal-profile2 container_consent_question">
    	 <table class="table_group_question">
           <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s1" value="履歴書・職務経歴書について" id="ls1" class="radioR"></td>
                <td class="col2"><label for="ls1">履歴書・職務経歴書について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">弊社及び求人企業にご提出いただきます履歴書・職務経歴書等に関しては、虚偽・誤りなく正確なものをご用意ください。企業によっては確認のため、リファレンスを取られる企業もございます。ご提出内容に明らかな偽りがあった場合には、サービスを停止させていただきます。また、その内容の不備等によって求人企業から何らかの異議、請求もしくは要求などがなされた場合には、自己の責任で対処していただきますようお願いします。</td>
            </tr>
             <!--item -->
             
              <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s11" value="現年収の申告について" id="ls11" class="radioR"></td>
                <td class="col2"><label for="ls11">現年収の申告について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">弊社及び求人企業に対して、昨年度の源泉徴収票に基づいた金額をお伝え下さい。内定時に前年の源泉徴収票の提出を求められる場合がございます。その際に事前申告額と乖離が無いよう、正確な年収額の申告をお願いいたします。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s2" value="連絡先及び連絡事項の確認について" id="ls2" class="radioR"></td>
                <td class="col2"><label for="ls2">連絡先及び連絡事項の確認について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">進捗状況､面接の急なアレンジなど､緊急を要する連絡が必要なケースがございますので確実に取れる連絡先をお知らせください。また紹介案件、面接日などのご連絡はなるべく迅速にご返答いただけますようお願いいたします。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s3" value="転職活動の進捗状況について" id="ls3" class="radioR"></td>
                <td class="col2"><label for="ls3">転職活動の進捗状況について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">転職活動において、状況に動きや変化等が起きましたら､お手数ですがその都度早めにご連絡いただきますようお願いいたします。情報交換､連絡等は密に取っていきましょう。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s4" value="担当以外からのご連絡について" id="ls4" class="radioR"></td>
                <td class="col2"><label for="ls4">担当以外からのご連絡について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">本日ご面談させていただきましたコンサルタントが貴方様の担当をさせていただきますが、別の担当者から直接その担当案件をご提案差し上げるケースもございますのでご了承願います。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s5" value="面接のキャンセルについて" id="ls5" class="radioR"></td>
                <td class="col2"><label for="ls5">面接のキャンセルについて</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">面接の急なキャンセルはご遠慮ください。企業側も面接に際し、多数の方のスケジュールを調整しております。やむを得ない場合にはできるだけ早くご連絡をいただきますようお願いいたします。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s6" value="求人情報のメーリングサービスについて" id="ls6" class="radioR"></td>
                <td class="col2"><label for="ls6">求人情報のメーリングサービスについて</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">求人情報のご紹介は、基本的には担当コンサルタントからさせていただきますが、可能性をできるだけ広げるためにも、別途マーケティング・リサーチ部からも求人情報のお知らせメールをお送りすることがございますのでご了承願います。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s7" value="条件等について" id="ls7" class="radioR"></td>
                <td class="col2"><label for="ls7">条件等について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">弊社は求人企業の仕事内容や処遇など労働条件の概略について確認を行いますが、雇用契約に関しましては、自己の責任において求人企業に労働条件を直接確認した上で結ぶものとし、弊社が確認し通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことをご承諾願います。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s8" value="内定から入社まで" id="ls8" class="radioR"></td>
                <td class="col2"><label for="ls8">内定から入社まで</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">正式な内定から入社までの期間について､状況にもよりますが常識的に1ヶ月､伸びても2ヶ月が限度となります。3ヶ月以上となると､内定取り消しになることもございますのでご注意ください。企業側としては1日も早い入社を希望されております。調整､交渉段階で企業も譲歩致しますが､同様に退職の努力もお願いいたします。</td>
            </tr>
             <!--item -->
             
             <!--item -->
        	<tr>
            	<td class="col1"><input type="radio" name="s9" value="内定決定後について" id="ls9" class="radioR"></td>
                <td class="col2"><label for="ls9">内定決定後について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">転職活動の場合､新卒の就職活動と違いますので､内定後はお早めの意思決定の程宜しくお願いいたします。またご検討の後､一旦オファーを受諾しましたら､辞退はできません。企業側は入社の意思を受け事業計画等を進めますので､常識としてご理解くださいますようお願いいたします。</td>
            </tr>
             <!--item -->
             <!--item-->
            <tr>
             	<td colspan="3" class="col_all"><input type="radio" name="check_all" value="上記全ての項目のチェックボックスにチェックを入れる" id="check_all"><label for="check_all">上記全ての項目のチェックボックスにチェックを入れる</label>
           	    </td>
             </tr>
             <!--item-->
             
          </table>  
    </div><!--container_consent_question-->
    
     <div class="clear table-personal-profile2">
     	<h3 class="title_new_add">地方勤務も視野に入れられている方はこちらもご確認ください。</h3>
     </div>
    <div class="table-personal-profile2 container_consent_question">
    	 <table class="table_group_question">
           <!--item -->
        	<tr>
            	<td class="col1 confirm_check"><input type="radio" name="s10" value="加盟企業間の共有について" id="ls10" class=""></td>
                <td class="col2"><label for="ls10">加盟企業間の共有について</label></td>
            </tr>
            <tr>
            	<td class="col3" colspan="2">
                	<p>首都圏以外での勤務を希望される方につきましては、より多くの求人をご紹介できるよう、弊社が加盟しているリージョナルスタイルグループ<span class="red">※</span>の一部または全ての加盟企業間で、お預かりいたしました登録情報を共有させていただきます。求人紹介以外の目的で利用することはございませんので、あらかじめご了承ください。</p>
                    <div class="tbl_show_form clear">
                    	<a href="javascript:void(0)" id="tbl_show_form"><span class="red">※</span>リージョナルスタイルグループとは  <span class="entry_icon_down"><img src="<?php echo url_root_domain; ?>img/entry_down.png"></span></a>
                    </div>
                    <div id="form_add_tbl_click" style="display:none;" class="clear container_content_consent">
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
                    </div><!--container_content_consent-->
                
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