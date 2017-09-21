<div id="banner_exe" class="inside clear">
	<div class="clear block_content">
        <a href="<?php echo url_root_domain; ?>exe/" target="_blank">
            <img style="width:100%;" src="<?php echo url_root_domain; ?>img/link/mobile_banner_exe.png" alt="エグゼクティブポジションでの転職をお考えの方はこちらから"/>
        </a>
        </div>
        <div class="clear block_content">
        <a href="<?php echo url_root_domain; ?>academy/" target="_blank">
            <img style="width:100%;" src="<?php echo url_root_domain; ?>img/link/shiodome-academy-kreis-company-mobile-banner.png" alt="弊社主催のセミナー&amp;交流会 汐留アカデミー"/>
        </a>
    </div>
</div>

<?php if ( is_home_mobile() ) : ?>
<div class="inside">
<?php include('inc/menu_interview.php'); ?>
<div class="index_btns clear">
    	<div class="fl"><a href="<?php echo url_root; ?>entry_pre/" target="_blank"><img src="<?php echo url_root; ?>img/button-pre.png" alt="メールマガジン" title="メールマガジン" /></a></div>
    	<div class="fr"><a href="<?php echo url_root; ?>entry/" target="_blank"><img src="<?php echo url_root; ?>img/button-entry-2.png" alt="いますぐ転職無料エントリー" title="いますぐ転職無料エントリー" /></a></div>
    </div>
    </div>
<?php endif; ?>

<?php 
	
			function generateRandomString($length = 10) {
    				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    				$randomString = '';
   				 for ($i = 0; $i < $length; $i++) {
       				 $randomString .= $characters[rand(0, strlen($characters) - 1)];
    			}
   		 		return $randomString;
				}
	
?>

<footer>
  <div id="foot" class="inside">
    <div class="clear">
      <div id="back-top" class="fr"> <a href="#top"><span>PAGE TOP</span></a> </div>
    </div>
    <div id="foot_copyR" class="clear">
      <p id="copyR">&copy;<?php echo date('Y');?> KREIS&amp;Company Inc.<br />
webdesign <a href="http://tokyodesignroom.com" title="tokyo design web site">tokyodesignroom.com</a></p>
	<div id="to_pc_icon" class="clear">
