	<?php
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->users;



if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);

	$x=false;
	$row=$collection->find(array("username"=>$username));
	foreach($row as $res)
	{
		if($res['password']==$password)
		$x=true;
	}
	if($x)
	{
		if($collection->find(array("username"=>$username,"password"=>$password)))
		{
			session_start();
			$_SESSION['name']=$username;
			header('Location: index.php');
		}
		
	}
	else
	{
header('Location: userlogin.php?msg=Inavalid Credentials. Login Failed.');
	}
}
else
{
echo"Enter All * Parameters";
}
?>