<?php
	ob_start();
	session_start();
	
	// 세션 해제
	session_unset();
	session_destroy();
	
	header("Location: ../index.php");
			
?>