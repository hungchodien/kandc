<?php 
	ob_start();
?>	
	<?php
		
		//Check name and email
		$s0=$_POST['s0'];
		$s_1=$_POST['s-1'];
		if($s0!='' && $s_1!=''):
		
		
		/*@include('entry_user_ID.php');
		@include('../entry_user_ID.php');
	    @include('../../entry_user_ID.php');
 		@include('../../../entry_user_ID.php');*/


		@include('function_email.php');
		@include('config_question.php');

		//@include('Lib/_init.php');
		//@include('../Lib/_init.php');
		//@//include('config.php');
		//@include('../config.php');
		
			$username=$_POST['s-1'];
			$user_email=$_POST['s0'];
			
			/*$radio1=$_POST['radio1'];
            $order_id = $_POST['entry_id'];
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);*/
			$name_user_send="Question Entry";
			
			$mail_template="mail_form.txt";
            
			$body_content="";
             $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
               
                
            }
			$admin_subject = $admin_subject . "" ;
        for($k=-1; $k<9;$k++):
                $text_regest = $_POST["s".$k];
                $body_content = str_replace("{s$k}", "{$text_regest}", $body_content);
        endfor;
		
		for($m=0; $m<8;$m++):
                $text_regest_area = $_POST["s".$m."_area"];
                $body_content = str_replace("{s".$m."_area}", "{$text_regest_area}", $body_content);
        endfor;
            
	To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
	//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
		//echo "ok chua";
		
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
		
		$s5_area=$_POST['s5_area'];
		$s5=$_POST['s5'];
		$s6_area=$_POST['s6_area'];
		$s5_end=$s5_area."<br/>".$s5."<br/>".$s6_area;
		
		$s7_area=$_POST['s7_area'];
		$s6_end=$s7_area;
		
		$s7=$_POST['s7'];
		$s7_end=$s7;
		
		$s8=$_POST['s8'];
		$s8_end=$s8;
		

		//$s9=$_POST['s9'];
		//$s10=$_POST['s10'];
		
		//mb_convert_encoding($value, 'UTF-8', 'SJIS')
		//@include('Lib/_init.php');
		//@include('../Lib/_init.php');
		
		//@include('config.php');
		//@include('../config.php');
		@include('../Lib/config.php');
		@include('../Lib/connect.php');
		@include('../Lib/function/function.query.php');
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
							
							"question_consultantS9" => '',
							"question_consultantS10" => '',
							"question_consultant_slug" =>'questionnaire-interview',
							"question_version"      => 'PC',  
							"question_consultantDate"=> "now()|||int",
							"question_consultantFile"=> '' 
						);
		
		$res =MK_Datas($datas, "insert", "question_consultant");
		
		?>
       	<script language="javascript">
			  //alert("登録が完了しました。 ご協力誠にありがとうございました。");
   			 window.location.href = 'complete.php';
		</script>

<?php 
		else:
			break;
		endif;
	ob_flush();
?>			