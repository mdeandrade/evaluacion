<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

<script type="text/javascript">
    
    
window.onload = function () {
     $(document).ready(function () {

            $.getJSON("index.php", function (estadisticas) {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
        exportEnabled: true,
		title:{
			text: "Estadísticas segun el rango"
		},
		data: [
		{
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			//yValueFormatString: "#0.#,,. Million",
			legendText: "{indexLabel}",
			dataPoints: "{q}"
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