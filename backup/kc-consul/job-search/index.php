<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>"> 求人検索</a></li>
        </ul>
    </div>
</div>



<div class="content clear">
	<div class="left_content l">
    	<style type="text/css">
        	.job_info_list_index{
				margin: 0;
				padding:15px 0;
			}
			.title_group_job_top{
				border-bottom:none;
			}
        </style>
    	<?php include('inc/category_public.php'); ?>
    </div><!--left_content-->
    <div class="right_content r"><?php include('inc/slide_bar_job_search.php'); ?></div>
</div>