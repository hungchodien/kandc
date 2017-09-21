<script type="text/javascript">
	jQuery( document ).ready(function($) {
		$(window).on('load resize', function () {
		var height_window=$(window).outerHeight( true );
		var width_window=$(window).width();
		var height_bg_company=$(".bg_company_img").outerHeight( true );
		var height_title_company=$("#title_cp_top").height();
		//var isFix=window.matchMedia("only screen and (max-width: 930px)");
			if (width_window>930)
			{
				
				$(".title_company_top").css({
						"right":(width_window-930)/2,
						"top":(height_bg_company-height_title_company)/2
					});
				
			}
			else
			{
				//alert("<930px");
				$(".title_company_top").css({
						"right":"10px",
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
            <li><a href="<?php echo url_root; ?>company.html"> 会社概要 </a></li>
           
        </ul>
</div><!--breadcrumb_top-->
<div class="clear content_inc company_bg">
	<div class="bg_company_img clear">
    	<img class="img_pc" src="<?php echo url_root; ?>img/company/main_title.png" alt="Company 株式会社 クライス＆カンパニー"/>
        <img class="img_mobile" src="<?php echo url_root; ?>img/company/main_title_mobile.png" alt="Company 株式会社 クライス＆カンパニー"/>
    </div>
    
   <div class="group_company clear">
    	<div class="clear content_company ">
        	<div class="clear description_company">
            	<p>当社は、IT企業のエグゼクティブポジション専門のヘッドハンティング会社として1993年11月に設立されました。今日までの20余年、30代マネージャークラスまで領域を広げつつも、創業から一貫してハイクラスポジションにこだわり続け、転職・転身のお手伝いをしております。EXECUTIVEチーム発足にともない、社長から、取締役、社外取締役、執行役員、部門責任者、マネージャー、リーダーポジションまで、それぞれの領域に精通した専門のコンサルタントがご支援させていただくことができるようになりました。いますぐ転身（転職）をお考えの方だけでなく、将来的にご自身のキャリアについてご相談されたい方は是非ご連絡ください。
                </p>
            </div>
            <!--<div class="l title_scroll">会社概要</div>-->
            
            <h3 class="left_company_title clear"><img src="<?php echo url_root; ?>img/company/sub_title.png" alt="会社概要"></h3>
			<div class="clear company_content_single">
                <table width="100%" class="table_company_col">
                  <tr>
                    <th>会社名</th>
                    <td>株式会社クライス＆カンパニー</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>〒105-0021 東京都港区東新橋2-4-1 サンマリーノ汐留2F</td>
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
                    <td>33人／内コンサルタント18人</td>
                  </tr>
                   <tr>
                    <th>事業内容</th>
                    <td>・ヘッドハンティング事業<br/>
                        ・人材紹介事業（厚生労働大臣許可番号13-ユ-040184）<br/>
                        ・人事・採用のコンサルティング事業<br/>
                      </td>
                  </tr>
                   <tr>
                    <th>決算期</th>
                    <td>9月</td>
                  </tr>
                   <tr>
                    <th>売上高</th>
                    <td>6億2,000万円（2014年）</td>
                  </tr>
                   <tr>
                    <th>取引金融機関</th>
                    <td>りそな銀行田町支店</td>
                  </tr>
                   <tr>
                    <th>関連会社</th>
                    <td>（株）リージョナルスタイル&nbsp;&nbsp;/&nbsp;&nbsp;地方転職と地域活性化のサポート<br/>（株）クライス出版&nbsp;&nbsp;/&nbsp;&nbsp;キャリアに関わる書籍の企画<br/>（有）ICSS&nbsp;&nbsp;/&nbsp;&nbsp;NPOインディペンデントコントラクター協会の活動サポート<br/></td>
                  </tr>
                   <tr>
                        <th>WEBサイト</th>
                        <td>30代・40代の転職支援サイト <a href="http://www.kandc.com/">www.kandc.com</a><br />
                            エグゼクティブ専門転職支援サイト <a href="http://www.kandc.com/exe/" target="_blank">www.kandc.com/exe/</a><br />
                               コンサルタント専門転職支援サイト <a href="http://kc-consul.com/"  target="_blank">kc-consul.com</a>
                        </td>
                    </tr>
                </table>
    
            </div>
        </div>
    </div>
    
    <div class="breadcrumb clear">
   		
        
        <div id="back_top">
    		<a href="#top"><img alt="Page Top" src="<?php echo url_root; ?>img/home/page_top.png"></a>
		</div>
   </div>
    
    
</div>