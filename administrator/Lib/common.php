<?php
/******************************************************************************
* 공통 설정
******************************************************************************/
// PHP error_reporting
error_reporting(E_ALL ^ E_NOTICE);

// W3C P3P 규약설정(보안설정이나 프레임이 달라도 쿠키가 통하도록 설정)
@header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

// 최대 실행 시간 제한(초)
if (!isset($set_time_limit)) $set_time_limit = 0;
@set_time_limit($set_time_limit);

// 짧은 환경변수를 지원하지 않는다면(PHP 4 이하)
if (isset($HTTP_POST_VARS) && !isset($_POST)) {
	$_POST = &$HTTP_POST_VARS;
	$_GET = &$HTTP_GET_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
	$_ENV = &$HTTP_ENV_VARS;
	$_FILES = &$HTTP_POST_FILES;
	if (!isset($_SESSION)) $_SESSION = &$HTTP_SESSION_VARS;
}

// 특수문자 필터링설정 (php.ini 의 magic_quotes_gpc 옵션값이 Off 인 경우 addslashes() 적용)
// SQL 쿼리 취약점 공격 보호를 위해
if (!get_magic_quotes_gpc()){
	if (is_array($_GET)){
		while(list($k, $v) = each($_GET)) {
			if (is_array($_GET[$k])){
				while(list($k2, $v2) = each($_GET[$k])){
					$_GET[$k][$k2] = addslashes($v2);
				}
				@reset($_GET[$k]);
			}else{
				$_GET[$k] = addslashes($v);
			}
		}
		@reset($_GET);
	}

	if (is_array($_POST)){
		while(list($k, $v) = each($_POST)){
			if (is_array($_POST[$k])){
				while(list($k2, $v2) = each($_POST[$k])){
					$_POST[$k][$k2] = addslashes($v2);
				}
				@reset($_POST[$k]);
			}else{
				$_POST[$k] = addslashes($v);
			}
		}
		@reset($_POST);
	}

	if (is_array($_COOKIE)){
		while(list($k, $v) = each($_COOKIE)){
			if (is_array($_COOKIE[$k])){
				while(list($k2, $v2) = each($_COOKIE[$k])){
					$_COOKIE[$k][$k2] = addslashes($v2);
				}
				@reset($_COOKIE[$k]);
			}else{
				$_COOKIE[$k] = addslashes($v);
			}
		}
		@reset($_COOKIE);
	}
}

//XSS 공격에 의한 데이터 검증 및 차단
function xss_clean($data){
    // If its empty there is no point cleaning it :\
    if(empty($data))
        return $data;

    // Recursive loop for arrays
    if(is_array($data))
    {
        foreach($data as $key => $value)
        {
            $data[$key] = xss_clean($value);
        }

        return $data;
    }

    // http://svn.bitflux.ch/repos/public/popoon/trunk/classes/externalinput.php
    // +----------------------------------------------------------------------+
    // | Copyright (c) 2001-2006 Bitflux GmbH                                 |
    // +----------------------------------------------------------------------+
    // | Licensed under the Apache License, Version 2.0 (the "License");      |
    // | you may not use this file except in compliance with the License.     |
    // | You may obtain a copy of the License at                              |
    // | http://www.apache.org/licenses/LICENSE-2.0                           |
    // | Unless required by applicable law or agreed to in writing, software  |
    // | distributed under the License is distributed on an "AS IS" BASIS,    |
    // | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or      |
    // | implied. See the License for the specific language governing         |
    // | permissions and limitations under the License.                       |
    // +----------------------------------------------------------------------+
    // | Author: Christian Stocker <chregu@bitflux.ch>                        |
    // +----------------------------------------------------------------------+

    // Fix &entity\n;
    $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/i', '$1;', $data);

    if (function_exists("html_entity_decode"))
    {
        $data = html_entity_decode($data);
    }
    else
    {
        $trans_tbl = get_html_translation_table(HTML_ENTITIES);
        $trans_tbl = array_flip($trans_tbl);
        $data = strtr($data, $trans_tbl);
    }

    // Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#i', '$1>', $data);

    // Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#i', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#i', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#', '$1=$2nomozbinding...', $data);

    // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#i', '$1>', $data);

    // Remove namespaced elements (we do not need them)
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do
    {
        // Remove really unwanted tags
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    }
    while ($old_data !== $data);

    return $data;
}

$_GET = xss_clean($_GET);

// GET 으로 선언된 전역변수가 있다면 unset() 시킴
$ext_arr = array ('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
                  'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
                  'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i=0; $i<$ext_cnt; $i++) {
    if (isset($_GET[$ext_arr[$i]])) unset($_GET[$ext_arr[$i]]);
}


@extract($_GET);
@extract($_POST);
@extract($_SERVER);

@include_once("{$Path['Lib']}/config.php");
@include_once("{$Path['Lib']}/connect.php");
@include_once("{$Path['Lib1']}/common.lib.php");

