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
  <body>
    <table class="table table-bordered">
      <thead>
        <tr class="table-danger">
          <td>Nombre</td>
          <td>Adultos</td>
          <td>Niños</td>
          <td>Tipo de tour</td>
          <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $tiquete->nombre }}</td>
          <td>{{ $tiquete->adultQuantity }}</td>
          <td>{{ $tiquete->childrenQuantity }}</td>
          <td>{{ $tiquete->tourType }}</td>
          <td>{{ $tiquete->total }}</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>