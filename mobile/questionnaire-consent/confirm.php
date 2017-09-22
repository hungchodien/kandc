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
	
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <!--<div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
	 <script type="text/javascript">
        $(document).ready(function () {
			
					$('#top_site #menu_btn').css("display", "none");
		});
	 </script>
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">ご利用に関する注意事項承諾書</p>
            <p class="sub_title_top_form while_txt clear">以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br /><span style="font-size:11px; color:#646464">※修正する場合には「戻る」をクリックし、内容を変更してください。
</span></p>
       </div>
       
       <?php
$prev_input = "";
if(isset($_POST["key"]) && strlen($_POST["key"])>1):
	$key=$_POST["key"];
	$prev_input = "<input type='hidden' name='key' value='{$key}' id='key_id'/>";
endif;
	for ($i = -1; $i < 12; $i++):
		$col = "s{$i}";
		
		if(!empty($_POST["s" . $i])):
			if($i<1):
				$val = $_POST["s" . $i];
			else:
				$val="承諾する";
			endif;
			
		else:
			$val="承諾しない";
		endif;
		$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
	endfor;

	//$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
?>
       	<form id="frm_confirm" method="post" action="send_mail.php">	
       		<?php
			echo $prev_input;
			?>
        	
            <div class="bg_white content_inside block_content confirm_form_question" >
            
            	 <div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">氏名</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s-1']; ?>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">メールアドレス</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s0']; ?>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>履歴書・職務経歴書について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s1'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                     </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>現年収の申告について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s11'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                     </div>
                 </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>連絡先及び連絡事項の確認について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s2'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>転職活動の進捗状況について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s3'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                     </div>
                    
                </div><!--group_txt_form-->
              
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>担当以外からのご連絡について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php if(empty($_POST['s4'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>面接のキャンセルについて</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s5'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    	
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>求人情報のメーリングサービスについて</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s6'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>条件等について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s7'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>内定から入社まで</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s8'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>内定決定後について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s9'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>加盟企業間の共有について</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p><?php if(empty($_POST['s10'])): echo "<span class='not_select'>承諾しない</span>"; else: echo "<span class='select_option'>承諾する</span>"; endif; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
             </div><!--content_inside-->
             
             
             <div class="block_content clear">
             	<div class="form_back_button button-back">
                	<a title="Back" href="javascript:history.back(1)">
                    <span class='arrow_back'>&lsaquo;</span>戻る
                    
                   
                    
                    </a>
                </div>
                <div class="submit_form_button">
               		 <input type="submit" value="送信" id="submit" name="Submit" class="button-confirm">
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