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
function delete_data($table, $where="", $Debug="N",$caler=""){
	if(!$table)	return error_msg("No Table");
	if($where)	$_where = " where {$where}";

	$sql = "delete {$caler} from {$table} {$_where}";

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

function excelEncode(&$value, $key)
{
  $value = iconv('UTF-8', 'Windows-1252', $value);

}

function csv_append_row($fout,$rowdata,$sep=';',$protect='"',$withheader=true){ 
    static $cb; 
    if(! isset($cb) ) 
        $cb = create_function('&$v,$k,$p','$v = $p . str_replace("$p", "\\\\$p", $v) . $p;'); 
  if($withheader){ 
    static $headerdone; 
    if(! isset($headerdone) ){ 
            $headers = array_keys($rowdata); 
            if($protect) 
                array_walk($headers,$cb,$protect); 
            fwrite($fout,implode($sep,$headers)."\n" ); 
      $headerdone = TRUE; 
    } 
  } 
  if($protect) 
        array_walk($rowdata,$cb,$protect); 
    $row = implode($sep,$rowdata); 
  $row = preg_replace('![\r\n]!',' ',$row); 
  fwrite($fout,"$row\n"); 
} 

function csv_str_replace($string){
	$value='';
	$string = str_replace(',', '","', $string);
    $string = str_replace("\n", chr(10), $string);
    $value .=  $string . ',';
    $value .=  "\n"; 
}

function about_two_time($time,$deal=7){
				$date_current = date('Y-m-d H:i:s');
				$s = strtotime($date_current) - strtotime($time);
				$t = intval($s / 86400);
				$deal=(int)$deal;
				if ($t <= $deal):
					return true;
				else:
					return false;
				endif;
}


function read_CSV($csvFile)
{
		$file_handle = fopen($csvFile, 'r');
		$jobs = array();
		$i = 0;
		while (($data = fgetcsv($file_handle)) !== FALSE ) 
		{
			//print_r($data);
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
function read_CSV_en($csvFile)
{
		$file_handle= fopen($csvFile, 'r');
		$jobs = array();
		$i = 0;
		//print_r( $file_handle);
		while (($data = fgetcsv($file_handle)) !== FALSE ) 
		{
			//print_r($data);
			if ($i < 1) 
			{
					$i++;
					continue;
			}
									
			if (count($data) != 63) 
			{
				continue;
			}
			foreach ($data as $key => $value) 
			{
				$data[$key] = mb_convert_encoding($value, 'UTF-8', 'SJIS');
				//$data[$key]=$value;
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


function read_CSV_news($csvFile)
{
		$file_handle= fopen($csvFile, 'r');
		$jobs = array();
		$i = 0;
		//print_r( $file_handle);
		while (($data = fgetcsv($file_handle)) !== FALSE ) 
		{
			//print_r($data);
			if ($i < 1) 
			{
					$i++;
					continue;
			}
									
			if (count($data) != 59) 
			{
				continue;
			}
			foreach ($data as $key => $value) 
			{
				$data[$key] = mb_convert_encoding($value, 'UTF-8', 'SJIS');
				//$data[$key]=$value;
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


?>