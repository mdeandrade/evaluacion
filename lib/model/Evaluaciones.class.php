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
	class Evaluaciones {
		
		public function __construct() 
		{
			
		}	
		function save($values){
			 
                        $array = array(
                            "id_proc" => $values['id_proc'],
                            "descripcion" => $values['descripcion'],
                            "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                            "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                            "peso_odi" => $values['peso_odi'],
                            "peso_competencia" => $values['peso_competencia'],
                            "id_estatus_proc" => $values['id_estatus_proc'],
                            "rangos_max_odi" => $values['rangos_max_odi'],
                            "rangos_max_competencias" => $values['rangos_max_competencias'],
                            "fec_apertura_odi" => $values['fec_apertura_odi'],
                            "fec_cierre_odi" => $values['fec_cierre_odi'],
                            "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                            "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                            "max_odis_permitidos" => $values['max_odis_permitidos']
                                
                        );
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios()->insert($array);
			$values['id_usuario'] = $ConnectionORM->getConnect()->usuarios()->insert_id();
			return $values;	
			
		}
                function generar($values){

                            //select
                            //recuerden usar el id_proc
                
                            //$ConnectionORM = new ConnectionORM();
                            //$q = $ConnectionORM->getConnect()->evaluacion
                            //->select("*")
                            //->join("evaluacion_data","INNER JOIN evaluacion_data on evaluacion_data.id_proc = evaluaciones.id_proc")	
                            //->where("evaluaciones.id_proc=?",$values['id_proc']);
                
                            
                            
                            //foreach($q as $proceso):
                                
                                echo $procesos['id_proc']."<br>";
                               $array = array(
                               "id_proc" => $values['id_proc'],
                               "descripcion" => $values['descripcion'],
                               "fec_apertura_evaluacion" => $values['fec_apertura_evaluacion'],
                               "fec_cierre_evaluacion" => $values['fec_cierre_evaluacion'],
                               "peso_odi" => $values['peso_odi'],
                               "peso_competencia" => $values['peso_competencia'],
                               "id_estatus_proc" => $values['id_estatus_proc'],
                               "rangos_max_odi" => $values['rangos_max_odi'],
                               "rangos_max_competencias" => $values['rangos_max_competencias'],
                               "fec_apertura_odi" => $values['fec_apertura_odi'],
                               "fec_cierre_odi" => $values['fec_cierre_odi'],
                               "fec_apertura_competencia" => $values['fec_apertura_competencia'],
                               "fec_cierre_competencia" => $values['fec_cierre_competencia'],
                               "max_odis_permitidos" => $values['max_odis_permitidos']
                                );
                                $ConnectionORM = new ConnectionORM();
                                $q = $ConnectionORM->getConnect()->procesos()->insert($array);//insert a tabla de usuarios
                                $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
                            //endforeach;
                            //die;
                            //insert

            }	

	}
	
