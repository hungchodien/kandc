<?php
// 주민등록번호 검사 맞을경우 1을 리턴
function is_jumin($jumin) {
	$weight = '234567892345'; // 자리수 weight 지정
	$len = strlen($jumin);
	$sum = 0;
	if ($len <> 13) return false;

	for ($i = 0; $i < 12; $i++) {
		$sum = $sum + (substr($jumin,$i,1) * substr($weight,$i,1));
	}

	$rst = $sum%11;
	$result = 11 - $rst;

	if ($result == 10) $result = 0;
	else if ($result == 11) $result = 1;
	$ju13 = substr($jumin,12,1);
	if ($result <> $ju13) return 0;
	return 1;
}

// 미성년자 판별 맞을경우 1을 리턴
function is_adult($jumin) {
	$jumin = chop($jumin);
	$jumin = trim($jumin);
	$len = strlen($jumin);
	if($len <> 13) return 0;
	$birth = substr($jumin, 0, 6);
	$checkyear = substr($jumin, 6, 1);

	if ($checkyear == 3 or $checkyear == 4) $fyear = "20".$birth;
	else $fyear = "19".$birth;
	$agecheck = date(Ymd) - $fyear; // 현재 날짜를 구해서 태어날 날자 빼기
	if($agecheck < 190000) return 0;
	return 1;
}

// 주민등록번호(나이) 정보를 배열로 반환
function get_jumin($jumin) {
	if (!$jumin) return 0;
	$jumin = str_replace("-", "", $jumin);

	$arr = array();
	$year = substr($jumin, 0, 2);
	$month = substr($jumin, 2, 2);
	$day = substr($jumin, 4, 2);
	$type = substr($jumin, 6, 1);
	if ($type == 9 || $type == 0) $year += 1800;
	elseif ($type == 1 || $type == 2) $year += 1900;
	elseif ($type == 3 || $type == 4) $year += 2000;
	$arr[age] = date("Y") - $year + 1;
	$arr[adult] = ($arr[age] < 19) ? 0 : 1;
	$arr[sex] = ($type % 2 == 0) ? "여" : "남";
	$arr[birth] = $year."-".$month."-".$day;

	return $arr;
}

// 비밀번호 검사 맞을경우 1을 리턴
// 비밀번호는 2 ~ 20자의 영문자, 숫자만 가능
function is_pass($str) {
	if (preg_match("/[[:alnum:]+]{2,20}/", $str)) return 1;
	else return 0;
}

// 아이디 검사 맞을경우 1을 리턴
// 아이디는 2 ~ 20자의 영문소문자, 숫자만 가능
function is_id($str) {
	if (preg_match("/[[0-9a-z]+]{2,20}/", $str)) return 1;
	else return 0;
}

// 홈페이지 주소가 올바른지 검사
function is_homepage($str) {
	if (eregi("^http://([a-z0-9\_\-\./~@?=&amp;-\#{5,}]+)", $str)) return $str;
	else return '';
}


//###########128bit
function encrypt_128($decrypted, $passKey=""){
	global $cf;

	$passKey = (!$passKey) ? $cf['ace_pw'] : $passKey;
	$iv = ''; for($i=0;$i<16;$i++){ $iv .= "\0";}
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $passKey, $decrypted, MCRYPT_MODE_CBC, $iv);
    $ciphertext = base64_encode($ciphertext);
    return $ciphertext;
}

function decrypt_128($encrypted, $passKey=""){
	global $cf;

	$passKey = (!$passKey) ? $cf['ace_pw'] : $passKey;
    $iv = ''; for($i=0;$i<16;$i++){ $iv .= "\0";}
    $ciphertext = base64_decode($encrypted);
    $plaintext = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $passKey, $ciphertext, MCRYPT_MODE_CBC, $iv);
    return $plaintext;
}

//###########256bit
function encrypt_256($decrypted, $passKey=""){
	global $cf;

	$passKey = (!$passKey) ? $cf['ace_pw'] : $passKey;
	$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
	$passcrypt = trim(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $passKey, trim($decrypted), MCRYPT_MODE_ECB, $iv));
	$encode = base64_encode($passcrypt);
	return $encode;
}

function decrypt_256($encrypted, $passKey=""){
	global $cf;

	$passKey = (!$passKey) ? $cf['ace_pw'] : $passKey;
	$decoded = base64_decode($encrypted);
	$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
	$decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $passKey, trim($decoded), MCRYPT_MODE_ECB, $iv));
	return $decrypted;
}

?>