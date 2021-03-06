<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container-fluid">
	<h1 class="text-center big_title">Procesos</h1>
	<table id="example" class="table table-striped  table-responsive" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Número de proceso</th>
                    <th>Estatus</th>
                    <th>Descripción</th>
                    <th>Inicio del proceso</th>
                    <th>Fin del proceso</th>
                    <th>Incio de asignación ODI</th>
                    <th>Fin de asignación de ODI</th>
                    <th>Inicio de evaluación</th>
                    <th>Fin de evaluación</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tfoot>
		<tr>
                    <th>Número de proceso</th>
                    <th>Estatus</th>
                    <th>Descripción</th>
                    <th>Fecha desde</th>
                    <th>Fecha hasta</th>
                    <th>Fecha desde</th>
                    <th>Fecha hasta</th>
                    <th>Fecha desde</th>
                    <th>Fecha hasta</th>
                    <th>Detalle</th>
		</tr>
            </tfoot>
	</table>

       <?php if (($rol==5)){ ?> <a class="btn btn-success"  href="<?php echo full_url."/rrhh/procesos/index.php?action=new"?>"> Agregar</a><?php } ?>

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
        "ajax": "<?php echo full_url."/rrhh/procesos/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id_proc" },
            { "data": "nom_estatus" },
            { "data": "descripcion"},
            { "data": "fec_apertura_evaluacion" },
            { "data": "fec_cierre_evaluacion" },
            { "data": "fec_apertura_odi" },
            { "data": "fec_cierre_odi"},
            { "data": "fec_apertura_competencia" },
            { "data": "fec_cierre_competencia" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 8 ] }
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
$('#column_5').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(5)).search($(this).val()).draw();
    }
});
$('#column_6').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(6)).search($(this).val()).draw();
    }
});
$('#column_7').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(7)).search($(this).val()).draw();
    }
});
$('#column_8').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(8)).search($(this).val()).draw();
    }
});



	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});


} );

</script>
