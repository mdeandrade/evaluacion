<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Procesos</h1>

       <div class="container-pro">
	<table id="" class="table table-striped  table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Proceso 1</th>
                                        <th>Proceso 2</th>
                                        <th>Descripción</th>
                                        <th></th>
                                </tr>
			</thead>
			<tfoot>
				<tr>
                                    <th><input id="id_pro" name="id_proc" type="radio"></th> 
                                    <th><input id="id_pro" name="id_proc" type="radio"></th>
                                        <th><input id="descripcion" name="descripcion" type="text"></th>
                                        <th><a class="btn btn-success"  href="<?php echo full_url."/rrhh/procesos/index.php?action=new"?>"> Agregar</a></th>			
				</tr>
			</tfoot>
	</table>
 </div>
        
        <br>
        <br>
        <h1 class="text-center">Registro</h1>
        <table id="example" class="table table-striped table-responsive" width="100%" cellspacing="0">
                <thead>
				<tr>
                                        <th>Fecha de inicio</th>
                                        <th>Fecha de fin</th>
					<th>Proceso</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th></th>
                                </tr>
			</thead>
			<tfoot>
				<tr>
                                    <th><input id="fec_apertura" name="fecha_ini" type="date"></th>
                                    <th><input id="fec_cierre" name="fecha_fin" type="date"></th>
                                    <th><label>1 <input id="id_pro" name="id_proc" type="radio" readonly=""></label>
                                        <label>2<input id="id_pro" name="id_proc" type="radio"readonly=""></label></th>
                                    <th><input id="descripcion" name="descripcion" type="text"readonly=""></th>
                                    <th><input id="estatus" name="id_estatus" type="text"></th>
                                    <th><!--<a class="btn"  href="<?php echo full_url."/rrhh/procesos/index.php?action=new"?>"> -->Detalles</a></th>			
				</tr>
			</tfoot>
	</table>
        <a class="btn btn-success"  href="<?php echo full_url."/rrhh/procesos/index.php?action=new"?>"> Agregar</a>			

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
			$(this).html( '<button id="detalles">Detalles</button>' );	
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
            { "data": "fec_apertura" },
            { "data": "fec_cierre"},
            { "data": "id_proc" },
            { "data": "descripcion" },
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
<!--
$('#column_6').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(6)).search($(this).val()).draw();
    }
});


	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});
        -->


} );

</script>