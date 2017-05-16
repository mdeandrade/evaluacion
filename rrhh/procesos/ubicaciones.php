      <br>
    <div class="container">
    <div class="form-inline">
        <label for="exampleInputEmail1">Responsable</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
        <select class="form-control">
          <option></option>
          <option></option>
          <option></option>
          <option></option>
          <option></option>
        </select>
    </div>
    </div>
      <br>
