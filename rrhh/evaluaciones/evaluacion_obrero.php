<div class="col-md-12">
  <h1 class="text-center">Instrumento de Evaluación de Eficiencia al Personal Obrero</h1>
</div>

<!--Titulos-->
    <div class="row">
        <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 well">
            <a href="#info10" class=" inf"><strong>Datos de identificación</strong></a>
        </div>-->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well">
            <a href="#info11" class=" inf"><strong>Factores a evaluar</strong></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well">
                <a href="#info12" class=" inf"><strong>Comentarios</strong></a>
        </div>
    </div>

<!-- contenido -->

<!-- Datos de identificación -->
        <div class="row">
            <!--<div id="info10" class="col-xs-12 well oculto">-->
              <p>DATOS DE IDENTIFICACIÓN </p>
                 <div class="panel-body">
                    <div class="col-md-12">
                        <h4> DATOS DEL EVALUADO	</h4>
                            <table class="table table-condensed table-bordered table-hover">
                                <tr>
                                    <td align="left">Cédula de Identidad
                                        <select class="form-control" name="id_personal_evaluacion" value="<?php if(isset($values['id_personal_evaluacion']) and $values['id_personal_evaluacion']!='') echo $values['id_personal_evaluacion'];?>" id="exampleInputEmail1" >
                                            <option value="" >Seleccione...</option>
                                                <?php if(isset($lista_personas) and count($lista_personas)>0):?>
                                                    <?php foreach($lista_personas as $personas):?>
                                                        <option value="<?php echo $personas['id_persona'];?>" <?php if(isset($values['id_personal_evaluacion']) and $values['id_personal_evaluacion']== $personas['id_persona']) echo "selected='selected'";?>><?php echo strtoupper($personas['num_documento']);?> </option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                        </select>
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
                    </div>
                    </div>
 <div id="info11" class="col-xs-12 well oculto">
                <p>FACTORES A EVALUAR</p>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="sumar.php" method="POST">
                                <table class="table table-condensed table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">#</th>
                                        <th>Factores a evaluar</th>
                                        <th style="text-align: center">Peso</th>
                                        <th style="text-align: center">Puntaje</th>
                                        <th style="text-align: center">Comentarios del Supervisor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                            <td><textarea class="form-control" name="factor" id="factor-1" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                            <td><input type="hidden" id="peso1"  name="peso1" min="1" max="15" placeholder="0" value="15" onChange="sumar();" class="peso"><strong>15</strong></td>
                                            <td><input type="number" name="puntaje1"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                            <td><textarea class="form-control" name="comentario" id="comentario-1" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><textarea class="form-control" name="factor" id="factor-2" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="hidden"  id="peso2" name="peso2" min="1" max="15" value="15" placeholder="0" onChange="sumar();" class="peso"><strong>15</strong></td>
                                        <td><input type="number" name="puntaje2"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-2" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><textarea class="form-control" name="factor" id="factor-3" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="hidden" id="peso3"  name="peso3" min="1" max="15" value="10" placeholder="0" onChange="sumar();" class="peso"><strong>10</strong></td>
                                        <td><input type="number" name="puntaje3"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-3" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><textarea class="form-control" name="factor" id="factor-4" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" id="peso4"  name="peso4" min="1" max="15" placeholder="0" onChange="sumar();" class="peso"></td>
                                        <td><input type="number" name="puntaje4"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-4" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><textarea class="form-control" name="factor" id="factor-5" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number"  id="peso" name="peso5" min="1" max="15" placeholder="0" onChange="sumar();" class="peso"></td>
                                        <td><input type="number" name="puntaje5"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-5" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><textarea class="form-control" name="factor" id="factor-6" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number"  id="peso6" name="peso6" min="1" max="15" placeholder="0" onChange="sumar();" class="peso"></td>
                                        <td><input type="number" name="puntaje6"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-6" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><textarea class="form-control" name="factor" id="factor-7" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" id="peso7"  name="peso7" min="1" max="15" placeholder="0" onChange="sumar();" class="peso" ></td>
                                        <td><input type="number" name="puntaje7"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-7" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><textarea class="form-control" name="factor" id="factor-8" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>
                                        <td><input type="number" id="peso8"  name="peso8" min="1" max="15" placeholder="0" onChange="sumar();" class="peso"></td>
                                        <td><input type="number" name="puntaje8"id="inlineRadio1" value="" placeholder="0" onChange="sum_p();" class="puntaje"></td>
                                        <td><textarea class="form-control" name="comentario" id="comentario-8" style="    width: 100%;    height: 40px;    margin: 0px 110px 0px 0px;"></textarea></td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="right"><strong>Total Puntaje</strong></td>
                                        <td> <input type="text" name="total" id="total" value="" placeholder="100" min="100" max="100" readonly=""></td>
                                        <td><input type="text" name="total_p" id="total_p" value="" placeholder="100" min="100" max="100" readonly=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            </form>
                        </div>
                            <div class="container">
                                <div class="col-lg-4"></div>
                                <div class="row" style="display: block;">
                                                                        <div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group" rel="popover" data-trigger="hover" data-original-title="" style="display: block;">
                                            <label >Calificación - Rango<span class="req"> *</span></label>
                                            <input readonly="" id="suma_total" type="text" class="form-control k-textbox" data-role="text" placeholder="0"  required="required" >
                                                    <span id="" class="error"></span>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

<!-- COMENTARIOS-->
            <div id="info12" class="col-xs-12 well oculto">
               
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
                                                <input type="radio" value="acuerdo2" checked="" id="acuerdo" name="field3" required="required" >Si</label>
                                                    <div class="clearfix lg-block clearfix visible-sm-block"></div>
                                                        <label class="radio-inline bg-danger col-md-6" for="radio5">
                                                            <input type="radio" value="desacuerdo2" id="desacuerdo" name="field3" required="required" >No</label>
                                                                <span id="errId5" class="error"></span>
<!-- contenido del acuerdo -->
                                            <div id="si2" style="display:none;" >
                                                <center>
                                                    <strong > </strong>
                                                </center>
                                            </div>
                                            <div id="no2" style="display:none;">
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

    <!--<br>
    <button type="submit" id="guardar" class="btn btn-success">Guardar</button>
    <br>
    <br>-->
  <script>
 function sumar() {
      var add = 0;
      $('.peso').each(function() {
          if (!isNaN($(this).val())) {
              add += Number($(this).val());
          }
      });
      $('#total').val(add);
  };
      function sum_p() {
      var add = 0;
      $('.puntaje').each(function() {
          if (!isNaN($(this).val())) {
              add += Number($(this).val());
          }
      });
      $('#total_p').val(add);
  }
  </script>