<form action="confirm.php" method="post" id="submit_form" enctype="multipart/form-data">
  <?php
if (isset($_GET['entry_id'])) {

	if ($_GET['entry_id'] == 1019611):
	//amazon
	$amazon_id = 1019611;
	?>
  <input type="hidden" name="company_id" id="company_id" value="<?php echo $amazon_id;?>"/>
  <?php
	 else :
	if ($_GET['entry_id'] == 210685):
	//amazon
	$amazon_id = 210685;
	?>
  <input type="hidden" name="company_id" data-value="fixed" id="company_id" value="<?php echo $amazon_id;?>"/>
  <?php
	 else :
	if ($entry_id_index > 0 && $cmd == 'interview'):
	$entry_id_company  = (int) $_GET['entry_id'];
	$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' order by `id_interview` DESC limit 1", "`company_name`");
	if ($List_cc_interview['cnt'] > 0):
	?>
  <input type="hidden" name="company_id" data-value="Interviews" id="company_id" value="<?php echo $entry_id_index;?>"/>
  <?php
	 else :
	?>
  <input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index;?>"/>
  <?php
	endif;
	 else :
	if ($entry_id_index > 0 && $cmd == 'consultant'):
	$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_index' order by `consultant_Date` DESC limit 1", "`consultant_Name`");
	if ($List_entry_consultant['cnt'] > 0):
	?>
  <input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_index;?>"/>
  <?php
	 else :
	?>
  <input type="hidden" name="entry_id" id="entry_id" value="<?php echo $entry_id_index;?>"/>
  <?php
	endif;
	 else :

	$entry_id_company = (int) $_GET['entry_id'];

	$List_cc_interview = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_company' order by `id_interview` DESC limit 1", "`company_name`");
	if ($List_cc_interview['cnt'] > 0 && $entry_id_company > 0):
	?>
  <input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company;?>"/>
  <?php
	 else :

	$list_job = Get_Data("job", " and `order_id`='$entry_id_company'  limit 1", "`company_id`");

	if ($list_job['cnt'] <= 0):
	$List_entry = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' order by `scrol_venderID` DESC limit 1", "`company_name`");
	if ($List_entry['cnt'] > 0):
	$entry_id_company_end = $entry_id_company;
	 else :
	$List_entry_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' order by `consultant_Date` DESC limit 1", "`consultant_Name`");
	if ($List_entry_consultant['cnt'] > 0):
	$entry_id_consultant = $entry_id_company;
	 else :
	$entry_id_company_end = "";
	endif;
	endif;
	 else :
	$order_id_job = $entry_id_company;
	endif;

	?>
  <input type="hidden" name="entry_id" id="entry_id" value="<?php echo $order_id_job;?>"/>
  <input type="hidden" name="company_id" id="company_id" value="<?php echo $entry_id_company_end;?>"/>
  <input type="hidden" name="consultant_id" id="consultant_id" value="<?php echo $entry_id_consultant;?>"/>
  <?php
	endif;
	endif;
	endif;
	endif;
	endif;
}
?>
  <input type="hidden" name="status_entry" id="status_entry" value="<?php echo $status_entry;?>"/>
  <input type="hidden" name="cmd" id="cmd" value="<?php echo $cmd;?>"/>
  <div class="label-asked">
    <div class="asked">
      <?php

if (isset($_GET['entry_id'])):

//	@include('../Lib/_init.php');
//	@include('../Lib/function/function.database.php');
//	$entry_id_company=$_GET['entry_id'];

if ($_GET['entry_id'] == 1019611):
echo "エントリー企業: アマゾン ジャパン株式会社";
 else :

if ($_GET['entry_id'] == 210685):
echo "エントリー企業: アマゾン ジャパン株式会社";
 else :
if ($entry_id_index > 0 && $cmd == 'interview'):
$List_interview         = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' and  `entry_id`>0 order by `id_interview` DESC limit 1", "`company_name`");
$company_name_interview = $List_interview['company_name'];
if (!empty($company_name_interview)):
echo "エントリー企業: ".$company_name_interview;
 else :
echo "お申し込みいただくにあたって";
endif;
 else :
if ($entry_id_index > 0 && $cmd == 'consultant'):
$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_index' and consultant_entry_id>0 order by `consultant_Date` DESC limit 1", "`consultant_Name`");
$consultant_name = $List_consultant['consultant_Name'];
if (!empty($consultant_name)):
echo "指名コンサルタント: ".$consultant_name;
 else :
echo "お申し込みいただくにあたって";
endif;
 else :
$List_interview         = Get_Data("interview", " and `status_interview`=0 and `entry_id`='$entry_id_index' and  `entry_id`>0 order by `id_interview` DESC limit 1", "`company_name`");
$company_name_interview = $List_interview['company_name'];
if (!empty($company_name_interview)):
echo "エントリー企業: ".$company_name_interview;
 else :
$List         = Get_Data("scrol_vender", " and `scrol_venderStatus`=0 and `company_id`='$entry_id_company' and `company_id`>0 order by `scrol_venderID` DESC limit 1", "`company_name`");
$company_name = $List['company_name'];
if (!empty($company_name)):
echo "エントリー企業: ".$company_name;
 else :
