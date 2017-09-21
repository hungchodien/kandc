<script src="<?php echo url_root; ?>js/jquery.shuffle.min.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery( document ).ready(function($){
	  		/* initialize shuffle plugin */
			var $grid = $('#data_interview');
	   $(window).on('load hashchange', function () { 
	  		var url_hash=$(location).attr('hash').replace("#", "");
			url_hash=url_hash.replace("/", "");
			if(url_hash!="")
			{
				//alert("ok");
					$("ul#filterOptions li a").each(function( index ){
						//var url_href=$('ul.job_picup_slide_bar_search li a').attr('href');
						if($(this).attr('class')==url_hash)
						{
							$('ul#filterOptions li a').parent().removeClass('active');
							$(this).parent().addClass('active');
							var groupName = $(this).attr('data-group');
							// reshuffle grid
							$grid.shuffle('shuffle', groupName );
						}
					});
			}
			else
			{
				$grid.shuffle({
					itemSelector: '.item' // the selector for the items in the grid
				});
			}
	  
	  });
			

			

			/* reshuffle when user clicks a filter item */
			$('ul#filterOptions li a').click(function (e) {
				e.preventDefault();

				// set active class
				$('ul#filterOptions li a').parent().removeClass('active');
				$(this).parent().addClass('active');

				// get group name from clicked item
				var groupName = $(this).attr('data-group');

				// reshuffle grid
				$grid.shuffle('shuffle', groupName );
			});

	});
</script>

<!--<script src="<?php echo url_root; ?>js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo url_root; ?>js/jquery.quicksand.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery-css-transform.js"></script>
<script type="text/javascript">

	jQuery( document ).ready(function($){
		var $filter;
	    var $container;
	    var $containerClone;
	    var $filterLink;
	    var $filteredItems
		$filter = $('.parent_interview_list li.active a').attr('class');
	    $filterLink = $('.parent_interview_list li a');
	    $container = $('ul#data_interview');
	    $containerClone = $container.clone();
		$filterLink.click(function(e) 
	    {
	        $('.parent_interview_list li').removeClass('active');
	        $filter = $(this).attr('class').split(' ');
	        $(this).parent().addClass('active');
			if ($filter == 'all') 
			{
	            $filteredItems = $containerClone.find('li'); 
	        }
	        else 
			{
	            $filteredItems = $containerClone.find('li[data-type~=' + $filter + ']'); 
	        }
			 $container.quicksand($filteredItems,{
	            duration: 800,
				easing: "easeInOutQuad",
				adjustHeight: 'dynamic',
				useScaling:true
	        });
	    });
		
		var url_hash=$(location).attr('hash').replace("#", "");
		if(url_hash!="")
		{
			//alert("ok");
				$("ul#filterOptions li a").each(function( index ){
					//var url_href=$('ul.job_picup_slide_bar_search li a').attr('href');
					if($(this).attr('class')==url_hash)
					{
						$("ul#filterOptions li a").parent().removeClass('active');
						$(this).parent().addClass('active');
						var $container_item = $('ul#data_interview');
						 $Data_Items =$container_item.clone().find('li[data-type~=' + url_hash + ']');
							$container_item.quicksand($Data_Items, 
					        {
					            duration: 800,
								easing: "easeOutQuart",
								adjustHeight: 'dynamic',
								useScaling:true
								
								
					        });
					}
				});
		}
		else
		{
			portfolio_quicksand();
		}
		
	});

