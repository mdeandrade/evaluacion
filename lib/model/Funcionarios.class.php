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
    
                function saveProcesos($values){
			 //print_r($values);die;
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
                        $q = $ConnectionORM->getConnect()->procesos()->insert($array);
                        $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
			return $values;	
			
		}
}
