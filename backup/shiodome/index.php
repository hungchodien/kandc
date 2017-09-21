<?php include ('inc/header.php'); ?>
<div class="lighbox_show"></div>
	<div id="overlay_load">
	<div class="loading_icon">
		<img class="icon_load" src="<?php echo url_root_shiodome; ?>img/loading.gif">
	<p>Loading..</p>
	</div>
</div>
<div id="content_inc" class="clear content_inc wrapper" style="display:none;"></div>
<div id="main_page" class="container_main_inc clear" >
	<?php 
		include('inc/router_home.php');
	?>
</div>
<?php include ('inc/footer.php'); ?>