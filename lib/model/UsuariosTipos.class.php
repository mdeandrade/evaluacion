<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perfiles
 *
 * @author LENOVO
 */
class Perfiles {
    <?php

	$usuario = $_POST['usuario'];
	$clave 	 = $_POST['clave'];

   
	include_once('../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();


		include_once('../modelo/mod_usuario.php');
		$usuarios = new usuarios();
		$columna = $usuarios->autenticar($usuario,$clave,$pgconn);



<script type="text/javascript" >
		alert("Usuario inexistente, intente nuevamente");
		parent.location = "../vista/vis_clave.html"
</script>


}
