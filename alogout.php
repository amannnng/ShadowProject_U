<?php
if(isset($_SESSION["name"]))
{
echo ''sessiondest;
session_destroy();
header('Location: adminlogin.php');
}
?>