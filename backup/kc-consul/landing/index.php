<script type="text/javascript">
		$( document ).ready(function() {
			$('.header_menu .nav_menu').remove();
			
			 $( window ).load(function() {	
				$(".header_menu").append("<div class='clear appen_header'><div class='groupto_header clear'><div class='r txt_header_top_land l_header_top'><img src='<?php echo url_root; ?>img/landing/head-title-kreis.png' alt='業界出身のキャリアコンサルタントがあなたのキャリアを共に考え、専任でサポートします。'/></div><div class='l'><img src='<?php echo url_root; ?>img/landing/head-title-bg-kreis.png'/></div><div class='tbl_header_v'><a href='<?php echo url_root; ?>entry_easy/?entry_id=1014585' target='_blank' class='tbl_img_header'></a></div></div></div>");
			 });
			 
			 $("#container").css({"padding":"0","margin":"0","width":"100%"});
			  $(".header_menu").css({"border":"none"});
			 
			 	$('a.features_item1').click(function () {
					$('body,html').animate({
					scrollTop: $("#features1_content").offset().top
					}, 800);
					$(this).addClass("active");
					return false; 
					
				}); 
				
				$('a.features_item2').click(function () {
					$('body,html').animate({
					scrollTop: $("#features2_content").offset().top
					}, 800);
					$(this).addClass("active");
					return false; 
					
				}); 
				
				$('a.features_item3').click(function () {
					$('body,html').animate({
					scrollTop: $("#features3_content").offset().top
					}, 800);
					$(this).addClass("active");
					return false; 
				});
			   $('#back-top a').click(function () {
				$('body,html').animate({
				scrollTop: 0
				}, 800);
				return false;
				}); 
			 
		});
</script>

