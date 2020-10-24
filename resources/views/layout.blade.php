<!--DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Administracion Ecomuseo</title>
</head>
<body>
    <div class="container"> 
        <div class="col-xs-12"> 
            <h1 class="page-header text-center">CRUD</h1> 
            <br> 
        </div>
        <div>
            <table>
                <td>
                    tabla voluntariado
                </td>
            </table>
        </div>
        @yield('content') 
    </div> 
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<body>-->


<html>
    <head>
        <title>Administracion Ecomuseo - @yield('title')</title>
    </head>
    <body>
        
        @section('sidebar')
            La sección de Administracion
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>