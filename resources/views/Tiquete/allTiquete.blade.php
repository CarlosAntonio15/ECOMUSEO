<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
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
      </tr>
      </thead>
      <tbody>
        @foreach($tiquete as $data)
        <tr>
            <td>{{ $data->nombre }}</td>
            <td>{{ $data->adultQuantity }}</td>
            <td>{{ $data->childrenQuantity }}</td>
            <td>{{ $data->tourType }}</td>
            
        </tr>
       @endforeach
      </tbody>
    </table>
  </body>
</html>