<div class="content_landing clear">
	<div class="group_features clear">
		<div class="features_item">
			<ul>
				<li><a class="features_item1" href="javscript:void(0);"></a></li>
				<li><a class="features_item2" href="javscript:void(0);"></a></li>
				<li><a class="features_item3" href="javscript:void(0);"></a></li>
			</ul>
			
		</div>
	</div><!--End group_features-->
	
	<div id="features1_content" class="features_content features_content1 clear">
		<div id="features1" class="clear">
			<div class="img_icon clear"><img src="<?php echo url_root; ?>img/landing/features1-title-kreis.png" alt="コンサル業界に精通した業界出身のキャリアコンサルタントによるサポート"/></div>
			<div class="txt_feature p_feature_730 clear">
			コンサルティングファーム出身のキャリアコンサルタントが面談～入社後サポートまで専任で担当いたします。業界経験者だからこそ、コンサルタントの職務内容はもちろん、働く環境やお気持ちを深く理解しています。コンサルタントの次のキャリアは多岐に渡りますが、レイヤーが上がればコンフィデンシャルな案件も多く、『縁』と『タイミング』が非常に重要になってきます。個人のネットワークでは情報量も限られます。そのような状況を理解した上で、中長期で一緒にキャリアを考えるパートナーとしてサポートいたします。</div>
            
            
			<div class="ct_feature1 clear">
				<div class="l_feature"></div>
				<div class="r_feature clear">
						<div class="t1_img clear">
							<a href="<?php echo url_root; ?>career-consultant.html" target="_blank"><img src="<?php echo url_root; ?>img/landing/features1-name-irie-kreis.png" alt="シニアコンサルタント 入江 祥之"/></a>
						</div>
						<div class="t2_img clear">
							<img src="<?php echo url_root; ?>img/landing/features1-info-irie-kreis.png" alt="キャリアコンサルタント歴9年　野村総合研究所出身"/>
						</div>
						<div class="clear txt_feature_file">
							コンサル出身者の方々は、ご自身で想定されている以上に様々なキャリアの可能性がございます。ご自身の価値観、人生観等をお聞かせ頂いた上で、共に今後のキャリアを考えていければと思っております。また、コンサル未経験の方には、コンサル業界は実態が見えづらく傍から理解するのが難しいと思いますが、我々はその不透明な部分を解明し、コンサルタントの実像、中長期的なキャリアの魅力等を分かりやすくお伝えできればと思っております。自分自身が業界経験者だからこそ、お気持ちを理解した上で、キャリアパートナーとしてお付き合いできればと考えています。
						</div>
				</div>
			</div><!--End ct_feature1-->
			
			
			<div class="ct_feature2 clear">
				<div class="l_feature"></div>
				<div class="r_feature clear">
						<div class="t1_img clear">
							<a href="<?php echo url_root; ?>career-consultant.html" target="_blank"><img src="<?php echo url_root; ?>img/landing/features1-name-nagata-kreis.png" alt="チーフコンサルタント 永田 憲章"/></a>
						</div>
						<div class="t2_img clear">
							<img src="<?php echo url_root; ?>img/landing/features1-info-nagata-kreis.png" alt="キャリアコンサルタント歴4年　アクセンチュア出身"/>
						</div>
						<div class="clear txt_feature_file">
							これまで、コンサルタントを目指されている方／コンサルタントの次のキャリアを検討されている方の転職を数多くご支援させていただいております。私は『3年で10年分の成長ができる』と考え、アクセンチュアへ入社しました。コンサルタントとしての仕事を通じて得られた経験や魅力溢れる方々との出会いは一生の財産と感じており、コンサルティングファームで得られる様々な魅力をお伝えいたします。また、現役コンサルタントの方も是非お声がけ下さい。転職後に活躍されているコンサルタントの方が、将来のキャリアをどのように考え、何を軸に転職を決断されたかなどをお伝えいたしますので、それらを踏まえて、将来のキャリアを一緒に考えさせていただければ幸いです。
						</div>
				</div>
			</div><!--End ct_feature1-->
			
			<div class="tbl_end_feature1"><a href="<?php echo url_root; ?>entry_easy/?entry_id=1014585" target="_blank">コンサル業界出身のキャリアコンサルタントに相談する</a>
				</div><!--End tbl_end_feature1-->

			
		</div>
	</div><!--End features_content1-->
	
	<!--Begin features_content2 *****************************************************************-->
	<div id="features2_content" class="features_content features_content2 clear">
		<div class="clear bg_f2">
			<div class="feature_icon_2 mr_auto clear"><img src="<?php echo url_root; ?>img/landing/features2-title-kreis.png" alt="二十年以上の人材紹介事業で積み重ねた顧客との信頼と実績"/></div>
			<div class="clear mr_auto_730 in_img">
			<div class="clear">
				<p>弊社は創業以来、コンサルティング業界を中心にサービスを展開しております。長期にわたってお付き合いのある企業が多く信頼関係が構築できているため、企業からは戦略面から、組織・採用の相談を受けることが多いです。そのため具体的な採用案件がない場合でも、企業の経営課題を解決できる強みをお持ちの方を、推薦することもあります。</p>
				<p>また、企業の情報、社風、面接対策など、企業を理解しているからこそ通常 WEB には掲載されないような情報をお伝えすることができます。企業との長期的なお付き合いの中で築き上げた信頼関係があるからこそできるサポートだと考えています。</p>
			</div>
			</div>
		</div>
		
		<div class="mr_auto clear bg_f">
			<h5 class="note_feature2">
				大手コンサルティングファーム、事業会社に対し、普段メディアにはあまり出られない方へも単独インタビューを行っています。
			</h5>
		</div><!--End mr_auto-->
		
		<div class="clear bg_b8 ">
			<div class="mr_auto feature_icon_3 clear">
				<a href="<?php echo url_root; ?>interview/top/02/" target="_blank">
				<img src="<?php echo url_root; ?>img/landing/features2-interview1-kreis.png" alt="「自己実現のプラットフォーム」としてアクセンチュアを活用せよ！アクセンチュア株式会社 代表取締役社長 程 近智氏"/>
				</a>
			</div>
		</div><!--End bg_b8-->
		
		<div class="clear bg_38 ">
			<div class="mr_auto feature_icon_3 clear">
				<a href="<?php echo url_root; ?>interview/top/01/" target="_blank">
				<img src="<?php echo url_root; ?>img/landing/features2-interview2-kreis.png" alt="「コンサルティング」と「ディールアドバイザリー」のかけ算で唯一無二の企業改革を実現する プライスウォーターハウスクーパース株式会社 代表取締役社長 椎名 茂氏"/>
				</a>
			</div>
		</div><!--End bg_b38-->
		 
		
		
		 <div class="clear bg_ea ">
			<div class="mr_auto feature_icon_3 clear">
				<a href="<?php echo url_root; ?>interview/consultant-post/01/" target="_blank">
				<img src="<?php echo url_root; ?>img/landing/features2-interview4-kreis.png" alt="コンサルティング会社で経営を学び経営者、投資ファンド代表へキャリアアップ シティック・キャピタル・パートナーズ・ジャパン・リミテッド日本代表 中野 宏信氏" />
				</a>
			</div>
		</div><!--End bg_ea-->
		
		<div class="clear bg_f2">
			<div class="mr_auto feature_icon_2 clear pd_tb_30">
				<a class="tbl_feature2" href="<?php echo url_root; ?>entry_easy/?entry_id=1014585" target="_blank">コンサルタントの転職・ポストコンサルのキャリアについてもっと知りたい</a>
			</div>
		</div><!--End bg_ea-->
		
		
	</div><!--End features_content2-->
	
	<!--Begin features_content3 *****************************************************************-->
	<div id="features3_content" class="features_content features_content3 clear">
		<div class="clear bg_f mr_auto_730 pd_feature3">
			<div class="img_feature3 clear">
				<img src="<?php echo url_root; ?>img/landing/features3-title-kreis.png" alt="グローバル公認のキャリアカウンセリング資格保有者によるキャリア相談"/>
			</div>
			<div class="clear feature3_txt">
				<p>「コンサルティング力」を強みにしている人材紹介会社はたくさんありますが、私たちは「コンサルティング力の向上」を事業の最優先課題として位置づけ、積極的に取り組んできています。コンサルタントが米国 CCE 認定 GCDF（キャリアカウンセラー）資格の取得に励むのもこうした取り組みの一つです。<br />特にリーダー以上の方のサポートする上では、私たち自身も幅広い知識とスキルが要求されます。それにお応えできるよう、弊社では年間 120 時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています。単なる情報と情報のマッチングではなく、私たちが介入することによって成功へのお手伝いができればと思っています。</p>
			</div>
			<div class="clear note_feature3">
				<h3>※GCDF 資格とは</h3>
				<h6>米国 CCE.INC. が認定しているキャリアカウンセラー資格です。キャリアカウンセラーに必要な幅広い知識と実践的なスキルを身につけるため、120時間にも及ぶトレーニングプログラムを受講し、試験（筆記・実技）に合格すると資格が取得できます。</h6>
			</div>
		</div><!--End mr_auto_730-->
		<div class="clear bg_wood">
			<div class="mr_auto_730 clear pd_tb_20 ">
				<div class="w48 l">
					<img src="<?php echo url_root; ?>img/landing/features3-gcdf-irie-kreis.png" alt="シニアコンサルタント入江 祥之　キャリアコンサルタント歴9年　野村総合研究所出身"/>
				</div>
				<div class="w48 r">
					<img src="<?php echo url_root; ?>img/landing/features3-gcdf-nagata-kreis.png" alt="チーフコンサルタント永田 憲章　キャリアコンサルタント歴4年　アクセンチュア出身"/>
				
				</div>
			</div>
		
		</div><!--End bg_wood-->
		
		<div class="clear bg_f">
			<div class="mr_auto feature_icon_2 clear pd_tb_30">
				<a class="tbl_feature3" href="<?php echo url_root; ?>entry_easy/?entry_id=1014585" target="_blank">コンサルタントのキャリアパスや転職市場に関して聞きたい</a>
			</div>
		
		</div><!--End bg_f-->
		
		
	</div><!--End features_content3-->
	<!--Begin features_massage 4 *****************************************************************-->
	 <div id="massage_content" class="features_content features_massage clear">
	 		<div class="bg_f2 clear">
				<div class="clear mr_auto_730">
					<div class="clear"><img src="<?php echo url_root; ?>img/landing/message-title-kreis.png" alt="コンサルタントのキャリアを共に考えられるパートナーでありたい"/></div>
					<div class="clear measse_txt_excerpt">
						<p>
						コンサルタントの活躍の場は益々多様化してきています。近年、成長企業においてコンサル出身者がキーマンとして事業をドライブしている事例を沢山聞くようになりました。
						</p>
					</div>
					<div class="clear measse_txt_content">
						<p>
						職種も経営企画、事業開発、投資、マーケティング、人事、財務など、専門分野は様々です。また民間企業に留まらず、政治家、大学教授、NPO 法人などにも活躍の場を広げています。終身雇用の終焉と言われて久しいこの時代に、定年まで安泰と確信を持って言える企業はどこにもありません。キャリアの安定とは、どこにいっても通用する専門スキルを持つことです。日本でもリストラが一般的になりつつあり、安定志向が強まっている傾向もありますが、有能な方にこそ、高い志を持って次世代のリーダーになっていただきたい。コンサルティング経験を積むことで、組織に依存することなく、自身の望むキャリアを手に入れる可能性も高まると感じています。
						</p>
						<p>
						コンサルタントの次のキャリアは多岐に渡りますが、レイヤーが上がればコンフィデンシャルな案件も多く、『縁』と『タイミング』が非常に重要になってきます。個人のネットワークでは情報量も限られます。コンサル経験者の増加に伴い、企業側のジャッジも厳しくなってきております。このような背景から、コンサルタントの転職活動は様々な要素が絡み合い、複雑化してきていると思います。また、コンサルタントの方々は仕事に費やす時間が長いこともあり、ご自身のキャリアに向き合う機会が少ないと感じています。我々は、一過性ではなく、中長期で共にキャリアを考えられるパートナーでありたいと思っております。</p>
					</div>
					
				</div>
				
				<div class="clear mr_auto feature_icon_2 pd_tb_30">
					<a class="tbl_massage" href="<?php echo url_root; ?>entry_easy/?entry_id=1014585" target="_blank">エントリー コンサル業界出身のコンサルタントに相談する</a>
				</div>
			</div><!--End bg_f2-->
	 </div><!--End features_massage-->
	 
</div>

<div class="mr_auto clear scroll_top_yes postion_rl">
	<div id="back-top" class="scroll_footer_icon" style="display: block;">
		<a href="#top">
			<img src="<?php echo url_root; ?>img/landing/go-top.png"  alt="ページの先頭に戻る"/>
		</a>
  </div>
</div>


