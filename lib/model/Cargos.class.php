<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personal
 *
 * @author LENOVO
 */
class Cargos {
 		public function __construct() 
		{
			
		}
		
                function getCargos($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Cargos
			->select("*");
			return $q; 
			
		}
}