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


<meta PROPERTY="og:title" content="東大・早大・慶大卒のあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />
<meta PROPERTY="og:type" content="website" /> 
<meta PROPERTY="og:url" content="https://kandc.com/mobile/landing/career-news/" /> 
<meta PROPERTY="og:description" content="クライス&カンパニーは、経営者・経営幹部を目指す方を専任キャリアコンサルタントがバックアップする人材紹介会社です。専属キャリアパートナーとお話をしたい方はぜひエントリーください。" />
<meta PROPERTY="og:image" content="<?php echo url_root_headhunter; ?>img/main-img.png" />
<meta PROPERTY="og:site_name" content="東大・早大・慶大卒のあなたへ　ヘッドハンティング・人材紹介・転職支援ならクライス＆カンパニー" />


<title>ヘッドハンターが教える本当のキャリアアップのチャンスとは？</title>
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

</head>

<body>
<div class="inside">
<header class="site_header">
		<div class="logo">
    		<a href="<?php echo url_root_headhunter; ?>">
        	<img alt="株式会社クライス＆カンパニー" src="<?php echo url_root_headhunter; ?>img/logo.png" />
            </a>
           </div>
<div class="main_img">
<img alt="キャリアコンサルタント 岡田麗" src="<?php echo url_root_headhunter; ?>img/main-img-v2.png" />
<h1 class="site_title"><img alt="ヘッドハンターだけが知っている今、目の前にあるキャリアアップのチャンスとは？" src="<?php echo url_root_headhunter; ?>img/main-title-v2.png" /></h1>
</div>
</header>

<div class="wrapper bg_grau the_content">

<div class="content_block bg_white">
<h3 class="title">キャリアアップのチャンスには<br />いつ、どこで出会える？</h3>

<p>キャリアを真剣に考える優秀な方でしたら、<span class="point-text">キャリアアップのチャンスは絶対に逃したくない</span>とお考えかと思います。ただ、そのチャンスはいつでも、どこにでもあるわけではありません。<span class="point-text">成功する人は皆、貴重なキャリアアップのチャンスを上手につかみ取っているのです。</span><br /><br />

転職市場は引き続き活況で、各企業の求人ニーズも非常に高い状況が続いていますが、今こそまさに、<span class="point-text">チャンスをつかむ絶好の機会</span>だと言えます。単に求人が多いという意味ではありません。<span class="point-text">今しかない、今チャレンジすべき求人が増えているのです。</span><br />
では一体どうすればそのチャンスに出会えるのでしょうか．．．？<br /><br /></p>
<p><img alt="キャリアアップのチャンスにはいつ、どこで出会える？" src="<?php echo url_root_headhunter; ?>img/career_new1.png" /></p>
<p><span class="point-text">10年以上</span>に渡り、<span class="point-text">年収1000万～4000万クラスのエグゼクティブ</span>のキャリアアップ転職をサポートしてきたベテランヘッドハンターだけが知る、<span class="point-text">キャリアアップのチャンスと出会う方法</span>をお伝えします。
</p>




</div>

<div class="content_block bg_white">
<h3 class="title">今、これまでにない<br />重要ポジションの採用が増えている</h3>
<p>今、各企業では<span class="point-text">攻めに出る絶好のタイミング</span>と考え、多くの新規プロジェクトが立ち上がっています。海外進出、新規事業立上げ、業務改善、IT含めた設備投資、などなど。その中には<span class="point-text">今だからこそ立ち上がっているプロジェクト</span>も少なくありません。<br /><br />

このようなソリューションにいち早く取り組み実績を作ることにより、他社に先駆けてノウハウをため、収益の柱に育てることは<span class="point-text">非常に重要な経営課題</span>です。<br /><br />

これら新しいプロジェクトの立ち上げに伴い<span class="point-text">責任の大きなこれまでにない多様なポジションが生まれます。</span>このような今まで存在しなかった新しいポジションで役割を担える人材が増えることにより、組織は強くなるのです。<br /><br />

