<?php 
session_start();
 ?>
 <?php 
$session["username"]='hello';
$session["password"]="1234";
print_r($session['username']);
print_r($session['password']);
  ?>