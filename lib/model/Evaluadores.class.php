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
        class Evaluacion {
    
                function generar($values){

                            //select
                            //recuerden usar el id_proc
                
                            $ConnectionORM = new ConnectionORM();
                            $q = $ConnectionORM->getConnect()->Procesos
                            ->select("id_persona.personas")
                            ->order("pri_ape, id_ubicaion")
                            ->join("ubicaciones","INNER JOIN ubicaciones u on u.id_ubicacion = ubicaciones.id_ubicacion")
                            ->where("id_proc=?",$values['id_proc']);
                            
                            foreach($q as $procesos):
                                
                                //echo $uprocesos['id_proc']."<br>";
                               $array = array(
                                "id_personas" => $values['did_personas'],
                                "id_ubicacion" => $values['id_ubicacion'],
                                
                                
                                

                                );
                                $ConnectionORM = new ConnectionORM();
                                $q = $ConnectionORM->getConnect()->procesos()->insert($array);//insert a tabla de usuarios
                                $values['id_proc'] = $ConnectionORM->getConnect()->procesos()->insert_id();
                            endforeach;
                            //die;
                            //insert

            }
}