<div class="clear">
    <form method="POST" action="" id="submit_get_post_show_job" class="page_job_info_search">
    	<input type="hidden" name="search" value="<?php echo $_GET['s']; ?>" class="value_hiden_txt_job" />
    </form>
	<?php 
	  
	 	
		if(strpos($search_txt," ") || strpos($search_txt,"　")) {
			$search_txt = mb_convert_kana($search_txt, "s", "UTF-8");
			$q_row = explode(" ",$search_txt);
		}
		$count_search_ground=count($q_row);
		//echo $search_txt;
		$where_total_job="and";
		
		$language=$_GET['language'];
		if($_GET['jobPage']=="" || empty($_GET['jobPage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['jobPage'];
		endif;
		
		if($count_search_ground > 1):
			//**************
			
	$cnt = 0;
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.job_name like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.job_name like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.order_id like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.order_id like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.job_description like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.job_description like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.company_info like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.company_info like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.consultant_comment like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.consultant_comment like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.needed_skill like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.needed_skill like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.desired_skill like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.desired_skill like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.desired_person like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.desired_person like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.experience like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.experience like '%" . $val . "%'";
		}
		$cnt++;
	}
	
		$Count_Job_Search=To_Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`",$where_total_job." group by J.order_id", "count(J.order_id) as cntt");
		
		//$count_job_num= "select Count(*) as `Count_job` from job  join  `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`";
		$numrows = $Count_Job_Search['cnt'];
		
		
			//**************************************************************************
		else:
		
		$where_total_job_new="and J.order_id like '%" . $search_txt . "%' or J.job_name like '%" . $search_txt . "%' or J.job_description like '%" . $search_txt . "%' or J.company_info like '%" . $search_txt . "%' or J.consultant_comment like '%" . $search_txt . "%' or J.needed_skill like '%" . $search_txt . "%' or J.desired_skill like '%" . $search_txt . "%' or J.desired_person like '%" . $search_txt . "%' or J.experience like '%" . $search_txt . "%'";
		$Count_Job_Search=To_Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`",$where_total_job_new." group by `J`.`order_id`", "count(J.order_id) as cntt");
		$numrows = $Count_Job_Search['cnt'];
		
		endif;
		//$numrows=Count_ListJob_ByCategory_search($search_txt);	
		
		
					$rowsperpage =$rowsperpage_search_all_job;
					//echo $numrows;
					$totalpages = ceil($numrows / $rowsperpage);
					if (isset($_GET['jobPage']) && is_numeric($_GET['jobPage'])) {
					   $currentpage = (int) $_GET['jobPage'];
					} else {
					   
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
 
	?>
	


<!--  the start page navi --->
        <div id="page-nav" class="page-nav job_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
		//$param="$search_txt";		   		
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1</a></li> ";
				}
				else 
				{
					echo "";
				}

			
			}
	   
			} 
			
			//
			for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
	   
				   if (($x > 0) && ($x <= $totalpages)) {
					  
					  if ($x == $currentpage) {
						
						 echo "<li class='currentPage'><b style='color:#F00'>$x</b></li> ";
					  
					  } else {
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox($nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
			//
			
		?>
                       
				   
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        <?php 
				//$where_total="";
				
			//	$query_list_job=ListJob_ByCategory_search($search_txt,$offset,$rowsperpage);
				//print_r($query_list_job);
				//if($numrows!=0):
				if($count_search_ground > 1):
						$Data_job_search = To_Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`", $where_total_job." group by J.order_id order by `J`.`listed_timestamp` desc limit {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`");
	
				else:
					
		$Data_job_search = To_Get_Data(" `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`", $where_total_job_new." group by J.order_id order by `J`.`listed_timestamp` desc limit {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`");
				endif;
				
				if($numrows != 0):
				$count_search_job_array=$Data_job_search['cnt'];
				for($s=0; $s<$count_search_job_array; $s++):
						//$count_ter=$count_ter+1;
					$row_list_job = $Data_job_search[$s];
				
					//while($row_list_job=mysql_fetch_array($query_list_job)):
						
			?>
               
           <!--  the start job info control --->
        <div id="related-employ" class="related-employ">
            <div class="related-employ-title clear">
                <h2><?php echo "[".$row_list_job['order_id']."]"; ?> <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $row_list_job['category_id'].".html"; ?>" onclick="Load_Job(<?php echo $row_list_job['order_id']; ?>)"><?php echo $row_list_job['job_name']; ?></a> </h2>
                <?php 
								if ($row_list_job['new_flag']==1)
								{
									echo " <img src='img/index/icon-new.png'/>";
								}
								if ($row_list_job['new_flag']==0)
								{
									echo "";
								}?>
               
            </div>
            <div style="padding: 20px 0px">
                グローバルでの事業機会が増加している同社で、職種に関係なく、海外拠点を含めた事業戦略の立案から泥臭い実行に関わ りたいという方を歓迎します。
            </div>
            <div class="related-employ-duty clear">
                <table class="related-table">
                    <tr class="related-duty">
                        <td class="related-duty-row1"> 勤務地</td>
                        <td><?php echo  $row_list_job['address_1_prefecture']; ?><?php echo  $row_list_job['address_1_city']; ?></td>
                        <td>想定年収</td>
                        <td class="related-colspan-3">
							<?php 
							$salary_max=$row_list_job['salary_max'];
							$salary_min=$row_list_job['salary_min'];
					
					if((int)$row_list_job['salary_max'] >0): 
						$salary_max=" ～ ".$row_list_job['salary_max']."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_list_job['salary_min'] >0): 
						$salary_min=$row_list_job['salary_min']."万円";
						else:
						$salary_min="-";
					endif;
					
						if((int)$row_list_job['salary_max'] <=700):
								$salary_max=" ～ 700 万円";
								$salary_min="";
						 else:  
						  		if((int)$row_list_job['salary_min']<600):
									$salary_min="";
								endif;
						    
						endif;
				
					
					if((int)$row_list_job['age_min'] >0): 
						$age_min=$row_list_job['age_min'];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_list_job['age_max'] >0): 
						$age_max=$row_list_job['age_max'];
						else:
						$age_max="-";
					endif;
					
					
					 echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;
							?></td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">職務内容</td>
                        <td class="related-colspan-3" colspan="3">
                            <?php echo $row_list_job['job_description']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">求めるスキル (必要条件)</td>
                        <td class="related-colspan-3" colspan="3"><?php echo $row_list_job['needed_skill']."<br/>".$row_list_job['desired_skill']; ?>
                        </td>
                    </tr>
                </table>
                <div style="float: right; padding: 20px 0px 0px;">
                    <input type="button" name="duty" class="button-duty" value="" onclick="window.location.href='<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $row_list_job['category_id'].".html"; ?>'"/>
                </div>
            </div>
        </div>
        <?php 
				endfor;
				else:
				?>
                <div class="jobinfo-news" id="job-news">
                <div class="jobinfo-news-job">
                    <div class="laste-job-open clear">
                        <div>最新求人速報</div>
                        <div class="laste-open">Latest Job Openings</div>
                    </div>
                            <div class="jobinfo-staff-business clear">
                        		Result:<span class="red">0</span> .   Not Found Job!  <b>Keyword</b>:<span class="key_word"> <?php echo $search_txt; ?> </span>
                   			 </div>
                        </div>
            		</div>
                    <script language="javascript">
                    		$(document).ready(function(){
									$('.job_nav').each(function(){
											$(this).hide();
										});
								});
                    </script>
                <?php 
			endif;
		?>
        
        <!--  the end job info control --->
        <!--  the start page navi --->
        <div id="page-nav" class="page-nav job_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
	if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1</a></li> ";
				}
				else 
				{
					echo "";
				}

			
			}
	   
			} 
			
			//
			for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
	   
				   if (($x > 0) && ($x <= $totalpages)) {
					  
					  if ($x == $currentpage) {
						
						 echo "<li class='currentPage'><b style='color:#F00'>$x</b></li> ";
					  
					  } else {
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=Send_textbox('$param','$language',$nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        
        </div>
        