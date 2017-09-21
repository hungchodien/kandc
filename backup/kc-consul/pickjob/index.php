<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>">Pick up job</a></li>
        </ul>
    </div>
</div>


<script type="text/javascript">
	jQuery( document ).ready(function($){
		$(window).on('load hashchange', function (){
			var url_hash=$(location).attr('hash').replace("#", "");
			url_hash=url_hash.replace("/", "");
			if(url_hash!="")
			{
					$('body,html').animate({
							scrollTop: $("#"+url_hash).offset().top
					}, 800);
					return false;
			}
			else
			{
				return;
			}
		});
	});
</script>
<div class="content clear">

	<div class="left_content pickjob  l">
    	<!--<div style="margin:0 0 10px 0;" class="clear" id="page_category_name">
	    		<div class="title-page_category">
			        <h3 class="title-top_category">素敵な住空間創りのきっかけ」を提供するスタートアップ企業</h3>
					<h4 class="sub-title-top">シニアコンサルタント 入江 祥之</h4>
                    <div class="content_pickjob clear">
                    	12 兆円もの巨大市場である、リフォーム・注文住宅市場をターゲットにビジネスを拡大するスタートアップベンチャー企業。日本では諸外国に比べ、リフォームやリノベーション市場の割合が小さいとされる一方で、政府の成長戦略上では成長余地の高い分野と定められています。同社は、「日本そして世界の住空間を素敵に」というビジョンを掲げ、ユーザーが自分のイメージに合う理想の住空間を探し、それを創ることができる素敵なプロフェッショナル（建築家やリフォーム業者、インテリアメーカー等）に出会えるプラットフォーム創りを推進しています。住宅やインテリア雑誌が好きな方々はきっとファンになるであろう、ハイクオリティなコンテンツが充実しています
                    </div><!--content_pickjob-->
	    		<!--</div>title-page_category-->
   		<!--</div>#page_category_name-->
        
        <div id="load_inc" class="load_inc clear">
        	<?php 
				$file_job=url_root."pickjob/jobs.csv";

				 $csv = read_CSV($file_job);
				 //$row_num=count($csv);

				 if(count($csv) > 0):
					  $row_num=count($csv);
				  else:
					  $csv = read_CSV_news($file_job);
					  $row_num=count($csv);
				  endif;


				 if($row_num<=0):
				 	//header("Location:".url_root."404.html");
					//exit();
					echo "<p>CSV file not redding</p>";
				 endif;
			?>
        	<div id="page-nav" class="page-nav clear">
        		<div class="search-number-left-text l"> 検索件数 : <?php  echo $row_num; ?>件</div>
            </div><!--#page-nav-->
            
            <?php 
				$i=0;
				//$csv
				for($i=0;$i<$row_num;$i++):
					$row_list_job=$csv[$i];
					//print_r($row_list_job);
				
					if(!empty($row_list_job)):
			?>
            
            	 <!--  the start job info control --->
        <div id="related_list_job_<?php echo $row_list_job[0]; ?>" class="related-employ ">
            <div class="related-employ-title clear">
            	<?php $category_id=GetCategoryBy_Job_order($row_list_job[0]); ?>
				<?php 
								if ($row_list_job[1]==1)
								{
									echo " <img src='".url_root_main."img/index/icon-new.png'/>";
									
								}
								if ($row_list_job[1]==0)
								{
									echo "";
								}?>
                 <h2 class="title_s"><?php echo "[".$row_list_job[0]."]"; ?> <a href="javascript:void(0);" onclick="Load_Job(<?php echo $row_list_job[0]; ?>)">
					<?php
	  				if($row_list_job[53]):
						echo $row_list_job[53];
					else:
						echo $row_list_job[22];
					endif; ?>

						</a> </h2>
               
            </div>
            <!--<div style="padding: 20px 0px">
                グローバルでの事業機会が増加している同社で、職種に関係なく、海外拠点を含めた事業戦略の立案から泥臭い実行に関わ りたいという方を歓迎します。
            </div>-->
            <div class="related-employ-duty clear">
                <table class="related-table">
                    <tr>
                        <td class="related-duty-row1"> 勤務地</td>
                        <td class="related-colspan-3"><b><?php echo  $row_list_job[30]; ?><?php echo  $row_list_job[31]; ?></b></td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">想定年収</td>
                        <td class="related-colspan-3"><b>
							<?php 

					$salary_max=$row_list_job[38];
					$salary_min=$row_list_job[37];
					
					if((int)$row_list_job[38] >0): 
						$salary_max=" ～ ".$row_list_job[38]."万円程度";
						else:
						$salary_max="-";
					endif;
					if((int)$row_list_job[38] >0):
					 	$salary_min=$row_list_job[37]."万円";
						else:
						$salary_min="-";
						endif;
					if((int)$row_list_job[38] <=700):
								$salary_max=" ～ 700 万円";
								
								$salary_min="";
					 else:  
						  		if((int)$row_list_job[37]<600):
									
									$salary_min="";
								endif;
					endif;
						
					
					
					
					if((int)$row_list_job[35] >0): 
						$age_min=$row_list_job[35];
						else:
						$age_min="-";
					endif;
					
					if((int)$row_list_job[36] >0): 
						$age_max=$row_list_job[36];
						else:
						$age_max="-";
					endif;
					
					//if($salary_max!=""): $salary_max =" ～ ".$row_job['salary_max']."万円程度"; endif;
					//if($salary_min!=""): $salary_min=$row_job['salary_min']."万円"; endif;
					// echo $age_min."～".$age_max."才&nbsp;".$salary_min.$salary_max;	
					 echo $salary_max;	

						?></b>
</td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">職務内容</td>
                        <td class="related-colspan-3">
                            <?php echo $row_list_job[23]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="related-duty-row1">求めるスキル (必要条件)</td>
                        <td class="related-colspan-3"><?php echo $row_list_job[24]."<br/>".$row_list_job[25]; ?>
                        </td>
                    </tr>
                    
                     <tr>
                        <td class="related-duty-row1">英語レベル</td>
                        <td class="related-colspan-3">
                        	<?php 
								if(!empty($row_list_job[26])):
									echo $row_list_job[26]."&nbsp;."; 
									if(!empty($row_list_job[27])):
										echo "Toeic:&nbsp;".$row_list_job[27];
									endif;
								else:
									echo "------";
								endif;
								?>
                        
                        </td>
                    </tr>
                    
                    
                </table>
               <!--<div class="ct-readmore1 clear readmore_index">
                <a href="<?php echo url_root; ?>jobinfo/<?php echo $row_list_job[0]; ?>/<?php echo $category_id;?>.html" target="_blank">
					 <a href="<?php echo url_root; ?>fund/jobinfo/<?php echo $_GET['file']; ?>/<?php echo $row_list_job[0]; ?>.html" target="_blank">
					<span>詳しく見る</span>
					<span class="next_btn"></span>
					</a>
				</div>-->
                 <div class="tbl_list_job clear">
                	<a target="_blank" class="tbl_entry_clc" href="<?php echo url_root; ?>entry/?entry_id=<?php echo $row_list_job[0]; ?>"><img src="<?php echo url_root; ?>img/entry/job-entry-button.png" /></a>
                 </div>
                
            </div>
        </div>
            
            <?php 
					endif;
				endfor;
			?>
            
            
        </div><!--load_inc-->
        
        
    	
    </div><!--left_content-->
    
    
    <div class="right_content r">
	<?php include('inc/slide_bar_job_search.php'); ?>
    </div>
    
    
    
</div>