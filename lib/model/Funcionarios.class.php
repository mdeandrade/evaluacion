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
        class Funcionarios { 
            
            function saveFuncionarios($values){
                $array = array(
               
                                "Cedula" => $values ['num_documento'],
                                "Nombre" => $values['nombres'],
                                "Apellido" => $values['apellidos'],
                                "Correo" => $values['correo'],
                                "sexo" => $values['sexo'],
                                "fec_nac" => $values['fec_nac'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                "id_cargo" => $values['id_cargo'], 
                        );
                        $ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->personal()->insert($array);
                        $values['id_persona'] = $ConnectionORM->getConnect()->personal()->insert_id();
			return $values;	
}
              
        }