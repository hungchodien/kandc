<?php
	ob_start();
	session_start();
	if(isset($_POST['Submit'])){
			$check_value_robot=$_POST['text8'];
			$_SESSION['secur']=$check_value_robot;
	}
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

<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,クライス&カンパニー,エグゼクティブ" />
<meta name="description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。
" />


<meta PROPERTY="og:title" content="次のステージを誰よりも真剣に考えるエグゼクティブのあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="https://kandc.com/mobile/landing/k-executive/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。
" />
<meta PROPERTY="og:image" content="http://www.kandc.com/landing/headhunter-a/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="次のステージを誰よりも真剣に考えるエグゼクティブのあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />


<title>次のステージを誰よりも真剣に考えるエグゼクティブのあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー</title>
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

<script type="text/javascript" src="<?php echo url_root_domain; ?>js/number_check.js"></script>
<script type="text/javascript" src="<?php echo url_root_domain; ?>js/common_funcs.js"></script>

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

<header>

<div class="logo wrapper"><a href="<?php echo url_root_headhunter; ?>"><img alt="株式会社クライス＆カンパニー" src="<?php echo url_root_headhunter; ?>img/logo-kreis-company.png" /></a></div>
    <h1 class="site_description">ヘッドハンティング・人材紹介・転職支援ならクライス&amp;カンパニー</h1>
</header>
        
         <div class="layer_regional_bg_entry"></div>
         
<div id="confirm_hide" class="form_entry_first_header form_entry_first page1 <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">        
<div class="main_top inside">
  <p class="main_img"><img alt="エグゼクティブコンサルタント 岡田 麗" src="<?php echo url_root_headhunter; ?>img/main-bg-okada.png" /></p>
  
  <div class="main_title_group">
  <div class="wrapper">
  
  <div class="main_top_txt">
  <h2 class="main_title"><img alt="次のステージを誰よりも真剣に考えるエグゼクティブのあなたへ" src="<?php echo url_root_headhunter; ?>img/main-title.png" /></h2>
  <h3 class="sub_title"><img alt="経営者、経営幹部を目指すあなたをキャリアパートナーが専属でバックアップ！" src="<?php echo url_root_headhunter; ?>img/main-sub-title.png" /></h3>
  <p class="sign">エグゼクティブコンサルタント 岡田麗</p>
  </div>
  
  <div id="entry_short_btn" class="entry_btn_top"><a href="#headhunter_short_form"><img alt="無料転職サポートに申し込む" src="<?php echo url_root_headhunter; ?>img/main-entry-button.png" /></a></div>
  </div>
  </div>
  </div>
  
  
  <div class="reason wrapper">
  <h3 class="features_title center"><img alt="クライス&カンパニーが経営層へのステップアップを実現させる、３つの理由" src="<?php echo url_root_headhunter; ?>img/reason-title.png" /></h3>
  
  <div class="reason_box reason_box1">
  <p class="reason_icon"><img alt="理由1" src="<?php echo url_root_headhunter; ?>img/reason01-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="GCDF有資格者の圧倒的コンサルティング力" src="<?php echo url_root_headhunter; ?>img/reason01-title.png" /></h3>
  <p>※GCDF資格を持つコンサルタントが、まずはあなたのお気持ち、これまでのご経験等を徹底的にヒアリング。<br />その上で、ふさわしいポジションをご提案します。</p>
  </div>
  
  <div class="reason_box reason_box2">
  <p class="reason_icon"><img alt="理由2" src="<?php echo url_root_headhunter; ?>img/reason02-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="23年の歴史で培った企業との強固なパイプ" src="<?php echo url_root_headhunter; ?>img/reason02-title.png" /></h3>
  <p>創業23年目。長い時間をかけて培った企業との太いパイプにより一般に出回ることのない独占案件のご紹介や、候補者の方々の強みにあわせた独自ポジションの開拓を可能にしています。</p>
  </div>
  
  <div class="reason_box reason_box3">
  <p class="reason_icon"><img alt="理由3" src="<?php echo url_root_headhunter; ?>img/reason03-icon.png" /></p>
  <h3 class="reason_box_title"><img alt="1年以上に及んでもコミットする長期サポート" src="<?php echo url_root_headhunter; ?>img/reason03-title.png" /></h3>
  <p>経営ポジションへの転身は、タイミングが重要です。<br />魅力的なチャンスを逃さないよう、長期的にキャリアパートナーとしてお付き合いをさせていただき、スピーディーに情報提供いたします。</p>
  </div>
  
  <p class="gcdf">
  <span class="gcdf_title">※GCDFとは？</span>
