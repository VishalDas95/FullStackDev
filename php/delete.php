<?php
$con=mysqli_connect("localhost","root","","training");

$roll = 17;
$name = "ajankya2";
$lname = "knight2";

$sql="DELETE FROM student WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?> 