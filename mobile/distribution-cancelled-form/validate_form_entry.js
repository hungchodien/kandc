jQuery(document).ready(function($) {
	
	//Validate empty value
	
	$("#submit-form .confirm-btn").click(function(e){
		
		var empty_err = "必須です",
			email_err = '「メールアドレス」を入力してください。';
			confirmation_err = '確認用にもう一度入力ください',
			blank_email_err = '※半角文字でお間違いのないようご入力ください';
			
		var result = true;

		$("#submit-form").find(".error").remove();
		
		$("#submit-form .validate").each(function(){
		
			
			if ( $(this).find('input').attr('type') == 'email' && $(this).find('input').val() != '' ){
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if( regex.test($(this).find('input[type="email"]').val()) === false ){
						$('<p class="rq error invalid_email">'+email_err+'</p>').insertAfter($(this));
						result = false;
					}
			}
			
		}); // Check each validation
        $errorEmail_cf="確認用アドレスが間違っています。";
		if ( $('#text8').val() == "" ){
            $('<p class="error rq">'+blank_email_err+'</p>').insertAfter($('#text8'));
            result = false;
        }
        if ( $('#text9').val() == "" ){
            $('<p class="error rq">'+blank_email_err+'</p>').insertAfter($('#text9'));
            result = false;
        }else {
            if($('#text9').val() != $('#text8').val())
            {
                $('#errortext89').text($errorEmail_cf);
                $('#errortext89').addClass('error');
                $(this).find('#text9').addClass('textError');
                result = false;
            }
		}


		
		//Check checkbox
		chkbox_result = false;
		$(".checkboxes-list .checkbox").each(function(){
			if($(this).is(":checked") ){
				chkbox_result = true;
			}		
		});
		if(!chkbox_result){
			$(".checkboxes-list").append('<p class="rq error">'+empty_err+'</p>');
			result = false;
		}
		
		if(!result){
			//$("#entry-form .errors-list").slideDown();
			e.preventDefault();
			return false;
		}
		
	
	}); // End click submit
	
	//Check lost focus
	$("#submit-form").each(function(){
		var parent = $(this);
		
		parent.find("input,select").focusin(function(){
			parent.find(".error").remove();
		}).focusout(function(){
			if( $(this).val() == '' ){
				parent.find(".error").remove();
				parent.append('<p class="rq error">'+empty_err+'</p>');
			}
		});
	});
	
	 $("#back-top").hide();
            // fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});
			// scroll body to 0px on click
			$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
	
	//Set height of document
	var h_of_content = $(window).height() - $("body").height();
	if(h_of_content>0){
		h_of_content = $("#content").innerHeight() + h_of_content;
		$("#content").css({"height":h_of_content+"px"});
	}
});