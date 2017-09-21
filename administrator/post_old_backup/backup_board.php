<?php
set_time_limit(0); 
@include_once("Lib/_init.php");
@include_once("../Lib/_init.php");
@include_once("../../Lib/_init.php");
 
$sid=$_POST['sid'];
$mode=$_POST['model'];
$id=$_POST['id'];

//echo $id;
$category_radio=$_POST['category_radio'];
$op_vis=$_POST['op_vis'];
$op_date_day=$_POST['op_date_day'];
$op_date_month=$_POST['op_date_month'];
$op_date_year=$_POST['op_date_year'];
$op_date_hour=$_POST['op_date_hour'];
$op_date_minute=$_POST['op_date_minute'];
	$op_vis = (!$op_vis) ? "0" : $op_vis;
	$op_date_day = (strlen($op_date_day) < 2) ? "0{$op_date_day}" : $op_date_day;
	$op_date = "{$op_date_year}-{$op_date_month}-{$op_date_day} {$op_date_hour}:{$op_date_minute}:00";
	$datetime_now=date('Y-m-d H:i:s');
	$datetime_convert=strtotime($datetime_now);
	$consultant_add_thumbnail=$_POST['feature_consultant'];
	$consultant_add_thumbnail_index=$_POST['feature_consultant_1'];
	//echo $datetime_convert."dsdssddsds";
	//exit;
	/********Image 1******************************************************/
	$thumbnail_name="";
	//$thumbnail_name=$_FILES['upload1']['name'];
	if(file_exists($_FILES['upload1']['tmp_name']) || is_uploaded_file($_FILES['upload1']['tmp_name']))
		{
			$thumbnail_name=$_FILES["upload1"]["name"];
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["upload1"]["name"]);
			$extension = end($temp);
			//echo $extension;
			if ((($_FILES["upload1"]["type"] == "image/gif")
			|| ($_FILES["upload1"]["type"] == "image/jpeg")
			|| ($_FILES["upload1"]["type"] == "image/jpg")
			|| ($_FILES["upload1"]["type"] == "image/pjpeg")
			|| ($_FILES["upload1"]["type"] == "image/x-png")
			|| ($_FILES["upload1"]["type"] == "image/png"))
			&& ($_FILES["upload1"]["size"] < 2000000)
			&& in_array($extension, $allowedExts))
			  {
				  $thumbnail_name_request=$sid."_".$datetime_convert."_".$thumbnail_name;
				  move_uploaded_file($_FILES["upload1"]["tmp_name"],
      "../upload_thumnail/".$thumbnail_name_request);
			  }
			   
				else
  				{
					echo "<div class='error'>File Thumbnail not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
					exit;
				}

			
			
		}
		else
		{
			if(isset($_POST['file1'])!="")
				{
				$thumbnail_name_request=$_POST['file1'];
				}
			  else
			    {
				$thumbnail_name_request="";
				}
			
		}
		/****************End*******************/
		
	/********Image 2******************************************************/
	$thumbnail_name1="";
	//$thumbnail_name=$_FILES['upload1']['name'];
	if(file_exists($_FILES['upload2']['tmp_name']) || is_uploaded_file($_FILES['upload2']['tmp_name']))
		{
			$thumbnail_name1=$_FILES["upload2"]["name"];
			//echo $thumbnail_name1;
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["upload2"]["name"]);
			$extension = end($temp);
			//echo $extension;
			if ((($_FILES["upload2"]["type"] == "image/gif")
			|| ($_FILES["upload2"]["type"] == "image/jpeg")
			|| ($_FILES["upload2"]["type"] == "image/jpg")
			|| ($_FILES["upload2"]["type"] == "image/pjpeg")
			|| ($_FILES["upload2"]["type"] == "image/x-png")
			|| ($_FILES["upload2"]["type"] == "image/png"))
			&& ($_FILES["upload2"]["size"] < 20000000)
			&& in_array($extension, $allowedExts))
			  {
				  $thumbnail_name_request1=$sid."_".$datetime_convert."_".$thumbnail_name1;
				  move_uploaded_file($_FILES["upload2"]["tmp_name"],
      "../upload_thumnail/".$thumbnail_name_request1);
	  			
			  }
			   
				else
  				{
					echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
					exit;
				}

			
			
		}
		else
		{
			if(isset($_POST['file2'])!="")
				{
				$thumbnail_name_request1=$_POST['file2'];
				}
			  else
			    {
				$thumbnail_name_request1="";
				}
			
		}
		/****************End*******************/
	
	/********Image 3******************************************************/
	$thumbnail_name2="";
	//$thumbnail_name=$_FILES['upload1']['name'];
	if(file_exists($_FILES['upload3']['tmp_name']) || is_uploaded_file($_FILES['upload3']['tmp_name']))
		{
			$thumbnail_name2=$_FILES["upload3"]["name"];
			//echo $thumbnail_name1;
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["upload3"]["name"]);
			$extension = end($temp);
			//echo $extension;
			if ((($_FILES["upload3"]["type"] == "image/gif")
			|| ($_FILES["upload3"]["type"] == "image/jpeg")
			|| ($_FILES["upload3"]["type"] == "image/jpg")
			|| ($_FILES["upload3"]["type"] == "image/pjpeg")
			|| ($_FILES["upload3"]["type"] == "image/x-png")
			|| ($_FILES["upload3"]["type"] == "image/png"))
			&& ($_FILES["upload3"]["size"] < 20000000)
			&& in_array($extension, $allowedExts))
			  {
				  $thumbnail_name_request2=$sid."_".$datetime_convert."_".$thumbnail_name2;
				  move_uploaded_file($_FILES["upload3"]["tmp_name"],
      "../upload_thumnail/".$thumbnail_name_request2);
	  			
			  }
			   
				else
  				{
					echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
					exit;
				}

			
			
		}
		else
		{
			if(isset($_POST['file3'])!="")
				{
				$thumbnail_name_request2=$_POST['file3'];
				}
			  else
			    {
				$thumbnail_name_request2="";
				}
			
		}
		/****************End*******************/
	
	/********Image Main All******************************************************/
	$thumbnail_name_all="";
	//$thumbnail_name=$_FILES['upload1']['name'];
	if(file_exists($_FILES['upload_all']['tmp_name']) || is_uploaded_file($_FILES['upload_all']['tmp_name']))
		{
			$thumbnail_name_all=$_FILES["upload_all"]["name"];
			//echo $thumbnail_name1;
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["upload_all"]["name"]);
			$extension = end($temp);
			//echo $extension;
			if ((($_FILES["upload_all"]["type"] == "image/gif")
			|| ($_FILES["upload_all"]["type"] == "image/jpeg")
			|| ($_FILES["upload_all"]["type"] == "image/jpg")
			|| ($_FILES["upload_all"]["type"] == "image/pjpeg")
			|| ($_FILES["upload_all"]["type"] == "image/x-png")
			|| ($_FILES["upload_all"]["type"] == "image/png"))
			&& ($_FILES["upload_all"]["size"] < 20000000)
			&& in_array($extension, $allowedExts))
			  {
				  $thumbnail_name_request_all=$sid."_".$datetime_convert."_".$thumbnail_name_all;
				  move_uploaded_file($_FILES["upload_all"]["tmp_name"],
      "../upload_thumnail/".$thumbnail_name_request_all);
	  			
			  }
			   
				else
  				{
					echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
					exit;
				}

			
			
		}
		else
		{
			if(isset($_POST['file_all'])!="")
				{
				$thumbnail_name_request_all=$_POST['file_all'];
				}
			  else
			    {
				$thumbnail_name_request_all="";
				}
			
		}
		/****************End*******************/
	//$csv = array();

	// check there are no errors
	//echo $_FILES['csv']['error']."1111";
	$name_csv="";
	if(isset($_FILES['csv'])){
		$name_csv = $_FILES['csv']['name'];
		$ext_csv = strtolower(end(explode('.', $_FILES['csv']['name'])));
		$type_csv = $_FILES['csv']['type'];
		$tmpName_csv = $_FILES['csv']['tmp_name'];
		//echo $tmpName_csv;
		// check the file is a csv
		if($ext_csv == 'csv')
		{
			$csv_upload_henter_eye_company=$sid."_".$datetime_convert."_".$_FILES['csv']['name'];
			move_uploaded_file($tmpName_csv,
      "../CSV_File/".$csv_upload_henter_eye_company);

		}
		else
		{
			//echo $_FILES['csv']['error']."1111";
			echo "<div class='error'>File CSV not in the format('CSV')</div>";
			exit;

		}
	}
	else
	{
		
		if(isset($_POST['csv_upload_interview'])!="")
				{
					$csv_upload_henter_eye_company=$_POST['csv_upload_interview'];
				}
			  else
			    {
				$csv_upload_henter_eye_company="";
				}
	}
		
	
	
	//echo $thumbnail_name_request;
	//echo $op_date;
	//echo $op_vis;
	//echo $sid;//show 
	//echo $mode;
