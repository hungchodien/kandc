<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	if(isset($_GET['cate_nsc']))
			{
				$cate_nsc=$_GET['cate_nsc'];
			}	
	if(isset($_POST['input_key']))
	{
		$input_key=$_POST['input_key'];
		
	}else
	{
		if(isset($_GET['input_key']))
		{
			$input_key=$_GET['input_key'];
		}
		else
		{
			$input_key="full";
		}
		
	}
	//echo "Nguyen Nhu Minh_ ".$input_key." _Nguyen Nhu Minh";
	$sid=$_GET['sid'];
	/*sid={$sid}&date=desc&title_order=asc&search=full&op=select*/
	$date=$_GET['date'];
	$title_order=$_GET['title_order'];
	$search=$_GET['search'];
	$model=$_GET['op'];
	$rowsperpage=$_GET['currentpage'];
	$count_detail="20";
	if(!empty($sid)&& !empty($model))
	{
		if($model=="select" || $model=="search")
			{
				switch($sid)
				{
					
				
/*begin Job breaking_news query***********************************************************/
					case "breaking_news":
	if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and `job_ticker_index`=1 group by `order_id`";
		}
		else
		{
		$where_total .= " and `job_ticker_index`=1 and MATCH(`job_name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) or `order_id`='$input_key'  group by `order_id` ";
		}					
	
	$Total = Get_Data("`job`", $where_total, "count(*) as cntt");
	$numrows = $Total['cntt'];
			//echo $numrows;		
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("`job`", $where_total."order by listed_timestamp desc limit {$offset},{$rowsperpage}");
						break;
					/* end Job breaking_news query*************************************************** */
									
					
/*begin Job info query***********************************************************/
					case "job_info":
	if($input_key=="full" || $input_key=="")
		{
		$where_total .= " ";
		}
		else
		{
		$where_total .= " and MATCH(`job_name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) or `order_id`='$input_key' ";
		}					
	
	$Total = Get_Data("`job`", $where_total, "count(*) as cntt");
	$numrows = $Total['cntt'];
			//echo $numrows;		
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("`job`", $where_total."order by listed_timestamp desc limit {$offset},{$rowsperpage}");
						break;
					/* end Job Info query*************************************************** */
					
					
		/*begin Job info English query***********************************************************/
					case "job_info_en":
	if($input_key=="full" || $input_key=="")
		{
		$where_total .= " ";
		}
		else
		{
		$where_total .= " and MATCH(`job_name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) or `order_id`='$input_key' ";
		}					
	
	$Total = Get_Data("`job_en`", $where_total, "count(*) as cntt");
	$numrows = $Total['cntt'];
			//echo $numrows;		
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("`job_en`", $where_total."order by listed_timestamp desc limit {$offset},{$rowsperpage}");
						break;
					/* end Job Info English query*************************************************** */
									
					
					
/*begin interview_index query***********************************************************/
					case "interview_index":
	if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_index_interview=0 ";
		}
		else
		{
		$where_total .= " and MATCH(`title_index_interview`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_index_interview=0 ";
		}					
	
	$Total = Get_Data("interview_index", $where_total, "count(*) as cntt");
	$numrows = $Total['cntt'];
			//echo $numrows;		
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("interview_index", $where_total."order by date_index_interview desc limit {$offset},{$rowsperpage}");
						break;
					/* end interview_index query*************************************************** */


		/*begin read query***********************************************************/
					case "read":
	if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_read_index=0 ";
		}
		else
		{
		$where_total .= " and MATCH(`title_read_index`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_read_index=0 ";
		}					
	
	$Total = Get_Data("read_indexs", $where_total, "count(*) as cntt");
	$numrows = $Total['cntt'];
			//echo $numrows;		
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("read_indexs", $where_total."order by date_read_index desc limit {$offset},{$rowsperpage}");
						break;
					/* end read query*************************************************** */

					
