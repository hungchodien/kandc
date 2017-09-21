<?
include_once("{$_SERVER['DOCUMENT_ROOT']}/_init.php");

$select = "*, (select count(*) from board_view where catea = c.gcodea) as view_cnt";
$from = "catea c";
$where = "and delflag = 'Y' order by ordernum asc";

$Data = To_Get_Data($from, $where, $select);
?>

<div id="col-right">
    <div class="col-wrap">
        <form method="post" id="posts-filter">
			<input type="hidden" name="mode" value="delete">

			<table cellspacing="0" class="list-table widefat fixed tags">
			<thead>
				<tr>
					<th class="manage-column column-cb check-column" id="cb" scope="col"><input type="checkbox" id="selectall" /></th>
					<th class="manage-column column-name sortable desc" id="name" scope="col"><a href="#"><span>Name</span><span class="sorting-indicator"></span></a></th>
					<th class="manage-column column-posts num sortable desc" id="posts" scope="col"><a href="#"><span>Posts</span><span class="sorting-indicator"></span></a></th>
				</tr>
			</thead>
			<tbody class="list:tag" id="the-list">

				<?
					if($Data['cnt'] <= 0){
						echo "<tr><td colspan='3'>No Data</td></tr>";
					}else{
						for($i=0; $i<$Data['cnt']; $i++){
							$List = $Data[$i];

							$seq = $List['seq'];
							$name = stripslashes($List['gname']);
							$classname = stripslashes($List['gclass']);

							echo "
								<tr class='alternate'>
									<th class='check-column' scope='row'>
										<input type='checkbox' value='{$seq}' name='seq_list[]' />
									</th>
									<td class='name column-name'><strong>
										<a href='javascript:;' onClick=\"Edit_IT('{$seq}', '{$name}', '{$classname}')\" class='row-title'>{$name}</a>
									</strong><br /></td>
									<td class='posts column-posts'>{$List['view_cnt']}</td>
								</tr>
							";
						}
					}
				?>


			</tbody>
			</table>

        </form>
    </div>
</div>

<script>
	$(function(){
		$("#selectall").click(function(){
			var checekd = $(this).attr("checked");

			$("#the-list input:checkbox").each(function(){
				var subchecked = $(this).attr("checked");
				if(subchecked != checekd){
					$(this).click();
				}
			});
		});
	});

	function Edit_IT($SEQ, $NAME, $CLASS){
		$("input[name=seq]").val($SEQ);
		$("input[name=gname]").val($NAME);
		$("input[name=gclass]").val($CLASS);
		$("input[name=mode]").val("modify");
		$("#modify_btn").show();
	}
</script>