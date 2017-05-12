<?php
	function validate($values,$files = null){


		
		$errors = array();
		$validator_values = array();
  
		$validator_values['descripcion'] = array(
			
			"minlength" => 10,
			"maxlength" => 100,
			"type" => "text",
			"label" => "Descripción",
			"required" => true
		);

                

		$ValidateBase = new ValidateBase();
		$errors = $ValidateBase->validate_base($validator_values, $values);
		
 
                return $errors;
		
		
	}
	