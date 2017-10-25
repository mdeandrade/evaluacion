<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Usuarios
	 *
	 * @author marcos
	 */
	class Usuarios {
		
		public function __construct() 
		{
			
		}
               public function getUsuariosList($values)
		{	
			$columns = array();
			$columns[0] = 'id_usuario';
			$columns[1] = 'nom_usuario';
			$columns[2] = 'id_estatus';
                        $columns[3] = 'id_rol';
            
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_usuario = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(nom_usuario) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(nom_rol) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
				
			
			
			if(isset($values['order'][0]['column']) and $values['order'][0]['column']!='0')
			{
				$column_order = $columns[$values['order'][0]['column']];
			}
			if(isset($values['order'][0]['dir']) and $values['order'][0]['dir']!='0')
			{
				$order = $values['order'][0]['dir'];//asc o desc
			}
			//echo $column_order;die;
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios
			->select("*,nom_estatus, nom_rol")
			->order("$column_order $order") 
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = usuarios.id_estatus")
                        ->join("roles","INNER JOIN roles r on r.id_rol = usuarios.id_rol")
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountUsuariosList($values)
		{	
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_usuario = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(nom_usuario) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(nom_rol) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
                        }
				
				
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios
			->select("count(*) as cuenta")	
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = usuarios.id_estatus")
                        ->join("roles","INNER JOIN roles r on r.id_rol = usuarios.id_rol")
			->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
		
               public function getUsuariosById($values){
                        
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios
			->select("*")
			->where("usuarios.id_usuario=?",$values['id_usuario'])
			->fetch();
			return $q; 
                        
			
		}
		function deleteUsuarios($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios("id_usuario", $id_usuario)->delete();
			
			
		}		
		function saveUsuarios($values){
			 
                        $array = array(
                            "id_usuario" => $values['id_usuario'],
                            "id_persona" => $values['id_persona'],
                            "nom_usuario" => $values['nom_usuario'],
                            "id_estatus" => $values['id_estatus'],
                            "clave" => hash('sha256',$values['clave']),
                            "id_rol" => $values['id_rol'],
   
                        );
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios()->insert($array);
			$values['id_usuario'] = $ConnectionORM->getConnect()->usuarios()->insert_id();
			return $values;	
			
		}
		function updateUsuarios($values){

                        $array = array(
                            "nom_usuario" => $values['nom_usuario'],
                            "id_estatus" => $values['id_estatus'],
                            "id_rol" => $values['id_rol'],
                        );
                        
			if(isset($values['clave']) and $values['clave']!='')
			{
				$array['clave'] = hash('sha256', $values['clave']);
			}
			$id_usuario = $values['id_usuario'];
                        //echo $id_usuario;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios("id_usuario", $id_usuario)->update($array);
			return $q;
			
		}
		function updateUserData($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$id_usuario = $values['id_usuario'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario_data("id_usuario", $id_usaurio)->update($values);
			
			return $q;
			
		}
		function activeUserMasterCompany($id_company){		
			$ConnectionORM = new ConnectionORM();
			$status = 1;
			$date_updated = new NotORM_Literal("NOW()");
			//obtengo el usuario master
			$q = $ConnectionORM->getConnect()->usuario_company
			->select("id_user")->where("id_company=?",$id_company)->fetch();			
			$id_user =  $q['id_user'];
			
			//obtengo datos de la compañia
			$q = $ConnectionORM->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionORM->getConnect()->usuario("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionORM->getConnect()->usuario_perms("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el usuario_company  a 1 activo
			$q = $ConnectionORM->getConnect()->usuario_company->where("id_user=?", $id_user)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el status de la compañia a 1 activo
			$q = $ConnectionORM->getConnect()->company->where("id", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));			
			
			//actualizo el status de la company_validation_ve a 1 activo
			$q = $ConnectionORM->getConnect()->company_validation_ve->where("rif", $rif)->update(array('status'=>$status,'validate'=>$status));			

                        //actualizo el status de los arcivos a 1 activo
			$q = $ConnectionORM->getConnect()->company_files->where("id_company", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated,'validate'=>$status));			
		
			/*$Aws = new Aws();
			$Aws->activarGruero($id_user);*/
		}
		function inactiveUserMasterCompany($id_company){		
			$ConnectionORM = new ConnectionORM();
			$status = 0;
			$date_updated = new NotORM_Literal("NOW()");
			//obtengo el usuario master
			$q = $ConnectionORM->getConnect()->usuario_company
			->select("id_user")->where("id_company=?",$id_company)->fetch();			
			$id_user =  $q['id_user'];
			
			//obtengo datos de la compañia
			$q = $ConnectionORM->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionORM->getConnect()->usuario("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionORM->getConnect()->usuario_perms("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el usuario_company  a 1 activo
			$q = $ConnectionORM->getConnect()->usuario_company->where("id_user=?", $id_user)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el status de la compañia a 1 activo
			$q = $ConnectionORM->getConnect()->company->where("id", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));			
			
			$Aws = new Aws();
			$Aws->desactivarGruero($id_user);

		}		
		public function getUsuariosOperatorList($values)
		{	
			$columns = array();
			$columns[0] = 'id_user';
			$columns[1] = 'login';
			$columns[2] = 'registration_plate';
			$columns[3] = 'password';
			$columns[4] = 'status';
            $columns[5] = 'date_created';
            $columns[6] = 'date_updated';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%')";
			}
			if(isset($values['order'][0]['column']) and $values['order'][0]['column']!='0')
			{
				$column_order = $columns[$values['order'][0]['column']];
			}
			if(isset($values['order'][0]['dir']) and $values['order'][0]['dir']!='0')
			{
				$order = $values['order'][0]['dir'];//asc o desc
			}
			//echo $column_order;die;
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario
			->select("DISTINCT usuario.*,hoist.registration_plate, DATE_FORMAT(usuario.date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(usuario.date_updated, '%d/%m/%Y %H:%i:%s') as date_updated,first_name, first_last_name")
			->join("usuario_company","INNER JOIN usuario_company on usuario_company.id_user = usuario.id_user")
			->join("usuario_perms","INNER JOIN usuario_perms on usuario_perms.id_user = usuario.id_user")
			->join("usuario_data","INNER JOIN usuario_data on usuario_data.id_usuario = usuario.id_user")
			->join("usuario_hoist_company","LEFT JOIN usuario_hoist_company on usuario_hoist_company.id_user = usuario.id_user")
			->join("hoist","LEFT JOIN hoist on hoist.id = usuario_hoist_company.id_hoist ")
			->order("$column_order $order")
			->where("$where")
			->and("usuario_company.id_company =?",$values["company"])
			//->and("usuario_perms.id_perms =?",4)
                        ->and("usuario_company.status =1")
                        //->and("usuario.status =1")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountUsuariosOperatorList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%') ";
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario
			->select("count(*) as cuenta")
			->join("usuario_company","INNER JOIN usuario_company on usuario_company.id_user = usuario.id_user")
			->join("usuario_perms","INNER JOIN usuario_perms on usuario_perms.id_user = usuario.id_user")
			->where("$where")
			->and("usuario_company.id_company =?",$values["company"])
			//->and("usuario_perms.id_perms =?",4)
			->fetch();
			return $q['cuenta']; 			
		}
		function saveUserOperator($values){
			unset($values['PHPSESSID']);
			$user = array("login" => $values["login"],
						  "password" => hash('sha256', $values['password']),
						  "status" => $values["status"],
						  "mail"=>$values["mail"]);
			$user["date_created"] = date("Y-m-d H:i:s");
			$user["date_updated"] = date("Y-m-d H:i:s");
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario()->insert($user);
			$values['id_user'] = $ConnectionORM->getConnect()->usuario()->insert_id();
			
			$userData = array("first_name"=>$values["first_name"],
							  "second_name"=>$values["second_name"],
							  "first_last_name"=>$values["first_last_name"],
							  "second_last_name"=>$values["second_last_name"],
							  "gender"=>$values["gender"],
							  "nationality"=>$values["nationality"],
							  "document"=>$values["document"],
							  "phone"=>$values["phone"],
							  "id_usuario" => $values['id_user'],
							  //"certificado_file" => $values['certificado_file'],
							  "document_file" => $values['document_file']);
			$userData['date_created'] = date("Y-m-d H:i:s");
			$userData['date_updated'] = date("Y-m-d H:i:s");
			
			$userPerms = array("id_user" => $values['id_user'],
							   "id_perms" => 4);
			$userCompany = array("id_company" => $_SESSION["id_company"],
								 "id_user" => $values['id_user']);
			
			$usuariohoistcompany = array("id_company" => $_SESSION["id_company"],
										"id_user" => $values['id_user'],
										 "id_hoist" => $values['id_hoist']);
			
			$q = $ConnectionORM->getConnect()->usuario_data()->insert($userData);
			$q = $ConnectionORM->getConnect()->usuario_perms()->insert($userPerms);
			$q = $ConnectionORM->getConnect()->usuario_company()->insert($userCompany);
			//$q = $ConnectionORM->getConnect()->usuario_hoist_company()->insert($usuariohoistcompany);
			return $values;	
			
		}
		public function getUserOperatorById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario
			->select("*, DATE_FORMAT(usuario.date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(usuario.date_updated, '%d/%m/%Y %H:%i:%s') as date_updated,hoist.id AS id_hoist, usuario.status as status,usuario.id_user")
			->join("usuario_data","INNER JOIN usuario_data on usuario_data.id_usuario = usuario.id_user")	
			->join("usuario_hoist_company","LEFT JOIN usuario_hoist_company on usuario_hoist_company.id_user = usuario.id_user")
			->join("hoist","LEFT JOIN hoist on hoist.id = usuario_hoist_company.id_hoist")	
			->where("usuario.id_user=?",$values['id_user'])			
			->fetch();
			return $q; 				
			
		}

		function updateUserOperator($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
            $user = array("status" => $values["status"]);
			$user["date_updated"] = date("Y-m-d H:i:s");
			$id_user = $values['id_user'];
			$ConnectionORM = new ConnectionORM();
			
			
			$userData = array("status"=>$values["status"],
							  "id_user" => $values['id_user']);
			$userData['date_updated'] = date("Y-m-d H:i:s");
			
			
			$q = $ConnectionORM->getConnect()->usuario("id_user", $id_user)->update($userData);
			return $q;
			
		}
		function comparePasswordByUser($values){
			$valid = false;
			$id_usuario = $_SESSION['id_usuario'];
			$clave = hash("sha256", $values['clave_anterior']);
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios
			->select("count(*) as cuenta")
			->where("id_usuario=?",$id_usuario)
			->and("clave=?",$clave)
			->fetch();
                        //echo $q;die;
			$cuenta = $q['cuenta'];
			if($cuenta > 0)
			{
				$valid = true;
			}
			return $valid;
		}		
		function changePassword($values){
			$id_usuario = $_SESSION['id_usuario'];
                        //echo $id_usuario;die;
                        $array = array(
                            'clave' => hash('sha256',$values['clave_nueva']) 
                        );
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios("id_usuario", $id_usuario)->update($array);
			return $q;
			
		}
		function getLogin($values){
			$ConnectionORM = new ConnectionORM();			
			$where = "upper(usuario.login) = '".strtoupper($values['login'])."'";
			$where.= " and usuario.password = '".hash("sha256",$values['password'])."'";
			$where.= " and usuario.status = 1";
			$where.= " and usuario_perms.status = 1";
			$where.= " and usuario_perms.id_perms = 2";
			$q = $ConnectionORM->getConnect()->usuario
			->select("*,usuario_perms.id_perms")
			->join("usuario_data","INNER JOIN usuario_data on usuario_data.id_usuario = usuario.id_user")
			->join("usuario_perms","INNER JOIN usuario_perms on usuario_perms.id_user = usuario.id_user")
			->where("$where")
			->fetch();
			return $q; 				
			
			
		}
		public function getUserModifById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuario
			->select("*, DATE_FORMAT(usuario.date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(usuario.date_updated, '%d/%m/%Y %H:%i:%s') as date_updated")
			->join("usuario_perms","INNER JOIN usuario_perms on usuario_perms.id_user = usuario.id_user")		
			->where("usuario.id_user=?",$values['id_user'])->fetch();
			return $q; 				
			
		}
                
                function getPersonal($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Personas
			->select("*");
			return $q; 
			
		}
		

	}
	
