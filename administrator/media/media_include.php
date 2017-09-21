 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript">
  	$( document ).ready(function() {
			 $( "#dialog_foder" ).dialog({
				autoOpen: false,
				height: 500,
				width: 960,
				modal: true
			});
			 $( "#set-post-thumbnail" ).click(function() {
				$( "#dialog_foder" ).dialog( "open" );
			 });
		});
  </script>
<div class="postbox " id="postimagediv">
<div title="Click to toggle" class="handlediv">
	
	<input type="text" name="feature_consultant"  class="txt_feat" id="txt_feat" value="<?php echo $consultant_set_fure; ?>"/>
	
</div>
<div class="inside">
<p class="hide-if-no-js"><a class="thickbox" id="set-post-thumbnail"  title="Set featured image">Set featured image</a></p></div>
</div>
<?php if(isset($consultant_set_fure)): ?>
<div class="image_load_fo">
<img src="<?php echo $consultant_set_fure; ?>" />
</div>
<?php endif; ?>
<div class="dialog_foder" id="dialog_foder" title="Media Thumbnail">
	<div class="body_inc_fi" id="load_inc">
    	<script language="javascript">
        	$("#load_inc").load("media/set_feature.php");
        </script>
    </div>
</div>