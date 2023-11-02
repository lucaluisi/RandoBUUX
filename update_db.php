<?php
include 'functions.php';

$random_id = intval($_POST['id']);

$connection = connect_db();

$sql = "SELECT `value` FROM `3ei` WHERE `id`='$random_id';";
$result = $connection->query($sql);
$array1 = [];
while ($row = mysqli_fetch_array($result)) {
    $array1[] = $row;
}

$new_value = intval($array1[0]['value'], 10) + 1;
$connection->query("UPDATE `3ei` SET `value` ='$new_value' WHERE `id` ='$random_id';");

mysqli_close($connection);

echo json_encode([$random_id - 1, $new_value]);
