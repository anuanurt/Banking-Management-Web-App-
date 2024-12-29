/* The provided code is an HTML document with embedded PHP code. Here's a breakdown of what it does: */
<!-- is made for login page  -->
<!DOCTYPE html>
<html lang="english">
<head>
  <meta charset="UTF-8" />
  <title>Login to Facebook||Facebook Login page</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="index.css">
<script>
    function red(){
        window.location.href="sindex.php"
    }
</script>
</head>
<body>
    <form method="POST" action="index.php">
    <div class="parent">
          <div class="loginbox">
            <span class="mobhead">Log in to facebook</span><br>

            <input type="text" name="usn" placeholder="Email or PhoneNumber">

            <input type="text" name="ps" placeholder="Password">
            <input type="submit" value="Login" name="b2">
             
                <a href="">Forget Pasword</a>
          

            <input type="button" value="Create New Account" onclick="red()" >          

        

        </div>
    

        <div class="content">
      
            <span class="fb">facebook</span>
            <span class="fcon">
                connect with friends and the world<br>
                around you on facebook 
            </span>
        </div>
      
            <span  class="mobcon">facebook</span>
       

    </div>
    </form>
    <?php 
        $eml=$_POST['usn'];
        
        $con=mysqli_connect("localhost","root","","bankreg");
        $passwo=mysqli_query($con,"select * from breg where email ='$eml'");
        $pa=mysqli_fetch_assoc($passwo);
        $gp=$pa['password'];  // gp means get password 
        $uip=$_POST['ps'];  // uip user input password 
        // if(isset($_POST['submit'])){
            /* The line `if(array_key_exists('b2', )){` is checking if the key 'b2' exists in the
             superglobal array. In this context, it is used to determine if the form
            submission was triggered by the specific input element with the name 'b2' (which is the
            Login button in this case). If the 'b2' key exists in the  array, it means that
            the form was submitted by clicking the Login button, and the subsequent code block will
            be executed to handle the login logic. */
            if(array_key_exists('b2', $_POST)){
            if($gp==$uip){
      
            setCookie("email1",$_POST['usn'] , time() + (86400 * 365), "/");
          
            
            header("location: profile.php");
        }
        
        else{
            echo "<script> alert('some thing went wrong ');</script>";
           
        }
    }
          mysqli_close($con);
    ?>
</body>
</html>