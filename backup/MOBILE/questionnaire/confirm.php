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
		header('Location:'.$entry_protocol);
	}
	@include('../inc/header.php'); 
?>
	
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>questionnaire/style.css" media="all" />
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
       		<p class="title_top_form yellow clear">キャリアコンサルティング満足度アンケート</p>
            <p class="sub_title_top_form while_txt clear">以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br><span style="font-size:10px; color:#D0CCCC">※修正する場合には「戻る」をクリックし、内容を変更してください。
</span></p>
       </div>
       
       <?php
$prev_input = "";
	for ($i = 0; $i < 11; $i++):
		$col = "s{$i}";
		$val = $_POST["s" . $i];
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
                	<div class="clear title_txt">メールアドレス</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s0']; ?>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q1. エントリーいただいた後、弊社からの対応のスピードはいかがでしたか </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s1']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q2. 面談日程はご希望に添っていましたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s2']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">Q3. ご提案した案件、内容はあなたにマッチしていましたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s3']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
              
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">Q4. ご提案した案件情報の詳しさはいかがでしたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s4']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
              <div class="group_txt_form clear">
                	<div class="clear title_txt">Q5. ご面談にて「自分のことをよく理解してくれた」と感じましたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s5']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q6. キャリアに関するアドバイスは参考になりましたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s6']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q7.面談にもっとも期待していたことは何ですか その期待にお答えできましたか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s7']; ?>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">Q8.他社エージェントと比較して良かった点は何ですか</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s8']; ?>
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">Q9.エントリーから面談までの総合的な満足度をお教えください</div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s9']; ?>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q10.その他ご意見・ご感想がございましたら、お聞かせください </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<?php echo $_POST['s10']; ?>
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