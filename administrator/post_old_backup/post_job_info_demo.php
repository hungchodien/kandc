<?php 
		@include_once('Lib/_init.php');
			@include_once('../Lib/_init.php');
			@include_once('../../Lib/_init.php');
			@include_once('../../../Lib/_init.php');
	$id_f=$_GET['id'];
		if($op!="update")
		{
			$op_vis_str = "Public";
			$op_vis = "0";
			$op_date_year = date("Y");
			$op_date_month = date("m");
			$op_date_day = date("d");
			$op_date_hour = date("H");
			$op_date_minute = date("i");
		}
		

?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<div class="content_bg_icon"><img src="img/main/post_bg_icon.png" alt="" title="" /></div>
<div id="page_title" class="clearfix">
    <div class="title_icon"><img src="img/main/post_content_icon.png" alt="" title="" /></div>
    <h1 id="dashboard_title" class="content_title">Add New POST</h1>
</div>
<div id="progress">
        <div id="bar"></div>
        <div id="percent"></div >
	</div>
    <br/>

	<div id="message"></div>
<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data" >
	<input type="hidden" name="sid" value="<?php echo $sid; ?>" />
        <input type="hidden" name="model" value="<?php echo $op; ?>" />
        <input type="hidden" name="id" value="<?php echo $id_f; ?>" />
	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
            
            	  <div class="clear pd">
                	<!--Code upload csv-->
                     <p class="title_txt">Upload csv job </p>
                    	<div class="file_csv_up" id="text_input_file">
             			<input type="text" name="csv_job_info" id="csv_job_info" value="" />
             			</div>
            			 <div id="csv_upload"><input type="file" id="csv_info" name="csv_info" />Choose File</div>
						<div class="clear"></div>
                        <p>※データベースにアップするのに時間（4〜5分程度）かかります。</p>
               </div>
            
             
            
				<?php /*?><div class="clear pd">
                <p class="title_txt">Select category Job</p>
                	<div class="w100 pd">
                    
		<script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
   
    <script type="text/javascript" src="js/jquery.checkboxtree.js"></script>
   
                    		<div id="tree">
                            		
                            		<!--Begin code tree-->
                                  
                                    
                                    <?php 
                                    $Data_parent=To_Get_Data("`category`"," and `parent_id` is NUll order by `id` ASC","`id`,`name`,`key_name`");
									if($Data_parent['cnt'] > 0){
										
									echo "<ul class=clear>";
									$count_parent_cate=$Data_parent['cnt'];
									for($m=0; $m<$count_parent_cate; $m++){
										$List_parent = $Data_parent[$m];
										$id_parent=$List_parent['id'];
										$name_parent=$List_parent['name'];
										$name_parent_us=$List_parent['key_name'];
										?>
                                        <li>
                                        <input type="checkbox" name="check_box[]" value="<?php echo $id_parent; ?>">
                                        <label><?php echo $name_parent; ?> (<?php echo $name_parent_us; ?>)</label>
                                        	
                                        		<!--Begin Chilrent-->
                                                	<?php 
									 $Data_chil=To_Get_Data("`category`"," and `parent_id`='$id_parent' order by `id` ASC","`id`,`name`");
									 if($Data_chil['cnt'] > 0)
									 {
										 echo "<ul>";
										 $count_chil_cate=$Data_chil['cnt'];
										 for($j=0; $j<$count_chil_cate; $j++)
										 {
											 $List_chil = $Data_chil[$j];
											 $id_chil=$List_chil['id'];
											 $name_chil=$List_chil['name'];
											 ?>
                                             <li>
                                             <input type="checkbox" name="check_box[]" value="<?php echo $id_chil; ?>">
                                             <label><?php echo $name_chil; ?></label>
                                            </li>
                                             <?php 
										 }
										 echo "</ul>";
									 }
												?>
                                            	<!--End Chilrent-->
                                            
                                     	</li>
                                   <?php 
										}
										
									echo "</ul>";
									
									}
									?>
                                    
                                    </ul>
                                    <!--End code tree-->
                            </div>
                    </div>
                   
                </div>
                <?php */?>
                
              
               
               
               
			</div>
			
			<?php include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#csv_info').change(function(evt) {
       // alert($(this).val());
		$("#csv_job_info").val($(this).val());
		$("#csv_job_info").attr("value",$(this).val());
    });
	 $('#tree').checkboxTree({
		 initializeChecked: 'expanded',
	 	 initializeUnchecked: 'collapsed',
		 collapseImage: 'img/minus.png', 
		 expandImage: 'img/plus.png'
	 }); 
});
</script>