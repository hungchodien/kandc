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
       		<p class="title_top_form yellow clear">サービス満足度アンケート</p>
            <p class="sub_title_top_form while_txt clear">以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br><span style="font-size:10px; color:#D0CCCC">※修正する場合には「戻る」をクリックし、内容を変更してください。
</span></p>
       </div>
       
       <?php
$prev_input = "";
	for ($i = 0; $i < 9; $i++):
		$col = "s{$i}";
		$val = $_POST["s" . $i];
		$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
	endfor;
	
	for ($j = 0; $j <8; $j++):
		$col_area = "s{$j}_area";
		$val_area = $_POST["s" . $j."_area"];
		$prev_input .= "<input type='hidden' name='{$col_area}' value='{$val_area}' id='{$col_area}'>";
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
                	<div class="clear title_txt">
                    	<p>Q1.</p>
                    	<p>コンサルティングについて <br />（面談でのヒアリング、キャリアアドバイス等）</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p>
                        <?php echo $_POST['s1']; ?>
                         </p>
                         <p> <?php echo $_POST['s1_area']; ?></p>
                     </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q2.</p>
                    	<p>企業情報の充実度　<br />（求人に対する情報量、質について）</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p>
                        <?php echo $_POST['s2']; ?>
                         </p>
                         <p> <?php echo $_POST['s2_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	 <p>Q3.</p>
                    	<p>やり取りにおけるスピードについて</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p>
                        <?php echo $_POST['s3']; ?>
                         </p>
                         <p> <?php echo $_POST['s3_area']; ?></p>
                     </div>
                    
                </div><!--group_txt_form-->
              
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q4.</p>
                    	<p>上記以外に、全体的に当社の関わり方でよか<br />った点がございましたら、お聞かせ下さい。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s4_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q5.</p>
                    	<p>当社にはどのようなことを期待されてご登録<br />いただきましたでしょうか。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s5_area']; ?></p>
                    	<p>
                        <?php echo $_POST['s5']; ?>
                         </p>
                         <p> <?php echo $_POST['s6_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	 <p>Q6.</p>
                    	<p>活動中、大変だったこと、不安になられたこと<br />などございましたでしょうか？</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s7_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q7.</p>
                    	<p>今後、転職ならびにキャリアについてご相談<br />される際には、再度当社をご利用いただけま<br />すでしょうか。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s7']; ?></p>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q8.</p>
                    	<p>当社をご友人、知人の方にご紹介いただけ<br />ますでしょうか。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s8']; ?></p>
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