<?php 
	$url_check_demo=curPageURL();
	if (false == strpos($url_check_demo,'entry')) {
			if($_GET['page']=='documents'):
				$url_encode=urlencode(md5_encrypt('http://www.kandc.com'));
			else:
				$url_encode=urlencode(md5_encrypt($str_url_replace_canon));
			endif;
		
	?>	
	 <a rel="nofollow" href="<?php echo url_root_domain;?>?page=msid&pc_checked=<?php echo generateRandomString(10); ?>&url=<?php echo $url_encode; ?>"><img src="<?php echo url_root; ?>img/button-pc.png" alt="PC版で見る" title="PC版で見る" /></a>
	<!--Show Share Email*****************************************************************-->
	
	
	<script type="text/javascript">
		jQuery( document ).ready(function($) {
				$( window ).load(function() {

					if (document.getElementById("body_index_text")) {
				 		var body_index_text = document.getElementById("body_index_text");
					}else{
						var body_index_text ="";
					}

					if (document.getElementById("subject_index_text")) {
				 		var subject_index_text = document.getElementById("subject_index_text");
					}else{
						var subject_index_text ="";
					}
					//	var subject_index_text=document.getElementById("subject_index_text");
					if (document.getElementById("cc_index_text")) {
				 		var cc_index_text = document.getElementById("cc_index_text");
					}else{
						var cc_index_text ="";
					}

					//var cc_index_text=document.getElementById("cc_index_text");
					if (document.getElementById("bcc_index_text")) {
				 		var bcc_index_text = document.getElementById("bcc_index_text");
					}else{
						var bcc_index_text ="";
					}
					  //var bcc_index_text=document.getElementById("bcc_index_text");


						//var Output=document.getElementById("Output");
						var uri_index;
						var newvalue_index = "mailto:";
							if (!cc_index_text.value && !bcc_index_text.value && !subject_index_text.value && !body_index_text.value) {
                        		uri_index = newvalue_index;
                       			return;
                    	     }
							 newvalue_index += "?"
							var sep_index = false;
							if (cc_index_text.value) {
								newvalue_index += "cc=";
								newvalue_index += encode1(cc_index_text.value);
								sep_index = true;
							}
							if (bcc_index_text.value) {
								if (sep_index) {
									newvalue_index += "&";
								}
								newvalue_index += "bcc=";
								newvalue_index += encode1(bcc_index_text.value);
								sep_index = true;
							}
							if (subject_index_text.value) {
								if (sep_index) {
									newvalue_index += "&";
								}
								newvalue_index += "subject=";
								newvalue_index += encode1(subject_index_text.value);
								sep_index = true;
							}
							if (body_index_text.value) {
								if (sep_index) {
									newvalue_index += "&";
								}
								newvalue_index += "body=";
								newvalue_index += encode1(body_index_text.value);
							}
							/*if (amp.checked) {
                        		newvalue = newvalue.replace(/&/g, "&amp;");
                   			 }*/
							uri_index=newvalue_index;
						//	Output.value=newvalue;
				 		$("a#share_email_footer_show").attr('data-href', newvalue_index)
				 
				 });
					 <?php $content_footer_share="Share Email for Page kandc.com/mobile"; ?>
					 $("a#share_email_footer_show").click(function(){
						var url_footer = '<?php echo url_root; ?>inc/update_click_share_email.php';
						 $.ajax({
							type: "POST",
							url: url_footer,
							data: { url_request : "<?php echo curPageURL(); ?>",
									order_id : "<?php echo $content_footer_share; ?>"
								 },
							success: function(data, textStatus, xhr) {
								var set_href_footer=$("a#share_email_footer_show").attr("data-href");
								//alert(set_href);
								window.location= set_href_footer;
							}
						});
					
					
					});	 
				 
			 });
		function encode1(value) {
                    // Browsers can't agree on the newline format of the control's value, so normalizing to \r\n
                    return encodeURIComponent(value.replace(/\r\n|\r|\n/g, "\r\n"));
                }
	
</script>					
	<style type="text/css">
		#copyR{
			width:38% !important;
			padding:0 2% 0 0 !important;
		}
		#to_pc_icon{
			width:60% !important;
		}
		#to_pc_icon a{
			float:right;
			width:49%;
			padding:0 0 0 1%;
		}
		
	</style>
	   <a href="javascript:void(0);" id="share_email_footer_show"  data-href="">
	   		<img src="<?php echo url_root; ?>img/button-share-foot.png" alt="" title="Share Email" />
	   </a>
	   <?php include('inc/form_email_footer.php'); ?>
	   
	   
	  <?php 
	  				} else{

						if (false != strpos($url_check_demo,'lp-entry')) {
							?>
							<a href="<?php echo url_root_domain;?>?page=msid&pc_checked=<?php echo generateRandomString(10); ?>"><img src="<?php echo url_root; ?>img/button-pc.png" alt="PC版で見る" title="PC版で見る" /></a>
						<?php 
						}else{
							echo "";
						}
					}
	  ?> 
	   
	 <!--End Share Email***********************************************************-->  
	   
	   
	   
	  
	   
	</div>
    </div>
  </div>
</footer>

</div>

 <style type="text/css">
          		.ads_w{
					position:absolute;
					left:-9999px;
					bottom:0px;
					display:block;
				}
          </style>
<div class="ads_w">


<?php 
	if($google_check=="" || !isset($google_check)):
?>



<!-- User Insight PCDF Code Start : kandc.com -->
<script type="text/javascript">
<!--
var _uic = _uic ||{}; var _uih = _uih ||{};_uih['id'] = 51747;
_uih['lg_id'] = '';
_uih['fb_id'] = '';
_uih['tw_id'] = '';
_uih['uigr_1'] = ''; _uih['uigr_2'] = ''; _uih['uigr_3'] = ''; _uih['uigr_4'] = ''; _uih['uigr_5'] = '';
_uih['uigr_6'] = ''; _uih['uigr_7'] = ''; _uih['uigr_8'] = ''; _uih['uigr_9'] = ''; _uih['uigr_10'] = '';

/* DO NOT ALTER BELOW THIS LINE */
/* WITH FIRST PARTY COOKIE */
(function() {
var bi = document.createElement('scri'+'pt');bi.type = 'text/javascript'; bi.async = true;
bi.src = ('https:' == document.location.protocol ? 'https://bs' : 'http://c') + '.nakanohito.jp/b3/bi.js';
var s = document.getElementsByTagName('scri'+'pt')[0];s.parentNode.insertBefore(bi, s);
})();
//-->
</script>
<!-- User Insight PCDF Code End : kandc.com -->

<?php endif; ?>


</div>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSRPSR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSRPSR');</script>
<!-- End Google Tag Manager -->

</body>



</html>

<?php 
	ob_flush();
?>