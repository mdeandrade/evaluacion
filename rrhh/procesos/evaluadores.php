
          <br><br>
           <div class="container">
          <h1 class="text-center">Ubicación administrativa</h1>

          <div class="clearfix visible-md-block"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Consultoría Juídica</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                    
                </select>
          </div>
          <br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <strong><?php echo $_SESSION['nom_ubicacion']; ?></strong><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                    
                </select>
          </div>
          <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Recursos Humanos</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionatios">
                    
                </select>
          </div>
          <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Planificación y Control de Gestión</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                    
                </select>
          </div>
          <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Tecnología de la Información</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
              
                </select>
          </div>
          <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Control de la Administración Centralizada</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                    
                </select>
          </div>
          <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Control de la Administración Descentralizada</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                   
                </select>
          </div>
          <br><br>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="exampleInputEmail1">Dirección de Determinación de Responsabilidades</label><small class="text-danger">(*)</small>
                <select class="form-control" name="id_ubicacion" value="<?php if(isset($values['id_ubicacion']) and $values['id_ubicacion']!='') echo $values['id_ubicacion'];?>" id="exampleInputEmail1" placeholder="Funcionarios">
                    
                </select>
          </div>
         
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

                <div class="clearfix"></div>
                <div class="col-sm-12 col-sm-12">
                    Campos obligatorios <small class="text-danger">(*)</small>
                </div>
                <br><br>
            <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
    <br><br>
           </div>
