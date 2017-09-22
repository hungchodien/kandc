<?php 
	ob_start();
?>	
	<?php

		/*@include('set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');*/
  		//$s0=$_POST['s0'];
		//if($s0!='' && filter_var($s0, FILTER_VALIDATE_EMAIL)):
		if(isset($_POST['key']) && strlen($_POST['key'])>1):
			$key=$_POST['key'];
		else:
			$key="";
		endif;
		
		@include('function_sendmail.php');
		@include('config_entry.php');
			
	
			
			$mail_template="mail_form.txt";
            
			$body_content="";
             $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
               
                
            }
			$admin_subject = $admin_subject . "" ;
        for($k=0; $k<11;$k++):
                $text_regest = $_POST["s".$k];
                $body_content = str_replace("{s$k}", "{$text_regest}", $body_content);
        endfor;	
		$body_content = str_replace("{key}", "{$key}", $body_content);
		//$user_email	=$_POST['s0'];
		$name_user_send="Question Entry";
		$user_email	="kreis-19931104@kandc.com";

	//$user_email_fix="em@kandc.com";
	//$name_user_fix="EM（".$name_user_send."氏エントリー）";

	To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
		//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		//$s0=$_POST['s0'];
		$s0=$user_email;
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$s5=$_POST['s5'];
		$s6=$_POST['s6'];
		$s7=$_POST['s7'];
		$s8=$_POST['s8'];
		$s9=$_POST['s9'];
		$s10=$_POST['s10'];
		//mb_convert_encoding($value, 'UTF-8', 'SJIS')
		//@include('Lib/_init.php');
		//@include('../Lib/_init.php');
		
		//@include('config.php');
		//@include('../config.php');
		@include('../../Lib/config.php');
		@include('../../Lib/connect.php');
		@include('../../Lib/function/function.query.php');
		//echo "ko biet";
		$datas = array(
							"question_consultantEmail" => $s0,
							"question_consultantS1" => $s1,
							"question_consultantS2" => $s2,
							"question_consultantS3" => $s3,
							"question_consultantS4" => $s4,
							"question_consultantS5" => $s5,
							"question_consultantS6" => $s6,
							"question_consultantS7" => $s7,
							"question_consultantS8" => $s8,
							"question_consultantS9" => $s9,
							"question_consultantS10" => $s10,
							"question_consultant_slug" =>'questionnaire',
							"question_version"      => 'Mobile',  
							"question_consultantDate"=> "now()|||int",
							"question_consultantFile"=> '' 
						);
		
		$res =MK_Datas($datas, "insert", "question_consultant");
		
	//endif;
		?>
          <script language="javascript">
   		 window.location.href = 'complete.php';
	</script>

<?php 
	ob_flush();
?>			