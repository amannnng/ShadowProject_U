  
<?php
// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->userinfo;
	$id=$_GET["id"];
	session_start();
	$username=$_SESSION["name"];
	$row=$collection->find(array("productid"=>new MongoId($id)));
	
	
	$collection->remove(array("_id"=>new MongoId($id)));
		
//	echo'<script language="javascript" type="text/javascript">alert("Your Account Has Been Deleted Successfully.");</script>';
//	header("location:useraccount.php");
?>
      