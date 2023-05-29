<?php
$server="localhost";
$uname="root";
$pwd="";
$db="vinoth";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
$id=$_POST['id'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$query="update emp5 set lastname='$lastname' where id=$id";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('update successfully')</script>";
} 
else
{
	echo"<script>alert('update not success')</script>";
}
?>