function portfolio_quicksand() {
    var $filter;
    var $container;
    var $containerClone;
    var $filterLink;
    var $filteredItems

    $filter = $('.parent_interview_list li.active a').attr('class');
    $filterLink = $('.parent_interview_list li a');
    $container = $('ul#data_interview');
    $containerClone = $container.clone();

            // Show Thumbnail Overlay on mouseover, hide on mouseout
    $('.data_interview_content').on('mouseover', '#data_interview li', function(){
        $(this).find('.thumbnail-overlay').stop().toggle('fast');
    });

    $('.data_interview_content').on('mouseout', '#data_interview li', function(){
        $(this).find('.thumbnail-overlay').stop().toggle('fast');    
    });

            // Filter Links
    $filterLink.click(function(e) 
    {
        $('.parent_interview_list li').removeClass('active');
        $filter = $(this).attr('class').split(' ');
        $(this).parent().addClass('active');

        if ($filter == 'all') {
            $filteredItems = $containerClone.find('li'); 
        }
        else {
            $filteredItems = $containerClone.find('li[data-type~=' + $filter + ']'); 
        }

                    // Quicksand Transitions
        $container.quicksand($filteredItems, 
        {
            duration: 800,
			easing: "easeOutQuart",
			adjustHeight: 'dynamic',
			useScaling:true
        });
		e.preventDefault();
    });
}
</script>-->

<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul  class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>">インタビュー</a></li>
        </ul>
    </div>
</div>
<h3 class="title_page_interview clear">
	<img src="<?php echo url_root; ?>img/interview/interview-main-title.png" alt="インタビュー"/>
</h3>
<div class="group_interview_parent clear">
	<div class="clear">
		<ul id="filterOptions" class="parent_interview_list clear splitter">
	    	<li class="segment-1 active">
				<a class="all" data-group="all" href="javascript:void(0);">全て見る</a>
			 </li>
	         <li class="segment-2">
				<a class="inexperience" data-group="inexperience"  href="javascript:void(0);">未経験からコンサルタントへ</a>
			 </li>
	         <li class="segment-3">
				<a class="consultant-post" data-group="consultant-post"  href="javascript:void(0);">コンサルタントから次のキャリアへ</a>
			 </li>
	         <li class="segment-4">
				<a class="top" data-group="top" href="javascript:void(0);">トップインタビュー </a>
			 </li>
	         <li class="segment-5">
				<a class="symposium" data-group="symposium" href="javascript:void(0);">コンサルタント座談会 </a>
			 </li>
	    </ul>
    </div>
</div><!--End group_interview-->

