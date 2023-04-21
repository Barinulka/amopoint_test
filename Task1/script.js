$(function() {
    $('body').on('submit', '.ajax-form', function(e){
		e.preventDefault();
		var form = $(this);	
        
		if (!form.hasClass('sending')) {
			form.addClass('sending');

			$(form).ajaxSubmit({
				success: function(response){
                     data = $.parseJSON(response);

                    $(".result_circle").removeClass('red')
                    $(".result_circle").removeClass('green')
                    $('.result_output').html('');

                    if (data.error != undefined){
                        
                        if (data.error == 0) {
                            $(".result_circle").addClass('green')

                            if (data.content != undefined) {
                                $('.result_output').html(data.content);
                            }

                        } else {
                            $(".result_circle").addClass('red')
                        }

                        if (data.message != undefined) {
                            $('.result_message').html(data.message)
                        }
                    }
				},
				complete: function(){
					setTimeout(function(){
						form.removeClass('sending');
                        $('section.result').removeClass('hide')
					}, 1000);
				},
			})
		}
	})
})