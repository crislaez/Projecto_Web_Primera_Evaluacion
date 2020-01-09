'use strict';

function cargarDatosApi() {
    let dato = 7;
    let formPoke = document.querySelector('#formPoke');
    let input = formPoke.getElementsByTagName('input');
    formPoke.addEventListener('submit', enviarNumeroPokemon);
    let articuloPokemon = document.querySelector('.articuloPokemon');
    var select = articuloPokemon.getElementsByTagName('select');
    let h2 = articuloPokemon.getElementsByTagName('h2');
    let img = articuloPokemon.getElementsByTagName('img');
    let h3 = articuloPokemon.getElementsByTagName('h3');

    for (let i = 0; i < 70; i++) {
        let option = document.createElement('option');
        select[0].append(option);
    }
    
    function enviarNumeroPokemon() {
        event.preventDefault();
        limpiarSelecto();

        if (!input[0].value) {
            alert('Escoja un Pokemon');
        }
        else {
            getFetch('https://pokeapi.co/api/v2/pokemon/' + input[0].value + '/')
                .then(data => data.json())
                .then(pokemon => {
                    cargarEnHtml(pokemon);

                })
                .catch(err => {
                     controlarCatch();
                }) 

            function getFetch(texto) {
                return fetch(texto);
            }
        }
    }

    function cargarEnHtml(pokemon) {
        console.log(pokemon)
    
        for (let i = 0; i < pokemon.moves.length; i++) {
            if (pokemon.moves[i].move) {
                crearLista(pokemon.moves[i].move.name, i);
            }
        }
        select[0].style.display = 'block';
        h3[0].style.display = 'block';
    
        h2[0].innerHTML = pokemon.name;
        img[0].src = pokemon.sprites.front_default;
        img[1].src = pokemon.sprites.back_default;

        hoverFoto(img[0], pokemon.sprites.front_shiny, pokemon.sprites.front_default);
        hoverFoto(img[1], pokemon.sprites.back_shiny, pokemon.sprites.back_default);
    }

    function hoverFoto(imagen, texto, texto2) {
        imagen.addEventListener('mouseover', function () {
            this.src = texto;
        })
        imagen.addEventListener('mouseout', function () {
            this.src = texto2;
        })
    }

    function crearLista(dato, contador) {
        let opciones = select[0].getElementsByTagName('option');
        if (opciones[contador]) {
            opciones[contador].innerHTML = dato;
            opciones[contador].value = dato;
        }
    }

    function limpiarSelecto() {
        let opciones = select[0].getElementsByTagName('option');
        for (let i = 0; i < select[0].length - 1; i++) {
            opciones[i].innerHTML = '';
            opciones[i].value = '';
        }
    }

    function controlarCatch() {
        img[0].src = 'img/imgPokemon.jpg';
        img[1].src = 'img/imgPokemon.jpg';
        h2[0].innerHTML = 'POKEMON';
        hoverFoto(img[0], 'img/imgPokemon.jpg', 'img/imgPokemon.jpg');
        hoverFoto(img[1], 'img/imgPokemon.jpg', 'img/imgPokemon.jpg');
        select[0].style.display = 'none';
        h3[0].style.display = 'none';
        alert('Escoja un Pokemon existente');
    }
}


