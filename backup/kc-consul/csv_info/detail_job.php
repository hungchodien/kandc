<?php 
	
		$sid=(int)$sid;
	 	$file_job=url_root."csv_info/".$file_csv;
		 $csv = read_CSV($file_job);
		 $row_num=count($csv);
		 //echo "aaaa";
		 // echo $file_job;
		// print_r($csv);
		 //echo $row_num."aaa";
		//	exit();
		 if($row_num<=0):
		 	header("Location:".url_root."404.html");
			exit();
		 endif;
		 $i=0;
			//$csv
		for($i=0;$i<$row_num;$i++):
			$row_job=$csv[$i];
			$order_id=$row_job[0];
			if($order_id==$sid):
			//echo $order_id."aaa";
			//exit();
			
?>
<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
           <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
             <li>&nbsp;>&nbsp;</li>
             <li><a href="<?php echo url_root; ?>job-search.html">求人検索</a></li>
           <?php   
		   			if(isset($_GET['file']) && $_GET['file']!=""):
						echo "<li>&nbsp;>&nbsp;</li>";?>
                        <li><a href="<?php echo url_root; ?>only-job/list/page/1/<?php echo $_GET['file']; ?>.html">ファンド（PE・VC)</a></li>
                        <?php
						
					else:
						echo "";
					endif;
		    ?>
             <li>&nbsp;>&nbsp;</li> 
             <li><a href="<?php echo curPageURL(); ?>"><?php echo $row_job[22]; ?></a></li>  
        </ul>
    </div>
</div>

<div id="page_category_name" class="clear">
    <div class="title-page_category clear">
        <h1 class="title-top_category title_job_csv"><?php echo $row_job[22]; ?><!--職種詳細一覧--></span></h1>
 <h2 class="sub-title-top">厳選した<?php if(isset($_GET['salary_select']) && $_GET['salary_select']!=""): echo $_GET['salary_select']; else: echo "";endif;?>ファンド（PE・VC)の求人情報です。</h2>
        
    </div>
   
</div>


  
  


    <!--  the start job info control --->
    <div id="related-employ" class="related-employ">
        <div class="related-employ-title clear">
            <h2><?php echo "[".$row_job[0]."]"; ?> <?php  echo $row_job[22]; ?></h2>
				<?php 
					if($row_job[1]==1):
				?>
            			<img src="<?php echo url_root_main; ?>img/index/icon-new.png"/>
					<?php 
						endif;
					?>
        </div>
       <!-- <div class="jobinfo-info">
           <?php echo  $row_job['company_info']; ?>
        </div>-->

        <div class="related-employ-duty clear">
            <table>
                <tr>
                    <th> 勤務地</th>
                    <td><?php echo  $row_job[30]; ?><?php echo  $row_job[31]; ?></td>
                    <th>想定年収</th>
                    <td><?php
					$salary_max=$row_job[38];
					$salary_min=$row_job[37];
					
					if((int)$row_job[38] >0): 
						$salary_max=" ～ ".$row_job[38]."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_job[37] >0): 
						$salary_min=$row_job[37]."万円";
						else:
						$salary_min="-";
					endif;

					if((int)$row_job[38] <=700):
								$salary_max=" ～ 700 万円";
								$salary_min="";
					 	else:  
						  		if((int)$row_job[37]<600):
									
									$salary_min="";
								endif;
					endif;

					if((int)$row_job[35] >0): 
						$age_min=$row_job[35];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_job[36] >0): 
						$age_max=$row_job[36];
						else:
						$age_max="-";
					endif;
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					// echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;
					 echo $salary_max;
					 ?></td>
                </tr>
            </table>
        </div>

        <div class="jobinfo-raised">募集要項</div>
        <div class="related-employ-duty clear">
            <table>
                <tr>
                    <th>職務内容</th>
                    <td>
                        <?php echo $row_job[23]; ?>
                    </td>
                </tr>
                <tr>
                    <th>求めるスキル (必要条件)</th>
                    <td><?php echo $row_job[24]; ?></td>
                </tr>
                <tr>
                    <th>英語レベル</th>
                    <td><?php if(!empty($row_job[26])):
						echo $row_job[26]."&nbsp;."; 
						if(!empty($row_job[27])):
							echo "Toeic:&nbsp;".$row_job[27];
						endif;
					else:
						echo "----";
					endif;
					?></td>
                </tr>
                <!--<tr>
                    <th>求める人物像</th>
                    <td><?php echo $row_job[28]; ?></td>
                </tr>
                <tr>
                    <th>活かせる経験</th>
                    <td><?php echo $row_job[29]; ?></td>
                </tr>
                <tr>
                    <th>学歴</th>
                    <td><?php echo $row_job[34]; ?></td>
                </tr>
                <tr>
                    <th>募集背景</th>
                    <td><?php echo $row_job[39]; ?></td>
                </tr>-->
            </table>
        </div>
		

		<div style="background:#f2f2f2; padding:10px; text-align:center; font-weight:bold; margin:20px 0;">非公開求人も含まれている為、WEB掲載の情報は限られてしまいますが、面談時に詳しく説明させていただきます。</div>

        <!--- the start Company Info --->
       <!-- <div class="jobinfo-companyinfo">企業情報</div>
        <div class="related-employ-duty clear">
            <table>
                <tr>
                    <th>事業内容</th>
                    <td>
                       <?php //echo $row_job['job_description']; 
					   	echo $row_job['42'];
					   ?>
                    </td>
                </tr>
                <tr>
                    <th>設立年月</th>
                    <td>
						<?php 
						if((int)$row_job[44]>0):
							echo $row_job[44]."年";
							else:
							echo "-"; 
						endif;
					?><?php 
						if((int)$row_job[45]>0):
							echo $row_job[45]."月"; 
							else:
							echo "-";
						endif;
					?>


