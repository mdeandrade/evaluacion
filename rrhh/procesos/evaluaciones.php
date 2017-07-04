     <div class="container">
            <div class="col-md-12">
                <h1 class="text-center">Evaluación del Desempeño</h1>
            <div class="controls col-sm-12">
               <p class="text-center" data-default-label="Header" data-default-is-header="true" data-control-type="header"> Nivel Profesional y Técnicos</p>
               <span    class="error"></span>
            </div>
            </div>
<br>
<br>

<div class="container" center>
                <div class="col-md-2">
                    <h4>Periodo Evaluado<h4>
                </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="form-group">
              <label for="exampleInputEmail1">Desde</label>
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="form-group">
               <label for="exampleInputEmail1">Hasta</label>
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>
     <!--<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>-->
            <div id="accordion-1" class="panel-group">
            <div class="panel panel-default"> 
                <div class="panel-heading" rol="tab">
                    <h4 class="panel-titel">
                        <a role="button" data-toggle="collapse" data parent="#accordion-1" aria-expanded="true" href="#accordion-1 .datos">DATOS DE IDENTIFICACIÓN</a>
                    </h4>
                </div>
                <div class="panel-collapse in datos" role="tabpanel"> 
                <div class="panel-body"> 
                   <div class="col-md-4">
			<h4>1. DATOS DEL EVALUADO	</h4>
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
                                <td align="left">Fecha de Ingreso
                                    <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                                    <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                                    <div class="alert alert-danger"><?php echo $errors[''];?></div>
                                    <?php endif;?>
                                </td >
                            </tr>
                            <tr>
				<td align="left">Ubicación Administrativa
                                    <input type="text" class="form-control" name="" value="<?php if(isset($values['nom_ubicacion']) and $values['nom_ubicacion']!='nom_ubicacion') echo $values['nom_ubicacion'];?>" id="exampleInputEmail1" placeholder="">
                                    <?php if(isset($errors['nom_ubicacion']) and $errors['nom_ubicacion']!='nom_ubicacion'):?>
                                    <div class="alert alert-danger"><?php echo $errors['nom_ubicacion'];?></div>
                                    <?php endif;?>
                                </td>
                            </tr>
                        </tbody>
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
                        </tbody>
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
                        </tbody>
                    </table>
                         </div>
                </div>
                </div>
            </div>
      </div>
      
      <div id="accordion-2" class="panel-group">
            <div class="panel panel-default"> 
                <div class="panel-heading" rol="tab">
                    <h4 class="panel-titel">
                        <a role="button" data-toggle="collapse" data parent="#accordion-2" aria-expanded="false" href="#accordion-2 .odi">ESTABLECIMIENTO Y EVALUACIÓN DEL DESEMPEÑO (1RA FASE)</a>
                    </h4>
                </div>
                <div class="panel-collapse in odi" role="tabpanel"> 
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
              </tr>
              <tr>
                  <td>8</td>
                  <td><input type="text" name="odi" style="width: 100%"></td>
                  <td><input type="number" name="peso8" min="1" max="10"></td>
                  <td><input type="radio" name="rango8"id="inlineRadio1" value="1"></td>
                  <td><input type="radio" name="rango8"id="inlineRadio1" value="2"></td>
                  <td><input type="radio" name="rango8"id="inlineRadio1" value="3"></td>
                  <td><input type="radio" name="rango8"id="inlineRadio1" value="4"></td>
                  <td><input type="radio" name="rango8"id="inlineRadio1" value="5"></td>
              </tr>
              </tbody>

              </table>
            
            <table style="position:center">
                <thead>
                <tr>
                  <th align="left">
                    Calificación (Primera fase)
                  </th>
                </tr>
                <tr>
                  <td align="left">
                    <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                        <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                        <div class="alert alert-danger"><?php echo $errors[''];?></div>
                        <?php endif;?>
                  </td>
                </tr>
                </thead>
            </table>
                         </div>
                </div>
                </div>
            </div>
      </div>
      
        <div id="accordion-3" class="panel-group">
            <div class="panel panel-default"> 
                <div class="panel-heading" rol="tab">
                    <h4 class="panel-titel">
                        <a role="button" data-toggle="collapse" data parent="#accordion-3" aria-expanded="false" href="#accordion-3 .competencias">EVALUACIÓN DE COMPETENCIAS (2DA FASE)</a>
                    </h4>
                </div>
                <div class="panel-collapse in competencias" role="tabpanel"> 
                <div class="panel-body"> 
                   <div class="col-md-12">
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
          <td><input type="hidden" name="peso1" value="7"></td>
          <td><input type="radio" name="rango1" class="rango1" value="1"></td>
          <td><input type="radio" name="rango1" class="rango1" value="2"></td>
          <td><input type="radio" name="rango1" class="rango1" value="3"></td>
          <td><input type="radio" name="rango1" class="rango1" value="4"></td>
          <td><input type="radio" name="rango1" class="rango1" value="5"></td>
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
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td align="center"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td align="center"></td>
                </tr>
  </tbody>

</table>

<div center>
Calificación Final (Primera y segunda fase)
<br><br>

<table style="position:center">
                <thead>
                <tr>
                  <th align="left">
                    Calificación (Primera fase)
                  </th>
                  <th align="left">
                    Calificación (Segunda fase)
                  </th>
                  <th align="left">
                    Total puntaje (Primera fase + Segunda fase)
                  </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                  <td align="left">
                    <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                        <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                        <div class="alert alert-danger"><?php echo $errors[''];?></div>
                        <?php endif;?>
                  </td> 
                  <td align="left">
                    <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                        <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                        <div class="alert alert-danger"><?php echo $errors[''];?></div>
                        <?php endif;?>
                  </td>
                  <td align="left">
                    <input type="text" class="form-control" name="" value="<?php if(isset($values['']) and $values['']!='') echo $values[''];?>" id="exampleInputEmail1" placeholder="">
                        <?php if(isset($errors['descripcion']) and $errors['']!=''):?>
                        <div class="alert alert-danger"><?php echo $errors[''];?></div>
                        <?php endif;?>
                  </td>
                </tr>
                </tbody>
                </thead>
            </table>

</div>
                   </div>
                </div>
                </div>
            </div>
             </div>
     </div>
    
