<?php 
	$Data_Category_mailmagazin = Get_Data("category_mailmagazine"," and category_mailmagazine_Slug='$cmd_cat'", "count(*)as cnt,category_mailmagazine_Name,category_mailmagazine_ID");
		if($Data_Category_mailmagazin['cnt']<=0):
			header("Location:".url_root."404.html");
			exit();
		endif;
		$category_mailmagazine_ID=$Data_Category_mailmagazin['category_mailmagazine_ID'];
		$sid=(int)$sid;
		$Data_mailmagazine = To_Get_Data("mailmagazine"," and mailmagazine_id=$sid and category_mailmagazine_ID=$category_mailmagazine_ID and mailmagazine_status=0");
		
		$mailmagazine_id=$Data_mailmagazine[0]['mailmagazine_id'];
		$title_mailmagazine=$Data_mailmagazine[0]['mailmagazine_title'];
		$mailmagazine_vol=$Data_mailmagazine[0]['mailmagazine_vol'];
		$mailmagazine_date=$Data_mailmagazine[0]['mailmagazine_date'];
		$mailmagazine_content=$Data_mailmagazine[0]['mailmagazine_content'];
		
		$seo_keyword=htmlspecialchars_decode($Data_mailmagazine[0]['seo_keyword']);
		$seo_description=htmlspecialchars_decode($Data_mailmagazine[0]['seo_description']);
		
		$seo_og_description=htmlspecialchars_decode($Data_mailmagazine[0]['seo_og_description']);
		$seo_og_title=htmlspecialchars_decode($Data_mailmagazine[0]['seo_og_title']);
		
		$seo_add_thumb_meta=$Data_mailmagazine[0]['seo_add_thumb_meta'];
?>
<div id="content" class="inside">
	<div id="mailmagazine_mobile" class="mailmagazine_mobile bg_white content_inside block_content clear">
    	<h3 class="title_mailmagazine">【<?php echo $Data_Category_mailmagazin['category_mailmagazine_Name'].$mailmagazine_vol; ?>】メールマガジンバックナンバー</h3>
        
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
                    <a href="<?php echo $link_pre; ?>">< 前の記事</a>
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
                    <a href="<?php echo $link_next; ?>">次の記事 ></a>
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
                    <a href="<?php echo $link_pre; ?>">< 前の記事</a>
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
                    <a href="<?php echo $link_next; ?>">次の記事 ></a>
                </div>
                <?php 
					endif;
				?>
                </div>
            </div>
            <!-- the end next and preview  careerup detail bottom -->
    </div><!--mailmagazine_mobile-->
    
    
    
    
 	<div class="clear mailmagazine_inc_group">
         	<div class="clear mailmagazine_inc_list">
         	<div class="title_mailmagazine clear">
            	<div class="l"><img src="<?php echo url_root_domain; ?>img/mailmagazine/c-interview-backnumber-title.png" alt=""></div>
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
            
    
    
<?php include('inc/menu_interview.php'); ?>
<?php include ('inc/page_footer.php');?>
</div><!--#content-->