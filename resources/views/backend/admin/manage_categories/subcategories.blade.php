@extends('backend.layout')

@section('header_page')
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Gestor Subcategorias</a>
            <span class="breadcrumb-item active">Administrar Subcategorías</span>
        </nav>
    </div>
    <div class="br-pagetitle">
        <i class="fas fa-sitemap fa-4x"></i>
        <div>
            
            <h4>Subcategorías</h4>
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
                        LISTA DE CATEGORIAS
                    ======================================-->
                    <div class="card-body">
                        <button class="btn btn-primary btn-oblong mg-b-10 pull-right float-right" data-toggle="modal"
                                data-target="#add_categories">Agregar Subcategoría
                        </button>
                        <div class="form-group">
                            <div class="table-wrapper">
                                <table id="manage_subcategories" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-20p">Sub Categoria</th>
                                        <th class="wd-20p">Imagen Categoria</th>
                                        <th class="wd-20p">Actualización</th>
                                        <th class="wd-20p">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal inicio -->
    <div id="add_categories" class="modal fade effect-slide-in-bottom">
        <div class="modal-dialog" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Subcategoría</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="frmAddSubCategory" action="{{ route('add-sub-category') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="modal-body pd-25">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="text" name="subcategory" id="subcategory" value="{{ old('subcategory') }}"
                                           class="form-control" placeholder="Ingrese Subcategoría">
                                </div>
                                <div id="error-subcategory" class="text-danger msg-error"></div>
                                <!-- input-group -->
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <select id="tipo" name="tipo" class="form-control" data-placeholder="Asignar tipo">
                                        <option label="Asignar tipo">Seleccione un tipo</option>
                                        @foreach ($tipo as $t)
                                    <option label="Asignar tipo" value="{{ $t->id }}" >{{$t->type}}</option>
                                        
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div id="error-tipo" class="text-danger msg-error"></div>
                            </div> 
                            <div class="form-group">
                                <div
                                    class="ht-200 bg-gray-200 mg-t-20 d-flex align-items-center justify-content-center">
                                    <input type="file" name="imagen" id="imagen"
                                           class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                    <label for="imagen" class="if-outline if-outline-info">
                                        <i class="icon ion-ios-upload-outline tx-24"></i>
                                        <span>Imagen de subcategoria...</span>
                                    </label>
                                </div>
                                <div id="error-imagen" class="text-danger msg-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-info btn-oblong bd-0 pull-left">Crear Sub Categoria</button>
                </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->


    <!-- inicio modal actualizar -->

    <div id="update_subcategories" class="modal fade effect-slide-in-bottom">
        <div class="modal-dialog" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Subcategoría</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="frmUpdateSubCategory" action="{{ route('update-sub-category') }}" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id_subcategory" id="id_subcategory" value="1">
                <div class="modal-body pd-25">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="text" name="subcategory" id="subcategoryu" value="{{ old('subcategory') }}"
                                           class="form-control" placeholder="Ingrese Subcategoría">
                                </div>
                                <div id="error-subcategoryu" class="text-danger msg-error"></div>
                                <!-- input-group -->
                            </div>  
                            <div class="form-group">
                                <div class="">
                                    <select id="tipo" name="tipo" class="form-control" data-placeholder="Asignar tipo">
                                        <option label="Asignar tipo">Seleccione un tipo</option>
                                        
                                        @foreach ($tipo as $t)
                                        
                                        <option label="Asignar tipo" value="{{ $t->id }}" >{{$t->type}}</option>
                                       
                                        
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div id="error-tipo" class="text-danger msg-error"></div>
                            </div>                     
                            <div class="form-group">
                                <div
                                    class="ht-200 bg-gray-200 mg-t-20 d-flex align-items-center justify-content-center">
                                    <input type="file" name="imagen" id="imagenu"
                                           class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                    <label for="imagenu" class="if-outline if-outline-info">
                                        <i class="icon ion-ios-upload-outline tx-24"></i>
                                        <span>Imagen de subcategoria...</span>
                                    </label>
                                </div>
                                <div id="error-imagenu" class="text-danger msg-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-info btn-oblong bd-0 pull-left">Actualizar Sub Categoria</button>
                </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal actualizar -->

  
@stop
@push('js')
<script src="/common/categories/add-sub-category.js"></script>
 <script src="/common/form.js"></script>

    <script>
        $(function () {
            'use strict';

            $('#manage_subcategories').DataTable({
                responsive: true,

                ajax: {
                    url: "{{ route('datatables.subcategories.admin') }}",
                    method:"POST",
                    data: {}

                },
                columns: [
                {
                    data:'sub_category',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
                },
                {
                    data:'sub_category_picture',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',

                    render: function(data, status, category){

                            return `<img src="${category.sub_category_picture}" width="100px" />`
     
                    }

                },
                
                {
                    data:'updated_at',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
                },
                {
                 render: function(data, status, subcategory){

                    return `<a href="#" class=" update btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10" data-toggle="modal"                            data-target="#update_subcategories" data-info='${JSON.stringify(subcategory)}'>
                    <div><i class="fas fa-edit"></i></div>
                    </a><a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"
                           data-toggle="modal"
                           data-target="#">
                         <div><i class="fas fa-trash-alt"></i></div>
                    </a>`
                         
                 }
                }


                ]

                ,
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

            'use strict';

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
            $('#select_categorias').select2({
                containerCssClass: 'select2-for-dark',
                minimumResultsForSearch: Infinity, // disabling search
                placeholder: 'Asignar Categoría'
            });
        });

    </script>
@endpush
