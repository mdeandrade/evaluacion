<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Odis</h1>

	<table id="example" class="table table-striped  table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
                    <th>ODI</th>
                    <th>Proceso</th>
                    <th>Estatus</th>

                    <th>Detalle</th>
                </tr>
			</thead>
			<tfoot>
				<tr>
                    <th>ODI</th>
                    <th>Proceso</th>
                    <th >Estatus</th>

                    <th>Detalle</th>	
				</tr>
			</tfoot>
	</table>
      
        <?php if (($rol==2)){ ?><a class="btn btn-success"  href="<?php echo full_url."/rrhh/odi/index.php?action=new"?>"> Agregar</a>		
            <?php } ?>	

</div>       
       
	<?php include('../../view_footer_solicitud.php')?>
<script>

	
$(document).ready(function() {
	
	$('#example tfoot th').each( function () {
		var title = $('#example thead th').eq( $(this).index() ).text();
		
		if(title != 'Detalle')
		{
			$(this).html( '<input size="20" class="input-sm filtros" id="column_'+$(this).index()+'" type="text" placeholder="'+title+'" />' );			
		}
		if(title == '')
		{
			$(this).html( '<button id="detalles">Limpiar</button>' );	
		}

	} );

	
    var table = $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
		 "sDom": 'ltrip',
        "ajax": "<?php echo full_url."/rrhh/odi/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id_proc" },
            { "data": "descripcion"},
            { "data": "nom_estatus" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 3 ] }
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