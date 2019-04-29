@extends('backend.layout')
@section('header_page')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
        <a class="breadcrumb-item" href="#">Gestor Categorías</a>
        <span class="breadcrumb-item active">Administrar Categorías</span>
    </nav>
</div>
<div class="br-pagetitle">
    <i class="fas fa-users fa-4x"></i>
    <div>
        <h4>Categorías</h4>
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
                    <button class="btn btn-primary btn-oblong mg-b-10 pull-right float-right" data-toggle="modal" data-target="#add_categories">Agregar Categoría
                        </button>
                    <div class="form-group">
                        <div class="table-wrapper">
                            <table id="manage_categories" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-20p">Categoria</th>
                                        <th class="wd-20p">Imagen Categoria</th>
                                        <th class="wd-20p">Actualización</th>
                                        <th class="wd-20p">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- table-wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- inicio modal -->
<div id="add_categories" class="modal fade effect-slide-in-bottom">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Categoría</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <form id="frmAddCategory" action="{{ route('add-category') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                
            <div class="modal-body pd-25">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                                <input type="text" id="category" name="category" value="{{ old('category') }}" class="form-control" placeholder="Ingrese Categoría">
                            </div>
                            <div id="error-category" class="text-danger msg-error"></div>
                            <!-- input-group -->
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                                <input type="text" id="icono" name="icono" value="{{ old('icono') }}" class="form-control" placeholder="Ingrese un icono">
                            </div>
                            <div id="error-icono" class="text-danger msg-error"></div>
                            
                            <div id="" class="">Iconos disponibles <a><i class="icon-eye" class="btn btn-primary btn-oblong mg-b-10 pull-right float-right" data-toggle="modal" data-target="#icon-list"></i></a></div>
                            <!-- input-group -->
                        </div>
                       
                        <div class="form-group">
                            <div class="ht-200 bg-gray-200 mg-t-20 d-flex align-items-center justify-content-center">
                                <input type="file" id="imagen" name="imagen" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                <label for="imagen" class="if-outline if-outline-info">
                                        <i class="icon ion-ios-upload-outline tx-24"></i>
                                        <span>Imagen de categoria...</span>
                                    </label>
                            </div>
                            <div id="error-imagen" class="text-danger msg-error"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button  class="btn btn-info btn-oblong bd-0 pull-left">Crear Categoria</button>

            </div>
        </form>
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->

<!-- inicio modal update-->
<div id="update_categories" class="modal fade effect-slide-in-bottom">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agregar Categoría</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <form id="frmUpdateCategory" action="{{ route('update-category') }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            
                <input type="hidden" value="" id="id_category" name="id_category"/>
            <div class="modal-body pd-25">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                                <input type="text" id="categoryu" name="category" value="{{ old('category') }}" class="form-control" placeholder="Ingrese Categoría">
                            </div>
                            <div id="error-categoryu" class="text-danger msg-error"></div>
                            <!-- input-group -->
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                                <input type="text" id="iconou" name="icono" value="{{ old('icono') }}" class="form-control" placeholder="Ingrese un icono">
                            </div>
                            <div id="error-iconou" class="text-danger msg-error"></div>
                            
                            <div id="" class="">Iconos disponibles <a><i class="icon-eye" class="btn btn-primary btn-oblong mg-b-10 pull-right float-right" data-toggle="modal" data-target="#icon-list"></i></a></div>
                            <!-- input-group -->
                        </div>
                        <div class="form-group">
                            <div class="ht-200 bg-gray-200 mg-t-20 d-flex align-items-center justify-content-center">
                                <input type="file" id="imagenu" name="imagen" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                <label for="imagenu" class="if-outline if-outline-info">
                                        <i class="icon ion-ios-upload-outline tx-24"></i>
                                        <span>Imagen de categoria...</span>
                                    </label>
                            </div>
                            <div id="error-imagen" class="text-danger msg-error"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button  class="btn btn-info btn-oblong bd-0 pull-left">Actualizar Categoria</button>

            </div>
        </form>
        </div>
    </div>
    <!-- modal-dialog -->
</div>

{{-- modal iconos --}}
<!-- inicio modal update-->
<div id="icon-list" class="modal fade effect-slide-in-bottom">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Iconos disponibles</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <body>
                <div class="container">
                 
                  <ul class="glyphs css-mapping">
                    <li>
                      <div class="icon icon-bag"></div>
                      <input type="text" readonly="readonly" value="bag">
                    </li>
                    <li>
                      <div class="icon icon-tv"></div>
                      <input type="text" readonly="readonly" value="tv">
                    </li>
                    <li>
                      <div class="icon icon-shoes-snickers-streamline"></div>
                      <input type="text" readonly="readonly" value="shoes-snickers-streamline">
                    </li>
                    <li>
                      <div class="icon icon-t-shirt"></div>
                      <input type="text" readonly="readonly" value="t-shirt">
                    </li>
                    <li>
                      <div class="icon icon-futbol-o"></div>
                      <input type="text" readonly="readonly" value="futbol-o">
                    </li>
                    <li>
                      <div class="icon icon-info"></div>
                      <input type="text" readonly="readonly" value="info">
                    </li>
                    <li>
                      <div class="icon icon-shop"></div>
                      <input type="text" readonly="readonly" value="shop">
                    </li>
                    <li>
                      <div class="icon icon-clipboard-notes"></div>
                      <input type="text" readonly="readonly" value="clipboard-notes">
                    </li>
                    <li>
                      <div class="icon icon-eye"></div>
                      <input type="text" readonly="readonly" value="eye">
                    </li>
                    <li>
                      <div class="icon icon-question-circle"></div>
                      <input type="text" readonly="readonly" value="question-circle">
                    </li>
                  </ul>
                  
              
            
                
            <div class="modal-footer">
               

            </div>
        
        </div>
    </div>
{{-- fin modal iconos --}}


@stop
 @push('js')

 
<script>
    $(function () {

            'use strict';

            $('#manage_categories').DataTable({
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
                },
                ajax: {
                    url: "{{ route('datatables.categories.admin') }}",
                    method:"POST",
                    data: {}

                },
                columns: [
                {
                    data:'category',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
                },
                {
                    data:'category_picture',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',

                    render: function(data, status, category){

                            return `<img src="${category.category_picture}" width="100px" />`

                    }

                },
                {
                    data:'updated_at',
                    defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
                },
                {
                 render: function(data, status, category){

                    return `<a href="#" class="update btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10" data-toggle="modal"                            data-target="#update_categories" data-info='${JSON.stringify(category)}'>
                    <div><i class="fas fa-edit" ></i></div>
                    </a><a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"
                           data-toggle="modal"
                           data-target="#modal_info_profile">
                         <div><i class="fas fa-trash-alt"></i></div>
                    </a>`

                 }
                }


                ]



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

        });

</script>
<script src="/common/categories/add-category.js"></script>
<script src="/common/form.js"></script>




@endpush
