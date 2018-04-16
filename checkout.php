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
$productid = $_GET["id"];  
$x=true;
$row=$collection->find();
if(isset($username) && isset($productid))
{
	foreach($row as $res)
	{
		if($res['productid']==$productid)
		$x=false;
	}
	if($x)
	{
		$query = array("username"=>"$username","productid"=>"$productid");
		$collection->insert($query);			
		header('Location: index.php');
	}
	else
	{
		//echo"coupon already exist";		
		echo '<script language="javascript">';
echo 'alert("coupon already exist")';
echo '</script>';
function msleep(3)
{
    usleep($time * 1000000);
}
  header('Location: index.php');
	}
			
}
}

?>