var menu = document.querySelector('.menu');
var show = document.querySelector('.mobile');
var sect = document.querySelector('section');
function showHide(){
    if(show.style.display === 'none'){
        show.style.display = 'block'
        console.log('Mobile menu has displayed');
    }else{
        show.style.display = 'none';
        menu.style.backgroundColor = 'none';
        console.log('Mobile menu has closed!');
    }
} 
sect.addEventListener('click', function(){
    show.style.display= 'none';
})
function daftar(){
    this.addEventListener('click', function(){
        document.location.href="./pages/daftar.php";
        console.log('url redirected');
    })
}