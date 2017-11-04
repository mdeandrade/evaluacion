<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<?php
     /* // $rangos = $lista_personas->Personas();
            $Resultados = new Evaluacion();
            $rango = $Evaluacion->getResultados($values);
    foreach ($rango as $Evaluacion) {
        echo $Evaluacion ["id_estadisticas"]."&nbsp;"
               . $Evaluacion["id_persona"]."<br>";
    }
            $Personas = new Rangos();
            $lista_personas = $Personas->getRangos($values);
    foreach ($lista_personas as $Personas) {
        //echo $Personas ["val_rango"]."&nbsp;"
        //        . $Personas["id_persona"]."<br>";
    }
    */
    $rangos = array(
	array("y" => 20.4 , "legendText" => "Excepcional", "label" => "Excepcional"),
	array("y" => 10.39, "legendText" => "Sobre lo esperado", "label" => "Sobre lo esperado"),
	array("y" => 7.78, "legendText" => "Dentro de lo esperado", "label" => "Dentro de lo esperado"),
	array("y" => 7.14, "legendText" => "Por debajo de lo esperado", "label" => "Por debajo de lo esperado"),
	array("y" => 1.22, "legendText" => "Muy por debajo de lo esperado", "label" => "Muy por debajo de lo esperado")
    );
?>

<script type="text/javascript">
   window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
                theme: "theme2",
                exportEnabled: true,
                animationEnabled: true,
                exportFileName: "Estadísticas",
                indexlabel:"rango",

		title:{
			text: "Estadísticas segun el rango"
		},
                
		data: [
		{
			 type: "pie",
                indexLabelFontFamily: "Garamond",
                indexLabelFontSize: 20,
                indexLabel: "{label} {y}%",
                startAngle: -20,
                showInLegend: true,
                toolTipContent: "{legendText} {y}% Funcionarios",
			dataPoints:<?php echo json_encode($rangos, JSON_NUMERIC_CHECK); ?>
		}
		]
	});
	chart.render();
}


	</script>
<body>
	<div id="chartContainer" style="height: 400px; width: 100%;"></div>
</body>
<br>

      <div class="col-sm-12 col-sm-12">
        <a class="btn btn-default" href="<?php echo full_url?>/rrhh/index.php?action=bienvenida">Regresar</a>
      </div> 
<?php include('../../view_footer_solicitud.php')?>