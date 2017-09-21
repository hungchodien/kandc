<?php
@include('inc/header.php');
@include('../Lib/_init.php');
@include('../config.php');
if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
}
?>
<div id="top_banner">
    <div id="top_banner_inside" class="inside">
    <div id="top_txt">
    <p id="main_txt"><img title="" alt="プロにキャリアを相談しませんか？30代だからこそ輝ける環境をご提案します。" src="<?php echo url_root;?>img/main-text.png" /></p>
    <p id="top_entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry-small.png" /></a></p>
    </div>
    <div id="top_pic"><img title="" alt="30代の転職ならクライス＆カンパニー" src="<?php echo url_root;?>img/kreis-30-consult-main.png" /></div>
    </div>
</div>
<div class="features_btns">
<ul class="f_btns inside clear">
<li class="f1_btn"><a href="#"><img title="" alt="特徴1.30代のキャリアサポート実績が豊富" src="<?php echo url_root;?>img/button-features01.png" /></a></li>
<li class="f2_btn"><a href="#"><img title="" alt="特徴2.経験豊富なコンサルタントが専任でサポート" src="<?php echo url_root;?>img/button-features02.png" /></a></li>
<li class="f3_btn"><a href="#"><img title="" alt="特徴3.シニア・エグゼポジションのエクスクルーシブ案件が豊富" src="<?php echo url_root;?>img/button-features03.png" /></a></li>
</ul>
</div>

<div id="wrapper" class="clear">
  <div class="inside">
  <div class="content_consultant">
  <div class="main_title">
  <h1><img title="" alt="私たちは、30代の転職を成功に導きます。" src="<?php echo url_root;?>img/main-title.png" /></h1>
  <h2><img title="" alt="コンサルタント歴が長く、業界に精通したコンサルタントがサポートします。" src="<?php echo url_root;?>img/sub-title.png" /></h2>
  </div>
  
  <div id="consultants">
  <div class="consultant_block clear">
  <div class="consultant_tmb"><img title="" alt="エグゼクティブコンサルタント 岡田 麗" src="<?php echo url_root;?>img/consultant-okada.png" /></div>
  <div class="consultant_txt">
  <div class="consultant_arrow"><img title="" alt="矢印" src="<?php echo url_root;?>img/consultant_arrow.png" /></div>
  <h1><img title="" alt="仕事」だけではなく「人生全体」をキャリアと捉え、皆さまの転職サポートをさせていただきます。" src="<?php echo url_root;?>img/okada-title.png" /></h1>
  <p>現在まで4000名以上の方の転職サポートをさせていただき、企業のコアなポジションを500件以上成約させて参りました。お付き合いさせていただいた転職希望者の多くは、30代―40代のエグゼクティブ、シニア、ミドルリーダー層です。<br />
ご家庭やプライベート、地域、諸々皆さまにはいくつかの役割があるでしょう。その中でも「仕事」が自分の人生の中でとても重要とお考えの方と一緒に、更に力を発揮できる環境を考え、充実した生活を送るお手伝いができればと思っています。</p>
  </div>
  </div>
  
  <div class="consultant_block clear">
  <div class="consultant_txt2">
  <div class="consultant_arrow2"><img title="矢印" alt="矢印" src="<?php echo url_root;?>img/consultant_arrow2.png" /></div>
  <h1><img title="" alt="貴方の“想い”を大切に、実現できる方法を一緒に考え、新たなフィールドをご提案いたします。" src="<?php echo url_root;?>img/hando-title.png" /></h1>
  <p>私は、IT・web・コンサルティング業界の転職サポートを得意としています。<br />
応募要件で明確なスキルが記載されやすい職種ですが、単なるスキルマッチではなく「可能性」「気付き」を発見いただけるようなコンサルティングを強く心がけております。<br />
お話する中で、お一人で考えていては気がつかないような貴殿の可能性や今後の可能性、新たなキャリアパスをご提案できれば幸いです。</p>
  </div>
  <div class="consultant_tmb2"><img title="" alt="シニアコンサルタント 半藤 剛" src="<?php echo url_root;?>img/consultant-hando.png" /></div>
  </div>
  
  <div class="consultant_block clear">
  <div class="consultant_tmb" style="margin-top:-20px;"><img title="" alt="シニアコンサルタント 松尾 匡起" src="<?php echo url_root;?>img/consultant-matsuo.png" /></div>
  <div class="consultant_txt">
  <div class="consultant_arrow"><img title="矢印" alt="矢印" src="<?php echo url_root;?>img/consultant_arrow.png" /></div>
  <h1><img title="" alt="「エージェントなんてどこも一緒」とお考えの方の期待を越えるサービスを提供したいと考えています。" src="<?php echo url_root;?>img/matsuo-title.png" /></h1>
  <p>企画系職（経営企画・事業企画・マーケティング）、コンサルタント（戦略系・会計系・IT系）の特にミドルマネジメント層を得意としています。<br />