@include_once("../{$Path['Lib']}/config.php");
@include_once("../{$Path['Lib']}/connect.php");
@include_once("../{$Path['Lib']}/common.lib.php");


//$_starttime = get_microtime();
/******************************************************************************
* 세션 설정
******************************************************************************/
//ini_set("session.use_trans_sid", 0);
//ini_set("url_rewriter.tags", ""); // 링크(URL)에 PHPSESSID가 따라다니는것을 무력화함

if(isset($SESSION_CACHE_LIMITER))	@session_cache_limiter($SESSION_CACHE_LIMITER);
else								@session_cache_limiter("no-cache, must-revalidate");

ini_set("session.cache_expire", 180);		// 세션 캐쉬 보관시간 (분)
ini_set("session.gc_maxlifetime", 10800);	// session data의 garbage collection 존재 기간을 지정 (초)
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 100);

session_set_cookie_params(0, "/");
if ($cf['cookie_domain']) ini_set("session.cookie_domain", $cf['cookie_domain']);

@session_start();

if ($_REQUEST['PHPSESSID'] && $_REQUEST['PHPSESSID'] != session_id()){
	// --> logout page
}

/******************************************************************************
* 세션 설정
******************************************************************************/

// 익스와 넷스케이프 체크
$cf['is_ie'] = (preg_match("/msie/i", $_SERVER['HTTP_USER_AGENT'])) ? true : false;

// PHP 파서가 실행되고 있는 OS 체크
$cf['is_window'] = (preg_match("/win/i", PHP_OS)) ? true : false;

// URL ENCODING
//$_SERVER['REQUEST_URI'] = request_uri();
if (isset($Url))	$UrlStr = urlencode($Url);
else				$UrlStr = urlencode($_SERVER['REQUEST_URI']);
$cf['urlencode'] = $UrlStr;

// PHPSESSID 가 틀리면 로그아웃한다.
if ($_REQUEST['PHPSESSID'] && $_REQUEST['PHPSESSID'] != session_id()) {
	move_page("{$Path['Member']}/logout.html");
}

// 로그인 설정
if (!$cf['guest_level'])	$cf['guest_level'] = 10;

if ($_SESSION['MemberID']){
	$MemberID		= $_SESSION['MemberID'];
	$MemberLevel	= $_SESSION['MemberLevel'];
	$MemberEmail	= $_SESSION['MemberEmail'];
	$MemberName		= $_SESSION['MemberName'];
}else{
	$MemberID		= "";
	$MemberLevel	= $cf['guest_level'];
	$MemberEmail	= "";
	$MemberName		= "";
}

// 레벨을 한번 더 체크
if(!$MemberLevel || $MemberLevel == 0)	$MemberLevel = $cf['guest_level'];

// 검색어 설정
$stxt = stripslashes(trim($stxt));

// 접근가능/차단 IP
if ($is_admin != "super") {
	// 접근가능 IP
	$cf_possible_ip = trim($cf['possible_ip']);
	if($cf_possible_ip){
		$is_possible_ip = false;
		$pattern = explode(",", $cf_possible_ip);
		for ($i=0; $i<count($pattern); $i++) {
            $pattern[$i] = trim($pattern[$i]);
            if (empty($pattern[$i]))
                continue;

            $pattern[$i] = str_replace(".", "\.", $pattern[$i]);
            $pat = "/^{$pattern[$i]}/";
            $is_possible_ip = preg_match($pat, $_SERVER['REMOTE_ADDR']);
            if ($is_possible_ip)
                break;
        }
		if (!$is_possible_ip)	die ("接続できません。");
	}

	// 접근차단 IP
    $is_intercept_ip = false;
    $pattern = explode(",", trim($cf['avoid_ip']));
    for ($i=0; $i<count($pattern); $i++) {
        $pattern[$i] = trim($pattern[$i]);
        if (empty($pattern[$i]))
            continue;

        $pattern[$i] = str_replace(".", "\.", $pattern[$i]);
        $pat = "/^{$pattern[$i]}/";
        $is_intercept_ip = preg_match($pat, $_SERVER['REMOTE_ADDR']);
        if ($is_intercept_ip)	die ("接続できません。");
    }

	// 접근차단 ip대역
	$is_avoid_ip_band = false;
	$pattern = explode(",", trim($cf['avoid_ip_band']));
    for ($i=0; $i<count($pattern); $i++) {
        $pattern[$i] = trim($pattern[$i]);
        if (empty($pattern[$i]))
            continue;

        $pattern[$i] = str_replace(".", "\.", $pattern[$i]);
        $pat = "/^{$pattern[$i]}/";
        $is_avoid_ip_band = preg_match($pat, $_SERVER['REMOTE_ADDR']);
        if ($is_avoid_ip_band)	die ("接続できません。");
    }
}
?>