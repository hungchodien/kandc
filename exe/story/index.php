<script type="text/javascript">
	jQuery( document ).ready(function($) {
		load_papge_story();
		$(window).on('load resize', function () {
			load_papge_story();
		});
		
		
		$(".hover_change").hover(function(){
			$(this).attr("src", function(index, attr){
				return attr.replace("_1.png", "_2.png");
			});
		}, function(){
			$(this).attr("src", function(index, attr){
				return attr.replace("_2.png", "_1.png");
			});
		});
		
	});
function load_papge_story(){
		var height_window=$(window).height();
			var height_header=$("header#masthead").height();
			
			
			var height_main=height_window-height_header-20;
			var isPC = window.matchMedia("only screen and (min-width: 980px)");
			
			var height_breadcrumb_top=$("#breadcrumb_top").height();
			
			var height_check_full=height_main-height_breadcrumb_top;
			
			
			
				if (isPC.matches)
				{
					$(".story_content_table").css({
						"height":+height_check_full
					});
				}
				
	}
</script>
<div class="breadcrumb" id="breadcrumb_top">
		 <ul class="clear">
                <li><a href="<?php echo url_root; ?>">クライス＆カンパニー </a></li>
                <li> > </li>
                <li><a href="<?php echo url_root; ?>story/">実績・リアルストーリー</a></li>
                
            </ul>
</div><!--breadcrumb_top-->
<div class="page_index_story clear">
     
     <div class="story_content_table clear">
 		<div class="clear story_all">
     <div class="clear story_description">
            <div class="title_description_story clear"><img src="<?php echo url_root; ?>img/story/title_story.png" alt="実績・リアルストーリー"/></div>
             <div class="title_description_story clear">
              <img class="pc_img" src="<?php echo url_root; ?>img/story/sub_title_story.png" alt="実際にお手伝いさせて頂いた事例のご紹介"/>
              <img class="mobile_img" src="<?php echo url_root; ?>img/story/sub_title_story_mobile.png" alt="実際にお手伝いさせて頂いた事例のご紹介"/>
             </div>
             
            <div class="content_description_story clear">
                <p>当社にエントリーいただいた方々がどのように転身・転職をされていらっしゃるのか、実際にお手伝いさせていただいたケース（実績）をご紹介いたします。<span style="color:#6C6B6B">尚、掲載内容は事実に基づいた内容になりますが、個人情報の観点から個人、企業が特定されないよう、一部脚色させていただいております。御了承ください。</span></p>
            </div>
     </div>
     
    <div class="clear content_inc story_page story_index">
        <!--<div class="story-icon"><img src="<?php echo url_root; ?>img/story/story-icon.png" /></div>-->
       
        <div class="story_one story_item_bg l">
          <a class="story_item1 view" href="<?php echo url_root; ?>story/vol04/">
                    <img class="hover_change" id="icon_thumb_fix4" src="<?php echo url_root; ?>img/story/vol04_thumb_1.png" alt="[VOL.04]外資系メーカーの経営企画部門責任者から技術ベンチャーのCFOへ　 O氏 50歳 テクノロジーベンチャーでのCFOポジション [2015年実績]　外資系企業で多くの成果をだされてきたO氏。50代に入り、安定志向はありつつも本音では、新しいことへのチャレンジを希望。アグレッシブにベンチャーに挑戦し、みごと転身（転職）を果たし、現在では自分よりも若い経営者を支えるポジションで活躍中。" />
             </a>
        
        
            	
                
         </div><!--story_one-->
        <div class="story_two story_item_bg r">
        <a class="story_item2 view" href="<?php echo url_root; ?>story/vol03/">
                    <img class="hover_change" id="icon_thumb_fix3" src="<?php echo url_root; ?>img/story/vol03_thumb_1.png" alt="[VOL.03]VIPクラスにふさわしいポジションを顕在化させ事業の強化に貢献　Z氏 44歳 上場企業での関連子会社代表ポジション [2015年実績]　IT系日本法人社長であったZ氏。海外への栄転の話が持ち上がり、日本での勤務を希望していたため、転職を決意するも、水面下での転職活動は困難を極める。そこで弊社への匿名エントリーからスタートし、上場企業の関連子会社代表のポジションにみごと決定する。"/>
                </a>
            
             
         </div><!--story_two-->
    </div><!--story_page-->
    
     <div class="clear content_inc story_page story_index">
        <!--<div class="story-icon"><img src="<?php echo url_root; ?>img/story/story-icon.png" /></div>-->
       
        <div class="story_one story_item_bg l">
            <a class="story_item1 view" href="<?php echo url_root; ?>story/vol02/">
                    <img class="hover_change" id="icon_thumb_fix2" src="<?php echo url_root; ?>img/story/vol02_thumb_1.png" alt="[VOL.02]上場企業の役員がベンチャーに転身し急成長に貢献するマッチングを実現 Y氏 36歳 インターネット企業での事業開発部長ポジション [2013年実績] 前職で30人規模の会社を成長させ上場を果たし、役員にまで昇進。今後は「もう一度、ベンチャーに入ってその会社を成長させるような仕事をするか、自分で独立か」、との相談でご面談する。 最終的な彼の選択は、ベンチャー企業への転職だった。" />
             </a> 	
                
         </div><!--story_one-->
        <div class="story_two story_item_bg r">
           
            <a class="story_item2 view" href="<?php echo url_root; ?>story/vol01/">
                    <img class="hover_change" id="icon_thumb_fix1" src="<?php echo url_root; ?>img/story/vol01_thumb_1.png" alt="[VOL.01]トップの抽象的なニーズを具体化し、経営統合で活躍できる人材をマッチング X氏 51歳 外資系運輸・物流企業での人事部長ポジション [2011年実績] 大手商社を振り出しに金融機関、外資系メーカーを渡り歩いたのち、50歳直前に会社を退職し、MBA取得のため米国留学へ。経営者の近くで働きたい」との思いからビジネスの世界に復帰を希望し、履歴書上の2年間の空白をものともせず、みごと転身(転職）を果たす。現在はA社の副社長に。"/>
                </a> 
         </div><!--story_two-->
    </div><!--story_page-->
    
    
    </div><!--story_all-->
    </div><!--story_content_table-->
 
 
</div>

 
    
    <div class="breadcrumb clear">
           
             <div id="back_top">
                <a href="#top"><img alt="Page top" src="<?php echo url_root; ?>img/home/page_top.png"/></a>
            </div>
       </div> 
   
 