<div id="spinner" class="spinner spinner-primary spinner-lg mr-15"></div>
<button type="button" class="btn btn-primary spinner spinner-white spinner-right">
    Primary
</button>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Personal Registrado</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Personal agregado</span>
                </h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-md btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <span class="svg-icon">
                            <svg class=" h-30px w-30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Acciones rápidas</div>
                        </div>
                        <div class="separator mb-2 opacity-75"></div>
                        <div class="menu-item px-3 py-2">
                            <a href="#" class="menu-link px-3" id="agregar-personal" data-bs-toggle="modal">Agregar personal</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table id="table" class="table align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th>Nº</th>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <!-- <th>Usuario</th> -->
                                <th>Fecha Nacimiento</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th></th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="" aria-hidden="true">
    <div id="modal-dialog" class="modal-dialog modal-dialog-centered mw-650px">
        <div id="modal-content" class="modal-content rounded">
            <div id="modal-header" class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div id="modal-body" class="modal-body scroll-y px-10 px-lg-10 pt-0 pb-10">
                <form id="modal_form" class="form" action="#">
                    <div class="row">
                        <div class="col-8 mb-5 text-center">
                            <h1 id="modal-title" class="mb-3">Agregar Personal</h1>
                            <div class="text-gray-400 fw-bold fs-5">Escriba correctamente los
                                <a href="#" class="fw-bolder link-primary">Datos</a>.
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <!-- <input type="radio" class="btn-check" name="account_type" value="" checked="checked" id="sede" /> -->
                            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="sede">
                                <span class="svg-icon svg-icon-3x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-md-6">
                            <label for="ci" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">CI</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="ci" type="text" class="form-control form-control-solid" name="ci" placeholder="Cedula de Identidad" />
                        </div>
                        <div class="col-md-6">
                            <label for="expedido" class="required fs-6 fw-bold mb-2">Expedido</label>
                            <select id="expedido" name="expedido" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Expedido" name="team_assign">
                                <option value="" selected></option>
                                <option value="LP">LP</option>
                                <option value="CH">CH</option>
                                <option value="CB">CB</option>
                                <option value="OR">OR</option>
                                <option value="PT">PT</option>
                                <option value="TJ">TJ</option>
                                <option value="SC">SC</option>
                                <option value="BE">BE</option>
                                <option value="PD">PD</option>

                            </select>
                        </div>
                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-md-4">
                            <label for="nombre" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nombre(s)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="nombre" type="text" class="form-control form-control-solid" placeholder="Nombre" name="nombre" />
                        </div>
                        <div class="col-md-4">
                            <label for="paterno" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Paterno</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="paterno" type="text" class="form-control form-control-solid" placeholder="Paterno " name="paterno" />
                        </div>
                        <div class="col-md-4">
                            <label for="materno" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Materno</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="materno" type="text" class="form-control form-control-solid" placeholder="Materno" name="materno" />
                        </div>

                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-md-6 fv-row">
                            <label for="fecha_nacimiento" class="required fs-6 fw-bold mb-2">Fecha Nacimiento</label>
                            <div class="position-relative d-flex align-items-center">
                                <div class="position-absolute ms-4"><i class="las la-calendar-alt fs-1"></i></div>
                                <input id="fecha_nacimiento" class="form-control form-control-solid ps-12 flatpickr-input" placeholder="año / mes / dia " name="fecha_nacimiento" />
                            </div>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label for="genero" class="required fs-6 fw-bold mb-2">Genero</label>
                            <select id="genero" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione genero" name="genero">
                                <option value="" selected></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>

                            </select>
                        </div>

                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-md-5">
                            <label for="estado_civil" class="required fs-6 fw-bold mb-2">Estado Civil</label>
                            <select id="estado_civil" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione estado" name="estado_civil">
                                <option value=""></option>
                                <option value="1">Casado</option>
                                <option value="2">Soltero</option>
                                <option value="3">Divorciado</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <label for="domicilio" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Domicilio</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="domicilio" type="text" class="form-control form-control-solid" placeholder="Domicilio" name="domicilio" />
                        </div>

                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-md-7">
                            <label for="correo" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Correo</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="correo" type="text" class="form-control form-control-solid" placeholder="Ingrese el electronico" name="correo" />
                        </div>
                        <div class="col-md-5 ">
                            <label for="celular" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Celular</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="celular" type="text" class="form-control form-control-solid" placeholder="Ingrese # de celular" name="celular" />
                        </div>


                    </div>
                    <div class="row d-flex mb-8 fv-row fv-plugins-icon-container">
                        <div class="col-sm-12">
                            <label for="lugar_nacimiento" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Lugar de Nacimiento</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input id="lugar_nacimiento" type="text" class="form-control form-control-solid" placeholder="Ingrese el lugar de nacimiento" name="lugar_nacimiento" />
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="modal_cancel" class="btn btn-white me-3">Cancelar</button>
                        <button type="submit" id="modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Agregar</span>
                            <span class="indicator-progress">Espere por favor...
                                <span class="spinner-border spinner-border align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>