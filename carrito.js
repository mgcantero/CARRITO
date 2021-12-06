function init(){

}

$(document).ready(function() {

});
$(document).on("click", "#guardar", function(){
	var nombre = $('#nombre').val();
	var talla = $('#talla').val();
	var precio = $('#precio').val();

	if(nombre == '' || talla == '' || precio == ''){
		Swal.fire({
		  icon: 'error',
		  title: 'Error!',
		  text: 'Campos vacios',
		})
	}else{
		Swal.fire(
	  'Good job!',
	  'You clicked the button!',
	  'success'
	)
	}
});

$(document).ready(function() {
            $('#productos').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        } );