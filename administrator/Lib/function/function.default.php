<?php
/******************************************************************************
* 공통 함수
******************************************************************************/

//function ckBrowser() {
//	$agent = strtolower(getenv("HTTP_USER_AGENT"));
//
//	if (preg_match("/msie 5.0[0-9]*/", $agent))         { $s = "MS-Explorer 5.0"; }
//    else if(preg_match("/msie 5.5[0-9]*/", $agent))     { $s = "MS-Explorer 5.5"; }
//    else if(preg_match("/msie 6.0[0-9]*/", $agent))     { $s = "MS-Explorer 6.0"; }
//    else if(preg_match("/msie 7.0[0-9]*/", $agent))     { $s = "MS-Explorer 7.0"; }
//    else if(preg_match("/msie 8.0[0-9]*/", $agent))     { $s = "MS-Explorer 8.0"; }
//    else if(preg_match("/msie 4.[0-9]*/", $agent))      { $s = "MS-Explorer 4.x"; }
//    else if(preg_match("/firefox/", $agent))            { $s = "FireFox"; }
//    else if(preg_match("/chrome/", $agent))             { $s = "Chrome"; }
//    else if(preg_match("/x11/", $agent))                { $s = "Netscape"; }
//    else if(preg_match("/opera/", $agent))              { $s = "Opera"; }
//    else if(preg_match("/gec/", $agent))                { $s = "Gecko"; }
//    else if(preg_match("/bot|slurp/", $agent))          { $s = "Robot"; }
//    else if(preg_match("/internet explorer/", $agent))  { $s = "IE"; }
//    else if(preg_match("/mozilla/", $agent))            { $s = "Mozilla"; }
//    else												{ $s = "unknown"; }
//
//	return $s;
//}
//
//function ckOs() {
//	$agent = strtolower(getenv("HTTP_USER_AGENT"));
//
//	if (preg_match("/windows 98/", $agent))					{ $s = "Windows 98"; }
//    else if(preg_match("/windows 95/", $agent))             { $s = "Windows 95"; }
//    else if(preg_match("/windows nt 4\.[0-9]*/", $agent))   { $s = "Windows NT"; }
//    else if(preg_match("/windows nt 5\.0/", $agent))        { $s = "Windows 2000"; }
//    else if(preg_match("/windows nt 5\.1/", $agent))        { $s = "Windows XP"; }
//    else if(preg_match("/windows nt 5\.2/", $agent))        { $s = "Windows 2003"; }
//    else if(preg_match("/windows nt 6\.0/", $agent))        { $s = "Windows Vista"; }
//    else if(preg_match("/windows nt 6\.1/", $agent))        { $s = "Windows 7"; }
//    else if(preg_match("/windows 9x/", $agent))             { $s = "Windows ME"; }
//    else if(preg_match("/windows ce/", $agent))             { $s = "CE"; }
//    else if(preg_match("/mac/", $agent))                    { $s = "MAC"; }
//    else if(preg_match("/linux/", $agent))                  { $s = "Linux"; }
//    else if(preg_match("/sunos/", $agent))                  { $s = "sunOS"; }
//    else if(preg_match("/irix/", $agent))                   { $s = "IRIX"; }
//    else if(preg_match("/phone/", $agent))                  { $s = "Phone"; }
//    else if(preg_match("/bot|slurp/", $agent))              { $s = "Robot"; }
//    else if(preg_match("/internet explorer/", $agent))      { $s = "IE"; }
//    else if(preg_match("/mozilla/", $agent))                { $s = "Mozilla"; }
//    else													{ $s = "unknown"; }
//
//	return $s;
//}

// 현재페이지 전체 URL 반환 함수 ($_SERVER['REQUEST_URI'] 함수 대체)
// 윈도우서버에는 $_SERVER['REQUEST_URI'] 값이 없음
function request_uri() {
	if ($_SERVER['REQUEST_URI'])
		$request_uri = $_SERVER['REQUEST_URI'];
	else {
		$self = $_SERVER['PHP_SELF'];
		$query = $_SERVER['QUERY_STRING'];
		$request_uri = $self;
		if ($query) $request_uri .= "?" . $query;
	}

	return $request_uri;
}

