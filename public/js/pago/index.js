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
			lengthMenu: [
				[-1, 100, 50, 30, 20, 10],
				["Todo", 100, 50, 30, 20, 10],
			],
			columnDefs: [
				// {
				// 	searchable: true,
				// 	orderable: true,
				// 	targets: -1,
				// 	data: null,
				// 	render: function (data, type, row, meta) {
				// 		id_requisito_aux = data[0];
				// 		var id_tramite = $(
				// 			"input:radio[name=nombre_tramite]:checked"
				// 		).val();
				// 		// $.post(
				// 		// 	"/recaudaciones/verificar_requisito",
				// 		// 	{ id_requisito: data[0], id_tramite: id_tramite },
				// 		// 	function (resp) {
				// 		// 		if (resp != null) {
				// 		// 			if (resp.estado_requisito_tramite == "REGISTRADO") {
				// 		// 				$("#checkbox_descuento_" + data[0]).attr("checked", true);
				// 		// 				if (resp.tipo_requisito != "") {
				// 		// 					$(
				// 		// 						"#md_select_" +
				// 		// 							data[0] +
				// 		// 							" option[value=" +
				// 		// 							resp.tipo_requisito +
				// 		// 							"-" +
				// 		// 							data[0] +
				// 		// 							"]"
				// 		// 					).attr("selected", true);
				// 		// 				}
				// 		// 			}
				// 		// 		}
				// 		// 	}
				// 		// );
				// 		return (
				// 			'<input type="checkbox" name="checkbox_descuento" id="checkbox_descuento_' +
				// 			data[0] +
				// 			'" class="filled-in chk-col-light-blue" value="' +
				// 			data[0] +
				// 			'" value-id="' +
				// 			data[1] +
				// 			'"> <label for="checkbox_descuento_' +
				// 			data[0] +
				// 			'"></label>'
				// 		);
				// 	},
				// },
			],
		});
		
	};
});
