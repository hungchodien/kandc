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
		 if ($('#text1').val() == '') 
		 {
			 		$('#errortext12').text($errorText);
					$('#errortext12').addClass('error');
					$(this).find('#text1').addClass('textError');
					$re1 = false;
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
				
			 
		 }
			
			
			
		 if ($('#text3').val() == '') 
		 {	
		 		$('#errortext34').text($errorText);
                $('#errortext34').addClass('error');
                $(this).find('#text3').addClass('textError');
				$re3 = false;
		 }
		 else
		 {
				if ($('#text3').val() == '') {
						$('#errortext34').text($errorText);
						$('#errortext34').addClass('error');
						$(this).find('#text3').addClass('textError');
						$re3 = false;
					}
					else {
						$(this).find('#text3').removeClass('textError');
						$re3 = true;
						$("#errortext34").empty();
					}
			 
		 }
		 
	if($('#select1 option:selected').val() == '' && $('#select2 option:selected').val() == '' && $('#select3 option:selected').val() == '' )
		{
				$('#errorselect123').text($error_select);
                $('#errorselect123').addClass('error');
                $(this).find('#select1').addClass('textError');
				$(this).find('#select2').addClass('textError');
				$(this).find('#select3').addClass('textError');
				$re5 = false;
				$re6 = false;
				$re7 = false;
		}
		else
		{
		 
				if ($('#select1 option:selected').val() == '') {
					$('#errorselect123').text($error_select);
					$('#errorselect123').addClass('error');
					$(this).find('#select1').addClass('textError');
					$re5 = false;
				}
				else 
				{
					$re5 = true;
					$("#errorselect123").empty();
					$(this).find('#select1').removeClass('textError');
				}
				
				if ($('#select2 option:selected').val() == '') {
					$('#errorselect123').text($error_select);
					$('#errorselect123').addClass('error');
					$(this).find('#select2').addClass('textError');
					$re6 = false;
				} 
				else 
				{
					$re6 = true;
					$("#errorselect123").empty();
					$(this).find('#select2').removeClass('textError');
				}
				
				if ($('#select3 option:selected').val() == '') {
					$('#errorselect123').text($error_select);
					$('#errorselect123').addClass('error');
					$(this).find('#select3').addClass('textError');
					$re7 = false;
				} 
				else 
				{
					$re7 = true;
					$("#errorselect123").empty();
					$(this).find('#select3').removeClass('textError');
				}
			
		}
			
			
        
			
		if ($('#text5').val() == '') {
				
				$('#errortext567').text($errorText);
				$('#errortext567').addClass('error');
				$(this).find('#text5').addClass('textError');
				
				$re9 = false;
		} 
		else 
		{
			
			$(this).find('#text5').removeClass('textError');
			$("#errortext567").empty();
			$re9 = true;
		}
					 
		if($('#text8').val() == '')
		{		
			$('#errortext89').text($errorEmail);
            $('#errortext89').addClass('error');
			$(this).find('#text8').addClass('textError');
			$re12 = false;
				
		}
		else
		{	
		   var email1 = $('#text8').val();
           if( !isValidEmailAddress($('#text8').val()))
			{
					$('#errortext89').text($errorEmail);
                	$('#errortext89').addClass('error');
                	$(this).find('#text8').addClass('textError');
					$re12 = false;
			}
			else
			{
				$(this).find('#text8').removeClass('textError');
				$("#errortext89").empty();
				$re12 = true;
			}
		}
			
		
		   
			
			if ($('#text13').val() == '') {
                $('#errortext_e13').text($errorText);
                $('#errortext_e13').addClass('error');
                $(this).find('#text13').addClass('textError');
                $re20 = false;
            }
            else
			{
				$(this).find('#text13').removeClass('textError');
				$("#errortext_e13").empty();
                $re20 = true;
            }
			
			
            if ($('#text14').val() == '') {
                $('#errortext_e14').html($errorText);
                $('#errortext_e14').addClass('error');
                $(this).find('#text14').addClass('textError');
                $re21 = false;
            } else {
				$(this).find('#text14').removeClass('textError');
				$("#errortext_e14").empty();
                $re21 = true;
            }
			
			
			if ($re1 == false || $re3 == false || $re5 == false || $re6 == false || $re7 == false || $re9 == false  || $re12 == false || $re20 == false || $re21 == false) 
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
