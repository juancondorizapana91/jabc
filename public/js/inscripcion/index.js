"use strict";
// Class definition
var KTInscripcion = (function () {
	// Elements
	var modal;
	var modalEl;

	var stepper;
	var form;
	var formSubmitButton;

	// Variables
	var stepperObj;
	var validations = [];

	// Private Functions
	var initStepper = function () {
		// Initialize Stepper
		stepperObj = new KTStepper(stepper);

		// Validation before going to next page
		stepperObj.on("kt.stepper.next", function (stepper) {
			if (stepper.passedStepIndex == 3) {
				$("#kt_create_account_form")
					.find(":input")
					.each(function () {
						var elemento = this;
						alert(
							"elemento.id=" +
								elemento.id +
								", elemento.value=" +
								elemento.value +
								", element.text=" +
								elemento.text
						);
					});
			}
			// Validate form before change stepper step
			var validator = validations[stepper.getCurrentStepIndex() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					// console.log("validated!" + );

					if (status == "Valid") {
						stepper.goNext();

						KTUtil.scrollTop();
					} else {
						Swal.fire({
							text: "Por favor, llene los campos obligatorios.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "OK",
							customClass: {
								confirmButton: "btn btn-light",
							},
						}).then(function () {
							KTUtil.scrollTop();
						});
					}
				});
			} else {
				stepper.goNext();

				KTUtil.scrollTop();
			}
		});

		// Prev event
		stepperObj.on("kt.stepper.previous", function (stepper) {
			console.log("stepper.previous");

			stepper.goPrevious();
			KTUtil.scrollTop();
		});
	};

	var handleForm = function () {
		formSubmitButton.addEventListener("click", function (e) {
			// Prevent default button action
			e.preventDefault();

			// Disable button to avoid multiple click
			formSubmitButton.disabled = true;

			// Show loading indication
			formSubmitButton.setAttribute("data-kt-indicator", "on");

			// Simulate form submission
			setTimeout(function () {
				// Hide loading indication
				formSubmitButton.removeAttribute("data-kt-indicator");

				// Enable button
				formSubmitButton.disabled = false;

				// Show popup confirmation. For more info check the plugin's official documentation: https://sweetalert2.github.io/
				Swal.fire({
					text: "Form has been successfully submitted!",
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Ok",
					customClass: {
						confirmButton: "btn btn-primary",
					},
				}).then(function (result) {
					if (result.isConfirmed) {
						if (modal) {
							modal.hide(); // close modal
						}
						//form.submit(); // Submit form
					}
				});
			}, 2000);
		});

		// Expiry month. For more info, plase visit the official plugin site: https://select2.org/
		$(form.querySelector('[name="card_expiry_month"]')).on("change", function () {
			// Revalidate the field when an option is chosen
			validations[3].revalidateField("card_expiry_month");
		});

		// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
		$(form.querySelector('[name="card_expiry_year"]')).on("change", function () {
			// Revalidate the field when an option is chosen
			validations[3].revalidateField("card_expiry_year");
		});

		// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
		$(form.querySelector('[name="business_type"]')).on("change", function () {
			// Revalidate the field when an option is chosen
			validations[2].revalidateField("business_type");
		});
	};

	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		validations.push(
			FormValidation.formValidation(form, {
				// fields: {
				// 	account_type: {
				// 		validators: {
				// 			notEmpty: {
				// 				message: "Account type is required",
				// 			},
				// 		},
				// 	},
				// },
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: "",
					}),
				},
			})
		);

		// Step 2
		validations.push(
			FormValidation.formValidation(form, {
				fields: {
					ci: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
					expedido: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
					nombres: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
							regexp: {
								regexp: /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/i,
								message:
									"El nombre puede constar de caracteres alfabéticos y solo espacios",
							},
						},
					},
					paterno: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
							regexp: {
								regexp: /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/i,
								message:
									"Paterno puede constar de caracteres alfabéticos y solo espacios",
							},
						},
					},
					materno: {
						validators: {
							regexp: {
								regexp: /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/i,
								message:
									"Materno puede constar de caracteres alfabéticos y solo espacios",
							},
						},
					},
					celular: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
					sexo: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: "",
					}),
				},
			})
		);

		// Step 3
		validations.push(
			FormValidation.formValidation(form, {
				fields: {
					nombre_programa: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: "",
					}),
				},
			})
		);

		// Step 4
		validations.push(
			FormValidation.formValidation(form, {
				fields: {
					monto_pago: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
							integer: {
								message: "Este campo debe llevar solo números",
							},
						},
					},
					fecha_pago: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
					id_tipo_pago: {
						validators: {
							notEmpty: {
								message: "Este campo es requerido",
							},
						},
					},
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: "",
					}),
				},
			})
		);
	};

	return {
		// Public Functions
		init: function () {
			// Elements
			modalEl = document.querySelector("#kt_modal_create_account");

			if (modalEl) {
				modal = new bootstrap.Modal(modalEl);
			}

			stepper = document.querySelector("#kt_create_account_stepper");

			form = stepper.querySelector("#kt_create_account_form");
			formSubmitButton = stepper.querySelector('[data-kt-stepper-action="submit"]');

			initStepper();
			initValidation();
			handleForm();
		},
	};
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	// Consultar por ci
	$("#ci").on("change", function (e) {
		let ci = $(this).val();
		$.ajax({
			method: "POST",
			url: "/inscripcion/buscar_persona_ci",
			data: { ci },
		}).done(function (response) {
			// console.log(response[0]);
			$("#expedido").val(response[0].expedido).trigger("change");
			$("#nombre").val(response[0].nombre);
			$("#paterno").val(response[0].paterno);
			$("#materno").val(response[0].materno);
			$("#fecha_nacimiento").val(response[0].fecha_nacimiento);
			$("#celular").val(response[0].celular);
			$("#genero").val(response[0].genero).trigger("change");
			$("#id_profesiones_ocupaciones")
				.val(response[0].id_profesiones_ocupaciones)
				.trigger("change");
			$("#id_universidades_normales")
				.val(response[0].id_universidades_normales)
				.trigger("change");
			$("#tipo_universidad").val(response[0].tipo_universidad).trigger("change");
			$("#gestion_titulacion")
				.val(response[0].gestion_titulacion)
				.trigger("change");
		});
	});

	// cambio de nombre de programa
	$("#nombre_programa").on("change", function (e) {
		let id = $(this).val();

		$.ajax({
			method: "POST",
			url: "/inscripcion/buscar_programa",
			data: { id },
		}).done(function (response) {
			$("#gestion_programa").val(response[0].gestion).trigger("change");
			$("#grado_academico").val(response[0].descripcion_grado_academico);
			$("#fecha_inicio").val(response[0].fecha_inicio);
			$("#fecha_fin").val(response[0].fecha_fin);
			$("#costo_matricula").val(response[0].costo_matricula + " Bs.");
			$("#costo_colegiatura").val(response[0].costo_colegiatura + " Bs.");
			$("#costo_total").val(
				parseInt(response[0].costo_matricula) +
					parseInt(response[0].costo_colegiatura) +
					" Bs."
			);
			$("#deuda_total").val(
				parseInt(response[0].costo_matricula) +
					parseInt(response[0].costo_colegiatura) +
					" Bs."
			);

			// NUMERO DE COMPROBANTE
			$.ajax({
				method: "POST",
				url: "/inscripcion/numero_comprobante",
			}).done(function (response) {
				$("#codigo_pago").val(response);
			});
		});
	});

	// Fecha por defecto hoy
	var now = new Date();
	var day = ("0" + now.getDate()).slice(-2);
	var month = ("0" + (now.getMonth() + 1)).slice(-2);
	var today = now.getFullYear() + "-" + month + "-" + day;
	$("#fecha_deposito").val(today);

	// Poner deuda total

	$("#monto_pago").on("keyup", function (e) {
		let monto_total = parseInt($(this).val());
		let costo_total = $("#costo_total").val();
		$("#deuda_total").val(
			parseInt(costo_total.substring(0, costo_total.length - 4)) -
				monto_total +
				" Bs."
		);
	});

	$("#imagen_comprobante").on("change", function (e) {
		var imagen = this.files[0];
		console.log(imagen);
	});

	// DROPZONE
	var arrayfiles = [];
	new Dropzone("#imagen_comprobante", {
		url: "/inscripcion/subir_imagen_comprobante",
		paramName: "imagen_comprobante",
		maxFiles: 2,
		maxFilesize: 10,
		addRemoveLinks: true,
		acceptedFiles: "image/jpeg, image/png, image/jpg",
		accept: function (e, t) {
			"justinbieber.jpg" == e.name ? t("Naha, you don't.") : t();
		},
		init: function () {
			this.on("addedfile", function (file) {
				arrayfiles.push(file);
				console.log(arrayfiles);
			});

			this.on("removedfile", function (file) {
				var index = arrayfiles.indexOf(file);
				arrayfiles.splice(index, 1);
				console.log(arrayfiles);
			});
		},
	});

	function etiquetaValor(etiqueta, valor, separador = true) {
		return `<div class="row">
					<div class="col-sm-12 col-md-6">
						<strong><label>${etiqueta}</label></strong>
					</div>
					<div class="col-sm-12 col-md-6">
						<label>${valor}</label>
					</div>
					${separador == true ? "<hr>" : ""}
				</div>`;
	}

	KTInscripcion.init();
});
