/////// config error message /////////////

$errorText = '必須です';
$errorNumber=  '電話番号 欄は必須です。';
$errorEmail = 'メールアドレス（確認） 欄は必須です。';




var url = document.location.pathname;
var arr = url.split('/');
var folder = arr[arr.length - 2];

//alert(folder);



var result = false;
function scroll_top_id(id){
	jQuery('body,html').animate({
		scrollTop: jQuery(".entry_form").offset().top
	}, 800);
								
	return false;
}
function scroll_top_id_focus(id){
	
	jQuery('body,html').animate({
		scrollTop: (jQuery(id).offset().top-83)
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
        //$('#'+$id).focus();
		
        return false;
    }else{
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
        //$('#'+$id).focus();
		
        return false;
    }else{
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
		
       // $('#'+$id).focus();
    }else{
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
    }
}

function IsEmail($email, $id) {
    var atpos = $email.indexOf("@");
    var dotpos = $email.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= $email.length) {
        jQuery('#error'+ $id).text($errorEmail);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
		
        //$('#'+$id).focus();
		
        //alert($errorEmail)
        return false;
    } else {
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true
    }
}
function confirm_Email($email1, $email2, $id) {
    result = IsEmail($email2,$id);
    if (result == true) {
        if ($email1 != $email2  ) {
            jQuery('#error'+ $id).text($errorText);
            jQuery('#error'+ $id).addClass('error');
            jQuery('#'+$id).addClass('textError');
           // $('#'+$id).focus;
			
            return false;
        } else {
            jQuery('#error'+ $id).text("");
            jQuery('#error'+ $id).removeClass('error');
            jQuery('#'+$id).removeClass('textError');
            return true
        }
    }else{
        jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
        //$('#'+$id).focus;
		
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
        jQuery('#error'+ $id).text("");
        jQuery('#error'+ $id).removeClass('error');
        jQuery('#'+$id).removeClass('textError');
        return true;
    } else {
       jQuery('#error'+ $id).text($errorText);
        jQuery('#error'+ $id).addClass('error');
        jQuery('#'+$id).addClass('textError');
        //$('#'+$id).focus();
		
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
			//scroll_top_id_focus
            if ($('#text1').val() == '') {
                $('#errortext1').text($errorText);
                $('#errortext1').addClass('error');
                $(this).find('#text1').addClass('textError');
                $re1 = false;
				//$('#text1').focus;
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
				 $('#errorselect1_mb').text($errorText);
                $('#errorselect1_mb').addClass('error');
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
            
            
			  
			
			/*if ($('#file1').val() == '') {
                $('#errorfile1').text($errorText);
                $('#errorfile1').addClass('error');
                $(this).find('#file1').addClass('textError');
                $re13 = false;
            } else {
                $re13 = true;
            }*/
			$re_file1=true;
			$re_file2=true;
			if ($('#file1').val() != '') {
				$re_file1=validate_fileupload($('#file1').val(), 'file1');
			}
			if ($('#file2').val() != '') {
				$re_file2=validate_fileupload($('#file2').val(), 'file2');
			}
			
			if ($("#check_box").length > 0){
				if($('#check_box').is(':checked')){
					$re14 = true;
					
				}
				else
				{
					$re14 = false;
					$('#errortext21').text($errorText);
	                $('#errortext21').addClass('error');
	                $(this).find('#check_box').addClass('textError');
				}
			}else{
				$re14 = true;
			}

			if ($('#text8').val() == '') {
                $('#errortext8').text($errorEmail);
                $('#errortext8').addClass('error');
                $(this).find('#text8').addClass('textError');
                $re12 = false;
            } else {
                $re12 = true;
            }	

			/*if ($('#text10').val() == '') {
                $('#errortext10').addClass('error');
                $(this).find('#text10').addClass('textError');
                $re15 = false;
            } else {
                $re15 = true;
            }*/
			/*var fields_checkbox="";
			var fields_checkbox1="";
			$("input.checkbox_cl:checked").each(function (){
				
				fields_checkbox1 += $(this).val() + ' ';
				//alert(fields_checkbox1);
			});
			
			fields_checkbox=$.trim(fields_checkbox1);*/
			/*if (fields_checkbox == '') 
			{
				$re16 = false;
				$('#errorcheckbox_cl').text($errorText);
                $('#errorcheckbox_cl').addClass('error');
				
				$('.radio_col').addClass('error');
				
			}else
			{
				$re16 = true;
				$('.radio_col').removeClass('error');
				$('#errorcheckbox_cl').hide();
				
			}*/
			/*if ($('#text11').val() == '') {
               $('#errortext11').addClass('error');
                $(this).find('#text11').addClass('textError');
                $re16 = false;
            } else {
                $re16 = true;
            }*/
			
	var vs_502= window.matchMedia("only screen and (max-width: 502px)");		
/*	if(vs_502.matches)
	{
		//alert("aaaaaaaaa");
		
			
			
		if($re1 == false){
				$('#text1').focus();
				scroll_top_id_focus('#text1');
				return false;
			}
			else
			{
				if($re2 == false){
					$('#text2').focus();
					scroll_top_id_focus('#text2');
					return false;
				}
				else
				{
					if($re5 == false){
								$('#select1').focus();
								scroll_top_id_focus('#select1');
								return false;
					}
					else
					{

						if($re6 == false){
								$('#select2').focus();
								scroll_top_id_focus('#select2');
								return false;
						}
						else
						{
						   if($re7 == false){
								$('#select3').focus();
								scroll_top_id_focus('#select3');
								return false;
							}
							else
							{		

							if($re9 == false)
							{
									$('#text5').focus();
									scroll_top_id_focus('#text5');
									return false;
							}
							else
							{
								if($re10 == false){
										$('#text6').focus();
										scroll_top_id_focus('#text6');
										return false;
								}
								else
								{
										if($re11 == false)
										{
											$('#text7').focus();
											scroll_top_id_focus('#text7');
											return false;
										}
										else
										{
											 if($re12 == false){
													$('#text8').focus();
													scroll_top_id_focus('#text8');
													return false;
											}else{
											 
												  if($re14 == false)
												  {
														$('#check_box').focus();
														scroll_top_id_focus('#check_box');
														return false;
												   }
												   else
													{
														
														
														if ($('#text10').val() == '※「その他」を選択した方は具体的にご記入ください。')
															{																													                                                              		$('#text10').val("");
																				
															} 
															if ($('#text12').val() == '※具体的にお教えください。')
															{																													                                                              		$('#text12').val("");
																				
															} 
															return true;
																	
													}
											}
										}

									   }
									}
										
								}
							}
					   }
				}
				
			}
		
	}
*/			
//	else
//	{		
	//begin match
	//alert("large");
			if($re1 == false){
				$('#text1').focus();
				scroll_top_id_focus('#text1');
				return false;
			}else{
				if($re2 == false){
					$('#text2').focus();
					scroll_top_id_focus('#text2');
					return false;
				}else{
					if($re3 == false){
					$('#text3').focus();
					scroll_top_id_focus('#text3');
					return false;
					}else{
						if($re4 == false){
							$('#text4').focus();
							scroll_top_id_focus('#text4');
							return false;
						}else{
							if($re5 == false){
								$('#select1').focus();
								scroll_top_id_focus('#select1');
								return false;
							}else{
								if($re6 == false){
									$('#select2').focus();
									scroll_top_id_focus('#select2');
									return false;
								}else{
									if($re7 == false){
										$('#select3').focus();
										scroll_top_id_focus('#select3');
										return false;
									}else{
										if($re8 == false){
											$('#select4').focus();
											scroll_top_id_focus('#select4');
											return false;
										}else{
											if($re9 == false){
												$('#text5').focus();
												scroll_top_id_focus('#text5');
												return false;
											}else{
												if($re10 == false){
													$('#text6').focus();
													scroll_top_id_focus('#text6');
													return false;
												}else{
													if($re11 == false){
														$('#text7').focus();
														scroll_top_id_focus('#text7');
														return false;
													}else{
														if($re12 == false){
															$('#text8').focus();
															scroll_top_id_focus('#text8');
															return false;
														}else{
															if($re_file1 == false){
																$('#file1').focus();
																scroll_top_id_focus('#file1');
																return false;
															}else{
																if($re_file2 == false){
																	$('#file2').focus();
																	scroll_top_id_focus('#file2');
																	return false;
																}else{
																	if($re14 == false){
																		$('#check_box').focus();
																		scroll_top_id_focus('#check_box');
																		return false;
																	}else{
																		 var email1 = $('#text8').val();
																		var rs1 = IsEmail(email1);
																	   
																		if(rs1 == true){
																			
														if ($('#text10').val() == '※「その他」を選択した方は具体的にご記入ください。')
															 	{																													                                                              		$('#text10').val("");
																	
             													} 
														if ($('#text12').val() == '※具体的にお教えください。')
															 	{																													                                                              		$('#text12').val("");
																	
             													} 
																return true;
																			
																		}else{
																			$('#text8').focus();
																			scroll_top_id_focus('#text8');
																			return false;
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			
			
		//end if match	
//	} // end else
			
			
			
			
			
			
            
           // return false;
        });
       // return true;
});
