<?php

$sarver="localhost";
$username="root";
$pass="";


$connect=mysqli_connect($sarver,$username,$pass);

if(!$connect){

    die("not connecr your database:".mysqli_connect_error());
    

}else{
    
    echo "connect your database";
}





?>