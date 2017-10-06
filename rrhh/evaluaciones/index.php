<?php include("../../autoload.php");?>
<?php include("validator.php");?>
<?php include("../security/security.php");?>
<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
$values = array_merge($values,$_FILES);
	switch ($action) {
		case "index":
			executeIndex($values);
		break;
		case "new":
			executeNew($values);
		break;
		case "add":
			executeAdd($values);
		break;
                case "edit":
			executeEdit($values);
		break;
                case "update":
			executeUpdate($values);
		break;
		case "get":
			executeGetDatos($values);
		break;
                case "datos":
			executedatosEvaluador($values);
		break;
                case "dato":
			executedatoSupervisor($values);
		break;
                case "d":
			executedEvaluadorpt($values);
		break;
                case "dat":
			executedatSupervisorpt($values);
		break;
                case "extract":
			executeExtractDatospt($values);
		break;
                case "extraer":
			executeExtraerDatos($values);
		break;
                case "upload":
			executeUploadPersonas($values);
		break;
                case "save":
			executePersonas($values);
		break;
		default:
                        executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{
                  $values['action'] = "add";
		require('form.php');
	}
	function executeNew($values = null, $errors = null)
	{
                $values['action'] = "add";
		require('form.php');
	}


	function executeAdd($values = null,$errors = array())
	{

            $errors = validate($values,$_FILES);

            if(count($errors)>0){
                //print_r($errors);die();
		executeNew($values,$errors);die;
            }else{
                
                //echo 'kkkk';die();
                //print_r($values);die;
                $Evaluciones = new Evaluciones();
                $values = $Evaluciones->saveEvaluaciones($values);
                executeUploadPersonas($values);
                
            }
         executeEdit($values);

	}
	function executeEdit($values = null,$errors = null,$msg = null)
	{
		//print_r($values);die;
		$Evaluciones = new Evaluciones();
		$values = $Evaluciones->getEvalucionesById($values);
		$values['action'] = 'update';
                $values['msg'] = $msg;

		require('form.php');
	}
	function executeUpdate($values = null)
	{

            $errors = validate($values,$_FILES);
            if(count($errors)>0){

		executeEdit($values,$errors);die;
            }else{

                $Evaluciones = new Evaluciones();
                $values = $Evaluciones ->updateEvaluciones($values);
                $msg = "Actualizado correctamente";
                //print_r($values);die;
                executeEdit($values,$errors,$msg);die;
            }


	}
	
        function executeGetDatos($values)
        {
            
            $Evaluacion = new Evaluacion();
            $id_pevaluacion = $Evaluacion->getDatos($values);
    
            echo '<tr id="s0"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluacion["pri_ape"].' '.$id_pevaluacion["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s1"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluacion["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s2"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluacion["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s3"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluacion["id_ubicacion"].'">
                                    </td></tr>';
          
        }
        
        function executeDatosEvaluador($values)
        {
            
            $Evaluacion = new Evaluacion();
            $id_pevaluador = $Evaluacion->datosEvaluador($values);
    
            echo '<tr id="s4"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluador["pri_ape"].' '.$id_pevaluador["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s5"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluador["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s6"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluador["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s7"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_pevaluador["id_ubicacion"].'">
                                    </td></tr>';
          
        }
        
        function executeDatoSupervisor($values)
        {
            
            $Evaluacion = new Evaluacion();
            $id_sevaluador = $Evaluacion->datoSupervisor($values);
    
            echo '<tr id="s8"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_sevaluador["pri_ape"].' '.$id_sevaluador["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s9"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_sevaluador["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s10"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_sevaluador["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s11"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_sevaluador["id_ubicacion"].'">
                                    </td></tr>';
          
        }
        
        function executeDEvaluadorpt($values)
        {
            
            $Evaluacion = new Evaluacion();
            $id_evaluadorpt = $Evaluacion->dEvaluadorpt($values);
    
            echo '<tr id="s16"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_evaluadorpt["pri_ape"].' '.$id_evaluadorpt["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s17"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_evaluadorpt["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s18"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_evaluadorpt["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s19"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_evaluadorpt["id_ubicacion"].'">
                                    </td></tr>';
          
        }
        
        function executeDatSupervisorpt($values)
        {
            
            $Evaluacion = new Evaluacion();
            $id_supervisorpt = $Evaluacion->dEvaluadorpt($values);
    
            echo '<tr id="s16"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_supervisorpt["pri_ape"].' '.$id_supervisorpt["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s17"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_supervisorpt["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s18"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_supervisorpt["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s19"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_supervisorpt["id_ubicacion"].'">
                                    </td></tr>';
        }

        function executeExtractDatospt($values){
            
            $Evaluacion = new Evaluacion();
            $id_ptevaluacion = $Evaluacion->extractDatospt($values);
            
            echo '<tr id="s12"><td align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_ptevaluacion["pri_ape"].' '.$id_ptevaluacion["pri_nom"].'">
                                    </td></tr>';
            echo '<tr id="s13"><td align="left">Título de Cargo
                                        <input type="text" readonly class="form-control" name="" value="'.$id_ptevaluacion["id_cargo"].'">
                                    </td></tr>';
            echo '<tr id="s14"><td align="left">Fecha de Ingreso
                                        <input type="text" readonly class="form-control" name="" value="'.$id_ptevaluacion["fec_ingreso"].'">
                                    </td></tr>';
            echo '<tr id="s15"><td align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_ptevaluacion["id_ubicacion"].'">
                                    </td></tr>';
        }
        
        function executeExtraerDatos($values){
            
            $Evaluacion = new Evaluacion();
            $id_oevaluacion = $Evaluacion->extraerDatos($values);
            
            echo '<th id="s31" align="left">Apellidos y Nombres 
                                        <input type="text" readonly class="form-control" name="" value="'.$id_oevaluacion["pri_ape"].' '.$id_oevaluacion["pri_nom"].'">
                                    </th>';
            echo '<th id="s32" align="left">Título de Cargo
                                        <input type="text" readonly  class="form-control" name="" value="'.$id_oevaluacion["id_cargo"].'">
                                    </th>';
            echo '<th id="s33" align="left">Fecha de Ingreso
                                        <input type="text" readonly  class="form-control" name="" value="'.$id_oevaluacion["fec_ingreso"].'">
                                   </th>';
            echo '<th id="s34" align="left">Ubicación Administrativa
                                        <input type="text" readonly class="form-control" name="" value="'.$id_oevaluacion["id_ubicacion"].'">
                                    </th>';
            
        }
        
         function executeUploadPersonas($values)
        {
            $Personas = new Personas();
            //print_r($values);die;
            if(isset($values['Archivo']) and $values['Archivo']['size']>0)
                {
                    //obtenemos el archivo .csv
                    $tipo = $values['Archivo']['type'];
                    $tamanio = $values['Archivo']['size'];

                    $archivotmp = $values['Archivo']['tmp_name'];

                    //cargamos el archivo
                    $lineas = file($archivotmp);

                    //inicializamos variable a 0, esto nos ayudará a indicarle que no lea la primera línea
                    $i=0;
                    $arreglo = array(array());
                    $arreglo_errores = array();
                    //Recorremos el bucle para leer línea por línea
                    foreach ($lineas as $linea_num => $linea)
                        {
                           //abrimos bucle
                           /*si es diferente a 0 significa que no se encuentra en la primera línea
                           (con los títulos de las columnas) y por lo tanto puede leerla*/
                           if($i != 0)
                                {
                               //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
                               /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá
                               leyendo hasta que encuentre un ; */
                               $datos = explode(";",$linea);

                               //Almacenamos los datos que vamos leyendo en una variable
                              
                               $num_documento = trim($datos[0]);
                               $pri_nom = trim($datos[1]);
                               $pri_ape = trim($datos[2]);
                               //$correo = trim($datos[3]);
                               //$sexo = trim($datos[4]);
                               $fec_nacimiento = trim($datos[5]);
                               $id_ubicacion = trim($datos[6]);
                               $id_cargo = trim($datos[7]);

                                $array[$i] = array(
                                "num_documento" => $num_documento,
                                "pri_nom" => $pri_nom,
                                "pri_ape" => $pri_ape,
                                //"correo" => $correo,
                                //"sexo" => $sexo,
                                "fec_nacimiento" => $fec_nacimiento,
                                "id_ubicacion" => $id_ubicacion,
                                "id_cargo" => $id_cargo,
                                );
                                
                                $Personas->savePersonasArchivo($array[$i]);
                                
                           }

                           /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya
                           entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
                           $i++;
                           //cerramos bucle
                        }
            }
         executeEdit($values);

	}
        function executesaveEvaluacion($values)
        {
            $Evaluaciones = new Evaluaciones;
            $generar  = $Evaluaciones->generar($values); 
        }
        
         