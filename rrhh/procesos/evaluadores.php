      <br>
    <div class="container">
    <div class="form-inline">
        <label for="exampleInputEmail1">Apellidos</label>
        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Nombres</label>
        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
    </div>
      <br>
    <div class="form-inline">
        <label for="exampleInputEmail1">Cargo</label>
        <input type="text" class="form-control" name="cargo" value="<?php if(isset($values['id_cargo']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Ubicacion</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    </div>
      <br>
