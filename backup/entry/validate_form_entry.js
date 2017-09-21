/////// config error message /////////////

$errorText = '必須項目です。必ずご入力ください。';
$errorNumber= '「半角英数字」で電話番号を正しく入力ください。';
$errorEmail = '必須項目です。必ずご入力ください。';
$error_area=" 必須項目です。必ずご入力ください。 <br/> 職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください。";
$errorSelect='必須項目です。必ずご選択ください。';
$errorOption1='必須項目です。直近の業種を1つ選択してください。';
$errorOption2='必須項目です。直近の職種を1つ選択してください。';
var url = document.location.pathname;
var arr = url.split('/');
var folder = arr[arr.length - 2];

//alert(folder);



var result = false;
function scroll_top_id(){
	jQuery('body,html').animate({
		scrollTop: jQuery("#submit_form").offset().top
	}, 800);
								
	return false;
}
function scroll_top_by_id($id){
	jQuery('body,html').animate({
		scrollTop: jQuery($id).offset().top
	}, 800);
								
	return false;
}
function add_desc_hidden($id) {
    jQuery('#desc'+$id).removeClass('desc_hidden');
     jQuery('#desc'+$id).addClass('desc_show');
    
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    // alert( pattern.test(emailAddress) );
    return pattern.test(emailAddress);
}

