color_bg = '#202020';
color_text = '#fff';



$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "assets/include/graficos/count_by_date.php",
        dataType: "json",
        success: function (data) {
            /* console.log(data); */
            var datavisita = [];
            var qtdvisita  = [];

            for (var i = 0; i < data.length; i++) {
                datavisita.push(data[i].data);
                qtdvisita.push(data[i].visitas);
            }
            by_date(datavisita,qtdvisita);
        }
    });

})


function by_date(data, data_visitas) {   
    //WidgetChart 2
    var ctx = document.getElementById("widgetChart2");
    if (ctx) {
    ctx.height = 130;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: data,
        type: 'line',
        datasets: [{
            data: data_visitas,
            label: 'Visitas',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
        },]
        },
        options: {

        maintainAspectRatio: false,
        legend: {
            display: false
        },
        responsive: true,
        tooltips: {
            mode: 'index',
            titleFontSize: 13,
            titleFontColor: color_text,
            bodyFontColor: color_text,
            backgroundColor: color_bg,
            titleFontFamily: 'sans-serif',
            bodyFontFamily: 'sans-serif',
            defaultFontStyle: 'normal',
            cornerRadius: 3,
            intersect: false,
        },
        scales: {
            xAxes: [{
            gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
            },
            ticks: {
                fontSize: 2,
                fontColor: 'transparent'
            }
            }],
            yAxes: [{
            display: false,
            ticks: {
                display: false,
            }
            }]
        },
        title: {
            display: false,
        },
        elements: {
            line: {
            tension: 0.00001,
            borderWidth: 1
            },
            point: {
            radius: 4,
            hitRadius: 10,
            hoverRadius: 4
            }
        }
        }
    });
    }

}


    //WidgetChart 1
    var ctx = document.getElementById("widgetChart1");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          type: 'line',
          datasets: [{
            data: [78, 81, 80, 45, 34, 12, 40],
            label: 'Dataset',
            backgroundColor: 'rgba(255,255,255,.1)',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 0,
              bottom: 0
            }
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 0
            },
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }

    //WidgetChart 3
    var ctx = document.getElementById("widgetChart3");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          type: 'line',
          datasets: [{
            data: [65, 59, 84, 84, 51, 55],
            label: 'Dataset',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }



    //WidgetChart 4
$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "assets/include/graficos/count_by_mes.php",
        dataType: "json",
        success: function (data) {
            /* console.log(data);  */
            var mesvisita = [];
            var qtd_mesvisita  = [];

            for (var i = 0; i < data.length; i++) {
                mesvisita.push(data[i].mes);
                qtd_mesvisita.push(data[i].visitas);
            }
            by_mes(mesvisita,qtd_mesvisita);
        }
    });

})

function by_mes(mes, mes_visitas) {   
    var ctx = document.getElementById("widgetChart4");
    if (ctx) {
        ctx.height = 115;
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: mes,
            datasets: [
            {
                label: "Visitas",
                data: mes_visitas,
                borderColor: "transparent",
                borderWidth: "0",
                backgroundColor: "rgba(255,255,255,.3)"
            }
            ]
        },
        options: {
            maintainAspectRatio: true,
            legend: {
            display: false
            },
            responsive: true,
            tooltips: {
              mode: 'index',
              titleFontSize: 12,
              titleFontColor: color_text,
              bodyFontColor: color_text,
              backgroundColor: color_bg,
              titleFontFamily: 'sans-serif',
              bodyFontFamily: 'sans-serif',
              defaultFontStyle: 'normal',
              cornerRadius: 3,
              intersect: false,
            },
            scales: {
            xAxes: [{
                display: false,
                categoryPercentage: 1,
                barPercentage: 0.65
            }],
            yAxes: [{
                display: false
            }]
            }
        }
        });
    }
}