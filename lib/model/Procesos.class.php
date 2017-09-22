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
	class Procesos {
		
		public function __construct() 
		{
			
		}
		public function getProcesosList($values)
		{	
			$columns = array();
			$columns[0] = 'id_proc';
			$columns[1] = 'descripcion';
			$columns[2] = 'fec_apertura_evaluacion';
			$columns[3] = 'fec_cierre_evaluacion';
                        $columns[4] = 'fec_apertura_odi';
                        $columns[5] = 'fec_cierre_odi';
                        $columns[6] = 'fec_apertura_competencia';
                        $columns[7] = 'fec_cierre_competencia';
            
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
			/*if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(descripcion) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}*/			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(fec_apertura_evaluacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(fec_cierre_evaluacion) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(fec_apertura_odi) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(fec_cierre_odi) like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(fec_apertura_competencia) like ('%".$values['columns'][6]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                        if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(fec_cierre_competencia) like ('%".$values['columns'][7]['search']['value']."%')";
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
			->select("*")
			->order("$column_order $order")      
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
				$where.=" AND upper(fec_apertura_evaluacion) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(fec_cierre_evaluacion) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
				
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos
			->select("count(*) as cuenta")	
			->where("$where")
			->fetch();
			return $q['cuenta']; 			
		}
                function saveProcesos($values){
			 //print_r($values);die;
                        $array = array(
                            "descripcion" => $values['descripcion'],
                            "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                            "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                            "id_estatus_proc" => $values['id_estatus'],
                            "fec_apertura_odi" => $values['fec_apertura_odi'],
                            "fec_cierre_odi" => $values['fec_cierre_odi'],
                            "peso_odi" => $values['peso_odi'],
                            "rango_max_odi" => $values['rango_max_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "peso_competencia" => $values['peso_competencia'],
                            "rango_max_competencia" => $values['rango_max_competencia'],
                            //"max_odis_permitidos" => $values['max_odis_permitidos']
                            
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->procesos()->insert($array);
                        $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
			return $values;	
			
		}
                function updateProcesos($values){

                        $array = array(
                            "id_proc" => $values['id_proc'],
                            "descripcion" => $values['descripcion'],
                            "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                            "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                            "id_estatus_proc" => $values['id_estatus'],
                            "fec_apertura_odi" => $values['fec_apertura_odi'],
                            "fec_cierre_odi" => $values['fec_cierre_odi'],
                            "peso_odi" => $values['peso_odi'],
                            "rango_max_odi" => $values['rango_max_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "peso_competencia" => $values['peso_competencia'],
                            "rango_max_competencia" => $values['rango_max_competencia']
                            //"max_odis_permitidos" => $values['max_odis_permitidos']
                        );
                        
			$id_proc = $values['id_proc'];
                        //echo $id_proc;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos("id_proc", $id_proc)->update($array);
			return $q;
                        
			
		}
		public function getProcesosById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos
			->select("*")
			->where("id_proc=?",$values['id_proc'])
			->fetch();
			return $q; 				
			
		}
            
          
	}
	
