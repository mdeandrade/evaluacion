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
		case "list_json":
			executeListJson($values);	
		break;
		default:
                        executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{

		require('list.php');
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
		executeNew($values,$errors);die;
            }else{
                //print_r($values);die;
                $id_persona = new Personal();
                $values = $id_persona->savePersonal($values);
               
                executeEdit($values);
            }
                
	}
	function executeEdit($values = null,$errors = null,$msg = null)
	{
		//print_r($values);die;
		$id_persona = new Personal();
		$values = $id_persona->getPersonalById($values);
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
               
                $id_persona = new Personal();
                $id_persona ->updatePersonal($values);
                $msg = "Actualizado correctamente";
                //print_r($values);die;
                executeEdit($values,$errors,$msg);die;
            }
		
		
	}
	function executeListJson($values)
	{
            $Personas= new Personas();
		$list_json = $Personas ->getPersonasList($values);
		$list_json_cuenta = $Personas ->getCountPersonasList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
                    //print_r($values);die;
			foreach ($list_json as $list)
			{
                            //print_r($values);die;
				$id_persona = $list['id_persona'];
				$array_json['data'][] = array(
					"id_persona" => $id_persona,
					"num_documento" => $list['num_documento'],
                                        "pri_ape" => $list['pri_ape'],
                                        "pri_nom" =>$list['pri_nom'],
					"nom_ubicacion" => $list['nom_ubicacion'],
                                        "nom_cargo" => $list['nom_cargo'],
                                        "nom_estatus" => $list['nom_estatus'],
					"actions" =>
                                       '<form method="POST" action = "'.full_url.'/rrhh/personal/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_persona" value="'.$id_persona.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
                                        .'</form>'
					);
			}
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
				$array_json['data'][] = array(
					"id_persona" => null,
					"num_documento" => null,
					"pri_ape" => null,
                                        "pri_nom" => null,
					"actions" => null
					);
		}
		echo json_encode($array_json);die;
                    
	}
                
       /* function executePersonas($values)
                 {
            $Evaluaciones = new Evaluaciones;
            $consulta  = $Evaluaciones->generar($values);


                $html = '<table class="table table-striped table-bordered" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Nombre y Apellido</th>
                            <th style="text-align: center;">Cargo</th>
                <th style="text-align: center;">Departamento</th>
                            <th style="text-align: center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>';


                foreach($consulta AS $fila){

    $generar_evaluacion = '<a href="#" data-toggle="tooltip" title="Generar Evaluación"><span class="fa fa-eye" style="margin-left:15px;"></span></a>';
    $html.='<tr>
        <td>' . $fila['pri_nom'] . ' ' . $fila['pri_ape'] . '</td>
        <td >'. $fila['id_cargo'] . '</td>
        <td >'. $fila['id_ubicacion'] . '</td>
        <td>'.$generar_evaluacion.'</td>
        </tr>';
} // FIN DE FOREACH
         }
    $html.='</table>';
        
        function executePersonas($values){
                        
                        $ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->Personal
                        ->select("*")
                        ->where("id_persona=?",$id_persona)
                        ->order("id_ubicacion,pri_nom,pri_ape,id_nivel");
                        
                        //echo'<pre>';var_dump($q);die;
                        /*var_dump($q);die;*/
            
          