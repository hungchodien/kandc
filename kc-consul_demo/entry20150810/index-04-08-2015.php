<?php
	ob_start();
?>
<?php
@include('../Lib/_init.php');
@include('../config.php');
@include('../../config.php');

		$pageURL_cu="http";
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL_cu .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL_cu .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="keywords" content="コンサルタント,コンサルティング,戦略コンサル,ITコンサル,ポストコンサル,EXコンサル,転職,人材紹介,エージェント,エントリー"/>
    <meta name="description" content="現役コンサルタントの転職専門人材紹介会社クライス&amp;カンパニーへのエントリーフォームです。"/>
    <meta name="author" content="株式会社クライス・アンド・カンパニー"/>
    <meta name="copyright" content="Copyright&copy;2007 KREIS&amp;Company Inc.　All Right Reserved."/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Content-Language" content="ja"/>
    <title>エントリー |戦略コンサル、ITコンサル、ポストコンサル転職のクライス&amp;カンパニー</title>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script-->
    <!--    <script type="text/javascript" src="../js/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo url_root_main; ?>js/validate_form_entry.js"></script>
    <script src="<?php echo url_root_main; ?>js/show_form.js" type="text/javascript"></script>
    <!-- css -->
   
	<link type="text/css" href="<?php echo url_root_main; ?>css/style.css" rel="stylesheet"/>
	 <link type="text/css" href="../css/style.css" rel="stylesheet"/>
    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function () {
            // hide #back-top first
            $("#back-top").hide();
            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-top a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
    </script>
    

</head>

<body>

<header>

   <div class="header_top clear">
         	<div class="header_top_content clear">
        	<h1 class="l">
            	<a href="<?php echo url_root_main; ?>"><span class="b">KREIS &Company Inc.</span> コンサルタントの転職ならクライス＆カンパニーへ</a>
		   </h1>
           <div class="social_btns r clear">
            <div class="facebook_btn l">
                <div class="fb-like" data-href="<?php echo  $pageURL_cu; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false">
                </div>
                </div>
            <div class="twitter_btn l">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo  $pageURL_cu; ?>" rel="nofollow">Tweet</a>
            </div>    
               <div class="gplus_btn l"><g:plusone size="medium" href="<?php echo  $pageURL_cu; ?>"></g:plusone></div>
            </div><!--end .social_btns-->
           </div> <!--End .header_top_content-->
         </div><!--End .header_top-->
         
         
        <div class="header_logo clear">
        	<div class="header_top_content header_logo_content clear">
            	<h2 class="l">
                <a href="<?php echo url_root; ?>">
                	<img src="<?php echo url_root; ?>img/home/logo-consul.png" alt="キャリアコンサルタント"/></a>
                    <p>コンサルタントのキャリアを共に考えるクライス＆カンパニー</p>
                </h2>
                <div class="button_entry r"><a href="<?php 
//echo url_root."entry_easy/?entry_id=1014585" 
	if(isset($_GET['entry_id'])):
		echo url_root."entry_easy/?entry_id=".$_GET['entry_id'];
	else:
		echo url_root."entry_easy/";
	endif;
?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/button-link-easy-entry.jpg" alt="簡単3分エントリー" /></a></div>
            </div>
        </div><!--End .header_logo-->
		
 </header>   
	
	
	
    <div id="entry">
        <div id="entry-nav">
            <ul class="clear">
                <li><span class="entry-nav-step"></span></li>
                <li><span class="entry-nav-step1"></span></li>
                <li><span class="entry-nav-step2"></span></li>
                <li><span class="entry-nav-step3"></span></li>
            </ul>
        </div>
    </div>

<div id="container">
<div id="content_consul">
<div id="page_category_name" class="clear">
    <div class="title-page">
        <p class="title-top"> 今すぐ転職をお考えのあなた</p>
        <p class="sub-title-top">今すぐ、もしくは近いうちに転職をお考えの方はこちらからお申し込みください。<br />私たちが、あなたの良きパートナーとして転職活動をサポートいたします。</p><p style="padding-top:5px; font-size:13px;">レジュメをお持ちの方は<a href="<?php echo url_root; ?>entry_easy/?entry_id=1014585" target="_blank">こちら</a></p>
    </div>
    
</div>

<div id="entry-form" class="entry-form">
<form action="comfirm.php" method="post" id="submit_form">
<?php
if (isset($_GET['entry_id'])) {
?>
<input type="hidden" name="entry_id" id="entry_id" value="<?php echo $_GET['entry_id']; ?>"/>
<?php
}
?>
<div class="label-asked">
    <div class="asked">お申し込みいただくにあたって</div>
    <div class="content-asked">・転職に関するご相談、企業のご紹介など費用は全て無料ですので、ご安心下さい。</div>
</div>
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
                        <div class="entry_tab1" style="margin-left:0px; text-align:left;">姓</div>
                        <div class="entry_tab2"><input type="text" name="text1" id="text1" value=""
                                                       onblur="validatetext(this.value,this.id)"  onfocus="click_text(this.id)"/>
                        </div>
                        <div class="entry_tab1">名</div>
                        <div class="entry_tab2"><input type="text" name="text2" id="text2" value=""
                                                       onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" />
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
                        <div class="entry_tab1" style="margin-left:0px; text-align:left;">セイ</div>
                        <div class="entry_tab2"><input type="text" name="text3" id="text3" value=""
                                                       onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" />
                        </div>
                        <div class="entry_tab1">メイ</div>
                        <div class="entry_tab2"><input type="text" name="text4" id="text4" value=""
                                                       onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" />
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
                            <select class="selection selection-style" name="select1" id="select1"
                                    onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
                                <option value="">　選択</option>
                                <?php $star = 1933;
                                $end = 1998;
                                for ($end; $star <= $end; $end--) {
                                    ?>
                                    <option value="<?php echo $end ?>"><?php echo $end ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div>年</div>
                        <div>
                            <select class="selection selection-style" name="select2" id="select2" onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
                                <option value="">　選択</option>
                            <?php $moth = 1;
                            $endMoth = 12;
                            for ($moth; $moth <= $endMoth; $moth++) {
                                ?>
                                <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div> 月</div>
                        <div>
                            <select class="selection selection-style" name="select3" id="select3" onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
                                <option value="">選択</option>
                            <?php $day = 1;
                            $endDay = 31;
                            for ($day; $day <= $endDay; $day++) {
                                ?>
                                <option value="<?php echo $day ?>"><?php echo $day ?></option>
                            <?php } ?>
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
                    <div>都道府県 <span>(必須）</span></div>
                </td>
                <!--<td style=" width: 150px">
                    <div>都道府県</div>
                </td>-->
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" name="select4" id="select4" onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
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
                    <div class="td-content phone clear">
                        <div><input type="text" name="text5" id="text5" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"
                                    onblur="validatetext(this.value)" /> -
                        </div>
                        <div><input type="text" name="text6" id="text6" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"
                                    onblur="validatetext(this.value)" /> -
                        </div>
                        <div><input type="text" name="text7" id="text7" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)"
                                    onblur="validatetext(this.value)" /></div>
                        <div>※半角入力</div>
                        <div><span id="errortext5"></span></div>
                    </div>
                    <div class="td-content clear">

                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>メールアドレス <span>(必須）</span></div>
                </td>
                <td colspan="2">
                    <div class="td-content clear">
                        <div><input style="width: 400px; margin-bottom: 5px" type="text" name="text8" id="text8"
                                    value="" onblur="IsEmail(this.value, this.id)" onfocus="click_text(this.id)" onfocus="click_text(this.id)"/></div>
                        <div style="margin-left: 60px" id="errortext8"><span></span></div>
                        <br/>

                        <div><input style="width: 400px" type="text" name="text9" id="text9" value=""
                                    onblur="confirm_Email(document.forms['submit_form']['text8'].value, document.forms['submit_form']['text9'].value, this.id)" onfocus="click_text(this.id)" />
                        </div>
                        <div style="width: 50px ;  margin: 5px 0 10px 0">※確認用</div>

                        <div id="errortext9"><span></span></div>


                    </div>

                    <div style="margin-top: 10px;margin-left: 10px;" class="clear">
                        <p>メールでのご連絡について</p>

                        <p>当社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。</p>

                        <p>ご利用のお客様は、各メールサービスのご案内にしたがって迷惑メール削除機能の解除等、設定の変更をお願いいたします。</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">最終学歴・語学・資格</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>学校名</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input type="text" name="text10" id="text10" value="" onfocus="click_text(this.id)" /></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>英語力</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 250px" name="select5" id="select5" onfocus="click_text(this.id)" >
                                <option>下記から選択してください</option>
                                <option value="ネイティブレベル">ネイティブレベル</option>
                                <option value="ビジネスレベル">ビジネスレベル</option>
                                <option value="スタンダードレベル">スタンダードレベル</option>
                                <option value="ベーシックレベル">ベーシックレベル</option>
                                <option value="不可">不可</option>
                            </select>
                        </div>
                        <div>TOEIC</div>
                        <div><input type="text" name="text11" id="text11" value="" onfocus="click_text(this.id)" /></div>
                        <div> 点</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他語学・資格</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <textarea rows="1" cols="50" style="width: 300px" type="text" name="text12" id="text12" value="" onfocus="click_text(this.id)"></textarea>
                        </div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div class="form-personal-profile">
<div class="label-personal">職務経歴について</div>
<div class="table-personal-profile">
    <table>
        <tr>
            <td class="label">
                <div>経験社数 <span>(必須）</span></div>
            </td>
            <td>
                <div class="td-content clear">
                    <div><input type="text" name="text13" id="text13" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" /></div>
                    <div>社</div>
                    <div id="errortext13"><span></span></div>
                </div>

</td>
</tr>
<tr>
    <td class="label">
        <div>会社名・従業員数</div>
    </td>
    <td>
        <div class="td-content clear">
            <div><input style="width: 400px; margin-bottom: 10px" type="text" name="text14" id="text14" onfocus="click_text(this.id)"
                        value=""/></div>
            <div><input style="width: 100px; margin-bottom: 10px" type="text" name="text15" id="text15" onfocus="click_text(this.id)"
                        value=""/></div>
            <div>人</div>
            <div>※直近の職歴についてご入力ください。</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>業種<span>(必須）</span></div>
    </td>
    <td>
        <div class="td-content clear">
            <div>
                <select style="width: 300px" class="selection" name="select6" id="select6" onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
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
            <div id="errorselect6"><span></span></div>
        </div>

    </td>
</tr>
<tr>
    <td class="label">
        <div>勤務期間</div>
    </td>
    <td>
        <div class="td-content td-content-bottom clear">
            <div>西暦</div>
            <div>
                <select class="selection selection-style" name="select7" id="select7" onfocus="click_text(this.id)" >
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select8" id="select8" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月 ～</div>
            <div>
                <select class="selection selection-style" name="select9" id="select9" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $year = 1940;
                    $end = date("Y");
                    for ($end; $year <= $end; $end--) {
                        ?>
                        <option value="<?php echo $end ?>"><?php echo $end ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>年</div>
            <div>
                <select class="selection selection-style" name="select10" id="select10" onfocus="click_text(this.id)">
                    <option value=""> 選択</option>
                    <?php $moth = 1;
                    $endMoth = 12;
                    for ($moth; $moth <= $endMoth; $moth++) {
                        ?>
                        <option value="<?php echo $moth ?>"><?php echo $moth ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>月</div>
        </div>

        <div class="td-content td-content-2 clear">
            <div><input type="radio" name="radio1" value="現職中" id="radio1" checked/> 現職中</div>
            <div><input type="radio" name="radio1" value="退職予定" id="radio2"/> 退職予定</div>
            <div><input type="radio" name="radio1" value="離職中" id="radio3"/> 離職中</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職種<span>(必須)</span></div>
    </td>
    <td>
        <div class="td-content clear">
            <div>
                <select style="min-width: 250px; max-width: 300px" class="selection" name="select11" id="select11" onblur="validateSelect(this.value, this.id)" onfocus="click_text(this.id)">
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
            <div><span id="errorselect11"></span></div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>最終部課／職位・年収</div>
    </td>
    <td>
        <div class="td-content clear">
            <div><input style="width: 400px; margin-bottom: 10px" type="text" name="text16" id="text16" onfocus="click_text(this.id)"
                        value=""/></div>
            <div><input style="width: 100px; margin-bottom: 10px" type="text" name="text17" id="text17" onfocus="click_text(this.id)"
                        value=""/></div>
            <div>万円</div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>職務内容 <span>(必須）</span></div>
    </td>
    <td>
        <div class="td-content clear">
        <div  id = "desctext18"class="desc_hidden "><span>職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください</span></div>
            <div><textarea style="width: 500px; margin-bottom: 10px" type="text" name="text18" id="text18" value="" onfocus="click_text(this.id)"
                        onblur="validatetext(this.value, this.id) ;" onclick="add_desc_hidden(this.id);"></textarea>
            </div>
            <div id="errortext18"><span></span></div>
        </div>
    </td>
</tr>
<tr>
    <td class="label">
        <div>その他職歴</div>
    </td>
    <td>
        <div class="td-content clear">
        
        <div  id = "desctext19"class="desc_hidden "><span>職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください</span></div>
            <div><textarea style="width: 500px; margin-bottom: 10px" type="text" name="text19" id="text19" onfocus="click_text(this.id)"
                        value="" onclick="add_desc_hidden(this.id);" ></textarea></div>
            <div>※今までの職歴をご自由にご入力ください。</div>
        </div>
    </td>
</tr>
</table>
</div>
</div>

<!--------------------------------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">ご希望について</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>希望勤務地</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div><input style="width: 500px;" type="text" name="text20" id="text20" value="" onfocus="click_text(this.id)"/></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-------------------------------------------------------------->
<div class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
    <div class="table-personal-profile">
        <table>
            <tr>
                <td class="label">
                    <div>媒体</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div>
                            <select class="selection" style="width: 300px" name="select12" id="select12" onfocus="click_text(this.id)">
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
                </td>
            </tr>
            <tr>
                <td class="label">
                    <div>その他</div>
                </td>
                <td>
                    <div class="td-content clear">
                        <div class="clear">
                        <textarea style="width: 400px; margin-bottom: 10px" type="text" name="text21" id="text21" onfocus="click_text(this.id)"
                                    value=""></textarea></div>
                       
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--------------------------------------->
<div class="form-personal-profile">
    <div class="form-privacy">
        <div class="privacy-title">【個人情報保護方針】</div>
        <div class="privacy-content">
            <p>
                わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
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
                TEL：03-5733-1602　　Email：privacy@kandc.com</p><br />
        </div>
    </div>

</div>


<div class="form-personal-profile" id="checkbox_require" style="text-align:center;">
	<input type="checkbox"  name="check_box" id="check_box"/>個人情報の取り扱いに同意します。
	<div id="errortext19"></div>
</div>


<!--------------------------------------->
<div class="form-personal-submit clear">
   
    <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
    <!--    <div class="form-handler"><a href="#"><img src="../img/entry/button-confirm.png" alt=""></a>-->
    <!--    </div>-->
</div>
</form>
</div>


</div>


</div>

<?php include('../inc/footer.php');?>

</body>
</html>