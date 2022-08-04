
function open_menu(){
    let menu = document.getElementById('menu_lateral');
    let body = document.getElementById('container_body');
    let iconos = document.querySelectorAll('.list__img');


    menu.classList.toggle('ocultar-menu');
    body.classList.toggle('agrandar-body');
    iconos.forEach(icon => {
        icon.classList.toggle('static-icon');
    });
}

let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});