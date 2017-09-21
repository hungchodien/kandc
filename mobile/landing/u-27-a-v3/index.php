<?php
	ob_start();
	session_start();
?>
<?php
	@include('../../config_mobile.php');
	
	if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}
	
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
<?php include('inc/config_headhunter.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,クライス&カンパニー,東大,早大,慶大,ヘッドハンター" />
<meta name="description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。
" />


<meta PROPERTY="og:title" content="30代、上場企業でご活躍中のあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="https://kandc.com/mobile/landing/fbcollege-a/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。
" />
<meta PROPERTY="og:image" content="http://www.kandc.com/landing/headhunter-a/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代、上場企業でご活躍中のあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />


<title>20代のキャリア支援 クライスU-27　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_headhunter; ?>css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!--[if lt IE 9]>
<script src="<?php echo url_root_headhunter; ?>js/html5.js" type="text/javascript"></script>
<script src="<?php echo url_root_headhunter; ?>/js/selectivizr.js" type="text/javascript"></script>
<script src="<?php echo url_root_headhunter; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .consultant_block, .voice_box {
       filter: none;
    }
  </style>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>

<script src="js/validate_form_entry.js" type="text/javascript"></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="auto_ruby.js"></script>
<script src="//www.kandc.com/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/sliding.form.js"></script>
<?php /*?><script type="text/javascript" src="<?php echo url_root_domain; ?>js/number_check.js"></script>
<script type="text/javascript" src="<?php echo url_root_domain; ?>js/common_funcs.js"></script><?php */?>
<!--scroll to top-->
<script type="text/javascript">
	jQuery(document).ready(function($){
		
		//$this.closest('ul').find('li').
		var stepsWidth	= 0;
		var widths 		= new Array();
		$('#main .step').each(function(i){
			//console.log("item:"+i)
			var $step 		= $(this);
			$(this).width($('#wrapper_container_group').width());
			//console.log("item:"+i+"width:"+$step.width())
			widths[i]  		= stepsWidth;
			stepsWidth	 	+= $step.width();
		});
		$('#main').width(stepsWidth);
		
		
		 $(".step .answers ul li").delegate("a","click", function(e){
			  var value_select=$(this).text();
			  $(this).closest('.step').find('li').removeClass('a_check');
			  var data_step=$(this).closest('.step').attr('data-tag');
			 
			  $(this).parent().addClass('a_check');
			  
			  var data_step=$(this).closest('.step').attr('data-tag');
			  var width_total=$('#wrapper_container_group').width();
				if(data_step==3){
					$('#headhunter_short_form').show();
				}
				$(this).closest('.step').find('.error_btn').empty();
				$('#main').stop().animate({
					marginLeft: '-' + width_total*data_step + 'px'
				},500,function(){
					 $('#step_input'+data_step).val(value_select);
				});
			  
			  e.preventDefault();
		 });
		 $(".step .submit_form_button2").delegate("button.button-confirm","click", function(e){
			 	e.preventDefault();
			 	var data_step=$(this).closest('.step').attr('data-tag');
				
				if($(this).closest('.step').find('li.a_check').length==0){
					$(this).closest('.step').find('.error_btn').text("必須項目です。必ずご選択ください。");
					return;
				}
				else
				{
					$(this).closest('.step').find('.error_btn').empty();
					var a_check=$(this).closest('.step').find('li.a_check').find('a').text();
					//var next_slide=data_step+1;
					var width_total=$('#wrapper_container_group').width();
					if(data_step==3){
						$('#headhunter_short_form').show();
					}
					$('#main').stop().animate({
						marginLeft: '-' + width_total*data_step + 'px'
					},500,function(){
						$('#step_input'+data_step).val(a_check);
					});
				}
				e.preventDefault();
		});
		 $(".step .button-back").delegate("a.back_pre","click", function(e){
			 	var data_step=$(this).closest('.step').attr('data-tag');
				$(this).closest('.step').find('.error_btn').empty();
				var pre=parseInt(data_step)-2;
			    var width_total=$('#wrapper_container_group').width();
				
				var padding_main=parseInt($("#main").css("marginLeft").replace('px', ''));
				
				var current_marginleft=padding_main+width_total;
				//console.log("Padding Main: "+padding_main+" Pre"+data_step);
				if(padding_main==0){
					var mg_l=-parseInt(current_marginleft*pre);
				}else{
					var mg_l=current_marginleft;
				}
				//console.log("marginleft: "+mg_l);
				$('#main').stop().animate({
					marginLeft:+ mg_l + 'px'
				},500,function(){
					$('#main .step').each(function(i){
							$(this).removeClass('display_none');
					});
					$('#main #group_step').removeClass('display_none');
					$('#headhunter_short_form').hide();
				});
			 	e.preventDefault();
				
		 });
		 
		 
		 
		 
		 
			$(".form_entry_two").delegate(".back_from_confirm","click", function(){
					 	$(".form_entry_two").css({
							"display":"none"
						});
						$(".headhunter_short_form").css({
							"display":"block"
						});
						$(".form_entry_index_begin").css({
							"display":"block"
						});
						
						$('body,html').animate({
							scrollTop: $('#headhunter_short_form').offset().top
						}, 800);
						return false;
			});
			$('#confirm_form').on('submit', function () {
					new_var = false;
					return true;
			});
				  
				  
				 /*$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
				});
				$("#text2").on("keypress keyup keydown",function (event) {   
						setRuby('text2','text4');
						//alert("ok");
				}); */
				  
				
	});
			
			//warning message
			/*var new_var = true;
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
			}*/
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->

