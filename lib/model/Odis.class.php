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
        class Odis {
    
		public function __construct() 
		{
			
		}
		public function getOdisList($values)
		{	
			$columns = array();
			$columns[0] = 'id_proc';
			$columns[1] = 'descripcion';
			$columns[2] = 'id_estatus';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_proc = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(descripcion) like ('%".$values['columns'][1]['search']['value']."%')";
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
			$q = $ConnectionORM->getConnect()->procesos
			->select("*, nom_estatus, descripcion")
			->order("$column_order $order")
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = procesos.id_estatus_proc") 
                        //->join("procesos","INNER JOIN procesos p on p.id_proc = procesos.descripcion")        
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountOdisList($values)
		{	
			$where = '1 = 1';
                        if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_proc = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(descripcion) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
		
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos
			->select("count(*) as cuenta")	
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = procesos.id_estatus_proc") 
                        //->join("procesos","INNER JOIN procesos p on p.id_proc = procesos.descripcion")
                        ->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getOdisById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personal
			->select("*")
			->where("personal.id_persona=?",$values['id_persona'])
			->fetch();
			return $q; 				
			
		}
		function deleteOdis($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->delete();
			
			
		}		
		function saveOdis($values){
			 
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
		function updateOdis($values){
                       
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
		
}