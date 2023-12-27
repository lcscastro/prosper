const buttonOpen = document.getElementById("btn-aviso");
const modal = document.querySelector("dialog");
const buttonClose = document.querySelector("dialog");

buttonOpen.onclick = function(){
    modal.showModal()
}

buttonClose.onclick = function(){
    modal.close()
}

document.queryById