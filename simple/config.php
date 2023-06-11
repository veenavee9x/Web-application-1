<?php

$server_name="localhost";
$user_name="root";
$password="";
$database="db";

$connection = new mysqli($server_name , $user_name , $password , $database);

if($connection -> connect_error)

{
    die("error");
}

else
{
    echo 'Connection ok';
}


 
?>