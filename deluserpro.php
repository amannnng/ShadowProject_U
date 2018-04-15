  
<?php
// connect to mongodb
   $m = new MongoClient();
   $db = $m->dealhunter;
   $collection = $db->userinfo;
	$id=$_GET["id"];
//	$row=$collection->find(array("productid"=>$id));
	$collection->remove("productid"=>$id);
		echo''
//	echo'<script language="javascript" type="text/javascript">alert("Your Account Has Been Deleted Successfully.");</script>';
//	header("location:useraccount.php");
?>
      