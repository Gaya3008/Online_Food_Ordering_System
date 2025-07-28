<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from foods where F_ID='$id'");
if($n==1)
{
	echo"<script>window.location='viewfood.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewfood.php';</script>";
}

?>