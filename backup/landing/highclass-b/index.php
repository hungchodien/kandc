<?php ob_start(); ?>
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
<?php include('inc/config.php'); ?>
<?php

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
			if(isset($_SERVER['HTTPS'])):
				if ($_SERVER["HTTPS"] == "on"): 
					$protocol = "https:";
				else:
					$protocol = "http:";
				endif;
			else :
				$protocol = "http:";
			endif;


if ($protocol == 'http:' || $protocol =='HTTP:'){
    //$entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:https://www.kandc.com'.$_SERVER['REQUEST_URI']);
}

if ($_SERVER['HTTP_HOST'] != "www.kandc.com" && ($protocol == 'http:' || $protocol =='HTTP:')){
   
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: https://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}

?>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,ヘッドハンター" />
<meta name="description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「キャリアが最大限に活かせるオファーになかなか出会えない」「わずらわしい企業との交渉をお任せしたい」「転職市場や企業について何でも聞ける、頼れるパートナーが欲しい」方はぜひエントリーください。" />


<meta property="og:title" content="30代の転職ならクライス＆カンパニー（私たちはハイクラス転職を成功へ導くスペシャリストです）" />
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.kandc.com/landing/highclass-b/" /> 
<meta property="og:description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「キャリアが最大限に活かせるオファーになかなか出会えない」「わずらわしい企業との交渉をお任せしたい」「転職市場や企業について何でも聞ける、頼れるパートナーが欲しい」方はぜひエントリーください。" />
<meta property="og:image" content="http://www.kandc.com/landing/highclass-b/img/facebook-og-image.png" />
<meta property="og:site_name" content="30代の転職ならクライス＆カンパニー（私たちはハイクラス転職を成功へ導くスペシャリストです）" />


<title>30代の転職ならクライス＆カンパニー（私たちはハイクラス転職を成功へ導くスペシャリストです）</title>
<link rel="stylesheet" type="text/css" href="<?php echo url_root_domain; ?>css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/style.css" media="all" />

<!--[if lt IE 9]>
<script src="<?php echo url_root_domain; ?>js/html5.js" type="text/javascript"></script>
<script src="<?php echo url_root_domain; ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>



<!--Script vadidate form-->
 	<script src="<?php echo url_root; ?>js/jquery.lazyload.min.js" type="text/javascript"></script>
	<script src="<?php echo url_root; ?>js/jquery.lazyscript.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo url_root; ?>js/validate_form_entry.js"></script>
    <script src="<?php echo url_root_domain; ?>js/show_form.js" type="text/javascript"></script>
	<script src="<?php echo url_root_domain; ?>js/matchMedia.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo url_root_domain; ?>js/watermark.js"></script>
	<script type="text/javascript" src="<?php echo url_root; ?>js/prototype.js"></script>
   <script type="text/javascript" src="<?php echo url_root; ?>js/auto_ruby.js"></script>
   
    
	
    <!-- javascript -->
    <script type="text/javascript">
    	//warning message					
		var new_var = true;
	    /*window.onbeforeunload = function () {
	        if (new_var) {
				if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ){
					return "このページを離れると、入力したデータが削除されます。\nよろしいですか？";
				}else {
	            	return "このページを離れると、入力したデータが削除されます。";
				}
	        }
	    }
		*/
	    function unhook() {
	        new_var = false;
	    }
    </script>
    
     <style type="text/css">
    	.bg_error_fx{
			background:#fff4f4;
		}
		.bg-text {
    		background-color:#f4ffff;
		}
		.easy_name {
    		width: 163px;
		}
		.easy_name input {
   		 width: 90%;
		}
		.phone input {
    		width: 116px;
		}
		.error_box34 {
   		 left: 0 !important;
		}
		#errortext1::before, #errortext1::after {
   		 left: 20px !important;
		}
		#errortext2::before, #errortext2::after {
   		 left: 20px !important;
		}
		#errortext3::before, #errortext3::after {
   		 left: 20px !important;
		}
		#errortext4::before, #errortext4::after {
    		left: 20px !important;
		}
		.line_auto,.line_auto div{
			line-height:inherit !important;
		}
		.text-personal-400 {
   			 margin-bottom: 0px;
		}
		td.pd10{
			padding:10px !important;
		}
		/*#errortext12,#errortext34,#errorselect123,#errorselect4_s,#errortext567{
			margin-left:10px;
		}*/
    </style>
    
    
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
			
			
		// Feat 01 - 02 - 03 
		$("#feat-01").click(function(){
			$('html, body').animate({scrollTop: $("#feat-01-area").offset().top}, 1000);
		});
		$("#feat-02").click(function(){
			$('html, body').animate({scrollTop: $("#feat-02-area").offset().top}, 1000);
		});
		$("#feat-03").click(function(){
			$('html, body').animate({scrollTop: $("#feat-03-area").offset().top}, 1000);
		});
		//Move form
		$(".move-form").click(function(){
			$('html, body').animate({scrollTop: $("#form-area").offset().top}, 500);
		});	
				
				
				
		$('#text5').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_0");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text6").attr('disabled','disabled');
						$("#text7").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text6").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_0");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
					
			});
			
			$('#text6').bind('input keyup keydown keypress', function(){
					var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_1");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text7").attr('disabled','disabled');
						$("#text5").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text7").removeAttr('disabled');
						$("#text5").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_1");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
    				
			});
			$('#text7').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					if($.isNumeric(value_input) == false){
						$(".check_number_error").addClass("fone_error_2");
			  			$(".check_number_error").css({"display":"block"});
						 //alert('Please enter numeric value');
						//value_input=value_input.replace(/[0-9]/g,'');
						$("#text6").attr('disabled','disabled');
						$("#text5").attr('disabled','disabled');
						$(this).addClass('textError');
					}
					else
					{
						$("#text6").removeAttr('disabled');
						$("#text5").removeAttr('disabled');
						$(".check_number_error").removeClass("fone_error_2");
			  			$(".check_number_error").css({"display":"none"});
						$(this).removeClass('textError');
					}
			});
			
			$('#text8').bind('input keyup keydown keypress', function(){
    				var value_input=$(this).val();
					
						if(!isValidEmailAddress(value_input))
						{
							$(".check_email_error").addClass("txt_error_mail");
			  				$(".check_email_error").css({"display":"block"});
							//$("#text9").attr('disabled','disabled');
						}
						else
						{
							$(".check_email_error").removeClass("txt_error_mail");
			  				$(".check_email_error").css({"display":"none"});
							//$("#text9").removeAttr('disabled','disabled');
						}
						
					
			});


		/*xuong dong dat trong jquery*/
			$('textarea').keypress(function(event) {
			  if (event.which == 13) {
				event.preventDefault();
			      var s = $(this).val();
			      $(this).val(s+"\n");
			  }
			});
			
		/*het xuong dong*/

			
			$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
			});
			$("#text2").on("keypress keyup keydown",function (event) {   
					setRuby('text2','text4');
					//alert("ok");
			});
			
			$("#text16").Watermark("（例）マーケティング部　課長");
			$("#text8").Watermark("（例）example@kandc.com");
			$("#text9").Watermark("確認のため、もう一度ご入力ください。");
			$("#text10").Watermark("（例）◯◯大学　◯◯学部　◯◯学科");
			$("#text12").Watermark("（例）ITパスポート、プロジェクトマネージャ、中小企業診断士");
			$("#text14").Watermark("（例）株式会社◯◯");
			$("#text19").Watermark("2社以上ご就業経験をお持ちの方は、\n直近の職務内容以外でキャリアコンサルタントに伝えたい経験・スキルがあれば記入してください。\n\n（例）\n20☓☓年4月～20☓☓年12月までは株式会社△△に所属し、\n銀行系のシステム開発を行っていました。その際、新人教育にも携わっていました。");
			$("#text20").Watermark("（例）東京都、千葉県");

				$("#submit_form").on("submit", function() { 
				$text16=$("#text16").val();
				$text8=$("#text8").val();
				$text9=$("#text9").val();
				$text10=$("#text10").val();
				$text12=$("#text12").val();
				$text14=$("#text14").val();
				$select15=$("#select15").val();
				$select5=$("#select5").val();
				$text18=$("#text18").val();
				$text19=$("#text19").val();
				$text20=$("#text20").val();
				if($text16=='（例）マーケティング部　課長'){
					//alert($text16);
					$("#text16").val("");
				}
				if($text8=='（例）example@kandc.com'){
					//alert($text16);
					$("#text8").val("");
				}
				if($text9=='確認のため、もう一度ご入力ください。'){
					//alert($text16);
					$("#text9").val("");
				}
				if($text10=='（例）◯◯大学　◯◯学部　◯◯学科'){
					//alert($text16);
					$("#text10").val("");
				}
				if($text12=='（例）ITパスポート、プロジェクトマネージャ、中小企業診断士'){
					//alert($text16);
					$("#text12").val("");
				}
				if($text14=='（例）株式会社◯◯'){
					//alert($text16);
					$("#text14").val("");
				}
				if($select5=='下記から選択してください'){
					//alert($text16);
					$("#select5").val("");
				}
				if($select15=='従業員数を下記から選択してください'){
					//alert($text16);
					$("#select15").val("");
				}
				
				if($text19=='2社以上ご就業経験をお持ちの方は、\n直近の職務内容以外でキャリアコンサルタントに伝えたい経験・スキルがあれば記入してください。\n\n（例）\n20☓☓年4月～20☓☓年12月までは株式会社△△に所属し、\n銀行系のシステム開発を行っていました。その際、新人教育にも携わっていました。'){
					//alert($text16);
					$("#text19").val("");
				}
				if($text20=='（例）東京都、千葉県'){
					//alert($text16);
					$("#text20").val("");
				}
				
			});


			 // hide #back-top first
            $("#back-top").hide();
            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-top a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
		
		
		function isNumber(e) {
			
			var ew = e.which;
			if(48 <= ew && ew <= 57){
				return true;
			}
			else
			{
				e.preventDefault();
			}

    	}    
		
		
		
    </script>
	<script type="text/javascript">
	    jQuery(document).on("keydown", function(event) {
	
	        if (event.which.toString() == "8") {
	
	            var findActiveElementsClosestForm = $(document.activeElement).closest("form");
	
	            if (findActiveElementsClosestForm && findActiveElementsClosestForm.length) {
	                jQuery("form#" + findActiveElementsClosestForm[0].id + " .secondary_button").trigger("click");
	            }
	        }
	    });
	 </script>
 <!--Bookmark-
