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
		$validator_values['fec_apertura_evaluacion'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha desde",
			"required" => true
		);
		$validator_values['fec_cierre_evaluacion'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha hasta",
			"required" => true
		);
                $validator_values['id_estatus'] = array(

			"minlength" => 1,
			"maxlength" => 2,
			"type" => "text",
			"label" => "Estatus",
			"required" => FALSE
		);
                $validator_values['fec_apertura_odi'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha de apertura para los ODI",
			"required" => true
		);
		$validator_values['fec_cierre_odi'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha cierre para los ODI",
			"required" => true
		);
		$validator_values['peso_odi'] = array(

			"minlength" => 1,
			"maxlength" => 2,
			"type" => "number",
			"label" => "Peso máximo para los ODI",
			"required" => true
		);
                $validator_values['rango_max_odi'] = array(

			"minlength" => 1,
			"maxlength" => 2,
			"type" => "number",
			"label" => "Rango maximo para los ODI",
			"required" => true        
		);
                $validator_values['fec_apertura_competencia'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha apertura para las comptencia",
			"required" => true
		);
		$validator_values['fec_cierre_competencia'] = array(

			"minlength" => 8,
			"maxlength" => 20,
			"type" => "date",
			"label" => "Fecha cierre para las comptencia",
			"required" => true
		);
		$validator_values['peso_competencia'] = array(

			"minlength" => 1,
			"maxlength" => 2,
			"type" => "number",
			"label" => "Peso máximo para las competencia",
			"required" => true
		);
		
		$validator_values['rango_max_competencia'] = array(

			"minlength" => 1,
			"maxlength" => 2,
			"type" => "number",
			"label" => "Rango maximo por competncia",
			"required" => true
		);
		
		
		
		/*$validator_values['descripcion'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Descripción",
			"required" => true
		);*/





		$ValidateBase = new ValidateBase();
		$errors = $ValidateBase->validate_base($validator_values, $values);


                /**Debe estar despues del validateBase*/
                if(isset($values['descripcion']) and $values['descripcion'] == '12345678901'){

                    $errors['descripcion'] = 'Marcos';
                }

                return $errors;


	}
