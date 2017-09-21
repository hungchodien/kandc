<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	var isPC = window.matchMedia("only screen and (min-width: 767px)");
	
	 if (isPC.matches) {
		 switch_script('js/jquery.fullPage.js');
	}else {
		switch_script('js/jquery.fullPage_sp.js');
	}
		 
});

function switch_script(url){
	var script = document.createElement( 'script' );
    script.type = 'text/javascript';
    script.src = url;
    $('head',document).append( script );
}

</script>
<script type="text/javascript" src="js/home.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/jquery.fullPage.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/home.css" media="all" />



<div class="clear index_inc">
 
     <div id="fullpage">
	<div class="section" id="section0">
    
    <div class="ie_main_pic"><img src="img/home/bg-main.jpg" alt="下にスクロールしてください。" /></div>
    
		<div class="top_center">
        <h2><img src="img/main_title.png" alt="エグゼクティブポジションでの転身（転職）をお手伝いします" /></h2>
        <p class="site_slogan red" style="opacity:0.8;"><img src="img/home/main_title_english.png" alt="The best way to predict the future is to create it -Executive team" /></p>
        <p class="site_description">
エグゼクティブポジション<span  style="color:#0B61AD; font-size:15px; "> 社長、取締役、社外取締役、執行役員、部門責任者 </span>での転身をお考えでしたら、<br/>ヘッドハンターのリストにエントリーしませんか？</p>
        	
        </div>
        <div class="roll_down_btn" data-menuanchor="entry">
            <!--<a href="#entry"><img src="img/home/arrow-down.png" alt="下にスクロールしてください。" /></a>-->
				 <span class="scroll-btn">
                    <a href="#entry">
                        <span class="mouse">
                        	<span></span>
                        </span>
<span class="scroll_click_txt">Click</span>
                    </a>

                </span>

		</div>
		
        
	</div>
	<div class="section" id="section1">
    
    <div class="section_dropdown">
        <dl class="dropdown">
        <dt><a>ヘッドハンターのリストにエントリーしませんか？</a></dt>
            <dd>
            <select class="go_section">
            <option value="#entry">ヘッドハンターのリストにエントリーしませんか？</option>
            <option value="#head-hunter">ヘッドハンターのリストにエントリーすると？</option>
            <option value="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</option>
            <option value="#kreis-company">クライス＆カンパニーとは？</option>
            <option value="#executive">エグゼクティブとは？</option>
            </select>
            </dd>
    	</dl>
        </div>
    
		<div class="wrap clear">
			<h3 class="section_title"><img src="img/home/sub_content_title.png" alt="ヘッドハンターのリストにエントリーしませんか？" /></h3>
            
			<div class="section_txt">
				<p>私たちは、エグゼクティブポジション（社長、取締役、社外取締役、執行役員、部門責任者）での転身のお手伝いをさせていただいています。エグゼクティブポジションともなりますと、恒常的に入ってくるオーダーは限られ、また、エグゼクティブ層の方のご要望も当然高くなるかと思いますので、ご希望を満たすオーダーに出会うことは容易ではありません。ご自身にとってベストなタイミングで最高のオファーを手に入れるためには、日頃から転身（転職）における有効な情報をもたらしてくれる環境をつくっておくことをおすすめします。そのひとつに私たちをお考えいただければ幸いです。<br/><br/>
