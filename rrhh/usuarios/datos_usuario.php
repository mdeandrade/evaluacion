<?php 
            $Personas = new Personas();
            $lista_personas = $Personas->getPersonas($values);
            $Roles = new Roles();
            $lista_usuario_rol = $Roles->getRoles($values);   
?>

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
