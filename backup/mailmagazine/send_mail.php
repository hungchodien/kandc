<?php 
	ob_start();
	session_start();
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
?>	
	<?php
		$user_email = $_POST["email"];
		
		if(filter_var($user_email, FILTER_VALIDATE_EMAIL) ):
	
			
				@include('function_email.php');
				@include('config-email-content.php');
		
				$admin_subject = $_POST['admin_subject'];
				$subscribe_posts = $_POST['subscribe_posts'];
				$chkbox_select=$_POST['chkbox_select'];

				/*$chkbox_select = $_POST['chkbox_select'];
				
				$new_subscribe_posts = array();
				$i = 0;
				foreach($chkbox_select as $chkbox){
					if($chkbox == "0"){
						$new_subscribe_posts[] =  "【解除】メーリングサービス: ".$subscribe_posts[$i];
					}else{
						$admin_subject = "メルマガ希望";
						$new_subscribe_posts[] =  "メルマガ希望: ".$subscribe_posts[$i];
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
				//$admin_subject = 'メルマガ希望';
				$body_content = str_replace("{email}", "$user_email", $body_content);

				$body_content = str_replace("{subscribe_post1}", "{$subscribe_posts[0]}", $body_content);
				$body_content = str_replace("{subscribe_post2}", "{$subscribe_posts[1]}", $body_content);
				$body_content = str_replace("{subscribe_post3}", "{$subscribe_posts[2]}", $body_content);
				
				
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
			//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			
			
		
            if(!empty($chkbox_select) && strlen($user_email)>0):
			
					
					@include('../Lib/config.php');
					@include('../Lib/connect.php');
					@include('../Lib/function/function.query.php');
					//@include('../Lib/function/function.default.php');
		        $table_px="mailmagazine_register";
                $datas = array(
                    "email" => $user_email,
                    "interview_option" => $chkbox_select[0],
                    "career_up_option" => $chkbox_select[1],
                    "turning_point_option" => $chkbox_select[2],
                    "method_request"      => 'PC',
                    "created_at"=> "now()|||int",
                    "updated_at"=> "now()|||int"
                );
		
				$Data_get=Get_Data($table_px," and status_register=0 and `email`='$user_email'");
				//print_r($Data_get);
                if($Data_get[cnt]>0)
                {
                    //update value
                    unset($datas['email']);
                    $res = MK_Datas($datas, "update", $table_px, "email  = '$user_email'","N");
					//echo "update";
                }
                else
                {
                    //insert value
                    $res =MK_Datas($datas, "insert", $table_px);
					//echo "Insert";
                }
            endif;
			//exit();

			session_unset(); 
			session_destroy();
		endif;
		
	?>
       	<script language="javascript">
			document.cookie = "user_email=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			document.cookie = "checkbox1=0"; 
			document.cookie = "checkbox2=0";
			document.cookie = "checkbox3=0";

			 window.location.href = 'complete.php';
		</script>

<?php 	
		
	ob_flush();
?>			