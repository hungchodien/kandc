/////// config error message /////////////

$errorText = '必須項目です。必ずご入力ください。';
$errorNumber=  '「半角英数字」で電話番号を正しく入力ください。';
$errorEmail = '必須項目です。必ずご入力ください。';
$error_area=" 必須項目です。必ずご入力ください。 <br/> 職務経歴書をお持ちの方は、職務経歴書の内容を貼り付けてください。お持ちでない方は箇条書きで入力してください。";
$error_select = '必須項目です。必ずご選択ください。';
$error_select1 = '必須項目です。直近の職種を1つ選択してください。';

var check_submit=false;
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
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    // alert( pattern.test(emailAddress) );
    return pattern.test(emailAddress);
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
		scroll_top_id();
        return false;
    }else{
		
		var  id =jQuery('#'+$id);
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
		scroll_top_id();
        return false;
    }else{

		var  id = $('#'+$id);
		var $text_strim=jQuery.trim(id.val());
		id.val($text_strim);
		
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true;
    }
}

function validateSelect($text, $id) {
    if ($text == '' ||  $text.length <= 0) {
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
        jQuery('#'+$id).focus;
		
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
			var  id = jQuery('#'+$id);
			var $text_strim=jQuery.trim(id.val());
			id.val($text_strim);
			jQuery('#error'+ $id).text("");
			jQuery('#error'+ $id).removeClass('error');
			jQuery('#'+$id).removeClass('textError');
			return true;
			
		}
	else{
		  jQuery('#error'+ $id).text($email_regex);
          jQuery('#error'+ $id).addClass('error');
          jQuery('#'+$id).addClass('textError');
		  jQuery('#'+$id).focus;
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

 jQuery(document).ready(function ($) {
	 	$('#submit_form').on('submit', function () {
		 //$("#submit_form").removeClass("textError");	
		 if ($('#text1').val() == '' && $('#text2').val() == '') 
		 {
			 		$('#errortext12').text($errorText);
					$('#errortext12').addClass('error');
					$(this).find('#text1').addClass('textError');
					$(this).find('#text2').addClass('textError');
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
					$re1 = false;
				} 
				else 
				{
					$(this).find('#text1').removeClass('textError');
					$re1 = true;
					$("#errortext12").empty();
				}
				
				if ($('#text2').val() == '') {
						$('#errortext12').text($errorText);
						$('#errortext12').addClass('error');
						$(this).find('#text2').addClass('textError');
						$re2 = false;
				}
				else 
				{
						$(this).find('#text2').removeClass('textError');
						$re2 = true;
						$("#errortext12").empty();
				}
			 
		 }
			
		if($('#text5').val() == '')
		{		
			$('#errortext5').text($errorEmail);
            $('#errortext5').addClass('error');
			$(this).find('#text5').addClass('textError');
			$re5 = false;
				
		}
		else
		{	
		   var email1 = $('#text5').val();
           if( !isValidEmailAddress($('#text5').val()))
			{
					$('#errortext5').text($errorEmail);
                	$('#errortext5').addClass('error');
                	$(this).find('#text5').addClass('textError');
					$re5 = false;
			}
			else
			{
				$(this).find('#text5').removeClass('textError');
				$("#errortext5").empty();
				$re5 = true;
			}
		}	
			
		 
		if ($('#text3').val() == '') {
				$('#errortext3').text($errorText);
				$('#errortext3').addClass('error');
				$(this).find('#text3').addClass('textError');
				$re3 = false;
		} 
		else 
		{
			$(this).find('#text3').removeClass('textError');
			$("#errortext3").empty();
			$re3 = true;
		}
		
		if ($('#text4').val() == '') {
				$('#errortext4').text($errorText);
				$('#errortext4').addClass('error');
				$(this).find('#text4').addClass('textError');
				$re4 = false;
		} 
		else 
		{
			$(this).find('#text4').removeClass('textError');
			$("#errortext4").empty();
			$re4 = true;
		}
				 
		
			
			if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false ) 
			{
				scroll_top_id();
                return false;
            }
            else 
			{
				check_submit=true;
				new_var = false;
				return true;
             }
            
        });
        
    });
