function random3Ei() {
    min = 1;
    max = 25;
    rand = Math.floor(Math.random() * 24) + 1;
    document.getElementById('result').src = "./images/" + rand + ".jpg";
    $.ajax({
        url: 'https://randobuux.altervista.org/update_db.php',
        type: 'post',
        data: 'id=' + rand,
        success: function (data) {
            data = data.replace('[', '');
            data = data.replace(']', '');
            javascript_array = data.split(",");
            chart.data.datasets[0].data[javascript_array[0]] = javascript_array[1];
            chart.update();
            console.log("ciao");
        },
        error: function () {
            alert('something went wrong, rating failed');
        }
    });
}

function random() {
    min = parseInt(document.getElementById('min').value);
    max = parseInt(document.getElementById('max').value) + 1;
    if (min < max) {
        rand = Math.floor(Math.random() * (max - min)) + min;
    } else {
        rand = "TRMò"
    }
    document.getElementById('result').textContent = rand;
}