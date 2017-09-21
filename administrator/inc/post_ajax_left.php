<?php
	@ob_start();
	@session_start();
	
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	@include('Lib1/_init.php');
	@include("../Lib1/config.php");
	$model=$_POST['model'];
	$current_href=$model[0];
	$cate_nsc=$_POST['cate_nsc'];
	$crrent1="";
	$crrent2="";
	$crrent3="";
	$crrent4="";
	$crrent5="";
	$crrent6="";
	$crrent7="";
	$crrent8="";
	$crrent9="";
	$crrent11="";
	$crrent12="";
	if(!empty($current_href))
		{	
			switch($current_href)
			{
				case "job_info_demo":
					$crrenttjobdemo="current";
				break;

				case "interview_index":
					$crrent1="current";
				break;
				case "interview":
					$crrent2="current";
				break;
				case "henter_eye":
					$crrent3="current";
				break;
				case "career_up":
					$crrent4="current";
				break;
				case "notice_seminar_career":
					$crrent5="current";
				break;
				case "slide":
					$crrent8="current";
				break;
				case "news":
					$crrent9="current";
				break;
				case "consul":
					$crrent11="current";
				break;
				case "career":
					$crrent12="current";
				break;
				case "job_info":
					$crrenttjob="current";
				break;
				case "seminar":
					$semina_current="current";
				break;
				case "publicity":
					$publicity_current="current";
				break;
				case "voice":
					$voice_current="current";
				break;
                case "career_form":
                    $career_form_current="current";
                    break;
				case "question":
					$question_current="current";
				break;
				case "breaking_news":
					$set_job_day="current";
				break;
				case "job_info_en":
					$crrenttjoben="current";
				break;
				case "feature_jobs":
					$feature_jobs="current";
				break;
				case "read":
					$reading_current="current";
				break;

				case "share_email":
					$share_email="current";
				break;
				case "share_email_top":
					$share_email_top="current";
				break;
				case "question_consultant":
					$current_form="current";
				break;
				
				case "kc_consul_feature_job":
					$kc_consul_feature_job="current";
				break;

				case "kc_consul_feature_company":
					$kc_consul_feature_company="current";
				break;

				case "mailmagazine":
					$mailmagazine="current";
				break;
				case "interview_company":
					$interview_company="current";
				break;
				case "data_page":
					$data_page="current";
				break;
				case "category_job":
					$category_job="current";
				break;

				case "career_column":
					$career_column="current";
				break;

				case "report":
					$report="current";
				break;

				case "kc_consul_interview":
					$kc_consul_interview="current";
				break;
				
				case "kc_consul_blog":
					$kc_blog="current";
				break;

				case "kc_consul_news":
					$kc_consul_news="current";
				break;
				
				case "news_release":
					$news_release="current";
				break;
				
				case "turnning_point_interview":
					$turnning_point_interview="current";
				break;
			default:
				
				
			}
		}
		
?>

<?php 
	$permission=$_SESSION["rights"];
	$permission=(int)$permission;
	if($permission==1 || $permission==10):
 ?>

<!--Add Post kandc*************************************-->
<!--
<div class="interview_index clear <?php echo $crrenttjobdemo;  ?>">
          <div class="left_p"><a href="index.php?sid=job_info_demo&op=select">Job Info Demo</a></div>
           <div class="right_p">icon</div>
</div>
-->

