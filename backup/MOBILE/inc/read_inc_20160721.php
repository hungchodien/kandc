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
				case "msid":
					if(isset($_GET['pc_checked']) && !empty($_GET['pc_checked'])):
						if(isset($_SESSION['PCchecked'])):
							session_start();
							session_unregister('PCchecked');
							session_unset();
							session_destroy();
						endif;
						$url_drict=urldecode(md5_decrypt($_GET['url']));

						header("location:".$url_drict);
						//header("location:".url_root);
						exit();
					endif;
				break;
				case "job-search":
					include('ajax/job_search.php');
				break;
				case "seminar":
					include('seminar/index.php');
				break;
				case "demo":
					if(!isset($_SESSION['demoSS'])):
						session_start();
						session_register('demoSS');
						$_SESSION['demoSS']=$_GET['page'].strtotime(date('Y-m-d H:i:s'));
						header('Location:'.url_root);
						exit();
				     endif;
				break;
			

			    case "search":
					if(isset($_GET['cmd'])):
						if($_GET['cmd']=="all"):
							include('ajax/search_all_content.php');
						else:
						   include('inc/index.php');
						endif;
					else:
						if(isset($_GET['category_select'])):
							include('ajax/search_content.php');
						else:
							include('ajax/search_content.php');
						endif;
					endif;
				 break;
				 case "pick-up":
				 	include('pick_up/index.php');
				 break;
			   case "publicity":
					if(!isset($_GET['sid'])):
					 include('publicity/index.php');
					else:
					$sid=$_GET['sid'];
					include('publicity/publicity_detail.php');
					endif;
				break;

				case "404":
				 	include('404/index.php');
				 break;
				 case "job-404":
				 	include('job-404/index.php');
				break;

				case "feature":
					include('features/index.php');
				break;
				
				case "mailmagazine":
					if(isset($_GET['sid']) && !isset($_GET['cmd'])):
							$sid=$_GET['sid'];
							$cmd_cat=$_GET['cat'];
							include('mailmagazine/detail.php');
					else:
						if(isset($_GET['cat'])):
							$cmd_cat=$_GET['cat'];
							include('mailmagazine/category.php');
						else:
							include('mailmagazine/index.php');
						endif;
					endif;
				break;
				
				case "mailmagazine1":
					include('mailmagazine/index.php');
				break;
				/**********Consultan*********/
				case "consultant":
					if(isset($_GET['sid'])){
						include('consultant/content.php');
					}else{
						include('consultant/index.php');
						}
				break;
				/*****************End*******************/
				case "documents":
					include('document/index.php');
				break;
				/**********Consultan*********/
				case "interview":
					if(isset($_GET['sid'])):
							if(isset($_GET['cmd'])):
								if($_GET['cmd']=="employee"):
									$sid=$_GET['sid'];
									include('interviews/related-employment.php');
								else:
									if($_GET['cmd']=="category"):
										$sid=$_GET['sid'];
										include('interviews/index.php');
									else:
										//not found
										if($_GET['cmd']=="jobinfo"):
											if($_GET['order_id']):
													$sid=$_GET['sid'];
													$order_id=$_GET['order_id'];
													include('interviews/job_csv.php');
												endif;
										else:
											//not found
										
										endif;
										
									endif;
								endif;
								
							else:
								$sid=$_GET['sid'];
								include('interviews/interview_detail.php');
								//include('interviews/related-employment.php');
							endif;
					 else:
						include('interviews/index.php');
					endif;
				break;
				/*****************End*******************/


				case "company-interviews":
					if(isset($_GET['cname'])):
						if(isset($_GET['cmd'])):
							if($_GET['cmd']=="employee"):
								$tag=$_GET['cname'];
								include('company_interview/csv_detail.php');
							else:
								header("location:".url_root."404.html");
								exit();
							endif;
						else:
							if(isset($_GET['subject'])):
								$subject=$_GET['subject'];
								$tag=$_GET['cname'];
								include('company_interview/single.php');
							else:
								$tag=$_GET['cname'];
								include('company_interview/single.php');
							endif;
							
						endif;
					else:
						include('company_interview/index.php');
					endif;
				
				break;





				/**********Process*********/
				case "process":
					include('process/index.php');
				break;
				/*End  **************************************/
				/*****************Begin News*******************/
				case "news":
					if(!isset($_GET['sid'])):
					 include('news/index.php');
					else:
					$sid=$_GET['sid'];
					include('news/news_detail.php');
					endif;
				break;
				/*****************End*******************/
				/*****************Begin News*******************/
				case "news-release":
					if(!isset($_GET['sid'])):
					 include('news_release/index.php');
					else:
					$sid=$_GET['sid'];
					include('news_release/detail.php');
					endif;
				break;
				/*****************End*******************/
				/*****************Begin Career-up*******************/
				case "career_up":
					if(!isset($_GET['sid'])):
					 include('careerup/index.php');
					else:
						if($_GET['cmd']=="consultant"):
							$sid=$_GET['sid'];
							include('careerup/consultant.php');
						else:
								if($_GET['cmd']=="category"):
									$sid=$_GET['sid'];
									include('careerup/index.php');
								else:
									$sid=$_GET['sid'];
									include('careerup/post_detail.php');
									
								endif;
						endif;
					
					endif;
				break;
				/*****************End Career-up*******************/
				
				/*****************Begin feature_jobs*******************/

			/*	case "feature-jobs":
					if(!isset($_GET['sid'])):
						 include('feature_jobs/index.php');
					else:
						if(isset($_GET['cmd'])):
						
							if($_GET['cmd']=="category"):
								$sid=$_GET['sid'];
								include('feature_jobs/index.php');
								//not category direct to index
							else:
								if($_GET['cmd']=="employee"):
									$sid=$_GET['sid'];
									include('feature_jobs/index.php');
									//not employee dricect to in
								else:
								//not action
									if($_GET['cmd']=="jobinfo"):
											if($_GET['order_id']):
													$sid=$_GET['sid'];
													$order_id=$_GET['order_id'];
													include('feature_jobs/feature_jobs_csv.php');
											   endif;
										else:
												if($_GET['cmd']=="consultant"):
													$sid=$_GET['sid'];
													include('feature_jobs/index.php');
													//not action with consultant
												else:
													//not found
												
												endif;
											
										
										endif;
								
								endif;
							endif;
						else:
							   $sid=$_GET['sid'];
							   include('feature_jobs/feature_jobs_detail.php');
						endif;
					
					endif;
				break;*/

				/*****************End feature_jobs*******************/


				/*****************Begin hunters_eye*******************/
				case "hunter_eye":
					if(!isset($_GET['sid'])):
						 include('hunters_eye/index.php');
					else:
						if(isset($_GET['cmd'])):
						
							if($_GET['cmd']=="category"):
								$sid=$_GET['sid'];
								include('hunters_eye/index.php');
							else:
								if($_GET['cmd']=="employee"):
									$sid=$_GET['sid'];
									include('hunters_eye/related-employment.php');
								else:
								//not action
									if($_GET['cmd']=="jobinfo"):
											if($_GET['order_id']):
													$sid=$_GET['sid'];
													$order_id=$_GET['order_id'];
													include('hunters_eye/job_csv.php');
												endif;
										else:
												if($_GET['cmd']=="consultant"):
													$sid=$_GET['sid'];
													include('hunters_eye/consultant.php');
												else:
													//not found
												
												endif;
											
										
										endif;
								
								endif;
							endif;
						else:
							   $sid=$_GET['sid'];
								include('hunters_eye/hunters_eye_detail.php');
						endif;
					
					endif;
				break;
				/*****************End hunters_eye*******************/
				/*****************Begin career*******************/
				case "career":
					include('career/index.php');
				break;
				/*****************End career*******************/
				/*****************Begin jobinfo*******************/
				case "jobinfo":
					
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						$cate=$_GET['cate'];
						include('jobinfo/jobinfo_detail.php');
					
					else:
						include('jobinfo/index.php');
					endif;
				break;
				/*****************End career*******************/

				/*****************Begin jobinfo*******************/
				case "jobinfo1":
					
					if(isset($_GET['sid'])):
						$sid=$_GET['sid'];
						$cate=$_GET['cate'];
						include('jobinfo1/jobinfo_detail.php');
					
					else:
						include('jobinfo1/index.php');
					endif;
				break;
				/*****************End career*******************/


				/*****************Begin Category*******************/
				case "category":
					if(!isset($_GET['hcm'])):
						if(!isset($_GET['high_class'])):
							if(!isset($_GET['list'])):
								//default: index.php
								header("Location:".url_root."404.html");
								exit();
							else:
								$list=(int)$_GET['list'];
								include('jobinfo/jobinfo_category_list.php');
							endif;
						else:
							//include link index.php?page=category&high_class=??
							$high_class=$_GET['high_class'];
							if($high_class=="all"): 
								$Data_high_class_in=To_Get_Data("category"," and id in(
select D.parent_id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where `J`.`salary_max` >= 1000 group by D.parent_id
)
or id in(

select D.id from `job_category` as `C` join `job` as `J` on `C`.`job_id`=`J`.`id` join category as `D` on `C`.`category_id`=`D`.`id` where `J`.`salary_max` >= 1000  and D.parent_id is NULL group by D.id
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
							//echo $high_class; exit();
							include('jobinfo/jobinfo_category_list.php');
						endif;
					else:
						//include file link index.php?page=categpory&hcm=??
							$hcm=(int)$_GET['hcm'];
							include('jobinfo/jobinfo_category_list.php');
					endif;
					
				break;
				/*****************End Category*******************/
				/*****************Begin voice*******************/
				case "voice":
					if(isset($_GET['cmd'])):
						switch($_GET['cmd']):
							case "case":
								if(isset($_GET['sid'])):
									$sid=$_GET['sid'];
									include('case/voice_detail.php');
								else:
									include('case/voice.php');
									//include('case/index.php');
								endif;
							break;
							case "question":
								include('case/question.php');
							break;
							case "data":
								if(isset($_GET['view'])):
									include('case/data_list.php');
								else:
									if(isset($_GET['sid']) && isset($_GET['action'])):
										$sid=$_GET['sid'];
										include('case/data_sid.php');
									else:
										include('case/data_sid.php');
									endif;
									
								endif;
							break;
						endswitch;
					else: 
						//include('case/voice.php');
						include('case/index.php');
					endif;
					
				break;
				/*****************End voice*******************/
				default:
					header("location:".url_root."404.html");
					exit();
			
			}
		
	else: 
		include('inc/index_20160721.php');
	endif;
?>