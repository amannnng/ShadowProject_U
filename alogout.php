<?php
if(isset($_SESSION["name"]))
{
session_destroy();
header('Location: adminlogin.php');
}
?>