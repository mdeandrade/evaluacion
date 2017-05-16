      <br>
    <div class="container">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripción</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    <div class="form-inline">
        <label for="exampleInputEmail1">Desde</label>
        <input type="date" class="form-control" name="fec_apertura_evaluacion" value="<?php if(isset($values['fec_apertura_evaluacion']) and $values['fec_apertura_evaluacion']!='') echo $values['fec_apertura_evaluacion'];?>" id="exampleInputEmail1" placeholder="Fecha apertura">
            <?php if(isset($errors['fec_apertura_evaluacion']) and $errors['fec_apertura_evaluacion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_apertura_evaluacion'];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Hasta</label>
        <input type="date" class="form-control" name="fec_cierre_evaluacion" value="<?php if(isset($values['fec_cierre_evaluacion']) and $values['fec_cierre_evaluacion']!='') echo $values['fec_cierre_evaluacion'];?>" id="exampleInputEmail1" placeholder="Fecha cierre">
            <?php if(isset($errors['fec_cierre_evaluacion']) and $errors['fec_cierre_evaluacion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_cierre_evaluacion'];?></div>
            <?php endif;?>
    </div>
    <br>
    <div class="form-inline">
        <label for="exampleInputEmail1">Peso maximo para los ODI</label>
        <input type="text" class="form-control" name="peso_odi" value="<?php if(isset($values['peso_odi']) and $values['peso_odi']!='') echo $values['peso_odi'];?>" id="exampleInputEmail1" placeholder="Peso odi">
            <?php if(isset($errors['peso_odi']) and $errors['peso_odi']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['peso_odi'];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Peso maximo para las competencias</label>
        <input type="text" class="form-control" name="peso_competencia" value="<?php if(isset($values['peso_competencia']) and $values['peso_competencia']!='') echo $values['peso_competencia'];?>" id="exampleInputEmail1" placeholder="Peso competencia">
             <?php if(isset($errors['peso_competencia']) and $errors['peso_competencia']!=''):?>
             <div class="alert alert-danger"><?php echo $errors['peso_competencia'];?></div>
             <?php endif;?>
    </div>
      <br>
    <div class="form-inline">
        <label for="exampleInputEmail1">Rango maximo para los ODI</label>
        <input type="text" class="form-control" name="rengo_max_odi" value="<?php if(isset($values['rengo_max_odi']) and $values['rengo_max_odi']!='') echo $values['rengo_max_odi'];?>" id="exampleInputEmail1" placeholder="Rango odi">
            <?php if(isset($errors['rengo_max_odi']) and $errors['rengo_max_odi']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['rengo_max_odi'];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Rango maximo para las competencias</label>
        <input type="text" class="form-control" name="rango_max_competencia" value="<?php if(isset($values['rango_max_competencia']) and $values['rango_max_competencia']!='') echo $values['rango_max_competencia'];?>" id="exampleInputEmail1" placeholder="Rango competencia">
            <?php if(isset($errors['rango_max_competencia']) and $errors['rango_max_competencia']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['rango_max_competencia'];?></div>
            <?php endif;?>
    </div>
      <BR>
    <div class="form-group">
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <label for="exampleInputEmail1">Estatus</label>
        <select class="form-control input-sm" name="id_estatus" value="<?php if(isset($values['id_estatus']) and $values['id_estatus']!='') echo $values['id_estatus'];?>" id="exampleInputEmail1" placeholder="Estatus">
            <?php if(isset($errors['id_estatus']) and $errors['id_estatus']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['id_estatus'];?></div>
          <?php endif;?>
              <option>Activo</option>
              <option>Inactivo</option>
        </select>
    </div>
    </div>
  </div>
      <br>
    <div class="form-inline">
        <label for="exampleInputEmail1">Fecha de apertura para los ODI</label>
        <input type="date" class="form-control" name="fec_apertura_odi" value="<?php if(isset($values['fec_apertura_odi']) and $values['fec_apertura_odi']!='') echo $values['fec_apertura_odi'];?>" id="exampleInputEmail1" placeholder="Fecha apertura odi">
            <?php if(isset($errors['fec_apertura_odi']) and $errors['fec_apertura_odi']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_apertura_odi'];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Fecha de cierre para los ODI</label>
        <input type="date" class="form-control" name="fec_cierre_odi" value="<?php if(isset($values['fec_cierre_odi']) and $values['fec_cierre_odi']!='') echo $values['fec_cierre_odi'];?>" id="exampleInputEmail1" placeholder="Fecha cierre odi">
            <?php if(isset($errors['fec_cierre_odi']) and $errors['fec_cierre_odi']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_cierre_odi'];?></div>
            <?php endif;?>
    </div>
      <br>
    <div class="form-inline">
        <label for="exampleInputEmail1">Fecha de apertura para las competencias</label>
        <input type="date" class="form-control" name="fec_apertura_competencia" value="<?php if(isset($values['fec_apertura_competencia']) and $values['fec_apertura_competencia']!='') echo $values['fec_apertura_competencia'];?>" id="exampleInputEmail1" placeholder="Fecha apertura competencia">
            <?php if(isset($errors['fec_apertura_competencia']) and $errors['fec_apertura_competencia']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_apertura_competencia'];?></div>
            <?php endif;?>
        <label for="exampleInputEmail1">Fecha de cierre para las competencias</label>
        <input type="date" class="form-control" name="fec_cierre_competencia" value="<?php if(isset($values['fec_cierre_competencia']) and $values['fec_cierre_competencia']!='') echo $values['fec_cierre_competencia'];?>" id="exampleInputEmail1" placeholder="fecha cierre competencia">
            <?php if(isset($errors['fec_cierre_competencia']) and $errors['fec_cierre_competencia']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['fec_cierre_competencia'];?></div>
            <?php endif;?>
    </div>
      <br>
    <div class="form-group">
        <label for="exampleInputFile">Cargar personal</label>
        <input type="file" id="id_persona">
    </div>
    </div>