<script type="text/javascript">
	 jQuery(document).ready(function ($) {
		 $(".bookmark").on('click', function(){

		    	var $this = $(this);
		
		    	var bookmarkUrl = $this.attr('href');
		    	var bookmarkTitle = $this.attr('title');
		
		
		    	if ($.browser.mozilla) {
		    		// For Mozilla Firefox Bookmark
		    		window.sidebar.addPanel(bookmarkTitle, bookmarkUrl,"");
		
		    	} else if($.browser.msie) {
		    		// For IE Favorite
		           	window.external.AddFavorite( bookmarkUrl, bookmarkTitle);
		
		        } else if($.browser.opera ) {
		            // For Opera Browsers
		
		           	$this.attr("href",bookmarkUrl);
		           	$this.attr("title",bookmarkTitle);
		           	$this.attr("rel","sidebar");
		           	$this.click();
		
		        } else {
		            // for other browsers which does not support
		                        alert('Your browser does not support this feature. Simply press "ctrl + d" to add to favourites')
		        }
		        return false;
		 });
	
	});
</script> -->
<!--Bookmark A. Khanh-->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
		$('#bookmark').click(function(e) {
		    var bookmarkURL = window.location.href;
		    var bookmarkTitle = document.title;
		    var triggerDefault = false;
		
		    if (window.sidebar && window.sidebar.addPanel) {
		        // Firefox version < 23
		        window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
		    } else if ((window.sidebar && (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) || (window.opera && window.print)) {
		        // Firefox version >= 23 and Opera Hotlist
		        var $this = $(this);
		        $this.attr('href', bookmarkURL);
		        $this.attr('title', bookmarkTitle);
		        $this.attr('rel', 'sidebar');
		        $this.off(e);
		        triggerDefault = true;
		    } else if (window.external && ('AddFavorite' in window.external)) {
		        // IE Favorite
		        window.external.AddFavorite(bookmarkURL, bookmarkTitle);
		    } else {
		        // WebKit - Safari/Chrome
		        //alert( (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Cmd' : 'Ctrl') + '+D to bookmark this page.');
				alert( 'Ctrl+D キー（Mac の場合: ⌘-D キー）を押して頂くと気に入りに追加されます。');
				var evt = $.Event("keypress");
				evt.keyCode = 100; // d
				evt.ctrlKey = true;
				$(document).trigger(evt);
		    }
		
		    return triggerDefault;
		});

    });
</script>
</head>

<body>
<div id="overlay" style="display: none;"></div>
<div id="page" class="wrapper_container clear">
	<a id="bookmark" class="bookmark" href="<?php echo url_root; ?>" title="Consultant Landing Page" rel="sidebar"><img class="bookmark_btn" src="img/button-bookmark.png" alt="お気に入りに追加"/></a>
    
	<div id="top" class="clear">
    	<div class="left_top">
        	<a href="<?php echo url_root_domain; ?>"><img src="img/logo-kreis.png" alt="株式会社クライス＆カンパニー" /></a>
        </div>
        <div class="right_top clear">
        	<div class="fb-like" data-width="50" data-layout="button_count" data-href="<?php echo url_root; ?>"></div>
            
            <div class="twitter_btn"><iframe
  src="https://platform.twitter.com/widgets/tweet_button.html?url=<?php echo url_root; ?>"
  width="90"
  height="20"
  title="Twitter Tweet Button"
  style="border: 0; overflow: hidden;">
</iframe></div>
            <div class="gplus_btn"><g:plusone></g:plusone></div>

        </div>
    </div> <!--#top-->
    
    <div class="main_bg">
    <div id="header_img" class="container clear">
        	<div class="main_content clear">
            	<div class="main_title clear"><img src="img/main-title.png" alt="私たちはハイクラス転職を成功へ導くスペシャリストです"/></div>
              	<div class="main_check clear">
                
                   <img src="img/main-check1.png" alt="キャリアが最大限に活かせるオファーになかなか出会えない" />
                    <img src="img/main-check2.png" alt="わずらわしい企業との交渉をお任せしたい" />
                    <img src="img/main-check3.png" alt="転職市場や企業について何でも聞ける、頼れるパートナーが欲しい" />
                </div>
            </div>
        <div id="main-btn" class="main_btn move-form"></div>

    </div>
    </div>
	<div class="container_features">
    	<div class="img_features">
        	<img class="features-title" src="img/features-title.png" alt="クライス&カンパニーだけの3つの特長"/>
          <ul class="clear">
	        	<li class="img_feature"><a id="feat-01" href="#"><img src="img/features-button-1.png" alt="特長01 平均年齢34.8歳30代の転職成功事例が多数" /></a></li>
    	        <li class="img_feature"><a id="feat-02" href="#"><img src="img/features-button-2.png" alt="特長02 経験10年以上ベテランのコンサルタントが専任でサポート" /></a></li>
        	    <li class="img_feature"><a id="feat-03" href="#"><img src="img/features-button-3.png" alt="特長03 マネージャークラス以上のエクスクルーシブ案件が豊富" /></a></li>
	        </ul>
       	</div>
	</div> <!--#container_features-->
    <div class="container">
    	<p class="consultant-title"><img src="img/consultant-title.png" alt="私たちは、30代の転職を成功に導きます。経験10年以上、業界に精通したコンサルタントがサポートします。" /></p>
        <div class="consultant-area">
			<div class="consultant-staff clear">        	
                <img class="l" src="img/consultant-okada.png" alt="エグゼクティブコンサルタント 岡田 麗"/>
                <div class="r consultant-bg-right">
                	<p class="consultant-staff-title"><img src="img/consultant-okada-title.png" alt="「仕事」だけではなく「人生全体」をキャリアと捉え、皆さまの転職サポートをさせていただきます。" /></p>
                    <div class="consultant-staff-content">
                    	<p>現在まで4000名以上の方の転職サポートをさせていただき、企業のコアなポジションを500件以上成約させて参りました。お付き合いさせていただいた転職希望者の多くは、30代―40代のエグゼクティブ、シニア、ミドルリーダー層です。<br />ご家庭やプライベート、地域、諸々皆さまにはいくつかの役割があるでしょう。その中でも「仕事」が自分の人生の中でとても重要とお考えの方と一緒に、更に力を発揮できる環境を考え、充実した生活を送るお手伝いができればと思っています。</p>
					</div>
                </div>
            </div>
            <div class="consultant-staff-middle clear">        	

                 <div class="l consultant-bg-left">
                	<p class="consultant-staff-title-l pt15"><img src="img/consultant-hando-title.png" alt="貴方の“想い”を大切に、実現できる方法を一緒に考え、新たなフィールドをご提案いたします。" /></p>
                    <div class="consultant-staff-content-l">
                   	  <p>私は、IT・web・コンサルティング業界の転職サポートを得意としています。<br />応募要件で明確なスキルが記載されやすい職種ですが、単なるスキルマッチではなく「可能性」「気付き」を発見いただけるようなコンサルティングを強く心がけております。お話する中で、お一人で考えていては気がつかないような貴殿の可能性や今後の可能性、新たなキャリアパスをご提案できれば幸いです。</p>
                    </div>
                </div>
                <img class="r" src="img/consultant-hando.png" alt="シニアコンサルタント 半藤 剛"/>
            </div>
            <div class="consultant-staff clear">        	
                <img class="l" src="img/consultant-matsuo.png" alt="シニアコンサルタント 松尾 匡起"/>
                 <div class="r consultant-bg-right">
                	<p class="consultant-staff-title pt20"><img src="img/consultant-matsuo-title.png" alt="「エージェントなんてどこも一緒」とお考えの方の期待を越えるサービスを提供したいと考えています。" /></p>
                    <div class="consultant-staff-content">
                    	<p>企画系職（経営企画・事業企画・マーケティング）、コンサルタント（戦略系・会計系・IT系）の特にミドルマネジメント層を得意としています。<br />30代になるとスキルだけではなく、カルチャー、理念等へのフィット感も重要な判断軸になると感じています。「自分らしい生き方」、「自分らしく生きるための働き方」、を皆さまと共に日々本気で模索しています。</p>
                    </div>
                </div>
            </div>
            <div class="consultant-footer">
            	<div class="consultant-btn-entry move-form"></div>
                <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
            </div>
        </div>
    </div>
