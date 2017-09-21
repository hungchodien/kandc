<?php
	
		@include('../entry/function_email.php');
		@include('../../entry/function_email.php');
		@include('../../../entry/function_email.php');
		@include('../../../entry/function_email.php');

		@include('entry/config_entry.php');
		@include('../entry/config_entry.php');
		@include('../../entry/config_entry.php');

		@include(url_root.'entry/config_entry.php');



		@include('Lib/Mobile_Detect.php');
		@include('../Lib/Mobile_Detect.php');
		@include('../../Lib/Mobile_Detect.php');
		@include('../../../Lib/Mobile_Detect.php');
			
			$user_email=$_POST['text8'];
	if(filter_var($user_email, FILTER_VALIDATE_EMAIL)):

	    $filename1=$_POST['name1'];
			$filecontent1=$_POST['content1'];
			$filename2=$_POST['name2'];
			$filecontent2=$_POST['content2'];
			if($_POST['select2']=="" || $_POST['select3']=="" ){
				$date_birth=$_POST['select1']."-1-1";
			}else{
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			}

			$age_use=Age_from_birth($date_birth);
			$browser_cp=$_SERVER['HTTP_USER_AGENT'];
			$computername=gethostbyaddr($_SERVER ['REMOTE_ADDR']);
			//$ip=get_client_ip();
		
		//	echo $user_email."aaaaaaaaaaa";
//exit();
			
			if($filecontent1!="" || $filecontent2!=""):
				$admin_subject="EXE-Entry (with resume)";
			endif;

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
			
			$radio1=str_replace ("&nbsp;&nbsp;&nbsp;&nbsp;","    ",$_POST['radio1']);
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			
			$mail_template=url_root."entry/mail_form.txt";
			
			$file = @file($mail_template);
			foreach ($file as $line) {
  				 // echo $line."\n";
				$line1= str_replace("\n","<br/>",$line);
				$line1 = preg_replace("/(\s)/", " ", $line1);
				  $body_content.=$line1;
  			}
			for($k=1; $k<13;$k++):
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
			$body_content = str_replace("{browser}",$browser_cp, $body_content);
			$body_content = str_replace("{computername}",$computername, $body_content);
			$body_content = str_replace("{ip}",$ip, $body_content);
			
			$title="";
			$detect = new Mobile_Detect;
				if($detect->isMobile() || $detect->isTablet()):
					$title="【EXEサイト・mobile】エントリー";
				else:
					$title="【EXEサイト】エントリー";
				endif;
			$body_content = str_replace("{title}", "{$title}", $body_content);


		//	echo $admin_email;
		//	echo $body_content;
			//exit();

			$default_admin_email = 'kreis-info@kandc.com';

			if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
				To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
				To_Send_Mail($admin_name, $default_admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			}
			else
			{
				$user_email="default@kandc.com";
				 To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
			}
			
			session_unset();
				session_destroy();
			endif;	
		
		?>
          <script language="javascript">
   		 window.location.href = "<?php echo url_root; ?>entry/complete.html";
	</script>
		