
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    canvas.width = 300;
    canvas.height = 300;
    var centerX = canvas.width / 2;
    var centerY = canvas.height / 2;

    /**
     * Función que dibuja la esfera en la pantalla. Esta función se ejecuta a cada segundo
     */
    function dibujarReloj() {
        // limpiamos el canvas entero
        context.clearRect(0, 0, canvas.width, canvas.height);

        context.lineWidth = 1;
        context.strokeStyle = "#000";

        // dibujamos el circulo
        context.beginPath();
        context.arc(centerX, centerY, centerX - 10, 0, 2 * Math.PI);
        context.stroke();

        // dibujamos la linea de los segundos 1, 2, 3, ...
        for (i = 0; i < 60; i++) {
            var start_x = centerX + Math.round((centerX - 15) * Math.cos(6 * i * Math.PI / 180));
            var start_y = centerY + Math.round((centerY - 15) * Math.sin(6 * i * Math.PI / 180));
            var end_x = centerX + Math.round((centerX - 10) * Math.cos(6 * i * Math.PI / 180));
            var end_y = centerY + Math.round((centerY - 10) * Math.sin(6 * i * Math.PI / 180));
            context.beginPath();
            context.moveTo(start_x, start_y);
            context.lineTo(end_x, end_y);
            context.stroke();
        }

        context.lineWidth = 2;
        // dibujamos la linea de los minutos 5, 10, 15, ...
        for (i = 0; i < 12; i++) {
            var start_x = centerX + Math.round((centerX - 30) * Math.cos(30 * i * Math.PI / 180));
            var start_y = centerY + Math.round((centerY - 30) * Math.sin(30 * i * Math.PI / 180));
            var end_x = centerX + Math.round((centerX - 10) * Math.cos(30 * i * Math.PI / 180));
            var end_y = centerY + Math.round((centerY - 10) * Math.sin(30 * i * Math.PI / 180));
            context.beginPath();
            context.moveTo(start_x, start_y);
            context.lineTo(end_x, end_y);
            context.stroke();
        }

        // Mostramos el texto en el centro del reloj
        context.font = "14px sans-serif";
        context.textAlign = "center";
        context.fillStyle = "blue";
        // context.fillText("LaWebDelProgramador.com", canvas.width/2, (canvas.height/2)+30);
    }

    /**
     * Función que se ejecuta cada segundo para actualizar el reloj
     */
    function actualizarReloj() {
        dibujarReloj();
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        dibujarAguja(seconds, (centerX - 20), 1, "red");
        dibujarAguja(minutes, (centerX - 35), 3, "black");
        dibujarAguja(hours * 5, (centerX - 60), 5, "grey");
    }

    /**
     * Función para dibujar las agujas del reloj
     * @param int valor		- determina el valor de la aguja a mostrar en el reloj
     * @param int logitud	- define la longitud de la aguja
     * @param int grueso	- define el grueso de la aguja
     * @param string color	- cadena con el color de la aguja en formato HTML
     */
    function dibujarAguja(valor, longitud, grueso, color) {
        angle = ((Math.PI * 2) * (valor / 60)) - ((Math.PI * 2) / 4);

        var end_x = centerX + Math.cos(angle) * longitud;
        var end_y = centerY + Math.sin(angle) * longitud;

        context.beginPath();
        context.lineWidth = grueso;
        context.strokeStyle = color;
        context.moveTo(centerX, centerY);
        context.lineTo(end_x, end_y);
        context.stroke();
    }

    actualizarReloj();
    setInterval("actualizarReloj()", 1000);
