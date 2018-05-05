<?php 
include 'db.php';

$sql="SELECT first_name FROM student";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    //printf ("%s\n (%s)\n (%s)\n",$row[0],$row[1],$row[2]);
  //  echo $row[0]."<br>";
    }
}
?>