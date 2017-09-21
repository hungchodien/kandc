<?php
	echo '<div class="button_close_email">
		<a onclick="Close_button_form();" href="javascript:void(0);">
					<img border="0" src="http://www.kandc.com/mobile/img/test_close.png">
				</a>
		</div>';
		$admin_email="nhuminh_ckx2005@yahoo.com";
		$admin_name="kandc";
		$name_customer="test";
	//	@include('../config_mobile.php');
	//	@include('../../config_mobile.php');
	//	@include('config_mobile.php');
		
		@include('function_sendmail.php');
		//@include('mail_form.txt');
			$email_customer=$_POST['to_send']; 
			$subject_send=$_POST['subject_send']. "[ヘッドハンティング・人材紹介のクライス＆カンパニー]";
			$job_name=$_POST['job_name'];
			$url_job=$_POST['url_job'];
			$salary_job=$_POST['salary_job'];
			$address_city=$_POST['address_city'];
			$job_description=$_POST['job_description'];
			$needed_skill=$_POST['needed_skill'];
			$english_level=$_POST['english_level'];
			$founded_year=$_POST['founded_year'];
			$capital=$_POST['capital'];
			$employee_count=$_POST['employee_count'];
			$desired_person=$_POST['desired_person'];
			$experience=$_POST['experience'];
			$education=$_POST['education'];
			$reason=$_POST['reason'];
			$company_info=$_POST['company_info'];
			$company_address_prefecture=$_POST['company_address_prefecture'];
			$website_main=$_POST['website_main'];
			
			$browser_cp=$_SERVER['HTTP_USER_AGENT'];
			$computername=gethostbyaddr($_SERVER ['REMOTE_ADDR']);
			$ip=get_client_ip();
	
			$mail_template="mail_form.txt";
			$file = @file($mail_template);
			foreach ($file as $line) {
  				 // echo $line."\n";
				$line1= str_replace("\n","<br/>",$line);
				$line1 = preg_replace("/(\s)/", " ", $line1);
				  $body_content.=$line1;
  			}
			$body_content = str_replace("{job_name}", "{$job_name}", $body_content);
			$body_content = str_replace("{url_job}", "{$url_job}", $body_content);
			$body_content = str_replace("{salary_job}", "{$salary_job}", $body_content);
			$body_content = str_replace("{address_city}", "{$address_city}", $body_content);
			$body_content = str_replace("{job_description}", "{$job_description}", $body_content);
			$body_content = str_replace("{needed_skill}", "{$needed_skill}", $body_content);
			$body_content = str_replace("{english_level}", "{$english_level}", $body_content);
			$body_content = str_replace("{founded_year}", "{$founded_year}", $body_content);
			$body_content = str_replace("{capital}", "{$capital}", $body_content);
			$body_content = str_replace("{employee_count}", "{$employee_count}", $body_content);
			$body_content = str_replace("{desired_person}", "{$desired_person}", $body_content);
			$body_content = str_replace("{experience}", "{$experience}", $body_content);
			$body_content = str_replace("{education}", "{$education}", $body_content);
			$body_content = str_replace("{reason}", "{$reason}", $body_content);
			$body_content = str_replace("{company_info}", "{$company_info}", $body_content);
			$body_content = str_replace("{company_address_prefecture}", "{$company_address_prefecture}", $body_content);
			$body_content = str_replace("{website_main}", "{$website_main}", $body_content);
			
			$body_content = str_replace("{browser}",$browser_cp, $body_content);
			$body_content = str_replace("{computername}",$computername, $body_content);
			$body_content = str_replace("{ip}",$ip, $body_content);
			$file_send_mail="";
			//echo $body_content;
			echo "<br/><br/>";
			echo "The mail has been sent to:".$email_customer." successfully. Please check mail box!";	
			echo "<br/><br/>";
		//send admin
	To_Send_Mail($name_customer, $email_customer, $admin_email, $subject_send, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
		
		//send customer
	To_Send_Mail($admin_name, $admin_email, $email_customer, $subject_send, $body_content, $type="",$file_send_mail, $cc="", $bcc="", $charset="");
		
	//echo $content_job;
	
?>