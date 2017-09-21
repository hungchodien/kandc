<?php 
	ob_start();
	session_start();
?>
<html><body>	
	<?php

		$security=$_SESSION['secur'];
		//if(filter_var($security, FILTER_VALIDATE_EMAIL) && $security==$_POST['text8']):

	if( filter_var($security, FILTER_VALIDATE_EMAIL) && $security==$_POST['text8'] && strlen(trim($_POST['text1']))>0 && strlen(trim($_POST['text2']))>0 &&
	strlen(trim($_POST['text3']))>0 && strlen(trim($_POST['text4']))>0 && strlen(trim($_POST['select1']))>0 && 
	strlen(trim($_POST['select2']))>0 && strlen(trim($_POST['select3']))>0 &&
	is_numeric($_POST['text5']) && is_numeric($_POST['text6']) && is_numeric($_POST['text7']) && 
	strlen(trim($_POST['text14']))>0 && strlen(trim($_POST['select11']))>0):

		

		@include('../entry_user_ID.php');
	    @include('../../entry_user_ID.php');
 		@include('../../../entry_user_ID.php');


		@include('function_email.php');
		@include('config.php');

		
			
			$user_email=$_POST['text8'];
			$radio1=$_POST['radio1'];

            $filename1=$_POST['name1'];
            $filecontent1=$_POST['content1'];
            $filename2=$_POST['name2'];
            $filecontent2=$_POST['content2'];
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

            $order_id =(int)$_POST['entry_id'];
			$company_id=(int)$_POST['company_id'];
			$consultant_id=(int)$_POST['consultant_id'];
			
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			
			$mail_template="mail_form.txt";
            $mail_template_order_id = "mail_form_entry_id.txt";
			$mail_template_company_id = "mail_form_company_id.txt";
			$mail_template_consultant_id = "mail_form_consultant_id.txt";
			$body_content="";
            
			if($company_id>0):
				$file = @file($mail_template_company_id);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
				
				if(strlen($filename1)>0 || strlen($filename2)>0):
					$admin_subject ="M企業指名エントリー(PC・レジュメ有)"; //$admin_subject . " (with resume and clientid)" ;
				else:
					$admin_subject ="M企業指名エントリー(PC)"; //$admin_subject . " (with clientid)" ;
				endif;
				
			else:
				if($order_id>0):
					$file = @file($mail_template_order_id);
					foreach ($file as $line) {
						$line1 = str_replace("\n", "<br/>", $line);
						$line1 = preg_replace("/(\s)/", " ", $line1);
						$body_content .= $line1;
					}
					if(strlen($filename1)>0 || strlen($filename2)>0):
					   $admin_subject = "M求人指名エントリー(PC・レジュメ有)";//$admin_subject . " (with resume and orderid)" ;
					else:
						$admin_subject ="M求人指名エントリー(PC)";// $admin_subject . " (with orderid)" ;
					endif;
				
					
				else:
					if($consultant_id>0):
						$file = @file($mail_template_consultant_id);
						foreach ($file as $line) {
							$line1 = str_replace("\n", "<br/>", $line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							$body_content .= $line1;
						}
						if(strlen($filename1)>0 || strlen($filename2)>0):
							$admin_subject = "Mコンサル指名エントリー(PC・レジュメ有)"; //$admin_subject . " (with resume and consultantid)" ;
						else:
							$admin_subject = "Mコンサル指名エントリー(PC)";//$admin_subject . " (with consultantid)" ;
						endif;
				
						
					else:

						if(strlen($filename1)>0 || strlen($filename2)>0):
							$admin_subject ="Mエントリー(PC・レジュメ有)"; //$admin_subject . " (with resume)" ;
						else:
							$admin_subject = $admin_subject . " " ;
						endif;

						$file = @file($mail_template);
						foreach ($file as $line) {
							$line1 = str_replace("\n", "<br/>", $line);
							$line1 = preg_replace("/(\s)/", " ", $line1);
							$body_content .= $line1;
						}
					endif;
				endif;
			endif;
			
		for($k=1; $k<22;$k++):
                $text_regest = $_POST["text".$k];
                $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
                endfor;
                for($m=1;$m<15;$m++):
                $select_regest=$_POST["select".$m];
                $body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
                endfor;
                $body_content = str_replace("{order_id}", "{$order_id}", $body_content);
				$body_content = str_replace("{company_id}", "{$company_id}", $body_content);
				$body_content = str_replace("{consultant_id}", "{$consultant_id}", $body_content);
				$body_content = str_replace("{age_use}", "{$age_use}", $body_content);
                $body_content = str_replace("{radio1}", "{$radio1}", $body_content);
                $body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
				$body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);
                $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);
  				$user_content_consultant = str_replace("{USER_NAME}", $name_user_send, $user_content_consultant);
			
				$nameEbis=$name_user_send;
				$emailEbis=$user_email;
			
				

				$title="【メインサイト】エントリー";
				$entry_check=0;
				if($order_id>0) {$title="【メインサイト】求人指名エントリー";}
				if($company_id>0) {$title="【メインサイト】企業指名エントリー";}
				if($consultant_id>0) {$title="【メインサイト】コンサル指名エントリー";}
				
				$body_content = str_replace("{title}", "{$title}", $body_content);




			
			To_Send_Mail($name_user_send, $user_email, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
			
			if($consultant_id >0):
			 To_Send_Mail($admin_name, $default_admin_email, $user_email, $user_subject_consultant, $user_content_consultant, $type="",$file="", $cc="", $bcc="", $charset="");
			else:
			 To_Send_Mail($admin_name, $default_admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
			endif;					
			//To_Send_Mail($admin_name, $admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
				session_unset();
				session_destroy();
				

		endif;//End check validation	
		?>
     <script language="javascript">
   		 //window.location.href = 'complete.php?nameEbis=<?php echo $nameEbis ?>&emailEbis=<?php echo $emailEbis; ?>&birthdayEbis=<?php echo $date_birth; ?>&midEbis=<?php echo $entry_ID_userFix; ?>&pidEbis=entry';
		 //window.location.href = 'complete.php?midEbis=<?php echo $entry_ID_userFix; ?>'; 
	</script>
	<script type="text/javascript">
	submitFORM('complete.php',{'midEbis':'<?php echo $entry_ID_userFix; ?>'});
  	function submitFORM(path, params, method) {
	    method = method || "post"; 
	 
	    var form = document.createElement("form");
	    form.setAttribute("method", method);
	    form.setAttribute("action", path);
	 
	    //Move the submit function to another variable
	    //so that it doesn't get overwritten.
	    form._submit_function_ = form.submit;
	 
	    for(var key in params) {
	        if(params.hasOwnProperty(key)) {
	            var hiddenField = document.createElement("input");
	            hiddenField.setAttribute("type", "hidden");
	            hiddenField.setAttribute("name", key);
	            hiddenField.setAttribute("value", params[key]);
	 
	            form.appendChild(hiddenField);
	         }
	    }
	 
	    document.body.appendChild(form);
	    form._submit_function_();
	}
</script>
</body></html>
<?php 
	ob_flush();
?>			