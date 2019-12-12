'use strict';

function paginaOfetaLaboral(texto, num) {

    $(document).ready(function () {

        let sections = $('#sections');
        let sections2 = $('#sections2');

        $.ajax({
            type: 'GET',
            url: texto,
            success: function (response) {
                if (num == 1) {
                    mostrarDatos(response);
                }
                else if (num == 2) {
                    mostrarDatosOfetas(response)
                }
                else if (num == 3) {
                    mostrarNoticias(response)
                }
            }
        })

        function mostrarDatos(datos) {
            for (var valor in datos) {
                let aux =
                    `<article class='articulos1'>
                    <div class="div">
                        <h3>${datos[valor].desEmpleo.toUpperCase()}</h3>
                    </div>
                    <p class="puesto">${datos[valor].desPuesto.toLowerCase()}</p>
                    <p class="municipio">Puesto: ${datos[valor].municipio}</p>
                    <p class="fecha">Fecha: ${datos[valor].fecPub}</p>
                    <p class="url"><a href="${datos[valor].url}">Enlace</a></p>
                </article>
                `
                sections.append(aux);
            }
        }

        function mostrarDatosOfetas(datos) {
            for (let valor in datos) {
                var aux =
                    `   <article class='articulos2'>
                <div class="div">
                    <h3>${datos[valor].titulo}</h3>
                </div>
    
                <div class="div1Articulos2">
                    <p><strong>Municipio:</strong> ${datos[valor].municipio}</p>
                    <p><strong>Centro:</strong> ${datos[valor].centro}</p>
                </div>    
    
                <div class="divTabla1">
                    <table border="1">
                        <caption>Clase</caption>
                        <tr>
                            <th>L</th>
                            <th>M</th>
                            <th>MX</th>
                            <th>J</th>
                            <th>V</th>
                            <th>S</th>
                            <th>D</th>
                        </tr>                
    
                        <tr>
                            <td>${datos[valor].lunes}</td>
                            <td>${datos[valor].martes}</td>
                            <td>${datos[valor].miercoles}</td>
                            <td>${datos[valor].jueves}</td>
                            <td>${datos[valor].viernes}</td>
                            <td>${datos[valor].sabado}</td>
                            <td>${datos[valor].domingo}</td>
                        </tr>
                    </table>
                </div>
    
                <div class="divTabla2">
                    <table border="1">
                        <caption>Horario</caption>
                        <tr>
                            <th>Horario Mañana</th>
                            <th>Horario Tarde</th>
                         </tr>
                        <tr>
                            <td>${datos[valor].hora_ini_m} | ${datos[valor].hora_fin_m}</td>
                            <td>${datos[valor].hora_ini_t} | ${datos[valor].hora_fin_t}</td>
                        </tr>
                    </table>
                </div>
    
                <div class="div2Articulos2">
                    <p><strong>fecha inicio:</strong> ${datos[valor].f_inicio}</p>
                    <p><strong>fecha fin:</strong> ${datos[valor].f_fin}</p>
                    <p><strong>horas:</strong> ${datos[valor].horas}</p>
                    <p><strong>Fecha de alta:</strong> ${datos[valor].f_alta}</p>
                    <p><a href="${datos[valor].url}">Apuntarse aqui</a></p>
                </div>
            </article>
                `;
                sections2.append(aux);
            }
        }

        function mostrarNoticias(datos) {

            for (let valor in datos) {
                let aux =
                    `<article class="noticias">
                    <h3>${datos[valor].documentName}</h3>
                    <p>${datos[valor].documentDescription}</p>
                    <p class="enlaceNoticias"><a href="${datos[valor].friendlyUrl}">Enlace</a></p>
                    <p class="fechaNoticias">${datos[valor].commDate}</p>
                    </article>
                    `;
                sections.append(aux);
            }
        }
    })

}

function activarBoton() {
    let check = document.querySelector('#check');
    let submenu = document.querySelector('.submenu');
    check.checked = false;
    check.addEventListener('click', function () {
        if (check.checked) {
            submenu.style.width = '20%';
        }
        else {
            submenu.style.width = '0%';
        }
    })
}
// validarFormulario();

function validarFormulario() {
    var formulario = document.querySelector('#formulario');
    let input = formulario.getElementsByTagName('input');
    let asunto_1 = document.querySelector('#asunto_1');

    formulario.addEventListener('submit', eventoFormulario);
    
    function eventoFormulario() {
        event.preventDefault();
        if (!input[0].value) {
            alert('Rellene el Nombre correctamente')
        }
        else if (!input[1].value) {
            alert('Rellene el Apellido correctamente')
        }
        else if (!input[2].value) {
            alert('Rellene la fecha correctamente')
        }
        else if (!asunto_1.value.trim()) {
            alert('Rellene el Asunto correctamente')
        }
        else {
            let usuario = 
                {nombre:input[0].value,
                 apellido:input[1].value,
                 fecha:input[2].value,
                 asunto:asunto_1.value.trim()
                };
           localStorage.setItem('usuario',JSON.stringify(usuario));
           window.location.href = 'index1.html';
        }
    }
}
