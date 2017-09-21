/////// config error message /////////////

$errorText = '必須です';
$errorNumber=  '電話番号 欄は必須です。';
$errorEmail = 'メールアドレス（確認） 欄は必須です。';




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
		scroll_top_id();
        return false;
    }else{
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
		scroll_top_id();
        return false;
    }else{
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
        return true;
    }
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
    var atpos = $email.indexOf("@");
    var dotpos = $email.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= $email.length) {
        $('#error'+ $id).text($errorEmail);
        $('#error'+ $id).addClass('error');
        $('#'+$id).addClass('textError');
        $('#'+$id).focus;
        //alert($errorEmail)
		
        return false;
    } else {
        $('#error'+ $id).text("");
        $('#error'+ $id).removeClass('error');
        $('#'+$id).removeClass('textError');
        return true
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
			scroll_top_id();
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

if (folder == 'entry-campaign') {
    $(document).ready(function () {

        $('#submit_form').on('submit', function () {
            if ($('#text1').val() == '' || $('#text1').val() == '姓') {
                $('#errortext1').text($errorText);
                $('#errortext1').addClass('error');
                $(this).find('#text1').addClass('textError');
                $re1 = false;
            } else {
                $re1 = true;
            }
            if ($('#text2').val() == '' || $('#text2').val() == '名') {
                $('#errortext2').text($errorText);
                $('#errortext2').addClass('error');
                $(this).find('#text2').addClass('textError');
                $re2 = false;
            }
            else {
                $re2 = true;
            }
            if ($('#text3').val() == '' || $('#text3').val() == 'セイ') {
                $('#errortext3').text($errorText);
                $('#errortext3').addClass('error');
                $(this).find('#text3').addClass('textError');
                $re3 = false;
            }
            else {
                $re3 = true;
            }
            if ($('#text4').val() == '' || $('#text4').val() == 'メイ') {
                $('#errortext4').text($errorText);
                $('#errortext4').addClass('error');
                $(this).find('#text4').addClass('textError');
                $re4 = false;
            }
            else {
                $re4 = true;
            }
            if ($('#text5').val() == '' || $('#text5').val() == '（例）ソニー株式会社') {
                $('#errortext5').text($errorText);
                $('#errortext5').addClass('error');
                $(this).find('#text5').addClass('textError');
                $re5 = false;
            }
            else {
                $re5 = true;
            }
			
			if ($('#text8').val() == '' || $('#text8').val() == '（例）テレビ事業部における海外営業') {
                $('#errortext8').text($errorText);
                $('#errortext8').addClass('error');
                $(this).find('#text8').addClass('textError');
                $re8 = false;
            }
            else {
                $re8 = true;
            }
			
			if ($('#select1 option:selected').val() == '') {
                $('#errorselect1').text($errorText);
                $('#errorselect1').addClass('error');
                $(this).find('#select1').addClass('textError');
                $re9 = false;
            } else {
                $re9 = true;
            }
          
            if ($('#text6').val() == '' || $('#text6').val() == 'メールアドレスを入力してください') {
                $('#errortext6').text($errorEmail);
                $('#errortext6').addClass('error');
                $(this).find('#text6').addClass('textError');
                $re6 = false;
            } else {
                $re6 = true;
            }
            if ($('#text7').val() == '' || $('#text7').val() != $('#text6').val() ) {
                $('#errortext7').text($errorEmail);
                $('#errortext7').addClass('error');
                $(this).find('#text7').addClass('textError');
                $re7 = false;
            } else {
                $re7 = true;
            }
           
            if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false || $re6 == false || $re7 == false || $re8 == false || $re9 == false) {
				scroll_top_id();
                return false;
            }
            else {
                var email1 = $('#text6').val();
                var email2 = $('#text7').val();
                var rs1 = IsEmail(email1);
                var rs2 = confirm_Email(email1,email2);
                if(rs1 == true && rs2 == true){
                    return true;
                }else{
					
                    return false;
                }
            }
            return false;
        });
        return true;
    });

}
