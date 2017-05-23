      <br>
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
        <br>
    <h4>Estatus: </h4>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th style="text-align: center">Nro</th>
                <th>Objetivos de Desempeño Individual</th>
                <th style="text-align: center">Peso</th>
                <th style="text-align: center">1</th>
                <th style="text-align: center">2</th>
                <th style="text-align: center">3</th>
                <th style="text-align: center">4</th>
                <th style="text-align: center">5</th>
                <th style="text-align: center">Peso x Rago</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso1" min="1" max="10"></td>
                <td><input type="radio" name="rango1"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango1"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango1"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango1"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango1"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso2" min="1" max="10"></td>
                <td><input type="radio" name="rango2"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango2"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango2"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango2"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango2"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso3" min="1" max="10"></td>
                <td><input type="radio" name="rango3"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango3"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango3"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango3"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango3"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso4" min="1" max="10"></td>
                <td><input type="radio" name="rango4"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango4"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rang4"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango4"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango4"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso5" min="1" max="10"></td>
                <td><input type="radio" name="rango5"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango5"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango5"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango5"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango5"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso6" min="1" max="10"></td>
                <td><input type="radio" name="rango6"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango6"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango6"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango6"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango6"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso7" min="1" max="10"></td>
                <td><input type="radio" name="rango7"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango7"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango7"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango7"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango7"id="inlineRadio1" value="5"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type="text" name="odi" style="width: 100%"></td>
                <td><input type="number" name="peso8" min="1" max="10"></td>
                <td><input type="radio" name="rango8"id="inlineRadio1" value="1"></td>
                <td><input type="radio" name="rango8"id="inlineRadio1" value="2"></td>
                <td><input type="radio" name="rango8"id="inlineRadio1" value="3"></td>
                <td><input type="radio" name="rango8"id="inlineRadio1" value="4"></td>
                <td><input type="radio" name="rango8"id="inlineRadio1" value="5"></td>
            </tr>
            </tbody>

            </table>
          </div>
          </div>
            <br>
