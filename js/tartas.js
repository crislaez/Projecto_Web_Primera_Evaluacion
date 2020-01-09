'use strict';

$(document).ready(function () {
  $.ajax({
    type: 'POST',
    url: 'http://localhost:8088/cristian/NuevoPaginaFinalEvaluacion/php/prueba.php',
    success: function (response) {

      tarta1(JSON.parse(response));
    }
  })
})

function tarta1(variable) {
  am4core.ready(function () {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();

    chart.data = variable

    var series = chart.series.push(new am4charts.PieSeries3D());
    series.dataFields.value = "Deuda";
    series.dataFields.category = "Provincia";

  }); // end am4core.ready()
}

function tarta2(variable) {
  am4core.ready(function () {
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart
    var chart = am4core.create("chartdiv2", am4charts.PieChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.data = variable;

    var series = chart.series.push(new am4charts.PieSeries());
    series.dataFields.value = "Deuda";
    series.dataFields.radiusValue = "Deuda";
    series.dataFields.category = "Provincia";
    series.slices.template.cornerRadius = 6;
    series.colors.step = 3;

    series.hiddenState.properties.endAngle = -90;

    chart.legend = new am4charts.Legend();

  }); 
}

function formularioProvincia() {
  let formProv = document.querySelector('#formProv');
  let select = formProv.getElementsByTagName('select');


  formProv.addEventListener('submit', function () {
    event.preventDefault();
    console.log(select[0].value);
    if (select[0].value) {      
      $.ajax({
        type: 'GET',
        url: 'php/prueba.php?prov=' + select[0].value,
        // data:select[0].value,
        success: function (response) {
          console.log(response);
          tarta2(JSON.parse(response));
        }
      })
      $('#chartdiv2').css('display', 'block');    
    }
  })
}

