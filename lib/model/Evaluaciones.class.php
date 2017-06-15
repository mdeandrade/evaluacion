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
                            "rangos_max_odi" => $values['rangos_max_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "peso_competencia" => $values['peso_competencia'],
                            "rangos_max_competencias" => $values['rangos_max_coetencias'],
                            //"max_odis_permitidos" => $values['max_odis_permitidos']
                            
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->procesos()->insert($array);
                        $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
			return $values;	
			
		}
                function updateUser($values){

                        $array = array(
                            "id_proc" => $values['id_proc'],
                            "descripcion" => $values['descripcion'],
                            "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                            "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                            "id_estatus_proc" => $values['id_estatus_proc'],
                            "fec_apertura_odi" => $values['fec_apertura_odi'],
                            "fec_cierre_odi" => $values['fec_cierre_odi'],
                            "peso_odi" => $values['peso_odi'],
                            "rangos_max_odi" => $values['rangos_max_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "peso_competencia" => $values['peso_competencia'],
                            "rangos_max_coetencias" => $values['rangos_max_coetencias'],
                            "max_odis_permitidos" => $values['max_odis_permitidos']
                        );
                        
			$id_proc = $values['id_proc'];
                        //echo $id_proc;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios("id_proc", $id_proc)->update($array);
			return $q;
                        
			
		}
		function updateProcesos($values){

                        $array = array(
                            "id_proc" => $values['id_proc'],
                            "descripcion" => $values['descripcion'],
                            "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                            "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                            "id_estatus_proc" => $values['id_estatus_proc'],
                            "fec_apertura_odi" => $values['fec_apertura_odi'],
                            "fec_cierre_odi" => $values['fec_cierre_odi'],
                            "peso_odi" => $values['peso_odi'],
                            "rangos_max_odi" => $values['rangos_max_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "peso_competencia" => $values['peso_competencia'],
                            "rangos_max_coetencias" => $values['rangos_max_coetencias'],
                            //"max_odis_permitidos" => $values['max_odis_permitidos']
                        );
			$id_proc = $values['id_proc'];
                        //echo $id_usuario;die;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos("id_proc", $id_proc)->update($array);
			return $values;
			
		}
		public function getProcesosById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->procesos
			->select("*")
			->where("id_proc=?",$values['id_proc'])
			->fetch();
			return $q; 				
			
		}
                function generar($values){

                            //select
                            //recuerden usar el id_proc
                
                            $ConnectionORM = new ConnectionORM();
                            $q = $ConnectionORM->getConnect()->Evaluaciones
                            ->select("*")
                            ->join("procesos","INNER JOIN procesos p on p.id_proc = procesos.id_proc")
                            ->join("personas","INNER JOIN personas p on per.id_personas = personas.id_personas")
                            ->where("evaluaciones.id_proc=?",$values['id_proc']);
                
                            
                            
                            foreach($q as $procesos):
                                
                                //echo $uprocesos['id_proc']."<br>";
                               $array = array(
                                "id_personas" => $values['did_personas'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                "id_proc" => $values['id_proc'],
                                "objetivos" => $values['objetivos'],
                                

                                );
                                $ConnectionORM = new ConnectionORM();
                                $q = $ConnectionORM->getConnect()->procesos()->insert($array);//insert a tabla de usuarios
                                $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
                            endforeach;
                            //die;
                            //insert

            }
            

	}
	
