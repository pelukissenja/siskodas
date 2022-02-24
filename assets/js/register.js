$('.btn-save-reg').on('click', function(e){
    e.preventDefault();
    validate();
})

function validate(){
    if($('input#namalengkap').val() == ''){
        $('#message').toggleClass('error');
        $('#message').fadeIn().html('Nama Lengkap tidak boleh kosong!!');
        setTimeout(function(){
            $('#message').fadeOut('slow');
        }, 1500)
    }else if ($('input#email').val() == ' '){
        $('#message').toggleClass('error');
        $('#message').fadeIn().html('Email tidak boleh kosong!')
        setTimeout(function(){
            $('#message').fadeOut('slow');
        }, 1500)
    }else if($('input#password').val() == ' '){
        $('#message').toggleClass('error');
        $('.message').fadeIn().html('Password tidak boleh kosong!')
        setTimeout(function(){
            $('#message').fadeOut('slow');
        }, 1500)
    }else{
        save();
    }
}
function save(){
    var form = $('#regForm');
    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serialize(),
        beforeSend:function(){
            setTimeout(function(){
                $('#message').html('Sedang Mengirim Pesan...')
            }, 1500)
        },
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