$(function() {
    let type_select = $('select[name="type_val"]');

    type_select.on('change', function(){
       let current = $(this).val()

       let fields = $('p input[type="text"]');

       fields.each(function(){
        $(this).parents('p').hide();

        if ($(this).attr('name').match(/\d+/g) == current) {
            $(this).parents('p').show();
        }
       })

    })
})