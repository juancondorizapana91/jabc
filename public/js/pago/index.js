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

		// cargarTarjetaPrograma();
	});

	$(".container-fluid").on(
		"change",
		"#anio_titulacion, #id_universidades_normales, #id_profesiones_ocupaciones",
		function (e) {
			console.log(e);
			// $("#datos_programa_listar_descuento").empty();
			// final = 20;
			// inicio = 0;
			// cargarTarjetaPrograma();
		}
	);
});
