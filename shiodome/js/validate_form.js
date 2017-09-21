jQuery(document).ready(function($) {
	
	//Validate empty value
	//$("#event_form").submit(function(){
	$("#event_form .submit_event_form").click(function(e){
		e.preventDefault();
		var result = true;
		$("#event_form").find(".error").remove();
		$("#event_form .check").each(function(){
			if( $(this).find('input,select,input[type="radio"]:checked').val() == "" ){
				$(this).append('<p class="rq error">必須です</p>');
				result = false;
			}
			if ( $(this).find('input').attr('type') == 'email' && $(this).find('input').val() != '' ){
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if( regex.test($(this).find('input[type="email"]').val()) === false ){
					$(this).append('<p class="rq error invalid_email">無効なEメール</p>');
					result = false;
				}
			}
			
			
		});
		if(!result)
			return false;
		else{
			//Show confirmation table
		
			$("#confirmation_form .name1").html( $("#txt1").val() +'&nbsp;&nbsp;&nbsp;&nbsp;' + $("#txt2").val() );
			$("#confirmation_form .name2").html( $("#txt3").val() +'&nbsp;&nbsp;&nbsp;&nbsp;' + $("#txt4").val());
			$("#confirmation_form .d_o_b").html('西暦&nbsp;&nbsp;'+ $("#event_form .year").val() +' 年&nbsp;&nbsp;'+ $("#event_form .month").val() +' 月&nbsp;&nbsp;'+ $("#event_form .day").val() +' 日');
			$("#confirmation_form .txt5").html( $("#txt5").val() );
			$("#confirmation_form .txt6").html( $("#txt6").val() );
			$("#confirmation_form .txt7").html( $("#txt7").val() );
			$("#confirmation_form .receive_email").html( $('#event_form .receive_email input[type="radio"]:checked').val() );
			$("#confirmation_form .select_role").html( $("#event_form .select_role_value").val() );
			$("#confirmation_form .email_address").html( $("#event_form #email").val() );
			$("#event_form").slideUp();
			$("#confirmation_form").slideDown();
		}
	}); //End click submit
	
	//Check lost focus
	$("#event_form .check").each(function(){
		var parent = $(this);
		
		parent.find("input,select").focusin(function(){
			parent.find(".error").fadeOut(function(){
				$(this).remove();
			});
		}).focusout(function(){
			if( $(this).val() == '' ){
				parent.find(".error").remove();
				parent.append('<p class="rq error">必須です</p>');
			}
		})
	})
	
	$("#confirmation_form .confirm").click(function(){
		$("#event_form .confirmation_btn").trigger('click');
	});
	
	
});