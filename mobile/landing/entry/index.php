<?php
	ob_start();

?>
<?php
	@include('../inc/header.php');
?>

    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>entry/style.css" media="all" />
    <script src="validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->

    <div class="title_page clear">
    	<div class="image_title">
        <img src="../img/bg-entry.png"  alt="エントリー背景"/>
        </div>
     </div>


        <!--End Content -->
       <div id="content" class=" inside clear content" >
       <!--****************************************************-->
      <form id="submit_form" method="post" action="confirm.php" autocomplete="off">
        <?php
			$entry_id=$_GET['entry_id'];
			echo "<input type='hidden' name='entry_id' value='{$entry_id}'/>";
		?>
        	<div class="  clear h1_title ">個人プロフィール</div>
            <div class="bg_white content_inside block_content">


            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice">(必須）</span><span class="hi_notice">※全角入力
</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text1" type="text" onfocus="click_text(this.id)" onblur="validatetext(this.value,this.id)" value="" name="text1">
                        </div>
                        <div class="input_50 r">
                       	 <input id="text2" type="text" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" value="" name="text2">
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext1"></span>&nbsp;&nbsp;<span id="errortext2"></span>
                    </div>

                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ <span class="notice">(必須）</span><span class="hi_notice"> ※全角カナ入力
</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input id="text3" type="text" onfocus="click_text(this.id)" onblur="validatetext(this.value,this.id)" value="" name="text3">
                        </div>
                        <div class="input_50 r">
                       	 <input id="text4" type="text" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" value="" name="text4">
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext3"></span>&nbsp;&nbsp;<span id="errortext4"></span>
                    </div>
                </div><!--End Group txt-->



                <div class="group_txt_form clear">
                	<div class="clear title_txt">生年月日<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_60_n l clear">
                    	<div class="input_50 l">
                       	<select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select1" name="select1" class="selection selection-style">
                               <option value="">　選択</option>
                                <?php $star = 1933;
                                $end = 1998;
                                for ($end; $star <= $end; $end--) {
                                    ?>
                                    <option value="<?php echo $end ?>"><?php echo $end ?></option>
                                <?php } ?>

                                                            </select>
                        </div>
                        <div class="input_50 r">
                       	 <select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select2" name="select2" class="selection selection-style">
                                <option value="">　選択</option>
                            <?php $moth = 1;
                            $endMoth = 12;
                            for ($moth; $moth <= $endMoth; $moth++) {
                                ?>
                                <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                            <?php } ?>

                                                        </select>
                        </div>
                        </div>
                         <div class="input_30_n r">
                       	<select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select3" name="select3" class="selection selection-style">
                                <option value="">選択</option>
                            <?php $day = 1;
                            $endDay = 31;
                            for ($day; $day <= $endDay; $day++) {
                                ?>
                                <option value="<?php echo $day ?>"><?php echo $day ?></option>
                            <?php } ?>

                                                        </select>
                        </div>
                    </div>
                      <div class="clear">
                     	<span id="errorselect1"></span>
                        <span id="errorselect2"></span>
                        <span id="errorselect3"></span>
                        </div>
                </div><!--End Group txt-->



                <div class="group_txt_form clear">
                	<div class="clear title_txt">都道府県 <span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                       	 <select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select4" name="select4" class="selection">
                                <option value="">都道府県を選択してください。</option>
                               <option value="北海道">北海道</option>
                               <option value="青森県">青森県</option>
                               <option value="岩手県">岩手県</option>
                               <option value="宮城県">宮城県</option>
                               <option value="秋田県">秋田県</option>
                               <option value="山形県">山形県</option>
                               <option value="福島県">福島県</option>
                               <option value="茨城県">茨城県</option>
                               <option value="栃木県">栃木県</option>
                               <option value="群馬県">群馬県</option>
                               <option value="埼玉県">埼玉県</option>
                               <option value="千葉県">千葉県</option>
                               <option value="東京都">東京都</option>
                               <option value="神奈川県">神奈川県</option>
                               <option value="新潟県">新潟県</option>
                               <option value="富山県">富山県</option>
                               <option value="石川県">石川県</option>
                               <option value="福井県">福井県</option>
                               <option value="山梨県">山梨県</option>
                               <option value="長野県">長野県</option>
                               <option value="岐阜県">岐阜県</option>
                               <option value="静岡県">静岡県</option>
                               <option value="愛知県">愛知県</option>
                               <option value="三重県">三重県</option>
                               <option value="滋賀県">滋賀県</option>
                               <option value="京都府">京都府</option>
                               <option value="大阪府">大阪府</option>
                               <option value="兵庫県">兵庫県</option>
                               <option value="奈良県">奈良県</option>
                               <option value="和歌山県">和歌山県</option>
                               <option value="鳥取県">鳥取県</option>
                               <option value="島根県">島根県</option>
                               <option value="岡山県">岡山県</option>
                               <option value="広島県">広島県</option>
                               <option value="山口県">山口県</option>
                               <option value="徳島県">徳島県</option>
                               <option value="香川県">香川県</option>
                               <option value="愛媛県">愛媛県</option>
                               <option value="高知県">高知県</option>
                               <option value="福岡県">福岡県</option>
                               <option value="佐賀県">佐賀県</option>
                               <option value="長崎県">長崎県</option>
                               <option value="熊本県">熊本県</option>
                               <option value="大分県">大分県</option>
                               <option value="宮崎県">宮崎県</option>
                               <option value="鹿児島県">鹿児島県</option>
                               <option value="沖縄県">沖縄県</option>
                               <option value="海外">海外</option>
                            </select>
                        </div>

                    </div>
                    <div class="clear"><span id="errorselect4"></span></div>
                </div><!--End Group txt-->



                <div class="group_txt_form clear">
                	<div class="clear title_txt">電話番号<span class="notice">(必須）</span></div>
                    <div class="clear input_form phone">
                    	<div class="input_60_n l clear">
                            <div class="input_50 l">
                                <input type="number" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" value="" id="text5" name="text5">
                            </div>
                            <div class="input_50 r">
                             <input type="number" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" value="" id="text6" name="text6">
                            </div>
                        </div>
                         <div class="input_30_n r">
                       	<input type="number" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" value="" id="text7" name="text7">
                        </div>
                    </div>
                    <div class="clear"><span id="errortext5"></span><span id="errortext6"></span><span id="errortext7"></span></div>
                </div><!--End Group txt-->



                <div class="group_txt_form last_child clear">
                	<div class="clear title_txt">メールアドレス<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		<input type="text" onfocus="click_text(this.id)" onblur="IsEmail(this.value, this.id)" value="" id="text8" name="text8" >
                        </div>
                        <div class="input_other">
                            <input type="text" onfocus="click_text(this.id)" onblur="confirm_Email(document.forms['submit_form']['text8'].value, document.forms['submit_form']['text9'].value, this.id)" value="" id="text9" name="text9">
                        </div>
                    </div>
                    <div class="clear error_wrap tag_text9_entry">
                        <span id="errortext89"></span>&nbsp;
                    </div>
                </div><!--End Group txt-->
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $('#text9').bind("cut copy paste", function(e) {
                            e.preventDefault();
                            alert("コピー・貼り付け不可。手入力をお願いします。");
                            $('#text9').focus();
                            $('#text9').bind("contextmenu", function(e) {
                                $('#text9').focus();
                                e.preventDefault();
                            });
                        });
                        $("#text9").focusout(function() {
                            if($('#text9').val() == $('#text8').val())
                                $(".tag_text9_entry #errortext89").empty();
                        });
                    });
                </script>
                <p class="clear" style="margin-top:5px;">※携帯キャリアメール以外のアドレスをご入力ください。</p>
                <div class="notice-entry-form">
                        <p>※メールでのご連絡について</p>
						<p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メー
                            ルサービスで多く報告されております。
                        </p>

                        <p>ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                    </div>

             </div>
             <!--****************************************************-->
             <div class="  clear h1_title">最終学歴・語学・資格</div>
             <div class="bg_white content_inside block_content">


             	<div class="group_txt_form clear">

                    <div class="clear input_form">
                    	<div class="input_20 l">
                       		学校名
                        </div>
                        <div class="input_80 r">
                       	<input type="text" onfocus="click_text(this.id)" value="" id="text10" name="text10" placeholder="（例）◯◯大学">
                        </div>
                    </div>
                    <div class="clear input_form">
                    	<div class="input_20 l">
                       		学部
                        </div>
                        <div class="input_80 r">
                       	<input type="text" onfocus="click_text(this.id)" value="" id="text22" name="text22" placeholder="（例）◯◯学部">
                        </div>
                    </div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">英語力</div>
                    <div class="clear input_form">
                    	<div class="input_80 l">
                       		<select onfocus="click_text(this.id)" id="select5" name="select5"  class="selection">
                                <option>下記から選択してください</option>
                                <option value="ネイティブレベル">ネイティブレベル</option>
                                <option value="ビジネスレベル">ビジネスレベル</option>
                                <option value="スタンダードレベル">スタンダードレベル</option>
                                <option value="ベーシックレベル">ベーシックレベル</option>
                                <option value="不可">不可</option>
                            </select>
                        </div>
                        <div class="input_20 r">
                       	 <input type="text" onfocus="click_text(this.id)" value="" id="text11" name="text11">
                        </div>

                    </div>

                </div><!--End Group txt-->

             	 <div class="group_txt_form last_child clear">
                	<div class="clear title_txt">その他語学・資格</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea onfocus="click_text(this.id)" value="" id="text12" name="text12" type="text"  cols="50" rows="1"></textarea>
                        </div>

                    </div>

                </div><!--End Group txt-->





             </div>
             <!--***************************************************-->

              <!--****************************************************-->
              <div class="  h1_title clear">職務経歴について</div>
             <div class="bg_white content_inside block_content">


                <div class="group_txt_form clear">

                    <div class="clear input_form">
                    	<div class="input_30 l">
                       		経験社数<span class="notice">(必須）</span>
                        </div>
                        <div class="input_70 r">
                       <input type="text" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" value="" id="text13" name="text13"/>
                        </div>

                    </div>
                     <div class="clear"><span  id="errortext13"></span></div>
                </div><!--End Group txt-->

                 <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名・従業員数</div>
                    <div class="clear input_form">
                    	<div class="input_80 l">
                       		<input type="text" value="" onfocus="click_text(this.id)" id="text14" name="text14"/>
                        </div>
                        <div class="input_20 r">
                       	 <input type="text" value="" onfocus="click_text(this.id)" id="text15" name="text15"/>
                        </div>

                    </div>

                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">業種<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                       		<select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select6" name="select6" class="selection">
                    <option value="">下記より選択してください</option>
                    <option value="コンピュータ（ハード）">コンピュータ（ハード）</option>
                    <option value="コンピュータ（ソフト）">コンピュータ（ソフト）</option>
                    <option value="コンピュータ（システム）">コンピュータ（システム）</option>
                    <option value="インターネット">インターネット</option>
                    <option value="ネットーワーク">ネットーワーク</option>
                    <option value="通信キャリア">通信キャリア</option>
                    <option value="戦略コンサルティングファーム">戦略コンサルティングファーム</option>
                    <option value="人事・組織コンサルティングファーム">人事・組織コンサルティングファーム</option>
                    <option value="会計・システムコンサルティングファーム">会計・システムコンサルティングファーム</option>
                    <option value="その他コンサルティングファーム">その他コンサルティングファーム</option>
                    <option value="シンクタンク">シンクタンク</option>
                    <option value="人材紹介・派遣">人材紹介・派遣</option>
                    <option value="情報サービス">情報サービス</option>
                    <option value="ベンチャーキャピタル">ベンチャーキャピタル</option>
                    <option value="銀行">銀行</option>
                    <option value="証券">証券</option>
                    <option value="生保">生保</option>
                    <option value="損保">損保</option>
                    <option value="その他金融">その他金融</option>
                    <option value="機械">機械</option>
                    <option value="電気・電子・半導体">電気・電子・半導体</option>
                    <option value="輸送機器・自動車（部品）">輸送機器・自動車（部品）</option>
                    <option value="プラント設備関連">プラント設備関連</option>
                    <option value="バイオ・メディカル">バイオ・メディカル</option>
                    <option value="化学">化学</option>
                    <option value="エネルギー">エネルギー</option>
                    <option value="不動産">不動産</option>
                    <option value="建設・建築・土木">建設・建築・土木</option>
                    <option value="マーケティング関連">マーケティング関連</option>
                    <option value="広告代理店">広告代理店</option>
                    <option value="広告制作">広告制作</option>
                    <option value="出版・マスコミ">出版・マスコミ</option>
                    <option value="教育・研修">教育・研修</option>
                    <option value="アミューズメント・エンターテインメント">アミューズメント・エンターテインメント</option>
                    <option value="旅行・ホテル">旅行・ホテル</option>
                    <option value="食品・飲料">食品・飲料</option>
                    <option value="トイレタリー・日用品">トイレタリー・日用品</option>
                    <option value="化粧品・健康食品">化粧品・健康食品</option>
                    <option value="アパレル・ブランド">アパレル・ブランド</option>
                    <option value="その他消費財">その他消費財</option>
                    <option value="流通・小売・販売">流通・小売・販売</option>
                    <option value="総合商社">総合商社</option>
                    <option value="専門商社">専門商社</option>
                    <option value="運輸・物流">運輸・物流</option>
                    <option value="その他メーカー">その他メーカー</option>
                    <option value="その他サービス">その他サービス</option>
                    <option value="特殊法人">特殊法人</option>
                    <option value="その他">その他</option>
                </select>
                        </div>

                    </div>
                     <div class="clear"><span id="errorselect6"></span></div>
                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">勤務期間</div>
                    <div class="clear input_form">
                    	<div class="input_40_n l">
                    	<div class="input_50 l">
                       		<select class="selection selection-style" name="select7" id="select7" onFocus="click_text(this.id)" >
                                    <option value=""> 選択</option>
                                    <?php $year = 1940;
                                    $end = date("Y");
                                    for ($end; $year <= $end; $end--) {
                                        ?>
                                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="input_50 r">
                       	 <select class="selection selection-style" name="select8" id="select8" onFocus="click_text(this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                                <?php } ?>
                        </select>
                        </div>
                        </div>
                        <div class="input_5 l">
                       	 ～
                        </div>
                        <div class="input_40_n r">
                        <div class="input_50 l">
                       	<select class="selection selection-style" name="select9" id="select9" onFocus="click_text(this.id)">
                            <option value=""> 選択</option>
                            <?php $year = 1940;
                            $end = date("Y");
                            for ($end; $year <= $end; $end--) {
                                ?>
                                <option value="<?php echo $end ?>"><?php echo $end ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="input_50 r">
                       	  <select class="selection selection-style" name="select10" id="select10" onFocus="click_text(this.id)">
                                <option value=""> 選択</option>
                                <?php $moth = 1;
                                $endMoth = 12;
                                for ($moth; $moth <= $endMoth; $moth++) {
                                    ?>
                                    <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="input_radio_option clear">
                        <div class="input_radio"><input type="radio" name="radio1" value="現職中" id="radio1" checked/> 現職中</div>
                        <div class="input_radio"><input type="radio" name="radio1" value="退職予定" id="radio2"/> 退職予定</div>
                        <div class="input_radio"><input type="radio" name="radio1" value="離職中" id="radio3"/> 離職中</div>
                    </div>

                </div><!--End Group txt-->

                 <div class="group_txt_form clear">
                	<div class="clear title_txt">職種<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                       		<select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select11" name="select11" class="selection">
                                <option value="">下記より選択してください</option>
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
                			</select>
                        </div>

                    </div>
                    <div class="clear"><span id="errorselect11"></span></div>
                </div><!--End Group txt-->

                 <div class="group_txt_form clear">
                	<div class="clear title_txt">最終部課／職位・年収</div>
                    <div class="clear input_form">
                    	<div class="input_80 l">
                       		<input type="text" value="" onfocus="click_text(this.id)" id="text16" name="text16">
                        </div>
                        <div class="input_20 r">
                       	 <input type="text" value="" onfocus="click_text(this.id)" id="text17" name="text17">
                        </div>

                    </div>

                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">職務内容 <span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea onclick="add_desc_hidden(this.id);" onblur="validatetext(this.value, this.id) ;" onfocus="click_text(this.id)" value="" id="text18" name="text18" type="text"></textarea>
                        </div>


                    </div>
                    <div class="clear"><span id="errortext18"></span></div>
                </div><!--End Group txt-->

                 <div class="group_txt_form last_child clear">
                	<div class="clear title_txt">その他職歴</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                     <textarea onclick="add_desc_hidden(this.id);" value="" onfocus="click_text(this.id)" id="text19" name="text19" type="text"></textarea>
                        </div>


                    </div>

                </div><!--End Group txt-->

              </div>
             <!--***************************************************-->

               <!--****************************************************-->
               <div class="clear h1_title">ご希望について</div>
             <div class="bg_white content_inside block_content">


                <div class="group_txt_form last_child clear">
                	<div class="clear title_txt">希望勤務地</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                    	 <input type="text" onfocus="click_text(this.id)" value="" id="text20" name="text20">
                        </div>


                    </div>

                </div><!--End Group txt-->



             </div>
             <!--***************************************************-->
             <?php
								@include('../inc/link_privacy_policy.php');
								@include('../../inc/link_privacy_policy.php');

							?>

              <!--****************************************************-->
              	<?php /*?><div class=" clear h1_title">何をご覧になってアクセス頂きましたか？</div>
             <div class="bg_white content_inside block_content">


                 <div class="group_txt_form clear">
                	<div class="clear input_form">
                    	<div class="input_20 l">
                    	媒体
                        </div>
                       <div class="input_80 r">
                    	 <select onfocus="click_text(this.id)" id="select12" name="select12"  class="selection">
                                <option value="">下記から選択してください</option>
                                <option value="Google">Google</option>
                                <option value="Yahoo">Yahoo</option>
                                <option value="その他検索エンジン">その他検索エンジン</option>
                                <option value="en転職コンサルタント">en転職コンサルタント</option>
                                <option value="日経キャリアNET">日経キャリアNET</option>
                                <option value="リクナビNEXT">リクナビNEXT</option>
                                <option value="ビズリーチ">ビズリーチ</option>
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

                    </div>

                </div><!--End Group txt-->

                <div class="group_txt_form clear">
                	<div class="clear title_txt">その他</div>
                    <div class="clear input_form">
                    	<div class="input_100">
                    	 <textarea value="" onfocus="click_text(this.id)" id="text21" name="text21" type="text"></textarea>
                        </div>


                    </div>

                </div><!--End Group txt-->

               </div><?php */?>
             <!--***************************************************-->

             <!--****************************************************-->
             <div class="block_content mg_bt10 clear">
             	<div class="content_center_button center_submit_1 submit_form_button">

             <!--	<div class="form_back_button button-back l">
                	<a class="back_icon" title="Back" href="javascript:history.back(1)">
                    		<span class='arrow_back'>戻る</span>
                    </a>
                </div>-->


               		<a href="javascript:void(0);" class="submit-go-confirm button-confirm" id="submit">同意して内容確認へ</a>


                </div>
             </div>
             <!--***************************************************-->

             </form>

       </div><!--End content-->


    <?php include('../inc/footer.php'); ?>
<?php
	ob_flush();
?>