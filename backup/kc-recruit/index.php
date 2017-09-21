<?php include('inc/header.php'); ?>
<div id="header_meta">
<title>自社採用情報 - ヘッドハンティング・人材紹介のクライス&amp;カンパニー</title>
<meta content="求人,ヘッド,ハンティング,転職,支援,人材,紹介,キャリアコンサルタント,自社,採用" name="keywords"/>
<meta content="クライス&amp;カンパニーでは、一緒に「私たちがいたからこそ、生まれたご縁」をつくる仲間を募集(中途採用)しています。キャリアコンサルタント、コンサルタントパートナー、アシスタントなど様々な職種を募集しています。" name="description"/>
<meta content="自社採用情報 - ヘッドハンティング・人材紹介のクライス&amp;カンパニー" property="og:title"/>
<meta content="クライス&amp;カンパニーでは、一緒に「私たちがいたからこそ、生まれたご縁」をつくる仲間を募集(中途採用)しています。キャリアコンサルタント、コンサルタントパートナー、アシスタントなど様々な職種を募集しています。" property="og:description"/>
<meta content="株式会社クライス＆カンパニー" name="author"/>
</div>

<img class="bg" title="ホームボタン" alt="ホームボタン" src="img/img-home.jpg" />
<script type="text/javascript">
	 $(document).ready(function () {
		$("#menu_home").addClass('active');
	 });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(window).on('load resize', function (){
			var height_browse=$(document).outerHeight(true);
			var width_body=$(document).width(true);
			if(height_browse>760)
			{
				$("#container").css({
					"height":+height_browse,
					"width":+width_body,
					'background' : 'url("img/img-home.jpg")',
					'background-repeat': 'no-repeat',
					'background-position': 'center center',
					'background-size': 'cover',
					'position':'relative'
				});
				$("img.bg").css({
					"display":"none"
				});
			}
			else
			{
				$("#container").css({
					"height":'760px',
					"width":+width_body,
					'background' : 'url("img/img-home.jpg")',
					'background-repeat': 'no-repeat',
					'background-position': 'center center',
					'background-size': 'cover',
					'position':'relative'
				});
				$("img.bg").css({
					"display":"none"
				});
			}
		});
	});
</script>
<div id="wrapper" class="clear">
  <div id="contents_index" class="clear">
  
  <h1 class="page_desc">私たちがいたからこそ、<br />生まれた<br />ご縁がたくさんあります。</h1>

  <h2 id="page_desc"><img title="私たちがいたからこそ、生まれたご縁がたくさんあります。" alt="私たちがいたからこそ、生まれたご縁がたくさんあります。" src="img/main-h1.png" /></h2>

<div id="entry_index_btn" class="clear">
<p class="entry_index_btn"><a href="<?php echo url_root; ?>entry/"><img title="ご応募フォームはこちら" alt="ご応募フォームはこちら" src="img/button-entry-index.png" /></a></p>
<div class="movie_link_index">
	<p class="txt">会社紹介Movieこちら</p>
	<p class="link_img"><a href=" https://www.youtube.com/watch?v=IuDEw_IQaDI" rel="nofollow" target="_blank">
		<img title="会社紹介Movieこちら" alt="会社紹介Movieこちら" src="<?php echo url_root; ?>img/th_movie.jpg" />
	</a></p>
</div>
</div>
  
</div><!--end contents-->
</div><!--end wrapper-->



<footer id="foot_index">
  <div class="foot_top">
  
<div class="foot_content clear">  
<div class="breadcrumbs fl">
<ul class="clear">
<li class="bc_home"><a href="<?php echo url_root; ?>">HOME</a></li>
</ul>
</div>
  <div id="back-top" class="fr">
    <a href="#top"><span>ページの先頭へ</span></a>
</div>
</div>
</div>
<div id="foot_copyR" class="foot_content">    
    <p class="copyR">Copyright &copy; <?php echo date("Y"); ?> KREIS &amp;Company Inc. All Rights Reserved. Webdesign <a href="http://tokyodesignroom.com">tokyodesignroom.com</a></p>
    </div>
    
</footer>
</div><!--end container-->


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