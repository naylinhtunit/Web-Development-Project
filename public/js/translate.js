// Translate
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('.translate').editable({
    params: function(params) {
        params.code = $(this).editable().data('code');
        return params;
    }
});


$('.translate-key').editable({
    validate: function(value) {
        if($.trim(value) == '') {
            return 'Key is required';
        }
    }
});


$('body').on('click', '.remove-key', function(){
    var cObj = $(this);


    if (confirm("Are you sure want to remove this item?")) {
        $.ajax({
            url: cObj.data('action'),
            method: 'DELETE',
            success: function(data) {
                cObj.parents("tr").remove();
                alert("Your imaginary file has been deleted.");
            }
        });
    }


});