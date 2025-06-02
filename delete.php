<?php
  //include('connection.php');
$database='sql12782686';
$con=new mysqli('sql12.freesqldatabase.com',$database,'unknown@1',$database);
//header('Content-Type: application/json');
 // $con=new mysqli('localhost','root','','db');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{ 
    $a='';
    if(isset($_GET['a'])){
        $a=$_GET['a'];
       }
}
if($a!=''){
 $sql="DELETE FROM aaa WHERE SNO='$a'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:admin.php?a=admin&b=admin%401&submit=");
}
}