$List_consultant = Get_Data("consultant", " and `consultant_Status`=0 and `consultant_entry_id`='$entry_id_company' and consultant_entry_id>0 order by `consultant_Date` DESC limit 1", "`consultant_Name`");
$consultant_name = $List_consultant['consultant_Name'];
if (!empty($consultant_name)):
echo "指名コンサルタント: ".$consultant_name;
 else :

$List_Job  = Get_Data("job", " and `order_id`='$entry_id_company' and order_id>0 order by `listed_timestamp` DESC limit 1", "`job_title`");
$job_title = $List_Job['job_title'];
if (!empty($job_title)):
echo "エントリー求人: ".$job_title."[".$entry_id_company."]";
 else :
echo "お申し込みいただくにあたって";
endif;

endif;

endif;

endif;
endif;
endif;
endif;
endif;
 else :
echo "お申し込みいただくにあたって";
endif;
?>
    </div>
    <?php
//content asked company
$conten_asked = '<div class="content-asked" style="padding-top:5px;">※こちらは企業への正式応募ではありません。ご本人様の許可なく情報を企業へお伝えすることは決してありませんのでご安心ください。</div>';
if ($_GET['entry_id'] == 1019611):
echo $conten_asked;//text for company id
 else :
if ($_GET['entry_id'] == 210685):
echo $conten_asked;//text for company id
 else :
if (!empty($company_name_interview)):
echo $conten_asked;//text for company id
 else :
if (!empty($company_name)):
echo $conten_asked;//text for company id
 else :
?>
    <div class="content-asked" style="padding-top:5px;">転職に関するご相談、企業のご紹介など費用は全て無料ですので、ご安心下さい。
      <?php if ($List_consultant['cnt'] > 0):?>
      <p>ご経験、ご希望によってはサポートが難しい場合もございますのでご了承ください。</p>
      <?php endif;?>
    </div>
    <?php
endif;
endif;
endif;
endif;
?>
  </div>
  <div id="personal_block1" class="form-personal-profile step_hiden">
    <div class="label-personal">個人プロフィール <!--<span class="r" style="font-size:12px;"><span class="red-color">※</span> 必須項目になります。</span>--></div>
    <div class="table-personal-profile2">
      <table class="no_bb">
        <tr>
          <td class="label"><div>お名前 <span class="red-color">(必須)</span></div></td>
          <td class="pd10"><div class="td-content line_auto  clear">
              <div class="name_label">姓</div>
              <div class="easy_name"  style="position:relative;" >
                <input type="text" name="text1" id="text1" value="" class="bg_error_fx" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" />
                <p id="errortext1"></p>
              </div>
              <div class="name_label">名</div>
              <div class="easy_name"  style="position:relative;">
                <input type="text" name="text2" id="text2" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                <p id="errortext2"></p>
              </div>
            </div>
            <div class="td-content clear group_error" >
              <p><span id="errortext12"></span></p>
            </div></td>
        </tr>
      </table>
      <table class="no_bb">
        <tr>
          <td class="label"><div>フリガナ <span class="red-color">(必須)</span></div></td>
          <td class="pd10"><div class="td-content line_auto clear">
              <div class="name_label">セイ</div>
              <div class="easy_name" style="position:relative;" >
                <input type="text" name="text3" id="text3" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"/>
                <p id="errortext3" class="error_box34"></p>
              </div>
              <div class="name_label">メイ</div>
              <div class="easy_name" style="position:relative;" >
                <input type="text" name="text4" id="text4" value="" class="bg_error_fx" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
                <p id="errortext4" class="error_box34"></p>
              </div>
            </div>
            <div class="td-content clear group_error" >
              <p><span id="errortext34"></span></p>
            </div></td>
        </tr>
      </table>
      <table class="no_bb">
        <tr>
          <td class="label"><div>生年月日 <span class="red-color">(必須)</span></div></td>
          <td  class="pd10"><div class="td-content clear" style="position:relative;">
              <div>西暦</div>
              <div>
                <select class="selection selection-style bg_error_fx" name="select1" id="select1" onblur="validateSelect(this.value, this.id)" onfocus="click_text_error(this.id)">
                  <option value=""> 選択</option>
                  <?php $year = 1940;
$end        = date("Y");
for ($end; $end >= $year; $end--) {
	?>
                  <option value="<?php echo $end;?>"><?php echo $end;
	?></option>
                  <?php }?>
                </select>
                <p id="errorselect1" class="error_select1"></p>
              </div>
              <div>年</div>
              <div>
                <select class="selection selection-style bg_error_fx" name="select2" id="select2" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                  <option value=""> 選択</option>
                  <?php $moth = 1;
$endMoth    = 12;
for ($moth; $moth <= $endMoth; $moth++) {
	?>
                  <option value="<?php echo $moth;?>"><?php echo $moth;
	?></option>
                  <?php }?>
                </select>
                <p id="errorselect2" class="error_select2"></p>
              </div>
              <div> 月</div>
              <div>
                <select class="selection selection-style bg_error_fx" name="select3" id="select3" onblur="validateSelect(this.value, this.id)"  onfocus="click_text_error(this.id)">
                  <option value=""> 選択</option>
                  <?php $day = 1;
