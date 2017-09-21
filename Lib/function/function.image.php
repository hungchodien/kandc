<?php
/*-----------------------------------------------------------------------------
 *	제작자 : 강훈일
 *	제작일 : 2003. 10. 9
 *	이메일 : kanghoonil@npine.com , hoonil@javastars.com
 *	파일명 : lib_ImageConvert.php
 *
 *	> 함수 설명 <
 *	array(int 결과값(1=성공, 0=실패), string 이미지소스format방식, string 결과 메시지) THUMBNAIL_IMAGE_CREATE($image_path, $save_path, $max_with_size=100, $max_height_size=100, $save_format="jpg", $background_color="WHITE", $image_quality=100)
 *	이미지 섬네일 작성 함수
 *
 *	> 전달인자 설명 <
 *	$image_path				:				원본 경로
 *	$save_path				:				저장 경로
 *	$max_with_size			:				가로 최대 사이즈
 *	$max_height_size		:				세로 최대 사이즈
 *	$waterMakeImagePath		:				워터마크 이미지(값이 있는경우 실행)
 *	$save_format			:				저장 포맷 형식
 *	$background_color		:				세로 최대 사이즈
 *	$image_quality			:				압축률
 *
-----------------------------------------------------------------------------*/
function resize_image($destination, $departure, $size, $quality='80', $ratio='false'){

	if($size[2] == 1)    //-- GIF
		$src = imageCreateFromGIF($departure);
	elseif($size[2] == 2) //-- JPG
		$src = imageCreateFromJPEG($departure);
	else    //-- $size[2] == 3, PNG
		$src = imageCreateFromPNG($departure);

	$dst = imagecreatetruecolor($size['w'], $size['h']);


	$dstX = 0;
	$dstY = 0;
	$dstW = $size['w'];
	$dstH = $size['h'];

	if($ratio != 'false' && $size['w']/$size['h'] <= $size[0]/$size[1]){
		$srcX = ceil(($size[0]-$size[1]*($size['w']/$size['h']))/2);
		$srcY = 0;
		$srcW = $size[1]*($size['w']/$size['h']);
		$srcH = $size[1];
	}
	elseif($ratio != 'false'){
		$srcX = 0;
		$srcY = ceil(($size[1]-$size[0]*($size['h']/$size['w']))/2);
		$srcW = $size[0];
		$srcH = $size[0]*($size['h']/$size['w']);
	}
	else{
		$srcX = 0;
		$srcY = 0;
		$srcW = $size[0];
		$srcH = $size[1];
	}

	//@imagecopyresampled($dst, $src, $dstX, $dstY, $srcX, $srcY, $dstW, $dstH, $srcW, $srcH);
	//@imagejpeg($dst, $destination, $quality);
	//@imagedestroy($src);
	//@imagedestroy($dst);

	// 썸네일 이미지 생성 (20090909 정 혁)
	// imagecopyresized (int dst_im, int src_im, int dstX, int dstY, int srcX, int srcY, int dstW, int dstH, int srcW, int srcH)
	@imagecopyresampled($dst, $src, $dstX, $dstY, $srcX, $srcY, $dstW, $dstH, $srcW, $srcH);

	// 썸네일 이미지 저장 (20090909 정 혁)
	if ($destination) {
		if ($size[2] == 1) { // gif
			@imagegif($dst, $destination);
		}
		elseif ($size[2] == 2) { // jpg
			@imagejpeg($dst, $destination, $quality);
		}
		elseif ($size[2] == 3) { // png
			@imagepng($dst, $destination);
		}
	}

	// 이미지에 사용한 메모리 비워주기 (20090909 정 혁)
	@imagedestroy($src);
	@imagedestroy($dst);

	return TRUE;
}

// $img : 원본이미지
// $m : 목표크기 pixel
// $ratio : 비율 강제설정
function _getimagesize($img, $m, $ratio='false'){

	$v = @getImageSize($img);

	if($v === FALSE || $v[2] < 1 || $v[2] > 3)
		return FALSE;

	$m = intval($m);

	if($m > $v[0] && $m > $v[1])
		return array_merge($v, array("w"=>$v[0], "h"=>$v[1]));

	if($ratio != 'false'){
		$xy = explode(':',$ratio);
		return array_merge($v, array("w"=>$m, "h"=>ceil($m*intval(trim($xy[1]))/intval(trim($xy[0])))));
	}
	elseif($v[0] > $v[1]){
		$t = $v[0]/$m;
		$s = floor($v[1]/$t);
		$m = ($m > 0) ? $m : 1;
		$s = ($s > 0) ? $s : 1;
		return array_merge($v, array("w"=>$m, "h"=>$s));
	}
	else {
		$t = $v[1]/intval($m);
		$s = floor($v[0]/$t);
		$m = ($m > 0) ? $m : 1;
		$s = ($s > 0) ? $s : 1;
		return array_merge($v, array("w"=>$s, "h"=>$m));
	}
}


