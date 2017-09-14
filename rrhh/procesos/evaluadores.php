<?php 
            $Evaluadores = new Evaluadores();
            $lista_evaluadores = $Evaluadores->getEvaluadores($values);
            $Ubicaciones = new Ubicaciones();
            $lista_ubicaciones = $Ubicaciones->getUbicaciones($values);   
            
?>
<div class="container">
    <h1 class="text-center">Ubicaciones administrativa</h1>
    <br>
    <br>
        <div class="clearfix visible-md-block"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="exampleInputEmail1">Direcciones</label><small class="text-danger">(*)</small>
                    <select class="form-control" name="id_ubicacion_evaluador" value="<?php if(isset($values['id_ubicacion_evaluador']) and $values['id_ubicacion_evaluador']!='') echo $values['id_ubicacion_evaluador'];?>" id="exampleInputEmail1" >
                        <option value="" >Seleccione...</option>
                            <?php if(isset($lista_ubicaciones) and count($lista_ubicaciones)>0):?>
                                <?php foreach($lista_ubicaciones as $ubicacion):?>
                                    <option value="<?php echo $evaluador['id_ubicacion'];?>" <?php if(isset($values['id_ubicacion_evaluador']) and $values['id_ubicacion_evaluador']== $ubicacion['id_ubicacion']) echo "selected='selected'";?>><?php echo strtoupper($ubicacion['nom_ubicacion']);?> </option>
                                <?php endforeach;?>
                            <?php endif;?>
                    </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="exampleInputEmail1">Evaluador</label><small class="text-danger">(*)</small>
                    <select class="form-control" name="id_persona_evaluador" value="<?php if(isset($values['id_persona_evaluador']) and $values['id_persona_evaluador']!='') echo $values['id_persona_evaluador'];?>" id="exampleInputEmail1" >
                        <option value="" >Seleccione...</option>
                            <?php if(isset($lista_evaluadores) and count($lista_evaluadores)>0):?>
                                <?php foreach($lista_evaluadores as $evaluador):?>
                                    <option value="<?php echo $evaluador['id_persona'];?>" <?php if(isset($values['id_persona_evaluador']) and $values['id_persona_evaluador']== $evaluador['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($evaluador['pri_nom']);?> <?php echo strtoupper($evaluador['pri_ape']);?> </option>
                                <?php endforeach;?>
                            <?php endif;?>
                    </select>
            </div>
</div>
<br>
<br>
<div class="clearfix"></div>
<div class="col-sm-12 col-sm-12">
    Campos obligatorios <small class="text-danger">(*)</small>
</div>
<br>
<br>
<button type="submit" id="guardar" class="btn btn-success">Guardar</button>
<br>
<br>