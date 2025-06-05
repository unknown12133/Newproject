<?php

 $db='sql12782686';
 $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

 //$con=new mysqli('localhost','root','','db');

// Set timeout duration (e.g., 300 seconds = 5 minutes)
$inactive = 6;

// Check if last activity time is set
if (isset($_SESSION['timeouta'])) {
    $session_life = time() - $_SESSION['timeouta'];
    if ($session_life > $inactive) {
        session_unset();     // remove session variables
        session_destroy();   // destroy session
        header("Location:difesdiejfiegflmfgf.rogfjdifsmeo43594tj4t5ibt5"); // redirect to logout or home
        exit();
    }
}

// Update last activity time
$_SESSION['timeouta'] = time();

$a='';
// $frad='';

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{
     
     }
     $b='';
     $fail='';
     $ss=0;
     $cross='none';
     $_SESSION['admin'] =true;
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

    if( $a!='' and $b!=''){
         $cross='cross';
    }

// if($a==''){
//  $frad = 'true';
//  echo 'hi';}
//  else{
//     $_SESSION['admin'] = false;

// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylefor table.css">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @media(max-width:400px){
        .user{
            /* margin-left:2px; */
             width:92%;
        }}
    </style>
</head>
<body style="background: linear-gradient(to right, #b2c1d5, #d7dee7);">
  <?php
   if($a!='admin' or $b!='admin@1'){
    ?>
<form class="main">
        <span class="<?php echo $failno ?>"><?php echo $fail;?><a class="<?php echo $cross; ?>" onclick="dis()">&#x274c;</a></span>

        <div class="login">
            <h3 class="head cap">Admin</h3>
            <label for="" class="label ">user id</label><br>
            <input style="" type="text" class="user name" name="a" id="" requied><br>
            <label for="" class="label b">password</label><br>
            <input type="password" class="user password" name="b" id="" required><br>
           <button class="btn">subimt</button>
            <p class="para">If any problem during login <a href="" class="contact us">contact us.</a></p>
        </div></form>
    <?php }
    // if($frad != 'true'){

    //     echo 'bye';
    // }
    if($a=='admin' and $b=='admin@1'){

        ?>
    
    <div id="b">
        <h2 class="jj">user data:</h2><br>
        <div class="reg_link">click here to <a href="registration.php">register</a>.</div><br>
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
<td class="t"><button class="n"><a href="<?php if($c==1){ echo'update.php?a='; echo htmlspecialchars($recor['SNO']);} ?>">UPDATE</a></button>
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
                document.querySelector('.cross').remove();
                }, 3500);

         function dis(){
            document.querySelector(".cross").style.display="none";
            document.querySelector(".fail").style.display="none";
           
         }     
        
              
    </script>

</body>
</html>