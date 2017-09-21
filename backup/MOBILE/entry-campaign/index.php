<?php
	ob_start();
?>
<?php 
	@include('../config_mobile.php');
	function curPageURL1() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
	if ($protocol == 'http:' || $protocol =='HTTP:'){
		$entry_protocol = str_replace('http', 'https', curPageURL1() );
		header('Location:'.$entry_protocol);
	}
	@include('../inc/header.php'); 
	$root_url_page=url_root."entry-campaign/";
if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $root_url_page; ?>style.css" media="all" />
 <script type="text/javascript" src="<?php echo $root_url_page; ?>js/watermark.js"></script>
  <script src="<?php echo $root_url_page; ?>js/validate_form_entry.js" type="text/javascript"></script>
 <script type="text/javascript">
 	$( document ).ready(function() {
		$("#text1").Watermark("姓");
		$("#text2").Watermark("名");
		$("#text3").Watermark("セイ");
		$("#text4").Watermark("メイ");
		$("#text5").Watermark("（例）ソニー株式会社");
		$("#text6").Watermark("メールアドレスを入力してください");
		$("#text7").Watermark("確認のためもう一度入力してください");
		$("#text8").Watermark("（例）テレビ事業部における海外営業");
		
    	$("#copyR").attr('style', 'width: 100%!important; font-size: 12px; line-height: 17px;');
		$("#to_pc_icon").hide();
		$("#menu_btn").hide();
	});
 
 </script>
 <div id="content" class="inside clear">
       <!--****************************************************-->
	<div class="bg_white  block_content clear">
    
    	<div class="clear content_inside header_lp_title_img">
    		<h2>無料キャリア相談エントリー</h2>
            <h3>今までのキャリアの棚卸し、市場価値、今後の可能性など、弊社のコンサルタントが貴方のキャリアパートナーとしてお話をお伺いさせていただきます。</h3>
        </div>
       
      	<div class="form_campaign_group clear">
        	<div class="entry_campaign content_inside header_lp_title_img clear">
            <form name="frm_entry_easy" action="confirm.php" method="post" id="submit_form"  enctype="multipart/form-data"  encoding="multipart/form-data">
            	<div class="group_txt_form clear">
                	<div class="clear title_txt">お名前 <span class="notice">(必須）</span><span class="hi_notice">※全角入力
</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input type="text" name="text1" value="" onblur="validatetext(this.value,this.id)" onfocus="click_text(this.id)" id="text1">
                        </div>
                        <div class="input_50 r">
                       	 <input type="text" name="text2" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" id="text2">
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext1"></span>&nbsp;&nbsp;<span id="errortext2"></span>
                    </div>
                    
                </div><!--group_txt_form-->
                
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">フリガナ <span class="notice">(必須）</span><span class="hi_notice"> ※全角カナ入力
</span></div>
                    <div class="clear input_form">
                    	<div class="input_50 l">
                       	 <input type="text" name="text3" value="" onblur="validatetext(this.value,this.id)" onfocus="click_text(this.id)" id="text3">
                        </div>
                        <div class="input_50 r">
                       	 <input type="text" name="text4" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" id="text4">
                        </div>
                    </div>
                    <div class="clear">
                   			 <span id="errortext3"></span>&nbsp;&nbsp;<span id="errortext4"></span>
                    </div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">会社名 <span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                    	 <input type="text" name="text5" id="text5" value="" onfocus="click_text(this.id)">
                        </div>
                      </div>
                    	<div class="clear">
                   			 <span id="errortext5"></span>&nbsp;&nbsp;<span id="errortext9999"></span>
                    	</div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">職種<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                       		<select onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)" id="select1" name="select1" class="selection">
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
                    <div class="clear"><span id="errorselect1"></span></div>
                </div><!--End Group txt-->
                
                <div class="group_txt_form clear">
                	<div class="clear title_txt">仕事内容 <span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_100">
                    	 <input type="text" name="text8" id="text8" value="" onfocus="click_text(this.id)">
                        </div>
                      </div>
                    	<div class="clear">
                   			 <span id="errortext8"></span>&nbsp;&nbsp;<span id="errortext9999"></span>
                    	</div>
                </div><!--group_txt_form-->
                
                <div class="group_txt_form clear" style="border:none;">
                	<div class="clear title_txt">メールアドレス<span class="notice">(必須）</span></div>
                    <div class="clear input_form">
                    	<div class="input_other">
                       		<input type="text" name="text6" id="text6" value="" onblur="IsEmail(this.value, this.id)" onfocus="click_text(this.id)">
                        </div>
                        <div class="input_other">
                       	 <input type="text" name="text7" id="text7" value="" onblur="confirm_Email(document.forms['submit_form']['text6'].value, document.forms['submit_form']['text7'].value, this.id)" onfocus="click_text(this.id)">
                        </div>
                        
                    </div>
                    <div class="clear"><span id="errortext6"></span>&nbsp;<span id="errortext7"></span></div>
                </div><!--group_txt_form-->
                
                <div class="clear submit_form_button_campaign">
                		<input type="submit" class="button-confirm" name="Submit" id="submit" value="内容確認に進む">
                         <span class='arrow_submit'>&rsaquo;</span>
                </div>
                
               </form> 
            </div><!--entry_campaign-->
        </div><!--form_campaign_group-->
        
        
        <div class="clear img_100"><img src="img/features-title.png"/></div>
        
         <div class="clear header_lp_title_img pd_b">
          	<div class="clear img_100"><img src="img/features-title-01.png"/></div>
         </div>
        
         <div class="clear header_lp_title_img">
         		<p class="txt1">30代マネージメント層以上の方々をサポートする上で、私たち自身も幅広い知識とスキルが要求されます。それにお応えできるよう、当社では、年間100時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています</p>
         		<p class="txt1">
                単なる情報と情報のマッチングで成功しないのが30代の転職です。そこで私たちが介入することによって成功へのお手伝いができればと思っています。
                </p>
                <p class="txt1">研修では、独自に開発した「キャリアコンサルタントトレーニングプログラム」や、「コーチング研修」などを行い、それらを受講することによって、アセスメント技術の向上や倫理観の確立に努めています。コンサルタント全員がGCDF資格取得に励むのもその一環です</p>
         </div><!--header_lp_title_img-->
         
         <div class="clear header_lp_title_img pd-tb">
          	<div class="clear img_100"><img src="img/features-title-02.png"/></div>
         </div>
        <div class="clear header_lp_title_img">
        	<p class="txt1">コンサルティング力を強みにしている人材紹介会社はたくさんありますが、私たちは「コンサルティング力の向上」を事業の最優先課題として位置づけ、積極的に取り組んできています。コンサルタントが米国CCE認定GCDF（キャリアカウンセラー）資格の取得に励むのもこうした取り組みの一つです。この資格を2002年6月に2名、その後も8名が取得しました。更に資格取得のための120時間のトレーニングプログラムを2名が受講しています。</p>
            <p class="txt1">GCDF資格とは、米国CCE.Inc.が認定しているキャリアカウンセラー資格です。キャリアカウンセラーに必要な幅広い知識と実践的なスキルを身につけるため、120時間にも及ぶトレーニングプログラムを受講し、試験（筆記・実技）に合格すると資格が取得できます</p>
        
        </div>
        
        <div class="clear header_lp_title_img pd-tb">
          	<div class="clear img_100"><img src="img/features-title-03.png"/></div>
         </div>
        <div class="clear header_lp_title_img">
        <div class="profile_content clear">
        	<div class="content clear">
                <table class="col1">
                    <tr>
                        <th>会社名</th>
                        <td>株式会社クライス＆カンパニー</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒105-0021　東京都港区東新橋2-4-1　サンマリーノ汐留2F</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>03-5733-1602（お問合せ受付）</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>1993年11月4日</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>1300万円</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>代表取締役社長　丸山 貴宏</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td>27人／内コンサルタント15人</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>
                            <ul>
                                <li>. ヘッドハンティング事業</li>
                                <li>・人材紹介事業（厚生労働大臣許可番号13-ユ-040184取得）</li>
                                <li>・人事・採用のコンサルティング事業</li>
                                <li>・HRコンサルティング事業</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>ホームページ</th>
                        <td><a href="http://www.kandc.com" target="_blank">www.kandc.com</a></td>
                    </tr>
                 
                </table>
</div></div>
        
        </div>
        
         
        
    </div><!--bg_white content_inside block_content clear-->

		<!--**************************-->
 </div><!--End content-->
    
    
    <?php @include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>