30代になるとスキルだけではなく、カルチャー、理念等へのフィット感も重要な判断軸になると感じています。「自分らしい生き方」、「自分らしく生きるための働き方」、を皆さまと共に日々本気で模索しています。</p>
  </div>
  </div>
  

  
  <div class="entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry.png" /></a></div>
  
  </div><!--end .content_consultant-->
  
  <div id="features01">
  <h1 class="features_title"><img title="" alt="特徴1.30代のキャリアサポート実績が豊富です。" src="<?php echo url_root;?>img/title-features01.png" /></h1>
  <div class="contents">
  <div class="features01_content clear">
  <div class="features01_desc">
  <h2><img title="" alt="決定者の80％が30代以上です！" src="<?php echo url_root;?>img/f01-h2.png" /></h2>
  <h3>「なぜ、30代か？」それは、30代が長いキャリアにおいて一番大切な時期であり、かつ難しいものだからです。</h3>
  <p>30代の方に求められるポジションは、マネージャー候補以上になりますので、当然企業側のジャッジも厳しくなります。プライベートにおいても20代と違って身軽ではないため、多くの方は転職を一人の都合で決断できない状況に置かれています。また、実績と経験を積んでこられた方であれば、次のステージへの希望も高く、条件も複雑です。<br />
単なる情報と情報のマッチングで成功しないのが30代の転職です。そこで私たちが介入することによって成功へのお手伝いができればと思っています。<br /><br />

今後も30代の方を中心に、30歳からさらなる飛躍を求める20代後半の方、そして30代の経験を活かし次のステージをお考えの40代エグゼクティブ層の方まで、30代のキャリアを基点として、キャリアを真剣に考える方々を私たちは支援いたします。</p>
  </div>
  <div class="features01_tmb"><img title="" alt="決定者の80％が30代以上:20代20％・30代62％・40代17％・50代〜1％" src="<?php echo url_root;?>img/f01-graph.png" />
  <p>※2013年10月末から2014年1月末の平均</p>
  </div>
  </div>
  <div class="entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry.png" /></a></div>
  </div>
  
  </div><!--end #features01-->
  
  <div id="features02">
  <h1 class="features_title"><img title="" alt="特徴2.経験豊富なコンサルタントが専任でサポートいたします。" src="<?php echo url_root;?>img/title-features02.png" /></h1>
  <div class="contents">
  <h2 class="features02_h2"><img title="" alt="「GCDF資格の取得」「C&R方式」を実践している優秀なコンサルタントが専任でサポートします！" src="<?php echo url_root;?>img/f02-h2.png" /></h2>
  <p>30代マネージメント層以上の方々をサポートする上で、私たち自身も幅広い知識とスキルが要求されます。それにお応えできるよう、当社では、年間100時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています。<br />
単なる情報と情報のマッチングで成功しないのが30代の転職です。そこで私たちが介入することによって成功へのお手伝いができればと思っています。<br />
また、独自に開発した「キャリアコンサルタントトレーニングプログラム」や、「コーチング研修」などを行い、それらを受講することによって、アセスメント技術の向上や倫理観の確立に努めています。</p>
  <div class="gcdf clear">
  <div class="gcdf_block fl">
  <h3>GCDFとは？</h3>
  <p>私たちは「コンサルティング力の向上」を事業の最優先課題として位置づけ、積極的に取り組んできています。コンサルタントが米国CCE認定GCDF（キャリアカウンセラー）資格の取得に励むのもこうした取り組みの一つです。<br />
GCDF資格とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です。キャリアカウンセラーに必要な幅広い知識と実践的なスキルを身につけるため、120時間にも及ぶトレーニングプログラムを受講し、試験（筆記・実技）に合格すると資格が取得できます。</p>
  </div>
  <div class="gcdf_block fr">
  <h3>C&amp;R方式とは？</h3>
  <p>人材紹介会社では、効率の良さから面談を行うコンサルタントと企業を担当するコンサルタントが別々になっている形態が一般的ですが、当社は、全員がどちらも担当する一人二役のコンサルタントです。それを当社ではC&amp;R方式と呼んでいます。<br />
