 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    
<?php
 $host = "localhost";
 $dbuser = "root";
 $dbname = "musta";
 $dbpassword = "";
 $connection = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
 

 if(isset($_GET['id']) && $_GET['id']!==''){
    $id = $_GET['id'];
    $query = "SELECT * FROM `sofy`WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    while($post = mysqli_fetch_array($result)){
            
        $editId = $post['id'];
        $editname = $post['name'];
        $editpassword = $post['password'];
        $editemail = $post['email'];
        $editphone = $post['phone'];
       
     }
 }
  //Update
  if(isset($_POST['update'])){
       
    $editId = $_POST['editId'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
  
    $update_query = "UPDATE `sofy` SET name='$name',password= '$password',email='$phone',phone='$phone' WHERE id='$editId'";
   
    $result=mysqli_query($connection, $update_query);
        header("Location: read.php"); 
  }



?>
<center>
<h1>THE FORM TO UPDATE</h1>
</center>
<div class ="update" style="
margin-top: 150px;">

<center>
<form action="" method="POST">
                
                
        <Label for="">Name</Label>
                <input type="text" name="name" id="name" required value="<?php echo @$editname;?>">
                <br><br>

                <Label for="">Password</Label>
                <input type="text" name="password" id="password" required value="<?php echo @$editpassword;?>">
                <br><br>
                <Label for="">Email</Label>
                <input type="text" name="email" id="email" required value="<?php echo @$editemail;?>" >
                <br><br>

                <Label for="">Phone</Label>
                <input type="text" name="phone" id="phone" required value="<?php echo @$editphone;?>"  >
                <br><br>
                <input type="hidden" name="editId" value="<?php echo @$editId;?>">
              
                <br><br>
                <input type="submit" name="update" value="Update">
           
                   
                

            </form>
            </center>
                <br>
                  </div>  
</body>
</html>