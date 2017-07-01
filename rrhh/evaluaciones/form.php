<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Evaluaciones</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
      <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#datos_generales" aria-controls="datos_generales" role="tab" data-toggle="tab">Datos de la evaluacion</a></li>
    <li role="presentation"><a href="#evaluadores" aria-controls="evaluadores" role="tab" data-toggle="tab">Evaluacion</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="datos_generales"><?php require('datos_evaluacion.php');?></div>
    <div role="tabpanel" class="tab-pane" id="evaluadores"><?php require('evaluacion.php');?></div>
  </div>

</div>
      <a class="btn btn-default" href="<?php echo full_url?>/rrhh/index.php?action=bienvenida">Regresar</a>
    <button type="submit"  class="btn btn-success">Guardar</button>
    
    
</form>

<?php include('../../view_footer_solicitud.php')?>