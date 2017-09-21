<?php
// 페이지 헤더 인코딩 설정
@header("content-type: text/html; charset={$cf[charset]}");

// DB 접속정보
/*$tdb_host	= $cf['db_host'];	// DB Host
$tdb_user	= $cf['db_id'];		// DB ID
$tdb_passwd	= $cf['db_pw'];		// DB PW
$tdb_name	= $cf['db_name'];	// DB Name */

$tdb_host	= "localhost";	// DB Host
$tdb_user	= "root";		// DB ID
$tdb_passwd	= "";		// DB PW
$tdb_name	= "turning_point_db";	// DB Name

// DB 접속
$connect = @mysql_connect($tdb_host, $tdb_user, $tdb_passwd, true);
$db_select = @mysql_select_db($tdb_name, $connect);
if (!$db_select)	die("DB 접속 오류가 발생하였습니다");

// DB 인코딩 설정
mysql_query("set names '{$cf[charset_str]}'");

?>