<?php 
	ob_start();
	session_start();
?>	

<html>
<body>

	<?php
		$user_email=$_POST['text4'];
		if(filter_var($user_email, FILTER_VALIDATE_EMAIL)):
		@include('set_user_ID_mobile.php');
		@include('../set_user_ID_mobile.php');
	    @include('../../set_user_ID_mobile.php');
 		@include('../../../set_user_ID_mobile.php');


        //@include ('../Lib/_init.php');
        //@include ('../Lib/function/function.database.php');

        //@include ('../../Lib/_init.php');
        //@include ('../../Lib/function/function.database.php');

		@include('function_email.php');
		@include('config_entry.php');
			
			$name_user_send=$_POST['text1'];
            $user_email=$_POST['text4'];
			$date_birth=$_POST['select1']."-".$_POST['select2']."-".$_POST['select3'];
			$age_use=Age_from_birth($date_birth);
			
            $nameEbis=$name_user_send;
			$emailEbis=$user_email;
			
			$mail_template="mail_form.txt";
            $body_content="";
			$file = @file($mail_template);
				foreach ($file as $line) {
					$line1 = str_replace("\n", "<br/>", $line);
					$line1 = preg_replace("/(\s)/", " ", $line1);
					$body_content .= $line1;
				}

			for($k=1; $k<8;$k++):
                    $text_regest = $_POST["text".$k];
                    $body_content = str_replace("{txt$k}", "{$text_regest}", $body_content);
            endfor;
            for($m=1;$m<5;$m++):
                    $select_regest=$_POST["select".$m];
                    $body_content = str_replace("{select$m}", "{$select_regest}", $body_content);
            endfor;
            $body_content = str_replace("{age_use}", "{$age_use}", $body_content);
            $body_content = str_replace("{radio1}", "{$radio1}", $body_content);
            $body_content = str_replace("{USER_NAME}", "{$name_user_send}", $body_content);
            $body_content = str_replace("{domain}", "{$domain}", $body_content);
            $body_content = str_replace("{domain}", "{$domain}", $body_content);
            $body_content = str_replace("{entry_ID_userFix}", "{$entry_ID_userFix}", $body_content);
            $user_content = str_replace("{USER_NAME}", $name_user_send, $user_content);

			$body_content = str_replace("{cst}",$string_rep_cst, $body_content);

            $user_email_fix="em@kandc.com";
            $name_user_fix="EM（".$name_user_send."氏エントリー）";
			//echo $body_content;
			//exit();
            To_Send_Mail_F($name_user_fix, $user_email_fix, $admin_email, $admin_subject, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
            To_Send_Mail_F($admin_name, $default_admin_email, $user_email, $user_subject, $user_content, $type="",$file="", $cc="", $bcc="", $charset="");
        endif;
		?>
    

	<script type="text/javascript">
        /*
		submitFORM('complete.php',{
			'm1id':'<?php echo $entry_ID_userFix; ?>',
			'o1id':'<?php echo $date_birth; ?>',
			'o2id':'<?php echo $_POST["text13"]; ?>',
			'o3id':'<?php echo $_POST["text14"]; ?>',
			'o4id':'<?php echo $_POST["text17"]; ?>',
			'o5id':'<?php echo date('Y年m月d日 H:i'); ?>'
		});
		*/
        submitFORM('complete.php');
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