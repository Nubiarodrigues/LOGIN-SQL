
const btnAdicionar = document.getElementById('adicionar');

btnAdicionar.addEventListener("click", function(){
    let inputUser = document.getElementById('texto').value;
    let lista = document.getElementById('lista');

    lista.innerHTML += "<li>" + inputUser + "</li>";

    document.getElementById('texto').value = null;
})