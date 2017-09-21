<?php 
	ob_start();
?>	
	<?php
		@include('function_email.php');
		@include('config.php');
			
			$user_email=$_POST['text8'];
		    $filename1=$_POST['name1'];
			$filecontent1=$_POST['content1'];
			$filename2=$_POST['name2'];
			$filecontent2=$_POST['content2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			if($filecontent1=="" && $filecontent2=="")
			{
		//	echo "1";
			$file_send_mail="";
			}
			elseif($filecontent1!="" && $filecontent2=="")
			{
			//echo "2";
			$file_send_mail=array($filename1."(nhuminh_ckx)".$filecontent1);
			}
			elseif($filecontent1=="" && $filecontent2!="")
			{
			//echo "3";
			$file_send_mail=array($filename2."(nhuminh_ckx)".$filecontent2);
			}
			elseif($filecontent1!="" && $filecontent2!="")
			{
			//echo "4";
			$file_send_mail=array($filename1."(nhuminh_ckx)".$filecontent1,$filename2."(nhuminh_ckx)".$filecontent2);
			}
			
			$radio1=$_POST['radio1'];
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$mail_template="mail_form.txt";
			
			if(!empty($_POST['entry_id'])):
$admin_subject="HP-Entry (with resume and orderid)";
$body_content="
----------------------------------------------------------------------
- 以下の求人コードへのエントリーです
----------------------------------------------------------------------
【求人ID】　　　　　　 {$_POST['entry_id']}
.
----------------------------------------------------------------------
- 個人プロフィール
----------------------------------------------------------------------
";
			else:
$body_content="
----------------------------------------------------------------------
- 個人プロフィール
----------------------------------------------------------------------

";
			endif;
			$file = @file($mail_template);
			foreach ($file as $line) {
  				 // echo $line."\n";
				$line1= str_replace("\n","<br/>",$line);
				$line1 = preg_replace("/(\s)/", " ", $line1);
				  $body_content.=$line1;
  			}
			for($k=1; $k<15;$k++):
			$text_regest = $_POST["text".$k];
			$body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
			endfor;
			for($m=1;$m<7;$m++):
			$select_regest=$_POST["select".$m];
			$body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
			endfor;
			$body_content = str_replace("{radio1}", "{$radio1}", $body_content);
			$body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
			$body_content = str_replace("{age_use}", "{$age_use}", $body_content);
			$body_content = str_replace("{domain}", "{$domain}", $body_content);
			$body_content = str_replace("{filename1}", "{$filename1}", $body_content);
			$body_content = str_replace("{filename2}", "{$filename2}", $body_content);
			$body_content = str_replace("{domain}", "{$domain}", $body_content);
			$user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);
			
			
			
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