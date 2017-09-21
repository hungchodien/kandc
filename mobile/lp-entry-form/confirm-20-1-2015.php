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
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
    <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>
       
        
        <!--End Content -->    
       <div id="content" class="inside confirm clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear"><img src="https://www.kandc.com/img/lb_entry/text-title.png" alt="キャリアコンサルタント、慎重に選んでますか？" /></p>
            <p class="sub_title_top_form while_txt clear">出会うコンサルタントによってこれからのあなたのキャリアが変わります。</p>
            <p class="sub_title_top_form while_txt clear">いいコンサルタントに出会うこと、それが転職成功の第一歩です。</p>
       </div>
       <?php
	   		
			$prev_input = "";
			$prev_input1 = "";
			$prev_radio = "";
			for ($i = 1; $i < 22; $i++):
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
       	<form name="frm_confirm" method="post" action="send_mail.php">
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
                       		経験社数
                        </div>
                        <div class="input_70 r confirm_txt_submit">
                       		<?php echo $_POST['text13']; ?> 社
                        </div>
                        
                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名・従業員数</div>
                    <div class="clear input_form">
                    	<div class="input_70 l confirm_txt_submit">
                       		<?php echo $_POST['text14']; ?>
                        </div>
                        <div class="input_30 r confirm_txt_submit">
                       	 	<?php echo $_POST['text15']; ?> 人
                        </div>
                        
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">業種</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['select6']; ?>
                        </div>
                        
                    </div>
                     <div class="clear"><span id="errorselect6"></span></div>
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
                    <div class="input_radio_option clear">
                        <div class="input_100 clear confirm_txt_submit"><?php echo $_POST['radio1']; ?></div>
                        
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
                	<div class="clear title_txt">最終部課／職位・年収</div>
                    <div class="clear input_form">
                    	<div class="input_80 l confirm_txt_submit">
                       		<?php echo $_POST['text16']; ?>
                        </div>
                        <div class="input_20 r confirm_txt_submit">
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
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">その他職歴</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                     		<?php echo $_POST['text19']; ?>
                        </div>
                       
                        
                    </div>
                    
                </div><!--End Group txt-->
                
              </div>
             <!--***************************************************-->
             
               <!--****************************************************-->
               <div class="bg_yellow while_txt clear">ご希望について</div>
             <div class="bg_white content_inside block_content">
             	
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">希望勤務地</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                    	 	<?php echo $_POST['text20']; ?>
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
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">その他</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                    	 	<?php echo $_POST['text21']; ?>
                        </div>
                       
                        
                    </div>
                    
                </div><!--End Group txt-->
                
               </div>
             <!--***************************************************-->
             
             <!--****************************************************-->
             <div class="block_content clear">
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
             
       </div><!--End content-->
    
    
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>