C&amp;R方式の最大のメリットは、企業のニーズをしっかり把握でき、候補者の方のキャリアや性格もよく知った上で、その方に適した企業を見つけ出すことができますので、ミスマッチも少なく、企業、転職者双方が満足できる確率が高くなります。</p>
  </div>
  </div>
  
  <div class="gcdf_consultant">
  <h2><div style="float:left;"><img src="<?php echo url_root;?>img/icon-gcdf.png"></div> クライス&amp;カンパニーのGCDF資格</h2>
  <ul class="gcdf_certificate clear">
  <li><img title="" alt="GCDF資格:エグゼクティブコンサルタント 岡田 麗" src="<?php echo url_root;?>img/gcdf-okada.png" /></li>
  <li><img title="" alt="GCDF資格:シニアコンサルタント 奈良 元生" src="<?php echo url_root;?>img/gcdf-nara.png" /></li>
  <li><img title="" alt="GCDF資格:シニアコンサルタント 半藤 剛" src="<?php echo url_root;?>img/gcdf-hando.png" /></li>
  <li><img title="" alt="GCDF資格:シニアコンサルタント 松尾 匡起" src="<?php echo url_root;?>img/gcdf-matsuo.png" /></li>
  <li><img title="" alt="GCDF資格:シニアコンサルタント 入江 祥之" src="<?php echo url_root;?>img/gcdf-irie.png" /></li>
  
  <li><img title="" alt="GCDF資格:チーフコンサルタント 武田 直人" src="<?php echo url_root;?>img/gcdf-tanaka.png" /></li>
  <li><img title="" alt="GCDF資格:チーフコンサルタント 永田 憲章" src="<?php echo url_root;?>img/gcdf-nagata.png" /></li>
  </ul>
  </div>
  <div class="entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry.png" /></a></div>
  
  </div><!--end .contents-->
  </div><!--end #features02-->
  
  <div id="features03">
  <h1 class="features_title"><img title="" alt="特徴3.シニア・エグゼポジションのエクスクルーシブ案件が豊富です。" src="<?php echo url_root;?>img/title-features03.png" /></h1>
  <div class="contents">
  <div class="features01_content clear">
  <div class="features03_tmb"><img title="" alt="公開求人数25％ / 非公開求人数75％" src="<?php echo url_root;?>img/f03-graph.png" />
  <p>※2014年2月28日現在</p>
  </div>
  
  <p class="features03_desc">在籍するコンサルタントはそれぞれ得意分野をもっており、長期にわたり企業とお付き合いするケースが多数あります。<br />
そのため、企業からは戦略面から、組織、採用のご相談を承っているため、エクスクルーシブ案件、非公開求人が多い傾向があります。信頼関係を構築することで採用ニーズが顕在化していない場合でも、経営課題の解決を実現いただける強みをお持ちの方をご推薦させていただく動きができる点も強みです。</p>
  
  </div>
  <div class="entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry.png" /></a></div>
  </div>
  
  </div><!--end #features03-->
  
  <div id="voice">
  <h1 class="features_title"><img title="" alt="ユーザーの声" src="<?php echo url_root;?>img/title-voice.png" /></h1>
  <div class="contents">
  
  <div class="voice_content clear">
  
  <div class="voice_block">
  <div class="voice_icon"><img title="" alt="30歳 男性" src="<?php echo url_root;?>img/icon-voice01.png" /></div>
  <p class="voice_desc">大手出版会社　海外営業</p>
  <p class="voice_arrow"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow.png" /></p>
  <p class="voice_category">web系新興ベンチャー 社長室スタッフ</p>
  <p class="voice_arrow2"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow2.png" /></p>
  <div class="voice_txt">
  <h3>私の想いに共感し、聴き、<br />