<div id="feat-01-area" class="features-01">
    	<div class="feat-01-header">
            <div class="feat-01-title"><img src="img/features01-title.png" alt="平均年齢34.8歳30代の転職成功事例が多数"/></div>
            <div class="feat-title-arrow"><img class="" src="img/features-title-arrow.png" alt="" /></div>
       </div>
        <div class="container">
        	<div class="feat-main-content-01 clear">
                <div class="feat-left">
                    <img class="feat-01-title-img" src="img/features01-h2-title.png" alt="決定者の80％が30代以上です！" />
                    <p class="text-bold">30代キャリアの専門家集団。<br />難しい30代の転職を、私たちが成功へ導きます。</p>
                    <p class="text-bold">「なぜ、30代か？」それは、30代が長いキャリアにおいて一番大切な時期であり、かつ難しいものだからです。</p>
                    <p class="feat-01-content">30代の方に求められるポジションは、マネージャー候補以上になりますので、当然企業側のジャッジも厳しくなります。プライベートにおいても20代と違って身軽ではないため、多くの方は転職を一人の都合で決断できない状況に置かれています。</p>
                    <p class="feat-01-content">また、実績と経験を積んでこられた方であれば、次のステージへの希望も高く、条件も複雑です。単なる情報と情報のマッチングで成功しないのが30代の転職。そこで私たちが介入することによって成功へのお手伝いができればと思っています。</p>
                    <p class="feat-01-content"><span class="text-point">30代の方を中心に、30歳からさらなる飛躍を求める20代後半の方、そして30代の経験を活かし次のステージをお考えの40代エグゼクティブ層の方まで、</span>30代のキャリアを基点として、キャリアを真剣に考える方々を私たちは支援いたします。</p>
                   
                </div>
                <div class="feat-right">
                    <img src="img/features01-graph.png" alt="決定者平均年齢 20代16% 30代66% 40代13% 50代5%" />
                    <p class="footer-text">※2014年10月末から2015年3月末の平均</p>
                </div>
           </div> <!--#clear-->
               <div class="feat-footer">
                    <div class="feat-01-btn move-form"></div>
                    <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
               </div>
        </div>      
    </div> 	<!--#features-01-->
<div id="feat-02-area" class="features-02">
    	<div class="feat-02-header">
            <div class="feat-02-title"><img src="img/features02-title.png" alt="経験10年以上ベテランのコンサルタントが専任でサポート"/></div>
            <div class="feat-title-arrow"><img class="" src="img/features-title-arrow.png" alt="" /></div>
       </div>
       <div class="container">
			<div class="feat-main-content">       		
                <div class="text-center"><img src="img/features02-h2-title.png" alt="「GCDF資格の取得」「C＆R方式」を実践している経験豊富なコンサルタントが専任でサポートします。"/></div>
                <div class="gcdf-top-content">
                    <p>30代マネージメント層以上の方々をサポートする上で、私たち自身も幅広い知識とスキルが要求されます。それにお応えできるよう、1993年の創立以来当社では、年間100時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています。<br />
研修では、独自に開発した「キャリアコンサルタントトレーニングプログラム」や、「コーチング研修」などを行い、それらを受講することによって、アセスメント技術の向上や倫理観の確立に努めています。<br />
コンサルタント全員がGCDF資格取得に励むのもその一環です。</p>
                </div>
                <div class="box-gcdf clear">
                	<div class="gcdf-left l">
                    	<p class="gcdf-title">GCDFとは？</p>
                        <div class="gcdf-content">
                        	<p>GCDF資格とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です。<br /><br />キャリアカウンセラーに必要な幅広い知識と実践的なスキルを身につけるため、120時間にも及ぶトレーニングプログラムを受講し、試験（筆記・実技）に合格すると資格が取得できます。</p>  
                        </div>
                    </div>
                    <div class="gcdf-right r">
	                    <p class="gcdf-title">C&amp;R方式とは?</p>
                         <div class="gcdf-content">
                         	<p>人材紹介会社では、効率の良さから面談を行うコンサルタントと企業を担当するコンサルタントが別々になっている形態が一般的ですが、当社は、全員がどちらも担当する一人二役のコンサルタントです。それをC&amp;R方式と呼んでいます。<br />最大のメリットは、企業のニーズをしっかり把握でき、候補者の方のキャリアや性格もよく知った上で、その方に適した企業を見つけ出すことができ、ミスマッチも少なくなること。<br />企業、転職者双方が満足できる転職を実現させています。</p>
                         </div>
                    </div>
                </div> <!--#box-gcdf-->
                <div class="gcdf-list-imgs-area">
                	<div class="gcdf-logo-area clear">
                    	<div class="gcdf-logo l"><img  class="" src="img/features02-icon-gcdf.png" alt="GCDF資格" /></div>
                        <span class="gcdf-title">クライス＆カンパニーのGCDF資格</span>
                    </div>
                    <div class="gcdf-list-imgs clear">
                    	<img src="img/features02-gcdf-okada.png" alt="エグゼクティブコンサルタント 岡田 麗" />
                        <img src="img/features02-gcdf-nara.png" alt="シニアコンサルタント 奈良 元生" />
                        <img src="img/features02-gcdf-hando.png" alt="シニアコンサルタント 半藤 剛" />
                        <img src="img/features02-gcdf-matsuo.png" alt="シニアコンサルタント 松尾 匡起" />
                        <img src="img/features02-gcdf-irie.png" alt="シニアコンサルタント 入江 祥之" />
                        <img src="img/features02-gcdf-takeda.png" alt="チーフコンサルタント 武田 直人" />
                        <img src="img/features02-gcdf-nagata.png" alt="チーフコンサルタント 永田 憲章" />
                        <img src="img/features02-gcdf-oda.png" alt="コンサルタント 小田 麻耶" />
                        <img src="img/features02-gcdf-jingushi.png" alt="コンサルタント 神宮司 篤子" />
                    </div>
                </div>
           
            </div> <!--#feat-main-content-->
             <div class="feat-footer">
                    <div class="feat-02-btn move-form"></div>
                    <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
             </div>
       </div>
    </div> <!--#features-02-->
