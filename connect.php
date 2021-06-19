<?php
$dsn = "mysql:host = localhost;dbname=profilemanager";
$user = "root";
$psw = "";

try{
    $dbh = new PDO($dsn, $user, $psw, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);          
}
catch(PDOException $ex){
    echo $ex->GetMessage();
}
?>

