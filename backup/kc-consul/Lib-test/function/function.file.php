<?php
// 파일 사이즈를 이쁘게 변환해서 리턴
function GetFileSize($size){
	$sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");

	if($size == 0){
		return("n/a");
	}else{
		return (round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $sizes[$i]);
	}
}

//=============================== 가로,세로 비율에 맞게 이미지 맞추기 ====================
//========= $target : 파일의 경로와 파일명 ===============================================
//========= $limit_width : 제한하고 싶은 가로 길이 =======================================
//========= $limit_height : 제한하고 싶은 세로 길이 ======================================
//========= 적용예 : list( $height_new, $width_new ) = img_size( "$target", "90", "70"); =
function img_size($target, $limit_width, $limit_height){
	$size = GetImageSize($target);

	$width = $size[0]; //입력받은 파일의 가로크기를 구합니다.
	$height = $size[1]; //입력받은 파일의 세로크기를 구합니다.

	$limit_w = $limit_width; // 원하는 최대 가로 크기를 입력합니다.
	$limit_h = $limit_height; // 원하는 최대 세로 크기를 입력합니다.

	if(!$percentage){
		$percentage = $percentage_w;
	}

	$percentage_w = $width/$limit_w; // 입력받은 이미지의 세로크기와 원하는 최대 세로크기의 비율
	$percentage_h = $height/$limit_h; // 입력받은 이미지의 세로크기와 원하는 최대 세로크기의 비율

	if($height > $limit_h || $width > $limit_w){ // 입력받은 이미지의 가로크기나 세로크기 중 어느 하나만 크더라도, 괄호 안의 내용을 실행

		if( ($height > $limit_h && $width > $limit_w && $percentage_w > $percentage_h) ||
		($height < $limit_h && $width > $limit_w)){ // 세로길이와 가로길이 둘 다 제한크기보다 크고 가로의 크기가 세로의 크기보다 크거나, 세로길이는 제한크기보다 작고 가로길이가 제한크기보다 클 경우

			$percentage = $percentage_w; // 입력받은 그림의 가로길이와 한계치의 가로길이의 비율을 percentage 변수에 저장

		}elseif( ($height > $limit_h && $width > $limit_w && $percentage_w < $percentage_h) || ($height > $limit_h && $width < $limit_w)){ // 다른 경우에, 세로길이와 가로길이 둘 다 제한크기보다 크고 세로길이가 가로길이보다 크거나, 세로길이가 제한길이보다 크고 가로길이는 제한길이보다 작을 때,

			$percentage= $percentage_h; // 입력받은 그림의 세로길이와 한계치의 세로길이의 비율을 percentage 변수에 저장
		}
	}else{
		$percentage= 1;  // 입력받은 그림의 가로,세로 길이 둘 다 제한길이보다 크지 않을 때 입니다. 그럴 때는 percentage를 1로 함
	}

	$height_new = $height/$percentage; // 여러가지 경우에 따라 설정된 percentage값으로 세로 길이를 다시 설정
	$width_new = $width/$percentage; // 여러가지 경우에 따라 설정된 percentage값으로 가로 길이를 다시 설정

	return array($height_new, $width_new);
}

