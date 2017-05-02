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
		$validator_values['fec_desde'] = array(

			"minlength" => 10,
			"maxlength" => 20,
			"type" => "number",
			"label" => "Fecha desde",
			"required" => true
		);
		$validator_values['fec_hasta'] = array(

			"minlength" => 10,
			"maxlength" => 20,
			"type" => "number",
			"label" => "Fecha hasta",
			"required" => true
		);
		$validator_values['peso_odi'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Peso odis",
			"required" => true
		);
		$validator_values['peso_competencia'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Peso competencia",
			"required" => true
		);
		$validator_values['rangos_max_odi'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Rango maximo por odi",
			"required" => true
		);
		$validator_values['rangos_max_competencias'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Rango maximo por competncia",
			"required" => true
		);
		$validator_values['id_estatus'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "text",
			"label" => "Etatus",
			"required" => true
		);
		$validator_values['fec_apertura_odi'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Fecha apertura de los odis",
			"required" => true
		);
		$validator_values['fec_cierre_odi'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Fecha cierre de los odis",
			"required" => true
		);
		$validator_values['fec_apertura_competencia'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Fecha apertura de las comptencia",
			"required" => true
		);
		$validator_values['fec_cierre_competencia'] = array(

			"minlength" => 10,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Fecha cierre de las comptencia",
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