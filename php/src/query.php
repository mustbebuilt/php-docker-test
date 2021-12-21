<?php
$host = 'db';
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
// database name
$mydatabase = 'MY_DATABASE';
// check the mysql connection status
$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM movies';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $movies[] = $data;
    }
}

foreach ($movies as $movie) {
    echo "<br>";
    echo $movie->filmName . " " . $movie->filmCertificate;
    echo "<br>";
}
?>