</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>
					<?php 
					$row_capital=(int)$row_job[46];
					if($row_capital>0):
						 echo number_format($row_job[46])."万円 "; 
					else:
					echo "---";
					endif;?>
                     
                     
                    </td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td><?php $count_employee_conver= (int)$row_job[47];
						if($count_employee_conver>0):
						echo $count_employee_conver."&nbsp;人";
						else:
						echo "---";
						endif;
					 ?>  </td>
                </tr>
                <tr>
                    <th>本社所在地</th>
                    <td><?php echo $row_job[48]; ?></td>
                </tr>
                </tr>
            </table>
        </div> -->
        <!--- the end Company Info --->

        <!--- the start consultant form --->
        <!--<div class="jobinfo-consultantform">コンサルから一言</div>-->
        <div class="related-employ-duty clear">
        	<!--<div class="clear">
            <table class="related-table">
                <tr>
                    <td class="related-duty-row1">
                        <div class="jobinfo-icon-consul"><img src="img/jobinfo/icon_kudo.png" /></div>
                        <div>担当コンサルタント 松尾 匡起</div>
                    </td>
                    <td class="jobinfo-consul">
                        経営の一角として参画頂くポジションです
                    </td>
                </tr>

            </table>
            </div>-->
		<div class="entry_group_job clear">
				<div class="button-consul-entry l" style="margin-right:10px;">
					<a class="button-consul-click_entry consul_entry_domain" href="<?php echo url_root; ?>entry/?entry_id=<?php echo $row_job[0]; ?>" target="_blank">
						Entry form
					</a>
				</div>
				
				<div class="button-consul-entry_easy l">
					<a class="button-consul-click_entry_easy consul_entry_easy_domain" href="<?php echo url_root; ?>entry_easy/?entry_id=<?php echo $row_job[0]; ?>"target="_blank">
					Entry Easy form
					</a>
            </div>
          </div>  
        </div>
        <!--- the end Consultant form --->



    </div>
    <!--  the end job info control --->

<?php 
		
		endif;
	endfor;
?>


    <!--- the start random display category  --->
    <div id="random-category" class="random-category">

        <!--    list category 1   -->
        <div class="list-category">
            <div class="jobinfo-companyinfo-random">この求人と同じ職種の求人</div>
            <div class="list">
            	
                <?php 
					$m=0;
					//$csv
					for($m=0;$m<$row_num;$m++):
						$row_job_re=$csv[$m];
						$order_id_re=$row_job_re[0];
						if($order_id_re!=$sid):
					//$query_list_category=ListJob_ByCategory_other_order($cate,$order_id,10);
					//while($row_list_other=mysql_fetch_array($query_list_category)):
				?>
                <div class="icon-line clear">
                    <div class="icon-line1"><img alt="リスト" src="<?php echo url_root_main; ?>img/features/icon-li.png" /></div>
                    <div class="icon-line2 clear">
                      <a href="<?php echo url_root; ?>fund/jobinfo/<?php echo $_GET['file']; ?>/<?php echo $order_id_re; ?>.html" target="_blank">
						 <?php echo $row_job_re[22]; ?>
                      </a>
                    </div>
                </div>
                <?php 
						endif;
					endfor;
				?>
               
            </div>
        </div>

            <!--    list category 2   -->
      
    </div>
    <!--- the end random display category  --->


