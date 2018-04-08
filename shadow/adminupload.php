<?php
	// This file demonstrates file upload to an S3 bucket. This is for using file upload via a
	// file compared to just having the link. If you are doing it via link, refer to this:
	// https://gist.github.com/keithweaver/08c1ab13b0cc47d0b8528f4bc318b49a
	//
	// You must setup your bucket to have the proper permissions. To learn how to do this
	// refer to:
	// https://github.com/keithweaver/python-aws-s3
	// https://www.youtube.com/watch?v=v33Kl-Kx30o
	
	// I will be using composer to install the needed AWS packages.
	// The PHP SDK:
	// https://github.com/aws/aws-sdk-php
	// https://packagist.org/packages/aws/aws-sdk-php 
	//
	// Run:$ composer require aws/aws-sdk-php
	require 'vendor/autoload.php';
	
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	// AWS Info
	$awsinfo = include('../../config.php');
	$bucketName = $awsinfo['bucketName'];
	$IAM_KEY = $awsinfo['IAM_KEY'];
	$IAM_SECRET = $awsinfo['IAM_SECRET'];
	// Connect to AWS
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
				),
				'version' => 'latest',
				'region'  => 'us-east-2'
			)
		);
	} catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("Error: " . $e->getMessage());
	}
	// For this, I would generate a unqiue random string for the key name. But you can do whatever.
	$keyName = 'Promotions/' . basename($_FILES["fileToUpload"]['name']);
	$pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;
	// Add it to S3
	try {
		// Uploaded:
		$file = $_FILES["fileToUpload"]['tmp_name'];
		$s3->putObject(
			array(
				'Bucket'=>$bucketName,
				'Key' =>  $keyName,
				'SourceFile' => $file,
				'StorageClass' => 'REDUCED_REDUNDANCY'
			)
		);
	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}
	//header('Location: adminportal.php');
	// Now that you have it working, I recommend adding some checks on the files.
	// Example: Max size, allowed file types, etc.

// connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->dealhunter;
   $collection = $db->coupons;
echo $pathInS3;
if(!empty($_POST['imgurl']) && !empty($_POST['brand']) && !empty($_POST['product']) && !empty($_POST['category']) && !empty($_POST['description']) && !empty($_POST['pricebefore']) && !empty($_POST['priceafter']) && !empty($_POST['offerexp']) && !empty($_POST['storelocation']))
 { 
   $brand = $_POST['brand'];
   $product = $_POST['product'];
   $category = $_POST['category'];
   $description = $_POST['description'];
   $pricebefore = $_POST['pricebefore'];
   $priceafter = $_POST['priceafter'];
   $offerexp = $_POST['offerexp'];
   $storelocation = $_POST['storelocation'];
	  echo $brand; 
	  echo '1';
	$x=true;
	$row=$collection->find();
	foreach($row as $res)
	{
		if($res['storelocation']==$storelocation && $res['brand']==$brand && $res['product']==$product)
		$x=false;
	}
	if($x)
	{
		 $query = array("brand"=>"$brand","product"=>"$product","category"=>"$category","description"=>"$description","pricebefore"=>"$pricebefore","priceafter"=>"$priceafter","offerexp"=>"$offerexp","storelocation"=>"$storelocation");
		 $collection->insert($query);
		 echo'insert success';			
		 //header('Location: index.php');
		
	}
	else
	{
		echo"Adv already exist";		
	}
 }
else
{
	echo"Enter All * Parameters";
}

?>  
