<?php
// 멀티 배열 정렬 함수
// 레퍼런스 : http://kr.php.net/manual/kr/function.array-multisort.php
//
// @param $data : multidim array
// @param $keys : array(array(key=>col1, sort=>desc), array(key=>col2, type=>numeric))
function php_multisort($data, $keys) {
	// List As Columns
	foreach ($data as $key => $row) {
		foreach ($keys as $k){
			$cols[$k['key']][$key] = $row[$k['key']];
		}
	}
	// List original keys
	$idkeys=array_keys($data);

	// Sort Expression
	$i=0;
	foreach ($keys as $k){
		if($i>0){$sort.=',';}
		$sort.='$cols['.$k['key'].']';
		if($k['sort']){$sort.=',SORT_'.strtoupper($k['sort']);}
		if($k['type']){$sort.=',SORT_'.strtoupper($k['type']);}
		$i++;
	}
	$sort.=',$idkeys';

	// Sort Funct
	$sort='array_multisort('.$sort.');';
	eval($sort);

	// Rebuild Full Array
	foreach($idkeys as $idkey){
		$result[$idkey]=$data[$idkey];
	}

	return $result;
}


// 검색어 쿼리를 만듬 (공통)
function get_sql_where($search_field, $search_text, $search_operator="and") {

	$str = "";

	// 검색어 설정
	$search_text = trim($search_text);
	$search_text = strip_quotes($search_text);

	if (!$search_text) return $str;

	// 검색어를 공백으로 나눔
	$s = array();
	$s = split("[[:space:]]+", $search_text);

	// 검색필드를 구분자로 나눔
	$field = array();
	$field = explode("|", trim($search_field));

	$str = " and ";
	if (count($s) > 1) $str .= "(";
	for ($i=0; $i<count($s); $i++) {
		if ($i > 0) $str .= " $search_operator "; // operator
		$str .= "(";
		for ($j=0; $j<count($field); $j++) {
			if ($j > 0) $str .= " or ";
			//if (!preg_match("/[a-zA-Z]/", $s[$i])) $binary = "binary "; else $binary = "";
			$str .= "{$binary}$field[$j] like '%$s[$i]%'";
		}
		$str .= ")";
	}
	if (count($s) > 1) $str .= ")";

	return $str;
}


// 디렉토리의 파일 리스트를 배열로 반환
function get_dirlist($dir="./", $mode="") {
	$arr = array();
	$d = dir($dir);
	while ($entry = $d->read()) {
		if ($entry != "." && $entry != ".." && $entry != "Thumbs.db") {
			switch ($mode) {
				case "d" :
					if (is_dir("$dir/$entry")) $arr[] = $entry;
					break;
				case "f" :
					if (is_file("$dir/$entry")) $arr[] = $entry;
					break;
				case "l" :
					if (is_link("$dir/$entry")) $arr[] = $entry;
					break;
				default :
					$arr[] = $entry;
			}
		}
	}
	$d->close();
	return $arr;
}

// 디렉토리의 용량을 반환
function get_dirsize($dir="./") {
	$size = 0;
	$d = dir($dir);
	while ($entry = $d->read()) {
		if ($entry != "." && $entry != "..") {
			$size += filesize("$dir/$entry");
		}
	}
	$d->close();
	return $size;
}

// 순환적으로 디렉토리를 생성
function mk_dir($dir) {
	return; // restriction

	$dir = preg_replace("/(\/){2,}|(\\\){1,}/", "/", $dir); // only forward-slash
	$dirs = explode("/", $dir);
	$path = "";
	for ($i=0, $cnt=count($dirs); $i<$cnt; $i++) {
		if ($path == "") { $path = $dirs[$i]; }
		else { $path .= "/".$dirs[$i]; }
		if (!is_dir($path)) {
			mkdir($path, 0777);
			chmod($path, 0777);
		}
	}
	return true;
}

// 순환적으로 디렉토리를 삭제
function rm_dir($dir) {
	return; // restriction

	if (is_dir($dir)) {
		$directory = dir($dir);
		while ($entry = $directory->read()) {
			if ($entry != "." && $entry != "..") {
				if (is_dir("$dir/$entry")) {
					rm_dir("$dir/$entry");
				} else {
					@unlink ("$dir/$entry");
				}
			}
		}
		$directory->close();
		@rmdir($dir);
	}
}

// 파일 사이즈를 kb, mb에 맞추어서 변환해서 리턴
function get_filesize($size) {
	if ($size >= 1024768) {
		$size = number_format($size/1024768, 1) . "MB";
	} else if ($size >= 1024) {
		$size = number_format($size/1024, 1) . "KB";
	} else {
		$size = number_format($size, 0) . "byte";
	}
	return $size;
}

// 지정된 파일의 내용을 읽어옴
function get_readfile($file) {
	if (!file_exists($file)) return "";

	$f = @fopen($file, "r");
	$str = fread($f, filesize($file));
	fclose($f);

	return $str;
}

