<?php
	ob_start();
	session_start();
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
    header('Location:'.$entry_protocol);
}
//@include('../inc/header.php');

if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
            exit;
        }
		
@include('../inc/header.php');
?>

  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <script src="validate_form_entry.js" type="text/javascript"></script>


  <script src="jquery.maxlength_plugin.js" type="text/javascript"></script>
  <script src="jquery.maxlength.js" type="text/javascript"></script>

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="auto_ruby.js"></script>

	<script type="text/javascript" src="../../js/number_check.js"></script>
	<script type="text/javascript" src="../../js/common_funcs.js"></script>
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
				 
				 /*xuong dong dat trong jquery*/
			
			
				/*het xuong dong*/
				  
				  
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
	  		$status_entry=$_GET['status'];
			$cmd=$_GET['cmd'];
			$title_top="エントリーフォーム";
			if(isset($_GET['status'])):
		  		switch($status_entry){
					case "fixed":
						$title_top="あなたにマッチした求人情報をお探しします";
					break;
					case "primary":
						$title_top="エントリーフォーム";
					break;
					default:
						$title_top="エントリーフォーム";
					
				}	
		  endif;
	   ?>
       	<style type="text/css">
			a#share_email_top_show{
			
				border-radius: 3px 3px 3px 3px;
				-moz-border-radius: 3px 3px 3px 3px;
				-webkit-border-radius: 3px 3px 3px 3px;
				border: 0px solid #000000;
				background:#8B8B8B;
				color:#FFF;
				position:inherit !important;
				top:-6px;
				right:0;
				padding:3px 5px;
				font-size: 11px;
				float:right;
			}
	
</style>	
       <?php 
				//if(isset($_SESSION['MemberName'])):
					include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
			<p class="title_top_form yellow" style="float:left"><?php echo $title_top; ?></p>
            <!--<p class="sub_title_top_form while_txt clear">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。
私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>-->
       </div>
       	<form id="submit_form" method="post" action="">	
        <?php 
			//$entry_id=$_GET['entry_id'];
			//echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
       
            <div class="page1 bg_white content_inside block_content">
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text1" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text1']; endif; ?>" name="text1" onfocus="click_text(this.id)" />
                        </div>
                        <div class="input_50 r">
                       	 <input id="text2" type="text" value="<?php if(!empty($_POST)): echo $_POST['text2']; endif;?>" name="text2" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext12"></span><span id="errortext2"></span>
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ <span class="notice"> (必須)</span></div>
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
                	<div class="clear title_txt">生年月日<span class="notice"> (必須)</span></div>
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
                	<div class="clear title_txt">電話番号<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_other phone">
                        	<input type="tel" value="<?php if(!empty($_POST)): echo (int)$_POST['text5']; endif; ?>" id="text5" name="text5" onfocus="click_text(this.id)" style="ime-mode:disabled;"  placeholder="ハイフンなし 0357331602" />
                        </div>
                    	
                    </div>
                    <div class="clear">
                    	<span id="errortext567"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form group_txt_form_end clear">
                	<div class="clear title_txt">メールアドレス<span class="notice"> (必須)</span></div>
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
                            <img border="0" alt="閉じる" src="<?php echo url_root; ?>img/close_btn.png"/>
                        </div> 
                         
                        <div class="notice-entry-form_pop" style="padding:10px 0 0 0;">
                          <p>※メールでのご連絡について</p>
                          <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。 ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                        </div>
                 	 </div>
               </div>   


                <div class="group_txt_form clear"  style="margin-top: 0px;">
                    <div class="clear title_txt">学校名<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text13']; endif; ?>" id="text13" name="text13" onfocus="click_text(this.id)" placeholder="（例）◯◯大学" />
                    </div>
                    <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear"  style="margin-top: 0px;">
                    <div class="clear title_txt">学部<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text15']; endif; ?>" id="text15" name="text15" onfocus="click_text(this.id)" placeholder="（例）◯◯学部" />
                    </div>
                    <div class="clear"><span  id="errortext15"></span></div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	 <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text14']; endif; ?>" id="text14" name="text14" onfocus="click_text(this.id)" placeholder="（例）株式会社◯◯"/>
                    </div>
                    <div class="clear"><span  id="errortext14"></span></div>
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l">
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
                        <div class="input_5 l" style="width:6%; line-height:36px;">
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
                        </div>
                    <!--</div>-->
                        
                        
                    </div>
                    <div class="clear input_form" style="margin: 15px 0px 0px 0px;">
                        <label style="padding-right: 15px;">
                            <input id="radio1" type="radio" checked="" value="現職中" name="radio1">
                            現職中
                        </label>
                      
                        <label style="padding-right: 15px;">
                            <input id="radio2" type="radio" value="離職中" name="radio1">
                            離職中
                        </label>
                    </div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種<span class="notice"> (必須)</span></div>
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
                	<div class="clear title_txt">年収<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	  <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text17']; endif; ?>" id="text17" name="text17" onfocus="click_text(this.id)" placeholder="" style="ime-mode:disabled;" pattern="[0-9]*"/>
                        </div>
                        <div class="l" style="margin-left:10px; margin-top:5px;">万円</div>
                        
                    </div>
                     <div class="clear"><span  id="errorselect17"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容<span class="notice">(必須)</span></div>
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
						$('#text22').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
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
                                    $('.select_show3').hide();
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
                                     $('.select_show3').hide();
									$('.select_show1').hide();
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
                                <?php include('../inc/select-media.php');?>
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
                            <select onfocus="click_text(this.id)" id="select14" name="select14"  class="selection consultant_check">
                                            <option value="">下記から選択してください</option>
										<?php 
											@include ('../../Lib/_init.php');
											@include ('../../config.php');
											@include ('../../../Lib/_init.php');
											@include ('../../../config.php');
											$Data_Consultant=To_Get_Data("consultant"," and `consultant_Status`=0  order by `consultant_Date` DESC","`consultant_Name`");
														if($Data_Consultant['cnt']>0):
															for($i=0; $i<$Data_Consultant['cnt']; $i++):
																	$List_Consultant = $Data_Consultant[$i];
											?>
                                           <option  value="<?php echo $List_Consultant['consultant_Name']; ?>" <?php if($select14_sl==$List_Consultant['consultant_Name']):?> selected="selected"  <?php endif; ?>><?php echo $List_Consultant['consultant_Name']; ?></option>
                                           <?php 
										     endfor;
										   endif;
										   ?>
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
             <!--****************************************************-->

             <?php 
						@include('../inc/link_privacy_policy.php'); 
						@include('../../inc/link_privacy_policy.php'); 

					?>
