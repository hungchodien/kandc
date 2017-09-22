<?php 
	ob_start();
?>	
	<?php

		/*@include('set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');*/
		
		if(isset($_POST['key']) && strlen($_POST['key'])>1):
			$key=$_POST['key'];
		else:
			$key="";
		endif;
		
		@include('function_sendmail.php');
		@include('config_entry.php');
		$name_user_send="Question Entry Mobile";		
		//$user_email	=$_POST['s0'];
		$name1 = $_POST['s-1'];
		$name2 = $_POST['s0'];

		$name_user_send=$name1;

		//$user_email = "survey@kandc.com";
		//$user_email = "khanhngn@gmail.com";
		$user_email = "soomin@tokyodesignroom.com";

		if( isset($name1) && isset($name2) && strlen(trim($name1))>0 && strlen(trim($name2))>0 ):

			
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
		
		for($m=0; $m<9;$m++):
                $text_regest_area = $_POST["s".$m."_area"];
                $body_content = str_replace("{s".$m."_area}", "{$text_regest_area}", $body_content);
        endfor;
			
		$body_content = str_replace("{key}", "{$key}", $body_content);

	//$name_user_send="EM";
	//$user_email_fix="em@kandc.com";

	To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
		//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		$s_1=$_POST['s-1'];
		$s0=$_POST['s0'];
		
		$s1=$_POST['s1'];
		$s1_area=$_POST['s1_area'];
		$s1_end=$s1."<br/>".$s1_area;
		
		$s2=$_POST['s2'];
		$s2_area=$_POST['s2_area'];
		$s2_end=$s2."<br/>".$s2_area;
		
		$s3=$_POST['s3'];
		$s3_area=$_POST['s3_area'];
		$s3_end=$s3."<br/>".$s3_area;
		
		$s4_area=$_POST['s4_area'];
		$s4_end=$s4_area;

        $s5_area1=$_POST['s5_area'];
        $s5_area2=$_POST['s6_area'];
        $s5=$_POST['s5'];
        $s5_end=$s5_area1."<br/>".$s5."<br/>".$s5_area2;

        $s6_area=$_POST['s7_area'];
        $s6=$_POST['s9'];
        $s6_end=$s6_area."<br/>".$s6."<br/>";

        $s7=$_POST['s7'];
        $s7_end=$s7;

        $s8=$_POST['s8'];
        $s8_end=$s8;

        $s9=$_POST['s8_area'];
        $s9_end=$s9;
		
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
							"question_consultantName" => $s_1,
							"question_consultantEmail" => $s0,
							"question_consultantS1" => $s1_end,
							"question_consultantS2" => $s2_end,
							"question_consultantS3" => $s3_end,
							"question_consultantS4" => $s4_end,
							"question_consultantS5" => $s5_end,
							"question_consultantS6" => $s6_end,
							"question_consultantS7" => $s7_end,
							"question_consultantS8" => $s8_end,
                            "question_consultantS9" => $s9_end,
                            "question_consultantS10" => '',
							"question_consultant_slug" =>'questionnaire-interview',
							"question_version"      => 'Mobile',  
							"question_consultantDate"=> "now()|||int",
							"question_consultantFile"=> '' 
						);
		
		$res =MK_Datas($datas, "insert", "question_consultant");
		endif;
		?>
          <script language="javascript">
   		 window.location.href = 'complete.php';
	</script>

<?php 
	ob_flush();
?>			