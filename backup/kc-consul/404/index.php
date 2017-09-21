<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>">お探している情報が見つかりません</a></li>
        </ul>
    </div>
</div>
<div class="title_error clear">
	<h4 class="title_top_error"><img src="<?php echo url_root; ?>img/404/404-text-001-kreis-consul.png" alt="お探している情報が見つかりません"/></h4>
	<h5 class="title_top2_error"><img src="<?php echo url_root; ?>img/404/404-text-002-kreis-consul.png" alt="404 PAGE NOT FOUND 記事のURLが変更、または削除された可能性があります。"/></h5>
	<h6>
	<a href="<?php echo url_root; ?>" class="index_link_click">サイトのトップに戻る</a>
	</h6>
</div>

<div class="content_error clear">
	<div class="job_info_list clear">
		 <div class="clear icon_404_group_job"><img src="<?php echo url_root;?>/img/404/404-title-job-info-kreis-consul.png" alt="求人情報検索"/></div>
		 
		 <!--Begin Category-->
         <div class="content_category_404">
			   <div class="title_category_job clear">職種で探す</div>
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
		<h1 class="search">キーワードで探す</h1>
        <form class="search_form_kc" method="post" action="<?php echo url_root_main; ?>search/0/page/1/<?php echo $_POST['frm_txt']; ?>">
        	<input type="text" name="frm_txt" class="text_search" />
            <span class="button_search"><input type="submit" value="検索" class="button_submit" /></span>
        </form>
	</div>
    </div>
		 <!--End Category -->
		 
		 
		 
	</div><!--End job_info_list-->
	
	<div class="interview_list_error clear">
		 <div class="clear icon_404_group_job"><img src="<?php echo url_root;?>/img/404/404-title-interview-kreis-consul.png" alt="インタビュー"/></div>
		 
		 <!--Begin Interview Group-->
	<div class="clear group_interview_top_index">
<div class="clear interview_content_group">
            	<ul class="item_iterview_post clear">
                
                
                <li>
                    <a href="<?php echo url_root; ?>interview/consultant-post/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/03/thumb.png" alt="アマゾン ジャパン株式会社 渡部 一文氏"/>
                    </a>
                    	<div class="title_end">
                         <p>Vol.03</p>
                        	<p>アマゾン ジャパン株式会社</p>
                            <p>渡部 一文氏</p>
                        </div>
                        
                        <div class="title_hover">
                       		<p>私がコンサルティングファームで学んだこと、アマゾンのマネジメントで実践していること</p>
                     	</div>
                     
                        <div id="gradient_editor"></div>
                    </li>
                    <li>
                    <a href="<?php echo url_root; ?>interview/inexperience/01/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/inexperience/01/thumb.png"  alt="ボストンコンサルティンググループ 梶 紗瑤子氏"/>
                    </a>
                    	<div class="title_end">
                        <p>Vol.01</p>
                        	<p>ボストンコンサルティンググループ</p>
                            <p>梶 紗瑤子氏</p>
                        </div>
                        
                         <div class="title_hover">
                       		<p>金融業界からコンサルタントへ転身CFOからCEOへの視点へ</p>
                     	</div>
                        
                        <div id="gradient_editor"></div>
                    </li>
                    
                    <li>
                    <a href="<?php echo url_root; ?>interview/consultant-post/09/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/09/thumb.png"/>
                    </a>
                    	<div class="title_end">
                        <p>Vol.24</p>
                        	<p>株式会社JVCケンウッド</p>
                            <p>田村 誠一氏</p>
                        </div>
                        
                         <div class="title_hover">
                       		<p>戦略コンサルタントを経て、国内大手企業の経営陣に参画。</p>
                     	</div>
                        <div id="gradient_editor"></div>
                    </li>
                    
                    <li>
                    <a href="<?php echo url_root; ?>interview/top/03/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/03/thumb.png"  alt="株式会社野村総合研究所 此本 臣吾氏"/>
                    </a>
                    	<div class="title_end">
                        <p>Vol.19</p>
                        	<p>株式会社野村総合研究所</p>
                            <p>此本 臣吾氏</p>
                        </div>
                         <div class="title_hover">
                       		<p>従来のメソッドではもはや問題は解決できない。</p>
                     	</div>
                        
                        <div id="gradient_editor"></div>
                    </li>
                    <li>
                    <a href="<?php echo url_root; ?>interview/top/05/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/top/05/thumb.png" alt="株式会社フィールドマネージメント 並木 裕太氏"/>
                    </a>
                     <div class="title_end">
                     <p>Vol.27</p>
                        	<p>株式会社フィールドマネージメント</p>
							<p>並木 裕太氏</p>
                     </div>
                     <div class="title_hover">
                       	<p>日本発のプロフェッショナルサービスで、コンサルティングの歴史さえ変えていきたい。</p>
                     </div>
                     <div id="gradient_editor"></div>
                   </li>
                   
                   <li>
                    <a href="<?php echo url_root; ?>interview/consultant-post/07/" target="_top">
                    	<img src="<?php echo url_root; ?>img/interview/consultant-post/07/thumb.png"  alt="株式会社YCP Japan 片野 大輔氏"/>
                    </a>
                    	<div class="title_end">
                        <p>Vol.17</p>
                        	<p>株式会社YCP Japan</p>
                            <p>片野 大輔氏</p>
                        </div>
                        
                         <div class="title_hover">
                       		<p>20代30代でも、経営は担える。アジアへ向けて経営者を輩出するプラットフォームを、ここで創りたい。</p>
                     	</div>
                        
                        <div id="gradient_editor"></div>
                    </li>
                   <!--Next--> 
                      
                  </ul>
            </div><!--interview_content_group-->

</div>
		 
		 <!--End Interview Group-->
		 
		 
		 
	</div>
	
	<div class="backindex clear r">
		<a class="backto_index_bottom" href="<?php echo url_root; ?>"> サイトのトップに戻る</a>
	</div>

</div>