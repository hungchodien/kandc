<?php 
	ob_start();
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	ini_set('auto_detect_line_endings', 1);
	setlocale(LC_ALL, 'ja_JP.UTF-8');
	$table = 'question_consultant';
	$outstr = NULL;
	$filename = tempnam(sys_get_temp_dir(), "csv");
	
	$query_add="";
	if(isset($_GET['slug']) && !empty($_GET['slug'])):
	  $slug=$_GET['slug'];
	  	$query_add=" and question_consultant_slug='$slug'";
	endif;

	$file_csv = fopen($filename,"w");
	$Data = To_Get_Data($table, $query_add." order by question_consultantID DESC");

	$count_data=count($Data);
	//print_r($Data);
	$i=0;
	
	//Check form 
	if($slug=='questionnaire-interview'){
				$List_item=array(
				array("ID", "Name", "Email", "Q1", "Q1_Comment","Q2", "Q2_Comment","Q3", "Q3_Comment","Q4","Q5a_Comment", "Q5", "Q5b_Comment","Q6","Q7","Q8","Browser","Date") //header file
				);
				for ($i = 0; $i < $count_data; $i++) {
							//mb_convert_encoding($str, "UTF8", "JIS, eucjp-win, sjis-win");
					$fieldArray[$i]['question_consultantID'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantID'], "SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantName']= str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantName'], "SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantEmail']= str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantEmail'], "SJIS","UTF-8"));
					$arr_question1=explode("<br/>",$Data[$i]['question_consultantS1']);
					$fieldArray[$i]['question_consultantS1'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question1[0],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS1_comment'] =   str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question1[1],"SJIS","UTF-8"));
					
					$arr_question2=explode("<br/>",$Data[$i]['question_consultantS2']);
					$fieldArray[$i]['question_consultantS2'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question2[0],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS2_comment'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question2[1],"SJIS","UTF-8"));
					
					$arr_question3=explode("<br/>",$Data[$i]['question_consultantS3']);
					$fieldArray[$i]['question_consultantS3'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question3[0],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS3_comment'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question3[1],"SJIS","UTF-8"));
					
					$fieldArray[$i]['question_consultantS4'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS4'],"SJIS","UTF-8"));
					
					$arr_question5=explode("<br/>",$Data[$i]['question_consultantS5']);
					$fieldArray[$i]['question_consultantS5_comment_a'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question5[0],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS5'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question5[1],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS5_comment_b'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($arr_question5[2],"SJIS","UTF-8"));
					
					$fieldArray[$i]['question_consultantS6'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS6'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS7'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS7'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS8'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS8'],"SJIS","UTF-8"));
				
					$fieldArray[$i]['question_version'] =         str_replace(array("<br/>","<br>"),"\r\n",$Data[$i]['question_version']);
					$fieldArray[$i]['question_consultantDate'] =  str_replace(array("<br/>","<br>"),"\r\n",$Data[$i]['question_consultantDate']);
			
					array_push($List_item,$fieldArray[$i]);
				} //End for
		
		
	}// End if
	else{
				$List_item=array(
					array("ID", "Email", "Q1","Q2", "Q3", "Q4", "Q5", "Q6","Q7","Q8","Q9","Q10","Browser","Date") //header file
				);
				for ($i = 0; $i < $count_data; $i++) {
							//mb_convert_encoding($str, "UTF8", "JIS, eucjp-win, sjis-win");
					$fieldArray[$i]['question_consultantID'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantID'], "SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantEmail']= str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantEmail'], "SJIS","UTF-8"));

					$fieldArray[$i]['question_consultantS1'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS1'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS2'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS2'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS3'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS3'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS4'] = str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS4'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS5'] =  str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS5'],"SJIS","UTF-8"));	
					$fieldArray[$i]['question_consultantS6'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS6'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS7'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS7'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS8'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS8'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS9'] =    str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS9'],"SJIS","UTF-8"));
					$fieldArray[$i]['question_consultantS10'] =   str_replace(array("<br/>","<br>"),"\r\n",mb_convert_encoding($Data[$i]['question_consultantS10'],"SJIS","UTF-8"));
				
					$fieldArray[$i]['question_version'] =         str_replace(array("<br/>","<br>"),"\r\n",$Data[$i]['question_version']);
					$fieldArray[$i]['question_consultantDate'] =  str_replace(array("<br/>","<br>"),"\r\n",$Data[$i]['question_consultantDate']);
			
					array_push($List_item,$fieldArray[$i]);
				} //End for
	} //End if (check form)
	
	

	//array_walk($List_item, 'excelEncode');	

	
	//print chr(255) . chr(254) . mb_convert_encoding($List_item, "UTF-16LE","UTF-8");
	//fprintf($file_csv, chr(0xEF).chr(0xBB).chr(0xBF)); // writes file header for correct encoding.
	foreach ($List_item as $line) {
   		//$line_conver=mb_convert_encoding($line,'SJIS','UTF-8');
   		@fputcsv($file_csv,$line,',', '"');
		//csv_append_row($file_csv,$line,';','"',TRUE);
	}

	@fclose($file_csv);

	header('Content-Encoding: UTF-8');
	header("Content-type: text/csv");

	if(isset($_GET['slug']) && !empty($_GET['slug'])):
		if($_GET['slug']=='questionnaire'):
			header("Content-Disposition: attachment;Filename=questionnaire.csv");
		elseif($_GET['slug']=='questionnaire-interview'):
			header("Content-Disposition: attachment;Filename=questionnaire-interview.csv");
		else:
			header("Content-Disposition: attachment;Filename=question_consultant.csv");	
		endif;
		
	else:
		header("Content-Disposition: attachment;Filename=question_consultant.csv");
	endif;
	

	header('Content-Transfer-Encoding: binary');
	header("Pragma: no-cache");
	header("Expires: 0");
	header('Pragma: public');

   


	// send file to browser
	readfile($filename);
	@unlink($filename);
?>