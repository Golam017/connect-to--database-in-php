<?php

$sarver="localhost";
$username="root";
$pass="";


$connection= new mysqli($sarver,$username,$pass);

if($connection->connect_error){

    die("not connecr your database:".$connection->connect_error);
    

}else{
    
    echo "connect your database";
}





?>