// 마이크로 타임을 얻어 계산 형식으로 만듦
function get_microtime() {
	list($usec, $sec) = explode(" ",microtime());
	return ((float)$usec + (float)$sec);
}

// 세션변수 생성 (PHP버전별로 똑같이 쓰기위함)
function set_session($session_name, $value) {
	if (PHP_VERSION < '5.3.0')	session_register($session_name);
	$$session_name = $_SESSION["$session_name"] = $value;

	/*
	session_register($session_name);
	$_SESSION[$session_name] = $value;
	*/
}

// 세션변수값 가져옴 (PHP버전별로 똑같이 쓰기위함)
function get_session($session_name) {
	return $_SESSION[$session_name];
}

// 쿠키변수 생성 (인코딩 해서 생성)
function set_cookie($cookie_name, $value, $expire) {
	global $cf;

	$cookie_value = ($value) ? md5_encrypt($value) : "";
	setcookie(md5($cookie_name), $cookie_value, $expire, '/', $cf[cookie_domain]);
}

// 쿠키변수값 가져옴 (디코딩 해서 가져옴)
function get_cookie($cookie_name) {
	return md5_decrypt($_COOKIE[md5($cookie_name)]);
}

// 암호화 함수
function md5_encrypt($plain_text, $password = "_CubeInt_", $iv_len = 16) {
	$plain_text .= "\x13";
	$n = strlen($plain_text);
	if ($n % 16) $plain_text .= str_repeat("\0", 16 - ($n % 16));
	$i = 0;
	//$enc_text = get_rnd_iv($iv_len);
	while ($iv_len-- >0) {
		$enc_text .= chr(mt_rand() & 0xff);
	}
	$iv = substr($password ^ $enc_text, 0, 512);
	while ($i < $n) {
		$block = substr($plain_text, $i, 16) ^ pack('H*', md5($iv));
		$enc_text .= $block;
		$iv = substr($block . $iv, 0, 512) ^ $password;
		$i += 16;
	}
	return base64_encode($enc_text);
}

// 복호화 함수
function md5_decrypt($enc_text, $password = "_CubeInt_", $iv_len = 16) {
	$enc_text = base64_decode($enc_text);
	$n = strlen($enc_text);
	$i = $iv_len;
	$plain_text = '';
	$iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
	while ($i < $n) {
		$block = substr($enc_text, $i, 16);
		$plain_text .= $block ^ pack('H*', md5($iv));
		$iv = substr($block . $iv, 0, 512) ^ $password;
		$i += 16;
	}
	return preg_replace('/\\x13\\x00*$/', '', $plain_text);
}

// 리퍼러 검사
function is_referer() {
	if (!preg_match("/^http[s]?:\/\/".$_SERVER[HTTP_HOST]."/", $_SERVER[HTTP_REFERER])) return 0;
	return 1;
}

// 자리수 만큼 대체 문자 채움 (왼쪽)
function lpad($str, $len, $pad) {
	return str_pad($str, $len, $pad, STR_PAD_LEFT);
}

// 자리수 만큼 대체 문자 채움 (오른쪽)
function rpad($str, $len, $pad) {
	return str_pad($str, $len, $pad, STR_PAD_RIGHT);
}

// url에 http:// 를 붙인다
function set_http($url) {
	if (!trim($url)) return "";
	if (!eregi("^(http|https|ftp|telnet|news|mms)://", $url)) $url = "http://" . $url;
	return $url;
}

// 공백/탭 변환
function conv_space($str) {
	$str = str_replace("	", "&nbsp;&nbsp;", $str);
	$str = str_replace("	", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $str);
	$str = str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $str);
	return $str;
}

// 테이블 변환
function conv_table($str) {
	if (!$str) return;

	// 테이블 태그의 <br /> 처리
	$str = preg_replace("/<(\/?table|\/?tr|\/?td)(.*)>\s*<br \/>/i", "<$1$2>", $str);

	// 테이블 태그의 갯수를 세어 테이블이 깨지지 않게 처리
	$table_open_count = substr_count(strtolower($str), "<table");
	$table_close_count = substr_count(strtolower($str), "</table");
	for ($i=$table_close_count; $i<$table_open_count; $i++) {
		$str .= "</table>";
	}

	return $str;
}

