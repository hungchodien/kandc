<script type="text/javascript">
	$( document ).ready(function() {
		$(".text_input_set").css("display","none");
		<?php 
			$mail_template=url_root."sendmail/mail_form_share.txt"; 
			//echo $mail_template;
			$file = @file($mail_template);
			foreach ($file as $line) {
  				 // echo $line."\n";
				$line1= str_replace("\n","%0D%0A",$line);
				$line1 = preg_replace("/(\s)/", " ", $line1);
				  $body_content.=$line1;
  			}
			//echo  $body_content;
			$job_name=$row_job['job_name'];
			$job_order_id=$row_job['order_id'];
			$job_name_order=$job_order_id.":".$job_name;
			$url_job=curPageURL();
			$salary_job=$age_min."～".$age_max."才 ".$salary_min.$salary_max ;
			$address_city=$row_job['address_1_prefecture']." ".$row_job['address_1_city'];
			$job_description=$row_job['job_description'];
			$needed_skill=$row_job['needed_skill'];
			if(!empty($row_job['english_level'])):
						$english_level= $row_job['english_level']." ."; 
						if(!empty($row_job['toeic'])):
							$english_level="Toeic:&nbsp;".$row_job['toeic'];
						endif;
					else:
						$english_level="---";
					endif;
			if((int)$row_job['founded_year']>0):
							$founded_year= $row_job['founded_year']."年";
							else:
							$founded_year= "-"; 
						endif;
			if((int)$row_job['founded_month']>0):
							$founded_year .= $row_job['founded_month']."月"; 
							else:
							$founded_year .= "-";
						endif;
			$row_capital=(int)$row_job['capital'];
					if($row_capital>0):
						$capital= number_format($row_job['capital'])."万円 "; 
					else:
					$capital= "---";
					endif;
			if($count_employee_conver>0):
						$employee_count= $count_employee_conver." 人";
						else:
						$employee_count="---";
						endif;
			$desired_person=$row_job['desired_person'];
			$experience=$row_job['experience'];
			$education=$row_job['education'];
			$reason=$row_job['reason'];
			$company_info=$row_job['company_info'];
			$company_address_prefecture=$row_job['company_address_prefecture'];
			$website_main=url_root;
			function get_client_ip() 
			 {
				  $ipaddress = '';
				  if (getenv('HTTP_CLIENT_IP'))
					  $ipaddress = getenv('HTTP_CLIENT_IP');
				  else if(getenv('HTTP_X_FORWARDED_FOR'))
					  $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				  else if(getenv('HTTP_X_FORWARDED'))
					  $ipaddress = getenv('HTTP_X_FORWARDED');
				  else if(getenv('HTTP_FORWARDED_FOR'))
					  $ipaddress = getenv('HTTP_FORWARDED_FOR');
				  else if(getenv('HTTP_FORWARDED'))
					  $ipaddress = getenv('HTTP_FORWARDED');
				  else if(getenv('REMOTE_ADDR'))
					  $ipaddress = getenv('REMOTE_ADDR');
				  else
					  $ipaddress = 'UNKNOWN';
			
				  return $ipaddress; 
			 }
			 
			$browser_cp=$_SERVER['HTTP_USER_AGENT'];
			$computername=gethostbyaddr($_SERVER ['REMOTE_ADDR']);
			$ip=get_client_ip();
			 
			$body_content = str_replace("{job_name}", "{$job_name}", $body_content);
			$body_content = str_replace("{job_name_order}", "{$job_name_order}", $body_content);
			$body_content = str_replace("{url_job}", "{$url_job}", $body_content);
			$body_content = str_replace("{salary_job}", "{$salary_job}", $body_content);
			$body_content = str_replace("{address_city}", "{$address_city}", $body_content);
			$body_content = str_replace("{job_description}", "{$job_description}", $body_content);
			$body_content = str_replace("{needed_skill}", "{$needed_skill}", $body_content);
			$body_content = str_replace("{english_level}", "{$english_level}", $body_content);
			$body_content = str_replace("{founded_year}", "{$founded_year}", $body_content);
			$body_content = str_replace("{capital}", "{$capital}", $body_content);
			$body_content = str_replace("{employee_count}", "{$employee_count}", $body_content);
			$body_content = str_replace("{desired_person}", "{$desired_person}", $body_content);
			$body_content = str_replace("{experience}", "{$experience}", $body_content);
			$body_content = str_replace("{education}", "{$education}", $body_content);
			$body_content = str_replace("{reason}", "{$reason}", $body_content);
			$body_content = str_replace("{company_info}", "{$company_info}", $body_content);
			$body_content = str_replace("{company_address_prefecture}", "{$company_address_prefecture}", $body_content);
			$body_content = str_replace("{website_main}", "{$website_main}", $body_content);
			
			$body_content = str_replace("{browser}",$browser_cp, $body_content);
			$body_content = str_replace("{computername}",$computername, $body_content);
			$body_content = str_replace("{ip}",$ip, $body_content);
			
			
			$body_content = str_replace("%0D%0A","\r\n", $body_content);	
			//$body_content=excerpt($body_content,1000,"...");
			$body_content=htmlspecialchars($body_content);
			
		?>
		//var content_email=encode("<?php //echo $body_content; ?>");
		<?php $subject_email= "クライス&カンパニーの求人情報【".$job_order_id." : ".$job_name."】";
		?>
		var bcc="";
		var cc="";
		//var subject_test=<?php echo $subject_email; ?>
		var subject=encode("<?php echo htmlspecialchars($subject_email); ?>");
		$( window ).load(function() {
				 	var body_text = document.getElementById("body_text");
						var subject_text=document.getElementById("subject_text");
						var cc_text=document.getElementById("cc_text");
						var bcc_text=document.getElementById("cc_text");
						//var Output=document.getElementById("Output");
						var uri;
						 var newvalue = "mailto:";
							if (!cc_text.value && !bcc_text.value && !subject_text.value && !body_text.value) {
                        		uri.value = newvalue;
                       			return;
                    	     }
							 newvalue += "?"
							var sep = false;
							if (cc_text.value) {
								newvalue += "cc=";
								newvalue += encode(cc_text.value);
								sep = true;
							}
							if (bcc_text.value) {
								if (sep) {
									newvalue += "&";
								}
								newvalue += "bcc=";
								newvalue += encode(bcc_text.value);
								sep = true;
							}
							if (subject_text.value) {
								if (sep) {
									newvalue += "&";
								}
								newvalue += "subject=";
								newvalue += encode(subject_text.value);
								sep = true;
							}
							if (body_text.value) {
								if (sep) {
									newvalue += "&";
								}
								newvalue += "body=";
								newvalue += encode(body_text.value);
							}
							/*if (amp.checked) {
                        		newvalue = newvalue.replace(/&/g, "&amp;");
                   			 }*/
							uri=newvalue;
						//	Output.value=newvalue;
				 		$("a#show_input_email").attr('data-href', newvalue)
				 
				 });
				 
			$("a#show_input_email").click(function(){
					var url = '<?php echo url_root; ?>inc/update_click_share_email.php';
					 $.ajax({
						type: "POST",
						url: url,
						data: { url_request : "<?php echo $url_job; ?>",
								order_id : "<?php echo $job_order_id; ?>"
							 },
						success: function(data, textStatus, xhr) {
							var set_href=$("a#show_input_email").attr("data-href");
							//alert(set_href);
							window.location= set_href;
						}
					});
				
				
				});	 
			
	});
	
	 function encode(value) {
                    // Browsers can't agree on the newline format of the control's value, so normalizing to \r\n
                    return encodeURIComponent(value.replace(/\r\n|\r|\n/g, "\r\n"));
                }
	function validateEmail($email) {
		  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		  if( !emailReg.test( $email ) ) {
			return false;
		  } else {
			return true;
		  }
	}
	function Close_button_form(){
			$(".dark_overlay").hide();
			$(".text_input_set").hide();
			$(".button_close_email").hide();
			$('body,html').animate({
				scrollTop: $("#share_email_scroll").offset().top
				}, 800);
			return false; 
		}
