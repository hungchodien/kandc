<?php 

	//$timestamp = getTimestamp();
	//emitConditionalGet($timestamp);
	//emitDefaultHeaders($timestamp); 

?>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.maxlength_plugin.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/jquery.maxlength.js"></script>

<script type="text/javascript" src="<?php echo url_root; ?>js/prototype.js"></script>
<script type="text/javascript" src="<?php echo url_root; ?>js/auto_ruby.js"></script>
<script src="<?php echo url_root; ?>entry/validate_form_entry.js" type="text/javascript"></script>
<script type="text/javascript">
		jQuery( document ).ready(function($) {
			
			/*$("#text1").on("keypress keyup keydown",function (){ 
					setRuby('text1','text3');
					//alert("ok");
			});
			$("#text2").on("keypress keyup keydown",function (event) {   
					setRuby('text2','text4');
					//alert("ok");
			});*/
			$( "body" ).addClass( "entry_page" );

		});
</script>
<div class="breadcrumb" id="breadcrumb_top">
		<ul class="clear">
        	<li><a href="<?php echo url_root; ?>">クライス＆カンパニー</a></li>
            <li> &gt; </li>
            <li><a href="<?php echo url_root; ?>entry.html">エントリー</a></li>
         </ul>
</div><!--breadcrumb_top-->
<div class="bg_entry_fix clear">

	<div class="clear title_form_header">
            <div class="icon_title_entry_en clear"><img src="<?php echo url_root; ?>img/entry/en_title.png" alt="Entry"/></div>
            <div class="icon_title_entry_ja clear"><img src="<?php echo url_root; ?>img/entry/jp_title.png" alt="ヘッドハンターのリストにエントリーしませんか？"/></div>
            <div class="description_title clear">
            	<p class="togg_p">
                <span class="togg_span">「ヘッドハンターのリスト」にエントリーしていただきましたら、ご希望に合ったポジション情報が...</span>
                <a class="tlb_togg_mobile" href="javascript:toggleDiv('entry_desc_togg');"><span class="open_txt">詳しく見る<img src="<?php echo url_root; ?>img/entry/entry_down.png" alt=""/></span><span class="close_txt">たたむ <img src="<?php echo url_root; ?>img/entry/entry_up.png" alt=""/></span></a>
                </p>
                <p id="entry_desc_togg">「ヘッドハンターのリスト」にエントリーしていただきましたら、ご希望に合ったポジション情報が入ってきたタイミングで個別にお声掛けさせていただきます。ご紹介できるポジション情報は、企業の経営層からダイレクトにオーダーされた案件や、エントリーいただいている候補者の方のご希望に沿って私たちが独自に開拓したポジションなど、主に一般には出回ることのないコンフィデンシャルな案件です。