// 랜덤 스트링 생성
function random_string($length=16, $prefix="") {
	$randomcode = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0','A', 'B', 'C', 'd', 'E', 'F', 'G', 'H', 'x', 'J','K', 'b', 'M', 'N', 'y', 'P', 'r', 'R', 'S', 'T','u', 'V', 'W', 'X', 'Y', 'Z');
	$str = "";
	mt_srand((double)microtime() * 1000000);
	for($i=1; $i<=$length; $i++) $str .= $randomcode[mt_rand(1, 36)];
	return $prefix . $str;
}

// $dimension 을 기준으로 2차원 배열 정렬(소트) 함수
function darray_sort($arr, $dimension, $sort="ASC") {
	if (!is_array($arr)) return $arr;
	if ($dimension !== 0) {
		for($i=0; $i<sizeof($arr); $i++) array_unshift($arr[$i], $arr[$i][$dimension]);
		if ($sort == "ASC") sort($arr); elseif ($sort == "DESC") rsort($arr);
		for($i=0; $i<sizeof($arr); $i++) array_shift($arr[$i]);
	}
	else {
		if ($sort == "ASC") sort($arr); elseif ($sort == "DESC") rsort($arr);
	}
	return $arr;
}

// 배열값의 길이로 정렬
function lsort($arr) {
	if (!is_array($arr)) return $arr;
	for ($i=0; $i<count($arr); $i++) {
		for ($j=$i+1; $j<count($arr); $j++) {
			if (strlen($arr[$j]) > strlen($arr[$i])) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $tmp;
			}
		}
	}
	return $arr;
}

// 배열값의 길이로 역순정렬
function lrsort($arr) {
	if (!is_array($arr)) return $arr;
	for ($i=0; $i<count($arr); $i++) {
		for ($j=$i+1; $j<count($arr); $j++) {
			if (strlen($arr[$j]) > strlen($arr[$i])) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $tmp;
			}
		}
	}
	return $arr;
}

// 날짜 selectbox 옵션 설정 함수(년)
function year_option($val="", $start=2005) {
	$res = "";
	for ($i=$start; $i<=date("Y"); $i++) {
		$v = sprintf("%04d", $i);
		$res .= "<option value='$v'";
		if ($v == $val) $res .= " selected";
		$res .= ">{$i}</option>";
	}
	return $res;
}

// 날짜 selectbox 옵션 설정 함수(월)
function month_option($val="") {
	$res = "";
	for ($i=1; $i<=12; $i++) {
		$v = sprintf("%02d", $i);
		$res .= "<option value='$v'";
		if ($v == $val) $res .= " selected";
		$res .= ">{$i}</option>";
	}
	return $res;
}

// 날짜 selectbox 옵션 설정 함수(일)
function day_option($val="") {
	$res = "";
	for ($i=1; $i<=31; $i++) {
		$v = sprintf("%02d",$i);
		$res .= "<option value='$v'";
		if ($v == $val) $res .= " selected";
		$res .= ">{$i}</option>";
	}
	return $res;
}

// 배열 데이터 stripslashes 처리
//
// @param $arr : 배열
// @return : 배열
function TO_stripslashes($arr) {
	if (!is_array($arr)) return $arr;

	if (get_magic_quotes_gpc()) {
		$arr = array_map('stripslashes', $arr);
	}

	return $arr;
}

function TO_implode($div="-", $arr) {
	if (!is_array($arr)) return "";

	$tmp = array();
	for ($i=0, $cnt=count($arr); $i<$cnt; $i++) {
		if ($arr[$i]) $tmp[] = $arr[$i];
	}
	$str = @implode($div, $tmp);

	return $str;
}

// 빈문자열 경우 1을 리턴
function is_blank($str) {
	$temp = str_replace("　", "", $str);
	$temp = str_replace("\n", "", $temp);
	$temp = strip_tags($temp);
	$temp = str_replace("&nbsp;", "", $temp);
	$temp = str_replace(" ", "", $temp);
	if (preg_match("/[^[:space:]]/i", $temp)) return 0;
	return 1;
}

