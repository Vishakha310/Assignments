<?php
	//connect to mongodb
	$m=new MongoClient("mongodb://localhost:27017");
	echo "Connected...";
	//select a database
	$db=$m->gkckdb;
	echo "selected";
?>