</head>

<body>

<header class="clear site_header">
<div class="clear wrapper_site_header">
<div class="group_header_top clear">
		<div class="logo">
    		<a href="<?php echo url_root_headhunter; ?>">
        	<img alt="株式会社クライス＆カンパニー" src="<?php echo url_root_headhunter; ?>img/logo-kreis-company.png" />
            <h2 class="logo_title">クライス&amp;カンパニー</h2>
            </a>
           </div>
    <h1 class="site_description">20代のキャリア支援<span>クライスU-27</span></h1>
   </div>
 </div>
</header>
     <div class="layer_regional_bg_entry"></div>
      
<div id="wrapper_container_group" class="clear wrapper_container_group">      
	<div class="main_top inside">
              <p class="main_img"><img alt="年収1000万円超ハイクラスキャリアを目指す20代へ　専属キャリアコンサルタントに相談してみませんか？　クライスU-27" src="<?php echo url_root_headhunter; ?>img/top_img.png" /></p>
            <div class="main_titles">
                <h3 class="main_title2"><img alt="年収1000万円超ハイクラスキャリアを目指す20代へ" src="<?php echo url_root_headhunter; ?>img/main-title1.png" /></h3>
                <h2 class="main_title1"><img alt="専属キャリアコンサルタントに相談してみませんか？" src="<?php echo url_root_headhunter; ?>img/main-title2.png" /></h2>
            </div>
    </div><!--main_top-->  
      
    <div id="main" class="container_entry_ld step_form_main clear">         
        <div id="group_step" class="form_entry_first_header form_entry_first page1 <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">        
            
        
        <div id="step1" data-tag="1" class="step clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
            <?php /*?><div class="inside">
            <div class="grau_bg">
            <p class="percent orange">25% <span class="percent_bar"><i class="percent25"></i></span></p>
            </div>
            </div><?php */?>
            
            <div class="qa inside">
            <div class="wrapper">
            <p class="q orange">Q1</p>
            <p class="q_txt">これまでのキャリアに満足していますか？<span class="orange">※</span></p>
            <div class="answers orange">
            <ul class="clear">
            <li><a href="#">100％満足</a></li>
            <li><a href="#">まあ満足</a></li>
            </ul>
            <ul class="clear">
            <li><a href="#">普通</a></li>
            <li><a href="#">不満がある</a></li>
            </ul>
            </div>
            	<div class="error_btn clear"></div>
                <div class="step_btn clear">
                <div class="submit_form_button2">
                <button type="button" class="button-confirm">次へすすむ</button>
                </div>
                </div>
            </div>
            </div>
        </div><!--end #step1 -->
        
        <div id="step2" data-tag="2" class="step clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
            <?php /*?><div class="inside">
            <div class="grau_bg">
            <p class="percent orange">50% <span class="percent_bar"><i class="percent50"></i></span></p>
            </div>
            </div><?php */?>
            
            <div class="qa inside">
            <div class="wrapper">
            <p class="q orange">Q2</p>
            <p class="q_txt">他にやりたい仕事はありますか？<span class="orange">※</span></p>
            <div class="answers orange">
            <ul class="clear">
            <li><a href="#">ある</a></li>
            <li><a href="#">ない</a></li>
            </ul>
            </div>
            	<div class="error_btn clear"></div>
                <div class="step_btn clear">
                <div class="submit_form_button2">
                    <button type="button" class="button-confirm">次へすすむ</button>
                </div>
                <div class="form_back_button2 button-back back_from_confirm"><a class="back_pre" title="Back"  href="javascript:void(0);">戻る</a></div>
                
                </div>
            </div>
            </div>
        </div><!--end #step2 -->
        
        <div id="step3" data-tag="3" class="step clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>" >
            <?php /*?><div class="inside">
            <div class="grau_bg">
            <p class="percent orange">75% <span class="percent_bar"><i class="percent75"></i></span></p>
            </div>
            </div><?php */?>
            
            <div class="qa inside">
            <div class="wrapper">
            <p class="q orange">Q3</p>
            <p class="q_txt">転職を考えたことはありますか？<span class="orange">※</span></p>
            <div class="answers orange">
            <ul class="clear">
            <li><a href="#">ある</a></li>
            <li><a href="#">ない</a></li>
            </ul>
            </div>
                <div class="error_btn clear"></div>
                <div class="step_btn clear">
                <div class="submit_form_button2">
                    <button type="button" class="button-confirm">次へすすむ</button>
                </div>
                <div class="form_back_button2 button-back back_from_confirm"><a class="back_pre" title="Back"  href="javascript:void(0);">戻る</a></div>
                
                </div>
            </div>
            </div>
        </div><!--end #step3 -->
        
                 
        </div><!--end confirm_hide -->        
             
        <div id="headhunter_short_form" class="headhunter_form_content inside step clear" data-tag="4" style="<?php if(!empty($_POST)): echo 'display:block;'; endif; ?>">
           <?php /*?> <div class="grau_bg">
            <p class="percent orange">100% <span class="percent_bar"><i class="percent100"></i></span></p>
            </div><?php */?>
            <div class="wrapper">
            
                  <!--End Content -->    
                   <div id="content" class="inside clear form_entry_first clear form_entry_index_begin <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
                   <!--****************************************************-->
                   
                    <form id="submit_form" method="post" action="">	
                        <input type="hidden" id="step_input1" value="<?php if(!empty($_POST)): echo $_POST['step_input1']; endif; ?>" name="step_input1" autocomplete="off"/>
                        <input type="hidden" id="step_input2" value="<?php if(!empty($_POST)): echo $_POST['step_input2']; endif; ?>" name="step_input2" autocomplete="off"/>
                        <input type="hidden" id="step_input3" value="<?php if(!empty($_POST)): echo $_POST['step_input3']; endif; ?>" name="step_input3" autocomplete="off"/>
                    <?php 
                        $entry_id=$_GET['entry_id'];
                        echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
                    ?>
                        
                        <div class="page1 bg_white content_inside block_content">
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">お名前 <span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_100 l">
                                     <input id="text1" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text1']; endif; ?>" name="text1" onfocus="click_text(this.id)" />
                                    </div>
                                    
                                </div>
                                <div class="clear">
                                         <span id="errortext12"></span>
                                </div>
                                
                            </div><!--End Group txt-->
                            
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">フリガナ <span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_100 l">
                                <input id="text3" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text3']; endif; ?>" name="text3" onfocus="click_text(this.id)"/>
                                    </div>
                                    
                                </div>
                                <div class="clear">
                                         <span id="errortext34"></span>
                                </div>
                            </div><!--End Group txt-->
                            
                            
                            
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">生年月日<span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_60_n l clear">
                                    <div class="input_50 l">
                                    <select id="select1" name="select1" class="selection selection-style">
                                           <option value="">　選択</option>
                                            <?php $star = 1933;
                                            $end = 1998;
                                            for ($end; $star <= $end; $end--) {
                                                ?>
                                                <option value="<?php echo $end ?>" 
                                                <?php if(!empty($_POST)): $select1_sl= (int)$_POST['select1']; ?>
                                                        <?php if($end==$select1_sl): ?>
                                                            selected="selected"
                                                        <?php endif; ?>
                                                 <?php endif; ?>
                                                 ><?php echo $end ?></option>
                                            <?php } ?>
                                                                                
                                                                        </select>
                                    </div>
                                    <div class="input_50 r">
                                     <select id="select2" name="select2" class="selection selection-style">
                                            <option value="">　選択</option>
                                        <?php $moth = 1;
                                        $endMoth = 12;
                                        for ($moth; $moth <= $endMoth; $moth++) {
                                            ?>
                                            <option value="<?php echo $moth ?>"
                                            
                                            <?php if(!empty($_POST)): $select2_sl= (int)$_POST['select2']; ?>
                                                        <?php if($moth==$select2_sl): ?>
                                                            selected="selected"
                                                        <?php endif; ?>
                                                 <?php endif; ?>
                                                 
                                            ><?php echo $moth ?></option>
                                        <?php } ?>
                                                                       
                                                                    </select>
                                    </div>
                                    </div>
                                     <div class="input_30_n r">
                                    <select id="select3" name="select3" class="selection selection-style">
                                            <option value="">選択</option>
                                        <?php $day = 1;
                                        $endDay = 31;
                                        for ($day; $day <= $endDay; $day++) {
                                            ?>
                                            <option value="<?php echo $day ?>" 
                                             <?php if(!empty($_POST)): $select3_sl= (int)$_POST['select3']; ?>
                                                        <?php if($day==$select3_sl): ?>
                                                            selected="selected"
                                                        <?php endif; ?>
                                                 <?php endif; ?>
                                            ><?php echo $day ?></option>
                                        <?php } ?>
                                                                        
                                                                    </select>
                                    </div>
                                </div>
                                    <div class="clear">
                                       <span id="errorselect123"></span>
                                   </div>
                            </div><!--End Group txt-->
                            
                            
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">緊急連絡先<span class="notice">※</span><span style="font-size:11px; font-weight:normal">(お電話番号)</span></div>
                                <div class="clear input_form">
                                    <div class="input_other">
                                        <input type="tel" value="<?php if(!empty($_POST)): echo (int)$_POST['text5']; endif; ?>" id="text5" name="text5" onfocus="click_text(this.id)" style="ime-mode:disabled;"  placeholder="＊0357331602(ハイフンは不要です)" />
                                    </div>
                                    
                                </div>
                                <div class="clear">
                                    <span id="errortext567"></span>
                                </div>
                            </div><!--End Group txt-->
                            
                            
                            
                            <div class="group_txt_form group_txt_form_end clear">
                                <div class="clear title_txt">メールアドレス<span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_other">
                                        <input type="email" value="<?php if(!empty($_POST)): echo $_POST['text8']; endif; ?>" id="text8" name="text8"  onfocus="click_text(this.id)"  inputmode="verbatim" style="ime-mode:inactive;" placeholder="example@kandc.com" />
                                    </div>
                                    <!--<div class="input_other">
                                     <input type="text"  value="" id="text9" name="text9">
                                    </div>-->
                                    
                                </div>
                                <div class="clear">
                                    <span id="errortext89"></span>
                                </div>
                            </div><!--End Group txt-->
                         
                         
                             <div class="group_txt_form clear">
                                <div class="clear title_txt">最終学歴<span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_100 l">
                                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text4']; endif; ?>" id="text4" name="text4" onfocus="click_text(this.id)"/>
                                    </div>
                                </div>
                                <div class="clear">
                                    <span id="errortext4"></span>
                                </div>
                            </div><!--End Group txt-->
                            
                            
                             <div class="group_txt_form clear">
                                <div class="clear title_txt">会社名</div>
                                <div class="clear input_form">
                                    <div class="input_100 l">
                                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text14']; endif; ?>" id="text14" name="text14" onfocus="click_text(this.id)"/>
                                    </div>
                                   <!-- <div class="input_20 r">
                                     <input type="text" value="" id="text15" name="text15"/>
                                    </div>-->
                                    
                                </div>
                                
                            </div><!--End Group txt-->
                          
                            
                            <?php /*?> <div class="group_txt_form clear">
                                <div class="clear title_txt">職種<span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_100">
                                         <?php if(!empty($_POST)): $select11_sl= $_POST['select11']; endif; ?>
                                        <select id="select11" name="select11" class="selection">
                                            <option value="">下記より選択してください</option>
                                            <option value="コンサルタント" <?php if($select11_sl=='コンサルタント'):?> selected="selected"  <?php endif; ?>>コンサルタント</option>
                                            <option value="コンサルタント（IT）" <?php if($select11_sl=='コンサルタント（IT）'):?> selected="selected"  <?php endif; ?>>コンサルタント（IT）</option>
                                            <option value="ITハード系エンジニア" <?php if($select11_sl=='ITハード系エンジニア'):?> selected="selected"  <?php endif; ?>>ITハード系エンジニア</option>
                                            <option value="ソフトウェアエンジニア" <?php if($select11_sl=='ソフトウェアエンジニア'):?> selected="selected"  <?php endif; ?>>ソフトウェアエンジニア</option>
                                            <option value="WEB・モバイル関連" <?php if($select11_sl=='WEB・モバイル関連'):?> selected="selected"  <?php endif; ?>>WEB・モバイル関連</option>
                                            <option value="その他ソフトウェア関連" <?php if($select11_sl=='その他ソフトウェア関連'):?> selected="selected"  <?php endif; ?>>その他ソフトウェア関連</option>
                                            <option value="機械・メカトロニクスエンジニア" <?php if($select11_sl=='機械・メカトロニクスエンジニア'):?> selected="selected"  <?php endif; ?>>機械・メカトロニクスエンジニア</option>
                                            <option value="電気・電子・半導体エンジニア" <?php if($select11_sl=='電気・電子・半導体エンジニア'):?> selected="selected"  <?php endif; ?>>電気・電子・半導体エンジニア</option>
                                            <option value="化学系" <?php if($select11_sl=='化学系'):?> selected="selected"  <?php endif; ?>>化学系</option>
                                            <option value="バイオ・メディカル系" <?php if($select11_sl=='バイオ・メディカル系'):?> selected="selected"  <?php endif; ?>>バイオ・メディカル系</option>
                                            <option value="経営企画・事業企画" <?php if($select11_sl=='経営企画・事業企画'):?> selected="selected"  <?php endif; ?>>経営企画・事業企画</option>
                                            <option value="営業企画" <?php if($select11_sl=='営業企画'):?> selected="selected"  <?php endif; ?>>営業企画</option>
                                            <option value="業務企画" <?php if($select11_sl=='業務企画'):?> selected="selected"  <?php endif; ?>>業務企画</option>
                                            <option value="商品・サービス企画" <?php if($select11_sl=='商品・サービス企画'):?> selected="selected"  <?php endif; ?>>商品・サービス企画</option>
                                            <option value="IR" <?php if($select11_sl=='IR'):?> selected="selected"  <?php endif; ?>>IR</option>
                                            <option value="広報" <?php if($select11_sl=='広報'):?> selected="selected"  <?php endif; ?>>広報</option>
                                            <option value="マーケティング" <?php if($select11_sl=='マーケティング'):?> selected="selected"  <?php endif; ?>>マーケティング</option>
                                            <option value="総務" <?php if($select11_sl=='総務'):?> selected="selected"  <?php endif; ?>>総務</option>
                                            <option value="法務" <?php if($select11_sl=='法務'):?> selected="selected"  <?php endif; ?>>法務</option>
                                            <option value="人事" <?php if($select11_sl=='人事'):?> selected="selected"  <?php endif; ?>>人事</option>
                                            <option value="経理・財務・会計" <?php if($select11_sl=='経理・財務・会計'):?> selected="selected"  <?php endif; ?>>経理・財務・会計</option>
                                            <option value="秘書" <?php if($select11_sl=='秘書'):?> selected="selected"  <?php endif; ?>>秘書</option>
                                            <option value="事務・庶務" <?php if($select11_sl=='事務・庶務'):?> selected="selected"  <?php endif; ?>>事務・庶務</option>
                                            <option value="営業" <?php if($select11_sl=='営業'):?> selected="selected"  <?php endif; ?>>営業</option>
                                            <option value="販売・サービス" <?php if($select11_sl=='販売・サービス'):?> selected="selected"  <?php endif; ?>>販売・サービス</option>
                                            <option value="金融関連職" <?php if($select11_sl=='金融関連職'):?> selected="selected"  <?php endif; ?>>金融関連職</option>
                                            <option value="建設・建築・土木系" <?php if($select11_sl=='建設・建築・土木系'):?> selected="selected"  <?php endif; ?>>建設・建築・土木系</option>
                                            <option value="インストラクター" <?php if($select11_sl=='インストラクター'):?> selected="selected"  <?php endif; ?>>インストラクター</option>
                                            <option value="トップマネジメント" <?php if($select11_sl=='トップマネジメント'):?> selected="selected"  <?php endif; ?>>トップマネジメント</option>
                                            <option value="ロジスティクス・購買関連" <?php if($select11_sl=='ロジスティクス・購買関連'):?> selected="selected"  <?php endif; ?>>ロジスティクス・購買関連</option>
                                            <option value="エスタブリッシュメント職" <?php if($select11_sl=='エスタブリッシュメント職'):?> selected="selected"  <?php endif; ?>>エスタブリッシュメント職</option>
                                            <option value="クリエイティブ系" <?php if($select11_sl=='クリエイティブ系'):?> selected="selected"  <?php endif; ?>>クリエイティブ系</option>
                                            <option value="デザイナー" <?php if($select11_sl=='デザイナー'):?> selected="selected"  <?php endif; ?>>デザイナー</option>
                                            <option value="コールセンター" <?php if($select11_sl=='コールセンター'):?> selected="selected"  <?php endif; ?>>コールセンター</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="clear"><span id="errorselect11"></span></div>
                            </div><!--End Group txt--><?php */?>
                            
                             <?php /*?><div class="group_txt_form clear">
                                <div class="clear title_txt">年収<span class="notice">※</span></div>
                                <div class="clear input_form">
                                    <div class="input_80 l">
                                      <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text17']; endif; ?>" id="text17" name="text17" onfocus="click_text(this.id)" placeholder="" style="ime-mode:disabled;" pattern="[0-9]*"/>
                                    </div>
                                    <div class="l" style="margin-left:10px; margin-top:5px;">万円</div>
                                    
                                </div>
                                 <div class="clear"><span  id="errorselect17"></span></div>
                            </div><!--End Group txt--><?php */?>
                            
                            
                            
                            
                            
                         </div>
                         <!--****************************************************-->
                       <?php 
								@include('../inc/link_privacy_policy.php'); 
								@include('../../inc/link_privacy_policy.php'); 
		
							?>
                         <!--****************************************************-->
                         <div class="step_btn step_form_btn clear">
            <div class="submit_form_button2">
                <input type="submit" value="同意して内容確認へ " id="submit" name="Submit" class="button-confirm">
            </div>
            <div class="form_back_button2 button-back back_from_confirm"><a class="back_pre" title="Back"  href="javascript:void(0);">戻る</a></div>
            
            </div>
                         <?php /*?><div class="page1 block_content clear">
                            <div class="submit_form_button">
                                 <input type="submit" value="同意して内容確認へ " id="submit" name="Submit" class="button-confirm">
                                
                            </div>
                           
                            
                         </div><?php */?>
                         <!--***************************************************-->
                         
                          <!--****************************************************-->
                         <div class="page2 block_content clear">
                            <div class="form_back_button2 button-back">
                                <a href="javascript:void(0);" title="Back">戻る</a>
                            </div>
                            <div class="submit_form_button2">
                                 <input type="submit" class="button-confirm" name="Submit" id="submit" value="内容確認に進む">
                                 
                            </div>
                         </div>
                         <!--***************************************************-->
                         
                         
                         
                         
                         
                         </form>
                   </div><!--End content-->
                
             <!--***********************************************************************************************************************-->   
                
                
                
                <!--Confirm form-->
                
                
                 <!--End Content -->    
                   <div id="content" class="inside confirm form_entry_two <?php if(empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?> clear">
                   <!--****************************************************-->
                   <div class="title_notice clear">
                       <?php /*?> <p class="title_top_form yellow clear">エントリーフォーム</p><?php */?>
                       
                   </div>
                   <?php
                        
                        $prev_input = "";
                        $prev_input1 = "";
                        $prev_radio = "";
                        for ($i = 1; $i < 23; $i++):
                            $col = "text{$i}";
                            $val = $_POST["text" . $i];
                            $prev_input .= "<input type='hidden' name='{$col}' value='{$val}' id='{$col}'>";
                        endfor;
                        $user_email = $_POST['text8'];
                        for ($j = 1; $j < 15; $j++):
                            $col1 = "select{$j}";
                            $val2 = $_POST["select" . $j];
                            $prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
                        endfor;
						for ($m = 1; $m < 4; $m++):
                            $col_in  = "step_input{$m}";
                            $val_in = $_POST["step_input" . $m];
                            $prev_input2 .= "<input type='hidden' name='{$col_in}' value='{$val_in}' id='{$col_in}_post'>";
                        endfor;
                        $radio1=$_POST['radio1'];
                        $entry_id = $_POST['entry_id'];
                        $prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
                        $prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
                        ?>
                    <form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
                    <?php
                        echo $prev_input;
                        echo $prev_input1;
						echo $prev_input2; 
                        echo $prev_radio;
            
                    ?>
                    <div class="bg_white content_inside block_content">
                    
                    	<div class="group_txt_form clear">
                                <div class="clear title_txt">これまでのキャリアに満足していますか？ </div>
                                <div class="clear input_form">
                                    <div class="input_100 l confirm_txt_submit">
                                        <?php echo $_POST['step_input1']; ?>
                                    </div>
                                   
                                </div>
                            </div><!--End Group txt-->
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">他にやりたい仕事はありますか？ </div>
                                <div class="clear input_form">
                                    <div class="input_100 l confirm_txt_submit">
                                        <?php echo $_POST['step_input2']; ?>
                                    </div>
                                   
                                </div>
                            </div><!--End Group txt-->
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">転職を考えたことはありますか？ </div>
                                <div class="clear input_form">
                                    <div class="input_100 l confirm_txt_submit">
                                        <?php echo $_POST['step_input3']; ?>
                                    </div>
                                   
                                </div>
                            </div><!--End Group txt-->
                    
                          <div class="group_txt_form clear">
                                <div class="clear title_txt">お名前 </div>
                                <div class="clear input_form">
                                    <div class="input_100 l confirm_txt_submit">
                                        <?php echo $_POST['text1']; ?>
                                    </div>
                                   
                                </div>
                            </div><!--End Group txt-->
                            
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">フリガナ </div>
                                <div class="clear input_form">
                                    <div class="input_100 l confirm_txt_submit">
                                         <?php echo $_POST['text3']; ?>
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
                                <div class="clear title_txt">緊急連絡先</div>
                                <div class="clear input_form">
                                    <div class="input_100 clear confirm_txt_submit">
                                      <span><?php echo $_POST['text5']; ?> </span>
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
                            
                            <div class="group_txt_form clear">
                                <div class="clear title_txt">最終学歴</div>
                                <div class="clear input_form">
                                    <div class="input_100 clear confirm_txt_submit">
                                        <span><?php echo $_POST['text4']; ?>   </span>
                                    </div>
                                    
                                </div>
                            </div><!--End Group txt-->
                            
                             <div class="group_txt_form clear">
                                <div class="clear title_txt">会社名</div>
                                <div class="clear input_form">
                                    <div class="input_100 clear confirm_txt_submit">
                                        <?php echo $_POST['text14']; ?>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div><!--End Group txt-->
                            
                           
                            
                            <?php /*?> <div class="group_txt_form clear">
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
                            </div><!--End Group txt--><?php */?>
                            
                         </div>
                         
                         
                        
                         <div class="block_content clear">
                            <div class="form_back_button2 button-back back_from_confirm">
                                <a title="Back"  href="javascript:void(0);">戻る</a>
                            </div>
                            <div class="submit_form_button2">
                                 <input type="submit" value="申し込む" id="submit" name="Submit" class="button-confirm">
                                
                            </div>
                            
                         </div>
                         <!--***************************************************-->
                         
                         </form>
                         
                   </div><!--End content-->
                
                
               </div><!--end wrapper  -->   
        </div><!--end headhunter_form_content  -->  
        
     </div><!--main-->   
