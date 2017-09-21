 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript">
  	$( document ).ready(function() {
			 $( "#dialog_foder1" ).dialog({
				autoOpen: false,
				height: 500,
				width: 960,
				modal: true
			});
			 $( "#set-post-thumbnail1" ).click(function() {
				$( "#dialog_foder1" ).dialog( "open" );
			 });
		});
  </script>
<div class="postbox " id="postimagediv">
<div title="Click to toggle" class="handlediv">
	
	<input type="text" name="feature_consultant_1"  class="txt_feat" id="txt_feat_1" value="<?php echo $consultant_set_fure1; ?>"/>
	
</div>
<div class="inside">
<p class="hide-if-no-js"><a class="thickbox" id="set-post-thumbnail1"  title="Set featured image">Set featured image</a></p></div>
</div>
<?php if(isset($consultant_set_fure1)): ?>
<div class="image_load_fo">
<img src="<?php echo $consultant_set_fure1; ?>" />
</div>
<?php endif; ?>
<div class="dialog_foder1" id="dialog_foder1" title="Media Thumbnail">
	<div class="body_inc_fi" id="load_inc1">
    	<script language="javascript">
        	$("#load_inc1").load("media/set_feature1.php");
        </script>
    </div>
</div>