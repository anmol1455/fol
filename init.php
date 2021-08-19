<?php
require_once("db.php");
try{
$sql="create Table record(id smallint  unsigned not null AUTO_INCREMENT PRIMARY KEY, name VARCHAR(265) NOT NULL,email VARCHAR(265) NOT NULL,department VARCHAR(265) NOT NULL,position varchar(255) NOT NULL)";
$conn->exec($sql);
echo "TABLE CREATED";
}
catch(PDOException $pd){
echo "Error Creating Table: " . $pd->getMessage();
}
$conn=null;//close the database connection
?>