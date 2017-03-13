<?php 

    $ListasDependientes = new ListasDependientes();
    $listado_ubicaciones = $ListasDependientes->getListadoUbicacioneslActivas();
    $listadoCargosActivos = $ListasDependientes->getListadoCargosActivos();
?>
  <div class="form-group col-sm-4">
      <label for="exampleInputEmail1">Cédula<small class="text-danger">(*)</small></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="V-12345678">
  </div>
  <div class="form-group col-sm-4">
    <label for="exampleInputEmail1">Nombres<small class="text-danger">(*)</small></label>
    <input type="email " class="form-control" id="exampleInputEmail1" placeholder="Pedro Javier">
  </div>
  <div class="form-group col-sm-4">
    <label for="exampleInputEmail1">Apellidos<small class="text-danger">(*)</small></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pérez Gonzalez">
  </div>
  <div class="form-group col-sm-6">

        <label for="Sexo">Sexo <small class="text-danger">(*)</small></label>

                <SELECT NAME="Sexo" size="1" required class="form-control">
                  <OPTION VALUE="0">Seleccione...</OPTION>
                  <OPTION VALUE="1">Femenino</OPTION>
                  <OPTION VALUE="2">Masculino</OPTION>

                </SELECT> 	
  </div>
  <div class="form-group col-sm-6">
    <label for="exampleInputEmail1">Fecha de Nacimiento <small class="text-danger">(*)</small></label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="2017-02-01"/>
  </div>

  <div class="form-group col-sm-6">
    <label for="Cargos">Cargo <small class="text-danger">(*)</small></label>

            <SELECT NAME="id_cargo" size="1" required class="form-control">
                
                <OPTION VALUE="0">Seleccione...</OPTION>  
              <?php foreach($listadoCargosActivos as $cargos):?> 
              
                <OPTION VALUE="<?php echo $cargos['id_cargo'];?>"><?php echo $cargos['nom_cargo']?></OPTION>

              <?php endforeach;?>
            </SELECT> 	
  </div>

 <div class="form-group col-sm-6">

    <label for="Cargo">Ubicación administrativa <small class="text-danger">(*)</small></label>

            <SELECT NAME="id_ubicacion" size="1" required class="form-control">
            
                <OPTION VALUE="0">Seleccione...</OPTION>  
              <?php foreach($listado_ubicaciones as $ubicaciones):?> 
              
                <OPTION VALUE="<?php echo $ubicaciones['id_ubicacion'];?>"><?php echo $ubicaciones['nom_ubicacion']?></OPTION>

              <?php endforeach;?>
                
            </SELECT> 	
 
  </div>

    <div class="form-group col-sm-12">

        <label class="radio-inline bg-success">
            <input type="radio" name="id_estatus" id="inlineRadio1" value="1" checked=""> Habilitado
        </label>
        <label class="radio-inline bg-danger">
          <input type="radio" name="id_estatus" id="inlineRadio2" value="0"> Deshabilitado
        </label>
 
    </div>

