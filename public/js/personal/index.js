alert('ajsd');
$ ( 'table' ) . dataTable ( ) ;

// document.addEventListener('DOMContentLoaded', function () {
// 	$('.crear-personal').on('click', function (e) {
// 		e.preventDefault();
// 		parametrosModal('modal', 'Crear Personal');
// 		// $('#detalle-programa').html($(this).data('detalle'));
// 		// $('#id_publicacion').val($(this).data('id-publicacion'));
// 	});

// });


if(document.getElementById("#crear-personal")){
    var modal = document.getElementById("modal");
    var btn = document.getElementById(".crear-personal");
    var span = document.getElementsByClassName("close")[0];
    var body = document.getElementsByTagName("body")[0];

    btn.onclick = function() {
        modal.style.display = "block";

        body.style.position = "static";
        body.style.height = "100%";
        body.style.overflow = "hidden";
    }

    span.onclick = function() {
        modal.style.display = "none";

        body.style.position = "inherit";
        body.style.height = "auto";
        body.style.overflow = "visible";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";

            body.style.position = "inherit";
            body.style.height = "auto";
            body.style.overflow = "visible";
        }
    }
}