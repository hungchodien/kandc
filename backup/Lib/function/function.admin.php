<?php
//로그인 페이지
function is_Login($login="./login/login.php"){
	global $Path;

	$pass = isset($_SESSION['MemberLevel']) ?  true : false;

	return (!$pass) ? "login" : "main";
}

//로그인 체크
function Chk_Login(){
	global $Path;

	$pass = isset($_SESSION['MemberLevel']) ?  true : false;

	if(!$pass)	move_page($Path['Abs_Path']);
}

//배열비교
function comparison($str, $arr, $separator="_"){
	$array_list = explode($separator, $arr);

	if( in_array($str, $array_list) )	return true;
	else								return false;
}

//금일 날짜 시간
function Today(){
	$str = "";

	$Year = date("Y");
	$Mon = date("M", date("Y-m-d"));
	$Day = date("d");
	$Yoil = date("l", date("Y-m-d"));

	$str = "{$Yoil}, {$Mon} {$Day}, $Year";

	return $str;
}
?>