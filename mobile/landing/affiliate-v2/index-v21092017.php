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
<meta name="description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。" />


<meta PROPERTY="og:title" content="30代のヘッドハンティング転職　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="https://kandc.com/mobile/landing/affiliate/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。" />
<meta PROPERTY="og:image" content="http://www.kandc.com/mobile/landing/affiliate/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代のヘッドハンティング転職　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />


<title>30代のヘッドハンティング転職　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_headhunter; ?>css/form-style.css" media="all" />
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
<script src="jquery.maxlength_plugin.js" type="text/javascript"></script>
  <script src="jquery.maxlength.js" type="text/javascript"></script>
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
	
	///////////
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
  <p class="main_img"><img alt="完全無料 マネージャー～経営幹部へステップアップできる, 年収1000万～4000万希少なハイクラス求人に出会える, 生の企業情報が聞けるから価値観にマッチした会社を探せる" src="<?php echo url_root_headhunter; ?>img/main-bg-okada-matsuo_v2.png" /></p>
  
  <div class="main_title_group">
  <div class="wrapper">
  
  <div id="entry_short_btn" class="entry_btn_top"><a href="#headhunter_short_form"><img alt="無料転職サポートに申し込む" src="<?php echo url_root_headhunter; ?>img/main-entry-button_v2.png" /></a></div>
  </div>
  </div>
  </div>
  
  
  <div class="reason wrapper">
  <h3 class="features_title center"><img alt=" クライス＆カンパニーが経営幹部への道を実現させる、３つの理由 " src="<?php echo url_root_headhunter; ?>img/reason-title.png" /></h3>
  
  <div class="reason_box reason_box1">
  <div class="reason_box_top">
  <p class="reason_icon"><img alt="理由1" src="<?php echo url_root_headhunter; ?>img/reason01-icon.png" /></p>
  <h3>30代の転職に強い<span>（平均34.8歳）</span></h3>
  </div>
  <div class="reason_box_content">
  <h4 class="graphic_title"><img alt="決定者の85％が30代以上です！" src="<?php echo url_root_headhunter; ?>img/graphic1_title.png" /></h4>
  <div class="graphic"><img alt="決定者の85％が30代以上です！ 20代12％ 30代60％ 40代17％ 50代11％" src="<?php echo url_root_headhunter; ?>img/graphic1.png" />
  <p class="graphic_desc">※2016年4月末から2016年9月末の平均</p>
  </div>
  <p class="graphic_txt">30代の方に求められるポジションの多くは、マネージャー候補以上となり、<span class="main_color">企業側のジャッジも厳しくなります。</span><br />
また、プライベートにおいても20代と違って身軽ではないため、多くの方は<span class="main_color">転職を一人の都合で決断できない状況</span>に置かれています。<br /><br />

また、実績と経験を積んでこられた方であれば、次のステージへの<span class="main_color">希望も高く、条件も複雑</span>です。<br />
単なる<span class="main_color">ご経歴と求人のマッチングで成功しない</span>のが30代の転職。<br /><br />

そこでプロのコンサルタントが介入することにより<span class="main_color">成功に導きます。</span><br />
更なる飛躍を求める20代後半の方、次のステージをお考えの40代エグゼクティブ層の方まで、30代を基点とし、キャリアを真剣に考える方々を私たちは支援いたします。</p>
<p class="sub_entry_button_30"><a href="#headhunter_short_form"><img alt="30代転職に強いコンサルタントに相談する" src="<?php echo url_root_headhunter; ?>img/entry-button-reason-1.png" /></a></p>
<p class="sub_entry_note">※ご経験・ご希望によっては、ご紹介できる求人がなく、当社でのサポートが難しい場合がございます。</p>
  </div>
  </div>
  
  <div class="reason_box reason_box2">
  <div class="reason_box_top">
  <p class="reason_icon"><img alt="理由2" src="<?php echo url_root_headhunter; ?>img/reason02-icon.png" /></p>
  <h3>マネージャークラス以上の非公開求人多数</h3>
  </div>
  <div class="reason_box_content">
  <div class="graphic"><img alt="公開求人数25％ 非公開求人数75％" src="<?php echo url_root_headhunter; ?>img/graphic2.png" />
  <p class="graphic_desc">※2016年12月現在</p>
  </div>
  <p class="graphic_txt">在籍するコンサルタントはそれぞれ得意分野をもっており、長期にわたり企業とおつきあいをしています。<br /><br />

