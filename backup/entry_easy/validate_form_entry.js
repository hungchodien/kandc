/////// config error message /////////////

$errorText = '必須です';
$errorNumber=  '電話番号 欄は必須です。';
$errorEmail = 'メールアドレス（確認） 欄は必須です。';




var url = document.location.pathname;
var arr = url.split('/');
var folder = arr[arr.length - 2];

//alert(folder);
var $=jQuery;


var result = false;
function scroll_top_id(){
	
	jQuery('body,html').animate({
		scrollTop: jQuery("#submit_form").offset().top
	}, 800);
								
	return false;
}
function add_desc_hidden($id) {
	
    jQuery('#desc'+$id).removeClass('desc_hidden');
     jQuery('#desc'+$id).addClass('desc_show');
    
}

function validatetext($text, $id) {
	
    if ($text == '' || $text.length <= 0) {
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
        jQuery('#'+$id).focus;
		
        return false;
    }else{

		var  id = jQuery('#'+$id);
		var $text_strim=jQuery.trim(id.val());
		id.val($text_strim);
		

        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true;
    }
}
function click_text($id){
	
    jQuery('#'+$id).addClass('bg-text');
}
function validatetext_number($text, $id) {
	
    if ($text == '' || $text.length <= 0) {
        jQuery('#error'+ $id).text($errorNumber);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
        jQuery('#'+$id).focus;
		
        return false;
    }else{

		var  id = jQuery('#'+$id);
		var $text_strim=jQuery.trim(id.val());
		id.val($text_strim);
		
		
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true;
    }
}

function validateSelect($text, $id) {
	var $=jQuery;
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
	var $=jQuery;
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
}
function confirm_Email($email1, $email2, $id) {
	var $=jQuery;
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
	var $=jQuery;
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
			//alert("o0k");
            if ($('#text1').val() == '') {
                $('#errortext1').text($errorText);
                $('#errortext1').addClass('error');
                $(this).find('#text1').addClass('textError');
                $re1 = false;
            } else {
                $re1 = true;
            }
            if ($('#text2').val() == '') {
                $('#errortext2').text($errorText);
                $('#errortext2').addClass('error');
                $(this).find('#text2').addClass('textError');
                $re2 = false;
            } else {
                $re2 = true;
            }
            if ($('#text3').val() == '') {
                $('#errortext3').text($errorText);
                $('#errortext3').addClass('error');
                $(this).find('#text3').addClass('textError');
                $re3 = false;
            } else {
                $re3 = true;
            }
            if ($('#text4').val() == '') {
                $('#errortext4').text($errorText);
                $('#errortext4').addClass('error');
                $(this).find('#text4').addClass('textError');
                $re4 = false;
            } else {
                $re4 = true;
            }
            if ($('#select1 option:selected').val() == '') {
                $('#errorselect1').text($errorText);
                $('#errorselect1').addClass('error');
                $(this).find('#select1').addClass('textError');
                $re5 = false;
            } else {
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
            if ($('#text8').val() == '') {
                $('#errortext9').text($errorEmail);
                $('#errortext9').addClass('error');
                $(this).find('#text8').addClass('textError');
                $re12 = false;
            } else {
                $re12 = true;
            }
            if ($('#text9').val() == '' && $('#text9').val() == $('#text8').val()) {
                $('#errortext9').text($errorEmail);
                $('#errortext9').addClass('error');
                $(this).find('#text9').addClass('textError');
                $re13 = false;
            } else {
                $re13 = true;
            }
			
			
			/*if ($('.next_step').css('display') == 'none') 
			{
				$re14 = true;
			}
			else
			{
				if ($('#text10').val() == '') {
					$('#errortext10').text($errorText);
					$('#errortext10').addClass('error');
					$(this).find('#text10').addClass('textError');
					$re14 = false;
				} else {
					$re14 = true;
				}
			}
			if ($('.next_step').css('display') == 'none') 
			{
				$re15 = true;
			}
			else
			{
				if ($("input[name='radio1']:checked").length == '') {
					$('#errorrad1').text($errorText);
					$('#errorrad1').addClass('error');
					$(this).find('#radio1').addClass('textError');
					$re15 = false;
				} else {
					$re15 = true;
				}
			}
			if ($('.next_step').css('display') == 'none') 
			{
				$re16 = true;
			}
			else
			{
				if ($('#select5 option:selected').val() == '') {
	
					$('#errorselect5').text($errorText);
					$('#errorselect5').addClass('error');
					$(this).find('#select5').addClass('textError');
					$re16 = false;
				} else {
					$re16 = true;
				}
				
			}
			if ($('.next_step').css('display') == 'none') 
			{
				$re17 = true;
			}
			else
			{
				if ($('#text12').val() == '') {
					$('#errortext12').text($errorText);
					$('#errortext12').addClass('error');
					$(this).find('#text12').addClass('textError');
					$re17 = false;
				} else {
					$re17 = true;
				}
			}
			if ($('.next_step').css('display') == 'none') 
			{
				$re18 = true;
			}
			else
			{
				if ($('#text13').val() == '') {
					$('#errortext13').text($errorText);
					$('#errortext13').addClass('error');
					$(this).find('#text13').addClass('textError');
					$re18 = false;
				} else {
					$re18 = true;
				}
			
			}*/
            
            if ($('#file1').val() == '') {
                $('#errorfile1').text($errorText);
                $('#errorfile1').addClass('error');
                $(this).find('#file1').addClass('textError');
                $re20 = false;
            } else {
                $re20 = true;
            }

			
			if ($("#check_box").length > 0){
			if($('#check_box').is(':checked')){
				$re21 = true;
				
			}
			else
			{
				$re21 = false;
				$('#errortext21').text($errorText);
                $('#errortext21').addClass('error');
                $(this).find('#check_box').addClass('textError');
			}
		}else{
				$re21 = true;
			}
			


            if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false || $re6 == false || $re7 == false || $re8 == false || $re9 == false || $re10 == false || $re11 == false || $re12 == false || $re13 == false ||  $re20 == false ||  $re21 == false) {
				scroll_top_id();
                return false;
            }
            else {
                var email1 = $('#text8').val();
                var email2 = $('#text9').val();
                var rs1 = IsEmail(email1);
                var rs2 = confirm_Email(email1,email2);
                if(rs1 == true && rs2 == true){
					new_var = false;
                    return true;
                }else{
					$('#text9').focus();
                    return false;
                }
            }
            return false;
        });
        return true;
    });
