<?php 
            $Personas = new Personas();
            $lista_personas = $Personas->getPersonas($values);
            $Rangos = new Rangos();
            $lista_rangos = $Rangos->getRangos($values);
            /*$Evaluaciones = new Evaluaciones();
            $Competencias = $Competencias->getCompetencias($values);*/
?>

<div class="col-md-12">
    <h1 class="text-center">Evaluación del Desempeño</h1>
        <div class="controls col-sm-12">
           <p class="text-center" data-default-label="Header" data-default-is-header="true" data-control-type="header">Nivel Administrativo </p>
                <span    class="error"></span>
        </div>
</div>
<!--Titulos-->
    <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12 well">
            <a href="#info7" class=" inf"><strong>Datos de identificación</strong></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 well">
            <a href="#info8" class=" inf"><strong>Establecimiento y evaluación del desempeño (1RA FASE)</strong></a>
        </div>
        <div class="col-lg-3  col-md-3  col-sm-12 col-xs-12 well">
                <a href="#info9" class=" inf"><strong>Evaluación de competencias (2DA FASE)</strong></a>
        </div>
                <div class="col-lg-3  col-md-3  col-sm-12 col-xs-12 well">
                <a href="#info14" class=" inf"><strong>Comentarios</strong></a>
        </div>
    </div>
<!-- contenido -->

