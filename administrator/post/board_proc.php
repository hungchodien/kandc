<?php
set_time_limit(0); 
@include_once("Lib1/_init.php");
@include_once("../Lib1/_init.php");
@include_once("../../Lib1/_init.php");


 
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
	$seo_add_thumb_meta=$_POST['feature_consultant_2'];
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
			//	$csv_upload_henter_eye_company="";

					if(isset($_POST['csv_upload_henter_eye_company'])!="")
					{
						$csv_upload_henter_eye_company=$_POST['csv_upload_henter_eye_company'];
					}
					else
					{
						$csv_upload_henter_eye_company="";
					}


				}
	}
		

	//Upload PDF File;
	$name_pdf="";
	if(isset($_FILES['pdf_upload'])){
		$name_pdf = $_FILES['pdf_upload']['name'];
		
		$ext_pdf = strtolower(end(explode('.',$name_pdf)));
		
		$type_pdf = $_FILES['pdf_upload']['type'];
		$tmpName_pdf = $_FILES['pdf_upload']['tmp_name'];
		//echo $tmpName_csv;
		// check the file is a csv
		if($ext_pdf == 'pdf')
		{
			$pdf_file=$sid."_".$datetime_convert."_".$_FILES['pdf_upload']['name'];
			move_uploaded_file($tmpName_pdf,
      "../../pdf/".$pdf_file);

		}
		else
		{
			echo $_FILES['pdf_upload']['name'];
			echo "<div class='error'>File PDF not in the format('PDF')</div>";
			exit;

		}
	}
	else
	{
		
		if(isset($_POST['pdf_upload_file'])!="")
				{
					$pdf_file=$_POST['pdf_upload_file'];
				}
			  else
			    {
			//	$csv_upload_henter_eye_company="";

					if(isset($_POST['pdf_upload_file'])!="")
					{
						$pdf_file=$_POST['pdf_upload_file'];
					}
					else
					{
						$pdf_file="";
					}


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
						if($ext_csv_info == 'csv'):
							$delete_job=delete_data("`job`");
                            $delete_job_category=delete_data("`job_category`");
							$update_category_set_null_count=array
							(
									"`job_count`" => 0,
									"`new_count`" => 0
							);
				$res_set_count_categoryjob_null =MK_Datas($update_category_set_null_count, "update", "`category`");
							$csv_top_pic=$sid."_".$datetime_convert."_".$_FILES['csv_info']['name'];
							//echo $csv_top_pic;
							move_uploaded_file($tmpName_csv_info,"../job_info/".$csv_top_pic);
					  			$csv_read = read_CSV_news("../job_info/".$csv_top_pic);
								$row_num=count($csv_read);
							$count_up=0;
							$msg="";
							for($k=0;$k<$row_num; $k++):
									$count_up=$count_up+1;
									$List_job=$csv_read[$k];
									//$msg = print_r($List_job);
									$order_id=(int)$List_job['0'];
									//echo $order_id."<br/>";


									$time_up=date('Y-m-d H:i:s',strtotime($List_job[52]));
									$time_check_new=about_two_time($time_up,14);//time 14 day
									if($time_check_new):
										$new_flag_set=1;
									else:
										$new_flag_set=0;
									endif;
									
									//"new_flag" => $List_job[1]


									$datas_job=array
									(
									"order_id" => $List_job[0],
									"new_flag" => $new_flag_set, 
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
									"listed_timestamp" =>date('Y-m-d H:i:s',strtotime($List_job[52])), 
									"job_title" => $List_job[53],
									"keyword_job_1" => $List_job[54],
									"keyword_job_2" => $List_job[55],
									"keyword_job_3" => $List_job[56],
									"keyword_job_4" => $List_job[57],
									"keyword_job_5" => $List_job[58]
									);

									$salary_max=(int)$List_job[38];

									//if($salary_max > 700): salary >700
	
								/*Category*/
									$parent_category1=$List_job[9];
									$parent_category1=(int)$parent_category1;
									$chil_category1=$List_job[10];
									$chil_category1=(int)$chil_category1;
									$id_group_csv1=NULL;
								//	echo $parent_category1."--".$chil_category1."************************<br/>";
									$Data_get_category_id_go1=Get_Data("`category`","and `code`=$chil_category1 and `parent_id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
									if($Data_get_category_id_go1['cntt']>0):
										$id_chil_result1=$Data_get_category_id_go1['id'];
										$id_group_csv1=$parent_category1."nhuminh_ckx".$id_chil_result1;
										//echo $id_group_csv1."aaaaaaa<br/>";
									else:
											$Data_get_category_id_go1_else=Get_Data("`category`","and `id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
											if($Data_get_category_id_go1_else['cntt']>0):
												//$id_chil_result1=$Data_get_category_id_go1_else['id'];
												$id_group_csv1=$parent_category1."nhuminh_ckx"."0";
											endif;
									endif;
									//echo $id_group_csv1."<br/>";
									$parent_category2=$List_job[13];
									$parent_category2=(int)$parent_category2;
									$chil_category2=$List_job[14];
									$chil_category2=(int)$chil_category2;
									$id_group_csv2=NULL;
										$Data_get_category_id_go2=Get_Data("`category`","and `code`=$chil_category2 and `parent_id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go2['cntt']>0):
											$id_chil_result2=$Data_get_category_id_go2['id'];
											$id_group_csv2=$parent_category2."nhuminh_ckx".$id_chil_result2;
											//echo $id_group_csv2."aaaaaaa<br/>";
										else:
												$Data_get_category_id_go2_else=Get_Data("`category`"," and `id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
												if($Data_get_category_id_go2_else['cntt']>0):
													$id_group_csv2=$parent_category2."nhuminh_ckx"."0";
													//echo $id_group_csv2."bbbbbb<br/>";
												else:
														
												endif;
										endif;
									$parent_category3=$List_job[17];
									$parent_category3=(int)$parent_category3;
									$chil_category3=$List_job[18];
									$chil_category3=(int)$chil_category3;
									$id_group_csv3=NULL;
									$Data_get_category_id_go3=Get_Data("`category`","and `code`=$chil_category3 and `parent_id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
									if($Data_get_category_id_go3['cntt']>0):
										$id_chil_result3=$Data_get_category_id_go3['id'];
										$id_group_csv3=$parent_category3."nhuminh_ckx".$id_chil_result3;
									else:
										$Data_get_category_id_go3_else=Get_Data("`category`"," and `id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go3_else['cntt']>0):
											$id_group_csv3=$parent_category3."nhuminh_ckx"."0";
										endif;
									endif;
									
									$group_csv_id_category=array();
									if(isset($id_group_csv1)):
										array_push($group_csv_id_category,$id_group_csv1);
									endif;
									if(isset($id_group_csv2)):
										array_push($group_csv_id_category,$id_group_csv2);
									endif;
									if(isset($id_group_csv3)):
										array_push($group_csv_id_category,$id_group_csv3);
									endif;
									$group_csv_id_category=array_unique($group_csv_id_category);
								/*End category*/
							$count_array_cate=count($group_csv_id_category);
							$Data_check_order_jobID=To_Get_Data("`job`","and `order_id`=$order_id","`id`");
							$id_job=$Data_check_order_jobID[0]['id'];
							$Count_job_check_del=$Data_check_order_jobID['cnt'];
							if($Count_job_check_del > 0 ):
								delete_data("job_category", "`job_id` = $id_job");
							endif;
						
								for($j=0; $j<$count_array_cate; $j++):
								$List_ID_Cate_get = $group_csv_id_category[$j];
								 $get_id_category_cut=explode("nhuminh_ckx", $List_ID_Cate_get);
								 $id_parent_jobinfor=(int)$get_id_category_cut[0];
								 $id_category_jobinfor=(int)$get_id_category_cut[1];
								/***********************************************************************************/
								if($Count_job_check_del > 0 ):
									/**Begin***********************************************/
								if($id_category_jobinfor>0):
								//echo "category_chil:".$id_category_jobinfor."<br/>";
										$category_job_chilrent=array
											(
												"category_id" => $id_category_jobinfor,
												"job_id" => $id_job,
												"priority"=>1
											);
											if($j!=0):
												unset($category_job_chilrent['priority']);
												$res =MK_Datas($category_job_chilrent, "insert", "`job_category`");
											else:
												$res =MK_Datas($category_job_chilrent, "insert", "`job_category`");
											endif;
											//echo $res."<br/>";
								endif;
								if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
								//echo "aaaaa1".$id_category_jobinfor3."--".$id_category_jobinfor3."<br/>";
											$category_job_parent=array
											(
												"category_id" => $id_parent_jobinfor,
												"job_id" => $id_job,
												"priority"=>1
											);
											if($j!=0):
												unset($category_job_parent['priority']);
												//print_r($category_job_parent);
												$res =MK_Datas($category_job_parent, "insert", "`job_category`");
											else:
												$res =MK_Datas($category_job_parent, "insert", "`job_category`");
											endif;
									
									endif;
								
								
									unset($datas_job['order_id']);	
									MK_Datas($datas_job, "update", "`job`", "`order_id` = $order_id");
						/***********************************************************************************************/			
									
									/**End**********************************/
							else:
									/**Begin*******************************/
									MK_Datas($datas_job, "insert", "job");
									$id_insert_job=mysql_insert_id();
								
									if($id_category_jobinfor>0):
											//echo $id_category_jobinfor."cate<br/>";
												$category_job_insert=array
													(
														"category_id" => $id_category_jobinfor,
														"job_id" => $id_insert_job,
														"priority"=>1
													);
													if($j!=0):
														unset($category_job_insert['priority']);
														MK_Datas($category_job_insert, "insert", "`job_category`");
													else:
														MK_Datas($category_job_insert, "insert", "`job_category`");
													endif;
											
										endif;
									   if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
											$category_job_insert_pa=array
												(
													"category_id" => $id_parent_jobinfor,
													"job_id" => $id_insert_job,
													"priority"=>1
												);
												if($j!=0):
														unset($category_job_insert_pa['priority']);
														MK_Datas($category_job_insert_pa,"insert","`job_category`");
												else:
														MK_Datas($category_job_insert_pa,"insert","`job_category`");
												endif;
					
									endif;	
								
								 
									/***End insert**********************************/
								endif;
								/*********************************************************************************/
							
			/************************************************************************************************************/
	
		if($id_category_jobinfor>0):						
		$count_new_flag_category_not=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag`");//count flag
		
		$count_job_category_not=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor'","Count(*) as `count_job`");//count flag
		/*$id_category_get*/
		/*I*/$count_new_category_up=$count_new_flag_category_not[0]['news_flag'];//count_new
		/*I*/$count_job_up=$count_job_category_not[0]['count_job'];
			$category_update_count_not=array(
									"new_count" => $count_new_category_up,
									"job_count" => $count_job_up
								  );
			MK_Datas($category_update_count_not, "update", "category", "`id` = $id_category_jobinfor");	
			/*************************/
			$count_new_flag_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count" => $count_new_category_up_parent,
								"job_count" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
			
				
		endif;
		
	 if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
	$count_new_flag_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count" => $count_new_category_up_parent,
								"job_count" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
		endif;
		
	/******************************************************************************************************/
											//reset($List_job);
										endfor;
	
									//endif;//check salary max>700
									
								endfor;	
									$msg .="Total:".$count_up."&nbsp;Row. Success. Please Check!";
									echo $msg;
						
							else:
								echo "<div class='error'>File CSV not in the format( .csv )</div>";
								exit;
					
							endif;
						
				
						
				else:
				echo "<div class='error'>Please Select File Csv upload !</div>";
							exit;
				endif;
											
				break;
				/*********Insert process Job Info************************/
				
				
				

			/********************************************************************************************/	
				


				/*********Insert process Job Info************************/
				case "job_info_en":
				   
				   	if(isset($_FILES['csv_info'])):
						$csv_read =array();
						$name_csv_info = $_FILES['csv_info']['name'];
						
						$ext_csv_info = strtolower(end(explode('.', $_FILES['csv_info']['name'])));
						$type_csv_info = $_FILES['csv_info']['type'];
						$tmpName_csv_info = $_FILES['csv_info']['tmp_name'];
						//$check_box=$_POST['check_box'];
						//echo $tmpName_csv_info;
		/********************/	//if(!empty($check_box)):
						if($ext_csv_info == 'csv'):
						    $delete_job=delete_data("`job_en`");
                            $delete_job_category=delete_data("`job_category_en`");
							$update_category_set_null_count=array
							(
									"`job_count_en`" => 0,
									"`new_count_en`" => 0
							);
				$res_set_count_categoryjob_null =MK_Datas($update_category_set_null_count, "update", "`category`");
							$csv_top_pic_en=$sid."_".$datetime_convert."_".$_FILES['csv_info']['name'];
							//echo $csv_top_pic;
							move_uploaded_file($tmpName_csv_info,
					  "../job_info/".$csv_top_pic_en);
					  		
							$csv_read = read_CSV_en("../job_info/".$csv_top_pic_en);
								//echo '<pre style="background:#FFF">';
								//echo "../job_info/".$csv_top_pic_en."<br/>";
								//print_r($csv_read);
								$row_num=count($csv_read);
							$count_up=0;
							$msg="";
							for($k=0;$k<$row_num; $k++):
									$count_up=$count_up+1;
									$List_job=$csv_read[$k];
									//$msg = print_r($List_job);
									$order_id=(int)$List_job['0'];
									
								//echo $count_up."--".$order_id."--Count Num:".$row_num."<br/>";
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
									"listed_timestamp" =>date('Y-m-d H:i:s',strtotime($List_job[52])),
									"Position_en" => $List_job[53],
									"Job_Description_en" => $List_job[54],
									"Company_Summery_en" => $List_job[55],
									"English_Requirement_en" => $List_job[56],
									"Type_of_Industry_en" => $List_job[57],
									"Location_en" => $List_job[58],
									"Requried_Skills_en" => $List_job[59],
									"Education_en" => $List_job[60],
									"Consultant_Comment_en" => $List_job[61],
									"Japanese_Requirement_en" => $List_job[62] 
									
									);
								
								//$name_category= $List_job[11];
								/*Category*/
									$parent_category1=$List_job[9];
									$parent_category1=(int)$parent_category1;
									$chil_category1=$List_job[10];
									$chil_category1=(int)$chil_category1;
									$id_group_csv1=NULL;
								//	echo $parent_category1."--".$chil_category1."************************<br/>";
									$Data_get_category_id_go1=Get_Data("`category`","and `code`=$chil_category1 and `parent_id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
									if($Data_get_category_id_go1['cntt']>0):
										$id_chil_result1=$Data_get_category_id_go1['id'];
										$id_group_csv1=$parent_category1."nhuminh_ckx".$id_chil_result1;
										//echo $id_group_csv1."aaaaaaa<br/>";
									else:
											$Data_get_category_id_go1_else=Get_Data("`category`","and `id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
											if($Data_get_category_id_go1_else['cntt']>0):
												//$id_chil_result1=$Data_get_category_id_go1_else['id'];
												$id_group_csv1=$parent_category1."nhuminh_ckx"."0";
											endif;
											
										
									endif;
									//echo $id_group_csv1."<br/>";
									
									$parent_category2=$List_job[13];
									$parent_category2=(int)$parent_category2;
									$chil_category2=$List_job[14];
									$chil_category2=(int)$chil_category2;
									$id_group_csv2=NULL;
										$Data_get_category_id_go2=Get_Data("`category`","and `code`=$chil_category2 and `parent_id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go2['cntt']>0):
											$id_chil_result2=$Data_get_category_id_go2['id'];
											$id_group_csv2=$parent_category2."nhuminh_ckx".$id_chil_result2;
											//echo $id_group_csv2."aaaaaaa<br/>";
										else:
												$Data_get_category_id_go2_else=Get_Data("`category`"," and `id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
												if($Data_get_category_id_go2_else['cntt']>0):
													$id_group_csv2=$parent_category2."nhuminh_ckx"."0";
													//echo $id_group_csv2."bbbbbb<br/>";
													else:
														
													endif;
												
												
										endif;
									
									//echo $id_group_csv2."bbbbbb<br/>";
									//echo (int)""."aaaaaaa";
									$parent_category3=$List_job[17];
									$parent_category3=(int)$parent_category3;
									$chil_category3=$List_job[18];
									$chil_category3=(int)$chil_category3;
									$id_group_csv3=NULL;
									$Data_get_category_id_go3=Get_Data("`category`","and `code`=$chil_category3 and `parent_id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
									if($Data_get_category_id_go3['cntt']>0):
										$id_chil_result3=$Data_get_category_id_go3['id'];
										$id_group_csv3=$parent_category3."nhuminh_ckx".$id_chil_result3;
									else:
										$Data_get_category_id_go3_else=Get_Data("`category`"," and `id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go3_else['cntt']>0):
											$id_group_csv3=$parent_category3."nhuminh_ckx"."0";
										endif;
									endif;
									
									$group_csv_id_category=array();
									if(isset($id_group_csv1)):
										array_push($group_csv_id_category,$id_group_csv1);
									endif;
									if(isset($id_group_csv2)):
										array_push($group_csv_id_category,$id_group_csv2);
									endif;
									if(isset($id_group_csv3)):
										array_push($group_csv_id_category,$id_group_csv3);
									endif;
									
									//$group_csv_id_category=array($id_group_csv1,$id_group_csv2,$id_group_csv3);
									$group_csv_id_category=array_unique($group_csv_id_category);
									//print_r($group_csv_id_category)."<br/>";
									//print_r($group_csv_id_category)."<br/>";
								/*End category*/
							$count_array_cate=count($group_csv_id_category);
							
							
							$Data_check_order_jobID=To_Get_Data("`job_en`","and `order_id`=$order_id","`id`");
							$id_job=$Data_check_order_jobID[0]['id'];
							$Count_job_check_del=$Data_check_order_jobID['cnt'];
							if($Count_job_check_del > 0 ):
								delete_data("job_category_en", "`job_id` = $id_job");
							endif;
						
								for($j=0; $j<$count_array_cate; $j++):
								$List_ID_Cate_get = $group_csv_id_category[$j];
								
								
								 $get_id_category_cut=explode("nhuminh_ckx", $List_ID_Cate_get);
								 $id_parent_jobinfor=(int)$get_id_category_cut[0];
								 $id_category_jobinfor=(int)$get_id_category_cut[1];
								 
								
								
								if($Count_job_check_del > 0 ):
									
									
								
									/**Begin*******************************/
						/****************************************************************************************/
								if($id_category_jobinfor>0):
								//echo "category_chil:".$id_category_jobinfor."<br/>";
										$category_job_chilrent=array
											(
												"`category_id`" => $id_category_jobinfor,
												"`job_id`" => $id_job
											);
											$res =MK_Datas($category_job_chilrent, "insert", "`job_category_en`");
											//echo $res."<br/>";
								endif;
								if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
								//echo "aaaaa1".$id_category_jobinfor3."--".$id_category_jobinfor3."<br/>";
								//echo "category_parent:".$id_parent_jobinfor."<br/>";
									$category_job_parent=array
											(
												"category_id" => $id_parent_jobinfor,
												"job_id" => $id_job
											);
											MK_Datas($category_job_parent, "insert", "job_category_en");
									
									endif;
								
								
									unset($datas_job['order_id']);	
									MK_Datas($datas_job, "update", "`job_en`", "`order_id` = $order_id");
						/***********************************************************************************************/			
									
									/**End**********************************/
							else:
									/**Begin*******************************/
									MK_Datas($datas_job, "insert", "job_en");
									$id_insert_job=mysql_insert_id();
								
									if($id_category_jobinfor>0):
											//echo $id_category_jobinfor."cate<br/>";
												$category_job_insert=array
													(
														"category_id" => $id_category_jobinfor,
														"job_id" => $id_insert_job
													);
													MK_Datas($category_job_insert, "insert", "`job_category_en`");
											
										endif;
									   if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
											$category_job_insert_pa=array
												(
													"category_id" => $id_parent_jobinfor,
													"job_id" => $id_insert_job
												);
												MK_Datas($category_job_insert_pa,"insert","`job_category_en`");
									endif;	
								
								 
									/***End insert**********************************/
								endif;
								/*********************************************************************************/
								/*Set Count, News Flag Category */
								//$id_parent_jobinfor1=(int)$get_id_category_cut1[0];
								//$id_category_jobinfor1=(int)$get_id_category_cut1[1];
			/************************************************************************************************************/
	
		if($id_category_jobinfor>0):						
		$count_new_flag_category_not=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag`");//count flag
		
		$count_job_category_not=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor'","Count(*) as `count_job`");//count flag
		/*$id_category_get*/
		/*I*/$count_new_category_up=$count_new_flag_category_not[0]['news_flag'];//count_new
		/*I*/$count_job_up=$count_job_category_not[0]['count_job'];
			$category_update_count_not=array(
									"new_count_en" => $count_new_category_up,
									"job_count_en" => $count_job_up
								  );
			MK_Datas($category_update_count_not, "update", "category", "`id` = $id_category_jobinfor");	
			/*************************/
			$count_new_flag_category_parent=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count_en" => $count_new_category_up_parent,
								"job_count_en" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
			
				
		endif;
		
	 if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
	$count_new_flag_category_parent=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job_en` as `J` join `job_category_en` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count_en" => $count_new_category_up_parent,
								"job_count_en" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
		endif;
		
	
	
	
	
	
	
				
	/******************************************************************************************************/
											//reset($List_job);
										endfor;
	
	
									
								endfor;	
									$msg .="Total:".$count_up."&nbsp;Row. Success. Please Check!";
									echo $msg;
						
							else:
								echo "<div class='error'>File CSV not in the format( .csv )</div>";
								exit;
					
							endif;
						
				/*		else:
							echo "<div class='error'>Please checkbox Job Category !</div>";
							exit;
						endif;
						*/
						
				else:
				echo "<div class='error'>Please Select File Csv upload !</div>";
							exit;
				endif;
											
				break;
				/*********Insert process Job Info************************/
				
				
				

				/*********Insert process Job Info set day************************/
				case "breaking_news":
				
				   if(isset($_FILES['csv_info'])):
						$name_csv_info = $_FILES['csv_info']['name'];
						
						$ext_csv_info = strtolower(end(explode('.', $_FILES['csv_info']['name'])));
						$type_csv_info = $_FILES['csv_info']['type'];
						$tmpName_csv_info = $_FILES['csv_info']['tmp_name'];
						//$check_box=$_POST['check_box'];
						
		/********************/	//if(!empty($check_box)):
						if($ext_csv_info == 'csv'):
						   // $delete_job=delete_data("`job`");
                           // $delete_job_category=delete_data("`job_category`");
							//$update_category_set_null_count=array
							//(
							//		"`job_count`" => 0,
							//		"`new_count`" => 0
							//);
				//$res_set_count_categoryjob_null =MK_Datas($update_category_set_null_count, "update", "`category`");
							$update_job_ticker_index=array(
								"job_ticker_index" => 0
							);
							$res_set_ticker =MK_Datas($update_job_ticker_index, "update", "`job`");
							
							$csv_top_pic=$sid."_".$datetime_convert."_".$_FILES['csv_info']['name'];
							//echo $csv_top_pic;
							move_uploaded_file($tmpName_csv_info,
					  "../job_info/".$csv_top_pic);
					  		
								$csv_read = read_CSV_news("../job_info/".$csv_top_pic);
								//echo $csv_top_pic."<br/>";
							//	print_r($csv_read);
							//	echo "<br/>Number Count:".count($csv_read)."<br/>";
							//	exit();
								//echo '<pre style="background:#FFF">';
								$row_num=count($csv_read);
								//echo $row_num;
							$count_up=0;
							$msg="";
							for($k=0;$k<$row_num; $k++):
									$count_up=$count_up+1;
									$List_job=$csv_read[$k];
									//$msg = print_r($List_job);
									$order_id=(int)$List_job['0'];
									
								//echo $count_up."--".$order_id."--Count Num:".$row_num."<br/>";
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
									"listed_timestamp" =>date('Y-m-d H:i:s',strtotime($List_job[52])), 
									"job_ticker_index"=>1,
									"job_title" => $List_job[53],
									"keyword_job_1" => $List_job[54],
									"keyword_job_2" => $List_job[55],
									"keyword_job_3" => $List_job[56],
									"keyword_job_4" => $List_job[57],
									"keyword_job_5" => $List_job[58]
									);
								
								//$name_category= $List_job[11];


								/*check salary*/
								$salary_max=(int)$List_job[38];

								//if($salary_max > 700):

									//print_r($datas_job);
								/*Category*/
									$parent_category1=$List_job[9];
									$parent_category1=(int)$parent_category1;
									$chil_category1=$List_job[10];
									$chil_category1=(int)$chil_category1;
									$id_group_csv1=NULL;
									//echo $parent_category1."--".$chil_category1."************************<br/>";
									$Data_get_category_id_go1=Get_Data("`category`","and `code`=$chil_category1 and `parent_id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
									if($Data_get_category_id_go1['cntt']>0):
										$id_chil_result1=$Data_get_category_id_go1['id'];
										$id_group_csv1=$parent_category1."nhuminh_ckx".$id_chil_result1;
										//echo $id_group_csv1."aaaaaaa<br/>";
									else:
											$Data_get_category_id_go1_else=Get_Data("`category`","and `id`=$parent_category1","count(*) as `cntt` ,`id`,`name`,`parent_id`");
											if($Data_get_category_id_go1_else['cntt']>0):
												//$id_chil_result1=$Data_get_category_id_go1_else['id'];
												$id_group_csv1=$parent_category1."nhuminh_ckx"."0";
											endif;
											
										
									endif;
									//echo $id_group_csv1."<br/>";
									
									$parent_category2=$List_job[13];
									$parent_category2=(int)$parent_category2;
									$chil_category2=$List_job[14];
									$chil_category2=(int)$chil_category2;
									$id_group_csv2=NULL;
										$Data_get_category_id_go2=Get_Data("`category`","and `code`=$chil_category2 and `parent_id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go2['cntt']>0):
											$id_chil_result2=$Data_get_category_id_go2['id'];
											$id_group_csv2=$parent_category2."nhuminh_ckx".$id_chil_result2;
											//echo $id_group_csv2."aaaaaaa<br/>";
										else:
												$Data_get_category_id_go2_else=Get_Data("`category`"," and `id`=$parent_category2"," count(*) as `cntt`, `id`,`name`,`parent_id`");
												if($Data_get_category_id_go2_else['cntt']>0):
													$id_group_csv2=$parent_category2."nhuminh_ckx"."0";
													//echo $id_group_csv2."bbbbbb<br/>";
													else:
														
													endif;
												
												
										endif;
									
									//echo $id_group_csv2."bbbbbb<br/>";
									//echo (int)""."aaaaaaa";
									$parent_category3=$List_job[17];
									$parent_category3=(int)$parent_category3;
									$chil_category3=$List_job[18];
									$chil_category3=(int)$chil_category3;
									$id_group_csv3=NULL;
									$Data_get_category_id_go3=Get_Data("`category`","and `code`=$chil_category3 and `parent_id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
									if($Data_get_category_id_go3['cntt']>0):
										$id_chil_result3=$Data_get_category_id_go3['id'];
										$id_group_csv3=$parent_category3."nhuminh_ckx".$id_chil_result3;
									else:
										$Data_get_category_id_go3_else=Get_Data("`category`"," and `id`=$parent_category3","  count(*) as `cntt`, `id`,`name`,`parent_id`");
										if($Data_get_category_id_go3_else['cntt']>0):
											$id_group_csv3=$parent_category3."nhuminh_ckx"."0";
										endif;
									endif;
									
									$group_csv_id_category=array();
									if(isset($id_group_csv1)):
										array_push($group_csv_id_category,$id_group_csv1);
									endif;
									if(isset($id_group_csv2)):
										array_push($group_csv_id_category,$id_group_csv2);
									endif;
									if(isset($id_group_csv3)):
										array_push($group_csv_id_category,$id_group_csv3);
									endif;
									
									//$group_csv_id_category=array($id_group_csv1,$id_group_csv2,$id_group_csv3);
									$group_csv_id_category=array_unique($group_csv_id_category);
									//print_r($group_csv_id_category)."<br/>";
									//print_r($group_csv_id_category)."<br/>";
								/*End category*/
							$count_array_cate=count($group_csv_id_category);
							
							
							$Data_check_order_jobID=To_Get_Data("`job`","and `order_id`=$order_id","`id`");
							$id_job=$Data_check_order_jobID[0]['id'];
							$Count_job_check_del=$Data_check_order_jobID['cnt'];
							if($Count_job_check_del > 0 ):
								delete_data("job_category", "`job_id` = $id_job");
							endif;
						
								for($j=0; $j<$count_array_cate; $j++):
								$List_ID_Cate_get = $group_csv_id_category[$j];
								
								
								 $get_id_category_cut=explode("nhuminh_ckx", $List_ID_Cate_get);
								 $id_parent_jobinfor=(int)$get_id_category_cut[0];
								 $id_category_jobinfor=(int)$get_id_category_cut[1];
								/***********************************************************************************/
								
								
								if($Count_job_check_del > 0 ):
									
									
									//delete_data("job_category", "`job_id` = $id_job");
									/**Begin*******************************/
						/****************************************************************************************/
								if($id_category_jobinfor>0):
								//echo "category_chil:".$id_category_jobinfor."<br/>";
										$category_job_chilrent=array
											(
												"category_id" => $id_category_jobinfor,
												"job_id" => $id_job,
												"priority"=>1
											);
											if($j!=0):
												unset($category_job_chilrent['priority']);
												$res =MK_Datas($category_job_chilrent, "insert", "`job_category`");
											else:
												$res =MK_Datas($category_job_chilrent, "insert", "`job_category`");
											endif;
											
								endif;
								if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
								//echo "aaaaa1".$id_category_jobinfor3."--".$id_category_jobinfor3."<br/>";
										$category_job_parent=array
											(
												"category_id" => $id_parent_jobinfor,
												"job_id" => $id_job,
												"priority"=>1
											);
											if($j!=0):
												unset($category_job_parent['priority']);
												//print_r($category_job_parent);
												$res =MK_Datas($category_job_parent, "insert", "`job_category`");
											else:
												$res =MK_Datas($category_job_parent, "insert", "`job_category`");
											endif;
											
									endif;
								
								
									unset($datas_job['order_id']);	
									MK_Datas($datas_job, "update", "`job`", "`order_id` = $order_id");
						/***********************************************************************************************/			
									
									/**End**********************************/
							else:
									/**Begin*******************************/
									MK_Datas($datas_job, "insert", "job");
									$id_insert_job=mysql_insert_id();
								
									if($id_category_jobinfor>0):
											//echo $id_category_jobinfor."cate<br/>";
												$category_job_insert=array
													(
														"category_id" => $id_category_jobinfor,
														"job_id" => $id_insert_job,
														"priority"=>1
													);
													if($j!=0):
														unset($category_job_insert['priority']);
														MK_Datas($category_job_insert, "insert", "`job_category`");
													else:
														MK_Datas($category_job_insert, "insert", "`job_category`");
													endif;
											
										endif;
									   if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
												$category_job_insert_pa=array
												(
													"category_id" => $id_parent_jobinfor,
													"job_id" => $id_insert_job,
													"priority"=>1
												);
												if($j!=0):
														unset($category_job_insert_pa['priority']);
														MK_Datas($category_job_insert_pa,"insert","`job_category`");
												else:
														MK_Datas($category_job_insert_pa,"insert","`job_category`");
												endif;
									endif;	
								
								 
									/***End insert**********************************/
								endif;
								/*********************************************************************************/
								/*Set Count, News Flag Category */
								//$id_parent_jobinfor1=(int)$get_id_category_cut1[0];
								//$id_category_jobinfor1=(int)$get_id_category_cut1[1];
			/************************************************************************************************************/
	
		if($id_category_jobinfor>0):						
		$count_new_flag_category_not=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag`");//count flag
		
		$count_job_category_not=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
		on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_category_jobinfor'","Count(*) as `count_job`");//count flag
		/*$id_category_get*/
		/*I*/$count_new_category_up=$count_new_flag_category_not[0]['news_flag'];//count_new
		/*I*/$count_job_up=$count_job_category_not[0]['count_job'];
			$category_update_count_not=array(
									"new_count" => $count_new_category_up,
									"job_count" => $count_job_up
								  );
			MK_Datas($category_update_count_not, "update", "category", "`id` = $id_category_jobinfor");	
			/*************************/
			$count_new_flag_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`parent_id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count" => $count_new_category_up_parent,
								"job_count" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
			
				
		endif;
		
	 if($id_category_jobinfor==0 && $id_parent_jobinfor>0):
	$count_new_flag_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor' and `J`.`new_flag`=1","Count(*) as `news_flag_parent`");
	// parent
	
	$count_job_category_parent=To_Get_Data("`job` as `J` join `job_category` as `C` on `J`.`id`=`C`.`job_id` join `category` as `D`
	on `C`.`category_id`=`D`.`id`","and `D`.`id`='$id_parent_jobinfor'","Count(*) as `count_job_parent`");//count flag
	/*$id_category_get_parent*/
	/*II*/$count_new_category_up_parent=$count_new_flag_category_parent[0]['news_flag_parent'];//count_new parent
	/*II*/$count_job_up_parent=$count_job_category_parent[0]['count_job_parent'];
	$category_update_count_parent=array(
								"new_count" => $count_new_category_up_parent,
								"job_count" => $count_job_up_parent
							  );
		MK_Datas($category_update_count_parent, "update", "category", "`id` = $id_parent_jobinfor");	
		endif;
		
	
	
	
	
	
	
				
	/******************************************************************************************************/
											//reset($List_job);
										endfor;
	
								//	endif;//check salary max >700
									
								endfor;	
									$msg .="Total:".$count_up."&nbsp;Row. Success. Please Check!";
									echo $msg;
						
							else:
								echo "<div class='error'>File CSV not in the format( .csv )</div>";
								exit;
					
							endif;
						
				/*		else:
							echo "<div class='error'>Please checkbox Job Category !</div>";
							exit;
						endif;
						*/
						
				else:
				echo "<div class='error'>Please Select File Csv upload !</div>";
							exit;
				endif;
								
											
				break;
				/*********Insert process Job Info set ticker************************/
				
				
				/*********Insert process category_job************************/
				case "category_job":
				   $group_relead_up=$_POST['check_box'];

					$description_category=htmlspecialchars($_POST['bcontent']);


					$keyword_search_string=$_POST['keyword_search'];
					$keyword_search_string=str_replace(" ","",$keyword_search_string);
					$keyword_search_array=explode(',',$keyword_search_string);
					$count_keyword=count($keyword_search_array);
					$array_keyword=array();
					if($count_keyword>0)
					{
						$mnn=0;
						for($mnn=0; $mnn<$count_keyword;$mnn++):
							if(!empty($keyword_search_array[$mnn])):
								array_push($array_keyword,array("keyword"=>$keyword_search_array[$mnn]));
							endif;
						endfor;
					}
					$keyword_search=base64_encode(serialize($array_keyword));



				  // print_r($group_relead_up);
				  // exit();
				   $count_check=count($group_relead_up);
				   $m=0;
				   for($m=0;$m<$count_check;$m++):
				   		$group_relead.=$group_relead_up[$m].",";	
						
				   endfor;
				  
				  
				   	$group_relead_set=substr($group_relead,0,-1);
					//echo  
					$datas = array(
							"description"=>$description_category,
							"group_related" => $group_relead_set,
							"keyword_search" =>$keyword_search
						);
					 //print_r( $datas);
						//echo $id."aaaaaaaaaaaaaaaaaaa";
						if(($id>0) && ($mode=="update") )
						{
							
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "category", "id = $id","N");
							
							$msg =  $sid." Has been Update";
							echo $msg;
						}
					break;

				
				/*********Insert process category_job************************/
				
				/*********Insert process interview_index************************/
				case "interview_index":
				   $title_index_interview=addslashes($_POST['title_index_interview']);
					$subTitle_index_interview=addslashes($_POST['subTitle_index_interview']);
					$excerpt_index_interview=htmlspecialchars($_POST['bcontent']);
					$link_index_interview=addslashes($_POST['link_index_interview']);
					$targer_index_interview=$_POST['targer_index_interview'];
					$thumbnail_alt_add=addslashes($_POST['thumbnail_alt']);
					$datas = array(
							"title_index_interview" => $title_index_interview,
							"subTitle_index_interview" => $subTitle_index_interview,
							"excerpt_index_interview" => $excerpt_index_interview,
							"link_index_interview" => $link_index_interview,
							"targer_index_interview" => $targer_index_interview,
							"date_index_interview " => $op_date,
							"op_date_index_interview " => "now()|||int",
							"thumbnail_index_interview"=> $thumbnail_name_request,
							"thumbnail_index_interview_alt"=> $thumbnail_alt_add,
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

				
				/*********Insert process REAd************************/
				case "read":
				   $title_index_interview=addslashes($_POST['title_index_interview']);
					$subTitle_index_interview=addslashes($_POST['subTitle_index_interview']);
					$excerpt_index_interview=htmlspecialchars($_POST['bcontent']);
					$link_index_interview=addslashes($_POST['link_index_interview']);
					$targer_index_interview=$_POST['targer_index_interview'];
					$thumbnail_alt_add=addslashes($_POST['thumbnail_alt']);
					$mailmagazine_link=addslashes($_POST['link_mailmagazine']);
					$datas = array(
							"title_read_index" => $title_index_interview,
							"subTilte_read_index" => $subTitle_index_interview,
							"excerpt_read_index" => $excerpt_index_interview,
							"link_read_index" => $link_index_interview,
							"targer_read_index" => $targer_index_interview,
							"mailmagazine_link" => $mailmagazine_link,
							"date_read_index " => $op_date,
							"op_date_read_index " => "now()|||int",
							"thumbnail_read_index"=> $thumbnail_name_request,
							"thumbnail_read_index_alt"=> $thumbnail_alt_add,
							"status_read_index"=> $op_vis 
						);
						//echo $id."aaaaaaaaaaaaaaaaaaa";
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_read_index']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "read_indexs", "id_read_index = $id","N");
							
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						$res = MK_Datas($datas, "insert", "read_indexs");
						
						//header("Location");
						$msg = $sid." has been registered";
						//echo $msg;
						$id_update=mysql_insert_id();
						$url1="index.php?sid={$sid}&op=update&id={$id_update}";
						msg_move_page($msg, $url1);

						}

											
				break;




				/*********Insert process feature_jobs************************/
				case "feature_jobs":
					//$category_interview=$_POST['category_interview'];
					
					$title_interview=addslashes($_POST['title_feature_job']);
					
					$content_interview=htmlspecialchars($_POST['bcontent']);
					
					$seo_keyword=addslashes($_POST['seo_keyword']);
					$seo_description=addslashes($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					//$vol_number=addslashes($_POST['vol_number']);
					
					$consultantID=(int)$_POST['consultantID'];

					$index_thumbnail_alt=addslashes($_POST['index_thumbnail_alt']);

					$csv_upload_interview_txt=$_POST['csv_upload_interview'];
					
					@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_feature_jobs=$forder_csv.$csv_upload_henter_eye_company;
					//if (file_exists($file_csv_feature_jobs)) 
					//{
						//echo $csv_upload_henter_eye_company;
					//	ImportCSV($csv_upload_henter_eye_company,$forder_csv);	
					//}
					//else
					//{
					//	echo "The file $file_csv_feature_jobs does not exist<br/>";
					//}


					$datas = array(
							"feature_job_title" => $title_interview,
							"feature_job_content" => $content_interview,
							"seo_keyword" => $seo_keyword,
							"seo_description" => $seo_description,
						    "seo_og_description" => $seo_og_description,
							"seo_og_title" => $seo_og_title,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"feature_job_date" => $op_date,
							"feature_job_op_date " => "now()|||int",
							"consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
							"csv_upload_feature_job" => $csv_upload_henter_eye_company,
							"consultantID" => $consultantID, 
							"index_thumbnail_alt" => $index_thumbnail_alt,
							"feature_job_status"=> $op_vis 
						);
						//print_r($datas);
						
												
						if(($id>0) && ($mode=="update") )
						{
							
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									unset($datas['csv_upload_feature_job']);
									$csv_set_null=array("csv_upload_feature_job"=> NULL);
									$datas=$datas+$csv_set_null;
								}	
								
							
							//$res_set_up_all = MK_Datas($datas_set_all, "update", "interview");

							$res = MK_Datas($datas, "update", "feature_jobs", "feature_job_id = $id");

							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job","id_other=$id and title_other='feature_jobs'");
								}
								else{
									if (file_exists($file_csv_feature_jobs)) 
									{
										//echo $csv_upload_henter_eye_company;
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id,"feature_jobs");	
									}
									else
									{
										delete_data("job","id_other=$id and title_other='feature_jobs'");
										echo "The file $file_csv_feature_jobs does not exist<br/>";
									}
							}

							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "feature_jobs");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job","id_other=$id_update and title_other='feature_jobs'");
								}
							else{	
									if (file_exists($file_csv_feature_jobs)) 
									{
										//echo "loi";
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id_update,"feature_jobs");	
									}
									else
									{
										delete_data("job","id_other=$id_update and title_other='feature_jobs'");
										echo "The file $file_csv_henter_eye does not exist<br/>";
									}
								}

							$url99="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url99);


						}
						
							//print_r($datas);
				break;
				
				/*************************End*******************************/




				/*********Insert process Intervew************************/
				case "interview":



				    $content_a=$_POST['content_a'];
					$content_b_array=$_POST['content_b'];
					$count_content_b=count($_POST['content_b']);
					$array_add_inter=array();
					$array_group_parent=array();
					for($j=0;$j<$count_content_b;$j++)
					{
						$m=$j+1;
						$content_b=$content_b_array[$j];
						$group_item=$_POST['group_item'][$j];
						//$count_item_group=count($group_item);
						if($group_item>0):
							$array_group_as=array();
							for($u=0;$u<$group_item;$u++):
								$n=$u+1;
								$content_consultant_name=$_POST['content_consultant_name'.$m.$n];
								$content_question=$_POST['content_question'.$m.$n];
								$content_interview_name=$_POST['content_interview_name'.$m.$n];
								$content_aswer=$_POST['content_aswer'.$m.$n];
								$array_field=array(
									"consultant_name" =>$content_consultant_name,
									"question" =>$content_question,
									"interview_name" =>$content_interview_name,
									"aswer" =>$content_aswer
								);
								array_push($array_group_as,$array_field);
							endfor;
							//print_r($array_group_as);
						endif;
						$array_all=array(
							"content_b"=>$content_b,
							"group_item"=>$array_group_as,
						);
						array_push($array_group_parent,array_filter($array_all));
					}
					//echo "=================<br/>";
					//print_r($array_group_parent);
					$array_add_inter=array(
						"content_a" =>$content_a,
						"group_content"=>$array_group_parent
					);
					$content_json=serialize($array_add_inter);
					//$content_json=json_encode_unicode($array_add_inter);





					//$category_interview=$_POST['category_interview'];
					$vol_number=addslashes($_POST['vol_number']);
					$title_interview=addslashes($_POST['title_interview']);
					$subtitle_interview=addslashes($_POST['subtitle_interview']);
					$content_interview=htmlspecialchars($_POST['bcontent']);
					$excerpt_interview=htmlspecialchars($_POST['excerpt']);
					$keyword_interview=addslashes($_POST['keyword_interview']);
					$description_interview=addslashes($_POST['description_interview']);
					//$vol_number=addslashes($_POST['vol_number']);
					$about_company=htmlspecialchars($_POST['about_company']);
						
					$constitution_interview=htmlspecialchars($_POST['constitution_interview']);
					$capital=addslashes($_POST['capital']);
					$established=addslashes($_POST['established']);
					$employees=addslashes($_POST['employees']);
					$entry_id =(int)$_POST['entry_id'];
					$company_name=addslashes($_POST['company_name']);
					$consultantID=(int)$_POST['consultantID'];
					$headquarters=addslashes($_POST['headquarters']);
					$csv_upload_interview_txt=$_POST['csv_upload_interview'];
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$logo_thumbnail_alt=addslashes($_POST['logo_thumbnail_alt']);
					$main_thumbnail_alt=addslashes($_POST['main_thumbnail_alt']);
					$consultant_thumbnail_alt=addslashes($_POST['consultant_thumbnail_alt']);
					
					$fullname_interview=addslashes($_POST['fullname_interview']);

					@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_henter_eye=$forder_csv.$csv_upload_henter_eye_company;
					

					$datas = array(
							"title_interview" => $title_interview,
							"vol_number" => $vol_number,
							"subtitle_interview" => $subtitle_interview,
							"fullname_interview" => $fullname_interview,
							"content_interview" => $content_interview,
							"content_json_interview" =>$content_json,
							"excerpt_interview" => $excerpt_interview,
							"keyword_interview" => $keyword_interview,
							"description_interview" => $description_interview,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"seo_og_description" => $seo_og_description,
							"seo_og_title" => $seo_og_title,
							"date_interview" => $op_date,
							"op_date_interview " => "now()|||int",
							"thumbnail_interview"=> $thumbnail_name_request,
							"logo_thumnail"=> $thumbnail_name_request1,
							"main_thumbnail_interview"=> $thumbnail_name_request2,
							"about_company" => $about_company,
							"constitution_interview" => $constitution_interview,
							"consultant_add_thumbnail" => $consultant_add_thumbnail,
							"capital" =>$capital,
							"established" =>$established,
							"employees" =>$employees,
							"entry_id" => $entry_id,
							"company_name" => $company_name,
							"csv_file" => $csv_upload_henter_eye_company,
							"headquarters" => $headquarters,
							"consultantID" => $consultantID, 
							"status_interview"=> $op_vis,
							"thumbnail_interview_alt"=> $thumbnail_alt,
							"logo_thumnail_alt"=> $logo_thumbnail_alt,
							"main_thumbnail_interview_alt"=> $main_thumbnail_alt,
							"consultant_add_thumbnail_alt"=> $consultant_thumbnail_alt
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
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									unset($datas['csv_file']);
									$csv_set_null=array("csv_file"=> NULL);
									$datas=$datas+$csv_set_null;
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

							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job","id_other=$id and title_other='interview'");
								}
								else{
									if (file_exists($file_csv_henter_eye)) 
									{
										//echo $csv_upload_henter_eye_company;
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id,"interview");	
									}
									else
									{
										delete_data("job","id_other=$id and title_other='interview'");
										echo "The file $file_csv_henter_eye does not exist<br/>";
									}
							}

							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "interview");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();

							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job","id_other=$id_update and title_other='interview'");
								}
							else{	
									if (file_exists($file_csv_henter_eye)) 
									{
										//echo "loi";
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id_update,"interview");	
									}
									else
									{
										delete_data("job","id_other=$id_update and title_other='interview'");
										echo "The file $file_csv_henter_eye does not exist<br/>";
									}
								}

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


		/*********Insert process interview company************************/

				case "interview_company":
					//$category_interview=$_POST['category_interview'];
					
					$title_interview=addslashes($_POST['title_interview']);
					$subtitle_interview=addslashes($_POST['subtitle_interview']);
					
					$company_interviews_content=htmlspecialchars($_POST['company_interviews_content']);
					$company_interviews_description=htmlspecialchars($_POST['company_interviews_description']);
					$keyword_interview=addslashes($_POST['seo_keyword']);
					$description_interview=addslashes($_POST['seo_description']);
					
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
				
					$company_interviews_tag=addslashes($_POST['company_interviews_tag']);
					$company_interviews_tag_slug=addslashes($_POST['company_interviews_tag_slug']);
					if(empty($company_interviews_tag_slug)):
						$company_interviews_tag_slug_add=slug_title($company_interviews_tag);
					else:
						$company_interviews_tag_slug_add=$company_interviews_tag_slug;
					endif;
					
					
					$company_interviews_subject=addslashes($_POST['company_interviews_subject']);
					$company_interviews_subjectMenu=addslashes($_POST['company_interviews_subjectMenu']);
					$slug_subject=$_POST['company_interviews_slug_subject'];
					$csv_upload_interview_txt=$_POST['csv_upload_interview'];
					
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$thumbnail_index_alt=addslashes($_POST['index_thumbnail_alt']);
					

					@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_henter_eye=$forder_csv.$csv_upload_henter_eye_company;
					$datas = array(
							"company_interviews_title" => $title_interview,
							"company_interviews_subtile" => $subtitle_interview,
							"company_interviews_content" => $company_interviews_content,
							"company_interviews_description" => $company_interviews_description,
							"company_interviews_subject" => $company_interviews_subject,
							"company_interviews_subjectMenu" => $company_interviews_subjectMenu,
							"company_interviews_tag" => $company_interviews_tag,
							"company_interviews_tag_slug" => $company_interviews_tag_slug_add,
							"seo_keyword" => $keyword_interview,
							"seo_description" => $description_interview,
							"seo_og_description" => $seo_og_description,
							"seo_og_title" => $seo_og_title,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"company_interviews_date" => $op_date,
							"company_interviews_Op_date " => "now()|||int",
							"company_interviews_main_thumbnail"=> $thumbnail_name_request,
							"company_interviews_file_csv" => $csv_upload_henter_eye_company,
							"company_interviews_status"=> $op_vis,
							"company_interviews_thumbnail_index"=> $consultant_add_thumbnail_index,
							"company_interviews_main_thumbnail_alt"=> $thumbnail_alt,
							"company_interviews_thumbnail_index_alt"=> $thumbnail_index_alt,
							"slug_subject" => $slug_subject
							
						);
						//print_r($datas);
					$datas_fix=array(
							"company_interviews_title" => $title_interview,
							"company_interviews_subtile" => $subtitle_interview,
							"company_interviews_description" => $company_interviews_description,
							"company_interviews_file_csv" => $csv_upload_henter_eye_company,
							"company_interviews_thumbnail_index"=> $consultant_add_thumbnail_index,
							"company_interviews_thumbnail_index_alt"=> $thumbnail_index_alt
							);	
												
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['company_interviews_main_thumbnail']);
								}
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									unset($datas['company_interviews_file_csv']);
									$csv_set_null=array("company_interviews_file_csv"=> NULL);
									$datas=$datas+$csv_set_null;
									
								}	
								
							$res = MK_Datas($datas, "update", "company_interviews", "company_interviews_id = $id");
							
							MK_Datas($datas_fix, "update", "company_interviews", "company_interviews_tag = '$company_interviews_tag'");
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job as A join company_interviews as B on A.id_other=B.company_interviews_id","A.title_other='company_interviews' and B.company_interviews_tag='$company_interviews_tag'","N","A");
								}
								else
								{
									if (file_exists($file_csv_henter_eye)) 
									{
										//echo $csv_upload_henter_eye_company;
										delete_data("job as A join company_interviews as B on A.id_other=B.company_interviews_id","A.title_other='company_interviews' and B.company_interviews_tag='$company_interviews_tag'","N","A");
										
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id,"company_interviews");	
									}
									else
									{
										//not delete job
									}
								}
									
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							//if(!empty($company_interviews_content)):
							$res = MK_Datas($datas, "insert", "company_interviews");
							$id_update=mysql_insert_id();
							MK_Datas($datas_fix, "update", "company_interviews", "company_interviews_tag = '$company_interviews_tag'");
							//$msg = $sid." has been registered";
							//endif;
							//echo $msg;
							
						if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									delete_data("job as A join company_interviews as B on A.id_other=B.company_interviews_id","A.title_other='company_interviews' and B.company_interviews_tag='$company_interviews_tag'","N","A");
								}
							else{	
									if (file_exists($file_csv_henter_eye)) 
									{
										delete_data("job as A join company_interviews as B on A.id_other=B.company_interviews_id","A.title_other='company_interviews' and B.company_interviews_tag='$company_interviews_tag'","N","A");
										
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id_update,"company_interviews");	
									}
									else
									{
										//not action
									}
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
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);

					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$description_hunter=htmlspecialchars($_POST['description_hunter']);
					$subtitle_henter_eye=addslashes($_POST['subtitle']);
					$csv_upload_henter_eye_company_txt=$_POST['csv_upload_henter_eye_company'];
					
					$Thumbnail_henter_eye_alt=addslashes($_POST['thumbnail_alt']);
					$main_thumbnail_henter_eye_alt=addslashes($_POST['main_thumbnail_alt']);
					$consultant_add_thumbnail_alt=addslashes($_POST['consultant_thumbnail_alt']);
					$consultant_add_thumbnail_index_alt=addslashes($_POST['index_thumbnail_alt']);
					//$csv_upload_henter_eye_company=$_FILES['csv']['name'];
					//echo $csv_upload_henter_eye_company;



					@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_henter_eye_url=$forder_csv.$csv_upload_henter_eye_company;
					
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
							"seo_keyword" => $seo_keyword,
							"seo_description" => $seo_description,
							"seo_og_description" => $seo_og_description,
							"seo_og_title" => $seo_og_title,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"Thumbnail_henter_eye" => $thumbnail_name_request,
							"csv_upload_henter_eye_company" => $csv_upload_henter_eye_company,
							"main_thumbnail_henter_eye" => $thumbnail_name_request_all,
							"consultant_add_thumbnail" => $consultant_add_thumbnail,
							"consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
							"date_henter_eye" => $op_date,
							"op_date_henter_eye" => "now()|||int",
							"Thumbnail_henter_eye_alt" => $Thumbnail_henter_eye_alt,
							"main_thumbnail_henter_eye_alt" => $main_thumbnail_henter_eye_alt,
							"consultant_add_thumbnail_alt" => $consultant_add_thumbnail_alt,
							"consultant_add_thumbnail_index_alt" => $consultant_add_thumbnail_index_alt
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
							if($name_csv=="" && $csv_upload_henter_eye_company_txt=="")
								{
									unset($datas['csv_upload_henter_eye_company']);
									$csv_set_null_henter=array("csv_upload_henter_eye_company"=> NULL);
									$datas=$datas+$csv_set_null_henter;
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

							if($name_csv=="" && $csv_upload_henter_eye_company_txt=="")
								{
									delete_data("job","id_other=$id and title_other='henter_eye'");
								}
							else{	
									if (file_exists($file_csv_henter_eye_url)) 
									{
										//echo "loi";
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id,"henter_eye");	
									}
									else
									{
										delete_data("job","id_other=$id and title_other='henter_eye'");
										echo "The file $file_csv_henter_eye does not exist<br/>";
									}
								}
	
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "henter_eye");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();


							if($name_csv=="" && $csv_upload_henter_eye_company_txt=="")
								{
									delete_data("job","id_other=$id_update and title_other='henter_eye'");
								}
							else{	
									if (file_exists($file_csv_henter_eye_url)) 
									{
										//echo "loi";
										ImportCSV($csv_upload_henter_eye_company,$forder_csv,$id_update,"henter_eye");	
									}
									else
									{
										delete_data("job","id_other=$id_update and title_other='henter_eye'");
										echo "The file $file_csv_henter_eye does not exist<br/>";
									}
								}
							

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


					//$content_career_up=htmlspecialchars($_POST['content_career_up']);

					$title_1=addslashes($_POST['title_1']);
					$content_1=htmlspecialchars($_POST['content_1']);
					if(!empty($title_1) && !empty($content_1)):
						$view_item_1='<div class=" clear title_career_ft">'.$title_1.'</div><div class=" clear content_career_ft">'.$content_1.'</div>';
					else:
						$view_item_1='';
					endif;
					
					$title_2=addslashes($_POST['title_2']);
					$content_2=htmlspecialchars($_POST['content_2']);
					
					if(!empty($title_2) && !empty($content_2)):
						$view_item_2='<div class=" clear title_career_ft">'.$title_2.'</div><div class=" clear content_career_ft">'.$content_2.'</div>';
					else:
						$view_item_2='';
					endif;
					
					$title_3=addslashes($_POST['title_3']);
					$content_3=htmlspecialchars($_POST['content_3']);
					
					if(!empty($title_3) && !empty($content_3)):
						$view_item_3='<div class=" clear title_career_ft">'.$title_3.'</div><div class=" clear content_career_ft">'.$content_3.'</div>';
					else:
						$view_item_3='';
					endif;
					
					$title_4=addslashes($_POST['title_4']);
					$content_4=htmlspecialchars($_POST['content_4']);
					if(!empty($title_4) && !empty($content_4)):
						$view_item_4='<div class=" clear title_career_ft">'.$title_4.'</div><div class=" clear content_career_ft">'.$content_4.'</div>';
					else:
						$view_item_4='';
					endif;
					
					$title_5=addslashes($_POST['title_5']);
					$content_5=htmlspecialchars($_POST['content_5']);
					if(!empty($title_5) && !empty($content_5)):
						$view_item_5='<div class=" clear title_career_ft">'.$title_5.'</div><div class=" clear content_career_ft">'.$content_5.'</div>';
					else:
						$view_item_5='';
					endif;
					
					$content_career_up=$view_item_1.$view_item_2.$view_item_3.$view_item_4.$view_item_5;



					$excerpt_career_up=htmlspecialchars($_POST['excerpt_career_up']);
					
					$advice1=htmlspecialchars($_POST['advice1']);
					$advice2=htmlspecialchars($_POST['advice2']);
					$advice3=htmlspecialchars($_POST['advice3']);
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$thumbnail_career_up_alt=addslashes($_POST['thumbnail_alt']);
					$consultant_add_thumbnail_alt=addslashes($_POST['consultant_thumbnail_alt']);
					$consultant_add_thumbnail_index_alt=addslashes($_POST['index_thumbnail_alt']);
					
					$datas = array(
					   "title_career_up" => $title_career_up,
					   "subtitle_career_up" => $subtitle_career_up,
					   "consultant_thumb_career_up" => $consultant_thumb_henter_eye,
					   "content_career_up" => $content_career_up,

					   "title_1" => $title_1,
					   "content_1" => $content_1,
					   "title_2" => $title_2,
					   "content_2" => $content_2,
					   "title_3" => $title_3,
					   "content_3" => $content_3,
					   "title_4" => $title_4,
					   "content_4" => $content_4,
					   "title_5" => $title_5,
					   "content_5" => $content_5,

					   "excerpt_career_up" => $excerpt_career_up,
					   "advice1" => $advice1,
					   "advice2" => $advice2,
					   "advice3" => $advice3,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "consultant_add_thumbnail" => $consultant_add_thumbnail,
					   "consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
					   "thumbnail_career_up" => $thumbnail_name_request,
					   "status_career_up" => $op_vis,
					   "date_career_up" => $op_date,
					   "op_date_career_up" => "now()|||int",
					   "thumbnail_career_up_alt" => $thumbnail_career_up_alt,
					   "consultant_add_thumbnail_alt" => $consultant_add_thumbnail_alt,
					   "consultant_add_thumbnail_index_alt" => $consultant_add_thumbnail_index_alt
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

					$date_other_notice_seminar_career=addslashes($_POST['date_other_notice_seminar_career']);

					$link_notice_seminar_career=$_POST['link_notice_seminar_career'];
					$target_notice_seminar_career=addslashes($_POST['target_notice_seminar_career']);
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$cate_nsc=$_POST['cate_nsc'];
					$datas = array(
						"title_notice_seminar_career" => $title_notice_seminar_career,
						"date_other_notice_seminar_career" => $date_other_notice_seminar_career,
					   "link_notice_seminar_career" => $link_notice_seminar_career,
					   "target_notice_seminar_career" => $target_notice_seminar_career,
					   "id_category_notice_seminar_career" => $category_radio,
					   "thumbnail_notice_seminar_career"=> $thumbnail_name_request,
					    "thumbnail_notice_seminar_career_alt"=> $thumbnail_alt,
					   "status_notice_seminar_career" => $op_vis,
					   "date_notice_seminar_career" => $op_date,
					   "id_category_notice_seminar_career"=> $cate_nsc,
					   "op_date_notice_seminar_career" => "now()|||int"
					);
						$datas_set_update = array(
					   
						"thumbnail_notice_seminar_career"=> $thumbnail_name_request
					   
					);
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['thumbnail_notice_seminar_career']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "notice_seminar_career", "id_notice_seminar_career = $id","N");
						//$res_set_up = MK_Datas($datas_set_update, "update", "notice_seminar_career");
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

					//$consultant_Content=htmlspecialchars($_POST['consultant_Content']);
					//$consultant_Other=htmlspecialchars($_POST['consultant_Other']);

					//$consultant_Content=mb_convert_encoding($_POST['consultant_Content'],"HTML-ENTITIES", "UTF-8");
					//$consultant_Other=mb_convert_encoding($_POST['consultant_Other'],"HTML-ENTITIES", "UTF-8");


					$consultant_Content=addslashes($_POST['consultant_Content']);
					$consultant_Other=addslashes($_POST['consultant_Other']);
					$consultant_short_excerpt=addslashes($_POST['consultant_short_excerpt']);
					$consultant_Info=addslashes($_POST['consultant_Info']);

					$GCDF=(int)$_POST['GCDF'];

					$GCDF_content=htmlspecialchars($_POST['GCDF_content']);	
					$report_link=htmlspecialchars($_POST['report_link']);	
					$column_link=htmlspecialchars($_POST['column_link']);	

					$description_kc_consul_blog=htmlspecialchars($_POST['description_kc_consul_blog']);	

					$consultant_entry_id=(int)$_POST['consultant_entry_id'];

					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$datas = array(
					   "consultant_Content" => $consultant_Content,
						"consultant_Info" => $consultant_Info,
						"consultant_short_excerpt"  => $consultant_short_excerpt,
						"consultant_Other" => $consultant_Other,
						"seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "consultant_Status" => $op_vis,
					   "consultant_Date" => $op_date,
					   "consultant_Opdate" => "now()|||int",
					   "consultant_Thumb"=> $thumbnail_name_request,
					   "consultant_Thumb_alt" => $thumbnail_alt,
					   "consultant_Name" => $consultant_Name,
					   "position_cp" => $consultant_position,
					   "consultant_kc_consult_blog" =>$description_kc_consul_blog,
					   "GCDF" => $GCDF,
					   "GCDF_view" => $GCDF_content,
					    "report_link" => $report_link,
						"column_link" => $column_link,
						"consultant_entry_id" =>$consultant_entry_id,
						"public_seo_img" =>$consultant_add_thumbnail
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
					$csv_upload_interview_slide=$_POST['csv_upload_interview'];	
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);	

					$company_name=addslashes($_POST['company_name']);
					$company_id=addslashes($_POST['company_id']);

					$datas = array(
					   "scrol_venderName" => $scrol_venderName,
					   
						"interview_link" => $interview_link,
						"interview_link_target" => $interview_link_target,
						"company_interview_link" => $company_interview_link,
						"company_interview_link_target" => $company_interview_link_target,
						"company_job_csv" => $csv_upload_henter_eye_company,
						
						"company_name" => $company_name,
						"company_id" => $company_id,

					   "scrol_venderStatus" => $op_vis,
					   "scrol_venderDate" => $op_date,
					   "scrol_venderOpdate" => "now()|||int",
					   "scrol_venderThumbnail"=> $thumbnail_name_request,
					   "scrol_venderThumbnail_alt" => $thumbnail_alt
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['scrol_venderThumbnail']);
								}
							if($name_csv=="" && $csv_upload_interview_slide =="")
								{
									unset($datas['company_job_csv']);
									$csv_set_null_slide = array("company_job_csv"=> NULL);
									$datas=$datas+$csv_set_null_slide;
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
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);				
					$datas = array(
					   "category_interview_Name" => $consul_title,
						"seo_keyword" => $seo_keyword,
					    "seo_description" => $seo_description,
						"seo_og_description" => $seo_og_description,
						"seo_og_title" => $seo_og_title,
						"seo_add_thumb_meta" => $seo_add_thumb_meta,
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
					$date_3=addslashes($_POST['date_3']);
					$date_4=addslashes($_POST['date_4']);
					$date_5=addslashes($_POST['date_5']);
					$date_6=addslashes($_POST['date_6']);
					$title_news=addslashes($_POST['title_news']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					$category_name=addslashes($_POST['category_name']);
					$div_id="career_cate_".$datetime_convert;
					
									
					$datas = array(
					   "title_career" => $title_news,
					   "date_career_fist" => $date_1,
						"date_career_end" => $date_2,
						"date_career_to1" => $date_3,
						"date_career_to2" => $date_4,
						"date_career_to3" => $date_5,
						"date_career_to4" => $date_6,
						
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
						"date_career_to1" => $date_3,
						"date_career_to2" => $date_4,
						"date_career_to3" => $date_5,
						"date_career_to4" => $date_6,
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
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']); 
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']); 				
					$datas = array(
					   "categgory_career_up_Name" => $consul_title,
						"seo_keyword" => $seo_keyword,
					    "seo_description" => $seo_description,
						"seo_og_description" => $seo_og_description,
						"seo_og_title" => $seo_og_title,
						"seo_add_thumb_meta" => $seo_add_thumb_meta,
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
					
					$consul_order=(int)$_POST['order_icon'];
					
									
					$datas = array(
					   "icon_Checkbox_hunter_Name" => $consul_title,
						"icon_checkbox_hunter_Order" => $consul_order,
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
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);				
					$datas = array(
					   "category_hunter_Name" => $consul_title,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
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

					
					/*********Category Mail Magazine************************/
				case "category_mailmagazine":
				
					$consul_title=addslashes($_POST['category_mailmagazine_Name']);
					$consul_title_slug=addslashes($_POST['category_mailmagazine_Slug']);
					if(empty($consul_title_slug)):
						$consul_title_slug_add=slug_title($consul_title);
					else:
						$consul_title_slug_add=$consul_title_slug;
					endif;
								
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);				
					$datas = array(
					   "category_mailmagazine_Name" => $consul_title,
					   "category_mailmagazine_Slug" => $consul_title_slug_add,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
						"category_mailmagazine_Thumbnail" => $thumbnail_name_request,
						"category_mailmagazine_Status" => $op_vis,
					   "category_mailmagazine_Date" => $op_date,
					   "category_mailmagazine_Op_Date" => "now()|||int"
					 );
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['category_mailmagazine_Thumbnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_mailmagazine", "category_mailmagazine_ID = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_mailmagazine");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url16="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url16);


						}
					break;
					/*********End************************/
					
					/*********Insert process mailmagazine************************/
				case "mailmagazine":
				
					$mailmagazine_vol=addslashes($_POST['mailmagazine_vol']);
					$mailmagazine_title=addslashes($_POST['mailmagazine_title']);
					$mailmagazine_category=$_POST['category_mailmagazine'];
					$mailmagazine_content=htmlspecialchars($_POST['mailmagazine_content']);
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$datas = array(
					   "mailmagazine_vol" => $mailmagazine_vol,
					   "mailmagazine_title" => $mailmagazine_title,
					   "mailmagazine_content" => $mailmagazine_content,
					   "category_mailmagazine_ID" => $mailmagazine_category,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "mailmagazine_thumbnail" => $thumbnail_name_request,
					   "mailmagazine_status" => $op_vis,
					   "mailmagazine_date" => $op_date,
					   "mailmagazine_Op_date" => "now()|||int",
					   "mailmagazine_thumbnail_alt" => $thumbnail_alt
					  
					);
										
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							if($thumbnail_name=="")
								{
									unset($datas['mailmagazine_thumbnail']);
								}
							
							$res = MK_Datas($datas, "update", "mailmagazine", "mailmagazine_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "mailmagazine");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);



						}

						//print_r($datas);
				break;
					
					
					
				case "data_page":
				
					$data_case_title=addslashes($_POST['data_case_title']);
					$data_case_subtitle=addslashes($_POST['data_case_subtitle']);
					$data_case_content=htmlspecialchars($_POST['data_case_content']);
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$datas = array(
					   "data_case_title" => $data_case_title,
					   "data_case_subtitle" => $data_case_subtitle,
					   "data_case_content" => $data_case_content,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "data_case_status" => $op_vis,
					   "data_case_date" => $op_date,
					   "data_case_op_date" => "now()|||int"
					  );
										
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "data_case", "data_case_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "data_case");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						//print_r($datas);
				break;
						




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
					$consultant_thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$consultantID=(int)$_POST['consultantID'];
				
					$datas = array(
						"publicityTitle" => $title,
					   "publicitySubTitle" => $subTitle,

					   "publicityDescription" => $excerpt,
					    "consultantID" => $consultantID,
					   "publicityContent" => $bcontent,
						"publicityThumbnail" => $thumbnail_name_request,
						"publicityThumbnail_alt" => $consultant_thumbnail_alt,
					
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
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$consultant_thumb_henter_eye=$_POST['consultant_thumb_henter_eye'];
					
					$consultant_add_thumbnail=$_POST['feature_consultant'];
					$consultant_thumbnail_alt=addslashes($_POST['consultant_thumbnail_alt']);
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
						"seo_og_description" => $seo_og_description,
						"seo_og_title" => $seo_og_title,
						"seo_add_thumb_meta" => $seo_add_thumb_meta,
						"consultant_add_thumbnail" => $consultant_add_thumbnail,
						"consultant_add_thumbnail_alt" => $consultant_thumbnail_alt,
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

        /*********Career Form************************/
            case "career_form":


                $title=addslashes($_POST['title']);
                $subTitle=addslashes($_POST['subTitle']);
                $excerpt=htmlspecialchars($_POST['excerpt']);
                $bcontent=htmlspecialchars($_POST['bcontent']);


                $datas = array(
                    "career_formTitle" => $title,
                    "career_formSubTitle" => $subTitle,
                    "career_formDescription" => $excerpt,
                    "career_formContent" => $bcontent,
                    "career_formThumbnail" => $thumbnail_name_request,
                    "career_formStatus" => $op_vis,
                    "career_form_Date" => $op_date,
                    "career_form_Op_Date" => "now()|||int"


                );

                //print_r($datas);
                if(($id>0) && ($mode=="update") )
                {
                    if($thumbnail_name=="")
                    {
                        unset($datas['career_formThumbnail']);
                    }
                    //echo $id."aaaaaaaaaaaaaaaaaaa";
                    $res = MK_Datas($datas, "update", "career_form", "career_formID = $id");
                    $msg =  $sid." Has been Update";
                    echo $msg;
                }
                if($mode=="insert")
                {
                    $res = MK_Datas($datas, "insert", "career_form");
                    $msg = $sid." has been registered";
                    $id_update=mysql_insert_id();
                    $url17="index.php?sid={$sid}&op=update&id={$id_update}";
                    msg_move_page($msg, $url17);


                }
                break;
            /*********End************************/


			/*********Insert process kc-consult-feature_jobs************************/
				case "kc_consul_feature_job":
					//$category_interview=$_POST['category_interview'];
					
					$title_interview=addslashes($_POST['title_feature_job']);
					
					$content_interview=htmlspecialchars($_POST['bcontent']);
					
					$seo_keyword=addslashes($_POST['seo_keyword']);
					$seo_description=addslashes($_POST['seo_description']);
					//$vol_number=addslashes($_POST['vol_number']);
					
					

					//$index_thumbnail_alt=addslashes($_POST['index_thumbnail_alt']);

					$csv_upload_interview_txt=$_POST['csv_upload_interview'];
					
					//@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_feature_jobs=$forder_csv.$csv_upload_henter_eye_company;
					if (file_exists($file_csv_feature_jobs)) 
					{
						//echo $csv_upload_henter_eye_company;
						//ImportCSV($csv_upload_henter_eye_company,$forder_csv);	
					}
					else
					{
						echo "The file $file_csv_feature_jobs does not exist<br/>";
					}


					$datas = array(
							"kc_consul_feature_job_title" => $title_interview,
							"kc_consul_feature_job_content" => $content_interview,
							"seo_keyword" => $seo_keyword,
							"seo_description" => $seo_description,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"kc_consul_feature_job_date" => $op_date,
							"kc_consul_feature_job_op_date " => "now()|||int",
							//"consultant_add_thumbnail_index" => $consultant_add_thumbnail_index,
							"kc_consul_feature_job_csv" => $csv_upload_henter_eye_company,
							//"consultantID" => $consultantID, 
							//"index_thumbnail_alt" => $index_thumbnail_alt,
							"kc_consul_feature_job_status"=> $op_vis 
						);
						//print_r($datas);
						
												
						if(($id>0) && ($mode=="update") )
						{
							
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									unset($datas['kc_consul_feature_job_csv']);
									$csv_set_null=array("kc_consul_feature_job_csv"=> NULL);
									$datas=$datas+$csv_set_null;
								}	
								
							
							//$res_set_up_all = MK_Datas($datas_set_all, "update", "interview");
							$res = MK_Datas($datas, "update", "kc_consul_feature_job", "kc_consul_feature_job_id = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "kc_consul_feature_job");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();
							
							$url99="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url99);


						}
						
							//print_r($datas);
				break;
				
				/*************************End*******************************/
			
				/*********Insert process kc_consul_feature_company************************/
				case "kc_consul_feature_company":
					//$category_interview=$_POST['category_interview'];
					
					$title_interview=addslashes($_POST['title_feature_job']);
					
					$content_point=htmlspecialchars($_POST['bcontent']);
					$content_interview=htmlspecialchars($_POST['bcontent_1']);
					
					$seo_keyword=addslashes($_POST['seo_keyword']);
					$seo_description=addslashes($_POST['seo_description']);
					//$vol_number=addslashes($_POST['vol_number']);
					
					

					//$index_thumbnail_alt=addslashes($_POST['index_thumbnail_alt']);

					$csv_upload_interview_txt=$_POST['csv_upload_interview'];
					
					//@include('readCSV.php');
					//echo $csv_upload_interview_txt;
					$forder_csv="../CSV_File/";
					$file_csv_feature_jobs=$forder_csv.$csv_upload_henter_eye_company;
					if (file_exists($file_csv_feature_jobs)) 
					{
						//echo $csv_upload_henter_eye_company;
						//ImportCSV($csv_upload_henter_eye_company,$forder_csv);	
					}
					else
					{
						echo "The file $file_csv_feature_jobs does not exist<br/>";
					}


					$datas = array(
							"kc_consul_feature_company_title" => $title_interview,
							"kc_consul_feature_company_point" => $content_point,
							"kc_consul_feature_company_interview" => $content_interview,
							"seo_keyword" => $seo_keyword,
							"seo_description" => $seo_description,
							"seo_add_thumb_meta" => $seo_add_thumb_meta,
							"kc_consul_feature_company_date" => $op_date,
							"kc_consul_feature_company_op_date " => "now()|||int",
							"kc_consul_feature_company_logo"  =>$thumbnail_name_request,
							"kc_consul_feature_company_csv" => $csv_upload_henter_eye_company,
							"index_thumbnail_alt" => $index_thumbnail_alt,
							"kc_consul_feature_company_status"=> $op_vis 
						);
						//print_r($datas);
						
												
						if(($id>0) && ($mode=="update") )
						{
							
							
							if($name_csv=="" && $csv_upload_interview_txt=="")
								{
									unset($datas['kc_consul_feature_company_csv']);
									$csv_set_null=array("kc_consul_feature_company_csv"=> NULL);
									$datas=$datas+$csv_set_null;
								}	
								
							
							//$res_set_up_all = MK_Datas($datas_set_all, "update", "interview");
							$res = MK_Datas($datas, "update", "kc_consul_feature_company", "kc_consul_feature_company_id = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
						
							$res = MK_Datas($datas, "insert", "kc_consul_feature_company");
							$msg = $sid." has been registered";
							//echo $msg;
							$id_update=mysql_insert_id();
							
							$url99="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url99);


						}
						
							//print_r($datas);
				break;
				
				/*************************End*******************************/



				/*********career_column************************/
				case "career_column":
				
					$career_column_title=addslashes($_POST['title']);
					$career_column_writer=addslashes($_POST['writer']);
					$career_column_vol=addslashes($_POST['vol']);
					$career_column_content=htmlspecialchars($_POST['bcontent']);
					$career_column_excerpt=htmlspecialchars($_POST['excerpt']);
					$career_column_thumnail_alt=addslashes($_POST['thumbnail_alt']);
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
									
					$datas = array(
					   "career_column_title" => $career_column_title,
					   "career_column_writer" =>$career_column_writer,
					   "career_column_vol" =>$career_column_vol,
					   "career_column_excerpt" => $career_column_excerpt,
					   "career_column_content" => $career_column_content, 
					   "career_column_thumnail_alt" => $career_column_thumnail_alt, 
					   
					   "career_column_thumnail" => $thumbnail_name_request, 
					   
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   
					   "career_column_status" => $op_vis,
					   "career_column_date" => $op_date,
					   "career_column_op_date" => "now()|||int"
					   
					   
					);
						
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['career_column_thumnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "career_column", "career_column_id = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "career_column");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url8="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url8);


						}
					break;
					/*********End************************/

					/*********Category Mail Magazine************************/
				case "category_report":
				
					$consul_title=addslashes($_POST['category_report_title']);
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					/*$consul_title_slug=addslashes($_POST['category_mailmagazine_Slug']);
					if(empty($consul_title_slug)):
						$consul_title_slug_add=slug_title($consul_title);
					else:
						$consul_title_slug_add=$consul_title_slug;
					endif;*/
								
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);				
					$datas = array(
					   "category_report_title" => $consul_title,
					   /*"category_mailmagazine_Slug" => $consul_title_slug_add,*/
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_og_description" => $seo_og_description,
					   "seo_og_title" => $seo_og_title,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "category_report_thumnail" => $thumbnail_name_request,
					   "category_report_thumnail_alt" => $thumbnail_alt,
					   "category_report_status" => $op_vis,
					   "category_report_date" => $op_date,
					   "category_report_op_date" => "now()|||int"
					 );
						//print_r($datas);
						if(($id>0) && ($mode=="update") )
						{
							if($thumbnail_name=="")
								{
									unset($datas['category_report_thumnail']);
								}
							//echo $id."aaaaaaaaaaaaaaaaaaa";
						$res = MK_Datas($datas, "update", "category_report", "category_report_id = $id");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "category_report");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url16="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url16);


						}
					break;
					/*********End************************/
					
					/*********Insert process Report************************/
				case "report":
				
					$report_title=addslashes($_POST['report_title']);
					$report_consultant_id=$_POST['report_consultant_id'];

					$report_entry_consultant_id=$_POST['report_entry_consultant_id'];
					//$content_career_up=htmlspecialchars($_POST['content_career_up']);

					
					$bcontent=htmlspecialchars($_POST['bcontent']);
					$excerpt=htmlspecialchars($_POST['excerpt']);
					
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$report_thumnail_alt=addslashes($_POST['thumbnail_alt']);
					
					
					$datas = array(
					   "report_title" => $report_title,
					   "report_entry_consultant_id" =>$report_entry_consultant_id,
					   "report_consultant_id" => $report_consultant_id,
					   "report_content" => $bcontent,
					   "report_excerpt" => $excerpt,
					  
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "report_thumnail" => $thumbnail_name_request,
					   "report_thumnail_alt" => $report_thumnail_alt,
					   "report_status" => $op_vis,
					   "report_date" => $op_date,
					   "report_op_date" => "now()|||int",
					  
					   
					);
					$datas_set_main_thumbnail=array(
					   "report_thumnail" => $thumbnail_name_request
					   );
												
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							if($thumbnail_name=="")
								{
									unset($datas['report_thumnail']);
								}
							/*Insert Category*/
							$category_career_up=$_POST['category_report'];
							$res_checkbox = delete_data("category_join_report", "report_id= $id");
							for($m=0;$m<count($category_career_up);$m++)
								{
									$datas_box=array
									(
										"report_id" => $id,
										"category_report_id" => $category_career_up[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_report");
								}
							/*End*/
							$res = MK_Datas($datas, "update", "report", "report_id  = $id","N");
							//$res_update_thumb = MK_Datas($datas_set_main_thumbnail, "update", "career_up");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "report");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							/*Insert Category*/
							$category_career_up=$_POST['category_report'];
							//$res_checkbox = delete_data("category_join_career_up", "id_career_up= $id");
							for($m=0;$m<count($category_career_up);$m++)
								{
									$datas_box=array
									(
										"report_id" => $id_update,
										"category_report_id" => $category_career_up[$m]
									);
								$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_report");
								}
							/*End*/
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);



						}

						//print_r($datas);
				break;
				/*********Insert process Report************************/

				/*********Insert KC-consul category interview************************/
				case "kc_category_interview":
					$title_ja=addslashes($_POST['category_interview_title_ja']);
					$title_en=strtolower(addslashes($_POST['category_interview_title_en']));
					$title_en=str_replace(" ","",$title_en);
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					
					$datas = array(
					   "kc_category_interview_name_ja" => $title_ja,
					   "kc_category_interview_name_en" =>$title_en,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "kc_category_interview_status" => $op_vis,
					   "kc_category_interview_date" => $op_date,
					   "kc_category_interview_op_date" => "now()|||int"
					);
						if(($id>0) && ($mode=="update") )
						{
							$res = MK_Datas($datas, "update", "kc_category_interview", "kc_category_interview_id  = $id","N");
							//$res_update_thumb = MK_Datas($datas_set_main_thumbnail, "update", "career_up");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "kc_category_interview");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}
					break;
				/*********End  KC-consul category interview************************/

				
					/*********Insert kc_consul_interview************************/
				case "kc_consul_interview":
					
					//get postion item
					$postion_item=(int)$_POST['postion_item'];
					$array_group_postion=array();
					for($l=0;$l<$postion_item;$l++)
					{
						$h=$l+1;
						$postion=$_POST['postion'.$h];
						$interviewee_fullname=$_POST['interviewee_fullname'.$h];
						if(!empty($postion) && !empty($interviewee_fullname) ):
							$array_field_postion=array(
								"postion" =>$postion,
								"interviewee_fullname" =>$interviewee_fullname
							);
							array_push($array_group_postion,$array_field_postion);
						endif;
						
					}
					$postion_add=serialize($array_group_postion);//postion
					
					
					$content_b_array=$_POST['content_subtitle'];
					$count_content_b=count($_POST['content_subtitle']);
					$array_add_inter=array();
					$array_group_parent=array();
					for($j=0;$j<$count_content_b;$j++)
					{
						$m=$j+1;
						$content_subtitle=$content_b_array[$j];
						$group_item=$_POST['group_item'][$j];
						//$count_item_group=count($group_item);
						if($group_item>0):
							$array_group_as=array();
							for($u=0;$u<$group_item;$u++):
								$n=$u+1;
								$content_left_kc=$_POST['content_left_kc_interview'.$m.$n];
								$content_right_kc=$_POST['content_right_kc_interview'.$m.$n];
								if(!empty($content_left_kc) && !empty($content_right_kc)):
	  								$array_field=array(
	  									"content_left" =>$content_left_kc,
	  									"content_right" =>$content_right_kc
	  								);
								endif;
								array_push($array_group_as,$array_field);
							endfor;
							//print_r($array_group_as);
						endif;
						$array_all=array(
							"subtitle"=>$content_subtitle,
							"group_item"=>array_filter($array_group_as),
						);
						array_push($array_group_parent,array_filter($array_all));
					}
					$content_json=serialize($array_group_parent);
					//$content_json=json_encode_unicode($array_add_inter);
					
					
					$page_number=(int)$_POST['page_number'];
					if($page_number!=1)
					{
						$highlights=0;
					}
					else
					{
						$highlights=$_POST['highlights'];
					}



					//$post_link_roundtables=$_POST['link_roundtable'];
					//$post_link_roundtable=array_filter($post_link_roundtables);
					//$link_roundtable=serialize($post_link_roundtable);

					//get roundtable item
					$roundtable_item=(int)$_POST['roundtable_item'];
					$array_group_roundtable=array();
					for($lb=0;$lb<$roundtable_item;$lb++)
					{
						$hb=$lb+1;
						$title_roundtable=$_POST['title_roundtable'.$hb];
						$link_roundtable=$_POST['link_roundtable'.$hb];
						$main_roundtable=$_POST['main_roundtable'.$hb];
						if(!empty($title_roundtable) && !empty($link_roundtable) ):
							$array_field_roundtable=array(
								"main" =>$main_roundtable,
								"title" =>$title_roundtable,
								"link" =>$link_roundtable
							);
							array_push($array_group_roundtable,$array_field_roundtable);
						endif;
						
					}
					$link_roundtable_add=serialize($array_group_roundtable);//roundtable




					$kc_interview_realeated_link=addslashes($_POST['link_realeated']);
					$kc_interview_realeated_link_check_hide=(int)$_POST['hiden_post'];


					$vol_number=addslashes($_POST['vol_number']);
					$vol_number_slug=strtolower(addslashes($_POST['vol_number_slug']));
					$vol_number_slug=str_replace(" ","",$vol_number_slug);
					
					$title=addslashes($_POST['title']);
					$company_name=addslashes($_POST['company_name']);
					$excerpt_kc_interview=htmlspecialchars($_POST['excerpt_kc_interview']);
					$company_id=(int)$_POST['company_id'];
					
					
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					
					$thumbnail_alt=addslashes($_POST['thumbnail_alt']);
					$main_thumbnail_alt=addslashes($_POST['main_thumbnail_alt']);
					$logo_thumbnail_alt=addslashes($_POST['logo_thumbnail_alt']);
					
					
					$datas = array(
					   "kc_interview_page_number" => $page_number,
					   "kc_interview_vol_number" =>$vol_number,
					   "kc_interview_vol_number_slug" =>$vol_number_slug,
					   "kc_interview_title" =>$title,
					   "kc_interview_company_name" =>$company_name,
					   "kc_interview_company_id" =>$company_id,
					   "kc_interview_postion" =>$postion_add,
					   "kc_interview_excerpt" =>$excerpt_kc_interview,
					   "kc_interview_content" =>$content_json,
					   "kc_interview_main_alt" =>$main_thumbnail_alt,
					   "kc_interview_main_img" =>$thumbnail_name_request2,
					   "kc_interview_thumbnail_alt" =>$thumbnail_alt,
					   "kc_interview_thumbnail" =>$thumbnail_name_request,
					   "kc_interview_backnumber_alt" =>$logo_thumbnail_alt,
					   "kc_interview_backnumber" =>$thumbnail_name_request1,
					   "highlights" =>$highlights,

					   "kc_interview_realeated_link" =>$kc_interview_realeated_link,
					   "kc_interview_realeated_link_check_hide" =>$kc_interview_realeated_link_check_hide,
	
					   "link_roundtable" =>$link_roundtable_add,	
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "kc_interview_status" => $op_vis,
					   "kc_interview_date" => $op_date,
					   "kc_interview_op_date" => "now()|||int"
					);
						if(($id>0) && ($mode=="update") )
						{	
							if($thumbnail_name=="")
								{
									unset($datas['kc_interview_thumbnail']);
								}
							if($thumbnail_name1=="")
								{
									unset($datas['kc_interview_backnumber']);
								}
							if($thumbnail_name2=="")
								{
									unset($datas['kc_interview_main_img']);
								}
								
							/*Category*/	
							$category_interview=$_POST['category_kc_interview'];
							$res_checkbox = delete_data("category_join_kc_interview", "kc_interview_id in($id)");
							for($u=0;$u<count($category_interview);$u++)
								{
									if($category_interview[$u]>0):
										$datas_box=array
										(
											"kc_interview_id" => $id,
											"kc_category_interview_id" => $category_interview[$u]
										);
										$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_kc_interview");
									endif;
								
								}
							$res = MK_Datas($datas, "update", "kc_interview", "kc_interview_id  = $id","N");
							//$res_update_thumb = MK_Datas($datas_set_main_thumbnail, "update", "career_up");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "kc_interview");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							
							/*Category*/	
							$category_interview=$_POST['category_kc_interview'];
							for($u=0;$u<count($category_interview);$u++)
								{
									if($category_interview[$u]>0):
										$datas_box=array
										(
											"kc_interview_id" => $id_update,
											"kc_category_interview_id" => $category_interview[$u]
										);
										$res_incheckbox = MK_Datas($datas_box,"insert", "category_join_kc_interview");
									endif;
							}
							
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}
					break;
				/*********End  kc_consul_interview************************/


				/*********Insert process kc_consul_blog************************/
				case "kc_consul_blog":
				
					$blog_title=addslashes($_POST['title_blog']);
					
					$blog_consultant_id=$_POST['consultant_thumb_henter_eye'];
					//$content_career_up=htmlspecialchars($_POST['content_career_up']);

					$bcontent=htmlspecialchars($_POST['bcontent']);
					$excerpt=htmlspecialchars($_POST['excerpt']);
					
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					
					
					
					$datas = array(
					   "consultantID" =>$blog_consultant_id,
					   "kc_blog_title" =>$blog_title,
					   "kc_blog_excerpt" => $excerpt,
					   "kc_blog_content" => $bcontent,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "kc_blog_status" => $op_vis,
					   "kc_blog_date" => $op_date,
					   "kc_blog_op_date" => "now()|||int",
					);
					
												
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "kc_blog", "kc_blog_id  = $id","N");
							//$res_update_thumb = MK_Datas($datas_set_main_thumbnail, "update", "career_up");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "kc_blog");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						//print_r($datas);
				break;
				/*********Insert process KC blog************************/

				/*********Insert process kc_consul_news************************/
				case "kc_consul_news":
				
					$title=addslashes($_POST['kc_consul_news_title']);
					$excerpt=htmlspecialchars($_POST['bcontent']);
					$link_to=addslashes($_POST['kc_consul_news_link']);
					$targer_link=$_POST['kc_consul_news_target'];
					
					$datas = array(
					   "kc_consul_news_title" =>$title,
					   "kc_consul_news_excerpt" => $excerpt,
					   "kc_consul_news_link" => $link_to,
					   "kc_consul_news_target" => $targer_link,
					   "kc_consul_news_status" => $op_vis,
					   "kc_consul_news_date" => $op_date,
					   "kc_consul_news_op_date" => "now()|||int",
					);
					
												
						if(($id>0) && ($mode=="update") )
						{
							//echo $id."aaaaaaaaaaaaaaaaaaa";
							$res = MK_Datas($datas, "update", "kc_consul_news", "kc_consul_news_id  = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "kc_consul_news");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						//print_r($datas);
				break;
				/*********Insert process kc_blog_news************************/

				/*********Insert process news_release************************/
				case "news_release":
				
					$title=addslashes($_POST['title']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$pdf_upload_file_txt=$_POST['pdf_upload_file'];
					$datas = array(
					   "news_release_title" =>$title,
					   "news_release_content" => $bcontent,
					   "news_release_attach_file" => $pdf_file,
					   
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   
					   "news_release_status" => $op_vis,
					   "news_release_date" => $op_date,
					   "news_release_op_date" => "now()|||int",
					);
					
												
						if(($id>0) && ($mode=="update") )
						{
							
							if($name_pdf=="" && $pdf_upload_file_txt=="")
								{
									unset($datas['news_release_attach_file']);
									$pdf_set_null=array("news_release_attach_file"=> NULL);
									$datas=$datas+$pdf_set_null;
								}	
							$res = MK_Datas($datas, "update", "news_release", "news_release_id  = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "news_release");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						//print_r($datas);
				break;
				/*********Insert process news_release************************/


				
				/*********Insert process Turning point************************/
				case "turnning_point_interview":
				
					$page_number=(int)$_POST['page_number'];
					$special=(int)$_POST['special'];//dacbiet
					$vol_number=addslashes($_POST['vol_number']);
					
					
					$vol_number_slug=strtolower(addslashes($_POST['vol_number_slug']));
					$vol_number_slug=str_replace(" ","",$vol_number_slug);
					$title=addslashes($_POST['title']);
					$excerpt=htmlspecialchars($_POST['excerpt']);
					
					$hightligths_list_img_alt=addslashes($_POST['hightligths_list_img_alt']);
					if(file_exists($_FILES['hightligths_list_img_upload']['tmp_name']) || is_uploaded_file($_FILES['hightligths_list_img_upload']['tmp_name']))
							{
								$hightligths_img_name_all=$_FILES["hightligths_list_img_upload"]["name"];
								$allowedExts = array("gif", "jpeg", "jpg", "png");
								$temp = explode(".", $_FILES["hightligths_list_img_upload"]["name"]);
								$extension = end($temp);
								if ((($_FILES["hightligths_list_img_upload"]["type"] == "image/gif")
								|| ($_FILES["hightligths_list_img_upload"]["type"] == "image/jpeg")
								|| ($_FILES["hightligths_list_img_upload"]["type"] == "image/jpg")
								|| ($_FILES["hightligths_list_img_upload"]["type"] == "image/pjpeg")
								|| ($_FILES["hightligths_list_img_upload"]["type"] == "image/x-png")
								|| ($_FILES["hightligths_list_img_upload"]["type"] == "image/png"))
								&& ($_FILES["hightligths_list_img_upload"]["size"] < 20000000)
								&& in_array($extension, $allowedExts))
								  {
									  $hightligths_img_name_show=$sid."_".$datetime_convert."_".$hightligths_img_name_all;
									  move_uploaded_file($_FILES["hightligths_list_img_upload"]["tmp_name"],"../upload_thumnail/".$hightligths_img_name_show);
						  			
								  }
								   else
					  				{
										echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
										exit;
									}
							}
							else
							{
								if(isset($_POST['hightligths_list_img_src'])!="")
									{
									$hightligths_img_name_show=$_POST['hightligths_list_img_src'];
									}
								  else
								    {
									$hightligths_img_name_show="";
									}
								
							}




					/*Postion consultant*/
						$roundtable_item=(int)$_POST['roundtable_item'];
						$array_group_consultant_postion=array();
						for($lb=0;$lb<$roundtable_item;$lb++)
						{
							$hb=$lb+1;
							$company_name=addslashes($_POST['company_name'.$hb]);
							$postion=addslashes($_POST['postion'.$hb]);
							$interview_fullname=addslashes($_POST['interview_fullname'.$hb]);
							$profile_content=htmlspecialchars($_POST['profile_content'.$hb]);
							
							$profile_img_alt=addslashes($_POST['profile_img_alt'.$hb]);
							$profile_img_src=addslashes($_POST['profile_img_src'.$hb]);
							
							$group_coment_link_name=(int)$_POST['group_coment_link_name'.$hb];
							$array_comment_link=array();
							for($xx=0;$xx<$group_coment_link_name;$xx++):
								$xs=$xx+1;
								$comment_url_text=addslashes($_POST['link_comment_text'.$hb.$xs]);
								$comment_url_link=addslashes($_POST['link_comment_url'.$hb.$xs]);
								$comment_url_target=addslashes($_POST['link_comment_target'.$hb.$xs]);
								if(!empty($comment_url_link)):
									$array_link_field_tp=array(
		  									"url_text" =>$comment_url_text,
											"url_link"    =>$comment_url_link,
		  									"url_target" =>$comment_url_target
										);
									array_push($array_comment_link,$array_link_field_tp);
								endif;
							endfor;

							if(file_exists($_FILES['profile_upload'.$hb]['tmp_name']) || is_uploaded_file($_FILES['profile_upload'.$hb]['tmp_name']))
							{
								$profile_img_name_all=$_FILES["profile_upload".$hb]["name"];
								$allowedExts = array("gif", "jpeg", "jpg", "png");
								$temp = explode(".", $_FILES["profile_upload".$hb]["name"]);
								$extension = end($temp);
								if ((($_FILES["profile_upload".$hb]["type"] == "image/gif")
								|| ($_FILES["profile_upload".$hb]["type"] == "image/jpeg")
								|| ($_FILES["profile_upload".$hb]["type"] == "image/jpg")
								|| ($_FILES["profile_upload".$hb]["type"] == "image/pjpeg")
								|| ($_FILES["profile_upload".$hb]["type"] == "image/x-png")
								|| ($_FILES["profile_upload".$hb]["type"] == "image/png"))
								&& ($_FILES["profile_upload".$hb]["size"] < 20000000)
								&& in_array($extension, $allowedExts))
								  {
									  $profile_name_request_all=$sid."_".$datetime_convert."_".$profile_img_name_all;
									  move_uploaded_file($_FILES["profile_upload".$hb]["tmp_name"],"../upload_thumnail/".$profile_name_request_all);
						  			
								  }
								   else
					  				{
										echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
										exit;
									}
							}
							else
							{
								if(isset($_POST['profile_img_src'.$hb])!="")
									{
									$profile_name_request_all=$_POST['profile_img_src'.$hb];
									}
								  else
								    {
									$profile_name_request_all="";
									}
								
							}
							
							
							
							if(!empty($postion) && !empty($interview_fullname)):
								$array_field_profile=array(
									"company_name" =>$company_name,
									"postion" =>$postion,
									"interview_fullname" => $interview_fullname,
									"profile_content" => $profile_content,
									"profile_img_alt" => $profile_img_alt,
									"profile_img_src" => $profile_name_request_all,
									"link_tag" =>$array_comment_link
								);
								array_push($array_group_consultant_postion,$array_field_profile);
							endif;
							
						}
						$turning_point_interview_consultant=base64_encode(serialize($array_group_consultant_postion));//roundtable
						
						//print_r($array_group_consultant_postion);
						//exit();
					/*Postion consultant*/
					
					/*Comment*/
						$comment_content=htmlspecialchars($_POST['comment_content']);
						$editor_name=addslashes($_POST['editor_name']);
						$photographer_name=addslashes($_POST['photographer_name']);
						$comment_img_alt=addslashes($_POST['comment_img_alt']);
						$comment_img_src=addslashes($_POST['comment_img_src']);
						if(file_exists($_FILES['comment_upload']['tmp_name']) || is_uploaded_file($_FILES['comment_upload']['tmp_name']))
						{
							$comment_img_name_all=$_FILES["comment_upload"]["name"];
							$allowedExts = array("gif", "jpeg", "jpg", "png");
							$temp = explode(".", $_FILES["comment_upload"]["name"]);
							$extension = end($temp);
							if ((($_FILES["comment_upload"]["type"] == "image/gif")
							|| ($_FILES["comment_upload"]["type"] == "image/jpeg")
							|| ($_FILES["comment_upload"]["type"] == "image/jpg")
							|| ($_FILES["comment_upload"]["type"] == "image/pjpeg")
							|| ($_FILES["comment_upload"]["type"] == "image/x-png")
							|| ($_FILES["comment_upload"]["type"] == "image/png"))
							&& ($_FILES["comment_upload"]["size"] < 20000000)
							&& in_array($extension, $allowedExts))
							  {
								  $comment_name_request_all=$sid."_".$datetime_convert."_".$comment_img_name_all;
								  move_uploaded_file($_FILES["comment_upload"]["tmp_name"],"../upload_thumnail/".$comment_name_request_all);
					  			
							  }
							   else
				  				{
									echo "<div class='error'>File Logo not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
									exit;
								}
						}
						else
						{
							if(isset($_POST['comment_img_src'])!="")
								{
								$comment_name_request_all=$_POST['comment_img_src'];
								}
							  else
							    {
								$comment_name_request_all="";
								}
							
						}

					



					$turning_point_interview_comment_array=array(
						"comment" => $comment_content,
						"alt" => $comment_img_alt,
						"src" => $comment_name_request_all,
						"editor_name" => $editor_name,
						"photographer_name" =>$photographer_name
					);
					$turning_point_interview_comment=base64_encode(serialize($turning_point_interview_comment_array));
					/*End comment*/
					
					/*Content*/
					
					$content_b_array=$_POST['content_subtitle'];
					$count_content_b=count($_POST['content_subtitle']);
					$array_add_inter=array();
					$array_group_parent=array();
					for($j=0;$j<$count_content_b;$j++)
					{
						$m=$j+1;
						$content_subtitle=$content_b_array[$j];
						$group_item=$_POST['group_item'][$j];
						//$count_item_group=count($group_item);
						if($group_item>0):
							$array_group_as=array();
							
							$content_question="";
							$content_interviewee="";
							$content_answer="";
							$content_alt_img="";
							$content_postion_img="";
							$content_img_src="";
							for($u=0;$u<$group_item;$u++):
								$n=$u+1;
								
								$set_consultant_name=(int)$_POST['set_consultant_name'.$m.$n];
								if($set_consultant_name==1):
									
									if($special==1)
									{
										//$content_consultant_name=addslashes("丸山");
										$content_consultant_name=mb_convert_encoding("丸山","HTML-ENTITIES","UTF-8");
										//$content_consultant_name="consultant special";
									}
									else
									{
										$content_consultant_name=mb_convert_encoding("松尾","HTML-ENTITIES","UTF-8");
										//$content_consultant_name="consultant default";
										//$content_consultant_name=addslashes("松尾");
									}
								else:
									$content_consultant_name=$_POST['content_consultant_kc_interview'.$m.$n];
								endif;
								$content_question=addslashes($_POST['content_right_question_interview'.$m.$n]);
								$content_interviewee=addslashes($_POST['content_interviewee_kc_interview'.$m.$n]);
								$content_answer=addslashes($_POST['content_answer_kc_interview'.$m.$n]);
								$content_alt_img=addslashes($_POST['content_img_alt'.$m.$n]);
								$content_postion_img=addslashes($_POST['content_postion_img'.$m.$n]);
								$content_img_src=addslashes($_POST['content_img_src'.$m.$n]);
								
								if(file_exists($_FILES['content_upload'.$m.$n]['tmp_name']) || is_uploaded_file($_FILES['content_upload'.$m.$n]['tmp_name']))
								{
									$content_img_name_all=$_FILES["content_upload".$m.$n]["name"];
									$allowedExts = array("gif", "jpeg", "jpg", "png");
									$temp = explode(".", $_FILES["content_upload".$m.$n]["name"]);
									$extension = end($temp);
									if ((($_FILES["content_upload".$m.$n]["type"] == "image/gif")
									|| ($_FILES["content_upload".$m.$n]["type"] == "image/jpeg")
									|| ($_FILES["content_upload".$m.$n]["type"] == "image/jpg")
									|| ($_FILES["content_upload".$m.$n]["type"] == "image/pjpeg")
									|| ($_FILES["content_upload".$m.$n]["type"] == "image/x-png")
									|| ($_FILES["content_upload".$m.$n]["type"] == "image/png"))
									&& ($_FILES["content_upload".$m.$n]["size"] < 20000000)
									&& in_array($extension, $allowedExts))
									  {
										  $content_name_request_all=$sid."_".$datetime_convert."_".$content_img_name_all;
										  @move_uploaded_file($_FILES["content_upload".$m.$n]["tmp_name"],"../upload_thumnail/".$content_name_request_all);
							  			
									  }
									   else
						  				{
											echo "<div class='error'>File img content not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
											exit;
										}
								}
								else
								{
									if(isset($_POST['content_img_src'.$m.$n])!="")
										{
										$content_name_request_all=$_POST['content_img_src'.$m.$n];
										}
									  else
									    {
										$content_name_request_all="";
										}
									
								}
								
								
								
								if(!empty($content_question) && !empty($content_interviewee) && !empty($content_answer)):
	  								$array_field=array(
	  									"content_consultant" =>$content_consultant_name,
	  									"set_consultant_name" =>$set_consultant_name,
										"content_question" =>$content_question,
										"content_interviewee" =>$content_interviewee,
										"content_answer" =>$content_answer,
										"content_alt_img" =>$content_alt_img,
										"content_postion_img" =>$content_postion_img,
										"content_src_img"  => $content_name_request_all
	  								);
									array_push($array_group_as,$array_field);
								endif;
								
								
								
								
							endfor;
							//print_r($array_group_as);
						endif;
						$array_all=array(
							"subtitle"=>$content_subtitle,
							"group_item"=>array_filter($array_group_as),
						);
						array_push($array_group_parent,array_filter($array_all));
					}
					
					$content_json=serialize($array_group_parent);
					
					//print_r($array_group_parent);
					
					/*Content*/
					
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					
					$array_right_alt_img=array();
					$array_right_src_img=array();
					
					for($js=1;$js<8;$js++):
						$tn_img_alt=$_POST['tn_img_alt'.$js];
						array_push($array_right_alt_img,$tn_img_alt);
						
						//$tn_file=$_POST['tn_file'.$js];
						if(file_exists($_FILES['tn_upload'.$js]['tmp_name']) || is_uploaded_file($_FILES['tn_upload'.$js]['tmp_name']))
						  {
									$right_img_name_all=$_FILES["tn_upload".$js]["name"];
									$allowedExts = array("gif", "jpeg", "jpg", "png");
									$temp = explode(".", $_FILES["tn_upload".$js]["name"]);
									$extension = end($temp);
									if ((($_FILES["tn_upload".$js]["type"] == "image/gif")
									|| ($_FILES["tn_upload".$js]["type"] == "image/jpeg")
									|| ($_FILES["tn_upload".$js]["type"] == "image/jpg")
									|| ($_FILES["tn_upload".$js]["type"] == "image/pjpeg")
									|| ($_FILES["tn_upload".$js]["type"] == "image/x-png")
									|| ($_FILES["tn_upload".$js]["type"] == "image/png"))
									&& ($_FILES["tn_upload".$js]["size"] < 20000000)
									&& in_array($extension, $allowedExts))
									  {
										  $right_name_request_all=$sid."_".$datetime_convert."_".$right_img_name_all;
										  move_uploaded_file($_FILES["tn_upload".$js]["tmp_name"],"../upload_thumnail/".$right_name_request_all);
							  			
									  }
									   else
						  				{
											echo "<div class='error'>File img content not in the format('gif', 'jpeg', 'jpg', 'png')</div>";
											exit;
										}
							}
							else
							{
									if(isset($_POST['tn_file'.$js])!="")
										{
											$right_name_request_all=$_POST['tn_file'.$js];
										}
									  else
									    {
											$right_name_request_all="";
										}
									
							}
							array_push($array_right_src_img,$right_name_request_all);
					endfor;
					
					//print_r($content_json);
					//exit();
					$datas = array(
					   "turning_point_interview_page_number" => $page_number,
					   "turning_point_interview_vol_number" => $vol_number,
					   "turning_point_interview_vol_slug" => $vol_number_slug,
					   "turning_point_interview_title" => $title,
					   "turning_point_interview_special" => $special,
					   "turning_point_interview_excerpt" => $excerpt,
					   
					   "turning_point_interview_content" => $content_json,
					   "turning_point_interview_consultant" => $turning_point_interview_consultant,
					   "turning_point_interview_comment" => $turning_point_interview_comment,
					   
					   
					   "turning_point_interview_main_img" =>$array_right_src_img[0],
					   "turning_point_interview_main_alt" =>$array_right_alt_img[0],
					   "turning_point_interview_index_img" =>$array_right_src_img[1],
					   "turning_point_interview_index_alt" =>$array_right_alt_img[1],
					   "turning_point_interview_index_title_img" =>$array_right_src_img[2],
					   "turning_point_interview_index_title_alt" =>$array_right_alt_img[2],
					   "turning_point_interview_index_name_img" =>$array_right_src_img[3],
					   "turning_point_interview_index_name_alt" =>$array_right_alt_img[3],
					   "turning_point_interview_thumnail_img" =>$array_right_src_img[4],
					   "turning_point_interview_thumnail_alt" =>$array_right_alt_img[4],
					   "turning_point_interview_backnumber_img" =>$array_right_src_img[5],
					   "turning_point_interview_backnumber_alt" =>$array_right_alt_img[5],
					   //Add main img for mobile
						"turning_point_interview_main_img_mobile" =>$array_right_src_img[6],
						"turning_point_interview_main_alt_mobile" =>$array_right_alt_img[6],
					   
					   "turning_point_interview_list_img" =>$hightligths_img_name_show ,
					   "turning_point_interview_list_img_alt" =>$hightligths_list_img_alt,
					   
					   
					   
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   
					   "turning_point_interview_status" => $op_vis,
					   "turning_point_interview_date" => $op_date,
					   "turning_point_interview_op_date" => "now()|||int",
					);
					//print_r($datas);
												
						if(($id>0) && ($mode=="update") )
						{
								
							$res = MK_Datas($datas, "update", "turning_point_interview", "turning_point_interview_id  = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "turning_point_interview");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						
				break;
				/*********Insert process Turning point************************/

				/*********Insert process kc_saiyo_column************************/
				case "kc_saiyo_column":
				
					$title=addslashes($_POST['title']);
					$bcontent=htmlspecialchars($_POST['bcontent']);
					
					$slug_column_post=addslashes($_POST['slug_column']);
					$slug_column=str_replace(" ","",$slug_column_post);
					$slug_column=str_replace("/","-",$slug_column);
					
					$vol_number=addslashes($_POST['vol_number']);
					
					$seo_keyword=htmlspecialchars($_POST['seo_keyword']);
					$seo_description=htmlspecialchars($_POST['seo_description']);
					$seo_og_description=htmlspecialchars($_POST['seo_og_description']);
					$seo_og_title=htmlspecialchars($_POST['seo_og_title']);
					$datas = array(
					   "kc_saiyo_column_title" =>$title,
					   "kc_saiyo_column_content" => $bcontent,
					   "kc_saiyo_column_vol_number" => $vol_number,
					   "kc_saiyo_column_slug" => $slug_column,
					   "seo_keyword" => $seo_keyword,
					   "seo_description" => $seo_description,
					   "seo_add_thumb_meta" => $seo_add_thumb_meta,
					   "seo_og_description" => $seo_og_description,	
					   "seo_og_title" => $seo_og_title,
					   "kc_saiyo_column_status" => $op_vis,
					   "kc_saiyo_column_date" => $op_date,
					   "kc_saiyo_column_op_date" => "now()|||int",
					);
					
						if(($id>0) && ($mode=="update") )
						{
							$res = MK_Datas($datas, "update", "kc_saiyo_column", "kc_saiyo_column_id  = $id","N");
							$msg =  $sid." Has been Update";
							echo $msg;
						}
						if($mode=="insert")
						{
							$res = MK_Datas($datas, "insert", "kc_saiyo_column");
							$msg = $sid." has been registered";
							$id_update=mysql_insert_id();
							$url4="index.php?sid={$sid}&op=update&id={$id_update}";
							msg_move_page($msg, $url4);
						}

						//print_r($datas);
				break;
				/*********Insert process kc_saiyo_column************************/



            default:



        }
	

?>