企業からは戦略面から、組織・採用のご相談を承ることも多く、エクスクルーシブ案件・非公開求人の比率が多いことも特長です。<br /><br />

信頼関係が構築できていますので、採用ニーズが顕在化していない場合でも経営課題の解決を実現できる強みをお持ちの方を個別にご推薦するという動きができる点も強みです。</p>
<p class="sub_entry_button_30"><a href="#headhunter_short_form"><img alt="非公開・独占案件を紹介してもらう" src="<?php echo url_root_headhunter; ?>img/entry-button-reason-2.png" /></a></p>
<p class="sub_entry_note">※ご経験・ご希望によっては、ご紹介できる求人がなく、当社でのサポートが難しい場合がございます。</p>
  </div>
  </div>
  
  <div class="reason_box reason_box3">
  <div class="reason_box_top">
  <p class="reason_icon"><img alt="理由3" src="<?php echo url_root_headhunter; ?>img/reason03-icon.png" /></p>
  <h3>ベテランヘッドハンターがサポート</h3>
  </div>
  <div class="reason_box_content">
  <h4 class="graphic_title"><img alt="GCDF資格(米国CCE認定)を取得したベテランコンサルタントが専任でサポートします！" src="<?php echo url_root_headhunter; ?>img/graphic3_title.png" /></h4>
  
  <p class="graphic_txt">難しい30代の転職を成功に導くため、<span class="main_color">キャリアコンサルタントにも幅広い知識とスキルが要求されます。</span><br />
<span class="main_color">業界や職種、企業に関する知識</span>はもちろん、<span class="main_color">候補者の方がご自身では気づかない可能性を提案できるよう、</span>コンサルティング力アップを目的に創立以来、年間100時間を越える社内外の研修を実施しています。<br /><br />

また、在籍2年以上のコンサルタントは、全員が<span class="main_color">国家資格認証のGCDF資格を取得</span>しており、現在は更に難易度の高い国家資格に挑戦するなど、ご満足いただけるコンサルティングができるよう、<span class="main_color">日々トレーニングを続けています。</span><br /><br />
※GCDF資格(国家資格)とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です</p>

<div class="gcdf">
<h4 class="gcdf_title main_color">クライス&amp;カンパニーのGCDF資格</h4>
<ul class="clear gcdf_list">
<li><img alt="キャリアコンサルタント 岡田 麗" src="<?php echo url_root_headhunter; ?>img/gcdf1.png" /></li>
<li><img alt="キャリアコンサルタント 奈良 元生" src="<?php echo url_root_headhunter; ?>img/gcdf2.png" /></li>
<li><img alt="キャリアコンサルタント 半藤 剛" src="<?php echo url_root_headhunter; ?>img/gcdf3.png" /></li>
<li><img alt="キャリアコンサルタント 松尾 匡起" src="<?php echo url_root_headhunter; ?>img/gcdf4.png" /></li>
<li><img alt="キャリアコンサルタント 入江 祥之" src="<?php echo url_root_headhunter; ?>img/gcdf5.png" /></li>
<li><img alt="キャリアコンサルタント 武田 直人" src="<?php echo url_root_headhunter; ?>img/gcdf6.png" /></li>
<li><img alt="キャリアコンサルタント 永田 憲章" src="<?php echo url_root_headhunter; ?>img/gcdf7.png" /></li>
<li><img alt="キャリアコンサルタント 小田 麻耶" src="<?php echo url_root_headhunter; ?>img/gcdf8.png" /></li>
<li><img alt="キャリアコンサルタント 工藤 直亮" src="<?php echo url_root_headhunter; ?>img/gcdf9.png" /></li>
<li><img alt="キャリアコンサルタント 棚澤 啓介" src="<?php echo url_root_headhunter; ?>img/gcdf10.png" /></li>
</ul>
</div>

