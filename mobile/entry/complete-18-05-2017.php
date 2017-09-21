<?php
	ob_start();
?>
<?php
	@include('../config_mobile.php');
	
	//@include('set_user_ID_mobile.php');
		//@include('../set_user_ID_mobile.php');
	    //@include('../../set_user_ID_mobile.php');
 		//@include('../../../set_user_ID_mobile.php');

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
?>
<?php 
	if(isset($_POST['m1id'])):
		$m1id=(int)$_POST['m1id'];
		if($m1id>0):
	?>
   	    <?php
        $date_curent=date('Y年m月d日 H:i');
        ?>
        <!-- EBiS tag version2.11 start -->
        <script type="text/javascript">
            <!--
        if ( location.protocol == 'http:' ){
            strServerName = 'http://ac.ebis.ne.jp';
        } else {
            strServerName = 'https://ac.ebis.ne.jp';
        }
        cid = '4T5ZVtUs'; a1id=''; pid = 'SP_entory'; m1id='<?php echo $m1id; ?>'; o1id='<?php echo $_POST['o1id']; ?>'; o2id='<?php echo $_POST['o2id']; ?>'; o3id='<?php echo $_POST['o3id']; ?>'; o4id='<?php echo $_POST['o4id']; ?>'; o5id='<?php echo $date_curent; ?>';
        (function() {
            var misd = document.createElement('script'); misd.type = 'text/javascript'; misd.async = true;
            misd.src = strServerName+'/ebis_tag.php?cid='+ cid + '&pid=' + pid + '&m1id=' + m1id + '&a1id='+ a1id + '&o1id=' + o1id + '&o2id=' + o2id + '&o3id=' + o3id + '&o4id=' + o4id + '&o5id=' + o5id;
            var sbend = document.getElementsByTagName('script')[0]; sbend.parentNode.insertBefore(misd, sbend);
        })();
        // -->
            </script>
            <noscript>
                <img src="https://ac.ebis.ne.jp/log.php?argument=4T5ZVtUs&ebisPageID=SP_entory&ebisMember=&ebisAmount=&ebisOther1=&ebisOther2=&ebisOther3=&ebisOther4=&ebisOther5=" width="0" height="0">
            </noscript>
            <!-- EBiS tag end -->


    <?php 
		endif;
	endif;
?>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <script src="validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        <div class="look_title_page yellow clear">
           <div class="publish_job_page"><h3 class="form_title">30代エグゼクティブのあなたにハイクラスな転職を。</h3></div>
        </div>
       
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       	
               <div class="bg_white content_inside block_content">
            		<div id="icon-send-complete"><img title="送信完了" alt="送信完了" src="<?php echo url_root; ?>img/icon-send-complete.png" /></div>
                    <h1 class="title">お申し込みありがとうございます。</h1>
            	 <div class="thank_for_you clear">
                        <p>1週間以内に担当のコンサルタントよりご連絡させて頂きますので、いましばらくお待ちください。 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報頂けますと幸いです。</p><br />
                        <p>また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承願います。
そのような場合も、ご紹介案件の有無など現状をご連絡させていただきます。</p><br /><br />
<p>お問合せ<br />
TEL 03-5733-1602<br />
Email kreis-info@kandc.com</p><br />
                  </div>
              </div>
              <div class="block_content clear">
              	<div id="back_home_btn"><a href="<?php echo url_root; ?>"><img title="ホームボタン" alt="ホームボタン" src="<?php echo url_root; ?>img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
            
             
       </div><!--End content-->



<?php 
		$google_check="entry_complete";
	?>


<script type="text/javascript" language="javascript">
  /* <![CDATA[ */
  var yahoo_ydn_conv_io = "but68SgOLDVw89tkLGbn";
  var yahoo_ydn_conv_label = "1TDNFXS83U8DA2I8HC1295634";
  var yahoo_ydn_conv_transaction_id = "";
  var yahoo_ydn_conv_amount = "0";
  /* ]]> */
</script>
<script type="text/javascript" language="javascript" charset="UTF-8" src="//b90.yahoo.co.jp/conv.js"></script>


 <!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var yahoo_conversion_id = 1000377546;
    var yahoo_conversion_label = "bcdfCP3s9W4Q26TTmQM";
    var yahoo_conversion_value = 0;
    /* ]]> */
</script>
<script type="text/javascript" src="//s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//b91.yahoo.co.jp/pagead/conversion/1000377546/?value=0&label=bcdfCP3s9W4Q26TTmQM&guid=ON&script=0&disvt=true"/>
    </div>
</noscript>

	
    <?php include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>