<?php
require_once("db.php");
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select * from record where id=:id";
$st=$conn->prepare($sql);
$st->bindValue(":id",$id);
$res=$st->execute();

while($res = $st->fetchObject()){//loop through the returned rows
		echo "<p>";
		echo "<b>ID: </b>$res->id <br> <b> Names: </b> $res->name <br>  <b> Department: </b> $res->department <br> <b> Position </b>  $res->position <br> <b> Email: </b> $res->email <br>";
		echo"</p>";
	}
		
		
		
	}
	else{
		echo "<h2> Wrong Request </h2> ";
	}
	
	?>
	
	