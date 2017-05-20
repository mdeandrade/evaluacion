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

                function generar($values){

                            //select
                            //recuerden usar el id_proc
                
                            $ConnectionORM = new ConnectionORM();
                            $q = $ConnectionORM->getConnect()->usuarios
                            ->select("*")
                            ->join("users_data","INNER JOIN users_data on users_data.id_proc = users.id_proc")	
                            ->where("evaluaciones.id_proc=?",$values['id_proc']);
                
                            
                            
                            foreach($q as $usuario):
                                
                                //echo $usuario['id_usuario']."<br>";
                               $array = array(
                                "id_persona" => $values['id_persona'],
                                "id_usuario" => $values['id_persona'],
                                "nom_usuario" => $values['nom_usuario'],
                                "id_grupo" => $values['id_grupo'],
                                "clave" => hash('sha256',$values['clave']),
                                "id_estatus" => $values['id_estatus']

                                );
                                $ConnectionORM = new ConnectionORM();
                                $q = $ConnectionORM->getConnect()->usuarios()->insert($array);//insert a tabla de usuarios
                                $values['id_proc'] = $ConnectionORM->getConnect()->usuarios()->insert_id();
                            endforeach;
                            //die;
                            //insert

            }	

	}
	
