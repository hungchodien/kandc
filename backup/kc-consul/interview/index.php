<script src="<?php echo url_root; ?>js/jquery.shuffle.min.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery( document ).ready(function($){
	  		/* initialize shuffle plugin */
			var $grid = $('#data_interview');
	   $(window).on('load hashchange', function () { 
	  		var url_hash=$(location).attr('hash').replace("#", "");
			url_hash=url_hash.replace("/", "");
			if(url_hash!="")
			{
				//alert("ok");
					$("ul#filterOptions li a").each(function( index ){
						//var url_href=$('ul.job_picup_slide_bar_search li a').attr('href');
						if($(this).attr('class')==url_hash)
						{
							$('ul#filterOptions li a').parent().removeClass('active');
							$(this).parent().addClass('active');
							var groupName = $(this).attr('data-group');
							// reshuffle grid
							$grid.shuffle('shuffle', groupName );
						}
					});
			}
			else
			{
				$grid.shuffle({
					itemSelector: '.item' // the selector for the items in the grid
				});
			}
	  
	  });
			

			

			/* reshuffle when user clicks a filter item */
			$('ul#filterOptions li a').click(function (e) {
				e.preventDefault();

				// set active class
				$('ul#filterOptions li a').parent().removeClass('active');
				$(this).parent().addClass('active');

				// get group name from clicked item
				var groupName = $(this).attr('data-group');

				// reshuffle grid
				$grid.shuffle('shuffle', groupName );
			});

	});
</script>

<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul  class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>">インタビュー</a></li>
        </ul>
    </div>
</div>
<h3 class="title_page_interview clear">
	<img src="<?php echo url_root; ?>img/interview/interview-main-title.png" alt="インタビュー"/>
</h3>
<div class="group_interview_parent clear">
	<div class="clear">
		<ul id="filterOptions" class="parent_interview_list clear splitter">
        	<li class="segment-1 active">
				<a class="all" data-group="all" href="javascript:void(0);">全て見る</a>
			 </li>
        	<?php 
				$Data_category=To_Get_Data("kc_category_interview"," and kc_category_interview_status=0 order by kc_category_interview_date DESC");
				if($Data_category['cnt']>0):
				for($c=0;$c<$Data_category['cnt'];$c++):
				$ct=$c+2;
				$List_category=$Data_category[$c];
			?>
	    	 <li class="segment-<?php echo $ct; ?>">
				<a class="<?php echo $List_category['kc_category_interview_name_en']; ?>" data-group="<?php echo $List_category['kc_category_interview_name_en']; ?>"  href="javascript:void(0);"><?php echo $List_category['kc_category_interview_name_ja']; ?></a>
			 </li>
	         
             <?php 
			 		endfor;
			 	endif;
			  ?>
	    </ul>
    </div>
</div><!--End group_interview-->

<div class="data_interview_content clear">
	<ul id="data_interview" class="ourHolder list_interview_quit item_iterview_post clear">
      <?php
	  	 $Data_interview=To_Get_Data("kc_interview"," and kc_interview_status=0 and `kc_interview_realeated_link_check_hide`!=1 group by kc_interview_vol_number_slug order by kc_interview_page_number ASC,kc_interview_vol_number_slug DESC");
	  	$count_interview=$Data_interview['cnt'];
		if($count_interview>0):
		for($i=0;$i<$count_interview;$i++):
			$j=$i+1;
			$List_interview=$Data_interview[$i];
			//$id_interview_cate=$List_interview['kc_category_interview_id'];
			$id_interview=$List_interview['kc_interview_id'];
			
			$vol_slug_interview=$List_interview['kc_interview_vol_number_slug'];
			$page_number_in=(int)$List_interview['kc_interview_page_number'];
			//echo $kc_interview_page_number;
				$Data_load_category=Get_Data("kc_category_interview as A join category_join_kc_interview as B on A.kc_category_interview_id=B.kc_category_interview_id"," and A.kc_category_interview_status=0 and B.kc_interview_id=$id_interview");
				$category_name_ja=$Data_load_category['kc_category_interview_name_ja'];
				$category_name_en=$Data_load_category['kc_category_interview_name_en'];
			$link_detail=url_root."interview/".$category_name_en."/".$vol_slug_interview."/".$page_number_in.".html";
			$src_thumnail_interview=url_root_main.$url_images_thumnail.$List_interview['kc_interview_thumbnail'];
			$alt_thumnail_interview=$List_interview['kc_interview_thumbnail_alt'];
	   ?>
        <li class="item" data-groups='["all", "<?php echo $category_name_en; ?>"]' data-type="<?php echo $category_name_en; ?>" data-id="id-<?php echo $j; ?>">
            	<a href="<?php echo $link_detail; ?>" target="_top">
                    	<img src="<?php echo $src_thumnail_interview; ?>" alt="<?php echo $alt_thumnail_interview; ?>" />
                </a>
                   <div class="title_end">
                   			<p><?php echo $List_interview['kc_interview_vol_number'];?></p>
                        	<p><?php echo $List_interview['kc_interview_company_name'];?></p>
							<p>
                            	<?php 
									$content_postion=unserialize($List_interview['kc_interview_postion']);
									$content_array_postion=@array_filter($content_postion);
									if(!empty($content_array_postion)):
										$interviewee_fullname="";
										for($u=0;$u<count($content_array_postion);$u++):
											$interviewee_fullname.=$content_array_postion[$u]['interviewee_fullname']."氏&";
										endfor;
										echo substr($interviewee_fullname,0,-1);
									endif;
								?>
                            </p>
                  </div>
                  <div class="title_hover">
                      <p><?php echo $List_interview['kc_interview_title']; ?></p>
                 </div>
                 
                 <div id="gradient_editor"></div>
      	</li>
       
       <?php 
	   		endfor;
	   		endif;
	   ?>
      </ul>
  </div><!--data_interview_content-->
    
    



