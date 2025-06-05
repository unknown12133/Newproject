<?php
    session_start();

 $db='sql12782686';
 $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

//$con=new mysqli('localhost','root','','db');

    $a='';
    $b='';
    $c='';
    $d='';
    $e='';
    $f='';
    $ok='';
    $response='';
    $failno='';
    if(isset($_POST['submit'])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $d=$_POST['d'];
            $e=$_POST['e'];
            $f=$_POST['f'];

    $sumb = "SELECT UID FROM aaa WHERE UID='$a'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);
    //echo $noofrows;
        if($noofrows==0){
        $sql="INSERT INTO aaa (`UID`, `MOBILE_NO`, `NAME`, `FATHER_NAME`, `AMOUNT`, `PASSWORD`,`DATE`,`TIME`)VALUES('$a', '$b', '$c', '$d', '$e', '$f',CURRENT_DATE(),CURRENT_TIME())";
        $result=mysqli_query($con,$sql);
        $response='registration success';
        $failno='pass';
    }
        else{
            $response='UID already exist';
            $failno='fail';
        }
    }

?>

<html>
    <head>
        <title>admin</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="main" method="post">
            <span class="<?php echo $failno; ?>"><?php echo $response;?></span>
        <div class="login">
            <h3 class="head">Register</h3>
            <label for="" class="label ">user id</label><br>
            <input type="text" class="user name" name="a" id="" requied><br>
            <label for="" class="label ">name</label><br>
            <input type="text" class="user name" name="c" id="" requied><br>
            <label for="" class="label ">father name</label><br>
            <input type="text" class="user name" name="d" id="" requied><br>
            <label for="" class="label ">mobile no</label><br>
            <input type="text" class="user name" name="b" id="" requied maxlength="10" minlength="10"><br>
            <label for="" class="label ">amount</label><br>
            <input type="text" class="user name" name="e" id="" requied><br>
            <label for="" class="label ">password</label><br>
            <input type="password" class="user password" name="f" id="" required><br>
           <button class="btn" name="submit">subimt</button>
            <p class="para" style="font-size: 0.9rem;">If any problem during registration <a href="" class="contact us">contact us.</a></p>
        </div></form>
        <script> 
           setTimeout(function() {
               document.querySelector('.fail').remove();
               }, 2300)
           setTimeout(function() {
               document.querySelector('.pass').remove();
               }, 2300)
               if(window.history.replaceState){
             window.history.replaceState(null,null,window.location.href);
         }
    </script>
    </body>
</html>