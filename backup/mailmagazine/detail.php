<?php
    include('inc/main_search.php')
    //@include('../config.php')
?>

<div id="breadcrumb">
    <div class="breadcrumb-link">
        <ul class="clear">
            <li><img src="img/sub/icon-home.png" alt="ホームボタン"/><a href="<?php echo url_root; ?>" class="home"><span>HOME</span></a></li>
             <li><a href="<?php echo url_root;  ?>mailmagazine.html"> > &nbsp; メールマガジン&nbsp;</a></li>
              <li><a href="<?php echo url_root;  ?>mailmagazine/list/<?php echo $cmd_cat; ?>.html"> > &nbsp; <?php echo $Data_Category_mailmagazin['category_mailmagazine_Name']; ?>&nbsp;</a></li>
             <li><a href="<?php echo curPageURL();  ?>"> > &nbsp; <?php echo $title_mailmagazine; ?>&nbsp;</a></li>
        </ul>
    </div>
</div>
<div id="content" class="clear">
    <div id="page" class="clear">
        <div class="title-page">
            <h2 class="title-top">【<?php echo $Data_Category_mailmagazin['category_mailmagazine_Name'].$mailmagazine_vol; ?>】メールマガジンバックナンバー</h2>

            <h3 class="sub-title-top">※過去配信しているものですので、終了している求人やご覧いただけないページがございます</h3>
        </div>
       <?php  include('inc/button_entry.php'); ?>
    </div>
    <div class="left-side">
		
        <div class="mailmagazine_inc_group clear">
             
           <!-- the start next and preview  careerup detail bottom -->
            <div class="careerup-detail-next-pre clear">
            	<div class="clear pre_mailmagazine">
            <?php 
				
				$Data_hunter_Pre=Get_Data("mailmagazine", " and category_mailmagazine_ID=$category_mailmagazine_ID and `mailmagazine_date` < '$mailmagazine_date' order by `mailmagazine_date` DESC limit 1");
				$id_pre=$Data_hunter_Pre['mailmagazine_id'];
				$link_pre=url_root."mailmagazine/$cmd_cat/$id_pre.html";
				if(isset($id_pre) || $id_pre>0):
			?>
                <div class="careerup-next">
                    <a href="<?php echo $link_pre; ?>">&lsaquo; 前の記事</a>
                 </div>
                 <?php endif; ?>
                 
                <div class="careerup-list">
                     <a href="<?php echo url_root; ?>mailmagazine/list/<?php echo $cmd_cat; ?>.html">一覧に戻る</a>
                </div>
                <?php 
				$Data_hunter_next=Get_Data("mailmagazine", " and category_mailmagazine_ID=$category_mailmagazine_ID and `mailmagazine_date` > '$mailmagazine_date' order by mailmagazine_date ASC limit 1");
				$id_next=$Data_hunter_next['mailmagazine_id'];
				$link_next=url_root."mailmagazine/$cmd_cat/$id_next.html";
				if(isset($id_next) || $id_next > 0):
			?>
                <div class="careerup-pre">
                    <a href="<?php echo $link_next; ?>">次の記事 &rsaquo;</a>
                </div>
                <?php 
					endif;
				?>
                </div>
            </div>
            <!-- the end next and preview  careerup detail bottom -->
             
			<div class="clear content_mailmagazine">
            	<h3><?php echo $title_mailmagazine."【".$Data_Category_mailmagazin['category_mailmagazine_Name']."】".$mailmagazine_vol; ?></h3>
                <div class="clear content_view">
			<?php 
				if(empty($mailmagazine_content)):
					//
				else:
					echo htmlspecialchars_decode($mailmagazine_content);
				endif;
			?>
            	</div>
			</div>
		  		
		  
		  	  <!-- the start next and preview  careerup detail bottom -->
            <div class="careerup-detail-next-pre clear">
            	<div class="clear pre_mailmagazine">
            <?php 
				
				$Data_hunter_Pre=Get_Data("mailmagazine", " and category_mailmagazine_ID=$category_mailmagazine_ID and `mailmagazine_date` < '$mailmagazine_date' order by `mailmagazine_date` DESC limit 1");
				$id_pre=$Data_hunter_Pre['mailmagazine_id'];
				$link_pre=url_root."mailmagazine/$cmd_cat/$id_pre.html";
				if(isset($id_pre) || $id_pre>0):
			?>
                <div class="careerup-next">
                    <a href="<?php echo $link_pre; ?>">&lsaquo; 前の記事</a>
                 </div>
                 <?php endif; ?>
                 
                <div class="careerup-list">
                    <a href="<?php echo url_root; ?>mailmagazine/list/<?php echo $cmd_cat; ?>.html">一覧に戻る</a>
                </div>
                <?php 
				$Data_hunter_next=Get_Data("mailmagazine", " and category_mailmagazine_ID=$category_mailmagazine_ID and `mailmagazine_date` > '$mailmagazine_date' order by mailmagazine_date ASC limit 1");
				$id_next=$Data_hunter_next['mailmagazine_id'];
				$link_next=url_root."mailmagazine/$cmd_cat/$id_next.html";
				if(isset($id_next) || $id_next > 0):
			?>
                <div class="careerup-pre">
                    <a href="<?php echo $link_next; ?>">次の記事 &rsaquo;</a>
                </div>
                <?php 
					endif;
				?>
                </div>
            </div>
            <!-- the end next and preview  careerup detail bottom -->
            
            
            
            
            
            
           
		  
        </div>
        
         <div class="clear mailmagazine_inc_group">
         	<div class="clear mailmagazine_inc_list">
         	<div class="title_mailmagazine clear">
            	<div class="l"><img src="<?php echo url_root; ?>img/mailmagazine/c-interview-backnumber-title.png" alt="interview-backnumber"/></div>
                <div class="r"><a href="<?php echo url_root; ?>mailmagazine/list/<?php echo $cmd_cat; ?>.html">全てを見る ></a></div>
            </div>
            <div class="item_mailmagazine clear">
         	<?php $Data_new_mailmagazine = To_Get_Data("mailmagazine"," and category_mailmagazine_ID=$category_mailmagazine_ID and mailmagazine_status=0  order by `mailmagazine_date` DESC LIMIT 8");
			if($Data_new_mailmagazine['cnt'] > 0):
				echo "<ul>";
					for($i=0; $i<$Data_new_mailmagazine['cnt']; $i++){
							$List_new_mailmagazine = $Data_new_mailmagazine[$i];	
							$mailmagazine_new_id=$List_new_mailmagazine['mailmagazine_id'];
							$title_mailmagazine_new=$List_new_mailmagazine['mailmagazine_title'];
							$mailmagazine_vol_new=$List_new_mailmagazine['mailmagazine_vol'];
							$mailmagazine_date_new=$List_new_mailmagazine['mailmagazine_date'];
							$month=date('m',strtotime($mailmagazine_date_new));
							$year=date('Y',strtotime($mailmagazine_date_new));
							$url_link=url_root."mailmagazine/".$cmd_cat."/".$mailmagazine_new_id.".html";
							?>
                            <li>
                            	<span class="date_list_mailmagazine"><?php echo $year."/".$month."月"; ?></span>
                                <a href="<?php echo $url_link; ?>">
                                	<?php echo $title_mailmagazine_new." ".$mailmagazine_vol_new;?>
                                </a>
                            </li>
                            <?php
							
						}
					echo "</ul>";
			endif;
			
		
		
		?>
         	</div>	
         </div>
         
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