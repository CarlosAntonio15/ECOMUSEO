<body>
    <div id="container"></div>
    <div class="ln_solid"></div>
    <div class="form-group">
            <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
    </div>
</body>
    


<script src = " https://code.highcharts.com/highcharts.js " > </script>
<script type="text/javascript">

    var reservation = <?php echo json_encode($reservation) ?>;
    Highcharts.chart('container', {

        title:{
            text: 'Reservaciones registradas en el sistema'
        }, 

        subtitle: {
            text:'Grafica de reservaciones por año'
        },
        
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        
        yAxis: {
            title: {
                text: 'Nuevas reservaciones'
            }
        },
            
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotObtions: {
            series: {
                allowPointSelect: true
            }
        },

        series:[{
                name: 'Nuevas reservaciones',
                data: reservation
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>