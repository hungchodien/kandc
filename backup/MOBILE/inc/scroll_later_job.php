<!--<script src="js/jquery.smoothDivScroll-1.3.js" type="text/javascript"></script>-->
<link type="text/css" href="<?php echo url_root; ?>css/ticker_style.css" rel="stylesheet"/>
<script src="<?php echo url_root; ?>js/jquery.modern-ticker.min.js" type="text/javascript"></script>
<!--<script type="text/javascript">
    // Initialize the plugin with no custom options
    jQuery(document).ready(function ($) {

        $("div#makeMeScrollable").smoothDivScroll({
            autoScrollingInterval: 30,
            hotSpotScrollingStep: 0.1,
            mousewheelScrolling: true,
            manualContinuousScrolling: true,
            autoScrollingMode: "onStart"
        });

        $("#makeMeScrollable").bind("mouseover", function() {
            $(this).smoothDivScroll("stopAutoScrolling");
        }).bind("mouseout", function() {
                $(this).smoothDivScroll("startAutoScrolling");
            });


    });
</script>-->
<script type="text/javascript">
	 jQuery(document).ready(function ($){
			$(".ticker1").modernTicker({
			effect: "scroll",
			scrollInterval: 20,
			transitionTime: 800,
			autoplay: true
			});
	}); 
</script>
<div id="news_slider">

<div id="news_slider_content" class="round_corner clear">
    <div id="news_icon"><img src="<?php echo url_root;?>img/icon-breaking-news.png" alt="最新情報" title="最新情報" /></div>
    <div id="makeMeScrollable" class="clear">
    	<div class="ticker1 modern-ticker mt-round mt-scroll" id="ticker1">
           <div class="mt-news">
        	<ul id="ticker_top_yes">
     <?php 
			$query_job_new=Get_New_Job_ticker(10);
			while($row_job_new=mysql_fetch_array($query_job_new)):
				$name_job_new=$row_job_new['job_title'];
				if(empty($name_job_new)):
					$name_job_new=$row_job_new['job_name'];
				endif;
				$id_job_new=$row_job_new['order_id'];
				$listed_timestamp=date('m月d日 H:i', strtotime($row_job_new['listed_timestamp']));
				$category_id_get=$row_job_new['category_id'];
				$link_job_new=url_root."jobinfo/".$id_job_new."/".$category_id_get.".html"; 
				
				
				$salary_max_new=$row_job_new['salary_max'];
					$salary_min_new=$row_job_new['salary_min'];
					
					if((int)$row_job_new['salary_max'] >700): 
						$salary_max_new=" ～ ".$row_job_new['salary_max']."万円程度";
						else:
						$salary_max_new="";
					endif;
					if((int)$row_job_new['salary_min'] >700): 
						$salary_min_new=$row_job_new['salary_min']."万円";
						else:
						$salary_min_new="";
					endif;
					
					if((int)$row_job_new['salary_max'] <=700):
								$salary_max_new=" ～ 700 万円";
								$salary_min_new="";
					else:
							if((int)$row_job_new['salary_min']<600):
								$salary_min_new="";
							endif;
					endif;

					if((int)$row_job_new['age_min'] >0): 
						$age_min_new=$row_job_new['age_min'];
						else:
						$age_min_new="-";
					endif;
					
					if((int)$row_job_new['age_max'] >0): 
						$age_max_new=$row_job_new['age_max'];
						else:
						$age_max_new="-";
					endif;
					 $asg_group= $age_min_new."～".$age_max_new."才&nbsp;".$salary_min_new.$salary_max_new;
				
			?>
            <li>
        	<a href="
			<?php if(!empty($name_job_new)): ?>
			<?php echo $link_job_new; 
				else:
					echo "#";
				endif;
			?>" title="<?php echo $name_job_new; ?>" ><span class="title_job_itemt_1">【<?php echo $name_job_new; ?>】</span><span class="view_job_item_1"> 想定年収: </span><span class="view_job_item_2"><?php echo $asg_group;?></span><span class="date_job_item">(<?php echo $listed_timestamp; ?>)</span><span class="space_job_item">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
            
        	<?php 
				endwhile;
			?>
             </ul>
            </div><!--End mt-news-->
            </div>
    </div>
    </div>

</div>