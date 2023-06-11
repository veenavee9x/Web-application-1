<?php

$server_name="localhost";
$user_name="root";
$password="";
$database="db";

$conn = mysqli_connect($server_name , $user_name , $password , $database);

if($conn)

{
    //echo 'Connection ok';
}
 
?>