<div class="interview_index clear <?php echo $crrenttjob;  ?>">
          <div class="left_p"><a href="index.php?sid=job_info&op=select">求人情報</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrenttjoben;  ?>">
          <div class="left_p"><a href="index.php?sid=job_info_en&op=select">求人情報：ENGLISH</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $set_job_day;  ?>">
          <div class="left_p"><a href="index.php?sid=breaking_news&op=select">最新求人情報</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $feature_jobs;  ?>">
          <div class="left_p"><a href="index.php?sid=feature_jobs&op=select">注目求人</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $category_job;  ?>">
          <div class="left_p"><a href="index.php?sid=category_job&op=select">求人カテゴリ</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $crrent1;  ?>">
          <div class="left_p"><a href="index.php?sid=interview_index&op=select">Pick UP インタビュー</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $interview_company;  ?>">
          <div class="left_p"><a href="index.php?sid=interview_company&op=select">企業インタビュー</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent2;  ?>">
          <div class="left_p"><a href="index.php?sid=interview&op=select">面接官の本音</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent3;  ?>">
          <div class="left_p"><a href="index.php?sid=henter_eye&op=select">ヘッドハンターの目</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent4;  ?>">
          <div class="left_p"><a href="index.php?sid=career_up&op=select">キャリアアップコラム</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent12;  ?>">
          <div class="left_p"><a href="index.php?sid=career&op=select">キャリア相談会：詳細</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $career_form_current;  ?>">
        <div class="left_p"><a href="index.php?sid=career_form&op=select">キャリア相談会：FORM</a></div>
        <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent8;  ?>">
          <div class="left_p"><a href="index.php?sid=slide&op=select">注目企業</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $crrent9;  ?>">
          <div class="left_p"><a href="index.php?sid=news&op=select">お知らせ：詳細</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $career_column;  ?>">
          <div class="left_p"><a href="index.php?sid=career_column&op=select">よくわかるキャリア</a></div>
           <div class="right_p">icon</div>
</div> 

<div class="interview_index clear <?php echo $publicity_current;  ?>">
          <div class="left_p"><a href="index.php?sid=publicity&op=select">パブリシティ</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $voice_current;  ?>">
          <div class="left_p"><a href="index.php?sid=voice&op=select">転職成功者の声</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $question_current;  ?>">
          <div class="left_p"><a href="index.php?sid=question&op=select">転職成功者アンケート</a></div>
           <div class="right_p">icon</div>
</div>

 <div class="interview_index clear <?php echo $reading_current;  ?>">
          <div class="left_p"><a href="index.php?sid=read&op=select">読みもの</a></div>
           <div class="right_p">icon</div>
</div>   
<div class="interview_index clear <?php echo $mailmagazine;  ?>">
          <div class="left_p"><a href="index.php?sid=mailmagazine&op=select">メルマガ：バックNO</a></div>
           <div class="right_p">icon</div>
</div>


<div class="interview_index clear <?php echo $report;  ?>">
          <div class="left_p"><a href="index.php?sid=report&op=select">採用動向レポート</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $news_release;  ?>">
          <div class="left_p"><a href="index.php?sid=news_release&op=select">News Release</a></div>
           <div class="right_p">icon</div>
</div>

<div class="interview_index clear <?php echo $data_page;  ?>">
          <div class="left_p"><a href="index.php?sid=data_page&op=select">転職支援の実績</a></div>
           <div class="right_p">icon</div>
</div>
   
<div class="interview_index clear <?php echo $share_email;  ?>">
          <div class="left_p"><a href="index.php?sid=share_email&op=select">Share：E-mail</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $share_email_top;  ?>">
          <div class="left_p"><a href="index.php?sid=share_email_top&op=select">Share：Top Entry</a></div>
           <div class="right_p">icon</div>
</div>

 <?php 
   		//if($_SESSION['MemberName']!='admin'):
   ?>
<div class="interview_index clear <?php echo $current_form; ?>">
      <div class="left_p">
      <a href="index.php?sid=question_consultant&op=select">アンケート</a>
      </div>
      <div class="right_p">icon</div>
</div> 
<?php //endif; ?>
<!--We don't need it.
<div class="interview_index clear <?php echo $crrent11;  ?>">
          <div class="left_p"><a href="index.php?sid=consul&op=select">Consul</a></div>
           <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $semina_current;  ?>">
          <div class="left_p"><a href="index.php?sid=seminar&op=select">Seminar</a></div>
           <div class="right_p">icon</div>
