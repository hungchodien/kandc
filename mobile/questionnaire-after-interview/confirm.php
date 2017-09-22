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
       		<p class="title_top_form yellow clear">面接について</p>
            <p class="sub_title_top_form while_txt clear">以下の内容でお間違いないかご確認いただき、「送信」をクリックしてください。<br><span style="font-size:10px; color:#D0CCCC">※修正する場合には「戻る」をクリックし、内容を変更してください。
</span></p>
       </div>
       
       <?php
    $prev_input = "";
    if(isset($_POST["key"]) && strlen($_POST["key"])>1):
        $key=$_POST["key"];
        $prev_input = "<input type='hidden' name='key' value='{$key}' id='key_id'/>";
    endif;
    /*
	for ($i = -1; $i < 10; $i++):
		$col = "s{$i}";
		$val = $_POST["s" . $i];
		$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
	endfor;
	*/

	for ($j = 0; $j <10; $j++):
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
            
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q1.</p>
                    	<p>面接官のお名前、役職、人数（覚えていらっしゃる範囲でかまいません。）</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s1_area']; ?></p>
                     </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q2.</p>
                    	<p>どんな質問がありましたか？（できるだけ詳しくお聞かせください）</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s2_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	 <p>Q3.</p>
                    	<p>今回の面接の中で職務内容、組織、募集背景についてどのようにご説明を受けましたか？</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s3_area']; ?></p>
                     </div>
                </div><!--group_txt_form-->
              
              
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q4.</p>
                    	<p>今回の面接の中で先方がこのポジションに対してどんなことを期待していると思われましたか？</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                    	<p> <?php echo $_POST['s4_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
              <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q5.</p>
                    	<p>全体的な面接の印象、ご感想は？</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s5_area']; ?></p>
                    </div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	 <p>Q6.</p>
                    	<p>志望度は面接を受けてみていかがでしょうか？率直なご意見をお聞かせ下さい。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s6_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q7.</p>
                    	<p>年収についてやりとりがありましたでしょうか？あった場合はやりとりの内容を詳しく教えてください。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s7_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">
                    	<p>Q8.</p>
                    	<p>入社日についてご質問、先方からのご要望がありましたか？</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s8_area']; ?></p>
                    </div>
                    
                </div><!--group_txt_form-->

                <div class="group_txt_form clear">
                    <div class="clear title_txt">
                        <p>Q9.</p>
                        <p>現時点でこの企業について、是非知っておきたい疑問点、不明点などあればお教えください。</p>
                    </div>
                    <div class="clear input_form confirm_txt_submit">
                        <p> <?php echo $_POST['s9_area']; ?></p>
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