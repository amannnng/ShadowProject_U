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
			
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Saved')
    window.location.href='index.php';
    </SCRIPT>");

		//header('Location: index.php?msg1=Saved Successfully');
	}
	else
	{
		 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Already Exist')
    window.location.href='index.php';
    </SCRIPT>");
	}
			
}
}

?>