/* begin interview query*************************************************** */
					case "interview":
					
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_interview=0 ";
		}
		else
		{
		$where_total .= " and MATCH(`title_interview`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_interview=0 ";
		}	
		
		$Total = Get_Data("interview", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
	$Data = To_Get_Data("interview", $where_total." order by date_interview  desc limit {$offset},{$rowsperpage}");

					break;
					/* end interview query*************************************************** */


/* begin henter_eye query*************************************************** */
					case "feature_jobs":
		if($input_key=="full" || $input_key=="" )
		{
		$where_total .= "and feature_job_status=0 ";	
		}
		else
		{
		$where_total .= " and MATCH(`feature_job_title`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and feature_job_status=0 ";
		}	
		
		$Total = Get_Data("feature_jobs", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
		$Data = To_Get_Data("feature_jobs", $where_total."order by feature_job_date  desc limit {$offset},{$rowsperpage}");

					break;
					/* end henter_eye query*************************************************** */
					
/* begin henter_eye query*************************************************** */
					case "henter_eye":
		if($input_key=="full" || $input_key=="" )
		{
		$where_total .= "and status_henter_eye=0 ";	
		}
		else
		{
		$where_total .= " and MATCH(`title_henter_eye`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_henter_eye=0 ";
		}	
		
		$Total = Get_Data("henter_eye", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
		$Data = To_Get_Data("henter_eye", $where_total."order by date_henter_eye  desc limit {$offset},{$rowsperpage}");

					break;
					/* end henter_eye query*************************************************** */
					
/* begin career_up query*************************************************** */
					case "career_up":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_career_up =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`title_career_up`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_career_up=0 ";
		}	
		
		$Total = Get_Data("career_up", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
		$Data = To_Get_Data("career_up", $where_total." order by date_career_up  desc limit {$offset},{$rowsperpage}");

					break;
					/* end career_up query*************************************************** */
					
/* begin notice_seminar_career query*************************************************** */
					case "notice_seminar_career":
		

		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and id_category_notice_seminar_career={$cate_nsc} ";
		}
		else
		{
		$where_total .= " and MATCH(`title_notice_seminar_career`) AGAINST ('{$input_key}' IN BOOLEAN MODE)  and id_category_notice_seminar_career={$cate_nsc} ";
		}	
		
		$Total = Get_Data("notice_seminar_career", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
		$Data = To_Get_Data("notice_seminar_career", $where_total." order by date_notice_seminar_career  desc limit {$offset},{$rowsperpage}");

					break;
					/* end career_up query*************************************************** */
					
/*Category category_notice_semina_career************************************************/
					case "category_notice_semina_career":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_category_notice_seminar_career =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`name_category_notice_seminar_career`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_category_notice_seminar_career=0 ";
		}	
		
		$Total = Get_Data("category_notice_seminar_career", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("category_notice_seminar_career", $where_total." order by date_category_notice_seminar_career desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Category ***********************************************************************/
					
/*Category Consultant*******************************************************************/
					case "category_consultant":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and consultant_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`consultant_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and consultant_Status=0 ";
		}	
		
		$Total = Get_Data("consultant", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("consultant", $where_total." order by consultant_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Category ***********************************************************************/
					
						
/*Slide****************************************************************************/
					case "slide":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and scrol_venderStatus =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`scrol_venderName`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and scrol_venderStatus=0 ";
		}	
		
		$Total = Get_Data("scrol_vender", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("scrol_vender", $where_total." order by scrol_venderDate desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Slide ***********************************************************************/
					
/*News****************************************************************************/
					case "news":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and news_status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`news_title`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and news_status=0 ";
		}	
		
		$Total = Get_Data("news", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("news", $where_total." order by news_date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End News ***********************************************************************/
					
/*category_consul****************************************************************************/
					case "category_consul":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and category_consul_status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`category_consul_title`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and category_consul_status=0 ";
		}	
		
		$Total = Get_Data("category_consul", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("category_consul", $where_total." order by category_consul_date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_consul ***********************************************************************/
					
/*Consul****************************************************************************/
					case "consul":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and consul_status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`consul_title`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and consul_status=0 ";
		}	
		
		$Total = Get_Data("consul", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("consul", $where_total." order by consul_date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Consul ***********************************************************************/
					
/*Category interview*****************************************************************/
					case "category_interview":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and category_interview_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`category_interview_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and category_interview_Status=0 ";
		}	
		
		$Total = Get_Data("category_interview", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("category_interview", $where_total." order by category_interview_Date desc limit {$offset},{$rowsperpage}");

					break;
					
			/*End category interview **************************************/

/*Career****************************************************************************/
					case "career":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and status_career =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`title_career`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and status_career=0 ";
		}	
		
		$Total = Get_Data("career", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("career", $where_total." order by date_up_career desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Consul ***********************************************************************/
					
/*Category Career Up*****************************************************************/
					case "category_career_up":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and categgory_career_up_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`categgory_career_up_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and categgory_career_up_Status=0 ";
		}	
		
		$Total = Get_Data("categgory_career_up", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("categgory_career_up", $where_total." order by categgory_career_up_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category Career Up ******************************************/
					
		/*icon_checkbox_hunter*****************************************************************/
					case "icon_checkbox_hunter":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and icon_Checkbox_hunter_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`icon_Checkbox_hunter_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and icon_Checkbox_hunter_Status=0 ";
		}	
		
		$Total = Get_Data("icon_checkbox_hunter", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("icon_checkbox_hunter", $where_total." order by icon_Checkbox_hunter_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End icon_checkbox_hunter ******************************************/
					
	/*Category_hunter*****************************************************************/
					case "category_hunter":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and category_hunter_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`category_hunter_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and category_hunter_Status=0 ";
		}	
		
		$Total = Get_Data("category_hunter", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("category_hunter", $where_total." order by category_hunter_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_hunter ******************************************/
					
/*Caption_hunter*****************************************************************/
					case "caption_henter_eye":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and caption_henter_eye_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`caption_henter_eye_Name`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and caption_henter_eye_Status=0 ";
		}	
		
		$Total = Get_Data("caption_henter_eye", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("caption_henter_eye", $where_total." order by caption_henter_eye_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_hunter ******************************************/
/*Semina*****************************************************************/
					case "seminar":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and seminarStatus =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`seminarTitle`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and seminarStatus=0 ";
		}	
		
		$Total = Get_Data("seminar", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("seminar", $where_total." order by seminar_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_hunter ******************************************/
/*publicity*****************************************************************/
					case "publicity":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and publicityStatus =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`publicityTitle`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and publicityStatus=0 ";
		}	
		
		$Total = Get_Data("publicity", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("publicity", $where_total." order by publicity_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_hunter ******************************************/
/*Voice*****************************************************************/
					case "voice":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and case_voiceStatus =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`case_voiceTitle`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and case_voiceStatus=0 ";
		}	
		
		$Total = Get_Data("case_voice", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("case_voice", $where_total." order by case_voiceDate desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End category_hunter ******************************************/	
/*Question*****************************************************************/
					case "question":
		if($input_key=="full" || $input_key=="")
		{
		$where_total .= "and question_voice_Status =0 ";
		}
		else
		{
		$where_total .= " and MATCH(`question_voice_question`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and question_voice_Status=0 ";
		}	
		
		$Total = Get_Data("question_voice", $where_total, "count(*) as cntt");
		$numrows = $Total['cntt'];
					
					$rowsperpage =$count_detail;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			$Data = To_Get_Data("question_voice", $where_total." order by question_voice_Date desc limit {$offset},{$rowsperpage}");

					break;
					
					/*End Question ******************************************/

   /*career_form*****************************************************************/
                    case "career_form":
                        if($input_key=="full" || $input_key=="")
                        {
                            $where_total .= "and career_formStatus =0 ";
                        }
                        else
                        {
                            $where_total .= " and MATCH(`career_formTitle`) AGAINST ('{$input_key}' IN BOOLEAN MODE) and career_formStatus=0 ";
                        }

                        $Total = Get_Data("career_form", $where_total, "count(*) as cntt");
                        $numrows = $Total['cntt'];

                        $rowsperpage =$count_detail;

                        $totalpages = ceil($numrows / $rowsperpage);
                        if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
                            $currentpage = (int) $_GET['currentpage'];
                        }else{
                            $currentpage = 1;
                        }

                        if ($currentpage > $totalpages) {

                            $currentpage = $totalpages;
                        }

                        if ($currentpage < 1) {

                            $currentpage = 1;
                        }
                        $offset = ($currentpage - 1) * $rowsperpage;
                        $Data = To_Get_Data("career_form", $where_total." order by career_form_Date desc limit {$offset},{$rowsperpage}");

                        break;

                    /*End career_form ******************************************/
					default:
					

				}
			}
	}
?>
    <div class="clearfix" id="page_title">
        <div class="title_icon"><img title="" alt="" src="img/main/post_content_icon.png"></div>
        <h1 class="content_title" id="dashboard_title"><a href="news/">LIST POST</a></h1>
    </div>
    
    
    		<div id="col-container" class="clearfix">
    	<div class="clearfix" id="search_post_form">
        <form id="search_frm" name="search_frm" method="POST" action="">
         		 <input type="hidden" name="sid" value="<?php echo $sid; ?>" id="sid_private" />
                 <input type="hidden" name="op" value="search" />
                 <input type="hidden" name="cate_nsc" value="<?php echo $cate_nsc;?>" />
        <p id="input_tag"><input type="text" value="" name="input_key" id="search_post"></p>
        <p class="search_btn"><a class="search_btn_click"  href="javascript:void(0);"><span>Search</span></a></p>
        </form>
		</div>
        
        <div id="posts_list" class="clearfix">
        		<div>
                    <p class="add_cat_btn">
                           <a class="deleteAll_id"  href="javascript:void(0);"><span>Delete</span></a>
                           <a href="index.php?sid=<?php echo $sid;?>&op=insert<?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";} ?>"><span>Add New</span></a>
                        </p>
					</div>
                    
        	<div>
            	<form id="posts-filter" name="board" action="board_proc.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $sid; ?>" id="sid_private" />
                 <input type="hidden" name="page" value="<?php echo $currentpage; ?>" id="page_private" />
                  <input type="hidden" name="model" value="delete" />
                <table class="list-table posts_tbl fixed tags" cellspacing="0">
				<thead>
                	<tr>
						<th scope="col" id="cb" class="manage-column column-cb check-column">
                        <input type="checkbox" id="selectall">
                        </th>
						<th scope="col" id="name" class="manage-column column-name sortable desc">
                        <a href="#"><span><?php echo strtoupper('Title'); ?></span><span class="sorting-indicator"></span></a>
                        </th>
						<th scope="col" id="slug" class="manage-column column-slug sortable desc">
                        <a href="#"><span>
                        	<?php 
									switch($sid)
											{
												case "breaking_news":
													echo strtoupper('Order_ID');
												break;

												case "job_info":
													echo strtoupper('Order_ID');
												break;
												case "job_info_en":
													echo strtoupper('Order_ID');
												break;
												case "interview_index":
													echo strtoupper('Link');
												break;
												case "read":
													echo strtoupper('Link');
												break;
												case "interview":
													echo strtoupper('SubTitle');
												break;
												case "henter_eye":
													echo strtoupper('Location');
												break;
												case "career_up":
													echo strtoupper('consultant Thumbnail');
												break;
												case "notice_seminar_career":
													echo strtoupper('category');
												break;
												case "category_notice_semina_career":
													echo strtoupper('Status');
												break;
												case "slide":
													echo strtoupper('Images');
												break;
												case "news":
													echo strtoupper('Images');
												break;
												case "category_consul":
													echo strtoupper('Images');
												break;
												case "category_consultant":
													echo strtoupper('Thumbnail');
												break;
												case "consul":
													echo strtoupper('Category Consul');
												break;
												case "career":
													echo strtoupper('Category Career');
												break;
												case "seminar":
													echo strtoupper('Thumbnail');
												break;
												case "publicity":
													echo strtoupper('Thumbnail');
												break;
												case "voice":
													echo strtoupper('Thumbnail');
												break;
                                                case "career_form":
                                                    echo strtoupper('Thumbnail');
                                                break;
												case "feature_jobs":
                                                    echo strtoupper('Thumbnail');
                                           		break;
												default:
												
												
											}
							?>
                        </span><span class="sorting-indicator"></span></a>
                        </th>

						<th scope="col" id="posts" class="manage-column column-posts num sortable desc">
                        <a href="#"><span><?php echo strtoupper('Date'); ?></span><span class="sorting-indicator"></span></a>
                        </th>
					</tr>
                    </thead>
                    
                    <tbody id="the-list" class="list:tag">

    
  <?php 
  	
	if($Data['cnt'] > 0){
	for($i=0; $i<$Data['cnt']; $i++){
		$List = $Data[$i];
		
		switch($sid)
			{

				case "breaking_news":
					$seq = $List['id'];
					$title_content = htmlspecialchars_decode($List['job_name']);
					//$except = htmlspecialchars_decode($List['excerpt_index_interview']);
					$date_time = $List['listed_timestamp'];
					$order_id="[".$List['order_id']."]";
				break;

				case "job_info":
					$seq = $List['id'];
					$title_content = htmlspecialchars_decode($List['job_name']);
					//$except = htmlspecialchars_decode($List['excerpt_index_interview']);
					$date_time = $List['listed_timestamp'];
					$order_id="[".$List['order_id']."]";
				break;
				case "job_info_en":
					$seq = $List['id'];
					$title_content = htmlspecialchars_decode($List['job_name']);
					//$except = htmlspecialchars_decode($List['excerpt_index_interview']);
					$date_time = $List['listed_timestamp'];
					$order_id="[".$List['order_id']."]";
				break;
				case "interview_index":
					$seq = $List['id_index_interview'];
					$title_content = htmlspecialchars_decode($List['title_index_interview']);
					$except = htmlspecialchars_decode($List['excerpt_index_interview']);
					$date_time = $List['date_index_interview'];
					$status_content=$List['status_index_interview']; 
					$link_index_interview=$List['link_index_interview'];
				break;
				case "read":
					$seq = $List['id_read_index'];
					$title_content = htmlspecialchars_decode($List['title_read_index']);
					$except = htmlspecialchars_decode($List['excerpt_read_index']);
					$date_time = $List['date_read_index'];
					$status_content=$List['status_read_index']; 
					$link_index_interview=$List['link_read_index'];
				break;
				case "interview":
					$seq = $List['id_interview'];
					$title_content1 = htmlspecialchars_decode($List['title_interview']);
					$voil_number=$List['vol_number']; 
					$title_content=$voil_number."&nbsp;".$title_content1;
					$except = htmlspecialchars_decode($List['excerpt_interview']);
					$date_time = $List['date_interview'];
					$status_content=$List['status_interview'];
					$subtitle_interview =$List['subtitle_interview']; 
					
				break;
				case "feature_jobs":
					$seq = $List['feature_job_id'];
					$title_content = htmlspecialchars_decode($List['feature_job_title']);
					$date_time = $List['feature_job_date'];
					$status_content=$List['feature_job_status']; 
					$consultant_feature_jobs=$List['consultant_add_thumbnail_index'];
				break;
				case "henter_eye":
					$seq = $List['id_henter_eye'];
					$title_content_hun = htmlspecialchars_decode($List['title_henter_eye']);
					$voil_number_hun=$List['vol_number']; 
					$title_content=$voil_number_hun."&nbsp;".$title_content_hun;
					$except = htmlspecialchars_decode($List['excerpt_henter_eye']);
					$date_time = $List['date_henter_eye'];
					$status_content=$List['status_henter_eye']; 
					$location_henter_eye_company=$List['location_henter_eye_company'];
				break;
				case "career_up":
					$seq = $List['id_career_up'];
					$title_content = $List['title_career_up']."&nbsp;".$List['subtitle_career_up'];
					$except = htmlspecialchars_decode($List['excerpt_career_up']);
					$date_time = $List['date_career_up'];
					$status_content=$List['status_career_up']; 
					$id_consultant_career=$List['consultant_thumb_career_up'];
					
					$List_career_consultant = Get_Data("consultant", "and consultant_ID = $id_consultant_career");
					$consultant_name_career=$List_career_consultant['consultant_Name'];
					if(empty($List_career_consultant['consultant_Thumb'])):
					$consultant_thumb_career="Not Image Consultant";
					else:
					$consultant_thumb_career="<img src='upload_thumnail/".$List_career_consultant['consultant_Thumb']."' border='0' width='100'/><br/>";
					
					endif;
					$consultant_thumb_career_up=$consultant_name_career."<br>".$consultant_thumb_career; 
					 
				break;
				case "notice_seminar_career":
					$seq = $List['id_notice_seminar_career'];
					$title_content = $List['title_notice_seminar_career'];
					
$where_total_cate_content .= "and status_category_notice_seminar_career=0 and id_category_notice_seminar_career={$cate_nsc} ";
$Data_content = To_Get_Data("category_notice_seminar_career", $where_total_cate_content." order by date_category_notice_seminar_career desc");
	$name_category_notice_seminar_career_content=$Data_content[0]['name_category_notice_seminar_career'];
	
					//$except = htmlspecialchars_decode($List['link_notice_seminar_career']);
					$date_time = $List['date_notice_seminar_career'];
					$status_content=$List['status_notice_seminar_career']; 
					$link_notice_seminar_career=$List['link_notice_seminar_career']; 
				break;
				case "category_notice_semina_career":
					$seq = $List['id_category_notice_seminar_career'];
					$title_content = $List['name_category_notice_seminar_career'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['date_category_notice_seminar_career'];
					$status_content=$List['status_category_notice_seminar_career']; 
				break;
				
				case "category_consultant":
					$seq = $List['consultant_ID'];
					$title_content = $List['consultant_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['consultant_Date'];
					$status_content=$List['consultant_Status']; 
					$consultant_imges=$List['consultant_Thumb'];
				break;
				case "slide":
					$seq = $List['scrol_venderID'];
					$title_content = $List['scrol_venderName'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['scrol_venderDate'];
					$status_content=$List['scrol_venderStatus'];
					$image_thumbnail= $List['scrol_venderThumbnail'];
				break;
				case "news":
					$seq = $List['news_id'];
					$title_content = $List['news_title'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['news_date'];
					$status_content=$List['news_status'];
					$image_thumbnail= $List['news_thumnail'];
				break;
				case "category_consul":
					$seq = $List['category_consul_id'];
					$title_content = $List['category_consul_title'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['category_consul_date'];
					$status_content=$List['category_consul_status'];
					$image_thumbnail= $List['category_consul_thumnail'];
				break;
				case "consul":
					$seq = $List['consul_id'];
					$title_content = $List['consul_title'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['consul_date'];
					$status_content=$List['consul_status'];
					$category_consul_id=$List['category_consul_id'];
					
					$where_total_consul_content = "and category_consul_status=0 and category_consul_id={$category_consul_id} ";
$Data_consul_content = To_Get_Data("category_consul", $where_total_consul_content,"category_consul_title");
	$category_consul_title=$Data_consul_content[0]['category_consul_title'];
					
				break;
				
				case "category_interview":
					$seq = $List['category_interview_ID'];
					$title_content = $List['category_interview_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['category_interview_Date'];
					$status_content=$List['category_interview_Status'];
					
				break;
				
				case "career":
					$seq = $List['careerID'];
					$title_content = $List['title_career'];
					$category_name = $List['category_name'];
					$date_time = $List['date_up_career'];
					$status_content=$List['status_career'];
					
				break;
				case "category_career_up":
					$seq = $List['categgory_career_up_ID'];
					$title_content = $List['categgory_career_up_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['categgory_career_up_Date'];
					$status_content=$List['categgory_career_up_Status'];
					
				break;
				case "icon_checkbox_hunter":
					$seq = $List['icon_Checkbox_hunter_ID'];
					$title_content = $List['icon_Checkbox_hunter_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['icon_Checkbox_hunter_Date'];
					$status_content=$List['icon_Checkbox_hunter_Status'];
					
				break;
				case "category_hunter":
					$seq = $List['category_hunter_ID'];
					$title_content = $List['category_hunter_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['category_hunter_Date'];
					$status_content=$List['category_hunter_Status'];
					
				break;
				case "caption_henter_eye":
					$seq = $List['caption_henter_eye_ID'];
					$title_content = $List['caption_henter_eye_Name'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['caption_henter_eye_Date'];
					$status_content=$List['caption_henter_eye_Status'];
					
				break;
				case "seminar":
					$seq = $List['seminarID'];
					$title_content = $List['seminarTitle'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['seminar_Date'];
					$status_content=$List['seminarStatus'];
					$image_thumbnail= $List['seminarThumbnail'];
				break;
				case "publicity":
					$seq = $List['publicityID'];
					$title_content = $List['publicityTitle'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['publicity_Date'];
					$status_content=$List['publicityStatus'];
					$image_thumbnail= $List['publicityThumbnail'];
				break;
				case "voice":
					$seq = $List['case_voiceID'];
					$title_content = $List['case_voiceTitle'];
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['case_voiceDate'];
					$status_content=$List['case_voiceStatus'];
					$image_thumbnail= $List['consultant_add_thumbnail'];
				break;
				case "question":
					$seq = $List['question_voiceID'];
					$title_content = htmlspecialchars_decode($List['question_voice_question']);
					//$except = $List['link_notice_seminar_career'];
					$date_time = $List['question_voice_Date'];
					$status_content=$List['question_voice_Status'];
					
				break;
                case "career_form":
                    $seq = $List['career_formID'];
                    $title_content = $List['career_formTitle'];
                    //$except = $List['link_notice_seminar_career'];
                    $date_time = $List['career_form_Date'];
                    $status_content=$List['career_formStatus'];
                    $image_thumbnail= $List['career_formThumbnail'];
                    break;
				default:
				
				
			}

	    		
		
	?>
  
                        	<tr class="alternate">
                            <th scope="row" class="check-column" id="column-<?php echo $seq; ?>">
                            <input type="checkbox" id="<?php echo $seq; ?>" name="seq_list[]" value="<?php echo $seq; ?>">
                            </th>
                            <td class="name column-name">
                            <strong>
                                <a class="row-title" href="index.php?sid=<?php echo $sid;?>&op=update&id=<?php echo $seq; ?><?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";} ?>" title="<?php echo $title_content; ?>">
                                <?php echo $title_content; ?>
                                </a>
                            </strong>
                            	<br>
                            <div class="row-actions">
                                <span class="edit">
                                <a href="index.php?sid=<?php echo $sid;?>&op=update&id=<?php echo $seq; ?><?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";} ?>" >Edit</a> | </span>
                                <span class="trash">
                                <a class="trashClass" id="del#<?php echo $sid;?>#<?php echo $seq; ?>#<?php echo $currentpage; ?><?php if(!empty($cate_nsc)){ echo "#".$cate_nsc;} ?>"  href="javascript:void(0);">Trash</a>
                                </span>
                            </div>
                            </td>
                            <td class="slug column-slug">
							<?php //echo $except; ?>
                            <?php 
									switch($sid)
											{
												case "breaking_news":
													echo "<div class='note'>".$order_id."</div>";
												break;

												case "job_info":
													echo "<div class='note'>".$order_id."</div>";
												break;
												case "job_info_en":
													echo "<div class='note'>".$order_id."</div>";
												break;
												case "interview_index":
													echo $link_index_interview;
												break;
												case "read":
													echo $link_index_interview;
												break;
												case "interview":
													echo $subtitle_interview;
												break;
												case "feature_jobs":
													echo "<a href='#'><img src='".$consultant_feature_jobs."' width='100' border='0'/></a>";
												break;
												case "henter_eye":
													echo $location_henter_eye_company;
												break;
												case "career_up":
													echo $consultant_thumb_career_up;
												break;
												case "notice_seminar_career":
													echo "<a href='#'>".$name_category_notice_seminar_career_content."</a>";
												break;
												case "category_notice_semina_career":
													if($status_content==0){ echo "Public"; }else{ echo "Draft";}
												break;
												case "slide":
													echo "<a href='#'><img src='./upload_thumnail/".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												case "news":
													echo "<a href='#'><img src='./upload_thumnail/".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												case "category_consul":
													echo "<a href='#'><img src='./upload_thumnail/".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												case "category_consultant":
													echo "<a href='#'><img src='./upload_thumnail/".$consultant_imges."' width='100' border='0'/></a>";
												break;
												
												case "consul":
													echo "<b>".$category_consul_title."</b>";
												break;
												case "career":
													echo "<b>".$category_name."</b>";
												break;
												case "seminar":
													echo "<a href='#'><img src='./upload_thumnail/".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												case "publicity":
													echo "<a href='#'><img src='./upload_thumnail/".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												case "voice":
													echo "<a href='#'><img src='".$image_thumbnail."' width='100' border='0'/></a>";
												break;
												default:
												
												
											}
							?>
                            
                            </td>
                            <td class="posts column-posts"><?php echo $date_time; ?><br><?php if($status_content==0){echo "Public";}else{echo "Draft";}?></td>
						</tr>
                                    <?php 
					}	//end For
				?>
                </tbody>
                	
                </table>

                
                    
                  <!--Pageinit-->
                  <div class="tablenav-pages"><!--<span class="paging-input"><a href="javascript:;">1</a></span>-->
                  
         <?PHP 
		 $prameter_pageInit="sid={$sid}&op={$model}";
         $range = 2;
		if ($currentpage > 1)
		{
			//echo " <li><a href='#Page-1' onclick='Load_Content(1)' title='Trang Đầu'>First </a></li> ";
			   
			   $prevpage = $currentpage - 1;
			   
			   echo "<li class='next_btn'> <a href='#posts-filter' onclick=Load_Content('$prameter_pageInit',$prevpage) title='PREV'>Prev</a> </li>";
	   
			} 
			
			//
			for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
	   
				   if (($x > 0) && ($x <= $totalpages)) {
					  
					  if ($x == $currentpage) {
						
						 echo "<li class='currentPage'><b style='color:#F00'>$x</b></li> ";
					  
					  } else {
						 
						 echo " <li><a href='#posts-filter' onclick=Load_Content('$prameter_pageInit',$x) title='PAGE-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   		if(($currentpage+$range)<$totalpages){
						 
				echo "<li>...</li>";
				echo " <li><a href='#posts-filter' onclick=Load_Content('$prameter_pageInit',$totalpages)  title='End-$totalpages'>$totalpages</a></li> ";

					}
				   echo "<li class='next_btn'> <a href='#posts-filter' onclick=Load_Content('$prameter_pageInit',$nextpage) title='NEXT'> Next</a> </li>";
				   
				   //echo " <li><a href='#contents' onclick='Load_Content($totalpages);'  title='END-$totalpages'> End </a></li> ";
				} 
	
			//
			
		?>

                  
                  
                  </div>
                </form>
            </div>
            <!--add or delete-->
                	<div>
                        <p class="add_cat_btn">
                            <a class="deleteAll_id"  href="javascript:void(0);"><span>Delete</span></a>
                            <a href="index.php?sid=<?php echo $sid;?>&op=insert<?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";} ?>"><span>Add New</span></a>
                        </p>
					</div>
        </div>
        
    </div>
<?php 
		
	}
	else
	{?>
    	
      </div>
      
    <?php 
			
	}
?>
<script type="text/javascript">
	$(".deleteAll_id").click(function () {
		$form = $('#posts-filter');
         arr = new Array();
		//$("#posts-filter input[type='radio']:checked").val();
		$('input[type=checkbox]:checked').each(function(){				
				// arr.push($(this).attr("id"));			 
				arr=$('input:checkbox').serializeArray();
						
				   }); //each
				//var data=arrAtb.concat(arr);
						$.ajax({
						 	type: "POST",
							  url: "ajax/delete_data.php?sid=<?php echo $sid; ?>&currentpage=<?php echo $currentpage; ?>",
							   data: arr ,//pass the array to the ajax call
							   cache: false,
								beforeSend: function() {
             						$('#body_inc').hide();	
									$('.load_ajax').show();

         					   },
							   success: function()
									 {   
									 $('.load_ajax').hide();
									 $('#body_inc').show();	
									 $("#body_inc").load("ajax/post_content.php?sid=<?php echo $sid; ?>&currentpage=<?php echo $currentpage; ?>&op=select<?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";}?>");
									 }
						 });//ajax

       			  
         
            
         

    }); //click
	
	$("#posts-filter").on("click", ".trashClass", function() {
        //e.preventDefault();
        var clickedID = this.id.split("#"); //Split string (Split works as PHP explode)
        var DbNumberName = clickedID[1]; //and get number from array
		var DbNumberID = clickedID[2]; 
		var DbNumberPAGE = clickedID[3];
		
	  var myData = 'id_row='+ DbNumberID+'&model_del='+DbNumberName+'&page_init='+DbNumberPAGE ; //build a post data structure
       
				
        $.ajax({
            type: "POST", // HTTP method POST or GET
            url: "ajax/delete_data.php", //Where to make Ajax calls
            dataType:"text", // Data type, HTML, json etc.
            data:myData, //post variables
            success:function(response){
            //on success, hide element user wants to delete.
            //$('#item#'+DbNumberName+'#'+DbNumberID).fadeOut("slow");
$("#body_inc").load("ajax/post_content.php?sid=<?php echo $sid; ?>&currentpage=<?php echo $currentpage; ?>&op=select<?php if(!empty($cate_nsc)){ echo "&cate_nsc={$cate_nsc}";}else{ echo "";}?>");
            },
            error:function (xhr, ajaxOptions, thrownError){
                //On error, we alert user
                alert(thrownError);
            }
        });
    });
	$('#selectall').click(function() {
						var checkboxes = $(this).closest('form').find(':checkbox');
						if($(this).is(':checked')) {
							checkboxes.attr('checked', 'checked');
						} else {
							checkboxes.removeAttr('checked');
						}
					});
	$('.search_btn_click').click( function() {
		var fulltext_search=$("#search_post").val();
		var url='ajax/post_content?sid=<?php echo $sid; ?>&currentpage=<?php echo $currentpage; ?>&op=search&input_key=' +fulltext_search;
		//var Data=$('#posts_list').serialize();
		//
		 $.post(url, function(resultContent){
			$("#body_inc").empty();
			$("#body_inc").html(resultContent);
			
		//$("#body_inc").load("ajax/post_content.php?sid=<?php echo $sid; ?>&currentpage=<?php echo $currentpage; ?>&op=search&input_key="+fulltext_search);
			//$("#search_post").val(fulltext_search);
			});
			//$("#search_frm").submit();
			//$("#search_post").val(<?php echo $_GET['input_key'];?>);
	});
</script>