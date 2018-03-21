<?php

require('config.php');

extract($_POST);

$sql = "INSERT into user (name,password,email,gender,comment) VALUES('" . $name . "','" . $password . "','" . $email . "','" . $gender . "','" . $comment . "')";

$success = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

echo "Thank You you've been added to the database ";

$conn->close();

?>