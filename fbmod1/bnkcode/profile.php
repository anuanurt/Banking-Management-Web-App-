/* This PHP code snippet is retrieving user information from a database based on a cookie value, and
then displaying that information on a web page. Here's a breakdown of what the code is doing: */
<?php 

    $eam=$_COOKIE['email1'];
    $con=mysqli_connect("localhost","root","","bankreg");
    $passwo=mysqli_query($con,"select * from breg where email ='$eam'");
    $pa=mysqli_fetch_assoc($passwo);
    $nm=ucfirst($pa['name']);
    $sn=ucfirst($pa['surname']);
    $acno=$pa['accno'];
    $bal=$pa['balance'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ssk.css">
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
</header>
    <div class="maincontianer">
        <div class="navitem">
            <!-- nav items div  -->
            <div class="i1">
              <a href="send.php">  <img src="img/sndmn.png" alt="send money" class="sndmn" height="90px" ></a>
            </div>
            <div class="i2">
               <a href="trans.php"> <img src="img/trn.png" alt="Transaction History" height="110px" ></a>
            </div>
            <div class="i3">
               <a href="deposit.php"> <img src="img/Deposit.png" alt="deposit" height="100px" ></a>
            </div>
            <div class="i4">
                <a href="wd.php"> <img src="img/withdraw.png" alt="withdraw" height="110px" ></a>
            </div>
            <!-- nav items div end  -->
        </div>
        <hr>
        <div class="uother">
            <!-- user other details like email and balance  -->
            <div class="bal" > 
                <p class="binfo" >Balance :- </p><p class="baln" ><?php echo "$bal";?></p>
            </div>
            <div class="eml">
                <p class="eam" >Email is :- <?php echo $eam  ?> </p>
            </div>
            <!-- end of 2nd div -->
        </div>
        <hr>
        <!-- another body div -->
        <div class="bd">
            <!-- enitre body  -->
            <div class="cname">
                <P class="df" >Dutta Finance</P>
            </div>
            <!-- eniter body divs end here  -->
            <div class="fincon">
                <p class="ficon" >
                

Banking services mainly include accepting deposits, <br>lending money, facilitating transactions,<br> and offering various financial products like savings accounts,<br> loans, and credit cards.Banking plays a crucial role<br> in the economy by facilitating the flow of money <br>and enabling economic activities.<br>
                </p>
            </div>
        </div>
    </div>

</body>

</html>