<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAL DETAILS:</title>
</head>
<body>
  <table border='20px' align="center">
<tr>
<h1 style="COLOR:yellow"><big>CONTINOUS ASSESSMENT</big></H1>
<th>ID</th>
<th>name</th>
<th>PASSWORD</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>UPDATE</th>
<th>DELETE</th>
</tr>

<?php

$host="localhost";
$dbuser="root";
$dbname="musta";
$dbpassword="";
$connection=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

$query='SELECT*FROM sofy ORDER BY id ASC';
$result=mysqli_query($connection,$query);
$i=1;
while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $name=$row['name'];
    $password=$row['password'];
    $email=$row['email'];
    $phone=$row['phone'];

    echo '<tr>';
    echo '<td>'.$i.'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['password'].'</td>';
    echo '<td>'.$row['email'].'</td>';
     echo '<td>'.$row['phone'].'</td>';

     echo '<td><a class = "btn btn-success" href = "update.php?id='.$row['id'].'">update</a></button>';
     echo '</td>';

     echo '<td>';
     echo "<div style='background-color:lightgreen;' onclick = 'futaPost($id)'>delete</button></div>";
     echo '</td>';
     echo '</tr>';
     $i++;
 }
 if(isset($_GET['deletePostId']) && $_GET['deletePostId']){
  $id = $_GET['deletePostId'];
  $delete_query  = "DELETE FROM `sofy` WHERE id = $id";
  $query = mysqli_query($connection,$delete_query);
}
?>

<script>
    function futaPost(id){
        console.log(id);
        var jibu = confirm('Are you sure you want to delete');
        if(jibu){
            var url = '?deletePostId='
            window.location =url+id
        }
    }
</script>
  </table>  
</body>
</html>
<a href="create.php" name="submit" class="btnRegister" style="background: #0099cc; font-size: 18px; border-radius: 10px; color: white">BACK</a></center>
    </center>