GCDF資格とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です。キャリアカウンセラーに必要
な幅広い知識と実践的なスキルを身につけるため、120時間にも及ぶトレーニングプログラムを受講し、
試験（筆記・実技）に合格すると資格が取得できます。
  </p>
</div>

<div class="voice inside">
<p class="voice_bg"><img alt="実現された方の声の背景" src="<?php echo url_root_headhunter; ?>img/voice-bg.png" /></p>
<div class="wrapper">
<h3 class="voice_tilte"><img alt="経営者、経営幹部へのステップアップを実現された方の声" src="<?php echo url_root_headhunter; ?>img/voice-title.png" /></h3>

<div class="voice_box">
<p class="voice_flow"><img alt="WEB系企業マネージャー→大手EC企業部門責任社" src="<?php echo url_root_headhunter; ?>img/voice01-flow.png" /></p>
<h4 class="voice_box_title"><img alt="自分一人では出会えないチャンスにめぐりあいました" src="<?php echo url_root_headhunter; ?>img/voice01-title.png" /></h4>
<p>当初は正直転職は考えていませんでした。ところが数か月後、担当コンサルタントからある企業で部門責任者を探していると情報をいただき、まさに自分のキャリアが活かせるチャンスだと思い転職を決断。自分一人では絶対に出会えない機会にめぐりあうことができました。</p>
</div>

<div class="voice_box">
<p class="voice_flow"><img alt="戦略コンサルティングファームコンサルタント→WEB系ベンチャー企業役員" src="<?php echo url_root_headhunter; ?>img/voice02-flow.png" /></p>
<h4 class="voice_box_title"><img alt="ビジョンに共感できる社長と出会い、役員として迎えられました" src="<?php echo url_root_headhunter; ?>img/voice02-title.png" /></h4>
<p>求人サイトではなかなかピンとくる求人をみつけることができず、クライス＆カンパニーの担当者と面談。自分の志向や気持ちを詳しくお話ししたところ、事業理念やビジョンが私にマッチするのではと、ある企業をご紹介いただき、すぐに社長と面接、意気投合し、転職という流れになりました。</p>
</div>

<div class="voice_box">
<p class="voice_flow"><img alt="大手教育系企業事業部長→WEB系企業関連会社社長" src="<?php echo url_root_headhunter; ?>img/voice03-flow.png" /></p>
<h4 class="voice_box_title"><img alt="5年以上のサポートを経て、社長ポジションへの転職がかないました" src="<?php echo url_root_headhunter; ?>img/voice03-title.png" /></h4>
<p>今回の転職は、クライス＆カンパニーでの2回目の転職でした。最初の転職は4年前。いつかは経営ポジションで活躍したいとお伝えし、ステップアップできる企業をタイミング良くご紹介いただき、今回念願の社長ポジションへの転職がかないました。</p>
</div>

</div>
</div>
         
</div><!--end confirm_hide -->        
         
<div id="headhunter_short_form" class="headhunter_form_content">
<div class="headhunter_entry_title center"><img alt="転職成功者続出中！まずはあなたも、専属キャリアパートナーと話をしてみませんか？" src="<?php echo url_root_headhunter; ?>img/entry-title.png" /></div>
<div class="wrapper">

      <!--End Content -->    
       <div id="content" class="inside clear form_entry_first clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
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
       	<form id="submit_form" method="post" action="" autocomplete="off">	
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
                   			 <span id="errortext12"></span>&nbsp;&nbsp;<span id="errortext2"></span>
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
              
                
                 <div class="group_txt_form clear">
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
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">年収<span class="notice">※</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	  <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text17']; endif; ?>" id="text17" name="text17" onfocus="click_text(this.id)" placeholder="" style="ime-mode:disabled;" pattern="[0-9]*"/>
                        </div>
                        <div class="l" style="margin-left:10px; margin-top:5px;">万円</div>
                        
                    </div>
                     <div class="clear"><span  id="errorselect17"></span></div>
                </div><!--End Group txt-->
                    
                
                
             </div>
             <!--****************************************************-->
            
                <?php 
								@include('../inc/link_privacy_policy.php'); 
								@include('../../inc/link_privacy_policy.php'); 
		
							?>
                       
             <!--****************************************************-->
             <div class="page1 block_content clear">
             	<div class="submit_form_button">
               		 <input type="submit" value="同意して内容確認へ " id="submit" name="Submit" class="button-confirm">
                    
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
                	<div class="clear title_txt">会社名</div>
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