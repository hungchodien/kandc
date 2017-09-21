<?php
// 빈값 버그 방지
$cf[''] = "";

// 케릭터셋 설정
$cf['charset']		= "utf-8";
$cf['charset_str']	= str_replace("-", "", $cf['charset']);

// DB 접속정보
//$cf['db_host']	= "mysql438.db.sakura.ne.jp";		// DB Host
//$cf['db_id']	= "kc-kitchen";		// DB ID
//$cf['db_pw']	= "kreis0050";	// DB PW
//$cf['db_name']	= "kc-kitchen_kandcv2";	// DB Name

$cf['db_host']	= "mysql406.db.sakura.ne.jp";		// DB Host
$cf['db_id']	= "kreisandcompany";		// DB ID
$cf['db_pw']	= "A6h5tzFr9n6U";	// DB PW
$cf['db_name']	= "kreisandcompany_kandc";	// DB Name


$url_images_thumnail="administrator/upload_thumnail/";
$url_csv_file="administrator/CSV_File/";
$url_images_fure="administrator/";
/*//ace_password
$cf['ace_pw'] = "_CubeInt_1!2@3#4$5%6^7&8*9(0)";

// 접속 IP
$cf['user_ip']	= $_SERVER['REMOTE_ADDR'];

// 오늘본 상품 최대 저장 갯수 설정
$cf['today_good_count'] = "";

// 오늘본 상품 한번에 출력 갯수 설정
$cf['today_good_size'] = "";

// 접근가능 IP 설정 (콤마(,)로 연결)
$cf['possible_ip'] = "";

// 접근차단 IP (콤마(,)로 연결)
$cf['avoid_ip'] = "";

// 접근차단 ip대역 (콤마, 연결)
$cf['avoid_ip_band'] = "";

// 예약어(사용금지단어) 설정 (콤마(,)로 연결)
$cf['avoid_word'] = "admin,administrator,superadmin,관리자,운영자,어드민";

// 비로그인(게스트) 회원 레벨 설정
$cf['guest_level'] = 10;

// 팝업 레이어 아이디
$cf['popup_prefix'] = "popup_layer_";

$cf['cookie_domain'] = "/"; // 디폴트("/")*/

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