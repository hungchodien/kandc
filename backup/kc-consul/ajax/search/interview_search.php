<div class="clear in_clas">
    <form method="POST" action="" id="submit_get_post_show_interview" class="page_job_info_search">
    	<input type="hidden" name="search" value="<?php echo $_GET['s']; ?>" class="value_hiden_txt_interview" />
    </form>
	<?php 
	  
	 	
		if(strpos($search_txt," ") || strpos($search_txt,"　")) {
			$search_txt = mb_convert_kana($search_txt, "s", "UTF-8");
			$q_row = explode(" ",$search_txt);
		}
		$count_search_ground=count($q_row);
		//echo $search_txt;
		$where_total_job="and";
		
		
		if($_GET['interviewPage']=="" || empty($_GET['interviewPage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['interviewPage'];
		endif;
		
		if($count_search_ground > 1):
			//**************
			
	$cnt = 0;
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.title_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.title_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.subtitle_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.subtitle_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.keyword_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.keyword_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.about_company like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.about_company like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.excerpt_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.excerpt_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.content_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.content_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.description_interview like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.description_interview like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	
	
		$Count_Job_Search=To_Get_Data("`interview` as `J` join `category_join_interview` as `B` on  `J`.`id_interview`=`B`.`id_interview`",$where_total_job." group by J.id_interview", "count(J.id_interview) as cntt");
		
		//$count_job_num= "select Count(*) as `Count_job` from job  join  `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`";
		$numrows = $Count_Job_Search['cnt'];
		
		
			//**************************************************************************
		else:
		
		$where_total_job_new="and J.content_interview like '%" . $search_txt . "%' or J.excerpt_interview like '%" . $search_txt . "%' or J.keyword_interview like '%" . $search_txt . "%' or J.title_interview like '%" . $search_txt . "%' or J.subtitle_interview like '%" . $search_txt . "%' or J.about_company like '%" . $search_txt . "%' or J.description_interview like '%" . $search_txt . "%'";
		$Count_Job_Search=To_Get_Data("`interview` as `J` join `category_join_interview` as `B` on  `J`.`id_interview`=`B`.`id_interview`",$where_total_job_new." group by J.id_interview", "count(J.id_interview) as cntt");
		$numrows = $Count_Job_Search['cnt'];
		
		endif;
		//$numrows=Count_ListJob_ByCategory_search($search_txt);	
		
		
					$rowsperpage =$rowsperpage_search_all_interview;
					//echo $numrows;
					$totalpages = ceil($numrows / $rowsperpage);
					if (isset($_GET['interviewPage']) && is_numeric($_GET['interviewPage'])) {
					   $currentpage = (int) $_GET['interviewPage'];
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
        <div id="page-nav" class="page-nav interview_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
		//$param="$search_txt";		   		
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_interview($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox_interview(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview(1); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_interview($nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
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
						$Data_job_search_interview = To_Get_Data("`interview` as `J` join `category_join_interview` as `B` on  `J`.`id_interview`=`B`.`id_interview`", $where_total_job." group by J.id_interview order by `J`.`date_interview` desc limit {$offset},{$rowsperpage}");
	
				else:
					
		$Data_job_search_interview = To_Get_Data("`interview` as `J` join `category_join_interview` as `B` on  `J`.`id_interview`=`B`.`id_interview`", $where_total_job_new." group by J.id_interview order by `J`.`date_interview` desc limit {$offset},{$rowsperpage}");
				endif;
				
				if($numrows != 0):
				$count_search_job_array=$Data_job_search_interview['cnt'];
				//echo $count_search_job_array;
				for($m=0; $m<$count_search_job_array; $m++):
						
					$List_interview = $Data_job_search_interview[$m];
					$title_interview=$List_interview['title_interview'];
					$thumbnail=url_root.$url_images_thumnail.$List_interview['thumbnail_interview'];
					$about_company=htmlspecialchars_decode($List_interview['about_company']);
					$id_interview=$List_interview['id_interview'];
					$vol_number=$List_interview['vol_number'];
					$link_interview=url_root."interview/".$id_interview.".html";
						
			?>
               
           <!--  the start job info control --->
         <div class="interview-item-content clear">
                	<div class="clear">
                        <div class="interview-thumb">
                        	<a href="<?php echo $link_interview; ?>">
                            <?php 
                                if(isset($List_interview['thumbnail_interview'])):
                                
                            ?>
                            <img src="<?php echo $thumbnail; ?>" border="0">
                            <?php else: echo "Not Image Thumbnail!"; endif; ?>
                            </a>
                        </div>
                        <div class="interview-content-item">
                            <div class="interview-title-item clear">
                                <h3>
							<a href="<?php echo $link_interview; ?>">
								<?php echo $vol_number."&nbsp;".$title_interview; ?>
                                </a>
                                </h3>
                                <a class="interview-item-readmore" href="<?php echo $link_interview; ?>">&rsaquo;  詳細はこちら</a>
                            </div>
                            <div class="interview-desc">
                                <?php echo $about_company; ?>
                            </div>
                        </div>
                    </div>
                  
                    	<div class="clear hr_bootom"></div>
                  
                </div>
        <?php 
				endfor;
				else:
				?>
               	<div class="jobinfo-news" id="job-news">
                <div class="jobinfo-news-job">
                    <div class="laste-job-open clear">
                        <div>INTERVIEW</div>
                        <div class="laste-open">RESULT SEARCH</div>
                    </div>
                            <div class="jobinfo-staff-business clear">
                        		Result:<span class="red">0</span> .   Not Found Interview!  <b>Keyword</b>:<span class="key_word"> <?php echo $search_txt; ?> </span>
                   			 </div>
                        </div>
            		</div>
                    <script language="javascript">
                    		$(document).ready(function(){
									$('.interview_nav').each(function(){
											$(this).hide();
										});
								});
                    </script>
                <?php 
			endif;
		?>
        
        <!--  the end job info control --->
        <!--  the start page navi --->
        <div id="page-nav" class="page-nav interview_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
	if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_interview($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox_interview(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview(1); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_interview('$param','$language',$nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_interview($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        
        </div>
        