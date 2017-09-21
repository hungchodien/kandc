<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	?>
<script type="text/javascript">
	$( document ).ready(function() {
		var  name = $( "#name" ),
			allFields = $( [] ).add( name ),
			tips = $( ".validateTips" );
			
		 function checkLength( o, n, min, max ) {
			if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "Length of " + n + " must be between " +
			min + " and " + max + "." );
			return false;
			} else {
			return true;
			}
			}
			 
			function updateTips( t ) {
			tips
			.text( t )
			.addClass( "ui-state-highlight" );
			setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
			}
		
		 $( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 250,
			width: 450,
			modal: true,
				 buttons: {
				"Create Foder": function() {
					 var bValid = true;
					allFields.removeClass( "ui-state-error" );
					 bValid = bValid && checkLength(name, "Name Foder", 3, 20 );
						$.ajax({
							url: "media/create_foder.php",
							data: name,
							context: document.body
							}).done(function() {
							$( this ).addClass( "done" );
							});
							$( this ).dialog( "close" );
							$("#load_inc").load("media/load_foder.php");
					},
					 Cancel: function() {
						$( this ).dialog( "close" );
					}
				 },
				  close: function() {
					allFields.val( "" ).removeClass( "ui-state-error" );
					}
			});
		 $( ".create_foder" ).click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
			
		
			
	});
</script>
<div class="content_bg_icon"><img src="img/main/post_bg_icon.png" alt="" title="" /></div>
<div id="page_title" class="clearfix">
    <div class="title_icon"><img src="img/main/post_content_icon.png" alt="" title="" /></div>
    <h1 id="dashboard_title" class="content_title">Add New POST</h1>
</div>
	<div id="progress">
        <div id="bar"></div>
        <div id="percent"></div >
	</div>
    <br/>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<div id="message"></div>
	<form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data" >
		<div class="body_form_inc">
        	<div class="form_arria">
            		<div class="clear tilte_media">
            			<h1>Create Foder, Upload Image to Foder</h1>
                    </div>
                    <div class="clear form_m clear">
                    	<ul class="clear">
                        	<li>
                    			<a href="javascript:void(0);" class="create_foder">Create Foder</a></li>
                            <li>
                        		<a href="javascript:void(0);" class="upload_file_foder">Upload File</a>
                            </li>
                             <li><a href="index.php?media=foder">Index Foder</a></li>
                            <li><a href="">ReLoad</a></li>
                        </ul>
                    </div>
                    <div class="clear body_load" id="load_inc">
                    		<!--Load Foder Ajax-->	
                            <script language="javascript">
							<?php 
								if(isset($_GET['part'])):
								?>
								$("#load_inc").load("media/load_foder.php?part=<?php echo "../media_uploads/".$_GET['part'];?>");
								<?php 
								else:
								?>
								$("#load_inc").load("media/load_foder.php");
								<?php 
								endif;
							?>
                           	
                            </script>
                    </div>
            </div>
        </div>
        
        
        					<div id="dialog-form" title="Create new Foder">
                                <p class="validateTips">Please Enter Your Text.</p>
                                <label for="name">Forder Name:</label>
                                <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
                                
                               </div>
	</form>
	
</div>
