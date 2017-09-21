// JavaScript Document

var $index = 1;
function Load_Content($params,page){
	$('#body_inc').show();	
	$("#body_inc").load("ajax/post_content.php?"+$params+"&currentpage="+page,{index : $index
	});
	
}
function Load_Post_Form($params_meter){
	$('#body_inc').show();	
	$("#body_inc").load("ajax/insert_content.php?"+$params_meter);
	
}


