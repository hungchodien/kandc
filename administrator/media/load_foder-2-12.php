<script language="javascript">
	$(document ).ready(function() {
		//var path_url1=$("#path_url").val().replace("%2","/");
	
		var  path_url = $( "#path_url" ),
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
						
						$( this ).dialog( "close" );
						return false;
						}else{
					/**************************************************************************/
						<!--Ajax-->
					 		//$("#vasplus_form_id").submit();
							$("#vasplus_form_id").submit();
							
						<!--End Ajax-->
						/**********************************************************************************/
						}
						$( this ).dialog( "close" );
						$("#load_inc").load("media/load_foder.php?part="+path_url1);
						
					},
					 Cancel: function() {
						$( this ).dialog( "close" );
					}
				 },
				  close: function() {
					allFields.val( "" ).removeClass( "ui-state-error" );
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
<?php 
	@include('Lib1/_init.php');
	@include('../Lib1/_init.php');
	@include('../../Lib1/_init.php');
	@include('../../../Lib1/_init.php');
	if(isset($_GET['part'])):
		$ourDir =$_GET['part'];
	else:
	$ourDir = $fodermedia;
	endif;
	$foders = @scandir($ourDir);
	echo "<div class='clear group_foder'>";
	
	foreach($foders as $forder):
		
		if($forder!="" && $forder!="."&& $forder!=".."&& $forder!="..."):
			if(isset($_GET['part'])):
				$ourDir=str_replace("../","",$ourDir);
				echo "<div class='clear foder_box set_del_img'>";
					echo "<img src='$ourDir/$forder' border='0' />";
					echo "<span class='close_dele'><a href='javascript:void(0);' class='close_img_del' onclick=Delete_img('$ourDir/$forder','../$ourDir');>Close</a></span>";
				echo "</div>";
			else:
		echo "<div class='clear foder_box'>";
		echo "<div class='icon_foder'><img src='img/folder_icon.png' border='0' width='40'/></div>";
		echo "<div class='a_foder'><a class='forder_inc' href='javascript:void(0);' onClick=onclide('$ourDir/$forder'); title='".$forder."'>".$forder."</a></div>";
		echo "</div>";
			endif;
		endif;
	endforeach;
   echo "<div>";
   ?>
   						<div id="dialog-form_upload" title="Create new Foder">
                        
                        <form name="vasplus_form_id" id="vasplus_form_id" action="media/upload_file.php" enctype="multipart/form-data" method="post">
                               <p class="validateTips"></p>
                              <p style=" height:30px;">
                             <label for="path_url">Path URL:</label>
                             <input type="text" name="path_url" id="path_url" class="text ui-widget-content ui-corner-all" readonly  value="<?php if(isset($_GET['part'])): echo $_GET['part']; endif; ?>"/></p>
                             <p style=" height:30px; margin:20px 0;">
                            
                             	<label for="name">Choise File:</label>
        						<input type="file" name="myfile[]" id="myfile" multiple="multiple" />
                             
                                
    						</p>
    							
						</form> 
                            
                         </div>
	

