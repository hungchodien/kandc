<?php
    include('inc/main_search.php')
    //@include('../config.php')
?>

<div id="breadcrumb">
    <div class="breadcrumb-link">
        <ul class="clear">
            <li><img src="img/sub/icon-home.png" alt="ホームボタン"/><a href="<?php echo url_root; ?>" class="home"><span>HOME</span></a></li>
             <li><a href="<?php echo url_root;  ?>/mailmagazine.html"> > &nbsp; メールマガジン&nbsp;</a></li>
            <li><a href="<?php echo curPageURL();  ?>"> > &nbsp; <?php echo $Data_Category_mailmagazin['category_mailmagazine_Name']; ?>&nbsp;</a></li>
        </ul>
    </div>
</div>
<div id="content" class="clear">
    <div id="page" class="clear">
        <div class="title-page">
            <h2 class="title-top"><?php echo $Data_Category_mailmagazin['category_mailmagazine_Name']; ?>メールマガジンバックナンバー</h2>

            <h3 class="sub-title-top">過去配信した【<?php echo $Data_Category_mailmagazin['category_mailmagazine_Name']; ?>】メールマガジンバックナンバーがご覧いただけます</h3>
        </div>
       <?php  include('inc/button_entry.php'); ?>
    </div>
    <div class="left-side">
		
        <div class="look-job" id="interview-newest">
             <div class="magazine_top_note clear">
                <div class="note_magazine">※過去配信しているものですので、終了している求人やご覧いただけないページがございます</div>
            </div>

			
			<?php
				$Data_mailmagazine = To_Get_Data("mailmagazine"," and category_mailmagazine_ID=$category_mailmagazine_ID and mailmagazine_status=0 order by mailmagazine_date
 DESC");
				if($Data_mailmagazine['cnt'] > 0):
					for($i=0; $i<$Data_mailmagazine['cnt']; $i++){
						$List_mailmagazine = $Data_mailmagazine[$i];
						$mailmagazine_id=$List_mailmagazine['mailmagazine_id'];
						$title_mailmagazine=$List_mailmagazine['mailmagazine_title'];
						$mailmagazine_vol=$List_mailmagazine['mailmagazine_vol'];
						$mailmagazine_date=$List_mailmagazine['mailmagazine_date'];
						//$mailmagazine_date_convert=date('Y/m月',$mailmagazine_date);
						$month=date('m',strtotime($mailmagazine_date));
						$year=date('Y',strtotime($mailmagazine_date));
						$url_link=url_root."mailmagazine/".$cmd_cat."/".$mailmagazine_id.".html";
			 ?>
			<div class="item-mailmagazine clear">
            	<div class="l"><span class="date_mt"><?php echo $year."/".$month."月"; ?></span></div>
                <div class="l title_item_category"><a href="<?php echo $url_link; ?>"><?php echo $title_mailmagazine." ".$mailmagazine_vol;  ?></a></div>
            </div> 
		  		
		  <?php 
					}
		  		else:
					header("Location:".url_root."404.html");
					exit();
		  		endif;
		  ?>
		  
		
		  		
		  
		  
           
		  
        </div>
    </div>
    
    
    <div class="sidebar">
        <!-- form search slidebar -->
       <?php @include('inc/search_slidebar.php'); ?>

        <!-- job new and Featured Jobs  -->
        <?php @include('inc/program_list_job.php') ;?>
        <!--  the end featured news -->
        <!-- the start new newest -->
        <?php @include('inc/slibar_inc.php'); ?>
    </div>
</div>