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
			//$query = array("firstname"=>"$fname","lastname"=>"$lname","username"=>"$username","email"=>"$email","password"=>"$password","phone"=>"$phone");
			//$collection->insert($query);			
			header('Location: index.php');
		
 }
else
{
	echo"Enter All * Parameters";
}
}
}
?>