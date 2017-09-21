 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript">
  	$( document ).ready(function() {
			 $( "#dialog_foder2" ).dialog({
				autoOpen: false,
				height: 500,
				width: 960,
				modal: true
			});
			 $( "#set-post-thumbnail2" ).click(function() {
				$( "#dialog_foder2" ).dialog( "open" );
			 });
		});
  </script>
<div class="postbox " id="postimagediv">
<div title="Click to toggle" class="handlediv">
	
	<input type="text" name="feature_consultant_2"  class="txt_feat" id="txt_feat_2" value="<?php echo $seo_add_thumb_meta; ?>"/>
	
</div>
<div class="inside">
<p class="hide-if-no-js"><a class="thickbox" id="set-post-thumbnail2"  title="Set featured image">Set featured image</a></p></div>
</div>
<?php if(isset($seo_add_thumb_meta)): ?>
<div class="image_load_fo">
<img src="<?php echo $seo_add_thumb_meta; ?>" />
</div>
<?php endif; ?>
<div class="dialog_foder1" id="dialog_foder2" title="Media Thumbnail">
	<div class="body_inc_fi" id="load_inc2">
    	<script language="javascript">
        	$("#load_inc2").load("media/set_feature_post.php");
        </script>
    </div>
</div>