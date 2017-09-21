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
<title>ポストコンサル転職のインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="description" content="ポストコンサル転職でコンサルファームから事業会社へ転職した方へのインタビュー記事です。なぜ事業会社への転職を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。" />
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,インタビュー" />

<!--Facebook -->
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="kc-consul" />
<meta property="og:title" content="ポストコンサル転職のインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="ポストコンサル転職でコンサルファームから事業会社へ転職した方へのインタビュー記事です。なぜ事業会社への転職を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。" />
<meta property="og:image" content="<?php echo url_root; ?>img/og/main.png" />
<meta property="og:see_also" content="<?php echo url_root; ?>"/>

<!--twitter-->
<meta name="twitter:card" content="summary"/>  <!-- Card type -->
<meta name="twitter:site" content="kc-consul"/>
<meta name="twitter:title" content="ポストコンサル転職のインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー">
<meta name="twitter:description" content="ポストコンサル転職でコンサルファームから事業会社へ転職した方へのインタビュー記事です。なぜ事業会社への転職を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。"/>
<meta name="twitter:creator" content="kandc.com"/>
<meta name="twitter:image:src" content="<?php echo url_root; ?>img/og/main.png"/>
<meta name="twitter:domain" content="<?php echo url_root; ?>"/>


<!--Google Plus-->
<meta property="business:contact_data:website" content="<?php echo url_root; ?>"/>
<meta itemprop="name" content="ポストコンサル転職のインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー"/>
<meta itemprop="description" content="ポストコンサル転職でコンサルファームから事業会社へ転職した方へのインタビュー記事です。なぜ事業会社への転職を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。ポストコンサル・EXコンサルをキャリアプランとして描いている方におすすめです。"/>
<meta itemprop="image" content="<?php echo url_root; ?>img/og/main.png"/>
<!--End tag-->
	
</div>