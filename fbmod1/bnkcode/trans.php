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
    <link rel="stylesheet" href="tn.css">
</head>
<body>
  
  <?php 
  $con=mysqli_connect("localhost","root","","bankreg");
  $qre=mysqli_query($con,"select * from trans where sender='$eam' or reciver='$eam' ");
  $rw=mysqli_num_rows($qre);

    echo "
    <div class='t1' >
    
    <table border='1px solid black'>
 
        <tbody>
        <tbody>
        <tr>
        <td  WIDTH=150 ><center>Sender</center></td> 
        <td  WIDTH=70 ><center> Date</center></td> 
        <td  WIDTH=70 ><center> Amount</center></td> 
        <td  WIDTH=120 ><center> Reciver</center></td> 
        </tbody>
        </tbody>
        </div>
    ";
   
    for($i=1;$i<=$rw;$i++){
        $tran=mysqli_fetch_assoc($qre);
    echo "
    <div class='t1'
    <table border='1px solid black'>
    <tbody>
    <tbody>
        
        <tr>
          <td><center> $tran[sender] </center></td>
          <td  WIDTH=70><center> $tran[date]</center> </td>
          <td  WIDTH=80> <center> $tran[amount] </center></td>
          <td><center> $tran[reciver]</center> </td>
        </tr>
        
        </tbody>
        </tbody>
        </div>
    ";
    }

?>
</body>
</html>