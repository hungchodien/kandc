<script type="text/javascript">
	function click_to_textbox(page_id){
		if($(".value_hiden_selected").length<=0){
		var url_form_action="<?php echo url_root; ?>search/0/page/"+page_id+"/"+$(".value_hiden_txt").val();
		}else
		{
		var url_form_action="<?php echo url_root; ?>search/"+$(".value_hiden_selected").val()+"/page/"+page_id+"/"+$(".value_hiden_txt").val();
		}

      // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show").attr("action",url_form_action);
      $("#submit_get_post_show").submit();
	}
</script>

<script type="text/javascript">
		jQuery.fn.highlight = function(pat) {
		 function innerHighlight(node, pat) {
		  var skip = 0;
		  if (node.nodeType == 3) {
		   var pos = node.data.toUpperCase().indexOf(pat);
		   if (pos >= 0) {
		    var spannode = document.createElement('span');
		    spannode.className = 'highlight';
		    var middlebit = node.splitText(pos);
		    var endbit = middlebit.splitText(pat.length);
		    var middleclone = middlebit.cloneNode(true);
		    spannode.appendChild(middleclone);
		    middlebit.parentNode.replaceChild(spannode, middlebit);
		    skip = 1;
		   }
		  }
		  else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
		   for (var i = 0; i < node.childNodes.length; ++i) {
		    i += innerHighlight(node.childNodes[i], pat);
		   }
		  }
		  return skip;
		 }
		 return this.length && pat && pat.length ? this.each(function() {
		  innerHighlight(this, pat.toUpperCase());
		 }) : this;
		};
		
		jQuery.fn.removeHighlight = function() {
		 return this.find("span.highlight").each(function() {
		  this.parentNode.firstChild.nodeName;
		  with (this.parentNode) {
		   replaceChild(this.firstChild, this);
		   normalize();
		  }
		 }).end();
		};
</script>
<script type="text/javascript">
	$( document ).ready(function() {
			$( ".related-table td.related-colspan-3" ).each(function( index ) {
				$(this).removeHighlight().highlight('<?php echo $_GET['s']; ?>');
			});
	});
