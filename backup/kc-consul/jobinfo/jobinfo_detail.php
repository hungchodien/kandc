<?php 
	$order_id=(int)$sid;
	$cate=(int)$cate;
	$row_job=Job_Show_Detail_id($order_id);

if(empty($row_job)):
		//session_register('Job_404');
		//$_SESSION['Job_404'] =$cate;
		header("location:".url_root."job.html");
		exit();
	endif;

	$Total_job_check = Get_Data("job as A join job_category as B on A.id=B.job_id", " and A.order_id=$order_id", "count(*) as cntt");
		if($Total_job_check['cntt']<=0):
			//session_register('Job_404');
			//$_SESSION['Job_404'] =$cate;
			header("location:".url_root."job.html");
			exit();
		endif;
?>
<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
           <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            
			 <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo url_root; ?>job-search.html" class="home">求人情報</a></li>
            <?php 
				if(empty($parent_idparent_seo_check)):
				?>
                <li>&nbsp;>&nbsp;</li>
                <li><a href="<?php echo url_root; ?>category/list/<?php echo $parent_id_seo_check; ?>.html"><?php echo $parent_name_seo_check; ?> </a></li>
                <?php
				else:
					$Data_job_get_category_parent_seo=To_Get_Data("`category` as `A` join `job_category` as `B` on `A`.`id`=`B`.`category_id`","  and `A`.`parent_id`=$parent_idparent_seo_check  limit 1","`A`.`parent_id`,`A`.`id`,`A`.`name`");
					if($Data_job_get_category_parent_seo['cnt']>0):
					?>
                     <li>&nbsp;>&nbsp;</li>
                	 <li><a href="<?php echo url_root; ?>category/job_group/<?php echo $parent_idparent_seo_check; ?>.html"><?php echo $Data_job_get_category_parent_seo[0]['name']; ?> </a></li>
                    <?php	
					endif;
				?>
                 <li>&nbsp;>&nbsp;</li>
                 <li><a href="<?php echo url_root; ?>category/list/<?php echo $parent_id_seo_check; ?>.html"><?php echo $parent_name_seo_check; ?> </a></li>
                 <?php
				endif;
			?>

			<li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>"> <?php echo "[".$row_job['order_id']."]"; ?> <?php  echo $row_job['job_name']; ?></a></li>
        </ul>
    </div>
</div>

<div id="page_category_name" class="clear">
    <div class="title-page_category clear">
        <h1 class="title-top_category title_job_csv l"><?php echo $row_job['job_name']; ?><!--職種詳細一覧--></span></h1>

        <h2 class="sub-title-top l">厳選した<?php echo $parent_name_seo_check; ?>の求人情報です。</h2>
    </div>
   
</div>


  
  


    <!--  the start job info control --->
    <div id="related-employ" class="related-employ">
        <div class="related-employ-title clear">
            <h2><?php echo "[".$row_job['order_id']."]"; ?> <?php  echo $row_job['job_name']; ?></h2>
				<?php 
					if($row_job['new_flag']==1):
				?>
            			<img src="<?php echo url_root_main; ?>img/index/icon-new.png" alt="新しい求人"/>
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
                    <td><?php echo  $row_job['address_1_prefecture']; ?><?php echo  $row_job['address_1_city']; ?></td>
                    <th>想定年収</th>
                    <td><?php
					$salary_max=$row_job['salary_max'];
					$salary_min=$row_job['salary_min'];
					
					if((int)$row_job['salary_max'] >0): 
						$salary_max=" ～ ".$row_job['salary_max']."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_job['salary_min'] >0): 
						$salary_min=$row_job['salary_min']."万円";
						else:
						$salary_min="-";
					endif;

					if((int)$row_job['salary_max'] <=700):
								$salary_max=" ～ 700 万円";
								$salary_min="";
					 	else:  
						  		if((int)$row_job['salary_min']<600):
									
									$salary_min="";
								endif;
					endif;

					if((int)$row_job['age_min'] >0): 
						$age_min=$row_job['age_min'];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_job['age_max'] >0): 
						$age_max=$row_job['age_max'];
						else:
						$age_max="-";
					endif;
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					 //echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;
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
                        <?php echo $row_job['job_description']; ?>
                    </td>
                </tr>
                <tr>
                    <th>求めるスキル (必要条件)</th>
                    <td><?php echo $row_job['needed_skill']."<br/>".$row_job['desired_skill']; ?></td>
                </tr>
                <tr>
                    <th>英語レベル</th>
                    <td><?php 
					if(!empty($row_job['english_level'])):
						echo $row_job['english_level']."&nbsp;."; 
						if(!empty($row_job['toeic'])):
							echo "Toeic:&nbsp;".$row_job['toeic'];
						endif;
					else:
						echo "------";
					endif;
					?></td>
                </tr>
                <!--<tr>
                    <th>求める人物像</th>
                    <td><?php echo $row_job['desired_person']; ?></td>
                </tr>
                <tr>
                    <th>活かせる経験</th>
                    <td><?php echo $row_job['experience']; ?></td>
                </tr>
                <tr>
                    <th>学歴</th>
                    <td><?php echo $row_job['education']; ?></td>
                </tr>
                <tr>
                    <th>募集背景</th>
                    <td><?php echo $row_job['reason']; ?></td>
                </tr>-->
            </table>
        </div>