</script>
<div class="share_email_tbn clear" id="share_email_scroll" >
	 
	<div class="share_email clear">
		<a  href="javascript:void(0);" id="show_input_email"   data-href="">
			<img src="<?php echo url_root; ?>img/mail_btn.png" alt="メール"/>
		</a>
		<form action="mailto:%20" method="GET" target="_blank" id="frm_maito"  enctype="text/plain">
			<input type="hidden" name="subject" id="subject_text" value="<?php echo htmlspecialchars($subject_email); ?>"  />
			
			<textarea name="body" id="body_text" style="display:none;"><?php echo $body_content; ?></textarea>
			<!--<p>Output:<br><textarea id="Output">mailto:</textarea></p>-->
			<input type="hidden" name="cc" id="cc_text" value=" " />
			<input type="hidden" name="bcc" id="bcc_text" value=" "  />
		</form>
		<?php // echo strlen($body_content); ?>
		
	</div>
	
	<div class="button_close_email">
		<a href="javascript:void(0);" onclick="Close_button_form();">
					<img src="<?php echo url_root; ?>img/test_close.png" border="0" alt="閉じる" />
				</a>
		</div>
	<div class="text_input_set clear" style="display:none;">
		<form name="frm_mailto" id="frm_email_form">
			<table width="100%" border="0" align="center">
				<tr>
						<td align="left" height="40" valign="middle" width="20%"><b>Email:</b></td>
						<td align="left" height="40" valign="middle"><input type="text" name="mail_input" id="mail_input"/></td>
				</tr>
				<tr>
						<td>&nbsp;</td>
						<td align="left" height="80" valign="middle"><input name="get_value" type="button" value="Open Email" id="sumit_mail_app"></td>
				</tr>
				</table>

			
			
			
		</form>
	</div>
	<div class="dark_overlay clear"></div>
</div>