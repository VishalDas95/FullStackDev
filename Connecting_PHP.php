<?php
$con=mysqli_connect("localhost","root","","training");
$roll=17;
$name="ajankya";
$lname="rahane";
$sql="insert into student (roll_no, first_name, last_name) values ('$roll','$name','$lname')";
if($con->query($sql)===true){
	echo "New record created succesfully";
}else{
	echo "Error: ".$sql."<br>".$con->error;
}
?>