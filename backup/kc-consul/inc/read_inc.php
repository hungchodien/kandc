<?php 
	/*
		Author: Minh.Nguyen250385@gmail.com
		Company: http://tokyodesignroom.com
	*/
?>
<?php 
	if(!empty($page)):
		switch($page)
			{
				case "404":
				 	include('404/index.php');
				 break;
				 case "about-us":
					include('about-us/index.php');
				break;
				 case "company":
				 	if(isset($_GET['cmd']) && isset($_GET['php_file'])):
						$file_name="company/".$_GET['php_file'].".php";
						if (file_exists($file_name)):
							$csv_file=$_GET['php_file'].".csv";
							include($file_name);
						else:
							include('404/index.php');
						endif;
					else:
						include('404/index.php');
					endif;
				 break;
				 
				case "policy":
					include('policy/index.php');
				break;
				case "sitemap":
					include('sitemap/index.php');
				break;
				case "pickjob":
					include('pickjob/index.php');
				break;

				case "landing":
					include('landing/index.php');
				break;
				/*******************************/
			/*
				case "interview":
					
					include('interview/index.php');
					
				break;
			*/	
			
				case "interview":
					if(isset($_GET['list'])):
						if(isset($_GET['show'])):
							include('interview/detail.php');
						else:
							include('interview/index.php');
						endif;
					else:
						include('interview/index.php');
					endif;
				break;
			
			/*	
				case "interview_demo":
					if(isset($_GET['list'])):
						if(isset($_GET['show'])):
							include('interview/detail.php');
						else:
							include('interview/index_demo.php');
						endif;
					else:
						include('interview/index_demo.php');
					endif;
				break;
			*/	

				case "blog":
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						include('blog/detail_blog.php');
						
					else:
						include('blog/index.php');
					endif;
				break;

				case "job-search":
					include('job-search/index.php');
				break;
				/*******************************/
				case "seminar":
					if(!isset($_GET['views'])):
						include('seminar/index.php');
					else:
						if (!file_exists('seminar/'.$_GET['views'].'.php')) :
							header("Location:".url_root."404.html");
							exit();
						else:
							
							  include('seminar/'.$_GET['views'].'.php');	
							
							echo '<div class="right_content r">';
    									include('inc/slide_bar_blog.php');
    						echo 	'</div>
								</div>';		



	
						endif;
					endif;
				break;
				/******************************/
				case "contact":
					if(!isset($_GET['cmd'])):
					include('contact/index.php');
					else:
					include('contact/complete.php');
					endif;
					
				break;
				/******************************/
				case "career-consultant":
					include('career-consultant/index.php');
				break;
				/*****************End*******************/
				/*****************Begin jobinfo*******************/
				case "jobinfo":
					
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						$cate=$_GET['cate'];
						include('jobinfo/jobinfo_detail.php');
					
					else:
						include('job-search/index.php');
					endif;
				break;
				/*****************End career*******************/
				case "search":
					if(isset($_GET['cmd'])):
						if($_GET['cmd']=="all"):
							include('job-search/index.php');
						else:
						   include('job-search/index.php');
						endif;
					else:
						if(isset($_GET['category_select'])):
							include('ajax/search_content.php');
						else:
							include('ajax/search_content.php');
						endif;
					endif;
				 break;
				/*****************End career*******************/
				case "find":
					if(isset($_GET['cmd'])):
						if($_GET['cmd']=="salary"):
							$salary_check=(int)$_GET['salary_select'];
							if($salary_check != 0):
								include('job-search/salary.php');
							else:
								include('404/index.php');
							endif;
						else:
							include('404/index.php');
						endif;
					else:
						include('404/index.php');
					endif;
				break;
				case "fund":
					if(isset($_GET['cmd'])):
						if($_GET['cmd']=="category"):
							if(isset($_GET['file'])):
								$file_csv=$_GET['file'].".csv";
								include('csv_info/index.php');
							else:
								header("Location:".url_root."404.html");
								exit();
							endif;
						else:
							
							if($_GET['cmd']=="jobinfo"):
								if(isset($_GET['file']) && isset($_GET['sid'])):
									
									$sid=$_GET['sid'];
									$file_csv=$_GET['file'].".csv";
									include('csv_info/detail_job.php');
								else:
									header("Location:".url_root."404.html");
									exit();
								endif;
							else:
								header("Location:".url_root."404.html");
								exit();
							endif;


						endif;
					else:
						header("Location:".url_root."404.html");
						exit();
					endif;
				break;
				/**Begin****************************************/
				case "category":
					if(!isset($_GET['hcm'])):
						if(!isset($_GET['high_class'])):
							if(!isset($_GET['list'])):
								//default: index.php
								include('inc/index.php');
							else:
								$list=(int)$_GET['list'];
								include('jobinfo/jobinfo_category_list.php');
							endif;
						else:
							//include link index.php?page=category&high_class=??
							$high_class=$_GET['high_class'];
							if($high_class=="all"): 
								$Data_high_class_in=To_Get_Data("category"," and id in(
select D.parent_id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' group by D.parent_id
)
or id in(

select D.id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where J.theme like '%ハイクラス%' and D.parent_id is NULL group by D.id
)
and id !=1","id");
			$count_high_class_id_in=$Data_high_class_in['cnt'];
			for($mi=0;$mi<$count_high_class_id_in;$mi++){
				$List_high_class_in = $Data_high_class_in[$mi];
				$id_high_class_in.=$List_high_class_in['id'].",";	
				}
				//echo $id_high_class."<br/>";
				$high_class=substr($id_high_class_in, 0, -1);  
							//$high_class='2,3,4,17,8,9,10,15,16';
							
							endif;
							include('jobinfo/jobinfo_category_list.php');
						endif;
					else:
						//include file link index.php?page=categpory&hcm=??
							$hcm=(int)$_GET['hcm'];
							include('jobinfo/jobinfo_category_list.php');
					endif;
					
				break;
				
				/**End****************************************/
				
				default:
				include('inc/index.php');
			
			}
		
	else: 
		include('inc/index.php');
	endif;
?>