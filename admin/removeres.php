<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from restaurant where id='$id'");
if($n==1)
{
	echo"<script>window.location='viewrestaurant.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewrestaurant.php';</script>";
}

?>