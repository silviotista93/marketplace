@extends('backend.layout')

@section('header_page')
<div class="br-subleft">
    {{--<h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">Filter Users</h6>--}}

    {{--<div class="mg-t-20 pd-x-10 mg-b-40">
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter name of user">
            </div><!-- form-group -->
            <div class="form-group">
                <input type="text" class="form-control form-control-inverse tx-13" placeholder="Enter location of user">
            </div><!-- form-group -->
            <button class="btn btn-info btn-block tx-uppercase tx-10 tx-mont tx-spacing-2 tx-medium">Filter List</button>
        </div>--}}

    <h6 class="tx-uppercase tx-10 tx-mont tx-spacing-1 mg-t-10 pd-x-10 tx-white-7">Gestionar Tiendas</h6>

    <nav class="nav br-nav-mailbox flex-column">
        <a href="" class="nav-link {{request()->is('store-management/request') ? 'active' : '' }}"><i
                style="font-size: 16px !important;" class="fas fa-check"></i>Aprovadas</a>
        <a href="" class="nav-link"><i style="font-size: 16px !important;" class="fas fa-clock"></i>Pendientes</a>
        <a href="" class="nav-link"><i style="font-size: 16px !important;" class="fas fa-times"></i>Rechazadas</a>
    </nav>
</div><!-- br-subleft -->
<div class="br-pageheader pd-y-15 pd-md-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
        <a class="breadcrumb-item" href="#">Gestionar Tiendas</a>
        <span class="breadcrumb-item active">Solicitudes</span>
    </nav>
</div>
<div class="br-pagetitle">
    <i class="fas fa-hands-helping fa-4x"></i>
    <div>
        <h4>Solicitudes Aprovadas</h4>
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
                            LISTA DE TIENDAS
                        ======================================-->
                <div class="card-body">
                    <div class="card-title">Lista de Solicitudes</div>
                    <div class="form-group">

                        <div class="table-wrapper">
                            <table id="store-list" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-20p">#</th>
                                        <th class="wd-20p">Representante Legal</th>
                                        <th class="wd-20p">Nombre de la Tienda</th>
                                        <th class="wd-20p">Fecha de solicitud</th>
                                        <th class="wd-15p">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
@push('js')
<script>
    const ruta = "{{route('detalle-solicitud',"")}}"+'/';
</script>    
<script>
    $(function(){
            'use strict';

            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

            $(document).on('mouseover', function(e){
                e.stopPropagation();
                if($('body').hasClass('collapsed-menu')) {
                    var targ = $(e.target).closest('.br-sideleft').length;
                    if(targ) {
                        $('body').addClass('expand-menu');

                        // show current shown sub menu that was hidden from collapsed
                        $('.show-sub + .br-menu-sub').slideDown();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.removeClass('d-lg-none');
                        menuText.removeClass('op-lg-0-force');

                    } else {
                        $('body').removeClass('expand-menu');

                        // hide current shown menu
                        $('.show-sub + .br-menu-sub').slideUp();

                        var menuText = $('.menu-item-label,.menu-item-arrow');
                        menuText.addClass('op-lg-0-force');
                        menuText.addClass('d-lg-none');
                    }
                }
            });

            // Showing sub left menu
            $('#showSubLeft').on('click', function(){
                if($('body').hasClass('show-subleft')) {
                    $('body').removeClass('show-subleft');
                } else {
                    $('body').addClass('show-subleft');
                }
            });


            'use strict';

$('#store-list').DataTable({
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
        url: "{{ route('datatables.solicitud.store') }}",
        method:"POST",
        data: {},
    },
    columns: [
        {
            data:'id',
            defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
            
        },
    {
        data: '',
        render: function(data, status, store){  

                  return `<p> ${store.users.name} ${store.users.last_name} <p/>`
                    
              },
        defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',        

    },
    {
        data:'store_name',
        defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
    },
    {
        data:'updated_at',
        defaultContent: '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
    },
    {        
        render: function(data, status, store){
            
        return `<a href="${ruta+store.id}" class="update btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10">
        <div><i class="fa fa-eye" ></i></div>
        </a>`

     }
    }


    ]



});

        });
</script>
@endpush