<div class="data_interview_content clear">
	<ul id="data_interview" class="ourHolder list_interview_quit item_iterview_post clear">
      
      <!--start--> 
      
      
      
      <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-1">
            	<a href="<?php echo url_root; ?>interview/symposium/08/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interviews/symposium/08/thumb.png" />
                </a>
                   <div class="title_end">
                   			<p>Vol.30</p>
                        	<p>トーマツ ベンチャーサポート株式会社</p>
							<p>瀬川 友史氏＆森山 大器氏</p>
                  </div>
                  <div class="title_hover">
                      <p>日本の未来のために、 真にイノベーションを起こしたい。 だから我々はこの場を選んだ。</p>
                 </div>
                 
                 <div id="gradient_editor"></div>
            </li>
      
      
      
      <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-1">
            	<a href="<?php echo url_root; ?>interview/symposium/07/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interviews/symposium/07/thumb.png" />
                </a>
                   <div class="title_end">
                   			<p>Vol.29</p>
                        	<p>プライスウォーターハウスクーパース株式会社</p>
							<p>田中 大貴氏＆長田 英知氏＆森 厚雄氏</p>
                  </div>
                  <div class="title_hover">
                      <p>大きな裁量を持って、戦略実行までドライブする。政府と連携し、グローバルで新たな価値を創り出す。PwCだからこそ果たせるコンサルティングがある。</p>
                 </div>
                 
                 <div id="gradient_editor"></div>
            </li>
      
      <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-1">
            	<a href="<?php echo url_root; ?>interview/consultant-post/11/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/11/thumb.png" />
                </a>
                   <div class="title_end">
                   			<p>Vol.28</p>
                        	<p>エムスリーキャリア株式会社</p>
							<p>羽生 崇一郎氏</p>
                  </div>
                  <div class="title_hover">
                      <p>未来のことは分からない。だから行動を通して見える範囲を広げる。その積み重ねが価値観とキャリアを磨く。</p>
                 </div>
                 
                 <div id="gradient_editor"></div>
            </li>
      
      
      
        	<li class="item" data-groups='["all", "top"]' data-type="top" data-id="id-2">
            	<a href="<?php echo url_root; ?>interview/top/05/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/05/thumb.png" />
                </a>
                   <div class="title_end">
                   			<p>Vol.27</p>
                        	<p>株式会社フィールドマネージメント</p>
							<p>並木 裕太氏</p>
                  </div>
                  <div class="title_hover">
                      <p>日本発のプロフェッショナルサービスで、コンサルティングの歴史さえ変えていきたい。</p>
                 </div>
                 
                 <div id="gradient_editor"></div>
            </li>
            
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-3">
            	 <a href="<?php echo url_root; ?>interview/symposium/06/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/06/thumb.png" />
                 </a>
                 <div class="title_end">
                 			<p>Vol.26</p>
                       		 <p>株式会社フィールドマネージメント</p>
                            <p>吉本 貴志氏＆小林 傑氏＆竹森 大介氏</p>
                 </div>
                <div class="title_hover">
                       		<p>コンサルタントでありながら、事業開発や経営にも関わり、自らの「理想」を追求できる。</p>
                </div>
                 
               <div id="gradient_editor"></div>
            </li>
             <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-4">
           		 <a href="<?php echo url_root; ?>interview/inexperience/09/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/09/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.25</p>
                        <p>プライスウォーターハウスクーパース・<br>ストラテジー株式会社（Strategy&amp;）</p>
                            <p>吉田 泰博氏</p>
                 </div>
                <div class="title_hover">
                       		<p>エンジニアから戦略コンサルタントへ。経営を変えていくプロセスを顧客と「楽しむ」日々。</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
            <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-5">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/09/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/09/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.24</p>
                        	<p>株式会社JVCケンウッド</p>
                            <p>田村 誠一氏</p>
                 </div>
                <div class="title_hover">
                       		<p>戦略コンサルタントを経て、国内大手企業の経営陣に参画。</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
            
              <li class="item" data-groups='["all", "top"]' data-type="top" data-id="id-6">
            	<a href="<?php echo url_root; ?>interview/top/04/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/04/thumb.png" />
                </a>
                   <div class="title_end">
                   <p>Vol.23</p>
                        		<p>カート・サーモン</p>
							<p>渡辺 和成氏＆河合 拓氏</p>
                  </div>
                  <div class="title_hover">
                     <p>「リテール」にフォーカスし、優れた知見を蓄え、戦略・業務・IT一体で顧客の現場からビジネスを変えていく。</p>
                 </div>
                 <div id="gradient_editor"></div>
            </li>
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-7">
            	 <a href="<?php echo url_root; ?>interview/symposium/05/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/05/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.22</p>
                        		<p>カート・サーモン</p>
                            <p>安藤 秀之氏＆杉山 裕哉氏</p>
                 </div>
                <div class="title_hover">
                       		<p>まだまだファームとしては進化の途上。</p>
                </div>
               <div id="gradient_editor"></div>
            </li>
              <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-8">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/08/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/08/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.21</p>
                        <p>リンカーズ株式会社</p>
                            <p>前田 佳宏氏</p>
                 </div>
                <div class="title_hover">
                       		<p>日本の産業に流動性を。コンサルタントでは果たせない、「世の中へのインパクト」を求めて。</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
              <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-9">
           		 <a href="<?php echo url_root; ?>interview/inexperience/08/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/08/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.20</p>
                        		<p>A.T. カーニー株式会社</p>
                            <p>筒井 慎介氏</p>
                 </div>
                <div class="title_hover">
                       		<p>30歳を超えた私を襲った焦燥感。居心地の良い環境をなげうち、「日本」を堂々と語れる場で、社会を変える仕事に挑む。</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
             <li class="item" data-groups='["all", "top"]' data-type="top" data-id="id-10">
            	<a href="<?php echo url_root; ?>interview/top/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/03/thumb.png" />
                </a>
                   <div class="title_end">
                   <p>Vol.19</p>
                        <p>株式会社野村総合研究所</p>
							<p>此本 臣吾氏</p>
                  </div>
                  <div class="title_hover">
                     <p>従来のメソッドではもはや問題は解決できない。</p>
                 </div>
                 <div id="gradient_editor"></div>
            </li>
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-11">
            	 <a href="<?php echo url_root; ?>interview/symposium/04/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/04/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.18</p>
                        		<p>株式会社野村総合研究所</p>
                            <p>西野 貴弘氏＆秦 伸太朗氏</p>
                 </div>
                <div class="title_hover">
                       		<p>中途入社者が語る、リアルなNRI。</p>
                </div>
               <div id="gradient_editor"></div>
            </li>
            
             <li class="item" data-groups='["all", "consultant-post"]'  data-type="consultant-post" data-id="id-12">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/07/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/07/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.17</p>
                        	<p>株式会社YCP Japan</p>
                            <p>片野 大輔氏</p>
                 </div>
                <div class="title_hover">
                       		<p>20代30代でも、経営は担える。アジアへ向けて経営者を輩出するプラットフォームを、ここで創りたい。</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
            
            
            
            
             
              <li class="item" data-groups='["all", "inexperience"]'  data-type="inexperience" data-id="id-13">
           		 <a href="<?php echo url_root; ?>interview/inexperience/07/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/07/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.16</p>
                        	<p>株式会社経営共創基盤（IGPI）</p>
                            <p>堺 敦行氏</p>
                 </div>
                <div class="title_hover">
                       		<p>監査法人からコンサルティングファームへ。</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
           
         
           
           
           
            
             <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-15">
           		 <a href="<?php echo url_root; ?>interview/inexperience/06/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/06/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.14</p>
                         	<p>株式会社ローランド・ベルガー</p>
                            <p>大宮 隆之氏</p>
                 </div>
                <div class="title_hover">
                       		<p>企業の変曲点に関わることが、自らを成長させる。</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
              
               <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-16">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/05/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/05/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.13</p>
                        <p>株式会社グロービス・キャピタル・パートナーズ</p>
                            <p>今野 穣氏</p>
                 </div>
                <div class="title_hover">
                       		<p>新しい産業を生み出す触媒的装置はベンチャーキャピタルをおいて他にない</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
              
               
           
            
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-17">
            	 <a href="<?php echo url_root; ?>interview/symposium/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/03/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.12</p>
                       <p>プライスウォーターハウスクーパース株式会社</p>
                            <p>田中 基興氏＆野村 泰史氏＆田中 秀樹氏</p>
                 </div>
                <div class="title_hover">
                       		<p>経営者が直面するあらゆる課題に対応し、結果を出し続けるプロフェッショナル集団</p>
                </div>
               <div id="gradient_editor"></div>
            </li>
            
               <li class="item" data-groups='["all", "top"]' data-type="top" data-id="id-18">
            	<a href="<?php echo url_root; ?>interview/top/02/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/02/thumb.png" />
                </a>
                   <div class="title_end">
                   <p>Vol.11</p>
                         	<p>アクセンチュア株式会社</p>
							<p>程 近智氏</p>
                  </div>
                  <div class="title_hover">
                     <p>「自己実現のプラットフォーム」としてアクセンチュアを活用せよ！</p>
                 </div>
                 <div id="gradient_editor"></div>
            </li>
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-19">
            	 <a href="<?php echo url_root; ?>interview/symposium/02/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/02/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.10</p>
                       <p>アクセンチュア株式会社</p>
                            <p>Y.W.氏＆D.S.氏</p>
                 </div>
                <div class="title_hover">
                       		<p>アクセンチュアが卓越したバリューを出し続ける秘訣とは？</p>
                </div>
               <div id="gradient_editor"></div>
            </li>
            
            
            
            
               <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-24">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/04/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/04/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.09</p>
                        	<p>株式会社ジェイアイエヌ</p>
                            <p>香川 憲昭氏</p>
                 </div>
                <div class="title_hover">
                       		<p>これまでのキャリアでこだわってきたのは『事業開発』と『成長企業』</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
            
            
              <li class="item" data-groups='["all", "top"]' data-type="top" data-id="id-20">
            	<a href="<?php echo url_root; ?>interview/top/01/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/01/thumb.png" />
                </a>
                   <div class="title_end">
                   <p>Vol.08</p>
                          	<p>プライスウォーターハウスクーパース株式会社</p>
							<p>椎名 茂氏</p>
                  </div>
                  <div class="title_hover">
                     <p>「コンサルティング」と「ディールアドバイザリー」のかけ算で唯一無二の企業改革を実現する</p>
                 </div>
                 <div id="gradient_editor"></div>
            </li>
            
             
             <li class="item" data-groups='["all", "symposium"]' data-type="symposium" data-id="id-21">
            	 <a href="<?php echo url_root; ?>interview/symposium/01/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/symposium/01/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.07</p>
                        	 	<p>プライスウォーターハウスクーパース株式会社</p>
                            <p>阿部 大祐氏＆中内 聡子氏</p>
                 </div>
                <div class="title_hover">
                       		<p>「10年いてもやり尽くした感はまったくない」新しいチャンスが次々に生まれる組織の秘密とは？</p>
                            </div>
               <div id="gradient_editor"></div>
            </li>
            <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-22">
           		 <a href="<?php echo url_root; ?>interview/inexperience/05/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/05/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.06</p>
                        	<p>株式会社ドリームインキュベータ</p>
                            <p>石川 雅仁氏</p>
                 </div>
                <div class="title_hover">
                       		<p>総合商社から起業することを目指してDIへ</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
            <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-23">
           		 <a href="<?php echo url_root; ?>interview/inexperience/04/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/04/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.05</p>
                        		<p>アーサー・D・リトル（ジャパン）株式会社</p>
                            <p>入口 穂高氏</p>
                 </div>
                <div class="title_hover">
                       		<p>「製造業に強い国」という日本人のアイデンティティを取り戻したい</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
           
           
         
            
            
            
              <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-26">
           		 <a href="<?php echo url_root; ?>interview/inexperience/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/03/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.04</p>
                        		<p>株式会社コーポレイトディレクション</p>
                            <p>長尾 行造氏</p>
                 </div>
                <div class="title_hover">
                       		<p>なぜ官僚を辞めたのか？そしてコンサルタントとして目指すものは何か？</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
           
            
           
            <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-25">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/03/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.03</p>
                        	<p>アマゾン ジャパン株式会社</p>
                            <p>渡部 一文氏</p>
                 </div>
                <div class="title_hover">
                       		<p>私がコンサルティングファームで学んだこと、アマゾンのマネジメントで実践していること</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
           
           
           
           
           
           
          
          
        
            <li class="item" data-groups='["all", "consultant-post"]' data-type="consultant-post" data-id="id-27">
           		 <a href="<?php echo url_root; ?>interview/consultant-post/01/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/01/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.02</p>
                        	<p>シティック・キャピタル・パートナーズ・<br>ジャパン・リミテッド</p>
                            <p>中野 宏信氏</p>
                 </div>
                <div class="title_hover">
                       		<p>コンサルティング会社で経営を学び経営者、投資ファンド代表へキャリアアップ</p>
                </div>
               <div id="gradient_editor"></div>
           	</li> 
       
       
        <li class="item" data-groups='["all", "inexperience"]' data-type="inexperience" data-id="id-28">
           		 <a href="<?php echo url_root; ?>interview/inexperience/01/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/01/thumb.png" />
                 </a>
                 <div class="title_end">
                 <p>Vol.01</p>
                        <p>ボストンコンサルティンググループ</p>
                            <p>梶 沙瑤子氏</p>
                 </div>
                <div class="title_hover">
                       		<p>金融業界からコンサルタントへ転身</p>
                </div>
               <div id="gradient_editor"></div>
           </li> 
       
       </ul>
  </div><!--data_interview_content-->
    
    



