var toggler = document.querySelector('.toggler');
var toggleBtn = document.querySelector('#toggleBtn');
var full = document.querySelectorAll('.main');
var logout = document.querySelector('.logout');
var aside = document.querySelector('aside');
var dash = document.querySelector('.dashboard');
toggler.addEventListener('click', function(e){
    e.preventDefault();
    aside.classList.toggle('show');
    toggler.classList.toggle('left');
    logout.classList.toggle('hide');
})
toggleBtn.addEventListener('click',function(e){
    e.preventDefault();
    aside.classList.toggle('hide');
    for(let i = 0; i < full.length; i++){
        full[i].classList.toggle('full');
    }
})
dash.addEventListener('click', function(e){
    e.preventDefault();
    document.location.href="main.php";
})

$('#btn-logout').on('click', function(){
    document.location.href="../model/logout.php";
})