話すという対応に<br />
感謝しています</h3>
<p>一般的には、転職先の企業は、前職とは全く異なる業界だと見られると思います。しかし、担当コンサルタントの方は、私が今までやってきた仕事内容を細かく聞いてくださいました。それに基づき、私に最も適切な仕事、また、私が希望する会社・業務を熱心に探してくださいました。<br />
決して簡単ではなく、一筋縄ではいかない打診であったと思いますが、私の想いに共感し、聴き、話すという対応に感謝しています。</p>
  </div>
  </div><!--end .voice_block-->
  
  <div class="voice_block">
  <div class="voice_icon"><img title="" alt="32歳 男性" src="<?php echo url_root;?>img/icon-voice02.png" /></div>
  <p class="voice_desc">戦略コンサルティングファーム コンサルタント</p>
  <p class="voice_arrow"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow.png" /></p>
  <p class="voice_category">運輸・物流企業 経営企画（幹部候補）</p>
  <p class="voice_arrow2"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow2.png" /></p>
  <div class="voice_txt">
  <h3>クオリティの高い<br />
対応に満足しています<br /><br /></h3>
<p>ご紹介いただく案件は、私の希望を汲み取っていただいた上で厳選してくださっていることが嬉しかったです。内定をもらった企業について不安に思った点を相談した時も親身にご対応いただいたことで、私の中でのモヤモヤが取れて入社を決意することができました。他のエージェントとは比較にならないくらいクオリティの高い対応に満足しています。</p>
  </div>
  </div><!--end .voice_block-->
  
  <div class="voice_block last_child">
  <div class="voice_icon"><img title="" alt="35歳 女性" src="<?php echo url_root;?>img/icon-voice03.png" /></div>
  <p class="voice_desc">コンサルタント</p>
  <p class="voice_arrow"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow.png" /></p>
  <p class="voice_category">業務設計コンサルタント</p>
  <p class="voice_arrow2"><img title="" alt="矢印" src="<?php echo url_root;?>img/voice_arrow2.png" /></p>
  <div class="voice_txt">
  <h3>私の潜在的ニーズを<br />
突き止めてくれました<br /><br /></h3>
<p>これまでにお世話になった他社と比較しても、面談は最も話しやすかったです。また、限られた短時間の中で私の情報を良く理解してもらえたと思っています。その理由の１つは、「あなたにとって仕事とは？」のような本質的な内容に関する質疑応答があったからかもしれません。<br />
「数」よりも「質」を大事にした求人案件のご提案に大変満足しています。</p>
  </div>
  </div><!--end .voice_block-->
  
  </div>
  <div class="entry_btn"><a href="#"><img title="" alt="転職支援サービスに申し込む" src="<?php echo url_root;?>img/button-entry.png" /></a></div>
  </div>
  </div><!--end #voice-->
  
  </div><!--end .inside-->
  <div class="features_btns">
<ul class="f_btns inside clear">
<li class="f1_btn"><a href="#"><img title="" alt="特徴1.30代のキャリアサポート実績が豊富" src="<?php echo url_root;?>img/button-features01.png" /></a></li>
<li class="f2_btn"><a href="#"><img title="" alt="特徴2.経験豊富なコンサルタントが専任でサポート" src="<?php echo url_root;?>img/button-features02.png" /></a></li>
<li class="f3_btn"><a href="#"><img title="" alt="特徴3.シニア・エグゼポジションのエクスクルーシブ案件が豊富" src="<?php echo url_root;?>img/button-features03.png" /></a></li>
</ul>
</div>

<div class="inside">
<div id="form">
<h1 class="form_title"><img title="" alt="専任のコンサルタントがエントリー～入社までトータルサポートいたします。無料サービスですのでまずは下記フォームよりお申込みください。" src="<?php echo url_root;?>img/title-form.png" /></h1>

<div class="form_content">

<div id="entry-form" class="entry-form">
<form name="frm_entry_easy" action="confirm.php" method="post" id="submit_form"  enctype="multipart/form-data">
<?php
	if (isset($_GET['entry_id'])) 
	{
?>
	<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $_GET['entry_id']; ?>"/>
<?php
	}
?>

