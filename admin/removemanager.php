<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from manager where username='$username'");
if($n==1)
{
	echo"<script>window.location='viewmanager.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewmanager.php';</script>";
}

?>