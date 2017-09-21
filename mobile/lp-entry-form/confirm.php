<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />-->
<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
<title>エントリー（今すぐ転職をお考えのあなた） | ヘッドハンティング・人材紹介会社・転職のクライス&amp;カンパニー</title>
<meta content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,キャリアデザイン,転職サポート" name="keywords">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" name="description"/>
<meta content="ヘッドハンティング・人材紹介会社・転職エージェント・キャリアコンサルティングのクライス&カンパニー" property="og:title">
<meta content="数ある転職エージェントの中で私たちクライス&カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" property="og:description"/>
<meta content="株式会社クライス＆カンパニー" name="author"/>
<meta content="Copyright©2013 KREIS&Company Inc.　All Right Reserved." name="copyright"/>

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
?>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>nivo-slider/nivo-slider.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root; ?>js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script src="<?php echo $protocol; ?>//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $protocol; ?>//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.nivo.slider.js"></script>
<script src="<?php echo url_root; ?>js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/show_layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/smoothDivScroll.css" media="all"/>
<script src="<?php echo url_root; ?>js/validate_form_entry.js" type="text/javascript"></script>
<script type="text/javascript">
		var isMobile = window.matchMedia("only screen and (min-width: 760px)");
			if (isMobile.matches) 
				{
							//	alert("mobile");
							document.location = "https://www.kandc.com/lp-entry/";
				}
</script>
<script type="text/javascript">
	jQuery(document).ready(function($){
	
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
		$('#menu_btn a#show_menu_hover').click(function () {
			//$(this).hide();
			$("#wrapper").show()
			.css({right:0,position:'absolute'})
			.animate({right:"100%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '100%',right:'0%'}, '500', function() {
			$('#overlay').show();
			});
			});
			$('a.hide_menu_hover').click(function () {
			//$(this).hide();
			$("#wrapper").show()
			.css({right:'100%',position:'absolute'})
			.animate({right:"0%"}, 500, function() {
			});
			$('#top_menu').show()
			.animate({width: '0%',right:'-100%'}, '500', function() {
			$('#overlay').hide();
			$('#top_menu').hide();
			});
			}); 
			
			
		 $('.interview_selected_category').change(function(){ 
					url= $(this).val(); 
					location.href =$(this).val(); 
					$('.interview_selected_category').find("option[value='"+url+"']").attr("selected", "selected");
		 });
			
       	$(window).on('load resize', function () {
			var height_browse=$(window).height();
			var height_body=$(document).height();
			var width_body=$(window).width();
			
		});

    });
</script>
</head>

<body>
<div id="wrapper" class="wrapper">
<header>
  <div id="top_site" class="clear inside">
    <h1 class="logo clear"><a href="<?php echo url_root; ?>"><img title="株式会社クライス&カンパニー" alt="株式会社クライス&カンパニー" src="<?php echo url_root; ?>img/logo-kreis.png" /></a></h1>
  
  </div>
</header>

	<!--End Content -->    
       <div id="content" class="inside clear">
       		<div class="content_single clear">

       <?php
	   		
			$check_value_robot=$_POST['text8'];
			if($_POST['text8']==$_POST['text9']):
				$_SESSION['secur']=$check_value_robot;
			endif;

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
             <div class="block_content tbl_butt  clear">
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
             
      
           
           </div><!--.content single-->
       </div><!--End content-->
    
    
 <footer>
  <div id="foot" class="inside">
    <div id="foot_copyR" class="clear">
		<div class="group_footer_r clear icon_back_index">
      	<a class="back_kandc_lb-mobile" href="<?php echo url_root; ?>"><img src="<?php echo url_root; ?>img/lp-entry-form/button_back.png" /></a>
      	</div>

    	<div class="clear group_footer_l">

      <p class="txt1-f">株式会社 クライス&カンパニー</p>
      <p id="copyR">Copyright&copy;2015 KREIS &amp; Company Inc. All Rights Reserved. webdesign <a href="http://tokyodesignroom.com/" title="webdesign tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>

		
                	
                

		</div>
        
	  
	</div>
   </div>
  </footer>
  
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2905089-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- リマーケティング タグの Google コード -->
<!--
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Google Code for &#12473;&#12510;&#12507;&#12506;&#12540;&#12472;&#35370;&#21839; -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 967277328;
var google_conversion_label = "iNEACNis2CMQkPadzQM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=0&amp;label=iNEACNis2CMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



</body>



</html>

<?php 
	ob_flush();
?>