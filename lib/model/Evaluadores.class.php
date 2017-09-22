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
        class Evaluadores {
                
                function getEvaluadores($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Personas
			->select("*");
			return $q; 
			
		}
                
                function saveEvaluadores($values){
			 //print_r($values); die;
			
                        $array = array(
               
                                "id_persona" => $values['id_persona'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                 
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->evaluadores()->insert($array);
                        $values['id_evaluador'] = $ConnectionORM->getConnect()->evaluadores()->insert_id();
			return $values;	
                        
                        
			return $values;	
			
		}
		
}
