<div class="wrapper">
	<?php 

	$where_total_interview="and `A`.`shiodome_academy_status`=0 and `C`.`shiodome_academy_category_id`='$sid'";
	$Total_interview = Get_Data("shiodome_academy as A join shiodome_academy_join_category as B on
A.shiodome_academy_id=B.shiodome_academy_id join shiodome_academy_category as C on B.shiodome_academy_category_id=C.shiodome_academy_category_id",$where_total_interview, "count(*) as cntt");
				
				
	

		$numrows = $Total_interview['cntt'];
		$rowsperpage =$count_item_event;
				
					$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
					  $currentpage = (int) $_GET['currentpage'];
				}else{
					   $currentpage = 1;
					} 
					
					if ($currentpage > $totalpages) {
					  
					   $currentpage = $totalpages;
					} 
					
					if ($currentpage < 1) {
					   
					   $currentpage = 1;
					}
				$offset = ($currentpage - 1) * $rowsperpage;
			 
	$where_page="and `A`.`shiodome_academy_status`=0 and `C`.`shiodome_academy_category_id`='$sid' order by `A`.`shiodome_academy_date` DESC limit {$offset},{$rowsperpage}";
	 $Data_shiodome_list_page =To_Get_Data("shiodome_academy as A join shiodome_academy_join_category as B on
A.shiodome_academy_id=B.shiodome_academy_id join shiodome_academy_category as C on B.shiodome_academy_category_id=C.shiodome_academy_category_id", $where_page,"C.seo_keyword,C.seo_description,C.seo_og_description,C.seo_og_title,C.seo_add_thumb_meta,A.shiodome_academy_theme,A.shiodome_academy_time,A.shiodome_academy_place,A.shiodome_academy_guest,A.shiodome_academy_description,C.shiodome_academy_category_name_ja,A.shiodome_academy_date,A.shiodome_academy_thumbnail,A.shiodome_academy_thumbnail_alt,C.shiodome_academy_category_name_en,A.shiodome_academy_id,C.shiodome_academy_category_slug");
	

	
	?>


    <div class="category_list event_row clear">
    	<?php 
			$i=0;
		if($Data_shiodome_list_page['cnt']>0):  
			for($i=0;$i<$Data_shiodome_list_page['cnt'];$i++):
				$List_shiodome_list_page=$Data_shiodome_list_page[$i];
				
				$date_shiodome_top=$List_shiodome_list_page['shiodome_academy_date'];
				$thumbnail_top=url_root_domain.$url_images_thumnail.$List_shiodome_list_page['shiodome_academy_thumbnail'];
				$thumbnail_top_alt=$List_shiodome_list_page['shiodome_academy_thumbnail_alt'];
				$name_category=$List_shiodome_list_page['shiodome_academy_category_name_en'];

				$shiodome_academy_id=$List_shiodome_list_page['shiodome_academy_id'];

				$category_shiodome_academy_slug=$List_shiodome_list_page['shiodome_academy_category_slug'];

		?>
    	<div class="event_box <?php if(!empty($List_shiodome_list_page['shiodome_academy_category_name_en']) && $List_shiodome_list_page['shiodome_academy_category_name_en']!=""): echo $name_category;  else: echo "start_event"; endif; ?> schedule_box">
            <div class="schedule_box_content">
                <div class="clear schedule_box_top">
                <div class="date fl">
               		<p class="month"><?php echo substr(date('Y F',strtotime($date_shiodome_top)),0,8); ?><!--2016 May--></p>
            		<p class="ngay"><?php echo date('d',strtotime($date_shiodome_top)); ?></p>
            		<p class="day"><?php echo date('D',strtotime($date_shiodome_top)); ?></p>
                </div>
                <dl class="time_place fl">
                <?php if(!empty($List_shiodome_list_page['shiodome_academy_time']) && $List_shiodome_list_page['shiodome_academy_time']!=""): ?>
                <dt class="label">time</dt><dd><?php echo $List_shiodome_list_page['shiodome_academy_time']; ?></dd>
                <?php endif ?>
                <?php if(!empty($List_shiodome_list_page['shiodome_academy_place']) && $List_shiodome_list_page['shiodome_academy_place']!=""): ?>
                <dt class="label">place</dt><dd><?php echo $List_shiodome_list_page['shiodome_academy_place']; ?></dd>
                 <?php endif ?>
                </dl>
                </div>
                <p class="schedule_box_tmb">
               		<?php if(!empty($List_shiodome_list_page['shiodome_academy_thumbnail']) && $List_shiodome_list_page['shiodome_academy_thumbnail']!=""): ?>
               	 		<img alt="<?php echo $thumbnail_top_alt; ?>" src="<?php echo $thumbnail_top; ?>" />
                    <?php endif; ?>
                </p>
                <h3 class="theme"><?php echo $List_shiodome_list_page['shiodome_academy_theme']; ?></h3>
                <div class="guest">
                <?php 
						$guest_top=unserialize($List_shiodome_list_page['shiodome_academy_guest']);
						$g=0;
						for($g=0;$g<count($guest_top);$g++):
							echo "<p>".$guest_top[$g]['guest']."</p>";
						endfor;
					?>
                </div>
                <div class="clear event_box_bottom">
                <h3 class="event_title fl"><?php echo $List_shiodome_list_page['shiodome_academy_category_name_ja']; ?></h3>
                <p class="detail_btn fr"><a class="click_readmore" href="#" data-category="<?php echo $category_shiodome_academy_slug; ?>" data-href="<?php echo url_root_shiodome; ?>details/<?php echo $shiodome_academy_id; ?>.html">詳しくはこちら</a></p>
                </div>
            </div><!--schedule_box_content-->
        </div><!--schedule_box-->
       <?php 
	   		endfor;
		endif;
	   ?> 
   </div><!--category_list-->
   
	<?php 
		if($numrows>$rowsperpage):
	?>

    <div class="navi clear">
            <ul class="clear">
               	  <?php 
						 
							$prameter_pageInit=url_root_shiodome."category/".$sid."/page";
							$prameter_pageInit1=url_root_shiodome."category/".$sid.".html";
						
         $range = 4;
		if ($currentpage > 1)
		{
			//echo " <li><a href='#Page-1' onclick='Load_Content(1)' title='Trang Đầu'>First </a></li> ";
			   
			   $prevpage = $currentpage - 1;

			if($prevpage==1):
				echo "<li class='next_btn'> <a href='$prameter_pageInit1' rel='prev'>&lt;前へ</a> </li>";

			else:
				echo "<li class='next_btn'> <a href='$prameter_pageInit/$prevpage.html' rel='prev'>&lt;前へ</a> </li>";
			endif;   
 			
	   
			} 
			
			//
			for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
	   
				   if (($x > 0) && ($x <= $totalpages)) {
					  
					  if ($x == $currentpage) {
						
						 echo "<li class='currentPage'><b style='color:#F00'>$x</b></li> ";
					  
					  } else {
						 if($x==1):
							echo " <li><a href='$prameter_pageInit1' rel='PAGE-$x'>$x</a></li> ";
						 else:
							echo " <li><a href='$prameter_pageInit/$x.html' rel='PAGE-$x'>$x</a></li> ";
						endif;
						 
					  } 
				   } 
				} 
			//		
			//
				if ($currentpage != $totalpages) {
				
				 $nextpage = $currentpage + 1;
		   		if(($currentpage+$range)<$totalpages){
						 
				echo "<li>...</li>";
				echo " <li><a href='$prameter_pageInit/$totalpages.html' rel='End-$totalpages'>$totalpages</a></li> ";

					}
					echo "<li class='next_btn'> <a href='$prameter_pageInit/$nextpage.html' rel='NEXT'>次へ&gt;</a> </li>";
				   
				   //echo " <li><a href='#contents' onclick='Load_Content($totalpages);'  title='END-$totalpages'> End </a></li> ";
				} 
			?>
               </ul>
            </div>
   
	<?php endif; ?>


</div><!--wrapper-->

