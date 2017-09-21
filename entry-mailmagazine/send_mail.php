<?php 
	ob_start();
	session_start();
?>	
	<?php
		$user_email = $_SESSION["secur-email"];
		$confirm = $_POST['confirm-email'];

		if( $user_email === $confirm && filter_var($user_email, FILTER_VALIDATE_EMAIL) ):


				@include('function_email.php');
				@include('config-email-content.php');
		
				$delivery_content = $_POST['delivery-content'];
				$career_change = $_POST['career-change'];
				$indus_cat = $_POST['industry-category'];
				$job_cat = $_POST['job-category'];
		
				$name_user_send="Mail Magazine Entry";
				$mail_template="mail_form.txt";
					
				$body_content="";
				 $file = @file($mail_template);
					foreach ($file as $line) {
						$line1 = str_replace("\n", "<br/>", $line);
						$line1 = preg_replace("/(\s)/", " ", $line1);
						$body_content .= $line1;
				}
				
				$body_content = str_replace("{delivery_content1}", "{$delivery_content[0]}", $body_content);
				$body_content = str_replace("{delivery_content2}", "{$delivery_content[1]}", $body_content);
				$body_content = str_replace("{delivery_content3}", "{$delivery_content[2]}", $body_content);
				
				
				$body_content = str_replace("{career_change}", "{$career_change}", $body_content);
				$body_content = str_replace("{indus_cat}", "{$indus_cat}", $body_content);
				$body_content = str_replace("{job_cat}", "{$job_cat}", $body_content);
			
				
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
			//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			
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