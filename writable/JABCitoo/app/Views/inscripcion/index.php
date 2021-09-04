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
													<h3 class="stepper-title">Account Type</h3>
												</div>
												<!--end::Step 1-->
												<!--begin::Step 2-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<h3 class="stepper-title">Account Info</h3>
												</div>
												<!--end::Step 2-->
												<!--begin::Step 3-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<h3 class="stepper-title">Business Info</h3>
												</div>
												<!--end::Step 3-->
												<!--begin::Step 4-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<h3 class="stepper-title">Billing Details</h3>
												</div>
												<!--end::Step 4-->
												<!--begin::Step 5-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<h3 class="stepper-title">Completed</h3>
												</div>
												<!--end::Step 5-->
											</div>
											<!--end::Nav-->
											<!--begin::Form-->
											<form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form">
												<!--begin::Step 1-->
												<div class="current" data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bolder d-flex align-items-center text-dark">Choose Account Type
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
															<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Row-->
															<div class="row">
																<!--begin::Col-->
																<div class="col-lg-6">
																	<!--begin::Option-->
																	<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
																		<!--begin::Svg Icon | path: icons/duotone/Contacts/User.svg-->
																		<span class="svg-icon svg-icon-3x me-5">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17 6C17 8.76142 14.7614 11 12 11C9.23858 11 7 8.76142 7 6C7 3.23858 9.23858 1 12 1C14.7614 1 17 3.23858 17 6Z" fill="#121319" />
																				<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M18.818 14.1248C18.2016 13.4101 17.1428 13.4469 16.3149 13.9001C15.0338 14.6013 13.5635 15 12 15C10.4365 15 8.96618 14.6013 7.68505 13.9001C6.85717 13.4469 5.79841 13.4101 5.182 14.1248C3.82222 15.7014 3 17.7547 3 20V21C3 22.1045 3.89543 23 5 23H19C20.1046 23 21 22.1045 21 21V20C21 17.7547 20.1778 15.7014 18.818 14.1248Z" fill="#191213" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Info-->
																		<span class="d-block fw-bold text-start">
																			<span class="text-dark fw-bolder d-block fs-4 mb-2">Personal Account</span>
																			<span class="text-gray-400 fw-bold fs-6">If you need more info, please check it out</span>
																		</span>
																		<!--end::Info-->
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6">
																	<!--begin::Option-->
																	<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
																		<!--begin::Svg Icon | path: icons/duotone/Business/Briefcase.svg-->
																		<span class="svg-icon svg-icon-3x me-5">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.25" d="M2 10C2 8.34315 3.34315 7 5 7H19C20.6569 7 22 8.34315 22 10V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V10Z" fill="#12131A" />
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M9 4C8.44772 4 8 4.44772 8 5V8C8 8.55228 7.55228 9 7 9C6.44772 9 6 8.55228 6 8V5C6 3.34315 7.34315 2 9 2H15C16.6569 2 18 3.34315 18 5V8C18 8.55228 17.5523 9 17 9C16.4477 9 16 8.55228 16 8V5C16 4.44772 15.5523 4 15 4H9Z" fill="#12131A" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Info-->
																		<span class="d-block fw-bold text-start">
																			<span class="text-dark fw-bolder d-block fs-4 mb-2">Corporate Account</span>
																			<span class="text-gray-400 fw-bold fs-6">Create corporate account to mane users</span>
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
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bolder text-dark">Account Info</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
															<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center form-label mb-3">Specify Team Size
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i></label>
															<!--end::Label-->
															<!--begin::Row-->
															<div class="row mb-2" data-kt-buttons="true">
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
																		<input type="radio" class="btn-check" name="account_team_size" value="1-1" />
																		<span class="fw-bolder fs-3">1-1</span>
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
																		<input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10" />
																		<span class="fw-bolder fs-3">2-10</span>
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
																		<input type="radio" class="btn-check" name="account_team_size" value="10-50" />
																		<span class="fw-bolder fs-3">10-50</span>
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Option-->
																	<label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
																		<input type="radio" class="btn-check" name="account_team_size" value="50+" />
																		<span class="fw-bolder fs-3">50+</span>
																	</label>
																	<!--end::Option-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Hint-->
															<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
															<!--end::Hint-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="form-label mb-3">Team Account Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-0 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center form-label mb-5">Select Account Plan
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i></label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="mb-0">
																<!--begin:Option-->
																<label class="d-flex flex-stack mb-5 cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin::Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label">
																				<!--begin::Svg Icon | path: icons/duotone/Business/Bank.svg-->
																				<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.25" d="M4 10H8V17H10V10H14V17H16V10H20V17C21.1046 17 22 17.8954 22 19V20C22 21.1046 21.1046 22 20 22H4C2.89543 22 2 21.1046 2 20V19C2 17.8954 2.89543 17 4 17V10Z" fill="#12131A" />
																						<path d="M2 7.35405C2 6.53624 2.4979 5.80083 3.25722 5.4971L11.2572 2.2971C11.734 2.10637 12.266 2.10637 12.7428 2.2971L20.7428 5.4971C21.5021 5.80083 22 6.53624 22 7.35405V7.99999C22 9.10456 21.1046 9.99999 20 9.99999H4C2.89543 9.99999 2 9.10456 2 7.99999V7.35405Z" fill="#12131A" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end::Icon-->
																		<!--begin::Description-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder text-gray-800 text-hover-primary fs-5">Company Account</span>
																			<span class="fs-6 fw-bold text-gray-400">Use images to enhance your post flow</span>
																		</span>
																		<!--end:Description-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" name="account_plan" value="1" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
																<!--begin:Option-->
																<label class="d-flex flex-stack mb-5 cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin::Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label">
																				<!--begin::Svg Icon | path: icons/duotone/Charts/Doughnut.svg-->
																				<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M11 4.25769C11 3.07501 9.9663 2.13515 8.84397 2.50814C4.86766 3.82961 2 7.57987 2 11.9999C2 13.6101 2.38057 15.1314 3.05667 16.4788C3.58731 17.5363 4.98303 17.6028 5.81966 16.7662L5.91302 16.6728C6.60358 15.9823 6.65613 14.9011 6.3341 13.9791C6.11766 13.3594 6 12.6934 6 11.9999C6 9.62064 7.38488 7.56483 9.39252 6.59458C10.2721 6.16952 11 5.36732 11 4.39046V4.25769ZM16.4787 20.9434C17.5362 20.4127 17.6027 19.017 16.7661 18.1804L16.6727 18.087C15.9822 17.3964 14.901 17.3439 13.979 17.6659C13.3594 17.8823 12.6934 17.9999 12 17.9999C11.3066 17.9999 10.6406 17.8823 10.021 17.6659C9.09899 17.3439 8.01784 17.3964 7.3273 18.087L7.23392 18.1804C6.39728 19.017 6.4638 20.4127 7.52133 20.9434C8.86866 21.6194 10.3899 21.9999 12 21.9999C13.6101 21.9999 15.1313 21.6194 16.4787 20.9434Z" fill="#12131A" />
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.39046C13 5.36732 13.7279 6.16952 14.6075 6.59458C16.6151 7.56483 18 9.62064 18 11.9999C18 12.6934 17.8823 13.3594 17.6659 13.9791C17.3439 14.9011 17.3964 15.9823 18.087 16.6728L18.1803 16.7662C19.017 17.6028 20.4127 17.5363 20.9433 16.4788C21.6194 15.1314 22 13.6101 22 11.9999C22 7.57987 19.1323 3.82961 15.156 2.50814C14.0337 2.13515 13 3.07501 13 4.25769V4.39046Z" fill="#12131A" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end::Icon-->
																		<!--begin::Description-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder text-gray-800 text-hover-primary fs-5">Developer Account</span>
																			<span class="fs-6 fw-bold text-gray-400">Use images to your post time</span>
																		</span>
																		<!--end:Description-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
																<!--begin:Option-->
																<label class="d-flex flex-stack mb-0 cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin::Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label">
																				<!--begin::Svg Icon | path: icons/duotone/Charts/Line-03-Down.svg-->
																				<span class="svg-icon svg-icon-1 svg-icon-gray-600">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.25" d="M1 5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V19C23 20.1046 22.1046 21 21 21H3C1.89543 21 1 20.1046 1 19V5Z" fill="#12131A" />
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8682 17.5035C21.1422 17.9831 20.9756 18.5939 20.4961 18.8679C20.0166 19.1419 19.4058 18.9753 19.1317 18.4958L15.8834 12.8113C15.6612 12.4223 15.2073 12.2286 14.7727 12.3373L9.71238 13.6024C8.40847 13.9283 7.04688 13.3473 6.38005 12.1803L3.13174 6.49582C2.85773 6.0163 3.02433 5.40545 3.50385 5.13144C3.98337 4.85743 4.59422 5.02403 4.86823 5.50354L8.11653 11.1881C8.33881 11.5771 8.79268 11.7707 9.22731 11.6621L14.2876 10.397C15.5915 10.071 16.9531 10.6521 17.6199 11.819L20.8682 17.5035Z" fill="#12131A" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end::Icon-->
																		<!--begin::Description-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder text-gray-800 text-hover-primary fs-5">Testing Account</span>
																			<span class="fs-6 fw-bold text-gray-400">Use images to enhance time travel rivers</span>
																		</span>
																		<!--end:Description-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" name="account_plan" value="3" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
															</div>
															<!--end::Options-->
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
														<div class="pb-10 pb-lg-12">
															<!--begin::Title-->
															<h2 class="fw-bolder text-dark">Business Details</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-gray-400 fw-bold fs-6">If you need more info, please check out
															<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="form-label required">Business Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc." />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="d-flex align-items-center form-label">
																<span class="required">Shortened Descriptor</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES" />
															<!--end::Input-->
															<!--begin::Hint-->
															<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
															<!--end::Hint-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="form-label required">Corporation Type</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
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
															<textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-0">
															<!--begin::Label-->
															<label class="fs-6 fw-bold form-label required">Contact Email</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com" />
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
															<a href="#" class="text-primary fw-bolder">Help Page</a>.</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
																<span class="required">Name On Card</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
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
																<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
																<!--end::Input-->
																<!--begin::Card logos-->
																<div class="position-absolute translate-middle-y top-50 end-0 me-5">
																	<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
																	<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
																	<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
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
																		<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
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
																		<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
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
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="position-relative">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
																	<!--end::Input-->
																	<!--begin::CVV icon-->
																	<div class="position-absolute translate-middle-y top-50 end-0 me-3">
																		<!--begin::Svg Icon | path: icons/stockholm/Shopping/Credit-card.svg-->
																		<span class="svg-icon svg-icon-2hx">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
																					<rect fill="#000000" x="2" y="8" width="20" height="3" />
																					<rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
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
																<label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
																<div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
															</div>
															<!--end::Label-->
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
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
															<a href="authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Body-->
														<div class="mb-0">
															<!--begin::Text-->
															<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great &amp; amazing audience.</div>
															<!--end::Text-->
															<!--begin::Alert-->
															<!--begin::Notice-->
															<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
																<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
																		<div class="fs-6 text-gray-600">To start using great tools, please, please
																		<a href="#" class="fw-bolder">Create Team Platform</a></div>
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
														<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
														<!--begin::Svg Icon | path: icons/stockholm/Navigation/Left-2.svg-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
																	<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon--> Atrás</button>
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div>
														<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
															<span class="indicator-label">Submit
															<!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
															<span class="svg-icon svg-icon-3 ms-2 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
																		<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon--></span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next"> Continuar
														<!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
														<span class="svg-icon svg-icon-4 ms-1 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon--></button>
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
