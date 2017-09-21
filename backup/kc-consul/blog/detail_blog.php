<?php  //$consultant_bloger=19;//id consultant ex: 入江 祥之  ?>
<?php 
	
	if($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_001.html'):
		header("Location:".url_root."blog/1.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_002.html'):
		header("Location:".url_root."blog/2.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_003.html'):
		header("Location:".url_root."blog/3.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_004.html'):
		header("Location:".url_root."blog/4.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_005.html'):
		header("Location:".url_root."blog/5.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_006.html'):
		header("Location:".url_root."blog/6.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_007.html'):
		header("Location:".url_root."blog/7.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_008.html'):
		header("Location:".url_root."blog/8.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_009.html'):
		header("Location:".url_root."blog/9.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_010.html'):
		header("Location:".url_root."blog/10.html");
		exit();
	elseif ($count_blog_detail<=0 && curPageURL()== 'http://www.kc-consul.com/blog/post_011.html'):
		header("Location:".url_root."blog/11.html");
		exit();
	elseif ($count_blog_detail<=0 && (curPageURL()!= 'http://www.kc-consul.com/blog/post_001.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_002.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_003.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_004.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_005.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_006.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_007.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_008.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_009.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_010.html' || curPageURL()!= 'http://www.kc-consul.com/blog/post_011.html')):
		header("Location:".url_root."404.html");
		exit();
	endif;
?>



<div id="breadcrumb" class="clear">
    <div class="breadcrumb-link clear">
        <ul class="clear">
            <li><a href="<?php echo url_root; ?>" class="home"><span>Home</span></a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo url_root; ?>blog.html">キャリアコンサルタントのこぼれ話</a></li>
            <li>&nbsp;>&nbsp;</li>
            <li><a href="<?php echo curPageURL(); ?>"><?php echo $Data_blog_detail['kc_blog_title']; ?></a></li>
        </ul>
    </div>
</div>
<div id="blog_page" class="clear">
    <div class="left_content blog_wrapper l">
    	<div class="top_blog clear">
	        	<div class="clear top_blog_group">
	                <div class="l blog_title_detail_img"><img src="<?php echo url_root; ?>img/blog/blog-main-title.png" alt="blog"/></div>
	                <div class="l blog_title_detail"><?php echo $Data_blog_detail['kc_blog_title']; ?></div>  
	            </div> 
         </div>
        <div class="blog_content_detail">
  
        <div class="blog_detail_top clear">
        <p class="date l"><?php echo $blog_date; ?><span class="author_cl">Author:</span><?php echo $Data_blog_detail['consultant_Name']; ?></p>
        <div class="r">
        
        <div class="share_post clear">
              		<ul class="clear">
                        <li>
                        	<div class="fb-share-button" data-href="<?php echo curPageURL(); ?>" data-layout="button_count"></div>
                        </li>
						<?php /*?>
                        <li>
                        	 <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo curPageURL(); ?>" rel="nofollow">Tweet</a>
                        </li>
                        <li>
                        	<g:plusone size="medium" href="<?php echo curPageURL(); ?>"></g:plusone>
                        </li>
						<?php */?>
                    </ul>
              </div><!--share_post-->
        </div>
        </div>
        
        <h4 class="view_detail_blog_title"><?php echo $Data_blog_detail['kc_blog_title']; ?></h4>
        <div class="content_view_top clear">
        	<?php echo htmlspecialchars_decode($Data_blog_detail['kc_blog_content']); ?>
 		</div><!--content_view_top-->
			 <div class="author_tg clear">
              		<div class="clear icon_author"><img src="<?php echo url_root; ?>img/blog/title-author.png" alt="AUTHOR"/></div>
                    <div class="post_author clear">
                    	<div class="l img_author_t"><img src="<?php echo url_root_main.$url_images_fure.$Data_blog_detail['public_seo_img']; ?>" alt="<?php echo $Data_blog_detail['consultant_Name']; ?>" /></div>
                        <div class="r author_content_c">
                        		<div class="author_content clear">
                                		<h5><?php echo $Data_blog_detail['position_cp'];?></h5>
                                        <h6><?php echo $Data_blog_detail['consultant_Name']; ?></h6>
                                        <div class="clear description_author">
                                        	<?php echo htmlspecialchars_decode($Data_blog_detail['consultant_kc_consult_blog']); ?>
                                        </div>
                                </div>
                        </div>
                    </div><!--post_author-->
              </div><!--author_tg-->
              
       
       <div class="nav-next-pre clear">
       
       			 <?php 
	$Data_hunter_Pre=Get_Data("kc_blog", "and `kc_blog_date` < '$blog_date_get' order by `kc_blog_date` DESC limit 1");
				$id_pre=$Data_hunter_Pre['kc_blog_id'];
				$link_pre=url_root."blog/$id_pre.html";
				if(isset($id_pre) || $id_pre>0):
			?>
                <div class="post-next">
                  <a href="<?php echo $link_pre; ?>">&lt; 前の記事</a>
                 </div>
                 <?php endif; ?>
       
                 <div class="post-list">
                    <a href="<?php echo url_root; ?>blog.html">一覧に戻る</a>
                 </div>
                <?php 
	$Data_hunter_next=Get_Data("kc_blog", "and `kc_blog_date` > '$blog_date_get' order by `kc_blog_date` ASC limit 1");
				$id_next=$Data_hunter_next['kc_blog_id'];
				$link_next=url_root."blog/$id_next.html";
				if(isset($id_next) || $id_next > 0):
			?>
                <div class="post-pre">
                    <a href="<?php echo $link_next; ?>">次の記事 ></a>
                </div>
                <?php 
					endif;
				?>
             </div><!--nav-next-pre-->
            
            
       <!--***********************************comment***********************************-->
       
          
            
            <div class="clear back_number_post">
            		<div class="clear title_back_number">
                    	<div class="l"><img alt="バックナンバー" src="<?php echo url_root; ?>img/blog/title-backnumber.png"></div>
                        <div class="r"><a href="<?php echo url_root; ?>blog.html">全てを見る &gt;</a></div>
                    </div><!--title_back_number-->
                    
                    <div class="item_back_number clear">
							     
                           
                          <?php 
                    $Data_new_mailmagazine = To_Get_Data("kc_blog as `A` join consultant as `B` on `A`.`consultantID`=`B`.`consultant_ID`"," and `A`.`kc_blog_id`!=$sid   order by rand() LIMIT 5");
                    if($Data_new_mailmagazine['cnt'] > 0):
                        echo "<ul>";
                            for($i=0; $i<$Data_new_mailmagazine['cnt']; $i++){
                                    $List_new_mailmagazine = $Data_new_mailmagazine[$i];	
                                    $mailmagazine_new_id=$List_new_mailmagazine['kc_blog_id'];
                                    $title_mailmagazine_new=$List_new_mailmagazine['kc_blog_title'];
									
                                    $consultant_back_name=$List_new_mailmagazine['consultant_Name'];
                                    $mailmagazine_date_new=$List_new_mailmagazine['kc_blog_date'];
									
									$blog_date_back_d=(int)date('d', strtotime($List_new_mailmagazine['kc_blog_date']));
									$blog_date_back_m=(int)date('m', strtotime($List_new_mailmagazine['kc_blog_date']));
									$blog_date_back_y=(int)date('Y', strtotime($List_new_mailmagazine['kc_blog_date']));
									$blog_date_back=$blog_date_back_y."年&nbsp;".$blog_date_back_m."月&nbsp;".$blog_date_back_d."日"; 
                                   
                                    $url_link=url_root."blog/".$mailmagazine_new_id.".html";
                                    ?>
                                    <li>
                                    	<a href="<?php echo $url_link; ?>">
                                        <p class="back_number_h2"><?php echo $title_mailmagazine_new; ?></p>
                                        <p>
                                            <?php echo $blog_date_back; ?>・<span class="author_cl">Author:</span> <?php echo $consultant_back_name; ?>   
                                         </p>                                   
                                         </a>
                                    </li>
                                    <?php
                                    
                                }
                            echo "</ul>";
                    endif;
                 ?> 
                           
                           
                           
                           
                           
                                        
                   </div><!--item_back_number-->
            </div><!--back_number_post-->
            
            
             <!--***********************************End comment***********************************-->
            
            
        </div><!--end blog_content-->
    </div>
    <div class="right_content blog_sidebar r">
    	<?php include('inc/slide_bar_blog.php'); ?>
    </div>
</div>