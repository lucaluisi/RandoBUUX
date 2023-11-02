<?php include 'functions.php'; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANDOBUUX</title>

    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./rainbow.css?v=<?php echo time(); ?>">
    <link rel="stylesheet/less" type="text/css" href="./illusion.less?v=<?php echo time(); ?>" />
    <script src="https://cdn.jsdelivr.net/npm/less"></script>

    <script language="JavaScript" type="text/javascript" src="/js/jquery-3.7.0.min.js"></script>
    <script src="./js/func.js?v=<?php echo time(); ?>"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <?php mysqli_close(connect_db()); ?>

    <h1 id="title" class="rainbow rainbow_text_animated">RANDOBUUX</h1>

    <div class="background"></div>

    <div class="page">
        <div class="illusion">
            <div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
                <div class="diamond"></div>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <button id="generate" onclick="random3Ei()">GENERA</button>
                <img id="result"></img>
            </div>
        </div>

        <a href="#myChart" class="stats-link" id="down">STATISTICHE</a>
    </div>

    <div class="page">
        <a href="#" class="stats-link" id="up">&#8963;</a>
        <div id="chart">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        <?php
        mysqli_close(connect_db());
        $js_array = json_encode($GLOBALS['array']);
        echo "var javascript_array = $js_array;\n";
        ?>

        chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Annese', 'Benedetti', 'Bianco', 'Bux', 'Capobianco', 'Caputo', 'Comes', 'Conforti', 'D\'Ecclesiis', 'Dalmato', 'Giannuzzi', 'Lasaracina', 'Laterza', 'Laudadio', 'Lippolis', 'Luisi', 'Magistro', 'Martins', 'Miccolis', 'Monopoli', 'Palasciano', 'Palazzo', 'Sabatelli', 'Simone'],
                datasets: [{
                    data: javascript_array,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>