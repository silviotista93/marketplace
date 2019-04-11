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
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombres" value="{{ $users[0]->name }}" disabled>
                                    <div id="error-name" class="text-danger msg-error"></div>
                                </div>
                                <!-- col -->
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Apellidos: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Apellidos" value="{{ $users[0]->last_name }}"
                                        disabled>
                                    <div id="error-last_name" class="text-danger msg-error"></div>
                                </div>
                                <!-- col -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Telefono 1: <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="phone_1" name="phone_1" class="form-control" placeholder="Telefono 1" value="{{ $users[0]->phone_1 }}"
                                        disabled>
                                    <div id="error-phone_1" class="text-danger msg-error"></div>
                                </div>
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <label class="form-control-label">Telefono 2: <span class="">Opcional</span></label>
                                    <input type="text" id="phone_2" name="phone_2" class="form-control" placeholder="Telefono 2" value="{{ $users[0]->phone_2 }}"
                                        disabled>
                                    <div id="error-phone_2" class="text-danger msg-error"></div>
                                </div>
                                <!-- col -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- form-group -->
                        <div class="form-group">
                            <div class="row row-sm">
                                <div class="col-sm">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="{{ $users[0]->email }}"
                                        disabled>
                                    <div id="error-email" class="text-danger msg-error"></div>
                                </div>
                                <!-- col -->
                            </div>
                            <!-- row -->
                        </div>
                        <!--=====================================
                            ASIGNAR ROLES
                        ======================================-->
                        <div class="form-group mg-t-30 mg-b-0">
                            <div class="row row-sm">
                                <div class="col-sm mg-t-20 mg-sm-t-0">
                                    <div class="card-title">Marca roles a asignar</div>
                                    @foreach ($users[0]->roles as $role)
                                    <label class="ckbox">
                                                <li style="font-size: 16px;"><i class="fa fa-check mg-r-5 tx-success"></i>{{$role->name}}</li>
                                            {{-- <input value="{{$role->id}}" type="checkbox" id="roles" name="roles[]" disabled >
                                            <span class="tx-13">{{$role->name}}</span> --}}
                                        </label> @endforeach
                                    <div id="error-roles" class="text-danger msg-error"></div>
                                </div>

                            </div>
                        </div>
                        <div class="m-demo__preview">
                            <!-- CAMBIAR LA CONTRASEÑA DEL USUARIO, PERO PRIMERO SE VALIDA SI EL USUARIO ES NO ES DE ALGUNA RED SOCIAL -->
                        <form id="frmUpdateUser" method="post" action="{{route('update-user')}}" enctype="multipart/form-data">
                                    @csrf {{method_field('PUT')}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group m-form__group ">
                                            <label for="exampleInputPassword1">Actualizar Contraseña</label>
                                            <input type="password" name="password" class="form-control m-input" id="exampleInputPassword1" placeholder="Actualizar Contraseña">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group m-form__group ">
                                            <label for="exampleInputPassword1">Confirmar Contraseña</label>
                                            <input type="password" name="password_confirmation" class="form-control m-input" id="exampleInputPassword1" placeholder="Confirmar Contraseña">

                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <input type="file" id="imagen" name="imagen" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                        <label for="imagen" class="if-outline if-outline-info" style="margin-left: 8%;">
                                                            <i class="icon ion-ios-upload-outline tx-24"></i>
                                                            <span>Cambiar imagen...</span>
                                                        </label>

                                        <div id="error-imagen" class="text-danger msg-error"></div>

                                    </div>
                                </div>
                                <!--=====================================
                                    BOTON actualizar usuario
                                ======================================-->
                                <div class="card-footer mg-t-auto">
                                    <button class="btn btn-info btn-oblong bd-0 pull-right">Actualizar Usuario</button>
                                </div>
                            </form>
                        </div>
                    </div>
               
            </div>
            <!-- card -->
        </div>
        <!-- col-6 -->
    </div>
    <!-- row -->
</div>


@stop @push('js')
<script src="/common/form.js"></script>
<script src="/common/users/add-user.js"></script>

<script>
   $('.inputfile').each(function () {
                var $input = $(this),
                    $label = $input.next('label'),
                    labelVal = $label.html();

                $input.on('change', function (e) {
                    var fileName = '';

                    if (this.files && this.files.length > 1)
                        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                    else if (e.target.value)
                        fileName = e.target.value.split('\\').pop();

                    if (fileName)
                        $label.find('span').html(fileName);
                    else
                        $label.html(labelVal);
                });

                // Firefox bug fix
                $input
                    .on('focus', function () {
                        $input.addClass('has-focus');
                    })
                    .on('blur', function () {
                        $input.removeClass('has-focus');
                    });
            });

</script>


@endpush