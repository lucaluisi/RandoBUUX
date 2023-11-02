<?php
$GLOBALS['array'];

function connect_db()
{
    $con = mysqli_connect('localhost', 'randobuux', 'a', 'my_randobuux');
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $sql = "SELECT `value` FROM `3ei`";
    $result = $con->query($sql);
    $array = [];
    while ($row = mysqli_fetch_array($result)) {
        $array[] = $row['value'];
    }
    $GLOBALS['array'] = $array;
    return $con;
}
?>