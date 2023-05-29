<?php
$server="localhost";
$uname="root";
$pwd="";
$db="vinoth";
$con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$query="insert into emp5 values($id,'$name','$password','$conpassword')";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('data saved');
    window.location.href='login.php';
    </script>";
}
else
{
    echo"<script>alert('data not saved');
    window.location.href='login.php';
    </script>";
}
?>