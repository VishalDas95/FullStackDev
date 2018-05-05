<?php
$server ="localhost";
$username = "root";
$pass = "";
$db = "training";

$con = mysqli($server, $username, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "";
?> 