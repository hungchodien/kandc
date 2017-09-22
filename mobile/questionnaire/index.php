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
	 <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
			
					$('#top_site #menu_btn').css("display", "none");
					
					var allRadios1 = document.getElementsByName('s1');
					var booRadio1;
					var x1 = 0;
					for(x1 = 0; x1 < allRadios1.length; x1++){
					
							allRadios1[x1].onclick = function(){
					
								if(booRadio1 == this){
									this.checked = false;
							booRadio1 = null;
								}else{
								booRadio1 = this;
							}
							};
					
					 }
					var allRadios2 = document.getElementsByName('s2');
					var booRadio2;
					var x2 = 0;
					for(x2 = 0; x2 < allRadios2.length; x2++){
					
							allRadios2[x2].onclick = function(){
					
								if(booRadio2 == this){
									this.checked = false;
							booRadio2 = null;
								}else{
								booRadio2 = this;
							}
							};
					
					 }
					 var allRadios3 = document.getElementsByName('s3');
					var booRadio3;
					var x3 = 0;
					for(x3 = 0; x3 < allRadios3.length; x3++){
					
							allRadios3[x3].onclick = function(){
					
								if(booRadio3 == this){
									this.checked = false;
							booRadio3 = null;
								}else{
								booRadio3 = this;
							}
							};
					
					 }
					var allRadios4 = document.getElementsByName('s4');
					var booRadio4;
					var x4 = 0;
					for(x4 = 0; x4 < allRadios4.length; x4++){
					
							allRadios4[x4].onclick = function(){
					
								if(booRadio4 == this){
									this.checked = false;
							booRadio4 = null;
								}else{
								booRadio4 = this;
							}
							};
					
					 }
					 var allRadios5 = document.getElementsByName('s5');
					var booRadio5;
					var x5 = 0;
					for(x5 = 0; x5 < allRadios5.length; x5++){
					
							allRadios5[x5].onclick = function(){
					
								if(booRadio5 == this){
									this.checked = false;
							booRadio5 = null;
								}else{
								booRadio5 = this;
							}
							};
					
					 }
					var allRadios6 = document.getElementsByName('s6');
					var booRadio6;
					var x6 = 0;
					for(x6 = 0; x6 < allRadios6.length; x6++){
					
							allRadios6[x6].onclick = function(){
					
								if(booRadio6 == this){
									this.checked = false;
							booRadio6 = null;
								}else{
								booRadio6 = this;
							}
							};
					
					 }
					var allRadios9 = document.getElementsByName('s9');
					var booRadio9;
					var x9 = 0;
					for(x9 = 0; x9 < allRadios9.length; x9++){
					
							allRadios9[x9].onclick = function(){
					
								if(booRadio9 == this){
									this.checked = false;
							booRadio9 = null;
								}else{
								booRadio9 = this;
							}
							};
					
					 }
		 });
    </script>
  <?php /*?> <script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script><?php */?>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<!--Content-->

        <!--<div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>-->
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">キャリアコンサルティング満足度アンケート</p>
            <p class="sub_title_top_form while_txt clear">コンサルタントとのご面談を終えてのご感想、ご意見をお聞かせ下さい。下記項目を選択頂き、「内容確認に進む」ボタンを押してください。</p>
       </div>
       	<form id="submit_form" method="post" action="confirm.php">	
       		<input type="hidden" name="key" value="<?php echo isset($_GET["key"])?$_GET["key"]:''; ?>" id="key_id"/>
        	
            <div class="bg_white content_inside block_content mobile_entry_question" >
            
            	
               <?php /*?> <div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">メールアドレス<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		 <input class="text-personal-400" type="text" name="s0" id="s0" onfocus="click_text(this.id)" value="" onblur="IsEmail(this.value,this.id)" style="ime-mode:disabled;" />
                        </div>
                        <div class="input_other">
                       	  <input class="text-personal-400" type="text" name="s0_confirm" id="s0_confirm" value="" onfocus="click_text(this.id)"
                                    onblur="confirm_Email(document.forms['submit_form']['s0'].value, this.value, this.id)"/>
                        </div>
                        
                    </div>
                    <div class="clear"><span id="errors0"></span>&nbsp;<span id="errors0_confirm"></span></div>
                </div><!--End Group txt--><?php */?>
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q1. エントリーいただいた後、弊社からの対応のスピードはいかがでしたか</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p><input type="radio" name="s1" value="適切なタイミング" id="l19_0">
                                <label for="l19_0">適切なタイミング</label>
                            </p>
                            <p>
                             <input type="radio" name="s1" value="少し遅い"
                              id="l19_1">
                             <label for="l19_1">少し遅い</label>
                            </p>
                            <p>
                             <input type="radio" name="s1" value="遅かった"
                              id="l19_2">
                             <label for="l19_2">遅かった</label>	
                             </p>
                             <p id="errorrs1"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q2. 面談日程はご希望に添っていましたか </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
                            <input type="radio" name="s2" value="希望通り" id="l9_0">
                            <label for="l9_0">希望通り</label>
							</p>
                        	<p>
                             <input type="radio" name="s2" value="少し遅い" id="l9_1">
                             <label for="l9_1">少し遅い</label>
                        	</p>
                        	<p>
                             <input type="radio" name="s2" value="遅かった" id="l9_2">
                             <label for="l9_2">遅かった</label>
                         </p>
                         <p id="errorrs2"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
            	
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q3. ご提案した案件、内容は魅力的でしたか </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
                            <input type="radio" name="s3" value="魅力的だった" id="l16_0">
                            <label for="l16_0">魅力的だった</label>
                            </p>
                            <p>
                            <input type="radio" name="s3" value="普通" id="l16_1">
                             <label for="l16_1">普通</label>
                            </p>
                            <p>
                              <input type="radio" name="s3" value="あまり魅力を感じなかった" id="l16_2">
                              <label for="l16_2">あまり魅力を感じなかった</label>
                             </p>
                             <p>
                              <input type="radio" name="s3" value="案件の提案はなかった" id="l16_3">
                              <label for="l16_3">案件の提案はなかった</label>
                             </p>
                             <p id="errorrs3"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q4.ご提案した案件情報の詳しさはいかがでしたか </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
                            <input type="radio" name="s4" value="充実していて適切だった"  id="l15_1">
                            <label for="l15_1">充実していて適切だった</label>
                            </p>
                            <p>
                            <input type="radio" name="s4" value="普通"  id="l15_2">
                            <label for="l15_2">普通</label>
                            </p>
                            <p>
                             <input type="radio" name="s4" value="もっと詳しく知りたかった"  id="l15_99">
                            <label for="l15_99">もっと詳しく知りたかった</label>
                             </p>
                             <p>
                             <input type="radio" name="s4" value="案件の提案はなかった"  id="l15_991">
                             <label for="l15_991">案件の提案はなかった</label>
                             </p>
                             <p id="errorrs4"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q5.ご面談にて「自分のことをよく理解してくれた」と感じましたか </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   			<p>
                         <input type="radio" name="s5" value="良く理解してくれた"  id="l2_0">
 						 <label for="l2_0">良く理解してくれた</label>
						</p>
                        <p>
                        <input type="radio" name="s5" value="普通" id="l2_1">
 						<label for="l2_1">普通</label>
                        </p>
                        <p>
                         <input type="radio" name="s5" value="理解してもらえなかった"  id="l2_2">
 						<label for="l2_2">理解してもらえなかった</label>
                         </p>
                         <p id="errorrs5"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q6.キャリアに関するアドバイスは参考になりましたか </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input type="radio" name="s6" value="とても参考になった" id="l13_0">
 						 <label for="l13_0">とても参考になった</label>
						</p>
                        <p>
                        <input type="radio" name="s6" value="参考になった"  id="l13_1">
 						<label for="l13_1">参考になった</label>
                        </p>
                        <p>
                         <input type="radio" name="s6" value="普通" id="l13_2">
 						 <label for="l13_2">普通</label>
                         </p>
                         <p>
                         <input type="radio" name="s6" value="あまり参考にならなかった" id="l13_99">
 						 <label for="l13_99">あまり参考にならなかった</label>
                         </p>
                         <p id="errorrs6"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">Q7.面談にもっとも期待していたことは何ですか その期待にお答えできましたか</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                        <textarea type="text" name="s7" id="s7" onfocus="click_text(this.id)"></textarea>
                         </p>
                         <p id="errorrs7"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
                
               
               <div class="group_txt_form clear">
                	<div class="clear title_txt">Q8. エントリーから面談までの総合的な満足度をお教えください  </div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                         <input type="radio" name="s8" value="とても満足" id="l199_0">
 						 <label for="l199_0">とても満足</label>
						</p>
                        <p>
                        <input type="radio" name="s8" value="どちらかといえば満足"  id="l199_1">
 						<label for="l199_1">どちらかといえば満足</label>
                        </p>
                        <p>
                         <input type="radio" name="s8" value="普通" id="l199_2">
 						 <label for="l199_2">普通</label>
                         </p>
                         <p>
                         <input type="radio" name="s8" value="不満" id="l199_3">
 						 <label for="l199_3">不満</label>
                         </p>
                         <p id="errorrs8"></p>
                        </div>
                        
                    </div>
                    
                </div><!--group_txt_form-->
               
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">Q9.その他ご意見・ご感想がございましたら、お聞かせください</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                   		<p>
                        <textarea type="text" name="s9" id="s9"></textarea>
                        </p>
                         <p id="errorrs9"></p>
                        </div>
                    </div>
                </div><!--group_txt_form-->
                
             </div><!--content_inside-->
             
             
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