<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<h1 class="text-center big_title">Usuarios</h1>
<form action="index.php" method="post">
    <input autocomplete="off" type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
    <input autocomplete="off" type="hidden" name='id_usuario' value='<?php if(isset($values['id_persona']))echo $values['id_usuario'];?>'>

  <div class="form-group col-sm-4">
    <label for="exampleInputEmail1">Nombre de usuario <small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="nom_usuario" placeholder="NOmbre de Usuario" value="<?php if(isset($values['nom_usuario']) and $values['nom_usuario']!='') echo $values['nom_usuario'];?>">
        <?php if(isset($errors['nom_usuario']) and $errors['nom_usuario']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['nom_usuario'];?></div>
        <?php endif;?>
  </div>
  <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Clave <small class="text-danger">(*)</small></label>
    <input type="password" name="clave" class="form-control" id="exampleInputEmail1" placeholder="******">
        <?php if(isset($errors['clave']) and $errors['clave']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['clave'];?></div>
        <?php endif;?>
  </div>
  <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Confirme clave <small class="text-danger">(*)</small></label>
    <input type="password" name="clave2" class="form-control" id="exampleInputEmail1" placeholder="******">
        <?php if(isset($errors['clave2']) and $errors['clave2']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['clave2'];?></div>
        <?php endif;?>
  </div>
  
    <div class="form-group col-sm-12">

        <label class="radio-inline bg-success">
            <input type="radio" name="id_estatus" id="inlineRadio1" value="1" <?php if(isset($values['id_estatus']) and ($values['id_estatus']=='1')) echo "checked='checked'"?> <?php if(!isset($values['id_estatus']) and $values['action']=='add') echo "checked='checked'";?>> Habilitado
        </label>
        <label class="radio-inline bg-danger">
          <input type="radio" name="id_estatus" id="inlineRadio2" value="0" <?php if(isset($values['id_estatus']) and ($values['id_estatus']=='0')) echo "checked='checked'"?>> Deshabilitado
        </label>
 
    </div>
<div class="col-sm-12 col-sm-12">
    Campos obligatorios <small class="text-danger">(*)</small>
</div>   
<div class="col-sm-12 col-sm-12">
    <a class="btn btn-default" href="<?php echo full_url?>/rrhh/usuarios/index.php">Regresar</a>
    <button type="submit" class="btn btn-success">Aceptar</button>
</div> 
</form>

 
<?php include('../../view_footer_solicitud.php')?>


