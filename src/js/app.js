const hamburguer = document.querySelector('.icono-menu');
const menu = document.querySelector('.navegacion');

if($(hamburguer).length && $(menu).length){
    hamburguer.addEventListener('click', ()=>{
        menu.classList.toggle("spread");
    })

    window.addEventListener('click', e=>{
        if(menu.classList.contains('spread')
            && e.target != menu && e.target != hamburguer){
                menu.classList.toggle("spread");
        }
    })
}

$(function(){
    $("#agregar").click(function(){
        alert("hola");
    })
})