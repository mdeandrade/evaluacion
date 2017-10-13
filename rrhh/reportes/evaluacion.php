<?php
ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require_once("../dompdf/dompdf_config.inc.php");

	function crearPDF($archivo='',$contenido='',$body=false,$estilo='',$modo=false,$papel_1='a4',$papel_2='portrait')
	{
	    if( $body!=true and $body!=false ) $body=false;
	    if( $modo!=true and $modo!=false ) $modo=false;

	    if( $body == true )
	    {
	        $contenido='
	        <!doctype html>
	        <html>
	        <head>
	            <link rel="stylesheet" href="'.$estilo.'" type="text/css" />
	        </head>
	        <body>'
	            .$contenido.
	        '</body>
	        </html>';
	    }

	    if( $contenido!='' )
	    {
	        //Añadimos la extensión del archivo. Si está vacío el nombre lo creamos
	        $archivo!='' ? $archivo .='.pdf' : $archivo = crearNombre(10);

	        //Las opciones del papel del PDF. Si no existen se asignan las siguientes:[*]
	        if( $papel_1=='' ) $papel_1='a4';
	        if( $papel_2=='' ) $papel_2='portrait';

	        $dompdf =  new DOMPDF();
	        $dompdf -> set_paper($papel_1,$papel_2);
	        $dompdf -> load_html(utf8_encode($contenido));
	        ini_set("memory_limit","128M"); //opcional
	        $dompdf -> render();

	        //Creamos el pdf
	        if($modo==false)
	            $dompdf->stream($archivo);

	        //Lo guardamos en un directorio y lo mostramos
	        if($modo==true)
	            if( file_put_contents($archivo, $dompdf->output()) ) header('Location: '.$archivo);
	    }
	}

	function crearNombre($length)
	{
	    if( ! isset($length) or ! is_numeric($length) ) $length=6;

	    $str  = "0123456789abcdefghijklmnopqrstuvwxyz";
	    $archivo = '';

	    for($i=1 ; $i<$length ; $i++)
	      $archivo .= $str{rand(0,strlen($str)-1)};

	    return $archivo.'.pdf';
	}


	include '../lib/ConnectionORM.class.php';
		$conexion = new Connex();
		$pgconn=$conexion->conectar();
	include_once("../lib/model/Evaluaciones.class.php");
		$cursoestudiantes = new estudiante();
		$con_cursoestudiantes = $cursoestudiantes->consultarestudiantes($pgconn);

				$codigoHTML='
				<table align="center" >
					<tr>
						<td>
							<img height="180" src="/logo.png" width="180" /></td>

							<h4 align="center">

								<b>Contraloría Metropolitana de Caracas</b> <br>
				            <h4>

					</tr>
				</table>
				<br />
				<br />
				<table border="1" class="bordes3 textocentrado">
					<thead>
						<tr>
							<th colspan="4" class="fondogris negrita blanco">
								Evaluación Del Desempeño
							</th>
							<tr>
							<td> Cedula	</td>
							<td> Primer Nombre	</td>
							<td> Segundo Nombre </td>
							<td> Primer Apellido	</td>
							<td> Segundo Apellido </td>
							</tr>


						</tr>
					</thead>
					';


						while ($columna = pg_fetch_array($index))
					{
						$ci_estudiante = $columna['ci_estudiante'];
						$prim_nombre_estudiante = $columna['prim_nombre_estudiante'];
						$seg_nombre_estudiante = $columna['seg_nombre_estudiante'];
						$prim_apellido_estudiante = $columna['prim_apellido_estudiante'];
						$seg_apellido_estudiante = $columna['seg_apellido_estudiante'];



						$codigoHTML.='
						<tr>

							<td>'.$ci_estudiante.'</td>

							<td>'.$prim_nombre_estudiante.'</td>

							<td>'.$seg_nombre_estudiante.'</td>

							<td>'.$prim_apellido_estudiante.'</td>

							<td>'.$seg_apellido_estudiante.'</td>

						</tr>';
					}

					$codigoHTML.='
					</tbody>
				</table>';
	crearPDF('evaluacion',$codigoHTML);
?>
