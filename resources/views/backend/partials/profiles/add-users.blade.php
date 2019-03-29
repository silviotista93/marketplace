@extends('backend.layout')

@section('header_page')
    <!--=====================================
        HEADER
    ======================================-->

    <!-- ATAJOS -->
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Gestor Perfiles</a>
            <span class="breadcrumb-item active">Agregar Usuario</span>
        </nav>
    </div>
    <!-- TITULO DEL MODULO -->
    <div class="br-pagetitle">
        <i class="fas fa-user-plus fa-4x"></i>
        <div>
            <h4>Agrega un nuevo usuario</h4>
            <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
    </div>
@stop

@section('content')
    <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
        <div class="row row-sm mg-t-20">
            <div class="col-lg-12">
                <div class="card bd-0 shadow-base widget-14 ht-100p">
                    <!--=====================================
                        INFORMACIÓN DEL USUARIO A CREAR
                    ======================================-->
                    <div class="card-body">
                        <div class="card-title">Información del Usuario</div>
                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm">
                                    <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Nombres">
                                </div><!-- col -->
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Apellidos: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Apellidos">
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- form-group -->

                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Telefono 1: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" name="phone_2" class="form-control" placeholder="Telefono 1">
                                </div>
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Telefono 2: <span class="">Opcional</span></label>
                                    <input type="text" name="phone_1" class="form-control" placeholder="Telefono 2">
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- form-group -->
                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email address">
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <!--=====================================
                            ASIGNAR ROLES
                        ======================================-->
                        <div class="form-group mg-t-30 mg-b-0">
                            <div class="row row-sm">
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <div class="card-title">Marca roles a asignar</div>
                                    <label class="ckbox">
                                        <input type="checkbox">
                                        <span class="tx-13">Administrador</span>
                                    </label>
                                    <label class="ckbox">
                                        <input type="checkbox">
                                        <span class="tx-13">Vendedor</span>
                                    </label>
                                    <label class="ckbox">
                                        <input type="checkbox">
                                        <span class="tx-13">Bodega</span>
                                    </label>
                                </div>
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <div class="form-layout form-layout-1" style="border: 1px solid #23BF08; !important;">
                                        <p>Enviaremos un correo electrónico con la credenciales de acceso para el nuevo usuario :)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================================
                        BOTON CREAR USUARIO
                    ======================================-->
                    <div class="card-footer mg-t-auto">
                        <button class="btn btn-info btn-oblong bd-0 pull-right">Crear Usuario</button>
                    </div>
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
@stop
