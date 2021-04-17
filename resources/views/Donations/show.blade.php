<div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-donation-tab" data-toggle="pill" href="#v-pills-donation" role="tab" aria-controls="true">Donante</a>
                <a class="nav-link" id="v-pills-contacto-tab" data-toggle="pill" href="#v-pills-contacto" role="tab" aria-controls="false">Contacto</a>
                <a class="nav-link" id="v-pills-descritions-tab" data-toggle="pill" href="#v-pills-descritions" role="tab" aria-controls="false">Descripción</a>

                
            </div>
        </div>

        <div class="col-9">
            
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane show active" id="v-pills-donation" role="tabpanel" aria-labelledby="v-pills-donation-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Nombre del Donante</th>
                                <td> 
                                    {{ $Donation->id }}&nbsp;
                                    {{ $Donation->name }}&nbsp;

                                    {{ $Donation->lastName }}
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="v-pills-contacto" role="tabpanel" aria-labelledby="v-pills-contacto-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Teléfono</th>
                                <td>{{ $Donation-> phone}}</td>
                            </tr>
                            <tr>
                                <th>Correo Electrónico</th>
                                <td>{{ $Donation-> mail}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="v-pills-descritions" role="tabpanel" aria-labelledby="v-pills-descritions-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Cantidad de donación</th>
                                <td>{{ $Donation-> quantity }}&nbsp;</td>
                            </tr>
                            <tr>
                                <th>Tipo de donación</th>
                                <td>{{ $Donation-> donationType }}</td>
                            </tr>
                            <tr>
                                <th>Descripción</th>
                                <td>{{ $Donation-> description}}</td>
                            </tr>
                            
                            <tr>
                                <th>Fecha relalizada la donación</th>
                                <td>{{ $Donation-> currentDate}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>