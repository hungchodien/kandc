<?php include('inc/main_search_all.php');
	   @include('../config.php');
	   @include('../Lib/_init.php');
	   @include('../Lib/function/function.database.php');
	 // echo $_GET['s']."ưeeeeeeeeeeeeeeeeeeeeeeeeeee";
		 if(isset($_GET['s'])):
	 		 $search_txt=htmlspecialchars($_GET['s']);
	  	 else:
			header("location:".url_root);
		 endif;
 ?>
<script type="text/javascript">
	function click_to_textbox(page_id){
		var url_form_action_job="<?php echo url_root; ?>search/all/job-page/"+page_id+"/"+$(".value_hiden_txt_job").val();
     			 // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show_job").attr("action",url_form_action_job);
      $("#submit_get_post_show_job").submit();
	}
	function click_to_textbox_interview(page_id){
		var url_form_action_interview="<?php echo url_root; ?>search/all/interview-page/"+page_id+"/"+$(".value_hiden_txt_interview").val();
     			 // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show_interview").attr("action",url_form_action_interview);
      $("#submit_get_post_show_interview").submit();
	}
	function click_to_textbox_hunter_eye(page_id){
		var url_form_action_hunter="<?php echo url_root; ?>search/all/hunter-eye-up-page/"+page_id+"/"+$(".value_hiden_txt_henter").val();
     			 // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show_henter").attr("action",url_form_action_hunter);
      $("#submit_get_post_show_henter").submit();
	}
	function click_to_textbox_careerup(page_id){
		var url_form_action_careerup="<?php echo url_root; ?>search/all/career-up-page/"+page_id+"/"+$(".value_hiden_txt_careerup").val();
     			 // var form_url = $("#submit_get_post_show").attr("action");
      $("#submit_get_post_show_careerup").attr("action",url_form_action_careerup);
      $("#submit_get_post_show_careerup").submit();
	}
</script>
<div id="breadcrumb">
    <div class="breadcrumb-link">
        <ul class="clear">
            <li><img src="img/sub/icon-home.png" alt="ホームボタン"/><a href="<?php echo url_root; ?>" class="home"><span>クライス＆カンパニー</span></a>
            <li>&nbsp;>&nbsp;</li>
            <li><!--<a href="<?php //echo curPageURL(); ?>"></a>-->検索結果</li>
            <li>&nbsp;>&nbsp;</li>
            <li><?php echo $_GET['s']; ?></li>
            
            
        </ul>
    </div>
</div>
<div id="content" class="clear">
    <div id="page" class="clear">
        <div class="title-page">
            <p class="title-top"><?php echo $_GET['s']; ?>に関する検索結果</p>
            <p class="sub-title-top">&nbsp;</p>
        </div>
        <?php include('inc/button_entry.php'); ?>
    </div>

    <div class="left-side" >
    
    	<?php 
			 if(isset($_GET['s'])):?>
             	<div class="clear">
             	<?php 
	 			 $search_txt=htmlspecialchars($_GET['s']);
				 include('search/job_info_search.php');
				 ?>
                 </div>
                 <div class="clear interview-job">
                 	 <div class="jobinfo-news-job clear">
                         <div class="laste-job-open clear">
                            <div>INTERVIEW</div>
                            <div class="laste-open">RESULT SEARCH</div>
                        </div>
                    </div>
                 <?php
				  $search_txt=htmlspecialchars($_GET['s']);
				 include('search/interview_search.php');
				 ?>
                 </div>
                 <div class="clear careerup-job">
                 	<div class="jobinfo-news-job clear">
                         <div class="laste-job-open clear">
                            <div>HUNTER EYE</div>
                            <div class="laste-open">RESULT SEARCH</div>
                        </div>
                    </div>
                 <?php 
				  $search_txt=htmlspecialchars($_GET['s']);
				 include('search/hunter_eye_search.php');
				 ?>
                 </div>
                 <div class="clear careerup-job">
                 	<div class="jobinfo-news-job clear">
                         <div class="laste-job-open clear">
                            <div>CAREER UP</div>
                            <div class="laste-open">RESULT SEARCH</div>
                        </div>
                    </div>
                 <?php 
				  $search_txt=htmlspecialchars($_GET['s']);
				 include('search/career_up_search.php');
				 ?>
                 </div>
                 <?php 
	  		 else:
				header("location:".url_root);
			 endif;
			 
		?>
    
    
    
	
        
        
        
        
        
        
         </div>

    <!---- ////////////////////////////////////////////////////////right ////////////////////////////////////////////////////////-->
    <div class="sidebar">
        <!-- form search slidebar -->
       <?php include('inc/search_slidebar.php'); ?>

        <!-- the start Category interview  --->
      
        <!-- the end category interview  --->

        <!-- job new and Featured Jobs  --->
        <?php include('inc/program_list_job.php'); ?>
        <!--  the end featured news -->

        <!-- the start new newest -->
        <?php include('inc/slibar_inc.php'); ?>
    </div>
</div>