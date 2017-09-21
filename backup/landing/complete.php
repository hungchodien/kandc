<?php
@include('inc/header.php');
@include('../Lib/_init.php');
@include('../config.php');

if ($protocol == 'http:' || $protocol =='HTTP:'){
    $entry_protocol = str_replace('http', 'https', curPageURL() );
    header('Location:'.$entry_protocol);
}
?>


<div id="wrapper" class="clear">
<div class="inside">
<div class="form_content complete">

<h1>お申し込みありがとうございます。</h1>

<div id="complete_content">
<p>
1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。<br /><br />

また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承願います。<br />

そのような場合も、ご紹介案件の有無など現状をご連絡させていただきます。

</p>
<h2 class="title">お問合せ</h2>
<p>TEL 03-5733-1602<br />
Email kreis-info@kandc.com</p>
</div>

<div class="clear back_kreis">
<a href="http://kandc.com/"><img alt="株式会社クライス&amp;カンパニー" title="" src="<?php echo url_root;?>img/button-kreis.png" /></a>
</div>

</div>

</div>

<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_conversion_id = 1000240003;
var yahoo_conversion_label = "WOdWCNmWwF8QgvPtvgM";
var yahoo_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000240003/?value=0&amp;label=WOdWCNmWwF8QgvPtvgM&amp;guid=ON&amp;script=0&amp;disvt=true"/>
</div>
</noscript>


<?php 
				//@include('../ebits.php');
			//	@include('../../ebits.php');
			//	@include('../../../ebits.php');
			?>
<?php
@include('inc/footer.php');
?>