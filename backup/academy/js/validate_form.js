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


			if ( $(this).find('input').attr('id') == 'phone_number' && $(this).find('input').val() != '' ){
				var regex = /^[0-9]+$/;
				if( regex.test($(this).find('#phone_number').val()) === false ){
					$(this).append('<p class="rq error invalid_phone_number">無効な電話番号</p>');
					result = false;
				}
			} 	
			
			
		});
		if(!result){
			//prevent to submit
			$("#event_form .confirmation_btn").attr("type","button");
			return false;
		}
		else{

			//Prepare to submit
			$("#event_form .confirmation_btn").attr("type","submit");
			//Show confirmation table
		
			$("#confirmation_form .name1").html( $("#txt1").val() +'&nbsp;&nbsp;&nbsp;&nbsp;' + $("#txt2").val() );
			$("#confirmation_form .name2").html( $("#txt3").val() +'&nbsp;&nbsp;&nbsp;&nbsp;' + $("#txt4").val());
			$("#confirmation_form .d_o_b").html('西暦&nbsp;&nbsp;'+ $("#event_form .year").val() +' 年&nbsp;&nbsp;'+ $("#event_form .month").val() +' 月&nbsp;&nbsp;'+ $("#event_form .day").val() +' 日');
			$("#confirmation_form .txt5").html( $("#txt5").val() );
			$("#confirmation_form .txt6").html( $("#txt6").val() );
			$("#confirmation_form .txt7").html( $("#txt7").val() );
			
			var other_opinion = "";
			if( $("#other_opinion").length > 0 )
				other_opinion = $("#other_opinion").val();


			$("#confirmation_form .select_role").html( $("#event_form .select_role_value").val() + '<p>'+ other_opinion +'</p>');
			
			$("#confirmation_form .email_address").html( $("#event_form #email").val() );
			$("#confirmation_form .phone_number").html( $("#event_form #phone_number").val() );
			$("#event_form").slideUp();
			$("#confirmation_form").slideDown();
		}
	});
	
	//Check select 
	$('.select_role_value').on('change', function() {
		var other = 'その他';
		if( $(this).val() == other ){
			$(this).next().slideDown();
			$('<p class="rq">残り文字数:50</p>').insertAfter($("#other_opinion"));
		}
		else{
			$(this).next().slideUp();
			$("#other_opinion").next().remove();
			$("#other_opinion").val('');
		}
	});

	//Limit 50 characters
	$("#other_opinion").on('keyup',function(e){

		count = 50 - $(this).val().length;
		if( $(this).val().length > 50){
			count = 0;
			current_text = $(this).val().substring(0,50);
			$(this).val(current_text);
		}
		
		$(this).next().remove();
		$('<p class="rq">残り文字数:'+count+'</p>').insertAfter($(this));
	});
	
	//Check lost focus
	$("#event_form .check").each(function(){
		var parent = $(this);
		
		parent.find("input,select").focusin(function(){
			parent.find(".error").remove();
		}).focusout(function(){
			if( $(this).val() == '' ){
				parent.find(".error").remove();
				parent.append('<p class="rq error">必須です</p>');
			}
		});
	});

	$("#confirmation_form .confirm").click(function(){
		$("#event_form .confirmation_btn").trigger('click');
	});

});