<div id="feat-03-area" class="features-03">
    	<div class="feat-03-header">
            <div class="feat-03-title"><img src="img/features03-title.png" alt="マネージャークラス以上のエクスクルーシブ案件が豊富"/></div>
            <div class="feat-title-arrow"><img class="" src="img/features-title-arrow.png" alt="" /></div>
       </div>
       <div class="container">
       		<div class="feat-main-content clear">
            	<div class="l">
                	<img src="img/features03-graph.png" alt="非公開求人数75% 公開求人数25%" />
                    <p class="text-center">※2015年7月現在</p>
                </div>
                <div class="r feat-03-content">
                	<p>在籍するコンサルタントはそれぞれ得意分野をもっており、長期にわたり企業とおつきあいをしています。企業からは戦略面から、組織・採用のご相談を承ることも多く、エクスクルーシブ案件・非公開求人の比率が多いことも特長です。<br /><br />信頼関係が構築できていますので、<span class="text-point">採用ニーズが顕在化していない場合でも経営課題の解決を実現できる強みをお持ちの方を個別にご推薦</span>するという動きができる点も強みです。</p>
                    
                </div>
            </div> <!--#feat-main-content-->
             <div class="feat-footer">
                    <div class="feat-03-btn move-form"></div>
                    <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
             </div>
       </div>
    </div> <!--features-03-->
    <div class="line"></div>
    <div class="voice">
    	<div class="container">
        	<div class="voice-main-content clear">
            	<div class="voice-content">
                	<img src="img/voice-icon-32m.png" alt="32歳 男性" />
                    <p class="voice-box-01">戦略コンサルティングファーム コンサルタント</p>
                    <img class="voice-arrow" src="img/voice-arrow.png" alt="" title="" />
                    <p class="voice-box-02">運輸・物流企業 経営企画 マネージャー</p>
                    <div class="voice-box-03">
                    	<div class="box-03-title">
                        	<img src="img/voice-title-32m.png" alt="クオリティの高い対応に満足しています" />
                        </div>
                        <div  class="box-03-content">
                        	<p>ご紹介いただく案件は、私の希望を汲み取っていただいた上で厳選してくださっていることが嬉しかったです。内定をもらった企業について不安に思った点を相談した時も親身にご対応いただいたことで、私の中でのモヤモヤが取れて入社を決意することができました。他のエージェントとは比較にならないくらいクオリティの高い対応に満足しています。</p>
                        </div>
                    </div>
                </div> <!--#voice-content 1-->
                <div class="voice-content special">
                	<img src="img/voice-icon-39m.png" alt="39歳 男性" />
                    <p class="voice-box-01">大手通販会社　EC部長</p>
                    <img class="voice-arrow" src="img/voice-arrow.png" alt="" title="" />
                    <p class="voice-box-02">急成長中のECベンチャー メディア責任者</p>
                    <div class="voice-box-03">
                    	<div class="box-03-title">
                        	<img src="img/voice-title-39m.png" alt="自分では出会えなかった企業とのご縁を生み出してもらい、感謝しています。" />
                        </div>
                        <div  class="box-03-content-special">
                        	<p>これまで、通販会社のEC部門の急成長に携わってきましたが新たに挑戦できる環境を探したく、転職活動を開始。何社か面接をしましたがピンと来た企業に出会えず、長くおつきあいをしているヘッドハンターへ相談してみました。そこで、今回の転職先企業をご紹介いただき、すぐに社長と面接。お会いしてみて、まさに私が探している成長意欲の高い組織だと感じ入社を決意しました。<br />希望の環境に出会えたことを、大変感謝しています。</p>
                        </div>
                    </div>
                </div> <!--#voice-content-2-->
                <div class="voice-content">
                	<img src="img/voice-icon-35w.png" alt="35歳 女性" />
                    <p class="voice-box-01">戦略コンサルティングファームコンサルタント</p>
                    <img class="voice-arrow" src="img/voice-arrow.png" alt="" title="" />
                    <p class="voice-box-02">海外事業推進・責任者</p>
                    <div class="voice-box-03">
                    	<div class="box-03-title">
                        	<img src="img/voice-title-35w.png" alt="私の潜在的ニーズを突き止めてくれました。" />
                        </div>
                        <div  class="box-03-content">
                        	<p>これまでにお世話になった他社と比較しても、面談は最も話しやすかったです。また、限られた短時間の中で私の情報を良く理解してもらえたと思っています。その理由の１つは、「あなたにとって仕事とは？」のような本質的な内容に関する質疑応答があったからかもしれません。<br />「数」よりも「質」を大事にした求人案件のご提案に大変満足しています。</p>
                        </div>
                    </div>
                </div> <!--#voice-content-03-->
            </div>
            <div class="voice-footer">
                    <div class="voice-btn move-form"></div>
                    <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
            </div> 
        </div>
   
    </div> <!--#voice-->
     <div id="form-area" class="form-area"> <!--big-->
    	<div class="form-title">
        	<img src="img/entry-title.png" alt="今すぐ転職をお考えの方も、将来的な転職を視野に入れている方もハイクラス転職専門コンサルタントに相談してみませんか？＜完全無料＞" />
        </div>
        <div class="text-center">
        	<img src="img/entry-title-arrow.png" alt="" title="" />
        </div>
        
        <div class="container clear">
            <div class="voice-main-content clear entry_easy_frm">
 <!--myform-->  <div class="form"> <!--small-->
      <div id="entry-form" class="entry-form entry_form_popup" >