「ヘッドハンターのリスト」とは、当社がお付き合いいただいております優良企業からいただくコンフィデンシャルなオファーを元に、私たちがお声掛けさせていただくための候補者リストです。こちらにエントリーしていただきましたら、ご希望に合ったポジション情報が入ってきたタイミングで個別にお声掛けさせていただきます。
顕在化していないポジションが多く、また、突然オーダーが発生するのがエグゼクティブポジションの特長です。タイムリーにそのようなポジション情報をキャッチするのは簡単なことではありませんので、是非、私たちプロにおまかせください。<br/><br/>
「まだ先のことかな。」と思われている方こそ、今から準備を進めておくことをおすすめします。もちろん、今すぐ転身（転職）を考えられている方も、どうぞお気軽に私たちにご連絡ください。</p>
            </div>
           
		</div>
        
        
        
        <p class="next_section">
        <a href="#head-hunter">ヘッドハンターのリストにエントリーすると？</a>
        </p>
        
        <!--<div class="back_top">
            <a href="#home"><img src="img/home/page_top.png" alt="Page TOP" /></a>
        </div>-->
        
	</div>

	
	<div class="section" id="section2">
    
    <div class="section_dropdown">
        <dl class="dropdown">
        <dt><a>ヘッドハンターのリストにエントリーすると？</a></dt>
            <dd>
                <select class="go_section">
            <option value="#entry">ヘッドハンターのリストにエントリーしませんか？</option>
            <option value="#head-hunter">ヘッドハンターのリストにエントリーすると？</option>
            <option value="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</option>
            <option value="#kreis-company">クライス＆カンパニーとは？</option>
            <option value="#executive">エグゼクティブとは？</option>
            </select>
            </dd>
    	</dl>
        </div>
    
		<div class="wrap">
        <h3 class="section_title"><img src="img/home/service_t01.png" alt="ヘッドハンターのリストにエントリーすると？" /></h3>
            <div class="section_clear clear">
            <p class="section_txt">
          ヘッドハンターのリストにエントリーすると、ご希望の条件にマッチしたポジション情報を元に個別にお声がかかります。ご紹介するポジション情報は、企業の経営層からダイレクトにオーダーされた案件や、エントリーいただいている候補者の方のご希望に沿って私たちが独自に開拓したポジションなど、主に一般には出回ることのないコンフィデンシャルな案件です。<br /><br />
転身（転職）をお考えになられる機会は必ずしも能動的な行動からだけではないと思います。まったく考えていなかったコンディションのときでも、ご自身にとってまたとない魅力的なオファーが舞い込むこともございます。エントリーしていただくと、そのような情報を漏れなく耳に入れることができ、進めるか進めないかを選択していただくだけでいいのです。<br /><br />
後悔されない転身（転職）を実現するためにも、日頃から情報が入りやすい環境を整えておくことをおすすめします。いざというときの備えとして、是非&nbsp;<a href="./entry.html">エントリー</a>&nbsp;をお考えください。
            </p>
            </div>
		</div>
        
        
        <p class="next_section">
        <a href="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</a>
        </p>
        <!--<div class="back_top">
            <a href="#home"><img src="img/home/page_top.png" alt="Page Top" /></a>
        </div>-->
        
	</div>
    
    <div class="section" id="section3">
    <div class="section_dropdown">
        <dl class="dropdown">
        <dt><a>クライス＆カンパニー・EXECUTIVEチームとは？</a></dt>
            <dd>
                <select class="go_section">
            <option value="#entry">ヘッドハンターのリストにエントリーしませんか？</option>
            <option value="#head-hunter">ヘッドハンターのリストにエントリーすると？</option>
            <option value="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</option>
            <option value="#kreis-company">クライス＆カンパニーとは？</option>
            <option value="#executive">エグゼクティブとは？</option>
            </select>
            </dd>
    	</dl>
        </div>
        
		<div class="wrap">
        <h3 class="section_title"><img src="img/home/service_t02.png" alt="クライス＆カンパニー・EXECUTIVEチームとは？" /></h3>
            <div class="section_clear clear">
            <p class="section_txt">クライス＆カンパニー・EXECUTIVEチームとは、EXECUTIVE層の方の転身（転職）のお手伝いを専門にさせていただくチームです。私たちが大切にしていることは、エグゼクティブ層の方にとって有益な情報を逃さないことと、私たち自身がコンサルティング力を磨き、エグゼクティブ層の方々の転身（転職）のお手伝いができる力とスキルを身に付けておくことです。<br /><br />
経営層の方々や裁量権をお持ちの事業責任者の方々と日頃からお会いさせていただいていると、ご信頼いただき、事業の課題などを直接ご相談いただくことがよくございます。そのような時、私たちはエントリーいただいている候補者の方の中から、その課題を解決するために適任でいらっしゃる方を具体的にイメージして、新たなポジションのご提案をさせていただきます。<br /><br />
&nbsp;<a href="./entry.html">エントリー</a>&nbsp;していただいていると、このようなきっかけで顕在していないポジションが突然おひとりの方のために創りだされ、大きなご縁へとつながっていくことがあるのです。
            </p>
		</div>
        </div>
        
        
        <p class="next_section">
        <a href="#kreis-company">クライス＆カンパニーとは？</a>
        </p>
        <!--<div class="back_top">
            <a href="#home"><img src="img/home/page_top.png" alt="Page Top" /></a>
        </div>-->
        
	</div>
    
    <div class="section" id="section4">
    <div class="section_dropdown">
        <dl class="dropdown">
        <dt><a>クライス＆カンパニーとは？</a></dt>
            <dd>
                <select class="go_section">
            <option value="#entry">ヘッドハンターのリストにエントリーしませんか？</option>
            <option value="#head-hunter">ヘッドハンターのリストにエントリーすると？</option>
            <option value="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</option>
            <option value="#kreis-company">クライス＆カンパニーとは？</option>
            <option value="#executive">エグゼクティブとは？</option>
            </select>
            </dd>
    	</dl>
        </div>
        
		<div class="wrap">
        <h3 class="section_title"><img src="img/home/service_t03.png" alt="クライス＆カンパニーとは？" /></h3>
            <div class="section_clear clear">
            <div class="section_txt">
           <p>クライス＆カンパニーとは、1993年11月に設立された、IT企業のエグゼクティブポジション専門のヘッドハンティング会社です。今日までの20余年、30代マネージャークラスまで領域を広げつつも、創業から一貫してハイクラスポジションにこだわり続け、転職・転身のお手伝いをしております。<br /><br />
