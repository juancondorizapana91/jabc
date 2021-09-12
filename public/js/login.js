'use strict';

// Class definition
var KTSigninGeneral = (function () {
	// Elements
	var form;
	var submitButton;
	var validator;

	// Handle form
	var handleForm = function (e) {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		validator = FormValidation.formValidation(form, {
			fields: {
				email: {
					validators: {
						notEmpty: {
							message: 'Se requiere Dirección de correo electrónico',
						},
						emailAddress: {
							message: 'El valor no es una dirección de correo electrónico válida.',
						},
					},
				},
				password: {
					validators: {
						notEmpty: {
							message: 'Se requiere la contraseña',
						},
						callback: {
							message: 'Ingrese una contraseña válida',
							callback: function (input) {
								if (input.value.length > 0) {
									return _validatePassword();
								}
							},
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

		// Handle form submit
		submitButton.addEventListener('click', function (e) {
			// Prevent button default action
			e.preventDefault();

			// Validate form
			validator.validate().then(function (status) {
				if (status == 'Valid') {
					// Show loading indication
					submitButton.setAttribute('data-kt-indicator', 'on');

					// Disable button to avoid multiple click
					submitButton.disabled = true;

					// Simulate ajax request
					$.get(
						`/auth/authenticate/${form.querySelector('[name="email"]').value}/${form.querySelector('[name="password"]').value}`,
						function (r) {
							// Hide loading indication
							submitButton.removeAttribute('data-kt-indicator');

							// Enable button
							submitButton.disabled = false;

							// Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							form.querySelector('[name="email"]').value = '';
							form.querySelector('[name="password"]').value = '';
							window.location = `${window.origin}/principal`;
						},
						'json'
					);
				} else {
					// Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
		});
	};

	// Public functions
	return {
		// Initialization
		init: function () {
			form = document.querySelector('#kt_sign_in_form');
			submitButton = document.querySelector('#kt_sign_in_submit');

			handleForm();
		},
	};
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTSigninGeneral.init();
});