<style>.group_privacy_policy_form {color: #fff;}</style>
             <!--****************************************************-->
             <div class="page1 block_content clear">
             	<div class="submit_form_button" style="width: 100%;">
               		 <input type="submit" value="同意して内容確認へ" id="submit" name="Submit" class="button-confirm">
                    
                </div>
             </div>
             <!--***************************************************-->
             
            </form>
           <?php //include ('../inc/page_footer.php');?>  
       </div><!--End content-->
    
 <!--***********************************************************************************************************************-->   
    
    
    
    <!--Confirm form-->
    
    
     <!--End Content -->    
       <div id="content" class="inside confirm form_entry_two <?php if(!empty($_POST)): echo "display_block"; else: echo "display_none"; endif; ?>  clear">
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
			//$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
 <?php
if (isset($_GET['entry_id'])) {
	
	if($_GET['entry_id']==1019611):
		//amazon
		$amazon_id=1019611;
		?>
        <input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id; ?>"/>
        <?php
	else:
		if($_GET['entry_id']==210685):
			$amazon_id=210685;
		?>
		<input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id; ?>"/>
		<?php	
		else:
			$entry_id_index=(int)$_GET['entry_id'];
			$cmd=$_GET['cmd'];
			if($entry_id_index>0 && $cmd=='interview'):
			  	$entry_id_company=(int)$_GET['entry_id'];
				$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' order by `id_interview` DESC limit 1","`company_name`");
				if($List_cc_interview['cnt']>0):
				?>
		        	<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_index; ?>"/>
		        <?php
				else:
				?>
		        	<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index; ?>"/>
		        <?php
				endif;
			 else:
				if($entry_id_index>0 && $cmd=='consultant'):
					$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_index' order by `consultant_Date` DESC limit 1","`consultant_Name`");
					if($List_entry_consultant['cnt']>0):
						?>
	                    <input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_index; ?>"/>

						<input type="hidden" name="cmd" id="cmd" value="<?php echo $cmd; ?>"/>
	                    <?php
					else:
						?>
	                    <input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index; ?>"/>
	                    <?php
					endif;
				else:
		  
							$entry_id_company=(int)$_GET['entry_id'];
							
							$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_company' order by `id_interview` DESC limit 1","`company_name`");
							if($List_cc_interview['cnt']>0 && $entry_id_company>0):
							?>
					        	<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company; ?>"/>
					        <?php
							else:
									
									$list_job=Get_Data("job", " and `order_id`='$entry_id_company'  limit 1","`company_id`");
									
					
									if($list_job['cnt']<=0):
										$List_entry = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' order by `scrol_venderID` DESC limit 1","`company_name`");
										if($List_entry['cnt']>0):
											$entry_id_company_end=$entry_id_company;
										else:
											$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' order by `consultant_Date` DESC limit 1","`consultant_Name`");
											if($List_entry_consultant['cnt']>0):
												 $entry_id_consultant=$entry_id_company;
											else:
												$entry_id_company_end="";
											endif;
										endif;
									else:
										$order_id_job=$entry_id_company;
									endif;
						
			?>
			<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $order_id_job; ?>"/>
			<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company_end; ?>"/>
			<input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_consultant; ?>"/>
			<input type="hidden" name="cmd" id="cmd" value="<?php echo $cmd; ?>"/>
			<?php
					endif;
					
			  endif;		
		  endif;
	   endif;
	endif;
}
?>        
        
        
        
        
        
        
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
                    <div class="title_txt clear">学校名 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text13']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                    <div class="title_txt clear">学部 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text15']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                    <div class="title_txt clear">会社名 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text14']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                       <div class="title_txt clear">勤務期間 </div>
                       <div class="clear input_form">
                           <div class="input_100 clear confirm_txt_submit">
                               <p><?php echo $_POST['select7']; ?>年 <?php echo $_POST['select8']; ?>月 ～ <?php echo $_POST['select9']; ?>年 <?php echo $_POST['select10']; ?>月</p>
                               <p><?php echo $_POST['radio1']; ?></p>
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
                               <p><?php echo str_replace("\n","<br/>",$_POST['text18']); ?></p>
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
                               <p><?php echo str_replace("\n","<br/>",$_POST['text22']); ?></p>
                               <p><?php echo $_POST['select14']; ?></p>
                               <p><?php echo $_POST['select15']; ?></p>
                           </div>

                       </div>

                </div><!--End Group txt-->
                <!--End-->
                <!--End-->

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
		//$google_check="entry";
	?>

  <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>