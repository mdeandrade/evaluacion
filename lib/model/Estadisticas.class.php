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
             class Estadisticas {
                
                function getEstadisticas($values){
                       
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Personas
			->select("*");
			return $q; 
                }
                  function saveEstadisticas($values){
			 //print_r($values); die;
                        $array = array(
               
                                "id_persona" => $values['id_persona'],
                                "id_evaluacion" => $values['id_evaluacion'],
                                 
                        );
			$ConnectionORM = new ConnectionORM();
                        $q = $ConnectionORM->getConnect()->estadisticas()->insert($array);
                        $values['id_estadistica'] = $ConnectionORM->getConnect()->estadisticas()->insert_id();
			return $values;	
		}
             }
                             
                /*function Estadisticas($values){
                       
                    $dataPoints = array();
                    $ConnectionORM = new ConnectionORM();
                    $q = $ConnectionORM->getConnect()->Personas
                    ->select("*")
                    ->where("id_persona=?",$values['id_persona'])
                    ->and("id_cargo=?",$values['id_cargo'])
                    ->fetch();
                    //var_dump($q);
                    //$q;die;
                    //print_r($values);  die;
                    return $q;
                    //$result = mysql_query($conn, "SELECT * FROM personas");
    
                        //while($row = mysql_fetch_array($q))
                        while($row = fetch($q))
                            {        
                                $point = array("label" => $row['pri_nom'] , "y" => $row['id_cargo']);
        
                                array_push($dataPoints, $point);        
                            }
                        echo json_encode($dataPoints, JSON_NUMERIC_CHECK);
                        
		}
                
                
			*/
                