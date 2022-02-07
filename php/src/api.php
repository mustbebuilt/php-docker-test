<?php
header('Content-Type: application/json; charset=utf-8');
include("conn.inc.php");
$query = "SELECT * FROM movies";
$result = mysqli_query($connection, $query);
$myArray = array();
while($row = mysqli_fetch_assoc($result)){
    $myArray[] = $row;
    }
echo json_encode($myArray);