<!-- Datos de identificación -->
       <!-- Datos de identificación -->
        <div class="row">
            <div id="info7" class="col-xs-12 well oculto">
              <p>DATOS DE IDENTIFICACIÓN </p>
                <div class="panel-body">
                    <div class="col-md-4">
			<h4>1. DATOS DEL EVALUADO	</h4>
                            <table class="table table-condensed table-bordered table-hover" id="idSalida">
                                 <tr>
                                    <td align="left">Cédula de Identidad
                                        <select onchange="charge()" class="form-control" name="id_personal_evaluacion"  id="id_pevaluacion" >
                                            <option value="" >Seleccione...</option>
                                                <?php if(isset($lista_personas) and count($lista_personas)>0):?>
                                            
                                                    <?php foreach($lista_personas as $personas):?>
                                                        <option value="<?php echo $personas['id_persona'];?>" <?php if(isset($values['id_personal_evaluacion']) and $values['id_personal_evaluacion']== $personas['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($personas['num_documento']);?> </option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                        </select>                                    
                                    </td>
                                </tr>
                                
                            </table>
                    </div>
                    <div class="col-md-4">
                        <h4>2. DATOS DEL EVALUADOR	</h4>
                            <table class="table table-condensed table-bordered table-hover" id="idExit">
                                 <tr>
                                    <td align="left">Cédula de Identidad
                                        <select onchange="datose()" class="form-control" name="id_personal_evaluacion"  id="id_pevaluador" >
                                            <option value="" >Seleccione...</option>
                                                <?php if(isset($lista_personas) and count($lista_personas)>0):?>
                                            
                                                    <?php foreach($lista_personas as $personas):?>
                                                        <option value="<?php echo $personas['id_persona'];?>" <?php if(isset($values['id_personal_evaluacion']) and $values['id_personal_evaluacion']== $personas['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($personas['num_documento']);?> </option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                        </select>
                                    </td>
                                </tr>
                                
                            </table>
                    </div>
                    <div class="col-md-4">
                        <h4>3. DATOS DEL SUPERVISOR DEL EVALUADOR	</h4>
                            <table class="table table-condensed table-bordered table-hover" id="idE">
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <select onchange="dato()" class="form-control" name="id_personal_evaluacion"  id="id_sevaluador" >
                                            <option value="" >Seleccione...</option>
                                                <?php if(isset($lista_personas) and count($lista_personas)>0):?>
                                            
                                                    <?php foreach($lista_personas as $personas):?>
                                                        <option value="<?php echo $personas['id_persona'];?>" <?php if(isset($values['id_personal_evaluacion']) and $values['id_personal_evaluacion']== $personas['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($personas['num_documento']);?> </option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                        </select>
                                    </td>
                                </tr>                                <tr>
                                    
                            </table>
                    </div>
                </div>
            </div>

<!-- 1ra parte-->
            <div id="info8" class="col-xs-12 well oculto">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h4> DATOS DEL EVALUADO	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <input type="text" class="form-control" name="num_documento" value="<?php if(isset($values['num_documento' ]) and $values['num_documento']!='num_documento') echo $values['num_documento'];?>" <?php echo strtoupper($id_persona ['num_documento']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['num_documento']) and $errors['num_documento']!='num_documento'):?>
                                                <div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
                                            <?php endif;?>
                                    </td>
                                
                                    <td align="left">Apellidos y Nombres
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['pri_nom']);?> <?php echo strtoupper($id_persona ['pri_ape']);?>id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                            <?php endif;?>
                                    </td>
                        
                                    <td align="left">Título de Cargo
                                        <input type="text" class="form-control" name="nom_cargo" value="<?php if(isset($values['nom_cargo']) and $values['nom_cargo']!='nom_cargo') echo $values['nom_cargo'];?>" <?php echo strtoupper($cargo['cargo']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['nom_cargo']) and $errors['nom_cargo']!='nom_cargo'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_cargo'];?></div>
                                            <?php endif;?>
                                    </td>
                     
                                    <td align="left">Fecha de Ingreso
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['fec_ingreso']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                                <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                            <?php endif;?>
                                    </td>
                   
                                    <td align="left">Ubicación Administrativa
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" <?php echo strtoupper($ubicacion ['nom_ubicacion']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                                <p>ESTABLECIMIENTO Y EVALUACIÓN DEL DESEMPEÑO (1RA FASE)</p>
                  <div class="panel-body">
                        <div class="col-md-12">
                            <form action="suma.php">
                                <table class="table table-condensed table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">#</th>
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
                                            <td><textarea class="form-control" name="odi" id="odi-1" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                            <td><input type="number" name="peso14" min="5" max="25" placeholder="0" onChange="suma();" class="peso1"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="1" onclick="operacion1(1, 'peso14', 'pxr14')" checked></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="2"onclick="operacion1(2, 'peso14', 'pxr14')"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="3" onclick="operacion1(3, 'peso14', 'pxr14')"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="4" onclick="operacion1(4, 'peso14', 'pxr14')"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="5" onclick="operacion1(5, 'peso14', 'pxr14')"></td>
                                            <td><input type="text" name="pxr14" value="" readonly="" placeholder="0" onchange="operacionpr()"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2</td>
                                        <td><textarea class="form-control" name="odi" id="odi-2" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" name="peso15" min="5" max="25" placeholder="0" onChange="suma();" class="peso1"></td>
                                         <td><input type="radio" name="rango2"id="inlineRadio1" value="1" onclick="operacion1(1, 'peso15', 'pxr15')" checked></td>
                                        <td><input type="radio" name="rango2"id="inlineRadio1" value="2" onclick="operacion1(2, 'peso15', 'pxr15')"></td>
                                        <td><input type="radio" name="rango2"id="inlineRadio1" value="3" onclick="operacion1(3, 'peso15', 'pxr15')"></td>
                                        <td><input type="radio" name="rango2"id="inlineRadio1" value="4" onclick="operacion1(4, 'peso15', 'pxr15')"></td>
                                        <td><input type="radio" name="rango2"id="inlineRadio1" value="5" onclick="operacion1(5, 'peso15', 'pxr15')"></td>
                                        <td><input type="text" name="pxr15" value="" readonly="" placeholder="0" onchange="operacionpr()"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><textarea class="form-control" name="odi" id="odi-3" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" name="peso16" min="5" max="25" placeholder="0" onChange="suma();" class="peso1"></td>
                                        <td><input type="radio" name="rango3"id="inlineRadio1" value="1"   onclick="operacion1(1, 'peso16', 'pxr16')" checked></td>
                                        <td><input type="radio" name="rango3"id="inlineRadio1" value="2"  onclick="operacion1(2, 'peso16', 'pxr16')"></td>
                                        <td><input type="radio" name="rango3"id="inlineRadio1" value="3"  onclick="operacion1(3, 'peso16', 'pxr16')"></td>
                                        <td><input type="radio" name="rango3"id="inlineRadio1" value="4"  onclick="operacion1(4, 'peso16', 'pxr16')"></td>
                                        <td><input type="radio" name="rango3"id="inlineRadio1" value="5"  onclick="operacion1(5, 'peso16', 'pxr16')"></td>
                                        <td><input type="text" name="pxr16" value="" readonly="" placeholder="0" onchange="operacionpr()"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><textarea class="form-control" name="odi" id="odi-4" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" name="peso17"  min="5" max="25"  min="1" max="7" placeholder="0" onChange="suma();" class="peso1"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="1"  onclick="operacion1(1, 'peso17', 'pxr17')" checked></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="2" onclick="operacion1(2, 'peso17', 'pxr17')"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="3" onclick="operacion1(3, 'peso17', 'pxr17')"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="4" onclick="operacion1(4, 'peso17', 'pxr17')"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="5" onclick="operacion1(5, 'peso17', 'pxr17')"></td>
                                        <td><input type="text" name="pxr17" value="" readonly="" placeholder="0"  onchange="operacionpr()"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td> 
                                        <td><textarea class="form-control" name="odi" id="odi-5" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" name="peso18"  min="5" max="25" placeholder="0" onChange="suma();" class="peso1"></td>
                                        <td><input type="radio" name="rango5"id="inlineRadio1" value="1"  onclick="operacion1(1, 'peso18', 'pxr18')" checked></td>
                                        <td><input type="radio" name="rango5"id="inlineRadio1" value="2"  onclick="operacion1(2, 'peso18', 'pxr18')"></td>
                                        <td><input type="radio" name="rango5"id="inlineRadio1" value="3"  onclick="operacion1(3, 'peso18', 'pxr18')"></td>
                                        <td><input type="radio" name="rango5"id="inlineRadio1" value="4"  onclick="operacion1(4, 'peso18', 'pxr18')"></td>
                                        <td><input type="radio" name="rango5"id="inlineRadio1" value="5"  onclick="operacion1(5, 'peso18', 'pxr18')" ></td>
                                        <td><input type="text" name="pxr18" value="" readonly="" placeholder="0" onchange="operacionpr()"></td>
                                    </tr>
 
                                    <tr>
                                        <td></td>
                                        <td align="right"></td>
                                        <td><strong>Peso Total</strong><br><input type="text" min="50" max="50" name="total1" id="total1" value="" placeholder="50"  readonly="" ></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total Peso x Rango</strong><br><input type="text" name="pesoxRango0" onchange="operacionpr()" value="" readonly="" id="pesoxrango" placeholder="250"></td>
                                    </tr>
                                </tbody>
                                                        

                            </table>
                            </form>
                               <div class="col-lg-7"></div>
                                 <div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                        <label class="control-label">Calificación (1ERA FASE)<span class="req"> *</span></label>
                                            <input readonly id="fase_uno" name="pesoxRango0"  type="text" class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                <span id="errId1" class="error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                
<!-- 2DA PARTE-->
            <div id="info9" class="col-xs-12 well oculto">
                <div class="panel-body">
                    <div class="col-md-12">
                        <h4> DATOS DEL EVALUADO	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <input type="text" class="form-control" name="num_documento" value="<?php if(isset($values['num_documento' ]) and $values['num_documento']!='num_documento') echo $values['num_documento'];?>" <?php echo strtoupper($id_persona ['num_documento']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['num_documento']) and $errors['num_documento']!='num_documento'):?>
                                                <div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
                                            <?php endif;?>
                                    </td>
                                
                                    <td align="left">Apellidos y Nombres
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['pri_nom']);?> <?php echo strtoupper($id_persona ['pri_ape']);?>id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                            <?php endif;?>
                                    </td>
                        
                                    <td align="left">Título de Cargo
                                        <input type="text" class="form-control" name="nom_cargo" value="<?php if(isset($values['nom_cargo']) and $values['nom_cargo']!='nom_cargo') echo $values['nom_cargo'];?>" <?php echo strtoupper($cargo['cargo']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['nom_cargo']) and $errors['nom_cargo']!='nom_cargo'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_cargo'];?></div>
                                            <?php endif;?>
                                    </td>
                     
                                    <td align="left">Fecha de Ingreso
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['fec_ingreso']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                                <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                            <?php endif;?>
                                    </td>
                   
                                    <td align="left">Ubicación Administrativa
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" <?php echo strtoupper($ubicacion ['nom_ubicacion']);?> id="exampleInputEmail1" placeholder="" readonly="">
                                            <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                                <p>EVALUACIÓN DE COMPETENCIAS (2DA FASE)</p>
                     <div class="panel-body">
                         <form action="sum1.php">
                        <table class="table table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Competencias</th>
                                    <th style="text-align: center">Peso</th>
                                    <th style="text-align: center">1</th>
                                    <th style="text-align: center">2</th>
                                    <th style="text-align: center">3</th>
                                    <th style="text-align: center">4</th>
                                    <th style="text-align: center">5</th>
                                    <th style="text-align: center">Peso x Rango</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><input type="hidden" name="competencia" value="<?php echo $evaluador['id_competencia'];?>" <?php if(isset($values['id_ubicacion_evaluador']) and $values['id_ubicacion_evaluador']== $ubicacion['id_ubicacion']) echo "selected='selected'";?>><?php echo strtoupper($ubicacion['nom_ubicacion']);?>  ></td>
                                      <td><input type="hidden" name="peso19" value="7" onChange="sum1();" class="pesoc1" readonly><strong>7</strong></td>
                                      <td><input type="radio" name="rango5" class="rango_pt" value="1" checked="" onclick="operacion1(1, 'peso19', 'pxr19')"></td>
                                      <td><input type="radio" name="rango5" class="rango_pt" value="2" onclick="operacion1(2, 'peso19', 'pxr19')"></td>
                                      <td><input type="radio" name="rango5" class="rango_pt" value="3" onclick="operacion1(3, 'peso19', 'pxr19')"></td>
                                      <td><input type="radio" name="rango5" class="rango_pt" value="4" onclick="operacion1(4, 'peso19', 'pxr19')"></td>
                                      <td><input type="radio" name="rango5" class="rango_pt" value="5" onclick="operacion1(5, 'peso19', 'pxr19')"></td>
                                      <td><input type="text" name="pxr19" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><textarea class="form-control" name="competencia" id="competencia-2" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                      <td><input type="hidden" name="peso20" value="6" min="1" max="7" readonly onChange="sum1();" class="pesoc1"><strong>6</strong></td>
                                      <td><input type="radio" name="rango6" value="1" checked="" class="rango_pt" onclick="operacion1(1, 'peso20', 'pxr20')"></td>
                                      <td><input type="radio" name="rango6" value="2" class="rango_pt" onclick="operacion1(2, 'peso20', 'pxr20')"></td>
                                      <td><input type="radio" name="rango6" value="3" class="rango_pt" onclick="operacion1(3, 'peso20', 'pxr20')"></td>
                                      <td><input type="radio" name="rango6" value="4"class="rango_pt"  onclick="operacion1(4, 'peso20', 'pxr20')"></td>
                                      <td><input type="radio" name="rango6" value="5" class="rango_pt" onclick="operacion1(5, 'peso20', 'pxr20')"></td>
                                      <td><input type="text" name="pxr20" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                       <td>3</td>
                                       <td><textarea class="form-control" name="competencia" id="competencia-3" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                       <td><input type="hidden" name="peso21" min="1" max="7" value="7" onChange="sum1();" class="pesoc1" readonly=""><strong>7</strong></td>
                                       <td><input type="radio" name="rango7" value="1" checked="" class="rango_pt" onclick="operacion1(1, 'peso21', 'pxr21')"></td>
                                       <td><input type="radio" name="rango7" value="2" class="rango_pt" onclick="operacion1(2, 'peso21', 'pxr21')"></td>
                                       <td><input type="radio" name="rango7" value="3" class="rango_pt" onclick="operacion1(3, 'peso21', 'pxr21')"></td>
                                       <td><input type="radio" name="rango7" value="4" class="rango_pt" onclick="operacion1(4, 'peso21', 'pxr21')"></td>
                                       <td><input type="radio" name="rango7" value="5" class="rango_pt" onclick="operacion1(5, 'peso21', 'pxr21')"></td>
                                       <td><input type="text" name="pxr21" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                       <td>4</td>
                                        <td><textarea class="form-control" name="competencia" id="competencia-4" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                       <td><input type="number" name="peso22" min="1" max="7" placeholder="0" onChange="sum1();" class="pesoc1"></td>
                                       <td><input type="radio" name="rango8" value="1" checked="" class="rango_pt" onclick="operacion1(1, 'peso22', 'pxr22')"></td>
                                       <td><input type="radio" name="rango8" value="2" class="rango_pt" onclick="operacion1(2, 'peso22', 'pxr22')"></td>
                                       <td><input type="radio" name="rango8" value="3" class="rango_pt" onclick="operacion1(3, 'peso22', 'pxr22')"></td>
                                       <td><input type="radio" name="rango8" value="4" class="rango_pt" onclick="operacion1(4, 'peso22', 'pxr22')"></td>
                                       <td><input type="radio" name="rango8" value="5" class="rango_pt" onclick="operacion1(5, 'peso22', 'pxr22')"></td>
                                       <td><input type="text" name="pxr22" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                       <td>5</td>
                                       <td><textarea class="form-control" name="competencia" id="competencia-5" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                       <td><input type="number" name="peso23" min="1" max="7" placeholder="0" onChange="sum1();" class="pesoc1"></td>
                                       <td><input type="radio" name="rango9" value="1" checked=""  onclick="operacion1(1, 'peso23', 'pxr23')"></td>
                                       <td><input type="radio" name="rango9" value="2"class="rango_pt"  onclick="operacion1(2, 'peso23', 'pxr23')"></td>
                                       <td><input type="radio" name="rango9" value="3"class="rango_pt"  onclick="operacion1(3, 'peso23', 'pxr23')"></td>
                                       <td><input type="radio" name="rango9" value="4"class="rango_pt"  onclick="operacion1(4, 'peso23', 'pxr23')"></td>
                                       <td><input type="radio" name="rango9" value="5"class="rango_pt"  onclick="operacion1(5, 'peso23', 'pxr23')"></td>
                                       <td><input type="text" name="pxr23" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td><textarea class="form-control" name="competencia" id="competencia-6" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                      <td><input type="number" name="peso24" min="1" max="7" placeholder="0" onChange="sum1();" class="pesoc1"></td>
                                      <td><input type="radio" name="rango10" value="1"class="rango_pt"  checked="" onclick="operacion(1, 'peso24', 'pxr24')"></td>
                                      <td><input type="radio" name="rango10" value="2"class="rango_pt"  onclick="operacion1(2, 'peso24', 'pxr24')"></td>
                                      <td><input type="radio" name="rango10" value="3"class="rango_pt"  onclick="operacion1(3, 'peso24', 'pxr24')"></td>
                                      <td><input type="radio" name="rango10" value="4" class="rango_pt" onclick="operacion1(4, 'peso24', 'pxr24')"></td>
                                      <td><input type="radio" name="rango10" value="5"class="rango_pt"  onclick="operacion1(5, 'peso24', 'pxr24')"></td>
                                      <td><input type="text" name="pxr24" value="" readonly="" placeholder="0"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td><textarea class="form-control" name="competencia" id="competencia-7" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                      <td><input type="number" name="peso25" min="1" max="7" placeholder="0" onChange="sum1();" class="pesoc1"></td>
                                      <td><input type="radio" name="rango11" value="1" class="rango_pt"  checked="" onclick="operacion1(1, 'peso25', 'pxr25')"></td>
                                      <td><input type="radio" name="rango11" value="2"  class="rango_pt" onclick="operacion1(2, 'peso25', 'pxr25')"></td>
                                      <td><input type="radio" name="rango11" value="3"  class="rango_pt" onclick="operacion1(3, 'peso25', 'pxr25')"></td>
                                      <td><input type="radio" name="rango11" value="4" class="rango_pt"  onclick="operacion1(4, 'peso25', 'pxr25')"></td>
                                      <td><input type="radio" name="rango11" value="5"  class="rango_pt" onclick="operacion1(5, 'peso25', 'pxr25')"></td>
                                      <td><input type="text" name="pxr25" value="" readonly="" placeholder="0" ></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td><textarea class="form-control" name="competencia" id="competencia-8" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                      <td><input type="number" name="peso26" min="1" max="7" placeholder="0" onChange="sum1();" class="pesoc1"></td>
                                      <td><input type="radio" name="rango12" value="1" class="rango_pt"  checked="" onclick="operacion1(1, 'peso26', 'pxr26')"></td>
                                      <td><input type="radio" name="rango12" value="2" class="rango_pt"  onclick="operacion1(2, 'peso26', 'pxr26')"></td>
                                      <td><input type="radio" name="rango12" value="3" class="rango_pt"  onclick="operacion1(3, 'peso26', 'pxr26')"></td>
                                      <td><input type="radio" name="rango12" value="4"  class="rango_pt" onclick="operacion1(4, 'peso26', 'pxr26')"></td>
                                      <td><input type="radio" name="rango12" value="5"  class="rango_pt" onclick="operacion1(5, 'peso26', 'pxr26')"></td>
                                      <td><input type="text" name="pxr26" value="" readonly="" placeholder="0" onchange="operacionpr()"></td>
                                  </tr>
                                  <tr>
                                  <tr>
                                      <td></td>
                                      <td align="right"></td>
                                      <td><strong>Peso Total</strong><br><input type="text" min="50" max="50" name="total1" id="totalc1" value="" placeholder="50"  readonly=""></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td align="right"></td>
                                      <td><strong>Total Peso x Rango</strong><br><input type="text" name="pesoxRango1" onchange="operacionpr()"  id="" value="" placeholder="250" readonly=""></td>
                                      </tr>
                            </tbody>
                        </table>
                         </form>
                    </div>
                    
                         <div class="container" >
                            <div class="col-lg-6">Calificación Final (Primera y segunda fase)
                                <br>
                                <br>
                                <div  class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                        <label class="control-label">Calificación (1ERA FASE)<span class="req"> *</span></label>
                                            <input readonly id="fase_uno" name="pesoxRango0" type="text"  class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                <span id="errId1" class="error"></span>
                                    </div>
                                </div>
                                <div  class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                        <label class="control-label ">Calificación (2DA FASE)<span class="req"> *</span></label>
                                        <input readonly="" id="fase_dos" name="pesoxRango1" type="text"  class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                <span id="errId1" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                                <div class="clearfix visible-sm-block"></div>
                                    <div  class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                            <label >Total puntaje (1ERA FASE + 2DA FASE)<span class="req"> *</span></label>
                                            <input readonly="" id="suma_total" type="text"  class="form-control k-textbox" data-role="text" placeholder="0"  required="required" name="totalFases01" >
                                                    <span id="" class="error"></span>
                                        </div>
                                    </div>
                                <div class="col-lg-3 col-md-3 col-sm-4">
                    <label for="exampleInputEmail1">Rango de actuación</label><small class="text-danger">(*)</small>
                        <select class="form-control" name="rangos" value="<?php if(isset($values['rangos']) and $values['rangos']!='') echo $values['rangos'];?>" id="exampleInputEmail1" placeholder="Rango">
                            <option value="" >Seleccione...</option>
                            <?php if(isset($lista_rangos) and count($lista_rangos)>0):?>
                                <?php foreach($lista_rangos as $rangos):?>
                                    <option value="<?php echo $rango['rangos'];?>" <?php if(isset($values['rangos']) and $values['rangos']== $rangos['rangos']) echo "selected='selected'";?>><?php echo strtoupper($rangos['val_rango']);?> </option>
                                <?php endforeach;?>
                            <?php endif;?>
                        </select>
                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                        <br>
                        <br>
<!-- COMENTARIOS-->
            <div id="info14" class="col-xs-12 well oculto">
               
                <p>COMENTARIOS</p>
                    <div class="panel-body">
                  <div class="form-group col-lg-12" style="display: block;">
                                        <label class="control-label" for="field20">Comentarios del supervisor</label>
                                        <div class="controls">
                                            <textarea class="form-control" name="textarea" id="textarea-input"></textarea>
                                            <span class="help-block">El supervisor podrá expresar cualquier observación adicional que considere pertinente sobre el evaluado.</span>
                                            <span id="errId2" class="error"></span>
                                        </div>
                    </div>
                    </div>
                        <br>
                        <br>
                        <div class="container">
                            <div class="col-md-4">
                                <div class="form-group" rel="popover" data-trigger="hover" data-content="Indicar su acuerdo o no con los resultados de su evaluación." style="display: block;">
                                    <label class="control-label">¿Está de acuerdo?<span class="req"> *</span></label>
                                        <div class="controls">
                                            <label class="radio-inline bg-success col-md-6" >
                                                <input type="radio" value="acuerdo" checked="si" id="acuerdo" name="field3" required="required" >Si</label>
                                                    <div class="clearfix lg-block clearfix visible-sm-block"></div>
                                                        <label class="radio-inline bg-danger col-md-6" for="radio5">
                                                            <input type="radio" value="desacuerdo" id="desacuerdo" name="field3" required="required" >No</label>
                                                                <span id="errId5" class="error"></span>
<!-- contenido del acuerdo -->
                                            <div id="si" style="display:none;" >
                                                <center>
                                                    <strong > </strong>
                                                </center>
                                            </div>
                                            <div id="no" style="display:none;">
                                                <center>
                                                    <strong>Indique el motivo del desacuerdo</strong>
                                                </center>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group" style="display: block;">
                                    <label class="control-label" for="field20">Comentarios del evaluado</label>
                                        <div class="controls">
                                            <textarea class="form-control" name="textarea"></textarea>
                                                <span class="help-block">El evaluado podrá expresar cualquier observación adicional que considere pertinente sobre su evaluación.</span>
                                                <span id="errId2" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-3">
                                <div class="form-group" rel="popover" data-trigger="hover" data-content="Fecha en la que se realiz? la evaluaci?n." data-original-title="">
                                    <label class="control-label" for="field17">Fecha de notificación<span class="req"> *</span></label>
                                        <div class="controls">
                                            <div class='input-group date' id='notificacion'>
                                                <input type='text' class="form-control" placeholder="YYYY/MM/DD" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                </div>
                            </div>-->
                        </div>
                    </div>


    <!--<br>
    <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
    <br>
    <br>-->
    <script>   
        
        // datos ajax 
        function charge(){
            
            // url que recibe los datos
            var url = "<?php echo full_url."/rrhh/evaluaciones/index.php?action=get"?>";
            //var url = "../index.php?action=get";
    $.ajax({
        type: "POST",
        url:url,
        data: {
            // nombre en el post : valor a enviar
            ci: $("#id_pevaluacion").val(),
        },
        success: function(data){
            // cuando el controlador responda, los datos que envia los va a poner
            // en el div que tenga este id
            // 
           $('#s0, #s1, #s2, #s3').remove();  
            $('#idSalida tr:last').after(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status+" "+thrownError+"\n\n","Error al enviar/recibir los datos...");
       }
   });

        }
        
        // datos ajax 
        function datose(){
            
            // url que recibe los datos
            var url = "<?php echo full_url."/rrhh/evaluaciones/index.php?action=datos"?>";
            //var url = "../index.php?action=get";
    $.ajax({
        type: "POST",
        url:url,
        data: {
            // nombre en el post : valor a enviar
            cedula: $("#id_sevaluador").val(),
        },
        success: function(data){
            // cuando el controlador responda, los datos que envia los va a poner
            // en el div que tenga este id
            // 
           $('#s4, #s5, #s6, #s7').remove();  
            $('#idExit tr:last').after(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status+" "+thrownError+"\n\n","Error al enviar/recibir los datos...");
       }
   });

        }
        
        function dato(){
            
            // url que recibe los datos
            var url = "<?php echo full_url."/rrhh/evaluaciones/index.php?action=dato"?>";
            //var url = "../index.php?action=get";
    $.ajax({
        type: "POST",
        url:url,
        data: {
            // nombre en el post : valor a enviar
            cedula: $("#id_sevaluador").val(),
        },
        success: function(data){
            // cuando el controlador responda, los datos que envia los va a poner
            // en el div que tenga este id
            // 
           $('#s8, #s9, #s10, #s11').remove();  
            $('#idE tr:last').after(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status+" "+thrownError+"\n\n","Error al enviar/recibir los datos...");
       }
   });

        }
        
        // datos ajax 
       /* $(function(){ 
     
            
            // url que recibe los datos
            var url = "<?php echo full_url."/rrhh/evaluaciones/index.php?action=cargar"?>";
            //var url = "../index.php?action=get";
    $.ajax({
        type: "POST",
        url:url,
        data: {
            // nombre en el post : valor a enviar
            competencia: $("#competencia1").val(),
        },
        success: function(data){
            // cuando el controlador responda, los datos que envia los va a poner
            // en el div que tenga este id
            //  
            $('#idExit tr:last').html(data);
       },
       error: function (xhr, ajaxOptions, thrownError) {
           alert(xhr.status+" "+thrownError+"\n\n","Error al enviar/recibir los datos...");
       }
   });

        
        
        });*/
     
    
     
        
function suma() {
  var add = 0;
      $('.peso1').each(function() {
          if (!isNaN($(this).val())) {
              add += Number($(this).val());
          }
      });
      $('#total1').val(add);
  };
    function sum1() {
        var add = 0;
      $('.pesoc1').each(function() {
          if (!isNaN($(this).val())) {
              add += Number($(this).val());
          }
      });
      $('#totalc1').val(add);
  }
        function operacion1(a, b, c){
        
        b = $("[name='"+b+"']").val();
        var res = b*a;
        console.log(res);
        
        
        $("[name='"+c+"']").val(res);
        
        
        // llamar operacion sumar p x r 
        operacionpr();
    }



function operacionpr(){
// declarar array..
var datos = [];

// declarar incremento..
var i = 14;
 
// mientras pesoxRango0 sea diferente a nulo, hacer....
// mientras pesoxRango1 sea diferente a nulo, hacer....
// mientras pesoxRango2 sea diferente a nulo, hacer....
while( i != 19 ){

  // obtener el value del elemento...
  var a = $("[name='pxr"+i+"']").val();
   console.log("[name='pxr"+i+"']");
  
  // subir el value del pesoxRango al array...
  datos.push(parseInt(a));
  i++;
}

// sumar array....
sum = datos.reduce(function(a, b) { return a + b; }, 0);


// poner la suma total en el input total
$("[name='pesoxRango0']").val(sum);

console.log(sum);



// declarar incremento..
var i = 19;
 
// mientras pesoxRango0 sea diferente a nulo, hacer....
// mientras pesoxRango1 sea diferente a nulo, hacer....
// mientras pesoxRango2 sea diferente a nulo, hacer....
while( i != 27 ){

  // obtener el value del elemento...
  var a = $("[name='pxr"+i+"']").val();
   console.log("[name='pxr"+i+"']");
  
  // subir el value del pesoxRango al array...
  datos.push(parseInt(a));
  i++;
}

// sumar array....
sum = datos.reduce(function(a, b) { return a + b; }, 0);


// poner la suma total en el input total
$("[name='pesoxRango1']").val(sum);

console.log(sum);

var i = 0;
 
// mientras pesoxRango0 sea diferente a nulo, hacer....
// mientras pesoxRango1 sea diferente a nulo, hacer....
// mientras pesoxRango2 sea diferente a nulo, hacer....
while( i != 1 ){

  // obtener el value del elemento...
  var a = $("[name='pesoxRango"+i+"']").val();
   console.log("[name='pesoxRango"+i+"']");
  
  // subir el value del pesoxRango al array...
  datos.push(parseInt(a));
  i++;
}

// sumar array....
sum = datos.reduce(function(a, b) { return a + b; }, 0);


// poner la suma total en el input total
$("[name='totalFases01']").val(sum);

console.logase(sum);
};

</script>        