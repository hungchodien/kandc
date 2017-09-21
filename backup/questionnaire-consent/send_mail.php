<?php 
	ob_start();
?>	
	<?php
		
		//Check name and email
		$s0=$_POST['s0'];
		$s_1=$_POST['s-1'];
		if($s0!='' && $s_1!=''):
		
		if(filter_var($s0, FILTER_VALIDATE_EMAIL)):


		@include('function_email.php');
		@include('config_question.php');

		
		
			$username=$_POST['s-1'];
			$user_email=$_POST['s0'];
			
			
			$name_user_send="Question Consent Entry";
			
			$mail_template="mail_form.txt";
            
			$body_content="";
             $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
               
                
            }
			$admin_subject = $admin_subject . "" ;
        for($k=-1; $k<10;$k++):
                $text_regest = $_POST["s".$k];
                $body_content = str_replace("{s$k}", "{$text_regest}", $body_content);
        endfor;
		
	To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
	//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		//echo "ok chua";
	?>
       	<script language="javascript">
			  //alert("登録が完了しました。 ご協力誠にありがとうございました。");
   			 window.location.href = 'complete.php';
		</script>

<?php 	
			endif;
		else:
			break;
		endif;
	ob_flush();
?>			