/////// config error message /////////////

$errorText = '必須項目です。';
$errorNumber=  '電話番号は必須項目です。';
$errorEmail = 'メールアドレス（確認） は必須項目です。';
$email_regex='メールアドレスの形式が正しくありません。';



var url = document.location.pathname;
var arr = url.split('/');
var folder = arr[arr.length - 2];

//alert(folder);



var result = false;


function scroll_top_id(){
	$('body,html').animate({
		scrollTop: $("#submit_form").offset().top
	}, 800);
								
	return false;
}
function add_desc_hidden($id) {
    $('#desc'+$id).removeClass('desc_hidden');
     $('#desc'+$id).addClass('desc_show');
    
}

function validatetext($text, $id) {
    if ($text == '' || $text.length <= 0) {
        $('#error'+ $id).text($errorText);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        $('#'+$id).focus;
		
        return false;
    }else{
			
		var  id = $('#'+$id);
		var $text_strim=$.trim(id.val());
		id.val($text_strim);
		

        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
        return true;
    }
}
function click_text($id){
    $('#'+$id).addClass('bg-text');
}
function validatetext_number($text, $id) {
    if ($text == '' || $text.length <= 0) {
        $('#error'+ $id).text($errorNumber);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        $('#'+$id).focus;
		
        return false;
    }else{
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
        return true;
    }
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    // alert( pattern.test(emailAddress) );
    return pattern.test(emailAddress);
}
function validateSelect($text, $id) {
    if ($text == '' ||  $text.length <= 0) {
        $('#error'+ $id).text($errorText);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
		
        $('#'+$id).focus;
    }else{
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
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


    $(document).ready(function(){
        $('#submit_form').on('submit', function(){
			
			if ($('#s-1').val() == '') {
                $('#errors-1').text($errorText);
                $('#errors-1').addClass('error');
                $(this).find('#s-1').addClass('textError');
                $re_1 = false;
            } else {
                $re_1 = true;
            }
			
			
            if ($('#s0').val() == '') {
                $('#errors0').text($errorText);
                $('#errors0').addClass('error');
                $(this).find('#s0').addClass('textError');
                $re0 = false;
            } else {
                $re0 = true;
            }
            /*if ($('#s0_confirm').val() == '') {
                $('#errors0_confirm').text($errorText);
                $('#errors0_confirm').addClass('error');
                $(this).find('#s0_confirm').addClass('textError');
                $re1 = false;
            } else {
                $re1 = true;
            }*/
			var email1 = $('#s0').val();
           // var email2 = $('#text9').val();
    		if( !isValidEmailAddress($('#s0').val()))
			{
					$('#errors0').text($errorEmail);
                	$('#errors0').addClass('error');
                	$(this).find('#s0').addClass('textError');
					$('#s0').addClass('bg_error_fx');
					$re1 = false;
					
			}
			else
			{
				
					$("#errors0").empty();
                	$('#errors0').removeClass('error');
                	$(this).find('#s0').removeClass('textError');
					$('#s0').removeClass('bg_error_fx');
					$re1 = true;
					
				
			}
			
			 if ($re_1 == false){
				scroll_top_id();
				$('#s-1').focus();
                return false;
			 }
			
			 if ($re0 == false || $re1==false) 
			 {
				scroll_top_id();
				$('#s0').focus();
                return false;
             }
             else 
			 {
				 return true;
                
			 }
			
			
			
			 return false;
			
        });
    });
