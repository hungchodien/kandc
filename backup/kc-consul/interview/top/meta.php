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
<title>コンサルファームのトップインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
<meta name="description" content="各コンサルティングファームトップへの独占インタビュー記事です。注目のファームのトップは何を考え、他ファームとの差別化をどのように図っているのか。また今後のビジョン・戦略など、他には公開されていない赤裸々な情報が満載です。" />
<meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,インタビュー,トップ" />

<!--Facebook -->
<meta property="og:url" content="<?php echo curPageURL(); ?>" />
<meta property="og:site_name" content="コンサルタントの転職ならクライス＆カンパニー | CONSULTANT CAREER[クライス＆カンパニー]" />
<meta property="og:title" content="コンサルファームのトップインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー" />
<meta property="og:description" content="各コンサルティングファームトップへの独占インタビュー記事です。注目のファームのトップは何を考え、他ファームとの差別化をどのように図っているのか。また今後のビジョン・戦略など、他には公開されていない赤裸々な情報が満載です。" />
<meta property="og:image" content="<?php echo url_root; ?>img/og/main.png" />
<meta property="og:see_also" content="<?php echo url_root; ?>"/>

<!--twitter-->
<meta name="twitter:card" content="summary"/>  <!-- Card type -->
<meta name="twitter:site" content="<?php echo curPageURL(); ?>"/>
<meta name="twitter:title" content="コンサルファームのトップインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー">
<meta name="twitter:description" content="各コンサルティングファームトップへの独占インタビュー記事です。注目のファームのトップは何を考え、他ファームとの差別化をどのように図っているのか。また今後のビジョン・戦略など、他には公開されていない赤裸々な情報が満載です。"/>
<meta name="twitter:creator" content="kandc.com"/>
<meta name="twitter:image:src" content="<?php echo url_root; ?>img/og/main.png"/>
<meta name="twitter:domain" content="<?php echo url_root; ?>"/>


<!--Google Plus-->
<meta property="business:contact_data:website" content="<?php echo url_root; ?>"/>
<meta itemprop="name" content="コンサルファームのトップインタビュー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー"/>
<meta itemprop="description" content="各コンサルティングファームトップへの独占インタビュー記事です。注目のファームのトップは何を考え、他ファームとの差別化をどのように図っているのか。また今後のビジョン・戦略など、他には公開されていない赤裸々な情報が満載です。"/>
<meta itemprop="image" content="<?php echo url_root; ?>img/og/main.png"/>
<!--End tag-->
	
</div>