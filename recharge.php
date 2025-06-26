<?php
    session_start();
   
 $db='sql12786990';
 $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);

//$con=new mysqli('localhost','root','','db');

    $a='';
    $b='';
    $c='';
    $fail=''; 
    $failno='';
    $cross='none';
    if(isset($_POST['submit'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

    $sumb = "SELECT UID FROM aaa WHERE UID='$a'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);
    // echo $noofrows;
    if($noofrows==1){
        header("Location:upi://pay?pa=saibattu9618@axl&pn=sai%20kumar&mc=0000&mode=02&purpose=00&am='$c'");
        //   echo 'affffffff';
    }
    else{
        $fail='User id not exist ';
        $failno='fail';
        $cross='cross';
        
        //  echo 'fail';
    }}
?>
<html>
    <head>
        <title>recharge</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="main" method="POST">
            <span class="<?php echo $failno ?>"><?php echo $fail;?><a class="<?php $cross; ?>" onclick="dis()">&#x274c;</a></span>
            
        <div class="login">
            
            
            <h3 class="head">Recharge</h3>
            <label for="" class="label">User id</label><br>
            <input type="text" class="user name" name="a" id="" requied><br>
            <label for="" class="label">Mobile no</label><br>
            <input type="text" class="user name" name="b" id="" requied maxlength="10" minlength="10"><br>

            <label for="" class="label b">Amount</label><br>
            <input type="text" class="user password" name="c" id="" required ><br>

           <button class="btn" name="submit">subimt</button>
            <p class="para">If any problem during recharge <a href="" class="contact us">contact us.</a></p>
        </div></form>
        <script> 
           setTimeout(function() {
               document.querySelector('.fail').remove();
               }, 2300)//
               if(window.history.replaceState){
             window.history.replaceState(null,null,window.location.href);

             function dis(){
            document.querySelector(".cross").style.display="none";
            document.querySelector(".fail").style.display="none";
           
         }
         }
    </script>
    <script>

    </script>
       
    </body>
</html>
