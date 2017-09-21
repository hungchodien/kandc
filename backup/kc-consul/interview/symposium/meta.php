<?php 
	function curPageURL() {
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
?>
<div id="header_meta">
	<!--Site tag-->
<title>現役コンサルタントの座談会 |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="description" content="各コンサルティングファームの現場コンサルタントの座談会記事です。他ファームから転職したからこそ感じる各コンサルティングファームの違いが語られています。リアルな現場の状況やコンサルタントの声がご覧いただけます。" />
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,インタビュー,座談会" />

<!--Facebook -->
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="kc-consul" />
<meta property="og:title" content="現役コンサルタントの座談会 |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="株式会社野村総合研究所 西野 貴弘氏 &amp; 秦 伸太朗氏の現場コンサルタントの座談会記事です。[コンサルタント座談会]他ファームから転職したからこそ感じるリアルな現場の状況やコンサルタントの声がご覧いただけます。" />
<meta property="og:image" content="<?php echo url_root; ?>img/og/main.png" />
<meta property="og:see_also" content="<?php echo url_root; ?>"/>

<!--twitter-->
<meta name="twitter:card" content="summary"/>  <!-- Card type -->
<meta name="twitter:site" content="kc-consul"/>
<meta name="twitter:title" content="現役コンサルタントの座談会 |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー">
<meta name="twitter:description" content="各コンサルティングファームの現場コンサルタントの座談会記事です。他ファームから転職したからこそ感じる各コンサルティングファームの違いが語られています。リアルな現場の状況やコンサルタントの声がご覧いただけます。"/>
<meta name="twitter:creator" content="kandc.com"/>
<meta name="twitter:image:src" content="<?php echo url_root; ?>img/og/main.png"/>
<meta name="twitter:domain" content="<?php echo url_root; ?>"/>


<!--Google Plus-->
<meta property="business:contact_data:website" content="<?php echo url_root; ?>"/>
<meta itemprop="name" content="現役コンサルタントの座談会 |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー"/>
<meta itemprop="description" content="各コンサルティングファームの現場コンサルタントの座談会記事です。他ファームから転職したからこそ感じる各コンサルティングファームの違いが語られています。リアルな現場の状況やコンサルタントの声がご覧いただけます。"/>
<meta itemprop="image" content="<?php echo url_root; ?>img/og/main.png"/>
<!--End tag-->
	
</div>