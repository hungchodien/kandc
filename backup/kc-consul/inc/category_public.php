<!--Job info-->
<script type="text/javascript">
		
        $(document).ready(function(){
			$(window).on('load resize', function () {
				var vs_767= window.matchMedia("only screen and (max-width: 767px)");
				if(vs_767.matches)
				{
					$("ul.job_list_child_fix li:nth-child(1) .cat_child_1").attr('style','width:inherit !important');
					$("ul.job_list_child_fix li:nth-child(2) .cat_child_1").attr('style','width:inherit !important');
					$("ul.job_list_child_fix li:nth-child(3)").attr('style','width:100% !important');
					
					$("ul.job_list_child_fix li:nth-child(3) .cat_child_1").attr('style','width:inherit !important');
		
					$("ul.job_list_child_fix li:nth-child(4)").attr('style','width:100% !important;margin-left:0px;');
					$("ul.job_list_child_fix li:nth-child(4) .cat_child_1").attr('style','width:inherit !important;');

				}else{
					$("ul.job_list_child_fix li:nth-child(1) .cat_child_1").attr('style','width:inherit !important');
					$("ul.job_list_child_fix li:nth-child(2) .cat_child_1").attr('style','width:inherit !important');
					$("ul.job_list_child_fix li:nth-child(3)").attr('style','width:52% !important');
					
					$("ul.job_list_child_fix li:nth-child(3) .cat_child_1").attr('style','width:inherit !important');
		
					$("ul.job_list_child_fix li:nth-child(4)").attr('style','width:40% !important;margin-left:0px;');
					$("ul.job_list_child_fix li:nth-child(4) .cat_child_1").attr('style','width:inherit !important;');
				}
			});
		});
    
    
    </script>



        	<div class="job_info_list clear job_info_list_index" style="margin-top:0px;">
            <div class="clear title_group_job_top">
            	<div class="l title_job_top">
            		<img src="<?php echo url_root; ?>img/job-main-title.png" alt="求人情報"/>
            	</div>
                <!--<div class="l title_job_end">
                	公開可能な求人から厳選して掲載しています。
                </div>-->
            </div>



			 <?php if($only_index=='category_public'): ?>
            	<div class="clear picup_job_index">
                   <div class="clear group_picup_job_index_b">
                	<h4 style="color:#b39f68; font-size:17px;">厳選注目求人<!--<img src="<?php echo url_root; ?>img/home/title-pickup-job.png" alt="Pick up job"/>--></h4>
                   
       
                   <ul class="clear list_item_picup" >
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1026233">大手IT企業　ディレクター / 事業部長　～1900万円程度</span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1024988">ダイレクトマーケティング企業　経営企画・M&amp;A　～1200万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1028078">コーポレートPMO（経営戦略支援）/ シニアダイレクター　～1300万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1007702">ディレクター　～3500万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1028028">コンビニエンス会社　ビジネスアナリスト　～1100円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1027931">大手外食チェーン　財務マネージャー　～1200万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1022474">急成長企業　経営管理担当　～1300万円程度</a></span></li>	
                   <li><span class="title"><a href="http://www.kc-consul.com/pickjob.html#related_list_job_1027868">スタートアップベンチャー　CEO・CMO候補　～900万円程度（ストックオプション）</a></span></li>	
                   <li><span class="title">外資系PEファンド　～3000万円程度（非公開案件）</span></li>	
                   </ul>
                   	<div class="content_note_item_picup clear">
                    	※非公開案件のため、詳細を掲載できないものがありますので、ご興味をお持ちの求人がある場合は、 <a href="<?php echo url_root; ?>entry/?entry_id=1014585">こちら</a>  からご相談ください。
                    </div><!--content_note_item_picup-->
                    </div>
                 </div>
             <?php endif; ?>


         	<div class="title_category_job clear"><span>職種で探す</span></div>
            
            <div class="content_category clear">
            	<ul class="job_list_parent_item clear">
                <?php 
                
                
                                    $query_list=HCMListCategory();
                                    
                                    while($row_list=mysql_fetch_assoc($query_list))
                                    {
                                        $id_category=$row_list['id'];
                                        $query_check=Check_HCMCategory($id_category);
                                        
                                        if($query_check>0 )
                                        {
                                            if($id_category==9 || $id_category==2):
                                               if($row_list['job_count']>=1):	
                                            ?>
         		<li>
                <a href="<?php echo url_root; ?>category/job_group/<?php echo $row_list['id'].".html"; ?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst" ><span class="category_txt">
                                            <?php 
                                            echo $row_list['name'];
                                            //echo "&nbsp;({$row_list['job_count']})</span>";
											echo "&nbsp;(".Count_ListJob_ByCategory($row_list['id']).")</span>";
                                             ?>
                                            </a>
                                        
                                         <!--Get Sub Category----------------------------->
                        <ul class="job_list_child <?php if($id_category==9): echo "job_list_child_fix"; endif; ?> clear">
                            <?php 
                                $query_yes=HCMCategory_Parent_list($id_category);
                            //print_r($query);
                            while($list_view=mysql_fetch_array($query_yes))
                            {
								$cat_id_news=$list_view['id'];
                                if($list_view['job_count']>=1):
                                ?>
                            <li>
                 <a class="title_f1 hcm_category_lisst" href="<?php echo url_root; ?>category/list/<?php echo $list_view['id'].".html"; ?>">
            	<span class="cat_child_1"><?php echo $list_view['name'];  ?></span>
		</a><a class="title_f2 hcm_category_lisst" href="<?php echo url_root; ?>category/list/short/new/<?php echo $list_view['id'].".html"; ?>">(新着&nbsp;<span class="c00"><?php 
					//echo $list_view['new_count'];
					//$cat_id_news=$list_view['id'];
					$view_news_cat="`J`.`new_flag`=1 and ";
					$numrows_news=Count_ListJob_ByCategory($cat_id_news,$view_news_cat);
					echo (int)$numrows_news;
			   ?></span>&nbsp;件</a><a class="title_f1 class="title_f1"" href="<?php echo url_root; ?>category/list/<?php echo $list_view['id'].".html"; ?>">/全&nbsp;<span class="c00"><?php 
				//echo $list_view['job_count']."<br/>"; 
				$numrows_news1=Count_ListJob_ByCategory($cat_id_news);
				echo (int)$numrows_news1;
			?></span>&nbsp;件)
            </a>
                            </li>
                            
                                <?php 
                                else:
                                ?>
                                <li>
                                 <div class="sub_title_name"><?php echo $list_view['name'];  ?>&nbsp;(<span class="c00 black"><?php echo $list_view['job_count']; ?></span>件)</div>
                                </li>
                            <?php
                                 endif;
                            	}
                          	?>
                   </ul>  
                   
               </li>
                            
                            <!--ENd Get Sub Category ------------------------->
                                      								
                                            <?php 
                                                 endif;
                                                endif;
                                                
                                            }
                                            else
                                            {
                                                if($id_category!=1 && $id_category==3 )
                                                    {
                                                        if($row_list['job_count']>=1):
                                        ?>
                                         <li>
                               <a href="<?php echo url_root; ?>category/list/<?php echo $row_list['id'] .".html";?>" name="<?php echo $row_list['name']; ?>" class="hcm_category_lisst" ><span class="category_txt">
                                            <?php 
                                            echo $row_list['name'];
                                            //echo "&nbsp;({$row_list['job_count']})</span>";
											echo "&nbsp;(".Count_ListJob_ByCategory($row_list['id']).")</span>";
                                             ?>
                                            </a></li>
                                       
                                        <?php 
                                                else:
                                            ?>
                                  		 <ul class="job_list_child clear">
                               				<li>
                                            <?php 
                                           		 echo $row_list['name'];
                                           		// echo "&nbsp;({$row_list['job_count']})";
											 	echo "&nbsp;".Count_ListJob_ByCategory($row_list['id']);
                                             ?>
                                            </li>
                                      	 </ul>
                                       </li>
                                            <?php
                                                    endif;
                                                    }
                                            }
                                    }
                                        
                                    ?>
                                    
                                    
                                 <li>
                                           <a class="hcm_category_lisst" name="" href="<?php echo url_root; ?>fund/category/jobs.html">ファンド（PE・VC) 
											<?php 
											$file_job_view=url_root."csv_info/"."jobs.csv";
											if (file_exists($file_job_view)) {
										   		$csv = read_CSV($file_job_view);
													$row_num=count($csv);
													echo "(".$row_num.")";
											}else{
													$csv = read_CSV($file_job_view);
													$row_num=count($csv);
													echo "(".$row_num.")";
												}
												 ?>                                    
                                           </a>
                                  </li>
                                    
                                    
                      </ul>              
            </div>
            
            
            <div class="search_job clear">
             <form class="search_form_kc search_form_query" method="post" action="<?php echo url_root; ?>search/0/page/1/<?php echo $_POST['frm_txt']; ?>">
            	<!--<div class="search_category l">
                	 <h3 class="search">年収で探す</h3>
                      <select class="select_form1 category_select_search salary_option_job" name="search_select_salary" id="search_select_category">
                              <option value="">ご希望の年収を選択してください。</option>
                              <option  value="<?php echo url_root; ?>find/salary/page/1/-800万円">～800万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/800万円-1000万円">800万～1000万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/1000万円-1500万円">1000万～1500万円</option>
                              <option value="<?php echo url_root; ?>find/salary/page/1/1500万円-">1500万円</option>      
                      </select>
                </div>-->
                <div class="search_post_txt r" style="float:none; width:100%;">
                    	<h3 class="search">キーワードで探す</h3>
                   		<input type="text" name="frm_txt" class="search_form_txt_index text_search search_form_txt"  style=" width:545px;"/>
                        <span class="button_search"><input type="submit" value="検索" class="button_submit" /></span>
                   
                </div>
             </form>    
            </div>
            
        </div><!--job_info_list-->
        <!--End Job info-->
        
        
        <div class="clear group_note_sd">
        	<div class="clear content_group_note_sd">
	        	<h3><img src="<?php echo url_root; ?>img/jobinfo/secret-job-title.png" border="0" alt="非公開求人を紹介してもらう"/></h3>
	            <p>
	            当社だけに特別にオーダーをいただいている公開できないコンフィデンシャル案件もございます。非公開求人も含めてご紹介をご希望の方はこちらから<a href="<?php if(isset($_GET['entry_id'])){
						$link_entry_easy.='?entry_id='.$_GET['entry_id'];
					}else{
						$link_entry_easy.='?entry_id=1014585';
					}
					echo url_root."entry/".$link_entry_easy;?>" target="_blank">お申込み</a>ください
	            </p>
                <div class="secret_entry_btn"><a href="<?php echo url_root."entry/?entry_id=1014585"; ?>" target="_blank"><img src="<?php echo url_root; ?>img/entry/button-secret-job-entry.png" alt="非公開求人を紹介してもらう"/></a></div>
            </div>
        </div><!--group_note_sd-->
        
        
        
        
        
        
        
        
        
        
        
        
        