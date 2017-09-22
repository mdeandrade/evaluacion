<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container-fluid">
	<h1 class="text-center big_title">Listado de Usuarios</h1>
	<table id="example" class="table table-striped  table-responsive" width="100%" cellspacing="0">
            <thead>
		<tr>
                    <th>ID</th>
                    <th>Número de documento</th>
                    <th>Empleados</th>
                    <th>Ubicación</th>
                    <th>Cargo</th>
                    <th>Estatus</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tfoot>
		<tr>
                    <th>ID</th>
                    <th>Número de documento</th>
                    <th>Empleados</th>
                    <th>Ubicación</th>
                    <th>Cargo</th>
                    <th>Estatus</th>
                    <th>Detalle</th>
		</tr>
            </tfoot>
	</table>

        <a class="btn btn-success"  href="<?php echo full_url."/rrhh/personal/index.php?action=new"?>"> Agregar</a>

</div>

	<?php include('../../view_footer_solicitud.php')?>
<script>


$(document).ready(function() {

	$('#example tfoot th').each( function () {
		var title = $('#example thead th').eq( $(this).index() ).text();

		if(title != 'Detalle')
		{
			$(this).html( '<input size="10" class="input-sm filtros" id="column_'+$(this).index()+'" type="text" placeholder="'+title+'" />' );
		}
		if(title == 'Detalle')
		{
			$(this).html( '<button id="clear">Limpiar</button>' );
		}

	} );


    var table = $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
		 "sDom": 'ltrip',
        "ajax": "<?php echo full_url."/rrhh/personal/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
             { "data": "id_persona" },
            { "data": "num_documento"},
            { "data": "pri_ape"},
            { "data": "pri_nom"},
            { "data": "id_ubicacion" },
            { "data": "id_cargo" },
            { "data": "id_estatus" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 7 ] }
       ]
    });
$('#column_0').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});
$('#column_1').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(1)).search($(this).val()).draw();
    }
});
$('#column_2').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(2)).search($(this).val()).draw();
    }
});
$('#column_3').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});
$('#column_4').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});
$('#column_5').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});
$('#column_6').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});

	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});


} );

</script>