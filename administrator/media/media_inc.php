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
				$( "#dialog-form").dialog( "open" );
				
			});
		
		
		$( "#dialog-form_upload" ).dialog({
			autoOpen: false,
			height: 400,
			width: 450,
			modal: true,
				 buttons: {
				"Upload File": function() {
					
					 var bValid = true;
					allFields.removeClass( "ui-state-error" );
					// bValid = bValid && checkLength(path_url, "path_url", 3, 20 );
					var path_url1=$("#path_url").val().replace("%2","/");
					if(path_url1==""){
						alert("URL File Not Found. Please Select Foder Upload!");
						$(this).dialog( "close" );
						return false;
						}
						else
						{
					/**************************************************************************/
						<!--Ajax-->
					 		//$("#vasplus_form_id").submit();
							$("#vasplus_form_id").submit();
							return true;
							$(this).dialog("close");
							
						<!--End Ajax-->
						/**********************************************************************************/
						}
						///$( this ).dialog( "close" );
						//$("#load_inc").load("media/load_foder.php?part="+path_url1);
						
					},
					 Cancel: function() {
						$( this ).dialog("close");
						return false;
					}
				 },
				  close: function() {
					allFields.val( "" ).removeClass( "ui-state-error" );
					return false;
					}
			
			});
		$( ".upload_file_foder" ).click(function() {
				$( "#dialog-form_upload" ).dialog( "open" );
				
			});
		
			
	});
	function onclide(msg)
		{
			var path=document.getElementById("path_url");
				path.value = msg;
				$("#load_inc").load("media/load_foder.php?part="+msg);
					
		}
	function Delete_img(prame,load_path){
				$.ajax({
					url: 'media/delete_image.php?img_url='+prame,
					type: "GET",
					success: function(datos){
						//console.log("check");
						$("#load_inc").load("media/load_foder.php?part="+load_path);
					}
				});
			}
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
                            <form name="board" id="board" method="post" action="post/board_proc.php" enctype="multipart/form-data" >
                                <p class="validateTips">Please Enter Your Text.</p>
                                <label for="name">Forder Name:</label>
                                <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" />
                             </form>   
                               </div>
                               
                               
                               
                               
                       <div id="dialog-form_upload" title="Create new Foder">
                        
                        <form name="vasplus_form_id" id="vasplus_form_id" action="media/upload_file.php" enctype="multipart/form-data" method="post">
                               <p class="validateTips"></p>
                              <p style=" height:30px;">
                             <label for="path_url">Path URL:</label>
                             <input type="text" name="path_url" id="path_url" class="text ui-widget-content ui-corner-all" readonly  value="<?php if(isset($_GET['part'])): echo "../media_uploads/".$_GET['part']; endif; ?>"/></p>
                             <p style=" height:30px; margin:20px 0;">
                            
                             	<label for="name">Choise File:</label>
        						<input type="file" name="myfile[]" id="myfile" multiple="multiple" />
                             
                                
    						</p>
    							
					</form> 
                            
                         </div>
							
	
</div>
