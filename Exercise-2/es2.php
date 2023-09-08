<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercise 2</title>
    <link rel="stylesheet" href="../Exercise-2/style.css">
</head>
<body>
<form method="post">
    <label>
        <textarea name="query" placeholder="Write your SQL query here:"></textarea>
    </label><br/>
    <input type="submit" name="execute" value="Execute!">
</form>

<?php

use exercise1\databaseConnection;

if (isset($_POST['execute'])) {
    require_once '..\Exercise-1\databaseConnection.php';

    $database = databaseConnection::getInstance();
    $connection = $database->getConnectionDefault();

    $query = $_POST['query'];
    $result = $connection->query($query);

    if ($connection->errno) {
        echo "<pre>An error has occurred: " . $connection->error . "</pre>";
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
        } else {
            echo 'There is no data available';
        }
    }
}
?>
</body>
</html>