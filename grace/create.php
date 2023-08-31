<?php
$host="localhost";
$dbuser="root";
$dbname="musta";
$dbpassword="";
$connection=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['email'];
    $query="INSERT INTO sofy VALUES('','$name','$password','$email','$phone')";
    mysqli_query($connection,$query);
    header('location:create.php');

      
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOG IN FORM</h1>
    <form action="create.php" method="post">
    <label for="">name</label>
    <input type="text" name="name"><br><br>
    <label for="">password</label>
    <input type="text" name="password"><br><br>
    <label for="">email</label>
    <input type="text" name="email"> <br><br>
    <label for="">phone</label>
    <input type="number<" name="phone"> <br><br>
    <input type="submit" name="submit" VALUE="SEND">
    </form>
</body>
</html><br><br>
<a href="read.php" name="submit" class="btnRegister" style="background: #0099cc; font-size: 18px; border-radius: 10px; color: white">VIEW</a></center>
    </center>