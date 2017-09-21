<script type="text/javascript">
	function click_to_textbox(page_id){
		var url_form_action="<?php echo url_root; ?>find/salary/page/"+page_id+"/"+$(".value_hiden_txt").val();
      // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show").attr("action",url_form_action);
      $("#submit_get_post_show").submit();
	}
</script>
<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
           <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
			<li>&nbsp;年収で探す&nbsp;</li>
           <?php   
		   			if(isset($_GET['salary_select']) && $_GET['salary_select']!=""):
						echo "<li>&nbsp;>&nbsp;</li>";?>
                        <li><a href="<?php echo curPageURL(); ?>"><?php echo $_GET['salary_select']; ?></a></li>
                        <?php
						
					else:
						echo "";
					endif;
		    ?>
                
			
           
            
        </ul>
    </div>
</div>

    <div id="page_category_name" class="clear">
        <div class="title-page_category" id="title_page_search">
            <p class="title-top"><?php if(isset($_GET['salary_select']) && $_GET['salary_select']!=""): echo $_GET['salary_select']; else: echo "";endif;?>を含む検索結果</p>
            <!--<p class="sub-title-top">ヘッドハンターの目から見たとっておきの企業レポート （毎月2回更新）</p>-->
        </div>
        
    </div>

   
 <div class="clear">
    <form method="POST" action="" id="submit_get_post_show" class="page_job_info_search">
    	<input type="hidden" name="search_select_salary" value="<?php echo $_GET['salary_select']; ?>" class="value_hiden_txt" />
    </form>
	<?php 
	  
		$where_total_job .= "";
		if($_GET['currentpage']=="" || empty($_GET['currentpage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['currentpage'];
		endif;
		
		
		
	 		 $salary_option=$_GET['salary_select'];
			 $salary_value = explode("-", $salary_option);
			 //print_r($salary_value);
			 if(count($salary_value)>2):
			 	header("location:".url_root."404.html");
				exit();
			 endif;
			 $salary_min=(int)$salary_value[0];
			 $salary_max=(int)$salary_value[1];
	  	 	//echo $salary_min."Min";
			//echo $salary_max."Max";
			//exit();
			   if($salary_min==0):
					$where_total_job .= " and (`J`.`salary_min`<=$salary_max) or (`J`.`salary_max`<=$salary_max) ";
				else:
					if($salary_max==0):
						$where_total_job .= " and  (`J`.`salary_max` >= $salary_min) or (`J`.`salary_max`>= $salary_min)";
					else:
						if($salary_min<=$salary_max):
							$where_total_job .= " and (`J`.`salary_min` BETWEEN $salary_min and $salary_max) or (`J`.`salary_max` BETWEEN $salary_min and $salary_max)";
						else:
							header("location:".url_root."404.html");
							exit();
						endif;
						
					endif;
				endif;
				//echo $where_total_job;
			//exit();
		 
	 	$Count_Job_Search=Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`",$where_total_job, "count(DISTINCT `J`.`order_id`) as cntt");
		
			$numrows = $Count_Job_Search['cntt'];
	  
					$rowsperpage =$rowsperpage_category_job;
					$totalpages = ceil($numrows / $rowsperpage);
					if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					   $currentpage = (int) $_GET['currentpage'];
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
        <div id="page-nav" class="page-nav">
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
				
				
	$Data_job_search = To_Get_Data(" `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`", $where_total_job." group by `J`.`order_id` order by `J`.`listed_timestamp` DESC LIMIT {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`");
	//print_r( $Data_job_search);
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
									echo " <img src='".url_root_main."img/index/icon-new.png'/>";
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
                        <td class="related-duty-row1">想定年収</td>
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
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					 //echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;	
					echo $salary_max;

						?>
</td>
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
                <div class="ct-readmore1 clear readmore_index">
                    <!--<input type="button" name="duty" class="button-duty" value="" onclick="window.location.href='<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $row_list_job['category_id'].".html"; ?>'"/>-->
					<a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $row_list_job['category_id'];?>.html" target="_blank">
					<span>詳しく見る</span>
					<span class="next_btn"></span>
					</a>
					
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
                <?php 
			endif;
		?>
        
        <!--  the end job info control --->
        <!--  the start page navi --->
        <div id="page-nav" class="page-nav">
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
        
        