function thumbnailImageCreate($image_path, $save_path, $max_with_size=100, $max_height_size=100, $waterMakeImagePath="", $save_format, $background_color="WHITE", $image_quality=100){

	/**
	 *	원본 이미지 사이즈 알아오기
	 *	$image_path_size_info[0]		:		원본 이미지 가로 사이즈
	 *	$image_path_size_info[1]		:		원본 이미지 세로 사이즈
	 *	$image_path_size_info[2]		:		원본 이미지 포맷 방식
	 *												1 - GIF
	 *												2 - JPG
	 *												3 - PNG
	 *												4 - SWF
	 *
	 *	$image_path_size_info[3]		:		원본 이미지 문자열 ex) height="xxx" width="xxx"
	*/
	$image_path_size_info=getimagesize($image_path);


		/**
		 *	THUMBNAIL IMAGE 사이즈 설정
	*/
	if($image_path_size_info[0] > $image_path_size_info[1]){

				/**
				 *	이미지 사이즈가 width 가 height 보다 큰경우
		*/
		if($image_path_size_info[0] > $max_with_size){
			$save_path_width_size = $max_with_size;
			$save_path_height_size_divided = ($image_path_size_info[0] / $save_path_width_size);
			$save_path_height_size = ($image_path_size_info[1] / $save_path_height_size_divided);

		}
		else{
			$save_path_width_size = $image_path_size_info[0];
			$save_path_height_size = $image_path_size_info[1];
		}

	}
	else if($image_path_size_info[0] == $image_path_size_info[1]){

				/**
				 *	이미지 사이즈가 width 와 height 가 같은 경우
		*/
		if($image_path_size_info[0] > $max_with_size){
			$save_path_width_size = $max_with_size;
			$save_path_height_size_divided = ($image_path_size_info[0] / $save_path_width_size);
			$save_path_height_size = ($image_path_size_info[1] / $save_path_height_size_divided);
		}
		else{
			$save_path_width_size = $image_path_size_info[0];
			$save_path_height_size = $image_path_size_info[1];
		}
	}
	else{
				/**
				 *	이미지 사이즈가 height 가  width 보다 큰경우
		*/
		if($image_path_size_info[1] > $max_height_size){
			$save_path_height_size = $max_height_size;
			$save_path_width_size_divided = ($image_path_size_info[1] / $save_path_height_size);
			$save_path_width_size = ($image_path_size_info[0] / $save_path_width_size_divided);
		}
		else{
			$save_path_width_size = $image_path_size_info[0];
			$save_path_height_size = $image_path_size_info[1];
		}
	}


		/**
		 *	THUMBNAIL IMAGE 사이즈 설정및 백그라운드 색상 설정
	*/
	$save_image=ImageCreateTrueColor($save_path_width_size-1, $save_path_height_size-1);//
	$save_image=ImageCreateTrueColor($save_path_width_size, $save_path_height_size);


		/**
		 *	백그라운드 색상 설정에 따른 이미지 백그라운드 설정 기
		 *	기본값 : WHITE
	*/
		/*
		switch($background_color){
				case "WHITE":
						$save_image_background_color=ImageColorAllocate($save_image, 255,255,255);
						break;
				case "BLACK":
						$save_image_background_color=ImageColorAllocate($save_image, 0, 0, 0);
						break;
				default :
						return array(0, "!!! 백그라운드 색상을 지원하지 못합니다. 작성자에게 문의 하십시요 !!!");
		}
	*/

		/**
		 *	원본이미지의 파일 포맷 방식을 읽어 와서 이미지를 읽을 포맷 방식을 설정한다.
		 *	참조값은 $image_path_size_info[2]
	*/
	switch($image_path_size_info[2]){
		case 1 :
							/**
							 *	GIF 포맷 형식
		*/
		$source_image=ImageCreateFromGIF($image_path);
		$source_format="gif";
		break;
		case 2 :
							/**
							 *	JPG 포맷 형식
		*/
		$source_image=ImageCreateFromJPEG($image_path);
		$source_format="jpg";
		break;
		case 3 :
							/**
							 *	PNG 포맷 형식
		*/
		$source_image=ImageCreateFromPNG($image_path);
		$source_format="png";
		break;
		default :
							/**
							 *	GIF, JPG, PNG 포맷방식이 아닐경우 오류 값을 리턴 후 종료
		*/
		return array(0, $source_format, "!!! 원본이미지가 GIF, JPG, PNG 포맷 방식이 아니어서 이미지 정보를 읽어올 수 없습니다. !!!");
	}


		/**
		 *	이미지 사이즈 소숫점 자리 삭제
	*/
	$save_path_width_size = round($save_path_width_size);
	$save_path_height_size = round($save_path_height_size);


		/**
		 *	$save_image=ImageCreate($save_path_width_size, $save_path_height_size) 부분에 원본이미지로 부터 복사본을 그린다.
		 *	$arg1		:		ImageCreateTrueColor 리턴 인자(붙여넣기 할 이미지)
		 *	$arg2		:		ImageCreateFromXXX 리턴 인자(복사할 이미지)
		 *	$arg3		:		붙여넣기 할 이미지의 X 시작점
		 *	$arg4		:		붙여넣기 할 이미지의 Y 시작점
		 *	$arg5		:		복사할 이미지의 X 시작점
		 *	$arg6		:		복사할 이미지의 Y 시작점
		 *	$arg7		:		붙여넣기 할 이미지의 X 끝점
		 *	$arg8		:		붙여넣기 할 이미지의 Y 끝점
		 *	$arg9		:		복사할 이미지의 X 끝점
		 *	$arg10		:		복사할 이미지의 Y 끝점
	*/
	// 2004-03-10  ImageCopyResized 함수를  ImageCopyResampled 함수로 교체
	//		if(ImageCopyResized($save_image ,$source_image, 0, 0, 0, 0, $save_path_width_size, $save_path_height_size, ImageSX($source_image), ImageSY($source_image))){
	if(ImageCopyResampled($save_image ,$source_image, 0, 0, 0, 0, $save_path_width_size, $save_path_height_size, ImageSX($source_image), ImageSY($source_image))){
				/**
				 *	저정할 이미지의 포맷방식 선택 기본값 jpg
		*/
		switch($save_format){
			case "jpg"	:
			case "jpeg"	:
			case "JPG"	:
			case "JPEG"	:
			if(ImageJPEG($save_image, $save_path, $image_quality)){
				#####----- 워터마크처리 체크 -----#####
				if($waterMakeImagePath){
					#####----- 워터마크 처리 함수 호출 -----#####
					$waterMakeResult = imageWaterMaking($save_path, $waterMakeImagePath);
					if($waterMakeResult[0]){
						return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path JPG 포맷 이미지 생성 - 워터마크처리");
					}
					else{
						return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size JPG 포맷 이미지 생성에 실패 했습니다 - 원인 : 워커마크처리오류. !!!");
					}
				}
				else{
					return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path JPG 포맷 이미지 생성");
				}
			}
			else{
				return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size JPG 포맷 이미지 생성에 실패 했습니다. !!!");
			}
			break;

			case "png"	:
			case "PNG"	:
			if(ImagePNG($save_image, $save_path, $image_quality)){
				#####----- 워터마크처리 체크 -----#####
				if($waterMakeImagePath){
					#####----- 워터마크 처리 함수 호출 -----#####
					$waterMakeResult = imageWaterMaking($save_path, $waterMakeImagePath);
					if($waterMakeResult[0]){
						return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path PNG 포맷 이미지 생성 - 워터마크처리");
					}
					else{
						return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size PNG 포맷 이미지 생성에 실패 했습니다 - 원인 : 워커마크처리오류. !!!");
					}
				}
				else{
					return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path PNG 포맷 이미지 생성");
				}
			}
			else{
				return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size PNG 포맷 이미지 생성에 실패 했습니다. !!!");
			}
			break;
			case "gif";
			case "GIF";
			if(ImageGIF($save_image, $save_path, $image_quality)){
				#####----- 워터마크처리 체크 -----#####
				if($waterMakeImagePath){
					#####----- 워터마크 처리 함수 호출 -----#####
					$waterMakeResult = imageWaterMaking($save_path, $waterMakeImagePath);
					if($waterMakeResult[0]){
						return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path GIF 포맷 이미지 생성 - 워터마크처리");
					}
					else{
						return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size GIF 포맷 이미지 생성에 실패 했습니다 - 원인 : 워커마크처리오류. !!!");
					}
				}
				else{
					return array(1, $source_format, "$save_path_width_size * $save_path_height_size $save_path GIF 포맷 이미지 생성");
				}
			}
			else{
				return array(0, $source_format, "!!! $save_path_width_size * $save_path_height_size GIF 포맷 이미지 생성에 실패 했습니다. !!!");
			}
			break;
			default :
			return array(0, $source_format, "!!! 입력하신 포맷 이미지는 지원되지 않습니다. !!!");
		}
	}
	else{
		return array(0, $source_format, "!!! ImageCopyResized 함수 수행시 에러가 발생했습니다. !!!");
	}
}

?>