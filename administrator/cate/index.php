<? include_once('../inc/top.php'); ?>

<div class="content_bg_icon"><img src="../img/main/category_bg_icon.png" alt="Category" title="" /></div>
<div id="page_title" class="clearfix">
    <div class="title_icon"><img src="../img/main/category_content_icon.png" alt="Contents" title="" /></div>
    <h1 id="dashboard_title" class="content_title">Add New CATEGORIES</h1>
</div>

<div id="col-container">
    <div id="lcontent"><!-- Content --></div>

    <div id="col-left">
        <div class="col-wrap_left clearfix">
            <div class="form-wrap">
                <form class="validate clearfix" method="post" id="catea" name="catea">
					<input type="hidden" name="mode" value="insert">
					<input type="hidden" name="seq">
					<input type="hidden" name="data_array" value="Y">

					<div class="form-field form-required">
						<label>Name</label>
						<input type="text" class="cat_input" name="gname" id="gname"/><br><br>
						<label>Class Name</label>
						<input type="text" class="cat_input" name="gclass" id="gclass"/>
					</div>

					<p class="add_cat_btn">
						<a href="javascript:;" onCLick="iCate_IT()"><span>Add New Category</span></a>
						<a href="javascript:;" onCLick="mCate_IT()" id="modify_btn" style="display:none"><span>Edit Category</span></a>
						<a href="javascript:;" onCLick="dCate_IT()"><span>Delete Category</span></a>
					</p>
                </form>
            </div>
        </div>
    </div>
    <!-- /col-left -->

</div>
<!--#content_body-->

</div>
<!-- #content -->

<script>
	$(function(){
		Load_Catea();
	});

	function Load_Catea(){
		$("#lcontent").load("cate_form.php");
	}

	function iCate_IT(){
		var $Value = $("#gname").val();

		if(!$Value){
			alert("Enter Name");
			$("#gname").focus();
			return;
		}

		$.post("cate_proc.php", $("#catea").serialize(), function(data){
			if(data == 0){
				alert("Failed");
			}else{
				$("#gname").val("");
				$("#gclass").val("");
				Load_Catea();
				Left_menu();
			}
		});
	}

	function mCate_IT(){
		$.post("cate_proc.php", $("#catea").serialize(), function(data){
			if(data == 0){
				alert("Failed");
			}else{
				$("#gname").val("");
				$("#gclass").val("");
				Load_Catea();
				Left_menu();
			}
		});
	}

	function dCate_IT(){
		var $Cnt = $("#the-list input:checkbox:checked").not("#selectall").size();

		if($Cnt <= 0){
			alert("Choose IT");
			return;
		}else{
			var answer = confirm("Are you sure you want to delete?");

			if(answer){
				$.post("cate_proc.php", $("#posts-filter").serialize(), function(data){
					if(data == 0){
						alert("Failed");
					}else{
						$("#gname").val("");
						$("#gclass").val("");
						Load_Catea();
						Left_menu();
					}
				});
			}
		}
	}
</script>

<? include_once('../inc/footer.php'); ?>