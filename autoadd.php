<?php

$sql = "INSERT INTO person (name, surname, date_of_birth) VALUES ('Vardenis', 'Pavardenis', '2000-01-01')";

if ($connection->query($sql) === TRUE) {
echo "<br>2nd task: new record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();