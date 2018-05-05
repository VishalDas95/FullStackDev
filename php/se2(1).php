<?php
$con=mysqli_connect("localhost","root","","training");


$sql="SELECT * FROM student";

if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
  echo $row[0]." ".$row[1]." ".$row[2]."<br>";

    }
}

?> 