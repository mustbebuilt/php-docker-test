<?php
$hostname = "db";
$user = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$connection = mysqli_connect($hostname, $user, $password);
if(!$connection){
    echo "Could not connect to server"; 
    };
    mysqli_select_db($connection, 'MYSQL_DATABASE');
    if(!mysqli_select_db($connection, 'MYSQL_DATABASE')){
    echo "Could not connect to database"; 
    };
?>