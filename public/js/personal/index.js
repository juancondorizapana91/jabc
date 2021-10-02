// $('#kt_modal_new_target_submit').on('click', function (e) {
// 	alert('hola');
// });

// Inputmask({
// 	mask: 'a',
// 	repeat: 2,
// 	greedy: false,
// }).mask('#nombre');
('use strict');

$('#table').DataTable({
	language: {
		lengthMenu: 'Show _MENU_',
	},
	columnDefs: [
		{
			targets: -1,
			orderable: false,
			data: null,
			render: function (data, type, row, meta) {
				return `<button type="button" class="btn btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
				Click to open menu
				<span class="svg-icon svg-icon-5 rotate-180 ms-3 me-0">...</span>
			</button>
			
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
				<div class="menu-item px-3">
					<a href="#" class="menu-link px-3">
						Menu item 1
					</a>
				</div>
			</div>`;
			},
		},
	],
	order: [[0, 'asc']],
	responsive: true,
	dom: '<"row"<"col-sm-6"l><"col-sm-6"f>><"row"<"col-sm-12"t>><"row"<"col-sm-6"i><"col-sm-6"p>>',
	lengthMenu: [
		[10, 25, 50, 100, -1],
		[10, 25, 50, 100, 'All'],
	],
	pageLength: 10,
	// dom: "<'row'" + "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" + "<'col-sm-6 d-flex align-items-center justify-content-end'f>" + '>' + "<'table-responsive'tr>" + "<'row'" + "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" + "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" + '>',
	ajax: 'personal/ajaxListarPersonal',
});

// Class definition
var KTModalNewTarget = (function () {
	var submitButton;
	var cancelButton;
	var validator;
	var form;
	var modal;
	var modalEl;

	// Init form inputs
	var initForm = function () {
		// Due date. For more info, please visit the official plugin site: https://flatpickr.js.org/
		var dueDate = $(form.querySelector('[name="fecha_nacimiento"]'));
		dueDate.flatpickr({
			altInput: true,
			altFormat: 'F j, Y',
			dateFormat: 'Y-m-d',
		});

		// Team assign. For more info, plase visit the official plugin site: https://select2.org/
		$(form.querySelector('[name="team_assign"]')).on('change', function () {
			// Revalidate the field when an option is chosen
			validator.revalidateField('team_assign');
		});
	};

	// Handle form validation and submittion
	var handleForm = function () {
		// Stepper custom navigation
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validator = FormValidation.formValidation(form, {
			fields: {
				ci: {
					validators: {
						notEmpty: {
							message: 'Cédula requerida',
						},
					},
				},
				expedido: {
					validators: {
						notEmpty: {
							message: 'Campo requerido',
						},
					},
				},
				nombre: {
					validators: {
						notEmpty: {
							message: 'Nombre requerido',
						},
					},
				},
				paterno: {
					validators: {
						notEmpty: {
							message: 'Apellido requerido',
						},
					},
				},
				fecha_nacimiento: {
					validators: {
						notEmpty: {
							message: 'Fecha requerida',
						},
					},
				},
				genero: {
					validators: {
						notEmpty: {
							message: 'Género requerido',
						},
					},
				},
				estado_civil: {
					validators: {
						notEmpty: {
							message: 'Estado requerido',
						},
					},
				},
				domicilio: {
					validators: {
						notEmpty: {
							message: 'Domicilio requerido',
						},
					},
				},
				correo: {
					validators: {
						notEmpty: {
							message: 'Correo requerido',
						},
					},
				},
				celular: {
					validators: {
						notEmpty: {
							message: 'Celular requerida',
						},
					},
				},
				lugar_nacimiento: {
					validators: {
						notEmpty: {
							message: 'Lugar de nacimiento requerido',
						},
					},
				},
				'targets_notifications[]': {
					validators: {
						notEmpty: {
							message: 'Please select at least one communication method',
						},
					},
				},
			},
			plugins: {
				trigger: new FormValidation.plugins.Trigger(),
				bootstrap: new FormValidation.plugins.Bootstrap5({
					rowSelector: '.fv-row',
					eleInvalidClass: '',
					eleValidClass: '',
				}),
			},
		});

		// Action buttons
		submitButton.addEventListener('click', function (e) {
			e.preventDefault();

			// Validate form before submit
			if (validator) {
				validator.validate().then(function (status) {
					console.log('validated!');

					if (status == 'Valid') {
						submitButton.setAttribute('data-kt-indicator', 'on');

						// Disable button to avoid multiple click
						submitButton.disabled = true;
						setTimeout(function () {
							// Enable button

							$(form).ajaxSubmit({
								url: '/personal/guardarPersonal',
								type: 'POST',
								success: function (r) {
									submitButton.removeAttribute('data-kt-indicator');
									submitButton.disabled = false;
									if (typeof r.exito != 'undefined') {
										Swal.fire({
											title: r.exito,
											icon: 'success',
											showCancelButton: true,
											confirmButtonText: '¡Si deseo agregar roles!',
											cancelButtonText: `No, mas tarde`,
										}).then((result) => {
											if (result.isConfirmed) {
												Swal.fire('Saved!', '', 'success');
											} else if (result.isCanceled) {
												modal.hide();
											}
										});
									} else if (typeof r.error != 'undefined') {
										Swal.fire({ title: '¡Error!', icon: 'error', html: r.error, buttonsStyling: false, customClass: { confirmButton: 'btn btn-primary' } });
									}
								},
								error: function (r) {
									submitButton.removeAttribute('data-kt-indicator');
									submitButton.disabled = false;
									Swal.fire({ title: '¡Error!', icon: 'error', html: r.responseText, buttonsStyling: false, customClass: { confirmButton: 'btn btn-primary' } });
								},
							});

							//form.submit(); // Submit form
						}, 1000);
					} else {
						// Show error message.
						Swal.fire({
							text: 'Lo sentimos, parece que se han detectado algunos errores. Vuelve a intentarlo.',
							icon: 'error',
							buttonsStyling: false,
							confirmButtonText: '¡Ok lo tengo!',
							customClass: {
								confirmButton: 'btn btn-primary',
							},
						});
					}
				});
			}
		});

		cancelButton.addEventListener('click', function (e) {
			e.preventDefault();

			Swal.fire({
				text: '¿Estás seguro de cancelar?',
				icon: 'warning',
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: '¡Sí, cancélalo!',
				cancelButtonText: 'No, retornar',
				customClass: {
					confirmButton: 'btn btn-primary',
					cancelButton: 'btn btn-active-light',
				},
			}).then(function (result) {
				if (result.value) {
					form.reset(); // Reset form
					modal.hide(); // Hide modal
				} //else if (result.dismiss === 'cancel') {
				// 	Swal.fire({
				// 		text: '¡Tu formulario no ha sido cancelado!',
				// 		icon: 'error',
				// 		buttonsStyling: false,
				// 		confirmButtonText: '¡Ok lo tengo!',
				// 		customClass: {
				// 			confirmButton: 'btn btn-primary',
				// 		},
				// 	});
				// }
			});
		});
	};
	return {
		// Public functions
		init: function () {
			// Elements
			modalEl = document.querySelector('#kt_modal_new_target');

			if (!modalEl) {
				return;
			}

			modal = new bootstrap.Modal(modalEl);

			form = document.querySelector('#kt_modal_new_target_form');
			submitButton = document.getElementById('kt_modal_new_target_submit');
			cancelButton = document.getElementById('kt_modal_new_target_cancel');

			initForm();
			handleForm();
		},
	};
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTModalNewTarget.init();
});