<div class="form-personal-profile">
    <div class="label-personal">個人プロフィール</div>
    <div class="table-personal-profile">
        <table id="name_table">
        
        <tr>
        <td rowspan="2" id="label_name" class="label">お名前</td>
        <td id="label_name2" class="label">漢字<span>(必須）</span></td>
        <td colspan="2" id="table_value_name1">
                <div class="td-content clear">
                        <div class="entry_tab1">姓</div>
                        <div class="entry_tab2"><input type="text" name="text1" id="text1" value="" onBlur="validatetext(this.value, this.id)" onFocus="click_text(this.id)" />
                        <p id="errortext1"></p>
                        </div>
                        <div class="entry_tab1">名</div>
                        <div class="entry_tab2"><input type="text" name="text2" id="text2" value="" onFocus="click_text(this.id)" onBlur="validatetext(this.value, this.id)"/>
                        <p id="errortext2"></p>
                        </div>
                        <div>※全角入力</div>
                    </div>
                    
                </td>
        </tr>
        <tr>
        <td id="label_name3" class="label">カナ<span>(必須）</span></td>
        <td colspan="2" id="table_value_name2">
                <div class="td-content clear">
                        <div class="entry_tab1">セイ</div>
                        <div class="entry_tab2"> <input type="text" name="text3" id="text3" value="" onFocus="click_text(this.id)" onBlur="validatetext(this.value, this.id)"/>
                        <p id="errortext3"></p>
                        </div>
                        <div class="entry_tab1">メイ</div>
                        <div class="entry_tab2"><input type="text" name="text4" id="text4" value="" onFocus="click_text(this.id)" onBlur="validatetext(this.value, this.id)"/>
                        <p id="errortext4"></p>
                        </div>
                        <div> ※全角カナ入力</div>
                    </div>
                </td>
        </tr>
        
        
            
            </table>
            <table>
            <tr>
                <td class="label">
                    <div>生年月日 <span>(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>西暦</div>
                        <div>
                            <select class="selection selection-style" name="select1" id="select1" onFocus="click_text(this.id)" onBlur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $year = 1940;
                                     $end = date("Y");
                                for ($end; $end >= $year; $end--) {
                                    ?>
                                    <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div>年</div>
                        <div>
                            <select class="selection selection-style" name="select2" id="select2" onFocus="click_text(this.id)" onBlur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div> 月</div>
                        <div>
                            <select class="selection selection-style" name="select3" id="select3" onFocus="click_text(this.id)" onBlur="validateSelect(this.value, this.id)">
                                <option value=""> 選択</option>
                                <?php $day = 1;
                                $endDay = 31;
                                for ($day; $day <= $endDay; $day++) {
                                    ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div> 日</div>
                    </div>
                    <div class="select_error td-content clear">
                        <div><span id="errorselect1"></span></div>
                        <div><span id="errorselect2"></span></div>
                        <div><span id="errorselect3"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>都道府県 <span>(必須）</span></div>
                </td>
                
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" name="select4" id="select4" onFocus="click_text(this.id)" onBlur="validateSelect(this.value, this.id)">
                                <option value="">都道府県を選択してください。</option>
                               <option value='北海道' >北海道</option>
                               <option value='青森県' >青森県</option>
                               <option value='岩手県' >岩手県</option>
                               <option value='宮城県' >宮城県</option>
                               <option value='秋田県' >秋田県</option>
                               <option value='山形県' >山形県</option>
                               <option value='福島県' >福島県</option>
                               <option value='茨城県' >茨城県</option>
                               <option value='栃木県' >栃木県</option>
                               <option value='群馬県' >群馬県</option>
                               <option value='埼玉県' >埼玉県</option>
                               <option value='千葉県' >千葉県</option>
                               <option value='東京都' >東京都</option>
                               <option value='神奈川県' >神奈川県</option>
                               <option value='新潟県' >新潟県</option>
                               <option value='富山県' >富山県</option>
                               <option value='石川県' >石川県</option>
                               <option value='福井県' >福井県</option>
                               <option value='山梨県' >山梨県</option>
                               <option value='長野県' >長野県</option>
                               <option value='岐阜県' >岐阜県</option>
                               <option value='静岡県' >静岡県</option>
                               <option value='愛知県' >愛知県</option>
                               <option value='三重県' >三重県</option>
                               <option value='滋賀県' >滋賀県</option>
                               <option value='京都府' >京都府</option>
                               <option value='大阪府' >大阪府</option>
                               <option value='兵庫県' >兵庫県</option>
                               <option value='奈良県' >奈良県</option>
                               <option value='和歌山県' >和歌山県</option>
                               <option value='鳥取県' >鳥取県</option>
                               <option value='島根県' >島根県</option>
                               <option value='岡山県' >岡山県</option>
                               <option value='広島県' >広島県</option>
                               <option value='山口県' >山口県</option>
                               <option value='徳島県' >徳島県</option>
                               <option value='香川県' >香川県</option>
                               <option value='愛媛県' >愛媛県</option>
                               <option value='高知県' >高知県</option>
                               <option value='福岡県' >福岡県</option>
                               <option value='佐賀県' >佐賀県</option>
                               <option value='長崎県' >長崎県</option>
                               <option value='熊本県' >熊本県</option>
                               <option value='大分県' >大分県</option>
                               <option value='宮崎県' >宮崎県</option>
                               <option value='鹿児島県' >鹿児島県</option>
                               <option value='沖縄県' >沖縄県</option>
                               <option value='海外' >海外</option>
                            </select>
                        </div>
                        <div><span id="errorselect4"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>電話番号 <span>(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>
                            <input type="text" name="text5" id="text5" value="" onBlur="validatetext(this.value, this.id)" onFocus="click_text(this.id)"/> -
                        </div>
                        <div>
                            <input type="text" name="text6" id="text6" value="" onFocus="click_text(this.id)" onBlur="validatetext(this.value, this.id)"/> -
                        </div>
                        <div>
                            <input type="text" name="text7" id="text7" value="" onFocus="click_text(this.id)" onBlur="validatetext(this.value, this.id)"/>
                        </div>
                        <div>※半角入力</div>
                    </div>
                    <div class="phone_error td-content clear">
                        <div><span id="errortext5"></span></div>
                        <div><span id="errortext6"></span></div>
                        <div><span id="errortext7"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>メールアドレス <span>(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div>
                            <input class="text-personal-400" type="text" name="text8" id="text8" onFocus="click_text(this.id)"
                                    value="" onBlur="IsEmail(this.value, this.id)"/>
                        </div>
                        <div style="margin-left: 60px"><span id="errortext8"></span></div>
                        <br/>

                        <div>
                            <input class="text-personal-400" type="text" name="text9" id="text9" value="" onFocus="click_text(this.id)"
                                    onblur="confirm_Email(document.forms['submit_form']['text8'].value, this.value, this.id)"/>
                        </div>
                        <div style="width: 50px ;  margin: 5px 0 10px 10px">※確認用</div>

                        <div><span id="errortext9"></span></div>
                    </div>
                    <div style="margin: 10px 0 0 10px" class="clear">
                        <p>メールでのご連絡について</p>

                        <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。
                        </p>

                        <p>ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</div>


<!--<div class="form-personal-profile">
    <div class="label-personal">最終学歴について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input style="width: 500px;" type="text" name="text10" id="text10" value="" onFocus="click_text(this.id)"
                                    onblur="validatetext(this.value, this.id)"/></div>
                        <div><span id="errortext10"></span></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>-->


<div class="form-personal-profile">
    <div class="label-personal">経歴・履歴書添付</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div> 現職区分<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input type="radio" checked name="radio1" id="radio1" value="現職中"/>現職中</div>
                        <div><input type="radio" name="radio1" id="radio2" value="退職予定"/>退職予定</div>
                        <div><input type="radio" name="radio1" id="radio3" value="離職中"/>離職中</div>
                    </div>
                    <div class="td-content clear">
                        <div><span id="errorrad1"></span></div>
                    </div>
                </td>
            </tr>
            <!--<tr>
                <td class="label">
                    <div>現在の年収</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input class="text-personal-100" type="text" name="text11" id="text11" value="" onFocus="click_text(this.id)" /></div>
                        <div>万円</div>
                    </div>
                </td>
            </tr>-->
            <tr>
                <td class="label">
                    <div>職種<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 250px" name="select5" id="select5" onFocus="click_text(this.id)" onBlur="validateSelect(this.value, this.id)">
                                <option value="">下記から選択してください</option>
                                <option value="コンサルタント">コンサルタント</option>
                                <option value="コンサルタント（IT）">コンサルタント（IT）</option>
                                <option value="ITハード系エンジニア">ITハード系エンジニア</option>
                                <option value="ソフトウェアエンジニア">ソフトウェアエンジニア</option>
                                <option value="WEB・モバイル関連">WEB・モバイル関連</option>
                                <option value="その他ソフトウェア関連">その他ソフトウェア関連</option>
                                <option value="機械・メカトロニクスエンジニア">機械・メカトロニクスエンジニア</option>
                                <option value="電気・電子・半導体エンジニア">電気・電子・半導体エンジニア</option>
                                <option value="化学系">化学系</option>
                                <option value="バイオ・メディカル系">バイオ・メディカル系</option>
                                <option value="経営企画・事業企画">経営企画・事業企画</option>
                                <option value="営業企画">営業企画</option>
                                <option value="業務企画">業務企画</option>
                                <option value="商品・サービス企画">商品・サービス企画</option>
                                <option value="IR">IR</option>
                                <option value="広報">広報</option>
                                <option value="マーケティング">マーケティング</option>
                                <option value="総務">総務</option>
                                <option value="法務">法務</option>
                                <option value="人事">人事</option>
                                <option value="経理・財務・会計">経理・財務・会計</option>
                                <option value="秘書">秘書</option>
                                <option value="事務・庶務">事務・庶務</option>
                                <option value="営業">営業</option>
                                <option value="販売・サービス">販売・サービス</option>
                                <option value="金融関連職">金融関連職</option>
                                <option value="建設・建築・土木系">建設・建築・土木系</option>
                                <option value="インストラクター">インストラクター</option>
                                <option value="トップマネジメント">トップマネジメント</option>
                                <option value="ロジスティクス・購買関連">ロジスティクス・購買関連</option>
                                <option value="エスタブリッシュメント職">エスタブリッシュメント職</option>
                                <option value="クリエイティブ系">クリエイティブ系</option>
                                <option value="デザイナー">デザイナー</option>
                                <option value="コールセンター">コールセンター</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div><span id="errorselect5"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>経験社数<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <input class="text-personal-100" type="text" onFocus="click_text(this.id)" name="text12" id="text12" value=""
                                    onblur="validatetext(this.value, this.id)"/>
                        </div>
                        <div>社</div>
                        <div><span id="errortext12"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>希望勤務地<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <input class="text-personal-400" onFocus="click_text(this.id)" type="text" name="text13" id="text13" value=""
                                    onblur="validatetext(this.value, this.id)"/>
                        </div>
                        <div><span id="errortext13"></span></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>経歴書を添付<span>(必須）</span></div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input class="text-file-400" type="file" name="upload1" id="file1" value="" onFocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/></div>
                        <div style="color: red">※ファイル名は半角英数</div>
                    </div>
                    <div class="td-content clear">
                        <div><span id="errorfile1"></span></div>
                    </div>
                    <div class="td-content clear">
                        <div><input class="text-file-400" type="file" name="upload2" id="file2" value="" onFocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/></div>
                        <div style="color: red">※ファイル名は半角英数</div>
                    </div>
                    <div class="td-content clear">
                        <div><span id="errorfile2"></span></div>
                    </div>
                    <div class="td-content clear" style="padding: 0 10px;">
                        <p>※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種</p>

                        <p>※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。</p>

                        <p>その際には、お手数ですが右記メールアドレスまで 直接お送りください。kreis-info@kandc.com</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>


<!--<div class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>媒体</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <select class="selection" style="width: 300px" name="select6" id="select6" onFocus="click_text(this.id)">
                            <option value="">下記から選択してください</option>
                            <option value="Google">Google</option>
                            <option value="Yahoo">Yahoo</option>
                            <option value="その他検索エンジン">その他検索エンジン</option>
                            <option value="en転職コンサルタント">en転職コンサルタント</option>
                            <option value="日経キャリアNET">日経キャリアNET</option>
                            <option value="リクナビNEXT">リクナビNEXT</option>
                            <option value="ビズリーチ">ビズリーチ</option>
                            <option value="CONSULTANT CAREER">CONSULTANT CAREER</option>
                            <option value="その他WEBサイト">その他WEBサイト</option>
                            <option value="駅広告">駅広告</option>
                            <option value="メルマガ（面接官の本音）">メルマガ（面接官の本音）</option>
                            <option value="メルマガ（ヘッドハンターの目）">メルマガ（ヘッドハンターの目）</option>
                            <option value="メルマガ（キャリアアップコラム）">メルマガ（キャリアアップコラム）</option>
                            <option value="紹介（クライスにご登録している方より）">紹介（クライスにご登録している方より）</option>
                            <option value="紹介（クライスのご登録者以外より）">紹介（クライスのご登録者以外より）</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><textarea style="width: 400px; margin-bottom: 10px" TYPE="text" name="text14" id="text14" onFocus="click_text(this.id)"
                                    value=""></textarea></div>
                        <div>※具体的にご紹介されたコンサルタントがおりましたらお手数ですがご明記ください。</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>-->

<div class="form-personal-profile">
    <div class="form-privacy">
        <div class="privacy-title">【個人情報保護方針】</div>
        <div class="privacy-content">
            <p>わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
                お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。<br /><br />

                1．個人情報の取得、利用及び提供について<br />
                人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。<br />

                2．個人情報に関する法令や指針、規範について<br />
                個人情報に関する法令・国が定める指針その他の規範を守ります。<br /><br />

                3．個人情報の安全管理について<br />
                個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。<br /><br />

                4．個人情報に関する苦情及び相談について<br />
                個人情報に関する苦情及び相談には、速やかに対処します。<br /><br />

                5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について<br />
                個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。<br /><br />

                制定日　2005年3月1日<br />
                改訂日　2008年9月1日<br />
                株式会社クライス＆カンパニー<br />
                代表取締役社長丸山貴宏<br /><br />


                【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】<br />

                株式会社クライス＆カンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br /><br />

                1．（定義）<br />
                本規約において使用される各用語の定義は、以下に定めるとおりとします。<br /><br />

                （1）候補者<br />
                クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。<br /><br />

                （2）ご紹介企業<br />
                クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。<br /><br />

                （3）転職支援サービス<br />
                候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。<br /><br />

                （4）クライスの転職支援サイト<br />
                クライスが管理・運営している以下のウェブサイトをいいます。<br />
                http://www.kandc.com<br /><br />

                （5）候補者情報<br />
                候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。<br /><br />

                2．（申し込み方法）<br />
                転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。<br /><br />

                3．（サービスの提供）<br />
                クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）<br /><br />

                （1）電話や面談による転職相談の実施<br />
                （2）担当コンサルタントによる転職活動支援<br />
                （3）Position Information（求人票）を補足する求人情報の提供<br />
                （4）応募手続きの代行<br />
                （5）その他利用者の転職に有益とクライスが判断する一切のサービス<br />

                4．（転職支援サービスの変更・中断・終了）<br />
                クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。<br /><br />

                5．（転職支援サービス提供の終了事由）<br />
                クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。<br /><br />

                a.候補者が本規約に定める各事項に違反した場合<br />
                b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合<br />
                <br />
                6．（個人情報の取り扱い）<br />
                クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。<br /><br />

                7．（候補者情報の正確性）<br />
                候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。<br /><br />

                8．（求人照合）<br />
                クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。<br /><br />

                9．（労働条件）<br />
                クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、　候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。<br /><br />

                10．（禁止事項）<br />
                候補者は、以下の行為をしてはならないものとします。<br /><br />

                a.虚偽の情報をクライスに提供する行為<br />
                b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為<br />
                c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者<br />
                （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為<br />
                d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為<br />
                e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為<br />
                f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為<br />

                11．（情報の加工）<br />
                クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。<br /><br />

                12．（免責）<br />
                クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。<br /><br />

                13．（不可抗力）<br />
                天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。<br /><br />

                14．（損害賠償責任）<br />
                候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。<br />
                15．（本規約の変更）<br />
                クライスは、必要に応じて本規約の内容を変更することができるものとします。<br />
                クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。<br />

                16．（定めのない事項）<br />
                本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。<br />
                17．（管轄裁判所）<br />
                万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。<br /><br />

                制定日　2009年5月12日<br />
                株式会社クライス＆カンパニー<br /><br />


                【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】<br /><br />

                1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的<br />
                当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。<br /><br />

                2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて<br />
                （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。<br /><br />

                （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。<br />

                （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。<br />

                （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。<br />

                （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。<br /><br />

                3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供<br />
                当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。<br />

                4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託<br />
                当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。<br /><br />

                5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について<br />
                エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。<br /><br />

                6．掲載の求人、企業情報について<br />
                当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。<br /><br />

                改訂日　2011年3月9日<br />
                株式会社クライス＆カンパニー<br />

                【個人情報の開示・問合せ等の連絡方法・連絡先】<br />

                ◆連絡方法<br />
                ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。<br /><br />

                ◆連絡先<br />
                株式会社クライス＆カンパニー<br />
                人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）<br />
                東京都港区東新橋2-4-1 サンマリーノ汐留2F<br />
                TEL：03-5733-1602　　Email：<a href="mailto:privacy@kandc.com">privacy@kandc.com</a></p>
        </div>
    </div>

</div>


<div class="form-personal-submit clear">
    <!--    <div class="form-back"><a href="#" title="Back"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
    <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
    <!--    <div class="form-handler"><a href="#" title="Submit next Step 2"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div><!--end #entry_form-->

</div><!--end .form_content-->

</div><!--end #form-->
</div><!--end .inside-->

<?php
@include('inc/footer.php');
?>