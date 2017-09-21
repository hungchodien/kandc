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
<h1 class="site_title"><img alt="ヘッドハンターが教える今しかないキャリアアップのチャンスとは？早慶東大卒のあなたへキャリアに精通したヘッドハンターのアドバイスを受けてみませんか？" src="<?php echo url_root_headhunter; ?>img/main-title.png" /></h1>
</div>
</header>

<div class="wrapper bg_grau the_content">

<div class="content_block bg_white">
<h3 class="title">キャリアアップのチャンスには<br />いつ、どこで出会える？</h3>
<p><img alt="キャリアアップのチャンスにはいつ、どこで出会える？" src="<?php echo url_root_headhunter; ?>img/career_new1.png" /></p>
<p>転職市場は引き続き活況で、各企業の求人ニーズも非常に高い状況が続いております。<br />
 <br />
キャリアを真剣に考える優秀な方でしたら、<strong>キャリアアップのチャンスは絶対に逃したくない</strong>とお考えかと思います。ただ、そのチャンスはいつでも、どこにでもあるわけではありません。成功する人は皆、貴重なキャリアアップのチャンスを上手につかみ取っているのです。<br /><br />
転職市場は引き続き活況で、各企業の求人ニーズも非常に高い状況が続いています。実はそんな時こそ、キャリアアップのチャンスは豊富にあるのです。単に求人が多いという意味ではなく、<strong>今しかない、今チャレンジすべき求人が増えているのです。</strong><br />
その理由とは．．．？
</p>




</div>

<div class="content_block bg_white">
<h3 class="title">転職市場活況の裏にある企業側の狙い</h3>
<p>現在、多くの企業が優秀な人材の獲得に必死になっています。<br /><br />

例えばコンサルティング業界やIT業界では、人が足りないためにプロジェクトを受けることができず、クライアント企業に対して受注を断るといった状態が続いている企業も少なくないようです。<br /><br />
“このままでは、ビジネスチャンスをみすみす逃してしまう！” という声が聞こえてきます。<br /><br />
ここで言うビジネスチャンスですが、目先の売上、収益といった意味ではもちろんですが、同時に企業の組織力を高める・成長するチャンス、つまり<strong>より強い企業へと変化を遂げるチャンス</strong>といった意味でもあります。
</p>
</div>

<div class="content_block bg_white">
<h3 class="title">優秀な人材の獲得なくして<br />企業に未来はない</h3>
<p>今、各企業では攻めに出る絶好のタイミングと考え、多くの新規プロジェクトが立ち上がっています。海外進出、新規事業立上げ、業務改善、IT含めた設備投資、などなど。<br />
海外関連やデジタル領域、ビッグデータや大規模プロジェクトなど、今だからこそ立ち上がっているプロジェクトも少なくありません。<br /><br />

このようなソリューションにいち早く取り組み、実績を作ることにより、他社に先駆けてノウハウをため、収益の柱に育てることは重要な経営課題です。そして、<strong>そのためには当然ながら人材が必要</strong>です。
</p>
<p><img alt="" src="<?php echo url_root_headhunter; ?>img/career_new2.png" title="" /></p>
<p>また、プロジェクトの数が増えればマネジメントをはじめ、<strong>責任の大きなこれまでにない多様なポジション</strong>が生まれます。そして、そのようなポジションで役割を担える人材が増えることにより、組織は強くなるのです。<br /><br />

つまり、優秀な人材を獲得できなければ企業は強くなりません。成長を牽引していける人材を増やすことができなければ、足元の業績だけでなく、未来の成長も危うくなります。未来への投資という意味でも、<strong>このタイミングで優秀な人材の獲得ができるかどうかは企業にとって死活問題</strong>です。
</p>
</div>

<div class="content_block bg_white">
<h3 class="title">この時期に出てきたポジションこそ<br />キャリアアップの大きなチャンス</h3>
<p>一方で、これらは企業側だけでなく、<strong>個人のキャリア側から考えても同様</strong>です。<br /><br />

上述の通り、顕在化しているものだけでも多くのプロジェクトやミッション、ポジション、役割が市場に存在しています。近いうちに出てくるであろう、潜在的なニーズもかなりあるはずです。<br />
これらの中には、<strong>この時期しかない、この時期だからこそ出てきたポジション</strong>も少なくありません。そのようなポジションの多くは、ビジネスのトレンドから考えても、<strong>今後のキャリアを高めるうえでプラスに働く</strong>可能性が大です。<br /><br />

この状況が永遠に続くことは絶対にあり得ません。<br />
必ず、市況が悪くなる時が来ます。<br />
その時に、市場環境に巻き込まれない強いビジネスマンでいるためには、どのような武器を持ち、どのようなバリューを発揮できるかが重要になってきます。<br /><br />

<strong>まさにこのチャンスにどのような経験を積み、どのような役割を担い、どのようなスキル・専門性などを身に付けるか</strong>が、皆さんの今後のキャリアに大きな影響を与えることになります。
</p>
</div>


<div class="content_block bg_white">
<h3 class="title">皆さん<br />“チャンス“を活かせていますか？</h3>
<p>現在のような市況ですので、目の前の業務・プロジェクトに追われ、なかなかじっくりとキャリアを考える余裕が無い方が多いのではないでしょうか？<br /><br />

けれど今だからこそ、俯瞰して自分のキャリアを考える事がとても重要です。<strong>今何をすべきなのかを改めて考え、足元だけでなく将来を見据えて経験・キャリアを積んでいただきたい</strong>と考えています。<br /><br />

コンサルティング業界やIT業界を例にしてきましたが、他業界でも同じです。<br /><br />

<strong>皆さんが、現在“チャンス”を活かしていらっしゃること、今後“チャンス”を活かしてご活躍されることを願っております。</strong>
<br /><br /><br />
 
現職について、市場について、転職について…<br />
何か思うところがありましたら、是非お気軽にご相談ください。<br /><br /></p>
<p class="the_btn"><a href="<?php echo url_root_domain; ?>mobile/landing/30collegehunter/" target="_blank"><img alt="無料転職サポートに申し込む" src="<?php echo url_root_headhunter; ?>img/the_btn.png" title="" /></a></p>
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
</div>
</body>
</html>
<?php 
	ob_flush();
?>