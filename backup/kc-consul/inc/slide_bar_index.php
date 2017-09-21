<div class="slide_bar clear">
	<!-- the start new newest -->
    <div id="news_newest" class="clear">
        <div class="job-new clear">
        
        	<!--Begin Banner-->
             <div class="title-link group_entry_easy clear">
             	<div class="btl_entry_easy clear">
                	 
				<a href="<?php

				$url_check_entry = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
							if (false !== strpos($url_check_entry,'entry')) {
								$link_entry.='entry_easy';
							} else {
								$link_entry.='entry/';
							}
 				//echo url_root."entry/?entry_id=1014585" 
				if(isset($_GET['entry_id'])){
					$link_entry.='?entry_id='.$_GET['entry_id'];
				}else{
					$link_entry.='?entry_id=1014585';
				}
			echo url_root.$link_entry;

?>" class="entry_tbl_kc" target="_blank">
                
					<img class="pc_show" src="<?php echo url_root; ?>img/entry/sidebar-entry-button-v2.png" alt="業界出身のコンサルに転職・キャリア支援を申し込む" />
                	<img class="mobile_show" src="<?php echo url_root; ?>img/entry/button-entry.png" alt="業界出身のコンサルに転職・キャリア支援を申し込む" />
					</a>
                </div><!--btl_entry_easy-->
                
                <div class="desc_entry_easy clear">
                	<span class="text-point">「現職コンサルタントの次のキャリア」</span>で悩まれている方、<span class="text-point">「未経験からコンサルタント」</span>への転職を希望されている方の転職・キャリア構築のお手伝いをいたします。お気軽にご連絡ください。
                </div><!--desc_entry_easy-->
                
             </div><!--group_entry_easy-->
            
            
             <div class="title-link clear">
             	<div class="clear group_feature_sidebar">
                	<ul class="clear list_item_feature">
                		<li>
                        	<img src="<?php echo url_root ?>img/home/feature-title-v2.png" alt="コンサル業界の転職に強い3つの理由" />
                        </li>
                		<li>
                        	
                       		<img src="<?php echo url_root ?>img/home/feature-01.png" alt="業界に精通した業界出身者によるキャリアサポート" />
                            
                        </li>
                		<li>                  	
                        	<img src="<?php echo url_root ?>img/home/feature-02.png" alt="20余年の人材紹介事業で積み重ねた信頼と実績" />         
                        </li>
                		<li>                      	
                        	<img src="<?php echo url_root ?>img/home/feature-03.png" alt="米国CCE認定資格保有者によるキャリアサポート" />    
                        </li>
                	</ul>
					<a class="features_a" target="_top" href="<?php echo url_root; ?>about-us/" ></a>
                </div>
             </div><!--title-link-->
            
            
            <div class="title-link group_entry_easy clear career_consultant_sidebar_group">
            	<div class="clear career_consultant_gr1">
	            	<div class="clear career_consultant_sidebar">
	                	<div class="l"><a target="_top" href="<?php echo url_root; ?>about-us/#consultant_part17" ><img src="<?php echo url_root ?>img/home/sidebar-consultant-irie.png" alt="キャリアコンサルタント 入江 祥之"/></a></div>
	                    <div class="l">
	                    	<div class="clear group_title_career_consultant">
                            	<a target="_top" href="<?php echo url_root; ?>about-us/#consultant_part17" >
	                        	<h4>キャリアコンサルタント</h4>
	                            <h3>入江 祥之</h3>
                             	</a>
	                        </div>
	                    </div>
	                </div><!--career_consultant_sidebar-->
	                <div class="gcdf_career_consultant clear">GCDF 資格取得：GCDF03472-JP</div><!--gcdf_career_consultant-->
	                <div class="clear desc_career_consultant">
	                前職は野村総合研究所にて IT コンサルティングに従事。現在クライス＆カンパニーでは、前職の経験を活かしてコンサルティング業界を専門に転職・キャリアのサポートを行う。
	                </div>
                </div><!--career_consultant_gr1-->
                
                <div class="clear career_consultant_gr2">
	            	<div class="clear career_consultant_sidebar">
	                	<div class="l"><a target="_top" href="<?php echo url_root; ?>about-us/#consultant_part25" ><img src="<?php echo url_root ?>img/home/sidebar-consultant-nagata.png" alt="キャリアコンサルタント 永田 憲章"/></a></div>
	                    <div class="l">
	                    	<div class="clear group_title_career_consultant">
                            	<a target="_top" href="<?php echo url_root; ?>about-us/#consultant_part25" >
	                        		<h4>キャリアコンサルタント</h4>
	                           	 	<h3>永田 憲章</h3>
                               </a>
	                        </div>
	                    </div>
	                </div><!--career_consultant_sidebar-->
	                <div class="gcdf_career_consultant clear">GCDF 資格取得：GCDF03508-JP</div><!--gcdf_career_consultant-->
	                <div class="clear desc_career_consultant">
                    前職はアクセンチュアにてコンサルティングに従事。現在クライス＆カンパニーでは、主にコンサルタントの次のキャリアを検討されている方の転職・キャリアのサポートを行う。
	                </div>
                </div><!--career_consultant_gr2-->
                <div class="clear link_career_consultant_ft">
                	<div class="r">
	                	<a target="_top" href="<?php echo url_root; ?>about-us/#consultant_part" class="read_more_career_consultant_sidebar">
	                    	<span>コンサルタント紹介</span>
	                        <span class="next_btn"></span>
	                    </a>
                    </div>
                </div>
            </div><!--group_entry_easy-->
            
             <div class="title-link group_entry_easy clear policy_sidebar">
             		<div class="policy_sidebar_title clear">
                    	<img src="<?php echo url_root; ?>img/home/sidebar-policy-title.png" alt="コンサルタントのキャリアを共に考える"/>
                    </div>
                    <div class="clear desc_policy_sidebar">
                    	<p>コンサルタントのキャリアは多岐に渡りますが、レイヤーが上がればコンフィデンシャルな案件も多く、「縁」と「タイミング」が非常に重要になってきます。個人のネットワークでは情報も限られ限界があり、また、コンサル経験者の増加に伴い、企業のジャッジも厳しくなっています。</p>
                        <p>そのような状況で我々は、現役コンサルタントの方には次のキャリアのさまざまな可能性をこれまでの 20 余年の弊社の事例からご提案させていただきます。また、未経験からコンサルタントを目指したい方には、コンサルティング業界特有の不透明な部分を解明し、コンサルタントの実像、中長期的なキャリアの魅力などをわかりやすくお伝えさせていただきたいと思っています。</p>
                        <p>まずは、お気軽にご連絡ください。今後のキャリアを共に考えていきませんか？</p>
                    </div>	
                    <div class="clear policy_sidebar_readmore">
	                	<div class="r">
		                	<a target="_top" href="<?php echo url_root; ?>about-us/#policy_part" class="read_more_career_consultant_sidebar">
		                    	<span>サービス理念</span>
		                        <span class="next_btn"></span>
		                    </a>
	                    </div>
                	</div>
             </div><!--policy_sidebar-->
            
            
             <div class="title-link group_entry_easy clear blog_sidebar">
             	<div class="blog_sidebar_title clear">
                    	<a target="_top" href="<?php echo url_root; ?>blog.html" class="read_more_career_consultant_sidebar"><img src="<?php echo url_root; ?>img/home/sidebar-blog-title.png" alt="blog キャリアコンサルタントのこぼれ話" /></a>
                </div>	
                
                
               <div class="clear blog_sidebar_content"> 
                <?php 
				 $Data_blog_slibar=To_Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID"," and A.kc_blog_status=0 order by A.kc_blog_date DESC limit 3");
				$count_blog_list_slibar=$Data_blog_slibar['cnt'];
				if($count_blog_list_slibar>0):
				 
							for($i=0;$i<$count_blog_list_slibar;$i++):
							$j=$i+1;
								$List_blog_slibar=$Data_blog_slibar[$i];
								$id_blog_slibar=$List_blog_slibar['kc_blog_id'];
								$link_detail_slibar=url_root."blog/".$id_blog_slibar.".html";
								$title_slibar=$List_blog_slibar['kc_blog_title'];
								$author_slibar=$List_blog_slibar['consultant_Name'];
								
								$blog_date_slibar_d=(int)date('d', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar_m=(int)date('m', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar_y=(int)date('Y', strtotime($List_blog_slibar['kc_blog_date']));
								$blog_date_slibar=$blog_date_slibar_y."年&nbsp;".$blog_date_slibar_m."月&nbsp;".$blog_date_slibar_d."日"; 
				?>
             	<div class="clear blog_item_sidebar">
	                	<h3 class="title"><a href="<?php echo $link_detail_slibar; ?>"><?php echo  $title_slibar;?></a></h3>
	                    <div class="clear date_blog_sidebar">
	                       <span><?php echo $blog_date_slibar; ?>・<?php echo $author_slibar; ?></span>
	                    </div>
                	</div>
           		<?php 
						endfor;
					endif;
				?>
                </div><!--blog_sidebar_content-->
                
                
                <div class="clear blog_sidebar_readmore">
	                <div class="r">
		               <a target="_top" href="<?php echo url_root; ?>blog.html" class="read_more_career_consultant_sidebar">
		                    <span>全て見る</span>
		                    <span class="next_btn"></span>
		               </a>
	                </div>
               </div><!--blog_sidebar_readmore-->
                
             </div><!--blog_sidebar-->
             
             
           <div class="clear group_slide_bar_public">
	        <div id="publicity" class="box publicity_slide_bar">
	            <div class="title">
                	<img src="<?php echo url_root; ?>img/sidebar/title-publicity.png" alt="パブリシティ" />
                </div>
	            <div class="img">
                <a target="_blank" href="<?php echo url_root_main;?>publicity/60.html">
                	<img class="full" src="<?php echo url_root; ?>img/sidebar/publicity-career-carver-kreis-s-thumb.png" alt="CAREER CARVER（キャリアカーバー）2015年11月掲載" />
                </a>
                </div>
	            <div class="text">
	            <p>CAREER CARVERに弊社シニアコンサルタント 入江祥之によるプライスウォーターハウスクーパース株式会社へのインタビュー記事が掲載されました。</p>
	            <p align="right" class="link">
	           			<a target="_blank" href="<?php echo url_root_main;?>publicity/60.html" class="r read_more_career_consultant_sidebar pd_top_10">
		                    	<span>詳しくはこちら</span>
		                        <span class="next_btn"></span>
		        		</a>
	            </p>
	            </div>
	        </div>
	    </div>
             
            
         <!--End Banner-->
        </div>   <!--job-new-->
    </div><!--news_newest-->
<!-- the end new newest -->    
</div><!--slide_bar-->