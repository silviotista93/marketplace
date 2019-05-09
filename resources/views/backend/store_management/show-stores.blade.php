@extends('backend.layout')

@section('header_page')
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Gestionar Tiendas</a>
            <a class="breadcrumb-item" href="{{ route('dashboard.store_management.shops') }}">Tiendas</a>
            <span class="breadcrumb-item active">Arturo Calle</span>
        </nav>
    </div>
    <div class="br-pagetitle">
        <i class="fas fa-store fa-4x"></i>
        <div>
            <h4>Arturo Calle</h4>
            <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
    </div>
@stop
@section('content')
    <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
        <div class="row row-sm mg-t-20">
            <div class="col-lg-12">
                <div class="card shadow-base bd-0 pd-20 ht-100p">
                    <div class="row ht-100p">
                        <div class="col-md-5">
                            <img src="/backend/img/arturocalle-logo-el-tesoro.png"
                                 class="wd-100p ht-100p object-fit-cover rounded" alt="Image">
                        </div><!-- col-5 -->
                        <div class="col-md-7 pd-y-10 pd-r-30 d-flex align-items-start flex-column">
                            <span class="tx-12 d-inline-block mg-b-10">Desde 19 Junio 2019</span>
                            <h5 class="tx-normal tx-roboto lh-3 mg-b-20"><a href="" class="tx-inverse hover-info">Arturo
                                    Calle</a></h5>
                            <span class="bg-success pd-y-3 pd-x-10 tx-white tx-11 tx-roboto" style="margin-bottom: 15px; font-size: 15px;">Activo</span>
                            <p class="tx-14 mg-b-20" style="text-align: justify">Inicio en el barrio Manrique de Medellín, allí nació Arturo Calle
                                el 13 de agosto de 1938. Con tan solo diez años de edad este paisa ya se había
                                convertido en un experto vendedor de frutas, hortalizas y flores en la plaza de mercado
                                en el barrio Robledo en Medellín.

                                Su juventud fue la consolidación de su audacia y sagacidad, a medida que crecía,
                                aumentaba su interés por involucrarse en diversos sectores de la economía. Fue así como
                                logró vincularse como mecánico industrial a Hilanderías Pepalfa, una fábrica dedicada a
                                la confección de medias, que podría definirse como su primer contacto con la industria
                                textil.</p>

                            <p class="tx-13 mg-b-20 mg-md-b-auto">
                                <a href="" class="tx-primary mg-r-5"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="" class="tx-info mg-r-5"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="" class="tx-danger mg-r-5"><i class="fab fa-pinterest fa-2x"></i></a>
                                <a href="" class="tx-danger"><i class="fab fa-instagram fa-2x"></i></a>
                                <a data-toggle="modal" data-target="#modal_info_legal" class="btn btn-warning tx-11 pd-y-12 tx-uppercase d-block tx-semibold tx-mont" style="margin-top: 15px;">Informacion Legal</a>
                            </p>

                            <div class="media mg-t-20 mg-b-0">
                            </div><!-- media -->
                        </div>
                    </div>
                    <div class="row row-xs">
                        <div class="col-sm-12 col-lg-3 d-flex align-items-start flex-column pd-r-20-force">
                            <h5 class="tx-inverse tx-roboto tx-normal mg-b-20">Productos más vendidos</h5>
                            <p class="tx-13 mg-b-20"></p>
                            <div class="mg-t-auto">
                                <a href="" class="btn btn-info tx-11 tx-spacing-1 tx-uppercase tx-semibold tx-mont pd-y-12 pd-x-30">Ir a la Tienda <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div><!-- col-3 -->
                        <div class="col-sm-6 col-lg-3 mg-t-20 mg-lg-t-0">
                            <div class="overlay">
                                <img src="https://via.placeholder.com/800" class="img-fluid" alt="">
                                <div class="overlay-body bg-black-5 d-flex align-items-start flex-column pd-20">
                                    <p class="tx-white mg-b-auto">
                                        Manhattan
                                        <span class="d-block mg-t-5 tx-12 op-8">New York</span>
                                    </p>
                                    <p class="mg-b-0">
                    <span class="tx-warning d-block">
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                    </span>
                                        <span class="tx-12 tx-white-8">4.9 Rating</span>
                                    </p>
                                </div><!-- overlay-body -->
                            </div><!-- overlay -->
                        </div><!-- col-3 -->
                        <div class="col-sm-6 col-lg-3 mg-t-20 mg-lg-t-0">
                            <div class="overlay">
                                <img src="https://via.placeholder.com/800" class="img-fluid" alt="">
                                <div class="overlay-body bg-black-5 d-flex align-items-start flex-column pd-20">
                                    <p class="tx-white mg-b-auto">
                                        Las Vegas
                                        <span class="d-block mg-t-5 tx-12 op-8">Nevada</span>
                                    </p>
                                    <p class="mg-b-0">
                    <span class="tx-warning d-block">
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                    </span>
                                        <span class="tx-12 tx-white-8">4.9 Rating</span>
                                    </p>
                                </div><!-- overlay-body -->
                            </div><!-- overlay -->
                        </div><!-- col-3 -->
                        <div class="col-sm-6 col-lg-3 mg-t-20 mg-sm-t-10 mg-lg-t-0">
                            <div class="overlay">
                                <img src="https://via.placeholder.com/800" class="img-fluid" alt="">
                                <div class="overlay-body bg-black-5 d-flex align-items-start flex-column pd-20">
                                    <p class="tx-white mg-b-auto">
                                        Illinois
                                        <span class="d-block mg-t-5 tx-12 op-8">Chicago</span>
                                    </p>
                                    <p class="mg-b-0">
                    <span class="tx-warning d-block">
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                      <i class="icon ion-star"></i>
                    </span>
                                        <span class="tx-12 tx-white-8">4.9 Rating</span>
                                    </p>
                                </div><!-- overlay-body -->
                            </div><!-- overlay -->
                        </div><!-- col-3 -->
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg-8">
                            <div class="card bd-0 shadow-base">
                                <div class="d-md-flex justify-content-between pd-25">
                                    <div>
                                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">How Engaged Our Users Daily</h6>
                                        <p>Past 30 Days — Last Updated Oct 14, 2017</p>
                                    </div>
                                    <div class="d-sm-flex">
                                        <div>
                                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Bounce Rate</p>
                                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">23.32%</h4>
                                            <span class="tx-12 tx-success tx-roboto">2.7% increased</span>
                                        </div>
                                        <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Page Views</p>
                                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">38.20%</h4>
                                            <span class="tx-12 tx-danger tx-roboto">4.65% decreased</span>
                                        </div>
                                        <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Time On Site</p>
                                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12:30</h4>
                                            <span class="tx-12 tx-success tx-roboto">1.22% increased</span>
                                        </div>
                                    </div><!-- d-flex -->
                                </div><!-- d-flex -->

                                <div class="pd-l-25 pd-r-15 pd-b-25">
                                    <div id="ch5" class="ht-250 ht-sm-300"></div>
                                </div>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">

                            <div class="card shadow-base bd-0 overflow-hidden">
                                <div class="pd-x-25 pd-t-25">
                                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1 mg-b-20">Storage Overview</h6>
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0">As of Today</p>
                                    <h1 class="tx-56 tx-light tx-inverse mg-b-0">755<span class="tx-teal tx-24">gb</span></h1>
                                    <p><span class="tx-primary">80%</span> of free space remaining</p>
                                </div><!-- pd-x-25 -->
                                <div id="ch6" class="ht-115 mg-r--1"></div>
                                <div class="bg-teal pd-x-25 pd-b-25 d-flex justify-content-between">
                                    <div class="tx-center">
                                        <h3 class="tx-lato tx-white mg-b-5">989<span class="tx-light op-8 tx-20">gb</span></h3>
                                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Total Space</p>
                                    </div>
                                    <div class="tx-center">
                                        <h3 class="tx-lato tx-white mg-b-5">234<span class="tx-light op-8 tx-20">gb</span></h3>
                                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Used Space</p>
                                    </div>
                                    <div class="tx-center">
                                        <h3 class="tx-lato tx-white mg-b-5">80<span class="tx-light op-8 tx-20">%</span></h3>
                                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-0 tx-white-8">Free Space</p>
                                    </div>
                                </div>
                            </div><!-- card -->
                        </div><!-- col-4 -->
                    </div><!-- row -->
                </div><!-- card -->
            </div>
        </div>
    </div>

    <div id="modal_info_legal" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Información Legal</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">

                </div>
            </div><!-- modal-dialog -->
        </div>
    </div>
@stop