つまり、<span class="point-text">このチャンスに優秀な人材を獲得する事により企業は一回りも、二回りも成長し、より強い存在へと進化する事ができる</span>のです。もし思うように人材を増やすことができなければ、足元の業績だけでなく、未来の成長も危うくなります。未来への投資という意味でも、<span class="point-text">このタイミングで優秀な人材の獲得ができるかどうかは企業にとって死活問題</span>なのです。<br /><br />

一般的にこの様な重要なポジションの採用は、<span class="point-text">非公開でヘッドハンターに依頼するケースが多く、</span>今私たちの元には多くの採用依頼が集まっています。
</p>
</div>

<div class="content_block bg_white">
<h3 class="title">この時期に出てきたポジションこそ<br />キャリアアップの大きなチャンス</h3>
<p>一方で、これは企業側だけでなく、<span class="point-text">個人のキャリア側から考えても同様</span>です。<br /><br />

この時期しかない、この時期だからこそ出てきたポジションの多くは、<span class="point-text">ビジネスのトレンドから考えても、あなたの今後のキャリアを高めるうえでプラスに働く可能性が高い</span>と言えるでしょう。<br /><br />

この状況が永遠に続くことは絶対にあり得ません。必ず、市況が悪くなる時が来ます。その時に、<span class="point-text">市場環境に巻き込まれない強いビジネスパーソン</span>でいるためには、<span class="point-text">どのような武器を持ち、どのようなバリューを発揮できるか</span>が重要になってきます。
</p>
<p><img alt="この時期だから出てきたポジションこそキャリアアップの大きなチャンス" src="<?php echo url_root_headhunter; ?>img/career_new2.png"/></p>
<p><span class="point-text">まさにこのチャンスにどのような経験を積み、どのような役割を担い、どのようなスキル・専門性などを身に付けるかが、皆さんの今後のキャリアに大きな影響を与えることになるのです。</span></p>
</div>




<div class="content_block bg_white">
<h3 class="title">皆さん<br />“チャンス“を活かせていますか？</h3>
<p>現在のような市況ですので、目の前の業務・プロジェクトに追われ、<span class="point-text">なかなかじっくりとキャリアを考える余裕が無い方が多いのではないでしょうか？</span><br /><br />

けれど今だからこそ、俯瞰して自分のキャリアを考える事がとても重要です。皆さんには今何をすべきなのかを改めて考え、<span class="point-text">足元だけでなく将来を見据えて経験・キャリアを積んでいただきたい</span>と思います。<br /><br />

こんな時こそ、<span class="point-text">価値ある求人を見極めるプロの目が重要</span>です。<br /><br />

<span class="point-text">キャリアアップのチャンスを絶対に逃したくない、効率よくチャンスとなる求人に出会いたい</span>とお考えの方は<span class="point-text">ぜひ一度専属ヘッドハンターにご相談ください。</span>企業から極秘に依頼されている独占ルート求人情報の中から、<span class="point-text">あなたにとってチャンスとなる情報</span>を<span class="point-text">厳選してご提案します。</span>
<br /><br /><br />

皆さんが、現在<span class="point-text">“チャンス”</span>を活かしていらっしゃること、今後<span class="point-text">“チャンス”</span>を活かしてご活躍されることを願っております。
<br /><br /></p>
<p class="the_btn"><a href="<?php echo url_root_domain; ?>mobile/landing/30collegehunter/" target="_blank"><img alt="無料でヘッドハンターに相談してみる" src="<?php echo url_root_headhunter; ?>img/the_btn.png" title="" /></a></p>
</div>

</div>
 
    
<footer>
  <div class="wrapper">
 <div class="foot_logo clear">
 <a class="foot_logo_img" href="<?php echo url_root_domain; ?>"><img src="<?php echo url_root_domain; ?>img/footer/logo-kreis-company.png" alt="クライス＆カンパニー" /></a>
 <a class="foot_th_img" href="<?php echo url_root_domain; ?>"><img src="<?php echo url_root_domain; ?>img/footer/logo-kreis-company-24th.png" alt="" /></a>
 </div>
    <p id="copyR">Copyright&copy;KREIS&amp;Company All Rights Reserved.<br />webdesign <a href="http://tokyodesignroom.com" target="_blank">tokyodesignroom.com</a></p>
    
    </div>


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

</footer>
</div>
</body>
</html>
<?php 
	ob_flush();
?>