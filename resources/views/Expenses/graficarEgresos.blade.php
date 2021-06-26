<body>
    <div id="container"></div>
    <div class="ln_solid"></div>
    <div class="form-group">
            <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
    </div>
</body>
    


<script src = " https://code.highcharts.com/highcharts.js "> </script>
<script type="text/javascript">

    var expense = <?php echo json_encode($expense) ?>;
    Highcharts.chart('container', {

        title:{
            text: 'Egresos registrados en el sistema'
        }, 

        subtitle: {
            text:'Grafica por año'
        },
        
        xAxis: {
            categories: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
        },
        
        yAxis: {
            title: {
                text: 'Nuevos egresos'
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
                name: 'Nuevos egresos',
                data: expense
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