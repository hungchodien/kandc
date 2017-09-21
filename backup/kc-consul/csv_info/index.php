<script type="text/javascript">
	function click_to_textbox(page_id){
		var url_form_action="<?php echo url_root; ?>fund/category/page/"+page_id+"/"+$(".value_hiden_txt").val()+".html";
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
             <li><a href="<?php echo url_root; ?>job-search.html">求人検索</a></li>
           <?php   
		   			if(isset($_GET['file']) && $_GET['file']!=""):
						echo "<li>&nbsp;>&nbsp;</li>";?>
                        <li><a href="<?php echo curPageURL(); ?>">ファンド（PE・VC)</a></li>
                        <?php
						
					else:
						echo "";
					endif;
		    ?>
                
			
           
            
        </ul>
    </div>
</div>


<div class="content clear">
  <div class="left_content l">

    <div id="page_category_name" class="clear" style="margin:0 0 10px 0;">
        <div class="title-page_category" id="title_page_search">
        <h1 class="title-top_category">ファンド（PE・VC)</h1>
        <h2 class="sub-title-top">厳選した<?php if(isset($_GET['salary_select']) && $_GET['salary_select']!=""): echo $_GET['salary_select']; else: echo "";endif;?>ファンド（PE・VC)の求人情報です。</h2>
            <!--<p class="title-top"><?php if(isset($_GET['salary_select']) && $_GET['salary_select']!=""): echo $_GET['salary_select']; else: echo "";endif;?>ファンド（PE・VC)に関する検索結果</p>-->
            <!--<p class="sub-title-top">ヘッドハンターの目から見たとっておきの企業レポート （毎月2回更新）</p>-->
        </div>
        
    </div>

   
 <div class="clear">
    <form method="POST" action="" id="submit_get_post_show" class="page_job_info_search">
    	<input type="hidden" name="search_select_salary" value="<?php echo $_GET['file']; ?>" class="value_hiden_txt" />
    </form>
	<?php 
	  
		
		if($_GET['currentpage']=="" || empty($_GET['currentpage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['currentpage'];
		endif;
		
		 $file_job=url_root."csv_info/".$file_csv;
		
		 $csv = read_CSV($file_job);
		 $row_num=count($csv);
		 if($row_num<=0):
		 	header("Location:".url_root."404.html");
			exit();
		 endif;
		
					$numrows = $row_num;
	  				//echo $numrows;
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
 				$end_for = $offset + $rowsperpage;
	?>



<!--  the start page navi --->
        <div id="page-nav" class="page-nav clear">
        	<div class="search-number-left-text l"> 検索件数 : <?php  echo $numrows; ?>件</div>
            <div class="navi clear r">
                <ul class="clear">
                   <?php 
		//$param="$search_txt";		   		
         $range = 3;
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
			$i=0;
			//$csv
			for($i=$offset;$i<$end_for;$i++):
				$row_list_job=$csv[$i];
				//print_r($row_list_job);
				
				if(!empty($row_list_job)):
			?>
               
           <!--  the start job info control --->
        <div id="related-employ" class="related-employ">
            <div class="related-employ-title clear">
            	<?php $category_id=GetCategoryBy_Job_order($row_list_job[0]); ?>
				<?php 
								if ($row_list_job[1]==1)
								{
									echo " <img src='".url_root_main."img/index/icon-new.png'/>";
									
								}
								if ($row_list_job[1]==0)
								{
									echo "";
								}?>
                 <h2 class="title_s"><?php echo "[".$row_list_job[0]."]"; ?> <a href="javascript:void(0);" onclick="Load_Job(<?php echo $row_list_job[0]; ?>)" target="_blank">
					<?php
	  				if($row_list_job[53]):
						echo $row_list_job[53];
					else:
						echo $row_list_job[22];
					endif; ?>

							</a> </h2>
               
            </div>
            <!--<div style="padding: 20px 0px">
                グローバルでの事業機会が増加している同社で、職種に関係なく、海外拠点を含めた事業戦略の立案から泥臭い実行に関わ りたいという方を歓迎します。
            </div>-->
            <div class="related-employ-duty clear">
                <table class="related-table">
                    <tr>
                        <td class="related-duty-row1"> 勤務地</td>
                        <td class="related-colspan-3"><b><?php echo  $row_list_job[30]; ?><?php echo  $row_list_job[31]; ?></b></td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">想定年収</td>
                        <td class="related-colspan-3"><b>
							<?php 

					$salary_max=$row_list_job[38];
					$salary_min=$row_list_job[37];
					
					if((int)$row_list_job[38] >0): 
						$salary_max=" ～ ".$row_list_job[38]."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_list_job[38] >0):
					 	$salary_min=$row_list_job[37]."万円";
						else:
						$salary_min="-";
						endif;
					if((int)$row_list_job[38] <=700):
								$salary_max=" ～ 700 万円";
								
								$salary_min="";
					 else:  
						  		if((int)$row_list_job[37]<600):
									
									$salary_min="";
								endif;
					endif;
						
					
					
					
					if((int)$row_list_job[35] >0): 
						$age_min=$row_list_job[35];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_list_job[36] >0): 
						$age_max=$row_list_job[36];
						else:
						$age_max="-";
					endif;
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					// echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;	
					 echo $salary_max;	

						?></b>
</td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">職務内容</td>
                        <td class="related-colspan-3">
                            <?php echo $row_list_job[23]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">求めるスキル (必要条件)</td>
                        <td class="related-colspan-3"><?php echo $row_list_job[24]."<br/>".$row_list_job[25]; ?>
                        </td>
                    </tr>
                    
                     <tr>
                        <td class="related-duty-row1">英語レベル</td>
                        <td class="related-colspan-3">
                        	<?php 
								if(!empty($row_list_job[26])):
									echo $row_list_job[26]."&nbsp;."; 
									if(!empty($row_list_job[27])):
										echo "Toeic:&nbsp;".$row_list_job[27];
									endif;
								else:
									echo "------";
								endif;
								?>
                        
                        </td>
                    </tr>
                    
                    
                </table>
               <!--<div class="ct-readmore1 clear readmore_index">
                <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job[0]; ?>/<?php echo $category_id;?>.html" target="_blank">
					 <a href="<?php echo url_root; ?>fund/jobinfo/<?php echo $_GET['file']; ?>/<?php echo $row_list_job[0]; ?>.html" target="_blank">
					<span>詳しく見る</span>
					<span class="next_btn"></span>
					</a>
				</div>-->
                 <div class="tbl_list_job clear">
                	<a target="_blank" class="tbl_entry_clc" href="<?php echo url_root; ?>entry/?entry_id=<?php echo $row_list_job[0]; ?>"><img src="<?php echo url_root; ?>img/entry/job-entry-button.png" /></a>
                 </div>
                
            </div>
        </div>
        <?php 
					endif;
				endfor;
				
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
        	<?php include('inc/notice.php');?>
        </div><!--Div clear-->
        
        
        
   </div><!--left_content-->
   <div class="right_content r"><?php include('inc/slide_bar_job_search.php'); ?></div><!--right_content-->
</div><!--content-->
     
        
