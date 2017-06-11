<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Listado de usuarios</h1>
        <div class="container-pro">
            <br>
	<table id="example"  class="table table-striped table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Usuario</th>
                                        <th>Nombre</th>
                                        <th>Ubicación</th>
					<th>Estatus</th>
                                        <th>Expedientes</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th><input id="id_usuario" name="nom_usuario" type="text"></th>
                                        <th><input id="" name="" type="text"></th>
                                        <th><input id="ubicacion" name="ubicacion" type="text"></th>
                                        <th><input id="estatus" name="id_estatus" type="text"></th>			
					<th>Expediente</th>
				</tr>
			</tfoot>
		</table>
</div>
	<!--<a class="btn btn-success"  href="<?php echo full_url."/rrhh/usuarios/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i> Agregar</a>
-->
</div>
	<?php include('../../view_footer_solicitud.php')?>
<script>

	
$(document).ready(function() {
	
	$('#example tfoot th').each( function () {
		var title = $('#example thead th').eq( $(this).index() ).text();
		
		if(title != 'Expediente')
		{
			$(this).html( '<input size="20" class="input-sm filtros" id="column_'+$(this).index()+'" type="text" placeholder="'+title+'" />' );			
		}
		if(title == 'Expedientes')
		{
			$(this).html( '<button id="">Expediente</button>' );	
		}

	} );

	
    var table = $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
		 "sDom": 'ltrip',
        "ajax": "<?php echo full_url."/ap/Cargos/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id_cargo" },
            { "data": "nom_cargo" },
            { "data": "nom_estatus" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 4 ] }
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
        table.column(table.column(3)).search($(this).val()).draw();
    }
});
$('#column_4').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(4)).search($(this).val()).draw();
    }
});

<!--
	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});


} );
</script>