// 숫자일 경우 1을 리턴
function is_num($str) {
	if (preg_match("/[^0-9]/",$str)) return 0;
	return 1;
}

// 숫자, 영문자, _ 일경우 1을 리턴
function is_alnum($str) {
	if (preg_match("/[^0-9a-zA-Z\_]/",$str)) return 0;
	return 1;
}

/*
 * 2byte 문자가 포함되었는지 검사
 * [\x00-\x7F]					:	ASCII/JIS-Roman (1 byte/char)
 * \x8E[\xA0-\xDF]				:	katakana (2 bytes/char)
 * \x8F[\xA1-\xFE][\xA1-\xFE]	:	JIS (3 bytes/char)
 * [\xA1-\xFE][\xA1-\xFE]		:	(2 bytes/char)
 */
// 한글일 경우 1을 리턴
function is_hangul($str) {
	if (preg_match("/^([\xA1-\xFE][\xA1-\xFE])+$/", $str)) return 1;
	else return 0;
}

// E-mail 주소가 올바른지 검사
function is_mail($str) {
	if (eregi("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", $str)) return $str;
	else return '';
}

// E-mail 의 MX를 검색하여 실제 존재하는 메일인지 검사
function is_mail_mx($email) {
	if (!ismail($email)) return false;
	list($user, $host) = explode("@", $email);
	if (checkdnsrr($host, "MX") or checkdnsrr($host, "A")) return 1;
	else return 0;
}

// 쿼터 제거
function strip_quotes($str) {
	$str = preg_replace("/`/", "", $str);
	$str = preg_replace("/(\"|&quot;|&#034;)/", "", $str);
	$str = preg_replace("/('|&#039;)/", "", $str);
	//$str = preg_replace("/(<|&lt;)/", "", $str);
	//$str = preg_replace("/(>|&gt;)/", "", $str);

	return $str;
}

// iframe, script 코드 제거
function strip_iframescript($str) {
	// iframe 제거
	$str = preg_replace("/<iframe(.*?)<\/iframe>/is", "", $str);

	// script code 제거
	$str = preg_replace("/<script(.*?)<\/script>/is", "", $str);
	return $str;
}