$endDay    = 31;
for ($day; $day <= $endDay; $day++) {
	?>
                  <option value="<?php echo $day;?>"><?php echo $day;
	?></option>
                  <?php }?>
                </select>
                <p id="errorselect3" class="error_select3"></p>
              </div>
              <div> 日</div>
            </div>
            <div class="td-content clear group_error" >
              <p><span id="errorselect123"></span></p>
            </div></td>
        </tr>
      </table>
      <table class="no_bb">
        <tr>
          <td class="label"><div>電話番号 <span class="red-color">(必須)</span></div></td>
          <td class="pd10"><div class="td-content phone clear" >
              <div style="position:relative;">
                <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="number" name="text5" id="text5" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive; margin-left: 5px;" onfocus="click_text_error(this.id)"/>
                -
                <p id="errortext5" class="error_box5"></p>
              </div>
              <div style="position:relative;">
                <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="number" name="text6" id="text6" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/>
                -
                <p id="errortext6" class="error_box6"></p>
              </div>
              <div style="position:relative;">
                <input class="phone_require bg_error_fx" onblur="validatetext(this.value, this.id)" type="number" name="text7" id="text7" value="" style="-webkit-ime-mode:inactive;-moz-ime-mode:inactive;-ms-ime-mode:inactive;ime-mode:inactive;" onfocus="click_text_error(this.id)"/>
                <p id="errortext7" class="error_box7"></p>
              </div>
              <p class="check_number_error" style="display:none;">「半角英数字」で電話番号を正しく入力ください。</p>
            </div>
            <div class="td-content clear group_error" >
              <p><span id="errortext567"></span></p>
            </div></td>
        </tr>
      </table>
      <table>
        <tr>
          <td class="label"><div>メールアドレス<span class="red-color">(必須)</span></div></td>
          <td class="pd10"><div class="td-content clear line_auto" style="position:relative;">
              <div>
                <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text8" id="text8" onfocus="click_text_error(this.id)" placeholder="（例）example@kandc.com"/>
                <p id="errortext8" class="error_box8"></p>
              </div>
              
              <!--<div>
                            <input class="text-personal-400 bg_error_fx" onblur="validatetext(this.value, this.id)" type="text" name="text9" id="text9" onfocus="click_text_error(this.id)"/>
                              <p id="errortext9" class="error_box9"></p>
                        </div>--> 
              <!--<div style="width: 70px;  margin: 3px 0 0px 0">&nbsp;
※確認用</div>-->
              
              <p class="check_email_error" style="display:none;">必須項目です。必ずご入力ください。</p>
            </div>
            <div class="td-content clear">
              <div><span id="errortext89"></span></div>
            </div></td>
        </tr>
      </table>
    </div>
  </div>
  
  <!--*************************************************************-->
  <div id="personal_block2" class="form-personal-profile">
    <div class="label-personal">最終学歴</div>
    <div class="table-personal-profile">
      <table>
        <tr>
          <td class="label"><div>学校名<span class="red-color">(必須)</span></div></td>
          <td><div class="td-content clear" style="position: relative;">
              <div>
                <input type="text" name="text10" id="text10" value="" class="bg_error_fx" style="width:580px;" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)"  placeholder="（例）◯◯大学　◯◯学部　◯◯学科" />
                <p id="errortext10" class="error_box10 error_box10"></p>
              </div>
            </div></td>
        </tr>
      </table>
    </div>
  </div>
  
  <!--*************************************************************-->
  <div id="personal_block3" class="form-personal-profile">
    <div class="label-personal">職務経歴について <span style="font-size: 12px;font-weight: normal">※直近の職歴についてご入力ください。</span> </div>
    <div class="table-personal-profile">
      <table>
        <tr>
          <td class="label"><div>会社名<span class="red-color">(必須)</span></div></td>
          <td><div class="td-content clear" style="position:relative;">
              <div class="clear">
                <div class="l" style="margin:0;">
                  <input class="bg_error_fx" style="width: 400px;" type="text" name="text14" id="text14" value="" onfocus="click_text_error(this.id)" onblur="validatetext(this.value, this.id)" placeholder="（例）株式会社◯◯"  />
                  <p id="errortext14" class="error_box14 error_box14"></p>
                </div>
              </div>
            </div>
            <div class="td-content clear group_error" >
              <p><span id="errortext14_gs"></span></p>
            </div></td>
        </tr>
        <tr>
          <td class="label"><div>勤務期間</div></td>
          <td><div class="td-content td-content-bottom clear">
              <div>西暦</div>
              <div>
                <select class="selection selection-style" name="select7" id="select7" onfocus="click_text(this.id)">
                  <option value=""> 選択</option>
                  <?php $year = 1940;
$end        = date("Y");
for ($end; $year <= $end; $end--) {
	?>
                  <option value="<?php echo $end?>"><?php echo $end?></option>
                  <?php }?>
                </select>
              </div>
              <div>年</div>
              <div>
                <select class="selection selection-style" name="select8" id="select8" onfocus="click_text(this.id)">
                  <option value=""> 選択</option>
                  <?php $moth = 1;
