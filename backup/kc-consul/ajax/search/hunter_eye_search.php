<div class="clear in_clas">
    <form method="POST" action="" id="submit_get_post_show_henter" class="page_job_info_search">
    	<input type="hidden" name="search" value="<?php echo $_GET['s']; ?>" class="value_hiden_txt_henter" />
    </form>
	<?php 
	  
	 	
		if(strpos($search_txt," ") || strpos($search_txt,"　")) {
			$search_txt = mb_convert_kana($search_txt, "s", "UTF-8");
			$q_row = explode(" ",$search_txt);
		}
		$count_search_ground=count($q_row);
		//echo $search_txt;
		$where_total_job="and";
		
		
		if($_GET['huntereyePage']=="" || empty($_GET['huntereyePage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['huntereyePage'];
		endif;
		
		if($count_search_ground > 1):
			//**************
			
	$cnt = 0;
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.title_henter_eye like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.title_henter_eye like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.subtitle_henter_eye like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.subtitle_henter_eye like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.title_con_1 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.title_con_1 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.title_con_2 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.title_con_2 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.title_con_3 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.title_con_3 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.content_con_1 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.content_con_1 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.content_con_2 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.content_con_2 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.content_con_3 like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.content_con_3 like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.description_henter_eye like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.description_henter_eye like '%" . $val . "%'";
		}
		$cnt++;
	}
	
	$cnt = 0;
	$where_total_job .= " or";
	foreach($q_row as $val) {
		if($cnt > 0) {
			$where_total_job .= " and J.vol_number like '%" . $val . "%'";
		} else {
			$where_total_job .= " J.vol_number like '%" . $val . "%'";
		}
		$cnt++;
	}
		$Count_Job_Search=To_Get_Data("henter_eye as J join category_join_hunter as B on  J.id_henter_eye=B.id_henter_eye",$where_total_job." group by J.id_henter_eye", "count(J.id_henter_eye) as cntt");
		
		//$count_job_num= "select Count(*) as `Count_job` from job  join  `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`";
		$numrows = $Count_Job_Search['cnt'];
		
		
			//**************************************************************************
		else:
		
		$where_total_job_new="and J.title_henter_eye like '%" . $search_txt . "%' or J.subtitle_henter_eye like '%" . $search_txt . "%' or J.title_con_1 like '%" . $search_txt . "%' or J.title_con_2 like '%" . $search_txt . "%' or J.title_con_3 like '%" . $search_txt . "%' or J.content_con_1 like '%" . $search_txt . "%' or J.content_con_2 like '%" . $search_txt . "%' or J.content_con_3 like '%" . $search_txt . "%' or J.description_henter_eye like '%" . $search_txt . "%' or J.vol_number like '%" . $search_txt . "%'";
		$Count_Job_Search=To_Get_Data("henter_eye as J join category_join_hunter as B on  J.id_henter_eye=B.id_henter_eye",$where_total_job_new." group by J.id_henter_eye", "count(J.id_henter_eye) as cntt");
		$numrows = $Count_Job_Search['cnt'];
		
		endif;
		//$numrows=Count_ListJob_ByCategory_search($search_txt);	
		
		
					$rowsperpage =$rowsperpage_search_all_hunter_eye;
					//echo $numrows;
					$totalpages = ceil($numrows / $rowsperpage);
					if (isset($_GET['huntereyePage']) && is_numeric($_GET['huntereyePage'])) {
					   $currentpage = (int) $_GET['huntereyePage'];
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
        <div id="page-nav" class="page-nav hunter_eye_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
		//$param="$search_txt";		   		
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye(1); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
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
						$Data_job_search = To_Get_Data("henter_eye as J join category_join_hunter as B on  J.id_henter_eye=B.id_henter_eye", $where_total_job."  group by J.id_henter_eye  order by `J`.`date_henter_eye` desc limit {$offset},{$rowsperpage}");
	
				else:
					
		$Data_job_search = To_Get_Data("henter_eye as J join category_join_hunter as B on  J.id_henter_eye=B.id_henter_eye", $where_total_job_new." group by J.id_henter_eye order by `J`.`date_henter_eye` desc limit {$offset},{$rowsperpage}");
				endif;
				
				if($numrows != 0):
				$count_search_job_array=$Data_job_search['cnt'];
				for($h=0; $h<$count_search_job_array; $h++):
					$consultant_add_thumbnail_henter="";
						$count_ter=$count_ter+1;
					$List_interview = $Data_job_search[$h];
					$title_interview=$List_interview['title_henter_eye'];
					$vol_number=$List_interview['vol_number'];
					$subtitle_henter_eye=$List_interview['subtitle_henter_eye'];
					$description_henter_eye=htmlspecialchars_decode($List_interview['description_henter_eye']);
					$id_interview=$List_interview['id_henter_eye'];
					$link_interview=url_root."hunter_eye/".$id_interview.".html";
					$consultant_add_thumbnail_henter=url_root.$url_images_fure.$List_interview['consultant_add_thumbnail'];
			?>
               
           <!--  the start job info control --->
          <!-- the start careerup post item -->
               
                
                <div class="clear hunter_eye_group_item">
                	<div class="interview-thumb img_item_view">
                    <?php 
						if(!empty($List_interview['consultant_add_thumbnail'])):
					?>
                    	<img src="<?php
								echo $consultant_add_thumbnail_henter;
						?>" alt=""/>
                        <?php 
						else:
							echo "";
						endif;
						?>
		 
                    </div>
                    <div class="interview-content-item">
                    	<div class="interview-title-item clear">
                        	<a href="<?php echo $link_interview; ?>">
                                 <span class="volum_num"><?php echo $vol_number; ?></span><span class="title_henter_item"><?php echo $title_interview; ?></span>
                                 </a>
                            
                        </div>
                        <div class="interview-desc">
                        	<?php echo $description_henter_eye; ?>
                        </div>
                    </div>
                </div>
                
                
                <!-- the end careerup post item -->
        <?php 
				endfor;
				else:
				?>
                <div class="jobinfo-news" id="job-news">
                <div class="jobinfo-news-job">
                    <div class="laste-job-open clear">
                        <div>HUNTER EYE</div>
                        <div class="laste-open">RESULT SEARCH</div>
                    </div>
                            <div class="jobinfo-staff-business clear">
                        		Result:<span class="red">0</span> .   Not Found Hunter Eye!  <b>Keyword</b>:<span class="key_word"> <?php echo $search_txt; ?> </span>
                   			 </div>
                        </div>
            		</div>
                    <script language="javascript">
                    		$(document).ready(function(){
									$('.hunter_eye_nav').each(function(){
											$(this).hide();
										});
								});
                    </script>
                <?php 
			endif;
		?>
        
        <!--  the end job info control --->
        <!--  the start page navi --->
        <div id="page-nav" class="page-nav hunter_eye_nav">
            <div class="navi clear">
                <ul class="clear">
                   <?php 
	if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye(1); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($x); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye('$param','$language',$nextpage); title='Next'>次へ&gt;</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=click_to_textbox_hunter_eye($totalpages); title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        
        </div>
        