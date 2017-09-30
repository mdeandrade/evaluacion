<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rangos
 *
 * @author LENOVO
 */
class Rangos {
                    
                function getRangos($values){
        
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Rangos
			->select("*");
			return $q; 
			
		}
}
