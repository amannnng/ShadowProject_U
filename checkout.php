<?php
session_start();
if(!isset($_SESSION["name"]))
{
	header('Location: userlogin.php');
}
else
{
// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->userinfo;
$username = $_SESSION["name"];
$productid = $_GET["$id"];  
echo $username;
echo $productid;
			$query = array("username"=>"$username","productid"=>"$product");
			$collection->insert($query);			
			header('Location: index.php');
		
 }

?>