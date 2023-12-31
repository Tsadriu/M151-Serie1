<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercise 3 - Version 2</title>
    <link rel="stylesheet" href="../Exercise-3/style.css">
</head>
<body>
<form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" maxlength="50" required><br>

    <label for="lastName">Last name:</label><br>
    <input type="text" id="lastName" name="lastName" maxlength="50" required><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" maxlength="100"><br>

    <label for="zipCode">ZIP code:</label><br>
    <input type="number" id="zipCode" name="zipCode" maxlength="4" min="0" max="9999" required><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" maxlength="35" required><br>

    <label for="nation">Nation:</label><br>
    <input type="text" id="nation" name="nation" maxlength="50" required><br>

    <label for="phoneNumber">Phone number:</label><br>
    <input type="text" id="phoneNumber" name="phoneNumber"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" maxlength="50" required><br>

    <label for="observations">Observations:</label><br>
    <input type="text" id="observations" name="observations"><br>

    <label for="sex">Sex:</label><br>
    <label for="sexMale"><input type="radio" id="sexMale" name="sex" value="0" required>Male</label>
    <label for="sexFemale"><input type="radio" id="sexFemale" name="sex" value="1" required>Female</label>

    <label for="hobby">Hobby:</label><br>
    <input type="text" id="hobby" name="hobby"><br><br>

    <input type="submit" name="saveData" value="Save data!">
</form>

<?php

use exercise1\databaseConnection;

if (isset($_POST['saveData'])) {
    require_once '../Exercise-1/databaseConnection.php';
    require_once 'persona.php';

    $database = databaseConnection::getInstance();
    $connection = $database->getConnectionDefault();

    $persona = new persona($_POST);
    $query = $persona->getQuery();

    if ($connection->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
?>
</body>
</html>