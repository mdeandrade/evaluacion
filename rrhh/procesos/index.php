<?php include("../../autoload.php");?>	
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
		case "bienvenida":
			executeBienvenida($values);	
		break;
		case "list_json":
			executeListJson($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
						
	function executeIndex($values = null){
    
        require('list.php');	
    }
	function executeBienvenida($values = null){
	
	require('bienvenida.php');
	}
	function executeListJson($values)
	{
		$Procesos= new Procesos();
		$list_json = $Procesos ->getProcesosList($values);
		$list_json_cuenta = $Procesos ->getCountProcesosList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				$id_proc = $list['id_proc'];
				$array_json['data'][] = array(
					"id_proc" => $id_proc,
					"descripcion" => $list['descripcion'],
					"fec_apertura_evaluacion" => $list['fec_apertura_evaluacion'],
                    "fec_cierre_evaluacion" => $list['fec_cierre_evaluacion'],
                    "fec_apertura_odi" => $list['fec_apertura_odi'],
                    "fec_cierre_odi" => $list['fec_cierre_odi'],
                    "fec_apertura_competencia" => $list['fec_apertura_competencia'],
                    "fec_cierre_competencia" => $list['fec_cierre_competencia'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/rrhh/procesos/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_proc" value="'.id_proc.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
                                        .'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
				$array_json['data'][] = array(
					"id_proc" => null,
					"descripcion" => null,
					"nom_estatus" => null,
                    "nom_estatus" => null,
                    "nom_estatus" =>null,
                    "nom_estatus" => null,
                    "nom_estatus" => null,
                    "nom_estatus" => null,
					"actions" => null
					);	
		}
		echo json_encode($array_json);die;
    }