</script>
<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
           <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php  echo url_root."search/".$_GET['category_select']."/page/1/"; ?>"><?php 
					$id_category=(int)$_GET['category_select']; 
					//echo $id_category;
					if($id_category==0):
						echo "All";
					else:
						$query_list_name=HCMCategory_Name($id_category);
						echo $query_list_name['name'];
					endif;
			
			?></a></li>
            
           <?php   
		   			if(isset($_GET['s']) && $_GET['s']!=""):
						echo "<li>&nbsp;>&nbsp;</li>";?>
                        <li><a href="<?php echo curPageURL(); ?>"><?php echo $_GET['s']; ?></a></li>
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
            <p class="title-top"><?php if(isset($_GET['s']) && $_GET['s']!=""): echo $_GET['s']; else: echo "";endif;?>に関する検索結果</p>
            <!--<p class="sub-title-top">ヘッドハンターの目から見たとっておきの企業レポート （毎月2回更新）</p>-->
        </div>
        
    </div>

   
 <div class="clear">
    <form method="POST" action="" id="submit_get_post_show" class="page_job_info_search">
    	<input type="hidden" name="search" value="<?php echo $_GET['s']; ?>" class="value_hiden_txt" />
        <input type="hidden" name="category_select" value="<?php echo $_GET['category_select']; ?>" class="value_hiden_selected" />
    </form>
	<?php 
	  
		
		//echo $search_txt;
		
		if(isset($_GET['category_select']) && (int)$_GET['category_select']!=0):
			
				$category_select=(int)$_GET['category_select'];
				//echo $_GET['category_select']."<br/>";
				//echo $category_select."<br/>";
				if(strpos($_GET['category_select'],'-hcm') == false):
					//echo "aaaaaaaaa";
					$where_total_job .= "and (`C`.`category_id` in ($category_select) or `D`.`id` in (select `id` from `category` where `parent_id` in ($category_select)))";
				else:
					//echo "bbb<br/>";
					$where_total_job .= "and `J`.`salary_max` >=1000 and (`C`.`category_id` in ($category_select) or `D`.`id` in (select `id` from `category` where `parent_id` in ($category_select)))";
				endif;
		else:
			$category_select=0;
			$where_total_job .= "";
		endif;
	
		
		if($_GET['currentpage']=="" || empty($_GET['currentpage'])):
		$currentpage=1;
		else:
		$currentpage=(int)$_GET['currentpage'];
		endif;
		
		
		 if(isset($_GET['s']) && $_GET['s']!=""):
	 		 $search_txt=htmlspecialchars($_GET['s']);
	  	 
	 	
		if(strpos($search_txt," ") || strpos($search_txt,"　")) {
			$search_txt = mb_convert_kana($search_txt, "s", "UTF-8");
			$q_row = explode(" ",$search_txt);
		}
		$count_search_ground=count($q_row);
		$where_total_job .="and (";
				
				if($count_search_ground > 1):
					//**************
			/*		
			$cnt = 0;
			foreach($q_row as $val) {
				if($cnt > 0) {
					$where_total_job .= " and J.job_name like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.job_name like '%" . $val . "%'";
				}
				$cnt++;
			}
			*/
			
			$cnt = 0;
			foreach($q_row as $val) {
				if($cnt > 0) {
					$where_total_job .= " and J.job_title like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.job_title like '%" . $val . "%'";
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
					$where_total_job .= " and J.address_1_prefecture like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.address_1_prefecture like '%" . $val . "%'";
				}
				$cnt++;
			}
			/*
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
			*/
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
					$where_total_job .= " and J.address_1_city like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.address_1_city like '%" . $val . "%'";
				}
				$cnt++;
			}
			
			$cnt = 0;
			$where_total_job .= " or";
			foreach($q_row as $val) {
				if($cnt > 0) {
					$where_total_job .= " and J.english_level like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.english_level like '%" . $val . "%'";
				}
				$cnt++;
			}
			
			$cnt = 0;
			$where_total_job .= " or";
			foreach($q_row as $val) {
				if($cnt > 0) {
					$where_total_job .= " and J.toeic like '%" . $val . "%'";
				} else {
					$where_total_job .= " J.toeic like '%" . $val . "%'";
				}
				$cnt++;
			}
	      $where_total_job .=")";
		$Count_Job_Search=Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`",$where_total_job, "count(DISTINCT J.order_id) as cntt");
		
		//$count_job_num= "select Count(*) as `Count_job` from job  join  `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`";
		$numrows = $Count_Job_Search['cntt'];
		//echo $numrows;
		//echo $where_total_job;
			//**************************************************************************
		else:
			if($category_select==0):
				$where_total_job_new="  and (J.order_id like '%" . $search_txt . "%'  or J.job_description like '%" . $search_txt . "%' or J.address_1_prefecture like '%" . $search_txt . "%' or  J.needed_skill like '%" . $search_txt . "%' or J.address_1_city like '%" . $search_txt . "%' or J.english_level like '%" . $search_txt . "%' or J.toeic like '%" . $search_txt . "%' or J.job_title like '%" . $search_txt . "%')";
		$Count_Job_Search=Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`",$where_total_job_new, "count(DISTINCT `J`.`order_id`) as cntt");
		$numrows = $Count_Job_Search['cntt'];
			else:
				if(strpos($_GET['category_select'],'-hcm') == false):
					$where_total_job_new=" and (`C`.`category_id` in ($category_select) or `D`.`id` in (select `id` from `category` where `parent_id` in ($category_select))) and (J.order_id like '%" . $search_txt . "%' or J.job_description like '%" . $search_txt . "%' or J.company_info like '%" . $search_txt . "%' or  J.needed_skill like '%" . $search_txt . "%' or J.desired_skill like '%" . $search_txt . "%' or J.desired_person like '%" . $search_txt . "%' or J.experience like '%" . $search_txt . "%')";
				else:
					$where_total_job_new=" and `J`.`salary_max` >=1000 and (`C`.`category_id` in ($category_select) or `D`.`id` in (select `id` from `category` where `parent_id` in ($category_select))) and (J.order_id like '%" . $search_txt . "%' or  J.job_description like '%" . $search_txt . "%' or J.company_info like '%" . $search_txt . "%' or  J.needed_skill like '%" . $search_txt . "%' or J.desired_skill like '%" . $search_txt . "%' or J.desired_person like '%" . $search_txt . "%' or J.experience like '%" . $search_txt . "%')";
				endif;
				
		$Count_Job_Search=Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`",$where_total_job_new, "count(DISTINCT `J`.`order_id`) as cntt");
		$numrows = $Count_Job_Search['cntt'];
			endif;
			
		
		endif;
		
		
		
		
	   else:
	   	//ko ton tai $_GET['s'];
	   		$Count_Job_Search=Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`",$where_total_job, "count(DISTINCT `J`.`order_id`) as cntt");
		
		//$count_job_num= "select Count(*) as `Count_job` from job  join  `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id`";
			$numrows = $Count_Job_Search['cntt'];
	   endif; 
	  //echo $where_total_job_new;
		//$numrows=Count_ListJob_ByCategory_search($search_txt);	
		
		//echo $where_total_job;
					$rowsperpage =$rowsperpage_category_job;
					//$rowsperpage=2;
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
        <div id="page-nav" class="page-nav clear">
          	<div class="search-number-left-text l"> 検索件数 : <?php  echo $numrows; ?>件</div>
            <div class="navi clear r">
                <ul class="clear">
                   <?php 
		//$param="$search_txt";		   		
         $range = 2;
		if ($currentpage > 1)
		{
			$prevpage = $currentpage - 1;
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>3)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==3)	
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
				
			if(isset($_GET['s']) && $_GET['s']!=""):
			/////////////////////////////////////////////////
				if($count_search_ground > 1):
						$Data_job_search = To_Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`", $where_total_job." group by `J`.`order_id` order by `J`.`listed_timestamp` desc limit {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`,`J`.`consultant_comment`,`J`.`job_title`");
	
				else:
				//echo $where_total_job_new."<br/>";	
		$Data_job_search = To_Get_Data(" `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`", $where_total_job_new." group by `J`.`order_id` order by `J`.`listed_timestamp` desc limit {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`,`J`.`consultant_comment`,`J`.`job_title`");
				endif;
			
			//////////////////////////////////////////////////
			else:
				$Data_job_search = To_Get_Data("`job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id`", $where_total_job." group by `J`.`order_id` order by `J`.`listed_timestamp` desc limit {$offset},{$rowsperpage}","`J`.`order_id`,`J`.`id`,`C`.`category_id`, `J`.`job_description`,`J`.`job_name`,`J`.`age_min`,`J`.`age_max`,`J`.`salary_min`,`J`.`salary_max`,`J`.`address_1_prefecture`,`J`.`address_1_city`,`J`.`new_flag`,`J`.`needed_skill`,`J`.`desired_skill`,`J`.`consultant_comment`,`J`.`job_title`");
			
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
				<?php 
								if ($row_list_job['new_flag']==1)
								{
									echo " <img src='".url_root_main."img/index/icon-new.png'/>";
								}
								if ($row_list_job['new_flag']==0)
								{
									echo "";
								}?>
                <h2 class="title_s"><?php echo "[".$row_list_job['order_id']."]"; ?> 
				<?php  
	  				if($row_list_job['job_title']):
						echo $row_list_job['job_title'];
					else:
						echo $row_list_job['job_name'];
					endif; ?>
				<?php //echo $row_list_job['job_name']; ?>
                  
                </h2>
              
               
            </div>
           <?php /*?><?php if(mb_strlen($row_list_job['consultant_comment']) > 68): ?>
            <div class="clear comment_consultant_group" style="margin:0px 0px 0px 0px">
        		<div class="clear comment_consultant_title" style="font-weight:bold;">コンサルタントからのおすすめポイント</div>
           		<div class="clear comment_consultant_content" style="margin:5px 0px 10px 0px"><?php echo $row_list_job['consultant_comment']; ?>
                </div>
        	</div>
			<?php endif; ?><?php */?>
            
            <div class="related-employ-duty clear">
                <table class="related-table">
                    <tr>
                        <td class="related-duty-row1"> 勤務地</td>
                        <td class="related-colspan-3"><?php echo  $row_list_job['address_1_prefecture']; ?><?php echo  $row_list_job['address_1_city']; ?></td>
                   </tr>
                   <tr>
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
                        <td class="related-colspan-3">
                            <?php echo $row_list_job['job_description']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">求めるスキル (必要条件)</td>
                        <td class="related-colspan-3"><?php echo $row_list_job['needed_skill']."<br/>".$row_list_job['desired_skill']; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="related-duty-row1">英語レベル</td>
                        <td class="related-colspan-3">
                        	<?php 
								if(!empty($row_list_job['english_level'])):
									echo $row_list_job['english_level']."&nbsp;."; 
									if(!empty($row_list_job['toeic'])):
										echo "Toeic:&nbsp;".$row_list_job['toeic'];
									endif;
								else:
									echo "------";
								endif;
								?>
                        
                        </td>
                    </tr>
                    
                </table>
                <!--<div class="ct-readmore1 clear readmore_index">
                    <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job['order_id']; ?>/<?php echo $row_list_job['category_id'].".html"; ?>" target="_blank">
					<span>詳しく見る</span>
					<span class="next_btn"></span>
					</a>
					
                </div>-->
                
                <div class="tbl_list_job clear">
                	<a target="_blank" class="tbl_entry_clc" href="<?php echo url_root; ?>entry/?entry_id=<?php echo $row_list_job['order_id']; ?>"><img src="<?php echo url_root; ?>img/entry/job-entry-button.png" /></a>
                </div>
                
                
                
            </div>
        </div>
        <?php 
				endfor;
				else:
				?>
                <div class="jobinfo-news error_search_txt" id="job-news">
                	<h3 class="not_found_search">一致する検索結果はありませんでした。</h3>
                    <p class="not_found_search_txt">※<a href="<?php echo url_root; ?>entry/" target="_blank">エントリー</a>いただいた方には、webサイト上では公開していない「非公開求人」もご紹介しております。また弊社webサイトでは求人情報内に求人企業名は掲載しておりません。<br />
<a href="<?php echo url_root_main; ?>features/client_list.php" target="_blank">こちら</a>から紹介先一覧の一部をご覧いただけますので、ご興味がある企業がございましたら、ぜひ<a href="<?php echo url_root; ?>entry/" target="_blank">エントリー</a>ください。</p>
            	</div>
                <?php include('inc/404_category_search.php'); ?>
                    <script language="javascript">
                    		$(document).ready(function(){
									$('.page-nav').each(function(){
											$(this).hide();
											
										});
									$('#page_category_name').hide();
								});
                    </script>
                <?php 
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
			   
			  echo "<li class='next_btn'> <a href='javascript:void(0);' onclick=click_to_textbox($prevpage); title='Prev'>&lt;前へ</a> </li>";
			  
			if($prevpage>3)
			{
			echo "<li><a href='javascript:void(0);' onclick=click_to_textbox(1); title='First Page'>1..</a></li> ";
			}
			else
			{
				if($prevpage==3)	
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
	
				   ?>
                </ul>
            </div>
        </div>
        <!--  the end page navi --->
      </div>
      
      
 </div><!--left_content-->
 <div class="right_content r"><?php include('inc/slide_bar_job_search.php'); ?></div><!--right_content-->
 </div><!--content-->
        
        
