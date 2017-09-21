<?php
	
	$sid=$sid;
	//echo $sid;
	if(isset($_GET['view_page']) && !empty($_GET['view_page'])):
		$rowsperpage_category_job=(int)$_GET['view_page'];
	endif;
	
	if($_GET['currentpage']=="" || empty($_GET['currentpage'])):
		$currentpage=1;
	else:
		$currentpage=(int)$_GET['currentpage'];
	endif;
	$order=$_GET['order'];
	if($order=="rand" || !isset($_GET['order'])): 
		$order1="listed_timestamp";
	else:
		if($order==""):
		$order1="listed_timestamp";
		else:
		$order1=$_GET['order'];
		endif;
	endif;
	
	
	
					//$numrows=Count_ListJob_ByCategory($sid);	
					
					if(isset($high_class)): 
					$numrows=Count_ListJob_ByCategory_highClass($sid);
					else:
						if(!empty($new_flag)):
							$view_news="`J`.`new_flag`=1 and";
							$numrows=Count_ListJob_ByCategory($sid,$view_news);
						else:
							$numrows=Count_ListJob_ByCategory($sid);
						endif;					endif;
					
					$rowsperpage =$rowsperpage_category_job;
					//echo $numrows."<br/>";
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
        <div id="page-nav" class="page-nav clear">
			<div class="search-number-left-text l"> 検索件数 : <?php  echo $numrows; ?>件</div>
            <div class="navi clear r">
                <ul class="clear">
                   <?php 
		
		$Data_high_class_in=To_Get_Data("category"," and id in(
select D.parent_id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' group by D.parent_id
)
or id in(

select D.id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' and D.parent_id is NULL group by D.id
)
and id !=1","id");
			$count_high_class_id_in=$Data_high_class_in['cnt'];
			for($mis=0;$mis<$count_high_class_id_in;$mis++){
				$List_high_class_in = $Data_high_class_in[$mis];
				$id_high_class_in_check.=$List_high_class_in['id'].",";	
				}
				//echo $id_high_class."<br/>";
				$id_high_class_set=substr($id_high_class_in_check, 0, -1);  
				//echo (int)$high_class_set_in;
		//$param="sid=$sid&language=$language";	
			//echo $id_high_class_set."----------------------------------------<br/>";
		
       if(strcmp('$sid','$id_high_class_set')!=0):
			if(isset($high_class)): 
					$param_link=url_root."category/high_class/$sid/page/";
			else:
					//$param_link=url_root."category/list/$sid/page/";
					if(!empty($new_flag)):
						$param_link=url_root."category/list/short/new/$sid/page/";
					else:
						$param_link=url_root."category/list/$sid/page/";
					endif;

			endif;
		else:
			$param_link=url_root."category/high_class/all/page/";
		endif;
	
		/*if(isset($_GET['order'])):
		$param_link.="&order={$_GET['order']}";	
		endif;
		if(isset($_GET['view_page'])):
			$param_link.="&view_page={$_GET['view_page']}";
		endif;	   	
		if(isset($_GET['view_page'])):
			$param_link.="&currentpage={$_GET['currentpage']}";
		endif;	*/
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			 
			  echo "<li class='next_btn'> <a href='".$param_link.$prevpage.".html'  title='Prev'>&lt; 前へ</a> </li>";
			  
			  
			  
			if($prevpage>3)
			{
			
			
			echo "<li class='next_btn'> <a href='".$param_link."1.html'  title='First Page'>1..</a> </li>";
			}
			else
			{
				if($prevpage==3)	
				{
					echo " <li><a href='".$param_link."1.html'  title='First Page'>1</a></li> ";
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
						
						 
						
						  echo "<li> <a href='".$param_link.$x.".html' title='Page-$x'>$x</a> </li>";
						 
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='".$param_link.$nextpage.".html'  title='Next'> 次へ&gt;</a> </li>";
					echo " <li><a href='".$param_link.$totalpages.".html' title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
			//
			
		?>
                       
				   
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        
        <?php 
				$where_total="";
				
				if(isset($high_class)): 
					$query_list_job=ListJob_ByCategory_highClass($sid,$order1,$offset,$rowsperpage);
				else:
					
					if(!empty($new_flag)):
						$view_news_show="`J`.`new_flag`=1 and";
						$query_list_job=ListJob_ByCategory($sid,$order1,$offset,$rowsperpage,$view_news_show);
					else:
						$query_list_job=ListJob_ByCategory($sid,$order1,$offset,$rowsperpage);
					endif;

				endif;
				
				
				
				if($numrows!=0):
				
					while($row_list_job=mysql_fetch_array($query_list_job)):
						
		?>
        <!--  the start job info control --->
        <div id="related-employ" class="related-employ">
            <div class="related-employ-title clear">
                <h2><?php echo "[".$row_list_job['order_id']."]"; ?> <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $sid.".html"; ?>" onclick="Load_Job(<?php echo $row_list_job['order_id']; ?>)" target="_blank"><?php echo $row_list_job['job_name']; ?></a> </h2>
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
            <!--<div style="padding: 20px 0px">
                <?php echo  $row_list_job['company_info'];?>
            </div>-->
            <div class="related-employ-duty clear">
                <table class="related-table">
                    <tr class="related-duty">
                        <td class="related-duty-row1"> 勤務地</td>
                        <td><?php echo  $row_list_job['address_1_prefecture']; ?><?php echo  $row_list_job['address_1_city']; ?></td>
                        <td class="related-duty-row-border">想定年収</td>
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
					// echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;
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
                <div  class="ct-readmore1 clear readmore_index" >
                    <!--<input type="button" name="duty" class="button-duty" value=""  onclick="window.open('<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $sid;?>.html','_blank');"  />-->
					<a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $sid;?>.html" target="_blank">
					<span>詳しく見る</span>
					<span class="next_btn"></span>
					</a>
                </div>
            </div>
        </div>
        <?php 
				endwhile;
			endif;
		?>
        
        <!--  the end job info control --->
        <!--  the start page navi --->
        <div id="page-nav" class="page-nav clear">
            <div class="navi clear r">
                <ul class="clear">
                   <?php 
	if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='".$param_link.$prevpage.".html'  title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>3)
			{
			echo "<li><a href='".$param_link."1.html' title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==3)	
				{
					echo " <li><a href='".$param_link."1.html'  title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='".$param_link.$x.".html' title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='".$param_link.$nextpage.".html' title='Next'> 次へ&gt;</a> </li>";
					echo " <li><a href='".$param_link.$totalpages.".html'  title='End-Page -$totalpages'>最後へ&gt;&gt;</a></li> ";
				} 
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->