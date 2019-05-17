@extends('frontend.layout')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="/frontend/css/input_image.css" />
<link rel="stylesheet" type="text/css" href="/frontend/css/gijgo.min.css" />


@endpush

    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Contact</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Solicitud registro de Tienda</span>
        </h2>
        <!-- ../page heading-->
        <div id="contact" class="page-content page-contact">
            <div id="message-box-conact"></div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading">Datos de representante legal</h3>
                    <form  id="frmAddStore" action="{{ route('add-store') }}" enctype="multipart/form-data" >
                        @csrf
                        
                        <div class="contact-form-box">

                            <div class="form-selector">
                                <label>Nombres:</label>
                                <input type="text" class="form-control input-sm" id="name" name="name" placeholder="Ingrese sus nombres" >
                                <div id="error-name" class="text-danger msg-error"></div>
                            </div>
                            <div class="form-selector">
                                <label>Apellidos:</label>
                                <input type="text" class="form-control input-sm" id="apellido" name="apellido" placeholder="Ingrese sus apellidos">
                                <div id="error-apellido" class="text-danger msg-error"></div>
                            </div>
                            <div class="form-selector">
                                <label>Email:</label>
                                <input type="text" class="form-control input-sm" name="email" id="email" placeholder="Ingrese su email">
                                <div id="error-email" class="text-danger msg-error"></div>
                            </div>
                           
                            
                            <div class="form-selector">
                                <label>Celular:</label>
                                <input type="text" class="form-control input-sm" id="phone" name="phone" placeholder="Ingrese su numero de celular" >
                                <div id="error-phone" class="text-danger msg-error"></div>
                            </div>
                            <div class="form-selector">
                                <label>Telefono(opcional):</label>
                                <input type="text" class="form-control input-sm" id="phone2" name="phone2" placeholder="Ingrese su numero de telefono o celular">
                                <div id="error-phone2" class="text-danger msg-error"></div>
                            </div>
                            <div class="form-selector">                                                   
                                <h3 class="page-subheading">Datos de la tienda</h3>
                                <div class="form-selector">
                                    <label>Nombre de la tienda:</label>
                                    <input type="text" class="form-control input-sm" id="nombreT" name="nombreT" placeholder="Ingrese el nombre de su tienda">
                                    <div id="error-nombreT" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <label>Telefono:</label>
                                    <input type="text" class="form-control input-sm" id="store_phone" name="store_phone" placeholder="Ingrese el numero de telefono de su tienda">
                                    <div id="error-store_phone" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="pais">Pais:</label>
                                    <select class="form-control" id="pais" name="pais">
                                      <option>Seleccione un pais</option>                         @forelse ($countries as $c)
                                          
                                    <option value="{{$c->id}}">{{$c->name}}</option>                                     
                                      @empty
                                      <option>No hay paises registrados</option>
                                      @endforelse            
                                    </select>
                                  </div>

                                  <div id="ciudad">


                                  </div>
                                <div class="form-selector">
                                    <label>Direccion:</label>
                                    <input type="text" class="form-control input-sm" id="direccion" name="direccion" placeholder="Ingrese la direccion de su tienda ">
                                    <div id="error-nombreT" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <label>Descripcion:</label>                                   
                                    <textarea class="form-control z-depth-1" id="descripcion" name="descripcion" rows="3"  placeholder="Ingrese una breve descripcion acerca de lo que ofrece su tienda"></textarea>
                                    <div id="error-nombreT" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <label>Rut:</label>
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename"
                                            disabled="disabled" id="imagenRut" name="imagenRut">
                                        <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear"
                                                style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                                    name="imagenRut" id="imagenRut" /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                    <div id="error-imagenRut" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <label>Extracto bancario:</label>
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename"
                                            disabled="disabled" id="imagenE" name="imagenE">
                                        <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear"
                                                style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                                    name="imagenE" id="imagenE" /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                    <div id="error-imagenE" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <label>Dni:</label>
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename"
                                            disabled="disabled" id="imagenDni" name="imagenDni">
                                        <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear"
                                                style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                                    name="imagenDni" id="imagenDni" /> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div>
                                    <div id="error-imagenDni" class="text-danger msg-error"></div>
                                </div>
                                <div class="form-selector">
                                    <button id="btn-send-contact" class="btn">Send</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Information</h3>
                <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed
                    laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed
                    vestibulum. Vestibulum bibendum suscipit mattis.</p>
                <br>
                <ul>
                    <li>Praesent nec tincidunt turpis.</li>
                    <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                    <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                </ul>
                <br>
                <ul class="store_info">
                    <li><i class="fa fa-home"></i>Our business address is 1063 Freelon Street San Francisco, CA
                        95108</li>
                    <li><i class="fa fa-phone"></i><span>+ 021.343.7575</span></li>
                    <li><i class="fa fa-phone"></i><span>+ 020.566.6666</span></li>
                    <li><i class="fa fa-envelope"></i>Email: <span><a
                                href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">support@kutetheme.com</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

</form>

@stop

@push('js')
<script type="text/javascript" src="/frontend/js/input_image.js"></script>
<script type="text/javascript" src="/frontend/js/gijgo.min.js"></script>
<script type="text/javascript" src="/common/store/add-store.js"></script>
<script src="/common/form.js"></script>
<script type="text/javascript">
      $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });; 
</script>

<script>

$('#box-vertical-megamenus').remove();
</script>

@endpush