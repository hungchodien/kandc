<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>">キャリアコンサルタントのこぼれ話</a></li>
        </ul>
    </div>
</div>

<div id="blog_page" class="clear">
   <div class="left_content l">
      <div class="group_content_blog clear">
      	  <div class="blog_content">
          	
          		<div class="top_blog clear">
                	<div class="clear"><img src="<?php echo url_root; ?>img/blog/blog-main-title.png" alt="blog"/></div>
                    <div class="clear blog_title_img"><img src="<?php echo url_root; ?>img/blog/blog-title.png"  alt="コンサル転職に精通したキャリアコンサルタントのこぼれ話"/></div>
                </div>
          		
                <div class="list_blog_content clear">
                	<div class="title_last_blog clear">
                    	<img src="<?php echo url_root; ?>img/blog/title-latest.png" alt="最新記事"/>
                    </div>
                    <?php 
						$Data_blog=To_Get_Data("kc_blog as A join consultant as B on A.consultantID=B.consultant_ID"," and A.kc_blog_status=0 order by A.kc_blog_date DESC");
						$count_blog_list=$Data_blog['cnt'];
						if($count_blog_list>0):
						
					?>
                    <ul class="list_item_blog clear">
                    	<?php 
							for($i=0;$i<$count_blog_list;$i++):
							$j=$i+1;
								$List_blog=$Data_blog[$i];
								$id_blog=$List_blog['kc_blog_id'];
								$link_detail=url_root."blog/".$id_blog.".html";
								$title=$List_blog['kc_blog_title'];
								$author=$List_blog['consultant_Name'];
								
								$blog_date_d=(int)date('d', strtotime($List_blog['kc_interview_date']));
								$blog_date_m=(int)date('m', strtotime($List_blog['kc_interview_date']));
								$blog_date_y=(int)date('Y', strtotime($List_blog['kc_interview_date']));
								$blog_date=$blog_date_y."年&nbsp;".$blog_date_m."月&nbsp;".$blog_date_d."日"; 
						?>
                       <li>
                        	<div class="l">
                            	<h3 class="blog_post_title"><a target="_top" href="<?php echo $link_detail; ?>"><?php echo $title; ?><?php if($j==1): ?>&nbsp;&nbsp;<span style="font-weight:bold; color:#EA0003;">NEW</span><?php endif; ?></a></h3>
			       			 	<div class="blog_date"><?php echo $blog_date; ?>・<span>Author :</span><?php echo $author; ?></div>
                            </div>
                            <div class="r more_blog">
                            	<a target="_top" href="<?php echo $link_detail; ?>" class="r read_more_career_consultant_sidebar pd_top_10">
		                    		<span>more</span>
		                        	<span class="next_btn"></span>
		        				</a>
                            </div>	
                        </li>
                        <?php endfor; ?>
                    </ul>
                    <?php 
						endif;
					?>
                </div>
                
                
                
          
                
	          
	        
	        </div><!--end blog_content-->
            
       </div><!--group_content_blog-->
       
    </div><!--left_content-->
    <div class="right_content r">
    	<?php include('inc/slide_bar_blog.php'); ?>
    </div>
</div>