<p class="sub_entry_button_30"><a href="#headhunter_short_form"><img alt="自分の新たな可能性が知りたい" src="<?php echo url_root_headhunter; ?>img/entry-button-reason-3.png" /></a></p>
<p class="sub_entry_note">※ご経験・ご希望によっては、ご紹介できる求人がなく、当社でのサポートが難しい場合がございます。</p>
  </div>
  </div>
  
  
  
</div>

<div class="voice inside">
<p class="voice_bg"><img alt="実現された方の声の背景" src="<?php echo url_root_headhunter; ?>img/voice-bg.png" /></p>
<div class="wrapper">
<h3 class="voice_tilte"><img alt="マネージャー～経営幹部への道を実現された方の声" src="<?php echo url_root_headhunter; ?>img/voice-title.png" /></h3>

<div class="voice_box">
<div class="voice_flow">
<p class="voice_flow_top">WEB系企業マネージャー</p>
<p class="arrow_down"><img alt="" title="" src="<?php echo url_root_headhunter; ?>img/arrow_down.png" /></p>
<p class="voice_flow_bottom">大手EC企業部門責任者</p>
</div>
<h4 class="voice_box_title">自分一人では出会えないチャンスに<br />
めぐりあいました</h4>
<p>当初は正直転職は考えていませんでした。ところが数か月後、担当コンサルタントからある企業で部門責任者を探していると情報をいただき、まさに自分のキャリアが活かせるチャンスだと思い転職を決断。自分一人では絶対に出会えない機会にめぐりあうことができました。</p>
</div>

<div class="voice_box">
<div class="voice_flow">
<p class="voice_flow_top">戦略コンサルティングファームコンサルタント</p>
<p class="arrow_down"><img alt="" title="" src="<?php echo url_root_headhunter; ?>img/arrow_down.png" /></p>
<p class="voice_flow_bottom">WEB系ベンチャー企業役員</p>
</div>
<h4 class="voice_box_title">ビジョンに共感できる社長と出会い、<br />
役員として迎えられました</h4>
<p>求人サイトではなかなかピンとくる求人をみつけることができず、クライス＆カンパニーの担当者と面談。自分の志向や気持ちを詳しくお話ししたところ、事業理念やビジョンが私にマッチするのではと、ある企業をご紹介いただき、すぐに社長と面接、意気投合し、転職という流れになりました。</p>
</div>

<div class="voice_box">
<div class="voice_flow">
<p class="voice_flow_top">大手教育系企業事業部長</p>
<p class="arrow_down"><img alt="" title="" src="<?php echo url_root_headhunter; ?>img/arrow_down.png" /></p>
<p class="voice_flow_bottom">WEB系企業関連会社社長</p>
</div>
<h4 class="voice_box_title">5年以上のサポートを経て、<br />
社長ポジションへの転職がかないました</h4>
<p>今回の転職は、クライス＆カンパニーでの2回目の転職でした。最初の転職は4年前。いつかは経営ポジションで活躍したいとお伝えし、ステップアップできる企業をタイミング良くご紹介いただき、今回念願の社長ポジションへの転職がかないました。</p>
</div>

</div>
</div>
         
</div><!--end confirm_hide -->        
         
<div id="headhunter_short_form" class="headhunter_form_content">
<div class="headhunter_entry_title center"><img alt="転職成功者続出中！まずはあなたも、専属ヘッドハンターと話をしてみませんか？" src="<?php echo url_root_headhunter; ?>img/entry-title.png" /></div>
<div class="wrapper">

