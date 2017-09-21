<?php
	   @include('../config.php');
	   @include('../Lib/_init.php');
	   @include('../Lib/function/function.database.php');
	$sid=$sid;
	
	
	$language=$_GET['language'];
	
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
	
					$numrows=Count_ListJob_ByCategory($sid);	
					$rowsperpage =$rowsperpage_category_job;
					//echo $numrows;
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
		$param="sid=$sid&language=$language";		   		
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=Load_Content_List('$param',$prevpage,'$order1','$rowsperpage_category_job'); title='Prev'>Prev</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=Load_Content_List('$param',1,'$order1','$rowsperpage_category_job'); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',1,'$order1','$rowsperpage_category_job'); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',$x,'$order1','$rowsperpage_category_job'); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=Load_Content_List('$param',$nextpage,'$order','$rowsperpage_category_job'); title='Next'>Next</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',$totalpages,'$order','$rowsperpage_category_job'); title='End-Page -$totalpages'>End</a></li> ";
				} 
	
			//
			
		?>
                       
				   
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
        <?php 
				$where_total="";
				$query_list_job=ListJob_ByCategory($sid,$order1,$offset,$rowsperpage);
				//print_r($query_list_job);
				if($numrows!=0):
				
					while($row_list_job=mysql_fetch_array($query_list_job)):
						
		?>
        <!--  the start job info control --->
        <div id="related-employ" class="related-employ">
            <div class="related-employ-title clear">
                <h2><?php echo "[".$row_list_job['order_id']."]"; ?> <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $sid.".html"; ?>" onclick="Load_Job(<?php echo $row_list_job['order_id']; ?>)"><?php echo $row_list_job['job_name']; ?></a> </h2>
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
                        <td class="related-colspan-3"><?php 
								echo $row_list_job['age_min']."～".$row_list_job['age_max']."才&nbsp;".$row_list_job['salary_min']."万円～".$row_list_job['salary_max']."万円程度";?></td>
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
                    <input type="button" name="duty" class="button-duty" value="" onclick="window.location.href='<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $sid.".html"; ?>'"/>
                </div>
            </div>
        </div>
        <?php 
				endwhile;
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
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=Load_Content_List('$param',$prevpage,'$order1','$rowsperpage_category_job'); title='Prev'>Prev</a> </li>";
			  
			if($prevpage>2)
			{
			echo "<li><a href='javascript:void(0);' onclick=Load_Content_List('$param',1,'$order1','$rowsperpage_category_job'); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==2)	
				{
					echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',1,'$order1','$rowsperpage_category_job'); title='First Page'>1</a></li> ";
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
						 
						 echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',$x,'$order1','$rowsperpage_category_job'); title='Page-$x'>$x</a></li> ";
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   
				   				   
				   //echo " <li><a href='#' onclick='LoadPage_Job($totalpages,$category_id);'  title='End-Page -$totalpages'>End</a></li> ";
				   echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=Load_Content_List('$param',$nextpage,'$order1','$rowsperpage_category_job'); title='Next'>Next</a> </li>";
					echo " <li><a href='javascript:void(0);' onclick=Load_Content_List('$param',$totalpages,'$order1','$rowsperpage_category_job'); title='End-Page -$totalpages'>End</a></li> ";
				} 
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->