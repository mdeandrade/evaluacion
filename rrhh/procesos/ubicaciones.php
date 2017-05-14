    <div class="form-group">
        <label for="exampleInputEmail1">responsable</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    <select class="form-control">
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
    </select>
