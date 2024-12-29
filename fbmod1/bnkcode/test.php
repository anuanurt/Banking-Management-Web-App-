<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="test.php">
        <select name="state" id="">
            <option value="10">bihar</option>
            <option value="8">bengal</option>
         
        </select>
        <input type="submit" value="submit">
    </form>
    <?php 
          $con=mysqli_connect("localhost","root","","pp");
          mysqli_query($con,"insert into st values('$_POST[state]')")
    ?>
</body>
</html>