こちらからエントリーいただきましたら、後日EXECUTIVEチームからご連絡させていただきます。</p>
             </div><!--content_form_fist-->
         </div><!--title_form_header-->

    <div class="clear content_inc entry_form">
       <!-- <div class="icon_seal"><img src="<?php echo url_root; ?>img/entry/icon-entry.png"/></div>-->
        
        
         
        <div class="group_form_entry clear">
     <form id="submit_form" encoding="multipart/form-data" enctype="multipart/form-data" method="post" action="<?php echo url_root; ?>entry/confirm.html">
            <div class="topform_txt red-color clear">※ 必須項目になります。</div>
            <div class="form_one clear">
                    
                   <div class="table-personal-profile2">
            <table class="no_bb">
            <tr>
            <td class="label">
                        <div class="pc-s">お名前<span class="red-color">※</span></div>
                        <div class="mb-s">お名前<span class="red-color">※</span></div>
             </td>
             <td colspan="2">
                        <div class="td-content clear">
                            <!--<div style=" margin-right:12px;">姓</div>-->
                            <div class="easy_name"><input type="text" name="text1" id="text1" value="" placeholder="姓" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" />
                            <p><span id="errortext1"></span></p>
                            </div>
                            <!--<div style=" margin-right:12px;">名</div>-->
                            <div class="easy_name"><input type="text" name="text2" id="text2" value="" placeholder="名" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" />
                            <p><span id="errortext2"></span></p>
                            </div>
                            
                        </div>
                        
                    </td>
                </tr>
                
                <tr class="">    
                <td class="label">
                        <div>フリガナ<span class="red-color">※</span></div>
                        
                        
                    </td>
                    <td colspan="2">
                        <div class="td-content clear">
                            <!--<div>セイ</div>-->
                            <div class="easy_name"> <input type="text" name="text3" id="text3" value="" placeholder="セイ" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" />
                            <p><span id="errortext3"></span></p>
                            </div>
                            <!--<div>メイ</div>-->
                            <div class="easy_name"><input type="text" name="text4" id="text4" value="" placeholder="メイ" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" />
                             <p><span id="errortext4"></span></p>
                            </div>
                        </div>
                       
                    </td>
            </tr>
            
            </table>
            
            
            <table class="no_bb">
            <tr>
                    <td class="label">
                        <div class="pc-s">生年月日<span class="red-color">※</span></div>
                        <div class="mb-s">誕生年（西暦）<span class="red-color">※</span></div>
                        
                    </td>
                    <td colspan="2">
                        <div class="td-content clear">
                            <div class="pc-s pc_hiden">西暦</div>
                            <div class="col1_s col1_s_first">
                                <select class="selection selection-style" name="select1" id="select1" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                    <option value=""> 選択</option>
                                    <?php $year = 1940;
                                         $end = date("Y");
                                    for ($end; $end >= $year; $end--) {
                                        ?>
                                        <option value="<?php echo $end; ?>"><?php echo $end; ?></option>
                                    <?php } ?>
                                </select>
                                <p id="errorselect1" class="pc-s"></p>
								
                            </div>
                            <div class="col2_s">年</div>
                            
                            
                            
                            <div class="col1_s ">
                                <select class="selection selection-style" name="select2" id="select2" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                    <option value=""> 選択</option>
                                    <?php $moth = 1;
                                    $endMoth = 12;
                                    for ($moth; $moth <= $endMoth; $moth++) {
                                        ?>
                                        <option value="<?php echo $moth; ?>"><?php echo $moth; ?></option>
                                    <?php } ?>
                                </select>
                                <p id="errorselect2" class="pc-s"></p>
								
                            </div>
                            <div class="col2_s "> 月</div>
                            <div class="col1_s ">
                                <select class="selection selection-style" name="select3" id="select3" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                    <option value=""> 選択</option>
                                    <?php $day = 1;
                                    $endDay = 31;
                                    for ($day; $day <= $endDay; $day++) {
                                        ?>
                                        <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                    <?php } ?>
                                </select>
                                <p id="errorselect3" class="pc-s"></p>
								
                            </div>
                            <div class="col2_s "> 日</div>
                        </div>
                        
                    </td>
                </tr>
            </table>
            
            <table class="no_bb">
            <tr class="">
                    <td class="label">
                        <div>住所<span class="red-color">※</span></div>
                    </td>
                    
                    <td>
                        <div class="td-content state clear">
                           
                                <select class="selection" name="select4" id="select4" onfocus="click_text(this.id)" onblur="validateSelect(this.value, this.id)">
                                    <option value="">都道府県を選択してください。</option>
                                    <option value='　' >　</option>
                                    <option value='東京都' >東京都</option>
                                     <option value='千葉県' >千葉県</option>
                                     <option value='埼玉県' >埼玉県</option>
                                     <option value='神奈川県' >神奈川県</option>
                                     <option value='' >---------</option>
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
                            
                            <p><span id="errorselect4"></span></p>
                        </div>
                    </td>
                    
                    </tr>
                    
                    <tr>
                    <td class="label label_phone">
                        <div class="pc-s">電話番号<span class="red-color">※</span></div>
                        <div class="mb-s">電話番号<span class="red-color">※</span></div>
                        
                    </td>
                    <td colspan="2">
                        <div class="td-content phone clear">
                           <div class="col3 col3a">
                                <input  type="number" pattern="[0-9]*" name="text5" id="text5" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text(this.id)" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;"/><span class="minus">-</span>
                                <p><span id="errortext5"></span></p>
                           </div>
                           <div class="col3">
                                <input  type="number" pattern="[0-9]*" name="text6" id="text6" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;"/><span class="minus">-</span>
                                <p><span id="errortext6"></span></p>
                           </div>
                           <div class="col3">
                                <input  type="number" pattern="[0-9]*" name="text7" id="text7" value="" onfocus="click_text(this.id)" onblur="validatetext(this.value, this.id)" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;"/>
                                <p><span id="errortext7"></span></p>
                            </div>
                           
                        </div>
                        
                    </td>
                </tr>
                
            </table>
            
            <table class="no_bb">
                <tr>
                    <td class="label">
                        <div class="pc-s">メールアドレス<span class="red-color">※</span></div>
                        <div class="mb-s">メールアドレス<span class="red-color">※</span></div>
                        
                    </td>
                    <td colspan="2">
                       <div class=" td-content  clear">
                            <div class="mobile_bor"> <input class="text-personal-400" type="text" name="text8" id="text8" onfocus="click_text(this.id)" value="" onblur="IsEmail(this.value, this.id)" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;"/>
                            </div>
                             <p><span id="errortext8"></span></p>
                        </div>
                        
                       
                    </td>
                </tr>
            </table>
            
             <table class="no_bb">
                <tr>
                    <td class="label">
                        <div>ご希望のポジション</div>
                    </td>
                    <td colspan="2">
                       <div class="td-content radio_col clear">
                            <div class="first"><input type="checkbox" value="社長" id="checkbox1" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox1">社長</label></div>
                            
                            <div><input type="checkbox" value="取締役" id="checkbox2" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox2">取締役</label></div>
                            
                            <div><input type="checkbox" value="社外取締役" id="checkbox3" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox3">社外取締役</label></div>
                            <div><input type="checkbox" value="経営幹部" id="checkbox4" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox4">経営幹部</label></div>
                            <div><input type="checkbox" value="部門責任者クラス" id="checkbox5" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox5">部門責任者クラス</label></div>
                            <div class="end"><input type="checkbox" value="その他" id="checkbox6" name="checkbox_val[]" class="checkbox_cl"><label for="checkbox6">その他</label></div>
                            <p>
                            	
								<span id="errorcheckbox_cl" class=""></span>
							</p>
                        </div>
                        <div class="td-content clear">
                           <div class="fix_100 clear">
                           <textarea onclick="add_desc_hidden(this.id);" onfocus="click_text(this.id)"   id="text10" name="text10" style="width:96%; margin-bottom: 0px; height: 30px;"></textarea>
                           <p><span id="errortext10"></span></p>
                          </div>
                       </div>
                       
                    </td>
                </tr>
            </table>
            
             <table class="no_bb">
                <tr>
                    <td class="label">
                        <div class="pc-s">ご相談、<br>もしくはお問合せ内容</div>
                        <div class="mb-s">ご相談、もしくはお問合せ内容</div>
                    </td>
                    <td colspan="2">
                       <div class="td-content clear">
                            <div class="fix_100 clear">
                           <textarea  onfocus="click_text(this.id)" id="text11" name="text11" style="width:96%; margin-bottom: 0px; height: 40px;"></textarea>
                           <p><span id="errortext11"></span></p>
                           </div> 
                       </div>
                       
                    </td>
                </tr>
            </table>
        </div> 
                    
                    
            </div><!--form_one-->
            
            <div class="form_one clear upload_area pc_hiden">
            
                <div class="table-personal-profile">  
                        <table>
                        <tr>
                            <td class="label">
                                <div>経歴書を添付
                                <p class="normal">※ファイル名は半角英数</p>
                                </div>
                            </td>
                            <td>
                            <div class="clear">
                            <div class="l">
                                <div class="td-content clear">
                                    <div><input class="text-file-400" type="file" name="upload1" id="file1" onfocus="click_text(this.id)"
                                                onchange="validate_fileupload(this.value, this.id)"/></div>
                                    
                                </div>
                                <div class="td-content clear">
                                    <div><span id="errorfile1"></span></div>
                                </div>
                                <div class="td-content clear">
                                    <div><input class="text-file-400" type="file" name="upload2" id="file2" onfocus="click_text(this.id)"
                                                onchange="validate_fileupload(this.value, this.id)"/></div>
                                    
                                </div>
                                <div class="td-content clear">
                                    <div><span id="errorfile2"></span></div>
                                </div>
                                </div>
                                
                                <div class="note_file_input" style="margin:5px 0 5px 10px; width:250px; font-size:11px; line-height:15px; float: left;">
                                    <p>※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種<br />
                                    ※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。<br />
                その際には、お手数ですが右記メールアドレスまで 直接お送りください。
                <a class="red-color" href="mailto: ?subject=お問い合わせ&amp;body=【お名前】%0D%0A
