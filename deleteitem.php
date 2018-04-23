       
<?php
// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;
	$id=$_GET["id"];
	//session_start();
	//$username=$_SESSION["name"];
	$row=$collection->find(array("_id"=>new MongoId($id)));
	
	
	$collection->remove(array("_id"=>new MongoId($id)));
		
echo'<script language="javascript" type="text/javascript">alert("Coupon Has Been Deleted Successfully.");</script>';
	header("location:useraccount.php");
?>
      




