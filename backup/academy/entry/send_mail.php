<?php 
	ob_start();
	session_start();
?>	
	<?php
		$txt1 = $_POST['txt1'];
		$txt2 = $_POST['txt2'];
		$txt3 = $_POST['txt3'];
		$txt4 = $_POST['txt4'];
		$txt5 = $_POST['txt5'];
		$txt6 = $_POST['txt6'];
		$txt7 = $_POST['txt7'];
		$year = $_POST['select_year'];
		$month = $_POST['select_month'];
		$day = $_POST['select_day'];
		$role = $_POST['select_role'];
		$user_email = $_POST['email'];
		$phone = $_POST['phone'];
		
		if(filter_var($user_email, FILTER_VALIDATE_EMAIL) && isset($_POST['confirmation_btn']) && $txt1 != "" && $txt2 != "" && $txt3 != "" && $txt4 != "" && $txt5 != "" && $txt6 != "" && $txt7 != "" && $year != "" && $month != "" && $day != "" && $role != "" && $phone != "" ):
					
					include('function_email.php');
					include('mail_config.php');
				
						$txt1 = $_POST['txt1'];
						$txt2 = $_POST['txt2'];
						$txt3 = $_POST['txt3'];
						$txt4 = $_POST['txt4'];
						$txt5 = $_POST['txt5'];
						$txt6 = $_POST['txt6'];
						$txt7 = $_POST['txt7'];
						$other_opinion = ($_POST['other_opinion'] != "")?" - ".$_POST['other_opinion']:"";
						
						$year = $_POST['select_year'];
						$month = $_POST['select_month'];
						$day = $_POST['select_day'];
					
						$role = $_POST['select_role'];
						$user_email = $_POST['email'];
						$phone = $_POST['phone'];

						$event_date = $_POST['event_date'];
						$event_title = $_POST['event_title'];
						
						$time = $_POST['time'];
						$place = $_POST['place'];
						
						$mail_template = "mail_form.txt";
						$body_content="";
						$file = @file($mail_template);
						foreach ($file as $line) {
							 
							$line1= str_replace("\n","<br/>",$line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							  $body_content.=$line1;
						}
						for($k=1; $k<8;$k++):
							$text_regest = $_POST["txt".$k];
							$body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
						endfor;
						
						$body_content = str_replace("{year}", "{$year}", $body_content);
						$body_content = str_replace("{month}", "{$month}", $body_content);
						$body_content = str_replace("{day}", "{$day}", $body_content);
					
						$body_content = str_replace("{role}", "{$role}", $body_content);
						$body_content = str_replace("{email}", "{$user_email}", $body_content);
						$body_content = str_replace("{phone}", "{$phone}", $body_content);
						$body_content = str_replace("{other_opinion}", "{$other_opinion}", $body_content);

						$body_content = str_replace("{event_date}", "{$event_date}", $body_content);
						$body_content = str_replace("{event_title}", "{$event_title}", $body_content);
						$body_content = str_replace("{time}", "{$time}", $body_content);
						$body_content = str_replace("{place}", "{$place}", $body_content);
						
						$user_content = str_replace("{txt1}", "{$txt1}", $user_content);
						$user_content = str_replace("{txt2}", "{$txt2}", $user_content);
					
						
					To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
					To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
							session_unset();
							session_destroy();
			endif;
		?>
        <script language="javascript">
	   		 window.location.href = 'complete.html';
		</script>

<?php 
	ob_flush();
?>			