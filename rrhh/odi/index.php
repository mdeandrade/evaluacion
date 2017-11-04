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
                $Odis = new Odis();
                $values = $Odis->saveOdis($values);
               
                executeEdit($values);
            }
                
	}
	function executeEdit($values = null,$errors = null,$msg = null)
	{
		//print_r($values);die;
		$Odis = new Odis();
		$values = $Odis->getOdisById($values);
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
               
                $Cargos = new Odis();
                $Cargos ->updateCargos($values);
                $msg = "Actualizado correctamente";
                //print_r($values);die;
                executeEdit($values,$errors,$msg);die;
            }
		
		
	}
	function executeListJson($values)
	{
		$Odis= new Odis();
		$list_json = $Odis ->getOdisList($values);
		$list_json_cuenta = $Odis ->getCountOdisList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{

				$id_cargo = $list['id_cargo'];
				$array_json['data'][] = array(
					"id_proc" => $id_proc,
					"descripcion" => $list['descripcion'],
					"nom_estatus" => $list['nom_estatus'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/rrhh/odi/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_proc" value="'.$id_proc.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
                                        .'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array(
                            "id_proc"=>null,
                            "descripcion"=>"",
                            "nom_estatus"=>"",
                            "actions"=>""
                            );
		}
		echo json_encode($array_json);die;
		
	}