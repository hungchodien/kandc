<?php
// 빈값 버그 방지
$cf[''] = "";
$fodermedia="../media_uploads";
// 케릭터셋 설정
$cf['charset']		= "utf-8";
$cf['charset_str']	= str_replace("-", "", $cf['charset']);

// DB 접속정보
$cf['db_host']	= "localhost";		// DB Host
$cf['db_id']	= "root";		// DB ID
$cf['db_pw']	= "";	// DB PW
$cf['db_name']	= "turning_point_db";	// DB Name

//파일 업로드 사이즈(최대에서 1M줄임)
$cf['max_upload_size'] = ini_get("post_max_size");
preg_match_all("/(\d+)/", $cf['max_upload_size'], $match);
$cf['max_upload_size'] = "";
$cf['max_upload_size'] = (join($match[0]) * 1024 * 1024) - (1024 * 1024);

// 하루는 86400 초. 1시간은 3600초
$cf['time_stamp']	= time();
$cf['time_ymd']		= date("Y-m-d", $cf['time_stamp']);
$cf['time_his']		= date("H:i:s", $cf['time_stamp']);
$cf['time_ymdhis']	= date("Y-m-d H:i:s", $cf['time_stamp']);

$cf['img_file'] = array("jpg", "gif", "png", "bmp");
$cf['deny_file'] = array("phtm","htm","html","shtm","ztx","php","dot","asp","cgi","pl","com","bat","exe","js","jsp","java","aspx");
?>