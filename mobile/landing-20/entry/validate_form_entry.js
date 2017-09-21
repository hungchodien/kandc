/////// config error message /////////////

/// errror goocs  $errorText = '必須項目です。';
/// errror goocs  $errorNumber=  '電話番号は必須項目です。';
/// errror goocs  $errorEmail = 'メールアドレス（確認） は必須項目です。';
$email_regex='メールアドレスの形式が正しくありません。';


$errorText = '必須項目です。必ずご入力ください。';
$errorNumber=  '「半角英数字」で電話番号を正しく入力ください。';
$errorEmail = '必須項目です。必ずご入力ください。';
$error_area=" 必須項目です。必ずご入力ください。 <br/> 職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください。";
$error_select = '必須項目です。必ずご選択ください。';
$error_select1 = '必須項目です。直近の職種を1つ選択してください。';
$errorEmail_cf="確認用アドレスが間違っています。";



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
        scroll_top_id();
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

    /*
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

     var  id = $('#'+$id);
     var $text_strim=$.trim(id.val());
     id.val($text_strim);

     $('#error'+ $id).text("");
     $('#error'+ $id).removeClass('error');
     $('#'+$id).removeClass('textError');
     return true
     }
     */
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
        if ($('#select1 option:selected').val() == '') {
            $('#errorselect1').text($errorText);
            $('#errorselect1').addClass('error');
            $(this).find('#select1').addClass('textError');
            $re5 = false;
        }
        else {
            $re5 = true;
        }
        if ($('#select2 option:selected').val() == '') {
            $('#errorselect2').text($errorText);
            $('#errorselect2').addClass('error');
            $(this).find('#select2').addClass('textError');
            $re6 = false;
        } else {
            $re6 = true;
        }
        if ($('#select3 option:selected').val() == '') {
            $('#errorselect3').text($errorText);
            $('#errorselect3').addClass('error');
            $(this).find('#select3').addClass('textError');
            $re7 = false;
        } else {
            $re7 = true;
        }
        if ($('#select4 option:selected').val() == '') {
            $('#errorselect4').text($errorText);
            $('#errorselect4').addClass('error');
            $(this).find('#select4').addClass('textError');
            $re8 = false;
        } else {
            $re8 = true;
        }
        if ($('#text5').val() == '') {
            $('#errortext5').text($errorText);
            $('#errortext5').addClass('error');
            $(this).find('#text5').addClass('textError');
            $re9 = false;
        } else {
            $re9 = true;
        }
        if ($('#text6').val() == '') {
            $('#errortext6').text($errorText);
            $('#errortext6').addClass('error');
            $(this).find('#text6').addClass('textError');
            $re10 = false;
        } else {
            $re10 = true;
        }
        if ($('#text7').val() == '') {
            $('#errortext7').text($errorText);
            $('#errortext7').addClass('error');
            $(this).find('#text7').addClass('textError');
            $re11 = false;
        } else {
            $re11 = true;
        }
        if ($('#text8').val() == '' || $('#text8').val() == 'メールアドレスを入力してください。') {
            $('#errortext89').text($errorEmail);
            $('#errortext89').addClass('error');
            $(this).find('#text8').addClass('textError');
            $re12 = false;
        } else {
            $re12 = true;
        }


        //////////////////hungtt insert 21/09/2017
        if($('#text9').val() == '')
        {
            $('#errortext89').text($errorEmail);
            $('#errortext89').addClass('error');
            $(this).find('#text9').addClass('textError');
            $re13 = false;

        }
        else
        {
            //var email1 = $('#text8').val();
            if($('#text9').val() != $('#text8').val())
            {
                $('#errortext89').text($errorEmail_cf);
                $('#errortext89').addClass('error');
                $(this).find('#text9').addClass('textError');
                $re13 = false;
            }
            else
            {
                $(this).find('#text9').removeClass('textError');
                $("#errortext89").empty();
                $re13 = true;
            }
        }
        //// end hungtt insert 21/09/2017


        if ($('#text13').val() == '') {
            $('#errortext13').text($errorText);
            $('#errortext13').addClass('error');
            $(this).find('#text13').addClass('textError');
            $re14 = false;
        } else {
            $re14 = true;
        }
        if ($('#select6 option:selected').val() == '') {
            $('#errorselect6').text($errorText);
            $('#errorselect6').addClass('error');
            $(this).find('#select6').addClass('textError');
            $re15 = false;
        } else {
            $re15 = true;
        }
        if ($('#select11 option:selected').val() == '') {
            $('#errorselect11').text($errorText);
            $('#errorselect11').addClass('error');
            $(this).find('#select11').addClass('textError');
            $re15 = false;
        } else {
            $re15 = true;
        }
        if ($('#text18').val() == '') {
            $('#errortext18').text($errorText);
            $('#errortext18').addClass('error');
            $(this).find('#text18').addClass('textError');
            $re16 = false;
        } else {
            $re16 = true;
        }

        if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false || $re6 == false || $re7 == false || $re8 == false || $re9 == false || $re10 == false || $re11 == false || $re12 == false || $re13 == false || $re14 == false || $re15 == false || $re16 == false) {
            scroll_top_id();
            return false;
        }
        else {
            var email1 = $('#text8').val();
            var email2 = $('#text9').val();
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