<form action="confirm.php" method="post" id="submit_form">
	<div id="personal_block1" class="form-personal-profile step_hiden">
	<div class="label-personal">個人プロフィール <span class="r" style="font-size:12px;"><span class="red-color">※</span> 必須項目になります。</span></div>
    <div class="table-personal-profile2">
    	<table class="no_bb">
        <tr>
        <td class="label">
                    <div>お名前 <span class="red-color">※</span></div>
         </td>
         <td class="pd10">
                    <div class="td-content line_auto  clear">
                        <div class="name_label">姓</div>
                        <div class="easy_name"  style="position:relative;" >
                <input type="text" name="text1" id="text1" value="" class="bg_error_fx" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" />
                       <p id="errortext1"></p>
                        </div>
                        <div class="name_label">名</div>
                        <div class="easy_name"  style="position:relative;">
               <input type="text" name="text2" id="text2" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                        <p id="errortext2"></p>
                        </div>
                        
                    </div>
                    
                    <div class="td-content clear group_error" > 
                    		<p><span id="errortext12"></span></p>
                    		
                    </div>
                </td>
                
            
        </tr>
        </table>
        
        <table class="no_bb">
        	<tr>
            <td class="label">
                    <div>フリガナ <span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content line_auto clear">
                        <div class="name_label">セイ</div>
                        <div class="easy_name" style="position:relative;" > 
               <input type="text" name="text3" id="text3" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"/>
                        <p id="errortext3" class="error_box34"></p>
                        </div>
                        <div class="name_label">メイ</div>
                        <div class="easy_name" style="position:relative;" >
               <input type="text" name="text4" id="text4" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                         <p id="errortext4" class="error_box34"></p>
                        </div>
                    </div>
                  	 <div class="td-content clear group_error" > 
                    		<p><span id="errortext34"></span></p>
                    		
                    </div>
                </td>
            </tr>
        </table>
        <table class="no_bb">
        <tr>
                <td class="label">
                    <div>生年月日 <span class="red-color">※</span></div>
                </td>
                <td  class="pd10">
                    <div class="td-content clear" style="position:relative;">
                        <div>西暦</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select1" id="select1" onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $year = 1940;
                                     $end = date("Y");
                                for ($end; $end >= $year; $end--) {
                                    ?>
                                    <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                <?php } ?>
                            </select>
                            <p id="errorselect1" class="error_select1"></p>
                        </div>
                        <div>年</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select2" id="select2" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                <?php } ?>
                            </select>
                           <p id="errorselect2" class="error_select2"></p>
                        </div>
                        <div> 月</div>
                        <div>
                            <select class="selection selection-style bg_error_fx" name="select3" id="select3" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                                <option value=""> 選択</option>
                                <?php $day = 1;
                                $endDay = 31;
                                for ($day; $day <= $endDay; $day++) {
                                    ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                <?php } ?>
                            </select>
                            <p id="errorselect3" class="error_select3"></p>
                        </div>
                        <div> 日</div>
                    </div>
                    
                     <div class="td-content clear group_error" > 
                    		<p><span id="errorselect123"></span></p>
                    		
                    </div>
                </td>
            </tr>
        </table>
        
        <table class="no_bb">
        <tr>
                <td class="label">
                    <div>都道府県<span class="red-color">※</span></div>
                </td>
                
                <td class="pd10">
                    <div class="td-content state clear" style="position:relative;">
                       
                            <select class="selection bg_error_fx"  name="select4" id="select4"  onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                                <option value="">都道府県を選択してください。</option>
                                <option value='東京都' >東京都</option>
                                     <option value='千葉県' >千葉県</option>
                                     <option value='埼玉県' >埼玉県</option>
                                     <option value='神奈川県' >神奈川県</option>
                                     <option value='' >---------</option>
                               <option value='北海道' >北海道</option>
                               <option value='青森県' >青森県</option>
                               <option value='岩手県' >岩手県</option>
                               <option value='宮城県' >宮城県</option>
                               <option value='秋田県' >秋田県</option>
                               <option value='山形県' >山形県</option>
                               <option value='福島県' >福島県</option>
                               <option value='茨城県' >茨城県</option>
                               <option value='栃木県' >栃木県</option>
                               <option value='群馬県' >群馬県</option>
                               <option value='埼玉県' >埼玉県</option>
                               <option value='千葉県' >千葉県</option>
                               <option value='東京都' >東京都</option>
                               <option value='神奈川県' >神奈川県</option>
                               <option value='新潟県' >新潟県</option>
                               <option value='富山県' >富山県</option>
                               <option value='石川県' >石川県</option>
                               <option value='福井県' >福井県</option>
                               <option value='山梨県' >山梨県</option>
                               <option value='長野県' >長野県</option>
                               <option value='岐阜県' >岐阜県</option>
                               <option value='静岡県' >静岡県</option>
                               <option value='愛知県' >愛知県</option>
                               <option value='三重県' >三重県</option>
                               <option value='滋賀県' >滋賀県</option>
                               <option value='京都府' >京都府</option>
                               <option value='大阪府' >大阪府</option>
                               <option value='兵庫県' >兵庫県</option>
                               <option value='奈良県' >奈良県</option>
                               <option value='和歌山県' >和歌山県</option>
                               <option value='鳥取県' >鳥取県</option>
                               <option value='島根県' >島根県</option>
                               <option value='岡山県' >岡山県</option>
                               <option value='広島県' >広島県</option>
                               <option value='山口県' >山口県</option>
                               <option value='徳島県' >徳島県</option>
                               <option value='香川県' >香川県</option>
                               <option value='愛媛県' >愛媛県</option>
                               <option value='高知県' >高知県</option>
                               <option value='福岡県' >福岡県</option>
                               <option value='佐賀県' >佐賀県</option>
                               <option value='長崎県' >長崎県</option>
                               <option value='熊本県' >熊本県</option>
                               <option value='大分県' >大分県</option>
                               <option value='宮崎県' >宮崎県</option>
                               <option value='鹿児島県' >鹿児島県</option>
                               <option value='沖縄県' >沖縄県</option>
                               <option value='海外' >海外</option>
                            </select>
                        
                        <p id="errorselect4" class="error_select4"></p>
                    </div>
                    <div class="td-content"><p id="errorselect4_s"></p></div>
                </td>
               
            </tr>
            
        </table>
        <table class="no_bb">
        	<tr>
             <td class="label">
                    <div>電話番号 <span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content phone clear" >
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text5" id="text5" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive; margin-left: 10px;" onfocus="click_text_error(this.id)"/> -
                            <p id="errortext5" class="error_box5"></p>
                       </div>
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text6" id="text6" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/> -
                            <p id="errortext6" class="error_box6"></p>
                       </div>
                       <div style="position:relative;">
                            <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text7" id="text7" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/>
                            <p id="errortext7" class="error_box7"></p>
                        </div>
                        
                       <p class="check_number_error" style="display:none;">「半角英数字」で電話番号を正しく入力ください。</p>
                       
                    </div>
                    
                    <div class="td-content clear group_error" > 
                    		<p><span id="errortext567"></span></p>
                    		
                    </div>
                   
                </td>
            </tr>
        </table>
        <table>
            
            
            <tr>
                <td class="label">
                    <div>メールアドレス<span class="red-color">※</span></div>
                </td>
                <td class="pd10">
                    <div class="td-content clear line_auto" style="position:relative;">
                        <div>
                            <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text8" id="text8" onfocus="click_text_error(this.id)"/>
                             <p id="errortext8" class="error_box8"></p>
                        </div>
                       
                        <!--<div>
                            <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text9" id="text9" onfocus="click_text_error(this.id)"/>
                              <p id="errortext9" class="error_box9"></p>
                        </div>-->
                        <!--<div style="width: 70px;  margin: 3px 0 0px 0">&nbsp;※確認用</div>-->
						
      <p class="check_email_error" style="display:none;">必須項目です。必ずご入力ください。</p>
                        
                    </div>
                    
                    <div class="td-content clear">
                    	<div><span id="errortext89"></span></div>
                    </div>
                   
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block2" class="form-personal-profile">
    <div class="label-personal">最終学歴・語学・資格</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input type="text" name="text10" id="text10" value="" style="width:580px;" onfocus="click_text(this.id)"/></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>英語力</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 250px" name="select5" id="select5" onfocus="click_text(this.id)">
                                <option>下記から選択してください</option>
                                <option value="ネイティブレベル">ネイティブレベル</option>
                                <option value="ビジネスレベル">ビジネスレベル</option>
                                <option value="スタンダードレベル">スタンダードレベル</option>
                                <option value="ベーシックレベル">ベーシックレベル</option>
                                <option value="不可">不可</option>
                            </select>
                        </div>
                        <div>TOEIC</div>
                        <div><input type="text" name="text11" id="text11" value="" onfocus="click_text(this.id)"/></div>
                        <div> 点</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他語学・資格</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <textarea rows="1" cols="50" style="width: 580px" type="text" name="text12" id="text12" value="" onfocus="click_text(this.id)"></textarea>
                        </div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block3" class="form-personal-profile">
<div class="label-personal">職務経歴について</div>
<div class="table-personal-profile">
    <table>
        <tr>
            <td class="label">
                <div>経験社数 <span class="red-color">※</span></div>
            </td>
            <td>
                <div class="td-content clear" style="position:relative;">
                    <div><input type="text" class="bg_error_fx" name="text13" id="text13" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"/>
                      <p id="errortext13" class="error_box13"></p>
                    </div>
                    <div>社</div>
                    <!--<div id="errortext13"><span></span></div>-->
                </div>

