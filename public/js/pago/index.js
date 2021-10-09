$(document).ready(function () {
	$(".container-fluid .btn-linkedin").on("click", function () {
		$(".btn-linkedin").each(function () {
			$(".btn-linkedin").removeAttr("style");
		});

		// $(this).css("color", "black");
		// $(this).css("border-color", "black");
		// $(this).css("border-width", "1px");
		// $(this).css("border-style", "solid");

		// $('[name="id_grado_academico"]').val(
		// 	$(this).find("input:radio[name=grado_academico]:checked").val()
		// );

		cargarTarjetaPrograma();
	});

	$(".container-fluid").on(
		"change",
		"#anio_titulacion, #id_universidades_normales, #id_profesiones_ocupaciones",
		function (e) {
			// console.log(e);
			// $("#datos_programa_listar_descuento").empty();
			// final = 20;
			// inicio = 0;
			cargarTarjetaPrograma();
		}
	);

	window.cargarTarjetaPrograma = function () {
		// console.log($("#kt_post :input").serialize());
		var tbl_descuento = $("#tbl_descuento").DataTable({
			responsive: true,
			destroy: true,
			paging: true,
			language: {
				// url: "/assets/plugins/datatables/Spanish.json",
			},
			ajax: {
				type: "POST",
				url: "/pago/buscar_persona",
				data: $("#kt_post :input").serialize(),
			},
			dom:
				"<row<>><'row'<'col-md-9'l><'col-sm-12 col-md-3'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			lengthMenu: [
				[-1, 100, 50, 30, 20, 10],
				["Todo", 100, 50, 30, 20, 10],
			],
			columnDefs: [
				{
					searchable: true,
					orderable: true,
					targets: -1,
					data: null,
					render: function (data, type, row, meta) {
						id_requisito_aux = data[0];
						var id_tramite = $(
							"input:radio[name=nombre_tramite]:checked"
						).val();
						// $.post(
						// 	"/recaudaciones/verificar_requisito",
						// 	{ id_requisito: data[0], id_tramite: id_tramite },
						// 	function (resp) {
						// 		if (resp != null) {
						// 			if (resp.estado_requisito_tramite == "REGISTRADO") {
						// 				$("#checkbox_descuento_" + data[0]).attr("checked", true);
						// 				if (resp.tipo_requisito != "") {
						// 					$(
						// 						"#md_select_" +
						// 							data[0] +
						// 							" option[value=" +
						// 							resp.tipo_requisito +
						// 							"-" +
						// 							data[0] +
						// 							"]"
						// 					).attr("selected", true);
						// 				}
						// 			}
						// 		}
						// 	}
						// );
						return (
							'<input type="checkbox" name="checkbox_descuento" id="checkbox_descuento_' +
							data[0] +
							'" class="filled-in chk-col-light-blue" value="' +
							data[0] +
							'" value-id="' +
							data[1] +
							'"> <label for="checkbox_descuento_' +
							data[0] +
							'"></label>'
						);
					},
				},
			],
		});
		$.ajax({
			type: "post",
			url: "/pago/buscar_persona",
			data: $("##kt_post :input").serialize(),
		})
			.done(function (r) {
				if (typeof r.exito !== "undefined") {
					// $('#datos-buscar-programa').append(r.vista);
					$("#datos-buscar-programa").html(r.vista);
					$("#datos-vacios-buscar-programa").empty();
					accion = "inactivo";
				} else if (typeof r.error !== "undefined") {
					$("#datos-vacios-buscar-programa")
						.html(`<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
						<h3 class="text-info"><i class="fa fa-exclamation-circle"></i> No se encontro su Programa <b class="text-primary">${$(
							"#buscar-programa"
						)
							.val()
							.toUpperCase()}</b>... ¿Desea agregarlo?</h3> Si realmente esta seguro de que el programa no esta registrado por favor presione en crear programa
						<hr>
						<div class="d-flex flex-row-reverse form-actions m-b-20">
		                    <div class="col-md-3 col-sm-12">
		                        <button type="button" class="btn btn-info btn-rounded btn-sm w-100" id="agregar-programa"><i class="fa fa-plus-circle"></i> Crear Programa</button>
		                    </div>
		                </div>
					</div>`);
					accion = "activo";
					$("#agregar-programa").on("click", function () {
						$.post(
							"/admin_programa/programa_programa_agregar",
							{ vista: 2, id_resolucion: $("#id_resolucion").val() },
							function (r) {
								$("#datos-vacios-buscar-programa").html(r);
							}
						);
					});
				}
			})
			.fail(function (jqXHR, textStatus) {
				swal(
					"ADVERTENCIA",
					"No se encontro el proceso solicitado, por favor intente más tarde",
					"error"
				);
				console.log(jqXHR.responseText);
			});
	};
});
