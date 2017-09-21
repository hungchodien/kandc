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
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta name="keywords" content="ヘッドハンティング,人材紹介,転職エージェント,キャリアコンサルティング,クライス&カンパニー,30代,ヘッドハンター" />
<meta name="description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「理想の求人情報がみつからない」「自分では気づかない可能性が知りたい」「キャリア構築の頼れるパートナーが欲しい」方はぜひエントリーください。" />


<meta PROPERTY="og:title" content="30代の転職ならクライス＆カンパニー（ヘッドハンターに相談してみませんか？）" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="http://www.kandc.com/landing/headhunter-a/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、30代の転職サポートを得意しています。「理想の求人情報がみつからない」「自分では気づかない可能性が知りたい」「キャリア構築の頼れるパートナーが欲しい」方はぜひエントリーください。" />
<meta PROPERTY="og:image" content="http://www.kandc.com/landing/headhunter-a/img/facebook-og-image.png" />
<meta PROPERTY="og:site_name" content="30代の転職ならクライス＆カンパニー（ヘッドハンターに相談してみませんか？）" />


<title>30代の転職ならクライス＆カンパニー（ヘッドハンターに相談してみませんか？）</title>
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
    
    
    
    
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
			
			$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
			});
			$("#text2").on("keypress keyup keydown",function (event) {   
					setRuby('text2','text4');
					//alert("ok");
			});
			
            
			
			$(".next_step").css("display", "none");
			
			
			
			$("#next_step").on("click", function(){
				
				
		if($('#text1').val() == '' || $('#text2').val() == '' || $('#text3').val() == '' || $('#text4').val() == '' ||  $('#select1 option:selected').val() == '' || $('#select2 option:selected').val() == '' || $('#select3 option:selected').val() == '' || $('#select4 option:selected').val() == '' || $('#text5').val() == '' || $('#text6').val() == '' || $('#text7').val() == '' || $('#text8').val() == '' || $('#file1').val() == '')
				{
					new_var = false;
					$("#submit_form").submit();
				}
				else
				{
				new_var = false;
				$(".next_step").css("display", "block");
			    $(".step_hiden").css("display", "none");
				$('body,html').animate({
                        scrollTop: $(".entry_easy_frm").offset().top
                    }, 600);
                    return false;
				
				}
					


					// $("#submit_form").submit();
				
				});	
			$("#back_step_go").on("click", function(){
					
					$(".step_hiden").css("display", "block");
					$(".next_step").css("display", "none");
					// $("#submit_form").submit();
				
				})	
				
				
			$("#back-top").hide();
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
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
				
				
				
				
			
        });
		
		
		
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
            	<div class="main_title clear"><img src="img/main-title.png" alt="ヘッドハンターに相談してみませんか？"/></div>
              	<div class="main_check clear">
                
                   <img src="img/main-check1.png" alt="理想の求人情報がみつからない" />
                    <img src="img/main-check2.png" alt="自分では気づかない可能性が知りたい" />
                    <img src="img/main-check3.png" alt="キャリア構築の頼れるパートナーが欲しい" />
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
    	        <li class="img_feature"><a id="feat-02" href="#"><img src="img/features-button-2.png" alt="特長02 経験10年以上