</div>
-->
<?php 
	 
$where_total_cate .= "and status_category_notice_seminar_career=0";
$Data = To_Get_Data("category_notice_seminar_career", $where_total." order by date_category_notice_seminar_career desc");
//$Data_count = To_Get_Data("category_notice_seminar_career", $where_total,"count(*) as `count_num` ","Y");
//echo $Data_count['count_num'];
	if($Data['cnt'] > 0){
		
		for($i=0; $i<$Data['cnt']; $i++)
		{
			//$selected="";
			$List = $Data[$i];
			//print_r($List);
			$seq_category_notice_seminar_career= $List['id_category_notice_seminar_career'];
			$name_category_notice_seminar_career=$List['name_category_notice_seminar_career'];
							
?>

<div class="interview_index clear  <?php if($cate_nsc==$seq_category_notice_seminar_career){echo $crrent5;} ?>">
          <div class="left_p"><a href="index.php?sid=notice_seminar_career&op=select&cate_nsc=<?php echo $seq_category_notice_seminar_career; ?>"><?php echo $name_category_notice_seminar_career; ?> </a></div>
           <div class="right_p">icon</div>
</div>
<?php 
		}
	}else{
			echo "";
		}
?>



<!--End Post kandc*************************************-->
<?php 
	endif;
	if($permission==2 || $permission==10):?>
<div id="menu_category_kc_consul" class="clear" style="margin:10px 0 0 -20px;">  
      <h3 style="font-size:14px; color:#C60; text-transform:uppercase; font-weight:bold;">KC-Consul</h3>
      <div class="clear group_kc_consul" style="padding:0 0 0 20px;">
	  	<!--Add Category kc-consul-->
        <!--<div class="interview_index clear <?php echo $kc_consul_feature_job; ?>">
          <div class="left_p">
          		<a href="index.php?sid=kc_consul_feature_job&op=select">KC-Consul Feature Job</a>
          </div>
          <div class="right_p">icon</div>
	   </div>
       
       <div class="interview_index clear <?php echo $kc_consul_feature_company; ?>">
          <div class="left_p">
          		<a href="index.php?sid=kc_consul_feature_company&op=select">KC-Consul Feature Company</a>
          </div>
          <div class="right_p">icon</div>
	   </div>-->
        

		 <div class="interview_index clear <?php echo $kc_consul_interview; ?>">
          <div class="left_p">
          		<a href="index.php?sid=kc_consul_interview&op=select">インタビュー</a>
          </div>
          <div class="right_p">icon</div>
	   </div>
		
		 <div class="interview_index clear <?php echo $kc_blog; ?>">
          <div class="left_p">
          		<a href="index.php?sid=kc_consul_blog&op=select">こぼれ話</a>
          </div>
          <div class="right_p">icon</div>
	   </div>
	
		<div class="interview_index clear <?php echo $kc_consul_news; ?>">
          <div class="left_p">
          		<a href="index.php?sid=kc_consul_news&op=select">更新情報</a>
          </div>
          <div class="right_p">icon</div>
	   </div>
		
        <!--End Category kc-consul-->
	</div>
</div>


	<div id="menu_category_kc_consul" class="clear" style="margin:10px 0 0 -20px;">  
      		<h3 style="font-size:14px; color:#F90; text-transform:uppercase; font-weight:bold;">Turning-Point</h3>
      		<div class="clear group_kc_consul" style="padding:0 0 0 20px;">
            		<!--End Turning-Point -->
                    <div class="interview_index clear <?php echo $turnning_point_interview; ?>">
			          <div class="left_p">
			          		<a href="index.php?sid=turnning_point_interview&op=select">Turning-point Interview</a>
			          </div>
			          <div class="right_p">icon</div>
				   </div>
                    <!--End Turning-Point-->	
            </div>
       </div>

	<?php
	 endif;
	?>