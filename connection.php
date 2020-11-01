<?php
$conn = null;

$conn = new mysqli('localhost','epiz_27099405','6CrHURXw3UzBBC','epiz_27099405_onida');

if($conn->connect_error)
{
    die('error in connecting database' . $connect->connect_eroor);
}

?>