</td>
</tr>
<tr>
    <td class="label">
        <div>会社名・従業員数</div>
    </td>
    <td>
        <div class="td-content clear" style="position:relative;">
        	<div class="clear">
            <div class="l" style="margin:0;"><input style="width: 320px; margin-bottom: 10px" type="text" name="text14" id="text14" value="" onfocus="click_text(this.id)"/>
            </div>
            <div class="l">
            <!--<input style="width: 100px; margin-bottom: 10px" type="text" name="text15" id="text15" onfocus="click_text(this.id)"
                        value=""/>-->
            <select id="select15" name="text15" class="selection selection-style" style="width:250px; padding:3px;" onfocus="click_text(this.id)" >
            <option>従業員数を下記から選択してください</option>
            	<option value="～50名">～50名</option>
                <option value="51～100名">51～100名</option>
                <option value="101～500名">101～500名</option>
                <option value="501～1000名">501～1000名</option>
                <option value="1001名～5000名">1001名～5000名</option>
                <option value="5001名～">5001名～</option>
            	
            </select>         
            </div>
           </div>
            <div class="clear">※直近の職歴についてご入力ください。</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>業種<span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" >
        	 <div class="job_select_option">
            	<a id="checkbox_business_entry" href="javascript:void(0);" onclick="show_layer_select_business('880');">select option</a><span class="txt_option_select_business"></span>
           		 <input type="hidden" name="select6" id="select6" value="" onfocus="click_text(this.id)"/>
            </div>
            
             <script type="text/javascript">
        		jQuery(document).ready(function ($) {	
					$('a#business_close_entry').click(function() {
					//$(".job_select_option").delegate("a#business_close_entry","click", function() {	
						
							$("#overlay").hide();
							$(".pop_up_selecbox_business_entry").hide();
							$(".layer_select_business_bg").hide();
							$("#select6").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						
					});
					$("a#checkbox_business_entry").click(function() {
						new_var = false;
							$("#overlay").css({ display: "block" });
							$(".layer_select_business_bg").show();
							$( ".pop_up_selecbox_business_entry" ).css({"opacity": 1, "display":"block"});
						});
				
					$(".tbl_popup_entry a#tbl_a_tag_business").on('click', function (){
						//$(".tbl_popup_entry").delegate("a#tbl_a_tag_business","click", function() {	
						
							 var fields_checkbox1 = '';
							$(".check_box_business:radio").each(function () {
								if (this.checked) {
									fields_checkbox1 += $(this).val() + ' ';
									//fields_checkbox = $(".checkbox1_entry .check_box_business:checked").val();
									//alert(fields_checkbox);
								}
							});
							
							$('#select6').val(fields_checkbox1);
							if((fields_checkbox1.length)>0){$('#errorselect6').hide();}
							
							$('.txt_option_select_business').text($.trim(fields_checkbox1));
							$("#overlay").hide();
							$(".pop_up_selecbox_business_entry").hide();
							$(".layer_select_business_bg").hide();
							$("#select6").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						})
				});
				
			</script>
           
            <div style="display: none;" class="layer_select_business_bg">
 			</div>
            <div class="pop_up_selecbox_business_entry layer_select_business_cc" style="display:none;">
            	<div class="pop_up_boder_entry clear">
                	<div class="clear">
                    	<div class="l">
                        <div class="clear">
                        	<h3 class="label-personal" style="padding-bottom:0px; float:left">業種を選択</h3>
                        	<p class="hitsu_p" style="float:left; color:#FF0004;">&nbsp;&nbsp;※直近の業種を1つ選択してください</p>
                        </div>
                        </div>
                        <div class="r"><a id="business_close_entry"><img src="https://kandc.com/img/close.gif" /></a></div>
                    </div>
                    <div class="clear form_entry_popup">
                    
                    	<div class="clear business_entry_select">
                        	
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IT・通信系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                   
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（ハード）" />
                                        <span class="content_check">コンピュータ（ハード）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（ソフト）" />
                                        <span class="content_check">コンピュータ（ソフト）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="コンピュータ（システム）" />
                                        <span class="content_check">コンピュータ（システム）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="インターネット" />
                                        <span class="content_check">インターネット</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="ネットーワーク" />
                                        <span class="content_check">ネットーワーク</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="通信キャリア" />
                                        <span class="content_check">通信キャリア</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	専門コンサル系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="戦略コンサルティングファーム" />
                                        <span class="content_check">戦略コンサルティングファーム</span></label></li>
                                     
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="人事・組織コンサルティングファーム" />
                                        <span class="content_check">人事・組織コンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="会計・システムコンサルティングファーム" />
                                        <span class="content_check">会計・システムコンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="その他コンサルティングファーム" />
                                        <span class="content_check">その他コンサルティングファーム</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="シンクタンク" />
                                        <span class="content_check">シンクタンク</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	サービス系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="人材紹介・派遣" />
                                         <span class="content_check">人材紹介・派遣</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="情報サービス" />
                                         <span class="content_check">情報サービス</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="ベンチャーキャピタル" />
                                         <span class="content_check">ベンチャーキャピタル</span></label></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	金融・保険系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="銀行" />
                                        <span class="content_check">銀行</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="証券" />
                                        <span class="content_check">証券</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="生保" />
                                        <span class="content_check">生保</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="損保" />
                                        <span class="content_check">損保</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他金融" />
                                        <span class="content_check">その他金融</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="機械" />
                                        <span class="content_check">機械</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title" style="line-height:15px;">
                                	メーカー系<br />(電気・電子・機械系)
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="電気・電子・半導体" />
                                        <span class="content_check">電気・電子・半導体</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="輸送機器・自動車（部品）" />
                                        <span class="content_check">輸送機器・自動車（部品）</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="プラント設備関連" />
                                        <span class="content_check">プラント設備関連</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="バイオ・メディカル" />
                                        <span class="content_check">バイオ・メディカル</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="化学" />
                                        <span class="content_check">化学</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="エネルギー" />
                                        <span class="content_check">エネルギー</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	不動産・建設系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="不動産" />
                                        <span class="content_check">不動産</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="建設・建築・土木" />
                                        <span class="content_check">建設・建築・土木</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	マスコミ系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="マーケティング関連" />
                                        <span class="content_check">マーケティング関連</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="広告代理店" />
                                        <span class="content_check">広告代理店</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="広告制作" />
                                        <span class="content_check">広告制作</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="出版・マスコミ" />
                                        <span class="content_check">出版・マスコミ</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="教育・研修" />
                                        <span class="content_check">教育・研修</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="アミューズメント・エンターテインメント" />
                                        <span class="content_check">アミューズメント・エンターテインメント</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	流通・小売系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="旅行・ホテル" />
                                        <span class="content_check">旅行・ホテル</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="食品・飲料" />
                                        <span class="content_check">食品・飲料</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="トイレタリー・日用品" />
                                        <span class="content_check">トイレタリー・日用品</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="化粧品・健康食品" />
                                        <span class="content_check">化粧品・健康食品</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="アパレル・ブランド" />
                                        <span class="content_check">アパレル・ブランド</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他消費財" />
                                        <span class="content_check">その他消費財</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="流通・小売・販売" />
                                        <span class="content_check">流通・小売・販売</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	商社系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="総合商社" />
                                        <span class="content_check">総合商社</span></label></li>
                                        <li class="w50"><label><input name="checkbox1" type="radio" class="check_box_business" value="専門商社" />
                                        <span class="content_check">専門商社</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                              <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	その他
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox1" type="radio" class="check_box_business" value="運輸・物流" />
                                        <span class="content_check">運輸・物流</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他メーカー" />
                                        <span class="content_check">その他メーカー</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他サービス" />
                                        <span class="content_check">その他サービス</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="特殊法人" />
                                        <span class="content_check">特殊法人</span></label></li>
                                        <li><label><input name="checkbox1" type="radio" class="check_box_business" value="その他" />
                                        <span class="content_check">その他</span></label></li>
                                     </ul>
                                </div>
                            </div>
                            <!--End-->
                        
                        </div>
                        
                        
                        
                       
                        
                        
                        <div class="tbl_popup_entry clear"><a href="javascript:void(0);" id="tbl_a_tag_business">button</a></div>
                    </div>
            	</div>
            </div>
        
        
        
        
        
        
        
            
               
            <div id="errorselect6" style="line-height:28px;"></div>
        </div>

    </td>
