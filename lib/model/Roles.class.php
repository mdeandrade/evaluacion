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
        class Roles {
                
                function getRoles($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Roles
			->select("*");
			return $q; 
			
		}
                
                function saveEvaluadores($values){
			 //print_r($values); die;
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->evaluadores()->insert($values);          
			
		}
}
