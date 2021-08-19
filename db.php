<?php
$dsn = "mysql:dbname=students"; 
$username = "root"; 
$password = ""; 
try{
$conn = new PDO( $dsn, $username, $password );  
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $pd){
echo $pd->getMessage();
}
?>