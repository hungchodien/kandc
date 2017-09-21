<?php include ('../../../inc/header.php');?>
<?php
$url_curent_check = curPageURL();
//echo $url_curent_check;

$url_curent_check = curPageURL();
if (strpos($url_curent_check, 'kreisandcompany.sakura.ne.jp') !== false) {

	if ($protocol == 'https:' || $protocol == 'HTTPS:') {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		//header("HTTP/1.1 301 Moved Permanently");
		//header('Location:'.$url_kandc_primary);
		?>
		                        <script type="text/javascript">
		                                   $(document).ready(function(){
		                                        location.href ='<?php echo $url_kandc_primary;?>';
		                                  });
		                                </script>
		<?php
	} else {
		$url_kandc_primary = str_replace("kreisandcompany.sakura.ne.jp", "kandc.com", $url_curent_check);
		$entry_protocol    = str_replace('http', 'https', $url_kandc_primary);
		//header("HTTP/1.1 301 Moved Permanently");
		//header('Location:'.$entry_protocol);
		?>
		                        <script type="text/javascript">
		                                   $(document).ready(function(){
		                                        location.href ='<?php echo $entry_protocol;?>';
		                                  });
		                                </script>
		<?php
	}

} else {

	if ($protocol == 'http:' || $protocol == 'HTTP:') {
		$entry_protocol = str_replace('http', 'https', $url_curent_check);
		//header('Location:'.$entry_protocol);
		?>
		                         <script type="text/javascript">
		                                   $(document).ready(function(){
		                                        location.href ='<?php echo $entry_protocol;?>';
		                                  });
		                                </script>
		<?php
	}

}

?>
<div id="header_meta">
<title>ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティングのクライス&amp;カンパニー</title>
<meta content="ヘッドハンティング,人材紹介会社,転職エージェント,キャリアコンサルティング,クライス&amp;カンパニー,30代,コンサルタント,エンジニア,キャリアデザイン,転職サポート" name="keywords"/>
<meta content="数ある転職エージェントの中で私たちクライス&amp;カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" name="description"/>
<meta content="ヘッドハンティング・人材紹介・転職エージェント・キャリアコンサルティングのクライス&amp;カンパニー" property="og:title"/>
<meta content="数ある転職エージェントの中で私たちクライス&amp;カンパニーは、一人ひとりに合ったキャリアデザインのお手伝いと転職のサポートをしています。30代を中心とした方々へのキャリアコンサルティング実績が豊富ですので、将来的な転職についてもご相談ください。" property="og:description"/>
<meta content="株式会社クライス＆カンパニー" name="author"/>
</div>

