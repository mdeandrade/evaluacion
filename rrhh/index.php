<?php include("../autoload.php");?>		
<?php //include("security.php");?>						
<?php


$action = "";
if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}
$values = $_REQUEST;
	switch ($action) {
		case "index":
			executeIndex($values);	
		break;
                case "acceso":
			executeAcceso($values);	
		break;
		case "bienvenida":
			executeBienvenida($values);	
		break;
		case "logout":
			executeLogout($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
						
	function executeIndex($values = null){
    
	if(isset($_SESSION['id_usuario']) and $_SESSION['id_usuario']!='')
	{
		executeBienvenida();
	}else{
		session_destroy();
		unset($_SESSION['id_usuario'],$_SESSION['pri_nom'],$_SESSION['pri_ape'],$_SESSION['usuario']);
		require('login.php');
	}	
		

	
	}
	function executeBienvenida($values = null){
    
	require('bienvenida.php');
	}
	function executeAcceso($values = null)
	{
              
		$Login = new Login();
		$q = $Login->GetLogin($values["nom_usuario"],$values["clave"],$values["id_rol"]);
               
		//echo $q;die;
                //print_r($values);
		if(count($q)> 0)
		{	
                       
			$_SESSION['id_persona'] = $q[0]['id_persona'];
			$_SESSION['nom_usuario'] = $q[0]['nom_usuario'];
                        $_SESSION['id_rol'] = $q[0]['id_rol'];
			executeBienvenida($values);
		}
		else
		{
			$values = null;
			$values["errors"] = "Usuario o clave incorrecto";
			executeIndex($values);
		}
	}
	function executeLogout($values = null){
        session_destroy();
	unset($_SESSION['id_perms'],$_SESSION['id_user'],$_SESSION['id_company'],$_SESSION['name'],$_SESSION['login']);

	require('login.php');
	}