// 지정된 파일에 주어진 데이타를 씀
function put_readfile($file, $str) {
	$f = @fopen($file, "w");
	$lock = flock($f, 2);
	if ($lock) fwrite($f, $str);
	flock($f, 3);
	fclose($f);
}

// 전체파일의 확장자(and 파일명)를 반환
function get_extension($filename, $full=0) {
	$f = explode(".", $filename);

	$f_ext = array_pop($f);
	$f_ext = strtolower($f_ext);

	$f_name = implode(".", $f);

	if ($full) $result = array($f_name, $f_ext);
	else $result = $f_ext;

	return $result;
}

/**
 * 날짜(DateTime) 변환 함수
 *
 * @$date : datetime
 * @$format
 * 1 : 0000-00-00(요일)
 * 2 : 0000-00-00(요일) 시:분:초
 * 3 : 0000년 00월 00일(요일) 시:분:초
 * 4 : 0000년 00월 00일(요일) 00시 00분 00초
 */
function conv_date($date, $format=1, $lang="korean") {
	if (!preg_match("/[^0-9]/", $date)) $date = date("Y-m-d H:i:s", $date);
	$yoil = "(" . get_yoil($date, $lang) . ")";
	$date_array = explode(" ", $date);

	switch ($format) {
		case 0 :
			$str = $date_array[0];
			break;
		case 1 :
			$str = $date_array[0] . $yoil;
			break;
		case 2 :
			$str = $date_array[0] . $yoil . " " . $date_array[1];
			break;
		case 3 :
			list($yy, $mm, $dd) = explode("-", $date_array[0]);
			$str = $yy . "년 " . $mm . "월 " . $dd . "일" . $yoil . " " . $date_array[1];
			break;
		case 4 :
			list($yy, $mm, $dd) = explode("-", $date_array[0]);
			list($hh, $ii, $ss) = explode(":", $date_array[1]);
			$str = $yy . "년 " . $mm . "월 " . $dd . "일" . $yoil . " ";
			$str .= $hh . "시 " . $ii . "분 " . $ss . "초";
		break;
	}

	return $str;
}

// 요일 반환
function get_yoil($date, $lang="korean") {
	$yoil = array(
		'korean' => array('일', '월', '화', '수', '목', '금', '토'),
		'chinese' => array('日', '月', '火', '水', '木', '金', '土'),
		'english' => array('SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT')
	);

	$yoil_num = date("w", strtotime($date)); // 'w' 숫자반환 : 0(일)~6(토)
	$str = $yoil[$lang][$yoil_num];

	return $str;
}

// 날짜 형태 변환함수
//
// @param $datetime : 날짜[시간]
// @param $type : 타입번호
// @return : 배열
function TO_date_type($datetime, $type="", $yoil=false) {
	$str = "";
	switch($type) {
		case 1: // 2009.09.24
			$str = @date("Y.m.d", @strtotime($datetime));
			break;
		case 2: // 2009.09.24 09:15
			$str = @date("Y.m.d H:i", @strtotime($datetime));
			break;
		case 3: // 2009/09/24 09:15
			$str = @date("Y/m/d H:i", @strtotime($datetime));
			break;
		default: // 2009-09-24
			$str = @date("Y-m-d", @strtotime($datetime));
	}

	// 요일 추가일 경우
	if ($yoil == true) {
		$yoil_array = array('일', '월', '화', '수', '목', '금', '토');
		$yoil_num = @date("w", @strtotime($datetime)); // 'w' 숫자반환 : 0(일)~6(토)
		$str .= " (" . $yoil_array[$yoil_num] . ")";
	}

	return $str;
}

// TEXT 형식으로 변환 ( = htmlspecialchars($str, ENT_QUOTES))
function get_text($str, $nl2br=0) {
	//$str = stripslashes($str);
	//$source[] = "/	/";
	//$target[] = " &nbsp;";
	//$source[] = "/&/";
	//$target[] = "&amp;";
	$source[] = "/\"/";
	$target[] = "&quot;";
	//$target[] = "&#034;";
	$source[] = "/\'/";
	$target[] = "&#039;";
	$source[] = "/</";
	$target[] = "&lt;";
	$source[] = "/>/";
	$target[] = "&gt;";

	if ($nl2br) {
		$source[] = "/\n/";
		$target[] = "<br />";
	}

	return preg_replace($source, $target, $str);
}

// 디렉토리의 퍼미션을 체크 ( = is_writable())
function is_perms($dir) {
	if (!is_dir($dir)) return false;
	$perms = substr(decoct(fileperms($dir)), -4);
	if ($perms != "0777" && $perms != "0707") return false;
	return true;
}

// HTML Tag를 제거하는 함수
function del_html($str) {
	$source[] = "/</";
	$target[] = "&lt;";
	$source[] = "/>/";
	$target[] = "&gt;";

	return preg_replace($source, $target, $str);
}

