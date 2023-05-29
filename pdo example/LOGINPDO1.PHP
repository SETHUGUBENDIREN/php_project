<?php
$server="localhost";
$uname="root";
$pwd="";
$db="smile";
try
{
    $PNO=$_POST['PNO'];
    $PASS=$_POST['PASS'];
    $con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="insert into smile1 values(:PNO,:PASS)";
$stmt=$con->prepare($query);
if($stmt->execute([':$PNO'=>$PNO,':$PASS'=>$PASS]))
{
$id=$con->LastInsertId();
echo"the id:".$id."inserted successfully";
}
else
{
    echo"<script>alert(' not update successfully')</script>"; 
}
}
catch(PDOException $e)
{
    echo $e->getmessage();
}
?>
