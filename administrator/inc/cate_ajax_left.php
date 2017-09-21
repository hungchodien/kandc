<?php 
	@ob_start();
	@session_start();

	$model=$_POST['model'];
	$current_href=$model[0];
	$current1="";
	$current2="";
	$current3="";
	$current4="";
	$current5="";
	$current6="";
	$current7="";
	$current8="";
	$current10="";
	$current11="";
	if(!empty($current_href))
		{	
			switch($current_href)
			{
				case "interview_index":
					$current1="current";
				break;
				case "interview":
					$current2="current";
				break;
				case "henter_eye":
					$current3="current";
				break;
				case "career_up":
					$current4="current";
				break;
				case "notice_semina_career":
					$current5="current";
				break;
				case "category_notice_semina_career":
					$current6="current";
				break;
				case "category_consultant":
					$current7="current";
				break;
				case "scrol_vender":
					$current8="current";
				break;
				case "category_consul":
					$current10="current";
				break;
				case "category_interview":
					$current11="current";
				break;
				case "category_career_up":
					$currentt12="current";
				break;
				case "icon_checkbox_hunter":
					$currentt13="current";
				break;
				case "category_hunter":
					$currentt14="current";
				break;
				case "caption_henter_eye":
					$currentt16="current";
				break;
				case "category_mailmagazine":
					$category_mailmagazine="current";
				break;
				case "category_report":
				  	$category_report="current";
				break;
				case "kc_category_interview":
					$kc_category_interview="current";
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

<!--Add Category kandc*************************************-->

<div class="interview_index clear <?php echo $current7; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_consultant&op=select">コンサルタント</a>
      </div>
      <div class="right_p">icon</div>
 </div>

 <div class="interview_index clear <?php echo $current11; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_interview&op=select">面接官の本音</a>
      </div>
      <div class="right_p">icon</div>
 </div>
 <div class="interview_index clear <?php echo $currentt14; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_hunter&op=select">ヘッドハンターの目</a>
      </div>
      <div class="right_p">icon</div>
 </div>
 <div class="interview_index clear <?php echo $currentt16; ?>">
	  <div class="left_p">
      <a href="index.php?sid=caption_henter_eye&op=select">ヘッドハンターの目：C</a>
      </div>
      <div class="right_p">icon</div>
 </div>
 <div class="interview_index clear <?php echo $currentt13; ?>">
	  <div class="left_p">
      <a href="index.php?sid=icon_checkbox_hunter&op=select">ヘッドハンターの目：I</a>
      </div>
      <div class="right_p">icon</div>
 </div>
<div class="interview_index clear <?php echo $currentt12; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_career_up&op=select">キャリアアップコラム</a>
      </div>
      <div class="right_p">icon</div>
 </div>

 <div class="interview_index clear <?php echo $category_report; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_report&op=select">Category Report</a>
      </div>
      <div class="right_p">icon</div>
 </div>

 <div class="interview_index clear <?php echo $current6; ?>">
      <div class="left_p">
      <a href="index.php?sid=category_notice_semina_career&op=select">Category Car NoSemi</a>
      </div>
      <div class="right_p">icon</div>
</div>
<div class="interview_index clear <?php echo $category_mailmagazine; ?>">
      <div class="left_p">
      <a href="index.php?sid=category_mailmagazine&op=select">Category MailMagazine</a>
      </div>
      <div class="right_p">icon</div>
</div>
 <!--We don't need it
 <div class="interview_index clear <?php echo $current10; ?>">
	  <div class="left_p">
      <a href="index.php?sid=category_consul&op=select">Category Consul</a>
      </div>
      <div class="right_p">icon</div>
 </div>
 -->




<!--End Category kandc*************************************-->
<?php endif;
	if($permission==2 || $permission==10):?>
	  	<!--Add Category kc-consul-->
      <div id="menu_category_kc_consul" class="clear" style="margin:10px 0 0 -20px;">  
      		<h3 style="font-size:14px; color:#C60; text-transform:uppercase; font-weight:bold;">KC-Consul</h3>
      		<div class="clear group_kc_consul" style="padding:0 0 0 20px;">
            	<!--List item-->
				<div class="interview_index clear <?php echo $kc_category_interview; ?>">
				   <div class="left_p">
				      <a href="index.php?sid=kc_category_interview&op=select">KC Category interview</a>
				   </div>
				      <div class="right_p">icon</div>
		  		</div>
                <!--End List item-->
                
            </div><!--group_kc_consul-->
       </div> <!--menu_category_kc_consul-->
       
        <!--End Category kc-consul-->
	<?php endif; ?>