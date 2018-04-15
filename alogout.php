<?php
if(isset($_SESSION["name"]))
{
echo 'sessiondest';
session_destroy();
echo '555';
header('Location: adminlogin.php');
}
?>