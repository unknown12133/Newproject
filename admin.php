<?php

$db='sql12782686';
$con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

// $con=new mysqli('localhost','root','','db');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{
     $a='';
     $b='';
     $fail='';
     $ss=0;
     if(isset($_GET['a'])){
         $a=$_GET['a'];}
    if(isset($_GET['b'])){
     $b=$_GET['b'];
    $fail='invalid credentials';
    $failno='fail'; 
    }
    if(isset($_GET['submit'])){
         $c=$_GET['submit'];}
    $sql="SELECT * FROM aaa";
    $resul = $con-> query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="stylefor table.css">
</head>
<body style="background: linear-gradient(to right, #b2c1d5, #d7dee7);">
  <?php
   if($a!='admin' or $b!='admin@1'){?>
<form class="main">
    <span class="<?php echo $failno ?>"><?php echo $fail;?></span>
        <div class="login">
            <h3 class="head cap">Admin</h3>
            <label for="" class="label ">user name</label><br>
            <input type="text" class="user name" name="a" id="" requied><br>
            <label for="" class="label b">password</label><br>
            <input type="password" class="user password" name="b" id="" required><br>
           <button class="btn" name="submit">subimt</button>
            <p class="para">If any problem during login <a href="" class="contact us">contact us.</a></p>
        </div></form>
    <?php } 
    if($a=='admin' and $b=='admin@1'){?>
    
    <div id="b">
        <h2 class="jj">user data:</h2><br>
        <div>click here to <a href="registration.php">register</a></div><br>
        <div class="gg">
        <div class="dd" >

            <table class="g" style="background-color:white;">
            <tr>
                    <th class="tt">S.NO</th>
                    <th class="tt">UID</th>
                    <th class="tt">NAME</th>
                    <th class="tt">FATHER NAME</th>
                    <th class="tt">MOBILE NO</th>
                    <th class="tt">AMOUNT</th>
                    <th class="tt">DATE</th>
                    <th class="tt">OPERATION</th>
                </tr>
               <?php foreach ($resul as $recor){++$ss;?>
                <tr>
                     <td class="t"> <?php echo $ss; ?> </td>
                     <td class="t"> <?php echo htmlspecialchars($recor['UID']); ?> </td>
                    <td class="t"> <?php echo htmlspecialchars($recor['NAME']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['FATHER_NAME']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['MOBILE_NO']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['AMOUNT']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['DATE']); ?></td>
<td class="t"><button class="n"><a href="<?php if($c==1){ echo'regi.php?a='; echo htmlspecialchars($recor['SNO']);} ?>">UPDATE</a></button>
                     <button class="nn"><a href="<?php if($c==11){ echo'delete.php?a='; echo htmlspecialchars($recor['SNO']);} ?>"> DELETE</a></button></td>                   
                </tr>
               <?php } ?>
            </table>
        </div>
    </div></div>
    <?php } ?>
    
    
    
    <script> 
          setTimeout(function() {
              document.querySelector('.fail').remove();
              }, 2300);

              
        
    </script>

</body>
</html>