ベテランのヘッドハンターが専任でサポート" /></a></li>
        	    <li class="img_feature"><a id="feat-03" href="#"><img src="img/features-button-3.png" alt="特長03 マネージャークラス以上のエクスクルーシブ案件が豊富" /></a></li>
	        </ul>
       	</div>
	</div> <!--#container_features-->
    <div class="container">
    	<p class="consultant-title"><img src="img/consultant-title.png" alt="私たちは、30代の転職を成功に導きます。経験10年以上、業界に精通したコンサルタント（ヘッドハンター）がサポートします。" /></p>
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
            <div class="feat-02-title"><img src="img/features02-title.png" alt="経験10年以上ベテランのヘッドハンターが専任でサポート"/></div>
            <div class="feat-title-arrow"><img class="" src="img/features-title-arrow.png" alt="" /></div>
       </div>
       <div class="container">
			<div class="feat-main-content">       		
                <div class="text-center"><img src="img/features02-h2-title.png" alt="「GCDF資格の取得」「C＆R方式」を実践している経験豊富なヘッドハンターが専任でサポートします。"/></div>
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
        	<img src="img/entry-title.png" alt="今すぐ転職をお考えの方も、将来的な転職を視野に入れている方もなたの専属ヘッドハンターに相談してみませんか？＜完全無料＞" />
        </div>
        <div class="text-center">
        	<img src="img/entry-title-arrow.png" alt="" title="" />
        </div>
        
        <div class="container clear">
            <div class="voice-main-content clear entry_easy_frm">
 <!--myform-->  <div class="form"> <!--small-->
      <form name="frm_entry_easy" action="confirm.php" method="post" id="submit_form"  enctype="multipart/form-data"  encoding="multipart/form-data">
      <div class="group_entry_easy_form step_hiden clear">
                    	<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="6%" rowspan="2"><div style="vertical-align:middle;width:50px;">
      <div >お名前</div>
    </div></td>
    <td width="12%" class="top-name">漢字<span class="red-color">（必須）</span></td>
    <td>
   <div class="group_t1 clear ">
   		
    	<div class="wrap_name  l">
        	<div class="clear txt_group_1">
        		<div class="l txt_1" >  姓 &nbsp;</div>
            	<div class="txt_name_input l"><input type="text" name="text1" id="text1" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" /></div>
            </div>
            <p class="clear"><span id="errortext1"></span></p>
       </div>
       
       <div class="wrap_name wrap_name_end l"> 
       	   <div class="clear txt_group_1">
        	<div class="l txt_1"> 名 &nbsp;</div> 
        	<div class="txt_name_input l"><input type="text" name="text2" id="text2" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/></div><div class="note_txt_input_1 l">※全角入力</div>
        	</div>
             <p class="clear"><span id="errortext2"></span></p>
        </div>
        
  </div> <!--Wrap_name_1-->
  		 </td>
    </tr>
  <tr>
    <td>カナ<span class="red-color">（必須）</span></td>
    <td>
    <div class="clear group_t2">
        <div class="wrap_name l">
        	<div class="clear">
                <div class="l txt_1">セイ </div> 
                <div class="txt_name_input l"> <input type="text" name="text3" id="text3" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/></div>
            </div>
            <p class="clear"><span id="errortext3"></span></p> 
        </div>
   
                                                
        <div class="wrap_name wrap_name_end l">
        	<div class="clear">
                <div class="l txt_1">メイ </div>
                <div class="txt_name_input l"><input type="text" name="text4" id="text4" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/></div><div class="note_txt_input_1 l">※全角カナ入力</div>
                
            </div>
            <p class="clear"><span id="errortext4"></span></p>
            
        </div>
    </div>
    
    
    
                                                 
                                                 
                                                 </td>
    </tr>
  <tr>
    <td colspan="2"> <div>生年月日 <span class="red-color">(必須）</span></div></td>
    <td colspan="2">
    	 <div class="td-content birthday-select clear">
                                               
                                               
                                              <div class="l">    <div class=""> 西暦 </div> <div class="l"><select class="selection selection-style" name="select1" id="select1" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                                        <option value=""> 選択</option>
                                                        <?php $year = 1940;
                                                             $end = date("Y");
                                                        for ($end; $end >= $year; $end--) {
                                                            ?>
                                                            <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                                        <?php } ?>
                                                    </select> </div>
                                                   <p style="padding-top:20px;text-align:center;"><span id="errorselect1"></span></p></div>
                                                 <div> <div class="">  年 </div><div class="l"> <select class="selection selection-style" name="select2" id="select2" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                                        <option value=""> 選択</option>
                                                        <?php $moth = 1;
                                                        $endMoth = 12;
                                                        for ($moth; $moth <= $endMoth; $moth++) {
                                                            ?>
                                                            <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                                        <?php } ?>
                                                    </select> </div>
                                                    <p style="padding-top:20px;text-align:center;"><span id="errorselect2"></span></p> </div>
                                                    
                                                 <div>  <div class="">   月 </div><div class="l"> <select class="selection selection-style" name="select3" id="select3" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                                        <option value=""> 選択</option>
                                                        <?php $day = 1;
                                                        $endDay = 31;
                                                        for ($day; $day <= $endDay; $day++) {
                                                            ?>
                                                            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                                        <?php } ?>
                                                    </select></div><div> 日 </div>
                                                   <p style="padding-top:20px;text-align:center;"><span id="errorselect3"></span></p> </div>
                                          
                                            
                                               
                                            </div>
    </td>
  </tr>
  <tr>
    <td colspan="2"> <div>都道府県<span class="red-color">(必須）</span></div></td>
    <td colspan="2">
    	<div class="td-content state clear" style="padding:5px 0;">
                                               
                                                    <select class="selection" name="select4" id="select4" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
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
                                                
                                                <p><span id="errorselect4"></span></p>
                                            </div>
    </td>
  </tr>
  <tr>
    <td colspan="2"> 
    	<div>電話番号 <span class="normal">※半角入力</span><span class="red-color">(必須）</span></div>
    </td>
    <td colspan="2">
    	<div class="td-content phone clear">
                                              
                                    <div class="txt_phone"> <input type="text" name="text5" id="text5" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)"/>
                                    	<p><span id="errortext5"></span></p>
                                    </div>
                                     <div> - </div>
                                    <div>  <input type="text" name="text6" id="text6" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                    	<p><span id="errortext6"></span></p>
                                    </div>
                                     <div>  -  </div>
                                     <div>  <input type="text" name="text7" id="text7" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                                  <p><span id="errortext7"></span></p>   
                                       </div>  
                                     <div><p>※半角入力</p> </div>     
                                              
                                              
                                               
        </div>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div>メールアドレス<span class="red-color">(必須）</span></div></td>
    <td colspan="2">
    	<div class="td-content email-td clear" >
                                                <div class="email-input-1 clear">
                                                    <input class="text-personal-400" type="text" name="text8" id="text8" onfocus="click_text(this.id)"
                                                            value="" onblur="IsEmail(this.value, this.id)"/>	
                                                 
                                                </div>
                                               
                                               <div class="clear"><p style=""><span id="errortext8"></span></p></div>
                        
                                                <?php /*?><div class="email-input-2 clear">
                                                    <input class="text-personal-400" type="text" name="text9" id="text9" value="" onfocus="click_text(this.id)"
                                                            onblur="confirm_Email(document.forms['submit_form']['text8'].value, this.value, this.id)"/> &nbsp;※確認用	
                                                
                                                </div>
                                                <div class="clear">  <p id="errortext9"></p></div><?php */?>
                        
                                               
       </div>
 	</td>
  </tr>
  <tr>
    <td colspan="4" class="empty-row" height="">&nbsp;</td>
    </tr>
  <tr>
    <td height="20" colspan="2">
    	
        	<p style="">経歴書を添付<span class="red-color">(必須）</span></p>     </td>
    <td colspan="2" class="clear">
  <div class="upload_area clear">  
    <div class="upload group_upload_input">
    	 <div class="upload_file_input_1 clear"><input class="text-file-400" type="file" name="upload1" id="file1" value="" onfocus="click_text(this.id)"
                                                          onchange="validate_fileupload(this.value, this.id)"/></div>
         <div><span id="errorfile1"></span></div>
         
         
          <div class="upload_file_input_2 clear"><input class="text-file-400" type="file" name="upload2" id="file2" value="" onfocus="click_text(this.id)"
                                                            onchange="validate_fileupload(this.value, this.id)"/></div>
          <div><span id="errorfile2"></span></div>
      </div>  <!--#upload_group-->
          <div class="text_upload_note">
              <p style="">※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種<br />
                                                ※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。<br />
                            その際には、お手数ですが右記メールアドレスまで 直接お送りください。<a href="mailto:kreis-info@kandc.com" target="_blank">kreis-info@kandc.com</a></p>
          </div> <!--#text_upload_note-->
  </div> <!--upload_area-->  
    </td>
  </tr>
  <tr>
    <td colspan="4" class="empty-row">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4" class="text-area">
    	<div class="form_privacy clear">
<div class="privacy_title clear">【個人情報保護方針】</div>
<div class="privacy_content">
    わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。
    お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。
    
    1．個人情報の取得、利用及び提供について
    人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。
    2．個人情報に関する法令や指針、規範について
    個人情報に関する法令・国が定める指針その他の規範を守ります。
    
    3．個人情報の安全管理について
    個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。
    
    4．個人情報に関する苦情及び相談について
    個人情報に関する苦情及び相談には、速やかに対処します。
    
    5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について
    個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。
    
    制定日　2005年3月1日
    改訂日　2008年9月1日
    株式会社クライス＆カンパニー
    代表取締役社長丸山貴宏
    
    【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】
    株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。
    
    1．（定義）
    本規約において使用される各用語の定義は、以下に定めるとおりとします。
    
    （1）候補者
    クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。
    
    （2）ご紹介企業
    クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。
    
    （3）転職支援サービス
    候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。
    
    （4）クライスの転職支援サイト
    クライスが管理・運営している以下のウェブサイトをいいます。
    http://www.kandc.com
    
    （5）候補者情報
    候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。
    
    2．（申し込み方法）
    転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。
    
    3．（サービスの提供）
    クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）
    
    （1）電話や面談による転職相談の実施
    （2）担当コンサルタントによる転職活動支援
    （3）Position Information（求人票）を補足する求人情報の提供
    （4）応募手続きの代行
    （5）その他利用者の転職に有益とクライスが判断する一切のサービス
    4．（転職支援サービスの変更・中断・終了）
    クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。
    
    5．（転職支援サービス提供の終了事由）
    クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。
    
    a.候補者が本規約に定める各事項に違反した場合
    b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合
    
    6．（個人情報の取り扱い）
    クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。
    
    7．（候補者情報の正確性）
    候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。
    
    8．（求人照合）
    クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。
    
    9．（労働条件）
    クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、　候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。
    
    10．（禁止事項）
    候補者は、以下の行為をしてはならないものとします。
    
    a.虚偽の情報をクライスに提供する行為
    b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為
    c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者
    （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為
    d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為
    e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為
    f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為
    11．（情報の加工）
    クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。
    
    12．（免責）
    クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。
    
    13．（不可抗力）
    天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。
    
    14．（損害賠償責任）
    候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。
    15．（本規約の変更）
    クライスは、必要に応じて本規約の内容を変更することができるものとします。
    クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。
    16．（定めのない事項）
    本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。
    17．（管轄裁判所）
    万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。
    
    制定日　2009年5月12日
    株式会社クライス＆カンパニー
    
    【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】
    
    1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的
    当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。
    
    2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて
    （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。
    
    （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。
    （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。
    （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。
    （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。
    
    3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供
    当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。
    4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託
    当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。
    
    5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について
    エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。
    
    6．掲載の求人、企業情報について
    当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。
    
    改訂日　2011年3月9日
    株式会社クライス＆カンパニー
    【個人情報の開示・問合せ等の連絡方法・連絡先】
    ◆連絡方法
    ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。
    
    ◆連絡先
    株式会社クライス＆カンパニー
    人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）
    東京都港区東新橋2-4-1 サンマリーノ汐留2F
    TEL：03-5733-1602　　Email：privacy@kandc.com
	</div> <!--#privacy_content-->
</div> <!--#text_area-->
    </td>
    </tr>
</table>
</div>

    <div class="form-personal-submit step_hiden pdt10 clear">
        <!--    <div class="form-back"><a href="#"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
        <input type="submit" value="1" id="submit_confirm" name="submit_confirm" class="button-confirm_btn">
        <input type="button" value="Next Step" id="next_step" name="submit_next_step" class="button-confirm-next-step">
        <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
        <!--    </div>-->
    </div>
	
    
    <div class="group_entry_easy_form clear">
    
    	
    	
        <div class="next_step clear">
            <div class="table-personal-profile">
                    <table width="100%">
                        <tbody>
                        <tr>
                        <td valign="middle" class="label colpan_set" rowspan="1" width="30%">
                            <div class="title_step_2">何をご覧になって
        <br>
        アクセス頂きましたか？</div>
                        </td>
                        <td>
                        
                        <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                                $('.select_show1').hide(); 
                                $('.select_show2').hide();
                                $('.exchange_select').hide();
                                
                                    $('#select6').change(function(){
                                        $("#text14").val("");
                                        $("#select7").val("");
                                        
                                        if($('#select6').val() == 'その他') {
                                            $('.select_show1').show();
                                            $('.exchange_select').show();
                                            
                                            $('.select_show2').hide();
                                        }else if($('#select6').val() == '紹介（クライスにご登録している方より）' || $('#select6').val() == '紹介（クライスのご登録者以外より）') 
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
                                <div class="clear input_step_2">
                                    <select class="selection" style="width: 250px" name="select6" id="select6" onfocus="click_text(this.id)">
                                        <option value="">下記から選択してください</option>
                                        <option value="弊社コンサルタント専門サイト">弊社コンサルタント専門サイト</option>
                                        <option value="Google">Google</option>
                                        <option value="Yahoo">Yahoo</option>
                                        <option value="その他検索エンジン">その他検索エンジン</option>
                                        <option value="en転職コンサルタント">en転職コンサルタント</option>
                                        <option value="日経キャリアNET">日経キャリアNET</option>
                                        <option value="リクナビNEXT">リクナビNEXT</option>
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
                                <div class="clear no_marg" style="float:none;">
                                <textarea style="width: 400px; " type="text" name="text14" id="text14" onfocus="click_text(this.id)" value=""></textarea></div></div>
                                 <div class="select_show2 clear" style="margin:5px 0;">
                                    <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                                    <div class="clear">
                                     <select class="selection" style="width: 300px" name="select7" id="select7">
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
                                                    <option value="棚澤 啓介">棚澤 啓介</option>
                                                    <option value="丸山 貴宏">丸山 貴宏</option>
                                     </select>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                       </tr>
                       <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2">学校名</div>
                            </td>
                            <td>
                                <div class="td-content clear">
                                    <div class="clear input_step_2"><input type="text" value="" id="text10" name="text10" style="width: 250px;"></div>
                                   
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2"> 現職区分</div>
                            </td>
                            <td>
                                <div class="td-content clear ">
                                	<div class="input_step_2 clear">
                                        <div class="no_marg pad_r10"><input type="radio" value="現職中" id="radio1" name="radio1"> <label for="radio1">現職中</label></div>
                                        <div class="no_marg pad_r10"><input type="radio" value="退職予定" id="radio2" name="radio1"><label for="radio2">退職予定</label></div>
                                        <div class="no_marg pad_r10"><input type="radio" value="離職中" id="radio3" name="radio1"><label for="radio3">離職中</label></div>
                                    </div>
                                </div>
                               
                            </td>
                        </tr>
                        <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2">現在の年収</div>
                            </td>
                            <td>
                                <div class="td-content clear ">
	                               <div class="input_step_2 clear"> 	
                                        <div class="no_marg"><input type="text" value="" id="text11" name="text11" class="text-personal-100"></div>
                                        <div class="no_marg" style="padding:0 0 0 5px;">万円</div>
                                   </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2">職種</div>
                            </td>
                            <td>
                                <div class="td-content clear">
                                    <div class="clear input_step_2">
                                        <select id="select5" name="select5" style="width: 250px" class="selection">
                                            <option value="">下記から選択してください</option>
                                            <option value="コンサルタント">コンサルタント</option>
                                            <option value="コンサルタント（IT）">コンサルタント（IT）</option>
                                            <option value="ITハード系エンジニア">ITハード系エンジニア</option>
                                            <option value="ソフトウェアエンジニア">ソフトウェアエンジニア</option>
                                            <option value="WEB・モバイル関連">WEB・モバイル関連</option>
                                            <option value="その他ソフトウェア関連">その他ソフトウェア関連</option>
                                            <option value="機械・メカトロニクスエンジニア">機械・メカトロニクスエンジニア</option>
                                            <option value="電気・電子・半導体エンジニア">電気・電子・半導体エンジニア</option>
                                            <option value="化学系">化学系</option>
                                            <option value="バイオ・メディカル系">バイオ・メディカル系</option>
                                            <option value="経営企画・事業企画">経営企画・事業企画</option>
                                            <option value="営業企画">営業企画</option>
                                            <option value="業務企画">業務企画</option>
                                            <option value="商品・サービス企画">商品・サービス企画</option>
                                            <option value="IR">IR</option>
                                            <option value="広報">広報</option>
                                            <option value="マーケティング">マーケティング</option>
                                            <option value="総務">総務</option>
                                            <option value="法務">法務</option>
                                            <option value="人事">人事</option>
                                            <option value="経理・財務・会計">経理・財務・会計</option>
                                            <option value="秘書">秘書</option>
                                            <option value="事務・庶務">事務・庶務</option>
                                            <option value="営業">営業</option>
                                            <option value="販売・サービス">販売・サービス</option>
                                            <option value="金融関連職">金融関連職</option>
                                            <option value="建設・建築・土木系">建設・建築・土木系</option>
                                            <option value="インストラクター">インストラクター</option>
                                            <option value="トップマネジメント">トップマネジメント</option>
                                            <option value="ロジスティクス・購買関連">ロジスティクス・購買関連</option>
                                            <option value="エスタブリッシュメント職">エスタブリッシュメント職</option>
                                            <option value="クリエイティブ系">クリエイティブ系</option>
                                            <option value="デザイナー">デザイナー</option>
                                            <option value="コールセンター">コールセンター</option>
                                            <option value="その他">その他</option>
                                        </select>
                                    </div>
                                   
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2">経験社数</div>
                            </td>
                            <td>
                                <div class="td-content clear">
                                    <div class="clear input_step_2">
                                        <div class="no_marg">
                                        <input type="text" value="" id="text12" name="text12" class="text-personal-100">
                                        </div>
                                   		<div class="no_marg" style="padding:0 0 0 5px;">社</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" width="30%">
                                <div class="title_step_2">希望勤務地</div>
                            </td>
                            <td>
                                <div class="td-content clear">
                                    <div class="clear input_step_2">
                                        <input type="text" value="" id="text13" name="text13" class="text-personal-400">
                                    </div>
                                    
                                </div>
                            </td>
                        </tr>
                        </tbody></table>
                 
                </div>
            </div>
           
           <div class="form-personal-submit next_step form2_btns clear" style="display: block;">
                <!--    <div class="form-back"><a href="#"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
                
                 <input type="submit" value="Submit" id="submit_confirm" name="submit" class="button-confirm_btn_next_s2">
                  <input type="button" value="Go back" id="back_step_go" name="submit_back" class="button-back_step">
               
                <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
                <!--    </div>-->
            </div>     
    </div>
    
    
    
    
    
    
  </form>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2905089-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- リマーケティング タグの Google コード -->
<!--------------------------------------------------
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
--------------------------------------------------->
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
</body>
</html>