//가로,세로 지정 thum
//path : 경로, $filename : 파일명, $width : 가로, $height : 높이, $percent : 퍼센트, $delete : 삭제(Y/N)
function ImgConvert($path, $filename, $rename, $width, $height, $percent="", $delete=""){
	$msg = "";
	$pass_code = "Y";

	$delete = ($delete == "Y") ? $delete : "N";

	if( ($filename == "") || ($path == "") ){
		$msg = "파일의 경로 설정을하세요";
		$pass_code = "N";
	}

	if( ($width && !$height) || (!$width && $height) ){
		$msg = "넓이와 높이를 설정하세요";
		$pass_code = "N";
	}

	$fullpath = $path.$filename;

	list($org_width, $org_height) = getimagesize($fullpath);

	if(!$width && !$height && !$percent){
		$percent = "0.5";

		$new_width = $org_width * $percent;
		$new_height = $org_height * $percent;
	}else{
		$new_width = $width;
		$new_height = $height;
	}

	$ext = strtolower(get_ext($filename));

	//원본불러옴
	if( ($ext == "jpg") || ($ext == "jpge") ){
		$org_img=imagecreatefromjpeg($fullpath);
	}else if($ext == "bmp"){
		$org_img=imagecreatefromwbmp($fullpath);
	}else if($ext == "png"){
		$org_img=imagecreatefrompng($fullpath);
	}else if($ext == "gif"){
		$org_img=imagecreatefromgif($fullpath);
	}else{
		$msg = "변경할수 없는 확장자입니다";
		$pass_code = "N";
	}

	if($pass_code == "Y"){
		$new_img=imagecreatetruecolor($new_width,$new_height);		//새이미지 틀

		imagecopyresized($new_img, $org_img, 0, 0, 0, 0, $new_width, $new_height, $org_width, $org_height);

		if($delete == "Y"){
			unlink($fullpath);
			$new_filename = $filename;
		}else if($rename){
			if( file_exists($path.$rename) )	@unlink($path.$rename);

			$new_filename = $rename;
		}else{
			$new_filename = getUniqueFileName($filename,'');
		}

		$save_path = $path.$new_filename;

		//저장
		if( ($ext == "jpg") || ($ext == "jpge") ){
			imagejpeg($new_img, $save_path);
		}else if($ext == "bmp"){
			imagewbmp($new_img, $save_path);
		}else if($ext == "png"){
			imagepng($new_img, $save_path);
		}else if($ext == "gif"){
			imagegif($new_img, $save_path);
		}

		return $new_filename;
	}else{
		msg($msg);
	}
}

// 파일 업로드 함수
//
// 정의 : $file_name = FileUploadName("이전파일","저장경로","저장될 파일 전체이름","저장될 순수 파일이름");
// 예제 : $file_name = FileUploadName("","../../imgdata/",$user_file,$user_file_name);
function FileUploadName($prev_file, $savedir, $file, $file_name, $prefix="") {
	// 폴더 생성
	if (!is_dir($savedir)) {
		@mkdir($savedir, 0777);
		@chmod($savedir, 0777);
	}

	// 등록파일이 있을 경우 처리
	if ($file_name) {

		// 이전파일 삭제
		if ($prev_file && $prev_file != "no") {
			if (file_exists($savedir . $prev_file)) {
				@unlink($savedir . $prev_file);
			}
		}

		// $type 과 상관없이 임의의 파일명 생성
		$file_name = getUniqueFileName($file_name, $prefix);

		// 절대 올리수 없도록 하는 확장자들 체크
		if (preg_match("/\.(php|phps|phtm|htm|html|shtm|ztx|dot|cgi|pl|exe|bat|jsp|asp|inc)$/i", $file_name)) {
			echo "<script type='text/javascript'>
			      alert('HTML, PHP 관련파일은 업로드할 수 없습니다.');
				  history.go(-1);
				  </script>
				  ";
			exit;
		}

		// 파일명에서 확장자 가져옴
		$file_tmp = explode(".", $file_name);
		$ext = @array_pop($file_tmp); // 확장자
		$ext = strtolower($ext); // 확장자를 소문자로 변환

		// 저장할 파일의 전체경로 설정
		$fullname = $savedir . $file_name;

		// 중복파일 체크
		$r = 1;
		while (file_exists($fullname)) {
			$file_name = $name . "(" . $r++. ")". "." . $ext;
			$fullname =  $savedir . $file_name;
		}

		// 파일 업로드 처리
		if (!move_uploaded_file($file, $fullname)) {
			echo "<script type='text/javascript'>
			      alert('파일 업로드에 실패하였습니다.');
				  history.go(-1);
				  </script>
				  ";
			exit;
		}
	}

	// 파일명 반환
	return $file_name;
}

