<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
try
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $address=$_POST['addr'];
    $con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="insert into ggg(id,name,city,addr)values(:id,:name,:city,:addr)";
$stmt=$con->prepare($query);
if($stmt->execute([':$id'=>$id,':$name'=>$name,':$city'=>$city,':$address'=>$address]))
{
$id=$con->LastInsertId();
echo"the id:".$id."inserted successgfully";
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