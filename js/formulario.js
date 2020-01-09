'use strict';

function validarFormulario() {
    var registro = document.querySelector('#registro');
    let input = registro.getElementsByTagName('input');
    let select = registro.getElementsByTagName('select');

    registro.addEventListener('submit', eventoRegistro);
    input[7].addEventListener('click', redireccionar);

    function eventoRegistro() {
        event.preventDefault();

        if (!input[0].value) {
            alert('Rellene el Nombre correctamente');
        }
        else if (!input[1].value) {
            alert('Rellene el Apellido correctamente');
        }
        else if (!input[2].value) {
            alert('Rellene la Fecha correctamente');
        }
        else if (!input[3].value || !/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(input[3].value)) {
            alert('Rellene el Email correctamente');
        }
        else if (!select[0].value) {
            alert('Rellene el Sexo correctamente');
        }
        else if (!input[4].value) {
            alert('Rellene la Clave correctamente');
        }
        else if (!input[5].value || input[5].value != input[4].value) {
            if (input[5].value != input[4].value) {
                alert('Las Claves deben coincidir');
            }
            else {
                alert('Rellene la Clave correctamente');
            }
        }
        else {
          
            $(document).ready(function () {
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost:8088/cristian/NuevoPaginaFinalEvaluacion/php/registro.php',
                    data: new FormData(registro),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            })
            
            alert('Ingresado Correctamente');
            window.location.href = 'login.html';
        }
    }
}

function redireccionar() {
    window.location.href = 'index1.html';
}

function comprobarLogin() {  
    let login = document.querySelector('#login');
    let input = login.getElementsByTagName('input');
    login.src = '#'
    login.addEventListener('submit', logear);
    input[3].addEventListener('click', redireccionar);

    function logear() {
        event.preventDefault();

        if (!input[0].value || !/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(input[0].value)) {
            alert('Rellene el Correo correctamente');
        }
        else if (!input[1].value) {
            alert('Rellene la contraseña correctamente');
        }
        else {
            let datos = 
            {email:input[0].value,
            clave:input[1].value
            }
        
            $.ajax({
                type:'POST',
                url:'http://localhost:8088/cristian/NuevoPaginaFinalEvaluacion/php/login.php',
                data:datos,
                success:function(response){
                    console.log(response);
                    if(response == 'true'){
                        alert('Has iniciado sesion');
                        localStorage.setItem('valor','vacio');
                        window.location.href = 'index1.html';                            
                    }
                    else{
                        alert('Clave incorrecta');
                        input[0].value = null;
                        input[1].value = null;
                    }
                },
                error:function(err){
                    console.log(err)
                }
            })                    
        }
    }
}

function cambiarALogin(){
    let log = document.querySelector('#log');

    window.addEventListener('unload',function(){
        localStorage.removeItem('valor');
        
    })
    
    if(localStorage.getItem('valor')){
        log.innerHTML = ''
    }
    else{
        log.innerHTML = 'LOGIN';
    } 
}


