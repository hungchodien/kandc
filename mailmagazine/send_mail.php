<?php 
	ob_start();
	session_start();
?>	
	<?php
		$user_email = $_POST["email"];
		
		if(filter_var($user_email, FILTER_VALIDATE_EMAIL) ):
			
				@include('function_email.php');
				@include('config-email-content.php');
		
				$admin_subject = $_POST['admin_subject'];
				$subscribe_posts = $_POST['subscribe_posts'];
				
				/*$chkbox_select = $_POST['chkbox_select'];
				
				$new_subscribe_posts = array();
				$i = 0;
				foreach($chkbox_select as $chkbox){
					if($chkbox == "0"){
						$new_subscribe_posts[] =  "【解除】メーリングサービス: ".$subscribe_posts[$i];
					}else{
						$admin_subject = "【登録】メーリングサービス";
						$new_subscribe_posts[] =  "【登録】メーリングサービス: ".$subscribe_posts[$i];
					}
					$i++;
						
				}*/
				
				$name_user_send = "Mail Magazine";
				$mail_template = "mail_form.txt";
					
				$body_content="";
				 $file = @file($mail_template);
					foreach ($file as $line) {
						$line1 = str_replace("\n", "<br/>", $line);
						$line1 = preg_replace("/(\s)/", " ", $line1);
						$body_content .= $line1;
				}
				
				$body_content = str_replace("{subscribe_post1}", "{$subscribe_posts[0]}", $body_content);
				$body_content = str_replace("{subscribe_post2}", "{$subscribe_posts[1]}", $body_content);
				$body_content = str_replace("{subscribe_post3}", "{$subscribe_posts[2]}", $body_content);
				
				
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