<?php
	ob_start();
?>
<?php 
if ($_SERVER['HTTP_HOST'] != "www.kandc.com") {
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: http://www.kandc.com".$_SERVER['REQUEST_URI']);
			exit; 
		}
	@include('../config_mobile.php');
	@include('../inc/header.php'); 
	$root_url_page=url_root."lp-entry/";
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $root_url_page; ?>style.css" media="all" />
 <script type="text/javascript">
 	$( document ).ready(function() {
    	$("#copyR").attr('style', 'width: 68%!important;');
		$("#to_pc_icon").attr('style', 'width: 30%!important;');
		
	});
 
 </script>
 <div id="content" class="inside clear">
       <!--****************************************************-->
	<div class="bg_white content_inside block_content clear">
    
    	<div class="clear header_lp_title_img">
    	<h1><img src="<?php echo $root_url_page; ?>img/title.png" alt="タイトル"/></h1>
        </div>
        <div class="clear header_lp_title_txt">
        <h3>出会うコンサルタントによってこれからのあなたのキャリアが変わります。 いいコンサルタントに出会うこと、それが転職成功の第一歩です。</h3>
        </div>
        
        <!--Consultant-->
         <div class="consultant-list clear">
         <?php 
		 
			$Data_Consultant=To_Get_Data("consultant"," and `consultant_Status`=0  order by `consultant_Date` DESC","`consultant_ID`,`consultant_Image`,`consultant_Name`,`consultant_Thumb`,`consultant_Thumb_alt`");
			if($Data_Consultant['cnt']>0){
					for($i=0; $i<$Data_Consultant['cnt']; $i++){
							$List_Consultant = $Data_Consultant[$i];
			$name_Consultant=$List_Consultant['consultant_Name'];
			$ID_Consultant=$List_Consultant['consultant_ID'];
			$image_thumnail_Consultant=url_root_domain.$url_images_thumnail.$List_Consultant['consultant_Thumb'];
			$image_thumnail_Consultant_alt=$List_Consultant['consultant_Thumb_alt'];
			$link_Consultant=url_root."consultant/".$ID_Consultant.".html";
			?>
            	 
           		 <a href="<?php echo $link_Consultant; ?>" title="<?php echo $name_Consultant; ?>" target="_self" class="consultant_img_index"><img src="<?php echo $image_thumnail_Consultant; ?>" alt="<?php echo $image_thumnail_Consultant_alt; ?>" title="<?php echo $image_thumnail_Consultant_alt; ?>" border="0"/></a>
        		
            <?php 
						}
				
				}
				else{
				?>
                    <div class="not_found"><center>Not Found!</center></div>
                   <?php
						
				}
		?>
           
            
        </div>
    <!--Ket Thuc Noidung-->
        
        <div class="clear top_lb_content_entry">
        	<h3><img src="<?php echo $root_url_page; ?>img/future-title.png" alt="特徴 背景"/></h3>
        	<div class="group_txt_lb clear">
				
				<div class="item_lb_txt1 clear">
					<p class="title_item">コンサルティング力</p>
					<p class="content_item">
					30代マネージメント層以上の方々をサポートする上で、私たち自身も幅広い知識とスキルが要求されます。それにお応えできるよう、当社では、年間100時間を越える社内外の研修を通して、コンサルタント一人ひとりのコンサルティング力の向上を図っています。
					</p>
				</div>
				
				<div class="item_lb_txt1 clear">
					<p class="title_item">GCDFキャリアカウンセラー資格</p>
					<p class="content_item">
				「コンサルティング力を強みにしている人材紹介会社はたくさんありますが、私たちは「コンサルティング力の向上」を事業の最優先課題として位置づけ、積極的に取り組んできています。
					</p>
				</div>
				
			</div>
        </div>
        
        <div class="clear txt_end_lp_footer"><img src="<?php echo $root_url_page; ?>img/text.png" alt="次へ"/></div>
        <div class="clear tbl_entry_lp_button"><a href="<?php echo url_root; ?>entry/"><img src="<?php echo $root_url_page; ?>img/button-entry.png" alt="いますぐ転職無料エントリー"/></a></div>
        
        
    </div><!--bg_white content_inside block_content clear-->

		<!--**************************-->
 </div><!--End content-->
    
    
    <?php @include('../inc/footer.php'); ?>
<?php 
	ob_flush();
?>