// url 자동 링크 함수
function url_autolink($str) {
	$str = preg_replace("/&lt;/", "\t_lt_\t", $str);
	$str = preg_replace("/&gt;/", "\t_gt_\t", $str);
	$str = preg_replace("/&amp;/", "&", $str);
	$str = preg_replace("/&quot;/", "\"", $str);
	$str = preg_replace("/&nbsp;/", "\t_nbsp_\t", $str);
	$str = preg_replace("/([^(http:\/\/)]|\(|^)(www\.[^[:space:]]+)/i", "\\1<A HREF=\"http://\\2\" TARGET='_blank'>\\2</A>", $str);
	$str = preg_replace("/([^(HREF=\"?'?)|(SRC=\"?'?)]|\(|^)((http|https|ftp|telnet|news|mms):\/\/[a-zA-Z0-9\.-]+\.[\xA1-\xFEa-zA-Z0-9\.:&#=_\?\/~\+%@;\-\|\,]+)/i", "\\1<A HREF=\"\\2\" TARGET='_blank'>\\2</A>", $str);
	$str = preg_replace("/(([a-z0-9_]|\-|\.)+@([^[:space:]]*)([[:alnum:]-]))/i", "<a href='mailto:\\1'>\\1</a>", $str);
	$str = preg_replace("/\t_nbsp_\t/", "&nbsp;" , $str);
	$str = preg_replace("/\t_lt_\t/", "&lt;", $str);
	$str = preg_replace("/\t_gt_\t/", "&gt;", $str);

	return $str;
}

// URL, Mail을 자동으로 체크하여 링크만듬
function get_link($str){// URL 치환
	$str=" ".$str;
	$str = eregi_replace( ">http://([a-z0-9\_\-\.\/\~\@\?\=\;\&\#\-]+)", "><a href=http://\\1 target=_blank>http://\\1</a>", $str);
	$str = eregi_replace( "&nbsp;&nbsp;http://([a-z0-9\_\-\.\/\~\@\?\=\;\&\#\-]+)", "&nbsp;&nbsp;<a href=http://\\1 target=_blank>http://\\1</a>", $str);
	$str = eregi_replace( " http://([a-z0-9\_\-\.\/\~\@\?\=\;\&\#\-]+)", " <a href=http://\\1 target=_blank>http://\\1</a>", $str);

	// 메일 치환
	$str = eregi_replace("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", "<a href=mailto:\\1@\\2>\\1@\\2</a>", $str);

	return $str;
}

//날짜 모양 변환함수
function Date_Type($RegDate,$type){
	if($type=="1"){//예) YYYY.MM.DD
		$RegDateStr=substr($RegDate,0,10);
		$RegDateStr=str_replace("-",".",$RegDateStr);
	}else if($type=="2"){//예) YYYY.MM.DD H:I
		$RegDateStr=substr($RegDate,0,16);
		$RegDateStr=str_replace("-",".",$RegDateStr);
	}else if($type=="3"){//예) YYYY/MM/DD H:I
		$RegDateStr=substr($RegDate,0,16);
		$RegDateStr=str_replace("-","/",$RegDateStr);
	}

	return $RegDateStr;
}

//메일보내기 내용정리
function mail_smart($value){
	$value  = str_replace("</div>","</div>\n",$value);
	$value  = str_replace("</br>","</br>\n",$value);
	$value  = str_replace("<br />","<br />\n",$value);
	$value  = str_replace("<br>","<br>\n",$value);
	$value  = str_replace("</td>","</td>\n",$value);
    return $value;
}

//뉴아이콘
function newicon($date,$period='',$iconUrl=''){
	global $NewIconSrc,$NewIconPeriod;

	if(!$period){
		$period=$NewIconPeriod;
	}

	$date=strtotime($date);
	$period=60*60*$period;
	$setTime = time() ; //현재 일자의 time값 계산
	$cntTime = $setTime - $period ; //현재 일자의 시간에서 7일전 값을 계산 하루의 타임값 : 60(초) * 60(분) * 24(시간) = 86400

	if($date > $cntTime ) // 최신 파일일 경우 new 이이콘 보여줌
	{
		if($iconUrl){
			$new_icon="&nbsp;<img src=\"".$iconUrl."\" align=absmiddle border=0>";
		}else{
			$new_icon="&nbsp;<img src=\"/admin/image/board/icon_new.gif\" align=absmiddle border=0>";
		}
	}else{
		$new_icon="";
	}
	return $new_icon;
}

//limit
function get_limit($page="1", $total, $line="10", $list="10"){
	$return_array = array();

	if($total < 0)		return "error -> total";

	$total_page = ceil($total / $line);
	if ($total == 0) $total_page = 1;
	if ($page > $total_page) $page = $total_page;
	$total_list = intval($total_page / $list);
	if ($total_page % $list == 0) $total_list--;
	$curr_list = intval($page / $list);

	if ($page % $list == 0) $curr_list--;
	$start_page = $curr_list * $list + 1;
	$prev_list = $start_page - $list;
	$next_list = $start_page + $list;
	$olds = $line * ($page - 1);

	$return_array['olds'] = $olds;
	$return_array['line'] = $line;
	$return_array['list'] = $list;
	$return_array['total_page'] = $total_page;

	return $return_array;
}
?>