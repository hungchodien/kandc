<?php 
	ob_start();
?>
<html><body>
<?php
if(filter_var($_POST['text8'], FILTER_VALIDATE_EMAIL)):
?>	
	<?php

		@include('set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');


		@include('function_sendmail.php');
		@include('config_entry.php');
			
			$user_email=$_POST['text8'];
			$radio1=$_POST['radio1'];
            $order_id = $_POST['entry_id'];
			$name_user_send=$_POST['text1']." ".$_POST['text2'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			
            $nameEbis=$name_user_send;
			$emailEbis=$user_email;


			$mail_template="mail_form.txt";
            $mail_template_order_id = "mail_form_entry_id.txt";
			$body_content="";
            if ($order_id == '') {
                $file = @file($mail_template);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
            }else{
                $file = @file($mail_template_order_id);
                foreach ($file as $line) {
                    $line1 = str_replace("\n", "<br/>", $line);
                    $line1 = preg_replace("/(\s)/", " ", $line1);
                    $body_content .= $line1;
                }
                $admin_subject = $admin_subject . "" ;
            }

        for($k=1; $k<23;$k++):
                $text_regest = $_POST["text".$k];
                $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
                endfor;
                for($m=1;$m<15;$m++):
                $select_regest=$_POST["select".$m];
                $body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
                endfor;
                $body_content = str_replace("{order_id}", "{$order_id}", $body_content);
				$body_content = str_replace("{age_use}", "{$age_use}", $body_content);
                $body_content = str_replace("{radio1}", "{$radio1}", $body_content);
                $body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
                $body_content = str_replace("{domain}", "{$domain}", $body_content);
				$body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);
                $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);

			$default_admin_email = 'kreis-info@kandc.com';
			$user_email_fix="em@kandc.com";
			$name_user_fix="EM（".$name_user_send."氏エントリー）";

			
			To_Send_Mail($name_user_fix, $user_email_fix, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");				
			To_Send_Mail($admin_name, $default_admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
endif; //End checking validation
		?>
    <script language="javascript">
   		//window.location.href = 'complete.php?nameEbis=<?php echo $nameEbis; ?>&emailEbis=<?php echo $emailEbis; ?>&birthdayEbis=<?php echo $date_birth; ?>&midEbis=<?php echo $entry_ID_userFix; ?>&pidEbis=mobile_entry';
		//window.location.href = 'complete.php';
	
	</script>

	<script type="text/javascript">
		submitFORM('complete.php',{'midEbis':'<?php echo $entry_ID_userFix; ?>'});
	  	function submitFORM(path, params, method) {
		    method = method || "post"; 
		 
		    var form = document.createElement("form");
		    form.setAttribute("method", method);
		    form.setAttribute("action", path);
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