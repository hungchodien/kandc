 <!--  the start page navi --->
     <!--  the start job info control --->
      <div class="look-content-link_group clear">
          <ul class="clear <?php echo 'group_item_'.$hcm; ?>">
        <?php 
        	$query_yes=HCMCategory_Parent_list($hcm);
		//print_r($query);
		while($list_view=mysql_fetch_array($query_yes))
		{
			?>
		<li>
        <a href="<?php echo url_root; ?>category/list/<?php echo $list_view['id'].".html"; ?>" class="hcm_category_lisst">
            	<span class="cat_child_1"><?php echo $list_view['name'];  ?></span>
		</a>
		<a href="<?php echo url_root; ?>category/list/short/new/<?php echo $list_view['id'].".html"; ?>" class="hcm_category_lisst">
               <span class="cat_child_2"> 新着_<span class="c00"><?php echo $list_view['new_count']; ?></span>件 </span>
		</a>
		<a href="<?php echo url_root; ?>category/list/<?php echo $list_view['id'].".html"; ?>" class="hcm_category_lisst">
			<span class="cent">/</span><span class="cat_child_3">総数_
			<span class="c00"><?php echo $list_view['job_count']; ?></span>
件</span>
            </a>
        </li>
			<?php 
		}
		
		
		
		
           ?>
           </ul>  
           
        </div>

     
        
       