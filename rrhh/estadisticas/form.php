<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<?php
    $dataPoints = array(
            array("y" => 72.48, "legendText" => "Excepcional", "label" => "Excepcional"),
	array("y" => 10.39, "legendText" => "Sobre lo esperado", "label" => "Sobre lo esperado"),
	array("y" => 7.78, "legendText" => "Dentro de lo esperado", "label" => "Dentro de lo esperado"),
	array("y" => 7.14, "legendText" => "Por debajo de lo esperado", "label" => "Por debajo de lo esperado"),
	array("y" => 0.22, "legendText" => "Muy por debajo de lo esperado", "label" => "Muy por debajo de lo esperado"),
    );
?>
<script type="text/javascript">
    window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Estadísticas segun el rango"
		},
              
                exportEnabled: true,
                animationEnabled: true,
              
                theme: "theme2",
                indexLabel: "{label} {y}%",
                toolTipContent: "{legendText} {y}%",
		data: [
		{
			type: "pie",
                        showInLegend: true,
                        legendMarkerType: "circle",

			dataPoints:<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                               
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