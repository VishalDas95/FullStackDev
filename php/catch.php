<?php 

if (isset($_POST['submit'])) 
{	
	$name  = $_POST['name'];
	$lname = $_POST['lname'];

//	echo $name."<br>".$lname;

$connect = mysqli_connect("localhost", "root", "", "training");
$sql="INSERT INTO sdata (name, lname) VALUES ('$name', '$lname')";

if (mysqli_query($connect,$sql) === TRUE) {
  
    echo "yupii Ho gaya";
	} 
else {
    echo "Error aa gyi";
	}
}
 ?>