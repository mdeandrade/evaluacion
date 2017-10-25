<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container-fluid">
	<h1 class="text-center big_title">Evaluaciones</h1>
		<table id="example" class="table table-striped  table-responsive" width="100%" cellspacing="0">

			<thead>
				<tr>
					<th>Evaluacion Nro</th>
                                        <th>Funcionario</th>
                                        <th>Estatus</th>
					<th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th><input id="id_evaluacion" name="id_evaluacion" type="text"></th>
                                        <th><input id="id_persona" name="id_persona" type="text"></th>
                                        <th><input id="id_estatus" name="id_estatus" type="text"></th>			
					<th>Detalle</th>
				</tr>
			</tfoot>
		</table>

	<?php if (($rol==5)||($rol==2)){ ?>
<a class="btn btn-success"  href="<?php echo full_url."/rrhh/evaluaciones/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i> Agregar</a>
    <?php } ?>
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
		 /*"sDom": 'ltrip',*/
        "ajax": "<?php echo full_url."/rrhh/evaluaciones/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
         dom: 'Brtip',
        "columns": [
            { "data": "id_evaluacion" },
            { "data": "nom_funcionario" },
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


	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});


} );

</script>