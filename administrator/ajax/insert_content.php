<?php
	@include('../Lib1/config.php');
	@include('../../../Lib1/config.php');
	@include('../../Lib1/config.php');
	@include('Lib1/config.php');
	$sid=$_GET['sid'];
	$op=$_GET['op'];
	$cate_nsc=$_GET['cate_nsc'];
	//echo $sid;
	if(!empty($sid) && !empty($op))
	{
		switch($sid)
			{
				case "job_info_demo":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_job_info_demo.php');
				break;

				case "job_info_en":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_job_info_en.php');
				break;

				case "job_info":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_job_info.php');
				break;
				case "interview_index":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_interview_index.php');
				break;
				case "read":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_read.php');
				break;
				case "interview":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_interview.php');
				break;
				case "henter_eye":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_henter_eye.php');
				break;
				case "career_up":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_career_up.php');
				break;
				case "notice_seminar_career":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					$cate_nsc=$_GET['cate_nsc'];
					include_once('post/post_notice_seminar_career.php');
				break;
				case "category_notice_semina_career":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_notice_seminar_career.php');
				break;
				case "category_consultant":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_consultant.php');
				break;
				case "slide":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_slide.php');
				break;
				case "news":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_news.php');
				break;
				case "category_consul":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_consul.php');
				break;
				case "consul":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_consul.php');
				break;
				case "category_interview":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_interview.php');
				break;
				case "career":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_career.php');
				break;
				case "category_career_up":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_career_up.php');
				break;
				case "icon_checkbox_hunter":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_icon_Checkbox_hunter.php');
				break;
				case "category_hunter":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_category_hunter.php');
				break;
				case "caption_henter_eye":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_caption_henter_eye.php');
				break;
				case "seminar":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_seminar.php');
				break;
				case "publicity":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_publicity.php');
				break;
				case "voice":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_voice.php');
				break;
				case "question":
					$sid=$_GET['sid'];
					$op=$_GET['op'];
					include_once('post/post_question.php');
				break;

                case "career_form":
                    $sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_career_form.php');
                break;
				  case "breaking_news":
                    $sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_set_job_day_form.php');
                break;

				 case "feature_jobs":
                    $sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_feature_jobs.php');
                break;
				
				 case "kc_consul_feature_job":
                    $sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_consul_feature_job.php');
                 break;
				  case "kc_consul_feature_company":
                    $sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_consul_feature_company.php');
                 break;

				 case "category_mailmagazine":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_category_mailmagazine.php');
					break;
				 case "mailmagazine":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_mailmagazine.php');
					break;
				case "interview_company":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_interview_company.php');
					break;
				case "data_page":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_data_page.php');
					break;	
				case "category_job":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_category_job.php');
					break;	
				case "career_column":
				 	$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_career_column.php');
					break;	
				
				case "category_report":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_category_report.php');
					break;
				case "report":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_report.php');
					break;
				case "kc_category_interview":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_category_interview.php');
				break;	
				case "kc_consul_interview":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_consul_interview.php');
				break;	

				case "kc_consul_blog":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_consul_blog.php');
				break;
				case "kc_consul_news":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_kc_consul_news.php');
				break;

				case "news_release":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_news_release.php');
				break;
				
				case "turnning_point_interview":
					$sid=$_GET['sid'];
                    $op=$_GET['op'];
                    include_once('post/post_turnning_point_interview.php');
				break;
				
			default:
				
				
			}
	}
?>