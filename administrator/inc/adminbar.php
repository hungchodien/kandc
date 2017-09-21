<div id="admin_bar" class="clear">
    <h1 id="site_name" class="fl"> <a class="menu_title" href="#"><img src="img/home_icon.png" />&nbsp;Kreis & Company <span class="txt_b">DASHBOARD</span></a></h1>
    <div id="top_right" class="fr clear">
        <h1 id="howdy" class="fl">WelCome <span class="txt_b txt_blue"><?php echo $_SESSION['MemberName'];?></span></h1>
        <a href="login/logout.php" id="logout" class="fl"><span>LOGOUT</span></a>
    </div>
</div>
<div id="admin_menu_back"></div>
<div id="admin_menu_content">
	<div id="post_btn" class="menu_block">
        <div class="clear">
        <a class="menu_title" href="index.php"><span class="post_icon">POST</span></a>
        </div>
        <div id="post_leftmenu" class="clear">
        <!--********************************************************************************** -->
        	<!--Ajax Load inc/post_ajax_left.php -->
          <!--********************************************************************************** -->
       </div>
    </div>

    <div id="category_btn" class="menu_block">
       
        <div class="clear">
        <a class="menu_title" href="#"><span class="category_icon">categories</span></a>
        </div>
        <div id="cate_leftmenu"  class="clear">
          <!--********************************************************************************** -->
        	<!--Ajax Load inc/cate_ajax_left.php -->	
          <!--********************************************************************************** -->
        </div>
    </div>
  
  
    <div id="media_btn" class="menu_block">
    	<div class="clear">
        <a class="menu_title" href="#"><span>media</span></a>
        </div>
            <div id="media_leftmenu" class="clear">
            	<div class="media_index <?php if($_GET['media']=='foder'):echo "current";endif; ?>" ><a href="index.php?media=foder">Media Consultant</a></div>
               
            </div>
    </div>
    
	
    <div id="user_btn" class="menu_block">
        <a class="menu_title" href="#"><span>user</span></a>
    </div> 

</div>
<!--admin_menu_content-->

