<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div class="d-flex align-items-center me-3">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Inicio</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="index.html" class="text-muted text-hover-primary">Inscripción</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
						<!--begin::Nav-->
						<div class="stepper-nav py-5 mt-5">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<h3 class="stepper-title">1. Sede</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">2. Datos Personales</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">3. Programa</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">4. Detalles de Pago</h3>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">5. Completado</h3>
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
						<!--begin::Form-->
						<form class="mx-auto mw-900px w-100 pt-15 pb-10" novalidate="novalidate"
							id="kt_create_account_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 d-flex justify-content-center">
												<!--begin::Option-->
												<input type="radio" class="btn-check" name="account_type"
													value="personal" checked="checked"
													id="kt_create_account_form_account_type_personal" />
												<label
													class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10"
													for="kt_create_account_form_account_type_personal">
													<!--begin::Svg Icon | path: icons/duotone/Contacts/User.svg-->
													<span class="svg-icon svg-icon-3x me-5">
														<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Home.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path
																	d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
																	fill="#000000" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<!--end::Svg Icon-->
													<!--begin::Info-->
													<span class="d-block fw-bold text-start">
														<span class="text-dark fw-bolder d-block fs-4 mb-2">EL
															ALTO</span>
														<span class="text-gray-400 fw-bold fs-6">Sede de
															Inscripción</span>
													</span>
													<!--end::Info-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 1-->

							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="mb-1 pb-lg-3">
										<div class="text-gray-400 fw-bold fs-6">
											Ingrese información personal del usuario
										</div>
									</div>
									<!--end::Heading-->

									<!--begin::Input group-->
									<div class="row mb-10 mt-0">
										<!--begin::CI-->
										<div class="col-md-8 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">
												Carnet de Identidad
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Ingrese su ci del usuario"></i>
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="12" placeholder="C.I." name="ci" id="ci" />
												</div>
											</div>
										</div>
										<!--end::CI-->

										<!--begin::Expedido-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Expedido</span>
											</label>
											<div class="position-relative">
												<select name="expedido" id="expedido"
													class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Expedido">
													<option></option>
													<option value="CH">Chuquisaca</option>
													<option value="LP">La Paz</option>
													<option value="CB">Cochabamba</option>
													<option value="OR">Oruro</option>
													<option value="PT">Potosí</option>
													<option value="TJ">Tarija</option>
													<option value="SC">Santa Cruz</option>
													<option value="BE">Beni</option>
													<option value="PD">Pando</option>
												</select>
											</div>
										</div>
										<!--end::Expedido-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Nombre-->
										<div class="col-md-4 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">Nombre(s)</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="Nombres" name="nombre" id="nombre" />
												</div>
											</div>
										</div>
										<!--end::Nombre-->

										<!--begin::Paterno-->
										<div class="col-md-4 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">Apellido Paterno</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="Ap. paterno" name="paterno" id="paterno" />
												</div>
											</div>
										</div>
										<!--end::Paterno-->

										<!--begin::Materno-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Materno</span>
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="Ap. materno" name="materno" id="materno" />
												</div>
											</div>
										</div>
										<!--end::Materno-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10 mt-0">

										<!--begin::Celular-->
										<div class="col-md-5 fv-row">
											<label class="fs-6 fw-bold form-label mb-2">
												Fecha Nacimiento
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="date" class="form-control form-control-solid"  name="fecha_nacimiento" id="fecha_nacimiento" />
												</div>
											</div>
										</div>
										<!--end::Celular-->

										<!--begin::Celular-->
										<div class="col-md-5 fv-row">
											<label class="fs-6 fw-bold form-label mb-2 required">
												Celular
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="Celular" name="celular" id="celular" />
												</div>
											</div>
										</div>
										<!--end::Celular-->

										<!--begin::Celular-->
										<div class="col-md-2 fv-row">
											<label class="fs-6 fw-bold form-label mb-2 required">
												Sexo
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<select class="form-select form-select-solid" name="genero" id="genero">
														<option></option>
														<option value="F" selected>F</option>
														<option value="M">M</option>
													</select>
												</div>
											</div>
										</div>
										<!--end::Celular-->

									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10 mt-0">
										<!--begin::Profesión-->
										<div class="col-md-12 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												Profesión
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<select class="form-select form-select-solid" name="id_profesiones_ocupaciones" id="id_profesiones_ocupaciones" data-control="select2" data-placeholder="Seleccione una opción">
														<option></option>
														<?php
															foreach ($profesiones_ocupaciones as $key => $value) {
																echo '<option value="'.$value['id_profesiones_ocupaciones'].'">'.$value['descripcion'].'</option>';
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<!--end::Profesión-->					
									</div>
									<!--end::Input group-->


									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Universidad-->
										<div class="col-md-7 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">Universidad de titulación</label>
											<div class="row fv-row">
												<div class="col-12">
													<select class="form-select form-select-solid" name="id_universidades_normales" id="id_universidades_normales" data-control="select2" data-placeholder="Seleccione una opción">
														<option></option>
														<?php
															foreach ($universidades_normales as $key => $value) {
																echo '<option value="'.$value['id_universidades_normales'].'">'.$value['nombre'].' - '. $value['id_departamento'].'</option>';
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<!--end::Universidad-->

										<!--begin::Tipo-->
										<div class="col-md-3 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">Tipo Universidad</label>
											<div class="row fv-row">
												<div class="col-12">
													<select class="form-select form-select-solid" name="tipo_universidad" id="tipo_universidad" data-control="select2"
													data-hide-search="true" data-placeholder="Tipo">
														<option></option>
														<option value="ESPECIAL">ESPECIAL</option>
														<option value="PÚBLICA">PÚBLICA</option>
														<option value="PRIVADA">PRIVADA</option>
														<option value="TÉCNICO">TÉCNICO</option>
													</select>
												</div>
											</div>
										</div>
										<!--end::Tipo-->

										<!--begin::Año de titulación-->
										<div class="col-md-2 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Titulación</span>
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<select name="gestion_titulacion" id="gestion_titulacion"
													class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Gestión">
														<option></option>
														<option value="En trámite">En trámite</option>
														<?php
															$inicio = date('Y');
															for ($i=0; $i < 20; $i++) { 
																echo '<option value="'.$inicio.'">'.$inicio.'</option>';
																$inicio--;
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<!--end::Año de titulación-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 2-->

							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">

									<!--begin::Heading-->
									<div class="pb-10 pb-lg-5">
										<h4 class="fw-bolder text-dark">Detalles del programa</h2>
									</div>
									<!--end::Heading-->

									<!--begin::Nombre Programa-->
									<div class="fv-row mb-10">
										<label class="form-label required">Nombre de Programa</label>
										<select class="form-select form-select-solid" name="nombre_programa" id="nombre_programa" data-control="select2" data-placeholder="Seleccione un programa">
											<option></option>
											<?php
												foreach ($programas as $key => $value) {
													echo '<option value="'.$value['id_planificacion_programa'].'">'.$value['nombre_programa'].' - grado académico:'. $value['descripcion_grado_academico'].'  sede:'. $value['denominacion_sede'].' = Inicio: '. $value['fecha_inicio'].'  Fin: '. $value['fecha_fin'].' gestión: '. $value['gestion'].'</option>';
												}
											?>
										</select>
									</div>
									<!--end::Nombre Programa-->

									<!--begin::Grado Académico-->
									<div class="row mb-10">
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center form-label">
												<span>Grado Académico</span>
											</label>
											<input name="grado_academico" id="grado_academico"
												class="form-control form-control-lg form-control-solid" readonly/>
										</div>
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center form-label">
												<span>Fecha Inicio</span>
											</label>
											<input name="fecha_inicio" id="fecha_inicio"
												class="form-control form-control-lg form-control-solid" readonly/>
										</div>
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center form-label">
												<span>Fecha Fin</span>
											</label>
											<input name="fecha_fin" id="fecha_fin"
												class="form-control form-control-lg form-control-solid" readonly/>
										</div>
									</div>
									<!--end::Grado académico-->

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Gestión-->
										<div class="col-md-6 fv-row">
											<label class="form-label">Gestión</label>
											<select name="gestion_programa" id="gestion_programa"
												class="form-select form-select-lg form-select-solid" data-control="select2"
												data-placeholder="Seleccione" data-allow-clear="true"
												data-hide-search="true">
												<option></option>
												<?php
													$inicio = date('Y');
													for ($i=0; $i < 20; $i++) { 
														echo '<option value="'.$inicio.'">'.$inicio.'</option>';
														$inicio--;
													}
												?>
											</select>
										</div>
										<!--end::Gestión-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 3-->

							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
										<h2 class="fw-bolder text-dark">Detalles de Pago</h2>
										<div class="text-gray-400 fw-bold fs-6">Ingrese los detalles de pago
										</div>
									</div>
									<!--end::Heading-->

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Costo Matrícula-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Costo Matrícula</span>
											</label>
											<input type="text" class="form-control form-control-solid"
											name="costo_matricula" id="costo_matricula" disabled/>
										</div>
										<!--end::Costo Matrícula-->

										<!--begin::Costo Colegiatura-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Costo Colegiatura</span>
											</label>
											<input type="text" class="form-control form-control-solid"
											name="costo_colegiatura" id="costo_colegiatura" disabled/>
										</div>
										<!--end::Costo Colegiatura-->

										<!--begin::Costo Colegiatura-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Costo Total</span>
											</label>
											<input type="text" class="form-control form-control-solid"
											name="costo_total" id="costo_total" disabled/>
										</div>
										<!--end::Costo Colegiatura-->
									</div>
									<!--end::Input group-->
									<hr>

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Código pago-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Código Pago</span>
											</label>
											<input type="text" class="form-control form-control-solid bg-success text-white"
											name="codigo_pago" id="codigo_pago" readonly/>
										</div>
										<!--end::Código pago-->

										<!--begin::Monto Pago-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Monto Pago</span>
											</label>
											<input type="number" class="form-control form-control-solid"
											name="monto_pago" id="monto_pago"/>
										</div>
										<!--end::Monto Pago-->

										<!--begin::Deuda Total-->
										<div class="col-md-4 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Deuda Total</span>
											</label>
											<input type="text" class="form-control form-control-solid bg-danger text-white"
											name="deuda_total" id="deuda_total" readonly/>
										</div>
										<!--end::Deuda Total-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Fecha pago-->
										<div class="col-md-6 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Fecha Pago</span>
											</label>
											<input type="date" class="form-control form-control-solid"
											name="fecha_deposito" id="fecha_deposito" value="<?= date("Y/m/d")?>"/>
										</div>
										<!--end::Fecha pago-->
										<!--begin::Tipo pago-->
										<div class="col-md-6 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Tipo Pago</span>
											</label>
											<select name="id_tipo_pago" id="id_tipo_pago"
												class="form-select form-select-lg form-select-solid" data-control="select2"
												data-placeholder="Seleccione" data-allow-clear="true"
												data-hide-search="true">
												<option></option>
												<?php
												foreach ($tipo_pago as $key => $value) {
													echo '<option value="'.$value['id_tipo_pago'].'">'.$value['descripcion_tipo_pago'].' </option>';
												}
											?>
											</select>
										</div>
										<!--end::Tipo pago-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Descripción Pago-->
										<div class="col-md-6 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Descripción Pago</span>
											</label>
											<textarea class="form-control form-control-solid" name="descripcion_pago" id="descripcion_pago" rows="1"></textarea>
										</div>
										<!--end::Descripción Pago-->

										<!--begin::Descripción Pago-->
										<div class="col-md-6 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span>Observación Pago</span>
											</label>
											<textarea class="form-control form-control-solid" name="observacion_pago" id="observacion_pago" rows="1"></textarea>
										</div>
										<!--end::Descripción Pago-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="fv-row mb-8">
										<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
											Imagen Comprobante
										</label>
										<!--begin::Dropzone-->
										<div class="dropzone" id="imagen_comprobante">
											<!--begin::Message-->
											<div class="dz-message needsclick">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
												<span class="svg-icon svg-icon-3hx svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 12.6L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L8 12.6H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V12.6H16Z" fill="black" />
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-4">
													<h4 class="dfs-3 fw-bolder text-gray-900 mb-1">Suelta los archivos aquí o haz clic para subirlos.</h3>
													<span class="fw-bold fs-4 text-muted">Sube hasta 3 archivos</span>
												</div>
												<!--end::Info-->
											</div>
										</div>
										<!--end::Dropzone-->
									</div>
									<!--end::Input group-->

								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-2 pb-lg-10">
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark">Completado correctamente!</h2>
										<!--end::Title-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="mb-0">
										<!--begin::Text-->
										<div class="fs-6 text-gray-600 mb-5">Click en botón Registrar para registrar la inscripción</div>
										<div id="datos_pago_inscripcion">
											
										</div>
										<!--end::Text-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="mr-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3"
										data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/stockholm/Navigation/Left-2.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3"
														transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
														x="14" y="7" width="2" height="10" rx="1" />
													<path
														d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
														fill="#000000" fill-rule="nonzero"
														transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--> Atrás
									</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary me-3"
										data-kt-stepper-action="submit">
										<span class="indicator-label">Registrar
											<!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
													height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<rect fill="#000000" opacity="0.5"
															transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
															x="7.5" y="7.5" width="2" height="9" rx="1" />
														<path
															d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
															fill="#000000" fill-rule="nonzero"
															transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="indicator-progress">Espere por favor...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
										Continuar
										<!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
										<span class="svg-icon svg-icon-4 ms-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.5"
														transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
														x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path
														d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
														fill="#000000" fill-rule="nonzero"
														transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->

</div>
<!--end::Content-->