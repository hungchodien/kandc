<?php
//하나의 데이터

function Get_Data($from, $where="", $col="*", $YN="N"){
	if(!$from)	return error_msg("No Table");

	$sql = "select $col
			from $from
			where 1=1
			$where";

	if($YN == "Y")	echo nl2br($sql);

	$res = mysql_query($sql);

	if($res){
		$row = mysql_fetch_array($res);
		$cnt = mysql_num_rows($res);

		$row[cnt] = $cnt;

		return TO_stripslashes($row);

		unset($row);
	}else{
		error_msg($sql);
	}

	free_res($res);
}

//다수의 데이터
function To_Get_Data($from, $where="", $col="*", $YN="N"){
	if(!$from)	return error_msg("No Table");

	$Data = array();

	$sql = "select $col
			from $from
			where 1=1
			$where";

	if($YN == "Y")	echo nl2br($sql);

	$res = mysql_query($sql);

	if($res){
		$cnt = mysql_num_rows($res);
		while( $row = mysql_fetch_assoc($res) ){
			$Data[] = TO_stripslashes($row);
		}

		$Data[cnt] = $cnt;

		return $Data;

		unset($row);
	}else{
		error_msg($sql);
	}

	free_res($res);
}



function MK_Datas($Array, $Mode="", $Table="", $Where="", $Debug="N"){
	if(!$Array)		return error_msg("No Data");

	$str = "";

	foreach($Array as $key => $Val){
		$data = "";
		list($Value, $Type) = explode("|||", $Val);

		$data = ($Type == "int") ? "{$Value}" : "'{$Value}'";

		$str .= "{$key} = {$data}, ";
	}

	$str = preg_replace("/, $/", null, $str);

	if(!$Mode){
		return $str;
	}else{
		if(!$Table){
			return error_msg("No Table");
		}else{
			if($Mode == "insert")		return insert_data($Table, $str, $Debug);
			else if($Mode == "update")	return update_data($Table, $str, $Where, $Debug);
			else if($Mode == "delete")	return delete_data($Table, $Where, $Debug);
			else						return error_msg("일치하는 모드가 없습니다");
		}
	}
}

//insert
function insert_data($table, $data, $Debug="N"){
	if(!$table)	return error_msg("No Table");
	if(!$data)	return error_msg("No Data");

	$sql = "insert into {$table} set {$data}";

	if($Debug == "Y"){
		echo nl2br($sql);
		exit;
	}

	$res = mysql_query($sql);
	$num = mysql_insert_id();

	if($res)	return $num;
	else		return error_msg($sql, "2");

	if($conn)	mysql_close($conn);
}

//update
function update_data($table, $data, $where="", $Debug="N"){
	if(!$table)	return error_msg("No Table");
	if(!$data)	return error_msg("No Data");
	if($where)	$_where = " where {$where}";

	$sql = "update {$table} set {$data} {$_where}";

	if($Debug == "Y"){
		echo nl2br($sql);
		exit;
	}

	$res = mysql_query($sql);

	if($res)	return "1";
	else		return error_msg($sql, "2");

	if($conn)	mysql_close($conn);
}

//delete
function delete_data($table, $where="", $Debug="N"){
	if(!$table)	return error_msg("No Table");
	if($where)	$_where = " where {$where}";

	$sql = "delete from {$table} {$_where}";

	if($Debug == "Y"){
		echo nl2br($sql);
		exit;
	}

	$res = mysql_query($sql);

	if($res)	return "1";
	else		return error_msg($sql, "2");

	if($conn)	mysql_close($conn);
}

function free_res($res) {
	return @mysql_free_result($res);
}
function read_CSV($csvFile)
{
		$file_handle = fopen($csvFile, 'r');
		$jobs = array();
		$i = 0;
		while (($data = fgetcsv($file_handle)) !== FALSE ) 
		{
			if ($i < 1) 
			{
					$i++;
					continue;
			}
									
			if (count($data) != 53) 
			{
				continue;
			}
			foreach ($data as $key => $value) 
			{
				$data[$key] = mb_convert_encoding($value, 'UTF-8', 'SJIS');
				//$data[52] = substr($data[52],5,11);
				//$data[52] = str_replace(":","Žž",$data[52]) . "•ª";
				//$data[52] = mb_convert_encoding($data[52], 'UTF-8', 'SJIS');
			}
								
			if ($data[0] == $job_id) 
			{
				return $data;
			}
										
			$jobs[] = $data;
		 }
		fclose($file_handle);
		//return $line_of_text;
		return $jobs;
								// Set path to CSV file
								//setlocale(LC_ALL, 'ja_JP.UTF-8');
								//setlocale(LC_ALL, 'ja_JP.EUC-JP'); 
}
function excerpt ($str, $length=200, $trailing='...')
{

     $length-=mb_strlen($trailing);
      if (mb_strlen($str)> $length)
      {
         
        // return mb_substr($str,0,$length,'utf-8').$trailing;
			return mb_strimwidth($str,0,$length,$trailing,'utf-8');
      }
      else
      {
         
         $res = $str;
      }
 
      return $res;
 
}
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>