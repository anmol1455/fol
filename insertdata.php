<?php
require_once("db.php");
try{
//begin the transaction
$conn->beginTransaction();
//our sql statements
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('John Jack','e@example.com','accounting','accountant')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Mary Daniel','e@example.com','accounting','accountant')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Peace Daniel','e@example.com','accounting','accountant')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Sean Micheal','e@example.com','accounting','accountant')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Olive Sarah','e@example.com','accounting','accountant')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Micheal pater','e@example.com','I.T','Web Developer')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Ayo Brooks','e@example.com','I.T','Senior Web And Mobile Developer')");
$conn->exec("INSERT INTO record(name,email,department,position)VALUES('Bran Judge','e@example.com','I.T','Senior Web And Mobile Developer')");
//we commit the transaction
$conn->commit();
echo "New Record created successfully";
}
catch(PDOException $e){
//roll back the transaction
$conn->rollback();
echo "An error occured:".$e->getMessage();
}
$conn=null;//close the database connection


?>