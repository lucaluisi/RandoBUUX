<?php include 'functions.php'; ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script language="JavaScript" type="text/javascript" src="/js/jquery-3.7.0.min.js"></script>
  <script src="./js/func.js"></script>
</head>

<body>

  <?php mysqli_close(connect_db()); ?>

  <div>
    <canvas id="myChart"></canvas>
    <button onclick="add_value()">ciao</button>
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