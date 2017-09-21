<?php 
	$subject_email_footer="[ヘッドハンティングと人材紹介のクライス&カンパニーの情報]";
		$mail_template_footer=url_root."sendmail/mail_form_share_footer.txt"; 
			//echo $mail_template;
			$file_get = @file($mail_template_footer);
			foreach ($file_get as $line_get) {
  				 // echo $line."\n";
				$line_get1= str_replace("\n","%0D%0A",$line_get);
				$line_get1 = preg_replace("/(\s)/", " ", $line_get1);
				  $body_content_footer.=$line_get1;
  			}
			$body_content_footer = str_replace("%0D%0A","\r\n", $body_content_footer);	
			//$body_content=excerpt($body_content,1000,"...");
			$body_content_footer=htmlspecialchars($body_content_footer);
	?>
<form action="mailto:%20" method="GET" target="_blank" id="frm_maito_footer"  enctype="text/plain">
			<input type="hidden" name="subject_footer" id="subject_index_text" value="<?php echo htmlspecialchars($subject_email_footer); ?>"  />
			
			<textarea name="body_footer" id="body_index_text" style="display:none;"><?php echo $body_content_footer; ?></textarea>
			<!--<p>Output:<br><textarea id="Output">mailto:</textarea></p>-->
			<input type="hidden" name="cc_footer" id="cc_index_text" value=" " />
			<input type="hidden" name="bcc_footer" id="bcc_index_text" value=" "  />
</form>