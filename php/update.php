<?php
$con=mysqli_connect("localhost","root","","training");
// Check connection
$roll = 17;
$name = "123";
$lname = "def";

$sql="UPDATE student SET first_name='$name', last_name='$lname' WHERE roll_no=$roll";
 

if ($con->query($sql) === TRUE) {
    echo "Update successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?> 