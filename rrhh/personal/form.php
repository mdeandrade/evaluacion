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

<div id="" class="col-xs-12">
            <p> Datos personales</p>
</div>
<br>
<br>
    <input autocomplete="off" type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
    <input autocomplete="off" type="hidden" name='id_persona' value='<?php if(isset($values['id_persona']))echo $values['id_usuario'];?>'>
    <div class="row">
        <div class="panel-body" style="display:">
         <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
       <label for="exampleInputEmail1">Tipo de documento</label><small class="text-danger">(*)</small>
            <select class="form-control" name="tip_documento" value="<?php if(isset($values['tip_documento']) and $values['tip_documento']!='') echo $values['tip_documento'];?>" id="exampleInputEmail1" placeholder="">
                <option value="1" <?php if(isset($values['tip_documento']) and $values['tip_documento']=='1') echo "selected='selected'";?>>Cédula</option>
                <option value="0" <?php if(isset($values['tip_documento']) and $values['tip_documento']=='0') echo "selected='selected'";?>>Pasaporte</option>
            </select>
    </div>
	    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
 		   <label for="exampleInputEmail1">Número de documento <small class="text-danger">(*)</small></label>
                   <input type="text" class="form-control" id="" minlength="8" maxlength="9" name="num_documento" placeholder="Número de documento" value="<?php if(isset($values['num_documento']) and $values['num_documento']!='') echo $values['num_documento'];?>">
      		  <?php if(isset($errors['nom_usuario']) and $errors['num_documento']!=''):?>
       	<div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
        		<?php endif;?>
  	</div>
            
         <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
       <label for="exampleInputEmail1">Estado Civil</label><small class="text-danger">(*)</small>
            <select class="form-control" name="edo_civil" value="<?php if(isset($values['edo_civil']) and $values['edo_civil']!='') echo $values['edo_civil'];?>" id="exampleInputEmail1" placeholder="">
                                <option value="0" <?php if(isset($values['edo_civil']) and $values['edo_civil']=='0') echo "selected='selected'";?>>Soltero</option>
                <option value="1" <?php if(isset($values['edo_civil']) and $values['edo_civil']=='1') echo "selected='selected'";?>>Casado</option>
                <option value="2" <?php if(isset($values['edo_civil']) and $values['edo_civil']=='2') echo "selected='selected'";?>>Divorciado</option>
                <option value="3" <?php if(isset($values['edo_civil']) and $values['edo_civil']=='3') echo "selected='selected'";?>>Viudo</option>
            </select>
    </div>
            <div class="col-lg-3 ">
                    <label for="exampleInputEmail1">Fecha de nacimiento</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_nacimiento' >
                            <input type='text' class="form-control" id="fec_nacimiento" name="fec_nacimiento" value="<?php if(isset($values['fec_nacimiento']) and $values['fec_nacimiento']!='') echo $values['fec_nacimiento'];?>" placeholder="YYYY/MM/DD" />
                                <?php if(isset($errors['fec_nacimiento']) and $errors['fec_nacimiento']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_nacimiento'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" id="fec_nacimiento"></span>
                                </span>
                        </div>
                </div>
             <div class="col-md-2">
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
 <div class="col-lg-3 ">
                    <label for="exampleInputEmail1">Fecha de ingreso</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_ingreso' >
                            <input type='text' class="form-control" id="fec_ingreso" name="fec_ingreso" value="<?php if(isset($values['fec_ingreso']) and $values['fec_ingreso']!='') echo $values['fec_ingreso'];?>" placeholder="YYYY/MM/DD" />
                                <?php if(isset($errors['fec_ingreso']) and $errors['fec_ingreso']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_ingreso'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" id="fec_ingreso"></span>
                                </span>
                        </div>
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <label for="exampleInputEmail1">Correo<small class="text-danger">(*)</small></label>
                <input type="e-mail" class="form-control" id="" name="correo" placeholder="PColmenares@cmc.gob.ve" value="<?php if(isset($values['correo']) and $values['correo']!='') echo $values['correo'];?>">
                <?php if(isset($errors['correo']) and $errors['correo']!=''):?>
                <div class="alert alert-danger"><?php echo $errors['correo'];?></div>
                <?php endif;?>
            </div>
         </div>
    </div>


    <div class="clearfix lg-block clearfix sm-block"></div>

                    <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
                <a class="btn btn-default" href="<?php echo full_url?>/rrhh/personal/index.php?action=Index">Regresar</a>
           

            <script>
                $(document).ready(function(){
		
        $('#fec_nacimiento, #fec_ingreso').datetimepicker({
			 viewMode: 'days',
			 locale: 'es',
			 format: 'YYYY-MM-DD',
			 //useCurrent: true,
			 showTodayButton: true,
			 showClear: true,
                         inline: false,
			 showClose: true,
			tooltips: {
				today: 'Ir a hoy',
				clear: 'Limpiar selección',
				close: 'Cerrar el calendario',
				selectMonth: 'Seleccionar mes',
				prevMonth: 'Mes anterior',
				nextMonth: 'Próximo mes',
				selectYear: 'Seleccionar año',
				prevYear: 'Previous Year',
				nextYear: 'Próximo año',
				selectDecade: 'Select Decade',
				prevDecade: 'Previous Decade',
				nextDecade: 'Next Decade',
				prevCentury: 'Previous Century',
				nextCentury: 'Next Century'
			}
			 
        });		
	});



</script>
<?php include('../../view_footer_solicitud.php')?>

    


