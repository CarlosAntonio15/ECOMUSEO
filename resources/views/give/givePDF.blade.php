<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <head>
    <style>
        /** 
            Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
            puede ser de altura y anchura completas.
         **/
        @page {
            margin: 0cm 0cm;
        }

        /* Defina ahora los márgenes reales de cada página en el PDF */
        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /* Definir las reglas del encabezado */
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

        /* Definir las reglas del pie de página */
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 1cm;
        }
    </style>
</head>
<body>
  <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
  <header>
      <img src="img/EncabezadoEco.png" width="100%" height="100%"/>
  </header>

  <footer>
      <img src="img/PieEcomuseo.png" width="100%" height="100%"/>
  </footer>



 <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->

 <main>
  <body>
    <h2 align="center"><FONT FACE="arial">Reporte indivudual de donaciones</FONT></h2>
    <table class="table table-bordered">
      <thead>
        <tr class="table-danger">
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Tipo Donación</td>
        <td>Cantidad</td>
        <td>Descripción</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $give->name }}</td>
          <td>{{ $give->lastname }}</td>
          <td>{{ $give->donationType }}</td>
          <td>{{ $give->quantity}}</td>
          <td>{{ $give->description }}</td>
        </tr>
      </tbody>
    </table>
   </body>
  </main>
 </body>
</html>