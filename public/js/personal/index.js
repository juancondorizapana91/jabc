// $('#kt_modal_new_target_submit').on('click', function (e) {
// 	alert('hola');
// });

// Inputmask({
// 	mask: 'a',
// 	repeat: 2,
// 	greedy: false,
// }).mask('#nombre');
('use strict');

$('#table')
	.DataTable({
		language: {
			lengthMenu: 'Show _MENU_',
		},
		columnDefs: [
			{
				targets: -1,
				orderable: false,
				data: null,
				render: function (data, type, row, meta) {
					return `<div class="d-flex justify-content-end flex-shrink-0">
				<a href="javascript:void(0)" id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
							<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
						</svg>
					</span>
				</a>
				<a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 editar-personal" data-id-persona="${data[0]}">
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
							<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
						</svg>
					</span>
				</a>
				<a href="javascript:void(0)" id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
					<span class="svg-icon svg-icon-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
							<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
							<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
						</svg>
					</span>
				</a>
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
	})
	.on('click', '.editar-personal', function () {
		$.get(`/pesonal/editarPersonal${$(this).data('id-persona')}`);
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
