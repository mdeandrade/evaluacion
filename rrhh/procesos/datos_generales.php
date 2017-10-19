<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well">
            <a href="#info1" class=" inf"><strong>Datos generales</strong></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well">
            <a href="#info2" class=" inf"><strong>Asignación de ODI</strong></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well">
            <a href="#info3" class=" inf"><strong>Aplicación de evaluación</strong></a>
        </div>
    </div>
<!-- contenido informacion adicional -->
    <!-- Datos generales -->
    <div class="row">
        <div id="info1" class="col-xs-12  well oculto">
            <p> Datos Generales</p>
                <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <label for="exampleInputEmail1">Descripción</label><small class="text-danger">(*)</small>
                        <input type="text" class="form-control" name="descripcion" value="<?php if(isset($values['descripcion']) and $values['descripcion']!='') echo $values['descripcion'];?>" id="exampleInputEmail1" placeholder="Descripción del proceso">
                            <?php if(isset($errors['descripcion']) and $errors['descripcion']!=''):?>
                                <div class="alert alert-danger"><?php echo $errors['descripcion'];?></div>
                            <?php endif;?>
                </div>
                <div class="col-lg-3 ">
                    <label for="exampleInputEmail1">Inicio del poceso</label><small class="text-danger">(*)</small>
                        <div class='input-group date'  onchange="ValidDate(this)" id='fec_apertura'>
                            <input type='text' class="form-control" name="fec_apertura_evaluacion" value="<?php if(isset($values['fec_apertura_evaluacion']) and $values['fec_apertura_evaluacion']!='') echo $values['fec_apertura_evaluacion'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD" />
                                <?php if(isset($errors['fec_apertura_evaluacion']) and $errors['fec_apertura_evaluacion']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_apertura_evaluacion'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div class="col-lg-3 ">
                    <label for="exampleInputEmail1">Fin del proceso</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_cierre' >
                            <input type='text' class="form-control" name="fec_cierre_evaluacion" value="<?php if(isset($values['fec_cierre_evaluacion']) and $values['fec_cierre_evaluacion']!='') echo $values['fec_cierre_evaluacion'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD" />
                                <?php if(isset($errors['fec_cierre_evaluacion']) and $errors['fec_cierre_evaluacion']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_cierre_evaluacion'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div class="col-lg-2">
                    <label for="exampleInputEmail1">Estatus</label><small class="text-danger">(*)</small>
                        <select class="form-control" name="id_estatus" value="<?php if(isset($values['id_estatus']) and $values['id_estatus']!='') echo $values['id_estatus'];?>" id="exampleInputEmail1" placeholder="Estatus">
                            <option value="3" <?php if(isset($values['id_estatus']) and $values['id_estatus']=='3') echo "selected='selected'";?>>Activo</option>
                            <option value="4" <?php if(isset($values['id_estatus']) and $values['id_estatus']=='4') echo "selected='selected'";?>>Desactivado</option>
                        </select>
                </div>
                <br>
                <div class="col-sm-12 col-sm-12">
                    Campos obligatorios <small class="text-danger">(*)</small>
                </div>
        </div>
<!-- Asignación de ODI-->
        <div id="info2" class="col-xs-12 well oculto">
            <p>Asignación de ODI</p>
                <div class="clearfix visible-lg-block clearfix visible-sm-block"></div>
                <div class="col-lg-3">
                    <label for="exampleInputEmail1">Fecha de apertura para asignar ODI</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_apertura_odi'>
                            <input type='text' class="form-control" name="fec_apertura_odi" value="<?php if(isset($values['fec_apertura_odi']) and $values['fec_apertura_odi']!='') echo $values['fec_apertura_odi'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD">
                                <?php if(isset($errors['fec_apertura_odi']) and $errors['fec_apertura_odi']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_apertura_odi'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div class="col-lg-3  ">
                    <label for="exampleInputEmail1">Fecha de cierre para asignar ODI</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_cierre_odi' >
                            <input type='text' class="form-control" name="fec_cierre_odi" value="<?php if(isset($values['fec_cierre_odi']) and $values['fec_cierre_odi']!='') echo $values['fec_cierre_odi'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD">
                                <?php if(isset($errors['fec_cierre_odi']) and $errors['fec_cierre_odi']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_cierre_odi'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="exampleInputEmail1">Peso máximo para ODI</label><small class="text-danger">(*)</small>
                        <input type="text" min="0" max="50" class="form-control" name="peso_odi" value="<?php if(isset($values['peso_odi']) and $values['peso_odi']!='') echo $values['peso_odi'];?>" id="exampleInputEmail1" placeholder="Peso de ODI">
                            <?php if(isset($errors['peso_odi']) and $errors['peso_odi']!=''):?>
                                <div class="alert alert-danger"><?php echo $errors['peso_odi'];?></div>
                            <?php endif;?>
                </div>
                <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                    <label for="exampleInputEmail1">Rango máximo para ODI</label><small class="text-danger">(*)</small>
                        <input type="number" min="0" max="5" class="form-control" id="rango_1" name="rango_max_odi" value="<?php if(isset($values['rango_max_odi']) and $values['rango_max_odi']!='') echo $values['rango_max_odi'];?>" id="exampleInputEmail1" placeholder="Rango de ODI">
                            <?php if(isset($errors['rango_max_odi']) and $errors['rango_max_odi']!=''):?>
                                <div class="alert alert-danger"><?php echo $errors['rango_max_odi'];?></div>
                            <?php endif;?>
                </div>
                <br>
                <div class="col-sm-12 col-sm-12">
                    Campos obligatorios <small class="text-danger">(*)</small>
                </div>
        </div>
<!-- Aplicacion de la evaluación -->
        <div id="info3" class="col-xs-12 well oculto">
            <p>Aplicacion de la evaluación</p>
            <div class="clearfix visible-md-block"></div>
                <div class="col-lg-3">
                    <label for="exampleInputEmail1">Apertura del proceso de evaluación</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_apertura_competencia'>
                            <input type='text' class="form-control" name="fec_apertura_competencia" value="<?php if(isset($values['fec_apertura_competencia']) and $values['fec_apertura_competencia']!='') echo $values['fec_apertura_competencia'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD">
                                <?php if(isset($errors['fec_apertura_competencia']) and $errors['fec_apertura_competencia']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_apertura_competencia'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div class="col-lg-3">
                    <label for="exampleInputEmail1">Cierre del proceso de evaluación</label><small class="text-danger">(*)</small>
                        <div class='input-group date' id='fec_cierre_competencia'>
                            <input type='text' class="form-control" name="fec_cierre_competencia" value="<?php if(isset($values['fec_cierre_competencia']) and $values['fec_cierre_competencia']!='') echo $values['fec_cierre_competencia'];?>" id="exampleInputEmail1" placeholder="YYYY/MM/DD">
                                <?php if(isset($errors['fec_cierre_competencia']) and $errors['fec_cierre_competencia']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors['fec_cierre_competencia'];?></div>
                                <?php endif;?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="exampleInputEmail1">Peso máximo para competencias</label><small class="text-danger">(*)</small>
                        <input type="text" min="0" max="50" class="form-control" name="peso_competencia" value="<?php if(isset($values['peso_competencia']) and $values['peso_competencia']!='') echo $values['peso_competencia'];?>" id="exampleInputEmail1" placeholder="Peso de competencas">
                            <?php if(isset($errors['peso_competencia']) and $errors['peso_competencia']!=''):?>
                                <div class="alert alert-danger"><?php echo $errors['peso_competencia'];?></div>
                            <?php endif;?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="exampleInputEmail1">Rango máximo para competencias</label><small class="text-danger">(*)</small>
                        <input type="number" min="0" max="5" class="form-control" id="rango_2" name="rango_max_competencia" value="<?php if(isset($values['rango_max_competencia']) and $values['rango_max_competencia']!='') echo $values['rango_max_competencia'];?>" id="exampleInputEmail1" placeholder="Rango competencia">
                        <?php if(isset($errors['rango_max_competencia']) and $errors['rango_max_competencia']!=''):?>
                            <div class="alert alert-danger"><?php echo $errors['rango_max_competencia'];?></div>
                        <?php endif;?>
                </div>
                <br>
                <div class="col-sm-12 col-sm-12">
                    Campos obligatorios <small class="text-danger">(*)</small>
                </div>
        </div>
    </div>
</div>
<br>

<br>
<br>
