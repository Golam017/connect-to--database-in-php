<?php

$sarver="localhost";
$username="root";
$pass="";



try{
    $connection = new PDO("mysql:host=$sarver;dbname=my",$username,$pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //$sql="CREATE DATABASE my";
    //$sql2="CREATE TABLE CT(ID VARCHAR(4),NAME VARCHAR(4),EMAIL VARCHAR(4))";
    $sql3="INSERT INTO CT(ID, NAME, EMAIL) VALUES('#595050','RABBANI','GOLAM@GMAIL.COM')";
    $connection->exec($sql3);
    echo "database created ok";
}

catch(PDOException $e){ 
     echo $sql."<br>".$e->getMessage();
}

?>