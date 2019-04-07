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
        <i class="fab fa-dropbox fa-4x"></i>
        <div>
            <h4>Agregar Productos</h4>
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
                        AGREGAR PRODUCTOS
                    ======================================-->
                    <div class="card-body">
                        <h6 class="br-section-label" style="margin-top: 0px !important;">Ingrese la información del
                            producto</h6>
                        <p class="br-section-text">Recurda todos los campos son necesarios</p>

                        <div id="wizard_add_products">
                            <h3>Información basica del producto</h3>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                        <div class="form-group">
                                            <label class="form-control-label">Nombre del Producto: <span
                                                    class="tx-danger">*</span></label>
                                            <input id="name" class="form-control" name="name"
                                                   placeholder="Nombre producto" type="text" required>
                                        </div><!-- form-group -->
                                        <div class="form-group">
                                            <label class="form-control-label">Descripción Corta: <span
                                                    class="tx-danger">*</span></label>
                                            <textarea id="short_description" name="short_description" rows="3"
                                                      class="form-control"
                                                      placeholder="Descripcion corta del producto"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Precio Compra: <span
                                                            class="tx-danger">*</span></label>
                                                    <input id="name" class="form-control" name="name"
                                                           placeholder="Precio Compra" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Porcentaje Ganancia: <span
                                                            class="tx-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-percentage"></i></span>
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="">
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Precio Venta: <span
                                                            class="tx-danger">*</span></label>
                                                    <input id="name" class="form-control" name="name"
                                                           placeholder="Precio Venta" type="text" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label class="form-control-label">Categoria: <span
                                                                class="tx-danger">*</span></label>
                                                        <select id="" class="form-control"
                                                                data-placeholder="Asignar Categoría">
                                                            <option label="Asignar Categoría"></option>
                                                            <option value="Firefox">Ropa</option>
                                                            <option value="Chrome">Zapatos</option>
                                                            <option value="Safari">Tecnología</option>
                                                            <option value="Opera">Accesorios</option>
                                                            <option value="Internet Explorer">Relojes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group pd-lg-t-30">
                                            <label class="form-control-label">Descripción del producto: <span
                                                    class="tx-danger">*</span></label>
                                            <div id="summernote">Hello, universe!</div>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <h3>Especificaciones del Producto</h3>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="form-control-label">Subcategoría: <span class="tx-danger">*</span></label>
                                                <select id="" class="form-control wd-250" data-placeholder="subcategoria">
                                                    <option label="Selecciona Subcategoria"></option>
                                                    <option value="Firefox">Ropa</option>
                                                    <option value="Chrome">Zapatos</option>
                                                    <option value="Safari">Tecnología</option>
                                                    <option value="Opera">Accesorios</option>
                                                    <option value="Internet Explorer">Relojes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h3>Payment Details</h3>
                            <section>
                                <p>The next and previous buttons help you to navigate through your content.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@push('js')
    <script>
        $(document).ready(function () {
            'use strict';
            $('#wizard_add_products').steps({
                headerTag: 'h3',
                bodyTag: 'section',
                autoFocus: true,
                titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
                onStepChanging: function (event, currentIndex, newIndex) {
                    if (currentIndex < newIndex) {
                        // Step 1 form validation
                        if (currentIndex === 0) {
                            var fname = $('#name').parsley();
                            var lname = $('#short_description').parsley();

                            if (fname.isValid() && lname.isValid()) {
                                return true;
                            } else {
                                fname.validate();
                                lname.validate();
                            }
                        }

                        // Step 2 form validation
                        if (currentIndex === 1) {
                            var email = $('#email').parsley();
                            if (email.isValid()) {
                                return true;
                            } else {
                                email.validate();
                            }
                        }
                        // Always allow step back to the previous step even if the current step is not valid.
                    } else {
                        return true;
                    }
                }
            });
            $('#summernote').summernote({
                height: 255,
                tooltip: false
            })
        });
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
