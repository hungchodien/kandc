<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	$category_consul_id=(int)$_POST['typeID'];
	 $where_total_consul_content = "and category_consul_status=0 and category_consul_id={$category_consul_id} ";
$Data_consul_content = To_Get_Data("category_consul", $where_total_consul_content);
	$category_consul_title=$Data_consul_content[0]['category_consul_title'];
	$category_consul_subtitle=$Data_consul_content[0]['category_consul_subtitle'];
	$category_consul_thumnail=$Data_consul_content[0]['category_consul_thumnail'];
	
	?>							
    					<div class="thumnail_category"><img src="<?php echo "./upload_thumnail/".$category_consul_thumnail; ?>" border="0"></div>
                        <div class="title_category"><h2><?php echo $category_consul_title; ?></h2>
                        	<p><?php echo $category_consul_subtitle; ?></p>
                        </div>
                        <div class="close_category"><a id="close_tab_category" onClick="ClickDiv();"  href="javascript:void(0);"><img src="img/1379593090_close.png" border="0" width="16"/></a></div>
