<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

     <!-- <br>
    <div class="container">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripción del proceso</label>
        <input type="text" class="form-control" name="descripcion"id="inlineRadio1" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Apellidos y Nombres</label>
        <input type="text" class="form-control" name=""id="inlineRadio1" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
    </div>
      <br>
      <div class="form-group">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <label for="exampleInputEmail1">Cargo</label>
          <select class="form-control input-sm" name="cargo"id="inlineRadio1" value="<?php if(isset($values['id_cargo']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
              <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
              <div class="alert alert-danger"><?php echo $errors[''];?></div>
              <?php endif;?>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
                <option></option>
          </select>
      </div>
      </div>
      </div>
        <br>-->
    <h4>Proceso: </h4>
    <h4>Estatus: </h4>
    <table class="table table-condensed"  >
        <thead>
            <tr>
                <th style="text-align: center">Nro</th>
                <th>Objetivos de Desempeño Individual</th>
                <th style="text-align: center">Peso</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type="text" name="odi" style="width: 100%" readonly=""></td>
                <td><input type="number" name="quantity" readonly=""></td>

</tr>
            </tbody>

</table>
          <div class="col-sm-12 col-sm-12">
            
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>

<?php include('../../view_footer_solicitud.php')?>