</tr>
<tr>
    <td class="label">
        <div>勤務期間</div>
    </td>
    <td>
        <div class="td-content td-content-bottom clear">
            <div>西暦</div>
            <div>
                <select class="selection selection-style" name="select7" id="select7" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select8" id="select8" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月 ～</div>
            <div>
                <select class="selection selection-style" name="select9" id="select9" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select10" id="select10" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月</div>
        </div>

        <div class="td-content td-content-2 clear">
            <div><label><input type="radio" name="radio1" value="現職中" id="radio1" checked/> 現職中</label></div>
            <div><label><input type="radio" name="radio1" value="退職予定" id="radio2"/> 退職予定</label></div>
            <div><label><input type="radio" name="radio1" value="離職中" id="radio3"/> 離職中</label></div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職種<span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" >
            <div class="job_select_option">
            <a id="checkbox_job_entry"  href="javascript:void(0);" onclick="show_layer_select_job('790');">select option</a><span class="txt_option_select"></span>
           		 <input type="hidden" class="bg_error_fx" name="select11" id="select11" value="" onfocus="click_text_error(this.id)"/>
            </div>
            
             <script type="text/javascript">
        		jQuery(document).ready(function ($) {	
					$('a#job_close_entry').click(function() {
						new_var = true;
							$("#overlay").hide();
							$(".pop_up_selecbox_job_entry").hide();
							$(".layer_select_job_bg").hide();
							$("#select11").focus();
						
					});
					$("a#checkbox_job_entry").click(function() {
						new_var = false;
							$("#overlay").css({ display: "block" });
							$(".pop_up_selecbox_job_entry").show();
							$(".layer_select_job_bg").show();
							$( ".pop_up_selecbox_job_entry" ).css({"opacity": 1, "display":"block"});
						});
				
					$(".tbl_popup_entry a#tbl_a_tag").on('click', function (){
							 var fields_checkbox1 = '';
							$(".check_box_job:radio").each(function () {
								if (this.checked) {
									fields_checkbox1 += $(this).val() + '  ';
									//fields_checkbox1 = $(".form_entry_popup .check_box_job:checked").val();
									//alert(fields_checkbox1);
								}
							});
							//alert(fields_checkbox1);
							$('#select11').val($.trim(fields_checkbox1));
							if((fields_checkbox1.length)>0){$('#errorselect11').hide();}
							$('.txt_option_select').text($.trim(fields_checkbox1));
							$("#overlay").hide();
							$(".pop_up_selecbox_job_entry").hide();
							$(".layer_select_job_bg").hide();
							$("#select11").focus();
							setTimeout(
							  function() 
							  {
								new_var = true;
							  }, 1000);
						})
				});
				
			</script>
            <div style="display: none;" class="layer_select_job_bg">
 			</div>
            <div class="pop_up_selecbox_job_entry layer_select_job_cc" style="display:none;">
            	<div class="pop_up_boder_entry clear">
                	<div class="clear">
                    	<div class="l">
                       		 <div class="clear">
                        		<h3 class="label-personal" style="padding-bottom:0px; float:left;"> 職種を選択</h3>
                        		<p class="hitsu_p" style="float:left; color:#FF0004;">&nbsp;&nbsp;※直近の職種を1つ選択してください</p>
                        	</div>
                        </div>
                        <div class="r"><a  id="job_close_entry"><img src="https://kandc.com/img/close.gif" /></a></div>
                    </div>
                    <div class="clear form_entry_popup">
                        <div class="clear job_entry_select">
                        	  <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	コンサルタント
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="コンサルタント" />
                                        <span class="content_check">コンサルタント</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="コンサルタント（IT）" />
                                        <span class="content_check">コンサルタント（IT）</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IT・ソフトウェア
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="ITハード系エンジニア" />
                                        <span class="content_check">ITハード系エンジニア</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="ソフトウェアエンジニア" />
                                        <span class="content_check">ソフトウェアエンジニア</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="WEB・モバイル関連" />
                                        <span class="content_check">WEB・モバイル関連</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="その他ソフトウェア関連" />
                                        <span class="content_check">その他ソフトウェア関連</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	機械・メカトロ
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="機械・メカトロニクスエンジニア" />
                                        <span class="content_check">機械・メカトロニクスエンジニア</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="電気・電子・半導体エンジニア" />
                                        <span class="content_check">電気・電子・半導体エンジニア</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	化学・バイオ・メディカル
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="化学系" />
                                        <span class="content_check">化学系</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="バイオ・メディカル系" />
                                        <span class="content_check">バイオ・メディカル系</span></label></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	企画系
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="経営企画・事業企画" />
                                        <span class="content_check">経営企画・事業企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="営業企画" />
                                        <span class="content_check">営業企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="業務企画" />
                                        <span class="content_check">業務企画</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="商品・サービス企画" />
                                        <span class="content_check">商品・サービス企画</span></label></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	IR・広報・マーケティング
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="IR" />
                                        <span class="content_check">IR</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="広報" />
                                        <span class="content_check">広報</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="マーケティング" />
                                        <span class="content_check">マーケティング</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                           <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	事務
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="総務" />
                                        <span class="content_check">総務</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="法務" />
                                        <span class="content_check">法務</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="人事" />
                                        <span class="content_check">人事</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="経理・財務・会計" />
                                        <span class="content_check">経理・財務・会計</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="秘書" />
                                        <span class="content_check">秘書</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="事務・庶務" />
                                        <span class="content_check">事務・庶務</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	営業・サービス・販売
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="営業" />
                                        <span class="content_check">営業</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="販売・サービス" />
                                        <span class="content_check">販売・サービス</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                            
                             <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	金融・不動産
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="金融関連職" />
                                        <span class="content_check">金融関連職</span></label></li>
                                        <li class="w50"><label><input name="checkbox2" type="radio" class="check_box_job" value="建設・建築・土木系" />
                                        <span class="content_check">建設・建築・土木系</span></label></li>
                                      </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                            <!--Group checkbox-->
                        	<div class="item business_entry1 clear">
                            	<div class="l wd_entry_title">
                                	その他
                                </div>
                                <div class="r wd_entry_content">
                                	<ul class="clear checkbox1_entry">
                                    	<li><label><input name="checkbox2" type="radio" class="check_box_job" value="インストラクター" />
                                        <span class="content_check">インストラクター</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="トップマネジメント" />
                                        <span class="content_check">トップマネジメント</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="ロジスティクス・購買関連" />
                                        <span class="content_check">ロジスティクス・購買関連</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="エスタブリッシュメント職" />
                                        <span class="content_check">エスタブリッシュメント職</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="クリエイティブ系" />
                                        <span class="content_check">クリエイティブ系</span></label></li>
                                        <li><label><input name="checkbox2" type="radio" class="check_box_job" value="デザイナー" />
                                        <span class="content_check">デザイナー</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End-->
                           
                        </div>
                        
                        <div class="tbl_popup_entry clear"><a href="javascript:void(0);" id="tbl_a_tag">button</a></div>
                    </div>
            	</div>
            </div>
            
            
                
                
           
            <div id="errorselect11" style="line-height:28px;"></div>
         </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>最終部課／職位・年収</div>
    </td>
    <td>
        <div class="td-content clear">
            <div><input style="width: 400px; margin-bottom: 10px" type="text" name="text16" id="text16" value="" onfocus="click_text(this.id)"/></div>
            <div><input style="width: 100px; margin-bottom: 10px" type="text" name="text17" id="text17" value="" onfocus="click_text(this.id)"/></div>
            <div>万円</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職務内容 <span class="red-color">※</span></div>
    </td>
    <td>
        <div class="td-content clear" style="position:relative;">
        <div  id = "desctext18"class="desc_hidden "><span>職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください</span></div>
            <div>
            <textarea style="width:580px; height:120px; margin-bottom: 10px" class="bg_error_fx" type="text" name="text18" id="text18" value="" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" ></textarea>
            <p id="errortext18" class="error_box18"></p>
            </div>
            
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>その他職歴</div>
    </td>
    <td>
        <div class="td-content clear">
        
       
            <div><textarea style="width:580px; height:120px; margin-bottom: 10px" type="text" name="text19" id="text19"  onfocus="click_text(this.id)"></textarea></div>
            
        </div>
    </td>
</tr>
</table>
</div>
</div>

