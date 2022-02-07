<?php
include("conn.inc.php");
$query = 'SELECT * FROM movies';
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film List Query</title>
</head>
<body>
    <h1>Film List</h1>
    <ul>
<?php while($row = mysqli_fetch_array($result)){
echo "<li>{$row['filmName']}</li>";
}
?>
</ul>
</body>
</html>

