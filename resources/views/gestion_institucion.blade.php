@extends('layout.layout')

@section('panchito')
<style>
      .btn-sistema-naranja{
		    background-color: #F0AC3F;
		    color: white;
	    }
        .container-sistema{
            background-color: #f9f9f9;
        }
        .container-color{
            background-color: #FFFFFF;
        }
    </style>
    <section class="container-fluid container-sistema">
    <br>
    <div class="container-sm">
        <p class="text-center   fs-3 ">Gestion Institución</p>
        <ul class="breadcrumb">
                <li><a href="/Catalogos">  <h6 class="">Institución  </h6></a></li>
                <li>  <h6 class="text-uppercase"> . </h6></a></li>
                <li class="active "><h6> Nueva</h6> </li>
            </ul>
            
    </div>
            
        <div class="container-sm container-color" style="overflow-y: auto;">
        <br>
        <div class="home-content"></div>
        <div class="form-group container-sm">
        <br>
            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="txt_cedula_persona_juridica">Cédula de persona juríduca</label>
                    <input type="text" class="form-control border-warning" id="txt_cedula_persona_juridica" placeholder="Cédula de persona juríduca" data-bs-toggle="tooltip" data-bs-placement="top" title="Cédula de persona jurídica">
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="txt_razon_social">Razón social</label>
                    <input type="text" class="form-control border-warning" id="txt_razon_social" placeholder="Razón social">
                </div>
            </div>
            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="txt_nombre">Nombre</label>
                    <input type="text" class="form-control border-warning" id="txt_nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="txt_descripción">Descripción</label>
                    <textarea class="form-control border-warning" id="txt_descripción" placeholder="Descripción" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="txt_siglas">Siglas</label>
                    <input type="text" class="form-control border-warning" id="txt_siglas" placeholder="Siglas" data-bs-toggle="tooltip" data-bs-placement="top" title="Cédula de persona jurídica">
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="txt_url_sitio_web">URL sitio web</label>
                    <input type="text" class="form-control border-warning" id="txt_url_sitio_web" placeholder="URL sitio web">
                </div>
            </div>
            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="cbx_pais">País</label>
                    <select class=" form-control border-warning" id="cbx_pais" data-show-subtext="true" data-live-search="true">
                                <option>--Seleccione--</option>
                                <option data-subtext="Rep California">Pais</option>
                                <option data-subtext="Sen California">Bill Gordon</option>
                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                <option data-subtext="Rep Alaska">Don Young</option>
                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                    </select>
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="cbx_provincia">Provincia</label>
                    <select class=" form-control border-warning" id="cbx_provincia" data-show-subtext="true" data-live-search="true">
                                <option>--Seleccione--</option>
                                <option data-subtext="Rep California">Pais</option>
                                <option data-subtext="Sen California">Bill Gordon</option>
                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                <option data-subtext="Rep Alaska">Don Young</option>
                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="cbx_canton">Cantón</label>
                    <select class=" form-control border-warning" id="cbx_canton" data-show-subtext="true" data-live-search="true">
                                <option>--Seleccione--</option>
                                <option data-subtext="Rep California">Pais</option>
                                <option data-subtext="Sen California">Bill Gordon</option>
                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                <option data-subtext="Rep Alaska">Don Young</option>
                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                    </select>
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="cbx_distrito">Distrito</label>
                    <select class=" form-control border-warning" id="cbx_distrito" data-show-subtext="true" data-live-search="true">
                                <option>--Seleccione--</option>
                                <option data-subtext="Rep California">Pais</option>
                                <option data-subtext="Sen California">Bill Gordon</option>
                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                <option data-subtext="Rep Alaska">Don Young</option>
                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="cbx_barrio">Barrio</label>
                    <select class=" form-control border-warning" id="cbx_barrio" data-show-subtext="true" data-live-search="true">
                                <option>--Seleccione--</option>
                                <option data-subtext="Rep California">Pais</option>
                                <option data-subtext="Sen California">Bill Gordon</option>
                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                <option data-subtext="Rep Alaska">Don Young</option>
                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                    </select>
                </div>
                <div class="form-group col-xl-6 ">
                    <label for="txt_direccion">Descripción</label>
                    <textarea class="form-control border-warning" id="txt_direccion" rows="3"></textarea>
                </div>
            </div>

            <div class="row mb-3 container-sm">
                <div class="form-group col-xl-6 ">
                    <label for="txt_numero_oficina">Número de oficina</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span id="span_codigo_numero_oficina" class="input-group-text border-warning" id="basic-addon1">+506</span>
                        </div>
                        <input type="text" class="form-control border-warning" id="txt_numero_oficina" placeholder="Número de oficina" data-bs-toggle="tooltip" data-bs-placement="top" title="Cédula de persona jurídica">
                    </div> <!--  -->
                </div>
                <div class="form-group col-xl-6 ">
                <label for="txt_numero_fax">Número de fax</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span id="span_codigo_numero_fax" class="input-group-text border-warning" id="basic-addon1">+506</span>
                        </div>
                        <input type="text" class="form-control border-warning" id="txt_numero_fax" placeholder="Número de fax">
                    </div> <!--  -->
                    
                    
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto container-sm">
                <button class="btn btn-sistema-naranja  me-md-2 " type="button"> <i class='bx bx-save'></i> Guardar</button>
                <button class="btn  btn-sistema-naranja" type="button"> <i class='bx bx-left-arrow-circle'></i>  Atras</button>
            </div>

        </div>
        <br>
        <br>
    </div>
    </section>
@endsection
