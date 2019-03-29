@extends('backend.layout')

@section('header_page')
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Gestor Perfiles</a>
            <span class="breadcrumb-item active">Todos los Usuarios</span>
        </nav>
    </div>
    <div class="br-pagetitle">
        <i class="fas fa-users fa-4x"></i>
        <div>
            <h4>Usuarios registrados</h4>
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
                        LISTA DE USUARIOS
                    ======================================-->
                    <div class="card-body">
                        <div class="card-title">Lista de Usuarios</div>
                        <div class="form-group">
                            <div class="table-wrapper">
                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-20p">Nombres</th>
                                        <th class="wd-20p">Apellidos</th>
                                        <th class="wd-20p">Email</th>
                                        <th class="wd-15p">Telefono 1</th>
                                        <th class="wd-15p">Estado</th>
                                        <th class="wd-10p">Mas Info</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Cristan Andres</td>
                                        <td>Salazar Castro</td>
                                        <td>casalazar@gmail.com</td>
                                        <td>312451221</td>
                                        <td>
                                            <span class="square-8 bg-success mg-r-5 rounded-circle"></span>Activo
                                        </td>
                                        <td class="text-center"><a href="#"
                                                                   class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"
                                                                   data-toggle="modal" data-target="#modal_info_profile">
                                                <div><i class="fas fa-edit"></i></div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Didier Enrique</td>
                                        <td>Ramirez Diaz</td>
                                        <td>didier@gmail.com</td>
                                        <td>311234512</td>
                                        <td>
                                            <span class="square-8 bg-danger mg-r-5 rounded-circle"></span>Inactivo
                                        </td>
                                        </td>
                                        <td class="text-center"><a href="#"
                                                                   class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"
                                                                   data-toggle="modal" data-target="#modal_info_profile">
                                                <div><i class="fas fa-edit"></i></div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Omar David</td>
                                        <td>Sanchez</td>
                                        <td>omar@gmail.com</td>
                                        <td>316123122</td>
                                        <td>
                                            <span class="square-8 bg-success mg-r-5 rounded-circle"></span>Activo
                                        </td>
                                        <td class="text-center"><a href="#"
                                                                   class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"
                                                                   data-toggle="modal" data-target="#modal_info_profile">
                                                <div><i class="fas fa-edit"></i></div>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_info_profile" class="modal fade effect-flip-horizontal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Información del Usuario</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-0">
                    <div class="card shadow-base bd-0 pd-20 ht-100p">
                        <div class="row ht-100p">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/600x800" class="wd-100p ht-50p object-fit-cover rounded" alt="Image">
                                <div class="pd-5">
                                    <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Roles Asignados</label>
                                    <ul class="list-unstyled tx-13 mg-t-5 mg-b-5 mg-md-b-auto">
                                        <li style="font-size: 13px;"><i class="fa fa-check mg-r-5 tx-success"></i>Super Admin</li>
                                        <li style="font-size: 13px;"><i class="fa fa-check mg-r-5 tx-success"></i>Vendedor</li>
                                        <li style="font-size: 13px;"><i class="fa fa-check mg-r-5 tx-success"></i>Bodega</li>
                                    </ul>
                                </div>
                            </div><!-- col-5 -->
                            <div class="col-md-8 pd-y-10 pd-r-30 d-flex align-items-start flex-column">
                                <h3 class="tx-normal tx-roboto lh-3 mg-b-10" style="color: #0c0c0d">Silvio Mauricio Gutierrez Quiñones</h3>
                                <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">Vendedor</p>
                                <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Información del Usuario</h6>

                                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefono 1</label>
                                <p class="tx-info mg-b-25">+57 318-7951410</p>
                                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefono 2</label>
                                <p class="tx-info mg-b-25">+57 311-3807162</p>
                                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email</label>
                                <p class="tx-inverse mg-b-25">silviotista93@gmail.com</p>
                            </div><!-- col-6 -->
                        </div><!-- row -->
                    </div><!-- card -->
                </div>
                <div class="modal-footer">
                    {{--<button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>--}}
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@stop
@push('js')
    <script>
        $(function () {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                "language": {

                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "search": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
@endpush
