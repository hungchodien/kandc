<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
             <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
			<li><a href="<?php echo url_root; ?>job-search.html"><span>求人情報</span></a></li>
            <?php 
			if(!empty($parent_id_seo)):
			echo "<li>&nbsp;>&nbsp;</li>";
			echo "<li><a href='".url_root."category/job_group/".$parent_id_seo.".html'>".$category_seo_job_pa[0]['name']."</a></li>"; 
			endif;
			
			?> 
            <?php 
			if(isset($_GET['hcm'])):
			   echo "<li>&nbsp;>&nbsp;</li>";
               echo "<li><a href='".url_root."category/job_group/".$category_seo_job[0]['id'].".html'>".$name_category_seo_job_1."</a></li>"; 
			  else:
			  	if(!isset($category_seo_job[0]['id'])):
					echo "<li>&nbsp;>&nbsp;</li>";
			   		echo "<li><a href='".curPageURL()."'>ハイクラス求人</a></li>"; 
				else:
					if(isset($high_class)): 
						echo "<li>&nbsp;>&nbsp;</li>";
			   			echo "<li><a href='".curPageURL()."'>".$name_category_seo_job_1."</a></li>";
					else:
			 		echo "<li>&nbsp;>&nbsp;</li>";
			   		echo "<li><a href='".url_root."category/list/".$category_seo_job[0]['id'].".html'>".$name_category_seo_job_1."</a></li>";
					endif; 
			   	endif;
			  endif;
			  
			  ?> 
        </ul>
    </div>
</div>
<div id="page_category_name" class="clear">
    <div class="title-page_category clear">
        <h1 class="title-top_category l">
        
         <?php 
			if(!empty($parent_id_seo)):
				echo $category_seo_job_pa[0]['name']; 
			endif;
			
			?> 
            <?php 
			if(isset($_GET['hcm'])):
			
               echo $name_category_seo_job_1; 
			  else:
			  		if(!isset($category_seo_job[0]['id'])):
						echo "ハイクラス求人";
					else:
						echo $name_category_seo_job_1; 
					endif;
			   		
			  endif;
			  
			  ?> 
        
        </h1>

        <h2 class="sub-title-top l">厳選した<?php 
			if(!empty($parent_id_seo)):
			echo $category_seo_job_pa[0]['name']; 
			endif;
			
			?> 
            <?php 
			if(isset($_GET['hcm'])):
			
               echo $name_category_seo_job_1; 
			  else:
			  	if(!isset($category_seo_job[0]['id'])):
						echo "ハイクラス求人";
					else:
						echo $name_category_seo_job_1; 
					endif;
			  endif;
			  
			  ?> の求人情報です。</h2>
    </div>
   
</div>
<?php
		
		if(isset($hcm)):
			echo "<div id='related-employ' class='related-employ'>";
			include('ajax/job_category.php');
			echo "</div>";
			//include('inc/notice.php'); 

			?>	
	  			<div class="load_inc clear" id="load_inc" >
                
			<?php 
				$sid=$hcm;
				include('ajax/job_list_short.php'); ?>
			</div><!--End Load_inc-->
			<?php

		else:
			
			if(isset($list)): 
			$sid=$list;
			endif;
			if(isset($high_class)): 
			$sid=$high_class;
			endif;	
		
		if($sid>0 && !empty($sid)):
					$lang=$_SESSION['language'];
					$param="sid=$sid&language=$lang";
					if(isset($high_class)): 
					$numrows=Count_ListJob_ByCategory_highClass($sid);
					else:
						if($_GET['short']=='new'):
							$view_news_count="`J`.`new_flag`=1 and";
							$numrows=Count_ListJob_ByCategory($sid,$view_news_count);
						else:
							$numrows=Count_ListJob_ByCategory($sid);
						endif;
					endif;
						
					
	 ?>
     
 <script language="javascript">
  $(document).ready(function()
	{
		$('#order_select1').change(function() {
				var $index = 1;
				var order = $(this).find(":selected").val();
					//console.log("the value you selected_order: " + order);
				var view = $("#page_select1").find(":selected").val();
					//console.log("the value you selected_page: " + page);
				$("#load_inc").load("ajax/job_list.php?<?php echo $param; ?>&currentpage="+1+"&order="+order+"&view_page="+view,{index : $index
				});	
		  });
		  
		  $('#page_select1').change(function() {
			  	var $index = 1;
				var view = $(this).find(":selected").val();
					//console.log("the value you selected_page: " + page);
				var order = $("#order_select1").find(":selected").val();
					//console.log("the value you selected_order: " + order);
				$("#load_inc").load("ajax/job_list.php?<?php echo $param; ?>&currentpage="+1+"&order="+order+"&view_page="+view,{index : $index					                  });
		  });
	});
</script>
   

	<div class="load_inc clear" id="load_inc" >
		<?php //include('ajax/job_list_short.php'); ?>

		<?php 
		if($_GET['short']=='new'):
			$new_flag=$_GET['short'];
			include('ajax/job_list_short.php'); 
		else:
			$new_flag='';
			include('ajax/job_list_short.php'); 
		endif;
		
		
		?>

		<?php include('inc/notice.php');?>
       <!--	<script language="javascript">
      Load_Content_List('<?php //echo $param; ?>',1,'rand','<?php //echo $rowsperpage_category_job;?>');
    </script>-->
        
	</div><!--End Load_inc-->
	<?php 
			endif;
		endif;
	?>

