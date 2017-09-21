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


<meta PROPERTY="og:title" content="帰国後のネクストキャリア専属ヘッドハンターと一緒に考えませんか？　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="https://kandc.com/mobile/landing/overseas/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。
" />
<meta PROPERTY="og:image" content="http://www.kandc.com/landing/headhunter-a/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="東大・早大・慶大卒のあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />


<title>帰国後のネクストキャリア専属ヘッドハンターと一緒に考えませんか？　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_headhunter; ?>css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!--[if lt IE 9]>
<script src="<?php echo url_root_headhunter; ?>js/html5.js" type="text/javascript"></script>
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

<script src="validate_form_entry.js" type="text/javascript"></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="auto_ruby.js"></script>
<script src="//www.kandc.com/js/jquery.placeholder.js"></script>

<script type="text/javascript" src="//www.kandc.com/js/number_check.js"></script>
<script type="text/javascript" src="//www.kandc.com/js/common_funcs.js"></script>

<!--scroll to top-->
<script type="text/javascript">
jQuery(document).ready(function($){

	// scroll to section
	$('.features_btn a').click(function () {
		var divSroll = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $(divSroll).offset().top
		}, 800);
		return false;
	});
	// short button scroll to section
	$('#entry_short_btn a').click(function () {
		$('body,html').animate({
			scrollTop: $('#headhunter_short_form').offset().top
		}, 800);
		return false;
	});
	$('.sub_entry_button_30 a').click(function () {
		$('body,html').animate({
			scrollTop: $('#headhunter_short_form').offset().top
		}, 800);
		return false;
	});
	
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
		input.val('');
	  }
	}).blur();

});
</script>

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
								$(".form_entry_first_header").css({
									"display":"none"
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
						$(".form_entry_first_header").css({
							"display":"block"
						});
						$(".form_entry_first").css({
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



</head>

<body>

<header class="clear site_header">
<div class="clear wrapper_site_header">
<div class="group_header_top clear">
		<div class="logo wrapper">
    		<a href="<?php echo url_root_headhunter; ?>">
        	<img alt="株式会社クライス＆カンパニー" src="<?php echo url_root_headhunter; ?>img/logo-kreis-company.png" />
            </a>
           </div>
    <h1 class="site_description">ヘッドハンティングのクライス&amp;カンパニー</h1>
   </div>
 </div>
</header>
        
         <div class="layer_regional_bg_entry"></div>
         
<div id="confirm_hide" class="form_entry_first_header form_entry_first page1 <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">        
<div class="main_top inside">
  <p class="main_img"><img alt="帰国後のネクストキャリア専属ヘッドハンターと一緒に考えませんか？ 完全無料 skype、電話等での面談OK！ (1)マネージャー～経営幹部クラスの豊富な独占ヘッドハンティング求人 (2)年収1000万～4000万希少なハイクラス求人に出会える (3) 海外にいながら、最新転職情報を逃さずキャッチできる" src="<?php echo url_root_headhunter; ?>img/main-bg-okada.png" /></p>
  
  <div class="main_title_group">
  <div class="wrapper">
  
  <div class="main_top_txt">
  <h2 class="main_title"><img alt="帰国後のネクストキャリア専属ヘッドハンターと一緒に考えませんか？" src="<?php echo url_root_headhunter; ?>img/main-title.png" /></h2>
 
  </div>
  
  <p class="sign">エグゼクティブコンサルタント 岡田麗</p>
  <div id="entry_short_btn" class="entry_btn_top"><a href="#headhunter_short_form"><img alt="無料転職サポートに申し込む" src="<?php echo url_root_headhunter; ?>img/main-entry-button.png" /></a></div>
  </div>
  </div>
  </div>
  
  
  <div class="reason wrapper">
  <h3 class="features_title center"><img alt="クライス＆カンパニーがマネージャー～経営幹部クラスの転職に強い、３つの理由" src="<?php echo url_root_headhunter; ?>img/reason-title.png" /></h3>
  
  <div class="reason_box reason_box1">
  <p class="reason_icon"><img alt="理由1" src="<?php echo url_root_headhunter; ?>img/reason01-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="国家資格保有者の圧倒的コンサルティング力であなたの強みを最大限に引き出します。" src="<?php echo url_root_headhunter; ?>img/reason01-title-red.png" /></h3>
  <p>キャリアのプロが、まずはあなたのお気持ちやご経歴等を徹底的にヒアリング。その上で、あなたの強みが最も活かせるポジションをお探しします。</p>
  </div>
  
  <div class="reason_box reason_box2">
  <p class="reason_icon"><img alt="理由2" src="<?php echo url_root_headhunter; ?>img/reason02-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="24年の歴史で培った企業との強固なパイプにより一般に出回らない求人の紹介が可能です。" src="<?php echo url_root_headhunter; ?>img/reason02-title-red.png" /></h3>
  <p>創業24年目。長い時間をかけて培った企業との太いパイプにより、当社だけの独占ルート求人のご紹介や、候補者の方に合わせた新規ポジションの開拓を可能にしています。</p>
  </div>
  
  <div class="reason_box reason_box3">
  <p class="reason_icon"><img alt="理由3" src="<?php echo url_root_headhunter; ?>img/reason03-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="今すぐの転職を考えていない方でも2年後、3年後を見据え、長期的にサポート。魅力的なチャンスを逃しません。" src="<?php echo url_root_headhunter; ?>img/reason03-title-red.png" /></h3>
  <p>ステップアップ転職には、タイミングが重要。魅力的なチャンスを逃さないよう、専属ヘッドハンターが長期的にサポートし、タイムリーに情報提供いたします。<br /><b>帰国がまだ先という方もお気軽ご相談ください。</b></p>
  </div>
  
  <p class="gcdf sub_entry_button_30">
  <a href="#headhunter_short_form"><img alt="まずは気軽に相談してみる" src="<?php echo url_root_headhunter; ?>img/sub-entry-button.png" /></a>
  </p>
  
</div>

<div class="voice inside">
<p class="voice_bg"><img alt="実現された方の声の背景" src="<?php echo url_root_headhunter; ?>img/voice-bg.png" /></p>
<div class="wrapper">
<h3 class="voice_tilte"><img alt="海外経験を活かしたステップアップを実現された方の声" src="<?php echo url_root_headhunter; ?>img/voice-title.png" /></h3>

<div class="voice_box">
<p class="voice_flow">
    <img alt="グローバル企業 マーケティングマネージャー（東南アジア勤務）" src="<?php echo url_root_headhunter; ?>img/voice01-flow-1.png" />
    <img style="display: block; margin: 10px auto;" alt="icon" src="<?php echo url_root_headhunter; ?>img/voice01-flow-2.png" />
    <img alt="WEBサービス企業 海外事業戦略マネージャーへ" src="<?php echo url_root_headhunter; ?>img/voice01-flow-3.png" />
</p>
<h4 class="voice_box_title"><img alt="常にアンテナを張っていたことでキャリアの可能性が広がりました。" src="<?php echo url_root_headhunter; ?>img/voice01-title.png" /></h4>
<p>面白い話があれば転職を検討したいと思い、ヘッドハンターとSkypeで面談。次の一時帰国までに何社かリストアップし、まとめて面接することに。うち一社が私の海外経験を高く評価してくださり、迷わず転職を決意しました。常にアンテナを張っていたことで、可能性が広がったのだと感じています。</p>
</div>

<div class="voice_box">
<p class="voice_flow">
    <img alt="大手金融機関 セールス（ヨーロッパ勤務）" src="<?php echo url_root_headhunter; ?>img/voice02-flow-1.png" />
    <img style="display: block; margin: 10px auto;" alt="icon" src="<?php echo url_root_headhunter; ?>img/voice02-flow-2.png" />
    <img alt="ベンチャー企業 CFOへ" src="<?php echo url_root_headhunter; ?>img/voice02-flow-3.png" />
</p>
<h4 class="voice_box_title"><img alt="海外にいる事が一切不利にならずスムーズに進める事ができました。" src="<?php echo url_root_headhunter; ?>img/voice02-title.png" /></h4>
<p>将来的に起業を考えており、そこにつながる次のキャリアを希望。<br/>一時帰国のタイミングで専属ヘッドハンターとミーティングをし、まずは自分の気持ちや希望を細かくお伝えしていました。<br/>しばらくして、希望にマッチした企業でCFOポジションを開拓したとの連絡が。海外にいる事が一切不利になることなくスムーズに転職が決まりました。</p>
</div>

<div class="voice_box">
<p class="voice_flow">
    <img alt="製薬メーカー 海外事業立上担当（アメリカ勤務）" src="<?php echo url_root_headhunter; ?>img/voice03-flow-1.png" />
    <img style="display: block; margin: 10px auto;" alt="icon" src="<?php echo url_root_headhunter; ?>img/voice03-flow-2.png" />
    <img alt="消費財メーカー 海外事業部マネージャーへ" src="<?php echo url_root_headhunter; ?>img/voice03-flow-3.png" />
</p>
<h4 class="voice_box_title"><img alt="柔軟な対応のおかげで希望どおりのスケジュールで転職が決まりました。" src="<?php echo url_root_headhunter; ?>img/voice03-title.png" /></h4>
<p>共に駐在していた妻の帰国が決まり、私も一緒に帰国することに。<br/>できれば現職のうちに転職先を決めたいと思い、それまで定期的に情報交換をしていた専属ヘッドハンターに相談しました。企業との一次面接はSkypeで進めていただくなど、柔軟にご対応いただき希望どおりのスケジュールで内定を受ける事ができました。</p>
</div>

</div>
</div>
         
</div><!--end confirm_hide -->        
         
<div id="headhunter_short_form" class="headhunter_form_content">
<div class="headhunter_entry_title center"><img alt="海外での経験を活かして、次の挑戦へ。専属ヘッドハンターと一緒に考えてみませんか？" src="<?php echo url_root_headhunter; ?>img/entry-title.png" /></div>
<div class="wrapper">

      <!--End Content -->    
       <div id="content" class=" oversea_form inside clear form_entry_first clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
       <!--****************************************************-->
       <div class="title_notice clear top_share_mail">
			<?php 
				//if(isset($_SESSION['MemberName'])):
					//include('../../../inc/form_email_top_entry.php'); 
				//endif;
			?>
            <!--<p class="sub_title_top_form while_txt clear">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。
私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p>-->
       </div>
       	<form id="submit_form" method="post" action="">	
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
                	<div class="clear title_txt">生年月日 <span class="notice">※</span></div>
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
                	<div class="clear title_txt">滞在国<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_other ">
                        	<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text5']; endif; ?>" id="text5" name="text5" onfocus="click_text(this.id)"  placeholder="" />
                        </div>
                    	
                    </div>
                    <div class="clear">
                    	<span id="errortext567"></span>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                    <div class="clear title_txt">電話番号<span class="notice">※</span></div>
                    <div class="clear input_form">
                        <div class="input_other phone">
                            <input type="tel" value="<?php if(!empty($_POST)): echo (int)$_POST['text6']; endif; ?>" id="text6" name="text6" onfocus="click_text(this.id)"  placeholder="＊0357331602(ハイフンは不要です)" />
                        </div>

                    </div>
                    <div class="clear">
                        <span id="errortext6"></span>
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
                	<div class="clear title_txt">最終学歴 <span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_100 l">
                       		<input type="text" value="<?php if(!empty($_POST)): echo $_POST['text13']; endif; ?>" id="text13" name="text13" onfocus="click_text(this.id)"/>
                        </div>
                       <!-- <div class="input_20 r">
                       	 <input type="text" value="" id="text15" name="text15"/>
                        </div>-->
                     </div>
                    <div class="clear">
                   			 <span id="errortext13" class="error_txt"></span>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                    <div class="clear title_txt">会社名 <span class="notice">※</span></div>
                    <div class="clear input_form">
                        <div class="input_100 l">
                            <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text14']; endif; ?>" id="text14" name="text14" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                        <span id="errortext14" class="error_txt"></span>
                    </div>
                </div><!--End Group txt-->
                
                <?php /* ?>
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種</div>
                    <div class="clear input_form">
                    	<div class="input_100 l">
                       	  <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text15']; endif; ?>" id="text15" name="text15" onfocus="click_text(this.id)" placeholder=""  />
                        </div>
                     </div>
                     <div class="clear"><span  id="errorselect15"></span></div>
                </div><!--End Group txt-->
                <?php */ ?>
                <div class="group_txt_form clear">
                    <div class="clear title_txt">職種</div>
                    <div class="clear input_form">
                        <div class="input_100">
                            <?php if(!empty($_POST)): $select4_sl= $_POST['select4']; endif; ?>
                            <select id="select4" name="select4" class="selection">
                                <option value="">下記より選択してください</option>
                                <option value="コンサルタント" <?php if($select4_sl=='コンサルタント'):?> selected="selected"  <?php endif; ?>>コンサルタント</option>
                                <option value="コンサルタント（IT）" <?php if($select4_sl=='コンサルタント（IT）'):?> selected="selected"  <?php endif; ?>>コンサルタント（IT）</option>
                                <option value="ITハード系エンジニア" <?php if($select4_sl=='ITハード系エンジニア'):?> selected="selected"  <?php endif; ?>>ITハード系エンジニア</option>
                                <option value="ソフトウェアエンジニア" <?php if($select4_sl=='ソフトウェアエンジニア'):?> selected="selected"  <?php endif; ?>>ソフトウェアエンジニア</option>
                                <option value="WEB・モバイル関連" <?php if($select4_sl=='WEB・モバイル関連'):?> selected="selected"  <?php endif; ?>>WEB・モバイル関連</option>
                                <option value="その他ソフトウェア関連" <?php if($select4_sl=='その他ソフトウェア関連'):?> selected="selected"  <?php endif; ?>>その他ソフトウェア関連</option>
                                <option value="機械・メカトロニクスエンジニア" <?php if($select4_sl=='機械・メカトロニクスエンジニア'):?> selected="selected"  <?php endif; ?>>機械・メカトロニクスエンジニア</option>
                                <option value="電気・電子・半導体エンジニア" <?php if($select4_sl=='電気・電子・半導体エンジニア'):?> selected="selected"  <?php endif; ?>>電気・電子・半導体エンジニア</option>
                                <option value="化学系" <?php if($select4_sl=='化学系'):?> selected="selected"  <?php endif; ?>>化学系</option>
                                <option value="バイオ・メディカル系" <?php if($select4_sl=='バイオ・メディカル系'):?> selected="selected"  <?php endif; ?>>バイオ・メディカル系</option>
                                <option value="経営企画・事業企画" <?php if($select4_sl=='経営企画・事業企画'):?> selected="selected"  <?php endif; ?>>経営企画・事業企画</option>
                                <option value="営業企画" <?php if($select4_sl=='営業企画'):?> selected="selected"  <?php endif; ?>>営業企画</option>
                                <option value="業務企画" <?php if($select4_sl=='業務企画'):?> selected="selected"  <?php endif; ?>>業務企画</option>
                                <option value="商品・サービス企画" <?php if($select4_sl=='商品・サービス企画'):?> selected="selected"  <?php endif; ?>>商品・サービス企画</option>
                                <option value="IR" <?php if($select4_sl=='IR'):?> selected="selected"  <?php endif; ?>>IR</option>
                                <option value="広報" <?php if($select4_sl=='広報'):?> selected="selected"  <?php endif; ?>>広報</option>
                                <option value="マーケティング" <?php if($select4_sl=='マーケティング'):?> selected="selected"  <?php endif; ?>>マーケティング</option>
                                <option value="総務" <?php if($select4_sl=='総務'):?> selected="selected"  <?php endif; ?>>総務</option>
                                <option value="法務" <?php if($select4_sl=='法務'):?> selected="selected"  <?php endif; ?>>法務</option>
                                <option value="人事" <?php if($select4_sl=='人事'):?> selected="selected"  <?php endif; ?>>人事</option>
                                <option value="経理・財務・会計" <?php if($select4_sl=='経理・財務・会計'):?> selected="selected"  <?php endif; ?>>経理・財務・会計</option>
                                <option value="秘書" <?php if($select4_sl=='秘書'):?> selected="selected"  <?php endif; ?>>秘書</option>
                                <option value="事務・庶務" <?php if($select4_sl=='事務・庶務'):?> selected="selected"  <?php endif; ?>>事務・庶務</option>
                                <option value="営業" <?php if($select4_sl=='営業'):?> selected="selected"  <?php endif; ?>>営業</option>
                                <option value="販売・サービス" <?php if($select4_sl=='販売・サービス'):?> selected="selected"  <?php endif; ?>>販売・サービス</option>
                                <option value="金融関連職" <?php if($select4_sl=='金融関連職'):?> selected="selected"  <?php endif; ?>>金融関連職</option>
                                <option value="建設・建築・土木系" <?php if($select4_sl=='建設・建築・土木系'):?> selected="selected"  <?php endif; ?>>建設・建築・土木系</option>
                                <option value="インストラクター" <?php if($select4_sl=='インストラクター'):?> selected="selected"  <?php endif; ?>>インストラクター</option>
                                <option value="トップマネジメント" <?php if($select4_sl=='トップマネジメント'):?> selected="selected"  <?php endif; ?>>トップマネジメント</option>
                                <option value="ロジスティクス・購買関連" <?php if($select4_sl=='ロジスティクス・購買関連'):?> selected="selected"  <?php endif; ?>>ロジスティクス・購買関連</option>
                                <option value="エスタブリッシュメント職" <?php if($select4_sl=='エスタブリッシュメント職'):?> selected="selected"  <?php endif; ?>>エスタブリッシュメント職</option>
                                <option value="クリエイティブ系" <?php if($select4_sl=='クリエイティブ系'):?> selected="selected"  <?php endif; ?>>クリエイティブ系</option>
                                <option value="デザイナー" <?php if($select4_sl=='デザイナー'):?> selected="selected"  <?php endif; ?>>デザイナー</option>
                                <option value="コールセンター" <?php if($select4_sl=='コールセンター'):?> selected="selected"  <?php endif; ?>>コールセンター</option>
                            </select>
                        </div>

                    </div>
                    <div class="clear"><span id="errorselect4"></span></div>
                </div><!--End Group txt-->






             </div>
             <!--****************************************************-->
             <style type="text/css">
                 .oversea_form .right_link a{
                     color: red !important;
                 }
             </style>
				<?php 
								@include('../inc/link_privacy_policy.php'); 
								@include('../../inc/link_privacy_policy.php'); 
		
							?>
             <!--****************************************************-->
             <div class="page1 block_content clear">
             	<div class="submit_form_button">
               		 <input type="submit" value="同意して内容確認へ" id="submit" name="Submit" class="button-confirm">
                    
                </div>
               
                
             </div>
             <!--***************************************************-->
             
              <!--****************************************************-->
             <div class="page2 block_content clear">
             	<div class="form_back_button2 button-back">
                	<a href="javascript:void(0);" title="Back">
                    <&nbsp;&nbsp;&nbsp;戻る
                    </a>
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
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
           
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
			$radio1=$_POST['radio1'];
			$entry_id = $_POST['entry_id'];
			$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
        <?php
			echo $prev_input;
			echo $prev_input1;
			echo $prev_radio;

		?>
        	
               <div class="bg_white content_inside block_content">
            
            	
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
                	<div class="clear title_txt">滞在国</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                          <span><?php echo $_POST['text5']; ?> </span>
                         </div>
                    </div>
                </div><!--End Group txt-->

                   <div class="group_txt_form clear">
                       <div class="clear title_txt">電話番号</div>
                       <div class="clear input_form">
                           <div class="input_100 clear confirm_txt_submit">
                               <span><?php echo $_POST['text6']; ?> </span>
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
                	<div class="clear title_txt">最終学歴 </div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['text13']; ?>
                        </div>
                        
                        
                    </div>
                    
                </div><!--End Group txt-->

                   <div class="group_txt_form clear">
                       <div class="clear title_txt">会社名 </div>
                       <div class="clear input_form">
                           <div class="input_100 clear confirm_txt_submit">
                               <?php echo $_POST['text14']; ?>
                           </div>
                        </div>
                    </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種</div>
                    <div class="clear input_form">
                    	<div class="input_100 clear confirm_txt_submit">
                       		<?php echo $_POST['select4']; ?>
                        </div>
                        
                    </div>
                </div><!--End Group txt-->
                

                
             </div>
             
             
            
             <div class="block_content clear">
             	<div class="form_back_button2 button-back back_from_confirm">
                	<a title="Back"  href="javascript:void(0);">
                    &lt;&nbsp;&nbsp;&nbsp;戻る
                    </a>
                </div>
                <div class="submit_form_button2">
               		 <input type="submit" value="申し込む   >" id="submit" name="Submit" class="button-confirm">
                    
                </div>
                
             </div>
             <!--***************************************************-->
             
             </form>
             
       </div><!--End content-->
    
    
   </div><!--end wrapper  -->   
</div><!--end headhunter_form_content  -->  
    
    
    <!--Confirm form-->
<!--***********************************************************************************************************************-->     
    
    <?php 
		//$google_check="entry";
	?>

    
<footer>
  <div class="wrapper">
      
    <p id="copyR">Copyright&copy;KREIS&amp;Company All Rights Reserved.<br />webdesign <a href="http://tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>
    
    </div>
</footer>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">/* <![CDATA[ */(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');/* ]]> */</script>
<!-- End Google Tag Manager -->

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

</body>
</html>
<?php 
	ob_flush();
?>