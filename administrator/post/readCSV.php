<?php 
	function ImportCSV($name_CSV,$forder_csv,$id_add_other=0,$title_add_other="NULL"){
		
						//$csv_read = read_CSV($forder_csv.$name_CSV);
						$csv_read = read_CSV_news($forder_csv.$name_CSV);
								//echo '<pre style="background:#FFF">';
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
									"id_other"=>(int)$id_add_other,
									"title_other"=>$title_add_other,
									"listed_timestamp" =>date('Y-m-d H:i:s',strtotime($List_job[52])),
									"job_title" => $List_job[53],
									"keyword_job_1" => $List_job[54],
									"keyword_job_2" => $List_job[55],
									"keyword_job_3" => $List_job[56],
									"keyword_job_4" => $List_job[57],
									"keyword_job_5" => $List_job[58] 
									
									);
								//print_r($datas_job);
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
	
	
									
								endfor;	
									
									$msg .="Total:".$count_up."&nbsp;Row CSV. Success. Please Check!<br/>";
									echo $msg;
						
							
		
		}
?>