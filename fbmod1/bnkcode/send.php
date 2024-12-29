<?php 

$eam=$_COOKIE['email1'];
$con=mysqli_connect("localhost","root","","bankreg");
$passwo=mysqli_query($con,"select * from breg where email ='$eam'");
$pa=mysqli_fetch_assoc($passwo);
$nm=ucfirst($pa['name']);
$sn=ucfirst($pa['surname']);
$acno=$pa['accno'];
$bal=$pa['balance']; //balance  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="snd.css">
</head>
<body>
<header>
    <div class="hcon" >
    <div class="clogo">
        <!-- this div is used to show company logo  -->
         <img src="img/logo.png" alt="" height="90px">
</div>
<div class="ud" >
    <!--  this div is for showing user details  -->
    <span class="ws" >Welcome <?php echo $nm; echo $sn;  ?> </span>
    <span class="ai" >Account No:- <?php echo $acno ?></span>
</div>  
</header><br>
   <h1>Send Money</h1>
   <form method="POST" action="send.php">
<div class="form">
    <div class="fromele">
    <div class="emal">
    <!-- input box for email  -->
   <label for="">Email :- </label> <input type="email" name="emli" placeholder="enter your email " required autofocus>
    </div>
    <div class="pasw">
    <!-- input box for senders password  -->
   <label for="">Password :- </label> <input type="text" name="pass" placeholder="enter your password " required autofocus>
    </div>
    <div class="dt">
       <label for="">Date :- </label> <input type="Date" name="date" placeholder="enter your password" required>
    </div>
    <div class="remail">
    <!-- input box for reciver email  -->
   <label for="">Reciver :- </label> <input type="email" name="remli" placeholder="Enter Recivers Email " required autofocus>
    </div>
    <div class="amount">
     <label for="">Amount :- </label>   <input type="text" name="amt"placeholder="enter the amount " required>
    </div>
    <div class="subm" >
        <input type="submit" value="submit" name="snd"  class="snd" >
    </div>
    </div>
</div>
</form>
<?php 
    if(array_key_exists('snd', $_POST)){
        $user_pass=$pa['password'];

        $user_enter_pass=$_POST['pass'];
        $user_email=$eam;
        $user_enter_emails=$_POST['emli'];
        $user_enter_emailr=$_POST['remli'];


        if($user_pass==$user_enter_pass){
            if($user_email==$user_enter_emails){
                if($user_enter_emails!=$user_enter_emailr){
                    $sender_bal=$bal-$_POST['amt'];
                    mysqli_query($con,"update breg set balance='$sender_bal'where email='$user_email' ");
                    $get_details=mysqli_query($con,"select * from breg where email='$user_enter_emailr'");
                    $reciver_details=mysqli_fetch_assoc($get_details);
                    $rb=$reciver_details['balance'];
                    $newbal=$rb+$_POST['amt'];
                    mysqli_query($con,"update breg set balance='$newbal'where email='$user_enter_emailr' ");
                    echo "<script> alert('Money sent sucessfully ');</script>";
                    mysqli_query($con,"insert into trans values('$_POST[emli]','$_POST[date]','$_POST[amt]','$_POST[remli]')");

                }                
            }
        }
        else{
            echo "<script> alert('Something Went Wrong Try Again');</script>";
       
        }


    }

?>
</body>
</html>