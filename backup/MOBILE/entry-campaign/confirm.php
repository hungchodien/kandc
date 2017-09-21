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
$root_url_page=url_root."entry-campaign/";
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $root_url_page; ?>style.css" media="all" />
  <script type="text/javascript">
 	$( document ).ready(function() {
		
		
    	$("#copyR").attr('style', 'width: 100%!important; font-size: 12px; line-height: 17px;');
		$("#to_pc_icon").remove();
		$("#menu_btn").hide();
	});
 
 </script>
		<!--Content-->
        
       
        
        <!--End Content -->    
       <div id="content" class="inside confirm clear">
       <!--****************************************************-->
       <div class="bg_white  block_content clear">
           
       <?php
	   		
			$prev_input = "";
			$prev_input1 = "";
			$prev_radio = "";
			for ($i = 1; $i < 9; $i++):
				$col = "text{$i}";
				$val = $_POST["text" . $i];
				$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			endfor;
			$user_email = $_POST['text6'];
			$selected1=$_POST['select1'];
			$prev_input .= "<input type='hidden' name='text9' value='{$selected1}' id='text9'>";
			?>
       	<form name="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
			

		?>
        	
               <div class="bg_white content_inside block_content">
                 <h1 class="title">エントリー内容のご確認<br></h1>
             以下の内容で無料キャリア相談へ申込みを行います。<br>
内容を確認し、変更がなければ「申し込む」をクリックしてください。<br>
※変更がある場合は、画面をお戻りになりまして変更を行ってください。<br>
     
            	
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
                	<div class="clear title_txt">会社名 </div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['text5']; ?></span>
                           
                         </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職種 </div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['select1']; ?></span>
                           
                         </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">仕事内容 </div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['text8']; ?></span>
                           
                         </div>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">メールアドレス</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<span><?php echo $_POST['text6']; ?></span>
                        </div>
                        
                    </div>
                   
                </div><!--End Group txt-->
                
               
                
             </div>
            
            
             
             <!--****************************************************-->
             <div class="block_content content_inside clear">
             	<div class="form_back_button button-back">
                	<a title="Back" href="javascript:history.back(1)">
                    <span class='arrow_back'>&lsaquo;</span>戻る
                    
                   
                    
                    </a>
                </div>
                <div class="submit_form_button">
               		 <input type="submit" value="申し込む" id="submit" name="Submit" class="button-confirm">
                     <span class='arrow_submit'>&rsaquo;</span>
                </div>
                
             </div>
             <!--***************************************************-->
             
             </form>
             </div>
       </div><!--End content-->
    
    
   <?php @include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>