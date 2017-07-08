<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<br>
    <div class="container">
    <div class="form-inline">
      <div class="form-group">
      <div class="row">
      <div class="col-md-0"></div>
      <div class="col-md-5">
        <label for="exampleInputEmail1">Nivel</label>
        <select class="form-control" name="id_nivel" value="<?php if(isset($values['id_nivel']) and $values['id_nivel']!='') echo $values['id_nivel'];?>" id="exampleInputEmail1" placeholder="Estatus">
            <?php if(isset($errors['id_nivel']) and $errors['id_nivel']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['id_nivel'];?></div>
          <?php endif;?>
              <option>Directivo</option>
              <option>Profesional</option>
              <option>Tecnico</option>
              <option>Administrativio</option>
              <option>Auxiliares</option>
        </select>
    </div>
    </div>
  </div>
        <label for="exampleInputEmail1">Descripción</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    </div>
      <br>