<!--------------------------------------------------------------->
<div id="personal_block4" class="form-personal-profile">
    <div class="label-personal">ご希望について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input style="width: 500px;" type="text" name="text20" id="text20" value=""  onfocus="click_text(this.id)"/></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div id="personal_block5" class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td valign="middle" class="label colpan_set" rowspan="1">
                    <div>媒体</div>
                </td>
                <td>
                
                <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						
							$('#select12').change(function(){
								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
									
									$('.select_show1').hide(); 
								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
										$('.exchange_select').hide();
										 
								 }
							});
					
					
					});
				</script>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 300px" name="select12" id="select12" onfocus="click_text(this.id)">
                                <option value="">下記から選択してください</option>
                                <option value="弊社コンサルタント専門サイト">弊社コンサルタント専門サイト</option>
                                <option value="Google">Google</option>
                                <option value="Yahoo">Yahoo</option>
                                <option value="その他検索エンジン">その他検索エンジン</option>
                                <option value="en転職コンサルタント">en転職コンサルタント</option>
                                <option value="日経キャリアNET">日経キャリアNET</option>
                                <option value="リクナビNEXT">リクナビNEXT</option>
                                <option value="キャリアカバー">キャリアカバー</option>
                                <option value="ビズリーチ">ビズリーチ</option>
                                <option value="その他WEBサイト">その他WEBサイト</option>
                                <option value="駅広告">駅広告</option>
                                <option value="メルマガ（面接官の本音）">メルマガ（面接官の本音）</option>
                                <option value="メルマガ（ヘッドハンターの目）">メルマガ（ヘッドハンターの目）</option>
                                <option value="メルマガ（キャリアアップコラム）">メルマガ（キャリアアップコラム）</option>
                                <option value="紹介（クライスにご登録している方より）">紹介（クライスにご登録している方より）</option>
                                <option value="紹介（クライスのご登録者以外より）">紹介（クライスのご登録者以外より）</option>
                                <option value="その他">その他</option>
                               
                            </select>
                        </div>
                    </div>
                    
                     <div class="td-content exchange_select clear">
                        <div class="clear select_show1" style="margin:5px 0;">
                        <div class="clear" style="float:none;">※具体的にお教えください。</div>
                        <div class="clear" style="float:none;">
                        <textarea style="width: 400px; margin-bottom: 10px" type="text" name="text21" id="text21" value="" onfocus="click_text(this.id)"></textarea></div></div>
                         <div class="select_show2 clear" style="margin:5px 0;">
                            <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                             <select class="selection" style="width: 300px" name="select13" id="select13" onfocus="click_text(this.id)">
                                            <option value="">下記から選択してください</option>
                                            <option value="岡田 麗">岡田 麗</option>
                                            <option value="奈良 元生">奈良 元生</option>
                                            <option value="半藤 剛">半藤 剛</option>
                                            <option value="松尾 匡起">松尾 匡起</option>
                                            <option value="入江 祥之">入江 祥之</option>
                                            <option value="武田 直人">武田 直人</option>
                                            <option value="永田 憲章">永田 憲章</option>
                                            <option value="細野 聡">細野 聡</option>
                                            <option value="堂谷 春菜">堂谷 春菜</option>
                                            <option value="工藤 直亮">工藤 直亮</option>
                                            <option value="船橋 悠">船橋 悠</option>
                                            <option value="福田 和貴">福田 和貴</option>
                                            <option value="神田 昭子">神田 昭子</option>
                                            <option value="小田 麻耶">小田 麻耶</option>
                                            <option value="神宮司 篤子">神宮司 篤子</option>
                                            <option value="棚澤 啓介">棚澤 啓介</option>
                                            <option value="丸山 貴宏">丸山 貴宏</option>
                             </select>
                            </div>
                        </div>
                    </div>
                    
                </td>
               </tr>
                
                   
                
           
        </table>
    </div>
</div>

<!--------------------------------------->
<div id="personal_block6" class="form-personal-profile">
    <div class="form-privacy">
        <div class="privacy-title">【個人情報保護方針】</div>
        <div class="privacy-content">
            <p>
                わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
                お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。<br /><br />

                1．個人情報の取得、利用及び提供について<br />
                人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。<br />

                2．個人情報に関する法令や指針、規範について<br />
                個人情報に関する法令・国が定める指針その他の規範を守ります。<br /><br />

                3．個人情報の安全管理について<br />
                個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。<br /><br />

                4．個人情報に関する苦情及び相談について<br />
                個人情報に関する苦情及び相談には、速やかに対処します。<br /><br />

                5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について<br />
                個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。<br /><br />

                制定日　2005年3月1日<br />
                改訂日　2008年9月1日<br />
                株式会社クライス＆カンパニー<br />
                代表取締役社長丸山貴宏<br /><br />


                【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】<br />

                株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br /><br />

                1．（定義）<br />
                本規約において使用される各用語の定義は、以下に定めるとおりとします。<br /><br />

                （1）候補者<br />
                クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。<br /><br />

                （2）ご紹介企業<br />
                クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。<br /><br />

                （3）転職支援サービス<br />
                候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。<br /><br />

                （4）クライスの転職支援サイト<br />
                クライスが管理・運営している以下のウェブサイトをいいます。<br />
                http://www.kandc.com<br /><br />

                （5）候補者情報<br />
                候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。<br /><br />

                2．（申し込み方法）<br />
                転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。<br /><br />

                3．（サービスの提供）<br />
                クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）<br /><br />

                （1）電話や面談による転職相談の実施<br />
                （2）担当コンサルタントによる転職活動支援<br />
                （3）Position Information（求人票）を補足する求人情報の提供<br />
                （4）応募手続きの代行<br />
                （5）その他利用者の転職に有益とクライスが判断する一切のサービス<br />

                4．（転職支援サービスの変更・中断・終了）<br />
                クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。<br /><br />

                5．（転職支援サービス提供の終了事由）<br />
                クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。<br /><br />

                a.候補者が本規約に定める各事項に違反した場合<br />
                b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合<br />
                <br />
                6．（個人情報の取り扱い）<br />
                クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。<br /><br />

                7．（候補者情報の正確性）<br />
                候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。<br /><br />

                8．（求人照合）<br />
                クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。<br /><br />

                9．（労働条件）<br />
                クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、　候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。<br /><br />

                10．（禁止事項）<br />
                候補者は、以下の行為をしてはならないものとします。<br /><br />

                a.虚偽の情報をクライスに提供する行為<br />
                b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為<br />
                c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者<br />
                （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為<br />
                d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為<br />
                e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為<br />
                f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為<br />

                11．（情報の加工）<br />
                クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。<br /><br />

                12．（免責）<br />
                クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。<br /><br />

                13．（不可抗力）<br />
                天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。<br /><br />

                14．（損害賠償責任）<br />
                候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。<br />
                15．（本規約の変更）<br />
                クライスは、必要に応じて本規約の内容を変更することができるものとします。<br />
                クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。<br />

                16．（定めのない事項）<br />
                本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。<br />
                17．（管轄裁判所）<br />
                万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。<br /><br />

                制定日　2009年5月12日<br />
                株式会社クライス＆カンパニー<br /><br />


                【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】<br /><br />

                1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的<br />
                当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。<br /><br />

                2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて<br />
                （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。<br /><br />

                （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。<br />

                （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。<br />

                （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。<br />

                （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。<br /><br />

                3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供<br />
                当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。<br />

                4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託<br />
                当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。<br /><br />

                5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について<br />
                エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。<br /><br />

                6．掲載の求人、企業情報について<br />
                当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。<br /><br />

                改訂日　2011年3月9日<br />
                株式会社クライス＆カンパニー<br />

                【個人情報の開示・問合せ等の連絡方法・連絡先】<br />

                ◆連絡方法<br />
                ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。<br /><br />

                ◆連絡先<br />
                株式会社クライス＆カンパニー<br />
                人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）<br />
                東京都港区東新橋2-4-1 サンマリーノ汐留2F<br />
                TEL：03-5733-1602　　Email：privacy@kandc.com</p><br />
        </div>
    </div>

</div>


<div class="form-personal-profile" id="checkbox_require" style="text-align:center;">
	<label style="position:relative;"><input type="checkbox"  name="check_box" id="check_box"/>個人情報の取り扱いに同意します。</label>
	<p id="errortext19"></p>
</div>


<!--------------------------------------->
<div class="form-entry-submit clear">
   
    <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
    <!--    <div class="form-handler"><a href="#" title="Submit next Step 2"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>

</div>  <!--#form-area-small-->
                
            
                  <p class="footer-text">※ご経験、ご希望によってはサポートの難しい場合もございますのでご了承ください</p>
           </div>
        </div> <!--#container-->
    </div> <!--#form-area (big)--> 
    
<footer id="footer_inc" class="clear">
	<div class="container clear">
   	<p class="copy_right">COPYRIGHT &copy; KREIS & COMPANY ALL RIGHTS RESERVED webdesign <a href="http://www.tokyodesignroom.com/" target="_blank">tokyodesignroom.com</a></p>
    </div>
   </footer>
</div> <!--#page-->
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$("img.lazy-load").lazyload({
			effect : "fadeIn"
		});
	
		var options = {
			type: "delay",
			time: 1000,
			scripts: [
			"https://connect.facebook.net/en_US/all.js#xfbml=1",
			//"https://platform.twitter.com/widgets.js",
			"https://apis.google.com/js/plusone.js"
			
			],
			success: function () {
				FB.init({ appId: '1447535468844215', status: true, cookie: true, xfbml: true });
			}
		};
		$.lazyscript(options);
	 
	});
	
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->
</body>
</html>