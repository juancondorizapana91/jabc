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
								<h3 class="stepper-title">Sede</h3>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Datos Personales</h3>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Programa</h3>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Detalles de Pago</h3>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<h3 class="stepper-title">Completado</h3>
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
													maxlength="4" placeholder="C.I." name="card_cvv" />
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
												<select name="card_expiry_month"
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
													maxlength="4" placeholder="Nombres" name="card_cvv" />
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
													maxlength="4" placeholder="Ap. paterno" name="card_cvv" />
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
													maxlength="4" placeholder="Ap. materno" name="card_cvv" />
												</div>
											</div>
										</div>
										<!--end::Materno-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="row mb-10 mt-0">
										<!--begin::Celular-->
										<div class="col-md-4 fv-row">
											<label class="fs-6 fw-bold form-label mb-2">
												Celular
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="Celular" name="card_cvv" />
												</div>
											</div>
										</div>
										<!--end::Celular-->

										<!--begin::Profesión-->
										<div class="col-md-8 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												Profesión
											</label>
											<div class="row fv-row">
												<div class="col-12">
													<select class="form-select form-select-solid" data-control="select2" data-placeholder="Seleccione una opción">
														<option></option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
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
													<select class="form-select form-select-solid" data-control="select2" data-placeholder="Seleccione una opción">
														<option></option>
														<option value="1">UPEA</option>
														<option value="2">UMSA</option>
													</select>
												</div>
											</div>
										</div>
										<!--end::Universidad-->

										<!--begin::Tipo-->
										<div class="col-md-3 fv-row">
											<label class="required fs-6 fw-bold form-label mb-2">Tipo</label>
											<div class="row fv-row">
												<div class="col-12">
													<select name="card_expiry_month"
													class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Tipo">
														<option></option>
														<option value="Especial">Especial</option>
														<option value="Público">Público</option>
														<option value="Privado">Privado</option>
														<option value="Técnico">Técnico</option>
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
													<select name="card_expiry_month"
													class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Gestión">
														<option></option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="En trámite">En trámite</option>
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
										<select class="form-select form-select-solid" data-control="select2" data-placeholder="Seleccione un programa">
											<option></option>
											<option value="1">UPEA</option>
											<option value="2">UMSA</option>
										</select>
									</div>
									<!--end::Nombre Programa-->

									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-flex align-items-center form-label">
											<span class="required">Shortened Descriptor</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
												data-bs-trigger="hover" data-bs-html="true"
												data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input name="business_descriptor"
											class="form-control form-control-lg form-control-solid"
											value="KEENTHEMES" />
										<!--end::Input-->
										<!--begin::Hint-->
										<div class="form-text">Customers will see this shortened version of your
											statement descriptor</div>
										<!--end::Hint-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="form-label required">Corporation Type</label>
										<!--end::Label-->
										<!--begin::Input-->
										<select name="business_type"
											class="form-select form-select-lg form-select-solid" data-control="select2"
											data-placeholder="Select..." data-allow-clear="true"
											data-hide-search="true">
											<option></option>
											<option value="1">S Corporation</option>
											<option value="1">C Corporation</option>
											<option value="2">Sole Proprietorship</option>
											<option value="3">Non-profit</option>
											<option value="4">Limited Liability</option>
											<option value="5">General Partnership</option>
										</select>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--end::Label-->
										<label class="form-label">Business Description</label>
										<!--end::Label-->
										<!--begin::Input-->
										<textarea name="business_description"
											class="form-control form-control-lg form-control-solid" rows="3"></textarea>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-0">
										<!--begin::Label-->
										<label class="fs-6 fw-bold form-label required">Contact Email</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input name="business_email"
											class="form-control form-control-lg form-control-solid"
											value="corp@support.com" />
										<!--end::Input-->
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
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark">Billing Details</h2>
										<!--end::Title-->
										<!--begin::Notice-->
										<div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
											<a href="#" class="text-primary fw-bolder">Help Page</a>.
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
											<span class="required">Name On Card</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Specify a card holder's name"></i>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder=""
											name="card_name" value="Max Doe" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter card number" name="card_number"
												value="4111 1111 1111 1111" />
											<!--end::Input-->
											<!--begin::Card logos-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-5">
												<img src="metronic/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
												<img src="metronic/assets/media/svg/card-logos/mastercard.svg" alt=""
													class="h-25px" />
												<img src="metronic/assets/media/svg/card-logos/american-express.svg" alt=""
													class="h-25px" />
											</div>
											<!--end::Card logos-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Col-->
										<div class="col-md-8 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row fv-row">
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_month"
														class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_year"
														class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Year">
														<option></option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
														<option value="2031">2031</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-4 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">CVV</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Enter a card CVV code"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="CVV" name="card_cvv" />
												<!--end::Input-->
												<!--begin::CVV icon-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-3">
													<!--begin::Svg Icon | path: icons/stockholm/Shopping/Credit-card.svg-->
													<span class="svg-icon svg-icon-2hx">
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<rect fill="#000000" opacity="0.3" x="2" y="5"
																	width="20" height="14" rx="2" />
																<rect fill="#000000" x="2" y="8" width="20"
																	height="3" />
																<rect fill="#000000" opacity="0.3" x="16" y="14"
																	width="4" height="2" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::CVV icon-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<label class="fs-6 fw-bold form-label">Save Card for further
												billing?</label>
											<div class="fs-7 fw-bold text-gray-400">If you need more info, please check
												budget planning</div>
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1"
												checked="checked" />
											<span class="form-check-label fw-bold text-gray-400">Save Card</span>
										</label>
										<!--end::Switch-->
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
									<div class="pb-8 pb-lg-10">
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark">Your Are Done!</h2>
										<!--end::Title-->
										<!--begin::Notice-->
										<div class="text-gray-400 fw-bold fs-6">If you need more info, please
											<a href="authentication/sign-in/basic.html"
												class="link-primary fw-bolder">Sign In</a>.
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="mb-0">
										<!--begin::Text-->
										<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much
											an art as it is a science and probably warrants its own post, but for all
											advise is with what works for your great &amp; amazing audience.</div>
										<!--end::Text-->
										<!--begin::Alert-->
										<!--begin::Notice-->
										<div
											class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
													viewBox="0 0 24 24" version="1.1">
													<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
													<rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
													<rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1">
												<!--begin::Content-->
												<div class="fw-bold">
													<h4 class="text-gray-800 fw-bolder">We need your attention!</h4>
													<div class="fs-6 text-gray-600">To start using great tools, please,
														please
														<a href="#" class="fw-bolder">Create Team Platform</a>
													</div>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
										<!--end::Alert-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-15">
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
										<span class="indicator-label">Submit
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
										<span class="indicator-progress">Please wait...
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