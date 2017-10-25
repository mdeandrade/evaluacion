<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<?php 
            
            $Ubicaciones = new Ubicaciones();
            $lista_ubicaciones = $Ubicaciones->getUbicaciones($values);   
            $Cargos = new Cargos();
            $lista_cargos = $Cargos->getCargos($values);
            $Personas = new Personas();
            $lista_personas = $Personas->getPersonas($values);
            $Roles = new Roles();
            $lista_usuario_rol = $Roles->getRoles($values);
            
?>
<style> 
.fem 
{ 
background-color:rgba(249, 172, 187, 0.53); 
} 
.mas 
{ 
background-color:rgba(172, 210, 249, 0.53); 
} 
</style> 
<br>
<br>
<div id="" class="col-xs-12">
            <p> Datos personales</p>
</div>
<br>
<br>
    <input autocomplete="off" type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
    <input autocomplete="off" type="hidden" name='id_persona' value='<?php if(isset($values['id_persona']))echo $values['id_usuario'];?>'>
    <div class="row">
        <div class="panel-body" style="display:">
         <div class="col-lg-4 col-md-4 col-sm-3 col-xs-6">
       <label for="exampleInputEmail1">Tipo de documento</label><small class="text-danger">(*)</small>
            <select class="form-control" name="tip_documento" value="<?php if(isset($values['tip_documento']) and $values['tip_documento']!='') echo $values['tip_documento'];?>" id="exampleInputEmail1" placeholder="">
                <option value="1" <?php if(isset($values['tip_documento']) and $values['tip_documento']=='1') echo "selected='selected'";?>>Cédula</option>
                <option value="0" <?php if(isset($values['tip_documento']) and $values['tip_documento']=='0') echo "selected='selected'";?>>...</option>
            </select>
    </div>
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
 		   <label for="exampleInputEmail1">Número de documento <small class="text-danger">(*)</small></label>
                   <input type="text" class="form-control" id="" minlength="8" maxlength="9" name="num_documento" placeholder="Número de documento" value="<?php if(isset($values['num_documento']) and $values['num_documento']!='') echo $values['num_documento'];?>">
      		  <?php if(isset($errors['nom_usuario']) and $errors['num_documento']!=''):?>
       	<div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
        		<?php endif;?>
  	</div>
             <div class="col-md-4">
                 <div class="clearfix md-block clearfix sm-block"></div>
                        <div class="form-group" rel="popover" data-trigger="hover" data-content="Indicar su acuerdo o no con los resultados de su evaluación." style="display: block;">
                            <label class="control-label">Sexo<span class="req"> *</span></label>
                                <SELECT NAME="sexo" class="form-control">
                                    <OPTION VALUE="">Seleccione...</OPTION>
                                    <OPTION class="fem" VALUE="F" <?php if(isset($values['sexo']) and $values['sexo']=='F') echo "selected='selected'"?>>Femenino</OPTION>
                                    <OPTION class="mas" VALUE="M" <?php if(isset($values['sexo']) and $values['sexo']=='M') echo "selected='selected'"?>>Masculino</OPTION>

                                </SELECT> 
                                    <?php if(isset($errors['sexo']) and $errors['sexo']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['sexo'];?></div>
                                    <?php endif;?>
                        </div>
                    </div>
         </div>
       <div class="panel-body">
            <div class="clearfix lg-block clearfix sm-block"></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <label for="exampleInputEmail1">Primer Nombre<small class="text-danger">(*)</small></label>
                <input type="text" class="form-control" id="" name="pri_nom" placeholder="Pimer nombre" value="<?php if(isset($values['pri_nom']) and $values['pri_nom']!='') echo $values['pri_nom'];?>">
                <?php if(isset($errors['pri_nom']) and $errors['pri_nom']!=''):?>
                <div class="alert alert-danger"><?php echo $errors['pri_nom'];?></div>
                <?php endif;?>
            </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
    <label for="exampleInputEmail1">Segundo Nombre<small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="seg_nom" placeholder="Segundo nombre" value="<?php if(isset($values['seg_nom']) and $values['seg_nom']!='') echo $values['seg_nom'];?>">
        <?php if(isset($errors['seg_nom']) and $errors['seg_nom']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['seg_nom'];?></div>
        <?php endif;?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
    <label for="exampleInputEmail1">Primer Apellido<small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="pri_ape" placeholder="Primer Apellido" value="<?php if(isset($values['pri_ape']) and $values['pri_ape']!='') echo $values['pri_ape'];?>">
        <?php if(isset($errors['pri_ape']) and $errors['pri_ape']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['pri_ape'];?></div>
        <?php endif;?>
  </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
    <label for="exampleInputEmail1">Segundo Apellido<small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="seg_ape" placeholder="Segundo Apellido" value="<?php if(isset($values['seg_ape']) and $values['seg_ape']!='') echo $values['seg_ape'];?>">
        <?php if(isset($errors['seg_ape']) and $errors['seg_ape']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['seg_ape'];?></div>
        <?php endif;?>
  </div>
       
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <label for="exampleInputEmail1">Fecha de nacimiento<small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="fec_nacimiento" placeholder="YYYY/MM/DD" value="<?php if(isset($values['fec_nacimiento']) and $values['fec_nacimiento']!='') echo $values['fec_nacimiento'];?>">
        <?php if(isset($errors['fec_nacimiento']) and $errors['fec_nacimiento']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['fec_nacimiento'];?></div>
        <?php endif;?>
  </div>
            

       <div class="form-group col-sm-3">
    <label for="exampleInputEmail1">Cargo <small class="text-danger">(*)</small></label>
    <select class="form-control" name="id_cargo_persona" value="<?php if(isset($values['id_cargo_persona']) and $values['id_cargo_persona']!='') echo $values['id_cargo_persona'];?>" id="exampleInputEmail1" >
                        <option value="" >Seleccione...</option>
                            <?php if(isset($lista_cargos) and count($lista_cargos)>0):?>
                                <?php foreach($lista_cargos as $cargos):?>
                                    <option value="<?php echo $cargos['id_cargo'];?>" <?php if(isset($values['id_cargo_persona']) and $values['id_cargo_persona']== $cargos['id_cargo']) echo "selected='selected'";?>><?php echo strtoupper($cargos['nom_cargo']);?> </option>
                                <?php endforeach;?>
                            <?php endif;?>
                    </select>
  </div>
    <div class="form-group col-sm-3">
            <label for="exampleInputEmail1">Ubicación <small class="text-danger">(*)</small></label>

    <select class="form-control" name="id_ubicacion_evaluador" value="<?php if(isset($values['id_ubicacion_evaluador']) and $values['id_ubicacion_evaluador']!='') echo $values['id_ubicacion_evaluador'];?>" id="exampleInputEmail1" >
                        <option value="" >Seleccione...</option>
                            <?php if(isset($lista_ubicaciones) and count($lista_ubicaciones)>0):?>
                                <?php foreach($lista_ubicaciones as $ubicacion):?>
                                    <option value="<?php echo $evaluador['id_ubicacion'];?>" <?php if(isset($values['id_ubicacion_evaluador']) and $values['id_ubicacion_evaluador']== $ubicacion['id_ubicacion']) echo "selected='selected'";?>><?php echo strtoupper($ubicacion['nom_ubicacion']);?> </option>
                                <?php endforeach;?>
                            <?php endif;?>
                    </select>
  </div>
  <div class="form-group col-sm-3">
    <label for="exampleInputEmail1">Fecha de ingreso<small class="text-danger">(*)</small></label>
    <input type="text" class="form-control" id="" name="fec_ingreso" placeholder="Fecha de ingreso" value="<?php if(isset($values['fec_ingreso']) and $values['fec_ingreso']!='') echo $values['fec_ingreso'];?>">
        <?php if(isset($errors['fec_ingreso']) and $errors['fec_ingreso']!=''):?>
        <div class="alert alert-danger"><?php echo $errors['fec_ingreso'];?></div>
        <?php endif;?>
  </div>
         </div>
    </div>
    
    <!--Datos de usuario-->
    <div id="" class="col-xs-12">
    <p> Datos de usuario</p>
</div>
    <div class="clearfix lg-block clearfix sm-block"></div>
    <div class="form-group col-sm-4">
        <label for="exampleInputEmail1">Funcionario</label><small class="text-danger">(*)</small>
            <select class="form-control" name="id_personal_usuario" value="<?php if(isset($values['id_personas_usuario']) and $values['id_personas_usuario']!='') echo $values['id_personas_usuario'];?>" id="exampleInputEmail1" >
                <option value="" >Seleccione...</option>
                    <?php if(isset($lista_personas) and count($lista_personas)>0):?>
                        <?php foreach($lista_personas as $personas):?>
                            <option value="<?php echo $personas['id_persona'];?>" <?php if(isset($values['id_personas_usuario']) and $values['id_personas_usuario']== $personas['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($personas['pri_nom']);?> <?php echo strtoupper($personas['pri_ape']);?> </option>
                        <?php endforeach;?>
                    <?php endif;?>
            </select>
    </div>
    <div class="form-group col-sm-3">
        <label for="exampleInputEmail1">Tipo de usuario</label><small class="text-danger">(*)</small>
            <select class="form-control" name="tipo_usuario" value="<?php if(isset($values['tipo_usuario']) and $values['tipo_usuario']!='') echo $values['tipo_usuario'];?>" id="exampleInputEmail1" >
                <option value="" >Seleccione...</option>
                    <?php if(isset($lista_usuario_rol) and count($lista_usuario_rol)>0):?>
                        <?php foreach($lista_usuario_rol as $roles):?>
                            <option value="<?php echo $roles['id_rol'];?>" <?php if(isset($values['tipo_usuario']) and $values['tipo_usuario']== $roles['id_rol']) echo "selected='selected'";?>><?php echo strtoupper($roles['nom_rol']);?> </option>
                        <?php endforeach;?>
                    <?php endif;?>
            </select>
    </div>          
    <div class="form-group col-sm-3">
        <label for="exampleInputEmail1">Nombre de usuario <small class="text-danger">(*)</small></label>
            <input type="text" class="form-control" id="" name="nom_usuario" minlength="6" maxlength="20" placeholder="Nombre de Usuario" value="<?php if(isset($values['nom_usuario']) and $values['nom_usuario']!='') echo $values['nom_usuario'];?>">
                <?php if(isset($errors['nom_usuario']) and $errors['nom_usuario']!=''):?>
                    <div class="alert alert-danger"><?php echo $errors['nom_usuario'];?></div>
                <?php endif;?>
    </div>
    <div class="clearfix lg-block clearfix sm-block"></div>
    <div class="form-group col-sm-3">
        <label for="exampleInputEmail1">Clave <small class="text-danger">(*)</small></label>
          <input type="password" name="clave" minlength="8" maxlength="20" class="form-control" id="exampleInputEmail1" placeholder="******">
                <?php if(isset($errors['clave']) and $errors['clave']!=''):?>
                    <div class="alert alert-danger"><?php echo $errors['clave'];?></div>
                <?php endif;?>
    </div>
    <div class="form-group col-sm-3">
        <label for="exampleInputEmail1">Confirme clave <small class="text-danger">(*)</small></label>
            <input type="password" name="clave2" minlength="8" maxlength="20" class="form-control" id="exampleInputEmail1" placeholder="******">
                <?php if(isset($errors['clave2']) and $errors['clave2']!=''):?>
                    <div class="alert alert-danger"><?php echo $errors['clave2'];?></div>
                <?php endif;?>
    </div>
    <div class="form-group col-sm-12">
        <label class="radio-inline bg-success">
            <input type="radio" name="id_estatus" id="inlineRadio1" value="1" <?php if(isset($values['id_estatus']) and ($values['id_estatus']=='1')) echo "checked='checked'"?> <?php if(!isset($values['id_estatus']) and $values['action']=='add') echo "checked='checked'";?>> Habilitado
        </label>
        <label class="radio-inline bg-danger">
            <input type="radio" name="id_estatus" id="inlineRadio2" value="0" <?php if(isset($values['id_estatus']) and ($values['id_estatus']=='0')) echo "checked='checked'"?>> Deshabilitado 
        </label>
    </div>
    <div class="col-sm-12 col-sm-12">
        Campos obligatorios <small class="text-danger">(*)</small>
    </div>   
    <div class="clearfix lg-block clearfix sm-block"></div>

                    <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
                <a class="btn btn-default" href="<?php echo full_url?>/rrhh/usuarios/index.php?action=Index">Regresar</a>
            </form>
            <script>


</script>
<?php include('../../view_footer_solicitud.php')?>

    


