let select = document.getElementsByName('type_val')[0];

select.addEventListener('change', function(){
    let elems = document.querySelectorAll('p input[type="text"]')

    elems.forEach(function(elem) {

        elem.closest('p').style.display = 'none';

        if (parseInt(elem.getAttribute('name').match(/\d+/)) == select.value) {
            elem.closest('p').style.display = 'block';
        }
    })

});