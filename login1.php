<?php

    session_start();
     //$con=new mysqli('localhost','root','','db');

     $db='sql12786990';
     $con=new mysqli('sql12.freesqldatabase.com',$db,'unknown@1',$db);
 


// Set timeout duration (e.g., 300 seconds = 5 minutes)
$inactive = 60;

// Check if last activity time is set
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_unset();     // remove session variables
        session_destroy();   // destroy session
        header("Location:difesdiejfiegflmfgf.rogfjdifsmeo43594tj4t5ibt5"); // redirect to logout or home
        exit();
    }
}

// Update last activity time
$_SESSION['timeout'] = time();

       


        if($_SESSION['LOGIN'] != true){
            header("location:eoierkzelsh4854rt8fe4fjes9jp4t");
            session_unset();
        }
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);}
        $_SESSION['a']='';
         $_SESSION['fail']='';
        //else{
    if(isset($_GET['a'])){
       $a=$_GET['a'];}
    //    $b=$_GET['b'];
    if(isset($_GET['c'])){
       $c=$_GET['c'];}
    //    if($b==''){
    //     header("location:login.php");
    //     session_destroy();

       // }
        if($a!='' and $c!=''){
       $sumb = "SELECT * FROM aaa WHERE UID='$a'";
       $result = $con-> query($sumb);
       $noofrows=mysqli_num_rows($result);

        foreach ($result as $record){
         $aa=htmlspecialchars($record['UID']);
         $ab=htmlspecialchars($record['NAME']);
         $ac=htmlspecialchars($record['FATHER_NAME']);
         $ad=htmlspecialchars($record['MOBILE_NO']);
         $ae=htmlspecialchars($record['AMOUNT']);
         $af=htmlspecialchars($record['PASSWORD']);
        }
        

       if($noofrows==1){
     $_SESSION['a']=' password';

           $ff='qwer';
                if($af==$c or $ff==$c){ }
                else{ 
                    header("location:login.php");
                    $_SESSION['a']='wrong password';
                    $_SESSION['fail']='fail';
                    }
        }
         else{ 
             header("location:login.php");
            $_SESSION['a']='invalid uid';
            $_SESSION['fail']='fail';
            //session_destroy();
            }
      
        }
        else{
            header("location:login.php");
            session_destroy();
        }
    $sql="SELECT QUANTITY,AMOUNT,DATE,TIME FROM aa WHERE UID='$a'";
    $resul = $con-> query($sql);

$ss=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylefor table.css">
</head>
<body>
    <form action="" method="GET">
    <div class="a" id="a">
         <h2 class="ll">user details:</h2>
        <table class="c">
            <tr>
                <td class="td">UID</td>
                <td class="td" style="border-top:none; border-right:none;"><?php echo $aa ?></td>
            </tr>
            <tr>
                <td class="td">NAME</td>
                <td class="td"><?php echo $ab ?></td>
            </tr>
            <tr>
                <td class="td">FATHER NAME</td>
                <td class="td"><?php echo $ac ?></td>
            </tr>
            <tr>
                <td class="td">MOBILE NO</td>
                <td class="td"><?php echo $ad ?></td>
            </tr>
            <tr>
                <td class="td" style="border-bottom:none; border-left:none;">AMOUNT</td>
                <td class="td"><?php echo $ae ?></td>
            </tr>
        </table>
        <button type="button" onclick="openme()" class="d" name="submit2">history</button>

    </div ></form>
    <div id="b">
        <h2 class="jj">purchase history</h2><br>
        <div class="gg">
        <div class="dd" >
            <table class="g">
            <tr>
                    <th class="tt">S.NO</th>
                    <th class="tt">QUANTITY</th>
                    <th class="tt">PRICE</th>
                    <th class="tt">DATE</th>
                    <th class="tt">TIME</th>
                </tr>
               <?php foreach ($resul as $recor){++$ss;?>
                <tr>
                     <td class="t"> <?php echo $ss; ?> </td>
                    <td class="t"> <?php echo htmlspecialchars($recor['QUANTITY']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['AMOUNT']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['DATE']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['TIME']); ?></td>
                   
                </tr>
               <?php } ?>
            </table>
        </div>
    </div></div>
     <script>
        function openme(){
        x=document.getElementById("a").style.display="none";
        document.getElementById("b").style.display="block";
    }
     document.getElementById("b").style.display="none";
    </script> 

<script>
          
if(window.history.replaceState){
window.history.replaceState(null,null,window.location.href);
        }
    </script>
</body>
</html>
