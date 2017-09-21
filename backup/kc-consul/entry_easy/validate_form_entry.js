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
var $=jQuery;


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
		jQuery('#error'+ $id).addClass("error-box");
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
       setTimeout(function(){
			jQuery('#error'+ $id).text("");
			jQuery('#error'+ $id).removeClass("error-box");
		},5000);
        return false;
    }else{
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
		jQuery('#error'+ $id).removeClass("error-box");
		jQuery(id).removeClass('bg_error_fx');
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
        setTimeout(function(){
			jQuery('#error'+ $id).text("");
			jQuery('#error'+ $id).removeClass("error-box");
		},5000);
        return false;
    }else{
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
		jQuery('#error'+ $id).removeClass("error-box");
        return true;
    }
}

function validateSelect($text, $id) {
    if ($text == '' ||  $text.length <= 0) {
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
		jQuery('#error'+ $id).addClass("error-box");
		
		setTimeout(function(){
			jQuery('#error'+ $id).text("");
			jQuery('#error'+ $id).removeClass("error-box");
		},5000);
		return false;
		
    }else{
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
		
		jQuery('#error'+ $id).removeClass("error-box");
		jQuery('#'+$id).removeClass('bg_error_fx');
		return true;
    }
}

function IsEmail($email, $id) {
	//var $=jQuery;
    var atpos = $email.indexOf("@");
    var dotpos = $email.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= $email.length) {
        jQuery('#error'+ $id).text($errorEmail);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
		
        jQuery('#'+$id).focus;
		
        //alert($errorEmail)
        return false;
    } else {
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true;
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
	//var $=jQuery;
    var allowed_extensions = new Array("pdf", "xls", "doc", "ppt", "txt", "xlsx", "docx", "pptx");
    var file_extension = fileName.split('.').pop(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    var result_valid = 0;
    for (var i = 0; i <= allowed_extensions.length; i++) {
        if (allowed_extensions[i] == file_extension) {
            result_valid = 1;
        }
    }
    if (result_valid == 1) {
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
		jQuery('#error'+ $id).removeClass("error-box");
		jQuery('#'+$id).removeClass('bg_error_fx');
        return true;
    } else {
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
      	
		jQuery('#error'+ $id).addClass("error-box");
		
		setTimeout(function(){
			jQuery('#error'+ $id).text("");
			jQuery('#error'+ $id).removeClass("error-box");
		},5000);
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
function IsEmail_fix(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
}

   jQuery(document).ready(function ($) {
        $('#submit_form').on('submit', function () {
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

                $('#errorselect4').text($errorText);
                $('#errorselect4').addClass('error');
                $(this).find('#select4').addClass('textError');
                $re8 = false;
            } else {
                $re8 = true;
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
            if ($('#text8').val() == '') {
                $('#errortext8').text($errorEmail);
                $('#errortext8').addClass('error');
                $(this).find('#text8').addClass('textError');
                $re12 = false;
            }
			 else 
			{
				var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
				if( pattern.test($('#text8').val()))
				{
					$re12 = true;
				}
				else
				{
					
					 $('#errortext8').text($errorEmail);
	                $('#errortext8').addClass('error');
	                $(this).find('#text8').addClass('textError');
	                $re12 = false;
				}
                
            }
			
           
            
            if ($('#file1').val() == '') {
                $('#errorfile1').text($errorText);
                $('#errorfile1').addClass('error');
                $(this).find('#file1').addClass('textError');
                $re20 = false;
            } 
			else
			{
				var fileExtension = ["pdf", "xls", "doc", "ppt", "txt", "xlsx", "docx", "pptx"];
		        if ($.inArray($('#file1').val().split('.').pop().toLowerCase(), fileExtension) == -1) {
		            $('#errorfile1').text($errorText);
                	$('#errorfile1').addClass('error');
                	$(this).find('#file1').addClass('textError');
                	$re20 = false;
		        }
				else
				{
					$re20 = true;
				}
				
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
			


            if ($re1 == false || $re2 == false || $re3 == false || $re4 == false || $re5 == false || $re6 == false || $re7 == false || $re8 == false || $re9 == false || $re10 == false || $re11 == false || $re12 == false || $re20 == false ||  $re21 == false) {
				scroll_top_id();
                return false;
            }
            else {
                var email1 = $('#text8').val();
                //var email2 = $('#text9').val();
                var rs1 = IsEmail(email1,'text8');
               // var rs2 = confirm_Email(email1,email2);
                if(rs1 == true){
                    return true;
                }else{
					$('#text8').focus();
                    return false;
                }
            }
            return false;
        });
        return true;
    });
