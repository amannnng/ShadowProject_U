<?php
  $awsinfo = include('../../config.php');
	$bucketName = $awsinfo['bucketName'];
	$IAM_KEY = $awsinfo['IAM_KEY'];
	$IAM_SECRET = $awsinfo['IAM_SECRET'];
  require '/vendor/autoload.php';
  use Aws\S3\S3Client;
  use Aws\S3\Exception\S3Exception;
  // Get the access code
  $accessCode = $_GET['c'];
	//$accessCode = strtoupper($accessCode);
  $accessCode = trim($accessCode);
  $accessCode = addslashes($accessCode);
  $accessCode = htmlspecialchars($accessCode);
  $keyPath = $accessCode;
  
  try {
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
    //
    $result = $s3->getObject(array(
      'Bucket' => $BUCKET_NAME,
      'Key'    => $keyPath
    ));
    // Display it in the browser
    header("Content-Type: {$result['ContentType']}");
    header('Content-Disposition: filename="' . basename($keyPath) . '"');
    echo $result['Body'];
  } catch (Exception $e) {
    die("Error: " . $e->getMessage());
  }