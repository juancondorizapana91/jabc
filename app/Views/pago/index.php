<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div class="d-flex align-items-center me-3">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Inicio</h1>
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="javascript:;" class="text-muted text-hover-primary">Buscar Personas</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-row" id="kt_post">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="card">
                            <!-- <div class="row" id="grado_academico">
                                <div class="col-md-3 mt-1">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-linkedin waves-effect btn-rounded waves-light w-100"
                                            style="font-size: 10px;">
                                            <input class="grados" type="radio" name="grado_academico" id="grado_academico" value="5" autocomplete="off"> DIPLOMADO
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-1">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-linkedin waves-effect btn-rounded waves-light w-100"
                                            style="font-size: 10px;">
                                            <input class="grados" type="radio" name="grado_academico" id="grado_academico" value="4" autocomplete="off">
                                            ESPECIALIDAD
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-1">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-linkedin waves-effect btn-rounded waves-light w-100"
                                            style="font-size: 10px;">
                                            <input class="grados" type="radio" name="grado_academico" id="grado_academico" value="3" autocomplete="off"> MAESTRÍA
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-1">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-linkedin waves-effect btn-rounded waves-light w-100"
                                            style="font-size: 10px;">
                                            <input class="grados" type="radio" name="grado_academico" id="grado_academico" value="2" autocomplete="off">
                                            DOCTORADO
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-1">
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-linkedin waves-effect btn-rounded waves-light w-100"
                                            style="font-size: 10px;">
                                            <input class="grados" type="radio" name="grado_academico" id="grado_academico" value="1" autocomplete="off"> POST
                                            DOCTORADO
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <input type="hidden" name="id_grado_academico" id="id_grado_academico">
                            <hr>
                            <div class="row m-t-10 m-b-10">
                                <div class="col-lg-3">
                                    <label class="font-weight-bold" for="anio_titulacion">Año Titulación</label>
                                    <select class="form-select form-select-sm form-select-solid" name="gestion_titulacion" id="gestion_titulacion" data-control="select2" data-placeholder="Seleccione">
                                        <option>[TODOS]</option>
                                        <option value="En trámite">En trámite</option>
                                        <?php
                                        $inicio = date('Y');
                                        for ($i = 0; $i < 20; $i++) {
                                            echo '<option value="' . $inicio . '">' . $inicio . '</option>';
                                            $inicio--;
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <label class="font-weight-bold" for="id_tipo_programa">Profesión</label>
                                    <select class="form-select form-select-sm form-select-solid" name="id_profesiones_ocupaciones" id="id_profesiones_ocupaciones" data-control="select2" data-placeholder="Seleccione una opción">
                                        <option>[TODOS]</option>
                                        <?php
                                        foreach ($profesiones_ocupaciones as $key => $value) {
                                            echo '<option value="' . $value['id_profesiones_ocupaciones'] . '">' . $value['descripcion'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="font-weight-bold" for="numero_version">Universidad</label>
                                    <select class="form-select form-select-sm form-select-solid" name="id_universidades_normales" id="id_universidades_normales" data-control="select2" data-placeholder="Seleccione una opción">
                                        <option>[TODOS]</option>
                                        <?php
                                        foreach ($universidades_normales as $key => $value) {
                                            echo '<option value="' . $value['id_universidades_normales'] . '">' . $value['nombre'] . ' - ' . $value['id_departamento'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top: 20px;">
                <div class="card-body">
                    <div class="">
                        <table id="tbl_descuento" class="table table-striped table-row-bordered gy-5 gs-7 border rounded" style="width: 100%">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                    <th>#</th>
                                    <th>Ci</th>
                                    <th>Nombre</th>
                                    <th>Nacimiento</th>
                                    <th>Celular.</th>
                                    <th>Correo</th>
                                    <th>Titulación</th>
                                    <th>Tipo</th>
                                    <th>Universidad</th>
                                    <th>Profesión</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="10" class="text-center">Sin datos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>