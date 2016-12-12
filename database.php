<?php
try{

	$db = new PDO("mysql:host=host;dbname=dbfishing;port=8889","root","root");
	var_dump($db);
	 
}
catch(Exception $e){
	echo var_dump($e->getMessage());
	exit;
}
?>