$endMoth    = 12;
for ($moth; $moth <= $endMoth; $moth++) {
	?>
                  <option value="<?php echo $moth?>"><?php echo $moth?></option>
                  <?php }?>
                </select>
              </div>
              <div>月 ～</div>
              <div>
                <select class="selection selection-style" name="select9" id="select9" onfocus="click_text(this.id)">
                  <option value=""> 選択</option>
                  <?php $year = 1940;
$end        = date("Y");
for ($end; $year <= $end; $end--) {
	?>
                  <option value="<?php echo $end?>"><?php echo $end?></option>
                  <?php }?>
                </select>
              </div>
              <div>年</div>
              <div>
                <select class="selection selection-style" name="select10" id="select10" onfocus="click_text(this.id)">
                  <option value=""> 選択</option>
                  <?php $moth = 1;
$endMoth    = 12;
for ($moth; $moth <= $endMoth; $moth++) {
	?>
                  <option value="<?php echo $moth?>"><?php echo $moth?></option>
                  <?php }?>
                </select>
              </div>
              <div>月</div>
            </div>
            <div class="td-content td-content-2 clear">
              <div>
                <label>
                  <input type="radio" name="radio1" value="現職中" id="radio1" checked="checked"/>
                  現職中</label>
              </div>
              <div>
                <label>
                  <input type="radio" name="radio1" value="離職中" id="radio2"/>
                  離職中</label>
              </div>
            </div></td>
        </tr>
        <tr>
          <td class="label"><div>職種<span class="red-color">(必須)</span></div></td>
          <td><div class="td-content clear" style="position:relative;" >
              <div>
                <select class="selection selection-style bg_error_fx" name="select11" id="select11" style="width: 300px;" onfocus="click_text_error(this.id)" onblur="validateSelect(this.value, this.id)">
                  <option value="">下記から選択してください</option>
                  <option disabled="disabled" value="0">▼ コンサルタント   －－－－－－－－</option>
                  <option class="tree_select" value="コンサルタント">コンサルタント</option>
                  <option class="tree_select" value="コンサルタント（IT）">コンサルタント（IT）</option>
                  <option disabled="disabled" value="0">▼ IT・ソフトウェア   －－－－－－－－</option>
                  <option class="tree_select" value="ITハード系エンジニア">ITハード系エンジニア</option>
                  <option class="tree_select" value="ソフトウェアエンジニア">ソフトウェアエンジニア</option>
                  <option class="tree_select" value="WEB・モバイル関連">WEB・モバイル関連</option>
                  <option class="tree_select" value="その他ソフトウェア関連">その他ソフトウェア関連</option>
                  <option disabled="disabled" value="0">▼ 機械・メカトロ   －－－－－－－－</option>
                  <option class="tree_select" value="機械・メカトロニクスエンジニア">機械・メカトロニクスエンジニア</option>
                  <option class="tree_select" value="電気・電子・半導体エンジニア">電気・電子・半導体エンジニア</option>
                  <option disabled="disabled" value="0">▼ 化学・バイオ・メディカル   －－－－－－－－</option>
                  <option class="tree_select" value="化学系">化学系</option>
                  <option class="tree_select" value="バイオ・メディカル系">バイオ・メディカル系</option>
                  <option disabled="disabled" value="0">▼ 企画系   －－－－－－－－</option>
                  <option class="tree_select" value="経営企画・事業企画">経営企画・事業企画</option>
                  <option class="tree_select" value="営業企画">営業企画</option>
                  <option class="tree_select" value="業務企画">業務企画</option>
                  <option class="tree_select" value="商品・サービス企画">商品・サービス企画</option>
                  <option disabled="disabled" value="0">▼ IR・広報・マーケティング   －－－－－－－－</option>
                  <option class="tree_select" value="IR">IR</option>
                  <option class="tree_select" value="広報">広報</option>
                  <option class="tree_select" value="マーケティング">マーケティング</option>
                  <option disabled="disabled" value="0">▼ 事務   －－－－－－－－</option>
                  <option class="tree_select" value="総務">総務</option>
                  <option class="tree_select" value="法務">法務</option>
                  <option class="tree_select" value="人事">人事</option>
                  <option class="tree_select" value="経理・財務・会計">経理・財務・会計</option>
                  <option class="tree_select" value="秘書">秘書</option>
                  <option class="tree_select" value="事務・庶務">事務・庶務</option>
                  <option disabled="disabled" value="0">▼ 営業・サービス・販売   －－－－－－－－</option>
                  <option class="tree_select" value="営業">営業</option>
                  <option class="tree_select" value="販売・サービス">販売・サービス</option>
                  <option disabled="disabled" value="0">▼ 金融・不動産   －－－－－－－－</option>
                  <option class="tree_select" value="金融関連職">金融関連職</option>
                  <option class="tree_select" value="建設・建築・土木系">建設・建築・土木系</option>
                  <option disabled="disabled" value="0">▼ その他   －－－－－－－－</option>
                  <option class="tree_select" value="インストラクター">インストラクター</option>
                  <option class="tree_select" value="トップマネジメント">トップマネジメント</option>
                  <option class="tree_select" value="ロジスティクス・購買関連">ロジスティクス・購買関連</option>
                  <option class="tree_select" value="エスタブリッシュメント職">エスタブリッシュメント職</option>
                  <option class="tree_select" value="クリエイティブ系">クリエイティブ系</option>
                  <option class="tree_select" value="デザイナー">デザイナー</option>
                </select>
                <p id="errorselect11" class="error_select11"></p>
              </div>
            </div></td>
        </tr>
        <tr>
          <td class="label"><div>年収<span class="red-color">(必須)</span> </div></td>
          <td><div class="td-content clear" style="position: relative">
              <div>
                <input class="bg_error_fx" style="width: 100px; margin-bottom: 10px" type="text" name="text17" id="text17" value="" onblur="validatetext(this.value, this.id)" onfocus="click_text_error(this.id)" />
              </div>
              <div>万円</div>
              <div>
                <p id="errortext17" class="error_box17 error_box17"></p>
              </div>
            </div></td>
        </tr>
        <tr>
          <td class="label"><div>職務内容を入力または経歴書を添付 <span class="red-color">(必須)</span> <br/>
              <i style="font-size: 12px;font-weight: normal">※ファイル名は半角英数</i></div></td>
          <td><div class="td-content clear" style="position:relative;">
              <div  id = "desctext18"class="desc_hidden "><span>職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください</span></div>
              <div>
                <textarea class="bg_error_fx" rows="10" cols="20" style="width:730px; height:120px; margin-bottom: 10px" name="text18" id="text18"  onfocus="click_text(this.id)"></textarea>
                <p id="errortext18" class="error_box18"></p>
              </div>
            </div>
            <div class="clear" style="position:relative;">
              <div class="fl">
                <div class="td-content clear">
                  <div>
                    <input class="text-file-400 bg_error_fx" type="file" name="upload1" id="file1" value="" onfocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/>
                  </div>
                </div>
                <div class="td-content clear">
                  <div><span id="errorfile1"></span></div>
                </div>
                <div class="td-content clear">
                  <div>
                    <input  class="text-file-400 bg_error_fx" type="file" name="upload2" id="file2" value="" onfocus="click_text(this.id)"
                                    onchange="validate_fileupload(this.value, this.id)"/>
                  </div>
                </div>
                <div class="td-content clear">
                  <div><span id="errorfile2"></span></div>
                </div>
              </div>
              <div style="margin:5px 0; font-size:11px; line-height:15px; float: right; width: 300px;">
                <p>※PDF、xls、doc、ppt、txt, xlsx, docx, pptx の8種<br />
                  ※ネットワーク等のタイミングによりレジュメが添付できない場合がございます。<br />
                  その際には、お手数ですが右記メールアドレスまで 直接お送りください。<a href="mailto:kreis-info@kandc.com" target="_blank">kreis-info@kandc.com</a></p>
              </div>
            </div>
            <div class="td-content clear" style="position:relative;"> <span id="file_text18"></span> </div></td>
        </tr>
      </table>
    </div>
  </div>
  
  <!--*************************************************************--> 
  <!--*************************************************************-->
  <div id="personal_block5" class="form-personal-profile">
    <div class="label-personal">何をご覧になってアクセス頂きましたか？</div>
    <div class="table-personal-profile">
      <table>
        <tr>
          <td valign="middle" class="label colpan_set" rowspan="1"><div>媒体</div></td>
          <td><script type="text/javascript">
				jQuery(document).ready(function ($) {


						$('#text21').maxlength({showFeedback: 'true',max: 50,feedbackText: '残り文字数: {r}'});

						$('.select_show1').hide();
						$('.select_show2').hide();
						$('.select_show2').hide();
						$('.exchange_select').hide();

							$('#select12').change(function(){
								$('#text21').val('');$('#select13').val('');$('#select14').val('');
								if($('#select12').val() == 'その他') {
									$('.select_show1').show();
									$('.exchange_select').show();
                                    $('.select_show3').hide();
									$('.select_show2').hide();
								}else if($('#select12').val() == '紹介（クライスにご登録している方より）' || $('#select12').val() == '紹介（クライスのご登録者以外より）')
								 {
									$('.select_show2').show();
									$('.exchange_select').show();
                                    $('.select_show3').hide();
									$('.select_show1').hide();
                                 }else if($('#select12').val() == '駅広告'){
                                    $('.select_show3').show();
                                    $('.exchange_select').show();
                                    $('.select_show1').hide();
                                    $('.select_show2').hide();
								 }else
								 {
										$('.select_show1').hide();
										$('.select_show2').hide();
                                        $('.select_show3').hide();
										$('.exchange_select').hide();

								 }
							});


					});
				</script>
            <div class="td-content clear">
              <div>
                <select class="selection from-media" style="width: 300px" name="select12" id="select12" onfocus="click_text(this.id)">
                  <?php include('../inc/select-media.php');?>
                </select>
              </div>
            </div>
            <div class="td-content exchange_select clear" style="display:none;">
              <div class="clear select_show1" style="margin:5px 0;">
                <div class="clear" style="float:none;">※具体的にお教えください（50文字以内）</div>
                <div class="clear" style="float:none;">
                  <textarea rows="3" cols="25" style="width: 500px; margin-bottom: 10px" name="text21" id="text21" onfocus="click_text(this.id)"></textarea>
                </div>
              </div>
              <div class="select_show2 clear" style="margin:5px 0;">
                <div class="clear">※具体的にご紹介された弊社コンサルタントがおりましたらお手数ですが下記よりご選択ください。</div>
                <div class="clear">
                  <select class="selection" style="width: 300px" name="select13" id="select13" onfocus="click_text(this.id)">
                    <option value="">下記から選択してください</option>
                    <?php 
	$Data_Consultant=To_Get_Data("consultant"," and `consultant_Status`=0  order by `consultant_Date` DESC","`consultant_Name`");
				if($Data_Consultant['cnt']>0):
					for($i=0; $i<$Data_Consultant['cnt']; $i++):
							$List_Consultant = $Data_Consultant[$i];
											?>
                    <option value="<?php echo $List_Consultant['consultant_Name']; ?>"><?php echo $List_Consultant['consultant_Name']; ?></option>
                    <?php 
										     endfor;
										   endif;
										   ?>
                  </select>
                </div>
              </div>
              <div class="select_show3 clear" style="margin:5px 0;">
                <div class="clear" style="float: none;">※駅名を下記よりご選択ください。</div>
                <div class="clear" style="float: none;">
                  <select class="selection" style="width: 300px" name="select14" id="select14" onfocus="click_text(this.id)">
                    <option value="">下記から選択してください</option>
                    <option value="新橋駅">新橋駅</option>
                    <option value="赤坂見附駅">赤坂見附駅</option>
                    <option value="溜池山王駅">溜池山王駅</option>
                    <option value="東京駅（丸の内線）">東京駅（丸の内線）</option>
                    <option value="月島駅">月島駅</option>
                  </select>
                </div>
              </div>
            </div></td>
        </tr>
      </table>
    </div>
  </div>
  
  <!--*************************************************************-->
  <div id="personal_block6" class="form-personal-profile">
    <div class="form-privacy">
      <div class="privacy-title">【個人情報保護方針】</div>
      <div class="privacy-content">
        <p> わたくしたち株式会社クライス＆カンパニーは、当社の人材紹介等のサービスをお客様に安心してご利用頂く為にお預かりする個人情報についての保護方針を策定いたしました。<br />
          お客様個人を特定する個人情報を取り扱うに際し、全ての役員及び従業員（非常勤社員、派遣社員、パート、アルバイトを含む）がその重大さを認識し、適切な利用・管理を行って参ります。また、業界におけるトップレベルの個人情報保護体制の構築を目指し、以下５つを強化して参りますので、安心して当社サービスをご利用ください。<br />
          <br />
          1．個人情報の取得、利用及び提供について<br />
          人材紹介等の事業で取り扱う個人情報及び従業員の個人情報について、適切な取得、利用及び提供を行い、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。<br />
          2．個人情報に関する法令や指針、規範について<br />
          個人情報に関する法令・国が定める指針その他の規範を守ります。<br />
          <br />
          3．個人情報の安全管理について<br />
          個人情報への不正アクセスや、個人情報の漏えい、紛失、破壊、改ざん等に対して、合理的な防止並びに是正措置を行います。<br />
          <br />
          4．個人情報に関する苦情及び相談について<br />
          個人情報に関する苦情及び相談には、速やかに対処します。<br />
          <br />
          5．個人情報保護の取り組み（個人情報保護マネジメントシステム）について<br />
          個人情報の保護を適切に行うため、継続的にその取り組みを見直し、改善します。<br />
          <br />
          制定日　2005年3月1日<br />
          改訂日　2008年9月1日<br />
          株式会社クライス＆カンパニー<br />
          代表取締役社長丸山貴宏<br />
          <br />
          【業務運営（転職支援サービス利用）規約および個人情報の取り扱いについて】<br />
          株式会社クライスアンドカンパニー（以下クライスといいます）が提供する転職支援サービスのご利用にあたっては、下記の利用規約（以下「本規約」といいます）についてご承諾の上でご利用いただけますようお願い致します。<br />
          <br />
          1．（定義）<br />
          本規約において使用される各用語の定義は、以下に定めるとおりとします。<br />
          <br />
          （1）候補者<br />
          クライスに対し、転職支援サービスの利用を申し込んだ方をいいます。<br />
          <br />
          （2）ご紹介企業<br />
          クライスと締結した人材紹介契約に基づき、クライスに対して人材の紹介を委託した企業をいいます。<br />
          <br />
          （3）転職支援サービス<br />
          候補者からお申込いただいたお申し込み内容とご紹介企業からの希望条件との照合、Position Information（求人票）および補足する求人情報の提供、転職相談、転職活動支援、応募手続きの代行などのサービスの総称をいいます。<br />
          <br />
          （4）クライスの転職支援サイト<br />
          クライスが管理・運営している以下のウェブサイトをいいます。<br />
          http://www.kandc.com<br />
          <br />
          （5）候補者情報<br />
          候補者がクライスに対して提供した、住所、氏名、職務経歴等、候補者に関する全ての情報をいいます。<br />
          <br />
          2．（申し込み方法）<br />
          転職支援サービス利用のお申し込み方法は、クライスが広告またはクライスの転職支援サイトその他において指定した方法によるものとし、その他の方法によるお申し込みはお受けできないものとします。<br />
          <br />
          3．（サービスの提供）<br />
          クライスは候補者すべてに対して、当社からご提供できる求人情報の有無の結果を通知いたします。（既に結果を通知した後の複数回に渡るお問合せに対しては、通知ができない場合もございます。）加えて以下のサービスの中から当該候補者に適切なサービスをクライスの判断で提供するものとします。（クライスの判断によりサービスのご提供ができない場合もございます。）<br />
          <br />
          （1）電話や面談による転職相談の実施<br />
          （2）担当コンサルタントによる転職活動支援<br />
          （3）Position Information（求人票）を補足する求人情報の提供<br />
          （4）応募手続きの代行<br />
          （5）その他利用者の転職に有益とクライスが判断する一切のサービス<br />
          4．（転職支援サービスの変更・中断・終了）<br />
          クライスは、事業運営上やむを得ない場合は、候補者に何ら通知することなく転職支援サービスの全部もしくは一部を変更し、または一時中断することがあります。また、一定期間の通知の上で、転職支援サービスの全部または一部を終了することがあります。<br />
          <br />
          5．（転職支援サービス提供の終了事由）<br />
          クライスは、候補者において次に掲げる各項に該当する事由が生じた場合は、当該候補者に対して何らの催告を要することなく、転職支援サービスの提供を終了することができるものとします。<br />
          <br />
          a.候補者が本規約に定める各事項に違反した場合<br />
          b.その他、候補者とクライスとの信頼関係が維持できないとクライスが判断した場合<br />
          <br />
          6．（個人情報の取り扱い）<br />
          クライスは、別途定める「個人情報の取り扱いについて」に従い、候補者の個人情報を適切に収集・利用・提供・管理します。<br />
          <br />
          7．（候補者情報の正確性）<br />
          候補者がクライスに対して提供した情報が正確でなかったこと、および、その内容の不備・齟齬などに起因してご紹介企業、その他の第三者から何らかの異議、請求もしくは要求などがなされた場合には、自己の費用負担と責任で対処するものとし、クライスに一切の迷惑をかけないことを保証するものとします。<br />
          <br />
          8．（求人照合）<br />
          クライスは、候補者からお申込いただいたお申し込み内容とご紹介企業の希望条件とを照合しますが、検討基準や判断理由などをお伝えすることはできません。また、候補者からご紹介企業に対する応募依頼を受け付けて以降も、ご紹介企業からの依頼に基づき、ご紹介企業に代わってクライスが当該求人への適合度合いを判断することがあります。<br />
          <br />
          9．（労働条件）<br />
          クライスは、候補者がご紹介企業に入社した場合の仕事内容や処遇など労働条件の概略について確認を行いますが、　候補者は、候補者の責任において、ご紹介企業に労働条件を直接確認した後に雇用契約を結ぶものとし、クライスが確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではないことを承諾します。<br />
          <br />
          10．（禁止事項）<br />
          候補者は、以下の行為をしてはならないものとします。<br />
          <br />
          a.虚偽の情報をクライスに提供する行為<br />
          b.クライスまたはご紹介企業の業務・営業を妨害する行為、または社会的信用もしくは評価を毀損する行為<br />
          c.他の候補者、ご紹介企業、クライスまたはご紹介企業の従業員その他クライスの事業に関わる一切の関係者<br />
          （以下「関係者」といいます）を誹謗、中傷もしくは侮辱する行為<br />
          d.クライスまたは関係者が有する著作権、商標権その他の知的財産権を含む一切の財産的権利、営業上の機密、名誉、プライバシーなどを侵害する行為<br />
          e.転職支援サービスを通じて入手した情報を、転職支援サービスの目的の範囲を超えて使用し、または第三者に漏洩もしくは開示する行為<br />
          f.法令もしくは公序良俗に反する行為、またはそのおそれがある行為<br />
          11．（情報の加工）<br />
          クライスは、候補者情報のうち、候補者個人を特定できる情報以外の情報を加工し、クライスが編集・発行する各種媒体その他において利用できるものとします。この場合、各種媒体その他で利用された当該情報に関する著作権その他一切の財産的権利は、クライスに帰属します。<br />
          <br />
          12．（免責）<br />
          クライスは、故意または重大な過失がない限り、転職支援サービスを利用するにあたって利用者に生じた一切の損害（精神的、財産的損害を含む一切の不利益）について責任を負わないものとします。<br />
          <br />
          13．（不可抗力）<br />
          天変地異、ネットワーク上の障害、通常講ずるべきウィルス対策では防止できないウィルス被害その他クライスの責によらない事由によって転職支援サービスの提供が遅延し、または困難もしくは不能となった場合、これによって候補者に発生した一切の損害について、クライスは責任を負わないものとします。<br />
          <br />
          14．（損害賠償責任）<br />
          候補者が本規約の各事項に違反して、クライス、関係者または第三者に損害を与えた場合は、候補者はその損害を賠償するものとします。<br />
          15．（本規約の変更）<br />
          クライスは、必要に応じて本規約の内容を変更することができるものとします。<br />
          クライスは、変更後の内容をクライスの転職支援サイト内にて掲載するものとします。<br />
          16．（定めのない事項）<br />
          本規約に定めのない事項は、日本の法令の定めに従い、利用者とクライスとの間において、互いに誠意をもって協議し解決することとします。<br />
          17．（管轄裁判所）<br />
          万が一、本規約の各事項に関連して紛争が生じた場合は、東京地方裁判所または東京簡易裁判所を第一審の専属的合意管轄裁判所とします。<br />
          <br />
          制定日　2009年5月12日<br />
          株式会社クライス＆カンパニー<br />
          <br />
          【個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて】<br />
          <br />
          1．個人情報（エントリー情報及び履歴書、職務経歴書）の利用目的<br />
          当社では、エントリーされた方からお預かりしたエントリー情報、履歴書、職務経歴書など候補者の方に関する個人情報は、候補者の方に適した企業をご紹介するために利用し、他の目的で利用することはございません。<br />
          <br />
          2．個人情報（エントリー情報及び履歴書、職務経歴書）の取り扱いについて<br />
          （a）エントリー情報または履歴書、職務経歴書は、エントリー受付担当者及び当社コンサルタント以外が取り扱うことはありません。<br />
          <br />
          （b）エントリー情報及び履歴書、職務経歴書は施錠保管をし、セキュリティには万全を期しております。<br />
          （c） 企業への推薦時には、原則として氏名はイニシャルにし、連絡先は伏せた状態で企業に提出致します。内定された際には正式（氏名、連絡先が明示されている）な書類を、ご本人から直接提出して頂きます。但し、セキュリティ対策が講じられている専用WEBサイトを通じて応募書類を提出する等の場合は、氏名、連絡先を伏せずに提出することがあります。<br />
          （d）登録抹消を依頼された場合、提出頂きました履歴書及び職務経歴書は速やかに破棄いたします。<br />
          （e）履歴書及び職務経歴書の提出がなされない場合、エントリーに応じることはできかねます。<br />
          <br />
          3．個人情報（エントリー情報及び履歴書、職務経歴書）の第三者への提供<br />
          当社はエントリー情報及び履歴書、職務経歴書を第三者に提供することはいたしません。<br />
          4．個人情報（エントリー情報及び履歴書、職務経歴書）の外部委託<br />
          当社はサーバメンテナンス等の業務の一部を委託することがございます。その際、当社は業務委託先との間で個人情報の取り扱いに関する契約を結び、適切な監督を行います。<br />
          <br />
          5．個人情報（エントリー情報及び履歴書、職務経歴書）の開示及び訂正、利用停止について<br />
          エントリーいただいた方が当社に対して、ご自身の情報の開示や削除・利用停止等を求められた場合には、できる限り速やかにご要望に応じるようにいたします。<br />
          <br />
          6．掲載の求人、企業情報について<br />
          当社は候補者（エントリーいただいた方）が求人企業に入社した場合の仕事内容や処遇など、労働条件の概略について確認を行いますが、候補者は、候補者の責任において、求人企業に労働条件を直接確認した後に雇用契約を結ぶものとし、当社が確認しかつ候補者に通知した労働条件が、当該雇用契約の詳細を最終的に保証するものではありませんのでご注意ください。<br />
          <br />
          改訂日　2011年3月9日<br />
          株式会社クライス＆カンパニー<br />
          【個人情報の開示・問合せ等の連絡方法・連絡先】<br />
          ◆連絡方法<br />
          ご本人の氏名、郵便番号、住所、電話番号をご記入の上、文書またはE-mailにてご連絡下さい。<br />
          <br />
          ◆連絡先<br />
          株式会社クライス＆カンパニー<br />
          人材コンサルティング事業部 奈良元生（顧客相談窓口責任者）<br />
          東京都港区東新橋2-4-1 サンマリーノ汐留2F<br />
          TEL：03-5733-1602　　Email：privacy@kandc.com</p>
        <br />
      </div>
    </div>
  </div>
  <div class="form-personal-profile bg_error_fx" id="checkbox_require" style="text-align:center;">
    <input type="checkbox"  name="check_box" id="check_box" class="magic-checkbox" />
    <label for="check_box" class="checkbox_label">個人情報の取り扱いに同意します。<span class="red-color" style="font-weight: normal;">(必須)</span></label>
    <p id="errortext19" class="checkbox_err"></p>
  </div>
  
  <!--*************************************************************-->
  <div class="form-entry-submit clear">
    <input class="button-confirm" type="submit" name="Submit" id="submit" value="Submit"/>
  </div>
</form>