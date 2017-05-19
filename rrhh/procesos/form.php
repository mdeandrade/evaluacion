<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center">Procesos</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="text" name="action" value="<?php if(isset($values['action']) and $values['action']!='') echo $values['action'];?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#datos_generales" aria-controls="datos_generales" role="tab" data-toggle="tab">Datos generales</a></li>
    <li role="presentation"><a href="#evaluadores" aria-controls="evaluadores" role="tab" data-toggle="tab">Evaluaciones</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="datos_generales"><?php require('datos_generales.php');?></div>
    <div role="tabpanel" class="tab-pane" id="evaluadores"><?php require('evaluaciones.php');?></div>
  </div>

</div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <?php if(isset($values['id_proc']) and $values['id_proc']!=''):?>
    <a class="btn btn-primary" href="index.php?action=generar_evaluaciones&id_proc=<?php echo $values['id_proc']?>">Inicio</a>
    <button type="submit" class="btn btn-danger">Culminar</button>
    <?php endif;?>
    
</form>

<?php include('../../view_footer_solicitud.php')?>
<script>

$(document).ready(function(){
    $(".rango1").change(function(){
        alert($('input[name=rango1]:radio:checked').val());

    });
    
});

</script>