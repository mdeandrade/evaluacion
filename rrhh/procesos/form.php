<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Procesos</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#datos_generales" aria-controls="datos_generales" role="tab" data-toggle="tab">Datos generales</a></li>
    <li role="presentation"><a href="#funcionarios" aria-controls="funcionarios" role="tab" data-toggle="tab">Funcionarios</a></li>
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <li role="presentation"><a href="#evaluadores" aria-controls="evaluadores" role="tab" data-toggle="tab">Evaluadores</a></li>

    <?php endif;?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="datos_generales"><?php require('datos_generales.php');?></div>
    <div role="tabpanel" class="tab-pane" id="funcionarios"><?php require('funcionarios.php');?></div>
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <div role="tabpanel" class="tab-pane" id="evaluadores"><?php require('evaluadores.php');?></div>


    <?php endif;?>
  </div>

</div>
           <!--<button type="submit" id="guardar" class="btn btn-success">Guardar</button>-->

    <a class="btn btn-default" href="<?php echo full_url?>/rrhh/procesos/index.php?action=Index">Regresar</a>
    
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <a class="btn btn-primary" href="index.php?action=generar_evaluaciones&id_proc=<?php echo $values['id_proc']?>">Inicio</a>
    <button type="submit" class="btn btn-danger">Culminar</button>
    <?php endif;?>
    
</form>

<?php include('../../view_footer_solicitud.php')?>

<script>
$(document).ready(function(){
	 $('#fec_apertura_evaluacion').datetimepicker({
			 minDate: moment(),
                         dayViewHeaderFormat: 'DD MMMM YYYY',
                         viewMode: 'days',
			 locale: 'es',
			 format: 'YYYY-MM-DD',
			 //useCurrent: true,
			 showTodayButton: true,
			 showClear: true,
                         inline: false,
			 showClose: true,
			tooltips: {
				today: 'Ir a hoy',
				clear: 'Limpiar selección',
				close: 'Cerrar el calendario',
				selectMonth: 'Seleccionar mes',
				prevMonth: 'Mes anterior',
				nextMonth: 'Próximo mes',
				selectYear: 'Seleccionar año',
				prevYear: 'Previous Year',
				nextYear: 'Próximo año',
				selectDecade: 'Select Decade',
				prevDecade: 'Previous Decade',
				nextDecade: 'Next Decade',
				prevCentury: 'Previous Century',
				nextCentury: 'Next Century'
			}
			 
        });	
        $('#fec_cierre_evaluacion').datetimepicker({
			 minDate:$('#fec_apertura_evaluacion'),
                         dayViewHeaderFormat: 'DD MMMM YYYY',
                          maxDate: moment().add(6, 'month'),
                         viewMode: 'days',
			 locale: 'es',
			 format: 'YYYY-MM-DD',
			 //useCurrent: true,
			 showTodayButton: true,
			 showClear: true,
                         inline: false,
			 showClose: true,
			tooltips: {
				today: 'Ir a hoy',
				clear: 'Limpiar selección',
				close: 'Cerrar el calendario',
				selectMonth: 'Seleccionar mes',
				prevMonth: 'Mes anterior',
				nextMonth: 'Próximo mes',
				selectYear: 'Seleccionar año',
				prevYear: 'Previous Year',
				nextYear: 'Próximo año',
				selectDecade: 'Select Decade',
				prevDecade: 'Previous Decade',
				nextDecade: 'Next Decade',
				prevCentury: 'Previous Century',
				nextCentury: 'Next Century'
			}
			 
        });
        
        $('#fec_apertura_odi,#fec_cierre_odi,#fec_apertura_competencia,#fec_cierre_competencia').datetimepicker({
			 minDate: moment(),
                         dayViewHeaderFormat: 'DD MMMM YYYY',
                          maxDate: moment().add(1, 'month'),
                         viewMode: 'days',
			 locale: 'es',
			 format: 'YYYY-MM-DD',
			 //useCurrent: true,
			 showTodayButton: true,
			 showClear: true,
                         inline: false,
			 showClose: true,
			tooltips: {
				today: 'Ir a hoy',
				clear: 'Limpiar selección',
				close: 'Cerrar el calendario',
				selectMonth: 'Seleccionar mes',
				prevMonth: 'Mes anterior',
				nextMonth: 'Próximo mes',
				selectYear: 'Seleccionar año',
				prevYear: 'Previous Year',
				nextYear: 'Próximo año',
				selectDecade: 'Select Decade',
				prevDecade: 'Previous Decade',
				nextDecade: 'Next Decade',
				prevCentury: 'Previous Century',
				nextCentury: 'Next Century'
			}
			 
        });
        
	});



        
jQuery(document).ready(function(){
$(".oculto").hide();
  $(".inf").click(function(){
      var nodo = $(this).attr("href");

      if ($(nodo).is(":visible")){
           $(nodo).hide();
           return false;
      }else{
    $(".oculto").hide("slow");
    $(nodo).fadeToggle("fast");
    return false;
      }
});
});
</script>