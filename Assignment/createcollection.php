<?php
	$m=new MongoClient();
	 echo "connected...";
	 
	 $db=$m->gkckdb;
	 echo"selected...";
	 $colletion=$db->CreateCollection("mscit");
	 echo "colletion created...";
?>	

