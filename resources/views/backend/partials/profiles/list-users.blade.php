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
                            <div class="col-md-5">
                                <img src="https://via.placeholder.com/600x800" class="wd-100p ht-100p object-fit-cover rounded" alt="Image">
                            </div><!-- col-5 -->
                            <div class="col-md-7 pd-y-10 pd-r-30 d-flex align-items-start flex-column">
                                <h5 class="tx-normal tx-roboto lh-3 mg-b-10"><a href="" class="tx-inverse hover-info">Silvio Mauricio Gutierrez Quiñones</a></h5>
                                <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">Vendedor</p>
                                <p class="tx-14 mg-b-20">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy...</p>

                                <p class="tx-13 mg-b-20 mg-md-b-auto">
                                    <a href="" class="tx-info mg-r-10">22 Likes</a>
                                    <a href="" class="tx-info">3 Comments</a>
                                </p>

                                <div class="media mg-t-20 mg-b-0">
                                    <img src="https://via.placeholder.com/500" class="d-flex wd-40 rounded-circle mg-r-10" alt="Image">
                                    <div class="media-body">
                                        <h6 class="mg-b-5 tx-14"><a href="" class="tx-inverse">Raymond K. Davis</a></h6>
                                        <div class="tx-12 tx-gray-600">Technical Writer</div>
                                    </div><!-- media-body -->
                                </div><!-- media -->
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
