<?php
 
 $db='sql12786990';
 $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

 // $con=new mysqli('localhost','root','','db');

 header('Content-Type: application/json');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{ 
    $a='';
    $b=array('0');
    if(isset($_GET['a'])){
        $a=$_GET['a'];
       }
}
if($a!=''){
 $sql="SELECT NAME, AMOUNT FROM aaa WHERE UID='$a'";
$result=mysqli_query($con,$sql);
//  echo 'success';
 $noofrows=mysqli_num_rows($result); 
if($noofrows==1){
    foreach ($result as $record){
        $aa=htmlspecialchars($record['NAME']);
        $ae=htmlspecialchars($record['AMOUNT']);}
echo json_encode(array($aa,$ae));}
else{echo json_encode($b);}
}
else{ echo json_encode($b);}
?>
