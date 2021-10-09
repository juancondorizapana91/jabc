$(document).ready(function () {
	window.parametrosModal = function (idModal, titulo, tamano = 'modal-lg', keyboard = true, backdrop = 'static', focus = true) {
		modalTitle = document.getElementById(`${idModal}-title`);
		modalSize = document.getElementById(`${idModal}-dialog}`);

		modalTitle.innerHTML(titulo);
		modalSize.classList.add(tamano);
		modalSize.classList.add('modal-dialog');
		var modal = new bootstrap.Modal(document.getElementById(idModal), {
			keyboard: keyboard,
			backdrop: backdrop,
			focus: focus,
		}).show();
	};
});
