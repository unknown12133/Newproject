<?php
    session_start();
     $con=new mysqli('localhost','root','','db');
    //$con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
   $a='';
   $b='';
   $c='';
   $d='';
   $e='';
   $f='';
   if(isset($_GET['a'])){
    $sa=$_GET['a'];
    $sumb = "SELECT * FROM aaa WHERE SNO='$sa'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);
   }
    else{
            header("location:admin.php");
        }
   if(isset($_POST['submit'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_POST['f'];
    $sql1="UPDATE aaa SET NAME='$c',FATHER_NAME='$d',MOBILE_NO='$b',PASSWORD='$f' WHERE SNO='$sa'";
    $resul=mysqli_query($con,$sql1);
    if($resul){
    header("location:admin.php?a=admin&b=admin%401&submit=");
  }  
}
   
    
    //echo $noofrows;
 if($noofrows==1){
            foreach ($result as $recor){
        $aa=htmlspecialchars($recor['UID']);
        $ad=htmlspecialchars($recor['MOBILE_NO']);
        $ac=htmlspecialchars($recor['FATHER_NAME']);
        $ab=htmlspecialchars($recor['NAME']);
        $ae=htmlspecialchars($recor['AMOUNT']);
        $af=htmlspecialchars($recor['PASSWORD']);
    }}
     
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form class="main" method="post">
            
        <div class="login">
            <h3 class="head">Register</h3>
            <label for="" class="label ">user id</label><br>
            <input type="text" class="user name" name="a" id="" required value="<?php echo $aa ?>" readonly=""><br>
            <label for="" class="label ">name</label><br> 
            <input type="text" class="user name" name="c" id="" required value="<?php echo $ab ?>"><br>
            <label for="" class="label ">father name</label><br> 
            <input type="text" class="user name" name="d" id="" required value="<?php echo $ac ?>"><br>
            <label for="" class="label ">mobile no</label><br> 
            <input type="text" class="user name" name="b" id="" required value="<?php echo $ad ?>" maxlength="10" minlength="10"><br>
            <label for="" class="label ">amount</label><br> 
            <input type="text" class="user name" name="e" id="" required value="<?php echo $ae ?>" readonly=""><br>
            <label for="" class="label ">password</label><br>
            <input type="password" class="user password" name="f" id="" required value="<?php echo $af ?>"><br>
           <button class="btn" name="submit">subimt</button>
            <p class="para" style="font-size: 0.9rem;">If any problem during registration <a href="" class="contact us">contact us.</a></p>
        </div></form>
    <script> 
          setTimeout(function() {
              document.querySelector('.a').remove();
              }, 2300);

              if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
</body>


</html>