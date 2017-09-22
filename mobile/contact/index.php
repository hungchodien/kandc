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
	@include('../inc/header.php'); 
?>

  <link rel="stylesheet" type="text/css" href="style.css" media="all" />
  <script src="validate_form_entry.js" type="text/javascript"></script>


  <script src="jquery.maxlength_plugin.js" type="text/javascript"></script>
  <script src="jquery.maxlength.js" type="text/javascript"></script>	

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="auto_ruby.js"></script>
		<!--Content-->
       <!-- <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       <style type="text/css">
       		.submit_form_button .button-confirm {
    			font-size: 14px;
			}
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
				  
				  
				/* $("#text1").on("keypress keyup keydown",function (){ 
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
       <?php /*?><div class="title_notice clear top_share_mail">
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
			<?php 
				//if(isset($_SESSION['MemberName'])):
					//include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
            <!--<p class="sub_title_top_form while_txt clear">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。
私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>-->
       </div><?php */?>
       	<form id="submit_form" method="post" action="">	
        <?php 
			$entry_id=$_GET['entry_id'];
			echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
        	
            <div class="page1 bg_white content_inside block_content">
            	<h3 class="title_top_form clear">お問合せ</h3>
            	<div class="note_top_form_group clear">
                	<h4>お問合せ内容をご入力の上、ご送信ください。</h4>
                    <p>ご連絡先の入力間違いがございますと、弊社からの連絡ができませんのでご注意下さい。</p>
                </div><!--note_top_form_group-->
                
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text1" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text1']; endif; ?>" name="text1" onfocus="click_text(this.id)" />
                        </div>
                        <div class="input_50 r">
                       	 <input id="text2" type="text" value="<?php if(!empty($_POST)): echo $_POST['text2']; endif;?>" name="text2" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext12"></span>&nbsp;&nbsp;<span id="errortext2"></span>
                    </div>
                    
                </div><!--End Group txt-->
                
              
                <div class="group_txt_form group_txt_form_end clear">
                	<div class="clear title_txt">メールアドレス<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		<input type="email" value="<?php if(!empty($_POST)): echo $_POST['text5']; endif; ?>" id="text5" name="text5"  onfocus="click_text(this.id)"  inputmode="verbatim" style="ime-mode:inactive;"/>
                        </div>
                        <div class="input_other">
                            <input type="email"  value="<?php if(!empty($_POST)): echo $_POST['text9']; endif; ?>" id="text9" name="text9" inputmode="verbatim" style="ime-mode:inactive;" onfocus="click_text(this.id)" placeholder="確認のためもう一度ご入力ください。" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off/>
                        </div>
                    </div>
                    <div class="clear">
                    	<span id="errortext89"></span>
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $('#text9').bind("cut copy paste", function(e) {
                                e.preventDefault();
                                alert("コピー・貼り付け不可。手入力をお願いします。");
                                $('#text9').focus();
                                $('#text9').bind("contextmenu", function(e) {
                                    $('#text9').focus();
                                    e.preventDefault();
                                });
                            });
                        });
                    </script>
                    <p style="margin-top:5px;">※携帯キャリアメール以外のアドレスをご入力ください。</p>
                </div><!--End Group txt-->
                
                    
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号<span class="notice">※</span></div>
                    <div class="clear input_form">
                   
                        <div class="input_100 l">
                       <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text3']; endif; ?>" id="text3" name="text3" onfocus="click_text(this.id)"　　　　/>
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext3"></span></div>
                </div><!--End Group txt-->
                
                <!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">問い合せ内容<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea value="<?php if(!empty($_POST)): echo $_POST['text4']; endif; ?>" id="text4" name="text4" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text4']; endif; ?></textarea>
                        </div>
                       
                        
                    </div>
                    <div class="clear"><span id="errortext4"></span></div>
                </div><!--End Group txt-->
                
                 <!--End Group txt--> 
                
                
                
                <div class="page1 block_content clear">
             		<div class="submit_form_button">
               		 <input type="submit" value="内容確認へ   >" id="submit" name="Submit" class="button-confirm">
                    
                	</div>
             	</div>
             
             
                
             </div>
            
             <!--****************************************************-->
             
             <!--***************************************************-->
             
             </form>
           <?php //include ('../inc/page_footer.php');?>  
       </div><!--End content-->
    
 <!--***********************************************************************************************************************-->   
    
    
    
    <!--Confirm form-->
    
    
     <!--End Content -->    
       <div id="content" class="inside confirm form_entry_two <?php if(empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?> clear">
       <!--****************************************************-->
       <?php /*?><div class="title_notice clear">
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
           
       </div><?php */?>
       <?php
	   		
			$prev_input = "";
			$prev_input1 = "";
			$prev_radio = "";
			for ($i = 1; $i < 6; $i++):
				$col = "text{$i}";
				$val = $_POST["text" . $i];
				$prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
			endfor;
			$user_email = $_POST['text5'];
			
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
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
                	<div class="clear title_txt">メールアドレス</div>
                    <div class="clear input_form">
                    	<div class="input_100 confirm_txt_submit">
                       		<?php echo $_POST['text5']; ?>
                        </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号</div>
                    <div class="clear input_form">
                    	<div class="input_100 confirm_txt_submit">
                       		 <?php echo $_POST['text3']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">問い合せ内容</div>
                    <div class="clear input_form">
                    	<div class="input_100 confirm_txt_submit">
                       		 <?php //echo $_POST['text4'];
							 	echo str_replace("\n","<br/>",$_POST['text4']); 
							  ?>
                        </div>
                    </div>
                    
                </div><!--End Group txt-->
                
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
    
    
    <div id="content_footer_end" class="inside clear form_entry_first clear display_block">
       <?php include('../inc/menu_interview.php'); ?>
			<?php include ('../inc/page_footer.php');?>   
   </div>
    
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
    <?php 
		//$google_check="entry";
	?>


    
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>