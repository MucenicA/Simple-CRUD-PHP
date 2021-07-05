<?php

require_once 'dbconfig.php';
//stabilim conexiunea
try{
    $conn = new PDO("mysql:host=$host; 
    dbname=$dbname", $username, $password);
    
    echo "Connected to $dbname at $host successfully.";
  
} catch(PDOException $pe){
    die("Could not connect to the database $dbname:".
    $pe->getMessage());
}