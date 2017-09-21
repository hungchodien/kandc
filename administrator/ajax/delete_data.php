<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
if(isset($_POST)) 
{
	if ($_POST['seq_list'] != array()) {
    foreach ($_POST['seq_list'] as $id) {
        $values.= (int)$id.",";
    }
	 $groupID = substr($values, 0, -1);
	 $sid=$_GET['sid'];
	 $currentpage=$_GET['currentpage'];
	 
	}
	else
	{
		$groupID=$_POST['id_row'];
		$sid=$_POST['model_del'];
		$currentpage=$_POST['page_init'];
		if(empty($sid) || empty($groupID))
			{
				break;
				exit();
			}
	}
	 
	 switch($sid)
			{
				case "interview_index":
					$res = delete_data("interview_index", "id_index_interview in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "read":
					$res = delete_data("read_indexs", "id_read_index in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "interview":
					$res = delete_data("interview", "id_interview in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "henter_eye":
					$res = delete_data("henter_eye", "id_henter_eye in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "career_up":
					$res = delete_data("career_up", "id_career_up in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "notice_seminar_career":
					$res = delete_data("notice_seminar_career", "id_notice_seminar_career in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_notice_semina_career":
					$res = delete_data("category_notice_seminar_career", "id_category_notice_seminar_career in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_consultant":
					$res = delete_data("consultant", "consultant_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "slide":
					$res = delete_data("scrol_vender", "scrol_venderID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "news":
					$res = delete_data("news", "news_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_consul":
					$res = delete_data("category_consul", "category_consul_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "consul":
					$res = delete_data("consul", "consul_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_interview":
					$res = delete_data("category_interview", "category_interview_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "career":
					$res = delete_data("career", "careerID in($groupID)");
					$res1 = delete_data("career_consultant", "careerID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_career_up":
					$res = delete_data("categgory_career_up", "categgory_career_up_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "icon_checkbox_hunter":
					$res = delete_data("icon_checkbox_hunter", "icon_Checkbox_hunter_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_hunter":
					$res = delete_data("category_hunter", "category_hunter_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "caption_henter_eye":
					$res = delete_data("caption_henter_eye", "caption_henter_eye_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "seminar":
					$res = delete_data("seminar", "seminarID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "publicity":
					$res = delete_data("publicity", "publicityID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "voice":
					$res = delete_data("case_voice", "case_voiceID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "question":
					$res = delete_data("question_voice", "question_voiceID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "job_info":
					$res = delete_data("job", "id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "career_form":
					$res = delete_data("career_form", "career_formID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "feature_jobs":
					$res = delete_data("feature_jobs", "feature_job_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "share_email":
					$res = delete_data("useragent", "userAgentID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "share_email_top":
					$res = delete_data("useragent_top", "userAgentID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "question_consultant":
					$res = delete_data("question_consultant", "question_consultantID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

				case "kc_consul_feature_job":
					$res = delete_data("kc_consul_feature_job", "kc_consul_feature_job_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "kc_consul_feature_company":
					$res = delete_data("kc_consul_feature_company", "kc_consul_feature_company_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "category_mailmagazine":
					$res = delete_data("category_mailmagazine", "category_mailmagazine_ID in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				
				case "mailmagazine":
					$res = delete_data("mailmagazine", "mailmagazine_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "interview_company":
					$res = delete_data("company_interviews", "company_interviews_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

				case "data_page":
					$res = delete_data("data_case", "data_case_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

				case "career_column":
					$res = delete_data("career_column", "career_column_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

				case "category_report":
					$res = delete_data("category_report", "category_report_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "report":
					$res = delete_data("report", "report_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

				case "kc_category_interview":
					$res = delete_data("kc_category_interview", "kc_category_interview_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "kc_consul_interview":
					$res = delete_data("kc_interview", "kc_interview_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "kc_consul_blog":
					$res = delete_data("kc_blog", "kc_blog_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				
				case "kc_consul_news":
					$res = delete_data("kc_consul_news", "kc_consul_news_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				
				case "news_release":
					$res = delete_data("news_release", "news_release_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;
				case "turnning_point_interview":
					$res = delete_data("turning_point_interview", "turning_point_interview_id in($groupID)");
					$msg = "Has been removed";
					echo $msg;
				break;

			default:
				
			}
			
}
		
	
?>