<div style="background:#f2f2f2; padding:10px; text-align:center; font-weight:bold; margin:20px 0;">非公開求人も含まれている為、WEB掲載の情報は限られてしまいますが、面談時に詳しく説明させていただきます。</div>


       <!--- the start Company Info --->
       <!--  <div class="jobinfo-companyinfo">企業情報</div>
        <div class="related-employ-duty clear">
            <table>
                <tr>
                    <th>事業内容</th>
                    <td>
                       <?php //echo $row_job['job_description']; 
					   	echo $row_job['company_info'];
					   ?>
                    </td>
                </tr>
                <tr>
                    <th>設立年月</th>
                    <td>
						<?php 
						if((int)$row_job['founded_year']>0):
							echo $row_job['founded_year']."年";
							else:
							echo "-"; 
						endif;
					?><?php 
						if((int)$row_job['founded_month']>0):
							echo $row_job['founded_month']."月"; 
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
					$row_capital=(int)$row_job['capital'];
					if($row_capital>0):
						 echo number_format($row_job['capital'])."万円 "; 
					else:
					echo "---";
					endif;
					 //echo number_format($row_job['capital']); 
					 
					 ?>
                     
                     
                    </td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td><?php $count_employee_conver= (int)$row_job['employee_count'];
						if($count_employee_conver>0):
						echo $count_employee_conver."&nbsp;人";
						else:
						echo "---";
						endif;
					 ?> </td>
                </tr>
                <tr>
                    <th>本社所在地</th>
                    <td><?php echo $row_job['company_address_prefecture']; ?></td>
                </tr>
                </tr>
            </table>
        </div>-->
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
					<a class="button-consul-click_entry consul_entry_domain" href="<?php echo url_root; ?>entry/?entry_id=<?php echo $row_job['order_id']; ?>" target="_blank">
						Entry form
					</a>
				</div>
				
				<div class="button-consul-entry_easy l">
					<a class="button-consul-click_entry_easy consul_entry_easy_domain" href="<?php echo url_root; ?>entry_easy/?entry_id=<?php echo $row_job['order_id']; ?>"target="_blank">
					Entry Easy form
					</a>
            </div>
          </div>  
        </div>
        <!--- the end Consultant form --->



    </div>
    <!--  the end job info control --->

    <!--- the start random display category  --->
    <div id="random-category" class="random-category">

        <!--    list category 1   -->
        <div class="list-category">
            <div class="jobinfo-companyinfo-random">この求人と同じ職種の求人</div>
            <div class="list">
            	
                <?php 
					$query_list_category=ListJob_ByCategory_other_order($cate,$order_id,10);
					while($row_list_other=mysql_fetch_array($query_list_category)):
				?>
                <div class="icon-line clear">
                    <div class="icon-line1"><img alt="" src="<?php echo url_root_main; ?>img/features/icon-li.png" alt="リスト"></div>
                    <div class="icon-line2 clear">
                        <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_other['order_id']; ?>/<?php echo $row_list_other['category_id'].".html"; ?>"><?php echo $row_list_other['job_name']; ?></a>
                    </div>
                </div>
                <?php 
					endwhile;
				?>
               
            </div>
        </div>

            <!--    list category 2   -->
      
    </div>
    <!--- the end random display category  --->


