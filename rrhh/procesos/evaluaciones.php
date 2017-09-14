<div class="col-md-12">
    <h1 class="text-center">Evaluación del Desempeño</h1>
        <div class="controls col-sm-12">
           <p class="text-center" data-default-label="Header" data-default-is-header="true" data-control-type="header"> Nivel Profesional y Técnicos</p>
                <span    class="error"></span>
        </div>
</div>
<!--Titulos-->
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 well">
            <a href="#info4" class=" inf"><strong>Datos de identificación</strong></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 well">
            <a href="#info5" class=" inf"><strong>Establecimiento y evaluación del desempeño (1RA FASE)</strong></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 well">
                <a href="#info6" class=" inf"><strong>Evaluación de competencias (2DA FASE)</strong></a>
        </div>
<!-- contenido -->

<!-- Datos de identificación -->
        <div class="row">
            <div id="info4" class="col-xs-12 well oculto">
              <p>DATOS DE IDENTIFICACIÓN </p>
                <div class="panel-body">
                    <div class="col-md-4">
			<h4>1. DATOS DEL EVALUADO	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Apellidos y Nombres
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['pri_nom']);?> <?php echo strtoupper($id_persona ['pri_ape']);?>id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <input type="text" class="form-control" name="num_documento" value="<?php if(isset($values['num_documento' ]) and $values['num_documento']!='num_documento') echo $values['num_documento'];?>" <?php echo strtoupper($id_persona ['num_documento']);?> id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['num_documento']) and $errors['num_documento']!='num_documento'):?>
                                                <div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Título de Cargo
                                        <input type="text" class="form-control" name="nom_cargo" value="<?php if(isset($values['nom_cargo']) and $values['nom_cargo']!='nom_cargo') echo $values['nom_cargo'];?>" <?php echo strtoupper($cargo['cargo']);?> id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_cargo']) and $errors['nom_cargo']!='nom_cargo'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_cargo'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Fecha de Ingreso
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" <?php echo strtoupper($id_persona ['fec_ingreso']);?> id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                                <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Ubicación Administrativa
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" <?php echo strtoupper($ubicacion ['nom_ubicacion']);?> id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="col-md-4">
                        <h4>2. DATOS DEL EVALUADOR	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Apellidos y Nombres
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                                <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <input type="text" class="form-control" name="num_documento" value="<?php if(isset($values['num_documento' ]) and $values['num_documento']!='num_documento') echo $values['num_documento'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['num_documento']) and $errors['num_documento']!='num_documento'):?>
                                                <div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Título de Cargo
                                        <input type="text" class="form-control" name="nom_cargo" value="<?php if(isset($values['nom_cargo']) and $values['nom_cargo']!='nom_cargo') echo $values['nom_cargo'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_cargo']) and $errors['nom_cargo']!='nom_cargo'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_cargo'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Ubicación Administrativa
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="col-md-4">
                        <h4>3. DATOS DEL SUPERVISOR DEL EVALUADOR	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Apellidos y Nombres
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                                <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <input type="text" class="form-control" name="num_documento" value="<?php if(isset($values['num_documento' ]) and $values['num_documento']!='num_documento') echo $values['num_documento'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['num_documento']) and $errors['num_documento']!='num_documento'):?>
                                                <div class="alert alert-danger"><?php echo $errors['num_documento'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Título de Cargo
                                        <input type="text" class="form-control" name="nom_cargo" value="<?php if(isset($values['nom_cargo']) and $values['nom_cargo']!='nom_cargo') echo $values['nom_cargo'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_cargo']) and $errors['nom_cargo']!='nom_cargo'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_cargo'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">Ubicación Administrativa
                                        <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" id="exampleInputEmail1" placeholder="">
                                            <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                                <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                            <?php endif;?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
<!-- 1ra parte-->
            <div id="info5" class="col-xs-12 well oculto">
                <p>ESTABLECIMIENTO Y EVALUACIÓN DEL DESEMPEÑO (1RA FASE)</p>
                    <div class="panel-body">
                        <div class="col-md-12">
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
                                            <td><input type="text" name="odi" style="width: 100%"></td>
                                            <td><input type="number" name="peso1" min="1" max="10"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="1"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="2"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="3"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="4"></td>
                                            <td><input type="radio" name="rango1"id="inlineRadio1" value="5"></td>
                                            <td><input type="text" name="" value="" readonly=""></td>
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
                                        <td><input type="text" name="" value="" readonly=""></td>
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
                                        <td><input type="text" name="" value="" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" name="odi" style="width: 100%"></td>
                                        <td><input type="number" name="peso4" min="1" max="10"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="1"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="2"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="3"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="4"></td>
                                        <td><input type="radio" name="rango4"id="inlineRadio1" value="5"></td>
                                        <td><input type="text" name="" value="" readonly=""></td>
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
                                        <td><input type="text" name="" value="" readonly=""></td>
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
                                        <td><input type="text" name="" value="" readonly=""></td>
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
                                        <td><input type="text" name="" value="" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><input type="text" name="odi" style="width: 100%"></td>
                                        <td><input type="number" name="peso8" min="1" max="10"></td>
                                        <td><input type="radio" name="rango8"id="inlineRadio1" value="1"></td>
                                        <td><input type="radio" name="rango8"id="inlineRadio1" value="2"></td>
                                        <td><input type="radio" name="rango8"id="inlineRadio1" value="3"></td>
                                        <td><input type="radio" name="rango8"id="inlineRadio1" value="4"></td>                                          <td><input type="radio" name="rango8"id="inlineRadio1" value="5"></td>
                                        <td><input type="text" name="" value="" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Peso Total</strong><br><input type="text" name="" value="" readonly=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total Peso x Rango</strong><br><input type="text" name="" value="" readonly=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="container">
                                <div class="row" style="display: block;">
                                    <div class="col-md-3">
                                        <div class="form-group"  data-content="Total obtenido correspondiente a la sumatoria peso x rango."  style="display: block;">
                                            <label>Calificación (1ERA FASE)<span class="req"> *</span></label>
                                                <input id="prim_fase" type="text" class="form-control k-textbox"  placeholder="0"  required="required" >
                                                    <span id="errId1" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-9" style="display: block;">
                                        <label class="control-label" for="field20">Comentarios del supervisor</label>
                                        <div class="controls">
                                            <textarea class="form-control" name="textarea" id="textarea-input"></textarea>
                                            <span class="help-block">El supervisor podrá expresar cualquier observación adicional que considere pertinente sobre el evaluado.</span>
                                            <span id="errId2" class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display: block;">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label" for="field21">Supervisor inmediato</label>
                                                <div class="controls">
                                                    <input id="field21" type="text" class="form-control k-textbox" data-role="text" ><span id="errId3" class="error"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" rel="popover" data-trigger="hover" data-content="Fecha en la que se realiz? la evaluaci?n." data-original-title="">
                                            <label class="control-label" for="field16">Fecha de evaluación<span class="req"> *</span></label>
                                                <div class="controls">
                                                <div class='input-group date' id='evaluacion'>
                                                    <input type='text' class="form-control" placeholder="YYYY/MM/DD" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar">
                                                            </span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
<!-- 2DA PARTE-->
            <div id="info6" class="col-xs-12 well oculto">
                <p>EVALUACIÓN DE COMPETENCIAS (2DA FASE)</p>
                    <div class="panel-body">
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
                                      <td><input type="text" name="competencia" style="width: 100%"></td>
                                      <td><input type="btn btn-disable" name="peso1" value="7" readonly></td>
                                      <td><input type="radio" name="rango1" class="rango1" value="1"></td>
                                      <td><input type="radio" name="rango1" class="rango1" value="2"></td>
                                      <td><input type="radio" name="rango1" class="rango1" value="3"></td>
                                      <td><input type="radio" name="rango1" class="rango1" value="4"></td>
                                      <td><input type="radio" name="rango1" class="rango1" value="5"></td>
                                      <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><input type="text" name="competencia" style="width: 100%"></td>
                                      <td><input type="hidden" name="peso2" value="6"></td>
                                      <td><input type="radio" name="rango2" value="1"></td>
                                      <td><input type="radio" name="rango2" value="2"></td>
                                      <td><input type="radio" name="rango2" value="3"></td>
                                      <td><input type="radio" name="rango2" value="4"></td>
                                      <td><input type="radio" name="rango2" value="5"></td>
                                      <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                       <td>3</td>
                                       <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                       <td><input type="hidden" name="peso3" value="7"></td>
                                       <td><input type="radio" name="rango3" value="1"></td>
                                       <td><input type="radio" name="rango3" value="2"></td>
                                       <td><input type="radio" name="rango3" value="3"></td>
                                       <td><input type="radio" name="rango3" value="4"></td>
                                       <td><input type="radio" name="rango3" value="5"></td>
                                       <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                       <td>4</td>
                                       <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                       <td><input type="number" name="peso4" min="1" max="10"></td>
                                       <td><input type="radio" name="rango4" value="1"></td>
                                       <td><input type="radio" name="rango4" value="2"></td>
                                       <td><input type="radio" name="rango4" value="3"></td>
                                       <td><input type="radio" name="rango4" value="4"></td>
                                       <td><input type="radio" name="rango4" value="5"></td>
                                       <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                       <td>5</td>
                                       <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                       <td><input type="number" name="peso5" min="1" max="10"></td>
                                       <td><input type="radio" name="rango5" value="1"></td>
                                       <td><input type="radio" name="rango5" value="2"></td>
                                       <td><input type="radio" name="rango5" value="3"></td>
                                       <td><input type="radio" name="rango5" value="4"></td>
                                       <td><input type="radio" name="rango5" value="5"></td>
                                       <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                      <td><input type="number" name="peso6" min="1" max="10"></td>
                                      <td><input type="radio" name="rango6" value="1"></td>
                                      <td><input type="radio" name="rango6" value="2"></td>
                                      <td><input type="radio" name="rango6" value="3"></td>
                                      <td><input type="radio" name="rango6" value="4"></td>
                                      <td><input type="radio" name="rango6" value="5"></td>
                                      <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                      <td><input type="number" name="quantity" min="1" max="10"></td>
                                      <td><input type="radio" name="rango7" value="1"></td>
                                      <td><input type="radio" name="rango7" value="2"></td>
                                      <td><input type="radio" name="rango7" value="3"></td>
                                      <td><input type="radio" name="rango7" value="4"></td>
                                      <td><input type="radio" name="rango7" value="5"></td>
                                      <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td><input type="text" name="competencia" style="width: 100%"><br></td>
                                      <td><input type="number" name="quantity" min="1" max="10"></td>
                                      <td><input type="radio" name="rango8" value="1"></td>
                                      <td><input type="radio" name="rango8" value="2"></td>
                                      <td><input type="radio" name="rango8" value="3"></td>
                                      <td><input type="radio" name="rango8" value="4"></td>
                                      <td><input type="radio" name="rango8" value="5"></td>
                                      <td><input type="text" name="" value="" readonly=""></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td></td>
                                      <td><strong>Peso Total</strong><br><input type="text" name="" value="" readonly=""></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>Total Peso x Rango</strong><br><input type="text" name="" value="" readonly=""></td>
                                            </tr>
                            </tbody>
                        </table>
                        <div class="container" >
                            <div class="col-lg-6">Calificación Final (Primera y segunda fase)
                                <br>
                                <br>
                                <div  class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                        <label class="control-label">Calificación (1ERA FASE)<span class="req"> *</span></label>
                                            <input id="fase_uno" type="text" class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                <span id="errId1" class="error"></span>
                                    </div>
                                </div>
                                <div  class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                        <label class="control-label ">Calificación (2DA FASE)<span class="req"> *</span></label>
                                            <input id="fase_dos" type="text" class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                <span id="errId1" class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row" >
                                <div class="clearfix visible-sm-block"></div>
                                    <div  class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group" rel="popover" data-trigger="hover" data-content="Total obtenido correspondiente a la sumatoria peso x rango." data-original-title="" style="display: block;">
                                            <label >Total puntaje (1ERA FASE + 2DA FASE)<span class="req"> *</span></label>
                                                <input id="suma_total" type="text" class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                    <span id="" class="error"></span>
                                        </div>
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
                                                <input type="radio" value="acuerdo" id="acuerdo" name="field3" required="required" >Si</label>
                                                    <div class="clearfix lg-block clearfix visible-sm-block"></div>
                                                        <label class="radio-inline bg-danger col-md-6" for="radio5">
                                                            <input type="radio" value="desacuerdo" id="desacuerdo" name="field3" required="required" >No</label>
                                                                <span id="errId5" class="error"></span>
<!-- contenido del acuerdo -->
                                            <div id="si" style="display:none;">
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
                            <div class="col-md-3">
                                <div class="form-group" rel="popover" data-trigger="hover" data-content="Fecha en la que se realiz? la evaluaci?n." data-original-title="">
                                    <label class="control-label" for="field16">Fecha de notificación<span class="req"> *</span></label>
                                        <div class="controls">
                                            <div class='input-group date' id='notificacion'>
                                                <input type='text' class="form-control" placeholder="YYYY/MM/DD" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--<br>
    <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
    <br>
    <br>-->