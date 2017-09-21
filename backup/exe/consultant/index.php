<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/home.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/jquery.fullPage.css" media="all" />

<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	var isPC = window.matchMedia("only screen and (min-width: 767px)");
	
	 if (isPC.matches) {
		 switch_script('<?php echo url_root; ?>js/jquery.fullPage.js');
	}else {
		switch_script('<?php echo url_root; ?>js/jquery.fullPage_sp.js');
	}
		 
});

function switch_script(url){
	var script = document.createElement( 'script' );
    script.type = 'text/javascript';
    script.src = url;
    $('head',document).append( script );
}

</script>

<script type="text/javascript">
		$(document).ready(function() {
			var isPC = window.matchMedia("only screen and (min-width: 768px)");
	
	 if (isPC.matches) {
			
			$('#fullpage').fullpage({
				//anchors: ['firstPage'],
				//sectionsColor: ['#4A6FB1'],
				autoScrolling: false,
				anchors: ['home'],
				css3: true
			});
			
			/*$('.consultant_pic .consultant_ct').css({'height': ($('.section').height() - 73) });
			$('.consultant_pic').css({'height': ($('.section').height() - 73) });*/
	 }else {
		 $('#fullpage').fullpage({
				//anchors: ['firstPage'],
				//sectionsColor: ['#4A6FB1'],
				autoScrolling: false,
				scrollOverflow: false,
				anchors: ['home'],
				css3: true
			});
			$('.section').css({'height': 'auto'});
			$('.consultant_pic .consultant_ct').css({'height': 'auto'});
			$('.consultant_pic').css({'height': 'auto'});
	}
		});
		
		$(window).resize(function(){
			var isPC = window.matchMedia("only screen and (min-width: 768px)");
	
	 if (isPC.matches) {
			/*$('.consultant_pic .consultant_ct').css({'height': ($('.section').height() - 73)});
			$('.consultant_pic').css({'height': ($('.section').height() - 73)});*/
	 }else{
			$('.consultant_pic .consultant_ct').css({'height': 'auto'});
			$('.consultant_pic').css({'height': 'auto'});
	}
		});
		
		
</script>
<div class="breadcrumb" id="breadcrumb_consultant">
		<ul class="clear">
        	<li><a href="<?php echo url_root; ?>">クライス＆カンパニー</a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>consultant.html"> コンサルタント紹介 </a></li>
           
        </ul>
	</div><!--breadcrumb_top-->
<div id="fullpage" class="consultant_page">

	

	<div class="section" id="section0">
    
    <div class="consultant_list">
    <div class="clear">
    <div class="consultant_block consultant_block_1">
    <div class="consultant_pic consultant_1">
    <a href="<?php echo url_root; ?>consultant/maruyama.html"><img src="<?php echo url_root; ?>img/consultant/maruyama_thumb_black.png" alt="代表取締役社長 丸山 貴宏" /></a>
    </div>
    
    <div class="consultant_pic consultant_2">
    <a href="<?php echo url_root; ?>consultant/okada.html"><img src="<?php echo url_root; ?>img/consultant/okada_thumb_black.png" alt="キャリアコンサルタント 岡田 麗" /></a>
    </div>
    
    </div>
    
    <div class="consultant_list_title_hide">
    <h2 class="consultant_title_jp"><img src="<?php echo url_root; ?>img/consultant/main_title_jp.png" alt="私たちがクライス＆カンパニー・EXECUTIVEチームです。" /></h2>
    <h3 class="consultant_title_en"><img src="<?php echo url_root; ?>img/consultant/main_title_en.png" alt="We're Kreis Executive team" /></h3>
    </div>
    
    <div class="consultant_block consultant_block_2">
    <div class="consultant_pic consultant_3">
    <a href="<?php echo url_root; ?>consultant/nara.html"><img src="<?php echo url_root; ?>img/consultant/nara_thumb_black.png" alt="キャリアコンサルタント 奈良 元生" /></a>
   
    </div>
    
    <div class="consultant_pic consultant_4">
    <a href="<?php echo url_root; ?>consultant/tanasawa.html"><img src="<?php echo url_root; ?>img/consultant/tanasawa_thumb_black.png" alt="キャリアコンサルタント 棚澤 啓介" /></a>
   
    </div>
    </div>
    </div>
    
    <div class="consultant_list_title">
    <h2 class="consultant_title_jp consultant_title_jp_pc"><img src="<?php echo url_root; ?>img/consultant/main_title_jp.png" alt="私たちがクライス＆カンパニー・EXECUTIVEチームです。" /></h2>
    <h2 class="consultant_title_jp consultant_title_jp_sp"><img src="<?php echo url_root; ?>img/consultant/main_title_jp_mobile.png" alt="私たちがクライス＆カンパニー・EXECUTIVEチームです。" /></h2>
    <h3 class="consultant_title_en"><img src="<?php echo url_root; ?>img/consultant/main_title_en.png" alt="We're Kreis Executive team" /></h3>
    </div>
    
    <p class="consultant_list_txt">クライス＆カンパニー・EXECUTIVEチームとは、EXECUTIVE層の方の転身（転職）のお手伝いを専門にさせていただくチームです。<br />
当社は、1993年IT企業のエグゼクティブポジション専門のヘッドハンティング会社として設立され、今日までの20余年、20代マネージャークラスまで領域を広げつつも、あくまでもハイクラスポジションにこだわり転職・転身のお手伝いをさせていただいております。その中でもここ数年、エグゼクティブ層の方からのご相談がとても増えてまいりましたため、改めましてエグゼクティブ層の方に特化してお手伝いをさせていただく「EXECUTIVEチーム」を発足させました。</p>
    </div>
    
	</div>
    
    
</div>
<div class="breadcrumbs">


<div id="back_top">
            <a href="#top"><img src="img/home/page_top.png" alt="Page Top" /></a>
</div>
</div>