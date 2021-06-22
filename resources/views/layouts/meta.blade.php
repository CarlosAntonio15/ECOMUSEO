<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> {{$slot}} {{ config('app.name', 'Ecomuseo') }}</title>

<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="{{ asset('js/main.js') }}" defer></script>