<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content rounded">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                            <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                            <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
            <!--begin:Form-->
            <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Set First Target</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
                        <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Target Title</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title">
                    <div class="fv-plugins-message-container"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Assign</label>
                        <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="team_assign" data-select2-id="select2-data-10-6h34" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="select2-data-12-49xz">Select user...</option>
                            <option value="1">Karina Clark</option>
                            <option value="2">Robert Doe</option>
                            <option value="3">Niel Owen</option>
                            <option value="4">Olivia Wild</option>
                            <option value="5">Sean Bean</option>
                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-gafv" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-team_assign-3b-container" aria-controls="select2-team_assign-3b-container"><span class="select2-selection__rendered" id="select2-team_assign-3b-container" role="textbox" aria-readonly="true" title="Select a Team Member"><span class="select2-selection__placeholder">Select a Team Member</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Due Date</label>
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                <span class="symbol-label bg-secondary">
                                    <!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-grid.svg-->
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"></rect>
                                                <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Datepicker-->
                            <input class="form-control form-control-solid ps-12 flatpickr-input" placeholder="Select a date" name="due_date" type="text" readonly="readonly">
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">Target Details</label>
                    <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Tags</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target priorty" aria-label="Specify a target priorty"></i>
                    </label>
                    <!--end::Label-->
                    <tags class="tagify form-control form-control-solid" tabindex="-1">
                        <tag title="Important" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="Important" contenteditable="false">
                            <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                            <div><span class="tagify__tag-text">Important</span></div>
                        </tag>
                        <tag title="Urgent" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="Urgent" contenteditable="false">
                            <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                            <div><span class="tagify__tag-text">Urgent</span></div>
                        </tag><span data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false" contenteditable=""></span>
                    </tags><input class="form-control form-control-solid" value="Important, Urgent" name="tags">
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-stack mb-8">
                    <!--begin::Label-->
                    <div class="me-5">
                        <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                        <div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked">
                        <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-15 fv-row">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="fw-bold me-5">
                            <label class="fs-6">Notifications</label>
                            <div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="d-flex align-items-center">
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked">
                                <span class="form-check-label fw-bold">Email</span>
                            </label>
                            <!--end::Checkbox-->
                            <!--begin::Checkbox-->
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone">
                                <span class="form-check-label fw-bold">Phone</span>
                            </label>
                            <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-white me-3">Cancel</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <div></div>
            </form>
            <!--end:Form-->
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>