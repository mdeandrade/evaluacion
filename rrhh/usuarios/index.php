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
                /*case "show":
			executeShow($values);
		break;*/
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
                $Usuarios = new Usuarios();
                $values = $Usuarios->saveUsuarios($values);

                executeEdit($values);
            }

	}
	function executeEdit($values = null,$errors = null,$msg = null)
	{
		//print_r($values);die;
		$Usuarios = new Usuarios();
		$values = $Usuarios->getUsuariosById($values);
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

                $Usuarios = new Usuarios();
                $Usuarios ->updateUsuarios($values);
                $msg = "Actualizado correctamente";
                //print_r($values);die;
                executeEdit($values,$errors,$msg);die;
            }


	}
	function executeListJson($values)
	{
            //print_r($values);die;
		$Usuarios= new Usuarios();
		$list_json = $Usuarios ->getUsuariosList($values);
		$list_json_cuenta = $Usuarios ->getCountUsuariosList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
                    //print_r($values);die;
			foreach ($list_json as $list)
			{
                            //print_r($values);die;
				$id_usuario = $list['id_usuario'];
				$array_json['data'][] = array(
					"id_usuario" => $id_usuario,
					"nom_usuario" => $list['nom_usuario'],
					"id_estatus" => $list['id_estatus'],
					"actions" =>
                                       '<form method="POST" action = "'.full_url.'/rrhh/usuarios/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_usuario" value="'.$id_usuario.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
                                        .'</form>'
					);
			}
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
				$array_json['data'][] = array(
					"id_usuario" => null,
					"nom_usuario" => null,
					"nom_estatus" => null,
					"actions" => null
					);
		}
		echo json_encode($array_json);die;
    }        
        /*function executeShow ($values)
                {
                    $Personas = new $Personas();
                    $lista_personas = $Personas->getPersonas($values);
                    $Roles = new Roles();
                    $lista_usuario_rol = $Roles->getRoles($values); 
                }*/
              
            
