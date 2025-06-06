<?php

 $db='sql12782686';
 $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

//$con=new mysqli('localhost','root','','db');

 header('Content-Type: application/json');


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{  
        $a=''; 
        $b='';
        $c='';
        $quantity=0;
        $price='0';
   if(isset($_GET['a'])){
    $a=$_GET['a'];
   }
   if(isset($_GET['b'])){
       $b=$_GET['b'];
    }
}
if($a!='' and $b!=''){
    // echo '1';
    $sql="SELECT AMOUNT FROM aaa WHERE UID='$a'";
    $result=mysqli_query($con,$sql);
    $noofrows=mysqli_num_rows($result);
    foreach ($result as $record){
        $balance=htmlspecialchars($record['AMOUNT']);}
    if($noofrows==1){
    $sql1="SELECT PRICE FROM a";
    $result1=mysqli_query($con,$sql1);
    
    }
        $ab=$balance-$b;
        if($ab>=0){
        foreach ($result1 as $recor){
        $price=htmlspecialchars($recor['PRICE']);

        $quantity=$b/$price;
        $sql1="INSERT INTO aa(`UID`, `QUANTITY`, `AMOUNT`,`DATE`,`TIME`)VALUES('$a', '$quantity', '$b',CURRENT_DATE(),CURRENT_TIME())";
        $resul=mysqli_query($con,$sql1);
        $sql2="UPDATE aaa  SET AMOUNT='$ab' WHERE UID='$a'";
        $resu=mysqli_query($con,$sql2);
       
      
    }}}
    echo json_encode(array($price,$quantity));
    
