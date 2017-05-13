<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Procesos</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#datos_generales" aria-controls="datos_generales" role="tab" data-toggle="tab">Datos generales</a></li>
    <li role="presentation"><a href="#niveles" aria-controls="niveles" role="tab" data-toggle="tab">Niveles</a></li>
    <li role="presentation"><a href="#ubicaciones" aria-controls="ubicaciones" role="tab" data-toggle="tab">Ubicaciones</a></li>
    <li role="presentation"><a href="#evaluadores" aria-controls="evaluadores" role="tab" data-toggle="tab">Evaluadores</a></li>
    <li role="presentation"><a href="#competencias" aria-controls="competencias" role="tab" data-toggle="tab">Competencias</a></li>
    <li role="presentation"><a href="#niveles" aria-controls="odis" role="tab" data-toggle="tab">Odis</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="datos_generales"><?php require('datos_generales.php');?></div>
    <div role="tabpanel" class="tab-pane" id="niveles"><?php require('niveles.php');?></div>
    <div role="tabpanel" class="tab-pane" id="ubicaciones"><?php require('ubicaciones.php');?></div>
    <div role="tabpanel" class="tab-pane" id="evaluadores"><?php require('evaluadores.php');?></div>
    <div role="tabpanel" class="tab-pane" id="competencias"><?php require('competencias.php');?></div>
    <div role="tabpanel" class="tab-pane" id="odis"><?php require('odis.php');?></div>
    
  </div>

</div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-primary">Inicio</button>
    <button type="submit" class="btn btn-danger">Culminar</button>
</form>

<?php include('../../view_footer_solicitud.php')?>
