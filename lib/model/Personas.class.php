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
		
                public function getPersonasList($values)
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
                        if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(pri_nom) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(nom_ubicacion) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(nom_cargo) like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][6]['search']['value']."%')";
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
			->select("*,nom_ubicacion")
			->order("$column_order $order") 
			->join("ubicaciones","INNER JOIN ubicaciones u on u.id_ubicacion = personas.id_ubicacion")
                        ->join("cargos","INNER JOIN cargos c on c.id_cargo = personas.id_cargo")
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = personas.id_estatus")
                        ->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountPersonasList($values)
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
                        if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(pri_nom) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(nom_ubicacion) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(nom_cargo) like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(nom_estatus) like ('%".$values['columns'][6]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        
				
				
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personas
			->select("count(*) as cuenta")	
			->join("ubicaciones","INNER JOIN ubicaciones u on u.id_ubicacion = personas.id_ubicacion")
                        //->join("cargos","INNER JOIN cargos c on c.id_cargo = personas.id_cargo")
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
                                "nom_ubicacion" => $values['id_ubicacion'],
                                "nom_cargo" => $values['id_cargo'],
                                "nom_estatus" => $values['id_estatus'],
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
		function updatePersonas($values){
                       
                        $array = array(
                                "id_persona" => $values ['id_persona'],
                                "num_documento" => $values ['num_documento'],
                                "pri_nom" => $values['pri_nom'],
                                "pri_ape" => $values['pri_ape'],
                                "nom_ubicacion" => $values['id_ubicacion'],
                                "nom_cargo" => $values['id_cargo'],
                                "nom_estatus" => $values['id_estatus'],
                        );
                        
			$id_persona = $values['id_persona'];
                        //echo $id_persona;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->personas("id_persona", $id_persona)->update($array);
                        $array = array(
                            "id_estatus" => $values['id_estatus']
                            
                        );
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios("id_persona", $id_persona)->update($array);

                        return $q;
			
		}
		
		
                 
                        function getPersonas($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Personas
			->select("*");
			return $q; 
			
		}
}