function ajax_FileUploadName($prev_file, $savedir, $file, $file_name, $prefix="") {
	// 폴더 생성
	if (!is_dir($savedir)) {
		@mkdir($savedir, 0777);
		@chmod($savedir, 0777);
	}

	// 등록파일이 있을 경우 처리
	if ($file_name) {

		// 이전파일 삭제
		if ($prev_file && $prev_file != "no") {
			if (file_exists($savedir . $prev_file)) {
				@unlink($savedir . $prev_file);
			}
		}

		// $type 과 상관없이 임의의 파일명 생성
		$file_name = getUniqueFileName($file_name, $prefix);

		// 절대 올리수 없도록 하는 확장자들 체크
		if (preg_match("/\.(php|phps|phtm|htm|html|shtm|ztx|dot|cgi|pl|exe|bat|jsp|asp|inc)$/i", $file_name)) {
			echo "<script type='text/javascript'>
			      alert('HTML, PHP 관련파일은 업로드할 수 없습니다.');
				  </script>
				  ";
			exit;
		}

		// 파일명에서 확장자 가져옴
		$file_tmp = explode(".", $file_name);
		$ext = @array_pop($file_tmp); // 확장자
		$ext = strtolower($ext); // 확장자를 소문자로 변환

		// 저장할 파일의 전체경로 설정
		$fullname = $savedir . $file_name;

		// 중복파일 체크
		$r = 1;
		while (file_exists($fullname)) {
			$file_name = $name . "(" . $r++. ")". "." . $ext;
			$fullname =  $savedir . $file_name;
		}

		// 파일 업로드 처리
		if (!move_uploaded_file($file, $fullname)) {
			echo "<script type='text/javascript'>
			      alert('파일 업로드에 실패하였습니다.');
				  </script>
				  ";
			exit;
		}
	}

	// 파일명 반환
	return $file_name;
}

// 파일명을 인코딩해서 가져옴
function get_file_encode($filename) {
	$arr = array();
	if ($filename) {
		$arr = array(
			"euckr" => iconv("utf-8", "euc-kr", $filename),
			"utf8" => $filename,
		);
	}

	return $arr;
}

// 임의의 파일명 생성
function getUniqueFileName($filename, $prefix="") {
	if (!$filename) return "";

	// 임의의 문자열 생성
	$time = date("Ymd"); // 년월일
	$unique = strtoupper(substr(md5(uniqid(time())), 0, 16)); // 유니크 16자리

	// 파일명에서 확장자 가져옴
	$file = explode(".", $filename);
	$ext = @array_pop($file); // 확장자
	$ext = strtolower($ext); // 확장자를 소문자로 변환

	$new_filename = $prefix . $time . "_" . $unique . "." . $ext;

	return $new_filename;
}

// 디렉토리의 파일 리스트를 배열로 반환
if (!function_exists("get_dirlist")) {
	function get_dirlist($dir="./", $mode="f") {
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
}

//이미지 축소
function resize_img($filename, $max_width="400", $max_height="400"){
	if(!$filename)	return;

	if(file_exists($filename)){
		$imgsize = getimagesize($filename);

		if($imgsize[0] > $max_width || $imgsize[1] > $max_height){
			$sumw = (100 * $max_height) / $imgsize[1];
			$sumh = (100 * $max_width) / $imgsize[0];

			if($sumw < $sumh){
				$img_width = ceil(($imgsize[0]*$sumw)/100);
				$img_height = $max_height;
			}else{
				$img_height = ceil(($imgsize[1]*$sumh)/100);
				$img_width = $max_width;
			}
		}else{
			$img_width = $imgsize[0];
			$img_height = $imgsize[1];
		}

		$Data['width'] = $img_width;
		$Data['height'] = $img_height;

		return $Data;
	}else{
		return "wrong path filename";
	}
}

//경로추출(Type => dirname, basename, extension, filename)
function Get_File_Extra($Path, $Type="all"){
	if( !isset($Path) )		return "";

	$Path_Array = pathinfo($Path);

	if($Type == "all")	return $Path_Array;
	else				return $Path_Array[$Type];
}

//파일이동
function To_Move_File($From_Folder, $FileName, $To_Folder, $msg="N"){
	$From = $From_Folder."/".$FileName;
	$To = $To_Folder."/".$FileName;

	$context = stream_context_create(array('ftp' => array('overwrite' => true)));

	if(file_put_contents($To, file_get_contents($From), null, $context) === false){
		msg("전송실패");
	}else{
		if($msg == "N")		echo "1";
		else				msg("전송성공");
	}
}

//한줄씩 파일을 읽어옴 배열화됨
/*
$t = getConfig("$fileName");
echo "$t[0]<br>"; // 첫번째 라인
echo "$t[1]<br>"; // 두번째 라인
*/
function get_each_line_file($fileName){
	if (!file_exists($fileName)) return;

	$lines = file($fileName);

	if(!count($lines)) return;
	return $lines;
}





?>