<div id="wrapper" class="wrapper_entry clear">
<div class="content_top"></div>
    <div class="inside clear">
    <div class="body_content clear">
	<div class="content_entry_recurit clear">

    <!--Begin title-->
    <div class="title_content_entry_recurit clear">
    	<p class="top_1">コンサルタント職</p>
        <p class="title_form">コンサルタント職応募フォームです。</p>

    </div>
    <!--End title-->
    <!--Begin Form -->
       <div id="entry-form" class="entry-form clear">
        <form name="frm_entry_recruit" action="confirm.php" method="post" id="submit_form"  enctype="multipart/form-data">
        <div class="form-personal-profile">
            <div class="label-personal">個人プロフィール</div>
            <div class="table-personal-profile">
                <table>
                    <tr>
                        <td class="label">
                            <div>お名前 <span>(必須）</span></div>
                        </td>
                        <td colspan="2">
                            <div class="td-content clear">
                                <div class="entry_tab1">姓</div>
                                <div class="entry_tab2"><input type="text" name="text1" id="text1" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" />
                                </div>
                                <div class="entry_tab1">名</div>
                                <div class="entry_tab2"><input type="text" name="text2" id="text2" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                </div>
                                <div>※全角入力</div>
                            </div>
                            <div class="td-content clear">
                                <div><span id="errortext1"></span></div>
                                <div><span id="errortext2"></span></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <div>フリガナ <span>(必須）</span></div>
                        </td>
                        <td colspan="2">
                            <div class="td-content clear">
                                <div class="entry_tab1">セイ</div>
                                <div class="entry_tab2"> <input type="text" name="text3" id="text3" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                </div>
                                <div class="entry_tab1">メイ</div>
                                <div class="entry_tab2"><input type="text" name="text4" id="text4" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                </div>
                                <div> ※全角カナ入力</div>
                            </div>
                            <div class="td-content clear">
                                <div><span id="errortext3"></span></div>
                                <div><span id="errortext4"></span></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <div>生年月日 <span>(必須）</span></div>
                        </td>
                        <td colspan="2">
                            <div class="td-content clear">
                                <div>西暦</div>
                                <div>
                                    <select class="selection selection-style" name="select1" id="select1" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                        <option value=""> 選択</option>
<?php $year = 1940;
$end        = date("Y");
for ($end; $end >= $year; $end--) {
	?>
	                                            <option value="<?php echo $end;?>"><?php echo $end;
	?></option>
	<?php }?>
</select>
                                </div>
                                <div>年</div>
                                <div>
                                    <select class="selection selection-style" name="select2" id="select2" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                        <option value=""> 選択</option>
<?php $moth = 1;
$endMoth    = 12;
for ($moth; $moth <= $endMoth; $moth++) {
	?>
	                                            <option value="<?php echo $moth;?>"><?php echo $moth;
	?></option>
	<?php }?>
</select>
                                </div>
                                <div> 月</div>
                                <div>
                                    <select class="selection selection-style" name="select3" id="select3" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                        <option value=""> 選択</option>
<?php $day = 1;
$endDay    = 31;
for ($day; $day <= $endDay; $day++) {
	?>
	                                            <option value="<?php echo $day;?>"><?php echo $day;
	?></option>
	<?php }?>
                                    </select>
                                </div>
                                <div> 日</div>
                            </div>
                            <div class="td-content clear">
                                <div><span id="errorselect1"></span></div>
                                <div><span id="errorselect2"></span></div>
                                <div><span id="errorselect3"></span></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <div>現住所 <span>(必須）</span></div>
                        </td>
                        <td style=" width: 150px">
                            <div>都道府県</div>
                        </td>
                        <td>
                            <div class="td-content clear">
                                <div>
                                    <select class="selection" name="select4" id="select4" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                        <option value="">選択してください。</option>
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
                                    <input type="text" name="text5" id="text5" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)"/> -
                                </div>
                                <div>
                                    <input type="text" name="text6" id="text6" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/> -
                                </div>
                                <div>
                                    <input type="text" name="text7" id="text7" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"/>
                                </div>
                                <div>※半角入力</div>
                            </div>
                            <div class="td-content clear">
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
                                    <input class="text-personal-400" type="text" name="text8" id="text8" onfocus="click_text(this.id)"
                                            value="" onblur="IsEmail(this.value, this.id)"/>
                                </div>
                                <div style="margin-left: 60px"><span id="errortext8"></span></div>
                                <br/>

                                <div>
                                    <input class="text-personal-400" type="text" name="text9" id="text9" value="" onfocus="click_text(this.id)"
                                            onblur="confirm_Email(document.forms['submit_form']['text8'].value, this.value, this.id)"/>
                                </div>
                                <div style="width: 100px ;  margin: 5px 0 10px 0">※確認用</div>

                                <div><span id="errortext9"></span></div>
                            </div>
                            <div style="margin-top: 10px" class="clear">
                                <p>メールでのご連絡について</p>

                                <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メー
                                    ルサービスで多く報告されております。
                                </p>

                                <p>ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!--******************************************************************-->

        <!--******************************************************************-->
        <div class="form-personal-profile">
            <div class="label-personal">履歴書・職務経歴書</div>
            <div class="table-personal-profile">
                <table>
                   <tr>
                        <td class="label">
                            <div>履歴書<span>(必須）</span></div>
                        </td>
                        <td colspan="2">
                            <div class="td-content clear">
                                <div><input class="text-file-400" type="file" name="upload1" id="file1" value="" onfocus="click_text(this.id)"
                                            onchange="validate_fileupload(this.value, this.id)"/></div>
                                <div style="color: red">※ファイル名は半角英数</div>
                            </div>
                            <div class="td-content clear">
                                <div><span id="errorfile1"></span></div>
                            </div>


                        </td>
                    </tr>
                    <tr>
                        <td class="label">
                            <div>職務経歴書<span>(必須）</span></div>
                        </td>
                        <td colspan="2">
                             <div class="td-content clear">
                                <div><input class="text-file-400" type="file" name="upload2" id="file2" value="" onfocus="click_text(this.id)"
                                            onchange="validate_fileupload(this.value, this.id)"/></div>
                                <div style="color: red">※ファイル名は半角英数</div>
                            </div>
                            <div class="td-content clear">
                                <div><span id="errorfile2"></span></div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
                    <div class="form-personal-profile">
                            <div class="table-personal-profile">
                                <div class="td-content clear">
                                    <p>※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種</p>

                                    <p>※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。その際には、お手数ですが下記メールアドレスまで 直接お送りください。</p>

                                    <p>Email: <a href="mailto:recruit@kandc.com">recruit@kandc.com</a></p>
                                </div>
                            </div>
                    </div>
      <!--******************************************************************-->

        <!--******************************************************************-->
        <div class="form-personal-profile">
            <div class="form-privacy">
                <div class="privacy-title">【個人情報保護方針】</div>
                <div class="privacy-content">
                    <p>わたくしたち株式会社クライス・アンド・カンパニーは、人材紹介等のサービスをお客様に安心して当社のサービスをご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
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

                        株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br /><br />

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
                        TEL：03-5733-1602　　Email：privacy@kandc.com</p>
                </div>
            </div>

        </div>

        <!--******************************************************************-->
        <div class="form-personal-submit clear">
            <!--    <div class="form-back"><a href="#" title="Back"><img src="../img/entry/button-back.png" alt=""> </a></div>-->
            <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
            <!--    <div class="form-handler"><a href="#" title="Submit next Step 2"><img src="../img/entry/button-confirm.png" alt=""></a>-->
            <!--    </div>-->
        </div>
        </form>
        </div>
    	<!--End Form -->
    </div><!--End content_entry_recurit-->
  </div><!--End body_content-->
</div>   <!--End inside-->

</div>

	<div  id="footer_add_bread" class="clear">
    	<ul class="clear">
             <li class="bc_home"><a href="<?php echo url_root;?>">HOME</a></li>
            <li class="bc_item"><a href="<?php echo url_root;?>entry">募集要項</a></li>
            <li class="bc_item"><a href="<?php echo url_root;?>entry/consultant/">コンサルタント職</a></li>
             <li><a href="<?php echo url_root;?>entry/staff/form">応募フォーム</a></li>

        </ul>
    </div>
<?php include ('../../../inc/footer.php');?>