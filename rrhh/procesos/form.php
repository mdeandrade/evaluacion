<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Procesos</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
      <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#datos_generales" aria-controls="datos_generales" role="tab" data-toggle="tab">Datos generales</a></li>
    <li role="presentation"><a href="#funcionarios" aria-controls="funcionarios" role="tab" data-toggle="tab">Funcionarios</a></li>
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <li role="presentation"><a href="#evaluadores" aria-controls="evaluadores" role="tab" data-toggle="tab">Evaluadores</a></li>
    <li role="presentation"><a href="#evaluaciones" aria-controls="evaluaciones" role="tab" data-toggle="tab">Evaluaciones</a></li>
    <?php endif;?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="datos_generales"><?php require('datos_generales.php');?></div>
    <div role="tabpanel" class="tab-pane" id="funcionarios"><?php require('funcionarios.php');?></div>
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <div role="tabpanel" class="tab-pane" id="evaluadores"><?php require('evaluadores.php');?></div>
    <div role="tabpanel" class="tab-pane" id="evaluaciones"><?php require('evaluaciones.php');?></div>
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

        /*$("#guardar").click(function() {
                var rango_1= $('#rango_1').val();
                alert(rango_1);
                return false;
            });*/
    $('#guardar').click(function(){
            var rango_1= $('#rango_1').val();
            var rango_1 = 5;
            
            if(rango_1 > 5){
                bootbox.alert("El valor del rango debe ser menor a 5.");
                return false;
            }
        });
        
    $('#guardar').click(function(){
            var rango_2= $('#rango_2').val();
            var rango_2 = 5;
            
            if(rango_2 > 5){
                bootbox.alert("El valor del rango debe ser menor a 5.");
                return false;
            }
        });
            
$(document).ready(function(){
    $(".rango1").change(function(){
        alert($('input[name=rango1]:radio:checked').val());

    });
    
});
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="acuerdo"){
            $("#si").show();
            $("#no").hide();
        } else if (valor == "desacuerdo") {
            $("#si").hide();
            $("#no").show();
        } else {
            // Otra cosa
        }
    });
});
/*$(function () {
   //evaluación
        $('#fec_apertura').datetimepicker();
        $('#fec_cierre').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#fec_apertura").on("dp.change", function (e) {
            $('#fec_cierre').data("DateTimePicker").minDate(e.date);
        });
        $("#fec_cierre").on("dp.change", function (e) {
            $('#fec_apertura').data("DateTimePicker").maxDate(e.date);
        });
    //odi
         $('#fec_apertura_odi').datetimepicker();
        $('#fec_cierre_odi').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#fec_apertura_odi").on("dp.change", function (e) {
            $('#fec_cierre_odi').data("DateTimePicker").minDate(e.date);
        });
        $("#fec_cierre_odi").on("dp.change", function (e) {
            $('#fec_apertura_odi').data("DateTimePicker").maxDate(e.date);
        });
      //competencia
        $('#fec_apertura_competencia').datetimepicker();
        $('#fec_cierre_competencia').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#fec_apertura_competencia").on("dp.change", function (e) {
            $('#fec_cierre_competencia').data("DateTimePicker").minDate(e.date);
        });
        $("#fec_cierre_competencia").on("dp.change", function (e) {
            $('#fec_apertura_competencia').data("DateTimePicker").maxDate(e.date);
        });

    });
    $(function () {
                   $('#evaluacion').datetimepicker();
               });
      $(function () {
               $('#notificacion').datetimepicker();
           });*/
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="acuerdo"){
            $("#si").show();
            $("#no").hide();
        } else if (valor == "desacuerdo") {
            $("#si").hide();
            $("#no").show();
        } else {
            // Otra cosa
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