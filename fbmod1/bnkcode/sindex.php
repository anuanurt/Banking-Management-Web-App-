<!-- is made for sign up page  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up for facebook</title>
    <link rel="stylesheet" href="sindex.css">
</head>
<body>
<form method="POST" action="sindex.php">
    <div class="logo">
        <div class="image">
            <img src="ssf.svg" alt="" height="110rem">
        </div>
    </div>
    <div class="logocontainer">
    <div class="logo2">
        <span class="t1">
             Create a new account
        </span>
        <span class="t2">
            it's quick and easy
            
        </span>
        <div>
            <hr>
        </div>
        
    </div>

</div>
<div class="formcont">
    <div class="formitems">
        <div class="namesurn">
        <input type="text" name="nme" placeholder="First name">
        <input type="text" name="sn" placeholder="Surname"><br>
    </div><br>
    <div class="empas">
        <input type="email" name="emle" placeholder="Mobile numbr or Email address">
        <input type="password" name="passw" placeholder="Password"><br>
    </div><br>
    <div class="dob">
        <p class="dob">Date of Birth?</p><br>
    </div>
    <div class="dv">
        <select name="date" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
                                    
        </select>
        <select name="month" id="">
            <option value="jan">jan</option>
            <option value="feb">feb</option>
            <option value="mar">mar</option>
            <option value="apr">apr</option>
            <option value="may">may</option>
            <option value="jun">jun</option>
            <option value="jul">jul</option>
            <option value="aug">aug</option>
            <option value="sep">sep</option>
            <option value="oct">oct</option>
            <option value="nov">nov</option>
            <option value="dec">dec</option>
        </select>
        <select name="year" id="">
            <option value="above 2000">above 2000</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>

        </select>
    </div>
    <div class="gt">
        <p class="gn">Gender</p>
    /* The `</div>` closing tag in the provided HTML code is closing a `<div>` element. In HTML,
    `<div>` is a block-level element that is used to group and style content. By closing the `<div>`
    element with `</div>`, it signifies the end of a specific division or section of content within
    the HTML structure. This helps in organizing and structuring the content on the webpage. */
    </div>
    <div class="gender">
        <div class="fm">
         Female  <input type="radio" name="fmt" value="Female" id="fma">
        </div>
        <div class="mm">
            Male <input type="radio" name="fmt" value="Male" id="mma">
         </div>
         <div class="tg">
           Others <input type="radio" name="fmt" value="Others" id="tga">
         </div>
    </div>
    <div class="txt">
        <p class="tx">
            People who use our service may have uploaded your contact information to <br>Facebook. Learn more.<br><br>
            By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy.<br> You may receive SMS notifications from us and can opt out at any time.




        </p>
    </div>
    <div class="button">
       <input type="submit" class="b1" name="b1" value="sign up">
        <a href="index.php">Already have an account ?</a>
    </div>

    </div>
    
</div>
</form>
<br><br>


<?php
   if(array_key_exists('b1', $_POST)){
    $cn=mysqli_connect("localhost","root","","bankreg");
    $qry=mysqli_query($cn,"select email from breg where email='$_POST[emle]'");
    if(mysqli_num_rows($qry)>0){
        echo "<script>alert('User Already Exist'); </script>";
    }
    else{
    $accno=rand(5000,500000);
    $bl=50;
            $cn=mysqli_connect("localhost","root","","bankreg");
            mysqli_query($cn,"insert into breg values('$accno','$_POST[nme]','$_POST[sn]','$_POST[emle]','$_POST[passw]','$_POST[date]','$_POST[month]','$_POST[year]','$_POST[fmt]','$bl')");
           mysqli_close($cn);
              
              echo "<script>alert('Account Created Sucessfully'); </script>";
    }
    }
          ?>
           
          
       
      
          
         
          

</body>
</html>