<?php 
	ob_start();
	session_start();
?>	
	<?php
		$user_email = $_SESSION["secur-email"];
		

		if(filter_var($user_email, FILTER_VALIDATE_EMAIL) && !empty($_POST['delivery-content']) ):


				@include('function_email.php');
				@include('config-email-content.php');
		
				$delivery_content = $_POST['delivery-content'];
			//	$chkbox_select=$delivery_content;
		
				$name_user_send="Mail Magazine Entry";
				$mail_template="mail_form.txt";
					
				$body_content="";
				 $file = @file($mail_template);
					foreach ($file as $line) {
						$line1 = str_replace("\n", "<br/>", $line);
						$line1 = preg_replace("/(\s)/", " ", $line1);
						$body_content .= $line1;
				}
			
				$body_content = str_replace("{user_email}", "{$user_email}", $body_content);

				$body_content = str_replace("{delivery_content1}", "{$delivery_content[0]}", $body_content);
				$body_content = str_replace("{delivery_content2}", "{$delivery_content[1]}", $body_content);
				$body_content = str_replace("{delivery_content3}", "{$delivery_content[2]}", $body_content);
				
			$user_email_fix="em@kandc.com";
			$name_user_fix="EM（".$name_user_send."氏エントリー）";
	
			To_Send_Mail($name_user_fix, $user_email_fix, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
			//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			

				@include('../../Lib/config.php');
            @include('../../Lib/connect.php');
            @include('../../Lib/function/function.query.php');
            if(strlen($user_email)>0):

				$chkbox_select1=$_POST['chkbox_select1'];
				$chkbox_select2=$_POST['chkbox_select2'];
				$chkbox_select3=$_POST['chkbox_select3'];

                $table_px="mailmagazine_register";
                $datas = array(
                    "updated_at"=> "now()|||int"
                );
				//echo $chkbox_select1."--".$chkbox_select2."--".$chkbox_select3;
			
				if((int)$chkbox_select1==0):
					//unset($datas['interview_option']);
					//array_push($datas,array("interview_option"=0));
					$datas=$datas+array("interview_option"=>0);
				endif;

				if((int)$chkbox_select2==0):
					//unset($datas['career_up_option']);
					//array_push($datas,array("career_up_option"=0));
					$datas=$datas+array("career_up_option"=>0);
				endif;

				if((int)$chkbox_select3==0):
					//unset($datas['turning_point_option']);
					//array_push($datas,array("turning_point_option"=>0));
					$datas=$datas+array("turning_point_option"=>0);
				endif;

				//print_r($datas);
				//exit();
                $Data_get=To_Get_Data($table_px," and status_register=0");
                if($Data_get['cnt']>0)
                {
                    //update value
                    //unset($datas['email']);

                    $res = MK_Datas($datas, "update", $table_px, "email  = '$user_email'","N");

                }
                
            endif;


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