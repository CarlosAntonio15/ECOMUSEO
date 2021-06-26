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
            margin-left: 0cm;
            margin-right: 4cm;
            margin-bottom: 4cm;
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
    <h2 align="center"><FONT FACE="arial">Reporte Individual de reservaciones</FONT></h2> 
    <table class="table table-bordered">
      <thead>
        <tr class="table-danger">
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Fecha</td>
        <td>Hora</td>
        <td>Adultos</td>
        <td>Niños</td>
        <td>Tour</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Estado</td>
        <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $reservacion->name }}</td>
          <td>{{ $reservacion->lastname}}</td>
          <td>{{ $reservacion->reservationDate }}</td>
          <td>{{ $reservacion->reservationHour}}</td>
          <td>{{ $reservacion->adultQuantity }}</td>
          <td>{{ $reservacion->childrenQuantity }}</td>
          <td>{{ $reservacion->tourType  }}</td>
          <td>{{ $reservacion->email }}</td>
          <td>{{ $reservacion->phone }}</td>
          <td>{{ $reservacion->status }}</td>
          <td>{{ $reservacion->total }}</td>
        </tr>
      </tbody>
    </table>
   </body>
  </main>
 </body>
</html>