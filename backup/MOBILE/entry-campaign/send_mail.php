<?php 
	ob_start();
?>	
	<?php

		@include('../entry/set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');


		@include('function_sendmail.php');
		@include('config_entry.php');
			
			$user_email=$_POST['text6'];
			$radio1=$_POST['radio1'];
            $order_id = $_POST['entry_id'];
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			
          //  $nameEbis=$name_user_send;
			//$emailEbis=$user_email;


			$mail_template="mail_form.txt";
           // $mail_template_order_id = "mail_form_entry_id.txt";
			$body_content="";
            
                $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
            

        for($k=1; $k<10;$k++):
                $text_regest = $_POST["text".$k];
                $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
                endfor;
               
                
                $user_content = str_replace("{USER_NAME}", "{$name_user_send}", $user_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
               // 
				//$body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);
               // $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);

			
			
			//echo $body_content;
			
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
			To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		?>
          <script language="javascript">
   		 window.location.href = 'complete.php';
	</script>

<?php 
	ob_flush();
?>			