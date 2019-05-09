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
            <a href="" class="nav-link {{request()->is('store-management/shops') ? 'active' : '' }}"><i class="fas fa-store" style="font-size: 16px !important;"></i>Tiendas</a>
            <a href="" class="nav-link"><i style="font-size: 16px !important;" class="fas fa-thumbs-up"></i> Destacadas</a>
            <a href="" class="nav-link"><i style="font-size: 16px !important;" class="fas fa-file-invoice"></i> Facturación</a>
        </nav>
    </div><!-- br-subleft -->
    <div class="br-pageheader pd-y-15 pd-md-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Gestionar Tiendas</a>
            <span class="breadcrumb-item active">Tiendas</span>
        </nav>
    </div>
    <div class="br-pagetitle">
        <i class="fas fa-store fa-4x"></i>
        <div>
            <h4>Tiendas</h4>
            <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
    </div>
@stop
@section('content')
    <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
        <div class="row row-sm mg-t-20">
            <div class="col-lg-12">
                    <div class="card shadow-base bd-0">
                        <div class="card-header pd-20 bg-transparent">
                            <h6 class="card-title tx-uppercase tx-12 mg-b-0">Todas las Tiendas</h6>
                        </div><!-- card-header -->
                        <table class="table table-responsive mg-b-0 tx-12">
                            <thead>
                            <tr class="tx-10">
                                <th class="wd-10p pd-y-5">&nbsp;</th>
                                <th class="pd-y-5">Tiendas</th>
                                <th class="pd-y-5 tx-right">Ventas</th>
                                <th class="pd-y-5">Ganancias</th>
                                <th class="pd-y-5 tx-center">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pd-l-20">
                                    <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                                </td>
                                <td class="valign-middle tx-right">3,345</td>
                                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span></td>
                                <td class="valign-middle tx-center">
                                    <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pd-l-20">
                                    <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                                </td>
                                <td class="valign-middle tx-right">720</td>
                                <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> </td>
                                <td class="valign-middle tx-center">
                                    <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pd-l-20">
                                    <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                                </td>
                                <td class="valign-middle tx-right">1,445</td>
                                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> </td>
                                <td class="valign-middle tx-center">
                                    <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pd-l-20">
                                    <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                                </td>
                                <td class="valign-middle tx-right">2,500</td>
                                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> </td>
                                <td class="valign-middle tx-center">
                                    <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pd-l-20">
                                    <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
                                    <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                                </td>
                                <td class="valign-middle tx-14 tx-right">223</td>
                                <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> </td>
                                <td class="valign-middle tx-center">
                                    <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="card-footer tx-12 pd-y-15 bg-transparent">
                            {{--<a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>--}}
                        </div><!-- card-footer -->
                    </div><!-- card -->
                <!-- col-6 -->
            </div>
        </div>
    </div>

    {{--<div id="modaldemo3" class="modal fade">--}}
        {{--<div class="modal-dialog modal-lg modal-dialog-centered" role="document">--}}
            {{--<div class="modal-content tx-size-sm">--}}
                {{--<div class="modal-header pd-x-20">--}}
                    {{--<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Todas las tiendas</h6>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body pd-20">--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="table-wrapper">--}}
                            {{--<table id="users-list" class="table display responsive nowrap">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th class="wd-20p">Nombre</th>--}}
                                    {{--<th class="wd-20p">Telefono</th>--}}
                                    {{--<th class="wd-20p">Telefono 1</th>--}}
                                    {{--<th class="wd-15p">Ciudad</th>--}}
                                    {{--<th class="wd-15p">Ventas</th>--}}
                                    {{--<th class="wd-10p">Más</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>Tiger</td>--}}
                                    {{--<td>Nixon</td>--}}
                                    {{--<td>System Architect</td>--}}
                                    {{--<td>2011/04/25</td>--}}
                                    {{--<td>$320,800</td>--}}
                                    {{--<td>t.nixon@datatables.net</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Garrett</td>--}}
                                    {{--<td>Winters</td>--}}
                                    {{--<td>Accountant</td>--}}
                                    {{--<td>2011/07/25</td>--}}
                                    {{--<td>$170,750</td>--}}
                                    {{--<td>g.winters@datatables.net</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Ashton</td>--}}
                                    {{--<td>Cox</td>--}}
                                    {{--<td>Junior Technical Author</td>--}}
                                    {{--<td>2009/01/12</td>--}}
                                    {{--<td>$86,000</td>--}}
                                    {{--<td>a.cox@datatables.net</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}

                    {{--</div><!-- modal-body -->--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-primary tx-size-xs">Save changes</button>--}}
                        {{--<button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div><!-- modal-dialog -->--}}
        {{--</div>--}}
    {{--</div>--}}
@stop
@push('js')
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

        });
    </script>
@endpush
