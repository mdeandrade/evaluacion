<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>

    <script src="../rrhh/estadisticas/chart.js/src/chart.js"></script>
    <script src="../rrhh/estadisticas/chart.js/samples/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>

    <div id="canvas-holder" style="width:50%">
        <canvas id="chart-area"></canvas>
    </div>
    <button id="randomizeData">Randomize Data</button>
    <button id="addData">Add Data</button>
    <button id="removeData">Remove Data</button>
    <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var chartColors = window.chartColors;
    var color = Chart.helpers.color;
    var config = {
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    color(chartColors.red).alpha(0.5).rgbString(),
                    color(chartColors.orange).alpha(0.5).rgbString(),
                    color(chartColors.yellow).alpha(0.5).rgbString(),
                    color(chartColors.green).alpha(0.5).rgbString(),
                    color(chartColors.blue).alpha(0.5).rgbString(),
                ],
                label: 'My dataset' // for legend
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'right',
            },
            title: {
                display: true,
                text: 'Chart.js Polar Area Chart'
            },
            scale: {
              ticks: {
                beginAtZero: true
              },
              reverse: false
            },
            animation: {
                animateRotate: false,
                animateScale: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area");
        window.myPolarArea = Chart.PolarArea(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(piece, i) {
            piece.data.forEach(function(value, j) {
                config.data.datasets[i].data[j] = randomScalingFactor();
            });
        });
        window.myPolarArea.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addData').addEventListener('click', function() {
        if (config.data.datasets.length > 0) {
            config.data.labels.push('data #' + config.data.labels.length);
            config.data.datasets.forEach(function(dataset) {
                var colorName = colorNames[config.data.labels.length % colorNames.length];
                dataset.backgroundColor.push(window.chartColors[colorName]);
                dataset.data.push(randomScalingFactor());
            });
            window.myPolarArea.update();
        }
    });
    document.getElementById('removeData').addEventListener('click', function() {
        config.data.labels.pop(); // remove the label first
        config.data.datasets.forEach(function(dataset) {
            dataset.backgroundColor.pop();
            dataset.data.pop();
        });
        window.myPolarArea.update();
    });
    </script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

      <div class="col-sm-12 col-sm-12">
        <a class="btn btn-default" href="<?php echo full_url?>/rrhh/index.php?action=bienvenida">Regresar</a>
      </div> 
<?php include('../../view_footer_solicitud.php')?>