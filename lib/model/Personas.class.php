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
class Personas {
    
		public function __construct() 
		{
			
		}
		
                public function getUsuariosList($values)
		{	
			$columns = array();
			$columns[0] = 'id_persona';
			$columns[1] = 'num_documento';
			$columns[2] = 'pri_ape';
                        $columns[3] = 'pri_nom';
			$columns[4] = 'id_ubicacion';
                        $columns[5] = 'id_cargo';
			$columns[6] = 'id_estatus';
            
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
				$where.=" AND upper(num_documento) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(pri_ape) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(pri_nom) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(id_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(id_cargo) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][2]['search']['value']."%')";
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
			$q = $ConnectionORM->getConnect()->personas
			->select("*")
			->order("$column_order $order") 
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = personas.id_estatus")
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
				$where.=" AND id_persona = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(num_documento) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(pri_ape) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
                        if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(pri_nom) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(id_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(id_cargo) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        
				
				
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personas
			->select("count(*) as cuenta")	
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = personas.id_estatus")
			->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
		
               public function getPersonasById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personas
			->select("*")
			->where("personas.id_persona=?",$values['id_persona'])
			->fetch();
			return $q; 
                        
			
		}
		function deleteUser($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->delete();
			
			
		}		
		function savePersonas($values){
			 
                        $array = array(
                               "id_persona" => $values ['id_persona'],
                                "num_documento" => $values ['num_documento'],
                                "pri_ape" => $values['pri_ape'],
                                "pri_nom" => $values['pri_nom'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                "id_cargo" => $values['id_cargo'],
                                "id_estatus" => $values['id_estatus'],
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->personas()->insert($array);
			$values['id_persona'] = $ConnectionORM->getConnect()->personas()->insert_id();
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personas()->insert($array);                        
                        
                        
                        
			return $values;	
			
		}
		function savePersonasArchivo($values){
			 //print_r($values); die;
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->personas()->insert($values);          
			
		}
		function updatePersonal($values){
                       
                        $array = array(
                                "id_persona" => $values ['id_persona'],
                                "num_documento" => $values ['num_documento'],
                                "pri_nom" => $values['pri_nom'],
                                "pri_ape" => $values['pri_ape'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                "id_cargo" => $values['id_cargo'],
                                "id_estatus" => $values['id_estatus'],
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
                 
                        function getPersonas($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Personas
			->select("*");
			return $q; 
			
		}
}