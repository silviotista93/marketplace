@extends('backend.layout')
@push('css')
    <link href="{{asset("common/fonts/styles.css")}}" rel="stylesheet">
@endpush
@section('header_page')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
        <a class="breadcrumb-item" href="#">Productos</a>
        <span class="breadcrumb-item active">Administrar Productos</span>
    </nav>
</div>
<div class="br-pagetitle">
    <i class="fab fa-dropbox fa-4x"></i>
    <div>
        <h4>Lista de productos registrados</h4>
        <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    </div>
</div>
@stop
@section('content')
<div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base widget-14 ht-100p" id="list-product">
                <list-product></list-product>
            </div>
        </div>
    </div>
</div>
@stop @push('js')
<script src="/js/empresa/producto/product-list.js"></script>
@endpush
