<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Evaluaciones Nivel Administrativo</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
      <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#evaluacion_admin" aria-controls="evaluacion_admin" role="tab" data-toggle="tab">Nivel Administrativo</a></li>
    <li role="presentation"><a href="#evaluacion_obrero" aria-controls="evaluacion_obrero" role="tab" data-toggle="tab">Personal Obrero</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="evaluacion_admin"><?php require('evaluacion_admin.php');?></div>
    <div role="tabpanel" class="tab-pane" id="evaluacion_obrero"><?php require('evaluacion_obrero.php');?></div>
  </div>

</div>
           <button type="submit" id="guardar" class="btn btn-success">Guardar</button>

    <a class="btn btn-default" href="<?php echo full_url?>/rrhh/evaluaciones/index.php?action=Index">Regresar</a>
   
    
</form>

<?php include('../../view_footer_solicitud.php')?>

<script>  
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
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="acuerdo1"){
            $("#si1").show();
            $("#no1").hide();
        } else if (valor == "desacuerdo1") {
            $("#si1").hide();
            $("#no1").show();
        } else {
            // Otra cosa
        }
    });
});
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="acuerdo2"){
            $("#si2").show();
            $("#no2").hide();
        } else if (valor == "desacuerdo2") {
            $("#si2").hide();
            $("#no2").show();
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