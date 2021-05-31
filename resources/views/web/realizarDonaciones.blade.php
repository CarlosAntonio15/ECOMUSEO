@extends('layouts.web')
@section('title', 'Realizar donaciones')
@section('content')
   

<br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">

                           <div class="section-title">
                                <h5>Realizando donaciones a Ecomuseo de Abangares</h5>
                           </div>
                                <p class="text-justify">Bienvenido a nuestra página de donaciones del Ecomuseo minas de oro de Abangares, acá obtendrás más información sobre las diferentes formas de realizar una donación a nuestro complejo turístico.</p>

                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-6">
                                    <h5 class="card-title">¿Cómo realizar donaciones al Ecomuseo de Abangares?</h5>
                                    <p class="text-justify">Las donaciones las podrás realizar por medio de la plataforma web, si es monetaria mediante la cuenta
                                                        y si es tipo material o alimentos, deberás asistir al ecomuseo y realizar la entrega personalmente.
                                    </p>
                                    <a href="{{ route('donation.create')}}" class="btn btn-primary">Donación</a>
                    </div>

                    <div class="col-sm-6">
                                <h5 class="card-title">Tipo de donaciones</h5>
                                <p class="text-justify">
                                Se cuenta con diversos tipos de donaciones, entre ellas tenemos las siguientes:<br>
                                    1-	Monetaria (Por medio de esta página o presencial)<br>
                                    2-	Material (Materiales de construcción, entre otras…)<br>
                                    3-  Alimentos(Frutas, verduras, entre otras...)
                                </p>
                    </div>

                        <div class="col-sm-6">
                                <h5 class="card-title">Requisitos para realizar donaciones</h5>
                                <p class="text-justify">
                                    1-	Contar con cuenta por medio de la cual pueda hacer las transacciones monetarias..<br>
                                    2-	Si es donación material entregarla directamente en nuestro complejo turístico.<br>
                                    3-	Especificar en el formulario la fecha, hora y cantidad a entregar en caso de ser donación material.<br>
                                </p>   
                        </div>  

                        <div class="col-sm-6">
                                <h5>Cuentas de La Asociación Junta Administradora del Ecomuseo Minero de Abangares. </h5>
                                <p class="text-justify">
                                A dichas cuentas podrás realizar tus donaciones monetarias o pago de las actividades a las que deseas asistir:<br>
                                    1-	Número de Cuenta:
                                        100-01-025-002775-6<br>
                                    2-	Cuenta Cliente: 
                                        15102510010027756<br>
                                    3-  Cuenta IBAN: 
                                        CR91 0151 0251 0010 0277 56
                                    </br></br>
                                </p>
                        </div>
                                
                            </div>
                        </div>
                    </div>
            </div>
@endsection