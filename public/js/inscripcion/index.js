"use strict";
// Class definition
var KTInscripcion = (function () {
	// Elements
	var modal;
	var modalEl;

	var stepper;
	var form;
	var formSubmitButton;
	var prof = "";

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
				let datos = [
					"SEDE INSCRIPCIÓN",
					"DATOS PERSONALES",
					"DATOS DEL PROGRAMA",
					"DETALLE PAGO",
				];

				for (let index = 0; index < datos.length; index++) {
					$("#content-data").append(`<div class="row">
						<div class="col-sm-12 col-md-12 text-center">
							<strong><label>${datos[index]}</label></strong>
						</div>
						<hr>
					</div>`);

					$("#paso_" + index + "_inscripcion")
						.find(":input")
						.each(function () {
							var elemento = this;
							if (elemento.id != " ") {
								let fila = elemento.id;
								let valor = elemento.value;
								if (fila === "id_profesiones_ocupaciones") {
									$.post(
										"/inscripcion/verificarTabla",
										{
											fila,
											valor,
											tabla: "profesiones_ocupaciones",
											descripcion: "descripcion",
										},
										function (response) {
											prof = response;
											console.log("entro qui");
										}
									);

									console.log(prof);
									$("#content-data").append(
										etiquetaValor(elemento.id, prof)
									);
								} else {
									$("#content-data").append(
										etiquetaValor(elemento.id, elemento.value)
									);
									console.log("en ");
								}
							}
						});
				}
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

	function verificarTabla(fila, valor, tabla, descripcion) {
		let valor_response = "";
		$.ajax({
			type: "POST",
			url: "/inscripcion/verificarTabla",
			data: {
				fila,
				valor,
				tabla,
				descripcion,
			},
		}).done(function (response) {
			valor_response = response;
			console.log(response);
		});
		return valor_response + "";
	}

	// var handleForm = function () {
	// 	formSubmitButton.addEventListener("submit", function (e) {
	// 		// Prevent default button action
	// 		e.preventDefault();
	// 		console.log();

	// 		// Disable button to avoid multiple click
	// 		formSubmitButton.disabled = true;

	// 		// Show loading indication
	// 		formSubmitButton.setAttribute("data-kt-indicator", "on");

	// 		// Simulate form submission
	// 		setTimeout(function () {
	// 			// Hide loading indication
	// 			formSubmitButton.removeAttribute("data-kt-indicator");

	// 			// Enable button
	// 			formSubmitButton.disabled = false;

	// 			// Show popup confirmation. For more info check the plugin's official documentation: https://sweetalert2.github.io/
	// 			Swal.fire({
	// 				text: "Form has been successfully submitted!",
	// 				icon: "success",
	// 				buttonsStyling: false,
	// 				confirmButtonText: "Ok",
	// 				customClass: {
	// 					confirmButton: "btn btn-primary",
	// 				},
	// 			}).then(function (result) {
	// 				if (result.isConfirmed) {
	// 					if (modal) {
	// 						modal.hide(); // close modal
	// 					}
	// 					//form.submit(); // Submit form
	// 				}
	// 			});
	// 		}, 2000);
	// 	});

	// 	// Expiry month. For more info, plase visit the official plugin site: https://select2.org/
	// 	$(form.querySelector('[name="card_expiry_month"]')).on("change", function () {
	// 		// Revalidate the field when an option is chosen
	// 		validations[3].revalidateField("card_expiry_month");
	// 	});

	// 	// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
	// 	$(form.querySelector('[name="card_expiry_year"]')).on("change", function () {
	// 		// Revalidate the field when an option is chosen
	// 		validations[3].revalidateField("card_expiry_year");
	// 	});

	// 	// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
	// 	$(form.querySelector('[name="business_type"]')).on("change", function () {
	// 		// Revalidate the field when an option is chosen
	// 		validations[2].revalidateField("business_type");
	// 	});
	// };

	const etiquetaValor = (etiqueta, valor, separador = true) => {
		return `<div class="row">
			<div class="col-sm-12 col-md-6">
				<strong><label>${etiqueta}</label></strong>
			</div>
			<div class="col-sm-12 col-md-6">
				<label>${valor}</label>
			</div>
			${separador == true ? "<hr>" : ""}
		</div>`;
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
			// handleForm();
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
			$("#id_persona").val(response[0].id_persona);
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
		maxFiles: 1,
		maxFilesize: 10,
		addRemoveLinks: true,
		acceptedFiles: "image/jpeg, image/png, image/jpg",
		accept: function (e, t) {
			"justinbieber.jpg" == e.name ? t("Naha, you don't.") : t();
		},
		init: function () {
			this.on("addedfile", function (file) {
				arrayfiles.push(file);
			});

			this.on("removedfile", function (file) {
				var index = arrayfiles.indexOf(file);
				arrayfiles.splice(index, 1);
			});
		},
	});

	$("#kt_create_account_form").on("submit", function (e) {
		e.preventDefault();
		Swal.fire({
			text: "¿Si todo esta bien?. Por favor confirme los datos para registrar.",
			icon: "success",
			showCancelButton: true,
			buttonsStyling: false,
			confirmButtonText: "Si, enviar",
			cancelButtonText: "No, cancelar",
			customClass: {
				confirmButton: "btn font-weight-bold btn-primary",
				cancelButton: "btn font-weight-bold btn-default",
			},
		}).then(function (result) {
			if (result.value) {
				let formData = new FormData($("#kt_create_account_form")[0]);
				let comprobantes = [];
				if (arrayfiles.length > 0) {
					if (arrayfiles[0].status === "success") {
						comprobantes.push(arrayfiles[0].dataURL);
					}
				}
				formData.append("comprobante", comprobantes);

				$.ajax({
					type: "POST",
					url: "/inscripcion/guardarInscripcion",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "JSON",
				}).done(function (response) {
					if (typeof response.exito != "undefined") {
						Swal.fire("Exito!", response.exito, "success");
						limpiar();
						window.open(
							"/inscripcion/generarFactura/" + response.id_pago_programa,
							"_blank"
						);
						location.reload();
					}
					if (typeof response.error != "undefined") {
						Swal.fire("Error!", response.error, "error");
					}
				});
			}
		});
	});

	const limpiar = () => {
		$("#kt_create_account_form").trigger("reset");
	};

	KTInscripcion.init();
});
