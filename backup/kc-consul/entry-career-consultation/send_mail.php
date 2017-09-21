<?php 
	ob_start();
	session_start();
?>	
	<?php

		$security=$_SESSION['secur'];
		if(filter_var($security, FILTER_VALIDATE_EMAIL) && $security==$_POST['text8']):
	
		@include('../entry_user_ID.php');
	    @include('../../entry_user_ID.php');
 		@include('../../../entry_user_ID.php');


		@include('function_email.php');
		@include('config.php');

		
			
			$user_email=$_POST['text8'];
			$radio1=$_POST['radio1'];
			
            $order_id =(int)$_POST['entry_id'];
			$company_id=(int)$_POST['company_id'];
			$consultant_id=(int)$_POST['consultant_id'];
			
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			
			$mail_template="mail_form.txt";
            $mail_template_order_id = "mail_form_entry_id.txt";
			$mail_template_company_id = "mail_form_company_id.txt";
			$mail_template_consultant_id = "mail_form_consultant_id.txt";
			$body_content="";
            
			if($company_id>0):
				$file = @file($mail_template_company_id);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
				$admin_subject = $admin_subject . " (with clientid)" ;
				
			else:
				if($order_id>0 && $order_id != 1014585):
					$file = @file($mail_template_order_id);
					foreach ($file as $line) {
						$line1 = str_replace("\n", "<br/>", $line);
						$line1 = preg_replace("/(\s)/", " ", $line1);
						$body_content .= $line1;
					}
					$admin_subject = $admin_subject . " (with orderid)" ;
					
				elseif($order_id == 1014585):
					$file = @file($mail_template_order_id);
						foreach ($file as $line) {
							$line1 = str_replace("\n", "<br/>", $line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							$body_content .= $line1;
						}
					$admin_subject = $admin_subject;
				else:
					if($consultant_id>0):
						$file = @file($mail_template_consultant_id);
						foreach ($file as $line) {
							$line1 = str_replace("\n", "<br/>", $line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							$body_content .= $line1;
						}
						$admin_subject = $admin_subject . " (with consultantid)" ;
					else:
						$file = @file($mail_template);
						foreach ($file as $line) {
							$line1 = str_replace("\n", "<br/>", $line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							$body_content .= $line1;
						}
					endif;
				endif;
			endif;
			
		for($k=1; $k<22;$k++):
                $text_regest = $_POST["text".$k];
                $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
                endfor;
                for($m=1;$m<14;$m++):
                $select_regest=$_POST["select".$m];
                $body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
                endfor;
                $body_content = str_replace("{order_id}", "{$order_id}", $body_content);
				$body_content = str_replace("{company_id}", "{$company_id}", $body_content);
				$body_content = str_replace("{consultant_id}", "{$consultant_id}", $body_content);
				$body_content = str_replace("{age_use}", "{$age_use}", $body_content);
                $body_content = str_replace("{radio1}", "{$radio1}", $body_content);
                $body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);

				$body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);

                $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);
  				$user_content_consultant = str_replace("{USER_NAME}", $name_user_send, $user_content_consultant);
			
				$nameEbis=$name_user_send;
				$emailEbis=$user_email;
			
			
			$title="";
				$entry_check=0;
				if($order_id>0) $entry_check=$order_id;
				if($company_id>0) $entry_check=$company_id;
				if($consultant_id>0) $entry_check=$consultant_id;
				if($entry_check>0):
					switch($entry_check):
						case 1014585:
							$title="【コンサルサイト】プレエントリー";
						break;
						default:
					endswitch;
				endif;
				$body_content = str_replace("{title}", "{$title}", $body_content);

			//echo $body_content;
			
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
			
			if($consultant_id >0):
			 To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject_consultant, $user_content_consultant, $type="",$file="", $cc="", $bcc="", $charset="");
			else:
			 To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			endif;					
			//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
				session_unset();
				session_destroy();
				//exit();
			endif;	
		?>
     <script language="javascript">
   		 //window.location.href = 'complete.php?nameEbis=<?php echo $nameEbis ?>&emailEbis=<?php echo $emailEbis; ?>&birthdayEbis=<?php echo $date_birth; ?>&midEbis=<?php echo $entry_ID_userFix; ?>&pidEbis=entry';
		 window.location.href = 'complete.php'; 
	</script>

<?php 
	ob_flush();
?>			