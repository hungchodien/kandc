<?php 
	ob_start();
?>	
	<?php

		@include('set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');


		@include('function_sendmail.php');
		@include('config_entry.php');
			
			$user_email=$_POST['text8'];
			$radio1=$_POST['radio1'];
            $order_id = $_POST['entry_id'];
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			
            $nameEbis=$name_user_send;
			$emailEbis=$user_email;


			$mail_template="mail_form.txt";
            $mail_template_order_id = "mail_form_entry_id.txt";
			$body_content="";
            if ($order_id == '') {
                $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
            }else{
                $file = @file($mail_template_order_id);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
                $admin_subject = $admin_subject . "" ;
            }

        for($k=1; $k<22;$k++):
                $text_regest = $_POST["text".$k];
                $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
                endfor;
                for($m=1;$m<13;$m++):
                $select_regest=$_POST["select".$m];
                $body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
                endfor;
                $body_content = str_replace("{order_id}", "{$order_id}", $body_content);
				$body_content = str_replace("{age_use}", "{$age_use}", $body_content);
                $body_content = str_replace("{radio1}", "{$radio1}", $body_content);
                $body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
				$body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);
                $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);

			
			
			//echo $body_content;
			
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
		To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		?>
          <script language="javascript">
   		 window.location.href = 'complete.php?nameEbis=<?php echo $nameEbis; ?>&emailEbis=<?php echo $emailEbis; ?>&birthdayEbis=<?php echo $date_birth; ?>&midEbis=<?php echo $entry_ID_userFix; ?>&pidEbis=mobile_entry';
	</script>

<?php 
	ob_flush();
?>			