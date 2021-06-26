<body>
    <div id="container"></div>
    <div class="ln_solid"></div>
    <div class="form-group">
            <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
    </div>
</body>
    


<script src = " https://code.highcharts.com/highcharts.js " > </script>
<script type="text/javascript">

    var user = <?php echo json_encode($user) ?>;
    Highcharts.chart('container', {

        title:{
            text: 'Usuarios registrados en el sistema'
        }, 

        subtitle: {
            text:'Grafica por año'
        },
        
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        
        yAxis: {
            title: {
                text: 'Nuevos usuarios'
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
                name: 'Nuevos usuarios',
                data: user
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