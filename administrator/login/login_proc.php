<?php
@ob_start();
@session_start();
@include_once("../Lib1/_init.php");
@include_once("../../Lib1/_init.php");
//@include_once("../../Lib1/config.php");
@include_once("../Lib1/config.php");


$m_id = addslashes(trim($m_id));
$m_passwd = addslashes(trim($m_passwd));
$id_save = ($id_save) ? $id_save : "0";
$count_login="*,count(*)as cnt";
$List = Get_Data("administrator", "and user_administrator = '{$m_id}'",$count_login);
//
if($List['cnt'] <= 0){
	msg_move_page("존재하지 않는 아이디입니다");
}
//
if( strcmp($List['pass_administrator'], $m_passwd) ){
	msg_move_page("비밀번호를 다시 확인하세요");
}else{
	$username_action=$List['user_administrator'];
	$pemission=$List['level_administrator'];
	
	session_register("MemberName");
	$_SESSION["MemberName"] = $username_action;
	
	session_register("rights");
	$_SESSION["rights"] = $pemission;
	
}

if($id_save == "1"){
	$save_time = time() + 86400 * 31; // 한달
	setcookie('id_save', $List['m_id'], $save_time, '/');
}else{
	setcookie('id_save', '', 0, '/');
}


	header('Location: ../index.php');    
	exit();
?>