@extends('backend.layout')

@section('header_page')
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard.admin') }}">Outlet</a>
            <a class="breadcrumb-item" href="#">Productos</a>
            <span class="breadcrumb-item active">Administrar Productos</span>
        </nav>
    </div>
    <div class="br-pagetitle">
        <i class="fas fa-users fa-4x"></i>
        <div>
            <h4>Productos</h4>
            <p class="mg-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
    </div>

@stop

@section('content')
@stop
@push('js')
    <script>
        $(function () {

            new Dropzone('.dropzone', {
                url: '/images',
                acceptedFiles: 'image/*',
                maxFilesize: 2,
                maxFiles: 5,
                paramName: 'image',
               /* headers: {
                    'X-CSRF-TOKEN': ''
                },
                success: function (file, response) {
                    $('#inputDBImageAddProject').val(response);
                    $('#img_add_proyect').attr('src',response);
                }*/

            });

            Dropzone.autoDiscover = false;

        });

    </script>
@endpush
