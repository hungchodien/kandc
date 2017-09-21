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
<title>未経験からコンサルタントへの転職インタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="description" content="未経験からコンサルタントへ転身した現役コンサルタントのインタビュー記事です。将来を嘱望されている中、なぜコンサルの道を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。コンサルタントを目指す方におすすめです。" />
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,インタビュー,未経験" />

<!--Facebook -->
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="kc-consul" />
<meta property="og:title" content="未経験からコンサルタントへの転職インタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="未経験からコンサルタントへ転身した現役コンサルタントのインタビュー記事です。将来を嘱望されている中、なぜコンサルの道を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。コンサルタントを目指す方におすすめです。" />
<meta property="og:image" content="<?php echo url_root; ?>img/og/main.png" />
<meta property="og:see_also" content="<?php echo url_root; ?>"/>

<!--twitter-->
<meta name="twitter:card" content="summary"/>  <!-- Card type -->
<meta name="twitter:site" content="kc-consul"/>
<meta name="twitter:title" content="未経験からコンサルタントへの転職インタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー">
<meta name="twitter:description" content="未経験からコンサルタントへ転身した現役コンサルタントのインタビュー記事です。将来を嘱望されている中、なぜコンサルの道を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。コンサルタントを目指す方におすすめです。"/>
<meta name="twitter:creator" content="kandc.com"/>
<meta name="twitter:image:src" content="<?php echo url_root; ?>img/og/main.png"/>
<meta name="twitter:domain" content="<?php echo url_root; ?>"/>


<!--Google Plus-->
<meta property="business:contact_data:website" content="<?php echo url_root; ?>"/>
<meta itemprop="name" content="未経験からコンサルタントへの転職インタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー"/>
<meta itemprop="description" content="未経験からコンサルタントへ転身した現役コンサルタントのインタビュー記事です。将来を嘱望されている中、なぜコンサルの道を選んだのか、今後何を目指しているのか、生の声がご覧いただけます。コンサルタントを目指す方におすすめです。"/>
<meta itemprop="image" content="<?php echo url_root; ?>img/og/main.png"/>
<!--End tag-->
</div>