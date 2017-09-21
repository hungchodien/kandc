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
    <script src="validate_form_entry.js" type="text/javascript"></script>
    <script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('#frm_confirm').on('submit', function () {
				new_var = false;
                  return true;
			});
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
		<!--Content-->
        
       
        
        <!--End Content -->    
       <div id="content" class="inside confirm clear">
       <!--****************************************************-->
       <div class="title_notice clear top_share_mail">
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
           	<?php include('../inc/form_email_top_entry.php'); ?>
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
			for ($j = 1; $j < 13; $j++):
				$col1 = "select{$j}";
				$val2 = $_POST["select" . $j];
				$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
			
			endfor;
			$radio1=$_POST['radio1'];
			$entry_id = $_POST['entry_id'];
			$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form name="frm_confirm" id="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
			echo $prev_input1;
			echo $prev_radio;

		?>
        	<div class="bg_yellow while_txt clear ">個人プロフィール</div>
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
                	<div class="clear title_txt">都道府県</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       	 	<?php echo $_POST['select4']; ?>
                        </div>
                       
                    </div>
                    
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['text5']; ?> -</span>
                           <span><?php echo $_POST['text6']; ?> -</span>
                           <span><?php echo $_POST['text7']; ?></span>
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
                
               
                
             </div>
             <!--****************************************************-->
             <div class="bg_yellow while_txt clear">最終学歴・語学・資格</div>
             <div class="bg_white content_inside block_content">
             	
             	
             	<div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_20 l">
                       		学校名
                        </div>
                        <div class="input_80 r confirm_txt_submit">
                       			<?php echo $_POST['text10']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
               
                <div class="group_txt_form clear">
                	<div class="clear title_txt">英語力</div>
                    <div class="clear input_form">
                    	<div class="input_70 l confirm_txt_submit">
                       		<?php echo $_POST['select5']; ?>
                        </div>
                        <div class="input_30 r confirm_txt_submit">
                       	 	TOEIC <?php echo $_POST['text11']; ?> 点
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
             
             	 <div class="group_txt_form clear">
                	<div class="clear title_txt">その他語学・資格</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                    		<?php echo $_POST['text12']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
             
             
             
             
             
             </div>
             <!--***************************************************-->
             
              <!--****************************************************-->
              <div class="bg_yellow while_txt clear">職務経歴について</div>
             <div class="bg_white content_inside block_content">
             	
                
                <div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_30 l">
                       		学校名
                        </div>
                        <div class="input_70 r confirm_txt_submit">
                       		<?php echo $_POST['text13']; ?> 社
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	
                    <div class="clear input_form">
                    	<div class="input_30 l">
                       		学部
                        </div>
                        <div class="input_70 r confirm_txt_submit">
                       		<?php echo $_POST['text15']; ?>
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['text14']; ?>
                        </div>
                        
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l confirm_txt_submit">
                    		<span><?php echo $_POST['select7']; ?> 年</span>
                       		 <span><?php echo $_POST['select8']; ?> 月</span>
                        </div>
                        <div class="input_5 l">
                       	 ～
                        </div>
                        <div class="input_40_n r confirm_txt_submit">
                        	<span><?php echo $_POST['select9'] ?> 年</span>
                        	<span><?php echo $_POST['select10'] ?>月</span>
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
                    <div class="clear"><span id="errorselect11"></span></div>
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
                     		<?php echo $_POST['text18']; ?>
                        </div>
                       
                        
                    </div>
                   
                </div><!--End Group txt-->
                
                 
                
              </div>
             <!--***************************************************-->
             
              
             
              <!--****************************************************-->
              	<div class="bg_yellow  while_txt clear">何をご覧になってアクセス頂きましたか？</div>
             <div class="bg_white content_inside block_content">
             
                
                 <div class="group_txt_form clear">
                	<div class="clear input_form">
                    	<div class="input_20 l">
                    	媒体
                        </div>
                       <div class="input_80 r confirm_txt_submit">
                    		<?php echo $_POST['select12']; ?>
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                
                
               </div>
             <!--***************************************************-->
             
             <!--****************************************************-->
             <div class="block_content clear">
             	<div class="form_back_button2 button-back">
                	<a title="Back" onclick="history.go(-1);return false" href="javascript:void(0);">
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
    
    
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>