</div><!--wrapper-->
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
    <?php 
		//$google_check="entry";
	?>

    
<footer class="the_footer grau_bg">

  <div class="wrapper">
       
    <p class="copyR">Copyright&copy;KREIS&amp;Company All Rights Reserved.<br />webdesign <a href="http://tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>
    
    </div>



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
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/967277328/?value=1.00&amp;currency_code=JPY&amp;label=iNEACNis2CMQkPadzQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">/* <![CDATA[ */(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');/* ]]> */</script>
<!-- End Google Tag Manager -->


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

<!-- User Insight PCDF Code Start : kandc.com -->
<script type="text/javascript">
/* <![CDATA[ */
<!--
var _uic = _uic ||{}; var _uih = _uih ||{};_uih['id'] = 51747;
_uih['lg_id'] = '';
_uih['fb_id'] = '';
_uih['tw_id'] = '';
_uih['uigr_1'] = ''; _uih['uigr_2'] = ''; _uih['uigr_3'] = ''; _uih['uigr_4'] = ''; _uih['uigr_5'] = '';
_uih['uigr_6'] = ''; _uih['uigr_7'] = ''; _uih['uigr_8'] = ''; _uih['uigr_9'] = ''; _uih['uigr_10'] = '';

/* DO NOT ALTER BELOW THIS LINE */
/* WITH FIRST PARTY COOKIE */
(function() {
var bi = document.createElement('scri'+'pt');bi.type = 'text/javascript'; bi.async = true;
bi.src = ('https:' == document.location.protocol ? 'https://bs' : 'http://c') + '.nakanohito.jp/b3/bi.js';
var s = document.getElementsByTagName('scri'+'pt')[0];s.parentNode.insertBefore(bi, s);
})();
//-->
/* ]]> */
</script>
<!-- User Insight PCDF Code End : kandc.com -->

</footer>
</body>
</html>
<?php 
	ob_flush();
?>