@extends('backend.layout')
@push('css')
<link rel="stylesheet" type="text/css" href="/backend/css/venobox.css" />
<style>
    .vbox-item img {
        width: 300px;
        height: 400px;
        margin: 0px auto;
        margin-top: 10px;
    }
</style>

@endpush
@section('header_page')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="http://localhost:8000/dashboard-root">Outlet</a>
        <a class="breadcrumb-item" href="#">Gestor Tienda</a>
        <a class="breadcrumb-item active" href="{{route('dashboard.store_management.request')}}">Solicitudes</a>
        <span class="breadcrumb-item active">Detalle solicitud</span>
    </nav>
</div>
<div class="br-pagetitle">
    <i class="fas fa-users fa-4x"></i>
    <div>
        <h4>Datos de solicitud de la tienda</h4>
        <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    </div>
</div>
<div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base widget-14 ht-100p">
                <!--=====================================
                                    LISTA DE tiendas
                                ======================================-->
                <form id="frmRequest" action="">
                        {{ method_field('PUT') }}
                        <input type="hidden" id="idRequest" name="idRequest" value="{{ $stores[0]->id }}" />
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col-6 themed-grid-col">
                                    <h4 class="card-title">Datos usuario</h4>
                                    <div>Nombre: <input name="name" style="border:none;background-color:white" disabled
                                            value="{{$stores[0]->users->name}} {{$stores[0]->users->last_name}}" />
                                    </div>
                                    <div>Email: <input name="email"
                                            style="border:none;background-color:white;min-width:90%" disabled
                                            value="{{$stores[0]->users->email}}"></div>
                                    <div>Numero Celular/Telefonico: {{$stores[0]->users->phone_1}} /
                                        {{$stores[0]->users->phone_2}} </div>
                                </div>
                                <div class="col-6 themed-grid-col">
                                    <h4 class="card-title">Datos Empresa</h4>
                                    <div>Nombre: <input name="nombreT" style="border:none;background-color:white" input
                                            type="text" value="{{$stores[0]->store_name}}" disabled></div>
                                    <div>Direccion: {{$stores[0]->adress_store}}</div>
                                    <div>Telefono: {{$stores[0]->phone_store}}</div>
                                    <div>Descripcion: {{$stores[0]->store_description}}</div>

                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Documentos de la tienda</h4>
                        <div class="row mb-3">
                            <div class="col-4 themed-grid-col">
                                <span>RUT:</span>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a id="firstlink" class="venobox vbox-item" data-gall="gall1"
                                        data-title="imagen-rut" href="{{ $stores[0]->rut }}">
                                        <img src="{{ $stores[0]->rut }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 themed-grid-col">
                                <span>Extracto bancario:</span>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a id="firstlink" class="venobox vbox-item" data-gall="gall1"
                                        data-title="imagen-extracto bancario" href="{{ $stores[0]->bank_statement }}">
                                        <img src="{{ $stores[0]->bank_statement }}">
                                    </a>
                                </div>

                            </div>
                            <div class="col-4 themed-grid-col">

                                <span>DNI:</span>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a id="firstlink" class="venobox vbox-item" data-gall="gall1"
                                        data-title="imagen-dni" href="{{ $stores[0]->dni_picture }}">
                                        <img src="{{ $stores[0]->dni_picture }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>


                            
                            <div class="form-selector">
                                <label>Observaciones:</label>
                                <textarea class="form-control z-depth-1" id="observacion" name="observacion" rows="3"
                                    placeholder="Realice un comentario de la tienda, o motivo del rechazo para enviar al email"></textarea>
                                <div id="error-observacion" class="text-danger msg-error"></div>
                            </div>
                            <br>
                            <button id="aceptar" class="btn btn-info">Aceptar</button>
                            <button id="rechazar" class="btn btn-danger">Rechazar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@stop
@push('js')
<script type="text/javascript" src="/backend/js/venobox.js"></script>
<script type="text/javascript" src="/backend/js/venobox.min.js"></script>
<script type="text/javascript" src="/common/store/request.js"></script>
<script type="text/javascript" src="/common/form.js"></script>

<script>
    $(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>



@endpush