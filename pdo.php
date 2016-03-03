<?php

$sarver="localhost";
$username="root";
$pass="";



try{
    $connection= new PDO("mysql:host=$sarver",$username,$pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"eonnection ok";
}

catch(PDOException $e){ 
     echo"eonnection failled:".$e->getMessage();
}

?>