<?php
$server="localhost";
$name="root";
$pwd="";
$db="vinoth";
$con=mysqli_connect($server,$name,$pwd,$db)or die ("db not connected");
$email=$_POST['email'];
$pass=$_POST['password'];
$query="insert into vino values('$email','$pass')";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('data saved');
    window.location.href='log111.php';</script>";
}
else  
{
    echo"<script>alert('data not saved');
    window.location.href='logfront.php';</script>"; 

}
?>