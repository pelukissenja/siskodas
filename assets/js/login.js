$('.btn-save-log').on('click', function(e){
    e.preventDefault();
    validate();
})

function validate(){
   if ($('input#email').val() == ''){
        $('#message').toggleClass('error');
        $('#message').fadeIn().html('Email tidak boleh kosong!')
        setTimeout(function(){
            $('#message').fadeOut('slow');
        }, 3500)
    }else if($('input#password').val() == ''){
        $('#message').toggleClass('error');
        $('.message').fadeIn().html('Password tidak boleh kosong!')
        setTimeout(function(){
            $('#message').fadeOut('slow');
        }, 3500)
    }else{
        save();
    }
}
function save(){
    var form = $('#logForm');
    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serialize(),
        success:function(res){
            form.trigger('reset');
            $('#message').toggleClass('success');
            $('#message').fadeIn().html(res);
            setTimeout(function(){
                $('#message').fadeOut('slow');
            }, 1500)
    }
    })
}