ハイクラスポジションの方々をサポートする上で、私たち自身も幅広い知識とスキルが要求されるため、当社では、年間100時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています。コンサルタント全員が&nbsp;<span class="color_red">*</span>GCDF資格取得&nbsp;に励むのもその一環です。<br /><br /></p>
<p style="text-align:right;"><span class="color_red">*</span><a class="black" href="http://www.kandc.com/features/features04.php" target="_blank">GCDF資格取得とは？</a></p>
            </div>
            </div>
		</div>
        
        
        <p class="next_section">
        <a href="#executive">エグゼクティブとは？</a>
        </p>
        <!--<div class="back_top">
            <a href="#home"><img src="img/home/page_top.png" alt="Page Top" /></a>
        </div>-->
        
	</div>
    
    <div class="section" id="section5">
    <div class="section_dropdown">
        <dl class="dropdown">
        <dt><a>エグゼクティブとは？</a></dt>
            <dd>
                <select class="go_section">
            <option value="#entry">ヘッドハンターのリストにエントリーしませんか？</option>
            <option value="#head-hunter">ヘッドハンターのリストにエントリーすると？</option>
            <option value="#executive-team">クライス＆カンパニー・EXECUTIVEチームとは？</option>
            <option value="#kreis-company">クライス＆カンパニーとは？</option>
            <option value="#executive">エグゼクティブとは？</option>
            </select>
            </dd>
    	</dl>
        </div>
        
    <div class="last_section">
		<div class="wrap">
        <h3 class="section_title"><img src="img/home/service_t04.png" alt="エグゼクティブとは？" /></h3>
            <div class="section_clear clear">
            <div class="section_txt">
            <p>エグゼクティブポジションとは、社長、取締役、社外取締役、執行役員、部門責任者のポジションを私たちはエグゼクティブポジションと呼称しています。私たちEXECTIVEチームがお手伝いさせていただきますのは、現在こちらのポジションにいらっしゃる方、もしくは今後そのポジションでの転身（転職）をご希望される方々です。<br /><br />
<span class="gray_text">※マネージャー、リーダークラスでの転職をご希望されていらっしゃる方は、こちらのEXECUTIVE専門サイトからではなく、クライス＆カンパニーのサイトからエントリーいただけますと幸いです。こちらでは、30代マネージャークラスの方の転職を中心にお手伝いさせていただいております。</span><br /><br /></p>
<ul class="section_link clear">
<li class="fr"><a href="http://www.kandc.com" target="_blank">クライス＆カンパニーのメインサイトへ</a></li>
</ul>
            </div>
            </div>
		</div>
        
        	  <div id="two_bottom_btns" class="fixed_btns stuck">
		<div class="two_btns">
                <a class="to_entry" href="<?php echo url_root; ?>entry.html"><span class="bold">エントリー</span>はこちら</a>
                <a class="to_story" href="<?php echo url_root; ?>story.html"><span class="bold">X氏51歳</span>のリアルストーリー</a>
		</div>
	</div>
    <footer id="colophon"  class="foot footer_index clear">
   	
    </footer>
        
	</div>
    
  
</div>
    
    
</div><!--end full-page-->

<script type="text/javascript">
    $(function(){
      // bind change event to select
      $('.go_section').bind('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>

	
</div><!--index_inc-->

<div class="back_top back_top_stuck">
            <a href="#home"><img src="img/home/page_top.png" alt="Page Top" /></a>
</div>
