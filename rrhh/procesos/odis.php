    <div class="form-group">
        <label for="exampleInputEmail1">Descripción del proceso</label>
        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción">
            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
            <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
            <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Apellidos y Nombres</label>
        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Cargo</label>
        <input type="text" class="form-control" name="cargo" value="<?php if(isset($values['id_cargo']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
            <div class="alert alert-danger"><?php echo $errors[''];?></div>
            <?php endif;?>
    </div>



    <h4>status: </h4>

    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Objetivos de Desempeño Individual</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
            </tr>
            </tbody>

            </table>
    
    <h4>status: </h4>

    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Objetivos de Desempeño Individual</th>
                <th>Peso</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>Peso x Rago</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
            </tr>
            </tbody>

            </table>

    <button type="submit" class="btn btn-success">Guardar</button><br>