// 문자열 내에서 이미지 경로를 변환
function conv_img_src($str, $path) {
	if (!$str) return;

	// 변경할 경로를 $GLOBALS 변수에 저장
	$GLOBALS[path] = $path;

	// 매치된 이미지 경로를 새로운 이미지 경로(+기존파일명)으로 치환
	$callback = create_function('$matches', "
		\$tmp = @explode('/', \$matches[2]);
		\$filename = \$tmp[count(\$tmp) - 1];
		\$fullpath = \$GLOBALS[path] . \$filename;
		\$replace = str_replace(\$matches[2], \$fullpath, \$matches[0]);
		return \$replace;
	");

	// 치환
	$output = preg_replace_callback('@<img\s[^>]*src\s*=\s*(["\'])?([^\s>]+?)\1@i', $callback, $str);

	return $output;
}

// 문자열 띄어쓰기(스페이스) 적용 함수 (태그 제외하고 적용해야함)
function str_space($str) {
	$string_len = strlen($str);
	$count = 0; $tag = 0;
	$temp_str = "";
	for ($i=0; $i<$string_len; $i++) {
		$laststr = substr($str, $i, 1);

		if ($laststr == "<") $tag = 1;
		if ($tag && $laststr == ">") $tag = 0;
		if ($tag) {
			$temp_str .= $laststr;
		}
		else {
			if ($laststr == " ") {
				$temp_str .= "&nbsp;";
			}
			else {
				$temp_str .= $laststr;
			}
		}
	}

	return $temp_str;
}

// 문자열 사이의 문자열 가져옴
function get_between($str, $s1, $s2="") {
	$len1 = strlen($s1);
	if ($len1 > 0) $pos1 = strpos($str, $s1); else $pos1 = 0;
	if ($pos1 !== false) {
		$res = substr($str, $pos1 + $len1);
		if ($s2 == "") return $res;
		$pos2 = strpos($res, $s2);
		if ($pos2 !== false) return substr($res, 0, $pos2);
	}
	return "";
}

// 금액을 숫자로 반환
//
// @param $price : 금액
// @return : 숫자
function TO_number($price) {
	$price = str_replace(",", "", $price);

	return $price;
}

function msg_move_page($msg,$url="back",$isExit=1){
	if($msg) echo "<Script language='Javascript'>alert('".$msg."');</Script>";
	if($url){
		switch($url){
			case "home"	:
				echo "<script>location.href='/'</script>";
				break;
			case "back" :
				echo "<Script language='Javascript'>history.go(-1);</Script>";
				break;
			case "close" :
				echo "<Script language='Javascript'>self.close();</Script>";
				break;
			case "reload" :
				echo "<Script language='Javascript'>document.location.reload();</Script>";
				break;
			case "top_opener_reload" :
				echo "<Script language='Javascript'>top.opener.document.location.reload();</Script>";
				break;
			case "top_url" :
				echo "<Script language='Javascript'>top.document.location.href = '".$url."'</Script>";
				break;
			case "parent_reload" :
				echo "<Script language='Javascript'>parent.document.location.reload();</Script>";
				break;
			default :
				echo "<Script language='Javascript'>document.location.replace('".$url."');</Script>";
				break;
		}
	}
	if($isExit) exit();
}

//페이지 이동
function move_page($url){
    echo"<meta http-equiv=\"refresh\" content=\"0; url=$url\">";
    exit;
}

//selectbox 생성
function Create_Selectbox($box_name, $array, $selected="", $opt="", $opt_first="Y"){
	if($opt_first == "Y")	$option = "<option value=''>--선택하세요--</option>";

	foreach($array as $key => $value){
		$SELECTED = ($selected == $key) ? "selected" : "";
		$option .= "<option value='{$key}' {$SELECTED}>{$value}</option>";
	}

	$selectbox = "<select name='{$box_name}' id='{$box_name}' {$opt}>{$option}</select>";

	return $selectbox;
}

//경고창
function msg($str){
	echo "<script>alert('".$str."');</script>";
}

function To_Print($org, $copy, $a, $b='', $c='or'){
	if(!$org || !$copy || !$a)	return;

	$org_array = @explode("|", $org);
	$copy_array = @explode("|", $copy);

	if($c == "||")			$c = "or";
	else if($c == "&&")		$c = "and";
	else					$c = $c;

	$cnt = 0;

	if($c == "or"){
		foreach($org_array as $org_list){
			foreach($copy_array as $copy_list){
				if($org_list == $copy_list){
					$cnt = 1;
					break;
				}
			}
		}

		if($cnt == 1)		return $a;
		else				return $b;
	}else{
		if(count(array_diff($org_array, $copy_array)) <= 0)		return $a;
		else													return $b;
	}
}

//말줄임(....)
function NCut_Str($str, $len){
	global $cf;
	return mb_strimwidth($str,0,$len,"...",$cf[charset]);
}

//메일발송
//보낸이, 보낸email, 받는mail, 제목, 내용, 1로 보냄
function To_Send_Mail($fname, $fmail, $to, $subject, $content, $type=1, $file="", $cc="", $bcc=""){
	global $Path;

	$fname   = "=?$cf[charset]?B?" . base64_encode($fname) . "?=";
    $subject = "=?$cf[charset]?B?" . base64_encode($subject) . "?=";

    $header  = "Return-Path: <$fmail>\n";
    $header .= "From: $fname <$fmail>\n";
    $header .= "Reply-To: <$fmail>\n";
    if ($cc)  $header .= "Cc: $cc\n";
    if ($bcc) $header .= "Bcc: $bcc\n";
    $header .= "MIME-Version: 1.0\n";

    // UTF-8 관련 수정
    $header .= "X-Mailer: SIR Mailer 0.92 ($Path[Http]) : $_SERVER[SERVER_ADDR] : $_SERVER[REMOTE_ADDR] : $Path[Http] : $_SERVER[PHP_SELF] : $_SERVER[HTTP_REFERER] \n";

    if ($file != "") {
        $boundary = uniqid($Path['Http']);

        $header .= "Content-type: MULTIPART/MIXED; BOUNDARY=\"$boundary\"\n\n";
        $header .= "--$boundary\n";
    }

    if ($type) {
        $header .= "Content-Type: TEXT/HTML; charset=$cf[charset]\n";
        if ($type == 2)
            $content = nl2br($content);
    } else {
        $header .= "Content-Type: TEXT/PLAIN; charset=$cf[charset]\n";
        $content = stripslashes($content);
    }
    $header .= "Content-Transfer-Encoding: BASE64\n\n";
    $header .= chunk_split(base64_encode($content)) . "\n";

    if ($file != "") {
        foreach ($file as $f) {
			$fp = @fopen($f, "r");
			$attach_file = @fread($fp, filesize($f));
			@fclose($fp);

			$header .= "--$boundary\r\n";
			$header.= "Content-Type: ".mime_type($f)."; name=\"".basename($f)."\"\r\n";
			$header .= "Content-Transfer-Encoding: base64\r\n";
			$header .= "Content-Disposition: attachment; filename=\"".basename($f)."\"\r\n\r\n";
			$header .= base64_encode($attach_file)."\r\n\r\n";
        }
        $header .= "--$boundary--\n";
    }

    @mail($to, $subject, "", $header, "-f".$fmail);
}

//파일타입
function mime_type($f){
	$f = escapeshellarg($f);
	return trim( `file -bi $f` );
}


//debug
function error_msg($str, $mode=""){
	$mode = ($mode == "2" || $mode == "echo") ? "2" : "1";

	if($mode == 1)	return "<br><font color='red'><b>Error</b></font> -> ".nl2br($str)."<br>";
	else			echo "<br><font color='red'><b>Error</b></font> -> ".nl2br($str)."<br>";
}


function create_crbox($box_id, $array, $type="checkbox", $checked="", $style=""){
	if(!$box_id || !$array)		error_msg("box_id or array empty", 2);

	$return_value = "";

	$i = 0;
	foreach($array as $key => $value){
		if($type == "checkbox"){

			if( is_array($checked) ){
				if( in_array($key, $checked) )	$equals = "checked='checked'";
				else							$equals = "";
			}else{
				if( ($checked != "") && ($checked == $key) )	$equals = "checked='checked'";
				else											$equals = "";
			}

			$return_value .= "<input type='checkbox' name='{$box_id}{$i}' id='{$box_id}{$i}' value='{$key}' {$equals} {$style}/> {$value}&nbsp;";
		}else{
			$equals = ($checked == $key) ? "checked='checked'" : "";

			$return_value .= "<input type='radio' name='{$box_id}' id='{$box_id}{$i}' value='{$key}' {$equals} {$style}/> {$value}&nbsp;";
		}
		$i++;
	}

	return $return_value;
}

// 페이징 출력 함수
function TO_get_paging2($total_page, $now_page, $block_page, $url, $add="") {
	// 페이징 HTML
	$paging = "<div class='paginate'>";

	$start_page = (int)(($now_page - 1) / $block_page) * $block_page + 1; // 시작 페이지
	$end_page = $start_page + $block_page - 1; // 끝 페이지
	if ($end_page >= $total_page) $end_page = $total_page;

	// 페이지 링크 설정
	if (strpos($url, "{PAGE}") === false) {
		$url .= "{PAGE}";
	}

	// 맨앞
	if ($now_page > 1) {
		$_url = str_replace("{PAGE}", 1, $url);
		$paging .= "<a href=\"" . $_url . "{$add}\" class='p_btn'><img src='/images/board/btn_first.gif' border='0' align='absmiddle'/></a>&nbsp;";
	}
	else {
		$paging .= "<img src='/images/board/btn_first.gif' class='p_btn' border='0' align='absmiddle'/>";
	}

	// 이전블럭
	if ($start_page > $block_page) {
		$prev_page = $start_page - 1;
		$_url = str_replace("{PAGE}", $prev_page, $url);
		$paging .= "<a href=\"". $_url . "{$add}\" class='p_btn'><img src='/images/board/btn_prev.gif' border='0' align='absmiddle'/></a>";
	}
	else {
		$paging .= "&nbsp;<img src='/images/board/btn_prev.gif' class='p_btn' border='0' align='absmiddle'/>";
	}

	// 페이지
	if ($total_page >= 1) {
		for ($p=$start_page; $p<=$end_page; $p++) {
			// 페이지 번호 사이에 구분자 넣기
			//if ($p != $start_page) $paging .= "<li class='pg'> </li>\n";

			$_url = str_replace("{PAGE}", $p, $url);
			if ($p == $now_page) $paging .= "<strong>$p</strong>";
			else $paging .= "<a href=\"" . $_url . "{$add}\">$p</a>";
		}
	}

	// 다음블럭
	if ($total_page > $end_page) {
		$next_page = $end_page + 1;
		$_url = str_replace("{PAGE}", $next_page, $url);
		$paging .= "<a href=\"" . $_url . "{$add}\" class='p_btn'><img src='/images/board/btn_next.gif' border='0' align='absmiddle'/></a>";
	}
	else {
		$paging .= "&nbsp;<img src='/images/board/btn_next.gif' class='p_btn' border='0' align='absmiddle'/>";
	}

	// 맨뒤
	if ($now_page < $total_page) {
		$_url = str_replace("{PAGE}", $total_page, $url);
		$paging .= "<a href=\"". $_url . "{$add}\"><img src='/images/board/btn_end.gif' border='0' align='absmiddle'/></a>";
	}
	else {
		$paging .= "&nbsp;<img src='/images/board/btn_end.gif' border='0' align='absmiddle'/>";
	}

	$paging .= "</div>";

	return $paging;
}


// 페이징 출력 함수
function TO_get_apaging($total_page, $now_page, $block_page, $url, $add="") {

	$paging = "<div class='tablenav-pages'>";

	$start_page = (int)(($now_page - 1) / $block_page) * $block_page + 1; // 시작 페이지
	$end_page = $start_page + $block_page - 1; // 끝 페이지
	if ($end_page >= $total_page) $end_page = $total_page;

	if (strpos($url, "{PAGE}") === false) {
		$url .= "{PAGE}";
	}


	if ($start_page > $block_page) {
		$prev_page = $start_page - 1;
		$_url = str_replace("{PAGE}", $prev_page, $url);
		$paging .= "<span class='paging-input'><a href='{$_url}' title='Go to the previous page'>PREV</a></span>";
	}


	if ($total_page >= 1) {
		for ($p=$start_page; $p<=$end_page; $p++) {
			$_url = str_replace("{PAGE}", $p, $url);

			if($p == $now_page)		$paging .= "<span class='paging-input'><a href='javascript:;'>{$p}</a></span>";
			else					$paging .= "<span class='paging-input'><a href='{$_url}'>{$p}</a></span>";
		}
	}

	if ($total_page > $end_page) {
		$next_page = $end_page + 1;
		$_url = str_replace("{PAGE}", $next_page, $url);
		$paging .= "<span class='paging-input'><a href='{$_url}' title='Go to the next page'>NEXT</a></span>";
	}

	$paging .= "</div>";

	return $paging;
}

function slug_title($string)
			{
				$string=vn_filter($string);
				$string= strtolower(trim($string));
				$string = str_replace('&amp;','and',$string);
 				$string = preg_replace('/[%\'"``]/', '', $string);
				$string= preg_replace('/[^a-z0-9-]/', '-', $string);
				$string= preg_replace('/-+/', "-", $string);
				$string = preg_replace('/^[\-]+/','',$string); 
				$string = trim($string, '-');
				return $string;
			}

		function vn_filter($str){
			$unicode = array(
				'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
				'd'=>'đ',
				'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'i'=>'í|ì|ỉ|ĩ|ị',
				'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
				'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
				'D'=>'Đ',
				'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
				'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
				'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
				'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
			
		   foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
		   }
			return $str;
    	}


?>