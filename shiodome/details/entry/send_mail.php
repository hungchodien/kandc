<?php 
	ob_start();
	session_start();
?>	
	<?php
		$email = $_POST['email'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL) && isset($_POST['confirmation_btn'])):
					
					include('function_email.php');
					include('mail_config.php');
				
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
						$receive_email = $_POST['receive_email'];
						$role = $_POST['select_role'];
						$user_email = $_POST['email'];
						
						$event_date = $_POST['event_date'];
						$event_title = $_POST['event_title'];
						
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
						$body_content = str_replace("{receive_email}", "{$receive_email}", $body_content);
						$body_content = str_replace("{role}", "{$role}", $body_content);
						$body_content = str_replace("{email}", "{$email}", $body_content);
						$body_content = str_replace("{event_date}", "{$event_date}", $body_content);
						$body_content = str_replace("{event_title}", "{$event_title}", $body_content);
						
						$user_content = str_replace("{txt1}", "{$txt1}", $user_content);
						$user_content = str_replace("{txt2}", "{$txt2}", $user_content);
					
						
					To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
					To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
							session_unset();
							session_destroy();
			endif;
		?>
        <script language="javascript">
	   		 window.location.href = 'complete.php';
		</script>

<?php 
	ob_flush();
?>			