//insert data ************************************************************************************************/
		switch($sid)
			{
				
				/*********Insert process Job Info************************/
				case "job_info":
				   
				   	if(isset($_FILES['csv_info'])):
						$name_csv_info = $_FILES['csv_info']['name'];
						
						$ext_csv_info = strtolower(end(explode('.', $_FILES['csv_info']['name'])));
						$type_csv_info = $_FILES['csv_info']['type'];
						$tmpName_csv_info = $_FILES['csv_info']['tmp_name'];
						$check_box=$_POST['check_box'];
						
					if(!empty($check_box)):
						if($ext_csv_info == 'csv'):
						
							$csv_top_pic=$sid."_".$datetime_convert."_".$_FILES['csv_info']['name'];
							//echo $csv_top_pic;
							move_uploaded_file($tmpName_csv_info,
					  "../job_info/".$csv_top_pic);
					  		
								$csv_read = read_CSV("../job_info/".$csv_top_pic);
								//echo '<pre style="background:#FFF">';
								$row_num=count($csv_read);
							$count_up=0;
							$msg="";
							for($k=0;$k<$row_num; $k++):
								$count_up=$count_up+1;
									$List_job=$csv_read[$k];
									//$msg = print_r($List_job);
									$order_id=(int)$List_job['0'];
									//$listed_timestamp=date('Y-m-d H:i:s',strtotime($List_job[52]));
									
									//echo $order_id."<br/>";
									$datas_job=array
									(
									"order_id" => $List_job[0],
									"new_flag" => $List_job[1], 
									"topics_flag" => $List_job[2], 
									"theme" => $List_job[3],
									"foreign_flag" => $List_job[4],
									"venture_flag" => $List_job[5],
									"listed_market" => $List_job[6],
									"url_interview" => $List_job[7],
									"url_topics" => $List_job[8],
									"company_name" => $List_job[21],
									"job_name" => $List_job[22],
									"job_description" => $List_job[23],
									"needed_skill" => $List_job[24],
									"desired_skill" => $List_job[25],
									"english_level" => $List_job[26],
									"toeic" => $List_job[27],
									"desired_person" => $List_job[28],
									"experience" => $List_job[29],
									"address_1_prefecture" => $List_job[30],
									"address_1_city" => $List_job[31],
									"address_2_prefecture" => $List_job[32],
									"address_2_city" => $List_job[33],
									"education" => $List_job[34],
									"age_min" => $List_job[35],
									"age_max" => $List_job[36],
									"salary_min" => $List_job[37],
									"salary_max" => $List_job[38],
									"reason" => $List_job[39],
									"company_id" => $List_job[40],
									"industry_code" => $List_job[41],
									"company_info" => $List_job[42], 
									"other_info" => $List_job[43],
									"founded_year" => $List_job[44],
									"founded_month" => $List_job[45], 
									"capital" => $List_job[46],
									"employee_count" => $List_job[47],
									"company_address_prefecture" => $List_job[48],
									"company_address_city" => $List_job[49],
									"consultant_comment" => $List_job[50],
									"tantou" => $List_job[51],
									"listed_timestamp" =>date('Y-m-d H:i:s',strtotime($List_job[52])) 
									
									);
									
									
									//check order_id
									$Data_check_order=To_Get_Data("`job`","and `order_id`=$order_id","`id`");
									if($Data_check_order['cnt'] > 0 ):
									$id_job=$Data_check_order[0]['id'];
									delete_data("job_category", "job_id = $id_job");
									/**Begin*******************************/
									//check order_id get update*********
									foreach($check_box as $category_id)
										{
											$category_job=array
											(
												"category_id" => $category_id,
												"job_id" => $id_job
											);
											MK_Datas($category_job, "insert", "job_category");
											
										}//end add data job_category
									unset($datas_job['order_id']);	
									MK_Datas($datas_job, "update", "job", "order_id = $order_id");
									//echo $msg;
									
									/**End**********************************/
									else:
									/**Begin*******************************/
									//insert order_id**************************
										MK_Datas($datas_job, "insert", "job");
										$id_insert_job=mysql_insert_id();
										foreach($check_box as $category_id_insert)
										{
											$category_job_insert=array
											(
												"category_id" => $category_id_insert,
												"job_id" => $id_insert_job
											);
											MK_Datas($category_job_insert, "insert", "job_category");
											
										}
										
									
									/***End insert**********************************/
									endif;
									//test message
									
									//$msg =print_r($List_job);
								endfor;	
									$msg .="Total:".$count_up."&nbsp;Row. Success. Please Check!";
									echo $msg;
						
							else:
								echo "<div class='error'>File CSV not in the format( .csv )</div>";
								exit;
					
							endif;
						
						else:
							echo "<div class='error'>Please checkbox Job Category !</div>";
							exit;
						endif;
						
				else:
				echo "<div class='error'>Please Select File Csv upload !</div>";
							exit;
				endif;
											
				break;
				/*********Insert process Job Info************************/
				
				
				
				/*********Insert process interview_index************************/
				case "interview_index":
				   $title_index_interview=addslashes($_POST['title_index_interview']);
					$subTitle_index_interview=addslashes($_POST['subTitle_index_interview']);
					$excerpt_index_interview=htmlspecialchars($_POST['bcontent']);
					$link_index_interview=addslashes($_POST['link_index_interview']);
					$targer_index_interview=$_POST['targer_index_interview'];
					$datas = array(
							"title_index_interview" => $title_index_interview,
							"subTitle_index_interview" => $subTitle_index_interview,
							"excerpt_index_interview" => $excerpt_index_interview,
							"link_index_interview" => $link_index_interview,
							"targer_index_interview" => $targer_index_interview,
							"date_index_interview " => $op_date,
							"op_date_index_interview " => "now()|||int",
							"thumbnail_index_interview"=> $thumbnail_name_request,
							"status_index_interview"=> $op_vis 
						);
						//echo $id."aaaaaaaaaaaaaaaaaaa";
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_index_interview']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "interview_index", "id_index_interview = $id","N");
							
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						$res = MK_Datas($datas, "insert", "interview_index");
						
						//header("Location");
						$msg = $sid." has been registered";
						//echo $msg;
						$id_update=mysql_insert_id();
						$url1="index.php?sid={$sid}&op=update&id={$id_update}";
						msg_move_page($msg, $url1);

						}

											
				break;
				/*********Insert process Intervew************************/
				case "interview":
					//$category_interview=$_POST['category_interview'];
					
					$title_interview=addslashes($_POST['title_interview']);
					$subtitle_interview=addslashes($_POST['subtitle_interview']);
					$content_interview=htmlspecialchars($_POST['bcontent']);
					$excerpt_interview=htmlspecialchars($_POST['excerpt']);
					$keyword_interview=addslashes($_POST['keyword_interview']);
					$description_interview=addslashes($_POST['description_interview']);
					//$vol_number=addslashes($_POST['vol_number']);
					$about_company=htmlspecialchars($_POST['about_company']);
					$capital=addslashes($_POST['capital']);
					$established=addslashes($_POST['established']);
					$employees=addslashes($_POST['employees']);
					$entry_id =(int)$_POST['entry_id'];
					$consultantID=(int)$_POST['consultantID'];
					$headquarters=addslashes($_POST['headquarters']);
					
					$datas = array(
							"title_interview" => $title_interview,
							//"vol_number" => $vol_number,
							"subtitle_interview" => $subtitle_interview,
							"content_interview" => $content_interview,
							"excerpt_interview" => $excerpt_interview,
							"keyword_interview" => $keyword_interview,
							"description_interview" => $description_interview,
							"date_interview" => $op_date,
							"op_date_interview " => "now()|||int",
							"thumbnail_interview"=> $thumbnail_name_request,
							"logo_thumnail"=> $thumbnail_name_request1,
							"main_thumbnail_interview"=> $thumbnail_name_request2,
							"about_company" => $about_company,
							"consultant_add_thumbnail" => $consultant_add_thumbnail,
							"capital" =>$capital,
							"established" =>$established,
							"employees" =>$employees,
							"entry_id" => $entry_id,
							"csv_file" => $csv_upload_henter_eye_company,
							"headquarters" => $headquarters,
							"consultantID" => $consultantID, 
							"status_interview"=> $op_vis 
						);
						//print_r($datas);
						$datas_set_all=array(
							"main_thumbnail_interview" => $thumbnail_name_request_all
							);
												
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_interview']);
								}
							if($thumbnail_name1=="")
								{
									unset($datas['logo_thumnail']);
								}
							if($thumbnail_name2=="")
								{
									unset($datas['main_thumbnail_interview']);
								}
							if($name_csv=="")
								{
									unset($datas['csv_file']);
								}	
								
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$category_interview=$_POST['category_interview'];
							$res_checkbox = delete_data("category_join_interview", "id_interview= $id");
							for($m=0;$m<count($category_interview);$m++)
								{
									$datas_box=array
									(
										"id_interview" => $id,
										"category_interview_ID" => $category_interview[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_interview");
								}
							//$res_set_up_all = MK_Datas($datas_set_all, "update", "interview");
							$res = MK_Datas($datas, "update", "interview", "id_interview = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "interview");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();
							$category_interview=$_POST['category_interview'];
							for($m=0;$m<count($category_interview);$m++)
								{
									$datas_box=array
									(
										"id_interview" => $id_update,
										"category_interview_ID" => $category_interview[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_interview");
							}
							$url2="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url2);


						}
						
							//print_r($datas);
				break;
				/*********Insert process henter_eye************************/
				case "henter_eye":
					$vol_number=addslashes($_POST['vol_number']);
					$title_henter_eye=addslashes($_POST['title_henter_eye']);
					$consultant_thumb_henter_eye=$_POST['consultant_thumb_henter_eye'];
					$target_hunter=$_POST['target_hunter'];
					$caption_id_1=$_POST['caption_id_1'];
					$caption_id_2=$_POST['caption_id_2'];
					$caption_id_3=$_POST['caption_id_3'];
					$title_con_1=addslashes($_POST['title_con_1']);
					$title_con_2=addslashes($_POST['title_con_2']);
					$title_con_3=addslashes($_POST['title_con_3']);
					$content_con_1=htmlspecialchars($_POST['content_con_1']);
					$content_con_2=htmlspecialchars($_POST['content_con_2']);
					$content_con_3=htmlspecialchars($_POST['content_con_3']);
					
					$description_hunter=htmlspecialchars($_POST['description_hunter']);
					$subtitle_henter_eye=addslashes($_POST['subtitle']);
					//$csv_upload_henter_eye_company=$_FILES['csv']['name'];
					//echo $csv_upload_henter_eye_company;
					$datas = array(
							"vol_number" => $vol_number,
							"title_henter_eye" => $title_henter_eye,
							"subtitle_henter_eye" => $subtitle_henter_eye,
							"description_henter_eye" => $description_hunter,
							"consultant_thumb_henter_eye" => $consultant_thumb_henter_eye,
							"caption_id_1" => $caption_id_1,
							"caption_id_2" => $caption_id_2,
							"caption_id_3" => $caption_id_3,
							"title_con_1" => $title_con_1,
							"title_con_2" => $title_con_2,
							"title_con_3" => $title_con_3,
							"status_henter_eye" => $op_vis,
							"target_henter_eye" => $target_hunter,
							"content_con_1" => $content_con_1,
							"content_con_2" => $content_con_2,
							"content_con_3" => $content_con_3,
							"Thumbnail_henter_eye" => $thumbnail_name_request,
							"csv_upload_henter_eye_company" => $csv_upload_henter_eye_company,
							"main_thumbnail_henter_eye" => $thumbnail_name_request_all,
							"consultant_add_thumbnail" => $consultant_add_thumbnail,
							"consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
							"date_henter_eye" => $op_date,
							"op_date_henter_eye" => "now()|||int"
							);
						$datas_set_all=array(
							"main_thumbnail_henter_eye" => $thumbnail_name_request_all
							);
											
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['Thumbnail_henter_eye']);
								}
							if($name_csv=="")
								{
									unset($datas['csv_upload_henter_eye_company']);
								}	
							/*Category*/	
							$category_hunter_up=$_POST['category_hunter_up'];
							$res_checkbox = delete_data("category_join_hunter", "id_henter_eye= $id");
							for($m=0;$m<count($category_hunter_up);$m++)
								{
									$datas_box=array
									(
										"id_henter_eye" => $id,
										"category_hunter_ID" => $category_hunter_up[$m]
									);
									
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_hunter");
							}
							/*End*/
							
							/*Icon*/
								$icon_hunter_up=$_POST['icon_hunter_up'];
								$res_checkbox_icon = delete_data("icon_checkbox_join_hunter_eye", "id_henter_eye= $id");
								for($m=0;$m<count($icon_hunter_up);$m++)
								{
									$datas_box1=array
									(
										"id_henter_eye" => $id,
										"icon_Checkbox_hunter_ID" => $icon_hunter_up[$m]
									);
								$res_incheckbox_icon = MK_Datas($datas_box1,"insert", "icon_checkbox_join_hunter_eye");
								}
							
							/*End*/
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "henter_eye", "id_henter_eye = $id","N");
							$res_set_up_all = MK_Datas($datas_set_all, "update", "henter_eye");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "henter_eye");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							/*category*/
							$category_hunter_up=$_POST['category_hunter_up'];
							//$res_checkbox = delete_data("category_join_hunter", "id_henter_eye= $id");
							for($m=0;$m<count($category_hunter_up);$m++)
								{
									$datas_box=array
									(
										"id_henter_eye" => $id_update,
										"category_hunter_ID" => $category_hunter_up[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_hunter");
							}
							/*End*/
							
							/*Icon*/
								$icon_hunter_up=$_POST['icon_hunter_up'];
								//$res_checkbox_icon = delete_data("icon_checkbox_join_hunter_eye", "id_henter_eye= $id");
								for($m=0;$m<count($icon_hunter_up);$m++)
								{
									$datas_box1=array
									(
										"id_henter_eye" => $id_update,
										"icon_Checkbox_hunter_ID" => $icon_hunter_up[$m]
									);
								$res_incheckbox_icon = MK_Datas($datas_box1,"insert", "icon_checkbox_join_hunter_eye");
								}
							
							/*End*/
							
							$url3="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url3);



						}

						
						
							//print_r($datas);
				break;
				/*********Insert process career_up************************/
				case "career_up":
					$title_career_up=addslashes($_POST['title_career_up']);
					$subtitle_career_up=addslashes($_POST['subtitle_career_up']);
					$consultant_thumb_henter_eye=$_POST['consultant_thumb_henter_eye'];
					$content_career_up=htmlspecialchars($_POST['content_career_up']);
					$excerpt_career_up=htmlspecialchars($_POST['excerpt_career_up']);
					
					$advice1=htmlspecialchars($_POST['advice1']);
					$advice2=htmlspecialchars($_POST['advice2']);
					$advice3=htmlspecialchars($_POST['advice3']);
					
					
					
					$datas = array(
					   "title_career_up" => $title_career_up,
					   "subtitle_career_up" => $subtitle_career_up,
					   "consultant_thumb_career_up" => $consultant_thumb_henter_eye,
					   "content_career_up" => $content_career_up,
					   "excerpt_career_up" => $excerpt_career_up,
					   "advice1" => $advice1,
					   "advice2" => $advice2,
					   "advice3" => $advice3,
					   "consultant_add_thumbnail" => $consultant_add_thumbnail,
					   "consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
					   "thumbnail_career_up" => $thumbnail_name_request,
					   "status_career_up" => $op_vis,
					   "date_career_up" => $op_date,
					   "op_date_career_up" => "now()|||int"
					);
					$datas_set_main_thumbnail=array(
					   "thumbnail_career_up" => $thumbnail_name_request
					   );
												
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_career_up']);
								}
							/*Insert Category*/
							$category_career_up=$_POST['category_career_up'];
							$res_checkbox = delete_data("category_join_career_up", "id_career_up= $id");
							for($m=0;$m<count($category_career_up);$m++)
								{
									$datas_box=array
									(
										"id_career_up" => $id,
										"categgory_career_up_ID" => $category_career_up[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_career_up");
								}
							/*End*/
							$res = MK_Datas($datas, "update", "career_up", "id_career_up = $id","N");
							$res_update_thumb = MK_Datas($datas_set_main_thumbnail, "update", "career_up");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "career_up");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							/*Insert Category*/
							$category_career_up=$_POST['category_career_up'];
							//$res_checkbox = delete_data("category_join_career_up", "id_career_up= $id");
							for($m=0;$m<count($category_career_up);$m++)
								{
									$datas_box=array
									(
										"id_career_up" => $id_update,
										"categgory_career_up_ID" => $category_career_up[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_career_up");
								}
							/*End*/
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);



						}

						//print_r($datas);
				break;
				/*********Insert process notice_semina_career************************/
				case "notice_seminar_career":
					$title_notice_seminar_career=addslashes($_POST['title_notice_seminar_career']);
					$link_notice_seminar_career=$_POST['link_notice_seminar_career'];
					$target_notice_seminar_career=addslashes($_POST['target_notice_seminar_career']);
					$cate_nsc=$_POST['cate_nsc'];
					$datas = array(
						"title_notice_seminar_career" => $title_notice_seminar_career,
					   "link_notice_seminar_career" => $link_notice_seminar_career,
					   "target_notice_seminar_career" => $target_notice_seminar_career,
					   "id_category_notice_seminar_career" => $category_radio,
					   "status_notice_seminar_career" => $op_vis,
					   "date_notice_seminar_career" => $op_date,
					   "id_category_notice_seminar_career"=> $cate_nsc,
					   "op_date_notice_seminar_career" => "now()|||int"
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "notice_seminar_career", "id_notice_seminar_career = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "notice_seminar_career");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url5="index.php?sid={$sid}&op=update&id={$id_update}&cate_nsc={$cate_nsc}";
							msg_move_page($msg, $url5);


						}
					break;
				/*********Insert process category_notice_seminar_career ************************/
				case "category_notice_semina_career":
				
					$name_category_notice_seminar_career=addslashes($_POST['name_category_notice_seminar_career']);
					
					$datas = array(
					   "name_category_notice_seminar_career" => $name_category_notice_seminar_career,
					   "status_category_notice_seminar_career" => $op_vis,
					   "date_category_notice_seminar_career" => $op_date,
					   "op_date_category_notice_seminar_career" => "now()|||int"
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_notice_seminar_career", "id_category_notice_seminar_career = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_notice_seminar_career");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url6="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url6);


						}
					break;
					/*********Consultant Category ************************/
				case "category_consultant":
				
					$consultant_Name=addslashes($_POST['consultant_Name']);
					$consultant_position=addslashes($_POST['consultant_position']);
					$consultant_Content=htmlspecialchars($_POST['consultant_Content']);
					$GCDF=(int)$_POST['GCDF'];
					$consultant_Info=htmlspecialchars($_POST['consultant_Info']);
					$consultant_Other=htmlspecialchars($_POST['consultant_Other']);
					$GCDF_content=htmlspecialchars($_POST['GCDF_content']);	
					$report_link=htmlspecialchars($_POST['report_link']);	
					$column_link=htmlspecialchars($_POST['column_link']);		
					$datas = array(
					   "consultant_Content" => $consultant_Content,
						"consultant_Info" => $consultant_Info,
						"consultant_Other" => $consultant_Other,
					   "consultant_Status" => $op_vis,
					   "consultant_Date" => $op_date,
					   "consultant_Opdate" => "now()|||int",
					   "consultant_Thumb"=> $thumbnail_name_request,
					   "consultant_Name" => $consultant_Name,
					   "position_cp" => $consultant_position,
					   "GCDF" => $GCDF,
					   "GCDF_view" => $GCDF_content,
					    "report_link" => $report_link,
						"column_link" => $column_link
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						if($thumbnail_name=="")
								{
									unset($datas['consultant_Thumb']);
								}
						$res = MK_Datas($datas, "update", "consultant", "consultant_ID = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "consultant");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url7="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url7);


						}
					break;
				
					/*********Slide************************/
				case "slide":
				
					$scrol_venderName=addslashes($_POST['scrol_venderName']);
					//$scrol_venderLink=addslashes($_POST['scrol_venderLink']);
					$interview_link=htmlspecialchars($_POST['interview_link']);
					$interview_link_target=addslashes($_POST['interview_link_target']);
					
					$company_interview_link=htmlspecialchars($_POST['company_interview_link']);
					
					$company_interview_link_target=addslashes($_POST['company_interview_link_target']);		
							
					$datas = array(
					   "scrol_venderName" => $scrol_venderName,
					   
						"interview_link" => $interview_link,
						"interview_link_target" => $interview_link_target,
						"company_interview_link" => $company_interview_link,
						"company_interview_link_target" => $company_interview_link_target,
						"company_job_csv" => $csv_upload_henter_eye_company,
					   "scrol_venderStatus" => $op_vis,
					   "scrol_venderDate" => $op_date,
					   "scrol_venderOpdate" => "now()|||int",
					   "scrol_venderThumbnail"=> $thumbnail_name_request
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['scrol_venderThumbnail']);
								}
							if($name_csv=="")
								{
									unset($datas['company_job_csv']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "scrol_vender", "scrol_venderID = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "scrol_vender");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url8="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url8);


						}
					break;
					
					/*********News************************/
				case "news":
				
					$title_news=addslashes($_POST['title_news']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					$excerpt=htmlspecialchars($_POST['excerpt']);

					
									
					$datas = array(
					   "news_title" => $title_news,
						"news_excerpt" => $excerpt,
						"news_content" => $bcontent, 
					   "news_status" => $op_vis,
					   "news_date" => $op_date,
					   "news_op_date" => "now()|||int",
					   "news_thumnail"=> $thumbnail_name_request
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['news_thumnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "news", "news_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "news");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url8="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url8);


						}
					break;
					/*********End************************/
					
					/*********category_consul************************/
				case "category_consul":
				
					$category_consul_title=addslashes($_POST['category_consul_title']);
					$category_consul_subtitle=addslashes($_POST['category_consul_subtitle']);
					$category_consul_description=htmlspecialchars($_POST['category_consul_description']);
					

					
									
					$datas = array(
					   "category_consul_title" => $category_consul_title,
						"category_consul_subtitle" => $category_consul_subtitle,
						"category_consul_description" => $category_consul_description,
						"category_consul_status" => $op_vis,
					   "category_consul_date" => $op_date,
					   "category_consul_op_date" => "now()|||int",
					   "category_consul_thumnail"=> $thumbnail_name_request
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['category_consul_thumnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_consul", "category_consul_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_consul");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url8="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url8);


						}
					break;
					/*********End************************/
					
					/*********Consul************************/
				case "consul":
				
					$consul_title=addslashes($_POST['consul_title']);
					$consul_subtitle=addslashes($_POST['consul_subtitle']);
					$consul_excerpt=htmlspecialchars($_POST['excerpt']);
					$consul_content=htmlspecialchars($_POST['bcontent']);
					$category_consul_id=(int)$_POST['option_con'];

					
									
					$datas = array(
					   "consul_title" => $consul_title,
						"consul_subtitle" => $consul_subtitle,
						"consul_excerpt" => $consul_excerpt,
						"consul_content" => $consul_content,
						"category_consul_id" => $category_consul_id,
						"consul_status" => $op_vis,
					   "consul_date" => $op_date,
					   "consul_op_date" => "now()|||int",
					   "consul_thumnail"=> $thumbnail_name_request
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['consul_thumnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "consul", "consul_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "consul");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url9="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url9);


						}
					break;
					/*********End************************/

						
					/*********Category_ Interview************************/
				case "category_interview":
				
					$consul_title=addslashes($_POST['category_interview']);
					

					
									
					$datas = array(
					   "category_interview_Name" => $consul_title,
						
						"category_interview_Status" => $op_vis,
					   "category_interview_Date" => $op_date,
					   "category_interview_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_interview", "category_interview_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_interview");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url10="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url10);


						}
					break;
					/*********End************************/
					
						/*********Career***********************/
				case "career":
				
					$date_1=addslashes($_POST['date_1']);
					$date_2=addslashes($_POST['date_2']);
					$title_news=addslashes($_POST['title_news']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					$category_name=addslashes($_POST['category_name']);
					$div_id="career_cate_".$datetime_convert;
					
									
					$datas = array(
					   "title_career" => $title_news,
					   "date_career_fist" => $date_1,
						"date_career_end" => $date_2,
						"content_career" => $bcontent,
						"category_name" => $category_name,
						"div_id_career" => $div_id,
					    "status_career" => $op_vis,
					   "date_up_career" => $op_date,
					   "date_op_career" => "now()|||int",
					   "thumbnail_career"=> $thumbnail_name_request
					   
					);
					$datas_set_update = array(
					   "date_career_fist" => $date_1,
						"date_career_end" => $date_2,
						"thumbnail_career"=> $thumbnail_name_request
					   
					);
					
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_career']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$category_consultant=$_POST['category_consultant'];
							$res_checkbox = delete_data("career_consultant", "careerID= $id");
							for($m=0;$m<count($category_consultant);$m++)
								{
									$datas_box=array
									(
										"careerID" => $id,
										"consultant_ID" => $category_consultant[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "career_consultant");
								}
							$res = MK_Datas($datas, "update", "career", "careerID = $id");
							$res_set_up = MK_Datas($datas_set_update, "update", "career");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "career");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();
							$category_consultant=$_POST['category_consultant'];
							for($m=0;$m<count($category_consultant);$m++)
								{
									$datas_box=array
									(
										"careerID" => $id_update,
										"consultant_ID" => $category_consultant[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "career_consultant");
							}
							$url13="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url3);


						}
						
					break;
					/*********End************************/
					/*********Category_ Career Up************************/
				case "category_career_up":
				
					$consul_title=addslashes($_POST['category_career_up']);
					

					
									
					$datas = array(
					   "categgory_career_up_Name" => $consul_title,
						
						"categgory_career_up_Status" => $op_vis,
					   "categgory_career_up_Date" => $op_date,
					   "categgory_career_up_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "categgory_career_up", "categgory_career_up_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "categgory_career_up");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url14="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url14);


						}
					break;
					/*********End************************/
					
					/*********icon_Checkbox_hunter************************/
				case "icon_checkbox_hunter":
				
					$consul_title=addslashes($_POST['icon_checkbox_hunter']);
					

					
									
					$datas = array(
					   "icon_Checkbox_hunter_Name" => $consul_title,
						"icon_Checkbox_hunter_Thumbnail" => $thumbnail_name_request,
						"icon_Checkbox_hunter_Status" => $op_vis,
					   "icon_Checkbox_hunter_Date" => $op_date,
					   "icon_Checkbox_hunter_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['icon_Checkbox_hunter_Thumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "icon_checkbox_hunter", "icon_Checkbox_hunter_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "icon_checkbox_hunter");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url15="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url15);


						}
					break;
					/*********End************************/
					
/*********Category hunter eye************************/
				case "category_hunter":
				
					$consul_title=addslashes($_POST['category_hunter']);
					

					
									
					$datas = array(
					   "category_hunter_Name" => $consul_title,
						"category_hunter_Thumbnail" => $thumbnail_name_request,
						"category_hunter_Status" => $op_vis,
					   "category_hunter_Date" => $op_date,
					   "category_hunter_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['category_hunter_Thumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_hunter", "category_hunter_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_hunter");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url16="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url16);


						}
					break;
					/*********End************************/
/*********Caption hunter eye************************/
				case "caption_henter_eye":
				
					$consul_title=addslashes($_POST['caption_henter_eye']);
					

					
									
					$datas = array(
					   "caption_henter_eye_Name" => $consul_title,
						"caption_henter_eye_thumbnail" => $thumbnail_name_request,
						"caption_henter_eye_Status" => $op_vis,
					   "caption_henter_eye_Date" => $op_date,
					   "caption_henter_eye_Opdate" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['caption_henter_eye_thumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "caption_henter_eye", "caption_henter_eye_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "caption_henter_eye");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url17="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url17);


						}
					break;
					/*********End************************/
/*********Seminar************************/
				case "seminar":
				
					$title=addslashes($_POST['title']);
					$subTitle=addslashes($_POST['subTitle']);
					$excerpt=htmlspecialchars($_POST['excerpt']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					
									
					$datas = array(
						"seminarTitle" => $title,
					   "seminarSubTilte" => $subTitle,
					   "seminarDescription" => $excerpt,
					   "seminarContent" => $bcontent,
						"seminarThumbnail" => $thumbnail_name_request,
						"seminarStatus" => $op_vis,
					   "seminar_Date" => $op_date,
					   "seminar_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['seminarThumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "seminar", "seminarID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "seminar");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url17="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url17);


						}
					break;
					/*********End************************/		
/*********publicity************************/
				case "publicity":
				
					$title=addslashes($_POST['title']);
					$subTitle=addslashes($_POST['subTitle']);
					$excerpt=htmlspecialchars($_POST['excerpt']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					
									
					$datas = array(
						"publicityTitle" => $title,
					   "publicitySubTitle" => $subTitle,
					   "publicityDescription" => $excerpt,
					   "publicityContent" => $bcontent,
						"publicityThumbnail" => $thumbnail_name_request,
						"publicityStatus" => $op_vis,
					   "publicity_Date" => $op_date,
					   "publicity_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['publicityThumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "publicity", "publicityID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "publicity");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url17="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url17);


						}
					break;
					/*********End************************/	
/*********Voice************************/
				case "voice":
				
					$title=addslashes($_POST['title']);
					$subTitle=addslashes($_POST['subtitle']);
					
					$excerpt=htmlspecialchars($_POST['excerpt']);
					$person=htmlspecialchars($_POST['person']);
					
					$case_voiceNo1=addslashes($_POST['case_voiceNo1']);
					$case_voiceNo2=addslashes($_POST['case_voiceNo2']);
					$case_voiceNo3=addslashes($_POST['case_voiceNo3']);
					$case_voiceNo4=addslashes($_POST['case_voiceNo4']);
					$case_voiceNo5=addslashes($_POST['case_voiceNo5']);
					$case_voiceNo6=addslashes($_POST['case_voiceNo6']);
					$case_voiceNo7=addslashes($_POST['case_voiceNo7']);
					$case_voiceNo8=addslashes($_POST['case_voiceNo8']);
					
					
					$job_change=htmlspecialchars($_POST['bcontent']);
					$strategy=htmlspecialchars($_POST['strategy']);	
					$case_voicePoint1=addslashes($_POST['case_voicePoint1']);	
					$case_voicePoint2=addslashes($_POST['case_voicePoint2']);	
					$case_voicePoint3=addslashes($_POST['case_voicePoint3']);	
					$point1=htmlspecialchars($_POST['point1']);
					
					$case_voicePoint11=addslashes($_POST['case_voicePoint11']);	
					$case_voicePoint22=addslashes($_POST['case_voicePoint22']);	
					$case_voicePoint33=addslashes($_POST['case_voicePoint33']);	
					
					$point11=htmlspecialchars($_POST['point11']);
					$case_voiceSeo_key=htmlspecialchars($_POST['case_voiceSeo_key']);
					$case_voiceSeo_Description=htmlspecialchars($_POST['case_voiceSeo_Description']);
					$consultant_thumb_henter_eye=$_POST['consultant_thumb_henter_eye'];
					
					$consultant_add_thumbnail=$_POST['feature_consultant'];
					$datas = array(
					   "case_voiceTitle" => $title,
					   "case_voiceSubTitle" => $subTitle,
					   "case_voiceDescription" =>$excerpt,
					   "case_voicePersion" => $person,
					   "case_voiceNo1" => $case_voiceNo1,
						"case_voiceNo2" => $case_voiceNo2,
						"case_voiceNo3" => $case_voiceNo3,
						"case_voiceNo4" => $case_voiceNo4,
						"case_voiceNo5" => $case_voiceNo5,
						"case_voiceNo6" => $case_voiceNo6,
						"case_voiceNo7" => $case_voiceNo7,
						"case_voiceNo8" => $case_voiceNo8,
						"case_voiceStrategy" => $strategy,
						"case_voiceJob" => $job_change,
						"case_voicePoint1" => $case_voicePoint1,
						"case_voicePoint2" => $case_voicePoint2,
						"case_voicePoint3" => $case_voicePoint3,
						"case_voicePoint4" => $point1,
						"case_voicePoint11" => $case_voicePoint11,
						"case_voicePoint22" => $case_voicePoint22,
						"case_voicePoint33" => $case_voicePoint33,
						"case_voicePoint44" => $point11,
						"case_voiceConsutantID" => $consultant_thumb_henter_eye,
						"case_voiceSeo_key" =>  $case_voiceSeo_key,
						"case_voiceSeo_Description" => $case_voiceSeo_Description,
						"consultant_add_thumbnail" => $consultant_add_thumbnail,
						
						"case_voiceStatus" => $op_vis,
					   "case_voiceDate" => $op_date,
					   "case_voice_op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							/*if($thumbnail_name=="")
								{
									unset($datas['publicityThumbnail']);
								}*/
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "case_voice", "case_voiceID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "case_voice");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url17="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url17);


						}
					break;
					/*********End voice************************/
/*********Question************************/
				case "question":
				
					
					$excerpt=htmlspecialchars($_POST['excerpt']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					
									
					$datas = array(
						
					   "question_voice_answer" => $excerpt,
					   "question_voice_question" => $bcontent,
						
						"question_voice_Status" => $op_vis,
					   "question_voice_Date" => $op_date,
					   "question_voice_Op_Date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "question_voice", "question_voiceID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "question_voice");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url17="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url17);


						}
					break;
					/*********End************************/		
					default:
			
			}
	

?>
