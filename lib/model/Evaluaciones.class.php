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
                
                function saveEvalaucion($values){
			 
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
                             "max_odis_permitidos" => $values['max_odis_permitidos'],

                            
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->procesos()->insert($array);//insert a tabla de usuarios
                        $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
			return $values;
                        
			
		}
		function updateEvaluacion($values){

                        $array = array(
                            'nom_usuario' => $values['nom_usuario'],
                            'id_grupo' => $values['id_grupo'],
                            'id_estatus' => $values['id_estatus'],
                            
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
                function generar($values){

                            //select
                            //recuerden usar el id_proc
                
                            $ConnectionORM = new ConnectionORM();
                            $q = $ConnectionORM->getConnect()->Evaluaciones
                            ->select("*")
                            ->join("procesos","INNER JOIN procesos p on p.id_proc = procesos.id_proc")	
                            ->join("estatus","INNER JOIN estatus e on e.id_estatus = usuarios.id_estatus")
                            ->where("evaluaciones.id_proc=?",$values['id_proc']);
                
                            
                            
                            foreach($q as $procesos):
                                
                                //echo $uprocesos['id_proc']."<br>";
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
                                "max_odis_permitidos" => $values['max_odis_permitidos'],

                                );
                                $ConnectionORM = new ConnectionORM();
                                $q = $ConnectionORM->getConnect()->procesos()->insert($array);//insert a tabla de usuarios
                                $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
                            endforeach;
                            //die;
                            //insert

            }	

	}
	
