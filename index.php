<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANDOBUUX</title>

    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./rainbow.css?v=<?php echo time(); ?>">
    <link rel="stylesheet/less" type="text/css" href="./illusion.less" />
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="js/func.js?v=<?php echo time(); ?>"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
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
                <div class="block">
                    <span class="label">Numero minore:</span>
                    <input type="number" id="min" name="min" placeholder="0" value="1">
                </div>
                <div class="block">
                    <span class="label">Numero maggiore:</span>
                    <input type="number" id="max" name="max" placeholder="100" value="24">
                </div>

                <button id="generate" onclick="random()">GENERA</button>

                <span id="result">0</span>
            </div>
        </div>
    </div>

</body>

</html>