<div id="content" class="inside clear form_entry_first clear <?php if(!empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?>">
       <!--****************************************************-->
       <div class="title_notice clear top_share_mail">

			 <?php  
	  		$status_entry=$_GET['status'];
			$cmd=$_GET['cmd'];
			$title_top="エントリーフォーム";
			if(isset($_GET['status'])):
		  		switch($status_entry){
					case "fixed":
						$title_top="あなたにマッチした求人情報をお探しします";
					break;
					case "primary":
						$title_top="エントリーフォーム";
					break;
					default:
						$title_top="エントリーフォーム";
					
				}	
		  endif;
	   ?>
       	<style type="text/css">
			a#share_email_top_show{
			
				border-radius: 3px 3px 3px 3px;
				-moz-border-radius: 3px 3px 3px 3px;
				-webkit-border-radius: 3px 3px 3px 3px;
				border: 0px solid #000000;
				background:#8B8B8B;
				color:#FFF;
				position:inherit !important;
				top:-6px;
				right:0;
				padding:3px 5px;
				font-size: 11px;
				float:right;
			}
	
</style>	
       <?php 
				//if(isset($_SESSION['MemberName'])):
					include('../inc/form_email_top_entry.php'); 
				//endif;
			?>
			
       </div>
       	<form id="submit_form" method="post" action="">	
        <?php 
			//$entry_id=$_GET['entry_id'];
			//echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
       
            <div class="page1 bg_white content_inside block_content">
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text1" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text1']; endif; ?>" name="text1" onfocus="click_text(this.id)" />
                        </div>
                        <div class="input_50 r">
                       	 <input id="text2" type="text" value="<?php if(!empty($_POST)): echo $_POST['text2']; endif;?>" name="text2" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext12"></span><span id="errortext2"></span>
                    </div>
                    
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ <span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                    <input id="text3" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text3']; endif; ?>" name="text3" onfocus="click_text(this.id)"/>
                        </div>
                        <div class="input_50 r">
                    <input id="text4" type="text"  value="<?php if(!empty($_POST)): echo $_POST['text4']; endif; ?>" name="text4" onfocus="click_text(this.id)"/>
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext34"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">生年月日<span class="notice"> (必須)</span></div>
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
                	<div class="clear title_txt">電話番号<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_other phone">
                        	<input type="tel" value="<?php if(!empty($_POST)): echo (int)$_POST['text5']; endif; ?>" id="text5" name="text5" onfocus="click_text(this.id)" style="ime-mode:disabled;"  placeholder="ハイフンなし 0357331602" />
                        </div>
                    	
                    </div>
                    <div class="clear">
                    	<span id="errortext567"></span>
                    </div>
                </div><!--End Group txt-->
                
                
                
                <div class="group_txt_form group_txt_form_end clear">
                	<div class="clear title_txt">メールアドレス<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		<input type="email" value="<?php if(!empty($_POST)): echo $_POST['text8']; endif; ?>" id="text8" name="text8"  onfocus="click_text(this.id)"  inputmode="verbatim" style="ime-mode:inactive;"/>
                        </div>
                        <!--<div class="input_other">
                       	 <input type="text"  value="" id="text9" name="text9">
                        </div>-->
                        
                    </div>
                    <div class="clear">
                    	<span id="errortext89"></span>
                    </div>
                </div><!--End Group txt-->
                 <div class="notice-entry-form">
                        <p class="tbl_pop">※メールでのご連絡について</p>
                   
					<div class="regional_notice_entry_pop"> 
                        <div class="icon_close">
                            <img border="0" alt="閉じる" src="<?php echo url_root; ?>img/close_btn.png"/>
                        </div> 
                         
                        <div class="notice-entry-form_pop" style="padding:10px 0 0 0;">
                          <p>※メールでのご連絡について</p>
                          <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。 ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                        </div>
                 	 </div>
               </div>   


                <div class="group_txt_form clear"  style="margin-top: 0px;">
                    <div class="clear title_txt">学校名<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text13']; endif; ?>" id="text13" name="text13" onfocus="click_text(this.id)" placeholder="（例）◯◯大学" />
                    </div>
                    <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear"  style="margin-top: 0px;">
                    <div class="clear title_txt">学部<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                        <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text15']; endif; ?>" id="text15" name="text15" onfocus="click_text(this.id)" placeholder="（例）◯◯学部" />
                    </div>
                    <div class="clear"><span  id="errortext15"></span></div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	 <input type="text" value="<?php if(!empty($_POST)): echo $_POST['text14']; endif; ?>" id="text14" name="text14" onfocus="click_text(this.id)" placeholder="（例）株式会社◯◯"/>
                    </div>
                    <div class="clear"><span  id="errortext14"></span></div>
                </div><!--End Group txt-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l">
	                    	    <div class="input_50 l">
	                       		<select class="selection selection-style" name="select7" id="select7">
	                                    <option value=""> 選択</option>
	                                    <?php $year = 1940;
	                                    $end = date("Y");
	                                    for ($end; $year <= $end; $end--) {
	                                        ?>
	                                        <option value="<?php echo $end ?>" 
	                                          <?php if(!empty($_POST)): $select7_sl= (int)$_POST['select7']; ?>
	                                    		<?php if($end==$select7_sl): ?>
	                                     			selected="selected"
	                                     		<?php endif; ?>
	                                     	<?php endif; ?>
	                                        
	                                        ><?php echo $end ?></option>
	                                    <?php } ?>
	                            </select>
	                        	</div>
							    <div class="input_50 r">
		                       	 <select class="selection selection-style" name="select8" id="select8">
		                                <option value=""> 選択</option>
		                                <?php $moth = 1;
		                                $endMoth = 12;
		                                for ($moth; $moth <= $endMoth; $moth++) {
		                                    ?>
		                                    <option value="<?php echo $moth ?>"
		                                    <?php if(!empty($_POST)): $select8_sl= (int)$_POST['select8']; ?>
		                                    		<?php if($moth==$select8_sl): ?>
		                                     			selected="selected"
		                                     		<?php endif; ?>
		                                     	<?php endif; ?>
		                                    
		                                    ><?php echo $moth ?></option>
		                                <?php } ?>
		                        </select>
	                        	</div>
                        </div>
                        <div class="input_5 l" style="width:6%; line-height:36px;">
                       	 ～
                        </div>
                        <div class="input_40_n r">
	                        <div class="input_50 l">
	                       	<select class="selection selection-style" name="select9" id="select9">
	                            <option value=""> 選択</option>
	                            <?php $year = 1940;
	                            $end = date("Y");
	                            for ($end; $year <= $end; $end--) {
	                                ?>
	                                <option value="<?php echo $end ?>"
	                                 <?php if(!empty($_POST)): $select9_sl= (int)$_POST['select9']; ?>
	                                    		<?php if($end==$select9_sl): ?>
	                                     			selected="selected"
	                                     		<?php endif; ?>
	                                     	<?php endif; ?>
	                                
	                                ><?php echo $end ?></option>
	                            <?php } ?>
	                        </select>
	                        </div>
	                        <div class="input_50 r">
	                       	  <select class="selection selection-style" name="select10" id="select10">
	                                <option value=""> 選択</option>
	                                <?php $moth = 1;
	                                $endMoth = 12;
	                                for ($moth; $moth <= $endMoth; $moth++) {
	                                    ?>
	                                    <option value="<?php echo $moth ?>"
	                                   <?php if(!empty($_POST)): $select10_sl= (int)$_POST['select10']; ?>
	                                    		<?php if($moth==$select10_sl): ?>
	                                     			selected="selected"
	                                     		<?php endif; ?>
	                                     	<?php endif; ?> 
	                                    
	                                    ><?php echo $moth ?></option>
	                                <?php } ?>
	                            </select>
	                        </div>
                        </div>
                    <!--</div>-->
                        
                        
                    </div>
                    <div class="clear input_form" style="margin: 15px 0px 0px 0px;">
                        <label style="padding-right: 15px;">
                            <input id="radio1" type="radio" checked="" value="現職中" name="radio1">
                            現職中
                        </label>
                      
                        <label style="padding-right: 15px;">
                            <input id="radio2" type="radio" value="離職中" name="radio1">
                            離職中
                        </label>
                    </div>
                </div><!--End Group txt-->
                
                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種<span class="notice"> (必須)</span></div>
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
                	<div class="clear title_txt">年収<span class="notice"> (必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	  <input type="number" value="<?php if(!empty($_POST)): echo $_POST['text17']; endif; ?>" id="text17" name="text17" onfocus="click_text(this.id)" placeholder="" style="ime-mode:disabled;" pattern="[0-9]*"/>
                        </div>
                        <div class="l" style="margin-left:10px; margin-top:5px;">万円</div>
                        
                    </div>
                     <div class="clear"><span  id="errorselect17"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容<span class="notice">(必須)</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                            <textarea value="<?php if(!empty($_POST)): echo $_POST['text18']; endif; ?>" id="text18" name="text18" type="text" onfocus="click_text(this.id)"><?php if(!empty($_POST)): echo $_POST['text18']; endif; ?></textarea>
                        </div>
                    </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->
                
                  <div class="group_txt_form clear">
                  	<div class="clear title_txt">何をご覧になってアクセス頂きましたか？</div>
                    
                    
                	
                    <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('#text22').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
						$('.select_show1').hide(); 
						$('.select_show2').hide();
                        $('.select_show3').hide();
						$('.exchange_select').hide();
						
							$('#select12').change(function(){

								$("#text22").val("");
								$("#select14").val("");
								$("#select15").val("");
								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
                                    $('.select_show3').hide();
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
                                     $('.select_show3').hide();
									$('.select_show1').hide();
                                 }else if($('#select12').val() == '駅広告'){
                                    $('.select_show3').show();
                                    $('.exchange_select').show();
                                    $('.select_show1').hide();
                                    $('.select_show2').hide();

								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
                                        $('.select_show3').hide();
										$('.exchange_select').hide();
										 
								 }
							});
					
					
					});
				</script>
                    
                    
                    
                	 <div class="clear input_form">
                    <table style="border:none; width:100%;">
                    <tr>
                    	<td style="line-height:30px;">
                    	<b>媒体</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                       <div class="clear">
                        <?php if(!empty($_POST)): $select12_sl= $_POST['select12']; endif; ?>
                    	 <select id="select12" name="select12"  class="selection">
                                <?php include('../../inc/select-media.php');?>
                            </select>
                        </div>
                        
                        
                   
                    
                    <div style="margin: 5px 0px; display: none;" class="clear select_show1">
                        <div style="float:none; padding:5px 0;" class="clear">※具体的にお教えください（50文字以内）</div>
                        <div style="float:none;" class="clear">
                        	<textarea onfocus="click_text(this.id)" value="" id="text22" name="text22" type="text" style="margin-bottom: 10px"><?php if(!empty($_POST)): echo $_POST['text22']; endif; ?></textarea>
                        </div>
                    </div><!--select_show1-->
                    <div style="margin: 5px 0px; display: none;" class="select_show2 clear">
                            <div class="clear" style="float:none; padding:5px 0;">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                            <?php if(!empty($_POST)): $select14_sl= $_POST['select14']; endif; ?>
                            <select onfocus="click_text(this.id)" id="select14" name="select14"  class="selection consultant_check">
                                            <option value="">下記から選択してください</option>
										<?php 	
											
											@include ('../../Lib/_init.php');
											@include ('../../config.php');
											include ('../../../Lib/_init.php');
											include ('../../../config.php');
											@include ('../../../../Lib/_init.php');
											@include ('../../../../config.php');
											
											$Data_Consultant=To_Get_Data("consultant"," and `consultant_Status`=0  order by `consultant_Date` DESC","`consultant_Name`");
														if($Data_Consultant['cnt']>0):
															for($i=0; $i<$Data_Consultant['cnt']; $i++):
																	$List_Consultant = $Data_Consultant[$i];
											?>
                                           <option  value="<?php echo $List_Consultant['consultant_Name']; ?>" <?php if($select14_sl==$List_Consultant['consultant_Name']):?> selected="selected"  <?php endif; ?>><?php echo $List_Consultant['consultant_Name']; ?></option>
                                           <?php 
										     endfor;
										   endif;
										   ?>
                            </select>


                            </div>
                        </div><!--select_show2-->
                    <div style="margin: 5px 0px; display: none;" class="select_show3 clear">
                                <div class="clear" style="float:none; padding:5px 0;">※駅名を下記よりご選択ください。</div>
                                <div class="clear">
                                    <?php if(!empty($_POST)): $select15_sl= $_POST['select15']; endif; ?>
                                    <select onfocus="click_text(this.id)" id="select15" name="select15"  class="selection consultant_check">
                                        <option value="">下記から選択してください</option>
                                        <option value="新橋駅">新橋駅</option>
                                        <option value="赤坂見附駅">赤坂見附駅</option>
                                        <option value="溜池山王駅">溜池山王駅</option>
                                        <option value="東京駅（丸の内線）">東京駅（丸の内線）</option>
                                        <option value="月島駅">月島駅</option>
                                    </select>


                                </div>
                            </div><!--select_show3-->
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    
                    
                </div><!--End Group txt--> 

			

             </div>
	<?php 
								@include('../inc/link_privacy_policy.php'); 
								@include('../../inc/link_privacy_policy.php'); 
		
							?>
             <!--****************************************************-->

             
             <!--****************************************************-->
             <div class="page1 block_content clear">
             	<div class="submit_form_button" style="width: 100%;">
               		 <input type="submit" value="同意して内容確認へ" id="submit" name="Submit" class="button-confirm">
                    
                </div>
             </div>
             <!--***************************************************-->
             
            </form>
           <?php //include ('../inc/page_footer.php');?>  
       </div><!--End content-->
       
       <div id="content" class="inside confirm form_entry_two <?php if(empty($_POST)): echo "display_none"; else: echo "display_block"; endif; ?> clear">
       <!--****************************************************-->
       <div class="title_notice clear">
       		<p class="title_top_form yellow clear">エントリーフォーム</p>
           
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
			for ($j = 1; $j < 16; $j++):
				$col1 = "select{$j}";
				$val2 = $_POST["select" . $j];
				$prev_input1 .= "<input type='hidden' name='{$col1}' value='{$val2}' id='{$col1}'>";
			
			endfor;
			$radio1=$_POST['radio1'];
			$entry_id = $_POST['entry_id'];
			//$prev_input .= "<input type='hidden' name='entry_id' value='{$entry_id}' id='entry_id'>";
			$prev_input .= "<input type='hidden' name='radio1' value='{$radio1}' id='radio1'>";
			?>
       	<form id="confirm_form" name="frm_confirm" method="post" action="send_mail.php">
 <?php