function validatetext($text, $id) {
	var $=jQuery;
    if ($text == '' || $text.length <= 0) {
		//$("#submit_form").removeClass("error-box");
		$('#error'+ $id).addClass("error-box");
		$('#error'+ $id).text($errorText);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        //$('#'+$id).focus;
		setTimeout(function(){
			$('#error'+ $id).text("");
			$('#error'+ $id).removeClass("error-box");
		},5000);
		return false;
    }
	else
	{
		var  id = $('#'+$id);
		var $text_strim=$.trim(id.val());
		id.val($text_strim);
		$('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
		$('#error'+ $id).removeClass("error-box");
		$(id).removeClass('bg_error_fx');
        return true;
    }
}
function click_text($id){
    jQuery('#'+$id).addClass('bg-text');
}
function click_text_error($id){
    jQuery('#'+$id).addClass('bg_error_fx');
}
function validatetext_number($text, $id) {
	var $=jQuery;
    if ($text == '' || $text.length <= 0) {
        $('#error'+ $id).text($errorNumber);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        setTimeout(function(){
			$('#error'+ $id).text("");
			$('#error'+ $id).removeClass("error-box");
		},5000);
		
        return false;
    }else{
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
		$('#'+$id).removeClass('bg-text');
		$('#error'+ $id).removeClass("error-box");
        return true;
    }
}

function validateSelect($text, $id) {
	var $=jQuery;
    if ($text == '' ||  $text.length <= 0) {
        $('#error'+ $id).text($errorSelect);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
		$('#error'+ $id).addClass("error-box");
		setTimeout(function(){
			$('#error'+ $id).text("");
			$('#error'+ $id).removeClass("error-box");
		},5000);
		
		
    }else{
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
		$('#error'+ $id).removeClass("error-box");
		$('#'+$id).removeClass('bg_error_fx');
		return true;
    }
}

function IsEmail($email, $id) {
 
	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    // alert( pattern.test(emailAddress) );
    var email_check= pattern.test($email);
	if(email_check==true){
			var  id = $('#'+$id);
			var $text_strim=$.trim(id.val());
			id.val($text_strim);
			$('#error'+ $id).text("");
			$('#error'+ $id).removeClass('error');
			$('#'+$id).removeClass('textError');
			$('#'+$id).removeClass('bg-text');
			return true;
			
		}
	else{
		  $('#error'+ $id).text($email_regex);
          $('#error'+ $id).addClass('error');
          $('#'+$id).addClass('textError');
		  $('#'+$id).focus;
		 // alert($id);
		  return false;
		}

}
function confirm_Email($email1, $email2, $id) {
    result = IsEmail($email2,$id);
    if (result == true) {
        if ($email1 != $email2  ) {
            $('#error'+ $id).text($errorText);
            $('#error'+ $id).addClass('error');
            $('#'+$id).addClass('textError');
            $('#'+$id).focus;
			
            return false;
        } else {
            $('#error'+ $id).text("");
            $('#error'+ $id).removeClass('error');
            $('#'+$id).removeClass('textError');
            return true
        }
    }else{
        $('#error'+ $id).text($errorText);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        $('#'+$id).focus;
		
        return false;
    }
}
function validate_fileupload(fileName, $id) {
    var allowed_extensions = new Array("pdf", "xls", "doc", "ppt", "txt", "xlsx", "docx", "pptx");
    var file_extension = fileName.split('.').pop(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    var result_valid = 0;
    for (var i = 0; i <= allowed_extensions.length; i++) {
        if (allowed_extensions[i] == file_extension) {
            result_valid = 1;
        }
    }
    if (result_valid == 1) {
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
        return true;
    } else {
        $('#error'+ $id).text($errorText);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        $('#'+$id).focus;
		
        return false;
    }

}
function check_fileupload(fileName) {
    var allowed_extensions = new Array("pdf", "xls", "doc", "ppt", "txt", "xlsx", "docx", "pptx");

    for (var i = 0; i <= allowed_extensions.length; i++) {
        if (allowed_extensions[i] != file_extension) {
            return false;
        }
    }
    return true;
}

    jQuery(document).ready(function ($) {
		$('#submit_form').on('submit', function () {
		 //$("#submit_form").removeClass("textError");	
		   if ($('#text1').val() == '' && $('#text2').val() == '') 
		 {
			 		$('#errortext12').text($errorText);
					$('#errortext12').addClass('error');
					$(this).find('#text1').addClass('textError');
					$(this).find('#text2').addClass('textError');
					
					$('#text1').addClass('bg_error_fx');
					$('#text2').addClass('bg_error_fx');
					$re1 = false;
					$re2 = false;
		 }
		 else
		 {
			 
			 if ($('#text1').val() == '') 
				{
					$('#errortext12').text($errorText);
					$('#errortext12').addClass('error');
					$(this).find('#text1').addClass('textError');
					$('#text1').addClass('bg_error_fx');
					$re1 = false;
				} 
				else 
				{
					$(this).find('#text1').removeClass('textError');
					$('#text1').removeClass('bg_error_fx');
					$re1 = true;
					$("#errortext12").empty();
				}
				
				if ($('#text2').val() == '') {
						$('#errortext12').text($errorText);
						$('#errortext12').addClass('error');
						$(this).find('#text2').addClass('textError');
						$('#text2').addClass('bg_error_fx');
						$re2 = false;
				}
				else 
				{
						$(this).find('#text2').removeClass('textError');
						$('#text2').removeClass('bg_error_fx');
						$re2 = true;
						$("#errortext12").empty();
				}
			 
		 }
			
			
			
		 if ($('#text3').val() == '' && $('#text4').val() == '') 
		 {	
		 		$('#errortext34').text($errorText);
                $('#errortext34').addClass('error');
                $(this).find('#text3').addClass('textError');
				$(this).find('#text4').addClass('textError');
				$('#text3').addClass('bg_error_fx');
				$('#text4').addClass('bg_error_fx');
				$re3 = false;
				$re4 = false;
		 }
		 else
		 {
				if ($('#text3').val() == '') {
						$('#errortext34').text($errorText);
						$('#errortext34').addClass('error');
						$(this).find('#text3').addClass('textError');
						$('#text3').addClass('bg_error_fx');
						$re3 = false;
					}
					else {
						$(this).find('#text3').removeClass('textError');
						$('#text3').removeClass('bg_error_fx');
						$re3 = true;
						$("#errortext34").empty();
					}
					if ($('#text4').val() == '') {
						$('#errortext34').text($errorText);
						$('#errortext34').addClass('error');
						$(this).find('#text4').addClass('textError');
						$('#text4').addClass('bg_error_fx');
						$re4 = false;
					}
					else {
						$(this).find('#text4').removeClass('textError');
						$('#text4').removeClass('bg_error_fx');
						$re4 = true;
						$("#errortext34").empty();
					}
			 
		 }
		 
		 
		 
		if($('#select1 option:selected').val() == '' && $('#select2 option:selected').val() == '' && $('#select3 option:selected').val() == '' )
		{
				$('#errorselect123').text($errorSelect);
                $('#errorselect123').addClass('error');
                $(this).find('#select1').addClass('textError');
				$(this).find('#select2').addClass('textError');
				$(this).find('#select3').addClass('textError');
				
				$('#select1').addClass('bg_error_fx');
				$('#select2').addClass('bg_error_fx');
				$('#select2').addClass('bg_error_fx');
				$re5 = false;
				$re6 = false;
				$re7 = false;
		}
		else
		{
		 
				if ($('#select1 option:selected').val() == '') {
					$('#errorselect123').text($errorSelect);
					$('#errorselect123').addClass('error');
					$(this).find('#select1').addClass('textError');
					$('#select1').addClass('bg_error_fx');
					$re5 = false;
				}
				else 
				{
					$re5 = true;
					$("#errorselect123").empty();
					$(this).find('#select1').removeClass('textError');
					$('#select1').removeClass('bg_error_fx');
				}
				
				if ($('#select2 option:selected').val() == '') {
					$('#errorselect123').text($errorSelect);
					$('#errorselect123').addClass('error');
					$(this).find('#select2').addClass('textError');
					$('#select2').addClass('bg_error_fx');
					$re6 = false;
				} 
				else 
				{
					$re6 = true;
					$("#errorselect123").empty();
					$(this).find('#select2').removeClass('textError');
					$('#select2').removeClass('bg_error_fx');
					
				}
				
				if ($('#select3 option:selected').val() == '') {
					$('#errorselect123').text($errorSelect);
					$('#errorselect123').addClass('error');
					$(this).find('#select3').addClass('textError');
					$('#select3').addClass('bg_error_fx');
					$re7 = false;
				} 
				else 
				{
					$re7 = true;
					$("#errorselect123").empty();
					$(this).find('#select3').removeClass('textError');
					$('#select3').removeClass('bg_error_fx');
				}
			
		}
			
			
            if ($('#select4 option:selected').val() == '') {
                $('#errorselect4_s').text($errorSelect);
                $('#errorselect4_s').addClass('error');
                $(this).find('#select4').addClass('textError');
				$('#select4').addClass('bg_error_fx');
                $re8 = false;
            } 
			else 
			{
                 $re8 = true;
				 $(this).find('#select4').removeClass('textError');
				 $('#select4').removeClass('bg_error_fx');
				 $("#errorselect4_s").empty();
            }
			
			
			
			if($('#text5').val() == '' && $('#text6').val() == '' && $('#text7').val() == '')
			{
				$('#errortext567').text($errorText);
                $('#errortext567').addClass('error');
                $(this).find('#text5').addClass('textError');
				$(this).find('#text6').addClass('textError');
				$(this).find('#text7').addClass('textError');
				
				$('#text5').addClass('bg_error_fx');
				$('#text6').addClass('bg_error_fx');
				$('#text7').addClass('bg_error_fx');
				$re9 = false;
				$re10 = false;
				$re11 = false;
			}
			else
			{
			
					if ($('#text5').val() == '') {
						$('#errortext567').text($errorText);
						$('#errortext567').addClass('error');
						$(this).find('#text5').addClass('textError');
						$('#text5').addClass('bg_error_fx');
						$re9 = false;
					} 
					else 
					{
						
						if($('#text5').val().match(/^\d+$/)){
							 $re9 = true;
							 $(this).find('#text5').removeClass('textError');
							 $('#text5').removeClass('bg_error_fx');
				 			 //$("#errortext567").empty();
						}
						else
						{
							$('#errortext567').text($errorNumber);
							$('#errortext567').addClass('error');
							$(this).find('#text5').addClass('textError');
							$('#text5').addClass('bg_error_fx');
							$re9 = false;	
						}
					}
					 
					if ($('#text6').val() == '') {
						$('#errortext567').text($errorText);
						$('#errortext567').addClass('error');
						$(this).find('#text6').addClass('textError');
						$('#text6').addClass('bg_error_fx');
						$re10 = false;
					} 
					else 
					{
					   
						if($('#text6').val().match(/^\d+$/)){
							$re10 = true;
							$(this).find('#text6').removeClass('textError');
							$('#text6').removeClass('bg_error_fx');
				 			//$("#errortext567").empty();
						}
						else
						{
							$('#errortext567').text($errorNumber);
							$('#errortext567').addClass('error');
							$(this).find('#text6').addClass('textError');
							$('#text6').addClass('bg_error_fx');
							$re10 = false;	
							
						}
					}
					
					if ($('#text7').val() == '') {
						$('#errortext567').text($errorText);
						$('#errortext567').addClass('error');
						$(this).find('#text7').addClass('textError');
						$('#text7').addClass('bg_error_fx');
						$re11 = false;
					} 
					else 
					{
						if($('#text7').val().match(/^\d+$/)){
							$re11 = true;
							$(this).find('#text7').removeClass('textError');
							$('#text7').removeClass('bg_error_fx');
				 			//$("#errortext567").empty();
						}
						else
						{
							$('#errortext567').text($errorNumber);
							$('#errortext567').addClass('error');
							$(this).find('#text7').addClass('textError');
							$('#text7').addClass('bg_error_fx');
							$re11 = false;	
							
						}
				   }
					
			}
		
		if ($re9 == true && $re10 == true && $re11 == true){
			$("#errortext567").empty();
		}
		
			
		
		
			if ($('#text8').val() == '') {
                $('#errortext89').text($errorEmail);
                $('#errortext89').addClass('error');
                $(this).find('#text8').addClass('textError');
				 $('#text8').addClass('bg_error_fx');
                $re12 = false;
            } 
			else
			{
                $(this).find('#text8').removeClass('textError');
				 $('#text8').removeClass('bg_error_fx');
				$("#errortext89").empty();
				 $re12 = true;
            }
			
			
			
    		var email1 = $('#text8').val();
           // var email2 = $('#text9').val();
    		if( !isValidEmailAddress($('#text8').val()))
			{
					$('#errortext89').text($errorEmail);
                	$('#errortext89').addClass('error');
                	$(this).find('#text8').addClass('textError');
					$('#text8').addClass('bg_error_fx');
					$re12 = false;
					
			}
			else
			{
				
					$("#errortext89").empty();
                	$('#errortext89').removeClass('error');
                	$(this).find('#text8').removeClass('textError');
					$('#text8').removeClass('bg_error_fx');
					$re12 = true;
					
				
			}
			
			
               
			
		
			
			
			
			
            if ($('#text13').val() == '') {
                $('#errortext13').text($errorText);
                $('#errortext13').addClass('error');
                $(this).find('#text13').addClass('textError');
				$('#text13').addClass('bg_error_fx');
                $re13 = false;
            } else {
				$(this).find('#text13').removeClass('textError');
				$('#text13').removeClass('bg_error_fx');
				$("#errortext13").empty();
                $re13 = true;
            }
           
			 if ($('#select6 option:selected').val() == '') {
                $('#errorselect6').text($errorOption1);
                $('#errorselect6').addClass('error');
                $(this).find('#select6').addClass('textError');
                $re14 = false;
            }
            else {
                $re14 = true;
            }

			if ($('#select11 option:selected').val() == '') {
                $('#errorselect11').text($errorOption2);
                $('#errorselect11').addClass('error');
                $(this).find('#select11').addClass('textError');
                $re15 = false;
            }
            else {
                $re15 = true;
            }

            if ($('#text18').val() == '') {
                $('#errortext18').html($error_area);
                $('#errortext18').addClass('error');
                $(this).find('#text18').addClass('textError');
				$('#text18').addClass('bg_error_fx');
                $re16 = false;
            } else {
				$(this).find('#text18').removeClass('textError');
				$('#text18').removeClass('bg_error_fx');
				$("#errortext18").empty();
                $re16 = true;
            }
			
			if ($("#check_box").length > 0){
				if($('#check_box').is(':checked')){
					$(this).find('#text19').removeClass('textError');
				    $("#errortext19").empty();
					$re17 = true;
				}
				else
				{
					$re17 = false;
					$('#errortext19').text($errorText);
					$('#errortext19').addClass('error');
					$(this).find('#check_box').addClass('textError');
				}
			}
			else
			{
				$(this).find('#text19').removeClass('textError');
				$("#errortext19").empty();
				$re17 = true;
			}
			
			
			
            if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false || $re6 == false || $re7 == false || $re8 == false || $re9 == false || $re10 == false || $re11 == false || $re12 == false) {
				scroll_top_by_id(personal_block1);
                return false;
            }else if($re13 == false || $re14 == false || $re15 == false || $re16 == false){
				scroll_top_by_id(personal_block3);
				return false;
			}else if($re17 == false){
				scroll_top_by_id(checkbox_require);
				return false;
			}
            else 
			{
              	new_var = false;
                  return true;
               
            }
            return false;
		 });
        return true;
    });