【お問い合わせ内容】&amp;cc=exe@kandc.com" target="_blank"> exe@kandc.com</a></p>
                                </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                    
            </div><!--form_one-->
              <script type="text/javascript">
				jQuery(document).ready(function ($) {
						$('#text12').maxlength({showFeedback: 'active',max: 50,feedbackText: '残り文字数: {r}'});
						$('.select_show1').hide(); 
						$('.select_show2').hide();
						$('.exchange_select').hide();
						//$("#text12").Watermark("※具体的にお教えください。");
							$('#select5').change(function(){
								if($('#select5').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
									
									$('.select_show2').hide();
								}else if($('#select5').val() == '紹介（クライスにご登録している方より）' || $('#select5').val() == '紹介（クライスのご登録者以外より）') 
								 {
									$('.select_show2').show(); 
									$('.exchange_select').show();
									
									$('.select_show1').hide(); 
								 }else
								 {
										$('.select_show1').hide(); 
										$('.select_show2').hide();
										$('.exchange_select').hide();
										 
								 }
							});
					
					
					});
				</script>
            <div class="form_one clear">
                <div class="table-personal-profile">
                <table>
                    <tbody><tr>
                        <td class="label">
                            <div>媒体</div>
                        </td>
                        <td>
                            <div class="td-content clear">
                                <div>
                                    <select id="select5" name="select5" style="width: 250px" class="selection" onfocus="click_text(this.id)">
                                <option value="">下記から選択してください</option>
                                <option value="弊社コンサルタント専門サイト">弊社コンサルタント専門サイト</option>
                                <option value="Google">Google</option>
                                <option value="Yahoo">Yahoo</option>
                                <option value="その他検索エンジン">その他検索エンジン</option>
                                <option value="en転職コンサルタントを見て">en転職コンサルタントを見て</option>
                                <option value="日経キャリアNETを見て">日経キャリアNETを見て</option>
                                <option value="リクナビNEXTを見て">リクナビNEXTを見て</option>
                                <option value="ビズリーチを見て">ビズリーチを見て</option>
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
                            
                        <div class="td-content exchange_select clear">
                        <div class="clear select_show1" style="margin:5px 0; width:100%;">
                       <div class="clear" style="float:none;">※具体的にお教えください（50文字以内）</div>
                        <div class="clear" style="float:none;">
                        <textarea style="width:96%; margin-bottom: 0px; height: 36px;" name="text12" id="text12" onfocus="click_text(this.id)" ></textarea></div></div>
                         <div class="select_show2 clear" style="margin:5px 0;">
                            <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                            <div class="clear">
                             <select class="selection" style="width: 250px" name="select6" id="select6" onfocus="click_text(this.id)">
                                            <option value="">下記から選択してください</option>
                                               <?php 
					@include('../Lib/function/function.database.php');
					$query_consultant=ConsutantAll();
					while($row_consultant=mysql_fetch_array($query_consultant)):
					?>
					    <option  value="<?php echo $row_consultant['consultant_Name']; ?>"><?php echo $row_consultant['consultant_Name']; ?></option>
                        <?php
					endwhile;				?>
                             </select>
                            </div>
                        </div>
                    </div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            </div><!--form_one-->
            
            <div class="form_one clear">
                <div class="form-personal-profile">
        <div class="form-privacy clear">
            <div class="privacy-title red-color clear">【個人情報保護方針】</div>
            <div class="privacy-content clear">
                <p>わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br>
                    お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。<br><br>
    
                    1．個人情報の取得、利用及び提供について<br/>
                    人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。<br>
    
                    2．個人情報に関する法令や指針、規範について<br/>
                    個人情報に関する法令・国が定める指針その他の規範を守ります。<br/><br/>
    
                    3．個人情報の安全管理について<br/>
                    個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。<br/><br/>
    
                    4．個人情報に関する苦情及び相談について<br/>
                    個人情報に関する苦情及び相談には、速やかに対処します。<br/><br/>
    
                    5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について<br/>
                    個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。<br/><br/>
    
                    制定日&#12288;2005年3月1日<br/>
                    改訂日&#12288;2008年9月1日<br/>
                    株式会社クライス＆カンパニー<br/>
                    代表取締役社長丸山貴宏<br/><br/>
    
    
                    【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】<br/>
    
                    株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br/><br/>
    
                    1．（定義）<br/>
                    本規約において使用される各用語の定義は、以下に定めるとおりとします。<br/><br/>
    
                    （1）候補者<br/>
                    クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。<br/><br/>
    
                    （2）ご紹介企業<br/>
                    クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。<br><br>
    
                    （3）転職支援サービス<br/>
                    候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。<br><br>
    
                    （4）クライスの転職支援サイト<br/>
                    クライスが管理・運営している以下のウェブサイトをいいます。<br/>
                    http://www.kandc.com<br/><br/>
    
                    （5）候補者情報<br/>
                    候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。<br><br>
    
                    2．（申し込み方法）<br/>
                    転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。<br><br>
    
                    3．（サービスの提供）<br/>
                    クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）<br><br>
    
                    （1）電話や面談による転職相談の実施<br/>
                    （2）担当コンサルタントによる転職活動支援<br/>
                    （3）Position Information（求人票）を補足する求人情報の提供<br/>
                    （4）応募手続きの代行<br>
                    （5）その他利用者の転職に有益とクライスが判断する一切のサービス<br/>
    
                    4．（転職支援サービスの変更・中断・終了）<br/>
                    クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。<br><br>
    
                    5．（転職支援サービス提供の終了事由）<br/>
                    クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。<br><br>
    
                    a.候補者が本規約に定める各事項に違反した場合<br/>
                    b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合<br/>
                    <br/>
                    6．（個人情報の取り扱い）<br/>
                    クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。<br><br>
    
                    7．（候補者情報の正確性）<br/>
                    候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。<br><br>
    
                    8．（求人照合）<br/>
                    クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。<br><br>
    
                    9．（労働条件）<br/>
                    クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、&#12288;候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。<br><br>
    
                    10．（禁止事項）<br/>
                    候補者は、以下の行為をしてはならないものとします。<br/><br/>
    
                    a.虚偽の情報をクライスに提供する行為<br/>
                    b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為<br/>
                    c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者<br/>
                    （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為<br/>
                    d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為<br/>
                    e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為<br/>
                    f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為<br/>
    
                    11．（情報の加工）<br/>
                    クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。<br/><br/>
    
                    12．（免責）<br/>
                    クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。<br/><br/>
    
                    13．（不可抗力）<br/>
                    天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。<br/><br/>
    
                    14．（損害賠償責任）<br/>
                    候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。<br/>
                    15．（本規約の変更）<br/>
                    クライスは、必要に応じて本規約の内容を変更することができるものとします。<br/>
                    クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。<br/>
    
                    16．（定めのない事項）<br/>
                    本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。<br/>
                    17．（管轄裁判所）<br/>
                    万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。<br/><br/>
    
                    制定日&#12288;2009年5月12日<br/>
                    株式会社クライス＆カンパニー<br/><br/>
    
    
                    【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】<br/><br/>
    
                    1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的<br/>
                    当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。<br/><br/>
    
                    2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて<br/>
                    （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。<br/><br/>
    
                    （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。<br/>
    
                    （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。<br/>
    
                    （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。<br/>
    
                    （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。<br/><br/>
    
                    3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供<br/>
                    当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。<br/>
    
                    4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託<br/>
                    当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。<br/><br/>
    
                    5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について<br/>
                    エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。<br/><br/>
    
                    6．掲載の求人、企業情報について<br/>
                    当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。<br/><br/>
    
                    改訂日&#12288;2011年3月9日<br/>
                    株式会社クライス＆カンパニー<br/>
    
                    【個人情報の開示・問合せ等の連絡方法・連絡先】<br>
    
                    ◆連絡方法<br/>
                    ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。<br/><br/>
    
                    ◆連絡先<br/>
                    株式会社クライス＆カンパニー<br/>
                    人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）<br/>
                    東京都港区東新橋2-4-1 サンマリーノ汐留2F<br/>
                    TEL：03-5733-1602&#12288;&#12288;Email：privacy@kandc.com</p>
            </div>
        </div>
    
    </div>
            </div><!--form_one-->
            
            <div class="r form_one_tbl clear">
                <div class="l ck_tlb checkbox_mb">
                    <label><span class="tb1"><input id="check_box" type="checkbox" name="check_box"></span><span class="tb2">個人情報の取り扱いに同意します。</span></label>
                    <div id="errortext21"></div>
                </div>
                <div class="r tbl_button_div">
                    <input id="tbl_submit_form" type="submit" class="tbl_submit_entry" name="submit_confirm" value="内容確認に進む"/>
                </div>
            </div>
                
            </form><!--submit_form-->
        </div><!--group_form_entry-->
        
    </div>
	
    
        
        
</div>
<div class="breadcrumb clear">
   		
         <div id="back_top">
    		<a href="#top"><img alt="" src="<?php echo url_root; ?>img/home/page_top.png"/></a>
		</div>
</div>

