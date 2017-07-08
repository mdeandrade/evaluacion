<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personal
 *
 * @author LENOVO
 */
class Personal {
    
		public function __construct() 
		{
			
		}
		public function getPersonalList($values)
		{	
			$columns = array();
			$columns[0] = 'id_persona';
			$columns[1] = 'nombres';
			$columns[2] = 'id_uicacion';
                        $columns[3] = 'id_cargo';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_persona = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(nombres) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_cargo) like ('%".$values['columns'][2]['search']['value']."%')";
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
			$q = $ConnectionORM->getConnect()->personal
			->select("*,nom_grupo, nom_estatus")
			->order("$column_order $order")
                        ->join("ubicacion","INNER JOIN ubicacion u on u.id_ubicacion = personal.id_ubicacion")         
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountPersonalList($values)
		{	
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_persona = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(nombres) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_cargo) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personal
			->select("count(*) as cuenta")	
                        ->join("ubicacion","INNER JOIN ubicacion u on u.id_ubicacion = personal.id_ubicacion")    
			->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getPersonalById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personal
			->select("*")
			->where("personal.id_persona=?",$values['id_persona'])
			->fetch();
			return $q; 				
			
		}
		function deleteUser($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->delete();
			
			
		}		
		function savePersonal($values){
			 
                        $array = array(
                            "nombres" => $values['nombres'],
                            "apellidos" => $values['apellidos'],
                            "sexo" => $values['sexo'],
                            "fec_nac" => $values['fec_nac'],
                            "doc_iden" => strtoupper($values['doc_iden']),
                            "id_ubicacion" => $values['id_ubicacion'],
                            "id_cargo" => $values['id_cargo'],
                            "id_estatus" => $values['id_estatus']
                            
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->personal()->insert($array);
                        
			$values['id_persona'] = $ConnectionORM->getConnect()->personal()->insert_id();

                        $array = array(
                            "cod_expediente" => strtoupper($values['doc_iden']),
                            "id_persona" => $values['id_persona'],
                            "id_estatus" => $values['id_estatus'],
                            "fec_creacion" => date('Y-m-d'),
                            
                        );
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->expedientes()->insert($array);                        
                        
                        
                        
			return $values;	
			
		}
		function updatePersonal($values){
                       
                        $array = array(
                            "nombres" => $values['nombres'],
                            "apellidos" => $values['apellidos'],
                            "sexo" => $values['sexo'],
                            "fec_nac" => $values['fec_nac'],
                            "id_ubicacion" => $values['id_ubicacion'],
                            "id_cargo" => $values['id_cargo'],
                            "id_estatus" => $values['id_estatus']
                            
                        );
                        
			$id_persona = $values['id_persona'];
                        //echo $id_persona;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personal("id_persona", $id_persona)->update($array);
                        $array = array(
                            "id_estatus" => $values['id_estatus']
                            
                        );
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->expedientes("id_persona", $id_persona)->update($array);

                        return $q;
			
		}
		function updateUserData($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$id_users = $values['id_users'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users_data("id_users", $id_users)->update($values);
			
			return $q;
			
		}
		function activeUserMasterCompany($id_company){		
			$ConnectionORM = new ConnectionORM();
			$status = 1;
			$date_updated = new NotORM_Literal("NOW()");
			//obtengo el usuario master
			$q = $ConnectionORM->getConnect()->users_company
			->select("id_user")->where("id_company=?",$id_company)->fetch();			
			$id_user =  $q['id_user'];
			
			//obtengo datos de la compañia
			$q = $ConnectionORM->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionORM->getConnect()->users_perms("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el users_company  a 1 activo
			$q = $ConnectionORM->getConnect()->users_company->where("id_user=?", $id_user)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
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
			$q = $ConnectionORM->getConnect()->users_company
			->select("id_user")->where("id_company=?",$id_company)->fetch();			
			$id_user =  $q['id_user'];
			
			//obtengo datos de la compañia
			$q = $ConnectionORM->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionORM->getConnect()->users_perms("id_user", $id_user)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el users_company  a 1 activo
			$q = $ConnectionORM->getConnect()->users_company->where("id_user=?", $id_user)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el status de la compañia a 1 activo
			$q = $ConnectionORM->getConnect()->company->where("id", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));			
			
			$Aws = new Aws();
			$Aws->desactivarGruero($id_user);

		}
                 function executePersonas($values){
                        
                        $ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->Personal
                        ->select("*")
                        ->where("id_persona=?",$id_persona)
                        ->order("id_ubicacion,pri_nom,pri_ape,id_nivel");
                        
                        var_dump($q);die;
            
           }
 
}