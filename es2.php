<!DOCTYPE html>
<html lang="en">
<head>
    <title>Esercizio 2</title>
</head>
<body>
<form method="post">
    <label>
        <textarea name="query" placeholder="Write your SQL query here:"></textarea>
    </label><br/>
    <input type="submit" name="execute" value="Execute!">
</form>

<?php
if (isset($_POST['execute'])) {
    require_once 'databaseConnection.php';

    $database = databaseConnection::getInstance();
    $connection = $database->getConnection('localhost', 'test', 'KlW93Jm93*W/D(jw', 'm151');

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