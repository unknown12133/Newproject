<?php
    session_start();
   $fail='';
   $failno='';
   $cross='none';
   $_SESSION['LOGIN'] = true;
    // if($_SESSION['a']!=''){
    //     $a=$_SESSION['a'];
    // }
     if(isset($_SESSION['a'])){
        $fail=$_SESSION['a'];
     $cross='cross';
    }  
    if(isset($_SESSION['fail'])){
        $failno=$_SESSION['fail'];
    } 
    if($failno==''){
        $failno='none';
    }  
    // echo $failno;

    

    
     
?>
<html>
    <head>
        <title>login here</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="stylesheet" href="stylee.css"> -->

    </head>
    <body>
        <!-- <div class="nav">
            <div class=" bar">
                <a href="#" class="menu options a">options</a>
                <a href="recharge.html" class="a menu options">services</a>
                <a href="#" class="menu options a">about</a>
                <a href="#" class="menu options a">contact us</a>
            </div>
        </div> -->
        <form class="main" method="GET" action="login1.php">
   <span class="<?php echo $failno ?>"><?php echo $fail;?><a class="<?php echo $cross; ?>" onclick="dis()">&#x274c;</a></span>
        <div class="login">
            <h3 class="head">Welcome Back</h3>
            <label for="" class="label ">user id</label><br>
            <input type="text" class="user name" name="a" id="" requied><br>
            <label for="" class="label b">password</label><br>
            <input type="password" class="user password" name="c" id="" required><br>
           <button class="btn" name="submit">log in</button>
            <p class="para">If any problem during login <a href="" class="contact us">contact us.</a></p>
        </div></form>

        <script> 
           setTimeout(function() {
               document.querySelector('.fail').remove();
               document.querySelector(".cross").remove();
               }, 3500)//
               if(window.history.replaceState){
             window.history.replaceState(null,null,window.location.href);

             function dis(){
            document.querySelector(".cross").style.display="none";
            document.querySelector(".fail").style.display="none";
           
         }
         }
    </script>
    </body>
</html>

<?php 
  
?>