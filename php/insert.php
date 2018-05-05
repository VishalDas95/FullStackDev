<?php

$con = mysqli_connect("localhost", "root", "", "training");
$roll = 17;
$name = "ajankya2";
$lname = "knight2";

$sql="INSERT INTO student (roll_no, first_name, last_name) VALUES ('$roll', '$name', '$lname')";



if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


?> 