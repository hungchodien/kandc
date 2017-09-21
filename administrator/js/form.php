<?
include_once('../inc/top.php');

if(!$seq){
	$op_vis_str = "Public";
	$op_vis = "Y";
	$op_date_year = date("Y");
	$op_date_month = date("m");
	$op_date_day = date("d");
	$op_date_hour = date("H");
	$op_date_minute = date("i");
	$mode = "insert";
}else{
	$List = Get_Data("board", "and seq = $seq");

	$mode = "modify";
	$op_vis_str = ($List['op_vis'] == "Y") ? "Public" : "Private";
	$op_vis = $List['op_vis'];
	$title = $List['title'];
	$content = htmlspecialchars_decode($List['content']);
	list($op_front, $op_bottom) = explode(" ", $List['op_date']);
	list($op_date_year, $op_date_month, $op_date_day) = explode("-", $op_front);
	list($op_date_hour,$op_date_minute,) = explode(":", $op_bottom);
}
?>

<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>

<div class="content_bg_icon"><img src="../img/main/post_bg_icon.png" alt="" title="" /></div>
<div id="page_title" class="clearfix">
    <div class="title_icon"><img src="../img/main/post_content_icon.png" alt="" title="" /></div>
    <h1 id="dashboard_title" class="content_title">Add New POST</h1>
</div>

<form name="board" id="board" method="post" action="board_proc.php">
	<input type="hidden" name="mode" value="<?=$mode?>" >
	<input type="hidden" name="seq" value="<?=$seq?>" >
	<input type="hidden" name="catea" value="<?=$catea?>" >
	<input type="hidden" name="data_array" value="Y" >
	<input type="hidden" name="input_key" value="<?=$input_key?>" >
	<input type="hidden" name="page" value="<?=$page?>" >

	<div id="content_body" class="fl">
		<div id="post_body" class="clearfix">
			<div id="post_body_content">
				<input id="post_title" type="text" name="post_title" value="<?=$title?>" />

				<div id="post_container" class="clearfix">
					<div id="post_tabs" class="clearfix post_edit_block">
						<div class="tab_container">
							<div class="editor-container" id="content-editor-container">

								<!-- 내용 -->
								<textarea id="bcontent" name="bcontent" cols="40" style="height: 295px;"><?=$content?></textarea>
							</div>
						</div>
					</div>
				</div>

			</div>

			<? include_once("form_left.php"); ?>

		</div>
	</div>
</form>

</div>

<script type="text/javascript">
	jQuery(function($){
		$("#post_title").Watermark("Enter title here");
		CKEDITOR.replace('bcontent', {width:'100%', height:'400'});
		
		Load_Tag("<?=$seq?>");
	});

	function board_IT(){
		var fm = document.board,
			bcontent = CKEDITOR.instances['bcontent'];

		if( (fm.post_title.value == "") || (fm.post_title.value == "Enter title here") ){
			alert("Enter title");
			fm.post_title.focus();
			return;
		}

		if(bcontent.getData() == ""){
			alert('Enter content');
			CKEDITOR.instances.bcontent.focus();
			return;
		}

		fm.submit();
	}

	function tag_IT(){
		var $tag_name = $("#tag_name").val(),
			$mode = "<?=$mode?>";

		if($mode == "modify"){
			if(!$tag_name){
				alert("Enter Tag");
				$("#tag_name").foucs();
				return;
			}

			$.post("board_proc.php", {mode : "tag", tag_name : $tag_name, seq : "<?=$seq?>", catea : "<?=$catea?>"}, function(data){
				if(data == 2)		alert("Exists tag");
				else if(data == 0)	alert("Failed");
				else				Load_Tag("<?=$seq?>");
			});
		}else if($mode == "insert"){
			alert("Click the save button");
		}
	}

	function Load_Tag($SEQ){
		if($SEQ)	$("#tag_content").load("tag.php", {seq : $SEQ});
	}

	function del_tag($SEQ){
		$.post("board_proc.php", {mode : "delete_tag", seq : $SEQ}, function(data){
			if(data == 0)	alert("Failed");
			else			Load_Tag("<?=$seq?>");
		});
	}
</script>

<?php include('../inc/footer.php'); ?>