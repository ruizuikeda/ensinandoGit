function alertar () {
    alert('oi');
}

function console2() {
    console.log('meuObjeto'); //debug
}

function esconder() {
    var tituloJS = document.getElementById('titulo');
    var tituloJQUERY = $('#titulo');
    console.log('tituloJS', tituloJS);
    console.log('tituloJQUERY', tituloJQUERY);
    
    

    tituloJS.className = 'alert alert-success animated shake';
    tituloJQUERY.addClass();
    //titulo.innerHTML = 'SUCESSO !!!! PARABENS !!!!';
}

function mostrar(asdf) {
    var login = document.getElementById('login').value;
    console.log(asdf);
}

function myFunction() {
    var login = document.getElementById('idLogin').value;
    
    if(login == 'ikeda') {
        //passou
    } else {
        //errou
    }
}