if (isset($_GET['entry_id'])) {
	
	if($_GET['entry_id']==1019611):
		//amazon
		$amazon_id=1019611;
		?>
        <input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id; ?>"/>
        <?php
	else:
		if($_GET['entry_id']==210685):
			$amazon_id=210685;
		?>
		<input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id; ?>"/>
		<?php	
		else:
			$entry_id_index=(int)$_GET['entry_id'];
			$cmd=$_GET['cmd'];
			if($entry_id_index>0 && $cmd=='interview'):
			  	$entry_id_company=(int)$_GET['entry_id'];
				$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' order by `id_interview` DESC limit 1","`company_name`");
				if($List_cc_interview['cnt']>0):
				?>
		        	<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_index; ?>"/>
		        <?php
				else:
				?>
		        	<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index; ?>"/>
		        <?php
				endif;
			 else:
				if($entry_id_index>0 && $cmd=='consultant'):
					$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_index' order by `consultant_Date` DESC limit 1","`consultant_Name`");
					if($List_entry_consultant['cnt']>0):
						?>
	                    <input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_index; ?>"/>
	                    <?php
					else:
						?>
	                    <input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index; ?>"/>
	                    <?php
					endif;
				else:
		  
							$entry_id_company=(int)$_GET['entry_id'];
							
							$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_company' order by `id_interview` DESC limit 1","`company_name`");
							if($List_cc_interview['cnt']>0 && $entry_id_company>0):
							?>
					        	<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company; ?>"/>
					        <?php
							else:
									
									$list_job=Get_Data("job", " and `order_id`='$entry_id_company'  limit 1","`company_id`");
									
					
									if($list_job['cnt']<=0):
										$List_entry = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' order by `scrol_venderID` DESC limit 1","`company_name`");
										if($List_entry['cnt']>0):
											$entry_id_company_end=$entry_id_company;
										else:
											$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' order by `consultant_Date` DESC limit 1","`consultant_Name`");
											if($List_entry_consultant['cnt']>0):
												 $entry_id_consultant=$entry_id_company;
											else:
												$entry_id_company_end="";
											endif;
										endif;
									else:
										$order_id_job=$entry_id_company;
									endif;
						
			?>
			<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $order_id_job; ?>"/>
			<input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company_end; ?>"/>
			<input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_consultant; ?>"/>
			<?php
					endif;
					
			  endif;		
		  endif;
	   endif;
	endif;
}
?>        
        
        
        
        
        
        
        <?php
			echo $prev_input;
			echo $prev_input1;
			echo $prev_radio;

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
                	<div class="clear title_txt">電話番号</div>
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
                    <div class="title_txt clear">学校名 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text13']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                    <div class="title_txt clear">学部 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text15']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                    <div class="title_txt clear">会社名 </div>
                    <div class="clear input_form">
                        <div class="input_100 clear confirm_txt_submit">
                            <p><?php echo $_POST['text14']; ?></p>
                        </div>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                       <div class="title_txt clear">勤務期間 </div>
                       <div class="clear input_form">
                           <div class="input_100 clear confirm_txt_submit">
                               <p><?php echo $_POST['select7']; ?>年 <?php echo $_POST['select8']; ?>月 ～ <?php echo $_POST['select9']; ?>年 <?php echo $_POST['select10']; ?>月</p>
                               <p><?php echo $_POST['radio1']; ?></p>
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
                               <p><?php echo str_replace("\n","<br/>",$_POST['text18']); ?></p>
                           </div>


                       </div>
                </div><!--End Group txt-->


                <div class="group_txt_form clear">
                       <div class="clear input_form">
                           <div class="input_20 l">
                               媒体
                           </div>
                           <div class="input_80 r confirm_txt_submit">
                               <p><?php echo $_POST['select12']; ?></p>
                               <p><?php echo str_replace("\n","<br/>",$_POST['text22']); ?></p>
                               <p><?php echo $_POST['select14']; ?></p>
                               <p><?php echo $_POST['select15']; ?></p>
                           </div>

                       </div>

                </div><!--End Group txt-->
                <!--End-->
                <!--End-->

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
   <!--Confirm form-->


</div><!--end wrapper  -->   
</div><!--end headhunter_form_content  -->       
    
<footer>
  <div class="wrapper">
      
    <p id="copyR">株式会社クライス＆カンパニー<br />
〒105-0021 東京都港区東新橋2-4-1　サンマリーノ汐留2F<br />
TEL 03-5733-1602<br />
<a href="mailto:kreis-info@kandc.com">kreis-info@kandc.com</a><br /><br />
    Copyright&copy;KREIS&amp;Compandy All Rights Reserved.<br />webdesign <a href="http://tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>
    
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