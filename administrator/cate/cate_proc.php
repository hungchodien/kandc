<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/_init.php");
//print_R($_POST);

if($data_array == "Y"){	$datas = array("gname" => addslashes($gname), "gclass" => addslashes($gclass));	}

if($mode == "insert"){

	$select = "count(gcodea) as cntt, ";
	$select.= "(select gcodea from catea order by seq desc limit 1) as maxcode, ";
	$select.= "ifnull(max(ordernum) + 1, 1) as ordernum";

	$List = Get_Data("catea", "", $select);
	$alp = "A";

	if($List['cntt'] == "0"){
		$alphabet = "A";
		$ordernum = "1";
	}else{
		for($i=1; $i<$List['ordernum']; $i++){
			$alp++;
			$alphabet = $alp;
		}

		$ordernum = $List['ordernum'];
	}

	$datas['gcodea'] = $alphabet;
	$datas['ordernum'] = $ordernum;

	$res = MK_Datas($datas, "insert", "catea");

	if($res)	echo "1";
	else		echo "0";

	unset($List);
	exit;


}else if($mode == "modify"){

	$res = MK_Datas($datas, "update", "catea", "seq = $seq");

	if($res)	echo "1";
	else		echo "0";

	exit;

}else if($mode == "delete"){

	foreach($seq_list as $seq){
		$res = delete_data("catea", "seq = $seq");
	}

	if($res)	echo "1";
	else		echo "0";

	exit;

}
?>