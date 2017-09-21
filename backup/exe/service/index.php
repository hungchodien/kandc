<script type="text/javascript">
	jQuery( document ).ready(function($) {
		$(window).on('load resize', function () {
		var height_window=$(window).outerHeight( true );
		var width_window=$(window).width();
		var height_bg_company=$(".bg_company_img").outerHeight(true);
		var height_title_company=$("#title_cp_top").height();
		//var isFix=window.matchMedia("only screen and (max-width: 930px)");
			if (width_window>930)
			{
				
				$(".title_company_top").css({
						"left":(width_window-930)/2,
						"top":(height_bg_company-height_title_company)/2
					});
				
			}
			else
			{
				//alert("<930px");
				$(".title_company_top").css({
						"left":"20px",
						"top":(height_bg_company-height_title_company)/2
					});
				
			}
		});
	});
</script>
<div class="breadcrumb" id="breadcrumb_top">
		<ul class="clear">
        	<li><a href="<?php echo url_root; ?>">クライス＆カンパニー </a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>service.html">サービス</a></li>
        </ul>
</div><!--breadcrumb_top-->

<div class="clear content_inc service_bg">
	<div class="bg_company_img clear">
    	<img id="bg_service" class="img_pc" src="<?php echo url_root; ?>img/service/main_title.png" alt="クライス＆カンパニーEXECUTIVEチームがお手伝いします。"/>
        <img id="bg_service" class="img_mobile" src="<?php echo url_root; ?>img/service/main_title_mobile.png" alt="クライス＆カンパニーEXECUTIVEチームがお手伝いします。"/>
    </div>
    <div class="group_company clear">
    
    
    	<div class="clear content_company content_service">
                <div class="clear description_company">
                    <p>私たちは、エグゼクティブポジション（社長、取締役、社外取締役、執行役員、部門責任者）での転身（転職）をお考えの方々のお手伝いをさせていただいています。私たちの「ヘッドハンターのリスト」にエントリーいただきますと、当社とお付き合いいただいております優良企業からいただくコンフィデンシャルなオファーを元に、私たちからお声掛けさせていただきます。今すぐ転身（転職）をお考えの方だけでなく、「今後、転身（転職）を考えるときが来るかもしれない・・」と漠然と思われているようなコンディションの方々も、ご自身にとってベストなタイミングで最高のオファーを手に入れるためには、早めに動かれることをおすすめします。</p>
                </div><!--description_company-->
        </div><!--content_service-->
        
        <article class="service_content_wrap clear">
         <h3 class="section_title"><img src="<?php echo url_root; ?>img/service/sub_title_entry.png" alt="エントリー方法"></h3>
         <p>当社の「ヘッドハンターのリスト」にエントリーいただく方法はWEBサイトと電話の２通りです</p>
        </article>
        
         <article class="service_content_wrap clear">
         <div class="section_txt">
         <div class="progress_step progress_step1">
         	<h4>WEBでエントリー</h4>
         	<p>これまでのご経歴がわかる書類をお持ちでいらっしゃいましたら、こちらのサイトからエントリーください。尚、書類をお持ちでいらっしゃらなくても、エントリーフォームの手順に従ってご入力いただけましたら、あらためてこちらからご連絡させていただきます。</p>
            <p class="note_service">※WEBサイトよりエントリーいただきましたら、後日、 EXECUTIVEチームからお電話させていただきます。</p>
            <div class="clear tbl_service">
            	<a href="<?php echo url_root; ?>entry.html" class="r"><img src="<?php echo url_root; ?>img/service/button_entry.png" alt="エントリーはこちら"></a>
            </div>
            </div>
            
            <div class="progress_step progress_step2 progress_last_step">
            <h4>電話でエントリー</h4>
            <p>書類を持ち合わせていらっしゃらないなど、WEBサイトにご入力するよりもお電話の方がよろしい方は、お時間のあるときにお電話ください。EXECUTIVEチームのコンサルタントが直接お話をお伺いさせていただきます。</p>
            <div class="clear tbl_service_tel">
             	<span>
            	<img src="<?php echo url_root; ?>img/service/team_tel.png" alt="EXECUTIVEチーム 03-5733-2684">
                </span>
            </div>
            </div>
            
            </div>
        </article>
        
         
         
        <article class="service_content_wrap clear">
        	<h3 class="section_title"><img src="<?php echo url_root; ?>img/service/sub_title_process.png" alt="エントリーしたあとの流れ" /></h3>
        	<div class="section_clear pregress_content clear">
                <div class="section_txt">
                    <div class="progress_step progress_step1">
                    <h4>エントリー</h4>
                    <p></p>
                    </div>
                    <div class="progress_step progress_step2">
                    <h4>ご面談</h4>
                    <p>エントリーいただきましたら、ご希望に応じてご面談をさせていただきます。</p>
                    </div>
                    <div class="progress_step progress_step3">
                    <h4>お声掛け（スカウト）</h4>
                    <p>ご希望の条件にマッチしたポジション情報が入ってきたタイミングでお声がけさせていただきます。</p>
                    </div>
                    <div class="progress_step progress_step4">
                    <h4>スカウトに対してのご返答</h4>
                    <p>お声掛けさせていただいたポジション情報に対してのご返答は、「もっと詳しく聞きたい」「あまり興味が持てない」「いまはまだ考えられない」など、ご遠慮なく正直なお気持ちをお聞かせください。ご興味をお持ちいただけるようでしたら、さらに詳しいお話をさせていただきます。</p>
                    </div>
                    <div class="progress_step progress_step5">
                    <h4>先方とのご面談（面接）をセット</h4>
                    <p>先方企業とのご面談（面接）の日程を調整させていただきます。</p>
                    </div>
                    <div class="progress_step progress_step6 progress_last_step">
                    <h4>内定（条件交渉＆退職準備）</h4>
                    <p>直接交渉しづらい給与の条件、入社日などの処遇面を中心に事前にお伺いしていたご希望が叶うよう、私たちが企業との交渉を進めます。</p>
                    </div>
                    <div class="clear tbl_service">
            	<a href="<?php echo url_root; ?>entry.html" class="r"><img src="<?php echo url_root; ?>img/service/button_entry.png" alt="エントリーはこちら"></a>
            </div>
                </div>
            </div>
        </article>
    </div>
	
    
    <div class="breadcrumb clear">

   		
        
        <div id="back_top">
    		<a href="#top"><img alt="Page TOP" src="<?php echo url_root; ?>img/home/page_top.png"></a>
		</div>
   </div>
   
</div>