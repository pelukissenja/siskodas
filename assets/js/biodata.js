var form = $('#bioForm');

$('#save-bio').on('click', function(e){
    e.preventDefault();
    validate();
})

function validate(){
    if($('input[name="namalengkap"]').val() == ''){
        $('input[name="namalengkap"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="nik"]').val() == ''){
        $('input[name="nik"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('select[name="gender"]').val() == ''){
        $('select[name="gender"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="tempatlahir"]').val() == ''){
        $('input[name="tempatlahir"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="tanggallahir"]').val() == ''){
        $('input[name="tanggallahir"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="akte"]').val() == ''){
        $('input[name="akte"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('select[name="status"]').val() == ''){
        $('select[name="status"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="anakke"]').val() == ''){
        $('input[name="anakke"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="jsk"]').val() == ''){
        $('input[name="jsk"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="hobi"]').val() == ''){
        $('input[name="hobi"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="cita"]').val() == ''){
        $('input[name="cita"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('select[name="tinggal"]').val() == ''){
        $('select[name="tinggal"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('select[name="kendaraan"]').val() == ''){
        $('select[name="kendaraan"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('select[name="hp"]').val() == ''){
        $('select[name="hp"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else if($('input[name="alamat"]').val() == ''){
        $('input[name="alamat"]').toggleClass('error');
        $('.message').toggleClass('error').html('kotak berwarna merah tidak boleh kosong');
    }else{
        save();
    }
}

function save(){
    $.ajax({
        url:form.attr('action'),
        type:form.attr('method'),
        data:form.serialize(),
        beforeSend:function(){
            setTimeout(function(){
                $('.message').html('Harap Tunggu sedang mengirim data..')
            }, 3000)
        },
        success:function(res){
            $('.message').toggleClass('success').html(res);
        }
    })
}