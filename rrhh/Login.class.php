<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Users
	 *
	 * @author marcos
	 */
	class Login {
		
		public function __construct() 
		{
			
		}
		public function GetLogin($user,$password)
		{	
                        
			//echo $user."---".$password;
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->usuarios
                        ->select('*')
			->where('upper(nom_usuario) =?',strtoupper($user))
			->and('clave =?',hash('sha256', $password))
                        ->and('id_estatus=?',1)
                        ->and('id_rol=?', $values['id_rol']);	
			$ConnectionORM->close();	
			
		//echo '<pre>'; var_dump($q); die;	
		return $q;
		}		
	}
	