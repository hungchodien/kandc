<a href="javascript:void(0);" id="share_email_top_show"  data-href="">
	 PC用エントリーフォームをメールで送る
</a>
<script type="text/javascript">
		jQuery( document ).ready(function($) {
				$( window ).load(function() {
				 		var body_index_text_top = document.getElementById("body_index_text_top");
						var subject_index_text_top=document.getElementById("subject_index_text_top");
						var cc_index_text_top=document.getElementById("cc_index_text_top");
						var bcc_index_text_top=document.getElementById("bcc_index_text_top");
			//console.log(body_index_text_top.value+'QQQ'+subject_index_text_top.value+'QQQ'+cc_index_text_top.value+'QQQ'+bcc_index_text_top.value);
						//var Output=document.getElementById("Output");
						var uri_index_top;
						var newvalue_index_top = "mailto:";
							if (!cc_index_text_top.value && !bcc_index_text_top.value && !subject_index_text_top.value && !body_index_text_top.value) {
                        		uri_index_top.value = newvalue_index_top;
                       			return;
                    	     }
							//console.log(newvalue_index_top);

							 newvalue_index_top += "?"
							var sep_index_top = false;
							if (cc_index_text_top.value) {
								newvalue_index_top += "cc=";
								
								newvalue_index_top += encode_top(cc_index_text_top.value);
								sep_index_top = true;
							}
							
							if (bcc_index_text_top.value) {
								if (sep_index_top) {
									newvalue_index_top += "&";
								}
								newvalue_index_top += "bcc=";
								newvalue_index_top += encode_top(bcc_index_text_top.value);
								sep_index_top = true;
							}
							if (subject_index_text_top.value) {
								if (sep_index_top) {
									newvalue_index_top += "&";
								}
								newvalue_index_top += "subject=";
								newvalue_index_top += encode_top(subject_index_text_top.value);
								sep_index_top = true;
							}
							if (body_index_text_top.value) {
								if (sep_index_top) {
									newvalue_index_top += "&";
								}
								newvalue_index_top += "body=";
								newvalue_index_top += encode_top(body_index_text_top.value);
							}
							/*if (amp.checked) {
                        		newvalue = newvalue.replace(/&/g, "&amp;");
                   			 }*/
							uri_index_top=newvalue_index_top;
							
						//	Output.value=newvalue;
				 		$("a#share_email_top_show").attr('href', newvalue_index_top)
				 
				 });

				<?php $content_footer_share="Share Email for Page kandc.com/mobile/entry"; ?>
					 $("a#share_email_top_show").click(function(){
						var url_footer = '<?php echo url_root; ?>inc/update_click_share_email_top.php';
						 $.ajax({
							type: "POST",
							url: url_footer,
							data: { url_request : "<?php echo curPageURL(); ?>",
									order_id : "<?php echo $content_footer_share; ?>"
								 },
							success: function(data, textStatus, xhr) {
								var set_href_footer=$("a#share_email_top_show").attr("data-href");
								//alert(set_href);
								window.location= set_href_footer;
							}
						});
					
					
					});	 



			});
				
				function encode_top(value) {
                    // Browsers can't agree on the newline format of the control's value, so normalizing to \r\n
                    return encodeURIComponent(value.replace(/\r\n|\r|\n/g, "\r\n"));
                }
	
</script>	
<style type="text/css">
	a#share_email_top_show{
		display:block;
		border-radius: 3px 3px 3px 3px;
		-moz-border-radius: 3px 3px 3px 3px;
		-webkit-border-radius: 3px 3px 3px 3px;
		border: 0px solid #000000;
		background:#8B8B8B;
		color:#FFF;
		position:absolute;
		top:-6px;
		right:0;
		padding:3px 5px;
		font-size: 11px;
	}
	.top_share_mail{
		position:relative;
		display:block;
	}
	.title_top_form {
    	font-size: 12px !important;
    }
</style>				
<?php 
	$subject_email_top="[クライス&カンパニーPC用エントリーフォーム]";
		$mail_template_top=url_root."sendmail/mail_form_entry_share_top.txt"; 
			//echo $mail_template;
			$file_get_top = @file($mail_template_top);
		foreach ($file_get_top as $line_get_top) {
  				 // echo $line."\n";
				$line_get_top1= str_replace("\n","%0D%0A",$line_get_top);
				$line_get_top1 = preg_replace("/(\s)/", " ", $line_get_top1);
				$body_content_top.=$line_get_top1;
  			}
			$body_content_top = str_replace("%0D%0A","\r\n", $body_content_top);	
			//$body_content=excerpt($body_content,1000,"...");
			$body_content_top=htmlspecialchars($body_content_top);
	?>
<form action="mailto:%20" method="GET" target="_blank" id="frm_maito_top"  enctype="text/plain">
			<input type="hidden" name="subject_top" id="subject_index_text_top" value="<?php echo htmlspecialchars($subject_email_top); ?>"  />
			
			<textarea name="body_top" id="body_index_text_top" style="display:none;"><?php echo $body_content_top; ?></textarea>
			<!--<p>Output:<br><textarea id="Output">mailto:</textarea></p>-->
			<input type="hidden" name="cc_top" id="cc_index_text_top" value=" " />
			<input type="hidden" name="bcc_top" id="bcc_index_text_top" value=" "  />
</form>