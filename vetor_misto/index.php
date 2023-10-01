<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor Misto</title>
    <?php 
        $lucro = [
            "jan" => 25000,
            2 => 60000,
            3 => 45000,
            "abr" => 80000,
            5 => 65000,
            6 => 50000,
        ]
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Mês');
            data.addColumn('number', 'Lucro');
            data.addRows([
                <?php
                    foreach($lucro as $mes => $valor)
                        echo("['$mes', $valor],");
                ?>
            ]);
            var options = {'title':'Qual o lucro do mês?', 'width':600, 'height':450};
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <h1>Vetor Misto usando google charts</h1>
    <div id="chart_div"></div>
</body>
</html>