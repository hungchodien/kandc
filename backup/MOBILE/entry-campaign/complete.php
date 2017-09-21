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
?>
	 <link rel="stylesheet" type="text/css" href="<?php echo $root_url_page; ?>style.css" media="all" />
    
    <script src="<?php echo $root_url_page; ?>js/validate_form_entry.js" type="text/javascript"></script>
		<!--Content-->
        
   <script type="text/javascript">
 	$( document ).ready(function() {
		
		
    	$("#copyR").attr('style', 'width: 100%!important; font-size: 12px; line-height: 17px;');
		$("#to_pc_icon").remove();
		$("#menu_btn").hide();
	});
 
 </script>    
        
        <!--End Content -->    
       <div id="content" class="inside clear">
       <!--****************************************************-->
       		
               <div class="bg_white content_inside block_content">
            		
                    <h1 class="title">お申し込みありがとうございます。<br><br></h1>
            	 <div class="thank_for_you clear">
                        <p>1週間以内に担当のコンサルタントよりご連絡いたしますので、いましばらくお待ちください。<br>
 尚、1週間以内に弊社からの連絡がない場合は、ご連絡先の誤入力の可能性がございますので、 大変お手数ではございますが下記までご一報いただけますと幸いです。<br><br>

また、ご経験やご希望の業界、職種、ご年齢などによってはご紹介が難しい場合がございますので ご了承ください。<br><br>

※メールでのご連絡について<br>
弊社からお送りしているメールが迷惑メール削除機能により受信できないケースが発生しております。特にyahoo等の無料メールサービスで多く報告されております。<br>
ご利用のお客様は、各メールサービスのご案内にしたがい、設定の変更をお願いいたします。<br><br>

お問合せ<br>
TEL 03-5733-1602<br>
Email <a href="mailto:kreis-info@kandc.com">kreis-info@kandc.com</a><br><br>
</p>
                  </div>
              </div>
              <div class="block_content clear">
              	<div id="back_home_btn"><a href="<?php echo url_root; ?>"><img title="" alt="" src="<?php echo url_root; ?>img/button-home.png" /></a></div>
              </div>
             <!--****************************************************-->
            
             
            
             
       </div><!--End content-->

 
 		<?php 
				//@include('../ebits.php');
				//@include('../../ebits.php');
				//@include('../../../ebits.php');
			?>  
    <?php @include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>