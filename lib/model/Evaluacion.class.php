<?php

        /*
        * To change this license header, choose License Headers in Project Properties.
        * To change this template file, choose Tools | Templates
        * and open the template in the editor.
        */

        /**
        * Description of Evaluacion
        *
        * @author LENOVO
        */
        class Evaluacion {
    
                public function getProcesosList($values)
                    {	
			$columns = array();
			$columns[0] = 'id_estatus';
			$columns[1] = 'id_persona';
			$columns[2] = 'id_ubicacion';
			
            
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_estatus = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(id_persona) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(id_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
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
			$q = $ConnectionORM->getConnect()->evaluaciones
			->select("*")
			->order("$column_order $order")
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = procesos.id_estatus") 
                        ->join("estatus","INNER JOIN estatus p on p.id_persona = personas.id_persona")
                        ->join("estatus","INNER JOIN estatus u on u.id_ubicacion = ubicaciones.id_ubicacion")
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountProcesosList($values)
		{	
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND id_estatus = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(id_persona) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(id_ubicacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
				
				
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->evaluaciones
			->select("count(*) as cuenta")
                        ->join("estatus","INNER JOIN estatus e on e.id_estatus = procesos.id_estatus") 
                        ->join("estatus","INNER JOIN estatus e on p.id_persona = personas.id_persona")
                        ->join("estatus","INNER JOIN estatus e on u.id_ubicacion = ubicaciones.id_ubicacion")
			->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
}
