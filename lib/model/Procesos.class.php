<?php

        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        /**
         * Description of proceso
         *
         * @author LENOVO
         */
        class Procesos {
            
                public function __construct() 
		{
			
		}
                function delete($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->delete();
			
			
		}		
		function save($values){
			 
                        $array = array(
                            "id_persona" => $values['id_persona'],
                            "id_usuario" => $values['id_persona'],
                            "nom_usuario" => $values['nom_usuario'],
                            "id_grupo" => $values['id_grupo'],
                            "clave" => hash('sha256',$values['clave']),
                            "id_estatus" => $values['id_estatus']
                            
                        );
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios()->insert($array);
			$values['id_usuario'] = $ConnectionORM->getConnect()->usuarios()->insert_id();
			return $values;	
			
		}
                function update($values){

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
}
