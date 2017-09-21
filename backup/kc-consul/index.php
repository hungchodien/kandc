<?php include('inc/header.php'); ?>
<!--Begin Content-->
<div id="page">
	<?php
        if(!isset($page)|| $page==""):
            include('nivoslide/index.php');
        endif; 
    ?>
        <div  id="container" class="container clear">
                <?php 
                    include('inc/read_inc.php');
                ?>
        </div><!--End .#container-->
        
        <!--End Content-->
</div>    
   <!--Footer-->
   		<?php 
			if($page=='landing'):
				include('inc/footer_landing.php');
			else:
				include('inc/footer.php');
			endif;
		?>
   		<?php //include('inc/footer.php'); ?>
   <!--End Footer-->

</body>
</html>
