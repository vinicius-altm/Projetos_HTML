var lista = document.querySelector('#menu');
var menuOpen = document.querySelector('.menu-btn i');


function menuShow(){
    if(lista.classList.contains('open')){
    lista.classList.remove('open');  
     menuOpen.classList.replace('fa-times', 'fa-bars');
    //console.log('Menu fechado');
    }else{
        lista.classList.add('open');
        menuOpen.classList.replace('fa-bars', 'fa-times');

    }
    //console.log('Menu aberto');
}
menuOpen.addEventListener('click', menuShow);